-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 14 fév. 2020 à 09:50
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `v-green`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_nom` varchar(50) DEFAULT NULL,
  `cl_prenom` varchar(50) DEFAULT NULL,
  `cl_mail` varchar(50) DEFAULT NULL,
  `cl_tel` varchar(14) DEFAULT NULL,
  `cl_identif` varchar(50) DEFAULT NULL,
  `cl_mdp` char(60) DEFAULT NULL,
  `cl_ddn` date DEFAULT NULL,
  `cl_adresse` varchar(100) DEFAULT NULL,
  `cl_ville` varchar(50) DEFAULT NULL,
  `cl_cp` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `ldc_date` date DEFAULT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fourni_id` int(11) NOT NULL AUTO_INCREMENT,
  `fourni_nom` varchar(100) DEFAULT NULL,
  `fourni_tel` varchar(14) DEFAULT NULL,
  `fourni_mail` varchar(100) DEFAULT NULL,
  `fourni_siret` int(14) DEFAULT NULL,
  `fourni_adresse` varchar(100) DEFAULT NULL,
  `fourni_ville` varchar(100) DEFAULT NULL,
  `fourni_pers_join` varchar(50) DEFAULT NULL,
  `fourni_prix` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`fourni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_de_commande`
--

DROP TABLE IF EXISTS `ligne_de_commande`;
CREATE TABLE IF NOT EXISTS `ligne_de_commande` (
  `ldc_id` int(11) NOT NULL AUTO_INCREMENT,
  `ldc_date` date DEFAULT NULL,
  `co_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ldc_id`),
  KEY `FK_co_id` (`co_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `li_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_adresse` varchar(100) DEFAULT NULL,
  `cl_ville` varchar(100) DEFAULT NULL,
  `cl_cp` varchar(5) DEFAULT NULL,
  `cl_nom` varchar(100) DEFAULT NULL,
  `cl_prenom` varchar(100) DEFAULT NULL,
  `li_date_envoie` datetime DEFAULT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

DROP TABLE IF EXISTS `personnels`;
CREATE TABLE IF NOT EXISTS `personnels` (
  `pers_id` int(11) NOT NULL AUTO_INCREMENT,
  `pers_nom` varchar(100) DEFAULT NULL,
  `pers_prenom` varchar(50) DEFAULT NULL,
  `pers_mail` varchar(50) DEFAULT NULL,
  `pers_tel` varchar(14) DEFAULT NULL,
  `pers_identif` varchar(20) DEFAULT NULL,
  `pers_mdp` char(60) DEFAULT NULL,
  PRIMARY KEY (`pers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`pers_id`, `pers_nom`, `pers_prenom`, `pers_mail`, `pers_tel`, `pers_identif`, `pers_mdp`) VALUES
(1, 'FOVIAUX', 'Nicolas', 'nico.foviaux@hotmail.fr', NULL, 'Nikthekiller62', '$2y$10$kfUKR5PQEVYMzufd/jRGT.XKNWJ5thyNlV2DrhEaMWUpS6nmhzjaC'),
(2, 'Legris', 'Augustin', 'augustinlegris@outlook.fr', NULL, 'Ashkoort', '$2y$10$y6wrEetjtBF7ZVSBrxixresZw9slo2r0Uu9Q8Yj7iMSg5ZGkHqTC6'),
(3, 'pranloup', 'quentin', 'q.pranloup@laposte.net', NULL, 'urtaine', '$2y$10$LKQVYV3UtlMHtyVv8XEIW.aIpGNXW4Ck5VuBE26G0EJSRGY1aFeGa'),
(4, 'Boukraa', 'Gauthier', 'gaboukraa@laposte.net', NULL, 'claptrap', '$2y$10$0C4bLXKGSYeb1rkeBPJs3OGrXVl1sysxvKJvF8I69DYJkPzRweTYm'),
(5, 'Grillet', 'Stéphane', 'stephanegrillet18@gmail.com', NULL, 'Veno', '$2y$10$FGay8HSUN8mg5XpDfg/V6OpkNF2hzhPaI9M4oWCIm5Cez1e9yZdYi');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_ref` varchar(10) DEFAULT NULL,
  `prod_lib` varchar(50) DEFAULT NULL,
  `prod_desc` varchar(1000) DEFAULT NULL,
  `prod_prix` decimal(6,2) DEFAULT NULL,
  `prod_stock` int(11) DEFAULT NULL,
  `prod_ext` varchar(4) DEFAULT NULL,
  `prod_ajout` date DEFAULT NULL,
  `prod_modif` datetime DEFAULT NULL,
  `prod_bloque` tinyint(1) DEFAULT NULL,
  `prod_alt` varchar(200) DEFAULT NULL,
  `prod_title` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `fourni_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `FK_cat_id` (`cat_id`),
  KEY `FK_fourni_id` (`fourni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
