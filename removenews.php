<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Удалить новость</title>
</head>
<body>
	<?php

	require_once('appvars.php');
	require_once('connectvars.php');

	if(isset($_GET['id']) && isset($_GET['screenshot'])) {

		$id = $_GET['id'];
		$screenshot = $_GET['screenshot']; 
		@unlink(G_UPLOADPATH . $screenshot); 

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "DELETE FROM news WHERE id = $id LIMIT 1";
			mysqli_query($dbc, $query);
			mysqli_close($dbc);

			
			echo '<p>Новость была удалена';

		}

		else {
			echo 'Новость не удалена';
		}

	echo '<p><a href="all_list-news.php">Назад к показу всех новостей</a></p>';
	?>
</body>
</html>