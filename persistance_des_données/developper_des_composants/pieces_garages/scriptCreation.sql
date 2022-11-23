DROP DATABASE IF EXISTS atelier;
CREATE DATABASE atelier;
ALTER DATABASE atelier DEFAULT charset = UTF8;
USE atelier;


CREATE TABLE Marques(
   idMarque INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
   nomMarque VARCHAR(50)  NOT NULL
);
ALTER TABLE Marques ENGINE=InnoB;

CREATE TABLE Reference(
   idReference INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
   nomReference VARCHAR(50)  NOT NULL
);
ALTER TABLE Reference ENGINE=InnoB;

CREATE TABLE TypesPieces(
   idTypePiece INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
   nomTypePiece VARCHAR(50)
);
ALTER TABLE TypesPieces ENGINE=InnoB;

CREATE TABLE Pieces(
   idPiece INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
   numPiece INT,
   idReference INT,
   idMarque INT,
   idTypePiece INT NOT NULL
);
ALTER TABLE Pieces ENGINE=InnoB;

ALTER TABLE Pieces ADD CONSTRAINT FK_Pieces_Reference FOREIGN KEY(idReference) REFERENCES Reference(idReference);
ALTER TABLE Pieces ADD CONSTRAINT FK_Pieces_Marques FOREIGN KEY(idMarque) REFERENCES Marques(idMarque);
ALTER TABLE Pieces ADD CONSTRAINT FK_Pieces_TypesPieces FOREIGN KEY(idTypePiece) REFERENCES TypesPieces(idTypePiece);