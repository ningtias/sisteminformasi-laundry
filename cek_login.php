<?php

//panggil
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tuser WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//jika username terdaftar
if($user_valid){
	//jika username terdaftar
	//cek pass
	if($password == $user_valid['password']){
		//jika pass benar
		//session
		session_start();
		$session['username'] = $user_valid['username'];
		$session['nama_lengkap'] = $user_valid['nama_lengkap'];
		$session['level'] = $user_valid['level'];
		//uji level
		if($level == 'admin'){
			header('location:backend/dashboard.php');
		}elseif
		($level == 'customer'){
			header('location:frontend/home.php');
		}

	}else{
	echo "<script> alert ('Maaf,Login Gagal, Password anda tidak sesuai!!');
			document.location='index.php'
		 </script>";
}
}else{
	echo "<script> alert ('Maaf,Login Gagal, Username anda tidak terdaftar!!');
			document.location='index.php'
		 </script>";
}

?>
