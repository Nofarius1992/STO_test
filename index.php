<?php 
	include('db.php');
	$uri = trim($_SERVER['REQUEST_URI'] ?? '', '/');
	if($uri !== '') {
		$sql = "SELECT * FROM `generation` WHERE `new_link` = '" . $uri . "'";
		$result = mysqli_query($conn, $sql);
		if($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			header('location: ' . $row['old_link']);
			exit;
		} else {
			echo sprintf('Произошла ошибка: ЮРЛ не найдена.<br>%s', '<a href="/">Назад</a>');exit;
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Generation Links</title>
</head>

<body>
	<h1>Сервис сокращения ссылок</h1>

	<form id="generation" action="generation.php" method="POST">
		<input name="text" type="text">
		<button name="button">Сгенерировать</button>
	</form>

</body>
</html>

<!-- 
1. Создаём верстку проекта
2. Сделать функционал добавления ссылки из инпута в базу данных
3. Сделать функционал генерации новой ссылки
4. Сохранить новую ссылку в базе данных
5. Сделать редирект с новой ссылки на старую
6. Сделать красоту на проекте
 -->