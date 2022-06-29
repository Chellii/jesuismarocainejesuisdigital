<?php include "functions/participer.php"; ?>
<form role="form" method="post" action="#" enctype="multipart/form-data" name="myform" onsubmit="validateCaptcha()">
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<input id="user" class='form-control' type="text" name="user" placeholder="Votre nom et prenom" required>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<input id="phone" class='form-control' type="text" name="phone" placeholder="Votre Telephone" required>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<input id="email" class='form-control' type="Email" name="email" placeholder="Votre Email" required="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<textarea id="description" name="description" class="form-control"></textarea>
					<div id="phrase"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				 <div class="full-width">
			        <input type="file" id="base-input" name="video" class="form-control form-input form-style-base">
			        <input type="text" id="fake-input" class="form-control form-input form-style-fake" placeholder="Choisissez votre vidéo" readonly>
			        <span class="fa fa-upload input-place"></span>
			    </div>
			</div>
			<div class="col-sm-3">
				<div id="captcha" ></div>
				
			</div>
			<div class="col-sm-3">
				<input type="text" placeholder="Captcha" id="cpatchaTextBox" class="form-control" />
				<div id="error"></div>
			</div>
			<div class="col-sm-12">
				<button type='submit' id="butt" name='submitUpdate' class='button' onclick="verifierCar()">Upload</button> 
			</div>
		</div>
</form>