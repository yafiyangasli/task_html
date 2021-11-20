-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 11:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yaficv`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `gambar`, `isi`) VALUES
(35, 'Yafi Baru Saja Menyelesaikan Tugas Kelas Pemrograman Web', 'screencapture-localhost-kelas-web-task-2-index-php-2021-11-20-17_47_17.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus nibh ut leo sodales, vitae egestas risus mollis. Praesent sagittis euismod quam, sed tempor justo facilisis pulvinar. Quisque feugiat, mauris ac dapibus porta, libero felis convallis turpis, vitae viverra nisl odio et lectus. Ut at varius diam. Donec sapien erat, facilisis ac tincidunt non, laoreet id urna. Duis quis enim venenatis, consectetur dui id, euismod est. Proin rutrum justo non sodales placerat. Suspendisse eget sapien quam.\r\n\r\nVivamus pharetra, neque ac ullamcorper dignissim, tortor quam porta enim, in volutpat quam urna vel enim. Duis pulvinar malesuada luctus. Donec sollicitudin vehicula tellus vel feugiat. Ut congue pharetra massa, eget laoreet lorem fringilla congue. In vehicula leo ac ipsum elementum consequat. Vestibulum auctor gravida orci, a lacinia erat pretium ac. Nulla sollicitudin vel dui varius suscipit. Praesent quis aliquam turpis. Fusce ornare ex nibh, non dapibus diam pellentesque ac. Suspendisse non eros mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\n\r\nNullam rhoncus mi vitae erat pulvinar volutpat. Morbi enim dolor, vehicula vitae maximus ac, ultrices eget turpis. Praesent id viverra ante. Proin purus velit, aliquet et faucibus ac, aliquet non sapien. Nam id est quis sapien pharetra dictum. Donec in feugiat ligula. Suspendisse ac libero ac velit blandit lacinia.\r\n\r\nCras sit amet eros sit amet augue placerat semper vitae eget tortor. Quisque euismod sagittis gravida. Pellentesque pulvinar malesuada ligula. Phasellus sit amet dignissim nibh. Duis euismod sem nec nulla porta congue. Proin fringilla massa at libero tincidunt, non ultrices leo vulputate. Fusce porttitor pretium magna, quis tincidunt tellus ultrices eget. Morbi posuere tristique nisi. Etiam mattis pharetra auctor.\r\n\r\nVivamus at rhoncus orci, id viverra nunc. Aliquam scelerisque enim quam, non laoreet leo facilisis sit amet. Cras convallis tellus velit, euismod tristique purus maximus in. Integer mattis et massa euismod vulputate. Cras sit amet ipsum tellus. Morbi eget purus et metus placerat accumsan ut vitae nisi. Aliquam erat volutpat. Praesent ornare efficitur justo, vel dapibus tortor dictum ac. Fusce sit amet nunc a lacus dignissim pulvinar et eget ex. Nullam aliquet luctus lacus, sed accumsan elit hendrerit a. Suspendisse mollis sem sed tortor tempus, vel gravida lectus mattis. Suspendisse potenti.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
