USE villageGreen;

-- Insertion table roles
INSERT INTO Roles(libRole) VALUES ("admin");
INSERT INTO Roles(libRole) VALUES ("employe");
INSERT INTO Roles(libRole) VALUES ("client");

-- Insertion table utilisateurs
INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES ("Dupont","David","d.david@test.test","test-1david",2);
INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES ("Doe","John","john.doe@test.fr","johnDoe!Test",1);
INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur, emailUtilisateur, mdpUtilisateur, idRole) VALUES ("Laporte","Claire","Claire.porte@test.test","Test_Claire-laporte1",3);

-- Insertion table villes
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Hazebrouck",59190);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Lille",59000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Dunkerque",59140);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Lyon",69000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Paris",75000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Toulouse",31000);
INSERT INTO Villes(nomVille, codePostalVille) VALUES ("Nantes",44000);

-- Insertion table villes
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("15 rue de la mairie",null,"33600000000","33300000000",2);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("2 rue de la préfecture","Appartement 24","33600000000",null,4);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("6 rue de béthune",null,"33600000000","33300000000",1);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("2 rue du tribunal",null,"33600000000","33300000000",5);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("104 rue d'aire",null,"33600000000",null,7);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("3501 rue du parc",null,"33600000000","33300000000",6);
INSERT INTO Adresses(adresse, complementAdresse, numTel, numFixe, idVille) VALUES ("740 rue des monts",null,"33600000000",null,3);

-- Insertion table categoriesclient
INSERT INTO CategoriesClients(libCatClient) VALUES ("Particulier");
INSERT INTO CategoriesClients(libCatClient) VALUES ("Professionnel");

-- Insertion table clients
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (2,"r8s5d",2);
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (1,"re46f",1);
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (5,"q45fe",1);
INSERT INTO Clients(coefClient, refClient, idCatClient) VALUES (3,"4e6fs",2);

-- Insertion table commandes
INSERT INTO Commandes(numCommande, dateCommande, idClient, idAdresse) VALUES ("1579875647","2022-11-24",1,5);
INSERT INTO Commandes(numCommande, dateCommande, idClient, idAdresse) VALUES ("7824938248","2021-07-15",2,3);
INSERT INTO Commandes(numCommande, dateCommande, idClient, idAdresse) VALUES ("9854673485","2020-05-07",3,7);
INSERT INTO Commandes(numCommande, dateCommande, idClient, idAdresse) VALUES ("4723541584","2022-02-16",4,2);

-- Insertion table livre
INSERT INTO livre(idAdresse, idCommande, dateLivraison, quantiteLivraison) VALUES (3,2,"2021-07-20",5);
INSERT INTO livre(idAdresse, idCommande, dateLivraison, quantiteLivraison) VALUES (5,1,"2022-12-05",2);
INSERT INTO livre(idAdresse, idCommande, dateLivraison, quantiteLivraison) VALUES (2,4,"2022-02-28",25);
INSERT INTO livre(idAdresse, idCommande, dateLivraison, quantiteLivraison) VALUES (7,3,"2020-05-27",5);

-- Insertion table Reglements
INSERT INTO Reglements(typePaiement) VALUES ("Différé");
INSERT INTO Reglements(typePaiement) VALUES ("Comptant");

-- Insertion table paie
INSERT INTO paie(idReglement, idCommande, datePaiement, montantPaiement) VALUES (2,2,"2021-07-18",80);
INSERT INTO paie(idReglement, idCommande, datePaiement, montantPaiement) VALUES (1,1,"2022-12-01",758);
INSERT INTO paie(idReglement, idCommande, datePaiement, montantPaiement) VALUES (1,3,"2020-05-07",465);
INSERT INTO paie(idReglement, idCommande, datePaiement, montantPaiement) VALUES (2,4,"2022-02-16",55);

-- Insertion table Rubriques
INSERT INTO Rubriques(libRubrique, idRubrique_1) VALUES ("jouets",null);
INSERT INTO Rubriques(libRubrique, idRubrique_1) VALUES ("meubles",null);
INSERT INTO Rubriques(libRubrique, idRubrique_1) VALUES ("outils",null);
INSERT INTO Rubriques(libRubrique, idRubrique_1) VALUES ("electromenager", null);
INSERT INTO Rubriques(libRubrique, idRubrique_1) VALUES ("meubles de bureau",2);

-- Insertion table Produits
INSERT INTO Produits(libProduit, descProduit, refProduit, prixProduit, photoProduit, stock, idRubrique) VALUES ("chaise","chaise très confortable","f7s9e",30,"",20,5);
INSERT INTO Produits(libProduit, descProduit, refProduit, prixProduit, photoProduit, stock, idRubrique) VALUES ("poupée","poupée parfaite comme cadeau d'anniversaire ou de noël","h8d7g",15,"../IMG/poupee.png",150,1);
INSERT INTO Produits(libProduit, descProduit, refProduit, prixProduit, photoProduit, stock, idRubrique) VALUES ("tournevis","Tournevis parfait pour vos tâches du quotidien","c8s23",15,"",70,3);
INSERT INTO Produits(libProduit, descProduit, refProduit, prixProduit, photoProduit, stock, idRubrique) VALUES ("canapé","canapé très confortable","h8sdg",200,"",25,2);
INSERT INTO Produits(libProduit, descProduit, refProduit, prixProduit, photoProduit, stock, idRubrique) VALUES ("machine à laver","machine à laver parfaite pour vos vêtements","d8g3d",345,"",10,4);

-- Insertion table Fournisseurs
INSERT INTO Fournisseurs(nomFournisseur) VALUES ("SuperElectro");
INSERT INTO Fournisseurs(nomFournisseur) VALUES ("SuperMaison");
INSERT INTO Fournisseurs(nomFournisseur) VALUES ("SuperJouets");

-- Insertion table fourni
INSERT INTO fourni(idProduit, idFournisseur) VALUES (1,2);
INSERT INTO fourni(idProduit, idFournisseur) VALUES (2,3);
INSERT INTO fourni(idProduit, idFournisseur) VALUES (3,2);
INSERT INTO fourni(idProduit, idFournisseur) VALUES (4,2);
INSERT INTO fourni(idProduit, idFournisseur) VALUES (5,1);

-- Insertion table contient
INSERT INTO contient(idProduit, idCommande, quantiteProduit) VALUES (4,2,5);
INSERT INTO contient(idProduit, idCommande, quantiteProduit) VALUES (1,3,5);
INSERT INTO contient(idProduit, idCommande, quantiteProduit) VALUES (5,1,2);
INSERT INTO contient(idProduit, idCommande, quantiteProduit) VALUES (2,4,25);

-- Insertion table Tva
INSERT INTO Tva(tauxTva) VALUES (20);
INSERT INTO Tva(tauxTva) VALUES (10);

-- Insertion table applique
INSERT INTO applique(idProduit, idTva, dateTva) VALUES (1,1,"2022-11-28");
INSERT INTO applique(idProduit, idTva, dateTva) VALUES (2,2,"2022-11-28");
INSERT INTO applique(idProduit, idTva, dateTva) VALUES (3,2,"2022-11-28");
INSERT INTO applique(idProduit, idTva, dateTva) VALUES (4,1,"2022-11-28");
INSERT INTO applique(idProduit, idTva, dateTva) VALUES (5,1,"2022-11-28");