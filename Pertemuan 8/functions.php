<?php
	$conn = mysqli_connect("localhost", "root", "", "tugas_8_pemrograman_web");
	function login($username, $password){
		$conn = mysqli_connect("localhost", "root", "", "tugas_8_pemrograman_web");
		$check = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
		if (mysqli_num_rows($check) === 1){ 
			return true;
		} else {
			echo '<script>alert("Akun Tidak Terdaftar")</script>';
		}
	}
	function registrasiUser($username, $password){
		$conn = mysqli_connect("localhost", "root", "", "tugas_8_pemrograman_web");
		$check = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
			if (mysqli_num_rows($check) === 1){ 
				echo '<script>alert("username sudah digunakan!")</script>';
			}else if(empty($username) AND empty($password)){
				echo '<script>alert("username atau password tidak boleh kosong!")</script>';
			}
			else {
				mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
				echo '<script>alert("Registrasi Berhasil")</script>';
			}
		}
	function registrasiAdmin($username, $password){
		$conn = mysqli_connect("localhost", "root", "", "tugas_8_pemrograman_web");
		$check = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
			if (mysqli_num_rows($check) === 1){ 
				echo '<script>alert("username sudah digunakan!")</script>';
			}else if(empty($username) AND empty($password)){
				echo '<script>alert("username atau password tidak boleh kosong!")</script>';
			}
			else {
				mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
				echo '<script>alert("Registrasi Berhasil")</script>';
			}
	}
?>
