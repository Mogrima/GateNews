<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Добавить новость</title>
</head>
<body>
	<h1>Добавление новости</h1>
	<?php

	require_once('connectvars.php');

	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
		<label for="news-title">Название новости</label>
		<input id="news-title" type="text" name="title">
		<label for="news-text">Текст новости</label>
		<textarea id="news-text" type="text" name="text" rows="20" cols="100"></textarea>
		<label for="screenshot">Файл изображения:</label>
		<input id="screenshot" type="file" name="screenshot">
		<button type="submit" name="submit">Добавить</button>
	</form>
</body>
</html>