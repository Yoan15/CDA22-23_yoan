-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 fév. 2023 à 10:33
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `multicouchevote`
--

-- --------------------------------------------------------

--
-- Structure de la table `codes`
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE IF NOT EXISTS `codes` (
  `idCode` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) DEFAULT NULL,
  `utilise` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCode`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codes`
--

INSERT INTO `codes` (`idCode`, `code`, `utilise`) VALUES
(1, 'r4z6fds1f3', 1),
(4, '1fg1d3g1d3', 1),
(5, 'er4g4d2g1d', 1),
(6, '2dsgs6r4gd', 1),
(7, 'z5e4f5s1dg', 1),
(8, 'e5r4hgd2d2', 1),
(9, 'z45e421sg2', 1),
(10, 'ze84563s13', 0),
(11, 'dfrd4g6dg4', 0),
(12, '5dh5f31gh1', 0),
(13, 'r4th42f22f', 0),
(14, '5e4tgsdf12', 0),
(15, 'lr2u1ejuty', 0),
(16, 'u4l2j2l2yu', 0),
(17, 'stgs53yty3', 0);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE IF NOT EXISTS `resultats` (
  `idResultat` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(50) DEFAULT NULL,
  `nbVotes` int(11) NOT NULL,
  PRIMARY KEY (`idResultat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `idVote` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(50) NOT NULL,
  `idCode` int(11) NOT NULL,
  PRIMARY KEY (`idVote`),
  UNIQUE KEY `idCode` (`idCode`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `votes`
--

INSERT INTO `votes` (`idVote`, `reponse`, `idCode`) VALUES
(1, 'Chat', 1),
(2, 'Chat', 4),
(3, 'Chien', 5),
(4, 'Chat', 6),
(5, 'Chien', 7),
(6, 'Chat', 8),
(7, 'Chat', 9);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `FK_Votes_Codes` FOREIGN KEY (`idCode`) REFERENCES `codes` (`idCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
