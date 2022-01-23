<?php
include 'koneksi.php';

$nota = $_POST['nota'];
$status = $_POST['status'];

$transaksipemesanan = "UPDATE transaksi_pemesanan SET status_pesanan='$status' WHERE kd_pemesanan='$nota'";
$hasil = mysqli_query($koneksi, $transaksipemesanan);

if($transaksipemesanan) {
    echo "<script>";
    echo "alert('Pesanan Laundry berhasil diubah dan sedang diproses'); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Pesanan Laundry gagal diubah'); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}

?>