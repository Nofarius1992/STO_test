<?php 
	// Имя хостинга
	$hostname = 'localhost';
	// Имя пользователя в базе данных
	$username = 'root';
	// Пароль базы данных
	$password = '';
	// Имя базы данных
	$dbname = 'sto';

	// Подключаем базу данных
	$conn = new mysqli($hostname, $username, $password, $dbname);
 ?>