--
--Partie 1
--
--
--1.Afficher toutes les informations concernant les employés
--
SELECT * FROM employe;

--
--2.Afficher toutes les informations concernant les départements
--
SELECT * FROM dept;
--
--ou
--
SELECT nodept, nom, noregion FROM dept;

--
--3.Afficher le nom, la date d'embauche, le num du sup, le num du départ et le salaire de tous les employés
--
SELECT nom, dateemb, nosup, nodep, salaire FROM employe;

--
--4.Afficher le titre de tous les employés
--
SELECT titre FROM employe;

--
--5.Afficher les différentes valeurs des titres des employés
--
SELECT DISTINCT titre FROM employe;

--
--6.Afficher le nom, le numéro d'employé et le numéro du départment des employés dont le titre est "secrétaire"
--
SELECT noemp, nom, nodep FROM employe WHERE titre="secrétaire";

--
--7.Afficher le nom et le numéro de départment dont le numéro de départment est supérieur à 40
--
SELECT nodept, nom FROM dept WHERE nodept>40;

--
--8.Afficher le nom et le prénom des employés dont le nom est alphabétiquement antérieur au prénom
--
SELECT nom, prenom FROM employe WHERE prenom < nom;

--
--9.Afficher le nom, le salaire, et le numéro du département des employés dont le titre est "Représentant", le numéro de département est 35 et le salaire est supérieur à 20000
--
SELECT nom, nodep, salaire FROM employe WHERE titre = "représentant" AND nodep = 35 AND salaire > 20000;

--
--10.Afficher le nom, le titre et le salaire des employés dont le titre est "représentant" ou dont le titre est "président"
--
SELECT nom, titre, salaire FROM employe WHERE titre="représentant" OR titre="président";

--
--11.Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34, dont le titre est "représentant" ou "secrétaire"
--
SELECT nom, titre, nodep, salaire FROM employe WHERE nodep=34 AND (titre="représentant" OR titre="secrétaire");

--
--12.Afficher le nom, le titre, le numéro de département, le salaire des employés dont le titre est "représentant", ou dont le titre est "secrétaire" dans le département numéro 34. 
--
SELECT nom, titre, nodep, salaire FROM employe WHERE titre="représentant" OR (titre="secrétaire" AND nodep=34);

--
--13.Afficher le nom, et le salaire des employés dont le salaire est compris entre 20000 et 30000.
--
SELECT nom, salaire FROM employe WHERE salaire BETWEEN 20000 AND 30000;

--
--15.Afficher le nom des employés commençant par la lettre "H". 
--
SELECT nom FROM employe WHERE nom LIKE "H%";

--
--16.Afficher le nom des employés se terminant par la lettre "n". 
--
SELECT nom FROM employe WHERE nom LIKE "%n";

--
--17.Afficher le nom des employés contenant la lettre « u » en 3ème position.
--
SELECT nom FROM employe WHERE nom LIKE "__u%";

--
--18.Afficher le salaire et le nom des employés du service 41 classés par salaire croissant. 
--
SELECT nom, salaire FROM employe WHERE nodep=41 ORDER BY salaire ASC;

--
--19.Afficher le salaire et le nom des employés du service 41 classés par salaire décroissant. 
--
SELECT nom, salaire FROM employe WHERE nodep=41 ORDER BY salaire DESC;

--
--20.Afficher le titre, le salaire et le nom des employés classés par titre croissant et par salaire décroissant. 
--
SELECT nom, titre, salaire FROM employe ORDER BY titre ASC, salaire DESC;

--
--21.Afficher le taux de commission, le salaire et le nom des employés classés par taux de commission croissante. 
--
SELECT nom, salaire, tauxcom FROM employe ORDER BY tauxcom ASC;

--
--22.Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission n'est pas renseigné. 
--
SELECT nom, salaire, titre, tauxcom FROM employe WHERE tauxcom IS NULL;

--
--23.Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est renseigné.
--
SELECT nom, salaire, titre, tauxcom FROM employe WHERE tauxcom IS NOT NULL;

--
--24.Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est inférieur à 15.
--
SELECT nom, salaire, titre, tauxcom FROM employe WHERE tauxcom IS NOT NULL AND tauxcom<15;

--
--25.Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est supérieur à 15
--
SELECT nom, salaire, titre, tauxcom FROM employe WHERE tauxcom IS NOT NULL AND tauxcom>15;

--
--26.Afficher le nom, le salaire, le taux de commission et la commission des employés dont le taux de commission n'est pas nul. (la commission est calculée en multipliant le salaire par le taux de commission)
--
SELECT nom, salaire, tauxcom, salaire*tauxcom AS commission FROM employe WHERE tauxcom IS NOT NULL;

--
--27. Afficher le nom, le salaire, le taux de commission, la commission des employés dont le taux de commission n'est pas nul, classé par taux de commission croissant. 
--
SELECT nom, salaire, tauxcom, salaire*tauxcom AS commission FROM employe WHERE tauxcom IS NOT NULL ORDER BY tauxcom ASC;

--
--28.Afficher le nom et le prénom (concaténés) des employés. Renommer les colonnes
--
SELECT CONCAT(nom, " ", prenom) AS employe FROM employe;
--
--ou pour les jeux de mots
--
SELECT CONCAT(prenom, " ", nom) AS employe FROM employe;


--
--29.Afficher les 5 premières lettres du nom des employés.
--
SELECT substring(nom,1,5) FROM employe;

--
--30.Afficher le nom et le rang de la lettre « r » dans le nom des employés.
--
SELECT nom, LOCATE("r", nom) AS "localisation lettre r" FROM employe;


--
--31.Afficher le nom, le nom en majuscule et le nom en minuscule de l'employé dont le nom est Vrante.
--
SELECT nom, UPPER(nom) AS "nom maj", LOWER(nom) AS "nom min" FROM employe WHERE nom="Vrante";


--
--32.Afficher le nom et le nombre de caractères du nom des employés.
--
SELECT nom, LENGTH(nom) AS longueurNom FROM employe;


--
--Partie 2
--
--
--question 1
--
SELECT e.nom, e.prenom, noregion  FROM employe AS e INNER JOIN dept AS d ON  e.nodep=d.nodept; 

--question 2
SELECT e.nodep, d.nom AS 'nomDepart', e.nom AS 'nomEmp' FROM employe AS e INNER JOIN dept AS d ON e.nodep = d.nodeptorder BY e.nodep;

--question 3
SELECT e.nomFROM employe AS e INNER JOIN dept AS d ON e.nodep = d.nodept WHERE d.nom = 'Distribution';

--question 4
SELECT nom, salaire,(SELECT nom FROM employe WHERE noemp=e.nosup) AS "nomSup", (SELECT salaire FROM employe WHERE noemp=e.nosup) AS "salaireSup" FROM employe AS e WHERE salaire>(SELECT salaire FROM employe WHERE noemp=e.nosup);

--question 5
SELECT nom, titre FROM employe WHERE titre = (SELECT titre FROM employe WHERE nom = "amartakaldire");

--question 6
SELECT nom, salaire, nodep FROM employe WHERE salaire > (SELECT MIN(salaire) FROM employe WHERE nodep = 31) ORDER BY nodep , salaire;

--question 7
SELECT nom, salaire, nodep FROM employe WHERE salaire > (SELECT MAX(salaire) FROM employe WHERE nodep = 31) ORDER BY nodep , salaire;

--question 8
SELECT nom, titre  FROM employe WHERE titre IN (SELECT titre FROM employe WHERE nodep = 32) AND nodep = 31;

--question 9
SELECT nom, titre  FROM employe WHERE titre NOT IN (SELECT titre FROM employe WHERE nodep = 32) AND nodep = 31;

--question 10
SELECT nom, titre, salaire FROM employe WHERE NOT nom = 'fairent' AND (titre,salaire) = (SELECT titre,salaire FROM employe WHERE nom = 'fairent');

--question 11
SELECT e.nodep, d.nom AS 'nom depart', e.nom AS 'nom emp' FROM employe AS e RIGHT JOIN dept AS d ON e.nodep = d.nodept ORDER BY e.nodep;

--question 1
SELECT titre, COUNT(*) AS nbEmp FROM employe GROUP BY titre;

--question 2
SELECT d.noregion, sum(e.salaire) AS salaireSomme, ROUND(AVG(e.salaire),2) AS salaireMoy FROM employe AS e INNER JOIN dept AS d GROUP BY d.noregion ;

--question 3
SELECT nodep FROM employe GROUP BY nodep HAVING COUNT(nodep) >= 3;

--question 4
SELECT substring(nom,1,1) AS 'initial' FROM employe GROUP BY initial HAVING count(initial) > 2;

--question 5
SELECT MIN(salaire) AS 'salaireMin' , MAX(salaire) AS 'salaireMax' , MAX(salaire)-MIN(salaire) AS 'difference' FROM employe;

--question 6
SELECT COUNT(DISTINCT titre) as "NbTitres" FROM employe;

--question 7
SELECT titre, COUNT(*) AS nbEmp FROM employe GROUP BY titre;

--question 8
SELECT d.nom, count(e.noemp) AS "nbEmp" FROM employe AS e INNER JOIN dept AS d ON d.nodept=e.nodep GROUP BY d.nom;

--question 9

SELECT titre, ROUND(AVG(salaire)) as "MoySalaire" FROM employe GROUP BY titre HAVING MoySalaire > (SELECT AVG(salaire) FROM employe WHERE titre="représentant");

--question 10
SELECT COUNT (salaire) , COUNT (tauxcom) FROM employe;