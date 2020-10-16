-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 21 mars 2020 à 21:23
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bbtq`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `IdAuteur` int(11) NOT NULL,
  `Noms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`IdAuteur`, `Noms`) VALUES
(1, 'AGAHTA CHRISTINE'),
(2, 'GUEDENOU ALEX'),
(3, 'MAMAn TIRET'),
(4, ' MARTINE FRANKLINE'),
(5, 'BLAISE AUDREY ');

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

CREATE TABLE `epreuve` (
  `IdEpreuve` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `fichier` varchar(30) NOT NULL,
  `date_PUB` date NOT NULL,
  `IdAuteur` int(11) NOT NULL,
  `IdMatiere` int(11) NOT NULL,
  `vu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `epreuve`
--

INSERT INTO `epreuve` (`IdEpreuve`, `Titre`, `fichier`, `date_PUB`, `IdAuteur`, `IdMatiere`, `vu`) VALUES
(1, 'aaa', 'aaa.pdf', '2020-03-21', 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `IdMatiere` int(11) NOT NULL,
  `LibelleMatiere` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`IdMatiere`, `LibelleMatiere`) VALUES
(1, ' NEGOCIATION INFORMATIQUES'),
(2, 'MATHEMATIQUES');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo_user` varchar(15) NOT NULL,
  `password_user` varchar(30) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `user_create` varchar(20) NOT NULL,
  `niveau` int(11) NOT NULL,
  `statut` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo_user`, `password_user`, `date_create`, `user_create`, `niveau`, `statut`) VALUES
(1, 'Gedeon', 'gedeon', '2020-01-26 21:20:05', 'Docteur', 1, 1),
(2, 'HONORE', 'DOCTEUR', '2020-02-02 00:00:00', 'Gedeon', 5, 0),
(3, 'HEMERA', 'HEMERA', '2020-02-02 00:00:00', 'Gedeon', 2, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`IdAuteur`);

--
-- Index pour la table `epreuve`
--
ALTER TABLE `epreuve`
  ADD PRIMARY KEY (`IdEpreuve`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`IdMatiere`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `IdAuteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `epreuve`
--
ALTER TABLE `epreuve`
  MODIFY `IdEpreuve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `IdMatiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
