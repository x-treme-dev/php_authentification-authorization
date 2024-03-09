 <?php 
 
    session_start();
  // если переменная user не существует, значит перейдем на страницу аутентификации
	if(!$_SESSION['user']){
		header('Location:/');
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
	
		<form>
		<img src="<?= $_SESSION['user']['avatar']?>" width="200" alt="">
		<h2 style="margin: 10px 0;"> <?= $_SESSION['user']['full_name']?></h2>
		 <a href="#"><?= $_SESSION['user']['email']?></a>
		 <a href="vendor/logout.php" class="logout">Выход</a>
		</form>
		
	    </div>
		
  </body>
 </html>