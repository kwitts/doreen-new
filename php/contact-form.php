<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

require 'php-mailer/PHPMailerAutoload.php';

// Your email address
$to = 'what.happens@gmail.com';

$subject = 'New Message from Website';

$mail->SMTPDebug = 2;


if($to) {

	$name = $_POST['name'];
	$email = $_POST['email'];

	$fields = array(
		0 => array(
			'text' => 'Name',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'Subject',
			'val' => $_POST['subject']
		),
		4 => array(
			'text' => 'message',
			'val' => $_POST['message']
		)
	);

	$message = "";

	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}

	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP

	// // Optional Settings
	$mail->Host = 'mail.curlqueen.net';				  // Specify main and backup server
	// $mail->SMTPAuth = true;                             // Enable SMTP authentication
	// $mail->Username = 'salondor';             		  // SMTP username
	// $mail->Password = 'secret';                         // SMTP password
	// $mail->Port       = 587;								// SMTP port
	$mail->SMTPSecure = 'ssl';                          // Enable encryption, 'ssl' also accepted

	$mail->From = $to;
	$mail->FromName = $_POST['name'];
	$mail->AddAddress($to);								  // Add a recipient
	$mail->AddReplyTo($email, $name);

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->CharSet = 'UTF-8';

	$mail->Subject = $subject;
	$mail->Body    = $message;

	$arrResult = array ('response'=>'success');

	if(!$mail->Send()) {
	   $arrResult = array ('response'=>'error');
	}

	echo json_encode($arrResult);

} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>
