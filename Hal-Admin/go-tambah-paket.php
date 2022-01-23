<?php
include 'koneksi.php';

$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$paket_laundry = "INSERT INTO paket_laundry (nama_paket, harga, keterangan) VALUES ('$nama_paket','$harga','$keterangan')";
$hasil = mysqli_query($koneksi, $paket_laundry);

if($paket_laundry) {
    echo "<script>";
    echo "alert('Berhasil Menambah Paket Laundry'); window.location.href='paket-laundry.php'; ";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Gagal Menambah Paket Laundry'); window.location.href='tambah-paket.php'; ";
    echo "</script>";
}