<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Добавить новость</title>
</head>
<body>
	<h1>Добавление новости</h1>
	<?php

	require_once ('appvars.php');
	require_once('connectvars.php');

	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$text = $_POST['text'];
		$screenshot = $_FILES['screenshot']['name'];
		$screenshot_type = $_FILES['screenshot']['type'];
		$screenshot_size = $_FILES['screenshot']['size'];

		if(!empty($title) && !empty($text) && !empty($screenshot)) {
			if ((($screenshot_type == 'image/gif') ||
				  ($screenshot_type == 'image/jpeg') ||
				  ($screenshot_type == 'image/pjpeg') ||
				  ($screenshot_type == 'image/png')) &&
				  ($screenshot_size > 0) &&
				  ($screenshot_size <= G_MAXFILESIZE)) {
				if ($_FILES['screenshot']['error'] == 0) {

					$target = G_UPLOADPATH . $screenshot;

					if(move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {
						$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

						$query = "INSERT INTO news VALUES (0, NOW(), '$title', '$text', '$screenshot')";

						mysqli_query($dbc, $query);

						echo '<p>Новость ' . '«'. $title . '»' . ' внесена </p>';
						echo '<p><a href="index.php">Перейти на главную страницу</a></p>';
						echo '<p><a href="addnews.php">Добавить еще одну новость</a></p>';

						$title = "";
						$text = "";
						$screenshot = "";

						mysqli_close($dbc);
					}
					else {
						echo '<p>Извините, возникла ошибка при загрузке файла изображения.</p>';
					}
				}
			}
			else {
				echo '<p> Файл, подтверждающий рейтинг, должен быть файлом изображения в форматах GIF, JPEG или PNG, и его размер не должен превыmать ' .
(G_MAXFILESIZE / 1000000) . ' Мб.</p>';
			}
			@unlink($_FILES['screenshot']['tmp_name']);
		}

		else {
			echo '<p>Не было внесено никакой информации</p>';
		}
	}

	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
		<label for="news-title">Название новости</label>
		<input id="news-title" type="text" name="title" value="<?php if(!empty($title)) echo $title; ?>">
		<label for="news-text">Текст новости</label>
		<input id="news-text" type="text" name="text" value="<?php if(!empty($text)) echo $text; ?>">
		<label for="screenshot">Файл изображения:</label>
		<input id="screenshot" type="file" name="screenshot">
		<button type="submit" name="submit">Добавить</button>
	</form>
</body>
</html>