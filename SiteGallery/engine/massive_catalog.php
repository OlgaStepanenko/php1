<?php
error_reporting(E_ALL);

$link = mysqli_connect("127.0.0.1", "root", "", "geekbrains");

$galleryArr = [
	'foto1' => "bowtie1.jpg",
	'foto2' => "bowtie2.jpg",
	'foto3' => "bowtie3.jpg", 
	'foto4' => "bowtie4.jpg",
	'foto5' => "bowtiekids1.jpg",
	'foto6' => "bowtiekids2.jpg"
];

foreach ($galleryArr as $key => $foto)
 
		echo "<div class=\"flex4\" ><a href=\"img/catalog/$foto\" target=\"_blank\">
			<img width=\"400px\" src=\"/img/catalog/$foto\" ></a></div>";
	




?>
