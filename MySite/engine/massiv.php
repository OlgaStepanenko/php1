<?php
error_reporting(E_ALL);

$galleryArr = [
	'foto1' => "flex1.png",
	'foto2' => "flex2.png",
	'foto3' => "flex3.png", 
	'foto4' => "flex4.png",
	'foto5' => "flex5.png",
	'foto6' => "flex6.png",
	'foto7' => "flex7.png",
	'foto8' => "flex8.png",
	'foto9' => "flex9.png"
];

//var_dump($galleryArr);

//echo '<img src="../public/img/flex1.png">';

foreach ($galleryArr as $key => $foto)
  // echo "<img src=\"/img/$foto\">";

//$foto = <img srs="../public/img/$f">;


//function conclusionGallary($foto) {
	//for ($foto=0; $foto < foto.length; $foto++) { 
		echo "<div class=\"flex4\"> <a href=\"img/$foto\" target=\"_blank\">
			<img src=\"/img/$foto\"></a></div>";
	//}
//}




?>
