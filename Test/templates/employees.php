<ul>
	<?php 
	foreach ($employees as $employee): 
			
	?>
		<li>
			<strong><?php $employee['id_employee'] ?></strong>
			<?php $employee['first_name'] ?>
			<?php $employee['middle_name'] ?>
			<?php $employee['last_name'] ?>
		</li>

	<?php 
	endforeach;
	?>
</ul>

