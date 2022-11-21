DROP DATABASE IF EXISTS gestionPlagesContraintes;
CREATE DATABASE gestionPlagesContraintes DEFAULT CHARACTER SET utf8;
USE gestionPlagesContraintes;

CREATE TABLE Villes(
   numVille INT AUTO_INCREMENT PRIMARY KEY,
   nomVille VARCHAR(50)  NOT NULL,
   codePostalVille INT NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Plages(
   numPlage INT AUTO_INCREMENT PRIMARY KEY,
   nomPlage VARCHAR(50)  NOT NULL,
   longueurPlage DECIMAL(15,2)  ,
   nbAnnuelTouriste INT
)ENGINE=InnoDB;

CREATE TABLE NatureDeTerrain(
   numTerrain INT AUTO_INCREMENT PRIMARY KEY,
   LibNature VARCHAR(50)
)ENGINE=InnoDB;

CREATE TABLE Responsables(
   numResponsable INT AUTO_INCREMENT PRIMARY KEY,
   nomResponsable VARCHAR(50)  NOT NULL,
   prenomResponsable VARCHAR(50)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Departements(
   numDepartement INT AUTO_INCREMENT PRIMARY KEY,
   nomDepartement VARCHAR(50)  NOT NULL,
   numResponsable INT NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Departements ADD CONSTRAINT FK_Responsables_Departements FOREIGN KEY (numResponsable) REFERENCES Responsables(numResponsable);

CREATE TABLE englobe(
    idEnglobe INT AUTO_INCREMENT PRIMARY KEY,
   numDepartement INT,
   numVille INT
)ENGINE=InnoDB;

ALTER TABLE englobe ADD CONSTRAINT FK_Englobe_Departements FOREIGN KEY (numDepartement) REFERENCES Departements(numDepartement);
ALTER TABLE englobe ADD CONSTRAINT FK_Englobe_Villes FOREIGN KEY (numVille) REFERENCES Villes(numVille);

CREATE TABLE possede(
    idPossede INT AUTO_INCREMENT PRIMARY KEY,
   numVille INT,
   numPlage INT
)ENGINE=InnoDB;

ALTER TABLE possede ADD CONSTRAINT FK_Possede_Villes FOREIGN KEY (numVille) REFERENCES Villes(numVille);
ALTER TABLE possede ADD CONSTRAINT FK_Possede_Plages FOREIGN KEY (numPlage) REFERENCES Plages(numPlage);

CREATE TABLE compose(
    idCompose INT AUTO_INCREMENT PRIMARY KEY,
   numPlage INT,
   numTerrain INT
)ENGINE=InnoDB;

ALTER TABLE compose ADD CONSTRAINT FK_Compose_Plages FOREIGN KEY (numPlage) REFERENCES Plages(numPlage);
ALTER TABLE compose ADD CONSTRAINT FK_Compose_NatureDeTerrain FOREIGN KEY (numTerrain) REFERENCES NatureDeTerrain(numTerrain);