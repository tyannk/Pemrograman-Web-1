<?php 
	$conn = mysqli_connect("localhost", "root", "", "tugas_8_pemrograman_web");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<script src="scripts.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
		<h1>Tugas 8 Pemrograman Web</h1>
	</div>
	
	<div class="containerLogin">
		<h1>Login</h1>
		<form action="" method="post">
			<br>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username"><br><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" value="Submit" name="Submit" id="submit">
		</form>
	</div>
	<div class="belumRegistrasi">
		<p>Belum Registrasi?</p>
		<p>Silahkan Registrasi User <a href="registrasiUser.php">Disini!</a></p>
		<p>Silahkan Registrasi Admin <a href="registrasiAdmin.php">Disini!</a></p>
	</div>
	<?php 
		require 'functions.php';
		if(isset($_POST['Submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$result = login($username, $password);
			if($result == true){
				header("location:beranda.php");
			}
		}
	?>
	
</body>
</html>