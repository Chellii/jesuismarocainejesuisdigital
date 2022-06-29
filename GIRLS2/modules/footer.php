<!DOCTYPE html>
<html>
<head>
	<style>
.my-img {
    position    : absolute;
    bottom      : 0px;
    right:        : 70%;
    margin-left : 700%; /* half width of img */
}
</style>
</head>

<body>
<footer >
	<div class="container">
		<center><p>© 2019 #JeSuisMarocaineDigitale.  All rights reserved. Powered By</p></center>
			<center><img style=" right: -70%" src="img/imaged.png" width="30%" class="img-responsive" ></center>
		
	</div>
</footer>
<?php include "modules/javascript-bottom.php"?>
<script language="javascript" type="text/javascript">

    $(function(){
            $('.close').click(function(){      
                    $('iframe').attr('src', $('iframe').attr('src'));
    });
            });
</script>