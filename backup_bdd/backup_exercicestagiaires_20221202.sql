-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: exercicestagiaires
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `exercicestagiaires`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `exercicestagiaires` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `exercicestagiaires`;

--
-- Table structure for table `animations`
--

DROP TABLE IF EXISTS `animations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animations` (
  `idAnimation` int(11) NOT NULL AUTO_INCREMENT,
  `idFormateur` int(11) DEFAULT NULL,
  `idFormation` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAnimation`),
  KEY `FK_Animations_Formateur` (`idFormateur`),
  KEY `FK_Animations_Formations` (`idFormation`),
  CONSTRAINT `FK_Animations_Formateur` FOREIGN KEY (`idFormateur`) REFERENCES `formateurs` (`idFormateur`),
  CONSTRAINT `FK_Animations_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animations`
--

LOCK TABLES `animations` WRITE;
/*!40000 ALTER TABLE `animations` DISABLE KEYS */;
INSERT INTO `animations` VALUES (1,2,5),(2,1,3),(3,2,2),(4,4,5),(5,1,4),(6,3,1),(7,4,3),(8,4,2);
/*!40000 ALTER TABLE `animations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constitutions`
--

DROP TABLE IF EXISTS `constitutions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constitutions` (
  `idConstitution` int(11) NOT NULL AUTO_INCREMENT,
  `idMatiere` int(11) DEFAULT NULL,
  `idFormation` int(11) DEFAULT NULL,
  PRIMARY KEY (`idConstitution`),
  KEY `FK_Constitutions_Matieres` (`idMatiere`),
  KEY `FK_Constitutions_Formations` (`idFormation`),
  CONSTRAINT `FK_Constitutions_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`),
  CONSTRAINT `FK_Constitutions_Matieres` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constitutions`
--

LOCK TABLES `constitutions` WRITE;
/*!40000 ALTER TABLE `constitutions` DISABLE KEYS */;
INSERT INTO `constitutions` VALUES (1,1,1),(2,3,2),(3,2,3),(4,2,4),(5,3,5);
/*!40000 ALTER TABLE `constitutions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formateurs`
--

DROP TABLE IF EXISTS `formateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formateurs` (
  `idFormateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomFormateur` varchar(25) NOT NULL,
  `prenomFormateur` varchar(25) NOT NULL,
  PRIMARY KEY (`idFormateur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formateurs`
--

LOCK TABLES `formateurs` WRITE;
/*!40000 ALTER TABLE `formateurs` DISABLE KEYS */;
INSERT INTO `formateurs` VALUES (1,'Poix','Martine'),(2,'Dubois','Thomas'),(3,'Butterdroghe','Hervé'),(4,'Batzic','Jean Paul');
/*!40000 ALTER TABLE `formateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formations`
--

DROP TABLE IF EXISTS `formations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formations` (
  `idFormation` int(11) NOT NULL AUTO_INCREMENT,
  `libelleFormation` varchar(50) NOT NULL,
  `idGroupe` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFormation`),
  KEY `FK_Formations_Groupes` (`idGroupe`),
  CONSTRAINT `FK_Formations_Groupes` FOREIGN KEY (`idGroupe`) REFERENCES `groupes` (`idGroupe`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formations`
--

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` VALUES (1,'TSAII',2),(2,'TRTE',3),(3,'DWWM',1),(4,'CDA',1),(5,'TSSR',3);
/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groupes` (
  `idGroupe` int(11) NOT NULL AUTO_INCREMENT,
  `libelleGroupe` varchar(50) NOT NULL,
  PRIMARY KEY (`idGroupe`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groupes`
--

LOCK TABLES `groupes` WRITE;
/*!40000 ALTER TABLE `groupes` DISABLE KEYS */;
INSERT INTO `groupes` VALUES (1,'Informatique'),(2,'Automatisme'),(3,'Reseau');
/*!40000 ALTER TABLE `groupes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hebergements`
--

DROP TABLE IF EXISTS `hebergements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hebergements` (
  `idHebergement` int(11) NOT NULL AUTO_INCREMENT,
  `libelleHebergement` varchar(50) NOT NULL,
  PRIMARY KEY (`idHebergement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hebergements`
--

LOCK TABLES `hebergements` WRITE;
/*!40000 ALTER TABLE `hebergements` DISABLE KEYS */;
INSERT INTO `hebergements` VALUES (1,'AFPA'),(2,'AUTRE');
/*!40000 ALTER TABLE `hebergements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matieres` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(25) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES (1,'Sport'),(2,'Français'),(3,'Math');
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stagiaires`
--

DROP TABLE IF EXISTS `stagiaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stagiaires` (
  `idStagiaire` int(11) NOT NULL AUTO_INCREMENT,
  `nomStagiaire` varchar(25) NOT NULL,
  `prenomStagiaire` varchar(25) DEFAULT NULL,
  `adresseStagiaire` varchar(50) DEFAULT NULL,
  `ville` varchar(25) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `telStagiaire` varchar(14) DEFAULT NULL,
  `dateEntree` date NOT NULL,
  `genreStagiaire` varchar(1) NOT NULL,
  `dateNaissance` date NOT NULL,
  `idFormation` int(11) NOT NULL,
  `idHebergement` int(11) NOT NULL,
  `idFormateur` int(11) NOT NULL,
  PRIMARY KEY (`idStagiaire`),
  KEY `FK_Stagiaires_Formations` (`idFormation`),
  KEY `FK_Stagiaires_Hebergements` (`idHebergement`),
  KEY `FK_Stagiaires_Formateurs` (`idFormateur`),
  CONSTRAINT `FK_Stagiaires_Formateurs` FOREIGN KEY (`idFormateur`) REFERENCES `formateurs` (`idFormateur`),
  CONSTRAINT `FK_Stagiaires_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`),
  CONSTRAINT `FK_Stagiaires_Hebergements` FOREIGN KEY (`idHebergement`) REFERENCES `hebergements` (`idHebergement`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stagiaires`
--

LOCK TABLES `stagiaires` WRITE;
/*!40000 ALTER TABLE `stagiaires` DISABLE KEYS */;
INSERT INTO `stagiaires` VALUES (1,'roblin','lea','12,bd de la liberte','calais',62100,'21345678','2014-09-01','F','1995-01-14',5,2,2),(2,'macarthur','leon','121,bd gambetta','calais',62100,'21-30-65-09','2014-09-01','M','1994-04-12',3,2,1),(3,'minol','luc','9,rue des prairies','boulogne',62200,'21-30-20-10','2014-09-01','M','1997-03-12',2,2,2),(4,'minol','sophie','12,rue des capucines','wimereux',62930,'21-89-04-30','2014-09-01','F','1996-03-21',5,2,4),(5,'minol','marc','67,allee ronde','marcq',62300,'21-90-87-65','2014-09-01','M','1993-02-05',3,2,1),(6,'vendraux','marc','5,rue de marseille','calais',62100,'21-96-00-09','2013-09-01','M','1996-01-21',4,2,1),(7,'vendermaele','helene','456,rue de paris','boulogne',62200,'21-45-45-60','2014-09-01','F','1995-03-30',5,2,2),(8,'besson','loic','3,allee carpentier','dunkerque',59300,'28-90-89-78','2014-09-01','M','1994-05-21',1,1,3),(9,'godart','jean-paul','123,rue de lens','marck',59870,'28-09-87-65','2013-09-01','M','1993-01-12',1,1,3),(10,'beaux','marie','1,allee des cygnes','dunkerque',59100,'21-30-87-90','2014-09-01','F','1996-04-12',2,2,2),(11,'turini','elsa','12,route de paris','boulogne',62200,'21-32-47-97','2014-09-01','F','1996-07-17',1,2,3),(12,'torelle','elise','123,vallee du denacre','boulogne',62200,'21-67-86-90','2014-09-01','F','1997-04-16',3,1,1),(13,'pharis','pierre','12,avenue foch','calais',62100,'21-21-85-90','2014-09-01','M','1996-03-18',4,1,1),(14,'ephyre','luc','12,rue de lyon','calais',62100,'21-35-32-90','2014-09-01','M','1995-01-21',3,1,4),(15,'leclercq','jules','12,allee des ravins','boulogne',62200,'21-36-71-92','2014-09-01','M','1994-05-19',3,2,1),(16,'dupont','luc','21,avenue monsigny','calais',62200,'21-21-34-99','2014-09-01','M','1996-11-02',2,2,2),(17,'marke','loic','312,route de paris','wimereux',62930,'21-87-87-71','2014-09-01','M','1996-11-12',5,1,4),(18,'dewa','leon','121,allee des eglantines','dunkerque',59100,'28-30-87-90','2014-09-01','M','1997-04-03',2,1,4);
/*!40000 ALTER TABLE `stagiaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivis`
--

DROP TABLE IF EXISTS `suivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suivis` (
  `idSuivi` int(11) NOT NULL AUTO_INCREMENT,
  `idMatiere` int(11) DEFAULT NULL,
  `idStagiaire` int(11) DEFAULT NULL,
  `note` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`idSuivi`),
  KEY `FK_Suivis_Matieres` (`idMatiere`),
  KEY `FK_Suivis_Stagiaires` (`idStagiaire`),
  CONSTRAINT `FK_Suivis_Matieres` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`),
  CONSTRAINT `FK_Suivis_Stagiaires` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaires` (`idStagiaire`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivis`
--

LOCK TABLES `suivis` WRITE;
/*!40000 ALTER TABLE `suivis` DISABLE KEYS */;
INSERT INTO `suivis` VALUES (1,3,1,15.40),(2,2,2,12.80),(3,1,3,13.00),(4,3,4,14.00),(5,2,5,14.90),(6,1,6,15.90),(7,3,7,16.00),(8,1,8,17.00),(9,2,9,17.80),(10,1,10,18.00),(11,1,11,11.80),(12,3,12,13.80),(13,2,13,18.50),(14,2,14,17.50),(15,1,15,12.30),(16,3,16,15.40),(17,1,17,19.00),(18,2,18,13.50);
/*!40000 ALTER TABLE `suivis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-02 11:20:04
