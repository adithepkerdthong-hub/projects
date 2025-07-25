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
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 12px;
        }
        
        .main-wrapper {
            background-color: #fff;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            border-radius: 18px;
            margin: 8px auto;
            padding: 2.5rem;
            width: 100%;
            line-height: 1.6;
        }
        
        /* Enhanced form section styling */
        .border.rounded {
            border: 1px solid #e9ecef !important;
            border-radius: 12px !important;
            background: #fafafa !important;
            padding: 1.75rem !important;
            margin-bottom: 2rem !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            transition: box-shadow 0.3s ease;
        }
        
        .border.rounded:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        
        /* Enhanced form controls */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 6px;
            padding: 0.65rem 1rem;
            font-size: 0.95rem;
            transition: all 0.2s ease;
            margin-bottom: 0.75rem;
        }
        
        .form-control:focus {
            border-color: #0a3556;
            box-shadow: 0 0 0 0.2rem rgba(10, 53, 86, 0.1);
        }
        
        /* Enhanced labels */
        label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        /* Enhanced form rows */
        .row.mb-2 {
            margin-bottom: 1.25rem;
        }
        
        .row.mb-1 {
            margin-bottom: 1rem;
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0a3556;
            margin-bottom: 1.75rem;
            margin-top: 2.5rem;
            letter-spacing: 0.5px;
            text-align: left;
            padding-left: 0;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid #e9ecef;
            position: relative;
        }
        
        .section-title:first-child {
            margin-top: 0;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #0a3556, #1e5a8a);
            border-radius: 2px;
        }
        
        header, footer {
            background-color: #0a3556;
            color: white;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.10);
            margin: 4px auto;
            padding: 20px;
            text-align: left;
        }
        
        .logo-img {
            height: 40px !important;
            width: auto !important;
            object-fit: contain;
            max-height: 40px !important;
            max-width: 176px !important;
        }
        
        .header-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 1.5rem;
            justify-content: flex-start;
        }
        
        .header-left {
            display: flex;
            align-items: center;
        }
        
        .header-center {
            text-align: left;
            padding-left: 12px;
            margin-left: 20px;
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
            text-align: left;
            color: #888;
            font-size: 1rem;
            margin: 24px auto 0 auto;
            padding: 12px 0;
        }
        
        /* Tablet Styles */
        @media (max-width: 991.98px) {
            .container {
                padding: 0 16px;
            }
            .main-wrapper {
                border-radius: 14px;
                margin: 6px auto;
                padding: 2rem;
                line-height: 1.55;
            }
            
            .border.rounded {
                padding: 1.5rem !important;
                margin-bottom: 1.75rem !important;
                border-radius: 10px !important;
            }
            header, footer {
                margin: 6px auto;
                padding: 18px;
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
                padding: 0 12px;
            }
            
            .header-center {
                text-align: center;
                padding: 0 12px;
                margin-left: 0;
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
                padding-left: 0;
            }
        }
        
        /* Mobile Styles */
        @media (max-width: 575.98px) {
            body {
                padding: 0;
            }
            .container {
                padding: 0 20px !important;
            }
            .main-wrapper {
                border-radius: 16px;
                margin: 8px auto;
                padding: 1.5rem;
                line-height: 1.5;
            }
            
            .border.rounded {
                padding: 1.25rem !important;
                margin-bottom: 1.5rem !important;
                border-radius: 10px !important;
            }
            header, footer {
                border-radius: 16px;
                margin: 8px auto;
                padding: 24px !important;
                text-align: center;
            }
            header {
                margin-bottom: 8px !important;
            }
            .header-content {
                flex-direction: column;
                gap: 1.2rem;
                align-items: center;
                padding: 0 16px;
            }
            
            .header-center {
                padding-left: 0;
                margin-left: 0;
            }
            .section-title {
                font-size: 1.3rem;
                margin-bottom: 1.2rem;
                text-align: center;
                padding-left: 0;
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
                font-size: 1.2rem;
            }
            
            .header-center .subtitle {
                font-size: 0.9rem;
            }
            
            .header-right {
                font-size: 0.9rem;
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
                padding: 0 16px;
            }
            
            .footer-right {
                text-align: center;
                padding: 0 16px;
            }
            
            .footer-info {
                font-size: 0.85rem;
                margin-bottom: 0.8rem;
            }
        }
        
        /* Extra Small Mobile */
        @media (max-width: 375px) {
            .container {
                padding: 0 16px !important;
            }
            
            .container:first-child {
                padding-top: 16px !important;
            }
            
            .container:last-child {
                padding-bottom: 16px !important;
            }
            
            .main-wrapper {
                margin: 6px auto;
                padding: 18px;
            }
            
            header, footer {
                margin: 6px auto;
                padding: 18px !important;
            }
            
            .logo-img {
                height: 25px !important;
                max-height: 25px !important;
                max-width: 110px !important;
            }
            
            .section-title {
                font-size: 1.2rem;
                padding-left: 0;
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
        .container:first-child {
            padding-top: 12px;
        }
        
        .container:last-child {
            padding-bottom: 12px;
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
