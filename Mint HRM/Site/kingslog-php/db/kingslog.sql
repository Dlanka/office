-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2015 at 08:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kingslog`
--
CREATE DATABASE IF NOT EXISTS `kingslog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kingslog`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `short_desc` longtext NOT NULL,
  `descrip` longtext NOT NULL,
  `news_date` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `link` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `short_desc`, `descrip`, `news_date`, `date`, `user_id`, `active`, `status`, `link`, `url`) VALUES
(1, 'THE CABINET APPROVAL HAS BEEN OBTAINED TO REVISE THE MERCHANT SHIPPING ACT NO. 52 OF 1971 TO FULFILL THE IMPLEMENTATION OF CONVENTIONS OF THE INTERNATIONAL MARITIME ORGANIZATION', 'The member countries of the United Nations have to fulfill the conventions of the International Maritime Organization which is the body entrusted by the United Nations to regulate all maritime activities of the member countries. ', 'The member countries of the United Nations have to fulfill the conventions of the International Maritime Organization which is the body entrusted by the United Nations to regulate all maritime activities of the member countries. The International Maritime Organization has declared conventions which are compulsory. Accordingly it is essential to revise the Act No. 52 of 1971 and rules and regulations related to fulfill the conventions of the International Maritime Organization. The Cabinet of Ministers approved a proposal made by the Hon. Minister of Ports and Aviation Arjuna Ranatunge to revise the Act No. 52 of 1971 and become eligible for the signing of the conventions of the International Maritime Organization. ', '2015/10/03', '2015-11-06', 1, 1, 0, 'News', 'www.news.lk'),
(2, 'DR. DAN LEAVES FOR VISITING LECTURING AT DALIAN MARITIME UNIVERSITY', 'The member countries of the United Nations have to fulfill the conventions of the International Maritime Organization which is the body entrusted by the United Nations to regulate all maritime activities of the member countries. The International Maritime Organization has declared conventions which are compulsory. Accordingly it is essential to revise the Act No. 52 of 1971 and rules and regulations related to fulfill the conventions of the International Maritime Organization. The Cabinet of Ministers approved a proposal made by the Hon. Minister of Ports and Aviation Arjuna Ranatunge to revise the Act No. 52 of 1971 and become eligible for the signing of the conventions of the International Maritime Organization.', 'The member countries of the United Nations have to fulfill the conventions of the International Maritime Organization which is the body entrusted by the United Nations to regulate all maritime activities of the member countries. The International Maritime Organization has declared conventions which are compulsory. Accordingly it is essential to revise the Act No. 52 of 1971 and rules and regulations related to fulfill the conventions of the International Maritime Organization. The Cabinet of Ministers approved a proposal made by the Hon. Minister of Ports and Aviation Arjuna Ranatunge to revise the Act No. 52 of 1971 and become eligible for the signing of the conventions of the International Maritime Organization.', '2015/11/05', '2015-11-06', 1, 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` int(2) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `active` int(2) NOT NULL,
  `user_id` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_name`, `password`, `user_type`, `date`, `status`, `active`, `user_id`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2015-11-09', 0, 1, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
