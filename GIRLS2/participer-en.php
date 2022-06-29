<?php  include "functions/database.php"?>
<!DOCTYPE html>
<html>
<head>
	<?php  include "modules/head.php"?>
	<?php
	$stmt=$db_client->prepare("SELECT * FROM videos   where valide = 1 && id = 1"); // on prépare notre requête
	$stmt->execute();
	$rows=$stmt->fetchAll();
?>
	<title>#Je Suis Marocaine Digitale | Participate</title>
</head>
<body>
	<?php  include "modules/menu1.php"?>
	<section class="slider">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<img src="img/logo-white.svg" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
	<section class="one contact">
		<div class="container">
			<div class="row">
			<center><h2 style="font-family: Gill Sans MT, sans-serif">Share your experience with us</h2></center>
				<div class="col-sm-8">
					
			<?php foreach($rows as $row): ?>
			<?=$row->videos?>" 
				</div>
				<?php endforeach; ?>
				<div class="col-sm-4">
					<div class="infos">
						<div style="color: white;"> You too, if you are passionate about the computer world, send us your video on our gmail box to share it and help to motivate other women and make them discover this impressive world </div>
						<ul class="contact-infos">
							
							<li>
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<a href="mailto:marocaine.digitale@gmail.com">marocaine.digitale@gmail.com</a>
							</li>

						</ul>
						<ul class="social">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
							<li><a href="#" class="fa fa-linkedin"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php  include "modules/footer.php"?>
</body>
</html>5
+