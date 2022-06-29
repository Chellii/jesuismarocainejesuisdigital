<?php include "functions/contact.php"?>
<form role="form" name="contactform" method="post" action="#" class="contactform">
	<?php
        	session_start();

       		if (!empty($_SESSION['confirmation_msg'])){
 

       		echo $_SESSION['confirmation_msg'];
        	unset($_SESSION['confirmation_msg']);
        	}
    	?>

<div class="row">
	<div class="col-sm-6">
		<input name="website" type="hidden" />
		<div class="form-group">
			<input type="text" name="full_name" class="form-control" placeholder="Full name" required>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<input type="text" name="telephone" class="form-control" placeholder="Phone number" required>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<input type="text" name="email" class="form-control" placeholder="Email" required>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<textarea name="message" class="form-control" placeholder="Your message" required></textarea>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="text-center">
		<input type="submit" name="submit" value="Send" class="button"> 
	</div>
	</div>

</div>



</form>