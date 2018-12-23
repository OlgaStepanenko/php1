<ul>
	<?php 
	foreach ($galleryes as $gallery): 
			
	?>
		<li>
			<strong><?= $gallery['id'] ?></strong>
			<?= $gallery['name'] ?>
			<img src="<?= $gallery['src'] ?>" alt="<?= $gallery['name'] ?>">
		</li>

	<?php 
	endforeach;
	?>
</ul>