
	<?php 
	foreach ($galleryes as $gallery): 
			
	?>
		<strong><?= $gallery['id'] ?></strong>
		<?= $gallery['name'] ?>
		<img style="height: 200px" src="<?= $gallery['track'] ?>" alt="<?= $gallery['name'] ?>">

	<?php 
	endforeach;
	?>
</ul>