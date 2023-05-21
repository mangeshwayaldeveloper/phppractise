<?php

ini_set('SMTP','imap.gmail.com');
ini_set("smtp_port",'465');
$from='mangeshwayal4@gmail.com';
$mail=$_POST['mail'];
$message=$_POST['msg'];
$sub=$_POST['sub'];

$headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$send=mail($mail,$message,$sub,$headers);
if($send==true){
    echo "The mail is sent";
}else{
    echo "mail is not sended";
}

?>