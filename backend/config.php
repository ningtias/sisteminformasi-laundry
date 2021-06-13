<?php
//error_reporting(E_ERROR);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_laundry";

//create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($koneksi->connect_error){
    die("Connection Failed:" . $koneksi->connect_error);
}
?>