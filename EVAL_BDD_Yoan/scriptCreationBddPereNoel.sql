drop database if EXISTS perenoel;

create database perenoel;

use perenoel;

CREATE TABLE Enfants(
   numEnfant INT AUTO_INCREMENT PRIMARY KEY,
   nomEnfant VARCHAR(50) NOT NULL,
   prenomEnfant VARCHAR(50) NOT NULL,
   adresseEnfant VARCHAR(150) NOT NULL,
   genreEnfant VARCHAR(1) NOT NULL,
   voeuEnfant VARCHAR(150),
   pourcentageSagesse INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Lutins(
   numLutin INT AUTO_INCREMENT PRIMARY KEY,
   nomLutin VARCHAR(50) NOT NULL,
   prenomLutin VARCHAR(50) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Tournees(
   numTournee INT AUTO_INCREMENT PRIMARY KEY,
   heureDepart TIME NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Cadeaux(
   numCadeau INT AUTO_INCREMENT PRIMARY KEY,
   designationCadeau VARCHAR(100) NOT NULL,
   numEnfant INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Cadeaux ADD CONSTRAINT FK_Cadeaux_Enfants FOREIGN KEY(numEnfant) REFERENCES Enfants(numEnfant);

CREATE TABLE Rennes(
   idRenne INT AUTO_INCREMENT PRIMARY KEY,
   nomRenne VARCHAR(50) NOT NULL UNIQUE,
   genreRenne VARCHAR(1) NOT NULL,
   dateNaissance DATE NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Traineaux(
   numTraineau INT AUTO_INCREMENT PRIMARY KEY,
   tailleTraineau DECIMAL(15,2) NOT NULL,
   dateMiseEnService DATE NOT NULL,
   dateRevision DATE,
   idRenne INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Traineaux ADD CONSTRAINT FK_Traineaux_Rennes FOREIGN KEY(idRenne) REFERENCES Rennes(idRenne);

CREATE TABLE responsable(
   idResponsable INT AUTO_INCREMENT PRIMARY KEY,
   numLutin INT,
   numTraineau INT,
   dateResponsabilite DATE NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE responsable ADD CONSTRAINT FK_responsable_Lutins FOREIGN KEY(numLutin) REFERENCES Lutins(numLutin);
ALTER TABLE responsable ADD CONSTRAINT FK_responsable_Traineaux FOREIGN KEY(numTraineau) REFERENCES Traineaux(numTraineau);

CREATE TABLE transporte(
   idTransporte INT AUTO_INCREMENT PRIMARY KEY,
   numTraineau INT,
   numCadeau INT
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE transporte ADD CONSTRAINT FK_transporte_Traineaux FOREIGN KEY(numTraineau) REFERENCES Traineaux(numTraineau);
ALTER TABLE transporte ADD CONSTRAINT FK_transporte_Cadeaux FOREIGN KEY(numCadeau) REFERENCES Cadeaux(numCadeau);

CREATE TABLE compose(
   idCompose INT AUTO_INCREMENT PRIMARY KEY,
   numLutin INT,
   numTraineau INT,
   numTournee INT
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE compose ADD CONSTRAINT FK_compose_Lutins FOREIGN KEY(numLutin) REFERENCES Lutins(numLutin);
ALTER TABLE compose ADD CONSTRAINT FK_compose_Traineaux FOREIGN KEY(numTraineau) REFERENCES Traineaux(numTraineau);
ALTER TABLE compose ADD CONSTRAINT FK_compose_Tournees FOREIGN KEY(numTournee) REFERENCES Tournees(numTournee);