<?php 
	foreach ($product as $product): 
			
	?>
		<br><strong><?= $product['id'] ?></strong>
		<a href="<?= $product['image'] ?>" style="height: 250px" ><img style="height: 250px" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>"></a>
		<br><?= $product['name'] ?>
		<br><?= $product['category'] ?>
		<br><?= $product['description'] ?>
		<br><?= $product['price'] ?>

	<?php 
	endforeach;
	?>



