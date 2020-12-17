-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 déc. 2020 à 15:01
-- Version du serveur :  10.3.23-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `utilisateurs_id` int(50) NOT NULL,
  `message` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`utilisateurs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `mdp`) VALUES
(43, 'dodo', 'doroanstorella@hotmail.com', '$2y$10$OfKuMjlUtD/aYiMMW5daF.hNMLg27ZBKiEFToEH5Y6t..zoz.kcoy'),
(44, 'dodo', 'doanstorella@hotmail.com', '$2y$10$pgnx8AI0e5IZmZBQGU7sD./qYLfBJ7C8/jQb5v.9F9Q.X/NJX/wb6'),
(47, 'dorian', 'MRstorella@hotmail.com', '$2y$10$QS.JrLxYh6qvfjurBwDCle8Lis7Ke6u9rzORRmtgLBmOoV1kwronm'),
(48, 'marcello', 'json@yahoo.com', '$2y$10$8iILuLVcXX6qYVRMZtgv0uVwyR.yv5MvF2gk1B9HcHhM8XsdKKJ3e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
