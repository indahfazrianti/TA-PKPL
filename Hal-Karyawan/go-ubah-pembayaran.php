<?php
include 'koneksi.php';

$nota = $_POST['nota'];
$pembayaran = $_POST['pembayaran'];

$transaksipemesanan = "UPDATE transaksi_pemesanan SET pembayaran='$pembayaran' WHERE kd_pemesanan='$nota'";
$hasil = mysqli_query($koneksi, $transaksipemesanan);

if($transaksipemesanan) {
    echo "<script>";
    echo "alert('Status Pembayaran berhasil diubah'); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Status Pembayaran gagal diubah'); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}

?>