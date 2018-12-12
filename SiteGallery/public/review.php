<?php

require_once '../engine/init.php';


require_once '../engine/reviews.php'; 


$link = mysqli_connect('127.0.0.1', 'root', '', 'geekbrains')
	or die("Ошибка" . mysqli_error($link));
 

$query ="SELECT * FROM review";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
 

mysqli_close($link);




?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Отзывы</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	

		<header>
			<p class="logo">Startup</p>
			<nav>
				<ul class="menu">
						<li><a href=""> Home </a></li>
						<li><a href=""> Services </a></li>
						<li><a href=""> About</a></li>
						<li><a href=""> Works</a></li>
						<li><a href=""> Blog</a></li>
						<li><a href=""> Clients</a></li>
						<li><a href=""> Contact</a></li>
				</ul>
			</nav>
				<h1>welcome to startup</h1>
				<p class="your">Your Favourite Creative Agency Template</p>
				<a class="get" href="">get started</a> 
		</header>

		<main>	

			<div id="block_latest_works">
				<h2 class="serv">latest works</h2>
				<img id="line" src="./img/line3.png">
				<nav>
				<ul class="menu2">
						<li><a href="index.php"> Главная галерея </a></li>
						<li><a href="gallery2.php"> Вторая галлерея </a></li>
						<li><a href="calculator.php"> Калькулятор </a></li>
						<li><a href="review.php"> Отзывы </a></li>
						<li><a href=""> Strategy</a></li>
				</ul>
				</nav>
				<div class="foto_latest_works">
				<!--<div>	
					<ul>
						<li>Отзыв</li>
						<li>Отзыв</li>
						<li>Отзыв</li>
					</ul>
				</div>-->
					<br>


				<div>
					<form method="post" action="review.php">
						<div>
							<label>Имя</label><br>
							<input type="text" name="name" placeholder="Ваше имя" required><br>
						</div>
						<div>
							<label>Отзыв</label><br>
							<textarea rows="5" name="text" required></textarea> 
						</div>
						<div>
							<button type="submit">Отправить</button>
						</div>
					</form>
				</div>
					
				</div>
			</div>

			

		
		</main>

		<footer>
			<picture>
				<source   srcset="./img/sett.svg">
				<img width="50" height="50" src="./img/sett.png">
			</picture>
			<div class="soc_icon">
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-facebook-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-google-plus-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-twitter-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-instagram"></i>
					</div>
			</div>
			<img id="line_by" src="./img/line5.png">  <!--почему-то в слоях в фотошопе отсутствует нужная картинка, отсутствует ВООБЩЕ -->
				<p class="by">&copy; 2015 startup, designed by shapedtheme</p>
		</footer>
	</div>
</body>
</html>