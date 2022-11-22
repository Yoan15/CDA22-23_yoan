DROP DATABASE IF EXISTS exerciceStagiaires;
CREATE DATABASE exerciceStagiaires DEFAULT CHARACTER SET utf8;
USE exerciceStagiaires;

CREATE TABLE Matieres(
   idMatiere INT AUTO_INCREMENT PRIMARY KEY,
   nomMatiere VARCHAR(25)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Hebergements(
   idHebergement INT AUTO_INCREMENT PRIMARY KEY,
   libelleHebergement VARCHAR(50)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Formateurs(
   idFormateur INT AUTO_INCREMENT PRIMARY KEY,
   nomFormateur VARCHAR(25)  NOT NULL,
   prenomFormateur VARCHAR(25)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Groupes(
   idGroupe INT AUTO_INCREMENT PRIMARY KEY,
   libelleGroupe VARCHAR(50)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Formations(
   idFormation INT AUTO_INCREMENT PRIMARY KEY,
   libelleFormation VARCHAR(50)  NOT NULL,
   idGroupe INT
)ENGINE=InnoDB;

ALTER TABLE Formations ADD CONSTRAINT FK_Formations_Groupes FOREIGN KEY(idGroupe) REFERENCES Groupes(idGroupe);

CREATE TABLE Stagiaires(
   idStagiaire INT AUTO_INCREMENT PRIMARY KEY,
   nomStagiaire VARCHAR(25)  NOT NULL,
   prenomStagiaire VARCHAR(25) ,
   adresseStagiaire VARCHAR(50) ,
   ville VARCHAR(25) ,
   codePostal INT,
   telStagiaire VARCHAR(14) ,
   dateEntree DATE NOT NULL,
   genreStagaire VARCHAR(1)  NOT NULL,
   dateNaissance DATE NOT NULL,
   idFormation INT NOT NULL,
   idHebergement INT NOT NULL,
   idFormateur INT NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Stagiaires ADD CONSTRAINT FK_Stagiaires_Formations FOREIGN KEY(idFormation) REFERENCES Formations(idFormation);
ALTER TABLE Stagiaires ADD CONSTRAINT FK_Stagiaires_Hebergements FOREIGN KEY(idHebergement) REFERENCES Hebergements(idHebergement);
ALTER TABLE Stagiaires ADD CONSTRAINT FK_Stagiaires_Formateurs FOREIGN KEY(idFormateur) REFERENCES Formateurs(idFormateur);

CREATE TABLE suivis(
   idSuivi INT AUTO_INCREMENT PRIMARY KEY,
   idMatiere INT,
   idStagiaire INT,
   note DECIMAL(15,2)
)ENGINE=InnoDB;

ALTER TABLE suivis ADD CONSTRAINT FK_Suivis_Matieres FOREIGN KEY(idMatiere) REFERENCES Matieres(idMatiere);
ALTER TABLE suivis ADD CONSTRAINT FK_Suivis_Stagiaires FOREIGN KEY(idStagiaire) REFERENCES Stagiaires(idStagiaire);

CREATE TABLE animations(
   idAnimation INT AUTO_INCREMENT PRIMARY KEY,
   idFormateur INT,
   idFormation INT
)ENGINE=InnoDB;

ALTER TABLE animations ADD CONSTRAINT FK_Animations_Formateur FOREIGN KEY(idFormateur) REFERENCES Formateurs(idFormateur);
ALTER TABLE animations ADD CONSTRAINT FK_Animations_Formations FOREIGN KEY(idFormation) REFERENCES Formations(idFormation);

CREATE TABLE constitutions(
   idConstitution INT AUTO_INCREMENT PRIMARY KEY,
   idMatiere INT,
   idFormation INT
)ENGINE=InnoDB;

ALTER TABLE constitutions ADD CONSTRAINT FK_Constitutions_Matieres FOREIGN KEY(idMatiere) REFERENCES Matieres(idMatiere);
ALTER TABLE constitutions ADD CONSTRAINT FK_Constitutions_Formations FOREIGN KEY(idFormation) REFERENCES Formations(idFormation);
