-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2014 at 01:11 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a7340214_pulsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_agen`
--

CREATE TABLE `data_agen` (
  `id_agen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_agen` varchar(100) NOT NULL,
  `alamat_agen` varchar(100) NOT NULL,
  `nomer_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id_agen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_agen`
--

INSERT INTO `data_agen` VALUES(1, 'Imam Prayogo', 'Kalibanteng Belok Kiri', '085640603114');

-- --------------------------------------------------------

--
-- Table structure for table `data_toko`
--

CREATE TABLE `data_toko` (
  `id_toko` int(11) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(100) NOT NULL,
  `alamat_toko` varchar(100) NOT NULL,
  `latitude_toko` varchar(50) NOT NULL,
  `longitude_toko` varchar(50) NOT NULL,
  PRIMARY KEY (`id_toko`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `data_toko`
--

INSERT INTO `data_toko` VALUES(8, 'Konter Weleri', 'Cedak omahe fadhel', '-6.9917042', '110.2646763');
INSERT INTO `data_toko` VALUES(7, 'Konter Bandungan', 'cedak omahe alan', '-7.1867645', '110.4189044');
INSERT INTO `data_toko` VALUES(4, 'Laut Bonang', 'Jalan Jatirogo no. 4', '-6.698962789748325', '111.44743153723152');
INSERT INTO `data_toko` VALUES(5, 'Konter Bagan', 'Jalan Sunan Bonang no 44', '-6.696511998413338', '111.44159505041512');

-- --------------------------------------------------------

--
-- Table structure for table `saint`
--

CREATE TABLE `saint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `saint`
--

INSERT INTO `saint` VALUES(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
