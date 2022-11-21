DROP DATABASE IF EXISTS inventaireDisquesContraintesCasUn;
CREATE DATABASE inventaireDisquesContraintesCasUn DEFAULT CHARACTER SET utf8;
USE inventaireDisquesContraintesCasUn;

CREATE TABLE Artistes(
   idArtiste INT AUTO_INCREMENT PRIMARY KEY,
   nomArtiste VARCHAR(50)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Labels(
   idLabel INT AUTO_INCREMENT PRIMARY KEY,
   nomLabel VARCHAR(50)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Disques(
   idDisque INT AUTO_INCREMENT PRIMARY KEY,
   titreDisque VARCHAR(50)  NOT NULL,
   anneeDisque INT NOT NULL,
   idLabel INT NOT NULL,
   idArtiste INT NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Disques ADD CONSTRAINT FK_Disques_Labels FOREIGN KEY (idLabel) REFERENCES Labels(idLabel);
ALTER TABLE Disques ADD CONSTRAINT FK_Disques_Artistes FOREIGN KEY (idArtiste) REFERENCES Artistes(idArtiste);