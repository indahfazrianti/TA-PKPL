<?php
include 'koneksi.php';

$id_karyawan = $_GET['id_karyawan'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_karyawan = $_POST['nama_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$karyawan = mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', alamat = '$alamat' WHERE id_karyawan = '$id_karyawan'");

if ($karyawan) {
	
	$id_u = mysqli_query($koneksi,"SELECT * FROM karyawan where nama_karyawan like '%".$nama_karyawan."%'");
    while($ik = mysqli_fetch_array($id_u)){
		$id = $ik['id_karyawan'];
	}
	
	$u = mysqli_query($koneksi, "UPDATE user SET username = '$username', password = '$password' WHERE id = '$id'");
	
    if ($u) {
        echo "<script>";
        echo "alert('Profile karyawan Berhasil di Update'); window.location.href='user-karyawan.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Profile karyawan Gagal di Update'); window.location.href='edit-karyawan.php'; ";
        echo "</script>";  
    }
}else{
        echo "<script>";
        echo "alert('Semua Input Wajib Di ISI !!!'); window.location.href='edit-karyawan.php'; ";
        echo "</script>";  
}
?>