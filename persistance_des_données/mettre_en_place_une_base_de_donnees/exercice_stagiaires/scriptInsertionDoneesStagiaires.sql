INSERT INTO Formateurs (nomFormateur, prenomFormateur) VALUES ("Poix","Martine");
INSERT INTO Formateurs (nomFormateur, prenomFormateur) VALUES ("Dubois","Thomas");
INSERT INTO Formateurs (nomFormateur, prenomFormateur) VALUES ("Butterdroghe","Hervé");
INSERT INTO Formateurs (nomFormateur, prenomFormateur) VALUES ("Batzic","Jean Paul");

INSERT INTO Hebergements (libelleHebergement) VALUES ("AFPA");
INSERT INTO Hebergements (libelleHebergement) VALUES ("AUTRE");

INSERT INTO Groupes (libelleGroupe) VALUES ("Informatique");
INSERT INTO Groupes (libelleGroupe) VALUES ("Automatisme");
INSERT INTO Groupes (libelleGroupe) VALUES ("Reseau");

INSERT INTO Matieres (nomMatiere) VALUES ("Sport");
INSERT INTO Matieres (nomMatiere) VALUES ("Français");
INSERT INTO Matieres (nomMatiere) VALUES ("Math");

INSERT INTO Formations (libelleFormation, idGroupe) VALUES ("TSAII",2);
INSERT INTO Formations (libelleFormation, idGroupe) VALUES ("TRTE",3);
INSERT INTO Formations (libelleFormation, idGroupe) VALUES ("DWWM",1);
INSERT INTO Formations (libelleFormation, idGroupe) VALUES ("CDA",1);
INSERT INTO Formations (libelleFormation, idGroupe) VALUES ("TSSR",3);

INSERT INTO constitutions (idMatiere, idFormation) VALUES (1,1);
INSERT INTO constitutions (idMatiere, idFormation) VALUES (3,2);
INSERT INTO constitutions (idMatiere, idFormation) VALUES (2,3);
INSERT INTO constitutions (idMatiere, idFormation) VALUES (2,4);
INSERT INTO constitutions (idMatiere, idFormation) VALUES (3,5);

INSERT INTO animations (idFormateur, idFormation) VALUES (2, 5);
INSERT INTO animations (idFormateur, idFormation) VALUES (1, 3);
INSERT INTO animations (idFormateur, idFormation) VALUES (2, 2);
INSERT INTO animations (idFormateur, idFormation) VALUES (4, 5);
INSERT INTO animations (idFormateur, idFormation) VALUES (1, 4);
INSERT INTO animations (idFormateur, idFormation) VALUES (3, 1);
INSERT INTO animations (idFormateur, idFormation) VALUES (4, 3);
INSERT INTO animations (idFormateur, idFormation) VALUES (4, 2);

INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("roblin","lea","12,bd de la liberte","calais",62100,"21345678","2014-09-01","F","1995-01-14",5,2,2);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("macarthur","leon","121,bd gambetta","calais",62100,"21-30-65-09","2014-09-01","M","1994-04-12",3,2,1);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("minol","luc","9,rue des prairies","boulogne",62200,"21-30-20-10","2014-09-01","M","1997-03-12",2,2,2);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("minol","sophie","12,rue des capucines","wimereux",62930,"21-89-04-30","2014-09-01","F","1996-03-21",5,2,4);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("minol","marc","67,allee ronde","marcq",62300,"21-90-87-65","2014-09-01","M","1993-02-05",3,2,1);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("vendraux","marc","5,rue de marseille","calais",62100,"21-96-00-09","2013-09-01","M","1996-01-21",4,2,1);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("vendermaele","helene","456,rue de paris","boulogne",62200,"21-45-45-60","2014-09-01","F","1995-03-30",5,2,2);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("besson","loic","3,allee carpentier","dunkerque",59300,"28-90-89-78","2014-09-01","M","1994-05-21",1,1,3);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("godart","jean-paul","123,rue de lens","marck",59870,"28-09-87-65","2013-09-01","M","1993-01-12",1,1,3);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("beaux","marie","1,allee des cygnes","dunkerque",59100,"21-30-87-90","2014-09-01","F","1996-04-12",2,2,2);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("turini","elsa","12,route de paris","boulogne",62200,"21-32-47-97","2014-09-01","F","1996-07-17",1,2,3);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("torelle","elise","123,vallee du denacre","boulogne",62200,"21-67-86-90","2014-09-01","F","1997-04-16",3,1,1);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("pharis","pierre","12,avenue foch","calais",62100,"21-21-85-90","2014-09-01","M","1996-03-18",4,1,1);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("ephyre","luc","12,rue de lyon","calais",62100,"21-35-32-90","2014-09-01","M","1995-01-21",3,1,4);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("leclercq","jules","12,allee des ravins","boulogne",62200,"21-36-71-92","2014-09-01","M","1994-05-19",3,2,1);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("dupont","luc","21,avenue monsigny","calais",62200,"21-21-34-99","2014-09-01","M","1996-11-02",2,2,2);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("marke","loic","312,route de paris","wimereux",62930,"21-87-87-71","2014-09-01","M","1996-11-12",5,1,4);
INSERT INTO Stagiaires (nomStagiaire, prenomStagiaire, adresseStagiaire, ville, codePostal, telStagiaire, dateEntree, genreStagiaire, dateNaissance, idFormation, idHebergement, idFormateur) VALUES ("dewa","leon","121,allee des eglantines","dunkerque",59100,"28-30-87-90","2014-09-01","M","1997-04-03",2,1,4);

INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (3,1,15.4);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (2,2,12.8);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,3,13);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (3,4,14);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (2,5,14.9);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,6,15.9);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (3,7,16);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,8,17);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (2,9,17.8);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,10,18);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,11,11.8);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (3,12,13.8);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (2,13,18.5);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (2,14,17.5);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,15,12.3);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (3,16,15.4);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (1,17,19);
INSERT INTO suivis (idMatiere, idStagiaire, note) VALUES (2,18,13.5);