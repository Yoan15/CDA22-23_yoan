DROP DATABASE IF EXISTS multicouchevote;
CREATE DATABASE multicouchevote DEFAULT CHARACTER SET utf8;
USE multicouchevote;

CREATE TABLE codes(
   idCode INT AUTO_INCREMENT,
   code VARCHAR(30) ,
   PRIMARY KEY(idCode),
   UNIQUE(code)
)ENGINE=InnoDB;

CREATE TABLE Resultats(
   idResultat INT AUTO_INCREMENT,
   reponse VARCHAR(50) ,
   nbVotes INT NOT NULL,
   PRIMARY KEY(idResultat)
)ENGINE=InnoDB;

CREATE TABLE Votes(
   idVote INT AUTO_INCREMENT,
   reponse VARCHAR(50)  NOT NULL,
   idCode INT NOT NULL,
   PRIMARY KEY(idVote)
)ENGINE=InnoDB;

ALTER TABLE Votes ADD CONSTRAINT FK_Votes_Codes FOREIGN KEY(idCode) REFERENCES codes(idCode);
