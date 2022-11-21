CREATE DATABASE IF NOT EXISTS gestionPlages;
USE gestionPlages;

DROP TABLE IF EXISTS Villes;
DROP TABLE IF EXISTS Plages;
DROP TABLE IF EXISTS NatureDeTerrain;
DROP TABLE IF EXISTS Responsables;
DROP TABLE IF EXISTS Departements;

CREATE TABLE Villes(
   numVille INT AUTO_INCREMENT PRIMARY KEY,
   nomVille VARCHAR(50)  NOT NULL,
   codePostalVille INT NOT NULL
);

CREATE TABLE Plages(
   numPlage INT AUTO_INCREMENT PRIMARY KEY,
   nomPlage VARCHAR(50)  NOT NULL,
   longueurPlage DECIMAL(15,2),
   nbAnnuelTouriste INT
);

CREATE TABLE NatureDeTerrain(
   numTerrain INT AUTO_INCREMENT PRIMARY KEY,
   LibNature VARCHAR(50)
);

CREATE TABLE Responsables(
   numResponsable INT AUTO_INCREMENT PRIMARY KEY,
   nomResponsable VARCHAR(50)  NOT NULL,
   prenomResponsable VARCHAR(50)  NOT NULL
);

CREATE TABLE Departements(
   numDepartement INT AUTO_INCREMENT PRIMARY KEY,
   nomDepartement VARCHAR(50)  NOT NULL
);