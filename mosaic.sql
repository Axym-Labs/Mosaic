-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Mrz 2024 um 22:05
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

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
  `Id` bigint(20) UNSIGNED NOT NULL,
  `UserId` bigint(20) NOT NULL,
  `ShowPersonalData` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `fragmentcredentials`
--

INSERT INTO `fragmentcredentials` (`Id`, `UserId`, `ShowPersonalData`) VALUES
(1, 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentiframe`
--

CREATE TABLE `fragmentiframe` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Title` text NOT NULL,
  `Url` text NOT NULL,
  `MorePermissions` tinyint(1) NOT NULL,
  `Width` int(11) NOT NULL,
  `Height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentimage`
--

CREATE TABLE `fragmentimage` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `ImageContent` blob NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `fragmentimage`
--

INSERT INTO `fragmentimage` (`Id`, `ImageContent`, `Description`) VALUES
(1, 0x89504e470d0a1a0a0000000d49484452000000be0000010a08030000009b861f780000006c504c5445ffffff1e1e1e000000fcfcfc1b1b1b1212126d6d6d171717f0f0f0abababe3e3e3d4d4d4fafafa202020191919151515eaeaeac9c9c9dbdbdb8b8b8bc3c3c3373737080808a2a2a2525252bbbbbb4a4a4ae7e7e77e7e7e5151513d3d3d7070702c2c2c5a5a5a454545959595a7c7e6150000035349444154789ceddcff53da301cc6f13449a196a4df642843a7b8ffff7f5c52761bb442ebaaf7c9737b5ebfe96de79b5c1a68daa21411111111111111111111111111111111111111111111111111111111111111d18718993f5b38f3199c4cbddaeacf510a8d7fe7eb6cb9902fc2a8e65bee97d67bb97ce59e7508f8506d32f9fd4b58693bceb7f3eb45f39d51f77a5cbfbb71a00e0f17c9fcb8643c84f1bf18549b15d7ff877b1c1c2ea29327be82fd60fed8ea7abe51c58f3ca97ca3dacbc97e2b3f2e57be4a283f7ab998d0767d233fe87462f9abfc23f9aad5672b105a7e38dcf767e38f961f5fc08306ce57fdbb8547cd0f8b955a69dcd10fcc737e1a7fc8fc7096f2a3c61dfd307f0eaf6bd8fca8cb6d983fb0f96aa38147dfc4b365e4d157fddb1752be196c2a84b72f9cfc706e602e7f564f1a263f9c191c47bf3ca2e41bd3e8d5e8b7ee15245f99e338dfa8b2f9eabc2933f3ef753e1e7da10dda7373f24d3cc97a273f8117302bbfc9aaac7e2f5fdcacc9f33dfca377475fdc9cfc7e370e34df848f371970fec15a0b9c1f263e4cfe6093d0fcdd8646cc57bf273e4abe6d3717da7506941fce40062c56fe55ccff02cc973491efa10e5d1fd64e6fcf408dbecf2a5b9fabea1a29dfdac1bbae79ab71f2471fd9c2d9f80e385f39b5d71e375fc5cd341f0f69d4fc70a6eb81475f1d76710145cd37a74bd1a8f9a1ff4903e7abfe52226e7e98feb9c5cdefefc4c0cd3f6d38e0e6abb8dd839c6f5433be389480b9f9e1c39bd40dd7b7fcf375dd34305f12f325315f12f325315f12f325315f1278fecbc465e984c507561fcf9f05f259dec9df21359751eeb8bb786ecb57f546ba6abee163a33eb3566f21c63f9c7c77afe387767da5efa4d3e630aa5d57a3fa787d4bff946e9bd4effb0d9eb7fc3383f48b74de04634e4f8b5e79dc581fcde886f1b4dcc72b56d7f2fdee2de9f5dfada6be03c0a6bc80b60f7793929e3c3324dc9f701a111111111111111111111111111111111111115d817dff9f13ffe2dd45c0f30bec7c93f46ddd930af1efcc5ec4618f3ef8e4415f798a8374c212ee009ddf74d093bf28c147bf41fed0561cb0274fd7a6f80d4573159b1679f23425747ee15ae98425ca722b9db0846bb0274fb787cedf24f9d56e7335e5167bf4a1e77eb7815e7914fa3e1b1111fdb77e01e3ab28136529c6000000000049454e44ae426082, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentlink`
--

CREATE TABLE `fragmentlink` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Title` text NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentnews`
--

CREATE TABLE `fragmentnews` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Link` text NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `fragmentnews`
--

INSERT INTO `fragmentnews` (`Id`, `Title`, `Description`, `Link`, `Date`) VALUES
(1, '', '', '', '2024-03-03');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentprojectinfo`
--

CREATE TABLE `fragmentprojectinfo` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Description` int(11) NOT NULL,
  `LogoBlob` blob NOT NULL,
  `CtaLink` text NOT NULL,
  `CtaLinkDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmentsocials`
--

CREATE TABLE `fragmentsocials` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `GithubLink` text NOT NULL,
  `GitlabLink` text NOT NULL,
  `XLink` text NOT NULL,
  `FacebookLink` text NOT NULL,
  `RedditLink` text NOT NULL,
  `DiscordLink` text NOT NULL,
  `RelativeOrder` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragmenttext`
--

CREATE TABLE `fragmenttext` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Text` text NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `fragmenttext`
--

INSERT INTO `fragmenttext` (`Id`, `Text`, `Title`) VALUES
(1, 'Test test test Text asdfljksdfaljkösdfajklasdfjklö', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `plan`
--

CREATE TABLE `plan` (
  `PlanId` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `PlanPermissionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `plan`
--

INSERT INTO `plan` (`PlanId`, `Name`, `Visible`, `PlanPermissionId`) VALUES
(1, 'Kostenlos', 1, 1),
(2, 'Premium', 1, 2),
(3, 'Professional', 1, 3);

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
  `SubSiteLimit` int(11) NOT NULL,
  `FragmentLimit` int(11) NOT NULL,
  `SocialsOrderOption` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `planpermission`
--

INSERT INTO `planpermission` (`PlanPermissionId`, `FragmentBackgroundColorOption`, `TextColorOption`, `FontOption`, `OpacityOption`, `SubSiteBackgroundImageOption`, `ShortLinkOption`, `SubSiteLimit`, `FragmentLimit`, `SocialsOrderOption`) VALUES
(1, 1, 0, 0, 1, 0, 0, 0, 10, 0),
(2, 1, 1, 1, 1, 0, 0, 0, 100, 1),
(3, 1, 1, 1, 1, 1, 1, 1, 1000, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subsite`
--

CREATE TABLE `subsite` (
  `SubSiteId` bigint(20) UNSIGNED NOT NULL,
  `UserId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Route` varchar(50) NOT NULL,
  `ShortRoute` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `subsite`
--

INSERT INTO `subsite` (`SubSiteId`, `UserId`, `Name`, `Route`, `ShortRoute`) VALUES
(1, 0, 'Subsite Max Mustermann', 'seite', 'maxmustermann'),
(2, 1, 'Seite Till meier', 'seite', 'tillmeier');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subsitecontentfragment`
--

CREATE TABLE `subsitecontentfragment` (
  `SubsiteContentFragmentId` bigint(20) UNSIGNED NOT NULL,
  `WebsiteId` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `BackgroundColor` varchar(6) NOT NULL,
  `Opacity` float NOT NULL,
  `Spannable` tinyint(1) NOT NULL,
  `ContentTableName` varchar(50) NOT NULL,
  `ContentId` int(11) NOT NULL,
  `BackgroundImage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `subsitecontentfragment`
--

INSERT INTO `subsitecontentfragment` (`SubsiteContentFragmentId`, `WebsiteId`, `Position`, `BackgroundColor`, `Opacity`, `Spannable`, `ContentTableName`, `ContentId`, `BackgroundImage`) VALUES
(1, 1, 1, '', 0, 1, 'FragmentImage', 1, ''),
(2, 1, 1, '1', 0, 1, 'FragmentImage', 1, ''),
(3, 2, 1, '', 1, 0, 'FragmentText', 1, ''),
(4, 2, 1, '', 1, 1, 'FragmentText', 1, ''),
(5, 1, 2, '', 1, 1, 'FragmentCredentials', 1, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `UserId` bigint(20) UNSIGNED NOT NULL,
  `Email` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `PlanId` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Salt` varchar(10) NOT NULL,
  `ProfilePicture` blob NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`UserId`, `Email`, `LastName`, `FirstName`, `PlanId`, `Password`, `Salt`, `ProfilePicture`, `Username`) VALUES
(0, 'muster@gmail.com', 'Mustermann Kostenlos', 'Max', 0, '', '', '', ''),
(1, 'meier@gmail.com', 'Meier Pro', 'Till', 1, '', '', '', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragmentcredentials`
--
ALTER TABLE `fragmentcredentials`
  ADD UNIQUE KEY `FragmentId` (`Id`);

--
-- Indizes für die Tabelle `fragmentiframe`
--
ALTER TABLE `fragmentiframe`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indizes für die Tabelle `fragmentimage`
--
ALTER TABLE `fragmentimage`
  ADD UNIQUE KEY `FragmentImageId` (`Id`);

--
-- Indizes für die Tabelle `fragmentlink`
--
ALTER TABLE `fragmentlink`
  ADD UNIQUE KEY `LinkId` (`Id`);

--
-- Indizes für die Tabelle `fragmentnews`
--
ALTER TABLE `fragmentnews`
  ADD UNIQUE KEY `NewsId` (`Id`);

--
-- Indizes für die Tabelle `fragmentprojectinfo`
--
ALTER TABLE `fragmentprojectinfo`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indizes für die Tabelle `fragmentsocials`
--
ALTER TABLE `fragmentsocials`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indizes für die Tabelle `fragmenttext`
--
ALTER TABLE `fragmenttext`
  ADD UNIQUE KEY `FragmentId` (`Id`);

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
-- Indizes für die Tabelle `subsite`
--
ALTER TABLE `subsite`
  ADD UNIQUE KEY `SubSiteId` (`SubSiteId`);

--
-- Indizes für die Tabelle `subsitecontentfragment`
--
ALTER TABLE `subsitecontentfragment`
  ADD UNIQUE KEY `SubsiteContentFragmentId` (`SubsiteContentFragmentId`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UserId` (`UserId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fragmentcredentials`
--
ALTER TABLE `fragmentcredentials`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `fragmentiframe`
--
ALTER TABLE `fragmentiframe`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fragmentimage`
--
ALTER TABLE `fragmentimage`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `fragmentlink`
--
ALTER TABLE `fragmentlink`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fragmentnews`
--
ALTER TABLE `fragmentnews`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `fragmentprojectinfo`
--
ALTER TABLE `fragmentprojectinfo`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fragmentsocials`
--
ALTER TABLE `fragmentsocials`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fragmenttext`
--
ALTER TABLE `fragmenttext`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `plan`
--
ALTER TABLE `plan`
  MODIFY `PlanId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `planpermission`
--
ALTER TABLE `planpermission`
  MODIFY `PlanPermissionId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `subsite`
--
ALTER TABLE `subsite`
  MODIFY `SubSiteId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `subsitecontentfragment`
--
ALTER TABLE `subsitecontentfragment`
  MODIFY `SubsiteContentFragmentId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `UserId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
