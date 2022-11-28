DROP DATABASE IF EXISTS villageGreen;
CREATE DATABASE villageGreen DEFAULT CHARACTER SET utf8;
USE villageGreen;
CREATE TABLE Rubriques(
   idRubrique INT AUTO_INCREMENT PRIMARY KEY,
   libRubrique VARCHAR(50)  NOT NULL,
   idRubrique_1 INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Rubriques ADD CONSTRAINT FK_Rubriques_Rubriques FOREIGN KEY(idRubrique_1) REFERENCES Rubriques(idRubrique);

CREATE TABLE Fournisseurs(
   idFournisseur INT AUTO_INCREMENT PRIMARY KEY,
   nomFournisseur VARCHAR(100)  NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE CategoriesClients(
   idCatClient INT AUTO_INCREMENT PRIMARY KEY,
   libCatClient VARCHAR(50)  NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Roles(
   idRole INT AUTO_INCREMENT PRIMARY KEY,
   libRole VARCHAR(50)  NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Reglements(
   idReglement INT AUTO_INCREMENT PRIMARY KEY,
   typePaiement VARCHAR(50)  NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Villes(
   idVille INT AUTO_INCREMENT PRIMARY KEY,
   nomVille VARCHAR(100)  NOT NULL,
   codePostalVille VARCHAR(5)  NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Tva(
   idTva INT AUTO_INCREMENT PRIMARY KEY,
   tauxTva INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE Utilisateurs(
   idUtilisateur INT AUTO_INCREMENT PRIMARY KEY,
   nomUtilisateur VARCHAR(50)  NOT NULL,
   prenomUtilisateur VARCHAR(50)  NOT NULL,
   emailUtilisateur VARCHAR(100)  NOT NULL UNIQUE,
   mdpUtilisateur VARCHAR(50)  NOT NULL,
   idRole INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Utilisateurs ADD CONSTRAINT FK_Utilisateurs_Roles FOREIGN KEY(idRole) REFERENCES Roles(idRole);

CREATE TABLE Produits(
   idProduit INT AUTO_INCREMENT PRIMARY KEY,
   libProduit VARCHAR(50)  NOT NULL,
   descProduit TEXT,
   refProduit VARCHAR(5)  NOT NULL UNIQUE,
   prixProduit DECIMAL(15,2)  ,
   photoProduit VARCHAR(150) ,
   stock INT NOT NULL,
   idRubrique INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Produits ADD CONSTRAINT FK_Produits_Rubriques FOREIGN KEY(idRubrique) REFERENCES Rubriques(idRubrique);

CREATE TABLE Clients(
   idClient INT AUTO_INCREMENT PRIMARY KEY,
   coefClient INT NOT NULL,
   refClient VARCHAR(5)  NOT NULL,
   idCatClient INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Clients ADD CONSTRAINT FK_Clients_CategoriesClients FOREIGN KEY(idCatClient) REFERENCES CategoriesClients(idCatClient);

CREATE TABLE Adresses(
   idAdresse INT AUTO_INCREMENT PRIMARY KEY,
   adresse VARCHAR(100)  NOT NULL,
   complementAdresse VARCHAR(50) ,
   numTel VARCHAR(12) ,
   numFixe VARCHAR(12) ,
   idVille INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Adresses ADD CONSTRAINT FK_Adresses_Villes FOREIGN KEY(idVille) REFERENCES Villes(idVille);

CREATE TABLE Commandes(
   idCommande INT AUTO_INCREMENT PRIMARY KEY,
   numCommande VARCHAR(10)  NOT NULL UNIQUE,
   dateCommande DATE NOT NULL,
   idClient INT NOT NULL,
   idAdresse INT NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE Commandes ADD CONSTRAINT FK_Commandes_Clients FOREIGN KEY(idClient) REFERENCES Clients(idClient);
ALTER TABLE Commandes ADD CONSTRAINT FK_Commandes_Adresses FOREIGN KEY(idAdresse) REFERENCES Adresses(idAdresse);

CREATE TABLE fourni(
   idFourni INT AUTO_INCREMENT PRIMARY KEY,
   idProduit INT,
   idFournisseur INT
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE fourni ADD CONSTRAINT FK_fourni_Produits FOREIGN KEY(idProduit) REFERENCES Produits(idProduit);
ALTER TABLE fourni ADD CONSTRAINT FK_fourni_Fournisseurs FOREIGN KEY(idFournisseur) REFERENCES Fournisseurs(idFournisseur);

CREATE TABLE contient(
   idContient INT AUTO_INCREMENT PRIMARY KEY,
   idProduit INT,
   idCommande INT,
   quantiteProduit INT
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE contient ADD CONSTRAINT FK_contient_Produits FOREIGN KEY(idProduit) REFERENCES Produits(idProduit);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Commandes FOREIGN KEY(idCommande) REFERENCES Commandes(idCommande);

CREATE TABLE applique(
   idApplique INT AUTO_INCREMENT PRIMARY KEY,
   idProduit INT,
   idTva INT,
   dateTva DATE
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE applique ADD CONSTRAINT FK_applique_Produits FOREIGN KEY(idProduit) REFERENCES Produits(idProduit);
ALTER TABLE applique ADD CONSTRAINT FK_applique_Tva FOREIGN KEY(idTva) REFERENCES Tva(idTva);

CREATE TABLE paie(
   idPaie INT AUTO_INCREMENT PRIMARY KEY,
   idReglement INT,
   idCommande INT,
   datePaiement DATE,
   montantPaiement VARCHAR(50)  NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE paie ADD CONSTRAINT FK_paie_Reglements FOREIGN KEY(idReglement) REFERENCES Reglements(idReglement);
ALTER TABLE paie ADD CONSTRAINT FK_paie_Commandes FOREIGN KEY(idCommande) REFERENCES Commandes(idCommande);

CREATE TABLE livre(
   idLivre INT AUTO_INCREMENT PRIMARY KEY,
   idAdresse INT,
   idCommande INT,
   dateLivraison DATE,
   quantiteLivraison INT
)ENGINE=INNODB DEFAULT CHARSET=utf8;

ALTER TABLE livre ADD CONSTRAINT FK_livre_Adresses FOREIGN KEY(idAdresse) REFERENCES Adresses(idAdresse);
ALTER TABLE livre ADD CONSTRAINT FK_livre_Commandes FOREIGN KEY(idCommande) REFERENCES Commandes(idCommande);