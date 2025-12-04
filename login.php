<?php
	include "api.php";
	session_start();

	if(isset($_POST["submit"])){
		// echo "butang sumbit di tekan";
		$nama = $_POST["username"];
		$pass = $_POST["password"];
		// echo "Name : $nama ";
		// echo "Password : $pass";

		try{
			$sql = "SELECT * FROM user WHERE name_user = '$nama' AND password = $pass";
			$result = mysqli_query($conn,$sql);
			$result = mysqli_fetch_assoc($result);
			// var_dump($result);

			$_SESSION["nama"] = $nama;

			header("Location: home.php");

		}catch(Exception $e){
			echo $e->getMessage();
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
	<body>
		<h2>Login page</h2>
		<form action="login.php" method = "POST">
			<label for="username">Name : </label>
			<input type="text" name = "username" autocomplete="off">

			<label for="password">Password : </label>
			<input type="text" name = "password" autocomplete="off">
			
			<button type = "submit" name = "submit">Submit</button>
		</form>
	</body>
</html>