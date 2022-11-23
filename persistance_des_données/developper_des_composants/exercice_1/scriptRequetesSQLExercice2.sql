USE exercice1;

--
--A.Afficher le montant le plus élevé de commande.
--
SELECT MAX(cde_total) AS montantMax FROM commandes;

--
--B.Afficher le montant moyen des commandes.
--
SELECT ROUND(AVG(cde_total),2) AS montantMoyen FROM commandes;

--
--C.Afficher le montant le plus bas de commande
--
SELECT MIN(cde_total) AS montantMin FROM commandes;

--
--D.Afficher le nombre de commandes qui ont été passées.
--
SELECT COUNT(idCommande) AS nbCommande FROM commandes;

--
--E.Afficher le montant moyen de commande par client
--
SELECT idClient, AVG(cde_total) AS montantMoyenClient FROM commandes GROUP BY idClient;

--
--F.Afficher le montant le plus élevé de commande par client.
--
SELECT idClient, MAX(cde_total) AS montantMaxClient FROM commandes GROUP BY idClient;

--
--G.Afficher le nombre de commandes par client.
--
SELECT idClient, COUNT(idCommande) AS nbCommandeClient FROM commandes GROUP BY idClient;

--
--H.Afficher le nombre d 'articles commandés en moyenne par client
--
SELECT idClient, AVG(quantiteCommande) AS quantiteMoyenneClient FROM commandes GROUP BY idClient;

--
--I.Afficher le nombre d'articles commandés en moyenne par article.
--
SELECT idArticle, AVG(quantiteCommande) AS quantiteMoyenneArticle FROM commandes GROUP BY idArticle;

--
--J.Afficher le nombre total d'articles commandés par article.
--
SELECT idArticle, SUM(quantiteCommande) AS totalArticleCommande FROM commandes GROUP BY idArticle;

--
--K.Afficher le nombre moyen d'articles par client et par date.
--
SELECT idClient, dateCommande, AVG(quantiteCommande) AS quantiteMoyenneClientDate FROM commandes GROUP BY idClient AND dateCommande;

--
--L.Afficher le nombre de commandes par jour.
--
SELECT COUNT(idCommande) AS nbCommandeJour, dateCommande FROM commandes GROUP BY dateCommande;

--
--M.Afficher le nombre de clients dans la table.
--
SELECT COUNT(idClient) AS nbClient FROM clients;

--
--N.Afficher le nombre de clients différents qui ont passé commande.
--
SELECT COUNT(DISTINCT(idClient)) AS nbClientDiff FROM commandes;

--
--O.Afficher le nombre d' articles différents qui ont été commandés.
--
SELECT COUNT(DISTINCT(idArticle)) AS nbArticleDiff FROM commandes;

--
--P.Afficher le nombre de jours différents de commandes
--
SELECT COUNT(DISTINCT(dateCommande)) AS nbDateDiff FROM commandes;