<?php

require_once '../engine/init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="container">
		<header>
		
		</header>
		<main>

			<h3>Hello!</h3>

			<?php

				$employees = getEmployees($mysqliConnect);
				include '../templates/employees.php';
			?>

		</main>
		<footer>
		
		</footer>
	</div>
</body>
</html>