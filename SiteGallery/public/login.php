<?php

require_once '../engine/init.php';

require_once '../config/connect.php'; 

require '../templates/login_.php';



$email = '';
$password = '';
$error = '';


if (isset($_POST['email'], $_POST['password']))  {
	$email = $_POST['email'];
	$password = $_POST['password'];



	$user = getUserByEmail ($mysqlConnect, $email);

	if ($user) {
		if (passwird_verify ($password, $user['password_hash'])) {
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['success_message'] = 'Регистрация прошла успешно';
			header ('Location: /');
		} else {
			$error = 'Неверные логин или пароль';

		}
		} else {
		$error = 'Неверные логин или пароль';
	}
}


?>


