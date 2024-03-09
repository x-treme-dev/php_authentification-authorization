<?php 
    session_start();
   // если переменная user существует, значит зайдем в профиль user'a
	if($_SESSION['user']){
		header('Location:profile.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Authorization</title>
	<link rel="stylesheet" href="styles/main.css">
</head>
	<body>
		<div class="container">
			<!--Форма авторизации-->
			<form class="form" action="vendor/signin.php" method="POST">
				<label>Логин</label>
				<input class="form__input" type="text" name="login" placeholder="Введите свой логин">
				<label>Пароль</label>
				<input class="form__input" type="text" name="password" placeholder="Введите свой пароль">
				<button class="form__button" type="submit">Войти</button>
				<p class="form__p">
					У вас нет аккаунта? - 
					<a class="form__a" href="register.php"> зарегистрируйтесь</a>
					<?php
						if($_SESSION['message']){
							echo '<p class="msg">'. $_SESSION['message'] .'</p>';
						}
						unset($_SESSION['message']);
					?>
				</p>
			</form>
		</div>
	</body>
</html>