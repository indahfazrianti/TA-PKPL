<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header ("location:Hal-Admin/dashboard.php");

	// cek jika user login sebagai karyawan
	}else if($data['level']=="karyawan"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "karyawan";
		// alihkan ke halaman dashboard karyawan
		header("location:Hal-Karyawan/dashboard.php");

	// cek jika user login sebagai pelanggan
	}else if($data['level']=="pelanggan"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "pelanggan";
		// alihkan ke halaman dashboard pelanggan
		header("location:Hal-Pelanggan/dashboard.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>