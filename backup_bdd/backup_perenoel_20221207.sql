-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: perenoel
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
-- Current Database: `perenoel`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `perenoel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `perenoel`;

--
-- Table structure for table `cadeaux`
--

DROP TABLE IF EXISTS `cadeaux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadeaux` (
  `numCadeau` int(11) NOT NULL AUTO_INCREMENT,
  `designationCadeau` varchar(100) NOT NULL,
  `numEnfant` int(11) NOT NULL,
  PRIMARY KEY (`numCadeau`),
  KEY `FK_Cadeaux_Enfants` (`numEnfant`),
  CONSTRAINT `FK_Cadeaux_Enfants` FOREIGN KEY (`numEnfant`) REFERENCES `enfants` (`numEnfant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadeaux`
--

LOCK TABLES `cadeaux` WRITE;
/*!40000 ALTER TABLE `cadeaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `cadeaux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compose`
--

DROP TABLE IF EXISTS `compose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compose` (
  `idCompose` int(11) NOT NULL AUTO_INCREMENT,
  `numLutin` int(11) DEFAULT NULL,
  `numTraineau` int(11) DEFAULT NULL,
  `numTournee` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCompose`),
  KEY `FK_compose_Lutins` (`numLutin`),
  KEY `FK_compose_Traineaux` (`numTraineau`),
  KEY `FK_compose_Tournees` (`numTournee`),
  CONSTRAINT `FK_compose_Lutins` FOREIGN KEY (`numLutin`) REFERENCES `lutins` (`numLutin`),
  CONSTRAINT `FK_compose_Tournees` FOREIGN KEY (`numTournee`) REFERENCES `tournees` (`numTournee`),
  CONSTRAINT `FK_compose_Traineaux` FOREIGN KEY (`numTraineau`) REFERENCES `traineaux` (`numTraineau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compose`
--

LOCK TABLES `compose` WRITE;
/*!40000 ALTER TABLE `compose` DISABLE KEYS */;
/*!40000 ALTER TABLE `compose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enfants`
--

DROP TABLE IF EXISTS `enfants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enfants` (
  `numEnfant` int(11) NOT NULL AUTO_INCREMENT,
  `nomEnfant` varchar(50) NOT NULL,
  `prenomEnfant` varchar(50) NOT NULL,
  `adresseEnfant` varchar(150) NOT NULL,
  `genreEnfant` varchar(1) NOT NULL,
  `voeuEnfant` varchar(150) DEFAULT NULL,
  `pourcentageSagesse` int(11) NOT NULL,
  PRIMARY KEY (`numEnfant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enfants`
--

LOCK TABLES `enfants` WRITE;
/*!40000 ALTER TABLE `enfants` DISABLE KEYS */;
/*!40000 ALTER TABLE `enfants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lutins`
--

DROP TABLE IF EXISTS `lutins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lutins` (
  `numLutin` int(11) NOT NULL AUTO_INCREMENT,
  `nomLutin` varchar(50) NOT NULL,
  `prenomLutin` varchar(50) NOT NULL,
  PRIMARY KEY (`numLutin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lutins`
--

LOCK TABLES `lutins` WRITE;
/*!40000 ALTER TABLE `lutins` DISABLE KEYS */;
/*!40000 ALTER TABLE `lutins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rennes`
--

DROP TABLE IF EXISTS `rennes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rennes` (
  `idRenne` int(11) NOT NULL AUTO_INCREMENT,
  `nomRenne` varchar(50) NOT NULL,
  `genreRenne` varchar(1) NOT NULL,
  `dateNaissance` date NOT NULL,
  PRIMARY KEY (`idRenne`),
  UNIQUE KEY `nomRenne` (`nomRenne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rennes`
--

LOCK TABLES `rennes` WRITE;
/*!40000 ALTER TABLE `rennes` DISABLE KEYS */;
/*!40000 ALTER TABLE `rennes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsable` (
  `idResponsable` int(11) NOT NULL AUTO_INCREMENT,
  `numLutin` int(11) DEFAULT NULL,
  `numTraineau` int(11) DEFAULT NULL,
  `dateResponsabilite` date NOT NULL,
  PRIMARY KEY (`idResponsable`),
  KEY `FK_responsable_Lutins` (`numLutin`),
  KEY `FK_responsable_Traineaux` (`numTraineau`),
  CONSTRAINT `FK_responsable_Lutins` FOREIGN KEY (`numLutin`) REFERENCES `lutins` (`numLutin`),
  CONSTRAINT `FK_responsable_Traineaux` FOREIGN KEY (`numTraineau`) REFERENCES `traineaux` (`numTraineau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable`
--

LOCK TABLES `responsable` WRITE;
/*!40000 ALTER TABLE `responsable` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tournees`
--

DROP TABLE IF EXISTS `tournees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tournees` (
  `numTournee` int(11) NOT NULL AUTO_INCREMENT,
  `heureDepart` time NOT NULL,
  PRIMARY KEY (`numTournee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tournees`
--

LOCK TABLES `tournees` WRITE;
/*!40000 ALTER TABLE `tournees` DISABLE KEYS */;
/*!40000 ALTER TABLE `tournees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traineaux`
--

DROP TABLE IF EXISTS `traineaux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traineaux` (
  `numTraineau` int(11) NOT NULL AUTO_INCREMENT,
  `tailleTraineau` decimal(15,2) NOT NULL,
  `dateMiseEnService` date NOT NULL,
  `dateRevision` date DEFAULT NULL,
  `idRenne` int(11) NOT NULL,
  PRIMARY KEY (`numTraineau`),
  KEY `FK_Traineaux_Rennes` (`idRenne`),
  CONSTRAINT `FK_Traineaux_Rennes` FOREIGN KEY (`idRenne`) REFERENCES `rennes` (`idRenne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traineaux`
--

LOCK TABLES `traineaux` WRITE;
/*!40000 ALTER TABLE `traineaux` DISABLE KEYS */;
/*!40000 ALTER TABLE `traineaux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transporte`
--

DROP TABLE IF EXISTS `transporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transporte` (
  `idTransporte` int(11) NOT NULL AUTO_INCREMENT,
  `numTraineau` int(11) DEFAULT NULL,
  `numCadeau` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTransporte`),
  KEY `FK_transporte_Traineaux` (`numTraineau`),
  KEY `FK_transporte_Cadeaux` (`numCadeau`),
  CONSTRAINT `FK_transporte_Cadeaux` FOREIGN KEY (`numCadeau`) REFERENCES `cadeaux` (`numCadeau`),
  CONSTRAINT `FK_transporte_Traineaux` FOREIGN KEY (`numTraineau`) REFERENCES `traineaux` (`numTraineau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transporte`
--

LOCK TABLES `transporte` WRITE;
/*!40000 ALTER TABLE `transporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `transporte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 17:05:05
