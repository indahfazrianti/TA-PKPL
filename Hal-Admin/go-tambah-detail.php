<?php
include 'koneksi.php';

$nota = $_POST['nota'];
$nm_paket = $_POST['paket'];
$ket_paket = $_POST['ket'];
$berat = $_POST['berat'];
$total = $_POST['total'];
$status = 0;

$detail = "INSERT INTO transaksi_detail_pemesanan (kd_pemesanan, nm_paket, ket_paket, berat, bayar, 
status_detail_pemesanan) VALUES ('$nota','$nm_paket','$ket_paket','$berat','$total','$status')";
$hasil = mysqli_query($koneksi, $detail);

if($detail) {
    echo "<script>";
    echo "alert('Pesanan Laundry berhasil diinput'); window.location.href='tambah-transaksi.php?nota=$nota'; ";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Pesanan Laundry gagal diinput'); window.location.href='tambah-transaksi.php?nota=$nota'; ";
    echo "</script>";
}
?>