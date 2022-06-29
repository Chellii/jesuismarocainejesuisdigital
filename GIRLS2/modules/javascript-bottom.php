<script src="ressources/js/jquery-1.11.0.min.js"></script>
<script src="ressources/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/24b7f338c4.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#icon-menu").click(function() {
			$("#menu").addClass("active-menu");
			$("#menu").removeClass("hide-menu");
			$("#close-menu").addClass("show");
			$("#close-menu").removeClass("hide");
			$("#icon-menu").addClass("hide");
			$("#icon-menu").removeClass("show");
		});


		$("#close-menu").click(function() {
			$("#menu").addClass("hide-menu");
			$("#menu").removeClass("active-menu");
			$("#close-menu").addClass("hide");
			$("#close-menu").removeClass("show");
			$("#icon-menu").addClass("show");
			$("#icon-menu").removeClass("hide");
		});
	});
</script>


<script type="text/javascript">
$(window).scroll(function(){
                  
if($(document).scrollTop()>40){
    $(".icon").animate({
   },1000);
 $(".icon").addClass('fixmenu');
 $(".menu").addClass('fixmenu');
}
  else{
   $(".icon").animate({
   },1000);
   $(".icon").removeClass('fixmenu');
    $(".menu").removeClass('fixmenu');
  }
});
</script>


<script type="text/javascript">
 $(document).ready(function(){


  $("#slidetobottom").click(function() {
    $('html, body').animate({
        scrollTop: $("#1337").offset().top
    }, 1000);
  });
  
 });
  
</script>

<script type="text/javascript">
	$(document).ready(function(){
		 var $var = $(window).height();
     
		 
		 $('.one').css("min-height",$var - 299);
	})
</script>



<script type="text/javascript">
<?php
	$stmt=$db_client->prepare("SELECT * FROM videos where valide = 1 order by created_at ASC"); // on prépare notre requête
	$stmt->execute();
	$rows=$stmt->fetchAll();
	foreach ($rows as $row):
?>
	$('#show<?=$row->id?>').on('hidden.bs.modal',function()
	{
  		 document.getElementById("<?=$row->id?>").pause();
	})
	 <?php endforeach; ?>
</script>

<script type="text/javascript">
	var code;
function createCaptcha() {
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
  "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1);
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 100;
  canv.height = 45;
  var ctx = canv.getContext("2d");
  ctx.font = "25px 'Playfair Display";
  ctx.strokeText(captcha.join(""), 0, 30);
  
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv);
}
function validateCaptcha() {
  event.preventDefault();
  debugger
   if (document.getElementById("cpatchaTextBox").value != code) {
    document.getElementById("error").innerHTML ="Captcha invalide. réessayer";
    createCaptcha();
 
  }else
  {
  	document.myform.submit();
  }
}

</script>


<script>

    $('input[id=base-input]').change(function() {
        $('#fake-input').val($(this).val().replace("C:\\fakepath\\", ""));
    });


    $('input[id=main-input]').change(function() {
        console.log($(this).val());
        var mainValue = $(this).val();
        if(mainValue == ""){
            document.getElementById("fake-btn").innerHTML = "Choisissez votre vidéo";
        }else{
            document.getElementById("fake-btn").innerHTML = mainValue.replace("C:\\fakepath\\", "");
        }
    });


</script>
<script type="text/javascript">
  $(document).ready(function(){

  // hide #back-top first
  $("#back-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

});
</script>

<script>
    function verifierCar()
    {
        id_textarea = "description"; 
        id_button = document.getElementById("butt");
        textarea_helper = document.getElementById(id_textarea);
        counter_value = textarea_helper.value.length;
        if(counter_value > 10 && id_button.attributes['sumbit'].value == 'submitUpdate')
        {
            document.getElementById('phrase').innerHTML = "ne depasse pas 10 caractere";
            document.getElementById('phrase').classList.add("styleP");
            document.getElementById(id_textarea).classList.add("styleTextarea");
        }else if(counter_value <= 10)
        {
            id_button.attributes['sumbit'].value = 'submit';
        }
    }
</script>
