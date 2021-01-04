-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 juin 2020 à 14:01
-- Version du serveur :  8.0.18
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
-- Base de données :  `ministage`
--

-- --------------------------------------------------------

--
-- Structure de la table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `ETA_ID` int(11) NOT NULL,
  PRIMARY KEY (`ETA_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

DROP TABLE IF EXISTS `creneau`;
CREATE TABLE IF NOT EXISTS `creneau` (
  `CRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CRE_MAT` int(11) NOT NULL,
  `CRE_DATE` date NOT NULL,
  `CRE_HEUREDEB` time NOT NULL,
  `CRE_SALLE` varchar(5) NOT NULL,
  `CRE_HEUREFIN` time NOT NULL,
  PRIMARY KEY (`CRE_ID`),
  KEY `I_FK_CRENEAU_MATIERE` (`CRE_MAT`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `creneau`
--

INSERT INTO `creneau` (`CRE_ID`, `CRE_MAT`, `CRE_DATE`, `CRE_HEUREDEB`, `CRE_SALLE`, `CRE_HEUREFIN`) VALUES
(1, 2, '2020-05-19', '13:05:00', 'A101', '17:00:00'),
(2, 1, '2020-05-19', '14:00:00', 'D001', '17:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`ELE_ID`, `ELE_ETA`, `ELE_NOM`, `ELE_PRENOM`, `ELE_DATENAISS`, `ELE_CLASSE`, `ELE_MAIL`) VALUES
(1, 1, 'Test', 'Eleve', '2020-05-19', '3A', NULL),
(2, 7, 'test', 'testetetetetetet', '2020-06-23', 'eztqsrf', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `ENS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ENS_NOM` varchar(150) NOT NULL,
  `ENS_PRENOM` varchar(150) NOT NULL,
  `ENS_MAIL` varchar(150) CHARACTER SET utf8mb4  NOT NULL,
  `ENS_TEL` varchar(12) DEFAULT NULL,
  `ENS_DATENAISS` date NOT NULL,
  PRIMARY KEY (`ENS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`ENS_ID`, `ENS_NOM`, `ENS_PRENOM`, `ENS_MAIL`, `ENS_TEL`, `ENS_DATENAISS`) VALUES
(1, 'Test', 'Enseignant', 'test@enseignant.fr', '0712345678', '2020-05-19'),
(20, 'zda', 'dzaqs', 'test.test@gmail.com', 'gerfdg', '2020-05-01');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `ENSR_MAT` int(11) NOT NULL,
  `ENSR_ENS` int(11) NOT NULL,
  PRIMARY KEY (`ENSR_MAT`,`ENSR_ENS`),
  KEY `I_FK_ENSEIGNER_MATIERE` (`ENSR_MAT`),
  KEY `I_FK_ENSEIGNER_ENSEIGNANT` (`ENSR_ENS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`ENSR_MAT`, `ENSR_ENS`) VALUES
(1, 1);

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
  `ETA_MAIL` varchar(150) CHARACTER SET utf8mb4  NOT NULL,
  `ETA_PROVCIVIL` varchar(3) NOT NULL,
  `ETA_PROVNOM` varchar(150) NOT NULL,
  `ETA_PROVPRENOM` varchar(150) NOT NULL,
  `ETA_TEL` varchar(12) NOT NULL,
  `ETA_SECU` int(15) NOT NULL,
  `ETA_NOMSECU` varchar(50) NOT NULL,
  PRIMARY KEY (`ETA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`ETA_ID`, `ETA_NOM`, `ETA_VILLE`, `ETA_ADRESSE`, `ETA_CP`, `ETA_MAIL`, `ETA_PROVCIVIL`, `ETA_PROVNOM`, `ETA_PROVPRENOM`, `ETA_TEL`, `ETA_SECU`, `ETA_NOMSECU`) VALUES
(1, 'Jean Rostand', 'Caen', '98 route d\'Ifs', '14000', 'jean.rostand@ac-caen.fr', 'M.', 'DUVAL-ROCHER', 'Sébastien', '0231521940', 2147483647, ''),
(7, 'Malherbe', 'Caen', '14 Avenue Albert Sor', '14000', 'malherbe@ac-caen.fr', 'M', 'Bidet', 'Jean-Christophe', '0231861856', 0, 'MAIF');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `FORM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FORM_CRE` int(11) NOT NULL,
  `FORM_STA` int(11) NOT NULL,
  `FORM_MAT` int(11) NOT NULL,
  `FORM_ENS` int(11) NOT NULL,
  `FORM_ELEMIN` int(11) NOT NULL,
  `FORM_ELEMAX` int(11) NOT NULL,
  PRIMARY KEY (`FORM_ID`),
  KEY `I_FK_FORMATION_CRENEAU` (`FORM_CRE`),
  KEY `I_FK_FORMATION_STAGE` (`FORM_STA`),
  KEY `I_FK_FORMATION_MATIERE` (`FORM_MAT`),
  KEY `I_FK_FORMATION_ENSEIGNANT` (`FORM_ENS`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`FORM_ID`, `FORM_CRE`, `FORM_STA`, `FORM_MAT`, `FORM_ENS`, `FORM_ELEMIN`, `FORM_ELEMAX`) VALUES
(1, 2, 1, 1, 1, 5, 15),
(2, 1, 2, 1, 1, 10, 15);

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

DROP TABLE IF EXISTS `inscrire`;
CREATE TABLE IF NOT EXISTS `inscrire` (
  `INS_ELE` int(11) NOT NULL,
  `INS_FORM` int(11) NOT NULL,
  PRIMARY KEY (`INS_ELE`,`INS_FORM`),
  KEY `I_FK_INSCRIRE_ELEVE` (`INS_ELE`),
  KEY `I_FK_INSCRIRE_FORMATION` (`INS_FORM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `inscrire`
--

INSERT INTO `inscrire` (`INS_ELE`, `INS_FORM`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `lycee`
--

DROP TABLE IF EXISTS `lycee`;
CREATE TABLE IF NOT EXISTS `lycee` (
  `ETA_ID` int(11) NOT NULL,
  PRIMARY KEY (`ETA_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `lycee`
--

INSERT INTO `lycee` (`ETA_ID`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `MAT_CODE` int(11) NOT NULL AUTO_INCREMENT,
  `MAT_LIBELLE` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`MAT_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`MAT_CODE`, `MAT_LIBELLE`) VALUES
(1, 'Sciences de la Vie et de la Terre'),
(2, 'Mathématiques');

-- --------------------------------------------------------

--
-- Structure de la table `preferer`
--

DROP TABLE IF EXISTS `preferer`;
CREATE TABLE IF NOT EXISTS `preferer` (
  `PREF_CRE` int(11) NOT NULL,
  `PREF_ENS` int(11) NOT NULL,
  `PREF_EDT` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`PREF_CRE`,`PREF_ENS`),
  KEY `I_FK_PREFERER_CRENEAU` (`PREF_CRE`),
  KEY `I_FK_PREFERER_ENSEIGNANT` (`PREF_ENS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `preferer`
--

INSERT INTO `preferer` (`PREF_CRE`, `PREF_ENS`, `PREF_EDT`) VALUES
(1, 1, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

DROP TABLE IF EXISTS `stage`;
CREATE TABLE IF NOT EXISTS `stage` (
  `STA_CODE` int(11) NOT NULL AUTO_INCREMENT,
  `STA_LIBELLE` varchar(128) NOT NULL,
  PRIMARY KEY (`STA_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`STA_CODE`, `STA_LIBELLE`) VALUES
(1, 'BTK - Biotechnologies'),
(2, 'TEST');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `travailler`
--

INSERT INTO `travailler` (`TRA_ENS`, `TRA_ETA`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `TYP_CODE` varchar(5) NOT NULL,
  `TYP_LIBELLE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

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
  PRIMARY KEY (`UTIL_MAIL`),
  KEY `I_FK_UTILISATEUR_TYPE` (`UTIL_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`UTIL_MAIL`, `UTIL_MDP`, `UTIL_CODE`) VALUES
('malherbe@ac-caen.fr', 'sezsfqK3f6Xuw', 'ETAB'),
('test.test@gmail.com', 'seZeVRHCwfXgw', 'ENS'),
('test@admin.fr', 'adpexzg3FUZAk', 'ADMIN'),
('test@enseignant.fr', 'en4Km8aNW/6BM', 'ENS'),
('test@etablissement.fr', 'et3VSYOUI.nPA', 'ETAB'),
('valy14@outlook.fr', 'sefMa2kVx/fkc', 'ADMIN');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `college`
--
ALTER TABLE `college`
  ADD CONSTRAINT `FK_COLLEGE_ETABLISSEMENT` FOREIGN KEY (`ETA_ID`) REFERENCES `etablissement` (`ETA_ID`)ON DELETE CASCADE;

--
-- Contraintes pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD CONSTRAINT `FK_CRENEAU_MATIERE` FOREIGN KEY (`CRE_MAT`) REFERENCES `matiere` (`MAT_CODE`)ON DELETE CASCADE;

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `FK_ELEVE_ETABLISSEMENT` FOREIGN KEY (`ELE_ETA`) REFERENCES `etablissement` (`ETA_ID`)ON DELETE CASCADE;

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `FK_ENSEIGNER_ENSEIGNANT` FOREIGN KEY (`ENSR_ENS`) REFERENCES `enseignant` (`ENS_ID`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ENSEIGNER_MATIERE` FOREIGN KEY (`ENSR_MAT`) REFERENCES `matiere` (`MAT_CODE`)ON DELETE CASCADE;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_FORMATION_CRENEAU` FOREIGN KEY (`FORM_CRE`) REFERENCES `creneau` (`CRE_ID`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FORMATION_ENSEIGNANT` FOREIGN KEY (`FORM_ENS`) REFERENCES `enseignant` (`ENS_ID`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FORMATION_MATIERE` FOREIGN KEY (`FORM_MAT`) REFERENCES `matiere` (`MAT_CODE`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FORMATION_STAGE` FOREIGN KEY (`FORM_STA`) REFERENCES `stage` (`STA_CODE`)ON DELETE CASCADE;

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `FK_INSCRIRE_ELEVE` FOREIGN KEY (`INS_ELE`) REFERENCES `eleve` (`ELE_ID`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_INSCRIRE_FORMATION` FOREIGN KEY (`INS_FORM`) REFERENCES `formation` (`FORM_ID`)ON DELETE CASCADE;

--
-- Contraintes pour la table `lycee`
--
ALTER TABLE `lycee`
  ADD CONSTRAINT `FK_LYCEE_ETABLISSEMENT` FOREIGN KEY (`ETA_ID`) REFERENCES `etablissement` (`ETA_ID`)ON DELETE CASCADE;

--
-- Contraintes pour la table `preferer`
--
ALTER TABLE `preferer`
  ADD CONSTRAINT `FK_PREFERER_CRENEAU` FOREIGN KEY (`PREF_CRE`) REFERENCES `creneau` (`CRE_ID`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_PREFERER_ENSEIGNANT` FOREIGN KEY (`PREF_ENS`) REFERENCES `enseignant` (`ENS_ID`)ON DELETE CASCADE;

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `FK_TRAVAILLER_ENSEIGNANT` FOREIGN KEY (`TRA_ENS`) REFERENCES `enseignant` (`ENS_ID`)ON DELETE CASCADE,
  ADD CONSTRAINT `FK_TRAVAILLER_ETABLISSEMENT` FOREIGN KEY (`TRA_ETA`) REFERENCES `etablissement` (`ETA_ID`)ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_UTILISATEUR_TYPE` FOREIGN KEY (`UTIL_CODE`) REFERENCES `type` (`TYP_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
