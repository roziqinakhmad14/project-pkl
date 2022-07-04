-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 04.41
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

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
-- Struktur dari tabel `kecamatan_kota_malang`
--

CREATE TABLE `kecamatan_kota_malang` (
  `ID` int(11) NOT NULL,
  `Kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan_kota_malang`
--

INSERT INTO `kecamatan_kota_malang` (`ID`, `Kecamatan`) VALUES
(1, 'Blimbing'),
(2, 'Kedungkadang'),
(3, 'Klojen'),
(4, 'Lowokwaru'),
(5, 'Sukun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan_kota_malang`
--

CREATE TABLE `kelurahan_kota_malang` (
  `ID` int(11) NOT NULL,
  `Kelurahan` varchar(100) NOT NULL,
  `ID_Kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelurahan_kota_malang`
--

INSERT INTO `kelurahan_kota_malang` (`ID`, `Kelurahan`, `ID_Kecamatan`) VALUES
(1, 'Arjosari', 1),
(2, ' Balearjosari', 1),
(3, 'Blimbing', 1),
(4, 'Bunulrejo', 1),
(5, 'Jodipan', 1),
(6, 'Kesatrian', 1),
(7, ' Pandanwangi', 1),
(8, 'Polehan', 1),
(9, 'Polowijen', 1),
(10, ' Purwantoro', 1),
(11, 'Purwodadi', 1),
(12, 'Arjowinangu', 2),
(13, 'Bumiayu', 2),
(14, 'Buring', 2),
(15, 'Cemorokandang', 2),
(16, 'Kendungkandang', 2),
(17, 'Purwodadi', 2),
(18, 'Kotalama', 2),
(19, 'Madyopuro', 2),
(20, 'Mergosono', 2),
(21, 'Sawojajar', 2),
(22, 'Tlogoawaru', 2),
(23, 'Wonokoyo', 2),
(24, 'Bareng', 3),
(25, 'Gadingsari', 3),
(26, 'Kasin', 3),
(27, 'Kauman', 3),
(28, 'Kiduldalem', 3),
(29, 'Klojen', 3),
(30, 'Oro-Oro Dowo', 3),
(31, 'Penanggungan', 3),
(32, 'Rampal Celaket', 3),
(33, 'Samaan', 3),
(34, 'Sukoharjo', 3),
(35, 'Dinoyo', 4),
(36, 'Jatimulyo', 4),
(37, 'Ketawanggede', 4),
(38, 'Lowokwaru', 4),
(39, 'Merjosari', 4),
(40, 'Mojolngu', 4),
(41, 'Sumbersari', 4),
(42, 'Tasikmadu', 4),
(43, 'Tlogomas', 4),
(44, 'Tulusrejo', 4),
(45, 'Tunggulwulung', 4),
(46, 'Tanjungsekar', 4),
(47, 'Bakalankrajan', 5),
(48, 'Badulan', 5),
(49, 'Badungrejosari', 5),
(50, 'Ciptomulyo', 5),
(51, 'Gadang', 5),
(52, 'Karangbesuki', 5),
(53, 'Kebonsari', 5),
(54, 'Mulyorejo', 5),
(55, 'Pisangcandi', 5),
(56, 'Sukun', 5),
(57, 'Tanjungrejo', 5);

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
  `TANGGAL TERBIT` date NOT NULL,
  `NO IZIN` varchar(100) NOT NULL,
  `JENIS PERIZINAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_perizinan`
--

INSERT INTO `tabel_perizinan` (`NO`, `NO REGISTER`, `TANGGAL`, `NAMA`, `ALAMAT`, `NO HP`, `PERUSAHAAN`, `LOKASI USAHA`, `KELURAHAN`, `KECAMATAN`, `TANGGAL TERBIT`, `NO IZIN`, `JENIS PERIZINAN`) VALUES
(1, 'UKL/003/PERIJ/I/2021', '2021-01-04', 'MARIO ARDINATA', 'JL. TELAGA BODAS Y-I/9 KOTA MALANG', NULL, 'PEMBANGUNAN PERUM. RIVERFONT URBAN RESORT \"PT. BUMI ARTHA MAKMOER\"', 'JL. RAYA KI AGENG GRIBIG KOTA MALANG', 'MADYOPURO', 'KEDUNGKANDANG', '2021-01-04', '660.1/0018/35.73.406/2021', 'UKL-UPL');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_perizinan`
--
ALTER TABLE `jenis_perizinan`
  ADD PRIMARY KEY (`id_jenis_perizinan`);

--
-- Indeks untuk tabel `kecamatan_kota_malang`
--
ALTER TABLE `kecamatan_kota_malang`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kelurahan_kota_malang`
--
ALTER TABLE `kelurahan_kota_malang`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabel_perizinan`
--
ALTER TABLE `tabel_perizinan`
  ADD PRIMARY KEY (`NO REGISTER`),
  ADD KEY `JENIS PERIZINAN` (`JENIS PERIZINAN`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_perizinan`
--
ALTER TABLE `tabel_perizinan`
  ADD CONSTRAINT `tabel_perizinan_ibfk_1` FOREIGN KEY (`JENIS PERIZINAN`) REFERENCES `jenis_perizinan` (`id_jenis_perizinan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
