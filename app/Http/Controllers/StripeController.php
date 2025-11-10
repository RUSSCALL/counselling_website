<?php

namespace App\Http\Controllers;

use Stripe\StripeClient;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    private $basePrice = 150.00;

    public function index()
    {
        return view('stripe');
    }

    public function verifyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string'
        ]);

        $couponCode = strtoupper(trim($request->coupon_code));
        $validCoupons = config('coupons');

        if (isset($validCoupons[$couponCode])) {
            $coupon = $validCoupons[$couponCode];
            $discountAmount = 0;

            if ($coupon['type'] === 'fixed') {
                $discountAmount = $coupon['discount'];
            } elseif ($coupon['type'] === 'percentage') {
                $discountAmount = ($this->basePrice * $coupon['discount']) / 100;
            }

            $finalPrice = max(0, $this->basePrice - $discountAmount);

            return response()->json([
                'success' => true,
                'message' => $finalPrice === 0
                    ? 'Coupon applied successfully! Session is now FREE.'
                    : 'Coupon applied! You saved $' . number_format($discountAmount, 2),
                'discount_amount' => $discountAmount,
                'final_price' => $finalPrice,
                'coupon_code' => $couponCode
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid coupon code. Please try again.'
        ], 422);
    }

    public function store(Request $request)
    {
        $finalPrice = floatval($request->final_price);

        $request->validate([
            'client-name' => 'required|string|max:255',
            'client-email' => 'required|email',
            'client-Phone' => 'required|string',
            'stripeToken' => $finalPrice > 0 ? 'required' : 'nullable',
            'final_price' => 'required|numeric',
            'coupon_code' => 'nullable|string'
        ]);

        // If the final price is greater than 0, process the payment
        if ($finalPrice > 0) {
            try {
                $stripe = new StripeClient(env("STRIPE_SECRET"));
                $charge = $stripe->charges->create([
                    'amount' => $finalPrice * 100, // Convert to cents
                    'currency' => 'usd',
                    'source' => $request->stripeToken,
                    'description' => "Counselling session booking from " . $request->input('client-name'),
                    'metadata' => [
                        'client_name' => $request->input('client-name'),
                        'client_email' => $request->input('client-email'),
                        'client_phone' => $request->input('client-Phone'),
                        'coupon_code' => $request->input('coupon_code', 'N/A')
                    ]
                ]);

                // Store booking information in session or database with 1 hour expiry
                session([
                    'booking_success' => true,
                    'client_name' => $request->input('client-name'),
                    'client_email' => $request->input('client-email'),
                    'client_phone' => $request->input('client-Phone'),
                    'payment_amount' => $finalPrice,
                    'charge_id' => $charge->id,
                    'payment_timestamp' => now()->timestamp,
                    'payment_expires_at' => now()->addHour()->timestamp
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Payment successful! Please schedule your session.',
                    'charge_id' => $charge->id
                ]);

            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment failed: ' . $e->getMessage()
                ], 422);
            }
        } else {
            // Free session with valid coupon - also track with 1 hour expiry
            session([
                'booking_success' => true,
                'client_name' => $request->input('client-name'),
                'client_email' => $request->input('client-email'),
                'client_phone' => $request->input('client-Phone'),
                'payment_amount' => 0,
                'coupon_code' => $request->input('coupon_code'),
                'payment_timestamp' => now()->timestamp,
                'payment_expires_at' => now()->addHour()->timestamp
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Coupon applied! Please schedule your free session.'
            ]);
        }
    }

    public function checkBookingSession(Request $request)
    {
        $bookingSuccess = session('booking_success', false);
        $expiresAt = session('payment_expires_at', 0);
        $currentTime = now()->timestamp;

        // Check if session exists and hasn't expired
        if ($bookingSuccess && $expiresAt > $currentTime) {
            $timeRemaining = $expiresAt - $currentTime;
            $minutesRemaining = ceil($timeRemaining / 60);

            return response()->json([
                'has_active_session' => true,
                'client_name' => session('client_name'),
                'client_email' => session('client_email'),
                'client_phone' => session('client_phone'),
                'payment_amount' => session('payment_amount'),
                'time_remaining_minutes' => $minutesRemaining,
                'message' => 'You have an active booking session. Please complete your scheduling.'
            ]);
        } else {
            // Session expired or doesn't exist, clear it
            if ($bookingSuccess) {
                session()->forget(['booking_success', 'client_name', 'client_email', 'client_phone',
                                   'payment_amount', 'charge_id', 'coupon_code',
                                   'payment_timestamp', 'payment_expires_at']);
            }

            return response()->json([
                'has_active_session' => false,
                'message' => 'No active booking session found.'
            ]);
        }
    }

    public function clearBookingSession(Request $request)
    {
        session()->forget(['booking_success', 'client_name', 'client_email', 'client_phone',
                           'payment_amount', 'charge_id', 'coupon_code',
                           'payment_timestamp', 'payment_expires_at']);

        return response()->json([
            'success' => true,
            'message' => 'Booking session cleared successfully.'
        ]);
    }
}
