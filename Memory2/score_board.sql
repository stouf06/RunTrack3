-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 20 oct. 2024 à 21:17
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `memory_game`
--

-- --------------------------------------------------------

--
-- Structure de la table `score_board`
--

DROP TABLE IF EXISTS `score_board`;
CREATE TABLE IF NOT EXISTS `score_board` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `score_board`
--

INSERT INTO `score_board` (`id`, `username`, `score`, `date`) VALUES
(1, 'meddahia', '16', '2024-10-17 11:09:42'),
(2, 'bebou boubou', '16', '2024-10-17 11:09:50'),
(10, 'dan', '0', '2024-10-17 11:47:05'),
(4, 'bebou boubou', '16', '2024-10-17 11:17:25'),
(5, 'bebou boubou', '16', '2024-10-17 11:18:32'),
(6, 'bebou boubou', '16', '2024-10-17 11:18:37'),
(7, 'bebou boubou', '16', '2024-10-17 11:26:16'),
(8, 'bebou boubou', '16', '2024-10-17 11:30:12'),
(9, 'dan', '0', '2024-10-17 11:32:13'),
(11, 'ss', '16', '2024-10-17 11:49:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;