<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md Sohag Rana | Elite Full-Stack Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        :root {
            --primary: #00D4AA;
            --primary-dark: #00B894;
            --primary-glow: rgba(0, 212, 170, 0.4);
            --secondary: #6C63FF;
            --accent: #FF6B6B;
            --dark: #0A0A0F;
            --darker: #050508;
            --light: #FFFFFF;
            --gray: #8B8B9A;
            --gray-dark: #5A5A6B;
            --card-bg: rgba(255, 255, 255, 0.03);
            --card-border: rgba(255, 255, 255, 0.08);
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --gradient-1: linear-gradient(135deg, var(--primary), var(--secondary));
            --gradient-2: linear-gradient(135deg, var(--secondary), var(--accent));
            --gradient-3: linear-gradient(135deg, var(--primary), var(--accent));
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--dark);
            color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
        }

        /* 3D Background Canvas */
        #bg-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
        }

        /* Gradient Orbs */
        .gradient-orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            z-index: -1;
        }

        .orb-1 {
            width: 600px;
            height: 600px;
            background: var(--primary);
            top: -300px;
            right: -200px;
        }

        .orb-2 {
            width: 500px;
            height: 500px;
            background: var(--secondary);
            bottom: -200px;
            left: -150px;
        }

        .orb-3 {
            width: 400px;
            height: 400px;
            background: var(--accent);
            top: 50%;
            right: 20%;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--darker);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-1);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 0;
            z-index: 1000;
            backdrop-filter: blur(20px);
            background: rgba(10, 10, 15, 0.7);
            border-bottom: 1px solid var(--card-border);
            transition: all 0.4s ease;
        }

        .navbar.scrolled {
            padding: 15px 0;
            background: rgba(10, 10, 15, 0.9);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
        }

        .logo::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--gradient-1);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease;
        }

        .logo:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .nav-links {
            display: flex;
            gap: 35px;
        }

        .nav-link {
            color: var(--gray);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
        }

        .nav-link:hover {
            color: var(--light);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-1);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active {
            color: var(--light);
        }

        .nav-link.active::after {
            width: 100%;
        }

        .nav-cta {
            background: var(--gradient-1);
            color: var(--dark);
            padding: 10px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 212, 170, 0.3);
        }

        .nav-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 212, 170, 0.4);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--light);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 120px 0 80px;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text {
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0, 212, 170, 0.1);
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 25px;
            border: 1px solid rgba(0, 212, 170, 0.2);
            backdrop-filter: blur(10px);
        }

        .hero-badge i {
            font-size: 0.8rem;
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--light) 30%, var(--primary) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--gray);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .typing-text {
            min-height: 60px;
            margin-bottom: 40px;
            font-size: 1.3rem;
            font-weight: 500;
        }

        .typed-cursor {
            color: var(--primary);
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--gradient-1);
            color: var(--dark);
            box-shadow: 0 8px 25px rgba(0, 212, 170, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 212, 170, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 1px solid var(--card-border);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .floating-card {
            position: absolute;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
        }

        .card-1 {
            width: 280px;
            top: 0;
            left: 0;
            animation: float 6s ease-in-out infinite;
        }

        .card-2 {
            width: 250px;
            bottom: 0;
            right: 0;
            animation: float 6s ease-in-out infinite 1s;
        }

        .card-3 {
            width: 220px;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            animation: float 6s ease-in-out infinite 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 0.9rem;
            color: var(--gray);
        }

        /* Sections */
        .section {
            padding: 120px 0;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-badge {
            display: inline-block;
            background: rgba(108, 99, 255, 0.1);
            color: var(--secondary);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid rgba(108, 99, 255, 0.2);
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--light) 30%, var(--secondary) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .section-subtitle {
            color: var(--gray);
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            color: var(--gray);
            line-height: 1.8;
        }

        .highlight {
            color: var(--primary);
            font-weight: 600;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .stat-card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 5px;
            line-height: 1;
        }

        .stat-label {
            color: var(--gray);
            font-size: 1rem;
            font-weight: 500;
        }

        /* Skills Section */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .skill-category {
            background: var(--card-bg);
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .skill-category:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .skill-category-title {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: var(--light);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .skill-category-title i {
            color: var(--primary);
            font-size: 1.8rem;
        }

        .skill-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .skill-name {
            color: var(--light);
            font-weight: 500;
        }

        .skill-bar {
            width: 120px;
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .skill-level {
            height: 100%;
            background: var(--gradient-1);
            border-radius: 10px;
            position: relative;
            transition: width 1.5s ease-in-out;
        }

        .skill-percent {
            position: absolute;
            right: -40px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
        }

        .project-card {
            background: var(--card-bg);
            border-radius: 25px;
            overflow: hidden;
            transition: all 0.4s ease;
            border: 1px solid var(--card-border);
            backdrop-filter: blur(10px);
            position: relative;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-1);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .project-card:hover {
            transform: translateY(-15px);
            border-color: transparent;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .project-card:hover::before {
            opacity: 0.05;
        }

        .project-header {
            padding: 35px 35px 0;
        }

        .project-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .project-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--light);
            font-weight: 700;
        }

        .project-description {
            color: var(--gray);
            margin-bottom: 25px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }

        .tech-tag {
            background: rgba(108, 99, 255, 0.2);
            color: var(--secondary);
            padding: 6px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .project-footer {
            padding: 0 35px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .project-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            gap: 12px;
            color: var(--primary-dark);
        }

        .project-stats {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--gray);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .project-stats i {
            color: var(--accent);
        }

        /* Contact Section */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-card {
            background: var(--card-bg);
            padding: 35px 30px;
            border-radius: 20px;
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .contact-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .contact-card-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .contact-card-icon {
            width: 60px;
            height: 60px;
            background: rgba(0, 212, 170, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
        }

        .contact-card-title {
            font-size: 1.3rem;
            color: var(--light);
            font-weight: 600;
        }

        .contact-card-content {
            color: var(--gray);
            line-height: 1.6;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        .social-link {
            width: 55px;
            height: 55px;
            background: var(--card-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid var(--card-border);
            font-size: 1.2rem;
        }

        .social-link:hover {
            background: var(--gradient-1);
            color: var(--dark);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 212, 170, 0.3);
        }

        .contact-form {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 25px;
            border: 1px solid var(--card-border);
            backdrop-filter: blur(10px);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            color: var(--light);
            font-weight: 500;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 15px 20px;
            border-radius: 12px;
            border: 1px solid var(--card-border);
            background: rgba(255, 255, 255, 0.05);
            color: var(--light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 212, 170, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Footer */
        .footer {
            background: rgba(5, 5, 8, 0.8);
            padding: 70px 0 30px;
            border-top: 1px solid var(--card-border);
            backdrop-filter: blur(20px);
        }

        .footer-content {
            text-align: center;
        }

        .footer-text {
            color: var(--gray);
            margin-bottom: 30px;
            font-size: 1.1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .footer-link {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .footer-link:hover {
            color: var(--primary);
        }

        .copyright {
            color: var(--gray-dark);
            font-size: 0.9rem;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-1);
            color: var(--dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 212, 170, 0.3);
            transition: all 0.3s ease;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 212, 170, 0.4);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 3.5rem;
            }
            
            .section-title {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links, .nav-cta {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 40px;
            }
            
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .floating-card {
                position: relative;
                margin: 15px auto;
            }
            
            .about-content, .contact-content {
                grid-template-columns: 1fr;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .btn {
                padding: 14px 28px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .skills-container {
                grid-template-columns: 1fr;
            }
            
            .contact-form {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- 3D Background -->
    <canvas id="bg-canvas"></canvas>
    
    <!-- Gradient Orbs -->
    <div class="gradient-orb orb-1"></div>
    <div class="gradient-orb orb-2"></div>
    <div class="gradient-orb orb-3"></div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <a href="#" class="logo">Sohag1192</a>
            <div class="nav-links">
                <a href="#home" class="nav-link active">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            <a href="#contact" class="nav-cta">Get In Touch</a>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <i class="fas fa-star"></i> Elite Full-Stack Developer
                </div>
                <h1 class="hero-title">Md Sohag Rana</h1>
                <p class="hero-subtitle">Building next-generation digital experiences</p>
                <div class="typing-text" id="typing-text"></div>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        <i class="fas fa-rocket"></i> Explore My Work
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        <i class="fas fa-paper-plane"></i> Let's Connect
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-card card-1">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="card-title">Clean Code</h3>
                    <p class="card-text">Scalable, maintainable, and efficient solutions</p>
                </div>
                <div class="floating-card card-2">
                    <div class="card-icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="card-title">Full-Stack</h3>
                    <p class="card-text">End-to-end development expertise</p>
                </div>
                <div class="floating-card card-3">
                    <div class="card-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="card-title">High Performance</h3>
                    <p class="card-text">Optimized for speed and efficiency</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">About Me</div>
                <h2 class="section-title">Crafting Digital Excellence</h2>
                <p class="section-subtitle">With over 3 years of experience in full-stack development, I specialize in creating high-performance applications and scalable systems.</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>Hi, I'm <span class="highlight">Md Sohag Rana</span>, a passionate full-stack developer dedicated to building exceptional digital experiences. My expertise spans across modern web technologies, cloud architecture, and system design.</p>
                    <p>I specialize in <span class="highlight">Java, Spring Boot, React, and AWS</span>, creating robust solutions that handle real-world scale. My focus areas include ISP automation, video streaming technologies, and enterprise system architecture.</p>
                    <p>When I'm not coding, I'm exploring emerging technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in continuous learning and pushing the boundaries of what's possible with code.</p>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="stat-number">3+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">Lines of Code</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section" id="skills">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">My Skills</div>
                <h2 class="section-title">Technical Expertise</h2>
                <p class="section-subtitle">A comprehensive skill set that covers the entire development lifecycle, from concept to deployment.</p>
            </div>
            <div class="skills-container">
                <div class="skill-category">
                    <h3 class="skill-category-title"><i class="fas fa-server"></i> Backend Development</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <span class="skill-name">Java</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 95%"></div>
                                <span class="skill-percent">95%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Spring Boot</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 90%"></div>
                                <span class="skill-percent">90%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Node.js</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 85%"></div>
                                <span class="skill-percent">85%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Python</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 80%"></div>
                                <span class="skill-percent">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3 class="skill-category-title"><i class="fas fa-desktop"></i> Frontend Development</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <span class="skill-name">React</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 88%"></div>
                                <span class="skill-percent">88%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">JavaScript</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 90%"></div>
                                <span class="skill-percent">90%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">HTML/CSS</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 95%"></div>
                                <span class="skill-percent">95%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Flutter</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 75%"></div>
                                <span class="skill-percent">75%</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3 class="skill-category-title"><i class="fas fa-cloud"></i> DevOps & Cloud</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <span class="skill-name">AWS</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 85%"></div>
                                <span class="skill-percent">85%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Docker</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 80%"></div>
                                <span class="skill-percent">80%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">MySQL</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 90%"></div>
                                <span class="skill-percent">90%</span>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Firebase</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 75%"></div>
                                <span class="skill-percent">75%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">My Work</div>
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-subtitle">A selection of my recent work that showcases my expertise and problem-solving abilities.</p>
            </div>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="project-title">Flussonic Media Server</h3>
                        <p class="project-description">Enterprise-grade video streaming solution with high-load optimization, real-time analytics, and scalable architecture for millions of concurrent users.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Streaming</span>
                            <span class="tech-tag">Video</span>
                            <span class="tech-tag">Enterprise</span>
                            <span class="tech-tag">Scalability</span>
                        </div>
                    </div>
                    <div class="project-footer">
                        <a href="https://github.com/sohag1192/Flussonic-Media-Server" class="project-link">
                            View Project <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-stats">
                            <i class="fas fa-star"></i> 120+
                        </div>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon">
                            <i class="fas fa-tv"></i>
                        </div>
                        <h3 class="project-title">Live TV Server</h3>
                        <p class="project-description">Complete workflow to build and host your own live TV server with automation, real-time monitoring, CDN integration, and advanced analytics dashboard.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Live Streaming</span>
                            <span class="tech-tag">Automation</span>
                            <span class="tech-tag">TV</span>
                            <span class="tech-tag">CDN</span>
                        </div>
                    </div>
                    <div class="project-footer">
                        <a href="https://github.com/sohag1192/Live-Tv-Server" class="project-link">
                            View Project <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-stats">
                            <i class="fas fa-star"></i> 85+
                        </div>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-header">
                        <div class="project-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="project-title">Emby to Telegram</h3>
                        <p class="project-description">Advanced media notifier with Telegram alerts, systemd support, real-time monitoring, customizable templates, and multi-language support.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">Telegram API</span>
                            <span class="tech-tag">Automation</span>
                            <span class="tech-tag">Monitoring</span>
                        </div>
                    </div>
                    <div class="project-footer">
                        <a href="https://github.com/sohag1192/emby-to-telegram" class="project-link">
                            View Project <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-stats">
                            <i class="fas fa-star"></i> 65+
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Get In Touch</div>
                <h2 class="section-title">Let's Work Together</h2>
                <p class="section-subtitle">Have a project in mind? Let's discuss how we can turn your ideas into reality.</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-card-header">
                            <div class="contact-card-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3 class="contact-card-title">Email</h3>
                        </div>
                        <div class="contact-card-content">
                            <p>sohag1192@gmail.com</p>
                            <p>I typically reply within 24 hours</p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-card-header">
                            <div class="contact-card-icon">
                                <i class="fab fa-telegram"></i>
                            </div>
                            <h3 class="contact-card-title">Telegram</h3>
                        </div>
                        <div class="contact-card-content">
                            <p>@Flussonics</p>
                            <p>For quick conversations and project updates</p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-card-header">
                            <div class="contact-card-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="contact-card-title">Location</h3>
                        </div>
                        <div class="contact-card-content">
                            <p>Available for remote work worldwide</p>
                            <p>Flexible timezone collaboration</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://github.com/sohag1192" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://t.me/Flussonics" class="social-link">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="https://x.com/Sohag_1192" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://rootmaster.xyz" class="social-link">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" class="form-input" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" class="form-input" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" class="form-input" placeholder="What is this regarding?" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" class="form-textarea" placeholder="Tell me about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p class="footer-text">"The quality of your code determines the quality of your product. I strive for excellence in both."</p>
                <div class="footer-links">
                    <a href="#home" class="footer-link">Home</a>
                    <a href="#about" class="footer-link">About</a>
                    <a href="#skills" class="footer-link">Skills</a>
                    <a href="#projects" class="footer-link">Projects</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </div>
                <p class="copyright">&copy; 2024 Md Sohag Rana. All rights reserved. Crafted with passion and precision.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#home" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script>
        // Three.js 3D Background
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({
            canvas: document.getElementById('bg-canvas'),
            alpha: true,
            antialias: true
        });

        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        // Create particles
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 5000;

        const posArray = new Float32Array(particlesCount * 3);
        const colorArray = new Float32Array(particlesCount * 3);

        for (let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 10;
            colorArray[i] = Math.random();
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
        particlesGeometry.setAttribute('color', new THREE.BufferAttribute(colorArray, 3));

        const particlesMaterial = new THREE.PointsMaterial({
            size: 0.02,
            vertexColors: true,
            transparent: true,
            opacity: 0.8
        });

        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particlesMesh);

        camera.position.z = 5;

        // Animation
        function animate() {
            requestAnimationFrame(animate);
            
            particlesMesh.rotation.x += 0.0005;
            particlesMesh.rotation.y += 0.001;
            
            renderer.render(scene, camera);
        }

        animate();

        // Handle window resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // Typing Animation
        document.addEventListener('DOMContentLoaded', function() {
            var typed = new Typed('#typing-text', {
                strings: [
                    "Backend Architect",
                    "Streaming Specialist", 
                    "Full-Stack Developer",
                    "System Designer",
                    "Problem Solver",
                    "Tech Innovator"
                ],
                typeSpeed: 50,
                backSpeed: 30,
                backDelay: 2000,
                startDelay: 500,
                loop: true,
                showCursor: true,
                cursorChar: '|'
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const backToTop = document.getElementById('backToTop');
            
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
                backToTop.classList.add('active');
            } else {
                navbar.classList.remove('scrolled');
                backToTop.classList.remove('active');
            }
            
            // Update active nav link
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (window.scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! I will get back to you soon.');
            this.reset();
        });

        // Skill bar animation on scroll
        const skillBars = document.querySelectorAll('.skill-level');
        
        function animateSkillBars() {
            skillBars.forEach(bar => {
                const percent = bar.parentElement.querySelector('.skill-percent').textContent;
                bar.style.width = percent;
            });
        }
        
        // Intersection Observer for skill bars
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkillBars();
                }
            });
        }, { threshold: 0.5 });
        
        document.querySelectorAll('.skill-category').forEach(category => {
            observer.observe(category);
        });

        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>
</html>