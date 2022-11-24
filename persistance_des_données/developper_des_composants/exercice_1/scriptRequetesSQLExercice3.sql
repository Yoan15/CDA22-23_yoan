--
--A.Les noms des étudiants nés avant l'étudiant « JULES LECLERCQ »
--
SELECT nomEtudiant FROM etudiants WHERE dateNaissanceEtudiant < (SELECT dateNaissanceEtudiant FROM etudiants WHERE nomEtudiant = "LECLERCQ" AND prenomEtudiant = "JULES");

--
--B.Les noms et notes des étudiants qui ont,à l'épreuve 4, une note supérieure à la moyenne de cette épreuve.
--
SELECT et.nomEtudiant, note 
FROM avoir_note AS an 
INNER JOIN etudiants AS et ON an.idEtudiant = et.idEtudiant 
INNER JOIN epreuves AS ep ON an.idEpreuve = ep.idEpreuve 
WHERE ep.idEpreuve = 4 
AND an.note > (SELECT AVG(an.note) FROM avoir_note AS an WHERE an.idEpreuve = 4);

--
--C.Le nom des étudiants qui ont obtenu un 12 ou plus.
--
SELECT et.nomEtudiant, note 
FROM avoir_note AS an 
INNER JOIN etudiants AS et ON an.idEtudiant = et.idEtudiant 
WHERE an.note>=12 
GROUP BY et.nomEtudiant;

--
--D.Le nom des étudiants qui ont dans l'épreuve 4 une note supérieure à celle obtenue par « LUC DUPONT »(à cette même épreuve).
--
SELECT et.nomEtudiant, an.note
FROM Etudiants AS et
INNER JOIN Avoir_note n ON et.idEtudiant = an.idEtudiant
WHERE idEpreuve = 4
AND an.note > (
    SELECT an.note
    FROM Avoir_note AS an2
    INNER JOIN Etudiants AS et2 ON an2.idEtudiant = et2.idEtudiant
    WHERE an2.idEpreuve = 4
    AND et2.nomEtudiant = "dupont"
    AND et2.prenomEtudiant = "luc"
);


--
--E.Le nom des étudiants qui partagent une ou plusieurs notes avec « LUC DUPONT ».
--
SELECT et.nomEtudiant, an.note 
FROM avoir_note as an
INNER JOIN etudiants as et 
ON an.idEtudiant = et.idEtudiant
WHERE an.note IN (
    SELECT an2.note 
    FROM avoir_note as an2
    INNER JOIN etudiants as et2 
    ON an2.idEtudiant = et2.idEtudiant
    WHERE et2.nomEtudiant = "dupont" 
    AND et2.prenomEtudiant = "luc"
);

--
--F.Ajoutez une colonne HOBBY à la table ETUDIANT. Cette colonne est de type chaine sur 20 caractères.
--Par défaut le HOBBY est mis à SPORT
--
ALTER TABLE etudiants ADD Hobby VARCHAR (20) DEFAULT 'SPORT';

--
--G.Ajouter à la table ETUDIANT une colonne NEWCOL de type INTEGER (vérifier en affichant la
--structure de la table) puis la supprimer (vérifier de nouveau la suppression).
--
ALTER TABLE etudiants ADD NewCol int;
ALTER TABLE etudiants DROP NewCol;

--
--H.Vérifiez que PREnomEtudiant peut ne pas avoir de contenu puis indiquez que la colonne PREnomEtudiant
--doit obligatoirement avoir une valeur. Vérifiez sur la description de la table.
--
ALTER TABLE etudiants MODIFY prenomEtudiant VARCHAR(20) NOT NULL;

--
--I.Insérez les enregistrements suivants: 7, 'interro écrite',9,1,'21-oct-96',1 dans EPREUVE 
--1,7,10
--2,7,08
--3,7,05
--4,7,09 
--17,3,15 dans AVOIR_NOTE
--
INSERT INTO epreuves(idEpreuve, libelleEpreuve, idEnseignantEpreuve, idMatiereEpreuve, dateEpreuve, CoefficientEpreuve) VALUES (7,'interro écrite',9,1,"1996-10-21",1);
INSERT INTO `avoir_note`(idEtudiant, idEpreuve, note) VALUES (1,7,10), (2,7,08), (3,7,05), (4,7,09), (17,7,09);


--
--J.Changez la note de n°3 dans l'épreuve7, elle passe à 07. Vérifiez les valeurs avant et après la requête
--
UPDATE avoir_note SET note=07 WHERE idEtudiant = 3 AND idEpreuve = 7;

--
--K.N°1 a mis de la bonne volonté, on augmente sa note dans l'épreuve 7 de 1 point. Vérifiez.
--
UPDATE avoir_note SET note=note+1 WHERE idEtudiant = 1 AND idEpreuve = 7;

--
--L.Détruisez l'épreuve 7 qui a été annulée pour cause de tricherie et les notes qui lui correspondent. Vérifiez.
--


--
--M.Réflexion : N'y aurait-il pas eu moyen de détruire les notes de l'épreuve automatiquement dès la destruction de l'épreuve ?
--

--
--N.Changez toutes les notes de MARKE dans la matière « BASES DE DONNEES ». Suite à un mauvais comportement, elles diminuent toutes de 3 points. Attention, la requête doit intégrer le nom de la matière.
--(et non chercher à repérer le numéro avant de la taper.)
--

--
--O.DEWA a manqué l'épreuve 4. Vu son niveau, on décide de lui créer une entrée dans AVOIR_NOTE en lui
--attribuant la moyenne des notes obtenues à cette épreuve par ses collègues*0.9. Attention, la requête doit
--intégrer le nom de l'étudiant (et non chercher à repérer le numéro avant de la taper.)
--

--
--P.Insérez un nouvel étudiant dont vous ne connaissez que le numéro, le nom, le prénom, le hobby et
--l'année: 25, 'DARTE','REMY','SCULPTURE',1.
--