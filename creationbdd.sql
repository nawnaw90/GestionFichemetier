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


-- Mettre des données dans la table `Fichemetier`
/*Mettre cette commande dans la Table `Fichemetier`*/


INSERT INTO `GestionFichemetier`.`Fichemetier` (`code_ROM`, `titre`, `description_longue`,`description_courte`) VALUES
("M1805","Développeur/Développeuse web","Expert des langages informatiques, le développeur informatique traduit la demande d'un client en lignes de code informatique. La révolution numérique le place parmi les professionnels les plus recherchés, surtout s'il sait s'adapter et élargir ses compétences.","Le développeur informatique est le pro des langages informatiques, tels que C++ ou Java ! Responsable de la programmation, c'est-à-dire de la production de lignes de code, il rédige et suit un cahier des charges précisant les spécificités techniques à suivre pour créer le programme. Afin de concevoir des programmes informatiques « sur mesure », il participe en amont à l'analyse des besoins des utilisateurs, puis à la phase d'essai. En aval, il adapte le logiciel à la demande du client en apportant les retouches nécessaires. Le dévelop-peur prend en charge la formation des utilisateurs de l'application et peut même rédiger un guide d'utilisateur. Par la suite, il intervient pour effectuer la maintenance ou faire évoluer les programmes. Grâce aux progiciels (des logiciels standards de programmation prêts à être utilisés), il passe moins de temps à écrire les programmes, si bien que son activité évolue vers plus d'analyse que de programmation."),
("E1205","Web designer","À la fois artiste et informaticien, le webdesigner est capable de réaliser une interface web ergonomique et un design adapté au contenu d'un site Internet donné.","
Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s'occupe de tout l'aspect graphique d'un site Internet (illustrations, animations, typographie...). Il choisit la place des photos, la taille des caractères et les couleurs qui rendront la consultation agréable pour l'utilisateur. Il crée aussi les pictogrammes qui facilitent la lecture et la navigation dans le site. Dans certains cas, il sera amené à établir la charte graphique et à créer l'identité visuelle du site.
 
 C'est un exercice délicat car il faut respecter à la fois la demande du client, les impératifs de marketing et de communication, et ceux du public visé... De plus, Internet comporte des contraintes spécifiques à prendre en compte : par exemple, les temps de téléchargement trop lents qui peuvent décourager les internautes.Le webdesigner doit maîtriser les logiciels de graphisme (Photoshop, Illustrator...) et connaître les règles de l'ergonomie pour capter l'attention des visiteurs.

 Il peut travailler pour un studio de création de sites Internet, le service communication d'une entreprise, ou à son compte.");
 

-- Mettre des données dans la table `Admin`
/*Mettre cette commande dans la Table `Admin`*/


INSERT INTO `GestionFichemetier`.`Admin` (`mail`, `mot_de_passe`, `nom`,`role`) VALUES
("yeetustitus@kym.com","J3anpierre>","Julien Forner","Super"),
("nawnaw90@gmail.com","1234","Nawal Mahboub","Super"),
("iangaevM@live.fr","5678","Maxim Iangaev","Normal"),
("fredo@live.fr","5678","Frédéric Muller","Normal");

