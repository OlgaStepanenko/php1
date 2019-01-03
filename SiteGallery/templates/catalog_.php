<?php 
	foreach ($catalog as $catalog): 
			
	?>
		<strong><?= $catalog['id'] ?></strong>
		<?= $catalog['name'] ?>
		<img style="height: 250px" src="<?= $catalog['track'] ?>" alt="<?= $catalog['name'] ?>">

	<?php 
	endforeach;
	?>



