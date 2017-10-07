-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Octobre 2017 à 11:43
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `software`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `identify` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Admin`
--

INSERT INTO `Admin` (`id`, `identify`, `password`) VALUES
(1, 'lau', '94dd0a2905844473aae04a7319a0863bc76a8d96'),
(2, 'lau', '94dd0a2905844473aae04a7319a0863bc76a8d96');

-- --------------------------------------------------------

--
-- Structure de la table `Project`
--

CREATE TABLE `Project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Project`
--

INSERT INTO `Project` (`id`, `name`, `detail`, `deadline`) VALUES
(1, 'Hôtel', 'Rénovation du bâtiment', '2023-09-18'),
(2, 'Hôtel', 'Rénovation du bâtiment', '2023-09-18'),
(3, 'Hôtel', 'Rénovation du bâtiment', '2023-09-18'),
(4, 'Musée', 'Agrandissement de l\'ail ouest', '2020-09-12'),
(5, 'Musée', 'Agrandissement de l\'ail ouest', '2020-09-12'),
(6, 'Musée', 'Agrandissement de l\'ail ouest', '2020-09-12'),
(7, 'Musée', 'Agrandissement de l\'ail ouest', '2020-09-12'),
(8, 'Musée', 'Agrandissement de l\'ail ouest', '2020-09-12'),
(9, 'Musée', 'Agrandissement de l\'ail ouest', '2020-09-12'),
(10, 'Parking', 'construction d\'un parking de 150 place', '2020-08-04'),
(11, 'Parking test', 'agrandissement d\'un parking', '2019-07-16'),
(12, 'Bureau', 'Rénovation du 6ème étage', '2019-09-12');

-- --------------------------------------------------------

--
-- Structure de la table `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `DateEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `step`
--

INSERT INTO `step` (`id`, `id_project`, `title`, `DateEnd`) VALUES
(1, 10, 'vérifier l\'emplacement', '2017-11-14'),
(2, 11, 'Vérifier l\'espace disponible', '2018-12-18'),
(3, 11, 'Faire un devis des travaux', '2017-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `id_step` int(11) NOT NULL,
  `action` text NOT NULL,
  `limit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id`, `id_step`, `action`, `limit_date`) VALUES
(1, 2, 'Envoyer une équipe sur place', '2018-11-14'),
(2, 2, 'Envoyer une équipe sur place pour analyser l\'étendue des travaux', '2017-11-27'),
(3, 3, 'Mobiliser une équipe', '2019-08-15'),
(4, 3, 'meeting avec les client', '2021-11-17'),
(5, 3, 'meeting avec les client', '2021-11-17'),
(6, 3, 'meeting avec les client', '2021-11-17'),
(7, 3, 'commander materiel', '2017-11-27'),
(8, 3, 'thomas action', '2018-11-14');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Project`
--
ALTER TABLE `Project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `id_project_2` (`id_project`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_step` (`id_step`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Project`
--
ALTER TABLE `Project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `step`
--
ALTER TABLE `step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
