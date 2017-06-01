<?php 
	$fullname = $_POST['fullname'];
	$emailaddress = $_POST['emailaddress'];
	$number = $_POST['number'];
	$message = $_POST['message'];
	$formcontent = "From: $fullname \n Email: $emailaddress \n Phone: $number \n Message: $message";
	$recipient = "info@effluxcompany.com";
	$subject = "Efflux Contact Form";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thank.php");
?>