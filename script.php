<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader or PHPMailer directly
require 'C:/xampp/htdocs/unimax/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/unimax/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/unimax/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $mobile = isset($_POST["mobile"]) ? htmlspecialchars(trim($_POST["mobile"])) : 'Not provided';

    // PHPMailer configuration
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';          // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'kaushalmsibca@gmail.com'; // Your Gmail address
        $mail->Password = 'hmquanngabhdysha';        // Your Gmail password (app-specific password if 2FA enabled)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('kaushalmsibca@gmail.com');

        // Content
        $mail->isHTML(false);  // Set email format to plain text
        $mail->Subject = "Contact Us Message from $name";
        $mail->Body = "Name of Sender: $name\nEmail of Sender: $email\nMobile Number: $mobile\nMessage Description:\n$message";

        // Send email
        $mail->send();
        header("Location: confirmation.php?name=".urlencode($name));
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
