<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'php-auth');
	
	if(!$connect){
		die('Error connect to Data Base');
	}