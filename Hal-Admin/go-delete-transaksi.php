<?php
include 'koneksi.php';

$nota = $_GET['nota'];

$query = "DELETE from transaksi_detail_pemesanan where kd_pemesanan='$nota'";
mysqli_query($koneksi, $query);

$query1 = "DELETE from transaksi_pemesanan where kd_pemesanan='$nota'";
mysqli_query($koneksi, $query1);

header("location:transaksi-pemesanan.php");