<?php
// Main entry point for the insurance form
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์มประกันภัย - บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</title>
    <link rel="icon" href="assets/icon-white.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0a3556;
            --secondary: #1e4a6b;
            --accent: #2980b9;
            --gold: #f39c12;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 177, 153, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);
            animation: backgroundMove 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundMove {
            0%, 100% { transform: translateX(0) translateY(0); }
            25% { transform: translateX(-20px) translateY(-10px); }
            50% { transform: translateX(20px) translateY(10px); }
            75% { transform: translateX(-10px) translateY(20px); }
        }

        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 1; }
            50% { transform: translateY(-20px) rotate(180deg); opacity: 0.5; }
        }

        .container {
            max-width: 1400px;
            position: relative;
            z-index: 2;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            border-radius: 25px;
            margin: 40px 0;
            padding: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 20px 40px rgba(10, 53, 86, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            animation: slideInDown 1s ease-out;
        }

        header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: rotate 10s linear infinite;
        }

        header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes shimmer {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 40px;
            position: relative;
            z-index: 3;
        }

        .header-left {
            position: relative;
        }

        .logo-container {
            position: relative;
            display: inline-block;
        }

        .logo-img {
            height: 60px;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
            transition: all 0.3s ease;
            animation: pulse 2s ease-in-out infinite;
        }

        .logo-img:hover {
            transform: scale(1.1) rotate(5deg);
            filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.4));
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .header-center {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .header-center h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0 0 15px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: relative;
            display: inline-block;
        }

        .header-center h1::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), #e74c3c);
            animation: expandLine 2s ease-out 0.5s forwards;
        }

        @keyframes expandLine {
            0% { width: 0; }
            100% { width: 100%; }
        }

        .header-center .subtitle {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.3rem;
            font-weight: 400;
            position: relative;
        }

        .header-right {
            color: rgba(255, 255, 255, 0.95);
            font-weight: 600;
            text-align: right;
            position: relative;
        }

        .header-right::before {
            content: '\f0e7';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: -30px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gold);
            animation: bounce 2s ease-in-out infinite;
        }

        /* Main Content */
        .main-wrapper {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            padding: 50px;
            margin: 40px 0;
            position: relative;
            backdrop-filter: blur(20px);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .main-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 30px;
            padding: 2px;
            background: linear-gradient(45deg, var(--primary), var(--accent), var(--gold));
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
            animation: borderGlow 3s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .section-title {
            color: var(--primary);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            padding-left: 50px;
        }

        .section-title::before {
            content: '\f0c5';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent);
            font-size: 1.5rem;
            animation: iconSpin 3s ease-in-out infinite;
        }

        @keyframes iconSpin {
            0%, 100% { transform: translateY(-50%) rotate(0deg); }
            50% { transform: translateY(-50%) rotate(10deg); }
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--dark) 0%, var(--primary) 50%, var(--secondary) 100%);
            border-radius: 25px;
            margin: 40px 0;
            padding: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 20px 40px rgba(44, 62, 80, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            animation: slideInUp 1s ease-out 0.6s both;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: slideLight 4s ease-in-out infinite;
        }

        @keyframes slideLight {
            0% { left: -100%; }
            50% { left: 100%; }
            100% { left: 100%; }
        }

        .footer-content {
            display: flex;
            align-items: flex-start;
            gap: 40px;
            position: relative;
            z-index: 2;
        }

        .footer-right {
            flex: 1;
            color: white;
        }

        .footer-company {
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: white;
            position: relative;
            padding-left: 40px;
        }

        .footer-company::before {
            content: '\f1ad';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gold);
            font-size: 1.2rem;
            animation: heartbeat 2s ease-in-out infinite;
        }

        @keyframes heartbeat {
            0%, 100% { transform: translateY(-50%) scale(1); }
            50% { transform: translateY(-50%) scale(1.1); }
        }

        .footer-info {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
            transition: all 0.3s ease;
        }

        .footer-info:hover {
            color: white;
            transform: translateX(10px);
        }

        .footer-info:nth-child(2)::before {
            content: '\f3c5';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 5px;
            color: var(--accent);
        }

        .footer-info:nth-child(3)::before {
            content: '\f095';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 5px;
            color: var(--gold);
        }

        /* Copyright */
        .copyright {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 30px 0;
            font-size: 1.1rem;
            position: relative;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin-top: 20px;
            backdrop-filter: blur(10px);
        }

        .copyright::before {
            content: '\f1f9';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-right: 10px;
            color: var(--gold);
            animation: rotate 3s linear infinite;
        }

        /* Scroll Animations */
        @keyframes slideInDown {
            from { transform: translateY(-100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes slideInUp {
            from { transform: translateY(100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(-50%); }
            40% { transform: translateY(-60%); }
            60% { transform: translateY(-55%); }
        }

        /* Hover Effects */
        .main-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.3);
        }

        header:hover {
            transform: translateY(-3px);
        }

        footer:hover {
            transform: translateY(-3px);
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: fadeOut 2s ease-out 1s forwards;
        }

        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes fadeOut {
            to { opacity: 0; visibility: hidden; }
        }
    </style>
</head>
<body>

<!-- Loading Screen -->
<div class="loading-overlay">
    <div class="loading-spinner"></div>
</div>

<!-- Floating Particles -->
<div class="particles">
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 20%; animation-delay: 1s;"></div>
    <div class="particle" style="left: 30%; animation-delay: 2s;"></div>
    <div class="particle" style="left: 40%; animation-delay: 3s;"></div>
    <div class="particle" style="left: 50%; animation-delay: 4s;"></div>
    <div class="particle" style="left: 60%; animation-delay: 5s;"></div>
    <div class="particle" style="left: 70%; animation-delay: 0.5s;"></div>
    <div class="particle" style="left: 80%; animation-delay: 1.5s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 2.5s;"></div>
</div>

<!-- Header -->
<div class="container">
    <header>
        <div class="header-content">
            <div class="header-left">
                <div class="logo-container">
                    <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
                </div>
            </div>
            <div class="header-center">
                <h1 class="animate__animated animate__fadeInDown">แบบฟอร์มประกันภัย</h1>
                <div class="subtitle animate__animated animate__fadeInUp animate__delay-1s">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
            </div>
            <div class="header-right">
                <div class="fw-semibold">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
            </div>
        </div>
    </header>
</div>

<div class="container">
    <div class="main-wrapper">
        <!-- Main Content -->
        <?php include 'views/form.php'; ?>
    </div>
</div>

<!-- Footer -->
<div class="container">
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <div class="logo-container">
                    <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-company">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
                <div class="footer-info">
                    33/4 อาคารเอ เดอะไนน์ทาวเวอร์ ชั้น 24-25 ถนนพระราม 9<br>
                    แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพมหานคร 10310
                </div>
                <div class="footer-info">
                    โทร : 02 037 9988 | อีเมล : fcicustomerservice@falconinsurance.co.th
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Copyright -->
<div class="container">
    <div class="copyright">
        © 2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Smooth scroll effect
document.addEventListener('DOMContentLoaded', function() {
    // Add more particles dynamically
    const particles = document.querySelector('.particles');
    for(let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 6 + 's';
        particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
        particles.appendChild(particle);
    }

    // Parallax effect on scroll
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('body::before');
        const speed = scrolled * 0.5;
    });

    // Add hover sound effect (optional)
    const hoverElements = document.querySelectorAll('header, .main-wrapper, footer');
    hoverElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
    });
});
</script>
</body>
</html>