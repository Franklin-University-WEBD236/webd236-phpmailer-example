<?php
include_once 'includes/PHPMailer/PHPMailer.php';
include_once 'includes/PHPMailer/SMTP.php';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Set the hostname of the mail server
$mail->Host = getenv("MAIL_HOST");
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = getenv("POSTMARK_API_TOKEN");
//Password to use for SMTP authentication
$mail->Password = getenv("POSTMARK_API_TOKEN");

//Set who the message is to be sent from
$mail->setFrom('webd236@tylerwhitney.com', 'WEBD 236');
//Set who the message is to be sent to
$mail->addAddress('tyler.whitney@franklin.edu', 'Tyler Whitney');

//Set the subject line
$mail->Subject = 'PHPMailer Test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.txt'), __DIR__);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}


?>