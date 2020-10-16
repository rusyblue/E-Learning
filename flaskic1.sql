-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 08:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flaskic1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name_d` varchar(255) NOT NULL,
  `image_cat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_d`, `image_cat`) VALUES
(1, 'DEVELOPPEMENT WEB', 'web.jpg'),
(2, 'INITIATION AUX RESEAUX', 'web0.png'),
(3, 'MAINTENANCE LOGICIELLE', 'log.jpg'),
(4, 'INTERNET', 'net.jpg'),
(5, 'ASTUCES', 'ast.png'),
(6, 'SECURITE INFORMATIQUE', 'secinfo.jpg'),
(7, 'DEVELOPPEMENT APPLICATION', 'dev.jpg'),
(9, 'BASE DE DONNEES', '52.png');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL,
  `name_d` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `description_d` text NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name_d`, `avatar`, `price`, `description_d`, `categorie`) VALUES
(1, 'Php', 'php.png', 'Gratuit', 'Le cours de Php', 'DEVELOPPEMENT WEB'),
(2, 'Java ', 'java.png', '25000', 'Le cours sur Java ', 'DEVELOPPEMENT WEB'),
(3, 'HTML5 et CSS3', 'html.png', '5000', 'Le cours sur l''HTML5 et le CSS3', 'DEVELOPPEMENT WEB'),
(4, 'Javascript', 'javascript.jpg\r\n', '25000', 'Le cours sur le Javascript', 'DEVELOPPEMENT WEB'),
(5, 'Sql', 'mysql.png', '3000', 'Le cours sur le Sql', 'BASE DE DONNEES');

-- --------------------------------------------------------

--
-- Table structure for table `useric`
--

CREATE TABLE IF NOT EXISTS `useric` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useric`
--

INSERT INTO `useric` (`id`, `user`, `email`, `pwd`, `avatar`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useric`
--
ALTER TABLE `useric`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `useric`
--
ALTER TABLE `useric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
