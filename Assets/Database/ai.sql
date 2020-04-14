-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2018 at 11:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `kata2` varchar(50) NOT NULL,
  `suhu` int(11) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keputusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`kata2`, `suhu`, `waktu`, `keputusan`) VALUES
('gerah', 34, 'siang', 1),
('kedinginan', 25, 'malam', 0),
('katisen', 25, 'malam', 0),
('keringat', 34, 'pagi', 1),
('berkeringat', 34, 'pagi', 1),
('sumuk', 34, 'siang', 1),
('kepanasan', 33, 'siang', 1),
('menggigil', 24, 'malam', 0),
('sakit', 32, 'pagi', 0),
('cool', 25, 'malam', 0),
('kademen', 25, 'malam', 0),
('atis', 25, 'malam', 0),
('kudanan', 29, 'malam', 0),
('neraka', 35, 'siang', 1),
('terik', 35, 'siang', 1),
('berpanas-panas', 35, 'siang', 1),
('terbakar', 34, 'siang', 1),
('gerah sekali', 33, 'siang', 1),
('gerah banget', 33, 'siang', 1),
('sangat sumuk', 33, 'siang', 1),
('terik matahari', 34, 'siang', 1),
('habis olahraga', 31, 'pagi', 1),
('kehujanan', 26, 'malam', 0),
('terkena hujan', 26, 'malam', 0),
('flu', 30, 'pagi', 0),
('badanku hangat', 30, 'pagi', 0),
('suhunya tinggi', 34, 'siang', 1),
('suhunya rendah', 25, 'malam', 0),
('malam dingin', 25, 'malam', 0),
('tidak sehat', 30, 'pagi', 0),
('kurang dingin', 28, 'malam', 1),
('terik sekali', 30, 'siang', 1),
('dingin hujan', 26, 'malam', 0),
('sangat sejuk', 26, 'malam', 0),
('demam', 30, 'pagi', 0),
('badanku gerah', 35, 'siang', 1),
('aku kedinginan', 24, 'pagi', 0),
('atis ik', 24, 'malam', 0),
('aku keringatan', 35, 'siang', 1),
('awakku sumuk', 35, 'siang', 1),
('badan berkeringat', 35, 'siang', 1),
('panasnya', 35, 'siang', 1),
('dinginnya', 24, 'malam', 0),
('bisa flu', 24, 'pagi', 0),
('membeku', 23, 'malam', 0),
('panas pol', 35, 'siang', 1),
('ademe', 23, 'malam', 0),
('hot sekali', 35, 'siang', 1),
('merinding', 23, 'malam', 0),
('badanku merinding', 24, 'pagi', 0),
('menggigil sekali', 24, 'malam', 0),
('panas banget', 35, 'siang', 1),
('hot banget', 34, 'siang', 0),
('dingin banget', 23, 'malam', 0),
('kok panas', 34, 'siang', 1),
('wow dinginnya', 24, 'malam', 0),
('meriang', 24, 'malam', 0),
('butuh jaket', 26, 'pagi', 0),
('butuh selimut', 24, 'malam', 0),
('seperti dikutub', 23, 'malam', 0),
('siang panas', 35, 'siang', 1),
('panas sekali', 34, 'siang', 1),
('dingin sekali', 24, 'malam', 0),
('gerah banget', 35, 'siang', 1),
('badan panas', 34, 'siang', 1),
('aku katisen', 24, 'malam', 0),
('katisen awakku', 28, 'pagi', 0),
('panasnya top', 35, 'siang', 1),
('butuh kehangatan', 24, 'malam', 0),
('masuk angin', 24, 'malam', 0),
('adem gilaa', 20, 'pagi', 0),
('adem panas ', 20, 'pagi', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
