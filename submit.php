<?php
// Process form submission
session_start();

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $formData = $_POST;
    
    // Process signatures
    $applicantSignature = isset($_POST['signature_applicant_img']) ? $_POST['signature_applicant_img'] : '';
    $guardianSignature = isset($_POST['signature_guardian_img']) ? $_POST['signature_guardian_img'] : '';
    
    // Here you would typically:
    // 1. Validate the data
    // 2. Save to database
    // 3. Send confirmation emails
    // 4. Process any other business logic
    
    // For demonstration, we'll just set a success message
    $_SESSION['form_success'] = true;
    $_SESSION['form_message'] = 'ขอบคุณสำหรับการส่งแบบฟอร์ม เจ้าหน้าที่จะติดต่อกลับโดยเร็วที่สุด';
    
    // Redirect to confirmation page
    header("Location: confirmation.php");
    exit();
} else {
    // If someone tries to access this page directly, redirect to the form
    header("Location: index.php");
    exit();
}
?>