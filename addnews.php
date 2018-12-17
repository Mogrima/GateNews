<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Добавить новость</title>
	<link rel="stylesheet" href="css/news.css">
</head>
<body>
	<h1>Добавление новости</h1>
	<?php

	require_once ('appvars.php');
	require_once('connectvars.php');

	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$preview = $_POST['preview'];
		$text = $_POST['text'];
		$screenshot = $_FILES['screenshot']['name'];
		$screenshot_type = $_FILES['screenshot']['type'];
		$screenshot_size = $_FILES['screenshot']['size'];

		if(!empty($title) && !empty($preview) && !empty($text) && !empty($screenshot)) {
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

						$query = "INSERT INTO news VALUES (0, NOW(), '$title', '$preview', '$text', '$screenshot')";

						mysqli_query($dbc, $query);

						echo '<p>Новость ' . '«'. $title . '»' . ' внесена </p>';
						echo '<p><a href="index.php">Перейти на админстративную страницу</a></p>';
						echo '<p><a href="gate-main-page.php">Перейти на главную страницу сайта</a></p>';
						echo '<p><a href="addnews.php">Добавить еще одну новость</a></p>';
						echo '<p><a href="all_list-news.php">Перейти к списку новостей</a></p>';

						$title = "";
						$preview = "";
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
		<input class="input input__title" id="news-title" type="text" name="title" value="<?php if(!empty($title)) echo $title; ?>">
		<label for="news-preview">Превью новости</label>
		<textarea class="input input__preview" id="news-preview" type="text" name="preview"><?php if(!empty($preview)) echo $preview; ?></textarea>
		<label for="news-text">Текст новости</label>
		<textarea class="input input__text" id="news-text" type="text" name="text"><?php if(!empty($text)) echo $text; ?></textarea>
		<label for="screenshot">Файл изображения:</label>
		<input class="input" id="screenshot" type="file" name="screenshot">
		<button type="submit" name="submit">Добавить</button>
	</form>
	<a href="index.php">на главную</a>
</body>
</html>