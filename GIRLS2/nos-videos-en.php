<?php  include "functions/database.php"?>
<!DOCTYPE html>
<html>
<head>
	<?php  include "modules/head.php"?>
	<title>#Je Suis Marocaine Digitale | Our Videos</title>
</head>

<body>
	<?php  include "functions/modal-videos.php"?>
<?php
	$stmt=$db_client->prepare("SELECT * FROM videos where valide = 1 && id <> 1 order by created_at ASC"); // on prépare notre requête
	$stmt->execute();
	$rows=$stmt->fetchAll();
?>
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
	<section class="one">
		<div class="container">
			<h2 style="font-family: Gill Sans MT, sans-serif">Our Videos</h2>
			<div class="box-videos ">
			<?php $count = 0 ?>
            <?php $max = count($rows); ?>
             <?php $max_col = round($max/3); ?>
            <?php foreach ($rows as $row): ?>
                <?php if($count%$max_col == 0): ?>
                 <div class="column">
                <?php endif; ?>
                   <div class="video">
					<div class="name"><?=$row->user?></div>
					<div class="imagbox">
					<a data-toggle='modal' href='#show<?=$row->id?>'>
						<i class="fa fa-play-circle" aria-hidden="true"></i>
						<img src="<?=$row->thumbnail?>" class="img-responsive">
					</a>
					</div>
					<div class="details">
						<p><?=$row->description?></p>
					</div>
				</div>
                 
                    <?php $count++ ?>
                <?php if($count%$max_col == 0): ?>
                  </div>
                <?php endif; ?>
            <?php endforeach; ?>
		</div>
		</div>
	</section>
	<p id="back-top" >
		<a href="#top" class="fa fa-arrow-up"></a>
	</p>
	<?php  include "modules/footer.php"?>
</body>
</html>