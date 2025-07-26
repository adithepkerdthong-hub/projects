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
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #0a3556 0%, #1e4a6b 100%);
            min-height: 100vh;
            padding: 20px 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shimmer 3s ease-in-out infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: translateX(-100%) rotate(45deg); }
            50% { transform: translateX(100%) rotate(45deg); }
        }
        
        header:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }
        
        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            padding: 0 10px;
        }
        .header-left {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            min-width: 160px;
        }
        .logo-img {
            height: 50px;
            transition: all 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
        }
        .logo-img:hover {
            transform: scale(1.1) rotate(5deg);
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.4));
        }
        .header-center {
            flex: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 0;
        }
        .header-center h1 {
            color: white;
            font-size: 2.1rem;
            font-weight: 700;
            margin: 0 0 6px 0;
            letter-spacing: 0.5px;
            line-height: 1.1;
        }
        .header-center .subtitle {
            color: rgba(255,255,255,0.92);
            font-size: 1.08rem;
            font-weight: 400;
            margin: 0;
            letter-spacing: 0.1px;
        }
        .header-right {
            color: white;
            font-weight: 600;
            text-align: right;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            min-width: 200px;
            font-size: 1.08rem;
            letter-spacing: 0.2px;
            position: relative;
            padding-left: 40px;
        }
        
        .header-right::before {
            content: '\f1ad';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: #f39c12;
            font-size: 1rem;
            animation: iconHeartbeat 2s ease-in-out infinite;
        }
        
        .main-wrapper {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .main-wrapper:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }
        
        .section-title {
            color: #0a3556;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
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
            color: #2980b9;
            font-size: 1.2rem;
            animation: iconSpin 3s ease-in-out infinite;
        }
        
        @keyframes iconSpin {
            0%, 100% { transform: translateY(-50%) rotate(0deg); }
            50% { transform: translateY(-50%) rotate(10deg); }
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50px;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #0a3556, #1e4a6b);
            border-radius: 2px;
        }
        
        footer {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        footer:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .footer-content {
            display: flex;
            align-items: flex-start;
            gap: 30px;
        }
        
        .footer-right {
            flex: 1;
            color: white;
        }
        
        .footer-company {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 15px;
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
            color: #f39c12;
            font-size: 1rem;
            animation: iconHeartbeat 2s ease-in-out infinite;
        }
        
        @keyframes iconHeartbeat {
            0%, 100% { transform: translateY(-50%) scale(1); }
            25% { transform: translateY(-50%) scale(1.1); }
            50% { transform: translateY(-50%) scale(1); }
            75% { transform: translateY(-50%) scale(1.05); }
        }
        
        .footer-info {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 10px;
            position: relative;
            padding-left: 30px;
            transition: all 0.3s ease;
        }
        
        .footer-info:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .footer-info:nth-child(2)::before {
            content: '\f3c5';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 5px;
            color: #2980b9;
        }
        
        .footer-info:nth-child(3)::before {
            content: '\f095';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 5px;
            color: #f39c12;
        }
        
        .copyright {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 20px 0;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .copyright:hover {
            background: rgba(0, 0, 0, 0.2);
            color: white;
        }
        
        .copyright::before {
            content: '\f1f9';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-right: 10px;
            color: #f39c12;
            animation: iconRotate 3s linear infinite;
        }
        
        @keyframes iconRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Scroll Reveal Animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        .scroll-reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .scroll-reveal-left.revealed {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .scroll-reveal-right.revealed {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-reveal-scale {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .scroll-reveal-scale.revealed {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="container">
    <header class="scroll-reveal-scale">
        <div class="header-content">
            <div class="header-left scroll-reveal-left">
                <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
            </div>
            <div class="header-center scroll-reveal">
                <h1>แบบฟอร์มประกันภัย</h1>
                <div class="subtitle">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
            </div>
            <div class="header-right scroll-reveal-right">
                บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)
            </div>
        </div>
    </header>
</div>

<div class="container">
    <div class="main-wrapper scroll-reveal">
        <!-- Main Content -->
        <?php include 'views/form.php'; ?>
    </div>
</div>

<!-- Footer -->
<div class="container">
    <footer class="scroll-reveal">
        <div class="footer-content">
            <div class="footer-left scroll-reveal-left">
                <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
            </div>
            <div class="footer-right scroll-reveal-right">
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
    <div class="copyright scroll-reveal">
        2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Scroll Reveal Animation
function revealOnScroll() {
    const reveals = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-scale');
    
    reveals.forEach(element => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 100;
        
        if (elementTop < windowHeight - elementVisible) {
            element.classList.add('revealed');
        }
    });
}

// Initial reveal for elements already in view
document.addEventListener('DOMContentLoaded', function() {
    // Add staggered delays for header elements
    const headerElements = document.querySelectorAll('header .scroll-reveal-left, header .scroll-reveal, header .scroll-reveal-right');
    headerElements.forEach((element, index) => {
        element.style.transitionDelay = `${index * 0.2}s`;
    });
    
    // Add delays for footer elements
    const footerElements = document.querySelectorAll('footer .scroll-reveal-left, footer .scroll-reveal-right');
    footerElements.forEach((element, index) => {
        element.style.transitionDelay = `${index * 0.3}s`;
    });
    
    // Initial check
    setTimeout(revealOnScroll, 100);
});

// Listen for scroll events
window.addEventListener('scroll', revealOnScroll);
</script>
</body>
</html>