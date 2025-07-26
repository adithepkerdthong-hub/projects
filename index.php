<?php
// Main entry point for the insurance form
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200, initial-scale=1.0, user-scalable=yes">
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
            min-width: 160px;
        }
        
        .logo-img {
            height: 50px;
            transition: all 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
        }
        
        .logo-img:hover {
            transform: scale(1.1);
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.4));
        }
        
        .header-center {
            flex: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .header-center h1 {
            color: white;
            font-size: 2.1rem;
            font-weight: 700;
            margin: 0 0 6px 0;
            letter-spacing: 0.5px;
        }
        
        .header-center .subtitle {
            color: rgba(255,255,255,0.92);
            font-size: 1.08rem;
            font-weight: 400;
            margin: 0;
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
        }
        
        .main-wrapper {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
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
        }
        
        footer {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 15px;
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
        }
        
        .footer-info {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .footer-info:hover {
            color: white;
        }
        
        .copyright {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 20px 0;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 10px;
        }
        
        .copyright:hover {
            background: rgba(0, 0, 0, 0.3);
            color: white;
        }
        
        /* Scroll Reveal Animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        .scroll-reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }
        
        .scroll-reveal-left.revealed {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }
        
        .scroll-reveal-right.revealed {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-reveal-scale {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease;
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