-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: atelier
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
-- Current Database: `atelier`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `atelier` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `atelier`;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,'tern'),(2,'zali'),(3,'Ford');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pieces` (
  `idPiece` int(11) NOT NULL AUTO_INCREMENT,
  `numPiece` int(11) DEFAULT NULL,
  `idReference` int(11) DEFAULT NULL,
  `idMarque` int(11) DEFAULT NULL,
  `idTypePiece` int(11) NOT NULL,
  PRIMARY KEY (`idPiece`),
  KEY `FK_Pieces_Reference` (`idReference`),
  KEY `FK_Pieces_Marques` (`idMarque`),
  KEY `FK_Pieces_TypesPieces` (`idTypePiece`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pieces`
--

LOCK TABLES `pieces` WRITE;
/*!40000 ALTER TABLE `pieces` DISABLE KEYS */;
INSERT INTO `pieces` VALUES (1,13,1,NULL,1),(2,140,2,NULL,2),(3,56,NULL,1,3),(4,13,3,2,4),(5,456,4,NULL,5),(6,NULL,5,3,6),(7,15,6,1,7),(8,18,6,1,7),(9,140,6,1,7);
/*!40000 ALTER TABLE `pieces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reference`
--

DROP TABLE IF EXISTS `reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reference` (
  `idReference` int(11) NOT NULL AUTO_INCREMENT,
  `nomReference` varchar(50) NOT NULL,
  PRIMARY KEY (`idReference`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reference`
--

LOCK TABLES `reference` WRITE;
/*!40000 ALTER TABLE `reference` DISABLE KEYS */;
INSERT INTO `reference` VALUES (1,'12d45fd'),(2,'17887d'),(3,'456232'),(4,'45788'),(5,'45sd544'),(6,'45sd89');
/*!40000 ALTER TABLE `reference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typespieces`
--

DROP TABLE IF EXISTS `typespieces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typespieces` (
  `idTypePiece` int(11) NOT NULL AUTO_INCREMENT,
  `nomTypePiece` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTypePiece`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typespieces`
--

LOCK TABLES `typespieces` WRITE;
/*!40000 ALTER TABLE `typespieces` DISABLE KEYS */;
INSERT INTO `typespieces` VALUES (1,'Vanne'),(2,'Capteur temp'),(3,'Verrin'),(4,'Levier'),(5,'Flexible'),(6,'Moteur'),(7,'Bouchon');
/*!40000 ALTER TABLE `typespieces` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 12:05:02
