-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 juin 2020 à 23:58
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allocation`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numCham` varchar(20) NOT NULL,
  `numDep` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `numCham`, `numDep`, `type`) VALUES
(12, '001-8145', 1, 'a_deux'),
(13, '006-8674', 6, 'a_deux'),
(14, '002-8647', 2, 'individuel'),
(15, '006-5273', 6, 'individuel'),
(16, '005-7113', 5, 'individuel'),
(21, '007-5646', 7, 'a_deux');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `type_bourse` varchar(20) DEFAULT NULL,
  `chambre` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule`, `prenom`, `nom`, `mail`, `telephone`, `date`, `type`, `type_bourse`, `chambre`, `adresse`) VALUES
(30, '2020-KH-BE-2255', 'Khadim', 'Sambe', 'Kha@gmail.com', 888888888, '0001-01-01', 'non_boursier', '', '', 'LibertÃ© 6'),
(29, '2020-KA-OW-9741', 'Karim', 'SOW', 'k-riim@gmail.com', 777777777, '0001-01-01', 'boursier_non_loger', '40.000', '', ''),
(28, '2020-IS-TE-9120', 'Issa', 'KANOUTE', 'ismart@gmail.com', 666666666, '0001-01-01', 'boursier_loger', '40000', '3', ''),
(27, '2020-PA-YE-9300', 'Pape', 'NDIAYE', 'Papis@gmail.com', 555555555, '0001-01-01', 'boursier_non_loger', '40.000', '', ''),
(26, '2020-AS-YE-0773', 'Astou', 'NDIAYE', 'AfroQueen@gmail.com', 444444444, '0001-01-01', 'boursier_loger', '20000', '1', ''),
(24, '2020-IS-RE-5729', 'Issa', 'SANGARE', 'izeuh@gmail.com', 222222222, '0001-01-01', 'boursier_non_loger', '40.000', '', ''),
(25, '2020-MO-IR-5354', 'Modou', 'NDIR', 'Mods@gmail.com', 333333333, '0001-01-01', 'non_boursier', '', '', 'HLM'),
(23, '2020-AB-NE-5265', 'Abdou', 'Rahmane', 'Rahmane@gmail.com', 111111111, '0001-01-01', 'boursier_non_loger', '40.000', '', ''),
(31, '2020-OU-GO-3193', 'Ousmane', 'DJIGO', 'Aboubacry@gmail.com', 121231212, '0001-01-01', 'boursier_loger', '40000', '5', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
