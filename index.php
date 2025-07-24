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
            padding: 0;
            margin: 0;
            background-color: #f5f5f5;
            font-family: 'Sarabun', sans-serif;
            font-size: 1rem;
            color: #222;
        }
        .section-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: #0a3556;
            margin-bottom: 1.2rem;
            letter-spacing: 0.5px;
        }
        .container-custom, .main-wrapper, header, footer {
            width: 100%;
            max-width: 1140px;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
        }
        .container-custom {
            padding-left: 18px;
            padding-right: 18px;
        }
        .main-wrapper {
            background-color: #fff;
            box-shadow: 0 2px 24px rgba(0,0,0,0.10);
            padding: 36px 0;
            border-radius: 20px;
            overflow: hidden;
            margin-top: 36px;
            margin-bottom: 36px;
            transition: box-shadow 0.2s;
        }
        header, footer {
            overflow: hidden;
            border-radius: 14px;
            transition: border-radius 0.2s;
        }
        header {
            margin-top: 12px;
        }
        footer {
            margin-bottom: 12px;
        }
        .content-padding {
            padding: 0 32px;
        }
        header .content-padding, footer .content-padding {
            padding: 0 32px;
        }
        .row {
            margin-left: 0;
            margin-right: 0;
        }
        .col-md-4, .col-md-8, .col-md-2 {
            padding-left: 0;
            padding-right: 0;
        }
        @media (max-width: 1199.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 960px;
            }
            .main-wrapper {
                padding: 20px 0;
            }
            .content-padding {
                padding: 0 18px;
            }
        }
        @media (max-width: 991.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 720px;
            }
            .main-wrapper {
                padding: 12px 0;
            }
        }
        @media (max-width: 767.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 100%;
                width: 100%;
            }
            .main-wrapper {
                margin: 8px auto;
                padding: 8px 0;
                border-radius: 12px;
                box-shadow: 0 1px 8px rgba(0,0,0,0.08);
            }
            .content-padding {
                padding: 0 10px;
            }
            header, footer {
                border-radius: 10px;
                padding-top: 12px !important;
                padding-bottom: 12px !important;
            }
            .row {
                flex-direction: column !important;
                gap: 0.5rem;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            .col-md-4, .col-md-8, .col-md-2, .col-md-3, .col-md-6 {
                width: 100% !important;
                max-width: 100% !important;
                margin-bottom: 10px;
                padding-left: 5px !important;
                padding-right: 5px !important;
            }
            header .col-md-4.text-start, footer .col-md-2.text-start {
                text-align: center !important;
            }
            header .col-md-4.text-end {
                text-align: right !important;
            }
            header .col-md-4.text-start img, footer .col-md-2.text-start img {
                margin-right: 0;
                display: inline-block !important;
                height: 38px !important;
            }
            h1.h4 {
                font-size: 1.05rem !important;
                margin-bottom: 0.5rem !important;
            }
            .section-title {
                font-size: 1.05rem;
            }
            .text-center, .text-end, .text-start {
                font-size: 0.95rem !important;
            }
            footer .text-center {
                font-size: 0.85rem !important;
                word-break: break-word;
                padding-left: 10px;
                padding-right: 10px;
            }
            .form-control {
                font-size: 14px !important;
                padding: 6px 8px !important;
            }
            .border {
                border-radius: 8px !important;
            }
            .p-3 {
                padding: 10px !important;
            }
            .mb-3 {
                margin-bottom: 10px !important;
            }
        }
        @media (max-width: 575.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 100%;
                width: 100%;
            }
            .main-wrapper {
                border-radius: 8px;
                padding: 5px 0;
                margin: 5px auto;
            }
            .content-padding {
                padding: 0 8px;
            }
            header, footer {
                border-radius: 8px;
                padding-top: 8px !important;
                padding-bottom: 8px !important;
            }
            h1.h4 {
                font-size: 0.95rem !important;
            }
            .section-title {
                font-size: 0.95rem;
                margin-bottom: 8px !important;
            }
            .text-center, .text-end, .text-start {
                font-size: 0.9rem !important;
            }
            footer .text-center {
                font-size: 0.8rem !important;
                word-break: break-word;
                padding-left: 8px;
                padding-right: 8px;
            }
            .form-control {
                font-size: 13px !important;
                padding: 5px 7px !important;
            }
            .border {
                border-radius: 6px !important;
            }
            .p-3 {
                padding: 8px !important;
            }
            .mb-3 {
                margin-bottom: 8px !important;
            }
            .col-auto {
                width: 100% !important;
                margin-bottom: 5px !important;
            }
            .form-check-inline {
                margin-right: 5px !important;
            }
            .form-check-input {
                width: 14px !important;
                height: 14px !important;
            }
            .btn {
                padding: 6px 10px !important;
                font-size: 13px !important;
            }
            canvas {
                height: 120px !important;
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
<header style="background-color:#0a3556; color:white; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" class="py-4 container-custom">
    <div class="content-padding">
            <div class="row align-items-center flex-wrap">
                <div class="col-md-4 text-start">
                    <img src="./assets/logo-white.png" alt="Falcon Insurance" style="height:50px; margin-right:20px; display:inline-block;">
                </div>
                <div class="col-md-4 text-center">
                    <h1 class="h4 mb-1" style="font-weight:700;letter-spacing:0.8px;">บบฟอร์มประกันภัย</h1>
                    <div style="font-size:0.85rem;opacity:0.85;letter-spacing:0.4px;">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
                </div>
                <div class="col-md-4 text-end">
                    <div style="font-size:0.95rem;font-weight:600;letter-spacing:0.5px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
                </div>
            </div>
        </div>
</header>

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="content-padding">
        <div class="row">
            <div class="col-12">
                <?php include 'views/form.php'; ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer style="background-color:#0a3556; color:white; box-shadow: 0 -4px 6px rgba(0,0,0,0.1);" class="py-4 mt-5 container-custom">
    <div class="content-padding">
            <div class="row align-items-center mb-4 flex-wrap">
                <div class="col-md-2 text-start">
                    <img src="./assets/logo-white.png" alt="Falcon Insurance" style="height:50px; margin-right:20px; display:inline-block;">
                </div>
                <div class="col-md-8 text-center">
                    <div style="font-size:1.25rem;font-weight:600;letter-spacing:0.6px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
                </div>
            </div>
            <div class="text-center" style="margin-top:15px;letter-spacing:0.4px;font-size:0.95rem;">33/4 อาคารเอ เดอะไนน์ทาวเวอร์ ชั้น 24-25 ถนนพระราม 9 แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพมหานคร 10310</div>
            <div class="text-center" style="margin-top:10px;letter-spacing:0.4px;font-size:0.95rem;">โทร : 02 037 9988 อีเมล : fcicustomerservice@falconinsurance.co.th</div>
        </div>
</footer>

<div class="container-custom">
    <div style="margin-top:12px; margin-bottom:15px; text-align:center; color:#777; font-size:0.9rem; letter-spacing:0.3px;">© 2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
