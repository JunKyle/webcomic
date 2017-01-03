<?php
	
	require 'code/includes/PHPMailer-master/PHPMailerAutoload.php';
	require 'code/includes/PHPMailer-master/vendor/autoload.php';
	
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->AuthType = 'XOAUTH2';
	// or try these settings (worked on XAMPP and WAMP):
	// $mail->Port = 587;
	// $mail->SMTPSecure = 'tls';
	 
	 
	$mail->oauthUserEmail = "claudine.manrique@gmail.com";
$mail->oauthClientId = "103013887182-5ctpg9i24a3jr950d4i10kanj1cq1mp0.apps.googleusercontent.com";
$mail->oauthClientSecret = "xWMdcPOi1vmiWAVAWjA02itG";
$mail->oauthRefreshToken = "1/FIuyJmoBaQwL0GZnvnAJw_9ShxvKSgSzHmAqD3P7wX8MEudVrK5jSpoR30zcRFq6";
	 
	 
	// $mail->Username = "claudine.manrique@gmail.com";
	// $mail->Password = "#@m@t3r@su0k@m!";
	 
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	 
	$mail->From = "claudine.manrique@gmail.com";
	$mail->FromName = "Your Name";
	 
	$mail->addAddress("psyclodingue@hotmail.fr","User 1");
	 
	$mail->Subject = "Testing PHPMailer with localhost";
	$mail->Body = "Hi,<br /><br />This system is working perfectly.";
	 
	if(!$mail->Send())
		echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	else
		echo "Message has been sent";