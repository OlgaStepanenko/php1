<?php 
	foreach ($catalog as $product): 
			
	?>
		<br><strong><?= $product['id'] ?></strong>
		<?= $product['name'] ?>
		<?= $product['price'] ?>
		<!--<img style="height: 250px" src="<?= $catalog['image'] ?>" alt="<?= $catalog['name'] ?>">	-->

	<?php 
		if ($product['deleted_at']) {
			echo 'Product deleted_at '.$product['deleted_at'];
		}   
			else ?> { 
				<form method="post" action="catalog_admin_delete.php">
					<input type="hidden" name="product_id"> value="<?= $product['id'] ?>">
					<button type="submit" name="deleted_at" class="btn btn-danger">Удалить</button>
				</form> 
				}; 
	<?php 
	endforeach;	
	?>
?>