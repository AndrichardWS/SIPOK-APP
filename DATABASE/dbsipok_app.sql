-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Sep 2020 pada 19.07
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
-- Struktur dari tabel `tbl_jenis_kendaraan`
--

CREATE TABLE `tbl_jenis_kendaraan` (
  `id_jenis_kendaraan` int(2) NOT NULL,
  `jenis_kendaraan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_kendaraan`
--

INSERT INTO `tbl_jenis_kendaraan` (`id_jenis_kendaraan`, `jenis_kendaraan`) VALUES
(1, 'Mobil'),
(2, 'Motor');

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
  `id_jenis_kendaraan` int(2) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL,
  `merk_kendaraan` varchar(50) NOT NULL,
  `tahun_produksi` varchar(4) NOT NULL,
  `warna_kendaraan` varchar(50) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `no_bpkb` varchar(20) NOT NULL,
  `status_kend` enum('Tersedia','Tidak Tersedia') NOT NULL DEFAULT 'Tersedia',
  `foto` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_kendaraan`
--

INSERT INTO `tbl_master_kendaraan` (`no_polisi`, `id_jenis_kendaraan`, `nama_kendaraan`, `merk_kendaraan`, `tahun_produksi`, `warna_kendaraan`, `no_rangka`, `no_mesin`, `no_bpkb`, `status_kend`, `foto`) VALUES
('PA000001', 1, 'Mobil', 'Toyota', '2010', 'Merah', 'MH562R451CK435643', '21P456712', 'A.34145632', 'Tersedia', NULL),
('PA000002', 2, 'Motor', 'Honda', '2003', 'Hitam', 'MH345P002CK086831', '45P096978', 'I.08146540', 'Tersedia', NULL),
('PA1120D3', 1, 'Kijang', 'Toyota', '2011', 'Hujau Abu abu', 'MH134S098SI776454', '11G674593', 'E.53473343', 'Tidak Tersedia', '47947af891b11ecd5be43f91a99cfa7c.jpg'),
('PA134A34', 1, 'Carry', 'Suzuki', '2011', 'Abu abu', 'MH670H342GD783412', '99J556734', 'M.88936645', 'Tersedia', 'd797c81d83d0e62df3df49110da89c30.png'),
('PA1630D2', 1, 'Innova', 'Toyota', '2013', 'Abu abu', 'MH123Y473RB675907', '53A784123', 'B.56789001', 'Tersedia', 'e9469587f087af2f2e1cea52ba586e8b.jpeg'),
('PA5091A', 2, 'Beat Street', 'Honda', '2018', 'Putih', 'MH567Y009AA007894', '44F112341', 'D.21345123', 'Tersedia', NULL),
('PA6514AC', 2, 'Soul GT', 'Yamaha', '2018', 'Hitam', 'MH223B917YG746380', '11O001723', 'W.14234561', 'Tersedia', '6695349bd410fdc7af87e0086ac6c603.jpg'),
('PA6519A', 2, 'Honda Win', 'Honda', '2018', 'Abu abu', 'MH412U112FF173211', '08Z975436', 'G.67778412', 'Tersedia', NULL),
('PA87A', 1, 'Sedan Hitam Camry', 'Toyota', '2019', 'Hitam', 'MH123B135BI987634', '12F567123', 'B.15678434', 'Tersedia', '2e8f6a70ddc968170b7177ec577be5b0.jpg');

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
  `no_telp` varchar(12) NOT NULL,
  `status_peng` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  `foto` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_pengemudi`
--

INSERT INTO `tbl_master_pengemudi` (`nip_pengemudi`, `nama_pengemudi`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `status_peng`, `foto`) VALUES
('AK09347183', 'Sri Riska', 'Jateng', '1988-12-10', 'Perempuan', '082319304512', 'Tidak Aktif', '189624ab2d0db5cad5937e2a783ae9f5.jpg'),
('AK14562567', 'Alisyam Muhrom', 'Timika', '1967-07-12', 'Laki-laki', '081224567123', 'Aktif', '978011f3fcb44f0bfd2ad92d8293bd97.jpg'),
('AK18021110', 'La Ode Asar', 'Manado', '1986-03-15', 'Laki-laki', '082294856767', 'Aktif', 'ec63337b26babb7040c86573a81abdaf.jpg'),
('AK18082228', 'Benhur Wanggai', 'Biak', '1989-03-11', 'Laki-laki', '081245890012', 'Aktif', '357b0d12352ae7b8843894ab0f0d2b46.jpg'),
('AK18220122', 'Yunus Istom Lambe', 'Balusu', '1988-10-01', 'Laki-laki', '081346789009', 'Aktif', '3d467ccab9d6c4704e040bcfb98d310a.jpg'),
('AK23456356', 'Torpanja Sidoli', 'Medan', '1965-12-22', 'Laki-laki', '081245738412', 'Aktif', '4159f078c198993452d24e85134bd16c.jpg'),
('AK41563415', 'Andi Suandi', 'Jayapura', '1968-12-04', 'Laki-laki', '081247589410', 'Aktif', '30909fef5e0c98fbc7761edfd26db801.jpg'),
('AK52783901', 'Bagus Prayoga', 'Trenggalek', '1983-06-05', 'Laki-laki', '081389900412', 'Aktif', '735f2d5cb47b31fdc8511f15ee00ed7a.jpg'),
('AK83495234', 'Deli Suryani', 'Abepura', '1995-10-31', 'Perempuan', '082399485341', 'Aktif', 'c3f49abd45b1e3ca84da51716fab2a11.jpg');

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
  `kd_fungsi` varchar(11) NOT NULL,
  `foto` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip_pegawai`, `id_pengguna`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `no_telp`, `email`, `kd_fungsi`, `foto`) VALUES
('11148', 10, 'Adi Purwantoro', 'Jateng', '1968-03-18', 'Perumnas 3 Waena', 'Laki-laki', '082393474202', 'purwantoro23@gmail.com', 'FAES', '6b0e10553ad53ce2107bf12d2c3daef7.jpg'),
('12345', 38, 'Ahmad Pongka', 'Jayapura', '1988-07-20', 'Waena', 'Laki-laki', '081234561234', 'pongka@gmail.com', 'FASPURKIPK', 'e5c3817537ed5f81232c78bd4c13dc80.jpg'),
('15575', 11, 'M. Azkaenza', 'Medan', '1986-03-15', 'Padang Bulan', 'Laki-laki', '081245890012', 'azka75@gmail.com', 'FDSEK', '2a374a087f49aa2ce817768d292b14a9.png'),
('33741', 60, 'Ipan Toraje', 'Makassar', '1981-06-22', 'Entrop', 'Laki-laki', '081278394003', 'ipant@gmail.com', 'FPPSPPUR', '3b962a7992437483682100ce322735c4.jpg'),
('40108', 57, 'Wili Git Saragih', 'Jayapura', '1988-02-01', 'Abe Pantai', 'Laki-laki', '082399430477', 'wiligit@gmail.com', 'FPPSPPUR', '2d915767bd97f10cd2204b70eb85fce0.png'),
('43245', 49, 'Gerrald Yan', 'Manado', '1984-06-13', 'Tanah Hitam', 'Laki-laki', '082394856485', 'geyan@gmail.com', 'FASPURKIPK', 'f9cdc6bafd66829420e8858bde369c0f.jpg'),
('44401', 59, 'Andi Samuel Saragih', 'Abepura', '1984-08-28', 'Perumnas 1 Waena', 'Laki-laki', '082178394031', 'andiss@gmail.com', 'FPPSPPUR', ''),
('45234', 53, 'Adelia Putri', 'Abepura', '1984-07-18', 'Nafri', 'Perempuan', '081278456741', 'adel@gmail.com', 'UOSP', '600f7b4a2473d99e105c29901a0d85d5.png'),
('56221', 56, 'Gita Saul', 'Jayapura', '1984-09-21', 'Perumnas 1 Waena', 'Perempuan', '081345634567', 'gita21@gmail.com', 'FPPU', 'b8a55d4ba8974553a01f81f4e5d1e805.jpg'),
('56747', 47, 'Wiliam Saragih', 'Jayapura', '1998-10-22', 'Perumnas', 'Laki-laki', '082399438777', 'andri@gmail.com', 'FAES', '078935c92841cd20f3f6bcf9a0518747.jpg'),
('67890', 45, 'Indah Cahyani Gita Saul', 'Jakarta', '1988-09-26', 'Kotaraja', 'Perempuan', '081247589410', 'indahgit@gmail.com', 'FASPURKIPK', '5b2e471f33243103d595533757b1a4c8.jpeg'),
('70477', 58, 'Andrichard Wiliam Saragih', 'Jayapura', '1998-10-22', 'Perumnas 3 Waena', 'Laki-laki', '082399430477', 'andrichardws@gmail.com', 'FPPSPPUR', '9932af9a4cf991be5e511f43c9a76b96.jpg'),
('87681', 46, 'Alan Dwi', 'Medan', '1976-08-26', 'Abepura', 'Laki-laki', '082348590495', 'alan@gmail.com', 'SLA', 'f394a84c4002277c5dc2e5d1ae5034dd.jpg'),
('88941', 61, 'Ricky Harun', 'Serui', '1993-01-04', 'Hamadi', 'Laki-laki', '082376493012', 'harunr@gmail.com', 'FASPURKIPK', '0ace914995e0449e62e1b2d6bc42d80a.jpg'),
('98076', 55, 'Jores Butu', 'Jayapura', '1984-06-12', 'Perumnas 4 Waena', 'Laki-laki', '081256783453', 'jores@gmail.com', 'FKKK', '1ee6cf72edb108b3465c03c587038a38.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('Administrator','Pengemudi','Satpam','Pegawai') NOT NULL DEFAULT 'Pegawai',
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `level`, `status`) VALUES
(7, 'andrichardws', 'b21ad42c065c6041548071bcc994368c', 'Administrator', 'Aktif'),
(8, 'pengemudi', '32bb3243f605301186fbc4389f073717', 'Pengemudi', 'Aktif'),
(9, 'satpam', '844fd3c289085bda3a1455c29aac8d92', 'Satpam', 'Aktif'),
(10, 'adi', 'c5a73f074ec0f725cd2d51335da5ec77', 'Pegawai', 'Aktif'),
(11, 'azka', 'e3195d1988d8a72e21431743e703b106', 'Pegawai', 'Aktif'),
(38, 'amad', '7e5f1b979ef75bc32eb5e578f0a2d90c', 'Pegawai', 'Aktif'),
(45, 'indah', '0e275f53bec5875ce55180cdc5f17447', 'Pegawai', 'Aktif'),
(46, 'alan', '0e17493e6522532d9824fd2f55fc57f1', 'Pegawai', 'Aktif'),
(47, 'aws', '376e025848ea7d50d3219f93b4e4ae20', 'Pegawai', 'Aktif'),
(49, 'gerrald ', '1c14661080bba28c28c17d1b3e0a149c', 'Pegawai', 'Aktif'),
(53, 'adel', '94c93d4f9686cfeae29e9cbc3230cbf9', 'Pegawai', 'Aktif'),
(55, 'jores', '3c93cafeb2ad97da084cc7312cb9ee02', 'Pegawai', 'Aktif'),
(56, 'gita', '6dafab5f86d9e5f32ba9ce303d86098f', 'Pegawai', 'Aktif'),
(57, 'wilgit', 'ffb6437e88796895205633f3ef695f66', 'Pegawai', 'Aktif'),
(58, 'andrichard', 'b1a3f5837d7acb688b1c1980c175f20d', 'Pegawai', 'Aktif'),
(59, 'andi', '52ffd5da86cd8da17ba4c7d8b0893557', 'Pegawai', 'Aktif'),
(60, 'ipan', '438165dad0435d56025fc1f76b4e2424', 'Pegawai', 'Aktif'),
(61, 'ricky', '162efa68503a49baf8de963ec9ff94bd', 'Pegawai', 'Aktif');

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
  `tanggal_keluar` date DEFAULT NULL,
  `jam_masuk` varchar(10) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `status` enum('Pending','Accepted','Rejected','Canceled') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_permohonan`
--

INSERT INTO `tbl_permohonan` (`id_permohonan`, `nip_pegawai`, `nip_pengemudi`, `no_polisi`, `jam_keluar`, `tanggal_keluar`, `jam_masuk`, `tanggal_masuk`, `keperluan`, `tujuan`, `status`) VALUES
(1, '11148', 'AK18021110', 'PA87A', '02:45 AM', '2020-03-03', '12:30 AM', '2020-03-03', 'Mengikuti rapat bersama walikota', 'Hotel Swiss Bell Jayapura', 'Accepted'),
(2, '15575', 'AK18082228', 'PA1630D2', '02:00 AM', '2020-03-05', '05:00 AM', '2020-03-05', 'Survey tempat kegiatan', 'Arso 2', 'Accepted'),
(3, '11148', 'AK18021110', 'PA87A', '01:00 AM', '2020-03-09', '03:00 AM', '2020-03-09', 'Belanja persiapan kegiatan', 'Mall jayapura', 'Accepted'),
(4, '15575', 'AK18082228', 'PA1630D2', '08:00 AM', '2020-03-21', '10:00 AM', '2020-03-21', 'Pengantaran ke bandara sentani', 'Bandara udara sentani', 'Accepted'),
(5, '11148', 'AK18220122', 'PA5091A', '11:30 AM', '2020-04-01', '13:00 AM', '2020-04-01', 'Survey harga barang', 'Sentani', 'Accepted'),
(18, '15575', 'AK18021110', 'PA5091A', '09:30 AM', '2020-04-10', '10:30 AM', '2020-04-10', 'Ambil barang', 'JNE cargo sentani', 'Accepted'),
(19, '11148', 'AK18082228', 'PA5091A', '01:45 AM', '2020-04-12', '11:45 PM', '2020-04-12', 'Belanja', 'Sentani', 'Accepted'),
(21, '11148', 'AK18021110', 'PA1630D2', '11:45 PM', '2020-04-20', '02:45 AM', '2020-04-20', 'Belanja Persiapan HUT', 'Supermarket', 'Accepted'),
(22, '15575', 'AK18082228', 'PA87A', '10:00 PM', '2020-04-21', '01:00 AM', '2020-04-21', 'Pertemuan Client', 'Hotel Horison Kotaraja', 'Accepted'),
(23, '11148', 'AK18220122', 'PA6514AC', '03:00 AM', '2020-05-05', '06:00 AM', '2020-05-05', 'Antar Surat', 'Kantor Gubernur', 'Accepted'),
(24, '11148', 'AK18021110', 'PA5091A', '01:45 AM', '2020-05-11', '08:45 AM', '2020-05-11', 'Mengambil hasil penjualan kopi khas papua', 'Toko Kopi Ko', 'Canceled'),
(27, '11148', 'AK09347183', 'PA87A', '01:00 AM', '2020-05-20', '03:00 AM', '2020-05-20', 'Beli Kopi', 'Cafe kopi Papua', 'Canceled'),
(28, '15575', 'AK18082228', 'PA1630D2', '01:30 AM', '2020-05-22', '08:00 AM', '2020-06-11', 'Cek kendaraan', 'Bengkel Jayaasri', 'Accepted'),
(29, '40108', 'AK14562567', 'PA1630D2', '06:45 PM', '2020-06-20', '08:00 PM', '2020-06-20', 'Rapat terbuka', 'Hotel Horison Jayapura', 'Accepted'),
(30, '43245', 'AK09347183', 'PA5091A', '07:00 AM', '2020-06-22', '08:00 AM', '2020-06-22', 'Antar barang', 'Taman Imbi', 'Accepted'),
(31, '56221', 'AK23456356', 'PA1120D3', '12:00 AM', '2020-06-23', '03:00 AM', '2020-06-23', 'Penjemputan ke bandara sentani', 'Bandara udara sentani', 'Accepted'),
(34, '11148', NULL, 'PA000001', NULL, NULL, NULL, NULL, 'Ambil barang', 'Cafe Yoka', 'Canceled'),
(36, '11148', 'AK18082228', 'PA87A', '10:30 AM', '2020-06-24', '10:45 AM', '2020-06-24', 'Sosialisasi uang', 'Uncen', 'Accepted'),
(37, '15575', 'AK09347183', 'PA134A34', '10:30 AM', '2020-06-30', '11:00AM', '2020-06-30', 'LC Genbi', 'Rindam', 'Accepted'),
(39, '43245', 'AK14562567', 'PA1630D2', '12:00 AM', '2020-07-01', '01:00 AM', '2020-07-01', 'Pengecekan Uang', 'Bank Mandiri', 'Accepted'),
(40, '56221', 'AK09347183', 'PA1120D3', '11:00 PM', '2020-07-02', '12:00 AM', '2020-07-02', 'Belikan es krim', 'Mall Jayapura', 'Accepted'),
(41, '12345', 'AK18021110', 'PA1630D2', '08:00 AM', '2020-07-04', '12:30 AM', '2020-07-04', 'Jemput orang', 'Terminal Entrop', 'Accepted'),
(42, '67890', 'AK09347183', 'PA6519A', '01:15 AM', '2020-07-05', '04:15 AM', '2020-07-05', 'Belanja peralatan kantor', 'Gramedia Jayapura', 'Accepted'),
(43, '87681', 'AK18220122', 'PA5091A', '02:30 AM', '2020-07-07', '03:30 PM', '2020-07-07', 'Mengurus SIM', 'Polres Jayapura', 'Accepted'),
(44, '11148', NULL, 'PA000001', NULL, NULL, NULL, NULL, 'Rapat', 'Kantor walikota', 'Canceled'),
(45, '11148', 'AK18082228', 'PA1630D2', '02:00 PM', '2020-07-29', '03:00 PM', '2020-07-29', 'Membeli makan', 'Mall Jayapura', 'Accepted'),
(46, '56221', 'AK18021110', 'PA1630D2', '08:30 PM', '2020-07-09', '10:30 PM', '2020-07-09', 'Sosialisasi uang', 'SMA N 1 Sentani', 'Accepted'),
(47, '11148', 'AK09347183', 'PA134A34', NULL, NULL, NULL, NULL, 'Belanja ATK kantor', 'Gramedia', 'Rejected'),
(48, '11148', 'AK09347183', 'PA1120D3', '09:30 PM', '2020-07-30', '10:00 PM', '2020-07-30', 'Kegiatan launching QRIS', 'Kantor Gubernur', 'Accepted'),
(49, '15575', 'AK14562567', 'PA1630D2', '10:00 PM', '2020-07-31', '11:00 PM', '2020-07-31', 'Rapat peresmian gedung baru', 'Kantor Walikota', 'Accepted'),
(50, '70477', 'AK83495234', 'PA1120D3', '06:15 PM', '2020-08-01', '07:15 PM', '2020-08-01', 'Rapat kerja bersama univ. cenderawasih', 'Rektorat univ. cenderawasih', 'Accepted'),
(51, '56747', NULL, NULL, NULL, NULL, NULL, NULL, 'Rapat virtual bersama kapolda', 'Polda Kota Jayapura', 'Rejected'),
(52, '56747', 'AK09347183', 'PA1120D3', NULL, NULL, NULL, NULL, 'Pengambilan titipan barang', 'Perumahan Bank Indonesia', 'Accepted'),
(53, '98076', NULL, 'PA000001', NULL, NULL, NULL, NULL, 'Penjemputan', 'Hotel Aston', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat_pangkat`
--

CREATE TABLE `tbl_riwayat_pangkat` (
  `id_riwayat_pangkat` varchar(7) NOT NULL,
  `nip_pegawai` varchar(5) NOT NULL,
  `kd_pangkat` varchar(3) NOT NULL,
  `no_sk_pangkat` varchar(20) NOT NULL,
  `tanggal_sk_pangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_riwayat_pangkat`
--

INSERT INTO `tbl_riwayat_pangkat` (`id_riwayat_pangkat`, `nip_pegawai`, `kd_pangkat`, `no_sk_pangkat`, `tanggal_sk_pangkat`) VALUES
('IRP0001', '11148', 'AD', '071/H20/KP/2010', '2010-11-17'),
('IRP0002', '15575', 'M', '043/H20/KP/2011', '2011-09-03'),
('IRP0004', '87681', 'AM', '011/H10/KP/2008', '2008-07-22'),
('IRP0005', '11148', 'ADS', '023/H21/KP/2011', '2011-05-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service_kendaraan`
--

CREATE TABLE `tbl_service_kendaraan` (
  `id_service` varchar(7) NOT NULL,
  `no_polisi` varchar(8) NOT NULL,
  `tanggal_service` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `bukti` varchar(38) DEFAULT NULL,
  `total_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_service_kendaraan`
--

INSERT INTO `tbl_service_kendaraan` (`id_service`, `no_polisi`, `tanggal_service`, `keterangan`, `bukti`, `total_service`) VALUES
('IDS0001', 'PA1120D3', '2020-03-22', 'Ganti oli mobil', 'c3660eb9904761893a87bd2d23266c5c.jpg', 900000),
('IDS0002', 'PA134A34', '2020-03-24', 'Ganti kampas rem', '584d3d0edef84ed705eded4ad989dddf.jpg', 1000000),
('IDS0003', 'PA5091A', '2020-04-02', 'Kerusakan lampu depan', '7291d23cdb8585abe7ff5db194b5abec.jpg', 100000),
('IDS0006', 'PA6514AC', '2020-04-03', 'Ganti kampas ganda', NULL, 800000),
('IDS0007', 'PA87A', '2020-04-26', 'Perbaikan knalpot bolong', NULL, 100000),
('IDS0008', 'PA5091A', '2020-04-27', 'Kerusakan tali rem', 'afec085a2377f46b729ba38cedcae5c2.jpg', 10000),
('IDS0009', 'PA1630D2', '2020-04-29', 'Perbaikan body belakang', '6ce91958bf8300be6f435b3dd94e9f47.jpg', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jenis_kendaraan`
--
ALTER TABLE `tbl_jenis_kendaraan`
  ADD PRIMARY KEY (`id_jenis_kendaraan`);

--
-- Indexes for table `tbl_master_fungsi`
--
ALTER TABLE `tbl_master_fungsi`
  ADD PRIMARY KEY (`kd_fungsi`);

--
-- Indexes for table `tbl_master_kendaraan`
--
ALTER TABLE `tbl_master_kendaraan`
  ADD PRIMARY KEY (`no_polisi`),
  ADD KEY `id_jenis_kendaraan` (`id_jenis_kendaraan`);

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
-- Indexes for table `tbl_service_kendaraan`
--
ALTER TABLE `tbl_service_kendaraan`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `no_polisi` (`no_polisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jenis_kendaraan`
--
ALTER TABLE `tbl_jenis_kendaraan`
  MODIFY `id_jenis_kendaraan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  MODIFY `id_permohonan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_master_kendaraan`
--
ALTER TABLE `tbl_master_kendaraan`
  ADD CONSTRAINT `tbl_master_kendaraan_ibfk_1` FOREIGN KEY (`id_jenis_kendaraan`) REFERENCES `tbl_jenis_kendaraan` (`id_jenis_kendaraan`);

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

--
-- Ketidakleluasaan untuk tabel `tbl_service_kendaraan`
--
ALTER TABLE `tbl_service_kendaraan`
  ADD CONSTRAINT `tbl_service_kendaraan_ibfk_1` FOREIGN KEY (`no_polisi`) REFERENCES `tbl_master_kendaraan` (`no_polisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
