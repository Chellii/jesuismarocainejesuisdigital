

<?php  include "functions/database.php"?>

<?php
// include language configuration file based on selected language
$lang = "fr";
if(isset($_GET['lang'])){ 
	$lang = $_GET['lang']; 
} 
?>

<!DOCTYPE html>
<html>
<head>
	<?php  include "modules/head.php"?>
	<title>#Je Suis Marocaine Digitale</title>
</head>
<body class="index">
	<?php  include "modules/menu.php"?>
		<a  href="index.php?lang=fr" <?php if($lang == 'fr'){header("location:index.fr.php?language=".$lang);} ?>>Francais</a> 
		<a  href="index.php?lang=en" <?php if($lang == 'en'){header("location:index.en.php?language=".$lang);} ?>>English</a>
	
		<img src="img/logo-white.svg" class="img-responsive">
		<h2>1337, We love you </h2>
		<p><a href="nos-videos.php" class="button">Voir nos vidéos</a></p>
	</div>
	<?php  include "modules/carousel.php"?>
	<div class="arrow">
		<a href="javascript:void(0)" id="slidetobottom"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
	</div>
	<p id="back-top" >
		<a href="#top" class="fa fa-arrow-up"></a>
	</p>
	<?php include "home.php" ?>
	<?php  include "modules/footer.php"?>

</body>
</html>