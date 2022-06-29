<?php  include "functions/modal-videos.php"?>
<?php
	$stmt=$db_client->prepare("SELECT * FROM videos where valide = 1 && id <> 1 order by created_at ASC "); // on prépare notre requête
	$stmt->execute();
	$rows=$stmt->fetchAll();
?>

<section class="one" id="1337">
	<div class="container">
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
						<p><?=$row->description1?></p>
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