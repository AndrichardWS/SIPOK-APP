-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2020 pada 18.55
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsipok_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_fungsi`
--

CREATE TABLE `tbl_master_fungsi` (
  `kd_fungsi` varchar(11) NOT NULL,
  `uraian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_fungsi`
--

INSERT INTO `tbl_master_fungsi` (`kd_fungsi`, `uraian`) VALUES
('FAES', 'Fungsi Asesmen Ekonomi dan Surveilans'),
('FASPURKIPK', 'Fungsi Analisis SP dan PUR serta Keuangan Inklusif dan Perlindungan Konsumen'),
('FDSEK', 'Fungsi Data dan Statistik Ekonomi dan Keuangan'),
('FKKK', 'Fungsi Koordinasi dan Komunikasi Kebijakan'),
('FPPSPPUR', 'Fungsi Perizinan dan Pengawasan Sistem Pembayaran dan PUR'),
('FPPU', 'Fungsi Pelaksanaan Pengembangan UMKM'),
('SLA', 'Satuan Layanan Administrasi'),
('UOSP', 'Unit Operasional dan Sistem Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_kendaraan`
--

CREATE TABLE `tbl_master_kendaraan` (
  `no_polisi` varchar(8) NOT NULL,
  `jenis_kendaraan` enum('Mobil','Motor') NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_kendaraan`
--

INSERT INTO `tbl_master_kendaraan` (`no_polisi`, `jenis_kendaraan`, `nama_kendaraan`) VALUES
('PA1630D2', 'Mobil', 'Innova Biru'),
('PA1768D2', 'Mobil', 'Innova Biru Tua'),
('PA5091A', 'Mobil', 'Sedan Hitam Altis (Manual)'),
('PA6514AC', 'Motor', 'Mega Pro Biru'),
('PA6519A', 'Motor', 'Honda Win'),
('PA87A', 'Mobil', 'Sedan Hitam Camry');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_pangkat`
--

CREATE TABLE `tbl_master_pangkat` (
  `kd_pangkat` varchar(3) NOT NULL,
  `uraian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_pangkat`
--

INSERT INTO `tbl_master_pangkat` (`kd_pangkat`, `uraian`) VALUES
('AD', 'Asisten Direktur'),
('ADS', 'Asisten Direktur Senior'),
('AM', 'Asisten Manager'),
('AMS', 'Asisten Manager Senior'),
('D', 'Direktur'),
('DD', 'Deputi Direktur'),
('DDS', 'Deputi Direktur Senior'),
('DS', 'Direktur Senior'),
('M', 'Manajer'),
('MS', 'Manajer Senior'),
('S', 'Staf'),
('SS', 'Staf Senior');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_pengemudi`
--

CREATE TABLE `tbl_master_pengemudi` (
  `nip_pengemudi` varchar(10) NOT NULL,
  `nama_pengemudi` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_pengemudi`
--

INSERT INTO `tbl_master_pengemudi` (`nip_pengemudi`, `nama_pengemudi`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`) VALUES
('AK18021110', 'La Ode Asar', 'Manado', '1986-03-15', 'Laki-laki', '082294856767'),
('AK18082228', 'Benhur Wanggai', 'Biak', '1989-03-11', 'Laki-laki', '081245890012'),
('AK18220122', 'Yunus Istom Lambe', 'Balusu', '1988-10-01', 'Laki-laki', '081346789009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nip_pegawai` varchar(5) NOT NULL,
  `id_pengguna` int(2) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kd_fungsi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip_pegawai`, `id_pengguna`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `no_telp`, `email`, `kd_fungsi`) VALUES
('11148', 10, 'Adi Purwantoro', 'Jateng', '1968-03-17', 'Perumnas 3 Waena', 'Laki-laki', '082393474202', 'purwantoro23@gmail.com', 'FAES'),
('15575', 11, 'M. Azkaenza', 'Medan', '1986-03-15', 'Padang Bulan', 'Laki-laki', '081245890012', 'azka75@gmail.com', 'FDSEK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('Administrator','Pengemudi','Satpam','Pegawai') NOT NULL DEFAULT 'Pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `level`) VALUES
(7, 'andrichardws', 'b21ad42c065c6041548071bcc994368c', 'Administrator'),
(8, 'pengemudi', '32bb3243f605301186fbc4389f073717', 'Pengemudi'),
(9, 'satpam', '844fd3c289085bda3a1455c29aac8d92', 'Satpam'),
(10, 'adi', 'c5a73f074ec0f725cd2d51335da5ec77', 'Pegawai'),
(11, 'azka', 'e3195d1988d8a72e21431743e703b106', 'Pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permohonan`
--

CREATE TABLE `tbl_permohonan` (
  `id_permohonan` int(5) NOT NULL,
  `nip_pegawai` varchar(5) DEFAULT NULL,
  `nip_pengemudi` varchar(10) DEFAULT NULL,
  `no_polisi` varchar(8) DEFAULT NULL,
  `jam_keluar` varchar(10) DEFAULT NULL,
  `tanggal_keluar` varchar(11) DEFAULT NULL,
  `jam_masuk` varchar(10) DEFAULT NULL,
  `tanggal_masuk` varchar(11) DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_permohonan`
--

INSERT INTO `tbl_permohonan` (`id_permohonan`, `nip_pegawai`, `nip_pengemudi`, `no_polisi`, `jam_keluar`, `tanggal_keluar`, `jam_masuk`, `tanggal_masuk`, `keperluan`, `tujuan`) VALUES
(1, '11148', 'AK18021110', 'PA87A', '10:30 AM', '04/03/2020', '12:30 AM', '04/03/2020', 'Mengikuti rapat bersama walikota', 'Hotel Swiss Bell Jayapura'),
(2, '15575', 'AK18082228', 'PA1630D2', '02:00 AM', '05/03/2020', '05:00 AM', '05/03/2020', 'Survey tempat kegiatan', 'Arso 2'),
(3, '11148', 'AK18021110', 'PA87A', '01:00 AM', '06/03/2020', '03:00 AM', '06/03/2020', 'Belanja persiapan kegiatan', 'Mall jayapura'),
(4, '15575', 'AK18082228', 'PA1630D2', '08:00 AM', '07/03/2020', '10:00 AM', '07/03/2020', 'Pengantaran ke bandara sentani', 'Bandara udara sentani'),
(5, '11148', 'AK18220122', 'PA5091A', '11:30 AM', '10/03/2020', '13:00 AM', '10/03/2020', 'Survey harga barang', 'Sentani'),
(18, '15575', 'AK18021110', 'PA5091A', '09:30 AM', '11/03/2020', '10:30 AM', '11/03/2020', 'Ambil barang', 'JNE cargo sentani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat_pangkat`
--

CREATE TABLE `tbl_riwayat_pangkat` (
  `id_riwayat_pangkat` int(2) NOT NULL,
  `nip_pegawai` varchar(5) NOT NULL,
  `kd_pangkat` varchar(3) NOT NULL,
  `no_sk_pangkat` varchar(20) NOT NULL,
  `tanggal_sk_pangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_riwayat_pangkat`
--

INSERT INTO `tbl_riwayat_pangkat` (`id_riwayat_pangkat`, `nip_pegawai`, `kd_pangkat`, `no_sk_pangkat`, `tanggal_sk_pangkat`) VALUES
(1, '11148', 'AD', '071/H20/KP/2010', '2010-06-10'),
(2, '15575', 'M', '043/H20/KP/2011', '2011-09-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_master_fungsi`
--
ALTER TABLE `tbl_master_fungsi`
  ADD PRIMARY KEY (`kd_fungsi`);

--
-- Indexes for table `tbl_master_kendaraan`
--
ALTER TABLE `tbl_master_kendaraan`
  ADD PRIMARY KEY (`no_polisi`);

--
-- Indexes for table `tbl_master_pangkat`
--
ALTER TABLE `tbl_master_pangkat`
  ADD PRIMARY KEY (`kd_pangkat`);

--
-- Indexes for table `tbl_master_pengemudi`
--
ALTER TABLE `tbl_master_pengemudi`
  ADD PRIMARY KEY (`nip_pengemudi`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`nip_pegawai`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_fungsi` (`kd_fungsi`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `nip_pegawai` (`nip_pegawai`),
  ADD KEY `nip_pengemudi` (`nip_pengemudi`),
  ADD KEY `no_polisi` (`no_polisi`);

--
-- Indexes for table `tbl_riwayat_pangkat`
--
ALTER TABLE `tbl_riwayat_pangkat`
  ADD PRIMARY KEY (`id_riwayat_pangkat`),
  ADD KEY `nip_pegawai` (`nip_pegawai`),
  ADD KEY `kd_pangkat` (`kd_pangkat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  MODIFY `id_permohonan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_riwayat_pangkat`
--
ALTER TABLE `tbl_riwayat_pangkat`
  MODIFY `id_riwayat_pangkat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tbl_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tbl_pegawai_ibfk_2` FOREIGN KEY (`kd_fungsi`) REFERENCES `tbl_master_fungsi` (`kd_fungsi`);

--
-- Ketidakleluasaan untuk tabel `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  ADD CONSTRAINT `tbl_permohonan_ibfk_1` FOREIGN KEY (`nip_pengemudi`) REFERENCES `tbl_master_pengemudi` (`nip_pengemudi`),
  ADD CONSTRAINT `tbl_permohonan_ibfk_2` FOREIGN KEY (`no_polisi`) REFERENCES `tbl_master_kendaraan` (`no_polisi`),
  ADD CONSTRAINT `tbl_permohonan_ibfk_3` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`nip_pegawai`);

--
-- Ketidakleluasaan untuk tabel `tbl_riwayat_pangkat`
--
ALTER TABLE `tbl_riwayat_pangkat`
  ADD CONSTRAINT `tbl_riwayat_pangkat_ibfk_1` FOREIGN KEY (`kd_pangkat`) REFERENCES `tbl_master_pangkat` (`kd_pangkat`),
  ADD CONSTRAINT `tbl_riwayat_pangkat_ibfk_2` FOREIGN KEY (`nip_pegawai`) REFERENCES `tbl_pegawai` (`nip_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
