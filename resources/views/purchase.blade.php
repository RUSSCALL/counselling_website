<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase - Sound Mind Over Depression | Rev. Dr. Danny Amoako Akuffo</title>

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
    <!-- Navigation Module - Same as main site -->
		@component('components.nav')
		@endcomponent

    <!-- Purchase Hero Section -->
    <section class="pp-hero">
        <div class="container">
            <h1>Get Your Copy Today</h1>
            <p>Transform your journey from despair to hope</p>
        </div>
    </section>

    <!-- Purchase Section -->
    <section class="pp-section">
        <div class="container">
            <div class="row">
                <!-- Book Column -->
                <div class="col-lg-5">
                    <div class="pp-book-column">
                        <img src="{{ asset('images/new_book_shot.png')}}"
                             alt="Sound Mind Over Depression - Revised Edition"
                             class="pp-book-image">

                        <div class="pp-book-info">
                            <h3>Sound Mind Over Depression</h3>
                            <p><strong>Revised Edition</strong></p>
                            <p>By Rev. Dr. Danny Amoako Akuffo</p>
                            <div class="pp-book-price">$28.32</div>

                            <ul class="pp-features-list">
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
                    <div class="pp-purchase-column">
                        <h2>Where to Buy</h2>
                        <p class="text-center mb-4">Available in both print and digital formats from your favorite retailers</p>

                        <!-- Amazon Kindle eBook -->
                        <div class="pp-retailer-card">
                            <div class="pp-retailer-icon">
                                <i class="fab fa-amazon"></i>
                            </div>
                            <div class="pp-retailer-info">
                                <h4>Amazon Kindle eBook</h4>
                                <p>Digital edition for Kindle devices and apps</p>
                            </div>
                            <a href="https://www.amazon.com/Sound-Mind-Over-Depression-Despair-ebook/dp/B0FS1KQMHZ/ref=sr_1_1?crid=3RYICL59SW11Q&dib=eyJ2IjoiMSJ9.eJo1LtjGcpIZwk4BZH20wIgeL46HOtenwXlWXok8g1kc2iIise3FDLL22e0HqJj639kRdZhoXFOiV8i86guPCrKjA_JrLvEtcLmYMovrfkieOeU4HFPZJsrfuviLwgARbW7K9j4Dpgac9MNJNDdF9anEKjkJSQHiL9BfEhyb-go8FUtLTnx4W2C-ZJjwdMgVLPZKBUdrauaT5XhoYskkm6XNGeQHX7gdeR5sMZyzCZg.PVdIUwo9bqpmJCmhSwMnYWlttLda38llHWBUITbNiVQ&dib_tag=se&keywords=sound+mind+over+depression&qid=1762316163&sprefix=sound+mind+over%2Caps%2C113&sr=8-1" target="_blank" class="pp-btn-purchase">
                                Buy on Amazon <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Amazon Paperback -->
                        <div class="pp-retailer-card">
                            <div class="pp-retailer-icon">
                                <i class="fab fa-amazon"></i>
                            </div>
                            <div class="pp-retailer-info">
                                <h4>Amazon Paperback</h4>
                                <p>Paperback edition with Prime shipping</p>
                            </div>
                            <a href="https://www.amazon.com/SOUND-MIND-OVER-DEPRESSION-DESPAIR/dp/B0FS7GNMG7/ref=sr_1_1?crid=3RYICL59SW11Q&dib=eyJ2IjoiMSJ9.eJo1LtjGcpIZwk4BZH20wIgeL46HOtenwXlWXok8g1kc2iIise3FDLL22e0HqJj639kRdZhoXFOiV8i86guPCrKjA_JrLvEtcLmYMovrfkieOeU4HFPZJsrfuviLwgARbW7K9j4Dpgac9MNJNDdF9anEKjkJSQHiL9BfEhyb-go8FUtLTnx4W2C-ZJjwdMgVLPZKBUdrauaT5XhoYskkm6XNGeQHX7gdeR5sMZyzCZg.PVdIUwo9bqpmJCmhSwMnYWlttLda38llHWBUITbNiVQ&dib_tag=se&keywords=sound+mind+over+depression&qid=1762316163&sprefix=sound+mind+over%2Caps%2C113&sr=8-1" target="_blank" class="pp-btn-purchase">
                                Buy on Amazon <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Amazon Hardcover -->
                        <div class="pp-retailer-card">
                            <div class="pp-retailer-icon">
                                <i class="fab fa-amazon"></i>
                            </div>
                            <div class="pp-retailer-info">
                                <h4>Amazon Hardcover</h4>
                                <p>Hardcover edition with Prime shipping</p>
                            </div>
                            <a href="https://www.amazon.com/Sound-Mind-Over-Depression-Despair/dp/B0FSRJ3H1M/ref=sr_1_1?crid=3RYICL59SW11Q&dib=eyJ2IjoiMSJ9.eJo1LtjGcpIZwk4BZH20wIgeL46HOtenwXlWXok8g1kc2iIise3FDLL22e0HqJj639kRdZhoXFOiV8i86guPCrKjA_JrLvEtcLmYMovrfkieOeU4HFPZJsrfuviLwgARbW7K9j4Dpgac9MNJNDdF9anEKjkJSQHiL9BfEhyb-go8FUtLTnx4W2C-ZJjwdMgVLPZKBUdrauaT5XhoYskkm6XNGeQHX7gdeR5sMZyzCZg.PVdIUwo9bqpmJCmhSwMnYWlttLda38llHWBUITbNiVQ&dib_tag=se&keywords=sound+mind+over+depression&qid=1762316163&sprefix=sound+mind+over%2Caps%2C113&sr=8-1" target="_blank" class="pp-btn-purchase">
                                Buy on Amazon <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>

                        <!-- Info Box -->
                        <div class="pp-info-box">
                            <h4><i class="fas fa-info-circle me-2"></i>Bulk Orders</h4>
                            <p>Looking to order multiple copies for your organization, church, or study group?</p>
                            <p class="mt-2"><strong>Contact us for special bulk pricing and discounts.</strong></p>
                            <a href="https://forms.gle/MEKu4t7yoQHwL3V29" target="_blank" class="btn btn-outline-light mt-3">
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
                        <a href="https://www.facebook.com/profile.php?id=61582314766391" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter" target="_blank"></i></a>
                        <a href="https://www.youtube.com/@DannyAmoakoAkuffo" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/dannyakuffoministries/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="mb-2">© {{ now()->year }}  Danny Amoako Akuffo. All rights reserved.</p>
                    <p>Designed by - <img class="mx-2" src="{{asset('images/GScalable_Favicon.jpg')}}" > Global Scalable Technologies</p>
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
            const cards = document.querySelectorAll('.pp-retailer-card');
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
        document.querySelectorAll('.pp-retailer-card').forEach(card => {
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
