<?php
// Main entry point for the insurance form
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มประกันภัย - บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</title>
    <link rel="icon" href="assets/icon-white.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color: #f5f5f5;
            font-family: 'Sarabun', sans-serif;
        }
        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #0a3556;
            margin-bottom: 1.2rem;
        }
        .container-custom, .main-wrapper, header, footer {
            width: 100%;
            max-width: 1140px;
            margin-left: auto;
            margin-right: auto;
        }
        .container-custom {
            padding-left: 15px;
            padding-right: 15px;
        }
        .main-wrapper {
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
            padding: 32px 0;
            border-radius: 18px;
            overflow: hidden;
            margin-top: 32px;
            margin-bottom: 32px;
        }
        header, footer {
            overflow: hidden;
            border-radius: 12px;
        }
        header {
            margin-top: 10px;
        }
        footer {
            margin-bottom: 10px;
        }
        .content-padding {
            padding: 0 30px;
        }
        header .content-padding, footer .content-padding {
            padding: 0 30px;
        }
        @media (max-width: 1199.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 960px;
            }
            .main-wrapper {
                padding: 16px 0;
            }
            .content-padding {
                padding: 0 20px;
            }
        }
        @media (max-width: 991.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 720px;
            }
        }
        @media (max-width: 767.98px) {
            .container-custom, .main-wrapper, header, footer {
                max-width: 540px;
            }
            .main-wrapper {
                margin: 8px auto;
                padding: 8px 0;
                border-radius: 10px;
            }
            .content-padding {
                padding: 0 15px;
            }
            header, footer {
                border-radius: 10px;
            }
            .row {
                flex-direction: column !important;
            }
            .col-md-4, .col-md-8, .col-md-2, .col-md-3, .col-md-6 {
                width: 100% !important;
                max-width: 100% !important;
                text-align: center !important;
                margin-bottom: 15px;
            }
            header .col-md-4.text-start, footer .col-md-2.text-start {
                text-align: center !important;
            }
            header .col-md-4.text-start img, footer .col-md-2.text-start img {
                margin-right: 0;
                display: inline-block !important;
            }
        }

    </style>
</head>
<body class="py-3">

<!-- Header -->
<div class="container-custom">
    <header style="background-color:#0a3556; color:white; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" class="py-4">
        <div class="content-padding">
            <div class="row align-items-center flex-wrap">
                <div class="col-md-4 text-start">
                    <img src="./assets/logo-white.png" alt="Falcon Insurance" style="height:50px; margin-right:20px; display:inline-block;">
                </div>
                <div class="col-md-4 text-center">
                    <h1 class="h4 mb-1" style="font-weight:700;letter-spacing:0.8px;">แบบฟอร์มประกันภัย</h1>
                    <div style="font-size:0.85rem;opacity:0.85;letter-spacing:0.4px;">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
                </div>
                <div class="col-md-4 text-end">
                    <div style="font-size:1.15rem;font-weight:600;letter-spacing:0.5px;">บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</div>
                </div>
            </div>
        </div>
    </header>
</div>

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
<div class="container-custom">
    <footer style="background-color:#0a3556; color:white; box-shadow: 0 -4px 6px rgba(0,0,0,0.1);" class="py-4 mt-5">
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
</div>

<div class="container-custom">
    <div style="margin-top:12px; margin-bottom:15px; text-align:center; color:#777; font-size:0.9rem; letter-spacing:0.3px;">© 2025 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) สงวนลิขสิทธิ์</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
