<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Новость</title>
</head>
<body>
	<?php

	require_once('appvars.php');
	require_once('connectvars.php');

	if(isset($_GET['id'])) {



		$id = $_GET['id'];
		
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM news WHERE id = $id LIMIT 1";
		$news = mysqli_query($dbc, $query);

		while($row = mysqli_fetch_array($news)) {
			echo '<h1>' . $row['title'] . '</h1>';
			echo '<time>' . $row['date'] . '</time>';
			echo '<p>' . $row['text'] . '</p>';
			echo '<div><img src="' . G_UPLOADPATH . $row['screenshot'] . '"></div>';
		}

		mysqli_close($dbc);
		
	/*	echo '<time>' . $date . '</time>';*/
		/*echo '<p>' . $text . '</p>';*/
	}
	?>
</body>
</html>