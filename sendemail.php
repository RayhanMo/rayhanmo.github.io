<?php
use PHPmailer\PHPMailer\PHPMailer;
use PHPmailer\PHPMailer\Exception;
use PHPmailer\PHPMailer\SMTP;

require 'vendor/phpmailer\phpmailer\src\PHPMailer.php';
require 'vendor\phpmailer\phpmailer\src\Exception.php';
require 'vendor\phpmailer\phpmailer\src\SMTP.php';

require 'vendor/autoload.php';
$mail = new PHPMailer();
$mail->isSMTP();

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 465;

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

$mail->SMTPAuth = true;

$mail->Username = 'coolbeast786@gmail.com';

$mail->Password = 'jtas dxgo uvrz zcpd';

$mail->setFrom('coolbeast786@gmail.com', 'First Last');

$mail->addReplyTo('replyto@example.com', 'First Last');

$mail->addAddress('mohammadrayk@gmail.com', 'John Doe');




if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$mail->Subject = $_REQUEST['subject'];
	$mail->Body = $_REQUEST['message'];
	
	if(!$mail->send())
{
	echo 'Mailer Error'. $mail->ErrorInfo;
}
else
{
	echo 'Message sent!';
}

}

/*if($_SERVER["REQUEST_METHOD"] == "POST"){
	$to = "mohammadrayk@gmail.com"; // Your email address
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['mobile'];
	$message = $_POST['message'];
	$subject = "Contact Form Details";
	$headers = "From:" . $from;
	$result = mail($to,$subject,$message,$headers);

	if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}*/
?>