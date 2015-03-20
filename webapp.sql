-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2015 at 09:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf16_bin NOT NULL,
  `descritption` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=12 ;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `name`, `descritption`) VALUES
(1, 'Anmeldung Verein', ''),
(2, 'Anmeldung Team', ''),
(3, 'Absage Verein', ''),
(4, 'Absage Team', ''),
(5, 'Zusage Verein', ''),
(6, 'Zusage Team', ''),
(7, 'Anfrage Verein', ''),
(8, 'Anfrage Team', ''),
(9, 'Warteliste Verein', ''),
(10, 'Neues Team', ''),
(11, 'Neuer Verein', '');

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE IF NOT EXISTS `adresses` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `street` varchar(100) COLLATE utf16_bin NOT NULL,
  `plz` varchar(5) COLLATE utf16_bin NOT NULL,
  `nr` varchar(5) COLLATE utf16_bin NOT NULL,
  `city` varchar(50) COLLATE utf16_bin NOT NULL,
  `country` int(11) NOT NULL,
  `object` varchar(50) COLLATE utf16_bin NOT NULL,
  `text` text COLLATE utf16_bin,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`id`, `street`, `plz`, `nr`, `city`, `country`, `object`, `text`) VALUES
(1, 'Jakob-Schick-Str.', '55252', '2', 'Mainz-Kastel', 1, 'Bezirkssportanlage Mainz-Kastel', ''),
(2, 'Waldhofstraße', '55246', '11', 'Mainz-Kostheim', 49, 'Willhelm-Leuschner-Sporthalle', 0x54657874),
(3, ' Oberfeld', '65205', '7', 'Wiesbaden', 49, 'Sportplatz Erbenheim', 0x4b756e7374726173656e),
(4, 'Am Roten Berg', '64367', '15', 'Mühltal', 49, 'Stadion', 0x4b756e7374726173656e20756e6420526173656e706c61747a),
(5, 'Wiesbadener Landstraße', '65203', '1b', 'Wiesbaden', 46, 'AKK Sportplatz', 0x4b756e7374726173656e);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  `full` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=57 ;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `full`) VALUES
(1, 'TSG Mainz-Kastel', 0x5453472031383436204d61696e7a2d4b617374656c20652e562e),
(2, 'FV Biebrich 02', ''),
(3, 'FC Freudenberg', ''),
(4, 'SV Erbenheim', ''),
(5, 'SV Wiesbaden', ''),
(6, 'FSV Michelsbach', ''),
(7, 'Eintracht Trier', ''),
(8, 'EGC Wirges', ''),
(9, 'FK Pirmasens', ''),
(10, 'TV 1817 Mainz', ''),
(11, 'SVS Griesheim', ''),
(12, 'SG Rosenhöhe Offenbach', ''),
(13, 'Fortuna Köln', ''),
(14, 'Spvgg. Sonnenberg', ''),
(15, 'KSV Hessen Kassel', ''),
(16, 'VFB Marburg', ''),
(17, 'TSG Kaiserslautern', ''),
(18, 'JFV Oberaus', ''),
(19, 'ESV Siershahn', ''),
(20, 'Würzburger Kickers', ''),
(21, 'Germania Weilbach', ''),
(22, 'FC Bayern Alzenau', ''),
(23, 'TSV Schott Mainz', ''),
(24, 'Arminia Hannover', 0x53562041726d696e69612048616e6e6f766572203139313020652e562e),
(25, 'FC Hennef 05', ''),
(26, 'Sportfreunde FFM', ''),
(27, 'TSG Jügesheim', ''),
(28, 'TSV Heunsenstamm', ''),
(29, 'Wormatia Worms', ''),
(30, 'Viktoria Griesheim', ''),
(31, 'Freie Turnerschaft-Wiesbaden', ''),
(34, 'TUS Nordenstadt', ''),
(35, 'FSV Mainz 05', ''),
(36, 'Bünder SV', ''),
(37, 'Sportfreunde Siegen', ''),
(38, 'Hassia Bingen', ''),
(39, 'FV Rhein-Hunsrück', ''),
(40, 'BSC Eintracht Südring', ''),
(41, 'VFR Butzbach', ''),
(42, 'EFC Kronberg', ''),
(43, 'SG Arheiligen', ''),
(44, 'Spvgg. Hochheim', ''),
(45, 'Spvgg. Amöneburg', ''),
(46, 'Opel Rüsselsheim', ''),
(47, 'Türkischer SV Wiesbaden', ''),
(48, 'Mombach 03', ''),
(49, 'SKG Rumpenhain', ''),
(50, 'TSV Bleidenstadt', ''),
(51, 'FC Sulzbach', ''),
(52, 'Schwarz-Weiß Wiesbaden', ''),
(53, 'SV Niedernhausen', ''),
(54, 'TUS Koblenz', ''),
(55, 'SV 1911 Traisa', ''),
(56, 'JFV Walluf', 0x4a46562057616c6c7566);

-- --------------------------------------------------------

--
-- Table structure for table `connections_club`
--

CREATE TABLE IF NOT EXISTS `connections_club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `club_id` mediumint(11) NOT NULL,
  `role` varchar(25) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `club_id` (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `connections_club`
--

INSERT INTO `connections_club` (`id`, `user_id`, `club_id`, `role`) VALUES
(5, 1, 1, 'Turnierkoordinator'),
(6, 2, 1, 'Jugendleiter');

-- --------------------------------------------------------

--
-- Table structure for table `connections_team`
--

CREATE TABLE IF NOT EXISTS `connections_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `team_id` mediumint(11) NOT NULL,
  `role` varchar(25) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `connections_team`
--

INSERT INTO `connections_team` (`id`, `user_id`, `team_id`, `role`) VALUES
(1, 1, 1, 'Trainer');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) COLLATE utf16_bin NOT NULL,
  `fullname` varchar(50) COLLATE utf16_bin NOT NULL,
  `mail` varchar(50) COLLATE utf16_bin NOT NULL,
  `session` varchar(50) COLLATE utf16_bin NOT NULL,
  `pw` varchar(25) COLLATE utf16_bin NOT NULL,
  `phone` varchar(25) COLLATE utf16_bin NOT NULL,
  `authKey` varchar(50) COLLATE utf16_bin NOT NULL,
  `accessToken` varchar(50) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `fullname`, `mail`, `session`, `pw`, `phone`, `authKey`, `accessToken`) VALUES
(1, 'Pascal', 'Pascal Link', 'pascal.link@tsg-kastel.de', '', 'tsg', '0171 54 55 316', '', ''),
(2, 'hheggemann', 'Heiner Heggemann', 'h.heggemann@web.de', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `date_begin` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `adress_id` mediumint(9) NOT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `parent_event` mediumint(9) DEFAULT NULL,
  `club_id` mediumint(9) NOT NULL,
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  `attachment` text COLLATE utf16_bin,
  `date_attachment` datetime DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `club_id` (`club_id`),
  KEY `adress_id` (`adress_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date_begin`, `date_end`, `adress_id`, `category`, `parent_event`, `club_id`, `name`, `attachment`, `date_attachment`, `type`) VALUES
(2, '2015-06-20 14:00:00', '2015-06-20 20:00:00', 1, 1, NULL, 2, 'Sommerturnier', '', '0000-00-00 00:00:00', 1),
(3, '2015-05-19 15:00:00', '2015-05-21 15:00:00', 1, 1, NULL, 1, 'Otto-Walter-Pfingstturnier 2015', '', NULL, NULL),
(4, '2015-05-23 15:00:00', '2015-05-23 20:00:00', 1, 1, 2, 1, 'Otto-Walter-Pfingstturnier 2015 - C-Jugend', '', NULL, NULL),
(6, '2015-03-07 09:30:00', '2015-03-07 16:00:00', 2, 2, 13, 1, '46er Indoor Masters 2015 - G-Jugend', '', NULL, NULL),
(7, '2003-06-20 15:00:00', '2007-06-20 15:00:00', 3, NULL, NULL, 4, 'Oberfeld-Cup 2015', '', NULL, NULL),
(8, '2004-06-20 15:00:00', '2004-06-20 15:00:00', 3, NULL, 4, 4, 'Oberfeld-Cup 2015 U10', '', NULL, NULL),
(9, '2015-06-19 15:00:00', '2015-06-19 15:00:00', 4, NULL, NULL, 55, 'Sommerturnier 2015', '', NULL, NULL),
(10, '2015-02-08 09:30:00', '2015-02-08 17:30:00', 2, NULL, 13, 1, '46er Indoor Masters 2015 - C-Jugend', '', NULL, NULL),
(11, '2015-05-14 00:00:00', '2015-05-14 00:00:00', 5, 1, NULL, 45, 'Sportwerbe Woche 2015', '', NULL, NULL),
(12, '2015-05-14 00:00:00', '2015-05-14 00:00:00', 5, NULL, 11, 45, 'Sportwerbe Woche 2015 U7', '', NULL, NULL),
(13, '2015-01-10 00:00:00', '2015-03-07 00:00:00', 2, 2, NULL, 1, '46er Indoor Masters 2015', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`) VALUES
(6, 'Adresse'),
(4, 'Benutzer'),
(3, 'Eintragung'),
(5, 'Event'),
(2, 'Team'),
(1, 'Verein');

-- --------------------------------------------------------

--
-- Table structure for table `protocol`
--

CREATE TABLE IF NOT EXISTS `protocol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `text` text COLLATE utf16_bin NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `action` (`action`),
  KEY `module` (`module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` tinyint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(4, 'Abgesagt'),
(3, 'Absage'),
(1, 'Anfrage'),
(6, 'Gespielt'),
(5, 'Warteliste'),
(2, 'Zusage');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `team_id` mediumint(9) NOT NULL,
  `event_id` mediumint(9) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `event_id` (`event_id`),
  KEY `team_id` (`team_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=22 ;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `team_id`, `event_id`, `date`, `state_id`) VALUES
(2, 1, 4, '2015-01-30 21:56:12', 1),
(3, 1, 2, '2006-05-20 13:00:00', 1),
(4, 17, 3, '2016-02-20 14:00:00', 1),
(6, 9, 6, '2017-02-20 14:00:00', 1),
(7, 1, 9, '2015-06-20 13:00:00', 2),
(10, 12, 6, '2015-01-30 21:56:12', 1),
(11, 1, 10, '2015-01-30 21:56:12', 1),
(12, 12, 12, '2015-03-15 23:00:00', 2),
(13, 2, 4, '2015-03-15 23:00:00', 2),
(14, 7, 4, '2015-03-15 23:00:00', 2),
(15, 12, 4, '2015-03-15 23:00:00', 2),
(16, 20, 4, '2015-03-15 23:00:00', 2),
(17, 21, 4, '2015-03-15 23:00:00', 2),
(18, 22, 4, '2015-03-15 23:00:00', 2),
(19, 23, 4, '2015-03-15 23:00:00', 2),
(20, 24, 4, '2015-03-15 23:00:00', 2),
(21, 25, 4, '2015-03-15 23:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  `club_id` mediumint(9) NOT NULL,
  `season` varchar(4) COLLATE utf16_bin NOT NULL DEFAULT '1415',
  `short` varchar(10) COLLATE utf16_bin NOT NULL COMMENT 'z.B. TSG U14',
  `year` varchar(4) COLLATE utf16_bin NOT NULL COMMENT 'e.g. 2001',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`club_id`),
  KEY `club_id` (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=27 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `club_id`, `season`, `short`, `year`) VALUES
(1, 'TSG 1846 Mainz-Kastel U14', 1, '1415', 'TSG U14', '2001'),
(2, 'TSG 1846 Mainz-Kastel U15', 1, '1415', '', ''),
(3, 'TSG 1846 Mainz-Kastel U19', 1, '1415', '', ''),
(4, 'TSG 1846 Mainz-Kastel U17', 1, '1415', '', ''),
(5, 'TSG 1846 Mainz-Kastel U16', 1, '1415', '', ''),
(6, 'TSG 1846 Mainz-Kastel U13', 1, '1415', '', ''),
(7, 'TSG 1846 Mainz-Kastel U12', 1, '1415', '', ''),
(8, 'TSG 1846 Mainz-Kastel U11', 1, '1415', '', ''),
(9, 'TSG 1846 Mainz-Kastel U10', 1, '1415', '', ''),
(10, 'TSG 1846 Mainz-Kastel U9', 1, '1415', '', ''),
(11, 'TSG 1846 Mainz-Kastel U8', 1, '1415', '', ''),
(12, 'TSG 1846 Mainz-Kastel U7', 1, '1415', 'TSG U7', '2008'),
(13, 'TSG 1846 Mainz-Kastel U6', 1, '1415', '', ''),
(14, 'TSG 1846 Mainz-Kastel F3', 1, '1415', '', ''),
(15, 'TSG 1846 Mainz-Kastel C3', 1, '1415', '', ''),
(16, 'TSG 1846 Mainz-Kastel D3', 1, '1415', '', ''),
(17, 'FC Freudenberg G1', 3, '1415', '', ''),
(18, 'Eintracht Trier U14', 7, '1415', 'Trier U14', '2001'),
(19, 'SG Rosenhöhe Offenbach U14', 12, '1415', 'SGR U14', '2001'),
(20, 'Würzburger Kickers U15', 20, '1415', 'Würzb. U15', '2000'),
(21, 'Germania Weilbach U15', 21, '1415', 'Weilb. U15', '2000'),
(22, 'FC Bayern Alzenau U14', 22, '1415', 'FCBA U14', '2001'),
(23, 'TSV Schoot Mainz U15', 23, '1415', 'TSV U15', '2000'),
(24, 'Arminia Hannover U15', 24, '1415', 'SVAH U15', '2000'),
(25, 'FC Hennef 05 U14', 25, '1415', 'FCH U14', '2001'),
(26, 'JFV Walluf U9', 56, '1415', 'JFV W U9', '2006');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connections_club`
--
ALTER TABLE `connections_club`
  ADD CONSTRAINT `connections_club_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `connections_club_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`);

--
-- Constraints for table `connections_team`
--
ALTER TABLE `connections_team`
  ADD CONSTRAINT `connections_team_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `connections_team_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `contacts` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`adress_id`) REFERENCES `adresses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `protocol`
--
ALTER TABLE `protocol`
  ADD CONSTRAINT `protocol_ibfk_3` FOREIGN KEY (`module`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `protocol_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `protocol_ibfk_2` FOREIGN KEY (`action`) REFERENCES `actions` (`id`);

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `subscriptions_ibfk_4` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `subscriptions_ibfk_5` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
