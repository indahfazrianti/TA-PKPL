<?php
include 'koneksi.php';

$no = $_GET['no'];
$nota = $_GET['nota'];

$query = "DELETE from transaksi_detail_pemesanan where no_detail_pemesanan='$no'";
mysqli_query($koneksi, $query);

header("location:tambah-transaksi.php?nota=$nota");


?>