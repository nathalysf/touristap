<?php

	//Bluehost Example
	$emailto = 'subscriptions@tourstap.com';
	$toname = 'Tourstap Susbcription';
	$emailfrom = $_POST["email"];
	$fromname = 'Tourstap Susbcription';
	$subject = 'Subscriber from our counter page';
	$messagebody = 'Hola este es mi correo ' . $emailfrom . ', solicito que me puedan enviar la información.';
	$headers = 
		'Return-Path: ' . $emailfrom . "\r\n" . 
		'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
		'X-Priority: 3' . "\r\n" . 
		'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
		'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" . 
		'Content-Transfer-Encoding: 8bit' . "\r\n" . 
		'Content-Type: text/plain; charset=UTF-8' . "\r\n";
	$params = '-f ' . $emailfrom;
	$test = mail($emailto, $subject, $messagebody, $headers, $params);
	// $test should be TRUE if the mail function is called correctly
	header("Location: /end.html");
?>