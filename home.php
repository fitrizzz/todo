<?php
	session_start();
	$name = $_SESSION["nama"];
	// var_dump($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>HALO SELAMAT DATANG <i><?php echo $name ?></i></h1>
</body>
</html>