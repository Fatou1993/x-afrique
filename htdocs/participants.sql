-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 25 Novembre 2015 à 18:14
-- Version du serveur :  10.0.17-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `XAfrique`
--

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `jesuis` int(10) NOT NULL DEFAULT '9',
  `post` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `participants`
--

INSERT INTO `participants` (`id`, `nom`, `prenom`, `password`, `email`, `jesuis`, `post`, `description`, `img`) VALUES
(1, 'adi', 'azrou', 'fbef20528a361fd93bbf6e7386eb92a27dcfed17', 'adilazrou@gmail.com', 9, '', '', ''),
(2, 'test111', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.test', 4, 'directeur generale de chihaja', '', ''),
(3, 'adil', 'azrou', 'fbef20528a361fd93bbf6e7386eb92a27dcfed17', 'adil@azrou.com', 0, 'president', 'qsmldkmqlsdkmqlsdk', ''),
(4, 'adilm', 'aaaaa', '70c881d4a26984ddce795f6f71817c9cf4480e79', 'aaaa@aaaa.com', 0, '', 'je suis eleve de ....', ''),
(5, 'Diop', 'Ndeye Fatou', 'd2207afbb03dbd21d2912308b57ef3ef586005f6', 'ndeyediop1993@hotmail.fr', 9, '', '', ''),
(6, 'adil', 'hfjfjhf', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'jhfkkfh@khghg.fr', 9, '', '', ''),
(10, 'Diop', 'Ndeye ', 'd2207afbb03dbd21d2912308b57ef3ef586005f6', 'teintnoir1994@gmail.com', 9, 'Directrice', 'directrice', 'photo/4f745a648f234216f21effb15a553676.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
