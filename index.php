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
        body {
            background-color: #f5f5f5;
            font-family: 'Sarabun', sans-serif;
            color: #222;
        }
        .main-wrapper {
            background-color: #fff;
            box-shadow: 0 2px 24px rgba(0,0,0,0.10);
            border-radius: 20px;
            margin-top: 36px;
            margin-bottom: 36px;
            padding: 2rem 1rem;
        }
        .section-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: #0a3556;
            margin-bottom: 1.2rem;
            letter-spacing: 0.5px;
        }
        header, footer {
            background-color: #0a3556;
            color: white;
            border-radius: 14px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }
        header {
            margin-top: 12px;
        }
        .logo-img {
            height: 50px;
            margin-right: 20px;
        }
        @media (max-width: 991.98px) {
            .main-wrapper {
                border-radius: 12px;
                margin-top: 16px;
                margin-bottom: 16px;
                padding: 1rem 0.5rem;
            }
            .logo-img {
                height: 38px;
                margin-right: 10px;
            }
        }
        @media (max-width: 575.98px) {
            .main-wrapper {
                border-radius: 8px;
                margin-top: 8px;
                margin-bottom: 8px;
                padding: 0.5rem 0.2rem;
            }
            .logo-img {
                height: 32px;
                margin-right: 5px;
            }
            .section-title {
                font-size: 1.05rem;
            }
        }
    </style>
    <link rel="stylesheet" href="./assets/responsive.css">
    <link rel="stylesheet" href="./assets/text-align.css">
    <link rel="stylesheet" href="./assets/header-fix.css">
    <link rel="stylesheet" href="./assets/better-responsive.css">
    <link rel="stylesheet" href="./assets/mobile-fix.css">
    <link rel="stylesheet" href="./assets/mobile-specific-fix.css">
</head>
<body class="py-3">

<!-- Header -->
<header class="container mb-4 py-3">
    <div class="row align-items-center">
        <div class="col-12 col-md-4 text-center text-md-start mb-2 mb-md-0">
            <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
        </div>
        <div class="col-12 col-md-4 text-center mb-2 mb-md-0">
            <h1 class="h4 mb-1 fw-bold" style="letter-spacing:0.8px;">แบบฟอร์มประกันภัย</h1>
            <div style="font-size:0.95rem;opacity:0.85;letter-spacing:0.4px;">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
        </div>
        <div class="col-12 col-md-4 text-center text-md-end">
            <div class="fw-semibold" style="font-size:1rem;letter-spacing:0.5px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
        </div>
    </div>
</header>

<div class="container">
    <div class="main-wrapper">
        <!-- Main Content -->
        <div class="row">
            <div class="col-12">
                <?php include 'views/form.php'; ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container py-3 mt-5">
    <div class="row align-items-center mb-3">
        <div class="col-12 col-md-2 text-center text-md-start mb-2 mb-md-0">
            <img src="./assets/logo-white.png" alt="Falcon Insurance" class="logo-img">
        </div>
        <div class="col-12 col-md-8 text-center">
            <div class="fw-bold" style="font-size:1.15rem;letter-spacing:0.6px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
        </div>
    </div>
    <div class="text-center" style="margin-top:10px;letter-spacing:0.4px;font-size:0.95rem;">33/4 อาคารเอ เดอะไนน์ทาวเวอร์ ชั้น 24-25 ถนนพระราม 9 แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพมหานคร 10310</div>
    <div class="text-center" style="margin-top:8px;letter-spacing:0.4px;font-size:0.95rem;">โทร : 02 037 9988 อีเมล : fcicustomerservice@falconinsurance.co.th</div>
    <div class="text-center mt-3" style="color:#bbb;font-size:0.9rem;letter-spacing:0.3px;">© 2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
