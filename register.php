<?php 
    session_start();
	if($_SESSION['user']){
		header('Location:profile.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="styles/main.css">
</head>
	<body>
		<div class="container">
			<!--Форма регистрации-->
			<form class="form" enctype="multipart/form-data" action="vendor/signup.php" method="POST">
				<label>ФИО</label>
				<input class="form__input" type="text" name="full_name" placeholder="Введите свое полное имя">
				<label>Логин</label>
				<input class="form__input" type="text" name="login" placeholder="Введите свой логин">
				<label>Почта</label>
				<input class="form__input" type="email" name="email" placeholder="Введите адрес своей почты">
				<label>Изображение профиля</label>
				<input class="form__input" type="file" name="avatar">
				<label>Пароль</label>
				<input class="form__input" type="password" name="password" placeholder="Введите свой пароль">
				<label>Подтверждение пароля</label>
				<input class="form__input" type="password" name="password_confirm" placeholder="Подтвердите пароль">
				<button class="form__button" type="submit">Войти</button>
				<p class="form__p">
					У вас уже есть аккаунт? - 
					<a class="form__a" href="/"> авторизируйтесь</a>
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