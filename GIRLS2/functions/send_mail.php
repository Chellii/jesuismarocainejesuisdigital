<?php
session_start();

if(isset($_POST['submit'])){

	$error_message = "";
	// validation expected data exists
	if(!isset($_POST['full_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['message'])) {
		$error_message .= 'We are sorry, but there appears to be a problem with the form you submitted.';
	}

	if (isset($_POST["website"]) && $_POST["website"] != "") {
		header('location:../contact.php');
  		exit;
	}

	$full_name = $_POST['full_name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$message = $_POST['message']; // required

	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email_from)) {
		$error_message .= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>The Email Address you entered does not appear to be valid</div>";
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$full_name)) {
		$error_message .= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>The The Name you entered does not appear to be valid.</div>";
	}

	$phone_exp = "/^\d+\.?\d*$/";

	if(!preg_match($phone_exp,$telephone)) {
		$error_message .= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>The The Telephone Number you entered does not appear to be valid.</div>";
	}

	if(strlen($message) < 2) {
		$error_message .= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>The The Message you entered do not appear to be valid.</div>";
	}

	if(strlen($error_message) > 0) {
		$_SESSION['error'] = $error_message;
		header('location:../contact.php');
        exit;
	}

	$email_message = "Form details below.\n\n";
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to="eloiriaglichaimae2@gmail.com";
	$email_subject="Message From ".$full_name;

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
}
?> 
<?php 

	$_SESSION['confirmation_msg'] = "<div class='alert alert-success '><button type='button' class='close' data-dismiss='alert'>&times;</button>Thank you for contacting us. We will be in touch with you very soon.</div>";
	header('location:../contact.php');
	exit;
?>