<?php 
$koneksi = mysqli_connect("localhost","root","","laundry_point");
 
// Check connection
if (mysqli_connect_errno()) {
	echo "KONEKSI DATABASE GAGAL KARENA DI PHPMYADMIN TIDAK ADA NAMA 
	          DATABASE YANG KAMU TULIS DI KONEKSI dot PHP : " . mysqli_connect_error();
}
 
?>