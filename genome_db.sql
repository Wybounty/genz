-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 11 nov. 2024 à 05:12
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `genome_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `genomes`
--

CREATE TABLE `genomes` (
  `id` int NOT NULL,
  `sequence_id` varchar(255) NOT NULL,
  `description` text,
  `percentA` decimal(5,2) DEFAULT NULL,
  `percentT` decimal(5,2) DEFAULT NULL,
  `percentC` decimal(5,2) DEFAULT NULL,
  `percentG` decimal(5,2) DEFAULT NULL,
  `gcContent` decimal(5,2) DEFAULT NULL,
  `atGcRatio` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `genomes`
--

INSERT INTO `genomes` (`id`, `sequence_id`, `description`, `percentA`, `percentT`, `percentC`, `percentG`, `gcContent`, `atGcRatio`) VALUES
(1, 'MW315194.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-094, complete genome', 32.20, 21.52, 20.60, 25.68, 46.28, 1.16),
(2, 'MW315178.1', 'Dengue virus type 1 isolate New Caledonia-2016-116145055, complete genome', 32.18, 21.48, 20.64, 25.70, 46.34, 1.16),
(3, 'MW315195.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-100.1, complete genome', 32.20, 21.51, 20.60, 25.68, 46.28, 1.16),
(4, 'MW315191.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-084, complete genome', 32.18, 21.50, 20.62, 25.69, 46.32, 1.16),
(5, 'MW315189.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-079, complete genome', 32.18, 21.51, 20.61, 25.70, 46.31, 1.16),
(6, 'MW315188.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-075, complete genome', 32.21, 21.48, 20.62, 25.68, 46.31, 1.16),
(7, 'MW315185.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-069.1, complete genome', 32.21, 21.47, 20.62, 25.69, 46.32, 1.16),
(8, 'MW315183.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-060, complete genome', 32.20, 21.51, 20.60, 25.69, 46.29, 1.16),
(9, 'MW315182.1', 'Dengue virus type 1 isolate New Caledonia-2017-AVS-NC-056, complete genome', 32.22, 21.53, 20.58, 25.67, 46.25, 1.16),
(10, 'MW315181.1', 'Dengue virus type 1 isolate New Caledonia-2016-AVS-NC-047.1, complete genome', 32.18, 21.54, 20.59, 25.70, 46.28, 1.16);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `genomes`
--
ALTER TABLE `genomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genomes`
--
ALTER TABLE `genomes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
