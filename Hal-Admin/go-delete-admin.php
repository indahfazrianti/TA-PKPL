<?php
include 'koneksi.php';

$id_admin = $_GET['id_admin'];

$query="DELETE from admin where id_admin='$id_admin'";
mysqli_query($koneksi, $query);

$query1="DELETE from user where id='$id_admin'";
mysqli_query($koneksi, $query1);

header("location:user-administrator.php");
?>