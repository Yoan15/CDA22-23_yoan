USE testRelationsEntity;

DROP TABLE IF EXISTS codePostal;

CREATE TABLE CodePostal(
   idCodePostal INT AUTO_INCREMENT PRIMARY KEY,
   numCodePostal VARCHAR(5)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Villes ADD COLUMN idCodePostal INT;

ALTER TABLE Villes ADD CONSTRAINT FK_Villes_CodePostal FOREIGN KEY(idCodePostal) REFERENCES CodePostal(idCodePostal);

INSERT INTO CodePostal (idCodePostal, numCodePostal) VALUES (1,"59190");
INSERT INTO CodePostal (idCodePostal, numCodePostal) VALUES (2,"64347");
INSERT INTO CodePostal (idCodePostal, numCodePostal) VALUES (3,"64967");
INSERT INTO CodePostal (idCodePostal, numCodePostal) VALUES (4,"72579");
INSERT INTO CodePostal (idCodePostal, numCodePostal) VALUES (5,"05641");
INSERT INTO CodePostal (idCodePostal, numCodePostal) VALUES (6,"34352");