DROP DATABASE IF EXISTS insertionDonneesRegions;
CREATE DATABASE insertionDonneesRegions DEFAULT CHARACTER SET utf8;
USE insertionDonneesRegions;


CREATE TABLE Regions(
   idRegion INT AUTO_INCREMENT PRIMARY KEY,
   numRegion INT  NOT NULL,
   nomRegion VARCHAR(100)  NOT NULL,
   nbDepartement INT
)ENGINE=InnoDB;


CREATE TABLE Departements(
   idDepartement INT AUTO_INCREMENT PRIMARY KEY,
   numDepartement VARCHAR(3)  NOT NULL,
   nomDepartement VARCHAR(100)  NOT NULL,
   idRegion INT NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Departements ADD CONSTRAINT FK_Departements_Regions FOREIGN KEY(idRegion) REFERENCES Regions(idRegion);

INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (1,1,"Auvergne-Rhône-Alpes");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (2,2,"Bourgogne-Franche-Comté");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (3,3,"Bretagne");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (4,4,"Centre-Val de Loire");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (5,5,"Corse");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (6,6,"Grand-Est");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (7,7,"Hauts-de-France");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (8,8,"Ile-de-France");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (9,9,"Normandie");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (10,10,"Nouvelle-Aquitaine");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (11,11,"Occitanie");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (12,12,"Pays de la Loire");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (13,13,"Provence-Alpes-Côte d'Azur");
INSERT INTO Regions (idRegion,  numRegion, nomRegion) VALUES (14,14,"DOM-TOM");

INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("1","Ain",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("2","Aisne",7);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("3","Allier",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("4","Alpes-de-Haute-Provence",13);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("5","Hautes-Alpes",13);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("6","Alpes-Maritimes",13);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("7","Ardèche",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("8","Ardennes",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("9","Ariège",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("10","Aube",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("11","Aude",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("12","Aveyron",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("13","Bouches-du-Rhône",13);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("14","Calvados",9);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("15","Cantal",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("16","Charente",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("17","Charente-Maritime",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("18","Cher",4);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("19","Correze",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("21","Côte-d'Or",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("22","Côtes-d'Armor",3);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("23","Creuse",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("24","Dordogne",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("25","Doubs",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("26","Drôme",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("27","Eure",9);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("28","Eure-et-Loir",4);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("29","Finistère",3);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("2A","Corse-du-Sud",5);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("2B","Haute-Corse ",5);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("30","Gard",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("31","Haute-Garonne",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("32","Gers",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("33","Gironde",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("34","Hérault",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("35","Ille-et-Vilaine",3);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("36","Indre",4);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("37","Indre-et-Loire",4);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("38","Isère",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("39","Jura",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("40","Landes",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("41","Loir-et-Cher",4);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("42","Loire",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("43","Haute-Loire",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("44","Loire-Atlantique",12);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("45","Loiret",4);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("46","Lot",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("47","Lot-et-Garonne",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("48","Lozère",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("49","Maine-et-Loire",12);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("50","Manche",9);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("51","Marne",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("52","Haute-Marne",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("53","Mayenne",12);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("54","Meurthe-et-Moselle",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("55","Meuse",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("56","Morbihan",3);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("57","Moselle",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("58","Nièvre",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("59","Nord",7);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("60","Oise",7);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("61","Orne",9);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("62","Pas-de-Calais",7);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("63","Puy-de-Dôme",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("64","Pyrénées-Atlantiques",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("65","Hautes-Pyrénées",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("66","Pyrénées-Orientales",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("67","Bas-Rhin",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("68","Haut-Rhin",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("69","Rhône",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("70","Haute-Saône",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("71","Saône-et-Loire",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("72","Sarthe",12);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("73","Savoie",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("74","Haute-Savoie",1);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("75","Paris",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("76","Seine-Maritime",9);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("77","Seine-et-Marne",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("78","Yvelines",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("79","Deux-Sèvres",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("80","Somme",7);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("81","Tarn",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("82","Tarn-et-Garonne",11);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("83","Var",13);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("84","Vaucluse",13);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("85","Vendée",12);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("86","Vienne",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("87","Haute-Vienne",10);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("88","Vosges",6);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("89","Yonne",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("90","Territoire de Belfort",2);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("91","Essonne",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("92","Hauts-de-Seine",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("93","Seine-Saint-Denis",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("94","Val-de-Marne",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("95","Val-d'Oise",8);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("971","Guadeloupe",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("972","Martinique",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("973","Guyane",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("974","La Réunion",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("975","Saint-Pierre-et-Miquelon",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("976","Mayotte",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("977","Saint-Barthélemy",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("978","Saint-Martin",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("984","Terres australes et antarctiques françaises",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("986","Wallis-et-Futuna",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("987","Polynésie française",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("988","Nouvelle-Calédonie",14);
INSERT INTO Departements (numDepartement, nomDepartement,idRegion) VALUES ("989","Clipperton",14);