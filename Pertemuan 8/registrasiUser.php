<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi User</title>
	<script src="scripts.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
		<h1>Tugas 8 Pemrograman Web</h1>
	</div>
	
	<div class="containerRegistrasi">
		<h1>Registrasi User</h1>
		<form action="" method="post">
			<br>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username"><br><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" value="Submit" name="Submit" id="submit">
		</form>
	</div>
	<div class="keHalamanLogin">
		<p>Kembali Ke Halaman Login : <a href="index.php">Klik Disini!</a></p>
	</div>
	<?php 
		require 'functions.php';
		if(isset($_POST['Submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			registrasiUser($username, $password);
		}
	?>
</body>
</html>