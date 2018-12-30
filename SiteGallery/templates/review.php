<?php

require_once '../engine/init.php';

$pageH1 = 'Отзывы';
//$search = $_GET['search'] ?? '';
//print_r($_POST);
if ($_POST && isset($_POST(['name']) && isset($_POST(['review'])) {
	$name = $_POST['name'];
	$review = $_POST['review'];
	$id = creatReviewes($mysqliConnect, $name, $review);
	$sql = sprintf("INSERT INTO reviewes (name, review) VALUES ('%s', '%s')", '$name', '$review');
	mysqli_query($mysqliConnect, $sql);
	if (mysqli_error($mysqliConnect)) {
		die(mysql_error($mysqliConnect));
	}
	$id = mysql_insert_id($mysqliConnect);
	var_dump($id);
	header('Location: reviewes.php);
	die;
}

require '../public/reviewes.php'


?>



