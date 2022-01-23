<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT max(kd_pemesanan) as kode FROM transaksi_pemesanan");
$data = mysqli_fetch_array($query);
$kode = $data['kode'];

$urutan = (int) substr($kode, 3, 3);

$urutan++;

$huruf = "ORD";
$kode = $huruf . sprintf("%03s", $urutan);
echo $kode;

?>