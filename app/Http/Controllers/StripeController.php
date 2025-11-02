<?php

namespace App\Http\Controllers;

use Stripe\StripeClient;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index()
    {
        return view('stripe');
    }

    public function store(Request $request)
    {
        // Handle the counseling booking logic here
        $stripe = new StripeClient(env("STRIPE_SECRET"));
        $charge = $stripe->charges->create([
        'amount' => 1099 * 100,
        'currency' => 'usd',
        'source' => $request->stripeToken,
        'description' => "Counselling session purchase payment from DannyAkuffo.com"
        ]);

       dd( $charge);

        return redirect()->route('welcome')->with('success', 'Booking successful!');
    }
}
