-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 08:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payments` int(11) NOT NULL,
  `payments` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id_payments`, `payments`) VALUES
(1, 'Bayar Di Tempat'),
(2, 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `setting_name`
--

CREATE TABLE `setting_name` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `telp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_name`
--

INSERT INTO `setting_name` (`id`, `judul`, `email`, `telp`) VALUES
(1, 'HotelDK', 'wahyuadamanandika01@gmailcom', '087761811187');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_kamar`
--

CREATE TABLE `tb_fasilitas_kamar` (
  `id` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas_kamar`
--

INSERT INTO `tb_fasilitas_kamar` (`id`, `id_kamar`, `fasilitas`, `gambar`) VALUES
(27, 7, '1 Kasur Besar | 2 AC | Toilet Pribadi', 'image/ACPendingin20220317122836pm.jpg'),
(28, 8, '2 Kasur | 1 AC | 1 Lemari', 'image/ACPendingin20220318095227pm.jpg'),
(30, 29, '1 Kasur Besar | 2 AC | Toilet Pribadi | 1 Lemari Besar', 'image/ACKamar20220318095200pm.jpg'),
(55, 34, '1 Kasur | 1 Lemari  | 1 AC  ', 'image/ACKamar20220329035821pm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_umum`
--

CREATE TABLE `tb_fasilitas_umum` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas_umum`
--

INSERT INTO `tb_fasilitas_umum` (`id`, `nama_fasilitas`, `keterangan`, `gambar`) VALUES
(12, 'Sarapan Gratis', 'Dengan menu yang dibawa oleh chef handal kami', 'image/SarapanGratis20220319044625pm.jpg'),
(13, 'Restaurant Outdoor', 'Berbagai menu istimewa hadir untuk anda', 'image/RestaurantMewah20220319044717pm.jpg'),
(14, 'Restaurant Indoor', 'Nyaman dan hangat dengan menu yang menjakan lidahmu', 'image/RestaurantDalamRuang20220319045652pm.jpg'),
(15, 'Kolam Renang', 'Kolam air tawar yang mewah sampai kedalaman 5 meter', 'image/KolamRenang20220319044804pm.jpg'),
(17, 'Tempat Santai Pantai', 'Nyaman dan saksikan sunrise yang memukau', 'image/TempatSantaiPantai20220319044916pm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `total_kamar` int(5) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `nama_kamar`, `total_kamar`, `harga`) VALUES
(7, 'Family Room', 10, 300000),
(8, 'Twin Bed Room', 10, 200000),
(29, 'Deluxe Room', 5, 500000),
(34, 'Single Room', 15, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `nik` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `jml_kamar` int(2) NOT NULL,
  `payments` varchar(25) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id`, `nama_pemesan`, `nik`, `email`, `hp`, `nama_tamu`, `tgl_pesan`, `checkin`, `checkout`, `jml_kamar`, `payments`, `status`, `id_kamar`) VALUES
(1, 'Maklon Frare', '', 'maklon@gmail.com', '085234442455', 'Maklon Frare', '2022-02-05 07:09:59', '2022-02-05', '2022-02-05', 2, '', '', 1),
(3, 'Ferdy Durhan', '', 'kallonjuve@gmail.com', '23423', 'Ardy Wela', '2022-02-05 05:10:45', '2022-02-05', '2022-02-08', 2, '', '1', 1),
(4, 'Remigius Agut', '', 'kallonjuve@gmail.com', '23423', 'Noldy Saputra', '2022-02-05 05:14:59', '2022-02-07', '2022-02-10', 2, '', '1', 1),
(5, 'Rivan Manafe', '', 'admin@smkn1kuwus.sch.id', '085253227734', 'Juliana Mbau', '2022-02-05 05:58:59', '2022-02-05', '2022-02-08', 1, '', '1', 1),
(6, 'Lonida Ruth Manisa', '', 'maklonjacob.frare@gmail.com', '085253332244', 'Maklon Frare', '2022-02-06 12:28:41', '2022-02-09', '2022-02-24', 2, '', '1', 1),
(7, 'Egideus Helmon, S.P', '', 'egi@gmail.com', '085344225422', 'Hermanus Lando, S.Pd', '2022-02-06 12:31:27', '2022-02-07', '2022-02-10', 1, '', '', 2),
(8, 'Marsellina Patii', '', 'Marsel@gmail.com', '085664322455', 'John Umbu Pati', '2022-02-06 12:36:39', '2022-02-07', '2022-02-10', 2, '', '0', 2),
(9, 'Ipank', '', 'ipank@gmail.com', '678658755', 'Artho', '2022-02-07 07:04:41', '2022-02-12', '2022-02-15', 1, '', '0', 2),
(10, 'Maklon', '', 'maklonjacob.frare@gmail.com', '085253332245', 'Misel Jebabun', '2022-02-09 10:06:00', '2022-02-14', '2022-02-17', 1, '', '', 2),
(11, 'Zilan', '', 'nk8egc@erapor-smk.net', '085253332244', 'Richard', '2022-02-09 10:07:16', '2022-02-15', '2022-02-17', 1, '', '1', 1),
(12, 'Mizel', '', 'maklon@gmail.com', '085253332244', 'Maklom', '2022-02-09 12:57:04', '2022-02-10', '2022-02-12', 1, '', '', 2),
(13, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-15 06:36:33', '2022-03-16', '2022-03-17', 1, '', '0', 5),
(14, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'DIKA', '2022-03-16 06:41:10', '2022-03-17', '2022-03-17', 1, '', '0', 5),
(15, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'DIKA', '2022-03-16 09:57:44', '2022-03-17', '2022-03-17', 1, '', '0', 5),
(16, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'DIKA', '2022-03-16 09:57:53', '2022-03-17', '2022-03-17', 1, '', '0', 5),
(17, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'DIKA', '2022-03-16 10:00:27', '2022-03-17', '2022-03-18', 1, '', '0', 5),
(18, 'Muhammad Firdaus Arianto', '', 'mfirdausarianto@gmail.com', '08193707885', 'arianto', '2022-03-17 01:49:48', '2022-08-21', '2022-08-25', 1, '', '1', 6),
(19, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-19 11:52:18', '2022-03-20', '2022-03-21', 1, 'bayar ditempat', '1', 7),
(20, 'puki', '', 'chiko@gmail.com', '087761811187', 'chiki', '2022-03-19 11:49:35', '9999-09-09', '0999-09-09', 1, '', '0', 8),
(21, 'asass', '', 'asas', '087761811187', 'asdas', '2022-03-20 12:28:57', '2022-03-19', '2022-03-19', 1, '', '0', 7),
(22, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '0876273112', 'asddsa', '2022-03-21 04:49:16', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(23, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:36', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(24, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:36', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(25, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:37', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(26, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:37', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(27, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:37', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(28, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:38', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(29, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:38', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(30, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '08712112', 'assa', '2022-03-21 04:58:38', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(31, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '12123', 'sadad', '2022-03-21 05:00:52', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(32, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '12123', 'sadad', '2022-03-21 05:00:52', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(33, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '12123', 'sadad', '2022-03-21 05:00:52', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(34, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '12123', 'sadad', '2022-03-21 05:00:52', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(35, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '12123', 'sadad', '2022-03-21 05:00:52', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(36, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:30', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(37, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:32', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(38, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:32', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(39, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:32', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(40, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:32', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(41, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:32', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(42, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:33', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(43, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:33', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(44, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:34', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(45, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:34', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(46, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:34', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(47, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:36', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(48, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:37', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(49, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'ads', '2022-03-21 05:06:37', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(50, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'dsad', '2022-03-21 05:07:12', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(51, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'dsad', '2022-03-21 05:07:12', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(52, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'dsad', '2022-03-21 05:07:13', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(53, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'dsad', '2022-03-21 05:07:14', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(54, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'dsad', '2022-03-21 05:07:14', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(55, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:39', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(56, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:40', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(57, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:40', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(58, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:40', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(59, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:40', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(60, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:41', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(61, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:41', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(62, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:41', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(63, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asa', '2022-03-21 05:08:42', '0000-00-00', '0000-00-00', 1, '', '0', 7),
(64, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'kjhhkhjhj', '2022-03-21 05:54:19', '2022-03-22', '2022-03-23', 1, '', '0', 7),
(65, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'dasdas', '2022-03-21 05:56:12', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(66, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'sadas', '2022-03-21 06:06:30', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(67, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'sadas', '2022-03-21 06:06:31', '2022-03-21', '2022-03-21', 1, '', '', 7),
(68, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'sdad', '2022-03-21 06:11:15', '2022-03-21', '2022-03-21', 1, '', '0', 7),
(69, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asas', '2022-03-21 06:17:44', '2022-03-22', '2022-03-22', 1, '', '0', 7),
(70, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asda', '2022-03-21 06:27:46', '2022-03-21', '2022-03-21', 1, 'asdsad', '0', 7),
(71, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'asaa', '2022-03-21 06:29:06', '2022-03-21', '2022-03-21', 1, 'sadasd', '0', 7),
(72, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-21 06:31:44', '2022-03-21', '2022-03-21', 1, 'Bayar di Tempat', '0', 7),
(73, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-21 06:46:02', '2022-03-21', '2022-03-22', 1, 'Bayar di Tempat', '0', 7),
(74, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-21 06:49:46', '2022-03-22', '2022-03-22', 1, 'Bayar di Tempat', '0', 7),
(75, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-21 06:50:43', '2022-03-21', '2022-03-21', 1, 'Bayar di Tempat', '0', 7),
(76, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'adsad', '2022-03-21 07:16:01', '2022-03-21', '2022-03-22', 1, 'Bayar di Tempat', '0', 7),
(77, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '807080', 'hgjhghgh', '2022-03-21 07:47:49', '2022-03-22', '2022-03-23', 1, '', '2', 7),
(78, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-22 04:00:43', '2022-03-22', '2022-03-23', 1, 'Bayar di Tempat', '0', 7),
(79, 'Wahyu Adam Anandika', '', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-22 04:01:25', '2022-03-22', '2022-03-23', 1, 'Bayar di Tempat', '0', 29),
(80, 'halimatus sa diyah', '7890987654560005', 'halimatusakdiyah18@gmail.com', '085808371122', 'diyah', '2022-03-22 04:03:03', '2022-03-22', '2022-03-22', 1, 'Bayar di Tempat', '2', 29),
(81, 'Wahyu Adam Anandika', '3546170987650002', 'wahyuadamanandika01@gmail.com', '087761811187', 'DIKA', '2022-03-29 11:58:11', '2022-03-29', '2022-03-30', 1, 'Bayar di Tempat', '1', 7),
(82, 'Wahyu Adam Anandika', '3517890987650001', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-03-29 01:31:53', '2022-03-29', '2022-03-30', 1, 'Bayar di Tempat', '0', 7),
(83, 'Wahyu Adam Anandika', '3516122703030002', 'wahyuadamanandika01@gmail.com', '087761811187', 'Dika', '2022-04-01 09:21:28', '2022-04-01', '2022-04-02', 1, 'Bayar di Tempat', '0', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `usname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `tipe`, `usname`) VALUES
(8, 'admin', 'admin', 'admin', 'Wahyu Adam Anandika'),
(10, 'resepsionis', 'resep', 'resepsionis', 'Wahyu Adam Anandika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setting_name`
--
ALTER TABLE `setting_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_kamar`
--
ALTER TABLE `tb_fasilitas_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_umum`
--
ALTER TABLE `tb_fasilitas_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fasilitas_kamar`
--
ALTER TABLE `tb_fasilitas_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_fasilitas_umum`
--
ALTER TABLE `tb_fasilitas_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
