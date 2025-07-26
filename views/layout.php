<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Falcon Insurance Form</title>
    <style>
        body { background: #0a3556; }
        .form-title { font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; }
        .section-title { font-weight: bold; margin-top: 1.5rem; }
        .border-box { border: 1px solid #333; padding: 2rem; background: #fff; border-radius: 1rem; }
        .fixed-container { width: 1200px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="fixed-container" style="padding: 40px 0;">
        <div class="border-box shadow" style="width: 100%;">
            <?php require 'form.php'; ?>
        </div>
    </div>
    <footer class="text-center text-white py-3" style="background: #05213a; position: relative; width: 100%;">
        สงวนลิขสิทธิ์ © <?php echo date('Y'); ?> Falcon Insurance
    </footer>
</body>
</html>