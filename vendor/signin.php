 <?php
   // Аутентификация. Проверка совпадения введенных логина и пароля с начием таковых в БД
   // и переход на страницу профиля
 
    session_start();
	require_once 'connect.php';
	
	$login = $_POST['login'];
	$password = md5($_POST['password']);
	
	// если в БД найдено совпадение, то в $check_user запишется 1, иначе - 0
	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
   
    if(mysqli_num_rows($check_user) > 0){
 	$user = mysqli_fetch_assoc($check_user);
	
	// если нашли пользователя, то запишем данные о нем в сессионную переменную из массива, 
	// полученного из строки базы данных при условии наличия совпадения
	$_SESSION['user'] = [
		"id" => $user['id'],
		"full_name" => $user['full_name'],
		"avatar" => $user['avatar'],
		"email" => $user['email']
	];
	
		// переход на страницу профиля
		header('Location:../profile.php');
		
	} else {
		 $_SESSION['message'] = 'Неверный логин или пароль';
	     header('Location: ../index.php');
	}
	
    
	

	

	 
	