-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: villagegreen
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
-- Current Database: `villagegreen`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `villagegreen` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `villagegreen`;

--
-- Table structure for table `adresses`
--

DROP TABLE IF EXISTS `adresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adresses` (
  `idAdresse` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(100) NOT NULL,
  `complementAdresse` varchar(50) DEFAULT NULL,
  `numTel` varchar(12) DEFAULT NULL,
  `numFixe` varchar(12) DEFAULT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idAdresse`),
  KEY `FK_Adresses_Villes` (`idVille`),
  CONSTRAINT `FK_Adresses_Villes` FOREIGN KEY (`idVille`) REFERENCES `villes` (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresses`
--

LOCK TABLES `adresses` WRITE;
/*!40000 ALTER TABLE `adresses` DISABLE KEYS */;
INSERT INTO `adresses` VALUES (1,'15 rue de la mairie',NULL,'33600000000','33300000000',2),(2,'2 rue de la préfecture','Appartement 24','33600000000',NULL,4),(3,'6 rue de béthune',NULL,'33600000000','33300000000',1),(4,'2 rue du tribunal',NULL,'33600000000','33300000000',5),(5,'104 rue d\'aire',NULL,'33600000000',NULL,7),(6,'3501 rue du parc',NULL,'33600000000','33300000000',6),(7,'740 rue des monts',NULL,'33600000000',NULL,3);
/*!40000 ALTER TABLE `adresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applique`
--

DROP TABLE IF EXISTS `applique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applique` (
  `idApplique` int(11) NOT NULL AUTO_INCREMENT,
  `idProduit` int(11) DEFAULT NULL,
  `idTva` int(11) DEFAULT NULL,
  `dateTva` date DEFAULT NULL,
  PRIMARY KEY (`idApplique`),
  KEY `FK_applique_Produits` (`idProduit`),
  KEY `FK_applique_Tva` (`idTva`),
  CONSTRAINT `FK_applique_Produits` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`),
  CONSTRAINT `FK_applique_Tva` FOREIGN KEY (`idTva`) REFERENCES `tva` (`idTva`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applique`
--

LOCK TABLES `applique` WRITE;
/*!40000 ALTER TABLE `applique` DISABLE KEYS */;
INSERT INTO `applique` VALUES (1,1,1,'2022-11-28'),(2,2,2,'2022-11-28'),(3,3,2,'2022-11-28'),(4,4,1,'2022-11-28'),(5,5,1,'2022-11-28');
/*!40000 ALTER TABLE `applique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoriesclients`
--

DROP TABLE IF EXISTS `categoriesclients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoriesclients` (
  `idCatClient` int(11) NOT NULL AUTO_INCREMENT,
  `libCatClient` varchar(50) NOT NULL,
  PRIMARY KEY (`idCatClient`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoriesclients`
--

LOCK TABLES `categoriesclients` WRITE;
/*!40000 ALTER TABLE `categoriesclients` DISABLE KEYS */;
INSERT INTO `categoriesclients` VALUES (1,'Particulier'),(2,'Professionnel');
/*!40000 ALTER TABLE `categoriesclients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `coefClient` int(11) NOT NULL,
  `refClient` varchar(5) NOT NULL,
  `idCatClient` int(11) NOT NULL,
  PRIMARY KEY (`idClient`),
  UNIQUE KEY `refClient` (`refClient`),
  KEY `FK_Clients_CategoriesClients` (`idCatClient`),
  CONSTRAINT `FK_Clients_CategoriesClients` FOREIGN KEY (`idCatClient`) REFERENCES `categoriesclients` (`idCatClient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,2,'r8s5d',2),(2,1,'re46f',1),(3,5,'q45fe',1),(4,3,'4e6fs',2);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commandes` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `numCommande` varchar(10) NOT NULL,
  `dateCommande` date NOT NULL,
  `idClient` int(11) NOT NULL,
  `idAdresse` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`),
  UNIQUE KEY `numCommande` (`numCommande`),
  KEY `FK_Commandes_Clients` (`idClient`),
  KEY `FK_Commandes_Adresses` (`idAdresse`),
  CONSTRAINT `FK_Commandes_Adresses` FOREIGN KEY (`idAdresse`) REFERENCES `adresses` (`idAdresse`),
  CONSTRAINT `FK_Commandes_Clients` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
INSERT INTO `commandes` VALUES (1,'1579875647','2022-11-24',1,5),(2,'7824938248','2021-07-15',2,3),(3,'9854673485','2020-05-07',3,7),(4,'4723541584','2022-02-16',4,2);
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contient`
--

DROP TABLE IF EXISTS `contient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contient` (
  `idContient` int(11) NOT NULL AUTO_INCREMENT,
  `idProduit` int(11) DEFAULT NULL,
  `idCommande` int(11) DEFAULT NULL,
  `quantiteProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`idContient`),
  KEY `FK_contient_Produits` (`idProduit`),
  KEY `FK_contient_Commandes` (`idCommande`),
  CONSTRAINT `FK_contient_Commandes` FOREIGN KEY (`idCommande`) REFERENCES `commandes` (`idCommande`),
  CONSTRAINT `FK_contient_Produits` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contient`
--

LOCK TABLES `contient` WRITE;
/*!40000 ALTER TABLE `contient` DISABLE KEYS */;
INSERT INTO `contient` VALUES (1,4,2,5),(2,1,3,5),(3,5,1,2),(4,2,4,25);
/*!40000 ALTER TABLE `contient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fourni`
--

DROP TABLE IF EXISTS `fourni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fourni` (
  `idFourni` int(11) NOT NULL AUTO_INCREMENT,
  `idProduit` int(11) DEFAULT NULL,
  `idFournisseur` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFourni`),
  KEY `FK_fourni_Produits` (`idProduit`),
  KEY `FK_fourni_Fournisseurs` (`idFournisseur`),
  CONSTRAINT `FK_fourni_Fournisseurs` FOREIGN KEY (`idFournisseur`) REFERENCES `fournisseurs` (`idFournisseur`),
  CONSTRAINT `FK_fourni_Produits` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fourni`
--

LOCK TABLES `fourni` WRITE;
/*!40000 ALTER TABLE `fourni` DISABLE KEYS */;
INSERT INTO `fourni` VALUES (1,1,2),(2,2,3),(3,3,2),(4,4,2),(5,5,1);
/*!40000 ALTER TABLE `fourni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fournisseurs` (
  `idFournisseur` int(11) NOT NULL AUTO_INCREMENT,
  `nomFournisseur` varchar(100) NOT NULL,
  PRIMARY KEY (`idFournisseur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fournisseurs`
--

LOCK TABLES `fournisseurs` WRITE;
/*!40000 ALTER TABLE `fournisseurs` DISABLE KEYS */;
INSERT INTO `fournisseurs` VALUES (1,'SuperElectro'),(2,'SuperMaison'),(3,'SuperJouets');
/*!40000 ALTER TABLE `fournisseurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livre`
--

DROP TABLE IF EXISTS `livre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livre` (
  `idLivre` int(11) NOT NULL AUTO_INCREMENT,
  `idAdresse` int(11) DEFAULT NULL,
  `idCommande` int(11) DEFAULT NULL,
  `dateLivraison` date DEFAULT NULL,
  `quantiteLivraison` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLivre`),
  KEY `FK_livre_Adresses` (`idAdresse`),
  KEY `FK_livre_Commandes` (`idCommande`),
  CONSTRAINT `FK_livre_Adresses` FOREIGN KEY (`idAdresse`) REFERENCES `adresses` (`idAdresse`),
  CONSTRAINT `FK_livre_Commandes` FOREIGN KEY (`idCommande`) REFERENCES `commandes` (`idCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livre`
--

LOCK TABLES `livre` WRITE;
/*!40000 ALTER TABLE `livre` DISABLE KEYS */;
INSERT INTO `livre` VALUES (1,3,2,'2021-07-20',5),(2,5,1,'2022-12-05',2),(3,2,4,'2022-02-28',25),(4,7,3,'2020-05-27',5);
/*!40000 ALTER TABLE `livre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paie`
--

DROP TABLE IF EXISTS `paie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paie` (
  `idPaie` int(11) NOT NULL AUTO_INCREMENT,
  `idReglement` int(11) DEFAULT NULL,
  `idCommande` int(11) DEFAULT NULL,
  `datePaiement` date DEFAULT NULL,
  `montantPaiement` varchar(50) NOT NULL,
  PRIMARY KEY (`idPaie`),
  KEY `FK_paie_Reglements` (`idReglement`),
  KEY `FK_paie_Commandes` (`idCommande`),
  CONSTRAINT `FK_paie_Commandes` FOREIGN KEY (`idCommande`) REFERENCES `commandes` (`idCommande`),
  CONSTRAINT `FK_paie_Reglements` FOREIGN KEY (`idReglement`) REFERENCES `reglements` (`idReglement`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paie`
--

LOCK TABLES `paie` WRITE;
/*!40000 ALTER TABLE `paie` DISABLE KEYS */;
INSERT INTO `paie` VALUES (1,2,2,'2021-07-18','80'),(2,1,1,'2022-12-01','758'),(3,1,3,'2020-05-07','465'),(4,2,4,'2022-02-16','55');
/*!40000 ALTER TABLE `paie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `libProduit` varchar(50) NOT NULL,
  `descProduit` text,
  `refProduit` varchar(5) NOT NULL,
  `prixProduit` decimal(15,2) DEFAULT NULL,
  `photoProduit` varchar(150) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `idRubrique` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  UNIQUE KEY `refProduit` (`refProduit`),
  KEY `FK_Produits_Rubriques` (`idRubrique`),
  CONSTRAINT `FK_Produits_Rubriques` FOREIGN KEY (`idRubrique`) REFERENCES `rubriques` (`idRubrique`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'chaise','chaise très confortable','f7s9e',30.00,'',20,5),(2,'poupée','poupée parfaite comme cadeau d\'anniversaire ou de noël','h8d7g',15.00,'../IMG/poupee.png',150,1),(3,'tournevis','Tournevis parfait pour vos tâches du quotidien','c8s23',15.00,'',70,3),(4,'canapé','canapé très confortable','h8sdg',200.00,'',25,2),(5,'machine à laver','machine à laver parfaite pour vos vêtements','d8g3d',345.00,'',10,4);
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reglements`
--

DROP TABLE IF EXISTS `reglements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reglements` (
  `idReglement` int(11) NOT NULL AUTO_INCREMENT,
  `typePaiement` varchar(50) NOT NULL,
  PRIMARY KEY (`idReglement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reglements`
--

LOCK TABLES `reglements` WRITE;
/*!40000 ALTER TABLE `reglements` DISABLE KEYS */;
INSERT INTO `reglements` VALUES (1,'Différé'),(2,'Comptant');
/*!40000 ALTER TABLE `reglements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `libRole` varchar(50) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'employe'),(3,'client');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubriques` (
  `idRubrique` int(11) NOT NULL AUTO_INCREMENT,
  `libRubrique` varchar(50) NOT NULL,
  `idRubrique_1` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRubrique`),
  KEY `FK_Rubriques_Rubriques` (`idRubrique_1`),
  CONSTRAINT `FK_Rubriques_Rubriques` FOREIGN KEY (`idRubrique_1`) REFERENCES `rubriques` (`idRubrique`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubriques`
--

LOCK TABLES `rubriques` WRITE;
/*!40000 ALTER TABLE `rubriques` DISABLE KEYS */;
INSERT INTO `rubriques` VALUES (1,'jouets',NULL),(2,'meubles',NULL),(3,'outils',NULL),(4,'electromenager',NULL),(5,'meubles de bureau',2);
/*!40000 ALTER TABLE `rubriques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tva`
--

DROP TABLE IF EXISTS `tva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tva` (
  `idTva` int(11) NOT NULL AUTO_INCREMENT,
  `tauxTva` int(11) NOT NULL,
  PRIMARY KEY (`idTva`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tva`
--

LOCK TABLES `tva` WRITE;
/*!40000 ALTER TABLE `tva` DISABLE KEYS */;
INSERT INTO `tva` VALUES (1,20),(2,10);
/*!40000 ALTER TABLE `tva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `emailUtilisateur` varchar(100) NOT NULL,
  `mdpUtilisateur` varchar(50) NOT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  UNIQUE KEY `emailUtilisateur` (`emailUtilisateur`),
  KEY `FK_Utilisateurs_Roles` (`idRole`),
  CONSTRAINT `FK_Utilisateurs_Roles` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'Dupont','David','d.david@test.test','test-1david',2),(2,'Doe','John','john.doe@test.fr','johnDoe!Test',1),(3,'Laporte','Claire','Claire.porte@test.test','Test_Claire-laporte1',3);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `villes` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(100) NOT NULL,
  `codePostalVille` varchar(5) NOT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `villes`
--

LOCK TABLES `villes` WRITE;
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` VALUES (1,'Hazebrouck','59190'),(2,'Lille','59000'),(3,'Dunkerque','59140'),(4,'Lyon','69000'),(5,'Paris','75000'),(6,'Toulouse','31000'),(7,'Nantes','44000');
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-05 12:05:05
