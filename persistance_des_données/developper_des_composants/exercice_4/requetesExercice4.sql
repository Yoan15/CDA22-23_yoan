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