<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'mangeshwayaleducational@gmail.com'; // Replace with your email address
$mail->Password = 'gxoknmdqqxodmlil'; // Replace with your email password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Sender and recipient
$to=$_POST['mail'];
$sub=$_POST['subj'];
$message=$_POST['msg'];
$mail->setFrom('mangeshwayaleducational@gmail.com', 'Mangesh wayal');
$mail->addAddress($to, 'Hello');

// Email content
$mail->Subject =$sub;
$mail->Body = $message;

if ($mail->send()) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed. Error: " . $mail->ErrorInfo;
}
?>
