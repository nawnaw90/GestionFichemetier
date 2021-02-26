/*Mettres ces commandes dans Server:LocalHost:....*/
-- Ne crée pas d'encapsulation de plusieurs requêtes automatiquement.

SET AUTOCOMMIT = 0;

-- Commencement d'une transaction (Plusieurs requêtes en blocs).

START TRANSACTION;

-- Zone de temps réglé sur celui de Paris.

SET time_zone = "+00:00";


-- BAse de donnée: `GestionFichemetier`

CREATE DATABASE IF NOT EXISTS `GestionFichemetier` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


-- Création de la table `Fichemetier`

CREATE TABLE IF NOT EXISTS `GestionFichemetier`.`Fichemetier` (
  `code_ROM` varchar(5)PRIMARY KEY COLLATE utf8mb4_unicode_ci ,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_longue` text(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_courte` text(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vues` int(1) COLLATE utf8mb4_unicode_ci  DEFAULT 1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Création de la table `Admin`

CREATE TABLE IF NOT EXISTS `GestionFichemetier`.`Admin` (
  `mail`varchar(255) PRIMARY KEY COLLATE utf8mb4_unicode_ci,
  `mot_de_passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role`varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Création de la table `Competences`

CREATE TABLE IF NOT EXISTS `GestionFichemetier`.`Competences` (
  `idCompetence`int PRIMARY KEY COLLATE utf8mb4_unicode_ci AUTO_INCREMENT,
  `nomCompetence`varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Création de la table `CompetencesFichemetier`

CREATE TABLE IF NOT EXISTS `GestionFichemetier`.`CompetencesFichemetier` (
  `code_ROM`varchar(255)  COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCompetence`int COLLATE utf8mb4_unicode_ci NOT NULL,
    CONSTRAINT FK_idCompetence FOREIGN KEY (`idCompetence`)
    REFERENCES `GestionFichemetier`.`Competences`(`idCompetence`)ON DELETE CASCADE,
    CONSTRAINT FK_code_ROM FOREIGN KEY (`code_ROM`)
    REFERENCES `GestionFichemetier`.`Fichemetier`(`code_ROM`) ON DELETE CASCADE,
    CONSTRAINT PK_GestionsFichemetier PRIMARY KEY (`code_ROM`,`idCompetence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
