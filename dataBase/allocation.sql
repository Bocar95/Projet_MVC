-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 juin 2020 à 00:20
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
-- Structure de la table `batiment`
--

DROP TABLE IF EXISTS `batiment`;
CREATE TABLE IF NOT EXISTS `batiment` (
  `numero_batiment` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`numero_batiment`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`numero_batiment`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Structure de la table `bourse`
--

DROP TABLE IF EXISTS `bourse`;
CREATE TABLE IF NOT EXISTS `bourse` (
  `id_bourse` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_bourse`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bourse`
--

INSERT INTO `bourse` (`id_bourse`, `type`, `adresse`) VALUES
(1, 'demi bourse', NULL),
(2, 'demi bourse', NULL),
(3, 'pension complete', NULL),
(4, 'pension complete', NULL),
(5, NULL, 'Castor'),
(6, NULL, 'Castor');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id_chambre` int(11) NOT NULL AUTO_INCREMENT,
  `numero_chambre` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `numero_batiment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_chambre`),
  KEY `chambre_batiment_FK` (`numero_batiment`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `numero_chambre`, `type`, `numero_batiment`) VALUES
(1, '001 1111', 'à deux', 1),
(2, '002 1112', 'individuelle', 2);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_naiss` date NOT NULL,
  `id_bourse` int(11) DEFAULT NULL,
  `id_chambre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_etudiant`),
  KEY `etudiant_bourse_FK` (`id_bourse`),
  KEY `etudiant_chambre0_FK` (`id_chambre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `matricule`, `nom`, `prenom`, `email`, `telephone`, `date_naiss`, `id_bourse`, `id_chambre`) VALUES
(1, '2020 SO IM 1111', 'Sow', 'Karim', 'karim@gmail.com', 777777777, '1997-08-29', 3, 1),
(2, '2020 ND PE 1112', 'NDIAYE', 'Pape', 'Pape@gmail.com', 771111111, '1992-10-04', 2, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_batiment_FK` FOREIGN KEY (`numero_batiment`) REFERENCES `batiment` (`numero_batiment`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_bourse_FK` FOREIGN KEY (`id_bourse`) REFERENCES `bourse` (`id_bourse`),
  ADD CONSTRAINT `etudiant_chambre0_FK` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_chambre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
