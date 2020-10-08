<?php 
	// Подключаем базу данных
	include('db.php');
	// Массив алфавита с маленькими и большими буквами
	$alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
	// Рандомная длинна слова
	$length_word = rand(7, 14);
	// Рандомное слово 
	$random_word = '';
	// URL адресс
	$url = 'https://sto.local/';


	// Генератор рандомного слова
	if(isset($_POST['text']) && $_POST['text'] != '') {

		for($i = 0; $i <= $length_word; $i++) {
			// Рандомная буква из массива alphabet
			$random_value = $alphabet[rand(0, count($alphabet) - 1)];
			$random_word = $random_word . $random_value;
			header("Location: /");
		}
		// Готовая новая ссылка
		$url_new = $url . $random_word;

		// Проверка на эксклюзивность ссылки
		$sql = "SELECT * FROM `generation` WHERE `new_link` LIKE '" . $url_new . "'" ;
		$result = mysqli_query($conn, $sql);
		$col_links = mysqli_num_rows($result);

		if ($col_links !== 1) {
			$sql = "INSERT INTO `generation` (`old_link`, `new_link`) VALUES ('" . $_POST['text'] . "', '" . $url_new . "')";
			mysqli_query($conn, $sql);
		} else {
			for($i = 0; $i <= $length_word; $i++) {
			// Рандомная буква из массива alphabet
			$random_value = $alphabet[rand(0, count($alphabet) - 1)];
			$random_word = $random_word . $random_value;
			header("Location: /");
			}
			$url_new = $url . $random_word;
			$sql = "INSERT INTO `generation` (`old_link`, `new_link`) VALUES ('" . $_POST['text'] . "', '" . $url_new . "')";
			mysqli_query($conn, $sql);
		}
		
	} else {
		echo "Введите ссылку";
		echo "</br><a href='/''>Назад</a>";
	}
	
	
 ?>

 <!-- 
1. Создать массив с алфавитом - большие и маленькие буквы -done
2. Сделать вывод рандомного числа - done
3. Сделать генератор рандомного слова из 7-14 букв и цыфр - done
4. При клике на кнопку генерировать добавить в базу данных рандомное слово
5. 
  -->