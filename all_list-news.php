<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Обзор новостей</title>
</head>
<body>
    <p>
        <a href="index.php">Перейти на админстративную страницу</a>
    </p>
    <p>
        <a href="gate-main-page.php">Перейти на главную страницу сайта</a>
    </p>
    <p>
        <a href="addnews.php">Добавить новость</a>
    </p>
	<?php
	require_once('appvars.php');
    require_once('connectvars.php');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $query = "SELECT * FROM news ORDER BY date ASC";
    $data = mysqli_query($dbc, $query);

    while($row = mysqli_fetch_array($data)) {
    	echo '<div>';
    	echo '<h3>' . $row['title'] . '</h3>';
    	echo '<time>' . $row['date'] . '</time>';
    	echo '<img src="' . G_UPLOADPATH . $row['screenshot'] . '">';
    	echo '<a href="prewievs_news.php?id=' . $row['id'] . '">Просмотреть</a>';
    	echo '</div>';
    }
  ?>
</body>
</html>