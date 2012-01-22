-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2012 at 10:43 PM
-- Server version: 5.1.56
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `avagata`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--
create database avagata;
use avagata;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE IF NOT EXISTS `komen` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `isi_komen` text NOT NULL,
  `tanggal_komen` date NOT NULL,
  PRIMARY KEY (`id_komen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `media` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_kat` int(11) DEFAULT NULL,
  `judul_post` varchar(200) NOT NULL,
  `konten_post` text NOT NULL,
  `tanggal_post` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_media`
--

CREATE TABLE IF NOT EXISTS `post_media` (
  `id_pm` int(11) NOT NULL AUTO_INCREMENT,
  `id_media` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_pm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(5) NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
