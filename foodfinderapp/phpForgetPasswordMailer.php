<?php
error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
//$mail->SMTPDebug  = 0;
//$mail->Debugoutput = 'html';
$mail->From = "Foodpark";
$mail->FromName = "Foodpark";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // 465 Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;

$mail->Username = "abco@gmail.com"; // SMTP username
$mail->Password = "abc"; // SMTP password
$mail->setFrom("abc@gmail.com");  //add sender email address.
$mail->AddAddress("$email");
$mail->WordWrap = 50; // set word wrap



$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'Foodpark Reset Password Notification';


$message = 'Dear '.$firstName.',<br><br>

Your request to reset your password for your account has been received.<br><br>

Please click this link below to reset your account password:<br>
<a href="http://47.74.176.36/resetPasswordVerification.php?email='.$email.'">http://47.74.176.36/resetPasswordVerification.php?email='.$email.'</a><br><br>

Regards,<br><br>

    Foodpark Co. Admin

';

$mail->Body = $message;

if($mail->Send()) {echo " ";}
else {echo "";}
?>
