<?php
include 'koneksi.php';

session_start();
if (!isset($_SESSION['level'])) {
  echo "<script>";
	echo "alert('Anda Harus Login Dulu Broh'); window.location.href='../login.php'; ";
  echo "</script>";
  exit;
}


 
$data_pelanggan = mysqli_query($koneksi,"SELECT * FROM pelanggan");
$jumlah_pelanggan = mysqli_num_rows($data_pelanggan);
$data_karyawan = mysqli_query($koneksi,"SELECT * FROM karyawan");
$jumlah_karyawan = mysqli_num_rows($data_karyawan);
$data_paket = mysqli_query($koneksi,"SELECT * FROM paket_laundry");
$jumlah_paket = mysqli_num_rows($data_paket);
$data_transaksi = mysqli_query($koneksi,"SELECT * FROM transaksi_pemesanan");
$jumlah_transaksi = mysqli_num_rows($data_transaksi);


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
  <title>Admin | Laundry Point</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
  <nav class="main-header navbar navbar-expand navbar-blue navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

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
            <i class="fas fa-arrow-left"></i> Logout
          </a>
          <a href="edit-admin.php?id_admin=<?php echo $id; ?>" class="dropdown-item">
            <i class="fas fa-user-edit"></i> Edit Admin
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-light-warning">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../dist/img/laundry.jpg" alt="AdminLP Logo" class="brand-image">
      <span class="brand-text"><font face="Jokerman"> Laundry Point </font></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/avatar5.png" alt="User Image" width="100px">
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
            <a href="dashboard.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $jumlah_pelanggan ?></h3>
  
                  <p>Pelanggan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="user-pelanggan.php" class="small-box-footer">Lihat Detail Pelanggan <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $jumlah_karyawan ?></h3>
  
                  <p>Karyawan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="user-karyawan.php" class="small-box-footer">Lihat Detail Karyawan <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $jumlah_transaksi ?></h3>
  
                  <p>Transaksi Laundry</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="transaksi-pemesanan.php" class="small-box-footer">Lihat Detail Transaksi <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $jumlah_paket ?></h3>
  
                  <p>Jasa Paket Laundry</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="paket-laundry.php" class="small-box-footer">Lihat Detail Paket <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
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
