<?php 
	$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
	$title = ucfirst(str_replace("_", " ", $page));
?>
<html>
<head>
    <title>CheekyWhombatsM8</title>
</head>
<body>
		<?php
			$filename ="lib" . $page . "php";
			if(file_exists($filename))
				include($filename);
			else
				echo "De pagina kan niet worden gevonden.";
		?>
</body>
</html>