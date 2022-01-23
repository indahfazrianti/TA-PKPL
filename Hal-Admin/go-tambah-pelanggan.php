<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$level = 'pelanggan';

$plgn = mysqli_query($koneksi, "INSERT INTO pelanggan (nama_pelanggan,jenis_kelamin,no_hp,alamat) VALUES ('$nama_pelanggan','$jenis_kelamin','$no_hp','$alamat')");

if ($plgn) {
	
	$id_u = mysqli_query($koneksi,"SELECT * FROM pelanggan where nama_pelanggan like '%".$nama_pelanggan."%'");
    while($ip = mysqli_fetch_array($id_u)){
		$id = $ip['id_pelanggan'];
	}
	
	$u = mysqli_query($koneksi, "INSERT INTO user (id,username,password,level) VALUES ('$id','$username','$password','$level')");
	
    if ($u) {
        echo "<script>";
        echo "alert('Pelanggan Berhasil di Tambahkan'); window.location.href='user-pelanggan.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Pelanggan Gagal di Tambahkan'); window.location.href='tambah-pelanggan.php'; ";
        echo "</script>";  
    }
}else{
        echo "<script>";
        echo "alert('Semua Input Wajib Di ISI !!!'); window.location.href='tambah-pelanggan.php'; ";
        echo "</script>";  
}
?>