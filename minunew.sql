-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 06:47 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `gender`, `tgl_lahir`, `jabatan`, `alamat`, `level`) VALUES
(1, 'admin', 'L', '7-2-1989', 'admin', 'lkjhjhgh', '');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `tgl_artikel` date NOT NULL,
  `judul_artikel` varchar(225) NOT NULL,
  `isi_artikel` text NOT NULL,
  `gambar_artikel` varchar(225) DEFAULT NULL,
  `id_kategori` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tgl_artikel`, `judul_artikel`, `isi_artikel`, `gambar_artikel`, `id_kategori`, `id_user`) VALUES
(25, '2016-04-28', 'Informasi Data Siswa Baru', '<p>Data Siswa Baru Penerima beasiswa Selama Satu tahun ya</p>', 'minu-artikel-informasi-data-siswa-baru-26-20160427-1461791158.jpg', 10, 5),
(26, '2016-04-27', 'Juara 1 Lomba Debat Se tapal Kuda', '<p>Debat yang di adakan oleh himpuman satra inggris univ. pgri banyuwangi</p>', 'minu-artikel-juara-1-lomba-debat-se-tapal-kuda-26-20160427-1461791677.jpg', 18, 5),
(27, '2016-04-27', 'Juara Lomba Carnaval Se-Purwoharjo', '<p>Carnaval Purwoharjo</p>', 'minu-artikel-juara-lomba-carnaval-se-purwoharjo-26-20160427-1461785852.jpg', 18, 5),
(28, '2016-04-10', 'Pembelajaran Kelas Interaktif Setiap Sub. Mata Pelajaran', '<p>Pembelajaran Kelas Interaktif Setiap Sub. Mata Pelajaran,&nbsp;<span style="color: #444444; font-family: ''Trebuchet MS'', Tahoma, Arial, sans-serif; font-size: 13px; line-height: 18.2px; text-align: justify;">Media interaktif merupakan salah satu media pembelajaran yang dapat digunakan untuk membantu proses belajar mengajar. Media interaktif sebagai dampak kemajuan teknologi informasi dan komunikasi membuat kegiatan belajar dapat berlangsung kapanpun dan dimanapun. Menggunakan media pembelajaran saat ini merupakan peralihan kecenderungan bagi guru dalam menggunakan metode lama (tradisional) menjadi menggunakan metode baru (modern).</span></p>', 'minu-artikel-pembelajaran-kelas-interaktif-setiap-sub-mata-pelajaran-26-20160410-1460295426.jpg', 10, 5),
(29, '2016-04-10', 'Legalisir Ijazah Kelulusan, Syarat dan Tempat Pengambilan', '<p>Legalisir Ijazah Kelulusan, Syarat dan Tempat Pengambilan</p>', 'minu-artikel-legalisir-ijazah-kelulusan-syarat-dan-tempat-pengambilan-26-20160410-1460295542.jpg', 10, 5),
(30, '2016-04-27', 'Perencanaan Pembangunan Aula Kelas', '<p>Perencanaan Pembangunan Aula Kelas</p>', 'minu-artikel-perencanaan-pembangunan-aula-kelas-26-20160427-1461786178.jpg', 19, 5),
(32, '2016-04-27', 'Juara 1 Lomba Lingkungan Sekolah Sehat 2015', '<p>Juara 1 Lomba Lingkungan Sekolah Sehat 2015</p>', 'minu-artikel-juara-1-lomba-lingkungan-sekolah-sehat-2015-26-20160427-1461786013.jpg', 18, 5),
(33, '2016-04-27', 'Juara III Lomba Tartil Quran Tingkan Kecamatan Purwoharjo', '<p>Juara III Lomba Tartil Quran Tingkan Kecamatan Purwoharjo</p>', 'minu-artikel-juara-iii-lomba-tartil-quran-tingkan-kecamatan-purwoharjo-26-20160427-1461785969.jpg', 18, 5),
(34, '2016-04-27', 'Juara II Lomba Pramuka Penggalang Se-Kecamatan Cluring', '<p>Juara II Lomba Pramuka Penggalang Se-Kecamatan Cluring</p>', 'minu-artikel-juara-ii-lomba-pramuka-penggalang-se-kecamatan-cluring-26-20160427-1461786086.png', 18, 5),
(35, '2016-04-27', 'Pemberitahuan Surat Keterangan Siswa tidak Mampu ', '<p>Pemberitahuan Surat Keterangan Siswa tidak Mampu&nbsp;</p>', 'minu-artikel-pemberitahuan-surat-keterangan-siswa-tidak-mampu-26-20160427-1461786157.png', 10, 5),
(36, '2016-04-27', 'Juara II Paduan Suara tingkat kabupaten', '<p>Juara II Paduan Suara tingkat kabupaten</p>', 'minu-artikel-juara-ii-paduan-suara-tingkat-kabupaten-26-20160427-1461786114.jpg', 18, 5),
(37, '2016-04-27', 'Juara Harapan 1 Lomba Gerak Jalan 17 Agustusan', '<p>Juara Harapan 1 Lomba Gerak Jalan 17 Agustusan</p>', 'minu-artikel-juara-harapan-1-lomba-gerak-jalan-17-agustusan-26-20160427-1461786051.jpg', 18, 5),
(38, '2016-04-28', 'Agenda Rapat Guru KKM Purwoharjo', '<p>Agenda Rapat Guru KKM Purwoharjo</p>', 'minu-artikel-agenda-rapat-guru-kkm-purwoharjo-26-20160428-1461819792.jpg', 17, 5),
(39, '2016-04-28', 'Koordinasi Pembangunan Aula', '<p>Koordinasi Pembangunan Aula</p>', 'minu-artikel-koordinasi-pembangunan-aula-26-20160428-1461820424.jpg', 19, 5),
(40, '2016-04-28', 'Rapat Persiapan 17 Agustus', '<p>Rapat Persiapan 17 Agustus</p>', 'minu-artikel-rapat-persiapan-17-agustus-26-20160428-1461820462.jpg', 17, 5),
(41, '2016-04-28', 'Pelaksanaan porseni Se Jawa Timur', '<p style="color: #555555; font-family: Arial, ''Lucida Grande'', sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">Porseni MI se-Jawa Timur Ke-IV di Kabupaten Blitar terbawa sampai di acara penutupan yang berlangsung hari Kamis (13/06) di aula Batalyon Infanteri 511 atau &lsquo;Markas Badak Hitam&rsquo; yang dimulai pukul 14.00&nbsp;<span class="caps">WIB</span>. Aula yang cukup besar ini dipenuhi peserta, official dan pendamping hingga berakhir pukul 16.00&nbsp;<span class="caps">WIB</span>.</p>\r\n<p style="color: #555555; font-family: Arial, ''Lucida Grande'', sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">Hadir dalam acara penutupan itu diantaranya yakni Kasi Kesiswaan dan Kasi Kurikulum Kanwil Kemenag Prov Jatim, Kepala Kantor dan Kasi Pendidikan Madrasah Kantor Kementerian Agama Kota Blitar, Kasubbag Tata Usaha serta Penyelenggara Haji &amp; Umroh Kantor Kementerian Agama Kabupaten Blitar, dll.</p>\r\n<p style="color: #555555; font-family: Arial, ''Lucida Grande'', sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">Meskipun tidak sampai mengganggu jalannya acara penutupan, ada beberapa official dan pendamping yang sempat menggerutu mengapa acara penutupan Porseni MI se-Jawa Timur Ke-IV di Kabupaten Blitar ini baru dimulai pada pukul 14.00&nbsp;<span class="caps">WIB</span>.</p>', 'minu-artikel-pelaksanaan-porseni-se-jawa-timur-26-20160428-1461820732.jpg', 17, 5),
(42, '2016-04-28', 'Rehap kelas Bantuan dari Masyarakat', '<p>kali ini telah menyediakan file Rancangan Anggaran Belanja Rehabilitasi ruang kelas. File yang kami share berbentuk exel dan word. Rancangan Anggaran Belanja ini tentunya dapat dijadikan pedoman bagi Madrasah atau Sekolah dalam mengajukan proposal Pengajuan Rehabilitasi ruang kelas kepada Pemerintah maupun pihak sewasta. Silahkan langsung saja di unduh file berikut ini.&nbsp;</p>', 'minu-artikel-rehap-kelas-bantuan-dari-masyarakat-26-20160428-1461820989.jpg', 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE `ekstra` (
  `id_ekstra` int(11) NOT NULL,
  `nm_ekstra` varchar(225) NOT NULL,
  `jenis_ekstra` varchar(225) NOT NULL,
  `ket_ekstra` text NOT NULL,
  `pembimbing_ekstra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `subyek_faq` varchar(225) NOT NULL,
  `keterangan_faq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `subyek_faq`, `keterangan_faq`) VALUES
(2, 'Apa Yang Ada di Minu ?', 'Semua Tersesida di Mi Nu 2 Kradenan'),
(3, 'Apakah keunggulan dari sekolah MINU 2 Keradenan ?', 'Terdapat tujuh keunggulan, yakni :\r\n1. Sistem Fullday School Berbasis Pendidikan Karakter\r\n2. Mengadopsi Pembelajaran Negara Maju\r\n3. Everyday with Al Qur''an\r\n4. Pendidikan Agama Islam\r\n5. Program We Can Speak\r\n6. Pembelajaran Ekstrakurikuler\r\n7. Gerakan Sekolah Bersih'),
(4, 'Layanan apakah yang diberikan oleh Lembaga  dalam meningkatkan kualitas pendidikan ?', 'Mengembangkan pusat pengembangan tenaga kependidikan dan pusat penjaminan mutu untuk terselenggaranya pendidikan dasar dalam rangka membentuk karakter keislaman.'),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(10) NOT NULL,
  `judul_img` varchar(225) NOT NULL,
  `tgl_upload` date NOT NULL,
  `img_galeri` varchar(225) NOT NULL,
  `ket_galeri` varchar(225) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul_img`, `tgl_upload`, `img_galeri`, `ket_galeri`, `id_user`) VALUES
(9, 'Jasjus Berbagi2', '2016-05-14', 'galeri-jasjus-berbagi-1-20160427-1461788099.jpg', 'Pagi ini ada acara jasjus berbagi di MINU 2 Keradenan', 5),
(10, 'Penyuluhan Rehap ', '2016-04-27', 'galeri-penyuluhan-rehap-26-20160427-1461787785.jpg', 'Hari ini Ada Penyuluhan Rehap dari Departemen Agama', 51),
(11, 'Pepsodent Goes to school', '2016-04-27', 'galeri-pepsodent-goes-to-school-26-20160427-1461787831.jpg', 'Pepsoden Goes to school 2015', 51),
(12, 'Badut Minu 2 Lucu', '2016-04-27', 'galeri-badut-minu-2-lucu-26-20160427-1461787856.jpg', 'Badut Minu 2 Lucu', 51),
(13, 'Sholat Berjamaah', '2016-04-27', 'galeri-sholat-berjamaah-26-20160427-1461787888.jpg', 'Sholat Berjamaah', 51),
(14, 'Lomba Tartil', '2016-04-27', 'galeri-lomba-tartil-26-20160427-1461787925.jpg', 'Lomba Tartil', 51),
(15, 'Pengarahan dari Polwan', '2016-04-27', 'galeri-pengarahan-dari-polwan-26-20160427-1461787964.jpg', 'Pengarahan dari Polwan', 51);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(8) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kode_guru` varchar(6) NOT NULL,
  `status_guru` varchar(20) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nip` int(50) NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `gender`, `tgl_lahir`, `jabatan`, `alamat`, `kode_guru`, `status_guru`, `nm_ibu`, `id_user`, `nip`, `photo`) VALUES
(11, 'MIFTAHUL HADI, S.Pd.I.', 'laki laki', '29 August 1968', 'Kepala Sekolah', 'Banyuwangi', '', '', '', 0, 2147483647, 'minu-staff-miftahul-hadi-spdi-1-20160427-1461782618.jpg'),
(12, 'AHMAD JULIANI, S.Pd.I.', 'laki laki', '05 July 1981', 'Wks. Umum', 'Banyuwangi', '', '', '', 0, 125631123, 'minu-staff-ahmad-juliani-spdi-12-20160427-1461782711.jpg'),
(13, 'MIFTAKHUL ARIFIN, S.Pd.I.', 'laki laki', '22 October 1969', 'Wks. Kurikulum', 'Banyuwangi', '', '', '', 0, 29985439, 'minu-staff-miftakhul-arifin-spdi-13-20160427-1461782800.jpg'),
(14, 'HAMID MASHAR', 'laki laki', '10 May 1957', 'Wks. Sarpras', 'Kediri', '', '', '', 0, 0, 'minu-staff-hamid-mashar-14-20160427-1461782893.jpg'),
(15, 'NORACHIM TS.', 'laki laki', '30 July 1949', 'Wks. BK', 'Banyuwangi', '', '', '', 0, 0, 'minu-staff-norachim-15-20160427-1461782952.jpg'),
(16, 'MASRUROH, S.Pd.', 'Perempuan', '05 January 1972', 'Staff', '', '', '', '', 0, 0, 'minu-staff-masruroh-spd-16-20160427-1461783034.jpg'),
(17, 'SITI MUNADIROH, S.Pd.I.', 'Perempuan', '08 August 1980', 'Staff', '', '', '', '', 0, 0, 'minu-staff-siti-munadiroh-spdi-17-20160427-1461783107.jpg'),
(18, 'IMRON MUHAIROJI S.pd', 'Laki-Laki', '24 April 1979', 'Wks. Kesiswaan', '', '', '', '', 0, 0, 'minu-staff-imron-muhairoji-spd-18-20160427-1461783159.jpg'),
(19, 'YUNI ASTUTIK D.W., S.Pd.', 'Perempuan', '05 June 1987', 'Bendahara', '', '', '', '', 0, 0, 'minu-staff-yuni-astutik-dw-spd-19-20160427-1461783233.jpg'),
(20, 'MUHAMAD GUFRON, S.Pd.I.', 'laki laki', '26 December 1982', 'Tata Usaha', '', '', 'Guru Tetap Yayasan', '', 0, 0, 'minu-staff-muhamad-gufron-spdi-20-20160427-1461783314.jpg'),
(21, 'SAEROJI, S.E.', 'laki laki', '06 September 1972', 'Staff', '', '', '', '', 0, 0, 'default.jpg'),
(22, 'MOH. SYAIFUL RIZAL', 'laki laki', '28 November 1992', 'Staff', '', '', '', '', 0, 0, 'default.jpg'),
(24, '', '', '', '', '', '', '', '', 52, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `id_user` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `judul_kategori` varchar(60) NOT NULL,
  `ket_kategori` text NOT NULL,
  `kode_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`, `ket_kategori`, `kode_kategori`) VALUES
(10, 'Info', 'Info Kegiatan Akademik', 'IN'),
(11, 'News', 'Berita Terbaru Seputar Pendidikan', 'NE'),
(12, 'Kegiatan', 'Kegiatan Rutin Yang di Selenggarakan Oleh Sekolah', 'KG'),
(16, 'Publikasi', 'Publikasi Kegiatan Sekolah ', 'PUB'),
(17, 'Agenda', 'Agenda Bulanan', 'DB'),
(18, 'Prestasi', 'Prestasi Siswa - Siswi MI NU 2 Kradenan', 'AW'),
(19, 'Jariyah', 'Informasi dana jariah (donatur)', 'JR');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(6) NOT NULL,
  `nm_kelas` varchar(20) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(50) NOT NULL,
  `nama_k` varchar(50) NOT NULL,
  `no_telp_k` varchar(12) NOT NULL,
  `email_k` varchar(50) NOT NULL,
  `subyek_k` varchar(225) NOT NULL,
  `pertanyaan_k` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_k`, `no_telp_k`, `email_k`, `subyek_k`, `pertanyaan_k`) VALUES
(1, 'Sofyan Eka', '0823356457', 'Sofyan@yahoo.com', 'anggaran', 'untuk anggaran kedpannya mohon di cantumkan tiap rapat'),
(2, 'Rahman Abdul Saleh', '08766543876', 'Shaleh@yahoo.com', 'Bimbingan Belajar', 'Bagai Mana Prinsip Dari MINU 2 Keradenan Dalam Membimbing Siswa/I Menjadi Lebih Giat Belajar ?');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `mapel_id` int(11) NOT NULL,
  `mapel_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`mapel_id`, `mapel_nama`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(10) NOT NULL,
  `judul_page` varchar(60) NOT NULL,
  `isi_page` text NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `judul_page`, `isi_page`, `id_kategori`) VALUES
(3, 'Visi Misi', 'Visi Misi Sekolah', 0),
(4, 'Sejarah', 'Sejarah Sekolah', 0),
(5, 'Profil', 'Profil Singkat Sekolah', 0),
(6, 'Kepengurusan', 'Susunan Kepengurusan MiNU 2 Kradenan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nm_prestasi` varchar(50) NOT NULL,
  `ket_prestasi` text NOT NULL,
  `img_prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `nm_program` varchar(225) NOT NULL,
  `ket_program` text NOT NULL,
  `img_program` varchar(225) NOT NULL,
  `kat_program` enum('Unggulan','Ekstrakulikuler') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `nm_program`, `ket_program`, `img_program`, `kat_program`) VALUES
(2, 'Pramuka', '<p>Pramuka Merupakan Ekstra Kulikuler Paling banyak diminati</p>', 'minu-program-pramuka-1-20160427-1461786605.jpg', 'Ekstrakulikuler'),
(3, 'Tahfidzul Quran', '<p>Tahfidzul Quran Merupakan Sarana Belajar Masa Kini</p>', 'minu-program-tahfidzul-quran-1-20160427-1461786539.jpg', 'Unggulan'),
(9, 'hadrah', '<p>hadrah</p>', 'default.jpg', 'Ekstrakulikuler'),
(11, 'Kelas Full Day', '<p>Kelas Full Day</p>', 'default.jpg', 'Unggulan'),
(12, 'Marching Band', '<p>Marching Band</p>', 'default.jpg', 'Ekstrakulikuler'),
(13, 'Pencak Silat', '<p>Pencak Silat</p>', 'default.jpg', 'Ekstrakulikuler'),
(14, 'Ubudiah', '<p>Ubudiah</p>', 'default.jpg', 'Ekstrakulikuler'),
(15, 'Sanggar Tari', '<p>Sanggar Tari</p>', 'default.jpg', 'Ekstrakulikuler'),
(16, 'Sepak Bola', '<p>Sepak Bola</p>', 'default.jpg', 'Ekstrakulikuler'),
(17, 'Volly Ball', '<p>Volly Ball</p>', 'default.jpg', 'Ekstrakulikuler'),
(18, 'Bulu Tangkis', '<p>Bulu Tangkis</p>', 'default.jpg', 'Ekstrakulikuler'),
(19, 'LBa (arab)', '<p>LBa (arab)</p>', 'default.jpg', 'Unggulan'),
(20, 'LBi (inggris)', '<p>LBi (inggris)</p>', 'default.jpg', 'Unggulan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(6) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `no_induk` int(8) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(8) NOT NULL,
  `pertanyaan` varchar(225) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` enum('admin','guru','superadmin') NOT NULL,
  `foto_profile` varchar(225) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `kondisi` enum('valid','invalid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `sid`, `pass`, `alamat`, `no_telp`, `email`, `gender`, `status`, `foto_profile`, `tgl_lahir`, `kondisi`) VALUES
(5, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Banyuwangi', '0897658876', 'admin@gmail.com', 'laki laki', 'admin', 'minu-admin-52-20160427-1461787484.png', '', 'valid'),
(47, 'kepsek', 'super', '1b3231655cebb7a1f783eddf27d254ca', 'banyuwangi', '082334627674', 'super@gmail.com', 'Laki Laki', 'superadmin', 'minu-kepsek-51-20160428-1461798168.jpg', '', 'valid'),
(50, 'Arifin', 'G0002', '77e69c137812518e359196bb2f5e9bb9', '', '', '', 'Laki Laki', 'guru', 'minu-gugun-51-20160425-1461610409.jpg', '', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(10) NOT NULL,
  `judul_video` varchar(60) NOT NULL,
  `filemedia` varchar(225) NOT NULL,
  `tgl_upload` varchar(225) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `filemedia`, `tgl_upload`, `sinopsis`, `id_kategori`, `id_user`) VALUES
(1, 'Ipa Kelas 3', '', '2016-01-22', '0', 0, 47),
(2, 'Pengelompokan Silabus', '', '2016-01-22', '0', 0, 47),
(3, 'Peran Pengajar', '', '2016-01-23', '', 0, 47),
(4, 'Motivasi Belajar', '', '2016-01-23', 'pembelajaran dasar pada anak', 23, 47),
(5, 'Peran Orang tua ', '', '2016-01-23', 'tes', 0, 47),
(6, 'Profil Sekolah', 'Peran Lembaga', '2016-01-23', 'fghjkl;', 2, 47),
(7, 'Upacara Bendera', '', '2016-04-19', 'dsdsd', 0, 47),
(8, 'Profil Pengajar', '', '2016-04-19', 'sdad', 0, 5),
(9, 'cek', 'video_2016-02-22_183448wmv064540.wmv', '2016-05-20', 'jgcjfjytyt', 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`mapel_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `mapel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD CONSTRAINT `guru_mapel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_mapel_ibfk_2` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`mapel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
