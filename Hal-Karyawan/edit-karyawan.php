<?php

$id_karyawan = $_GET['id_karyawan'];

include 'koneksi.php';
$karyawan = mysqli_query($koneksi,"SELECT * FROM karyawan where id_karyawan = '".$id_karyawan."'");
while($k = mysqli_fetch_array($karyawan)){
	$id_karyawan = $k['id_karyawan'];
	$nama_karyawan = $k['nama_karyawan'];
	$jenis_kelamin = $k['jenis_kelamin'];
	$no_hp = $k['no_hp'];
	$alamat = $k['alamat'];	
}

$user = mysqli_query($koneksi,"SELECT * FROM user where id = '".$id_karyawan."'");
while($u = mysqli_fetch_array($user)){
	$username = $u['username'];
	$password = $u['password'];
}

session_start();
 if (!isset($_SESSION['username'])){
    header("Location: ../login.php");
}

$id = $_SESSION['id'];
$lv = $_SESSION['level'];

if($lv == "admin"){
	$admin = mysqli_query($koneksi,"select * from admin where id_admin like '%".$id."%'");
	while($a = mysqli_fetch_array($admin)){ 
		$nm = $a['nama_admin'];
	}
}elseif($lv == "karyawan"){
	$karyawan = mysqli_query($koneksi,"select * from karyawan where id_karyawan like '%".$id."%'");
	while($k = mysqli_fetch_array($karyawan)){ 
		$nm = $k['nama_karyawan'];
	}
}else{
	$pelanggan = mysqli_query($koneksi,"select * from pelanggan where id_pelanggan like '%".$id."%'");
	while($p = mysqli_fetch_array($pelanggan)){ 
		$nm = $p['nama_pelanggan'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Karyawan | Laundry Point</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../plugins/openiconic-free/css/open-iconic.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> <?php echo $nm; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="../logout.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Logout
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/AdminLPlogo.png" alt="AdminLP Logo" class="brand-image img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-light">Laundry Point</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $nm; ?></a>
        </div>
      </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p> Dashboard </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-alt"></i>
            <p>
              Manajemen User
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="user-administrator.php" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p> User Admin  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="user-karyawan.php" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p> User Karyawan  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="user-pelanggan.php" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p> User Pelanggan  </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="paket-laundry.php" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p> Paket Laundry </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="transaksi-pemesanan.php" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p> Transaksi Pemesanan </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="laporan.php" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p> Laporan Laundry </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="user-karyawan.php">User Karyawan</a></li>
              <li class="breadcrumb-item active">Edit Karyawan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Horizontal Form -->
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Edit Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="go-edit-karyawan.php?id_karyawan=<?php echo $id_karyawan;?>"> 
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="username" class="form-control" name="username" placeholder="<?php echo $username; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password yg anda inginkan">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama karyawan</label>
                  <div class="col-sm-10">
                    <input type="nama_karyawan" class="form-control" name="nama_karyawan" placeholder="<?php echo $nama_karyawan; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-3">
                    <select class="custom-select" name="jenis_kelamin">
                      <option disabled selected value=""><?php echo $jenis_kelamin; ?></option>
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Hp/Wa</label>
                  <div class="col-sm-10">
                    <input type="no_hp" class="form-control" name="no_hp" placeholder="<?php echo $no_hp; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="alamat" class="form-control" name="alamat" placeholder="<?php echo $alamat; ?>">
                  </div>
                </div> 
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        

        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>| Thanks Copyrighted | &copy; 2021 | <a href="">LAUNDRY POINT</a> |</strong>
    All Rights Reserved |
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
