<section class="display-modal">
<?php
	$stmt=$db_client->prepare("SELECT * FROM videos where valide = 1 && id <> 1"); // on prépare notre requête
	$stmt->execute();
	$rows=$stmt->fetchAll();
?>
	<?php foreach($rows as $row): ?>
		<div class='modal fade' id="show<?=$row->id?>">
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-body'>
						<div id="<?=$row->id?>">

							<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						</div>
						<div class="name"><?=$row->user?></div>
						<?=$row->videos?>
						</div>
						<div class="details">
							<p><?=$row->description?></p>
						</div>
					</div>
					<div class='modal-footer'>
						
					</div>
				</div>
			</div>
		</div>

<?php endforeach; ?>
</section>
<script>
	function CloseVideo(){
    document.getElementById("<?=$row->id?>").innerHTML="&nbsp;";
};
</script>
