-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 09.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_dsnaker_pmptsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_perizinan`
--

CREATE TABLE `jenis_perizinan` (
  `id_jenis_perizinan` varchar(10) NOT NULL,
  `nama_perizinan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_perizinan`
--

INSERT INTO `jenis_perizinan` (`id_jenis_perizinan`, `nama_perizinan`) VALUES
('AMDAL', 'Analisis Mengenai Dampak Lingkungan'),
('asdas', 'asdas'),
('IL', 'Izin Lingkungan'),
('ILPK', 'Izin Lembaga Pelatihan Kerja'),
('IMBG', 'Izin Mendirikan Bangunan Gedung'),
('IMBG3L', 'Izin Mendirikan Bangunan Gedung 3 Lantai ke atas'),
('IMBG4L', 'Izin Mendirikan Bangunan Gedung 4 Lantai ke atas'),
('IMBM/T', 'Izin Mendirikan Bangunan Menara/Tower'),
('IMBR', 'Izin Mendirikan Bangunan Reklame'),
('INB', 'Izin Normal Baru'),
('IPAL', 'Izin Pembuangan Air Limbah'),
('IPAUD', 'Izin Pendidikan Anak Usia Dini'),
('IPD', 'Izin Pendidikan Dasar'),
('IPDH', 'Izin Praktek Dokter Hewan'),
('IPKD', 'Izin Pemakaian Kekayaan Daerah'),
('IPN', 'Izin Pendidikan Nonformal'),
('IPRPB', 'Izin Pengelolaan Pasar Rakyat,Pusat Perbelanjaan'),
('IPRS', 'Izin Pendirian Rumah Sakit'),
('IPSLB3', 'Izin Penyimpanan Sementara Limbah LB3'),
('IPT', 'Izin Penyelenggaraan Tontonan'),
('IPTM/MT', 'Izin Penggunaan Tanah Makam/Makam Tumpang'),
('IPTTK', 'Izin Praktek Tenaga Teknis Kefarmasian'),
('IRIN', 'Izin Reklame Insidentil'),
('IRP', 'Izin Reklame Permanen'),
('ITA', 'Izin Trayek Angkota'),
('IUA', 'Izin Usaha Angkutan'),
('IUC', 'Izin Uji Coba'),
('IUI', 'Izin Usaha Industri'),
('IUJK', 'Izin Usaha Jasa Konstruksi'),
('IUTS', 'Izin Usaha Toko Swalayan'),
('KPRKRK/AP', 'Keterangan Pemanfaatan Ruang KRK/AP'),
('KRK', 'Keterangan Rancangan Kota'),
('KRK1', 'Keterangan Rancangan Kota 1'),
('KRT', 'Keterangan Rencana Taplak(siteplan)'),
('PERTEK BMA', 'PERTEK BMAL'),
('PERTEK LB3', 'PERTEK LB3'),
('SIKPM', 'Surat Izin Kerja Perekam Medis'),
('SIPA', 'Surat Izin Praktek Apoteker'),
('SIPATLM', 'Surat Izin Praktek Ahli Teknologi Laboratorium Medik'),
('SIPB', 'Surat Izin Praktek Bidan'),
('SIPD', 'Surat Izin Praktek Dokter'),
('SIPP', 'Surat Izin Praktek Perawat'),
('SIUP', 'Surat Izin Usaha Perdagangan'),
('SIUPMB', 'Surat Izin Usaha Perdagangan Minuman Beralkohol'),
('SKP', 'Surat Keterengan Penelitian'),
('SPKPDPLH', 'Surat Pernyataan Kesanggupan Pengelolaan Dan Pemantauan Lingkungan'),
('TDG', 'Tanda Daftar Gudang'),
('TDI', 'Tanda Daftar Industri'),
('TDP', 'Tanda Daftar Perusahaan'),
('TDUP', 'Tanda Daftar Usaha Pariwisata'),
('TES', 'TES'),
('UKL-UPL', 'UKL-UPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_perizinan`
--

CREATE TABLE `tabel_perizinan` (
  `NO` int(11) NOT NULL,
  `NO REGISTER` varchar(100) NOT NULL,
  `TANGGAL` date NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  `NO HP` int(15) DEFAULT NULL,
  `PERUSAHAAN` varchar(100) NOT NULL,
  `LOKASI USAHA` varchar(100) NOT NULL,
  `KELURAHAN` varchar(20) NOT NULL,
  `KECAMATAN` varchar(20) NOT NULL,
  `TANGGAL IZIN` date NOT NULL,
  `JENIS PERIZINAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_perizinan`
--
ALTER TABLE `jenis_perizinan`
  ADD PRIMARY KEY (`id_jenis_perizinan`);

--
-- Indeks untuk tabel `tabel_perizinan`
--
ALTER TABLE `tabel_perizinan`
  ADD PRIMARY KEY (`NO`),
  ADD KEY `JENIS PERIZINAN` (`JENIS PERIZINAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
