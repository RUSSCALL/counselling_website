<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase - Sound Mind Over Depression | Rev. Dr. Danny Amoako Akuffo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-navy: #1e3a5f;
            --accent-gold: #d4af37;
            --text-dark: #2c3e50;
            --bg-light: #f8f9fa;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: 80px;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        /* Navigation Module - Same as main site */
        .navbar-custom {
            background-color: var(--white);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-custom .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-navy);
            font-weight: 700;
            font-size: 1.6rem;
            letter-spacing: 0.5px;
            margin: 0;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }

        .navbar-toggler-icon {
            width: 25px;
            height: 25px;
        }

        .navbar-custom .nav-link {
            color: var(--primary-navy);
            margin: 0 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .navbar-custom .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--accent-gold);
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .navbar-custom .nav-link:hover::after {
            width: 80%;
        }

        .navbar-custom .nav-link:hover {
            color: var(--accent-gold);
        }

        /* Purchase Page Specific Styles */
        .purchase-hero {
            background: linear-gradient(135deg, var(--primary-navy) 0%, #2c5282 100%);
            color: var(--white);
            padding: 60px 0 40px;
            text-align: center;
        }

        .purchase-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .purchase-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.2s backwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .purchase-section {
            padding: 80px 0;
            background-color: var(--bg-light);
        }

        .purchase-section .row {
            row-gap: 0;
        }

        .book-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 100%;
        }

        .book-image {
            max-width: 100%;
            width: auto;
            max-height: 600px;
            height: auto;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            border-radius: 8px;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .book-image:hover {
            transform: scale(1.05);
        }

        .book-info {
            text-align: center;
            margin-top: 20px;
        }

        .book-info h3 {
            color: var(--primary-navy);
            margin-bottom: 15px;
        }

        .book-price {
            font-size: 2rem;
            color: var(--accent-gold);
            font-weight: 700;
            margin: 20px 0;
        }

        .purchase-column {
            padding: 40px;
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 100%;
        }

        .purchase-column h2 {
            color: var(--primary-navy);
            margin-bottom: 30px;
            text-align: center;
        }

        .retailer-card {
            background-color: var(--bg-light);
            border: 2px solid transparent;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .retailer-card:hover {
            border-color: var(--accent-gold);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(212,175,55,0.2);
        }

        .retailer-icon {
            font-size: 3rem;
            color: var(--primary-navy);
            min-width: 60px;
            text-align: center;
        }

        .retailer-info {
            flex: 1;
        }

        .retailer-info h4 {
            color: var(--primary-navy);
            margin-bottom: 8px;
            font-size: 1.3rem;
        }

        .retailer-info p {
            margin: 0;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .btn-purchase {
            background-color: var(--accent-gold);
            color: var(--primary-navy);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .btn-purchase:hover {
            background-color: var(--primary-navy);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(30,58,95,0.3);
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .features-list li {
            padding: 12px 0;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .features-list li:last-child {
            border-bottom: none;
        }

        .features-list i {
            color: var(--accent-gold);
            font-size: 1.2rem;
        }

        .info-box {
            background: linear-gradient(135deg, var(--primary-navy) 0%, #2c5282 100%);
            color: var(--white);
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
            text-align: center;
        }

        .info-box h4 {
            color: var(--accent-gold);
            margin-bottom: 15px;
        }

        .info-box p {
            margin: 0;
            font-size: 0.95rem;
        }

        /* Footer Module - Same as main site */
        .footer {
            background-color: var(--primary-navy);
            color: var(--white);
            padding: 40px 0 20px;
            margin-top: 80px;
        }

        .social-links a {
            color: var(--white);
            font-size: 1.5rem;
            margin: 0 15px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .social-links a:hover {
            color: var(--accent-gold);
            transform: translateY(-5px) scale(1.2);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .navbar-custom .navbar-brand {
                font-size: 1.3rem;
            }

            .navbar-toggler {
                margin-left: 0;
            }

            .navbar-collapse {
                margin-top: 1rem;
            }

            .purchase-hero h1 {
                font-size: 2.5rem;
            }

            .book-column {
                margin-bottom: 40px;
            }

            .purchase-column {
                margin-bottom: 30px;
            }

            .retailer-card {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .retailer-icon {
                margin-bottom: 15px;
            }

            .retailer-info h4 {
                font-size: 1.2rem;
                margin-bottom: 10px;
            }

            .retailer-info p {
                font-size: 0.9rem;
                margin-bottom: 10px;
            }

            .btn-purchase {
                width: 100%;
                margin-top: 15px;
                padding: 12px 20px;
                font-size: 0.95rem;
            }

            .purchase-column {
                padding: 25px;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .navbar-custom {
                padding: 0.75rem 0;
            }

            .navbar-custom .navbar-brand {
                font-size: 1.2rem;
                padding-right: 10px;
            }

            .navbar-custom .navbar-nav {
                padding: 15px 0;
            }

            .navbar-custom .nav-link {
                margin: 0;
                padding: 10px 15px;
            }

            .purchase-hero {
                padding: 40px 0 30px;
            }

            .purchase-hero h1 {
                font-size: 1.8rem;
                padding: 0 15px;
            }

            .purchase-hero p {
                font-size: 1rem;
            }

            .book-column {
                padding: 20px;
                margin-bottom: 30px;
            }

            .purchase-column {
                padding: 25px;
            }

            .book-image {
                max-height: 350px;
            }

            .book-price {
                font-size: 1.75rem;
            }

            .retailer-card {
                padding: 18px;
                margin-bottom: 15px;
            }

            .retailer-icon {
                font-size: 2.2rem;
                margin-bottom: 12px;
            }

            .retailer-info h4 {
                font-size: 1.1rem;
            }

            .retailer-info p {
                font-size: 0.85rem;
            }

            .purchase-section {
                padding: 40px 0;
            }

            .purchase-column h2 {
                font-size: 1.75rem;
                margin-bottom: 20px;
            }

            .purchase-column > p {
                font-size: 0.9rem;
                margin-bottom: 25px;
            }

            .info-box {
                padding: 20px;
                margin-top: 20px;
            }

            .info-box h4 {
                font-size: 1.1rem;
            }

            .info-box p {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .navbar-custom .navbar-brand {
                font-size: 1.1rem;
                max-width: 75%;
            }

            .book-column {
                margin-bottom: 25px;
            }

            .retailer-card {
                padding: 15px;
            }

            .retailer-icon {
                font-size: 2rem;
            }

            .btn-purchase {
                font-size: 0.9rem;
                padding: 10px 15px;
            }

            .features-list {
                margin: 20px 0;
            }

            .features-list li {
                padding: 10px 0;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Module - Same as main site -->
		@component('components.nav')
		@endcomponent

    <!-- Purchase Hero Section -->
    <section class="purchase-hero">
        <div class="container">
            <h1>Get Your Copy Today</h1>
            <p>Transform your journey from despair to hope</p>
        </div>
    </section>

    <!-- Purchase Section -->
    <section class="purchase-section">
        <div class="container">
            <div class="row">
                <!-- Book Column -->
                <div class="col-lg-5">
                    <div class="book-column">
                        <img src="{{ asset('images/new_book_shot.png')}}"
                             alt="Sound Mind Over Depression - Revised Edition"
                             class="book-image">

                        <div class="book-info">
                            <h3>Sound Mind Over Depression</h3>
                            <p><strong>Revised Edition</strong></p>
                            <p>By Rev. Dr. Danny Amoako Akuffo</p>
                            <div class="book-price">$24.99</div>

                            <ul class="features-list">
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Comprehensive mental health guide</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Evidence-based strategies</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Spiritual wisdom integration</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Practical exercises & tools</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Professional counseling insights</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Purchase Options Column -->
                <div class="col-lg-7">
                    <div class="purchase-column">
                        <h2>Where to Buy</h2>
                        <p class="text-center mb-4">Available in both print and digital formats from your favorite retailers</p>

                        <!-- Amazon -->
                        <div class="retailer-card">
                            <div class="retailer-icon">
                                <i class="fab fa-amazon"></i>
                            </div>
                            <div class="retailer-info">
                                <h4>Amazon</h4>
                                <p>Print & Kindle editions available with Prime shipping</p>
                            </div>
                            <a href="#" class="btn-purchase">
                                Buy on Amazon <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Barnes & Noble -->
                        <div class="retailer-card">
                            <div class="retailer-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="retailer-info">
                                <h4>Barnes & Noble</h4>
                                <p>Hardcover, paperback, and NOOK editions</p>
                            </div>
                            <a href="#" class="btn-purchase">
                                Buy on B&N <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Apple Books -->
                        <div class="retailer-card">
                            <div class="retailer-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="retailer-info">
                                <h4>Apple Books</h4>
                                <p>Digital edition for iPhone, iPad, and Mac</p>
                            </div>
                            <a href="#" class="btn-purchase">
                                Buy on Apple <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Google Play Books -->
                        <div class="retailer-card">
                            <div class="retailer-icon">
                                <i class="fab fa-google-play"></i>
                            </div>
                            <div class="retailer-info">
                                <h4>Google Play Books</h4>
                                <p>Read on Android, iOS, or web browser</p>
                            </div>
                            <a href="#" class="btn-purchase">
                                Buy on Google <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Kobo -->
                        <div class="retailer-card">
                            <div class="retailer-icon">
                                <i class="fas fa-tablet-alt"></i>
                            </div>
                            <div class="retailer-info">
                                <h4>Kobo</h4>
                                <p>eBook edition for Kobo eReaders</p>
                            </div>
                            <a href="#" class="btn-purchase">
                                Buy on Kobo <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Local Bookstores -->
                        <div class="retailer-card">
                            <div class="retailer-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="retailer-info">
                                <h4>Local Bookstores</h4>
                                <p>Support your local independent bookstore</p>
                            </div>
                            <a href="#" class="btn-purchase">
                                Find Local <i class="fas fa-map-marker-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Info Box -->
                        <div class="info-box">
                            <h4><i class="fas fa-info-circle me-2"></i>Bulk Orders</h4>
                            <p>Looking to order multiple copies for your organization, church, or study group?</p>
                            <p class="mt-2"><strong>Contact us for special bulk pricing and discounts.</strong></p>
                            <a href="{{ route('welcome') }}#contact" class="btn btn-outline-light mt-3">
                                Contact for Bulk Orders
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Module - Same as main site -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Rev. Dr. Danny Amoako Akuffo</h5>
                    <p>Professional Counselor | Licensed Psychotherapist | Author</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links mb-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="mb-2">© 2025 Danny Amoako Akuffo. All rights reserved.</p>
                    <p>Designed by - Global Scalable Technologies</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

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

        window.addEventListener('scroll', updateNavbar);

        // Animate elements on scroll
        function animateOnScroll() {
            const cards = document.querySelectorAll('.retailer-card');
            cards.forEach((card, index) => {
                const cardTop = card.getBoundingClientRect().top;
                const triggerBottom = window.innerHeight * 0.8;

                if (cardTop < triggerBottom) {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }

        // Set initial state for cards
        document.querySelectorAll('.retailer-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.5s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Initial check

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
    </script>
</body>
</html>
