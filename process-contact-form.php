<?php 
	$fullname = $_POST['Full Name'];
	$emailaddress = $_POST['Email'];
	$number = $_POST['Phone Number'];
	$message = $_POST['Description'];
	$formcontent = "From: $fullname \n Message: $message \n Email: $emailaddress \n Phone: $number";
	$recipient = "info@effluxcompany.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thankyou.html");
?>