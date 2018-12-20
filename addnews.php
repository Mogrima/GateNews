<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Врата. Версия 6</title>
  <link href="img/favicon.png" rel="apple-touch-icon" sizes="180x180">
  <link href="img/favicon.png" rel="icon" sizes="32x32" type="image/png">
  <link href="img/favicon.png" rel="icon" sizes="16x16" type="image/png">
  <link href="/site.webmanifest" rel="manifest">
  <link color="#5bbad5" href="img/favicon.png" rel="mask-icon">
  <meta content="#da532c" name="msapplication-TileColor">
  <meta content="#ffffff" name="theme-color">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/news.css">
</head>
<body class="page">
  <div class="background-header"></div>
  <header class="page-header">
      <div class="page-header__wrapper container">
        <a class="page-header__logo"><img class="page-header__logo-image" alt="Логотип Врата" width="164" height="54" src="img/Logo.png" width="164"></a>
      </div>
    </header>
  <nav class="page-navigation">
      <ul class="page-navigation__list">
        <li class="page-navigation__item">
          <a class="page-navigation__link" href="index.html">Новости</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--green" href="works-catalog.html">Книги</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--yellow" href="gallery.html">Галерея</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--peach" href="about.html">О нас</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--lilac" href="reviews.html">Отзывы</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--purple" href="FAQ.html">FAQ</a>
        </li>
      </ul>
  </nav>
  <main class="page-main">
    <div class="container">
      <div class="substrate">
        <!-- Подложка -->
        	<h1 class="title">Добавление новости</h1>
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

        						echo '<p class="news-added block-link">Новость ' . '«'. $title . '»' . ' внесена </p>';
        						echo '<p class="block-link"><a class="button" href="index.php">Перейти на админстративную страницу</a></p>';
        						echo '<p class="block-link"><a class="button" href="gate-main-page.php">Перейти на главную страницу сайта</a></p>';
        						echo '<p class="block-link"><a class="button" href="addnews.php">Добавить еще одну новость</a></p>';
        						echo '<p class="block-link"><a class="button" href="all_list-news.php">Перейти к списку новостей</a></p>';

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
        	<form class="form-addnews" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        		<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        		<label for="news-title">Название новости</label>
        		<input class="input input__title" id="news-title" type="text" name="title" value="<?php if(!empty($title)) echo $title; ?>">
        		<label for="news-preview">Превью новости</label>
        		<textarea class="input input__preview" id="news-preview" type="text" name="preview"><?php if(!empty($preview)) echo $preview; ?></textarea>
        		<label for="news-text">Текст новости</label>
        		<textarea class="input input__text" id="news-text" type="text" name="text"><?php if(!empty($text)) echo $text; ?></textarea>
        		<label for="screenshot">Файл изображения:</label>
        		<input class="input" id="screenshot" type="file" name="screenshot">
        		<button class="button addnews-button" type="submit" name="submit">Добавить</button>
        		<a class="button addnews-button" href="index.php">на главную</a>
        	</form>
      </div><!-- Подложка -->
    </div>
  </main>
</body>
</html>