<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "phpmailer/vendor/autoload.php";

$mail = new PHPMailer;

$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

$mail->addAddress("vivek65k@gmail.com", "Recipient Name");

//Provide file path and name of the attachments
$mail->addAttachment("file.txt", "File.txt");        
$mail->addAttachment("images/profile.png"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}