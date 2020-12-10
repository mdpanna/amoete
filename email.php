<?php
require_once('mail/class/PHPMailerAutoload.php');
$subject='Information';
$body_of_your_email='Hello';
$mail = new PHPMailer();

$mail->IsSMTP();                       // telling the class to use SMTP

$mail->SMTPDebug = 0;                  
// 0 = no output, 1 = errors and messages, 2 = messages only.

$mail->SMTPAuth = true;                // enable SMTP authentication
$mail->SMTPSecure = "tls";              // sets the prefix to the servier
$mail->Host = "mail.amoete.com";        // sets Gmail as the SMTP server
$mail->Port = 587;                     // set the SMTP port for the GMAIL

$mail->Username = "info@amoete.com";  // Gmail username
$mail->Password = "6K.KHLsbA=~4";      // Gmail password

$mail->CharSet = 'windows-1250';
$mail->SetFrom ('info@amoete.com', 'Information');
$mail->AddAddress ( 'mdpanna600@gmail.com' );
$mail->Subject = $subject;
$mail->ContentType = 'text/plain';
$mail->IsHTML(false);

$mail->Body = $body_of_your_email; 
// you may also use $mail->Body = file_get_contents('your_mail_template.html');

// you may also use this format $mail->AddAddress ($recipient);

if(!$mail->Send())
{
      echo "Mailer Error: " . $mail->ErrorInfo;
} else 
{
        echo "Successfully sent!";
}

// You may delete or alter these last lines  

?>