USE exercice1;

--
--Afficher la totalité de la table "clients"
--
SELECT * FROM clients;

--
--ou
--
SELECT idClient, nomClient, prenomClient, dateEntreeClient FROM clients;

--
--Affichez les noms de tous les clients
--
SELECT nomClient FROM clients;

--
--Affichez les différentes dates de commandes sans répétition
--
SELECT DISTINCT dateCommande FROM commandes;

--
--Affichez les clients qui se prénomment « sophie »
--
SELECT idClient, nomClient, prenomClient, dateEntreeClient FROM clients WHERE prenomClient="sophie";

--
--Affichez les numéros des articles et leur quantité commandés par le client1.
--
SELECT idArticle, quantiteCommande FROM commandes WHERE idClient=1;

--
--Affichez les noms des clients en majuscules-.
--
SELECT UPPER(nomClient) AS nomClient FROM clients;

--
--Affichez les noms des clients avec la première lettre en majuscule.
--
SELECT CONCAT(UPPER(SUBSTRING(nomClient,1,1)), LOWER(SUBSTRING(nomClient,2))) AS nomClient FROM clients;

--
--Affichez les noms des clients qui ont 5caractères.
--
SELECT nomClient FROM clients WHERE CHAR_LENGTH(nomClient)=5;

--
--Affichez les noms des clients qui commencent par « t » ou qui ont un « l » en troisième position.
--
SELECT nomClient FROM clients WHERE nomClient LIKE "t%" AND substring(nomClient, 3,1) = "l";

--
--Affichez le numéro de client, le numéro de commande, la date de commande et la date de paiement attendue des commandes (=date_cde+15jours).
--
SELECT idCommande, idClient, dateCommande, DATE_ADD(dateCommande, INTERVAL 15 DAY) as datePaiement FROM commandes;

--
--Affichez la date et l'heure actuelles.
--
SELECT CURRENT_DATE() AS dateActuelle, CURRENT_TIME() AS heureActuelle;

--
--Affichez l'ancienneté des clients.
--
SELECT idClient, nomClient, prenomClient, dateEntreeClient FROM clients ORDER BY dateEntreeClient ASC;

--
--Affichez la quantité maximale achetée par un client.
--
SELECT MAX(quantiteCommande) as quantiteMaxAchetee FROM commandes;

--
--Affichez la quantité totale achetée par le client1.
--
SELECT SUM(quantiteCommande) FROM commandes WHERE idClient=1;

--
--Affichez la quantité moyenne achetée par le client 2.
--
SELECT ROUND(AVG(quantiteCommande),2) FROM commandes WHERE idClient=2;

--
--Affichez les clients classés par ordre alphabétique de leur nom.
--
SELECT idClient, nomClient, prenomClient, dateEntreeClient FROM clients ORDER BY nomClient ASC;

--
--Affichez les articles classés selon leur prix décroissant. 
--
SELECT idArticle, descriptionArticle, prixArticle FROM articles ORDER BY prixArticle DESC;