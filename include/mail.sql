-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2021 at 04:34 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_access` tinyint(1) NOT NULL DEFAULT 1,
  `image` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `user_id`, `user_pass`, `user_access`, `image`, `logo`) VALUES
(1, 'Romadhonaji', 'admin@admin.com', 'admin123', 1, 'https://i.ibb.co/5kCP1hR/profile-pic-4.png', 'https://i.ibb.co/nRnBz04/favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `ctime` datetime NOT NULL DEFAULT current_timestamp(),
  `cdate` date NOT NULL DEFAULT current_timestamp(),
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `ctime`, `cdate`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(4, '2021-02-26 00:39:29', '2021-02-26', 'Romadhon Aji', 'roma.phising@gmail.com', 'Job Description', 'Hi my name asdsaldkasd\r\nwhat i cant have you with a manager?\r\n\r\nbest regardt,\r\nponogoel'),
(6, '2021-02-26 01:25:34', '2021-02-26', 'Romadhon</span> Aji', 'roma@roma.roma', 'ASD', 'SAD'),
(10, '2021-02-26 01:26:50', '2021-02-26', 'Ahmad</span>Aji', 'roma.phising@gmail.com', 'ASDAS', 'dasd'),
(13, '2021-03-02 14:42:21', '2021-03-02', 'Dicoding', 'diconding@dicoding.com', 'dasd', 'sadasd'),
(15, '2021-03-07 02:37:31', '2021-03-07', 'Romadhon</span> Aji', 'contact.romaa@gmail.com', 'Belajar', 'Oi Bang'),
(16, '2021-03-07 07:08:19', '2021-03-07', 'Romadhon Aji', 'contact.romaa@gmail.com', 'Job Regristration', 'Hy My name is pono i can feell your six'),
(20, '2021-03-15 14:59:16', '2021-03-15', 'Support NBCTV', 'contact.romaa@gmail.com', '\"><img src=x onerror=alert(1)>', 'asdas'),
(21, '2021-03-15 20:15:38', '2021-03-15', 'Admin MNCTV', 'roma.phising@gmail.com', 'Job Description', 'aaaa'),
(22, '2021-03-16 20:23:00', '2021-03-16', 'Dicoding', 'contact.romaa@gmail.com', 'ASDAS', 'asdas'),
(23, '2021-03-16 20:26:55', '2021-03-16', 'jokowi', 'roma.phising@gmail.com', 'sadsad', 'asdasdas'),
(24, '2021-03-16 20:31:03', '2021-03-16', 'Romadhonaji Founder', 'contact.romaa@gmail.com', 'Re: Job Regristration', 'asdasd'),
(25, '2021-03-16 20:32:00', '2021-03-16', 'Romadhonaji Founder', 'contact.romaa@gmail.com', 'Re: Job Regristration', 'asdasd'),
(26, '2021-03-21 10:52:30', '2021-03-21', 'Andika', 'adnika@mail.com', 'Question', 'hai apakah benar?'),
(27, '2021-03-21 11:41:31', '2021-03-21', 'Andre Pirlo', 'pirlo@mail.com', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_setup`
--

CREATE TABLE `smtp_setup` (
  `id` int(11) NOT NULL,
  `usermail` text NOT NULL,
  `auth` varchar(250) NOT NULL,
  `port` varchar(250) NOT NULL,
  `userpass` varchar(200) NOT NULL,
  `hostid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smtp_setup`
--

INSERT INTO `smtp_setup` (`id`, `usermail`, `auth`, `port`, `userpass`, `hostid`) VALUES
(1, 'yourmail@gmail.com', 'true', '587', 'passemail123', 'smtp.gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_setup`
--
ALTER TABLE `smtp_setup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `smtp_setup`
--
ALTER TABLE `smtp_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
