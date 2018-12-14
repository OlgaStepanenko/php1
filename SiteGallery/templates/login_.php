<?php


$link = mysqli_connect('127.0.0.1', 'root', '', 'geekbrains')
	or die("Ошибка" . mysqli_error($link));
 

$query ="SELECT * FROM gallery_images";
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
	<title>Welcom to startup</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
						<li><a href="login.php"> Регистрация</a></li>
						<li><a href=""> Еще</a></li>
						<li><a href=""> Еще</a></li>
						<li><a href=""> Еще</a></li>
				</ul>
				</nav>
				<div class="foto_latest_works2">
					<br><h2 style="text-align: center;"> Зарегестрируйтесь!</h2><br>
					
					<form >
  						<div class="form-group">
    						<label for="exampleInputEmail1">Введите логин</label>
    						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    					
  						</div>
 						<div class="form-group">
    						<label for="exampleInputPassword1">Введите пароль</label>
    						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  						</div>
  						<div class="form-group form-check">
    						<input type="checkbox" class="form-check-input" id="exampleCheck1">
    						<label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
  						</div>
  						<button type="submit" class="btn btn-primary">Зарегестрироваться</button>
					</form>
					

					
				</div>
			</div>

			<div id="block_john_doe">
				<div class="deorham">
					<div class="flex5">
						<img src="./img/deorham.png">
					</div>
					<div class="flex5">
						<img src="./img/ratings.png">
					</div>
					<div class="flex5">
						<img src="./img/malikmedia.png">
					</div>
					<div class="flex5">
						<img src="./img/bcause.png">
					</div>
					<div class="flex5">
						<img src="./img/tomgiby.png">
					</div>
				</div>
				<p class="hvaing">"Hvaing placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.<br>Temporibus autem quibusdam et aut officiis aut rerum"</p>
				<p class="john_doe">John Doe, Google Inc.</p>
				<div class="dot">
					<div class="flex6">
						<img src="./img/o1.png">
					</div>
					<div class="flex6">
						<img src="./img/o2.png">
					</div>
					<div class="flex6">
						<img src="./img/o3.png">
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