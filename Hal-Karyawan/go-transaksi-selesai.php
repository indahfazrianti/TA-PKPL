<?php
include 'koneksi.php';

$nota = $_POST['nota'];
$pelanggan = $_POST['pelanggan'];
$total = $_POST['totalbayar'];
$pembayaran = $_POST['pembayaran'];
$status = 'BARU';
$tgl_selesai = $_POST['tgl_selesai'];

$transaksipemesanan = "UPDATE transaksi_pemesanan SET nm_pelanggan='$pelanggan', total='$total', status_pesanan='$status', pembayaran='$pembayaran', tgl_selesai='$tgl_selesai' WHERE kd_pemesanan='$nota'";
$hasil = mysqli_query($koneksi, $transaksipemesanan);

if($transaksipemesanan) {
    echo "<script>";
    echo "alert('Pemesanan Laundry telah selesai dan berhasil ditambahkan'); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Pemesanan Laundry gagal ditambahkan'); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}

?>