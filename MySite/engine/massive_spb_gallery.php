<?php
error_reporting(E_ALL);

$galleryArr = [
	'foto1' => "spb1.png",
	'foto2' => "spb2.png",
	'foto3' => "spb3.png", 
	'foto4' => "spb4.png",
	'foto5' => "spb5.png",
	'foto6' => "spb6.png"
];

foreach ($galleryArr as $key => $foto)
 
		echo "<div class=\"flex4\"> <a href=\"img/spb_gallery/$foto\" target=\"_blank\">
			<img src=\"/img/spb_gallery/$foto\"></a></div>";
	




?>
