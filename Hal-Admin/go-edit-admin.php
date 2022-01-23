<?php
include 'koneksi.php';

$id_admin = $_GET['id_admin'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_admin = $_POST['nama_admin'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$admin = mysqli_query($koneksi, "UPDATE admin SET nama_admin = '$nama_admin', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', 
                      alamat = '$alamat' WHERE id_admin = '$id_admin'");

if ($admin) {
	
	$id_u = mysqli_query($koneksi,"SELECT * FROM admin where nama_admin like '%".$nama_admin."%'");
    while($ia = mysqli_fetch_array($id_u)){
		$id = $ia['id_admin'];
	}
	
	$u = mysqli_query($koneksi, "UPDATE user SET username = '$username', password = '$password' WHERE id = '$id'");
	
    if ($u) {
        echo "<script>";
        echo "alert('Profile admin Berhasil di Update'); window.location.href='user-administrator.php'; ";
        echo "</script>";  
    }else{
        echo "<script>";
        echo "alert('Profile admin Gagal di Update'); window.location.href='edit-admin.php'; ";
        echo "</script>";  
    }
}else{
        echo "<script>";
        echo "alert('Semua Input Wajib Di ISI !!!'); window.location.href='edit-admin.php'; ";
        echo "</script>";  
}
?>