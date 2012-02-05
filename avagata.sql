-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2012 at 03:12 PM
-- Server version: 5.5.10
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `avagata`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(3) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(50) NOT NULL,
  `tgl_event` date NOT NULL,
  `jam_mulai_event` time NOT NULL,
  `jam_akhir_event` time NOT NULL,
  `tmp_event` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tgl_event`, `jam_mulai_event`, `jam_akhir_event`, `tmp_event`, `keterangan`) VALUES
(4, 'Makan Malam Bersama', '0000-00-00', '00:00:00', '00:00:00', 'Imah Seniman', 'Makan Malam Bersama para pembina dan seluruh pengurus beserta anggota POSS-UPI');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Documentation'),
(2, 'Tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `media` varchar(200) NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `media`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `id_kat`, `judul_post`, `konten_post`, `tanggal_post`, `status`) VALUES
(13, 0, 1, 'makan malam', '<p>ini makan malam.</p>', '2012-01-25', 1),
(12, 0, 1, 'Proses pembuatan update status', '<p>ini pembuatan update status</p>', '2012-01-25', 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `picture`) VALUES
(1, 'admin', '84fc02daf5252224f212e6383c243407', 1, ''),
(2, 'bram', '8b6bc5d8046c8466359d3ac43ce362ab', 2, ''),
(3, 'zia', '9efcafec516a86103d738a0384691130', 2, '');
