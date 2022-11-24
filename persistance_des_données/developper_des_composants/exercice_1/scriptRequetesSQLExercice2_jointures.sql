USE exercice1;

--
--A.Afficher le montant le plus élevé de commande.
--
SELECT MAX(quantiteCommande*articles.prixArticle) AS montantMax FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle;

--
--B.Afficher le montant moyen des commandes.
--
SELECT ROUND(AVG(quantiteCommande*articles.prixArticle),2) AS montantMoyen FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle;

--
--C.Afficher le montant le plus bas de commande
--
SELECT MIN(quantiteCommande*articles.prixArticle) AS montantMin FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle;

--
--D.Afficher le nombre de commandes qui ont été passées.
--
SELECT COUNT(*) AS nbCommande FROM commandes;

--
--E.Afficher le montant moyen de commande par client
--
SELECT idClient, ROUND(AVG(quantiteCommande*a.prixArticle),2) AS montantMoyenClient FROM commandes AS co INNER JOIN articles AS a ON co.idArticle = a.idArticle GROUP BY co.idClient;

--
--F.Afficher le montant le plus élevé de commande par client.
--
SELECT idClient, MAX(quantiteCommande*a.prixArticle) AS montantMaxClient FROM commandes AS co INNER JOIN articles AS a ON co.idArticle = a.idArticle GROUP BY co.idClient;

--
--G.Afficher le nombre de commandes par client.
--
SELECT co.idClient, cl.nomClient, cl.prenomClient,COUNT(*) AS nbCommandeClient FROM commandes AS co INNER JOIN clients AS cl ON co.idClient = cl.idClient GROUP BY co.idClient;

--
--H.Afficher le nombre d 'articles commandés en moyenne par client
--
SELECT co.idClient, cl.nomClient, cl.prenomClient,ROUND(AVG(quantiteCommande),2) AS quantiteMoyenneClient FROM commandes AS co INNER JOIN clients AS cl ON co.idClient = cl.idClient GROUP BY idClient;

--
--I.Afficher le nombre d'articles commandés en moyenne par article.
--
SELECT co.idArticle, a.descriptionArticle, ROUND(AVG(quantiteCommande),2) AS quantiteMoyenneArticle FROM commandes AS co INNER JOIN articles AS a ON co.idArticle = a.idArticle GROUP BY co.idArticle;

--
--J.Afficher le nombre total d'articles commandés par article.
--
SELECT co.idArticle, a.descriptionArticle, SUM(quantiteCommande) AS quantiteMoyenneArticle FROM commandes AS co INNER JOIN articles AS a ON co.idArticle = a.idArticle GROUP BY co.idArticle;

--
--K.Afficher le nombre moyen d'articles par client et par date.
--
SELECT co.idClient, cl.nomClient, cl.prenomClient, dateCommande, AVG(quantiteCommande) AS quantiteMoyenneClientDate FROM commandes AS co INNER JOIN clients AS cl ON co.idClient = cl.idClient GROUP BY co.idClient AND co.dateCommande;

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