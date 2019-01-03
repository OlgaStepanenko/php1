<?php 
	foreach ($catalog as $catalog): 
			
	?>
		<br><strong><?= $catalog['id'] ?></strong>
		<?= $catalog['name'] ?>
		<?= $catalog['price'] ?>
		<img style="height: 250px" src="<?= $catalog['image'] ?>" alt="<?= $catalog['name'] ?>">

	<?php 
	endforeach;
	?>



