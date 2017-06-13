-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 12 Juin 2017 à 16:48
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `DEEVEADEE`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTEUR`
--

CREATE TABLE `ACTEUR` (
  `idA` int(11) NOT NULL,
  `nomA` varchar(30) NOT NULL,
  `prenomA` varchar(30) NOT NULL,
  `ageA` varchar(10) NOT NULL,
  `sexeA` set('Femme','Homme','Autre','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ACTEUR`
--

INSERT INTO `ACTEUR` (`idA`, `nomA`, `prenomA`, `ageA`, `sexeA`) VALUES
(7, 'Pryce', 'Jonathan ', '70', 'Homme'),
(8, 'De Niro', 'Robert', '74', 'Homme'),
(9, 'Ulrich', 'Thomsen', '53', 'Homme'),
(10, 'Mikkelsen', 'Mads', '51', 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `CASTING`
--

CREATE TABLE `CASTING` (
  `idCA` int(10) UNSIGNED NOT NULL,
  `acteurCA` int(11) NOT NULL,
  `roleCA` varchar(50) NOT NULL,
  `dvdCA` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CASTING`
--

INSERT INTO `CASTING` (`idCA`, `acteurCA`, `roleCA`, `dvdCA`) VALUES
(10, 7, 'Principal', 8),
(11, 8, 'Secondaire', 8),
(12, 9, 'Principal', 8),
(13, 10, 'Secondaire', 8);

-- --------------------------------------------------------

--
-- Structure de la table `CATEGORIE`
--

CREATE TABLE `CATEGORIE` (
  `idCAT` int(11) NOT NULL,
  `nomCAT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CATEGORIE`
--

INSERT INTO `CATEGORIE` (`idCAT`, `nomCAT`) VALUES
(10, 'Drame'),
(7, 'Fanstastique'),
(6, 'Fiction'),
(8, 'Historique'),
(5, 'Horreur'),
(9, 'Science-fiction');

-- --------------------------------------------------------

--
-- Structure de la table `DVD`
--

CREATE TABLE `DVD` (
  `idD` int(10) UNSIGNED NOT NULL,
  `titreD` varchar(30) NOT NULL,
  `auteurD` varchar(25) NOT NULL,
  `anneeD` varchar(8) NOT NULL,
  `categorieD` int(11) NOT NULL,
  `dateAchatD` date NOT NULL,
  `nombreD` tinyint(4) NOT NULL,
  `societeD` int(11) NOT NULL,
  `JaquetteD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DVD`
--

INSERT INTO `DVD` (`idD`, `titreD`, `auteurD`, `anneeD`, `categorieD`, `dateAchatD`, `nombreD`, `societeD`, `JaquetteD`) VALUES
(7, 'Adam\'s Apple', ' Anders Thomas Jensen ', '2006', 10, '2016-06-02', 3, 4, 'assets/IMG/JAQ/adams.jpg'),
(8, 'Brazil', 'Terry Gilliam', '1985', 9, '2017-05-01', 3, 4, 'assets/IMG/JAQ/brazil.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `EMPLOYE`
--

CREATE TABLE `EMPLOYE` (
  `idEMP` int(11) NOT NULL,
  `numSecuEMP` varchar(70) NOT NULL,
  `nomEMP` varchar(20) NOT NULL,
  `prenomEMP` varchar(20) NOT NULL,
  `adresseEMP` varchar(80) NOT NULL,
  `id_societeEMP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `EMPLOYE`
--

INSERT INTO `EMPLOYE` (`idEMP`, `numSecuEMP`, `nomEMP`, `prenomEMP`, `adresseEMP`, `id_societeEMP`) VALUES
(1, '152468721531', 'Cantat', 'Bertran ', '28 rue osef', 4),
(2, '156842573562', 'Curiot', 'Francis', '65 rue du Roi Soleil', 5),
(27, 'vfsfdfs', 'sdfsdfs', 'fdsfdfsd', 'fsdfsdfsdf', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `EMPRUNT`
--

CREATE TABLE `EMPRUNT` (
  `idE` int(11) NOT NULL,
  `dvdE` int(10) UNSIGNED NOT NULL,
  `dateE` date NOT NULL,
  `clientE` int(11) NOT NULL,
  `dureeE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SOCIETE`
--

CREATE TABLE `SOCIETE` (
  `idS` int(11) NOT NULL,
  `nomS` varchar(20) NOT NULL,
  `rueS` varchar(20) NOT NULL,
  `num_rueS` varchar(20) DEFAULT NULL,
  `villeS` varchar(50) NOT NULL,
  `directeur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `SOCIETE`
--

INSERT INTO `SOCIETE` (`idS`, `nomS`, `rueS`, `num_rueS`, `villeS`, `directeur`) VALUES
(4, 'Deeveadee', 'Louis Cruzot', '25', 'Béziers', 'Cruzot'),
(5, 'Locator', 'Alphonse Dumas', '17', 'Montpellier', 'Ravas'),
(6, 'Vahal-dvd', 'Albion', '66', 'Marseille', 'Thor'),
(7, 'DVD-store', 'Mistral', '58', 'Paris', 'Louis');

-- --------------------------------------------------------

--
-- Structure de la table `stud`
--

CREATE TABLE `stud` (
  `roll_no` int(11) NOT NULL,
  `prénom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `USER`
--

INSERT INTO `USER` (`id`, `fullname`, `username`, `password`) VALUES
(4, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ACTEUR`
--
ALTER TABLE `ACTEUR`
  ADD PRIMARY KEY (`idA`),
  ADD KEY `nomA` (`nomA`);

--
-- Index pour la table `CASTING`
--
ALTER TABLE `CASTING`
  ADD PRIMARY KEY (`idCA`),
  ADD KEY `dvdCA` (`dvdCA`),
  ADD KEY `acteurCA` (`acteurCA`);

--
-- Index pour la table `CATEGORIE`
--
ALTER TABLE `CATEGORIE`
  ADD PRIMARY KEY (`idCAT`),
  ADD KEY `nomCAT` (`nomCAT`);

--
-- Index pour la table `DVD`
--
ALTER TABLE `DVD`
  ADD PRIMARY KEY (`idD`),
  ADD KEY `categorieD` (`categorieD`),
  ADD KEY `societeD` (`societeD`);

--
-- Index pour la table `EMPLOYE`
--
ALTER TABLE `EMPLOYE`
  ADD PRIMARY KEY (`idEMP`),
  ADD KEY `id_societeEMP` (`id_societeEMP`);

--
-- Index pour la table `EMPRUNT`
--
ALTER TABLE `EMPRUNT`
  ADD PRIMARY KEY (`idE`),
  ADD KEY `dvdE` (`dvdE`);

--
-- Index pour la table `SOCIETE`
--
ALTER TABLE `SOCIETE`
  ADD PRIMARY KEY (`idS`),
  ADD KEY `villeS` (`villeS`);

--
-- Index pour la table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`roll_no`);

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ACTEUR`
--
ALTER TABLE `ACTEUR`
  MODIFY `idA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `CASTING`
--
ALTER TABLE `CASTING`
  MODIFY `idCA` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `CATEGORIE`
--
ALTER TABLE `CATEGORIE`
  MODIFY `idCAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `DVD`
--
ALTER TABLE `DVD`
  MODIFY `idD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `EMPLOYE`
--
ALTER TABLE `EMPLOYE`
  MODIFY `idEMP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `EMPRUNT`
--
ALTER TABLE `EMPRUNT`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `SOCIETE`
--
ALTER TABLE `SOCIETE`
  MODIFY `idS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CASTING`
--
ALTER TABLE `CASTING`
  ADD CONSTRAINT `FK_acteurCAST` FOREIGN KEY (`acteurCA`) REFERENCES `ACTEUR` (`idA`),
  ADD CONSTRAINT `FK_dvdCAST` FOREIGN KEY (`dvdCA`) REFERENCES `DVD` (`idD`);

--
-- Contraintes pour la table `DVD`
--
ALTER TABLE `DVD`
  ADD CONSTRAINT `FK_categorie` FOREIGN KEY (`categorieD`) REFERENCES `CATEGORIE` (`idCAT`),
  ADD CONSTRAINT `FK_societe` FOREIGN KEY (`societeD`) REFERENCES `SOCIETE` (`idS`);

--
-- Contraintes pour la table `EMPLOYE`
--
ALTER TABLE `EMPLOYE`
  ADD CONSTRAINT `FK_employe` FOREIGN KEY (`id_societeEMP`) REFERENCES `SOCIETE` (`idS`);

--
-- Contraintes pour la table `EMPRUNT`
--
ALTER TABLE `EMPRUNT`
  ADD CONSTRAINT `FK_emprunt` FOREIGN KEY (`dvdE`) REFERENCES `DVD` (`idD`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
