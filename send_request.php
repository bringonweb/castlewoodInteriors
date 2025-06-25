<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Admin Email
$adminEmail = 'admin@castlewoodinteriors.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $country_code = htmlspecialchars(trim($_POST['country_code']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $location = htmlspecialchars(trim($_POST['location']));

    // Combine full phone number
    $fullPhone = $country_code . ' ' . $phone;

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.yourdomain.com'; // e.g. smtp.gmail.com
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@yourdomain.com'; // Your SMTP email
        $mail->Password = 'your_email_password';       // App password or email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Or ENCRYPTION_SMTPS
        $mail->Port = 587; // 465 if using SMTPS

        // Sender & recipient
        $mail->setFrom($email, $name); // From the user's email
        $mail->addAddress($adminEmail); // Admin email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Consultation Request';
        $mail->Body = "
            <h2>New Consultation Request</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$fullPhone}</p>
            <p><strong>Location:</strong> {$location}</p>
        ";

        $mail->send();
        echo "<script>alert('Your request has been sent successfully!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>