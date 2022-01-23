<?php
include 'koneksi.php';

$nama_paket = $_GET['nama_paket'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$paket = mysqli_query($koneksi, "UPDATE paket_laundry SET harga = '$harga', keterangan = '$keterangan' WHERE nama_paket = '$nama_paket'");

if ($paket) {
        echo "<script>";
        echo "alert('Paket Laundry Berhasil di Update'); window.location.href='paket-laundry.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Paket Laundry Gagal di Update'); window.location.href='paket-laundry.php'; ";
        echo "</script>";  
    }
?>