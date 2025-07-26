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
            padding: 0 15px;
        }
        
        .main-wrapper {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin: 20px 0;
            padding: 30px;
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0a3556;
            margin-bottom: 1.5rem;
        }
        
        header, footer {
            background-color: #0a3556;
            color: white;
            border-radius: 8px;
            margin: 20px 0;
            padding: 30px;
        }
        
        .logo-img {
            height: 40px;
            width: auto;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }
        
        .header-center {
            flex: 1;
        }
        
        .header-center h1 {
            margin: 0 0 0.5rem 0;
            font-size: 1.5rem;
        }
        
        .header-center .subtitle {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .header-right {
            text-align: right;
        }
        
        .footer-content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }
        
        .footer-right {
            flex: 1;
        }
        
        .footer-company {
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .footer-info {
            margin-bottom: 0.5rem;
        }
        
        .copyright {
            text-align: center;
            color: #888;
            padding: 20px 0;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
            
            .header-right {
                text-align: center;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
        

        
        .text-responsive {
            word-wrap: break-word;
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
