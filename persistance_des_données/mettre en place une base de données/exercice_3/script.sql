CREATE DATABASE gestionDesLogements;
USE gestionDesLogements;

DROP TABLE IF EXISTS Individus;
DROP TABLE IF EXISTS Logements;
DROP TABLE IF EXISTS Quatiers;
DROP TABLE IF EXISTS TypesLogements;
DROP TABLE IF EXISTS Communes;

CREATE TABLE Individus(
   idIndividu INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(35)  NOT NULL,
   prenom VARCHAR(30)  NOT NULL,
   dateNaissance DATE,
   numTel VARCHAR(12)
);

CREATE TABLE Logements(
   idLogement INT AUTO_INCREMENT PRIMARY KEY,
   numero VARCHAR(5)  NOT NULL,
   rue VARCHAR(60)  NOT NULL,
   superficie INT,
   loyer DECIMAL(15,2)
);

CREATE TABLE Quartiers(
   idQuartier INT AUTO_INCREMENT PRIMARY KEY,
   libelleQuartier VARCHAR(35)  NOT NULL
);

CREATE TABLE TypesLogements(
   idTypeLogement INT AUTO_INCREMENT PRIMARY KEY,
   classementLogement VARCHAR(25)  NOT NULL,
   chargeForfaitaire DECIMAL(15,2)   NOT NULL
);

CREATE TABLE Communes(
   idCommune INT AUTO_INCREMENT PRIMARY KEY,
   nomCommune VARCHAR(45)  NOT NULL,
   distanceAgence DECIMAL(15,2),
   nombreHabitants INT
);
