<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer;


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mangeshwayaleducational@gmail.com';
$mail->Password = 'gxoknmdqqxodmlil';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$problem = $_POST['typ'];
$username = $_POST['uname'];
$email = $_POST['mail'];
$location = $_POST['loc'];
$phone = $_POST['number'];
$description = $_POST['desc'];
$notification = isset($_POST['notify']) ? "Yes" : "No";

$subject = "Sports Website Feedback - Problem: $problem";

$message = "Type of Problem: $problem\n";
$message .= "Username: $username\n";
$message .= "Email: $email\n";
$message .= "Location: $location\n";
$message .= "Phone: $phone\n";
$message .= "Description of the Problem: $description\n";
$message .= "Notification of Problem Solved: $notification\n";

$to = $_POST['mail'];

$mail->setFrom('mangeshwayaleducational@gmail.com', 'Mangesh Wayal');
$mail->addAddress($to, 'Hello');

// Email content
$mail->Subject = $subject;
$mail->Body = $message;

if ($mail->send()) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed. Error: " . $mail->ErrorInfo;
}
?>