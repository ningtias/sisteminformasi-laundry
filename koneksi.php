<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "db_laundry";

	$koneksi = mysqli_connect($server, $user, $password, $database) or die
	(mysql_error($koneksi));
?>
