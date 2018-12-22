<ul>
	<?php 
	foreach ($galleryes as $gallery): 
			
	?>
		<li>
			<strong><?php $gallery['id_gallery'] ?></strong>
			<?php $gallery['name'] ?>
			<?php $gallery['src=\"track\"'] ?>
		</li>

	<?php 
	endforeach;
	?>
</ul>