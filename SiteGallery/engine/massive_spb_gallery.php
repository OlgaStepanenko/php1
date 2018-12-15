<?php
error_reporting(E_ALL);

$link = mysqli_connect("127.0.0.1", "root", "", "geekbrains");

$galleryArr = [
	'foto1' => "spb1.jpg",
	'foto2' => "spb2.jpg",
	'foto3' => "spb3.jpg", 
	'foto4' => "spb4.jpg",
	'foto5' => "spb5.jpg",
	'foto6' => "spb6.jpg"
];

foreach ($galleryArr as $key => $foto)
 
		echo "<div class=\"flex4\" >
				<a href=\"img/spb_gallery/$foto\" target=\"_blank\"> <img width=\"400px\" src=\"/img/spb_gallery/$foto\" ></a></div>";
	




?>
