<style>
.circle {
  margin: 0px;
  display: inline-block;
  padding: 0px;
  text-align: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 2px solid #1d2087;
}

.circle::before,
.circle::after {
  position: absolute;
  z-index: -1;
  display: block;
  content: '';
}
.circle,
.circle::before,
.circle::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.circle {
  position: relative;
top: 0px; right: 0px;
  z-index: 2;
  background-color: #fff;
  border: 2px solid #ec0000;
  color: #ec0000;
  line-height: 50px;
  overflow: hidden;
}

.circle:hover {
  color: #fff;
}
.circle::after {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-transform: scale(.5);
  transform: scale(.5);
}
.circle:hover::after {
  background: #ec0000;
  border-radius: 50%;
  -webkit-transform: scale(.9);
  transform: scale(.9);
}

.circle1 {
  opacity: 0.4;
}

.circle2 {
  opacity: 0.6;
}

.circle3 {
  opacity: 0.8;
}

.circle a {
  text-decoration: none;
  color: #ec0000;
}

.circle h2 {
  font-size: 60px;
}

.circle h2 small {
  color: #ec0000;
}

.circle p {
  font-size: 28px;
  line-height: 26px;
}
</style>
<?php  include "functions/database.php"?>
<!DOCTYPE html>
<html>
<head>
	<?php  include "modules/head.php"?>
	<title>#I am Moroccan I am digital</title>
</head>
<body>
	<?php  include "modules/menu1.php"?>
<div style="position: absolute; top: 35; right: 10">
        <div class="circle circle3">
         <a  href="index.php?lang=en" >En</a> 
        </div>
      </div>
      <div style="position: absolute; top: 35; right: 70">
        <div class="circle circle3">
         <a  href="index.php?lang=fr" >Fr</a> 
        </div>
      </div>

	<div class="middle">
	
		<img src="img/logo-white.svg" class="img-responsive">
		<h2>We make the future </h2>
		<p><a href="nos-videos-en.php" class="button">See our videos</a></p>
	</div>
	<?php  include "modules/carousel.php"?>
	<div class="arrow">
		<a href="javascript:void(0)" id="slidetobottom"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
	</div>
	<p id="back-top" >
		<a href="#top" class="fa fa-arrow-up"></a>
	</p>
	<?php include "home-englais.php" ?>
	<?php  include "modules/footer.php"?>

</body>
</html>