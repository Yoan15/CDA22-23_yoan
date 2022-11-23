DROP DATABASE IF EXISTS papyrus;
CREATE DATABASE papyrus DEFAULT CHARACTER SET utf8;
USE papyrus;
CREATE TABLE Fournisseurs(
   idFournisseur INT AUTO_INCREMENT PRIMARY KEY,
   codeFournisseur INT NOT NULL,
   nomFournisseur VARCHAR(50)  NOT NULL,
   addresseFournisseur VARCHAR(50)  NOT NULL,
   villeFournisseur VARCHAR(50)  NOT NULL,
   codePostalFournisseur VARCHAR(5)  NOT NULL,
   nomRepresentantFournisseur VARCHAR(50)  NOT NULL,
   satifFournisseur INT
)ENGINE=InnoDB;

CREATE TABLE Produits(
   idProduit INT AUTO_INCREMENT PRIMARY KEY,
   codeProduit INT NOT NULL,
   nomProduit VARCHAR(50) ,
   stockPhysProduit INT NOT NULL,
   stockAnnuelleProduit INT NOT NULL,
   qteAnnuelleProduit INT NOT NULL,
   uniteMesure VARCHAR(5)  NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Commandes(
   idCommande INT AUTO_INCREMENT PRIMARY KEY,
   numCommande INT NOT NULL,
   dateCommande DATE NOT NULL,
   observationCommande VARCHAR(150) ,
   idFournisseur INT NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Commandes ADD CONSTRAINT FK_Commandes_Fournisseurs FOREIGN KEY(idFournisseur) REFERENCES Fournisseurs(idFournisseur);

CREATE TABLE Lignes_Commandes(
   idLigneCommande INT AUTO_INCREMENT PRIMARY KEY,
   numLigneCommande INT NOT NULL,
   qteLigneCommande INT NOT NULL,
   prixUnitaire DECIMAL(15,2)   NOT NULL,
   qteLivree INT,
   dateLivraison DATE NOT NULL,
   idProduit INT NOT NULL,
   idCommande INT NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Lignes_Commandes ADD CONSTRAINT FK_Lignes_Commandes_Produits FOREIGN KEY(idProduit) REFERENCES Produits(idProduit);
ALTER TABLE Lignes_Commandes ADD CONSTRAINT FK_Lignes_Commandes_Commandes FOREIGN KEY(idCommande) REFERENCES Commandes(idCommande);

CREATE TABLE vente(
   idVente INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
   idFournisseur INT,
   idProduit INT,
   prix1 DECIMAL(15,2)   NOT NULL,
   qte1 INT NOT NULL,
   prix2 DECIMAL(15,2)  ,
   qte2 INT,
   prix3 DECIMAL(15,2)  ,
   qte3 INT
)ENGINE=InnoDB;

ALTER TABLE vente ADD CONSTRAINT FK_Ventes_Fournisseurs FOREIGN KEY(idFournisseur) REFERENCES Fournisseurs(idFournisseur);
ALTER TABLE vente ADD CONSTRAINT FK_Ventes_Produits FOREIGN KEY(idProduit) REFERENCES Produits(idProduit);