<?php 
 $thumbnail =  $video = null;
if(!empty($_POST)){

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description =  $_POST['description']; 
$valid=0;

$extension=array("mp4","MP4","webm");

		if($_FILES['video']['size']>0){
			$dossier = "videos/";
			$file_name=$_FILES["video"]["name"];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);
			$file_name3=md5(uniqid());
			$file_name=$file_name3.".".$ext;
			$file_name2=$_FILES["video"]["tmp_name"];
			/*thumbnail*/
			$ffmpeg = "C:\\xampp\\htdocs\\1337\\GIRLS\\functions\\bin\\ffmpeg";
			$size = "558x314";
			$getFromSecond=2;
			$cmd = "$ffmpeg -i  $file_name2 -an -ss $getFromSecond -s $size thumbnail/$file_name3.jpg";
			$thumbnail = "thumbnail/".$file_name3.".jpg";
			shell_exec($cmd);
			/*end thumb*/
			if(in_array($ext,$extension))
	    	{
				$videoTemp=$dossier.$file_name;

				if(!file_exists($videoTemp)){
					//Si le fichier existe déjà (peu probable car num aléatoire généré)
	                $res =move_uploaded_file($_FILES['video']['tmp_name'],$videoTemp);
					if($res){
						//Erreur de transfert (souvent la taille)
						// unlink('videos/'.$video);
						 $video = $videoTemp;
					}else{
						echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>Erreur lors du transfert du video, la taille ne doit pas être supérieur à 20 Mo.</div>";
					}
					
				}else{
					echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>Erreur lors du transfert du video, la taille ne doit pas être supérieur à 20 Mo..</div>";
				}
			}else{
				echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>Veuillez choisir une fichier avec l'exention mp4 ou webm</div>";
			}	
		}
		$stmt=$db_client->prepare("INSERT INTO videos(user,videos,thumbnail,phone,email,description,created_at,valide) VALUES (?,?,?,?,?,?,NOW(),?)"); // on prépare notre requête
		$stmt->execute(array($user,$video,$thumbnail,$phone,$email,$description,$valid));
		header("Location: success.php");
}
?>