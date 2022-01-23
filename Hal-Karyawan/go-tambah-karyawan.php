<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_karyawan = $_POST['nama_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$level = 'karyawan';

$karyawan = mysqli_query($koneksi, "INSERT INTO karyawan (nama_karyawan,jenis_kelamin,no_hp,alamat) VALUES ('$nama_karyawan','$jenis_kelamin','$no_hp','$alamat')");

if ($karyawan) {
	
	$id_u = mysqli_query($koneksi,"SELECT * FROM karyawan where nama_karyawan like '%".$nama_karyawan."%'");
    while($ik = mysqli_fetch_array($id_u)){
		$id = $ik['id_karyawan'];
	}
	
	$u = mysqli_query($koneksi, "INSERT INTO user (id,username,password,level) VALUES ('$id','$username','$password','$level')");
	
    if ($u) {
        echo "<script>";
        echo "alert('Berhasil Menambahkan karyawan'); window.location.href='user-karyawan.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Gagal Menambahkan karyawan'); window.location.href='tambah-karyawan.php'; ";
        echo "</script>";  
    }
}else{
        echo "<script>";
        echo "alert('Semua Input Wajib Di ISI !!!'); window.location.href='tambah-karyawan.php'; ";
        echo "</script>";  
}
?>