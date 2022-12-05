-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: marquesmodelesvoitures
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
-- Current Database: `marquesmodelesvoitures`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `marquesmodelesvoitures` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `marquesmodelesvoitures`;

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `idModele` int(11) DEFAULT NULL,
  `idDate` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `FK_Commande_Modeles` (`idModele`),
  KEY `FK_Commande_Dates` (`idDate`),
  CONSTRAINT `FK_Commande_Dates` FOREIGN KEY (`idDate`) REFERENCES `dates` (`idDate`),
  CONSTRAINT `FK_Commande_Modeles` FOREIGN KEY (`idModele`) REFERENCES `modeles` (`idModele`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande`
--

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` VALUES (1,292,1),(2,3,2),(3,6,3),(4,6,4),(5,10,5),(6,7,6),(7,13,7),(8,12,8),(9,15,9),(10,14,10),(11,15,11),(12,16,12),(13,13,13),(14,16,14),(15,17,15),(16,28,16),(17,27,17),(18,19,18),(19,22,19),(20,33,20);
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dates`
--

DROP TABLE IF EXISTS `dates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dates` (
  `idDate` int(11) NOT NULL AUTO_INCREMENT,
  `dateCommande` date NOT NULL,
  `dateArrivee` date DEFAULT NULL,
  PRIMARY KEY (`idDate`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dates`
--

LOCK TABLES `dates` WRITE;
/*!40000 ALTER TABLE `dates` DISABLE KEYS */;
INSERT INTO `dates` VALUES (1,'2020-10-09','2021-03-09'),(2,'2021-05-15','2021-10-15'),(3,'2021-08-12','2022-01-12'),(4,'2022-05-18','2022-10-18'),(5,'2022-03-14','2022-08-14'),(6,'2021-12-03','2022-05-03'),(7,'2022-03-11','2022-08-11'),(8,'2020-01-31','2020-06-30'),(9,'2022-01-03','2022-06-03'),(10,'2021-04-20','2021-09-20'),(11,'2020-09-10','2021-02-10'),(12,'2022-06-22','2022-11-22'),(13,'2021-09-19','2022-02-19'),(14,'2021-02-10','2021-07-10'),(15,'2021-09-10','2022-02-10'),(16,'2022-04-05','2022-09-05'),(17,'2021-07-29','2021-12-29'),(18,'2020-05-14','2020-10-14'),(19,'2020-10-19','2021-03-19'),(20,'2020-02-26','2020-07-26');
/*!40000 ALTER TABLE `dates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `numMarque` int(11) NOT NULL,
  `nomMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,1,'ALFA ROMEO'),(2,2,'AUDI'),(3,3,'BENTLEY'),(4,4,'BMW'),(5,5,'CADILLAC'),(6,6,'CHEVROLET'),(7,7,'CITROEN'),(8,8,'DACIA'),(9,9,'FERRARI'),(10,10,'FIAT'),(11,11,'FORD'),(12,12,'HONDA'),(13,13,'HYUNDAI'),(14,14,'INFINITI'),(15,15,'JAGUAR'),(16,16,'JEEP'),(17,17,'KIA'),(18,18,'LADA'),(19,19,'LAMBORGHINI'),(20,20,'LANCIA'),(21,21,'LAND ROVER'),(22,22,'LEXUS'),(23,23,'MASERATI'),(24,24,'MAZDA'),(25,25,'MERCEDES'),(26,26,'MINI'),(27,27,'MITSUBISHI'),(28,28,'NISSAN'),(29,29,'OPEL'),(30,30,'PEUGEOT'),(31,31,'PORSCHE'),(32,32,'RENAULT'),(33,33,'ROLLS ROYCE'),(34,34,'SEAT'),(35,35,'SKODA'),(36,36,'SMART'),(37,37,'SSANGYONG'),(38,38,'SUBARU'),(39,39,'SUZUKI'),(40,40,'TESLA'),(41,41,'TOYOTA'),(42,42,'VOLKSWAGEN'),(43,43,'VOLVO');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modeles`
--

DROP TABLE IF EXISTS `modeles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modeles` (
  `idModele` int(11) NOT NULL AUTO_INCREMENT,
  `nomModele` varchar(50) NOT NULL,
  `idMarque` int(11) NOT NULL,
  PRIMARY KEY (`idModele`),
  KEY `FK_Modeles_Marques` (`idMarque`),
  CONSTRAINT `FK_Modeles_Marques` FOREIGN KEY (`idMarque`) REFERENCES `marques` (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=426 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modeles`
--

LOCK TABLES `modeles` WRITE;
/*!40000 ALTER TABLE `modeles` DISABLE KEYS */;
INSERT INTO `modeles` VALUES (1,'159',1),(2,'170',1),(3,'8C',1),(4,'A5',1),(5,'GIULIETTA',1),(6,'MITO',1),(7,'SPIDER',1),(8,'A1',2),(9,'A3',2),(10,'A4',2),(11,'A5',2),(12,'A6',2),(13,'A7',2),(14,'A8',2),(15,'Q3',2),(16,'Q5',2),(17,'Q7',2),(18,'R8',2),(19,'TT',2),(20,'CONTINENTAL',3),(21,'FLYING SPUR',3),(22,'MULSANNE',3),(23,'114',4),(24,'116',4),(25,'118',4),(26,'120',4),(27,'125',4),(28,'214',4),(29,'216',4),(30,'218',4),(31,'220',4),(32,'225',4),(33,'228',4),(34,'235',4),(35,'316',4),(36,'318',4),(37,'320',4),(38,'325',4),(39,'328',4),(40,'330',4),(41,'335',4),(42,'418',4),(43,'420',4),(44,'425',4),(45,'428',4),(46,'430',4),(47,'435',4),(48,'518',4),(49,'520',4),(50,'525',4),(51,'528',4),(52,'530',4),(53,'535',4),(54,'550',4),(55,'640',4),(56,'650',4),(57,'730',4),(58,'740',4),(59,'750',4),(60,'760',4),(61,'I3',4),(62,'I8',4),(63,'M3',4),(64,'M4',4),(65,'M5',4),(66,'SERIE 3 ACTIVEHYBRID',4),(67,'SERIE 5 ACTIVEHYBRID',4),(68,'SERIE 7 ACTIVEHYBRID',4),(69,'X1',4),(70,'X3',4),(71,'X4',4),(72,'X5',4),(73,'X6',4),(74,'Z4',4),(75,'ATS',5),(76,'CTS',5),(77,'ESCALADE',5),(78,'SRX',5),(79,'CAMARO',6),(80,'CORVETTE',6),(81,'BERLINGO',7),(82,'C-ZERO',7),(83,'C1',7),(84,'C3',7),(85,'C3 PICASSO',7),(86,'C4',7),(87,'C4 AIRCROSS',7),(88,'C4 CACTUS',7),(89,'C4 PICASSO',7),(90,'C5',7),(91,'C8',7),(92,'DS3',7),(93,'DS4',7),(94,'DS5',7),(95,'JUMPER',7),(96,'JUMPY',7),(97,'NEMO',7),(98,'DOKKER',8),(99,'DUSTER',8),(100,'LODGY',8),(101,'LOGAN',8),(102,'SANDERO',8),(103,'458',9),(104,'CALIFORNIA',9),(105,'F12',9),(106,'FF',9),(107,'LAFERRARI',9),(108,'500',10),(109,'500L',10),(110,'BRAVO',10),(111,'DOBLO',10),(112,'DUCATO',10),(113,'FIORINO',10),(114,'FREEMONT',10),(115,'PANDA',10),(116,'PUNTO',10),(117,'SCUDO',10),(118,'SEDICI',10),(119,'B-MAX',11),(120,'C-MAX',11),(121,'ECOSPORT',11),(122,'FIESTA',11),(123,'FOCUS',11),(124,'KA',11),(125,'KUGA',11),(126,'MONDEO',11),(127,'S-MAX',11),(128,'TOURNEO CONNECT',11),(129,'TOURNEO COURIER',11),(130,'TOURNEO CUSTOM',11),(131,'TRANSIT',11),(132,'TRANSIT CUSTOM',11),(133,'ACCORD',12),(134,'CIVIC',12),(135,'CR-V',12),(136,'CR-Z',12),(137,'INSIGHT',12),(138,'JAZZ',12),(139,'GENESIS',13),(140,'I 10',13),(141,'I 20',13),(142,'I 30',13),(143,'I 40',13),(144,'IX 20',13),(145,'IX 35',13),(146,'SANTA FE',13),(147,'VELOSTER',13),(148,'Q50',14),(149,'Q60',14),(150,'Q70',14),(151,'QX50',14),(152,'QX70',14),(153,'F-TYPE',15),(154,'XF',15),(155,'XJ',15),(156,'CHEROKEE',16),(157,'COMPASS',16),(158,'GRAND CHEROKEE',16),(159,'WRANGLER',16),(160,'CARENS',17),(161,'CEED',17),(162,'OPTIMA',17),(163,'PICANTO',17),(164,'RIO',17),(165,'SORENTO',17),(166,'SOUL',17),(167,'SPORTAGE',17),(168,'VENGA',17),(169,'NIVA',18),(170,'AVENTADOR',19),(171,'GALLARDO',19),(172,'HURACAN',19),(173,'DELTA',20),(174,'FLAVIA',20),(175,'MUSA',20),(176,'THEMA',20),(177,'VOYAGER',20),(178,'YPSILON',20),(179,'DISCOVERY',21),(180,'DISCOVERY SPORT',21),(181,'FREELANDER',21),(182,'RANGE ROVER',21),(183,'RANGE ROVER EVOQUE',21),(184,'RANGE ROVER SPORT',21),(185,'CT',22),(186,'GS',22),(187,'IS',22),(188,'LFA',22),(189,'LS',22),(190,'NX',22),(191,'RC',22),(192,'RX',22),(193,'GHIBLI',23),(194,'GRANCABRIO',23),(195,'GRANTURISMO',23),(196,'QUATTROPORTE',23),(197,'2',24),(198,'3',24),(199,'5',24),(200,'6',24),(201,'CX-5',24),(202,'MX-5',24),(203,'A 160',25),(204,'A 180',25),(205,'A 200',25),(206,'A 220',25),(207,'A 250',25),(208,'A 45 AMG',25),(209,'AMG GT',25),(210,'AMG GT S',25),(211,'B 160',25),(212,'B 180',25),(213,'B 200',25),(214,'B 220',25),(215,'B 250',25),(216,'B ED',25),(217,'C 180',25),(218,'C 200',25),(219,'C 220',25),(220,'C 250',25),(221,'C 300',25),(222,'C 350',25),(223,'C 400',25),(224,'C 63 AMG',25),(225,'C 63 S-AMG',25),(226,'CITAN',25),(227,'CL 63 AMG',25),(228,'CLA 180',25),(229,'CLA 200',25),(230,'CLA 220',25),(231,'CLA 250',25),(232,'CLA 45 AMG',25),(233,'CLASSE V',25),(234,'CLS 220',25),(235,'CLS 250',25),(236,'CLS 350',25),(237,'CLS 400',25),(238,'CLS 500',25),(239,'CLS 63 AMG',25),(240,'E 200',25),(241,'E 220',25),(242,'E 250',25),(243,'E 300',25),(244,'E 320',25),(245,'E 350',25),(246,'E 400',25),(247,'E 500',25),(248,'E 63 AMG',25),(249,'G 350',25),(250,'G 500',25),(251,'G 63 AMG',25),(252,'G 65 AMG',25),(253,'GL 350',25),(254,'GL 400',25),(255,'GL 500',25),(256,'GL 63 AMG',25),(257,'GLA 180',25),(258,'GLA 200',25),(259,'GLA 220',25),(260,'GLA 250',25),(261,'GLA 45 AMG',25),(262,'ML 250',25),(263,'ML 350',25),(264,'ML 400',25),(265,'ML 500',25),(266,'ML 63 AMG',25),(267,'S 300',25),(268,'S 350',25),(269,'S 400',25),(270,'S 500',25),(271,'S 600',25),(272,'S 63 AMG',25),(273,'S 65 AMG',25),(274,'SL 350',25),(275,'SL 400',25),(276,'SL 500',25),(277,'SL 63 AMG',25),(278,'SL 65 AMG',25),(279,'SLK 200',25),(280,'SLK 250',25),(281,'SLK 350',25),(282,'SLK 55 AMG',25),(283,'SLS AMG GT S',25),(284,'SPRINTER',25),(285,'VITO',25),(286,'CABRIO',26),(287,'COUNTRYMAN',26),(288,'COUPE',26),(289,'MINI',26),(290,'PACEMAN',26),(291,'ROADSTER',26),(292,'ASX',27),(293,'I-MIEV',27),(294,'OUTLANDER',27),(295,'PAJERO',27),(296,'SPACE STAR',27),(297,'370Z',28),(298,'GT-R',28),(299,'JUKE',28),(300,'LEAF',28),(301,'MICRA',28),(302,'MURANO',28),(303,'NOTE',28),(304,'NV200',28),(305,'NV300',28),(306,'NV400',28),(307,'PULSAR',28),(308,'QASHQAI',28),(309,'X-TRAIL',28),(310,'ADAM',29),(311,'AGILA',29),(312,'AMPERA',29),(313,'ANTARA',29),(314,'ASTRA',29),(315,'CASCADA',29),(316,'COMBO',29),(317,'CORSA',29),(318,'INSIGNIA',29),(319,'MERIVA',29),(320,'MOKKA',29),(321,'MOVANO',29),(322,'VIVARO',29),(323,'ZAFIRA',29),(324,'108',30),(325,'2008',30),(326,'207',30),(327,'208',30),(328,'3008',30),(329,'308',30),(330,'4008',30),(331,'5008',30),(332,'508',30),(333,'BIPPER',30),(334,'BOXER',30),(335,'EXPERT',30),(336,'ION',30),(337,'PARTNER',30),(338,'RCZ',30),(339,'911',31),(340,'918',31),(341,'BOXSTER',31),(342,'CAYENNE',31),(343,'CAYMAN',31),(344,'MACAN',31),(345,'PANAMERA',31),(346,'CAPTUR',32),(347,'CLIO',32),(348,'ESPACE',32),(349,'KANGOO',32),(350,'KOLEOS',32),(351,'LAGUNA',32),(352,'LATITUDE',32),(353,'MASTER',32),(354,'MEGANE',32),(355,'SCENIC',32),(356,'TRAFIC',32),(357,'TWINGO',32),(358,'ZOE',32),(359,'GHOST',33),(360,'PHANTOM',33),(361,'WRAITH',33),(362,'ALHAMBRA',34),(363,'ALTEA',34),(364,'IBIZA',34),(365,'LEON',34),(366,'MII',34),(367,'TOLEDO',34),(368,'CITIGO',35),(369,'FABIA',35),(370,'OCTAVIA',35),(371,'RAPID',35),(372,'ROOMSTER',35),(373,'SUPERB',35),(374,'YETI',35),(375,'FORFOUR',36),(376,'FORTWO',36),(377,'KORANDO',37),(378,'REXTON',37),(379,'RODIUS',37),(380,'BRZ',38),(381,'FORESTER',38),(382,'WRX',38),(383,'XV',38),(384,'CELERIO',39),(385,'JIMNY',39),(386,'SWIFT',39),(387,'SX4',39),(388,'VITARA',39),(389,'MODEL S',40),(390,'AURIS',41),(391,'AVENSIS',41),(392,'AYGO',41),(393,'GT86',41),(394,'IQ',41),(395,'LAND CRUISER',41),(396,'PRIUS',41),(397,'PRIUS+',41),(398,'RAV4',41),(399,'VERSO',41),(400,'VERSO S',41),(401,'YARIS',41),(402,'CC',42),(403,'COCCINELLE',42),(404,'CRAFTER',42),(405,'EOS',42),(406,'GOLF',42),(407,'GOLF SPORTSVAN',42),(408,'JETTA',42),(409,'PASSAT',42),(410,'PHAETON',42),(411,'POLO',42),(412,'SCIROCCO',42),(413,'SHARAN',42),(414,'TIGUAN',42),(415,'TOUAREG',42),(416,'TOURAN',42),(417,'UP!',42),(418,'S60',43),(419,'S80',43),(420,'V40',43),(421,'V60',43),(422,'V70',43),(423,'XC60',43),(424,'XC70',43),(425,'XC90',43);
/*!40000 ALTER TABLE `modeles` ENABLE KEYS */;
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
