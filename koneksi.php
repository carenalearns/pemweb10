<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if(!$conn) {
	die("Koneksi Gagal : ". mysqli_connect_error());
}

$conndb = mysqli_select_db($conn, 'prak10');
if(!$conndb) {
	die("Koneksi ke Database Gagal : ". mysqli_error($conn));
}
?>