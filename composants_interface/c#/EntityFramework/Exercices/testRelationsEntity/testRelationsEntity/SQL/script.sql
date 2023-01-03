DROP DATABASE IF EXISTS testRelationsEntity;
CREATE DATABASE testRelationsEntity DEFAULT CHARACTER SET utf8;
USE testRelationsEntity;

CREATE TABLE Personnes(
   idPersonne INT AUTO_INCREMENT PRIMARY KEY,
   nomPersonne VARCHAR(50) ,
   prenomPersonne VARCHAR(50)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Pays(
   idPays INT AUTO_INCREMENT PRIMARY KEY,
   nomPays VARCHAR(50)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Produits(
   idProduit INT AUTO_INCREMENT PRIMARY KEY,
   libelleProduit VARCHAR(50) ,
   quantiteProduit INT
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Categories(
   idCategorie INT AUTO_INCREMENT PRIMARY KEY,
   nomCategorie VARCHAR(50)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Villes(
   idVille INT AUTO_INCREMENT PRIMARY KEY,
   nomVille VARCHAR(50) ,
   idPays INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

-- CREATE TABLE contient(
--    idContient INT PRIMARY KEY,
--    idProduit INT,
--    idCategorie INT
-- )ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE contient(
   idProduit INT,
   idCategorie INT,
   PRIMARY KEY(idProduit, idCategorie)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Villes ADD CONSTRAINT FK_Villes_Pays FOREIGN KEY(idPays) REFERENCES Pays(idPays);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Produits FOREIGN KEY(idProduit) REFERENCES Produits(idProduit);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Categories FOREIGN KEY(idCategorie) REFERENCES Categories(idCategorie);

INSERT INTO Personnes (idPersonne, nomPersonne, prenomPersonne) VALUES (1,"nom1", "prenom1");
INSERT INTO Personnes (idPersonne, nomPersonne, prenomPersonne) VALUES (2,"nom2", "prenom2");

INSERT INTO Pays (idPays, nomPays) VALUES (1,"pays1");
INSERT INTO Pays (idPays, nomPays) VALUES (2,"pays2");
INSERT INTO Pays (idPays, nomPays) VALUES (3,"pays3");

INSERT INTO Villes (idVille, nomVille, idPays) VALUES (1,"ville1", 2);
INSERT INTO Villes (idVille, nomVille, idPays) VALUES (2,"ville2", 3);
INSERT INTO Villes (idVille, nomVille, idPays) VALUES (3,"ville3", 1);

INSERT INTO Categories (idCategorie, nomCategorie) VALUES (1,"categorie1");
INSERT INTO Categories (idCategorie, nomCategorie) VALUES (2,"categorie2");
INSERT INTO Categories (idCategorie, nomCategorie) VALUES (3,"categorie3");

INSERT INTO Produits (idProduit, libelleProduit, quantiteProduit) VALUES (1,"produit1", 50);
INSERT INTO Produits (idProduit, libelleProduit, quantiteProduit) VALUES (2,"produit2", 450);
INSERT INTO Produits (idProduit, libelleProduit, quantiteProduit) VALUES (3,"produit3", 31);

-- INSERT INTO contient (idContient, idProduit, idCategorie) VALUES (1, 2, 1);
-- INSERT INTO contient (idContient, idProduit, idCategorie) VALUES (2, 1, 3);
-- INSERT INTO contient (idContient, idProduit, idCategorie) VALUES (3, 3, 2);

INSERT INTO contient (idProduit, idCategorie) VALUES (2, 1);
INSERT INTO contient (idProduit, idCategorie) VALUES (1, 3);
INSERT INTO contient (idProduit, idCategorie) VALUES (3, 2);