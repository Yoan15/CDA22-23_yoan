

--
-- Base de données : `representant`
--
CREATE DATABASE representant;
USE representant;
-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(25) DEFAULT NULL,
  `VilleClient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`IdClient`, `NomClient`, `VilleClient`) VALUES
(1, 'Alice', 'Lyon'),
(2, 'Bruno', 'Lyon'),
(3, 'Charles', 'Compiègne'),
(4, 'Denis', 'Montpellier'),
(5, 'Emile', 'Strasbourg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(25) DEFAULT NULL,
  `CouleurProduit` varchar(25) DEFAULT NULL,
  `PoidsProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`IdProduit`, `NomProduit`, `CouleurProduit`, `PoidsProduit`) VALUES
(1, 'Aspirateur', 'Rouge', 3546),
(2, 'Trottinette', 'Bleu', 1423),
(3, 'Chaise', 'Blanc', 3827),
(4, 'Tapis', 'Rouge', 1423);

-- --------------------------------------------------------

--
-- Structure de la table `representants`
--

DROP TABLE IF EXISTS `representants`;
CREATE TABLE IF NOT EXISTS `representants` (
  `IdRepres` int(11) NOT NULL AUTO_INCREMENT,
  `NomRepres` varchar(25) DEFAULT NULL,
  `VilleRepres` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdRepres`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `representants`
--

INSERT INTO `representants` (`IdRepres`, `NomRepres`, `VilleRepres`) VALUES
(1, 'Stephane', 'Lyon'),
(2, 'Benjamin', 'Paris'),
(3, 'Leonard', 'Lyon'),
(4, 'Antoine', 'Brest'),
(5, 'Bruno', 'Bayonne');

-- --------------------------------------------------------

--
-- Structure de la table `textes`
--

DROP TABLE IF EXISTS `textes`;
CREATE TABLE IF NOT EXISTS `textes` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(50) NOT NULL,
  `fr` longtext NOT NULL,
  `en` longtext NOT NULL,
  PRIMARY KEY (`idTexte`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `textes`
--

INSERT INTO `textes` (`idTexte`, `codeTexte`, `fr`, `en`) VALUES
(1, 'Bonjour', 'Bonjour', 'Hello'),
(2, 'Connexion', 'Connexion', 'Log in'),
(3, 'Deconnexion', 'Deconnexion', 'Log out'),
(4, 'Accueil', 'Accueil', 'Home'),
(5, 'AdresseEmail', 'Adresse email', 'Email address'),
(6, 'Mdp', 'Mot de passe', 'Password'),
(7, 'Inscription', 'Inscription', 'Registration'),
(8, 'Nom', 'Nom', 'Surname'),
(9, 'Prenom', 'Prenom', 'Name'),
(10, 'InfoMdpLegend', 'Veuillez saisir au moins', 'Please enter at least'),
(11, 'UneMajuscule', '1 majuscule', '1 uppercase'),
(12, 'UneMinuscule', '1 minuscule', '1 lowercase'),
(13, 'UnChiffre', '1 chiffre', '1 number'),
(14, 'UnCaractereSpecial', '1 caractère spécial ( ! @ & # * ^ $ % +)', '1 special character ( ! @ & # * ^ $ % +)'),
(15, 'MinimumCaractere', '8 caractères', '8 character'),
(16, 'Confirmation', 'Confirmation', 'Confirmation'),
(17, 'Reset', 'Réinitialisation', 'Reset'),
(18, 'inputDefault', 'Choisir une valeur', 'Choose a value'),
(19, 'Envoyer', 'Envoyer', 'Send');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresseMail` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `role` int(11) NOT NULL COMMENT '2 Admin 1 User',
  PRIMARY KEY (`idUtilisateur`),
  UNIQUE KEY `adresseMail` (`adresseMail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nom`, `prenom`, `adresseMail`, `motDePasse`, `role`) VALUES
(1, 'admin', 'admin', 'admin1@gmail.com', 'c91e2fb9a6b5c4544966351789a17129', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `IdVente` int(11) NOT NULL AUTO_INCREMENT,
  `IdRepres` int(11) DEFAULT NULL,
  `IdProduit` int(11) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdVente`),
  KEY `IdClient` (`IdClient`),
  KEY `IdProduit` (`IdProduit`),
  KEY `IdRepres` (`IdRepres`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ventes`
--

INSERT INTO `ventes` (`IdVente`, `IdRepres`, `IdProduit`, `IdClient`, `Quantite`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 2, 1),
(3, 2, 2, 3, 1),
(4, 4, 3, 3, 200),
(5, 3, 4, 2, 190),
(6, 1, 3, 2, 300),
(7, 3, 1, 2, 120),
(8, 3, 1, 4, 120),
(9, 3, 4, 4, 2),
(10, 3, 1, 1, 3),
(11, 3, 4, 1, 5),
(12, 3, 1, 3, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD CONSTRAINT `ventes_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `clients` (`IdClient`),
  ADD CONSTRAINT `ventes_ibfk_2` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`IdProduit`),
  ADD CONSTRAINT `ventes_ibfk_3` FOREIGN KEY (`IdRepres`) REFERENCES `representants` (`IdRepres`);

