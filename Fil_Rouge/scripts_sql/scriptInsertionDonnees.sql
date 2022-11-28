USE villageGreen;

--Insertion table roles
INSERT INTO Roles(libRole) VALUES ("admin");
INSERT INTO Roles(libRole) VALUES ("employe");
INSERT INTO Roles(libRole) VALUES ("client");

--Insertion table utilisateurs
INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES ("Dupont","David","d.david@test.test","test-1david",2);
INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES ("Doe","John","john.doe@test.fr","johnDoe!Test",1);
INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES ("Laporte","Claire","Claire.porte@test.test","Test_Claire-laporte1",3);

--Insertion table villes
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Hazebrouck",59190);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Lille",59000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Dunkerque",59140);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Lyon",69000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Paris",75000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Toulouse",31000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Nantes",44000);

--Insertion table villes
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("15 rue de la mairie",null,"33600000000","33300000000",2);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("2 rue de la préfecture","Appartement 24","33600000000",null,4);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("6 rue de béthune",null,"33600000000","33300000000",1);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("2 rue du tribunal",null,"33600000000","33300000000",5);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("104 rue d'aire",null,"33600000000",null,7);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("3501 rue du parc",null,"33600000000","33300000000",6);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("740 rue des monts",null,"33600000000",null,3);

--Insertion table categoriesclient
INSERT INTO CategoriesClient(libCatClient) VALUES ("Particulier");
INSERT INTO CategoriesClient(libCatClient) VALUES ("Professionnel");

--Insertion table clients
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (2,"r8s5d",2);
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (1,"re46f",1);
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (5,"q45fe",1);
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (3,"4e6fs",2);

--Insertion table commandes


--Insertion table 


--Insertion table 


--Insertion table 


--Insertion table 


--Insertion table 


--Insertion table 


--Insertion table 


--Insertion table 


--Insertion table 
