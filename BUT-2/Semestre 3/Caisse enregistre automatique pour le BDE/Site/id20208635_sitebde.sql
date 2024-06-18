-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 09 fév. 2023 à 18:46
-- Version du serveur :  10.5.16-MariaDB
-- Version de PHP : 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id20208635_sitebde`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `id` int(11) NOT NULL,
  `num_etud` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomProduitFR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomProduitEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`id`, `num_etud`, `nomProduitFR`, `nomProduitEN`, `date`, `quantite`) VALUES
(1, '111111', 'lays nature', 'lays nature', '2023-02-09', 1),
(2, '232323', 'lays nature', 'lays nature', '2023-02-09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `num_etud` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motdepasse` text COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `fidelite` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `num_etud`, `mail`, `motdepasse`, `role`, `fidelite`) VALUES
(1, '232323', 'marie92230@hotmail.com', 'f0fd596f396d8fc32d5e4fe4c73c61fa2ac55c70', 'client', 0),
(2, '12100152EDA', 'zsdrfyg@ftyg.von', 'f0fd596f396d8fc32d5e4fe4c73c61fa2ac55c70', 'admin', 0),
(3, '197643DRE', 'mayvc@jrgy.fr', 'f0fd596f396d8fc32d5e4fe4c73c61fa2ac55c70', 'client', 0),
(4, '99999', 'abs@lait.com', 'f0fd596f396d8fc32d5e4fe4c73c61fa2ac55c70', 'admin', 0),
(5, '123456', 'nana@hotmail.com', 'f0fd596f396d8fc32d5e4fe4c73c61fa2ac55c70', 'client', 0),
(6, '12105377', 'p@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', 0),
(7, '1010101010', 'a@gmail.com', '00d70c561892a94980befd12a400e26aeb4b8599', 'client', 0),
(8, '232323', 'domibd@gmail.com', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'client', 0);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `nomProduitFR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomProduitEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `nomProduitFR`, `nomProduitEN`, `prix`, `quantite`, `categorie`, `img`) VALUES
(3, 'oasis tropical', 'oasis tropical', 0.8, 5, 'boisson', 'oasistropic.png'),
(4, 'oasis pomme', 'oasis pomme', 0.8, 1, 'boisson', 'oasispomme.png'),
(5, 'lipton ice tea', 'lipton ice tea', 0.8, 0, 'boisson', 'icetea.png'),
(6, 'malabar', 'malabar', 0.1, 0, 'snacks', 'malabar.png'),
(7, 'lays nature', 'lays nature', 0.6, 0, 'snacks', 'laysnature.png'),
(8, 'lays barbecue', 'lays barbecue', 0.7, 0, 'snacks', 'laysbarbecue.png'),
(9, 'mars', 'mars', 0.7, 0, 'snacks', 'mars.png'),
(10, 'kit kat', 'kit kat', 0.7, 0, 'snacks', 'kitkat.png');

-- --------------------------------------------------------

--
-- Structure de la table `tresorerie`
--

CREATE TABLE `tresorerie` (
  `id` int(11) NOT NULL,
  `entrees` int(11) NOT NULL,
  `sortie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tresorerie`
--

INSERT INTO `tresorerie` (`id`, `entrees`, `sortie`) VALUES
(1, 0, 23),
(2, 0, 50),
(3, 0, 415),
(4, 0, 500),
(5, 0, 500);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tresorerie`
--
ALTER TABLE `tresorerie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `tresorerie`
--
ALTER TABLE `tresorerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
