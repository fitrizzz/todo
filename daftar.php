<?php
include "api.php";

	if(isset($_POST["submit"])){
		// echo "Halo";

		
	}

?>

<html>
	<body>
		<h1>Daftar user</h1>
		<form action="" method = "POST">
			<label for="username">Nama </label>
			<input type="text" name = "username">

			<label for="pass">Password </label>
			<input type="text" name = "pass">

			

			<button type = "submit" name="submit">submit</button>

		</form>
	</body>
</html>