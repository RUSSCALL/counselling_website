<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rev. Dr. Danny Amoako Akuffo - Author & Professional Counselor</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

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
        }
        
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Navigation Module */
        .navbar-custom {
            background-color: var(--white);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        /* .navbar-custom .navbar-brand {
            color: var(--primary-navy);
            font-weight: 700;
            font-size: 1.5rem;
        } */

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
        
        /* Hero Section Module with Particles */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-navy) 0%, #2c5282 100%);
            color: var(--white);
            padding: 120px 0 80px;
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        @media (min-width: 992px) {
            .hero-section .row {
                align-items: center;
                min-height: 500px;
            }
        }
        
        /* Floating Particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            background: radial-gradient(circle, rgba(212,175,55,0.8) 0%, rgba(212,175,55,0) 70%);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
            opacity: 0;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) translateX(0) scale(0);
                opacity: 0;
            }
            10% {
                opacity: 0.4;
            }
            50% {
                transform: translateY(-50vh) translateX(100px) scale(1);
                opacity: 0.8;
            }
            90% {
                opacity: 0.4;
            }
        }
        
        .particle:nth-child(1) { left: 10%; width: 20px; height: 20px; animation-delay: 0s; animation-duration: 20s; }
        .particle:nth-child(2) { left: 20%; width: 15px; height: 15px; animation-delay: 2s; animation-duration: 25s; }
        .particle:nth-child(3) { left: 30%; width: 25px; height: 25px; animation-delay: 4s; animation-duration: 18s; }
        .particle:nth-child(4) { left: 40%; width: 18px; height: 18px; animation-delay: 6s; animation-duration: 22s; }
        .particle:nth-child(5) { left: 50%; width: 22px; height: 22px; animation-delay: 8s; animation-duration: 20s; }
        .particle:nth-child(6) { left: 60%; width: 16px; height: 16px; animation-delay: 10s; animation-duration: 24s; }
        .particle:nth-child(7) { left: 70%; width: 20px; height: 20px; animation-delay: 12s; animation-duration: 19s; }
        .particle:nth-child(8) { left: 80%; width: 24px; height: 24px; animation-delay: 14s; animation-duration: 21s; }
        .particle:nth-child(9) { left: 90%; width: 19px; height: 19px; animation-delay: 16s; animation-duration: 23s; }
        .particle:nth-child(10) { left: 85%; width: 21px; height: 21px; animation-delay: 18s; animation-duration: 20s; }
        .particle:nth-child(11) { left: 15%; width: 17px; height: 17px; animation-delay: 1s; animation-duration: 22s; }
        .particle:nth-child(12) { left: 25%; width: 23px; height: 23px; animation-delay: 3s; animation-duration: 19s; }
        .particle:nth-child(13) { left: 35%; width: 14px; height: 14px; animation-delay: 5s; animation-duration: 26s; }
        .particle:nth-child(14) { left: 45%; width: 19px; height: 19px; animation-delay: 7s; animation-duration: 21s; }
        .particle:nth-child(15) { left: 55%; width: 21px; height: 21px; animation-delay: 9s; animation-duration: 23s; }
        .particle:nth-child(16) { left: 65%; width: 18px; height: 18px; animation-delay: 11s; animation-duration: 20s; }
        .particle:nth-child(17) { left: 75%; width: 16px; height: 16px; animation-delay: 13s; animation-duration: 24s; }
        .particle:nth-child(18) { left: 5%; width: 22px; height: 22px; animation-delay: 15s; animation-duration: 18s; }
        .particle:nth-child(19) { left: 95%; width: 20px; height: 20px; animation-delay: 17s; animation-duration: 22s; }
        .particle:nth-child(20) { left: 12%; width: 15px; height: 15px; animation-delay: 19s; animation-duration: 25s; }
        .particle:nth-child(21) { left: 38%; width: 24px; height: 24px; animation-delay: 2.5s; animation-duration: 19s; }
        .particle:nth-child(22) { left: 58%; width: 17px; height: 17px; animation-delay: 4.5s; animation-duration: 21s; }
        .particle:nth-child(23) { left: 68%; width: 19px; height: 19px; animation-delay: 6.5s; animation-duration: 23s; }
        .particle:nth-child(24) { left: 78%; width: 21px; height: 21px; animation-delay: 8.5s; animation-duration: 20s; }
        .particle:nth-child(25) { left: 88%; width: 16px; height: 16px; animation-delay: 10.5s; animation-duration: 24s; }
        
        /* Animated Brain SVG */
        .brain-animation {
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);
            width: 300px;
            height: 300px;
            opacity: 0.1;
        }
        
        .brain-path {
            fill: none;
            stroke: var(--accent-gold);
            stroke-width: 1;
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: drawBrain 5s ease-in-out forwards, pulseBrain 3s ease-in-out infinite 5s;
        }
        
        @keyframes drawBrain {
            to {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes pulseBrain {
            0%, 100% {
                opacity: 0.1;
            }
            50% {
                opacity: 0.3;
            }
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--white);
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards 0.5s;
        }
        
        .hero-subtitle {
            color: var(--accent-gold);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards 0.7s;
        }
        
        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards 0.9s;
        }
        
        .hero-buttons {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards 1.1s;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
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
        
        .btn-gold {
            background-color: var(--accent-gold);
            color: var(--primary-navy);
            padding: 12px 30px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-right: 15px;
            margin-bottom: 15px;
        }
        
        .btn-gold::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background-color: rgba(19, 233, 41, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn-gold:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212,175,55,0.3);
        }
        
        .btn-outline-gold {
            border: 2px solid var(--accent-gold);
            color: var(--accent-gold);
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }
        
        .btn-outline-gold:hover {
            background-color: var(--accent-gold);
            color: var(--primary-navy);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212,175,55,0.3);
        }
        
        /* Pulse Effect */
        @keyframes pulseGlowCTA {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 10px 20px rgba(212,175,55,0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(212,175,55,0.6), 0 0 30px rgba(212,175,55,0.4);
            }
        }

        .btn-gold {
            animation: pulseGlowCTA 2s ease-in-out infinite; /* Auto-pulses every 2s for constant life */
        }

        .btn-gold:hover {
            animation-duration: 1s; /* Speeds up on hover for more energy */
            transform: translateY(-2px); /* Keeps the existing lift */
        }

                .book-cover {
                    max-width: 100%;
                    width: auto;
                    max-height: 500px;
                    height: auto;
                    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
                    transition: transform 0.6s ease, opacity 0.6s ease;
                    animation: pulseGlow 3s ease-in-out infinite;
                    position: relative;
                    z-index: 1;
                    display: block;
                    margin: 0 auto;
                }
                
                .book-cover-wrapper {
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 400px;
                }
                
                @keyframes pulseGlow {
                    0%, 100% {
                        box-shadow: 0 20px 40px rgba(0,0,0,0.3), 0 0 30px rgba(212,175,55,0);
                    }
                    50% {
                        box-shadow: 0 20px 40px rgba(0,0,0,0.3), 0 0 50px rgba(212,175,55,0.3);
                    }
                }
                
                .book-cover:hover {
                    transform: scale(1.05) rotateY(5deg);
                }
                
                /* Journey Line */
                .journey-line {
                    position: fixed;
                    left: 50px;
                    top: 0;
                    width: 4px;
                    height: 100%;
                    background: linear-gradient(to bottom, var(--primary-navy) 0%, var(--accent-gold) 100%);
                    opacity: 0.1;
                    z-index: 1;
                }
                
                .journey-progress {
                    position: fixed;
                    left: 50px;
                    top: 0;
                    width: 4px;
                    height: 0%;
                    background: var(--accent-gold);
                    transition: height 0.3s ease;
                    z-index: 2;
                    box-shadow: 0 0 10px rgba(212,175,55,0.5);
                }
                
                .journey-milestone {
                    position: absolute;
                    left: -8px;
                    width: 20px;
                    height: 20px;
                    background-color: var(--white);
                    border: 3px solid var(--accent-gold);
                    border-radius: 50%;
                    opacity: 0;
                    transform: scale(0);
                    transition: all 0.5s ease;
                }
                
                .journey-milestone.active {
                    opacity: 1;
                    transform: scale(1);
                }
                
                /* About Section Module */
                .about-section {
                    padding: 80px 0;
                    background-color: var(--bg-light);
                    position: relative;
                }
                
                .section-title {
                    color: var(--primary-navy);
                    font-size: 2.5rem;
                    margin-bottom: 1rem;
                    position: relative;
                    display: inline-block;
                    opacity: 0;
                    transform: translateY(20px);
                }
                
                .section-title.reveal {
                    animation: fadeInUp 1s ease-out forwards;
                }
                
                .section-title::after {
                    content: '';
                    position: absolute;
                    bottom: -10px;
                    left: 0;
                    width: 0;
                    height: 3px;
                    background-color: var(--accent-gold);
                    transition: width 1s ease;
                }
                
                .section-title.reveal::after {
                    width: 60px;
                }
                
                /* Author Image Styling */
                .author-image-container {
                    position: relative;
                    overflow: hidden;
                    border-radius: 10px;
                    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
                    animation: fadeInUp 1s ease-out forwards;
                    /* Set a fixed height for consistent sizing */
                    height: 500px; /* Adjust this value as needed */
                }
                
                .author-image {
                    width: 100%;
                    height: 100%;
                    object-fit: cover; /* This is key for cropping */
                    object-position: center top; /* Adjust positioning: center, top, bottom, left, right */
                    display: block;
                    transition: transform 0.5s ease;
                }
                
                /* Alternative object-position values you can use:
                object-position: center center; - Centers the image (default)
                object-position: center top; - Shows more of the top (good for headshots)
                object-position: center bottom; - Shows more of the bottom
                object-position: 50% 20%; - Custom positioning (horizontal% vertical%)
                */
                
                .author-image-container:hover .author-image {
                    transform: scale(1.05);
                }
                
                .author-credentials {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background: linear-gradient(to top, rgba(30,58,95,0.95) 0%, transparent 100%);
                    color: var(--white);
                    padding: 40px 20px 20px;
                    transform: translateY(100%);
                    transition: transform 0.5s ease;
                }
                
                .author-image-container:hover .author-credentials {
                    transform: translateY(0);
                }
                
                .author-credentials p {
                    margin: 10px 0;
                    font-size: 0.95rem;
                    opacity: 0;
                    animation: fadeInUp 0.5s ease forwards;
                }
                
                .author-credentials p:nth-child(1) { animation-delay: 0.1s; }
                .author-credentials p:nth-child(2) { animation-delay: 0.2s; }
                .author-credentials p:nth-child(3) { animation-delay: 0.3s; }
                
                .author-credentials i {
                    color: var(--accent-gold);
                    margin-right: 10px;
                }
                
                /* Remove old credentials badge styles that are no longer needed */
                .credentials-badge {
                    background-color: var(--white);
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    margin-bottom: 20px;
                    transition: all 0.3s ease;
                    opacity: 0;
                    transform: translateY(20px);
                }
                
                .credentials-badge.reveal {
                    animation: fadeInUp 0.8s ease-out forwards;
                }
                
                .credentials-badge:nth-child(1) { animation-delay: 0.1s; }
                .credentials-badge:nth-child(2) { animation-delay: 0.2s; }
                .credentials-badge:nth-child(3) { animation-delay: 0.3s; }
                .credentials-badge:nth-child(4) { animation-delay: 0.4s; }
                
                .credentials-badge:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                }
                
                .credentials-badge i {
                    color: var(--accent-gold);
                    font-size: 2rem;
                    margin-bottom: 10px;
                    transition: transform 0.3s ease;
                }
                
                .credentials-badge:hover i {
                    transform: rotateY(360deg);
                }
                
                /* Book Details Module */
                .book-details {
                    padding: 80px 0;
                    background-color: var(--white);
                    position: relative;
                }
                
                .book-feature {
                    text-align: center;
                    padding: 30px;
                    transition: all 0.3s ease;
                    opacity: 0;
                    transform: translateY(30px);
                }
                
                .book-feature.reveal {
                    animation: fadeInUp 1s ease-out forwards;
                }
                
                .book-feature:nth-child(1) { animation-delay: 0.2s; }
                .book-feature:nth-child(2) { animation-delay: 0.4s; }
                .book-feature:nth-child(3) { animation-delay: 0.6s; }
                
                .book-feature i {
                    font-size: 3rem;
                    color: var(--primary-navy);
                    margin-bottom: 20px;
                    transition: all 0.5s ease;
                }
                
                .book-feature:hover i {
                    color: var(--accent-gold);
                    transform: scale(1.2) rotateZ(5deg);
                }
                
                /* Events Section Module */
                .events-section {
                    padding: 80px 0;
                    background: linear-gradient(135deg, var(--primary-navy) 0%, #2c5282 100%);
                    color: var(--white);
                    position: relative;
                    overflow: hidden;
                }
                
                .events-section::before {
                    content: '';
                    position: absolute;
                    top: -50%;
                    right: -50%;
                    width: 200%;
                    height: 200%;
                    background: radial-gradient(circle, rgba(212,175,55,0.05) 0%, transparent 70%);
                    animation: rotate 30s linear infinite;
                }
                
                @keyframes rotate {
                    from {
                        transform: rotate(0deg);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                }
                
                .event-card {
                    background-color: rgba(255,255,255,0.1);
                    border: 1px solid rgba(212,175,55,0.3);
                    border-radius: 10px;
                    padding: 30px;
                    margin-bottom: 20px;
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                }
                
                .event-card::before {
                    content: '';
                    position: absolute;
                    top: -100%;
                    left: -100%;
                    width: 300%;
                    height: 300%;
                    background: linear-gradient(45deg, transparent, rgba(212,175,55,0.1), transparent);
                    transition: all 0.5s ease;
                }
                
                .event-card:hover::before {
                    top: -50%;
                    left: -50%;
                }
                
                .event-card:hover {
                    background-color: rgba(212,175,55,0.1);
                    transform: translateX(10px);
                    border-color: var(--accent-gold);
                }
                
                .event-date {
                    color: var(--accent-gold);
                    font-weight: 700;
                    font-size: 1.2rem;
                }
                
                /* Testimonials Module */
                .testimonials-section {
                    padding: 80px 0;
                    background-color: var(--bg-light);
                    position: relative;
                }
                
                .testimonial-card {
                    background-color: var(--white);
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    margin-bottom: 30px;
                    position: relative;
                    transition: all 0.3s ease;
                    opacity: 0;
                    transform: translateY(20px);
                }
                
                .testimonial-card.reveal {
                    animation: fadeInUp 1s ease-out forwards;
                }
                
                .testimonial-card:nth-child(1) { animation-delay: 0.1s; }
                .testimonial-card:nth-child(2) { animation-delay: 0.3s; }
                .testimonial-card:nth-child(3) { animation-delay: 0.5s; }
                
                .testimonial-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                }
                
                .quote-icon {
                    color: var(--accent-gold);
                    font-size: 2rem;
                    margin-bottom: 15px;
                    animation: swingIn 1s ease-out;
                }
                
                @keyframes swingIn {
                    0% {
                        transform: rotateZ(-30deg);
                        opacity: 0;
                    }
                    100% {
                        transform: rotateZ(0deg);
                        opacity: 1;
                    }
                }
                
                /* Contact/Booking Section Module */
                .contact-section {
                    padding: 80px 0;
                    background-color: var(--white);
                    position: relative;
                }

                .contact-info {
                    background-color: var(--primary-navy);
                    color: var(--white);
                    padding: 40px;
                    border-radius: 10px;
                    height: 100%;
                    position: relative;
                    overflow: hidden;
                }

                .contact-info::before {
                    content: '';
                    position: absolute;
                    top: -50%;
                    right: -50%;
                    width: 200%;
                    height: 200%;
                    background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, transparent 60%);
                    animation: rotate 20s linear infinite reverse;
                }

                .contact-info i {
                    color: var(--accent-gold);
                    margin-right: 15px;
                    font-size: 1.2rem;
                }

                .session-details {
                    position: relative;
                    z-index: 1;
                }

                .session-details p {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }

                .expect-list {
                    list-style: none;
                    padding-left: 0;
                    margin-bottom: 0;
                }

                .expect-list li {
                    padding: 10px 0;
                    position: relative;
                    padding-left: 30px;
                    color: var(--text-dark);
                }

                .expect-list li::before {
                    content: '\f00c';
                    font-family: 'Font Awesome 6 Free';
                    font-weight: 900;
                    position: absolute;
                    left: 0;
                    color: var(--accent-gold);
                    font-size: 1rem;
                }

                .info-expect-box {
                    position: relative;
                    z-index: 1;
                    background-color: rgba(255, 255, 255, 0.95) !important;
                    border: 1px solid rgba(212, 175, 55, 0.2);
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                }

                .info-expect-box h5 {
                    color: var(--primary-navy);
                    font-weight: 600;
                }

                .info-expect-box i {
                    color: var(--accent-gold);
                }

                .contact-form {
                    padding: 40px;
                    background-color: var(--bg-light);
                    border-radius: 10px;
                }

                .form-control {
                    border: 1px solid #dee2e6;
                    transition: all 0.3s ease;
                }

                .form-control:focus {
                    border-color: var(--accent-gold);
                    box-shadow: 0 0 0 0.2rem rgba(212,175,55,0.25);
                    transform: translateY(-2px);
                }

                .pricing-summary {
                    border: 2px solid #dee2e6;
                    transition: all 0.3s ease;
                }

                .pricing-summary hr {
                    margin: 15px 0;
                    border-top: 2px solid #dee2e6;
                }

                .calendly-container {
                    position: relative;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .btn-outline-warning:hover {
                    background-color: #ffc107;
                    border-color: #ffc107;
                    color: #000;
                }
                
                /* Footer Module */
                .footer {
                    background-color: var(--primary-navy);
                    color: var(--white);
                    padding: 40px 0 20px;
                    position: relative;
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
                
                
                /* Responsive adjustments */
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
                }

                @media (max-width: 768px) {
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

                    .hero-title {
                        font-size: 2.5rem;
                    }

                    .hero-buttons {
                        flex-direction: column;
                        align-items: flex-start;
                    }

                    .btn-gold,
                    .btn-outline-gold {
                        width: 100%;
                        text-align: center;
                        margin-right: 0;
                    }

                    .section-title {
                        font-size: 2rem;
                    }

                    .book-cover {
                        max-width: 300px;
                        max-height: 400px;
                        margin: 20px auto;
                    }

                    .book-cover-wrapper {
                        min-height: 300px;
                    }

                    .journey-line, .journey-progress {
                        display: none;
                    }

                    .brain-animation {
                        width: 200px;
                        height: 200px;
                        opacity: 0.05;
                    }
                }

                @media (max-width: 576px) {
                    .navbar-custom .navbar-brand {
                        font-size: 1.1rem;
                        max-width: 75%;
                    }
                }

    </style>
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
                        <u><b>Rev. Dr. Danny A. Akuffo</b></u> is a highly credentialed <b>professional counsellor, licensed psychologist, and spiritual leader</b> dedicated to helping people live beyond despair and achieve lasting mental resilience. He is the author of the revised edition, <u>Sound Mind Over Depression: From Despair to Hope</u>.
                    </p>
                    
                    <p class="reveal-text">
                        Dr. Akuffo’s unique strength lies in his <b>composite approach</b>, blending proven psychological techniques with powerful faith-based principles. His mission is to equip you with the <b>cognitive, behavioral, and spiritual tools</b> necessary to conquer environmental and internal stressors that threaten your mental health, allowing you to live the abundant, purposeful life you were meant to live.
                    </p>

                    <p class="reveal-text">
                        He is the visionary <b>Founder and Overseer</b> of <b>THE WISEWORD CHRISTIAN MINISTRY</b>, <b>THE WISEWORD FOUNDATION</b>, and <b>Green Pack Counselling School</b>. Through these platforms and his extensive work as a prolific lecturer and speaker, Dr. Akuffo has reached countless individuals in Ghana and the U.K., offering practical hope and a clear path toward holistic wellness.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="author-image-container">
                        <img src="{{ asset('images/Mr_Danny_hands_folded.png')}}" 
                                alt="Rev. Dr. Danny Amoako Akuffo" 
                                class="author-image">
                        <div class="author-credentials">
                            <p><i class="fas fa-certificate"></i> <b>Licensed Psychologist & Professional Counsellor</b></p>
                            <p><i class="fas fa-graduation-cap"></i> <b>Doctorate in Counselling</b> (Hon. Causa)</p>
                            <p><i class="fas fa-brain"></i> <b>BA in Psychology and Religion</b> (University of Ghana)</p>
                            <p><i class="fas fa-notes-medical"></i> <b>Certified Health and Nutrition Counsellor</b></p>
                        </div>
                    </div>
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
    
    
    <!-- Testimonials Module -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">What Readers Say</h2>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p>"This book transformed my understanding of mental health and provided practical tools that truly work."</p>
                        <strong>- Reader Testimonial</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p>"Dr. Akuffo's approach combines professional expertise with genuine compassion. Highly recommended!"</p>
                        <strong>- Mental Health Professional</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p>"A must-read for anyone dealing with depression or supporting someone who is."</p>
                        <strong>- Book Review</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Booking Section Module -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Book Your Counselling Session</h2>
                <p class="lead">Take the first step towards mental wellness</p>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h4 class="mb-4">Session Information</h4>
                        <div class="session-details">
                            <p class="mb-3">
                                <i class="fas fa-clock"></i>
                                <strong>Duration:</strong> 60 minutes
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-video"></i>
                                <strong>Format:</strong> Online Video Session
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>Price:</strong> $150.00 per session
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

                        <div class="mt-4 p-3 bg-warning bg-opacity-10 rounded border border-warning">
                            <h5 class="mb-2"><i class="fas fa-ticket-alt me-2"></i>Have a Coupon?</h5>
                            <p class="mb-0 small">Enter your coupon code in the booking form to get discounted or free sessions.</p>
                            <a href="#" class="btn btn-sm btn-outline-warning mt-2">Purchase Coupon</a>
                        </div>

                        <h5 class="mt-4 mb-3">Contact Us</h5>
                        <p class="mb-2">
                            <i class="fas fa-envelope"></i>
                            info@dannyakuffo.com
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone"></i>
                            +1 (555) 123-4567
                        </p>

                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Payment/Coupon Form -->
                    <div class="contact-form" id="paymentSection">
                        <h4 class="mb-4">Payment & Booking</h4>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Step 1:</strong> Enter your coupon code or proceed to payment, then book your session.
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
                                    <i class="fas fa-credit-card me-2"></i> Proceed to Payment
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
                            <div class="calendly-inline-widget"
                                 data-url="https://calendly.com/your-calendly-link?hide_landing_page_details=1&hide_gdpr_banner=1"
                                 style="min-width:320px;height:700px;">
                            </div>
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
                    <p>Professional Counselor | Licensed Psychotherapist | Author</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-2">© {{ now()->year }} Danny Amoako Akuffo. All rights reserved.</p>
                    <p>Designed by - <a href="https://www.gscalabletech.com/" target="_blank" >Global Scalable Technologies</a></p>
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
                        document.getElementById('proceedPaymentBtn').innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Booking';
                    } else {
                        document.getElementById('proceedPaymentBtn').innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed to Payment';
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

        // Proceed to Payment/Booking
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
                // Free session with coupon - submit without payment
                proceedBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing...';
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
                        proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Booking';
                    } else {
                        proceedBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed to Payment';
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
                        proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Booking';
                    } else {
                        proceedBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed to Payment';
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                const proceedBtn = document.getElementById('proceedPaymentBtn');
                proceedBtn.disabled = false;
                if (currentPrice === 0) {
                    proceedBtn.innerHTML = '<i class="fas fa-calendar-check me-2"></i> Proceed to Booking';
                } else {
                    proceedBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i> Proceed to Payment';
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
    </script>
</body>
</html>
                        