-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 01:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `me` varchar(300) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`me`, `tgl_lahir`, `tmp_lahir`, `status`) VALUES
('Mahasiswa yang sedang mengadu nasib dan menuntut ilmu di UPN Veteran Jawa Timur, aku mempunyai hobby ber-olahraga dan main game, jika ada waktu luang sering kumanfaatkan untuk bermain game. Aku merupakan anak ke 2 dari 4 bersaudara, berikut data diriku :', '1999-12-29', 'Mojokerto', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `sd` varchar(30) NOT NULL,
  `smp` varchar(30) NOT NULL,
  `sma` varchar(30) NOT NULL,
  `universitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`sd`, `smp`, `sma`, `universitas`) VALUES
('MI Muhammadiyah 5 Mojoagung', 'SMPN 3 Mojoagung', 'SMAN 1 Sooko Mojokerto', 'UPN Veteran Jawa Timur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
