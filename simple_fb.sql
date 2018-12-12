-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2018 at 03:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_fb`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `name_group` varchar(200) NOT NULL,
  `descrption_group` text NOT NULL,
  `admin_group` varchar(200) NOT NULL,
  `access_group` enum('private','public') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `status_` text NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `likeS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `user`, `status_`, `tanggal`, `likeS`) VALUES
(37, 'aku', 'Ini Satusnya Mas Tobi Aditia Alfani', '4:02 PM | Saturday, 10 November 2018', 0),
(38, 'nur', 'Nama saya adalah Nur Taufiq\r\nSaya biasa di panggil Nur', '4:05 PM | Saturday, 10 November 2018', 0),
(39, 'aku', 'Hari minggu bro\r\n', '6:18 PM | Saturday, 17 November 2018', 0),
(42, 'aku', 'huhuhuhu', '11:04 PM | Monday, 3 December 2018', 0),
(55, 'paijo', 's', '7:53 PM | Tuesday, 4 December 2018', 0),
(60, 'robot', 'Saya Robot', '8:16 PM | Tuesday, 4 December 2018', 0),
(61, 'taufiq', 'Nama ku berarti = Cahaya Pertolongan', '5:36 PM | Thursday, 6 December 2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `address`) VALUES
(6, 'aku', '$2y$10$vRWfZjD8TccpFOA1Q35X2ubsUNzPsO.WhzkMW6GAHijzt.NYJHcFy', 'Tobi', 'Aditia Alfani', 'aku'),
(7, 'paijo', '$2y$10$hnfejoEaDlaYDCFS72PB3.GLGK1O/nxj6uiM27jDim/LHPvqzpXsu', 'Paijo', 'Sulastrimo', 'Nggak Punya Rumah'),
(8, 'nur', '$2y$10$jt5H5DYAwFkLXuXDs6b/pe3D8110UX.angTgmFyHXeF/De4xaiZm.', 'Nur', 'Taufiq', 'Solo - Jawa Tengah'),
(9, 'robot', '$2y$10$GiL1FC7XS5EslOKN19HCxOiTL7dV/3nB43lkTmCJ1dtJbWiMEVrDm', 'Robot', 'Robot', 'Jawa Timur'),
(10, 'taufiq', '$2y$10$XVVaupVhbHioMXZdKQTx9OzMJgz6ei9xn14VVPSyIPzd3LbjpH.3a', 'Taufiq', 'Rohman', 'Angkring');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
