<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';  // Fixed missing semicolon

// DB Config
$host = 'localhost';
$db = 'u747777525_Castlewoodweb';
$user = 'u747777525_Castlewoodweb';
$pass = 'Castlewood@12!';

// Admin email
$adminEmail = 'adityagupta80041@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Validate and sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validation
    if (empty($name))
        $errors[] = "Name is required";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "Valid email is required";
    if (empty($phone))
        $errors[] = "Phone number is required";
    if (empty($message))
        $errors[] = "Message is required";

    if (empty($errors)) {
        try {
            // Database connection
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Store in database with timestamp
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, phone, service, message, created_at) 
                                 VALUES (:name, :email, :phone, :service, :message, NOW())");

            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':service' => $service,
                ':message' => $message
            ]);

            // Send email with PHPMailer
            $mail = new PHPMailer(true);

            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'adityagupta80041@gmail.com';
            $mail->Password = 'zpzlkerohziiaouu';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Email settings
            $mail->setFrom($email, $name);
            $mail->addAddress($adminEmail);
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = "
                <h2>New Message from Contact Form</h2>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Service:</strong> {$service}</p>
                <p><strong>Message:</strong><br>{$message}</p>
            ";

            $mail->send();

            // Close database connection
            $pdo = null;

            // Redirect to thank you page
            header("Location: thank-you.php");
            exit();

        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
            echo "<script>
                alert('An error occurred. Please try again later.');
                window.history.back();
            </script>";
            exit();
        } catch (Exception $e) {
            error_log("Mail Error: " . $mail->ErrorInfo);
            echo "<script>
                alert('Failed to send email. Please try again later.');
                window.history.back();
            </script>";
            exit();
        }
    } else {
        // Display validation errors
        echo "<script>
            alert('Please fix the following errors:\\n- " . implode("\\n- ", $errors) . "');
            window.history.back();
        </script>";
        exit();
    }
} else {
    // Invalid request method
    header("HTTP/1.1 405 Method Not Allowed");
    echo "<script>window.location.href = 'contact-us.php';</script>";
    exit();
}
?>