<?php
include 'koneksi.php';

$id_karyawan = $_GET['id_karyawan'];

$query="DELETE from karyawan where id_karyawan='$id_karyawan'";
mysqli_query($koneksi, $query);

$query1="DELETE from user where id='$id_karyawan'";
mysqli_query($koneksi, $query1);

header("location:user-karyawan.php");
?>