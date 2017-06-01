<?php 
	$fullname = $_POST['fullname'];
	$emailaddress = $_POST['emailaddress'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$timeline = $_POST['timeline'];
	$amount = $_POST['amount'];
	$Description = $_POST['Description'];
	$formcontent = "From: $fullname \n Email: $emailaddress \n Address: $address \n Phone: $number \n Timeline: $timeline \n Budget: $amount \n Description: $Description";
	$recipient = "info@effluxcompany.com";
	$subject = "Efflux Quote Form";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thank.php");
?>