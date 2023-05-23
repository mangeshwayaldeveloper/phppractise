<?php

//use PHPMailer\PHPMailer\PHPMailer;

//require 'PHPMailer/PHPMailerAutoload.php';
// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set SMTP server details
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

// Set authentication credentials
$mail->SMTPAuth = true;
$mail->Username = 'mangeshwayaleducational@gmail.com';
$mail->Password = 'gxoknmdqqxodmlil';

// Set the sender's email address
$mail->setFrom('mangeshwayaleducational@gmail.com');

// Get user input
$recipient = $_POST['mail'];
$message = $_POST['msg'];
$subject = $_POST['sub'];

// Set the recipient, message, and subject
$mail->addAddress($recipient);
$mail->Body = $message;
$mail->Subject = $subject;

// Send the email
if ($mail->send()) {
    echo "The email has been sent.";
} else {
    echo "Failed to send the email. Error: " . $mail->ErrorInfo;
}
?>
