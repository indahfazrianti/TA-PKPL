<?php
include 'koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];

$query="DELETE from pelanggan where id_pelanggan='$id_pelanggan'";
mysqli_query($koneksi, $query);

$query1="DELETE from user where id='$id_pelanggan'";
mysqli_query($koneksi, $query1);

header("location:user-pelanggan.php");
?>