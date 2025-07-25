<?php
session_start();

// Check if user came from form submission
if (!isset($_SESSION['form_success'])) {
    header("Location: index.php");
    exit();
}

// Get message
$message = isset($_SESSION['form_message']) ? $_SESSION['form_message'] : 'ขอบคุณสำหรับการส่งแบบฟอร์ม';

// Clear session variables
unset($_SESSION['form_success']);
unset($_SESSION['form_message']);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ส่งแบบฟอร์มสำเร็จ - บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)</title>
    <link rel="icon" href="./assets/icon-white.png" type="image/png">
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
            margin-top: 25px;
            margin-bottom: 25px;
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
            padding: 30px 0;
            border-radius: 12px;
            overflow: hidden;
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body text-center p-5" style="border-radius:10px;">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#0a3556" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        <h2 class="mb-4" style="font-weight:600;letter-spacing:0.5px;">ส่งแบบฟอร์มสำเร็จ</h2>
                        <p class="mb-4" style="font-size:1.1rem;"><?php echo $message; ?></p>
                        <a href="index.php" class="btn btn-primary btn-lg px-4">กลับสู่หน้าหลัก</a>
                    </div>
                </div>
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