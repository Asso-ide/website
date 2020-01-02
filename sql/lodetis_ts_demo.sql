-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Généré le :  Lun 30 Décembre 2019 à 17:19
-- Version du serveur :  5.5.62-0+deb8u1-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--

-- --------------------------------------------------------

--
-- Structure de la table `lodetis_ts`
--

CREATE TABLE `lodetis_ts` (
  `id` varchar(32) CHARACTER SET utf8 NOT NULL,
  `question` text COLLATE latin1_general_ci NOT NULL,
  `id-oui` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `id-non` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `base-juridique` text COLLATE latin1_general_ci,
  `url-juridique` text COLLATE latin1_general_ci,
  `lang-en` text COLLATE latin1_general_ci,
  `lang-ar` text COLLATE latin1_general_ci,
  `lang-es` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `lodetis_ts`
--

INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-0','Avez-vous été militaire ?','MIL-1','FIN-NON','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-1','Avez-vous servi dans une unité combattante de l’armée française ?','FIN-CR-PD','MIL-2','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-2','Avez-vous combattu dans les rangs des forces françaises de l’intérieur ?','MIL-3','FIN-NON','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-3','Êtes-vous titulaire d’un certificat de démobilisation délivré par la commission d’incorporation ?','FIN-CR-PD','MIL-4','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-4','Avez-vous été blessé·e en combattant l’ennemi ?','FIN-CR-PD','MIL-5','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-5','Avez-vous servi en France dans une unité combattante d’une armée alliée ?','FIN-CR-PD','MIL-6','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-6','Avez-vous résidé antérieurement sur le territoire français ?','MIL-7','FIN-NON','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-7','Avez-vous combattu dans les rangs d’une armée alliée ?','FIN-CR-PD','MIL-8','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-8','Avez-vous servi dans la Légion étrangère ?','MIL-9','FIN-NON','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-9','Comptez-vous au moins trois ans de services dans l’armée française ?','MIL-10','FIN-NON','','','','','');
INSERT INTO lodetis_ts (`id`,`question`,`id-oui`,`id-non`,`base-juridique`,`url-juridique`,`lang-en`,`lang-ar`,`lang-es`) VALUES ('MIL-10','Êtes-vous titulaire du certificat de bonne conduite ?','FIN-CR-PD','FIN-NON','','','','','');
--
-- Index pour les tables exportées
--

--
-- Index pour la table `lodetis_ts`
--
ALTER TABLE `lodetis_ts`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
