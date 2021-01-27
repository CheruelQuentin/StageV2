-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 jan. 2021 à 17:06
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
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

DROP TABLE IF EXISTS `creneau`;
CREATE TABLE IF NOT EXISTS `creneau` (
  `CRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CRE_DATE` date NOT NULL,
  `CRE_HEUREDEB` time NOT NULL,
  `CRE_SALLE` varchar(5) NOT NULL,
  `CRE_HEUREFIN` time NOT NULL,
  `CRE_MAT` int(11) DEFAULT NULL,
  PRIMARY KEY (`CRE_ID`),
  KEY `FK_CRENEAU_MATIERE` (`CRE_MAT`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creneau`
--

INSERT INTO `creneau` (`CRE_ID`, `CRE_DATE`, `CRE_HEUREDEB`, `CRE_SALLE`, `CRE_HEUREFIN`, `CRE_MAT`) VALUES
(17, '2021-01-21', '09:09:00', 'A400', '09:10:00', 4),
(37, '2021-01-23', '13:49:00', 'U170', '12:49:00', 2),
(38, '2021-01-21', '13:23:00', 'Z044', '13:21:00', 1),
(39, '2021-01-21', '13:23:00', 'Z044', '13:21:00', 2),
(40, '2021-01-21', '13:23:00', 'Z044', '13:21:00', 4);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `ELE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ELE_ETA` int(11) NOT NULL,
  `ELE_NOM` varchar(100) NOT NULL,
  `ELE_PRENOM` varchar(100) NOT NULL,
  `ELE_DATENAISS` date NOT NULL,
  `ELE_CLASSE` varchar(10) NOT NULL,
  `ELE_MAIL` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ELE_ID`),
  KEY `I_FK_ELEVE_ETABLISSEMENT` (`ELE_ETA`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`ELE_ID`, `ELE_ETA`, `ELE_NOM`, `ELE_PRENOM`, `ELE_DATENAISS`, `ELE_CLASSE`, `ELE_MAIL`) VALUES
(4, 7, 'Jacques', 'Arthur', '2000-02-09', 'ATF', NULL),
(7, 9, 'Frank', 'Kruger', '1997-07-06', 'TSTMG', NULL),
(8, 7, 'Franck', 'Russell', '2021-01-23', 'USTMG', NULL),
(13, 7, 'Karl', 'Kriegzum', '2021-01-29', 'USTMG', NULL),
(19, 7, 'Karl', 'Korx', '2021-02-03', 'USTMG', NULL),
(22, 7, 'Bjorn', 'Hansen', '2021-01-29', 'USTMG', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `ENS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ENS_NOM` varchar(150) NOT NULL,
  `ENS_PRENOM` varchar(150) NOT NULL,
  `ENS_MAIL` varchar(150) NOT NULL,
  `ENS_TEL` varchar(12) DEFAULT NULL,
  `ENS_DATENAISS` date NOT NULL,
  PRIMARY KEY (`ENS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`ENS_ID`, `ENS_NOM`, `ENS_PRENOM`, `ENS_MAIL`, `ENS_TEL`, `ENS_DATENAISS`) VALUES
(1, 'Test', 'Enseignant', 'test@enseignant.fr', '0712345678', '2020-05-19'),
(20, 'zda', 'dzaqs', 'test.test@gmail.com', 'gerfdg', '2020-05-01'),
(23, 'mailhé', 'patrick', 'mailhe.patrick@gmail.com', '090909099090', '2021-01-05');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `ETA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETA_NOM` varchar(150) NOT NULL,
  `ETA_VILLE` varchar(150) NOT NULL,
  `ETA_ADRESSE` varchar(150) NOT NULL,
  `ETA_CP` varchar(6) NOT NULL,
  `ETA_MAIL` varchar(150) NOT NULL,
  `ETA_PROVCIVIL` varchar(3) NOT NULL,
  `ETA_PROVNOM` varchar(150) NOT NULL,
  `ETA_PROVPRENOM` varchar(150) NOT NULL,
  `ETA_TEL` varchar(12) NOT NULL,
  `ETA_SECU` int(15) NOT NULL,
  `ETA_NOMSECU` varchar(50) NOT NULL,
  PRIMARY KEY (`ETA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`ETA_ID`, `ETA_NOM`, `ETA_VILLE`, `ETA_ADRESSE`, `ETA_CP`, `ETA_MAIL`, `ETA_PROVCIVIL`, `ETA_PROVNOM`, `ETA_PROVPRENOM`, `ETA_TEL`, `ETA_SECU`, `ETA_NOMSECU`) VALUES
(7, 'Malherbe', 'Caen', '14 Avenue Albert Sor', '14000', 'malherbe@ac-caen.fr', 'M', 'Bidet', 'Jean-Christophe', '0231861856', 0, 'MAIF'),
(9, 'Rostand', 'Caen', '98 route d\'ifs', '14000', 'jean.rostand@ac-caen.fr', 'M.', 'Duval', 'Sébastien', '0231521940', 1234567890, 'MAE');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `FORM_CODE` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_LIBELLE` varchar(128) NOT NULL,
  PRIMARY KEY (`FORM_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`FORM_CODE`, `FORM_LIBELLE`) VALUES
(1, 'BTK - Biotechnologies'),
(2, 'TEST');

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

DROP TABLE IF EXISTS `inscrire`;
CREATE TABLE IF NOT EXISTS `inscrire` (
  `INS_ELE` int(11) NOT NULL,
  `INS_STA` int(11) NOT NULL,
  PRIMARY KEY (`INS_ELE`,`INS_STA`),
  KEY `I_FK_INSCRIRE_ELEVE` (`INS_ELE`),
  KEY `I_FK_INSCRIRE_STAGE` (`INS_STA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscrire`
--

INSERT INTO `inscrire` (`INS_ELE`, `INS_STA`) VALUES
(8, 1),
(19, 1);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `MAT_CODE` int(11) NOT NULL AUTO_INCREMENT,
  `MAT_LIBELLE` varchar(150) NOT NULL,
  PRIMARY KEY (`MAT_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`MAT_CODE`, `MAT_LIBELLE`) VALUES
(1, 'Sciences de la Vie et de la Terre'),
(2, 'Mathématiques'),
(4, 'CHINOIS');

-- --------------------------------------------------------

--
-- Structure de la table `preferer`
--

DROP TABLE IF EXISTS `preferer`;
CREATE TABLE IF NOT EXISTS `preferer` (
  `PREF_CRE` int(11) NOT NULL,
  `PREF_ENS` int(11) NOT NULL,
  PRIMARY KEY (`PREF_CRE`,`PREF_ENS`),
  KEY `I_FK_PREFERER_CRENEAU` (`PREF_CRE`),
  KEY `I_FK_PREFERER_ENSEIGNANT` (`PREF_ENS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `preferer`
--

INSERT INTO `preferer` (`PREF_CRE`, `PREF_ENS`) VALUES
(17, 20);

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `REC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `REC_MAIL` varchar(150) DEFAULT NULL,
  `REC_CODE` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`REC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

DROP TABLE IF EXISTS `stage`;
CREATE TABLE IF NOT EXISTS `stage` (
  `STA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STA_CRE` int(11) NOT NULL,
  `STA_FORM` int(11) NOT NULL,
  `STA_MAT` int(11) NOT NULL,
  `STA_ENS` int(11) NOT NULL,
  `STA_ELEMIN` int(11) NOT NULL,
  `STA_ELEMAX` int(11) NOT NULL,
  `STA_ARCHIVE` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`STA_ID`),
  KEY `I_FK_stage_CRENEAU` (`STA_CRE`),
  KEY `I_FK_stage_FORMATION` (`STA_FORM`),
  KEY `I_FK_stage_MATIERE` (`STA_MAT`),
  KEY `I_FK_stage_ENSEIGNANT` (`STA_ENS`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`STA_ID`, `STA_CRE`, `STA_FORM`, `STA_MAT`, `STA_ENS`, `STA_ELEMIN`, `STA_ELEMAX`, `STA_ARCHIVE`) VALUES
(1, 17, 1, 2, 23, 1, 11, NULL),
(42, 38, 2, 1, 23, 1, 11, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `travailler`
--

DROP TABLE IF EXISTS `travailler`;
CREATE TABLE IF NOT EXISTS `travailler` (
  `TRA_ENS` int(11) NOT NULL,
  `TRA_ETA` int(11) NOT NULL,
  PRIMARY KEY (`TRA_ENS`,`TRA_ETA`),
  KEY `I_FK_TRAVAILLER_ENSEIGNANT` (`TRA_ENS`),
  KEY `I_FK_TRAVAILLER_ETABLISSEMENT` (`TRA_ETA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `TYP_CODE` varchar(5) NOT NULL,
  `TYP_LIBELLE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`TYP_CODE`, `TYP_LIBELLE`) VALUES
('ADMIN', 'Administrateur'),
('ENS', 'Enseignant'),
('ETAB', 'Établissement');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `UTIL_MAIL` varchar(150) NOT NULL,
  `UTIL_MDP` varchar(500) NOT NULL,
  `UTIL_CODE` varchar(5) NOT NULL,
  `UTIL_ETA` int(11) DEFAULT NULL,
  `UTIL_ENS` int(11) DEFAULT NULL,
  PRIMARY KEY (`UTIL_MAIL`),
  KEY `I_FK_UTILISATEUR_TYPE` (`UTIL_CODE`),
  KEY `FK_UTILISATEUR_ENS` (`UTIL_ENS`),
  KEY `FK_UTILISATEUR_ETA` (`UTIL_ETA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`UTIL_MAIL`, `UTIL_MDP`, `UTIL_CODE`, `UTIL_ETA`, `UTIL_ENS`) VALUES
('jean.rostand@ac-caen.fr', 'seXq85xDmUobM', 'ETAB', NULL, NULL),
('mailhe.patrick@gmail.com', 'sefZQ4h06XQUA', 'ENS', NULL, 23),
('malherbe@ac-caen.fr', 'seUHVYfegYbL6', 'ETAB', 7, NULL),
('Mam.dou@gmail.com', 'sefZQ4h06XQUA', 'ENS', NULL, NULL),
('test@admin.fr', 'sefL3MSA2sN5s', 'ADMIN', NULL, NULL),
('test@enseignant.fr', 'en4Km8aNW/6BM', 'ENS', NULL, NULL),
('test@etablissement.fr', 'et3VSYOUI.nPA', 'ETAB', NULL, NULL),
('valy14@outlook.fr', 'sefMa2kVx/fkc', 'ADMIN', NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD CONSTRAINT `FK_CRENEAU_MATIERE` FOREIGN KEY (`CRE_MAT`) REFERENCES `matiere` (`MAT_CODE`) ON DELETE CASCADE;

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `FK_ELEVE_ETABLISSEMENT` FOREIGN KEY (`ELE_ETA`) REFERENCES `etablissement` (`ETA_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `FK_INSCRIRE_ELEVE` FOREIGN KEY (`INS_ELE`) REFERENCES `eleve` (`ELE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_INSCRIRE_stage` FOREIGN KEY (`INS_STA`) REFERENCES `stage` (`STA_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `preferer`
--
ALTER TABLE `preferer`
  ADD CONSTRAINT `FK_PREFERER_CRENEAU` FOREIGN KEY (`PREF_CRE`) REFERENCES `creneau` (`CRE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_PREFERER_ENSEIGNANT` FOREIGN KEY (`PREF_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_stage_CRENEAU` FOREIGN KEY (`STA_CRE`) REFERENCES `creneau` (`CRE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_stage_ENSEIGNANT` FOREIGN KEY (`STA_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_stage_FORMATION` FOREIGN KEY (`STA_FORM`) REFERENCES `formation` (`FORM_CODE`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_stage_MATIERE` FOREIGN KEY (`STA_MAT`) REFERENCES `matiere` (`MAT_CODE`) ON DELETE CASCADE;

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `FK_TRAVAILLER_ENSEIGNANT` FOREIGN KEY (`TRA_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_TRAVAILLER_ETABLISSEMENT` FOREIGN KEY (`TRA_ETA`) REFERENCES `etablissement` (`ETA_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_UTILISATEUR_ENS` FOREIGN KEY (`UTIL_ENS`) REFERENCES `enseignant` (`ENS_ID`),
  ADD CONSTRAINT `FK_UTILISATEUR_ETA` FOREIGN KEY (`UTIL_ETA`) REFERENCES `etablissement` (`ETA_ID`),
  ADD CONSTRAINT `FK_UTILISATEUR_TYPE` FOREIGN KEY (`UTIL_CODE`) REFERENCES `type` (`TYP_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
