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
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: #f5f5f5;
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 20px 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .main-wrapper {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 20px 0;
        }
        
        .section-title {
            color: #0a3556;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        header, footer {
            background: #0a3556;
            color: white;
            border-radius: 10px;
            padding: 30px;
            margin: 20px 0;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        
        .header-center {
            flex: 1;
        }
        
        .header-center h1 {
            margin: 0 0 10px 0;
            font-size: 1.4rem;
        }
        
        .header-center .subtitle {
            opacity: 0.9;
        }
        
        .header-right {
            text-align: right;
        }
        
        .logo-img {
            height: 40px;
        }
        
        .footer-content {
            display: flex;
            align-items: flex-start;
            gap: 30px;
        }
        
        .footer-right {
            flex: 1;
        }
        
        .footer-company {
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .footer-info {
            margin-bottom: 10px;
        }
        
        .copyright {
            text-align: center;
            color: #666;
            padding: 20px 0;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }
            
            .header-content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .header-right {
                text-align: center;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .main-wrapper {
                padding: 20px;
            }
            
            header, footer {
                padding: 20px;
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
                <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
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
                <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
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