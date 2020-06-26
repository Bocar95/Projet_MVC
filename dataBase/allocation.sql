-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 juin 2020 à 03:15
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

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
  `numCham` int(10) NOT NULL,
  `numDep` int(10) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numCham`, `numDep`, `type`) VALUES
(1, 1, 'individuel'),
(2, 1, 'double'),
(3, 1, 'double'),
(4, 1, 'double'),
(5, 1, 'individuel'),
(1, 2, 'individuel'),
(2, 2, 'individuel'),
(3, 2, 'double'),
(4, 2, 'double'),
(5, 2, 'individuel');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(10) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL,
  `dateNais` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `profil` varchar(20) NOT NULL,
  `numCham` int(10) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `matricule`, `nom`, `prenom`, `email`, `telephone`, `dateNais`, `type`, `profil`, `numCham`) VALUES
(1, '2020SOIM1111', 'Sow', 'Karim', 'karimsow@gmail.com', 777777777, '1997-02-21', 'individuel', 'logé', 1),
(2, '2020NDPE1112', 'Ndiaye', 'Pape', 'Papendiaye@gmail.com', 771111111, '1992-10-04', 'double', 'nonLogé', 0),
(3, '2014BIAM0549', 'Biteye', 'Amath', 'abiteye66@gmail.com', 781131429, '1994-08-18', 'double', 'nonLogé', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
