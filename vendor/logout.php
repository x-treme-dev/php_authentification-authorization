<?php
    // Уничтожить сессионную переменную 
	// перейти на главную странциу аутентификации
	session_start();
	unset($_SESSION['user']);
	header('Location:../index.php');
	 