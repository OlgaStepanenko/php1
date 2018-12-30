<?php 
	foreach ($reviewes as $reviewes): 
			
	?>
		<strong><?= $reviewes['id'] ?></strong>
		<?= $reviewes['name'] ?>
		<?= $reviewes['review'] ?>

	<?php 
	endforeach;
	?>
</ul>


