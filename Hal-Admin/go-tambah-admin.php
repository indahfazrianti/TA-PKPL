<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_admin = $_POST['nama_admin'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$level = 'admin';

$admin = mysqli_query($koneksi, "INSERT INTO admin (nama_admin,jenis_kelamin,no_hp,alamat) VALUES ('$nama_admin','$jenis_kelamin','$no_hp','$alamat')");

if ($admin) {
	
	$id_u = mysqli_query($koneksi,"SELECT * FROM admin where nama_admin like '%".$nama_admin."%'");
    while($ia = mysqli_fetch_array($id_u)){
		$id = $ia['id_admin'];
	}
	
	$u = mysqli_query($koneksi, "INSERT INTO user (id,username,password,level) VALUES ('$id','$username','$password','$level')");
	
    if ($u) {
        echo "<script>";
        echo "alert('Admin Baru Berhasil di Tambahkan'); window.location.href='user-administrator.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Gagal Menambahkan Admin Baru'); window.location.href='tambah-administrator.php'; ";
        echo "</script>";  
    }
}else{
        echo "<script>";
        echo "alert('Semua Input Wajib Di ISI !!!'); window.location.href='tambah-administrator.php'; ";
        echo "</script>";  
}
?>