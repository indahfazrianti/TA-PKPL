<?php
include 'koneksi.php';
include 'go-nomer-transaksi.php';

$nota = $kode;
$tgl = date('Y-m-d');
$sts = 'BARU';
$sts1 = 'BELUM LUNAS';
$sts2 = '0';
$sts3 = '0000-00-00';

$transaksi = "INSERT INTO transaksi_pemesanan (kd_pemesanan,tgl_transaksi,nm_pelanggan,total,status_pesanan,pembayaran,
              tgl_selesai) VALUES ('$nota','$tgl','$sts2','$sts2','$sts','$sts1','$sts3')";
              
$hasil = mysqli_query($koneksi, $transaksi);

if($transaksi) {
    echo "<script>";
    echo "alert('Menuju Halaman Pemesanan'); window.location.href='tambah-transaksi.php?nota=".$nota."'; ";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert(''); window.location.href='transaksi-pemesanan.php'; ";
    echo "</script>";
}
?>