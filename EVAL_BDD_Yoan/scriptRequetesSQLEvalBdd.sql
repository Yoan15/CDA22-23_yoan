-- 1.Obtenir la liste des villes qui ont un nom d''au moins 40 lettres
SELECT * FROM villes_france WHERE LENGTH(ville_nom)>40;

-- 2.Obtenir la liste des départements d’outre-mer, c’est-à-dire ceux dont le numéro de département commence par “97”
SELECT * FROM villes_france WHERE ville_departement LIKE "97%";

-- 3.Obtenir la liste des départements des Hauts-de-France trier par ordre alphabétique des noms de département (sans jointure)
SELECT * FROM departements WHERE departement_regionId = (SELECT region_id FROM regions WHERE region_nom = "Hauts-De-France") ORDER BY departement_nom ASC;

-- 4.Obtenir le nom de toutes les villes, ainsi que le nom du département associé. Les plus peuplées en 2012 apparaitront en premier
SELECT vf.ville_nom, d.departement_nom, vf.ville_population_2012 FROM villes_france AS vf INNER JOIN departements AS d ON vf.ville_departement = d.departement_id ORDER BY ville_population_2012 DESC;

-- 5.Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces départements, en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes
SELECT d.departement_nom, d.departement_code, COUNT(*) AS nbCommunes FROM villes_france AS vf LEFT JOIN departements AS d ON vf.ville_departement = d.departement_code GROUP BY d.departement_code ORDER BY nbCommunes DESC;

-- 6.Obtenir la liste des départements, classés en fonction de leur superficie (plus grand en premier)
SELECT ROUND(SUM(ville_surface),2) AS surfaceTotalDepart, ville_departement FROM villes_france GROUP BY ville_departement ORDER BY surfaceTotalDepart DESC;

-- 7.Compter le nombre de villes dont le nom commence par “Saint”
SELECT COUNT(*) AS nbVille FROM villes_france WHERE ville_nom LIKE "Saint%";

-- 8.Obtenir la liste des villes qui ont un nom existants plusieurs fois, et trier afin d’obtenir en premier celles dont le nom est le plus souvent utilisé par plusieurs communes


-- 9.Obtenir en une seule requête SQL la liste des villes dont la superficie est supérieure à la superficie moyenne
SELECT * FROM villes_france HAVING ville_surface>ROUND(AVG(ville_surface),2);

-- 10.Obtenir la liste des départements qui possèdent plus de 1.5 millions d’habitants en 2012
SELECT * FROM departements AS d INNER JOIN villes_france AS vf ON d.departement_id = vf.ville_departement GROUP BY d.departement_nom HAVING SUM(vf.ville_population_2012)>1500000;

-- 11.Remplacez les tirets par un espace vide, pour toutes les villes commençant par “SAINT-” (dans la colonne qui contient les noms en majuscule)
SELECT REPLACE(ville_nom, "-", " ") AS newNom FROM `villes_france` WHERE ville_nom LIKE "SAINT-%";

-- 12.Supplémentaire. Obtenir la liste des 50 villes ayant la plus faible superficie
SELECT * FROM villes_france ORDER BY ville_surface ASC LIMIT 50;

-- 13.Ajouter une colonne region_nbDepartement dans la table regions (mettre le code dans le script de réponse)
ALTER TABLE regions ADD COLUMN region_nbDepartement INT NULL;

-- 14.Ecrire une procédure stockée (nommée MajRegion), qui vient mettre à jour cette colonne
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MajRegion`()
BEGIN
UPDATE regions SET region_nbDepartement=(SELECT COUNT(*) FROM departements);
SELECT * FROM regions;
END$$
DELIMITER ;

-- 15.Créer une vue qui regroupe les 3 tables
CREATE VIEW departements_regions_villes AS 
SELECT vf.*,
	   d.departement_id, d.departement_nom, d.departement_nom_uppercase, d.departement_slug, d.departement_nom_soundex,
       r.*
FROM departements AS d
INNER JOIN villes_france AS vf
ON vf.ville_departement = d.departement_code
INNER JOIN regions AS r
ON d.departement_regionId = r.region_id;