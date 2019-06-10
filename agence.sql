-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 02:53 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agence`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `userid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`userid`, `password`) VALUES
('ayoub', 'motheryar'),
('nour', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `cin` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `tel` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cin`, `nom`, `prenom`, `adresse`, `tel`, `email`) VALUES
(666789, 'fff', 'kk', 'SCDCD', 66679, 'vvvvv@fff.FFF'),
(9999876, 'tkk', 'kkk', 'SCDCD', 66679, 'postmaster@code.tn'),
(15001004, 'taieb', 'eya', 'marsa', 25065238, 'ayaayoutotaieb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule_client` int(8) NOT NULL,
  `matricule_voiture` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matricule_client` (`matricule_client`),
  KEY `matricule_voiture` (`matricule_voiture`),
  KEY `matricule_client_2` (`matricule_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id`, `matricule_client`, `matricule_voiture`) VALUES
(5, 15001004, 1),
(6, 15001004, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule_client` int(8) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matricule_client` (`matricule_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule_client` int(8) NOT NULL,
  `matricule_voiture` int(11) NOT NULL,
  `date_deb` varchar(32) NOT NULL,
  `date_ret` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matricule_client` (`matricule_client`),
  KEY `matricule_voiture` (`matricule_voiture`),
  KEY `matricule_client_2` (`matricule_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(10) NOT NULL,
  `marque` varchar(10) NOT NULL,
  `modele` varchar(20) NOT NULL,
  `couleur` varchar(10) NOT NULL,
  `porte` int(11) NOT NULL,
  `moteur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `offre` tinyint(1) NOT NULL,
  `image` varchar(30) NOT NULL,
  `dispo` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matricule` (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`id`, `matricule`, `marque`, `modele`, `couleur`, `porte`, `moteur`, `prix`, `offre`, `image`, `dispo`) VALUES
(1, '45efez54', 'citroen', 'cactus', 'blanc', 5, 7, 0, 1, 'citroen.jpg', 0),
(2, '97jfz55', 'peug', '306', 'gris', 5, 7, 0, 1, 'peug.jpg', 0),
(3, 'ui99po', 'peugeot', 'sq', 'black', 3, 5, 29998, 0, 'peugsq.jpg', 0),
(5, 'kjhg456', 'ljgdlgj', 'kjhg', 'pink', 10, 10, 452668, 0, 'polo.jpg', 10),
(7, 'xxxxx', 'xxxxx', 'xxxxxyyyyyyyyyyy', 'xxxx', 777777, 77777, 88888, 1, 'image2.jpg', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_clients` FOREIGN KEY (`matricule_client`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_voiture` FOREIGN KEY (`matricule_voiture`) REFERENCES `voiture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`matricule_client`) REFERENCES `client` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
