-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 13, 2024 at 06:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lampungexplore`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tujuan_wisata` varchar(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_wisata` date NOT NULL,
  `jumlah_orang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `alamat`, `no_telpon`, `email`, `tujuan_wisata`, `tanggal_pemesanan`, `tanggal_wisata`, `jumlah_orang`) VALUES
(1, 'Jepi', 'Way Halim', '912030', 'jepikeren@gmail.com', 'Bukit Aslan', '2024-06-12', '2024-06-13', 4),
(3, 'Pushyng', 'Natar', '01290303', 'coba@gmail.com', 'Pahawang', '2024-06-12', '2024-06-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `destinasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `destinasi`, `deskripsi`, `foto`) VALUES
(1, 'Pantai Labuhan Jukung', 'Berlokasi di Pekon Kampung Jawa, Kecamatan Pesisir Tengah. Kawasan wisata ini sangat diminati oleh wisatawan domestik dan asing karena memiliki panorama alam yang indah, ombak yang cukup mengasyikkan bagi para peselancar, nyaman bagi setiap aktivitas pantai, serta memiliki fasilitas penunjang yang layak.  Banyak hal yang dapat dilakukan di sini. Antara lain, bersepeda menyusuri pantai pasir putih, berjalan di pantai merasakan jilatan ombak di kaki, mengabadikan keindahan alam dengan kamera dan menikmati saat matahari tenggelam (sunset) ke Lautan Hindia. ', 'Pantai-Labuhan-Jukung.jpg'),
(2, 'Krakatau Park', 'Krakatau Park menjadi destinasi wisata berkonsep tempat bermain (theme park) dengan wahana yang melengkapinya antara lain ferrys wheels, taman bunga, gallery Krakatau, wahana air, 4D cinema, ghost house, bumper car, air bike, tornado, giant slide, airbon shoot, animal coaster, rodeo, dan dark side Krakatau.\r\n', 'krakatau park.jpg'),
(3, 'Pantai Marina', 'Pantai Marina adalah sebuah destinasi wisata yang terletak di kawasan yang strategis dan mudah dijangkau. Pantai ini menawarkan keindahan alam yang memukau, dengan pasir putih yang lembut, air laut yang jernih dan biru, serta pemandangan alam yang memesona.', 'Pantai_Marina_Kalianda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `komentar` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `nama`, `komentar`, `rating`) VALUES
(1, 'Fuji ', 'Pelayanan sangat ramah dan menyenangkan. Perjalanan wisata menjadi lebih seru', 5),
(2, 'Jepi', 'Pelayanan ramah tapi agak sedikit terlambat saat waktu keberangkatan. Overall oke', 4),
(3, 'Kerin', 'pelayanan kurang ramah', 3),
(6, 'Pushyng', 'Trip bersama LampungExplore dijamin worth it', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `username`, `password`) VALUES
(1, 'Rino', '08192030', 'rino', 'rino'),
(2, 'Doko', '01933030', 'doko', 'doko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
