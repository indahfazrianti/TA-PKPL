<?php
include 'koneksi.php';

$nama_paket = $_GET['nama_paket'];

$query="DELETE from paket_laundry where nama_paket='$nama_paket'";
mysqli_query($koneksi, $query);

header("location:paket-laundry.php");
?>