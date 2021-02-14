-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 14 fév. 2021 à 21:49
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
  `batiment` varchar(50) DEFAULT NULL,
  `code_postal` varchar(50) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `pays` varchar(250) NOT NULL,
  `id_user` int(10) NOT NULL,
  `domicile` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `nom_adresse`, `prenom_adresse`, `num_rue`, `nom_rue`, `batiment`, `code_postal`, `ville`, `pays`, `id_user`, `domicile`) VALUES
(1, 'tota', 'tota', '5', 'rue albeniz', '', '13009', 'Marseille', 'France', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit` int(10) NOT NULL,
  `id_taille` int(11) NOT NULL,
  `id_couleur` int(10) NOT NULL,
  `date_registre` date NOT NULL,
  `remise` int(10) DEFAULT NULL,
  `quantite` int(10) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_produit`, `id_taille`, `id_couleur`, `date_registre`, `remise`, `quantite`) VALUES
(1, 1, 1, 1, '2021-02-12', 10, 5),
(2, 1, 2, 1, '2021-02-12', NULL, 5),
(3, 1, 3, 1, '2021-02-12', NULL, 5),
(4, 1, 4, 1, '2021-02-12', NULL, 5),
(5, 2, 1, 1, '2021-02-12', NULL, 5),
(6, 2, 2, 1, '2021-02-12', NULL, 5),
(7, 2, 3, 1, '2021-02-12', NULL, 5),
(8, 2, 4, 1, '2021-02-12', NULL, 5),
(9, 3, 1, 2, '2021-02-12', NULL, 20),
(10, 3, 2, 2, '2021-02-12', NULL, 20),
(11, 3, 3, 2, '2021-02-12', NULL, 20),
(12, 3, 4, 2, '2021-02-12', NULL, 20),
(13, 4, 1, 2, '2021-02-12', NULL, 20),
(14, 4, 2, 2, '2021-02-12', NULL, 20),
(15, 4, 3, 2, '2021-02-12', NULL, 20),
(16, 4, 4, 2, '2021-02-12', NULL, 20),
(17, 5, 1, 3, '2021-02-12', NULL, 20),
(18, 5, 2, 3, '2021-02-12', NULL, 20),
(19, 5, 3, 3, '2021-02-12', NULL, 20),
(20, 5, 4, 3, '2021-02-12', NULL, 20),
(21, 6, 1, 3, '2021-02-12', NULL, 20),
(22, 6, 2, 3, '2021-02-12', NULL, 20),
(23, 6, 3, 3, '2021-02-12', NULL, 20),
(24, 6, 4, 3, '2021-02-12', NULL, 20),
(53, 7, 1, 4, '2021-02-14', NULL, 10),
(54, 7, 2, 4, '2021-02-14', NULL, 10),
(55, 7, 1, 7, '2021-02-14', NULL, 10),
(56, 7, 2, 7, '2021-02-14', NULL, 10),
(57, 7, 1, 8, '2021-02-14', NULL, 10),
(58, 7, 2, 8, '2021-02-14', NULL, 10),
(59, 8, 1, 3, '2021-02-14', NULL, 10),
(60, 8, 2, 3, '2021-02-14', NULL, 10),
(61, 9, 1, 4, '2021-02-14', NULL, 10),
(62, 9, 2, 4, '2021-02-14', NULL, 10),
(63, 9, 1, 5, '2021-02-14', NULL, 10),
(64, 9, 2, 5, '2021-02-14', NULL, 10),
(65, 9, 1, 6, '2021-02-14', NULL, 10),
(66, 9, 2, 6, '2021-02-14', NULL, 10),
(67, 9, 1, 7, '2021-02-14', NULL, 10),
(68, 9, 2, 7, '2021-02-14', NULL, 10),
(69, 9, 1, 8, '2021-02-14', NULL, 10),
(70, 9, 2, 8, '2021-02-14', NULL, 10),
(71, 9, 1, 1, '2021-02-14', 0, 5);

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
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `origine_produit` varchar(50) NOT NULL,
  `categorie_produit` varchar(50) NOT NULL,
  `genre_produit` varchar(50) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `image_produit` varchar(50) NOT NULL,
  `prix_produit` double NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `origine_produit`, `categorie_produit`, `genre_produit`, `nom_produit`, `image_produit`, `prix_produit`) VALUES
(1, 'Montecristi', 'Montecristi', 'Masculin', 'Fin Naturel', 'mh-exf.jpg', 199),
(2, 'Montecristi', 'Montecristi', 'Masculin', 'Extra Fin Naturel', 'mh-sf.jpg', 399),
(3, 'Cuenca', 'Fedora', 'Masculin', 'Blanc Fin', 'ch-f.jpg', 49),
(4, 'Cuenca', 'Fedora', 'Masculin', 'Blanc Super Fin', 'ch-sup-fin-bl.jpg', 79),
(5, 'Cuenca', 'Fedora', 'Masculin', 'Beige Fin', 'ch-f-beige.jpg', 49),
(6, 'Cuenca', 'Fedora', 'Masculin', 'Beige Super Fin', 'ch-sf.jpg', 79),
(7, 'Cuenca', 'Mode', 'Feminin', 'Buly', 'buly.jpg', 79),
(8, 'Cuenca', 'Mode', 'Feminin', 'Crochet', 'cf-crochet.jpg', 49),
(9, 'Cuenca', 'Mode', 'Feminin', 'Dos Calidades', 'cf-deux.jpg', 59);

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
