-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Février 2019 à 16:11
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_created`) VALUES
(1, 'Jean', 'Voici mon premier message', '2019-02-04 07:19:20'),
(2, 'Jean', 'Voici mon deuxième message', '2019-02-03 06:12:28'),
(9, 'Jean', 'Message pour Guy ', '2019-02-04 00:00:00'),
(8, 'Guy', 'Message de Guy', '2019-02-01 00:15:00'),
(10, 'Jean Charle', 'Salut, je viens du futur', '2019-02-11 15:17:12'),
(11, 'Jean Charle', 'Je ne sais pas quoi dire\r\n', '2019-02-01 19:21:04'),
(20, 'Jean Charle', 'Il fait beau ', '2019-02-04 02:16:44'),
(27, 'Jean Charle', 'Message encore', '2019-02-02 10:10:00'),
(26, 'Jean Charle', 'Voila', '2019-02-04 07:49:16'),
(28, 'Guy', 'Message aujourd\'hui', '2019-02-04 16:53:19'),
(29, 'Jean', 'Message ', '2019-02-04 16:57:44'),
(30, 'Jean Guy', 'Test de stockage de Jean Guy dans la variable session ', '2019-02-04 17:02:37'),
(31, 'Jean Charle', 'Test de stockage de Jean Charle dans la variable session', '2019-02-04 17:04:06'),
(32, 'Jean Charle', 'Voici mon pseudo', '2019-02-04 17:04:59'),
(38, 'Jean Charles', 'Test stockage variable Jean Charles dans Session', '2019-02-04 17:10:24');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
