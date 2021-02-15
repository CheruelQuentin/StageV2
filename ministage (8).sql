-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 14 fév. 2021 à 10:18
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
-- Base de données : `ministage`
--

-- --------------------------------------------------------

--
-- Structure de la table `categeta`
--

DROP TABLE IF EXISTS `categeta`;
CREATE TABLE IF NOT EXISTS `categeta` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_LIBELLE` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CAT_POSTE` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categeta`
--

INSERT INTO `categeta` (`CAT_ID`, `CAT_LIBELLE`, `CAT_POSTE`) VALUES
(0, 'Collège', 'Directeur(trice)'),
(1, 'Lycée', 'Proviseur(e)');

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

DROP TABLE IF EXISTS `creneau`;
CREATE TABLE IF NOT EXISTS `creneau` (
  `CRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CRE_DATE` date NOT NULL,
  `CRE_DATEFIN` date DEFAULT NULL,
  `CRE_HEUREDEB` time NOT NULL,
  `CRE_SALLE` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `CRE_HEUREFIN` time NOT NULL,
  `CRE_MAT` int(11) DEFAULT NULL,
  `CRE_VALIDE` tinyint(1) NOT NULL,
  PRIMARY KEY (`CRE_ID`),
  KEY `FK_CRENEAU_MATIERE` (`CRE_MAT`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `creneau`
--

INSERT INTO `creneau` (`CRE_ID`, `CRE_DATE`, `CRE_DATEFIN`, `CRE_HEUREDEB`, `CRE_SALLE`, `CRE_HEUREFIN`, `CRE_MAT`, `CRE_VALIDE`) VALUES
(12, '2021-02-26', '2021-02-27', '13:01:03', 'ABCD', '17:01:03', 4, 0),
(48, '2021-01-27', '2021-02-27', '11:25:00', 'U170', '11:32:00', NULL, 0),
(66, '2021-01-08', '2021-02-27', '10:21:00', 'DADE', '10:18:00', NULL, 1),
(68, '2021-01-22', '2021-02-27', '15:30:00', 'DAD', '15:29:00', NULL, 1),
(70, '2021-01-21', '2021-02-27', '10:47:00', 'KAWZA', '10:47:00', NULL, 0),
(72, '2021-01-22', '2021-02-27', '10:50:00', 'KAW', '10:51:00', NULL, 1),
(73, '2021-01-01', '2021-02-27', '16:01:00', 'KAWZA', '16:02:00', NULL, 1),
(74, '2021-01-01', '2021-02-27', '16:01:00', 'KAWZA', '16:02:00', NULL, 0),
(75, '2021-01-31', '2021-02-27', '15:35:00', 'KAWZA', '15:38:00', NULL, 0),
(76, '2020-12-30', '2021-02-27', '10:16:00', 'KAWZA', '09:16:00', NULL, 0),
(78, '2021-01-14', '2021-02-27', '08:19:00', 'KAWZA', '08:19:00', NULL, 0),
(79, '2021-01-15', '2021-02-27', '08:22:00', 'KAWZA', '08:21:00', NULL, 0),
(80, '2021-01-15', '2021-02-27', '08:22:00', 'KAWZA', '08:21:00', NULL, 0),
(81, '2021-01-15', '2021-02-27', '08:22:00', 'KAWZA', '08:21:00', NULL, 0),
(82, '2021-01-15', '2021-02-27', '08:22:00', 'KAWZA', '08:21:00', NULL, 0),
(86, '2021-02-24', '2021-02-27', '08:15:00', 'C301', '08:15:00', NULL, 1),
(87, '2021-02-13', '2021-02-27', '08:15:00', 'C303', '08:15:00', NULL, 1),
(88, '2021-02-11', '2021-02-12', '08:15:00', 'C301', '09:10:00', NULL, 0),
(89, '2021-02-19', '2021-02-24', '11:15:00', 'C301', '16:05:00', NULL, 0),
(90, '2021-02-01', '2021-02-02', '08:15:00', 'B300', '17:55:00', NULL, 1),
(92, '2021-02-11', '2021-02-11', '08:15:00', 'C305', '10:05:00', NULL, 1),
(93, '2021-02-12', '2021-02-26', '08:15:00', 'C301', '08:15:00', NULL, 0),
(95, '2021-02-14', '2021-02-21', '08:15:00', 'C301', '08:15:00', NULL, 0),
(96, '2021-02-05', '2021-02-19', '08:15:00', 'C301', '08:15:00', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `ELE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ELE_ETA` int(11) NOT NULL,
  `ELE_NOM` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ELE_PRENOM` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ELE_DATENAISS` date NOT NULL,
  `ELE_CLASSE` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ELE_MAIL` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`ELE_ID`),
  KEY `I_FK_ELEVE_ETABLISSEMENT` (`ELE_ETA`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`ELE_ID`, `ELE_ETA`, `ELE_NOM`, `ELE_PRENOM`, `ELE_DATENAISS`, `ELE_CLASSE`, `ELE_MAIL`) VALUES
(8, 7, 'Franck', 'Russell', '2021-01-23', 'USTMG', ''),
(18, 7, 'albert', 'Als', '2021-01-01', '123', ''),
(19, 7, 'Rousseau', 'Jean-jacques', '2021-02-09', 'Terminal S', 'rousseau@laposte.fr'),
(21, 7, 'Jean kevin', 'Bernard', '2021-02-02', '5ème verte', 'jenkev@gmail.com'),
(23, 7, 'Duval-Rocher', 'Sébastien', '2021-02-11', 'Terminal S', 'jean.rostand@ac-caen.fr');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `ENS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ENS_NOM` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ENS_PRENOM` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ENS_MAIL` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ENS_TEL` varchar(12) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ENS_DATENAISS` date NOT NULL,
  PRIMARY KEY (`ENS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`ENS_ID`, `ENS_NOM`, `ENS_PRENOM`, `ENS_MAIL`, `ENS_TEL`, `ENS_DATENAISS`) VALUES
(24, 'Lapage', 'Alfred', 'alfredlapage@orange.fr', '0645789865', '1981-01-15'),
(25, 'Mailhe', 'Patrick', 'mailhe.patrick@gmail.com', '0632549865', '1960-01-20'),
(31, 'Timonnier', 'Franck', 'timonnier@gmail.com', '0632548721', '1993-06-17');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `ENSR_MAT` int(11) NOT NULL,
  `ENSR_ENS` int(11) NOT NULL,
  KEY `Enseignant` (`ENSR_ENS`),
  KEY `Matiere` (`ENSR_MAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `ETA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETA_NOM` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_VILLE` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_ADRESSE` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_CP` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_MAIL` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_PROVCIVIL` varchar(4) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_PROVNOM` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_PROVPRENOM` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_TEL` varchar(14) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_SECU` varchar(15) NOT NULL,
  `ETA_NOMSECU` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ETA_CATEG` int(11) NOT NULL,
  PRIMARY KEY (`ETA_ID`),
  KEY `aDefinir` (`ETA_CATEG`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`ETA_ID`, `ETA_NOM`, `ETA_VILLE`, `ETA_ADRESSE`, `ETA_CP`, `ETA_MAIL`, `ETA_PROVCIVIL`, `ETA_PROVNOM`, `ETA_PROVPRENOM`, `ETA_TEL`, `ETA_SECU`, `ETA_NOMSECU`, `ETA_CATEG`) VALUES
(7, 'Malherbe', 'Caen', '14 Avenue Albert Sor', '14000', 'malherbe@ac-caen.fr', 'M.', 'Bidet', 'Jean-Christophe', '0231861856', '2134545164', 'MAE', 1),
(8, 'Jean Rostand', 'Caen', '98 route d\'ifs', '14000', 'jean.rostand@ac-caen.fr', 'M.', 'Duval-Rocher', 'Sébastien', '0231521940', '1212121212Q', 'MAE', 1),
(39, 'École Notre Dame', 'Caen', '26 Rue Jean Eudes', '14000', 'notredame@ac-caen.fr', 'M.', 'Chéruel', 'Quentin', '02 31 85 35 85', '1234567890', 'MAE', 0),
(40, 'Sébastien Duval-Rocher', 'Caen', '98 route d\'ifs', '14000', 'rostandTest@ac-caen.fr', 'M.', 'Duval-Rocher', 'Sébastien', '0231521940', '1212121212Q', 'MAE', 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `FORM_CODE` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_LIBELLE` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`FORM_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`FORM_CODE`, `FORM_LIBELLE`) VALUES
(1, 'BTK - Biotechnologies'),
(3, 'BTS SIO'),
(4, 'BTS SAM');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscrire`
--

INSERT INTO `inscrire` (`INS_ELE`, `INS_STA`) VALUES
(8, 10),
(18, 10),
(19, 10);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `MAT_CODE` int(11) NOT NULL AUTO_INCREMENT,
  `MAT_LIBELLE` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`MAT_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`MAT_CODE`, `MAT_LIBELLE`) VALUES
(0, 'Autre'),
(2, 'Mathématiques'),
(4, 'Chinois'),
(9, 'Russe'),
(10, 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `preferer`
--

DROP TABLE IF EXISTS `preferer`;
CREATE TABLE IF NOT EXISTS `preferer` (
  `PREF_CRE` int(11) NOT NULL,
  `PREF_ENS` int(11) NOT NULL,
  KEY `I_FK_PREFERER_CRENEAU` (`PREF_CRE`),
  KEY `I_FK_PREFERER_ENSEIGNANT` (`PREF_ENS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `preferer`
--

INSERT INTO `preferer` (`PREF_CRE`, `PREF_ENS`) VALUES
(89, 25),
(90, 25),
(92, 25),
(95, 25);

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `REC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `REC_MAIL` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `REC_CODE` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`REC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`STA_ID`, `STA_CRE`, `STA_FORM`, `STA_MAT`, `STA_ENS`, `STA_ELEMIN`, `STA_ELEMAX`, `STA_ARCHIVE`) VALUES
(10, 92, 4, 4, 25, 1, 10, NULL),
(13, 95, 3, 0, 25, 1, 2, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `TYP_CODE` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `TYP_LIBELLE` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `UTIL_MAIL` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `UTIL_MDP` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `UTIL_CODE` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `UTIL_ETA` int(11) DEFAULT NULL,
  `UTIL_ENS` int(11) DEFAULT NULL,
  PRIMARY KEY (`UTIL_MAIL`),
  KEY `I_FK_UTILISATEUR_TYPE` (`UTIL_CODE`),
  KEY `FK_UTILISATEUR_ENS` (`UTIL_ENS`),
  KEY `FK_UTILISATEUR_ETA` (`UTIL_ETA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`UTIL_MAIL`, `UTIL_MDP`, `UTIL_CODE`, `UTIL_ETA`, `UTIL_ENS`) VALUES
('jean.rostand@ac-caen.fr', 'seGQSc.gpA1KY', 'ETAB', 8, NULL),
('mailhe.patrick@gmail.com', 'seuB2WWW.sy1c', 'ENS', NULL, 25),
('malherbe@ac-caen.fr', 'se9bLOvM23K1I', 'ETAB', 7, NULL),
('rostandTest@ac-caen.fr', 'seNqls8NynQ3A', 'ETAB', 40, NULL),
('test@admin.fr', 'seG97HbqNcjXg', 'ADMIN', NULL, NULL),
('test@enseignant.fr', 'en4Km8aNW/6BM', 'ENS', NULL, NULL),
('test@etablissement.fr', 'et3VSYOUI.nPA', 'ETAB', NULL, NULL),
('timonnier@gmail.com', 'seO3/xN0GiqvE', 'ENS', NULL, 31),
('tret@test.fr', 'sequJKMzPoyc6', 'ENS', NULL, 24);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD CONSTRAINT `FK_CRENEAU_MATIERE` FOREIGN KEY (`CRE_MAT`) REFERENCES `matiere` (`MAT_CODE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `FK_ELEVE_ETABLISSEMENT` FOREIGN KEY (`ELE_ETA`) REFERENCES `etablissement` (`ETA_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `Enseignant` FOREIGN KEY (`ENSR_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Matiere` FOREIGN KEY (`ENSR_MAT`) REFERENCES `matiere` (`MAT_CODE`);

--
-- Contraintes pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD CONSTRAINT `aDefinir` FOREIGN KEY (`ETA_CATEG`) REFERENCES `categeta` (`CAT_ID`);

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `FK_INSCRIRE_ELEVE` FOREIGN KEY (`INS_ELE`) REFERENCES `eleve` (`ELE_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_INSCRIRE_stage` FOREIGN KEY (`INS_STA`) REFERENCES `stage` (`STA_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FK_stage_CRENEAU` FOREIGN KEY (`STA_CRE`) REFERENCES `creneau` (`CRE_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_stage_ENSEIGNANT` FOREIGN KEY (`STA_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_stage_FORMATION` FOREIGN KEY (`STA_FORM`) REFERENCES `formation` (`FORM_CODE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_stage_MATIERE` FOREIGN KEY (`STA_MAT`) REFERENCES `matiere` (`MAT_CODE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `FK_TRAVAILLER_ENSEIGNANT` FOREIGN KEY (`TRA_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRAVAILLER_ETABLISSEMENT` FOREIGN KEY (`TRA_ETA`) REFERENCES `etablissement` (`ETA_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_UTILISATEUR_ENS` FOREIGN KEY (`UTIL_ENS`) REFERENCES `enseignant` (`ENS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UTILISATEUR_ETA` FOREIGN KEY (`UTIL_ETA`) REFERENCES `etablissement` (`ETA_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UTILISATEUR_TYPE` FOREIGN KEY (`UTIL_CODE`) REFERENCES `type` (`TYP_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
