-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 fév. 2021 à 07:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `nom_adresse` varchar(50) NOT NULL,
  `prenom_adresse` varchar(50) NOT NULL,
  `num_rue` varchar(50) NOT NULL,
  `nom_rue` varchar(250) NOT NULL,
  `batiment` varchar(50) NOT NULL,
  `code_postal` varchar(50) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `pays` varchar(250) NOT NULL,
  `id_user` int(10) NOT NULL,
  `domicile` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `origine` varchar(45) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `qualite` varchar(45) NOT NULL,
  `id_taille` int(11) NOT NULL,
  `id_couleur` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date_registre` date NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(10) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `origine`, `genre`, `qualite`, `id_taille`, `id_couleur`, `image`, `date_registre`, `prix`, `quantite`) VALUES
(1, 'Montecristi', 'Masculin', 'Fin', 1, 1, 'mh-exf.jpg', '2021-02-12', 199, 5),
(2, 'Montecristi', 'Masculin', 'Fin', 2, 1, 'mh-exf.jpg', '2021-02-12', 199, 5),
(3, 'Montecristi', 'Masculin', 'Fin', 3, 1, 'mh-exf.jpg', '2021-02-12', 199, 5),
(4, 'Montecristi', 'Masculin', 'Fin', 4, 1, 'mh-exf.jpg', '2021-02-12', 199, 5),
(5, 'Montecristi', 'Masculin', 'Superfin', 1, 1, 'mh-exf.jpg', '2021-02-12', 399, 5),
(6, 'Montecristi', 'Masculin', 'Superfin', 2, 1, 'mh-exf.jpg', '2021-02-12', 399, 5),
(7, 'Montecristi', 'Masculin', 'Superfin', 3, 1, 'mh-exf.jpg', '2021-02-12', 399, 5),
(8, 'Montecristi', 'Masculin', 'Superfin', 4, 1, 'mh-exf.jpg', '2021-02-12', 399, 5),
(9, 'Cuenca', 'Masculin', 'Fin', 1, 2, 'ch-f.jpg', '2021-02-12', 49, 20),
(10, 'Cuenca', 'Masculin', 'Fin', 2, 2, 'ch-f.jpg', '2021-02-12', 49, 20),
(11, 'Cuenca', 'Masculin', 'Fin', 3, 2, 'ch-f.jpg', '2021-02-12', 49, 20),
(12, 'Cuenca', 'Masculin', 'Fin', 4, 2, 'ch-f.jpg', '2021-02-12', 49, 20),
(13, 'Cuenca', 'Masculin', 'Fin', 1, 3, 'ch-f-beige.jpg', '2021-02-12', 49, 20),
(14, 'Cuenca', 'Masculin', 'Fin', 2, 3, 'ch-f-beige.jpg', '2021-02-12', 49, 20),
(15, 'Cuenca', 'Masculin', 'Fin', 3, 3, 'ch-f-beige.jpg', '2021-02-12', 49, 20),
(16, 'Cuenca', 'Masculin', 'Fin', 4, 3, 'ch-f-beige.jpg', '2021-02-12', 49, 20),
(17, 'Cuenca', 'Masculin', 'Superfin', 1, 2, 'ch-supfin-bl.jpg', '2021-02-12', 79, 20),
(18, 'Cuenca', 'Masculin', 'Superfin', 2, 2, 'ch-supfin-bl.jpg', '2021-02-12', 79, 20),
(19, 'Cuenca', 'Masculin', 'Superfin', 3, 2, 'ch-supfin-bl.jpg', '2021-02-12', 79, 20),
(20, 'Cuenca', 'Masculin', 'Superfin', 4, 2, 'ch-supfin-bl.jpg', '2021-02-12', 79, 20),
(21, 'Cuenca', 'Masculin', 'Superfin', 1, 3, 'ch-sf.jpg', '2021-02-12', 79, 20),
(22, 'Cuenca', 'Masculin', 'Superfin', 2, 3, 'ch-sf.jpg', '2021-02-12', 79, 20),
(23, 'Cuenca', 'Masculin', 'Superfin', 3, 3, 'ch-sf.jpg', '2021-02-12', 79, 20),
(24, 'Cuenca', 'Masculin', 'Superfin', 4, 3, 'ch-sf.jpg', '2021-02-12', 79, 20),
(25, 'Cuenca', 'Feminin', 'Buly', 2, 8, 'buly.jpg', '2021-02-12', 59, 20),
(26, 'Cuenca', 'Feminin', 'Crochet', 2, 3, 'cf-crochet.jpg', '2021-02-12', 49, 20),
(27, 'Cuenca', 'Feminin', 'Dos Calidades', 2, 4, 'cf-deux.jpg', '2021-02-12', 59, 20),
(28, 'Cuenca', 'Feminin', 'Dos Calidades', 2, 5, 'cf-deux.jpg', '2021-02-12', 59, 20),
(29, 'Cuenca', 'Feminin', 'Dos Calidades', 2, 6, 'cf-deux.jpg', '2021-02-12', 59, 20),
(30, 'Cuenca', 'Feminin', 'Dos Calidades', 2, 7, 'cf-deux.jpg', '2021-02-12', 59, 20),
(31, 'Cuenca', 'Feminin', 'Dos Calidades', 2, 8, 'cf-deux.jpg', '2021-02-12', 59, 20);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` datetime NOT NULL,
  `statut_commande` tinyint(1) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `id_couleur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_couleur` varchar(100) NOT NULL,
  `image_couleur` varchar(100) NOT NULL,
  PRIMARY KEY (`id_couleur`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`id_couleur`, `nom_couleur`, `image_couleur`) VALUES
(1, 'Naturel', 'naturel.jpg'),
(2, 'Blanc', 'blanc.jpg'),
(3, 'Beige', 'beige.jpg'),
(4, 'Moutarde', 'moutarde.jpg'),
(5, 'Olive', 'olive.jpg'),
(6, 'Rouge', 'rouge.jpg'),
(7, 'Noir', 'noir.jpg'),
(8, 'Cafe', 'cafe.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `detail_commande`
--

DROP TABLE IF EXISTS `detail_commande`;
CREATE TABLE IF NOT EXISTS `detail_commande` (
  `id_detail_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `quantite_article` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(11) NOT NULL AUTO_INCREMENT,
  `nb_total_articles` int(11) NOT NULL,
  `prix_total_articles` float NOT NULL,
  `id_livraison` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `date_facture` datetime NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  PRIMARY KEY (`id_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `nom_livreur` varchar(250) NOT NULL,
  `prix_livreur` float NOT NULL,
  PRIMARY KEY (`id_livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

DROP TABLE IF EXISTS `taille`;
CREATE TABLE IF NOT EXISTS `taille` (
  `id_taille` int(11) NOT NULL AUTO_INCREMENT,
  `nom_taille` varchar(10) NOT NULL,
  `cm_taille` varchar(10) NOT NULL,
  PRIMARY KEY (`id_taille`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taille`
--

INSERT INTO `taille` (`id_taille`, `nom_taille`, `cm_taille`) VALUES
(1, 'S', '56-57 cm'),
(2, 'M', '58-59 cm'),
(3, 'L', '60-61 cm'),
(4, 'XL', '62 cm');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `civilite` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `date_registre` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `prenom`, `nom`, `civilite`, `telephone`, `email`, `password`, `is_admin`, `date_registre`) VALUES
(1, 'tota', 'tota', 'Monsieur', '0602020202', 'toto@gmail.com', '$2y$10$FkeZTklFHUBDhcRDGXEfOu0VvuncJEmyb6qw1Q617QRLmBqthLZui', 0, '2021-02-09 00:00:00'),
(2, 'admin', 'admin', 'Monsieur', '0505050505', 'admin@gmail.com', '$2y$10$lgB6KBXrpFhURnyqVec3qemvZF9u.xIp9bXlNSvwbjE1WK1BZO1o2', 1, '2021-02-11 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
