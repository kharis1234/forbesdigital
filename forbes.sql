-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2018 pada 10.39
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forbes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `jumlah_baca` int(5) NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tanggal`, `judul`, `isi_artikel`, `id_kategori`, `jumlah_baca`, `create_by`, `gambar`, `aktif`) VALUES
(54, '2018-05-06 10:00:01', 'Air Conditioning (AC)', 'Bongkar Pasang AC, Cleaning/ Perawatan/ Maintenance AC, Service berbagai macam AC Service AC (AC Bocor, AC Tidak Dingin, AC tidak bisa dikecilkan/ dibesarkan suhu nya, AC Mati, dll) Penggantian spare parts AC, Isi Freon, dll', 1, 41, NULL, 'Vh18Zhi_Air Conditioning (AC).jpg', 'Y'),
(55, '2018-05-07 12:42:13', 'Mesin Cuci', 'Service /perbaikan mesin cuci 1 atau 2 tabung/ top loading front loading yang: Tidak bisa putar, Mati total, Air tidak bisa masuk, Air tidak bisa keluar, Ganti vanbelt/ gear box/ water inlet selenoid valve/ water pump, dll', 3, 49, NULL, 'wdvTkWj_Mesin Cuci.jpg', 'Y'),
(56, '2018-05-12 12:13:06', 'Water Heater', 'Bongkar & Pasang water heater, Perawatan/ maintenance water heater, Penggantian spare part, Instalasi pipa air panas, Servis water heater : Tabung bocor, tidak panas, dll', 3, 37, NULL, 'K9stbfl_Water Heater.jpg', 'Y'),
(57, '2018-05-12 12:13:06', 'Jasa Bongkar Pasang Ac Di Bogor', 'Selain Jasa bongkar / pasang ac di daerah Bogor kota, kami juga melayani jual / beli ac baru dan second di bogor. Apabila ada permintaan pelanggan untuk membeli atau menjual ac bisa langsung dikonsultasikan dengan para teknisi kami di lapangan. Kami menyediakan ac yang berkualitas baik dan yang pasti bergaransi, karena kepuasan pelanggan adalah yang utama bagi kami. Selain itu kami juga menyediakan pipa ac hingga freon yang berkualitas untuk memenuhi kebutuhan dilapangan jika diperlukan.', 1, 65, NULL, 'KMT1-up_Jasa Bongkar Pasang Ac Di Bogor.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarharga`
--

CREATE TABLE `daftarharga` (
  `id_daftarharga` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jenisfreon` varchar(100) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `daftarharga`
--

INSERT INTO `daftarharga` (`id_daftarharga`, `judul`, `jenis`, `pekerjaan`, `jenisfreon`, `qty`, `harga`, `aktif`) VALUES
(1, '1/2 PK', 'AC SPLITE', 'Wash Indoor/Outdoor', '-', '1 Unite', 'Rp. 50.000', 'Y'),
(2, '3/4 PK', 'AC SPLITE', 'Wash Indoor/Outdoor', '-', '1 Unite ', 'Rp. 50.000', 'Y'),
(3, '1 PK', 'AC SPLITE', 'Wash Indoor/Outdoor', '-', '1 Unite', 'Rp. 50.000', 'Y'),
(4, '1,5 PK', 'AC SPLITE', 'Wash Indoor/Outdoor', '-', '1 Unite', 'Rp. 50.000', 'Y'),
(5, '2 PK', 'AC SPLITE', 'Wash Indoor/Outdoor', '-', '1 Unite', 'Rp. 60.000', 'Y'),
(6, '2,5 PK', 'AC SPLITE', 'Wash Indoor/Outdoor', '-', '1 Unite', 'Rp. 60.000', 'Y'),
(7, '1/2 PK', 'AC SPLITE', 'ISI FULL Freon', 'R22', '1 Unite', 'Rp. 220.000', 'Y'),
(8, '3/4 PK', 'AC SPLITE', 'ISI FULL Freon', 'R22', '1 Unite', 'Rp. 220.000', 'Y'),
(9, '1 PK', 'AC SPLITE', 'ISI FULL Freon', 'R22', '1 Unite', 'Rp. 220.000', 'Y'),
(10, '1,5 PK', 'AC SPLITE', 'ISI FULL Freon', 'R22', '1 Unite', 'Rp. 250.000', 'Y'),
(11, '2 PK', 'AC SPLITE', 'ISI FULL Freon', 'R22', '1 Unite', 'Rp. 270.000', 'Y'),
(12, '2,5 PK', 'AC SPLITE', 'ISI FULL Freon', 'R22', '1 Unite', 'Rp. 300.000', 'Y'),
(13, '1/2 PK', 'AC SPLITE', 'Tambah Freon', 'R32/R410A', '1 Unite', 'Rp. 250.000', 'Y'),
(14, '3/4 PK', 'AC SPLITE', 'Tambah Freon', 'R32/R410A', '1 Unite', 'Rp. 250.000', 'Y'),
(15, '1 PK', 'AC SPLITE', 'Tambah Freon', 'R32/R410A', '1 Unite', 'Rp. 250.000', 'Y'),
(16, '1,5 PK', 'AC SPLITE', 'Tambah Freon', 'R32/R410A', '1 Unite', 'Rp. 275.000', 'Y'),
(17, '2 PK', 'AC SPLITE', 'Tambah Freon', 'R32/R410A', '1 Unite', 'Rp. 275.000', 'Y'),
(18, '2,5 PK', 'AC SPLITE', 'Tambah Freon', 'R32/R410A', '1 Unite', 'Rp. 275.000', 'Y'),
(19, '1/2 PK', 'AC SPLITE', 'ISI FULL Freon', 'R32/R410A', '1 Unite', 'Rp. 300.000', 'Y'),
(20, '3/4 PK', 'AC SPLITE', 'ISI FULL Freon', 'R32/R410A', '1 Unite', 'Rp. 300.000', 'Y'),
(21, '1 PK', 'AC SPLITE', 'ISI FULL Freon', 'R32/R410A', '1 Unite', 'Rp. 300.000', 'Y'),
(22, '1,5 PK', 'AC SPLITE', 'ISI FULL Freon', 'R32/R410A', '1 Unite', 'Rp. 370.000', 'Y'),
(23, '2 PK', 'AC SPLITE', 'ISI FULL Freon', 'R32/R410A', '1 Unite', 'Rp. 400.000', 'Y'),
(24, '2,5 PK', 'AC SPLITE', 'ISI FULL Freon', 'R32/R410A', '1 Unite', 'Rp. 400.000', 'Y'),
(25, '1/2 PK', 'AC SPLITE', 'BONGKAR', '-', '1 Unite', 'Rp. 150.000', 'Y'),
(26, '3/4 PK', 'AC SPLITE', 'BONGKAR', '-', '1 Unite ', 'Rp. 150.000', 'Y'),
(27, '1 PK', 'AC SPLITE', 'BONGKAR', '-', '1 Unite', 'Rp. 150.000', 'Y'),
(28, '1,5 PK', 'AC SPLITE', 'BONGKAR', '-', '1 Unite', 'Rp. 150.000', 'Y'),
(29, '2 PK', 'AC SPLITE', 'BONGKAR', '-', '1 Unite', 'Rp. 200.000', 'Y'),
(30, '3 PK', 'AC STANDING', 'BONGKAR', '-', '1 Unite', 'Rp. 300.000', 'Y'),
(31, '1/2 PK', 'AC SPLITE', 'PASANG', '-', '1 Unite', 'Rp. 200.000', 'Y'),
(32, '3/4 PK', 'AC SPLITE', 'PASANG', '-', '1 Unite ', 'Rp. 200.000', 'Y'),
(33, '1 PK', 'AC SPLITE', 'PASANG', '-', '1 Unite', 'Rp. 200.000', 'Y'),
(34, '1,5 PK', 'AC SPLITE', 'PASANG', '-', '1 Unite', 'Rp. 200.000', 'Y'),
(35, '2 PK', 'AC SPLITE', 'PASANG', '-', '1 Unite', 'Rp. 250.000', 'Y'),
(36, '3 PK', 'AC STANDING', 'PASANG', '-', '1 Unite', 'Rp. 350.000', 'Y'),
(37, '1/2 PK', 'AC SPLITE', 'Tambah Freon', 'R22', '1 Unite', 'Rp. 150.000', 'Y'),
(38, '3/4 PK', 'AC SPLITE', 'Tambah Freon', 'R22', '1 Unite', 'Rp. 150.000', 'Y'),
(39, '1 PK', 'AC SPLITE', 'Tambah Freon', 'R22', '1 Unite', 'Rp. 150.000', 'Y'),
(40, '1,5 PK', 'AC SPLITE', 'Tambah Freon', 'R22', '1 Unite', 'Rp. 150.000', 'Y'),
(41, '2 PK', 'AC SPLITE', 'Tambah Freon', 'R22', '1 Unite', 'Rp. 175.000', 'Y'),
(42, '2,5 PK', 'AC SPLITE', 'Tambah Freon', 'R22', '1 Unite', 'Rp. 200.000', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_download` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(400) COLLATE latin1_general_ci NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `judul`, `nama_file`, `hits`) VALUES
(15, '', 'perpustakaan.zip', 0),
(16, '', 'penduduk.zip', 0),
(17, '', 'simpeg_militer.zip', 0),
(18, '', 'arsip_polisi.zip', 0),
(19, '', 'valuta_asing.zip', 0),
(35, '', 'ReadPut_1.4.exe', 2),
(21, '', 'toko.zip', 0),
(22, '', 'koperasi.zip', 1),
(23, '', 'arus_kas.zip', 0),
(24, '', 'simpeg_pns.zip', 0),
(25, '', 'arsip_umum.zip', 0),
(26, '', 'akademik.zip', 0),
(27, '', 'parkir_kendaraan.zip', 0),
(28, '', 'dealer_motor.zip', 0),
(29, '', 'dealer_mobil.zip', 0),
(30, '', 'katering.zip', 0),
(31, '', 'rekam_medis.zip', 1),
(32, '', 'keuangan_daerah.zip', 1),
(33, '', 'absensi1shift.zip', 1),
(34, '', 'absensi3shift.zip', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ordercol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `name`, `title`, `phone`, `email`, `ordercol`) VALUES
(1, 'RYAN WIRANATA', 'Executive Director', '0811 857 779', 'tanti@forbesindonesia.com', 1),
(2, 'TANTI JUMIATI', 'Director', '0812 8010 9333', 'ryan@forbesindonesia.com', 2),
(3, 'RAFKI ISMLAIL', 'Senior Sales & Event Manager', '0821 1456 1970', 'rafki@forbesindonesia.com', 3),
(4, 'RIO ZIKRIZAL', 'Ass. Manager Event & Communications', '0811 9500 255', 'rio@forbesindonesia.com', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `jdl_gallery` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `jdl_gallery`, `gbr_gallery`, `aktif`) VALUES
(236, 'BONGKAR AC', 'project.jpg', 'Y'),
(237, 'SERVICE AC', 'project-2.jpg', 'Y'),
(238, 'SERVICE AC', 'project-4.jpg', 'Y'),
(239, 'PERAWATAN AC', 'project-5.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `show_foto` enum('Y','N') NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `isi_halaman`, `gambar`, `show_foto`, `type`, `url`) VALUES
(68, 'About This Event', ' <p class=\"lead\">\r\n                              Forbes Indonesia has always been of the highest quality, therefore this\r\nmultimedia event will be positioned as the pre-eminent competition to\r\nempower Indonesia’s and Southeast Asia’s Internet community.\r\n                            </p>\r\n                            <p class=\"lead\">\r\n                               The concept is simple, a competition to allow the region’s best startups\r\nto gain well-deserved recognition. Those selected to participate will gain\r\nvaluable exposure, and a branding opportunity for themselves, as well as\r\nnetworking opportunities at the event with Asia’s leading tech experts,\r\nconventional corporation looking at digital transformation and investors.\r\nThe winners of the competition will be listed on the Forbes’ list of the\r\nregion next promising startups.\r\n                            </p>', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tlp` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `facebook_id` varchar(100) NOT NULL,
  `instagram_id` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favico` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `alamat`, `tlp`, `website`, `meta_deskripsi`, `meta_keyword`, `facebook_id`, `instagram_id`, `logo`, `favico`) VALUES
(1, 'Jasa Service AC, Bongkar Pasang AC, Cuci AC Bogor | Harga Murah & Garansi ', 'info@hjtserviceac.com', 'Jalan Raya Gunung Putri No. 29 Bogor Tanjung Udik', '087770086668 / 085210106063', 'http://www.hjtserviceac.com', 'jasa service AC Bogor, jasa cuci ac, service ac murah, jasa ac, jual ac bekas ,jual ac, harga ac murah ,harga pasang ac ,jual ac mura,h jasa service ac, jasang pasang ac -  087770086668, 085210106063', 'Service AC Bogor jasa cuci ac, service ac murah, jasa ac, jual ac bekas ,jual ac, harga ac murah ,harga pasang ac ,jual ac mura,h jasa service ac, jasang pasang ac -  087770086668, 085210106063', 'http://www.facebook.com/', 'https://www.instagram.com/hjtserviceac/', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `aktif`) VALUES
(1, 'BONGKAS PASANG AC', 'Y'),
(2, 'ISI FREON', 'Y'),
(3, 'PERAWATAN', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_layanan` tinytext NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `judul`, `isi_layanan`, `aktif`) VALUES
(1, 'SERVICE AC SPLITE', 'Jika AC rusak / mati, terjadi kerusakan pada kompresor', 'Y'),
(2, 'CENTRAL', 'AC anda akan tahan lama karena selalu terawat', 'Y'),
(3, 'CEILLING', 'Sistem penyaringan udara yang dimiliki AC bermasalah', 'Y'),
(4, 'CASSETE', 'Penginstalasian ataupun ada masalah pada AC Cassette Anda', 'Y'),
(5, 'BONGKAR & PASANG AC', 'Pembongkaran Unit AC, Pemasangan Unit AC Baru/Bekas, Pengentaran Unit Pindah rumah', 'Y'),
(6, 'WATER HEATER', 'Perbaikan, perawatan Mesin Pemanas Air ', 'Y'),
(7, 'MESIN CUCI', 'Melayani service berbagai kerusakan pada mesin cuci anda. ', 'Y'),
(8, 'DLL', 'Layanan jasa lainnya hubungi kami', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1504307572);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `startup_name` varchar(100) NOT NULL,
  `reg_buss_name` varchar(100) NOT NULL,
  `date_founded_in` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `position` text NOT NULL,
  `quest1` text NOT NULL,
  `quest2` text NOT NULL,
  `quest3` text NOT NULL,
  `quest4` text NOT NULL,
  `quest5` text NOT NULL,
  `quest6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `startup_name`, `reg_buss_name`, `date_founded_in`, `category`, `address`, `phone`, `email`, `website`, `title`, `firstname`, `lastname`, `date_birth`, `position`, `quest1`, `quest2`, `quest3`, `quest4`, `quest5`, `quest6`) VALUES
(1, 'startup name1', 'fintech', '2018-05-14', '1', '', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `cityid` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `firstname`, `lastname`, `gender`, `company_name`, `industry`, `address`, `cityid`, `state`, `zipcode`, `phone`, `fax`, `hp`, `email`, `job_title`) VALUES
(1, 'panggrayta', 'dido', 'm', 'LPPOM', 'Obat', 'bogor', 1, 'bogor', 121, 121, 121, 1212, 'd1do.pankid@gmail.com', 'programmner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dida', 'Nurwanda', 'didanurwanda', 'feddfrLq3LCI7GcCXWZMZpMr6YW9KEXy', '$2y$13$1QLePDg5oZLrg5xjnnY2GecZ447N16gwvyc2tabisYg0vhlMXFepu', 'plM6WqXrhSX_Fvl2PNv3eejHQqh87N40_1499909736', 'khariswibawandi2@gmail.com', 10, 1448180898, 1504675785),
(7, 'Kharis', 'Wibawandi', 'admin', 'qPjKYneYuZX6_ys_OyJ37s20l24vqbY5', '$2y$13$bHH08oREcue8rN.VOHLSJuKpNPvrTOiLpSgTdKGS.XbxeL4AlJIk2', NULL, 'khariswibawandi@gmail.com', 10, 1499909849, 1499909849),
(8, '', '', 'admin2', 'odgsGE_NY-cHxr5DLqLQB9a8oj-k46es', '$2y$13$TWvCn3.BUgWy00tNkDLI9uP.ayeNqAyEoGx9syK4sdDco8FkJNgjy', NULL, 'kharisw@yahoo.com', 10, 1504305227, 1504305227),
(9, '', '', 'dido', 'YGPyODxgOfFWMB1CocrfKHT1iXcNQzO8', '$2y$13$pdVFrhghxCn3IYN2cBGLruuPzEc1VMr4qcZYiV/ghupgzCxOIQyZK', NULL, 'd1do.pankid@gmail.com', 10, 1526392989, 1526392989);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `create_by` (`create_by`);

--
-- Indeks untuk tabel `daftarharga`
--
ALTER TABLE `daftarharga`
  ADD PRIMARY KEY (`id_daftarharga`);

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `daftarharga`
--
ALTER TABLE `daftarharga`
  MODIFY `id_daftarharga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT untuk tabel `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
