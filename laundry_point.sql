-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 01:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(3, 'Dita Laundry Point', 'Pria', '085210109922', 'Panggung Belah');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(2, 'Ibu Tuti', 'Wanita', '0827162633', 'Mejasem');

-- --------------------------------------------------------

--
-- Table structure for table `paket_laundry`
--

CREATE TABLE `paket_laundry` (
  `nama_paket` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_laundry`
--

INSERT INTO `paket_laundry` (`nama_paket`, `harga`, `keterangan`) VALUES
('Kilat Bed Cover', 15000, 'Kilat Bed Cover adalah jenis laundry yang dikhususkan untuk Bed Cover sendiri karena memiliki bahan yang cukup tebal dan lumayan berat menyesuaikan dengan ukurannya dan untuk ukurannya bisa dari ukuran kecil sedang besar dan biasa dikerjakan dengan proses'),
('Kilat Jas', 25000, 'Kilat Jas adalah jenis laundry yang hanya dikhususkan untuk Jas karena untuk pakaian ini tidak boleh tercampur dari pakaian yng lain terutama yang memiliki warna dari pakaian tersebut... dan biasa dikerjakan dengan proses kerja 1 hari '),
('Kilat Lengkap', 4500, 'Kilat Lengkap adalah jenis laundry yang dapat menampung berbagai semua jenis pakaian dari ukuran kecil sedang hingga besar dan biasa dikerjakan dengan proses kerja 1 hari kerja '),
('Reguler Bed Cover', 10000, 'Reguler Bed Cover adalah jenis laundry yang dikhususkan untuk Bed Cover sendiri karena memiliki bahan yang cukup tebal dan lumayan berat menyesuaikan dengan ukurannya dan untuk ukurannya bisa dari ukuran kecil sedang besar dan biasa dikerjakan dengan pros'),
('Reguler Jas', 15000, 'Reguler Jas adalah jenis laundry yang hanya dikhususkan untuk Jas karena untuk pakaian ini tidak boleh tercampur dari pakaian yng lain terutama yang memiliki warna dari pakaian tersebut... dan biasa dikerjakan dengan proses kerja 1-2 hari '),
('Reguler Lengkap', 4500, 'Reguler Lengkap biasa dikerjakan dengan proses kerja 3-4 hari dan untuk paket ini bisa untuk semua jenis pakaian dan semua ukuran pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(1, 'Niqa Dwi Andika', 'Pria', '08222222121', 'Brebes Kaligangsa'),
(2, 'Nia Uli', 'Wanita', '085288884020', 'Pangkah');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_pemesanan`
--

CREATE TABLE `transaksi_detail_pemesanan` (
  `no_detail_pemesanan` int(255) NOT NULL,
  `kd_pemesanan` varchar(14) NOT NULL,
  `nm_paket` varchar(50) NOT NULL,
  `ket_paket` varchar(255) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `status_detail_pemesanan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail_pemesanan`
--

INSERT INTO `transaksi_detail_pemesanan` (`no_detail_pemesanan`, `kd_pemesanan`, `nm_paket`, `ket_paket`, `berat`, `bayar`, `status_detail_pemesanan`) VALUES
(28, 'ORD001', '4500', 'Umum', '3', '13500', '0'),
(29, 'ORD002', '10000', 'Bed Cover Kecil 2', '2', '20000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pemesanan`
--

CREATE TABLE `transaksi_pemesanan` (
  `kd_pemesanan` varchar(14) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nm_pelanggan` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `status_pesanan` enum('BARU','PROSES CUCI','PROSES SETRIKA','PROSES PACKING','SELESAI') NOT NULL,
  `pembayaran` enum('BELUM LUNAS','SUDAH LUNAS') NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pemesanan`
--

INSERT INTO `transaksi_pemesanan` (`kd_pemesanan`, `tgl_transaksi`, `nm_pelanggan`, `total`, `status_pesanan`, `pembayaran`, `tgl_selesai`) VALUES
('ORD001', '2021-08-20', 'Nia Uli', 13500, 'BARU', 'BELUM LUNAS', '2021-08-21'),
('ORD002', '2021-08-20', 'Nia Uli', 20000, 'BARU', 'SUDAH LUNAS', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id` varchar(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','karyawan','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id`, `username`, `password`, `level`) VALUES
(3, '3', 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(4, '2', 'karyawan', '202cb962ac59075b964b07152d234b70', 'karyawan'),
(5, '1', 'pelanggan', '202cb962ac59075b964b07152d234b70', 'pelanggan'),
(6, '2', 'nia123', '202cb962ac59075b964b07152d234b70', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `paket_laundry`
--
ALTER TABLE `paket_laundry`
  ADD PRIMARY KEY (`nama_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi_detail_pemesanan`
--
ALTER TABLE `transaksi_detail_pemesanan`
  ADD PRIMARY KEY (`no_detail_pemesanan`);

--
-- Indexes for table `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  ADD PRIMARY KEY (`kd_pemesanan`),
  ADD KEY `kd_pelanggan` (`nm_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_detail_pemesanan`
--
ALTER TABLE `transaksi_detail_pemesanan`
  MODIFY `no_detail_pemesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
