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
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 30px;
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
        }
        
        .header-center .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
        }
        
        .header-right {
            color: white;
            font-weight: 600;
            text-align: right;
        }
        
        .logo-img {
            height: 50px;
        }
        
        .main-wrapper {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
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
        }
        
        .copyright {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 20px 0;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
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
                <h1>แบบฟอร์มประกันภัย</h1>
                <div class="subtitle">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
            </div>
            <div class="header-right">
                <div>บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
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