-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Feb 2024 um 17:01
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mosaic`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentcredentials`
--

CREATE TABLE `fragmentcredentials` (
  `FragmentId` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentimage`
--

CREATE TABLE `fragmentimage` (
  `FragmentImageId` bigint(20) UNSIGNED NOT NULL,
  `ImageContent` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `plan`
--

CREATE TABLE `plan` (
  `PlanId` bigint(20) UNSIGNED NOT NULL,
  `Name` int(11) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `PlanPermissionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `planpermission`
--

CREATE TABLE `planpermission` (
  `PlanPermissionId` bigint(20) UNSIGNED NOT NULL,
  `FragmentBackgroundColorOption` tinyint(1) NOT NULL,
  `TextColorOption` tinyint(1) NOT NULL,
  `FontOption` tinyint(1) NOT NULL,
  `OpacityOption` tinyint(1) NOT NULL,
  `SubSiteBackgroundImageOption` tinyint(1) NOT NULL,
  `ShortLinkOption` tinyint(1) NOT NULL,
  `SubSiteLimit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subsite`
--

CREATE TABLE `subsite` (
  `SubSiteId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Route` varchar(50) NOT NULL,
  `ShortRoute` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subsitecontentfragment`
--

CREATE TABLE `subsitecontentfragment` (
  `WebsiteId` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `BackgroundColor` varchar(6) NOT NULL,
  `Opacity` float NOT NULL,
  `Spannable` tinyint(1) NOT NULL,
  `ContentTableName` varchar(50) NOT NULL,
  `ContentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `PlanId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragmentcredentials`
--
ALTER TABLE `fragmentcredentials`
  ADD UNIQUE KEY `FragmentId` (`FragmentId`);

--
-- Indizes für die Tabelle `fragmentimage`
--
ALTER TABLE `fragmentimage`
  ADD UNIQUE KEY `FragmentImageId` (`FragmentImageId`);

--
-- Indizes für die Tabelle `plan`
--
ALTER TABLE `plan`
  ADD UNIQUE KEY `PlanId` (`PlanId`);

--
-- Indizes für die Tabelle `planpermission`
--
ALTER TABLE `planpermission`
  ADD UNIQUE KEY `PlanPermissionId` (`PlanPermissionId`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fragmentcredentials`
--
ALTER TABLE `fragmentcredentials`
  MODIFY `FragmentId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fragmentimage`
--
ALTER TABLE `fragmentimage`
  MODIFY `FragmentImageId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `plan`
--
ALTER TABLE `plan`
  MODIFY `PlanId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `planpermission`
--
ALTER TABLE `planpermission`
  MODIFY `PlanPermissionId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
