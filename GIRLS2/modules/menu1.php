<?php 
$monUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
//echo $monUrl;
$slug =  str_split($monUrl);

?>

<div class="menu" id="menu">
<div class="close" id="close-menu">
  <span><i class="fa fa-times" aria-hidden="true"></i></span>
</div>
<div class="logo">
  <a href="">
    <img src="img/logo.svg" class="img-responsive">
  </a>
</div>
<nav class="">
      
      <div class="" id="bs-example-navbar-collapse-1">
            <ul class="">
              	<li> <a href="index.en.php"  class="<?=($slug[3]=='index.php')?'active-page':''?> <?=($slug[3]=='')?'active-page':''?>">Home</a> </li>
                <li> <a href="a-propos-en.php" class="<?=($slug[3]=='a-propos.php')?'active-page':''?>">About</a> </li>
                <li> <a href="nos-videos-en.php" class="<?=($slug[3]=='nos-videos.php')?'active-page':''?>">Our Videos</a> </li>
                <li> <a href="participer-en.php" class="<?=($slug[3]=='participer.php')?'active-page':''?>">Participate</a> </li>
                <li> <a href="contact-en.php" class="<?=($slug[3]=='contact.php')?'active-page':''?>">Contact Us</a> </li>
            </ul>
        </div>
</nav>
<div class="infos">
  <ul class="contact-infos">
    
    <li>
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
      <a href="mailto:marocaine.digitale@gmail.com">marocaine.digitale@gmail.com</a>
    </li>
    
  </ul>

  <ul class="social">
    <li><a href="https://web.facebook.com/1337FutureIsLoading/" class="fa fa-facebook"></a></li>
    <li><a href="https://twitter.com/1337FIL" class="fa fa-twitter"></a></li>
    <li><a href="#" class="fa fa-instagram"></a></li>
    <li><a href="https://fr.linkedin.com/company/1337-future-is-loading" class="fa fa-linkedin"></a></li>
  </ul>
  <p>© 2019 #JeSuisMarocaineJeSuisDigitale.  All rights reserved.</p>
</div>
</div>

<div class="icon" id="icon-menu">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
  </div>