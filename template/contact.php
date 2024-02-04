<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('dbconfig.php');
include('rules.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $emailSubject = 'Navigating College Like a Pro! Your Ultimate College Survival Guide';
    $emailMessage = "Dear $name,<br>
    Thank you for reaching out! 🌟 We're thrilled to assist you on your college journey. 🎓 Whether you're a freshman navigating the exciting world of campus life or a seasoned student looking for pro tips, our College Survival Guide is here to help you thrive! 🚀<br><br>

    Discover insider strategies for acing exams, managing time like a boss, and finding the best study spots. From surviving late-night cram sessions to mastering the art of balancing academics and social life, we've got you covered! 📚👫<br><br>

    Stay tuned for a wealth of resources, tips, and inspiration to make your college experience unforgettable. 🌈 Let's conquer this academic adventure together! 🤝<br><br>

    Best regards,<br>
    The CSGuide Team
    ";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'perezstephenmathew360@gmail.com';
        $mail->Password   = 'zcko hhjz eais gsju';   // created via google app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('perezstephenmathew360@gmail.com', 'CS Guide');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailMessage;

        // Send email
        $mail->send();

        echo "<script>alert(Thank you for subscribing! You will receive an email with the latest news shortly.);</script>";
        userContact($name, $email, $message);
        header("location: contactus.html");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: contactus.html");
    }
}
