<?php
if(!empty($_POST)){


	if (isset($_POST["website"]) && $_POST["website"] != "") {
		header('Location: '.$_SERVER['PHP_SELF']);
  		exit;
	}

	$full_name = $_POST['full_name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$message = $_POST['message']; // required

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to="eloiriaglichaimae2@gmail.com";
	$email_subject="Message From ".$full_name;
	$email_message = "Form details below.\n\n";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_message .= "Full Name: ".clean_string($full_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	header("Location: contact-success.php");
  	
}
?> 