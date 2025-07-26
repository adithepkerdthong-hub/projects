<?php
// Main entry point for the insurance form
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มประกันภัย - บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</title>
    <link rel="icon" href="assets/icon-white.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-family: 'Sarabun', sans-serif;
            color: #2c3e50;
        }
        
        .container {
            max-width: 1200px;
        }
        
        header {
            background: linear-gradient(135deg, #0a3556 0%, #1e4a6b 100%);
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(10, 53, 86, 0.3);
            margin: 30px 0;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: rgba(255, 255, 255, 0.05);
            transform: rotate(45deg);
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 30px;
            position: relative;
            z-index: 2;
        }
        
        .header-center {
            flex: 1;
            text-align: center;
        }
        
        .header-center h1 {
            color: white;
            font-size: 2rem;
            font-weight: 700;
            margin: 0 0 10px 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .header-center .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            font-weight: 400;
        }
        
        .header-right {
            color: rgba(255, 255, 255, 0.95);
            font-weight: 600;
            text-align: right;
        }
        
        .logo-img {
            height: 50px;
            filter: brightness(1.1);
        }
        
        .main-wrapper {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(10, 53, 86, 0.1);
            padding: 40px;
            margin: 30px 0;
            border: 1px solid rgba(10, 53, 86, 0.1);
        }
        
        .section-title {
            color: #0a3556;
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 3px solid #0a3556;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #0a3556, #1e4a6b);
        }
        
        footer {
            background: linear-gradient(135deg, #0a3556 0%, #1e4a6b 100%);
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(10, 53, 86, 0.3);
            margin: 30px 0;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 100%;
            height: 200%;
            background: rgba(255, 255, 255, 0.05);
            transform: rotate(-45deg);
        }
        
        .footer-content {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            position: relative;
            z-index: 2;
        }
        
        .footer-right {
            flex: 1;
            color: white;
        }
        
        .footer-company {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: white;
        }
        
        .footer-info {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        .copyright {
            text-align: center;
            color: #6c757d;
            padding: 25px 0;
            font-size: 0.95rem;
            border-top: 1px solid #dee2e6;
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            .header-content, .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .header-right {
                text-align: center;
            }
            
            .header-center h1 {
                font-size: 1.6rem;
            }
            
            .main-wrapper {
                padding: 25px;
            }
            
            header, footer {
                padding: 25px;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="container">
    <header>
        <div class="header-content">
            <div class="header-left">
                <img src="assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
            </div>
            <div class="header-center">
                <h1 class="fw-bold">แบบฟอร์มประกันภัย</h1>
                <div class="subtitle">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
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
                <img src="assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
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
</body>
</html>