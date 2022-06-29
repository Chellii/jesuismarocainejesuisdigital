-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 mars 2019 à 19:56
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `1337`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'eloiriaglichaimae2@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `videos` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `description1` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `valide` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `user`, `videos`, `thumbnail`, `phone`, `email`, `description`, `description1`, `created_at`, `valide`) VALUES
(1, "1337's Girls Students", '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/KG1duoQ7XLY\">\r\n</iframe>', 'thumbnail/souad.png', '', '', '', '', '2019-02-20', 1),
(18, 'Souad Elmallem', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/zO7gm7ZEWac\">\r\n</iframe>', 'thumbnail/souad.png', '', '', 'Souad Elmallem, originaire de Casablanca, Associée exécutive chez 6temik et figure publique du milieu des affaires au Maroc et en Amérique du Nord.', '', '2019-02-20', 1),
(25, 'Maya Digital', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/o-O3EDp-ZHY\">\r\n</iframe>', 'thumbnail/md.png', '55564', 'test@gmail.com', "Maya Digital. Agence de communication digitale et d'influence. Une équipe passionnée, d'experts et de digital natives talentueux.", '', '2019-02-20', 1),
(26, 'Bouchra Ouizdi', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/05bIyca2Ly0\">\r\n</iframe>', 'thumbnail/bouchra.png', 'gfdgdfg', 'sfdfdsd', 'Bouchra OUIZDI, responsable du marché Marocain chez Tuto.com', '', '2019-02-20', 1),
(34, 'Fatima-Zahra', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/ldUYCx8OVXU\">\r\n</iframe>', 'thumbnail/Fz.png', '1234567890', 'vapo@provider.com', "Fatima Zahra, originaire de El Jadida et une des candidats du piscine de l'école 1337, de février 2019.", '', '2019-03-06', 1),
(39, 'Loubna Draissi', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/Qj-KIfcXMzo\">\r\n</iframe>', 'thumbnail/loubna.png', '666', 'vapo@provider.com', "Loubna Draissi, harge d'acceuil à Youcode",'','2019-03-08',1),
(40, 'Hanan Rafssi', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/it3KnVTv-Xc\">\r\n</iframe>','thumbnail/hanan.png','222','test@gmail.com', 'hanan_rafsi, originaire de Khouribga et une des candidats de la piscine de 1337, de février 2019.','','2019-03-08',1),
(45, 'Salma', '<iframe width=\"100%\" height=\"500\"\r\nsrc=\"https://www.youtube.com/embed/S9lrEiSEGCE\">\r\n</iframe>', 'thumbnail/salma.png','555','test@gmail.com',"Salma, élève à l'école Ibn Sina de khouribga",'','2019-03-08',1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
