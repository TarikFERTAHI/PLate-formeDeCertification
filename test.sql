-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Janvier 2020 à 17:43
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix_question`
--

CREATE TABLE IF NOT EXISTS `choix_question` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `idmat` int(11) NOT NULL,
  `idn` int(11) NOT NULL,
  `idq` int(11) NOT NULL,
  `choix` text NOT NULL,
  `valeur` int(11) NOT NULL,
  PRIMARY KEY (`idc`),
  KEY `idmat` (`idmat`),
  KEY `idn` (`idn`),
  KEY `idq` (`idq`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Contenu de la table `choix_question`
--

INSERT INTO `choix_question` (`idc`, `idmat`, `idn`, `idq`, `choix`, `valeur`) VALUES
(19, 4, 1, 1, 'C''est un ensemble de périphériques liés entre eux afin d''échanger les données ', 1),
(20, 4, 1, 1, 'C''est un moyen qui teste la communication', 0),
(21, 4, 1, 2, 'VLAN-LAN-WAN', 0),
(22, 4, 1, 2, 'LAN-MAN-WAN', 1),
(23, 4, 1, 3, 'L’adresse MAC', 1),
(24, 4, 1, 3, 'L’adresse IP', 0),
(39, 4, 1, 4, 'La pile TCP/IP sur un hôte du réseau', 1),
(40, 4, 1, 4, 'La connectivité entre le PC et la passerelle par défaut', 0),
(41, 4, 1, 5, 'Demander aux utilisateurs de prouver leur identité', 0),
(42, 4, 1, 5, 'Garder une trace des actions de l’utilisateur', 1),
(43, 4, 2, 6, 'Mode configuration, la NVRAM, TFTP', 0),
(44, 4, 2, 6, 'NVRAM, TFTP, mode de configuration', 1),
(45, 4, 2, 7, 'La valeur métrique la plus faible qui est associé au réseau de destination', 1),
(46, 4, 2, 7, 'La valeur métrique supérieure qui est associé avec le réseau de destination', 0),
(47, 4, 2, 8, 'Il envoie la trame à tous les ports du commutateur', 0),
(48, 4, 2, 8, 'Il transmet la trame à tous les ports, à l’exception du port sur lequel la trame a été reçue', 1),
(49, 4, 2, 9, 'Elle place les informations dans la trame qui permet à plusieurs protocoles de \r\ncouche 3 d’utiliser la même interface réseau et les médias', 1),
(50, 4, 2, 9, 'Elle fournit l’adressage logique requis qui identifie le périphérique', 0),
(51, 4, 2, 10, 'FastEthernet0/1', 0),
(52, 4, 2, 10, 'VLAN 1', 1),
(53, 4, 3, 11, 'Carte réseau sans fil', 1),
(54, 4, 3, 11, 'Pont sans fil', 0),
(55, 4, 3, 12, 'NAT', 1),
(56, 4, 3, 12, 'DHCP', 0),
(57, 4, 3, 13, 'modem par un câble téléphonique', 0),
(58, 4, 3, 13, 'Modem DSL par lignes téléphoniques ordinaires', 1),
(59, 4, 3, 14, 'Connexion SSH', 1),
(60, 4, 3, 14, 'Connexion console', 0),
(61, 4, 3, 15, 'Normes de l’IEEE', 0),
(62, 4, 3, 15, 'RFC, propositions pour commentaires', 1),
(63, 6, 1, 16, 'multitâche ', 1),
(64, 6, 1, 16, 'monotâche ', 0),
(65, 6, 1, 17, 'Le système sait lancer plusieurs programmes les uns après les autres', 0),
(66, 6, 1, 17, 'Le système d’exploitation sait exécuter plusieurs programmes simultanément.', 1),
(67, 6, 1, 18, 'Un interpréteur de commandes.', 1),
(68, 6, 1, 18, 'Une console au sein d’une interface graphique', 0),
(69, 6, 1, 19, 'bash', 1),
(70, 6, 1, 19, 'sh', 0),
(71, 6, 1, 20, 'A - Affiche le texte puis la date et attend une saisie.', 0),
(72, 6, 1, 20, 'D - Comme A mais quitte le shell ensuite.', 1),
(75, 6, 2, 22, ' ~/Documents', 0),
(76, 6, 2, 22, '/home/seb/Documents', 1),
(77, 6, 2, 21, '255 caractères, plus l’extension.', 0),
(78, 6, 2, 21, 'La question est fausse', 1),
(79, 6, 2, 23, 'mkdir sources/C/backup', 0),
(80, 6, 2, 23, 'mkdir -p sources/C/backup', 1),
(81, 6, 2, 24, 'Une erreur est retournée car seul root peut utiliser ainsi cette commande.', 0),
(82, 6, 2, 24, 'Mes fichiers et répertoires sont supprimés, où qu’ils soient, dont mon répertoire home.\r\n', 1),
(83, 6, 2, 25, 'ln -s /tmp/seb /home/seb/tmp', 1),
(84, 6, 2, 25, 'ln /tmp/seb /home/seb/tmp', 0),
(85, 6, 3, 27, 'which startappli', 0),
(86, 6, 3, 27, 'which -a startappli', 1),
(87, 6, 3, 26, 'find / -name "core" -exec rm -f {} \\;', 1),
(88, 6, 3, 26, 'find / -name "core" -exec rm -f;', 0),
(89, 6, 3, 28, '2>/dev/null', 1),
(90, 6, 3, 28, '>/dev/null 2>&1', 0),
(91, 6, 3, 29, '2>dev/null >liste', 0),
(92, 6, 3, 29, '1>liste 2>&1', 1),
(93, 6, 3, 30, 'find /public -user <login> -iname "*.avi" -type f -size +665600k -atime +180 -ls', 1),
(94, 6, 3, 30, 'find /public -user <login> -iname "*.avi" -type f -size +66560000k -atime +180 -ls', 0);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE IF NOT EXISTS `matieres` (
  `idmat` int(11) NOT NULL AUTO_INCREMENT,
  `matiere` varchar(255) NOT NULL,
  PRIMARY KEY (`idmat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `matieres`
--

INSERT INTO `matieres` (`idmat`, `matiere`) VALUES
(4, 'Réseaux Informatique'),
(5, ' Système D''exploitation Propriétaire'),
(6, 'Linux');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`idM`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'admin', 'a@a.com', '123'),
(2, 'ha', 'h@h.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `niveaux`
--

CREATE TABLE IF NOT EXISTS `niveaux` (
  `idn` int(11) NOT NULL AUTO_INCREMENT,
  `niveau` text NOT NULL,
  PRIMARY KEY (`idn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `niveaux`
--

INSERT INTO `niveaux` (`idn`, `niveau`) VALUES
(1, 'niveau1'),
(2, 'niveau2'),
(3, 'niveau3');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `idq` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `idmat` int(11) DEFAULT NULL,
  `idn` int(11) DEFAULT NULL,
  PRIMARY KEY (`idq`),
  KEY `idmat` (`idmat`),
  KEY `idn` (`idn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`idq`, `question`, `idmat`, `idn`) VALUES
(1, 'C''est quoi un réseau informatique ?', 4, 1),
(2, 'Quels sont les types d''un réseau informatique ? ', 4, 1),
(3, 'Quelle adresse sur un PC ne change jamais, même si le PC est déplacé vers un autre réseau?', 4, 1),
(4, 'Un technicien utilise la commande ping 127.0.0.1. Qu’est-ce que le technicien veut Tester?', 4, 1),
(5, 'Quel est le but des comptes d’accès dans la sécurité du réseau ?', 4, 1),
(6, 'Par défaut, un routeur recherche les informations  de configuration au \r\ndémarrage dans quel ordre?', 4, 2),
(7, 'Le routeur utilise quel paramètre pour choisir le chemin de destination quand il \r\ny a plusieurs routes disponibles?', 4, 2),
(8, 'Que fait un commutateur de couche 2 lorsque l’adresse MAC de destination \r\nd’une trame reçue n’est pas dans sa table MAC?', 4, 2),
(9, 'Quelle est la caractéristique de la sous-couche LLC?', 4, 2),
(10, 'Sur quelle interface de commutateur l’administrateur devrait configurer une \r\nadresse IP pour que le commutateur puisse être géré à distance ?', 4, 2),
(11, 'Quels sont les deux composants nécessaires à un client sans fil pour s’installer sur un réseau local sans fil ? ', 4, 3),
(12, 'Quelle technologie fournit une solution à l’épuisement d’adresse IPv4 et permet à \r\nplusieurs périphériques de partager une seule adresse IP publique ?', 4, 3),
(13, 'Un utilisateur à domicile recherche une connexion d’un FAI qui fournit une \r\nhaute vitesse de transmission numérique par des lignes téléphoniques normales. \r\nQuelle connexion doit être utilisé par le  FAI?', 4, 3),
(14, 'Quelle Connexion fournit une session CLI sécurisée avec cryptage à un \r\ncommutateur Cisco ?', 4, 3),
(15, 'Quelles  ressources  publiquement disponibles décrient les protocoles, les \r\nprocessus et les technologies de l’Internet, mais ne donne pas les détails de leur mise en oeuvre?', 4, 3),
(16, 'Quel est le type d''un système d''exploitation GNU/LINUX ?', 6, 1),
(17, 'Que signifie multitâche ', 6, 1),
(18, 'Qu’est-ce qu’un shell ?', 6, 1),
(19, 'Quel est le shell par défaut sous Linux ?', 6, 1),
(20, 'La ligne suivante « echo "bonjour, la date est " ; date ; exit »  :', 6, 1),
(21, 'Quelle est la longueur maximale d’un nom de fichier, extension comprise ?', 6, 2),
(22, 'Donnez dans la liste suivante le chemin absolu :', 6, 2),
(23, 'Vous voulez créer le plus simplement possible dans votre répertoire personnel le chemin sources/C/backup, sachant qu’aucun de ces répertoires n’existe : vous tapez :', 6, 2),
(24, 'Quel est l’effet, en tant que simple utilisateur, de la commande rm -rf /* ?', 6, 2),
(25, 'Comment créer un lien symbolique de /tmp/seb vers /home/seb/tmp ?', 6, 2),
(26, 'Il est courant de trouver des fichiers core quand les programmes plantent. Comment tous les supprimer ?', 6, 3),
(27, 'Vous recherchez toutes les instances d’un programme appelé « startappli » au sein du path. Quelle commande utilisez-vous ?', 6, 3),
(28, 'Comment supprimer tous les messages d’erreur ?', 6, 3),
(29, 'En tant qu’utilisateur, pour lister l’intégralité des fichiers du système et placer tous les résultats quels qu’ils soient dans liste, quelle doit être la bonne redirection ?', 6, 3),
(30, 'Vous voulez lister tous vos fichiers avi (divx ?) de plus de 650 Mo et auxquels vous n’avez pas accédé depuis environ 6 mois, depuis le dossier /public/videos. Comment procéder ?', 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `resultas`
--

CREATE TABLE IF NOT EXISTS `resultas` (
  `idres` int(11) NOT NULL AUTO_INCREMENT,
  `idmembre` int(11) DEFAULT NULL,
  `res` int(3) DEFAULT NULL,
  `idn` int(11) DEFAULT NULL,
  `idmat` int(11) DEFAULT NULL,
  `nb_question` int(11) DEFAULT NULL,
  PRIMARY KEY (`idres`),
  KEY `idmembre` (`idmembre`),
  KEY `idn` (`idn`),
  KEY `idmat` (`idmat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `resultas`
--

INSERT INTO `resultas` (`idres`, `idmembre`, `res`, `idn`, `idmat`, `nb_question`) VALUES
(4, 1, 3, 1, 4, 5),
(5, NULL, 3, 1, 4, 5),
(6, NULL, 3, 1, 4, 5),
(7, 1, 3, 1, 4, 5),
(8, 1, 3, 1, 4, 5),
(9, 1, 5, 1, 4, 5),
(10, 1, 3, 1, 4, 5),
(11, 1, 3, 1, 4, 5),
(12, 1, 3, 1, 4, 5),
(13, 1, 0, 1, 4, 5),
(14, 1, 0, 1, 4, 5),
(15, 1, 0, 1, 4, 5),
(16, 1, 0, 1, 4, 5),
(17, 1, 0, 1, 4, 5),
(18, 1, 0, 1, 4, 5),
(19, 1, 5, 1, 4, 5),
(20, 1, 4, 1, 4, 5),
(21, 1, 0, 1, 4, 5),
(22, 1, 1, 1, 4, 4),
(23, 1, 0, 1, 4, 4),
(24, 1, 0, 1, 4, 4),
(25, 1, 0, 1, 4, 4),
(26, 1, 0, 1, 4, 4),
(27, 1, 0, 1, 4, 4),
(28, 1, 0, 1, 4, 4),
(29, 1, 0, 1, 4, 4),
(30, 1, 0, 1, 4, 4),
(31, 1, 0, 1, 4, 4),
(32, 1, 0, 1, 4, 4),
(33, 1, 0, 1, 4, 4),
(34, 1, 0, 1, 4, 4);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `choix_question`
--
ALTER TABLE `choix_question`
  ADD CONSTRAINT `choix_question_ibfk_1` FOREIGN KEY (`idmat`) REFERENCES `matieres` (`idmat`),
  ADD CONSTRAINT `choix_question_ibfk_2` FOREIGN KEY (`idn`) REFERENCES `niveaux` (`idn`),
  ADD CONSTRAINT `choix_question_ibfk_3` FOREIGN KEY (`idq`) REFERENCES `questions` (`idq`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`idmat`) REFERENCES `matieres` (`idmat`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`idn`) REFERENCES `niveaux` (`idn`);

--
-- Contraintes pour la table `resultas`
--
ALTER TABLE `resultas`
  ADD CONSTRAINT `resultas_ibfk_1` FOREIGN KEY (`idmembre`) REFERENCES `membres` (`idM`),
  ADD CONSTRAINT `resultas_ibfk_2` FOREIGN KEY (`idn`) REFERENCES `niveaux` (`idn`),
  ADD CONSTRAINT `resultas_ibfk_3` FOREIGN KEY (`idmat`) REFERENCES `matieres` (`idmat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
