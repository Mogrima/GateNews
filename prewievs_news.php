<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Обзор новости целиком</title>
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
        	<p class="block-link">
                <a class="button" href="index.php">Перейти на админстративную страницу</a>
            </p>
            <p class="block-link">
                <a class="button" href="gate-main-page.php">Перейти на главную страницу сайта</a>
            </p>
            <p class="block-link"><a href="all_list-news.php">Перейти к списку новостей</a></p>
            <p class="block-link">
                <a class="button" href="addnews.php">Добавить новость</a>
            </p>
        	<?php
        	require_once('appvars.php');
            require_once('connectvars.php');

            if(isset($_GET['id'])) {

        		$id = $_GET['id']; 

        		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        		$query = "SELECT * FROM news WHERE id = $id LIMIT 1";
        		$news = mysqli_query($dbc, $query);


        		while($row = mysqli_fetch_array($news)) {
        			$screenshot = $row['screenshot'];
        			echo '<div class="header-title"><h1 class="header-title__title">' . $row['title'] . '</h1>';
        			echo '<time class="header-title__date">' . $row['date'] . '</time></div>';
        			echo '<div>' . '<div class="news-picture"><img width="300" height="250" src="' . G_UPLOADPATH . $row['screenshot'] . '"></div>' . '<p class="text-news">' . $row['text'] . '</p>' . '</div>';
        			
        			echo '<a class="button removenews-button" href="removenews.php?id=' . $row['id'] . '&amp;screenshot=' . $screenshot . '">Удалить</a>';
        		}
        	}
          ?>
      </div><!-- Подложка -->
    </div>
  </main>
</body>
</html>