<?php 
	$fullname = $_POST['Full Name'];
	$emailaddress = $_POST['Email'];
	$address = $_POST['Address'];
	$number = $_POST['Phone Number'];
	$timeline = $_POST['Timeline'];
	$amount = $_POST['Budget'];
	$Description = $_POST['Description'];
	$formcontent = "From: $fullname \n Email: $emailaddress \n Address: $address \n Phone: $number \n Timeline: $timeline \n Budget: $amount \n Description: $Description";
	$recipient = "info@effluxcompany.com";
	$subject = "Quote Form";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thankyou.html");
?>