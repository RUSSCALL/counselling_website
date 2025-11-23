<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rev. Dr. Danny Amoako Akuffo - Author & Professional Counselor</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicons/android-chrome-192x192.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">

</head>
<body> 
    <!-- Journey Progress Line -->
    <div class="journey-line"></div>
    <div class="journey-progress" id="journeyProgress">
        <div class="journey-milestone" style="top: 20%;"></div>
        <div class="journey-milestone" style="top: 40%;"></div>
        <div class="journey-milestone" style="top: 60%;"></div>
        <div class="journey-milestone" style="top: 90%;"></div>
        <div class="journey-milestone" style="top: 100%;"></div>
    </div>
    
    <!-- Navigation Module -->
    	@component('components.nav')
		@endcomponent
    
    <!-- Hero Section Module -->
    <section id="home" class="hero-section">
        <!-- Floating Particles -->
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        
    
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Sound Mind Over Depression</h1>
                    <p class="hero-subtitle">Revised Edition - Now Available</p>
                    <p class="hero-description">
                        Discover the path to mental wellness through professional guidance and spiritual wisdom. 
                        A comprehensive guide by Rev. Dr. Danny Amoako Akuffo.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('purchase') }}" class="btn btn-gold">Get Your Copy Today</a>
                        <a href="#book" class="btn btn-outline-gold">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="book-cover-wrapper">
                        <img src="{{ asset('images/new_book_shot.png')}}" alt="Sound Mind Over Depression" class="img-fluid book-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<!-- About Section Module -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-title">About Rev. Dr. Danny A. Akuffo</h2>
                
                <p class="mt-4 reveal-text">
                    <u><b>Rev. Dr. Daniel Amoako Akuffo</b></u> is a <b>professional counsellor, licensed psychotherapist, and founder</b> dedicated to helping people rise above depression through faith and sound psychological principles. He is the author of <u>Sound Mind Over Depression: From Despair to Hope</u>, a book that presents a composite image of faith in God’s Word and psychological intervention toward achieving good mental health.
                </p>
                
                <p class="reveal-text">
                    His approach integrates <b>cognitive, behavioral, interpersonal, social, and environmental</b> factors with biblical principles to help individuals live beyond the grip of depression and experience true mental wellness. Dr. Akuffo’s mission is to empower people to overcome despair, renew their minds, and embrace a purposeful, victorious life.
                </p>

                <p class="reveal-text">
                    He is the <b>Founder and General Overseer</b> of <b>THE WISEWORD CHRISTIAN MINISTRY</b>, the central organization representing <b>THE WISEWORD FOUNDATION</b>, <b>THE WISE GENERATION</b>, and <b>THE WISEWORD CONSULT</b>. 
                    A prolific lecturer and international speaker, he has impacted audiences in the <b>U.S.A., the U.K., and Ghana</b> through his teachings, seminars, and radio programs.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="author-image-container">
                    <img src="{{ asset('images/Mr_Danny_hands_folded.png')}}" 
                            alt="Rev. Dr. Daniel Amoako Akuffo" 
                            class="author-image">
                    <div class="author-credentials">
                        <p><i class="fas fa-certificate"></i> <b>Licensed Psychotherapist</b> (U.K.) – EMFEC Group, <b>UKDLP Professional Qualification</b></p>
                        <p><i class="fas fa-user-md"></i> <b>Health and Nutrition Counsellor</b></p>
                        <p><i class="fas fa-graduation-cap"></i> <b>B.A. in Psychology and Religion</b> – University of Ghana (Legon)</p>
                        <p><i class="fas fa-graduation-cap"></i> <b>M.A. in Christian Entrepreneurship</b> – Christian Leadership University (U.S.A.)</p>
                        <p><i class="fas fa-graduation-cap"></i> <b>Doctorate in Christian Counselling</b> – American Bible University (U.S.A.)</p>
                        <p><i class="fas fa-bible"></i> <b>Diploma in Theology</b> – Bible Ministry College International (U.K.)</p>
                        <p><i class="fas fa-users"></i> Member, <b>Ghana Psychology Council</b></p>
                        <p><i class="fas fa-users"></i> Member, <b>Ghana National Association of Certified Counsellors</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <h4 class="section-subtitle">Lecturer:</h4>
                <ul>
                    <li>Christian Leadership University – U.S.A. (<b>Ghana Chapter</b>)</li>
                    <li>American Bible University (<b>Ghana Chapter</b>)</li>
                    <li>Green Pack Counselling Consult and Training School (<b>Ghana</b>)</li>
                </ul>
                <p class="mt-3">
                    Dr. Akuffo is a versatile and prolific orator who has hosted and spoken on numerous <b>radio programs, seminars, and conferences</b> in Ghana and abroad, championing mental health, personal growth, and faith-based counselling.
                </p>
            </div>
        </div>
    </div>
</section>

    
    <!-- Book Details Module -->
    <section id="book" class="book-details">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">About the Book</h2>
                <p class="lead mt-3">A comprehensive guide to overcoming depression through professional counseling and spiritual wisdom</p>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="book-feature">
                        <i class="fas fa-brain"></i>
                        <h4>Mental Wellness</h4>
                        <p>Evidence-based strategies for maintaining a sound mind and emotional balance</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="book-feature">
                        <i class="fas fa-lightbulb"></i>
                        <h4>Practical Solutions</h4>
                        <p>Real-world techniques and exercises to combat depression effectively</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="book-feature">
                        <i class="fas fa-heart"></i>
                        <h4>Holistic Approach</h4>
                        <p>Integrating spiritual wisdom with professional psychological insights</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('purchase') }}" class="btn btn-gold btn-lg">Purchase Your Copy</a>
            </div>
        </div>
    </section>
    
    <!-- Events Section Module -->
    <section id="events" class="events-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white">Upcoming Events</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-card">
                        <span class="event-date">October 19, 2025</span>
                        <h4 class="mt-3">Book Launch Event</h4>
                        <p>Join us for the official launch of "Sound Mind Over Depression" - Revised Edition</p>
                        <p><i class="fas fa-map-marker-alt"></i> Main Auditorium, Conference Center</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-card">
                        <span class="event-date">November 2025</span>
                        <h4 class="mt-3">Mental Health Workshop</h4>
                        <p>A comprehensive workshop on depression management and mental wellness strategies</p>
                        <p><i class="fas fa-map-marker-alt"></i> Details Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Testimonials Carousel Module -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">What Readers Say</h2>
            </div>

            <div class="testimonials-carousel">
                <div class="testimonial-card active" data-index="0">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"This book transformed my understanding of mental health and provided practical tools that truly work."</p>
                    <strong>- Reader Testimonial</strong>
                </div>
                <div class="testimonial-card" data-index="1">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"Dr. Akuffo's approach combines professional expertise with genuine compassion. Highly recommended!"</p>
                    <strong>- Mental Health Professional</strong>
                </div>
                <div class="testimonial-card" data-index="2">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"A must-read for anyone dealing with depression or supporting someone who is."</p>
                    <strong>- Book Review</strong>
                </div>
                <div class="testimonial-card" data-index="3">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"The combination of biblical wisdom and psychological science makes this book truly unique and powerful."</p>
                    <strong>- Pastoral Counselor</strong>
                </div>
                <div class="testimonial-card" data-index="4">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"Rev. Dr. Akuffo's insights helped me navigate my darkest days. This book is a beacon of hope."</p>
                    <strong>- Recovery Journey Participant</strong>
                </div>
            </div>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <span class="indicator-dot active" data-slide="0"></span>
                <span class="indicator-dot" data-slide="1"></span>
                <span class="indicator-dot" data-slide="2"></span>
                <span class="indicator-dot" data-slide="3"></span>
                <span class="indicator-dot" data-slide="4"></span>
            </div>
        </div>
    </section>
    
    <!-- Booking Section Module -->
    <section id="Counselling" class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Book Your Counselling Session</h2>
                <p class="lead">Take the first step towards mental wellness</p>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h4 class="mb-4">Initial Consultation Information</h4>
                        <div class="session-details">
                            <p class="mb-3">
                                <i class="fas fa-clock"></i>
                                <strong>Duration:</strong> 60 minutes
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-video"></i>
                                <strong>Format:</strong> Online Session
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>Price:</strong> $150.00
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-user-md"></i>
                                <strong>Counselor:</strong> Rev. Dr. Danny A. Akuffo
                            </p>
                        </div>

                        <div class="mt-4 p-3 bg-light rounded info-expect-box">
                            <h5 class="mb-3"><i class="fas fa-info-circle me-2"></i>What to Expect</h5>
                            <ul class="expect-list">
                                <li>Confidential one-on-one session</li>
                                <li>Professional guidance & support</li>
                                <li>Evidence-based techniques</li>
                                <li>Personalized wellness plan</li>
                            </ul>
                        </div>

                        <h5 class="mt-4 mb-3">Contact Us</h5>
                        <p class="mb-2">
                            <i class="fas fa-envelope"></i>
                            wisewordconsult@gmail.com
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone"></i>
                            +1 (202) 819 - 5975
                        </p>

                        <h5 class="mt-4 mb-3">Non-US Contact</h5>
                                                <p class="mb-2">
                            <i class="fa-brands fa-whatsapp"></i>
                            wisewordconsult@gmail.com
                        </p>

                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Payment/Coupon Form -->
                    <div class="contact-form" id="paymentSection">
                        <h4 class="mb-4">Payment & Booking</h4>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Step 1:</strong> Enter your coupon code or proceed with  payment, then book your session.
                        </div>

                        <form id="bookingForm" method="POST" action="{{route('booking.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="clientName" name="client-name" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="clientEmail" name="client-email" placeholder="john@example.com" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="clientPhone" name="client-Phone" placeholder="+1 (555) 123-4567" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Coupon Code (Optional)</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="couponCode" name="coupon_code" placeholder="Enter coupon code">
                                    <button class="btn btn-outline-secondary" type="button" id="applyCouponBtn">
                                        <i class="fas fa-check me-1"></i> Apply
                                    </button>
                                </div>
                                <small class="text-muted">Have a coupon? Apply it to reduce or eliminate the session fee.</small>
                            </div>

                            <div id="couponMessage" class="alert" style="display: none;"></div>

                            <div class="pricing-summary p-3 mb-4 bg-light rounded">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Session Fee:</span>
                                    <span class="fw-bold">$150.00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2" id="discountRow" style="display: none !important;">
                                    <span class="text-success">Discount:</span>
                                    <span class="text-success fw-bold" id="discountAmount">-$0.00</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span class="h5 mb-0">Total Amount:</span>
                                    <span class="h5 mb-0 text-primary" id="totalAmount">$150.00</span>
                                </div>
                            </div>

                            <!-- Hidden fields to track pricing -->
                            <input type="hidden" name="final_price" id="finalPrice" value="150.00">
                            <input type="hidden" name="applied_coupon" id="appliedCoupon" value="">

                            <!-- Stripe Payment Element will be inserted here -->
                            <div id="cardElementWrapper">
                                <label class="form-label">Enter Card Information</label>
                                <input type="hidden" name="stripeToken" id="stripe-token">
                                <div id="card-element" class="form-control mb-4"></div>
                            </div>

                            <div id="paymentButtons">
                                <button type="button" class="btn btn-gold w-100 mb-2" id="proceedPaymentBtn">
                                    <i class="fas fa-credit-card me-2"></i> Proceed with  Payment
                                </button>
                                <p class="text-center small text-muted mb-0">Secure payment processing</p>
                            </div>
                        </form>
                    </div>

                    <!-- Calendly Booking (Hidden Initially) -->
                    <div class="contact-form" id="calendlySection" style="display: none;">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="mb-0">Schedule Your Session</h4>
                            <button class="btn btn-sm btn-outline-secondary" id="backToPaymentBtn">
                                <i class="fas fa-arrow-left me-1"></i> Back
                            </button>
                        </div>

                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong>Payment Confirmed!</strong> Please select your preferred date and time below.
                        </div>

                        <div class="calendly-container">
                            <!-- Calendly inline widget begin -->
                            <div class="calendly-inline-widget" data-url="https://calendly.com/wisewordconsults/30min?primary_color=2c3e50" style="min-width:320px;height:700px;"></div>
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                            <!-- Calendly inline widget end -->
                        </div>

                        <p class="text-center mt-3 small text-muted">
                            You will receive a confirmation email with the meeting details.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Module -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Rev. Dr. Danny Amoako Akuffo</h5>
                    <p>Professional Counselor | Licensed Psychotherapist | Author | Reverend Minister</p>
                </div>
                <div class="col-md-6 text-md-end">
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=61582314766391" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter" target="_blank"></i></a>
                            <a href="https://www.youtube.com/@DannyAmoakoAkuffo" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/dannyakuffoministries/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    <p class="mb-2">© {{ now()->year }} Danny Amoako Akuffo. All rights reserved.</p>
                    <p>Designed by - <a href="https://www.gscalabletech.com/" target="_blank" > <img class="mx-2" src="{{asset('images/GScalable_Favicon.jpg')}}" >Global Scalable Technologies</a></p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Calendly CSS -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <!-- stripe.js for payment processing -->
    <script src="https://js.stripe.com/clover/stripe.js"></script>

    <script>
        var stripe = Stripe('{{ env("STRIPE_KEY") }}');

        var elements = stripe.elements();

        var cardElement = elements.create('card');

        cardElement.mount('#card-element');

        function createToken() {
            stripe.createToken(cardElement).then(function(result) {
                console.log(result);
                if (result.token){
                    document.getElementById("stripe-token").value = result.token.id;
                    
                    document.getElementById("bookingForm").submit();


                } else {
                    alert(result.error.message);
                }
            });
        }
    </script>


    <!-- Enhanced JavaScript -->
    <script>
        
        // Smooth Scrolling with offset for fixed navbar
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80; // Height of fixed navbar
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Journey Progress Line
        function updateJourneyProgress() {
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight - windowHeight;
            const scrolled = window.scrollY;
            const progress = (scrolled / documentHeight) * 100;
            
            document.getElementById('journeyProgress').style.height = progress + '%';
            
            // Activate milestones
            const milestones = document.querySelectorAll('.journey-milestone');
            milestones.forEach((milestone, index) => {
                const milestoneProgress = (index + 1) * 20;
                if (progress >= milestoneProgress) {
                    milestone.classList.add('active');
                } else {
                    milestone.classList.remove('active');
                }
            });
        }
        
        // Scroll-triggered animations
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.section-title, .credentials-badge, .book-feature, .testimonial-card, .reveal-text');
            
            reveals.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('reveal');
                }
            });
        }
        
        // Navbar scroll effect
        function updateNavbar() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255,255,255,0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
                navbar.style.padding = '0.5rem 0';
            } else {
                navbar.style.backgroundColor = '#ffffff';
                navbar.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
                navbar.style.padding = '1rem 0';
            }
        }
        
        // Parallax effect for hero section - Enhanced book effect
        // Parallax effect for hero section
        function parallaxScroll() {
            const scrolled = window.scrollY;
            const heroSection = document.querySelector('.hero-section');
            const bookCover = document.querySelector('.book-cover');
            const brainAnimation = document.querySelector('.brain-animation');
            
            // if (heroSection) {
            //     heroSection.style.transform = `translateY(${scrolled * 0.5}px)`;
            // }
            
            // if (bookCover) {
            //     bookCover.style.transform = `translateY(${scrolled * -0.2}px) scale(${1 + scrolled * 0.0001})`;
            // }
            
            // if (brainAnimation) {
            //     brainAnimation.style.transform = `translateY(-50%) rotate(${scrolled * 0.1}deg)`;
            // }
        }
        
        // Active section highlighting in navigation
        function highlightActiveSection() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        }
        
        // Event listeners
        window.addEventListener('scroll', () => {
            updateJourneyProgress();
            revealOnScroll();
            updateNavbar();
            parallaxScroll();
            highlightActiveSection();
        });
        
        // Initial calls
        revealOnScroll();
        updateJourneyProgress();

        // Close navbar when clicking outside
        document.addEventListener('click', function(event) {
            const navbar = document.querySelector('.navbar-custom');
            const navbarCollapse = document.getElementById('navbarNav');
            const navbarToggler = document.querySelector('.navbar-toggler');

            // Check if the menu is open
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                // Check if click is outside the navbar
                if (!navbar.contains(event.target)) {
                    // Close the menu using Bootstrap's Collapse API
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            }
        });

        // Add mouse move effect to particles
        document.addEventListener('mousemove', (e) => {
            const particles = document.querySelectorAll('.particle');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            particles.forEach((particle, index) => {
                const speed = (index + 1) * 2;
                particle.style.transform = `translateX(${x * speed}px) translateY(${y * speed}px)`;
            });
        });
        
        // Booking System Logic
        let currentPrice = 150.00;
        let discountAmount = 0;
        let couponApplied = false;
        let appliedCouponCode = '';
        let hasActiveBookingSession = false;
        let sessionData = null;

        // Get CSRF Token
        function getCsrfToken() {
            return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                   || document.querySelector('input[name="_token"]')?.value;
        }

        // Check for active booking session on page load
        function checkActiveBookingSession() {
            fetch('{{ route("booking.check") }}', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.has_active_session) {
                    hasActiveBookingSession = true;
                    sessionData = data;

                    // Pre-fill form with session data
                    document.getElementById('clientName').value = data.client_name || '';
                    document.getElementById('clientEmail').value = data.client_email || '';
                    document.getElementById('clientPhone').value = data.client_phone || '';

                    // Disable form fields
                    document.getElementById('clientName').disabled = true;
                    document.getElementById('clientEmail').disabled = true;
                    document.getElementById('clientPhone').disabled = true;

                    // Update pricing display
                    currentPrice = parseFloat(data.payment_amount);
                    document.getElementById('finalPrice').value = currentPrice.toFixed(2);
                    document.getElementById('totalAmount').textContent = '$' + currentPrice.toFixed(2);

                    // Hide coupon section
                    document.getElementById('couponCode').disabled = true;
                    document.getElementById('applyCouponBtn').disabled = true;

                    // Hide card element
                    const cardWrapper = document.getElementById('cardElementWrapper');
                    if (cardWrapper) {
                        cardWrapper.style.display = 'none';
                    }

                    // Update proceed button
                    const proceedBtn = document.getElementById('proceedPaymentBtn');
                    proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Scheduling';
                    proceedBtn.onclick = function() {
                        showCalendlySection();
                    };

                    // Show info message
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-info mb-3';
                    alertDiv.innerHTML = `
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Active Session Found!</strong> You have already completed payment.
                        Please proceed to schedule your session.
                        <small>(Session expires in ${data.time_remaining_minutes} minutes)</small>
                    `;

                    const paymentSection = document.getElementById('paymentSection');
                    const firstAlert = paymentSection.querySelector('.alert');
                    if (firstAlert) {
                        firstAlert.parentNode.insertBefore(alertDiv, firstAlert);
                    }
                }
            })
            .catch(error => {
                console.error('Error checking session:', error);
            });
        }

        // Call on page load
        checkActiveBookingSession();

        // Apply Coupon - Server-side validation via AJAX
        document.getElementById('applyCouponBtn').addEventListener('click', function() {
            const couponCode = document.getElementById('couponCode').value.trim();
            const couponMessage = document.getElementById('couponMessage');
            const applyBtn = this;

            if (!couponCode) {
                showCouponMessage('Please enter a coupon code.', 'warning');
                return;
            }

            // Disable button during request
            applyBtn.disabled = true;
            applyBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Verifying...';

            // AJAX request to verify coupon
            fetch('{{ route("coupon.verify") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    coupon_code: couponCode
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    discountAmount = data.discount_amount;
                    currentPrice = data.final_price;
                    couponApplied = true;
                    appliedCouponCode = data.coupon_code;

                    // Update hidden fields
                    document.getElementById('finalPrice').value = currentPrice.toFixed(2);
                    document.getElementById('appliedCoupon').value = appliedCouponCode;

                    // Update UI
                    document.getElementById('discountRow').style.display = 'flex';
                    document.getElementById('discountAmount').textContent = '-$' + discountAmount.toFixed(2);
                    document.getElementById('totalAmount').textContent = '$' + currentPrice.toFixed(2);

                    // Hide/Show card element based on price
                    const cardWrapper = document.getElementById('cardElementWrapper');
                    const stripeTokenInput = document.getElementById('stripe-token');

                    if (currentPrice === 0) {
                        cardWrapper.style.display = 'none';
                        stripeTokenInput.removeAttribute('required');
                        document.getElementById('proceedPaymentBtn').innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Scheduling';
                    } else {
                        document.getElementById('proceedPaymentBtn').innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed with  Payment';
                    }

                    showCouponMessage(data.message, 'success');
                    document.getElementById('couponCode').disabled = true;
                    applyBtn.disabled = true;
                    applyBtn.innerHTML = '<i class="fas fa-check me-1"></i> Applied';
                } else {
                    showCouponMessage(data.message, 'danger');
                    applyBtn.disabled = false;
                    applyBtn.innerHTML = '<i class="fas fa-check me-1"></i> Apply';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showCouponMessage('Error verifying coupon. Please try again.', 'danger');
                applyBtn.disabled = false;
                applyBtn.innerHTML = '<i class="fas fa-check me-1"></i> Apply';
            });
        });

        function showCouponMessage(message, type) {
            const couponMessage = document.getElementById('couponMessage');
            couponMessage.className = 'alert alert-' + type;
            couponMessage.textContent = message;
            couponMessage.style.display = 'block';

            setTimeout(() => {
                if (type !== 'success') {
                    couponMessage.style.display = 'none';
                }
            }, 5000);
        }

        // Proceed with  Payment/Booking
        document.getElementById('proceedPaymentBtn').addEventListener('click', function() {
            // If there's an active session, just show Calendly
            if (hasActiveBookingSession) {
                showCalendlySection();
                return;
            }

            const name = document.getElementById('clientName').value;
            const email = document.getElementById('clientEmail').value;
            const phone = document.getElementById('clientPhone').value;
            const proceedBtn = this;

            if (!name || !email || !phone) {
                alert('Please fill in all required fields.');
                return;
            }

            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Disable button
            proceedBtn.disabled = true;

            if (currentPrice === 0) {
                // Free session with coupon - submit without payment token
                proceedBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing...';

                // Clear any existing stripe token (not needed for free sessions)
                document.getElementById('stripe-token').value = '';

                // Submit the booking directly
                submitBooking();
            } else {
                // Paid session - create Stripe token first
                proceedBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing Payment...';
                createStripeToken();
            }
        });

        function createStripeToken() {
            stripe.createToken(cardElement).then(function(result) {
                if (result.token) {
                    document.getElementById('stripe-token').value = result.token.id;
                    submitBooking();
                } else {
                    alert('Payment Error: ' + result.error.message);
                    const proceedBtn = document.getElementById('proceedPaymentBtn');
                    proceedBtn.disabled = false;
                    if (currentPrice === 0) {
                        proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Scheduling';
                    } else {
                        proceedBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed with  Payment';
                    }
                }
            });
        }

        function submitBooking() {
            const formData = new FormData(document.getElementById('bookingForm'));

            fetch('{{ route("booking.store") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Mark as having active session after successful payment
                    hasActiveBookingSession = true;

                    // Disable form fields
                    document.getElementById('clientName').disabled = true;
                    document.getElementById('clientEmail').disabled = true;
                    document.getElementById('clientPhone').disabled = true;
                    document.getElementById('couponCode').disabled = true;
                    document.getElementById('applyCouponBtn').disabled = true;

                    showCalendlySection();
                } else {
                    alert('Booking Error: ' + data.message);
                    const proceedBtn = document.getElementById('proceedPaymentBtn');
                    proceedBtn.disabled = false;
                    if (currentPrice === 0) {
                        proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Scheduling';
                    } else {
                        proceedBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed with  Payment';
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                const proceedBtn = document.getElementById('proceedPaymentBtn');
                proceedBtn.disabled = false;
                if (currentPrice === 0) {
                    proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Scheduling';
                } else {
                    proceedBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed with  Payment';
                }
            });
        }

        function showCalendlySection() {
            document.getElementById('paymentSection').style.display = 'none';
            document.getElementById('calendlySection').style.display = 'block';

            // Load Calendly script if not already loaded
            if (!window.Calendly) {
                const script = document.createElement('script');
                script.src = 'https://assets.calendly.com/assets/external/widget.js';
                script.async = true;
                document.body.appendChild(script);
            }
        }

        // Back to Payment Button - Updated to handle active sessions
        document.getElementById('backToPaymentBtn').addEventListener('click', function() {
            document.getElementById('calendlySection').style.display = 'none';
            document.getElementById('paymentSection').style.display = 'block';

            // If user has active session, ensure button shows "Proceed to Scheduling"
            if (hasActiveBookingSession) {
                const proceedBtn = document.getElementById('proceedPaymentBtn');
                proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Scheduling';
                proceedBtn.disabled = false;
            }
        });


        // Auto-pulse Order Now button every 5 seconds
        function pulseOrderButton() {
            const orderButton = document.querySelector('.hero-buttons .btn-gold');
            if (orderButton) {
                orderButton.style.animation = 'none'; // Reset
                setTimeout(() => {
                    orderButton.style.animation = 'pulseGlowCTA 2s ease-in-out'; // Restart pulse once
                }, 10);
            }
        }

        setInterval(pulseOrderButton, 2000);

        // Testimonials Carousel Auto-Rotate
        (function() {
            const testimonialCards = document.querySelectorAll('.testimonial-card');
            const indicators = document.querySelectorAll('.indicator-dot');
            let currentSlide = 0;
            const totalSlides = testimonialCards.length;
            const autoPlayInterval = 5000; // 5 seconds
            let autoPlayTimer;

            function goToSlide(index) {
                // Remove active class from all cards and indicators
                testimonialCards.forEach(card => {
                    card.classList.remove('active', 'prev');
                });
                indicators.forEach(dot => {
                    dot.classList.remove('active');
                });

                // Add prev class to current slide for exit animation
                if (testimonialCards[currentSlide]) {
                    testimonialCards[currentSlide].classList.add('prev');
                }

                // Update current slide
                currentSlide = index;

                // Add active class to new slide and indicator
                if (testimonialCards[currentSlide]) {
                    testimonialCards[currentSlide].classList.add('active');
                }
                if (indicators[currentSlide]) {
                    indicators[currentSlide].classList.add('active');
                }
            }

            function nextSlide() {
                const next = (currentSlide + 1) % totalSlides;
                goToSlide(next);
            }

            function previousSlide() {
                const prev = (currentSlide - 1 + totalSlides) % totalSlides;
                goToSlide(prev);
            }

            // Auto-play functionality
            function startAutoPlay() {
                autoPlayTimer = setInterval(nextSlide, autoPlayInterval);
            }

            function stopAutoPlay() {
                clearInterval(autoPlayTimer);
            }

            function resetAutoPlay() {
                stopAutoPlay();
                startAutoPlay();
            }

            // Click handlers for indicators
            indicators.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    resetAutoPlay();
                });
            });

            // Pause on hover
            const carouselContainer = document.querySelector('.testimonials-carousel');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', stopAutoPlay);
                carouselContainer.addEventListener('mouseleave', startAutoPlay);
            }

            // Start auto-play
            startAutoPlay();

            // Touch support for mobile swipe
            let touchStartX = 0;
            let touchEndX = 0;

            if (carouselContainer) {
                carouselContainer.addEventListener('touchstart', (e) => {
                    touchStartX = e.changedTouches[0].screenX;
                    stopAutoPlay();
                }, { passive: true });

                carouselContainer.addEventListener('touchend', (e) => {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                    resetAutoPlay();
                }, { passive: true });
            }

            function handleSwipe() {
                const swipeThreshold = 50;
                if (touchEndX < touchStartX - swipeThreshold) {
                    nextSlide();
                }
                if (touchEndX > touchStartX + swipeThreshold) {
                    previousSlide();
                }
            }
        })();
    </script>
</body>
</html>
                        