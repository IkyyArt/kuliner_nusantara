-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql101.infinityfree.com
-- Generation Time: Jan 14, 2026 at 04:47 AM
-- Server version: 11.4.9-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_40853086_kulinernusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Rendang Padang', 'Rendang merupakan masakan daging khas Minangkabau yang dimasak dengan santan dan rempah-rempah kaya rasa. Masakan ini memiliki filosofi mendalam tentang kesabaran, kebijaksanaan, dan ketekunan dalam proses memasaknya.', 'RENDANG.jpg', '2026-01-14 10:49:26', 'admin'),
(2, 'Soto Ayam Lamongan', 'Soto ayam khas Jawa Timur dengan koya gurih dan kaldu ayam bening yang segar. Rahasia membuat soto ayam lezat terletak pada kaldu yang bening namun kaya rasa, serta koya yang sempurna.', 'soto.jpg', '2026-01-14 11:02:39', 'admin'),
(3, 'Gado-Gado Betawi', 'Salad sayuran khas Indonesia disajikan dengan bumbu kacang kental yang nikmat. Gado-gado merupakan makanan sehat khas Betawi yang kaya akan manfaat kesehatan dari berbagai sayuran.', 'gado-gado.jpeg', '2025-12-30 09:40:43', 'admin'),
(4, 'Sate Ayam', 'Sate ayam dengan bumbu kacang yang gurih dan lezat. Indonesia memiliki kekayaan variasi sate dari sate madura hingga sate lilit Bali, masing-masing dengan cita rasa khas daerahnya.', 'Sate.jpeg', '2025-12-30 09:40:43', 'admin'),
(5, 'Nasi Goreng', 'Nasi goreng khas Indonesia dengan berbagai bumbu dan topping. Warisan kuliner Indonesia yang begitu spesial dengan sejarah dan teknik memasak yang autentik, membuatnya dikenal hingga mancanegara.', 'NasiGoreng.jpg', '2025-12-30 09:40:43', 'admin'),
(6, 'Rawon', 'Sup daging khas Jawa Timur dengan kuah hitam dari buah keluak. Misteri warna hitam khas rawon berasal dari buah keluak yang selain memberikan warna juga memiliki manfaat kesehatan tersendiri.', 'Rawon.jpg', '2025-12-30 09:40:43', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp(),
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `deskripsi`, `gambar`, `tanggal`, `username`) VALUES
(7, 'Rendang', 'RENDANG.jpg', '2026-01-14 11:05:11', 'admin'),
(8, 'Soto ayam khas Jawa', 'soto.jpg', '2026-01-14 12:03:24', 'admin'),
(9, 'Gado - gado', 'gado-gado.jpeg', '2026-01-14 11:05:20', 'admin'),
(10, 'Sate Ayam', 'Sate.jpeg', '2026-01-14 11:05:55', 'admin'),
(11, 'Nasi Goreng', 'NasiGoreng.jpg', '2026-01-14 12:10:27', 'admin'),
(12, 'Rawon', 'Rawon.jpg', '2026-01-14 11:05:43', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'profile/1768373992_441.jpeg'),
(2, 'april', '37d153a06c79e99e4de5889dbe2e7c57', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
