-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 24 oct. 2024 à 09:20
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_loyers`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `photo`, `password`) VALUES
(1, 'scofield', 'outis', 'scofield@gmail.com', '', '1234'),
(2, 'rrrr', 'rrrr', 'scofid@gmail.com', '', '11'),
(3, 'rrrr', 'rrrr', 'scofidfff@gmail.com', '', 'ssss'),
(4, 'rrrr', 'rrrr', 'scofiedfff@gmail.com', '', '2'),
(5, 'rrrr', 'rrrr', 'scofsiedfff@gmail.com', '', 'w'),
(6, 'sss', 'sss', 'ss@gmail.com', '', '2'),
(7, 'ssssss', 'sssssssss', 'sdm@gmail.com', '', 'd'),
(8, 'ssssss', 'sssssssss', 'sdme@gmail.com', '', 'ee'),
(9, 'ww', 'ww', 'sdm2w@gmail.com', '', 'ww'),
(10, 'ssssss', 'rrrr', 'sdddm@gmail.com', '', 'dd'),
(11, 'ssssss', 'dd', 'dd@gmail.com', '', '2'),
(12, 'ssssss', 'dd', 'ddfff@gmail.com', '', '2'),
(13, 'ssssss', 'sssssssss', 'sa@gmail.com', '', '22'),
(14, 'ssssss', 'sssssssss', 'll@gmail.com', '', '222'),
(15, 'rfrrr', 'rrr', 'rrrr@gmail.com', '', '3'),
(16, 'rrrr', 'sssssssss', 'sadew@gmail.com', '', '3'),
(17, 'e', 'e', 'saedew@gmail.com', '', 'e'),
(18, 'd', 'DAIBOU', 'sadegw@gmail.com', '', 'd'),
(19, 'ssssss', 'sssssssss', 'daz@gmail.com', '', 'e'),
(20, 'ssssss', 'sssssssss', 'bf@gmail.com', '', 'we'),
(21, 'e', 'e', 'bef@gmail.com', '', 'e');

-- --------------------------------------------------------

--
-- Structure de la table `locateurs`
--

CREATE TABLE `locateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mois` varchar(255) NOT NULL,
  `avance` int(255) NOT NULL,
  `reste` int(255) NOT NULL,
  `Nchambre` int(255) NOT NULL,
  `etatFacture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `locateurs`
--

INSERT INTO `locateurs` (`id`, `nom`, `prenom`, `telephone`, `mois`, `avance`, `reste`, `Nchambre`, `etatFacture`) VALUES
(10, 'scofield', 'our', '657667269', '2024-10-30', 55000, 0, 10, ''),
(14, 'ali', 'lunatic', '621404999', '2024-10-06', 550000, 0, 25, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `locateurs`
--
ALTER TABLE `locateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factures` (`etatFacture`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `locateurs`
--
ALTER TABLE `locateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
