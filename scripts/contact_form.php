<?php
	define('TARGET_MAIL', 'ruda@rapan.cz');
	
	$subject = "Kontaktní formulář: ".$_POST['name'];
	$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
	
    $headers = "From: ".TARGET_MAIL."\r\n";
    $headers .= "Reply-To: ".$_POST['email']."\r\n";
    $headers .= "Return-Path: ".TARGET_MAIL."\r\n";
    $headers .= "Organization: Rudolf Rapaň\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8\r\n";
	
	$message = "Celé jméno / Název společnosti: ".$_POST['name']."\n";
	$message .= "E-Mail: ".$_POST['email']."\n\n";
	$message .= "Telefon: ".$_POST['phone']."\n";
	$message .= "Zpráva:\n\n".$_POST['comments']."\n";
	
	mail(TARGET_MAIL, $subject, $message, $headers);

	$subject = "Potvrzení přijetí vzkazu";
	$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
    $headers = "From: ".TARGET_MAIL."\r\n";
    $headers .= "Reply-To: ".TARGET_MAIL."\r\n";
    $headers .= "Return-Path: ".TARGET_MAIL."\r\n";
    $headers .= "Organization: Rudolf Rapaň\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8\r\n";

	$message = "Váš vzkaz jsme úspěšně přijali. Bude zpracován do 24 hodin.\n\nS pozdravem, Rudolf Rapaň.";
	
	mail($_POST['email'], $subject, $message, $headers);
?>