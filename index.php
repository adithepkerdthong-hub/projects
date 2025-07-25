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
        
        html, body {
            height: 100%;
            min-height: 100vh;
        }
        body {
            background-color: #f5f5f5;
            font-family: 'Sarabun', sans-serif;
            color: #222;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            flex: 1 0 auto;
        }
        
        .main-wrapper {
            background-color: #fff;
            box-shadow: 0 2px 24px rgba(0,0,0,0.10);
            border-radius: 20px;
            margin: 20px auto;
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
            margin: 20px auto;
            padding: 2rem;
        }
        
        .logo-img {
            height: 40px !important;
            width: auto !important;
            object-fit: contain;
            max-height: 40px !important;
            max-width: 176px !important;
        }
        
        .header-content {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 2rem;
        }
        
        .header-left {
            display: flex;
            align-items: center;
        }
        
        .header-center {
            text-align: center;
        }
        
        .header-center h1 {
            margin-bottom: 0.3rem;
            font-size: 1.3rem;
        }
        
        .header-center .subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .header-right {
            text-align: right;
            font-size: 0.95rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 2rem;
            align-items: start;
        }
        
        .footer-left {
            display: flex;
            align-items: center;
        }
        
        .footer-right {
            text-align: left;
        }
        
        .footer-company {
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .footer-info {
            line-height: 1.6;
            margin-bottom: 0.8rem;
        }
        
        .copyright {
            text-align: center;
            color: #888;
            font-size: 0.85rem;
            margin: 15px auto;
            padding: 10px 0;
        }
        
        /* Tablet Styles */
        @media (max-width: 991.98px) {
            .container {
                padding: 20px;
            }
            
            .main-wrapper {
                border-radius: 15px;
                margin: 15px auto;
                padding: 1.5rem;
            }
            
            header, footer {
                margin: 15px auto;
            }
            
            .logo-img {
                height: 35px !important;
                max-height: 35px !important;
                max-width: 154px !important;
            }
            
            .header-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 1rem;
            }
            
            .header-left, .header-right {
                justify-content: center;
                text-align: center;
                margin: 0 20px !important;
            }
            
            .header-center {
                text-align: center;
                margin: 0 20px !important;
            }
            
            .header-center h1 {
                font-size: 1.2rem;
            }
            
            .header-center .subtitle {
                font-size: 0.85rem;
            }
            
            .header-right {
                font-size: 0.9rem;
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
                padding: 15px !important;
            }
            
            .main-wrapper {
                border-radius: 10px;
                margin: 10px auto;
                padding: 1.5rem 1.2rem;
            }
            
            header, footer {
                border-radius: 10px;
                margin: 10px auto;
                padding: 1.25rem !important;
            }
            
            .logo-img {
                height: 30px !important;
                max-height: 30px !important;
                max-width: 132px !important;
            }
            
            .section-title {
                font-size: 1.1rem;
            }
            
            .header-center h1 {
                font-size: 1.1rem;
            }
            
            .header-center .subtitle {
                font-size: 0.8rem;
            }
            
            .header-right {
                font-size: 0.85rem;
            }
            
            .footer-content {
                font-size: 0.85rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 1rem;
            }
            
            .footer-left {
                justify-content: center;
                margin: 0 20px !important;
            }
            
            .footer-right {
                text-align: center;
                margin: 0 20px !important;
            }
            
            .footer-info {
                font-size: 0.8rem;
                margin-bottom: 0.6rem;
            }
        }
        
        /* Extra Small Mobile */
        @media (max-width: 375px) {
            .container {
                padding: 10px !important;
            }
            
            .main-wrapper {
                padding: 1rem 0.9rem;
            }
            
            header, footer {
                padding: 1rem !important;
            }
            
            .logo-img {
                height: 25px !important;
                max-height: 25px !important;
                max-width: 110px !important;
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

</head>
<body>

<!-- Header -->
<div class="container">
    <header>
        <div class="header-content">
        <div class="header-left">
            <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img img-responsive">
        </div>
        <div class="header-center">
            <h1 class="fw-bold text-responsive">แบบฟอร์มประกันภัย</h1>
            <div class="subtitle text-responsive">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
        </div>
        <div class="header-right">
            <div class="fw-semibold text-responsive">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
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
                <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img img-responsive">
            </div>
            <div class="footer-right">
                <div class="footer-company text-responsive">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
                <div class="footer-info text-responsive">
                    33/4 อาคารเอ เดอะไนน์ทาวเวอร์ ชั้น 24-25 ถนนพระราม 9<br>
                    แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพมหานคร 10310
                </div>
                <div class="footer-info text-responsive">
                    โทร : 02 037 9988 | อีเมล : fcicustomerservice@falconinsurance.co.th
                </div>

            </div>
        </div>
    </footer>
</div>

<!-- Copyright -->
<div class="container">
    <div class="copyright text-responsive">
        © 2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
