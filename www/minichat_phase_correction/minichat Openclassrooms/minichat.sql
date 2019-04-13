-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Février 2019 à 10:13
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `date_ajout` datetime NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`date_ajout`, `ID`, `Pseudo`, `Message`) VALUES
('2019-01-30 13:29:06', 1, 'Tom', '	\r\n\r\nIl fait beau aujourd''hui, vous ne trouvez pas ?'),
('2019-01-31 08:15:32', 2, 'John', 'Ouais, ça faisait un moment qu''on n''avait pas vu la lumière du soleil !'),
('2019-01-31 18:22:24', 3, 'Patrice', 'Ça vous tente d''aller à la plage aujourd''hui ? Y''a de super vagues '),
('2019-02-01 10:09:09', 8, 'Aurelien', 'Salut !'),
('2019-02-02 08:19:15', 9, 'Lulu', 'Vous allez bien ?'),
('2019-02-03 06:05:17', 10, 'John', 'On s''y retrouve ?'),
('0000-00-00 00:00:00', 11, 'Tom', 'Oui ! A qu''elle heure ?'),
('2019-02-04 09:53:24', 31, 'Tom', 'Salut tout le monde !'),
('2019-02-04 09:55:16', 32, 'Lucien', 'Salut Tom !'),
('2019-02-04 09:56:57', 33, 'John', 'Comment vous allez ?'),
('2019-02-04 09:57:33', 34, 'Tom', 'bien et toi?'),
('2019-02-04 10:07:40', 37, 'Basile', 'Salut les gars je m''incruste');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
