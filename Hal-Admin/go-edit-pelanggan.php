<?php
include 'koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$level = 'pelanggan';

$plgn = mysqli_query($koneksi, "UPDATE pelanggan SET nama_pelanggan = '$nama_pelanggan', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', alamat = '$alamat' WHERE id_pelanggan = '$id_pelanggan'");

if ($plgn) {
	
	$id_u = mysqli_query($koneksi,"SELECT * FROM pelanggan where nama_pelanggan like '%".$nama_pelanggan."%'");
    while($ip = mysqli_fetch_array($id_u)){
		$id = $ip['id_pelanggan'];
	}
	
	$u = mysqli_query($koneksi, "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id = '$id_pelanggan'");
	
    if ($u) {
        echo "<script>";
        echo "alert('Profile Pelanggan Berhasil di Update'); window.location.href='user-pelanggan.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Profile Pelanggan Gagal di Update'); window.location.href='edit-pelanggan.php'; ";
        echo "</script>";  
    }
}else{
        echo "<script>";
        echo "alert('Semua Input Wajib Di ISI !!!'); window.location.href='edit-pelanggan.php'; ";
        echo "</script>";  
}
?>