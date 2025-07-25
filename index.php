<?php
// Main entry point for the insurance form
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>แบบฟอร์มประกันภัย - บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</title>
    <link rel="icon" href="assets/icon-white.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: #f5f5f5;
            font-family: 'Sarabun', sans-serif;
            color: #222;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .main-wrapper {
            background-color: #fff;
            box-shadow: 0 2px 24px rgba(0,0,0,0.10);
            border-radius: 20px;
            margin: 20px 0;
            padding: 2rem;
            width: 100%;
        }
        
        .section-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: #0a3556;
            margin-bottom: 1.2rem;
            letter-spacing: 0.5px;
            text-align: center;
        }
        
        header, footer {
            background-color: #0a3556;
            color: white;
            border-radius: 14px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin: 15px 0;
            padding: 1.5rem;
        }
        
        .logo-img {
            height: 25px !important;
            width: auto !important;
            object-fit: contain;
            max-height: 25px !important;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .header-center {
            text-align: center;
            flex: 1;
            min-width: 250px;
        }
        
        .header-right {
            text-align: right;
            min-width: 200px;
        }
        
        .footer-content {
            text-align: center;
        }
        
        .footer-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 1rem;
        }
        
        /* Tablet Styles */
        @media (max-width: 991.98px) {
            .container {
                padding: 0 10px;
            }
            
            .main-wrapper {
                border-radius: 15px;
                margin: 15px 0;
                padding: 1.5rem;
            }
            
            .logo-img {
                height: 22px !important;
                max-height: 22px !important;
            }
            
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .header-left, .header-right {
                justify-content: center;
                text-align: center;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
        }
        
        /* Mobile Styles */
        @media (max-width: 575.98px) {
            body {
                padding: 5px;
            }
            
            .container {
                padding: 0 5px;
            }
            
            .main-wrapper {
                border-radius: 10px;
                margin: 10px 0;
                padding: 1rem;
            }
            
            header, footer {
                border-radius: 10px;
                margin: 10px 0;
                padding: 1rem;
            }
            
            .logo-img {
                height: 20px !important;
                max-height: 20px !important;
            }
            
            .section-title {
                font-size: 1.1rem;
            }
            
            .header-center h1 {
                font-size: 1.1rem !important;
                margin-bottom: 0.5rem;
            }
            
            .header-center div {
                font-size: 0.85rem !important;
            }
            
            .header-right {
                font-size: 0.9rem;
            }
            
            .footer-content {
                font-size: 0.85rem;
            }
            
            .footer-header {
                flex-direction: column;
                gap: 10px;
            }
        }
        
        /* Extra Small Mobile */
        @media (max-width: 375px) {
            .main-wrapper {
                padding: 0.75rem;
            }
            
            header, footer {
                padding: 0.75rem;
            }
            
            .logo-img {
                height: 18px !important;
                max-height: 18px !important;
            }
            
            .section-title {
                font-size: 1rem;
            }
        }
        
        /* Utility Classes */
        .text-responsive {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .img-responsive {
            max-width: 100%;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="./assets/responsive.css">
    <link rel="stylesheet" href="./assets/text-align.css">
    <link rel="stylesheet" href="./assets/header-fix.css">
    <link rel="stylesheet" href="./assets/better-responsive.css">
    <link rel="stylesheet" href="./assets/mobile-fix.css">
    <link rel="stylesheet" href="./assets/mobile-specific-fix.css">
</head>
<body>

<!-- Header -->
<header class="container">
    <div class="header-content">
        <div class="header-left">
            <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img img-responsive">
        </div>
        <div class="header-center">
            <h1 class="h4 mb-1 fw-bold text-responsive" style="letter-spacing:0.8px;">แบบฟอร์มประกันภัย</h1>
            <div class="text-responsive" style="font-size:0.95rem;opacity:0.85;letter-spacing:0.4px;">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
        </div>
        <div class="header-right">
            <div class="fw-semibold text-responsive" style="font-size:1rem;letter-spacing:0.5px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
        </div>
    </div>
</header>

<div class="container">
    <div class="main-wrapper">
        <!-- Main Content -->
        <?php include 'views/form.php'; ?>
    </div>
</div>

<!-- Footer -->
<footer class="container">
    <div class="footer-content">
        <div class="footer-header">
            <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img img-responsive">
            <div class="fw-bold text-responsive" style="font-size:1.15rem;letter-spacing:0.6px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
        </div>
        <div class="text-responsive" style="margin-top:10px;letter-spacing:0.4px;font-size:0.95rem;">33/4 อาคารเอ เดอะไนน์ทาวเวอร์ ชั้น 24-25 ถนนพระราม 9 แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพมหานคร 10310</div>
        <div class="text-responsive" style="margin-top:8px;letter-spacing:0.4px;font-size:0.95rem;">โทร : 02 037 9988 อีเมล : fcicustomerservice@falconinsurance.co.th</div>
        <div class="mt-3 text-responsive" style="color:#bbb;font-size:0.9rem;letter-spacing:0.3px;">© 2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์</div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
