-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Mrz 2024 um 15:04
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
(1, 1, 1);

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
  `PlanPermissionId` int(11) NOT NULL,
  `Preis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `plan`
--

INSERT INTO `plan` (`PlanId`, `Name`, `Visible`, `PlanPermissionId`, `Preis`) VALUES
(1, 'Kostenlos', 1, 1, 'Free forever'),
(2, 'Premium', 1, 2, '5€/m'),
(3, 'Professional', 1, 3, '10€/m');

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
(2, 1, 'Seite Till meier', 'seitetill', 'tillmeier');

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
(0, 'muster@gmail.com', 'Mustermann Kostenlos', 'Max', 0, '', '', 0x89504e470d0a1a0a0000000d4948445200000040000000400806000000aa6971de000000206348524d00007a26000080840000fa00000080e8000075300000ea6000003a98000017709cba513c00000006624b474400ff00ff00ffa0bda7930000000774494d4507e80306092e2c6206480300001de34944415478daed9b7994675575ef3ffb9c7bef6fac79e8eab17aa0e9a6bb69011110c4a088820a0a8ea0125def19931813cda44693951735839a18082fc820932141300c0a2a428066ee06ba9b069a9ee8a6a71abbe6aadf70ef3d67bf3feeafbadb1823ea7a2fefadc759ab56d5aadfad33ecb3f7fe7ebf7bdf8257c7abe3d5f1eaf8ff78c87fc5a2fd7bee827cd9067d0f1d634c696ae4c4cff5b525fbe90a17feca733ff8d98f608ba5633b5bccb295179dfbc0d4c1be7acbeb7ff3673e6f7ed6073b363cc1e695abd9f495bf58b1e3eaab5e7f2fb0f589c77fa5cdad5365f4f93fc1b8be72b9ffd6dfc80f3efd43f3f43d7774de73e9bbedf88e68f4c5ab7f6503c8cb2fc3be83cb9a0e3d7f43edc96f7f954aff02fd5a17fb26065eb901367de3ef98e93f14bad356bd4b36aebfad303cf2df5fa32a45097ee98d1de87f8c375e2d58aac7354d3e78552edeff774132b5c40cee3b25daf1cc0df2c0155fd67a65ded08da733a5e3bff43aae92a0b1589b545ba3c9dd9f8a0eaefbcec48a77bf8d89b160e0999bff7303ac9b9e66e3472f45a7a6daf5e66bbe10ecdd737d3439717ce4a2404122b1bfd4a606b67f83341e0d275ff7d10bf333cfdd1ac60397184df208186fb093332dc1dead7f6036dd798b99b3e64d558af6d0ee7ffda5d64abc2155234ec05827617ce8f4c2f873ffd4fed417bf184ebfdc157ffb8d3c3f73c4c0870db0e5d6ef522895242ce64f8e363c767d7ef0e017f271dc16a920dee904a0deff429bd9d9bf8be90d17918b47bb3a86aefeb34275d7b78278668d7887d11483438ca00a41b56ea2febd67863b9efce7e0e6f77c8a91a1e2f0fd5ff8850de051bc11f1820882b196d0cd74e6a75efa62fec083ff32dd7efc490b6fbf90f1d141000280039b9fa1ef84d792bbf4920b4dffbebf0bab33bd8222805530de991410f4156fa47ff7f7d9d0b34ce6f4779c949f79e4cba19b3847d45a44109f03491049008f6fcc2b4e0927c77bd2f1f4aff6bd70fbb1f7f41d73cdd57ff2f59dc33bf64cffc96d5720f2f373769c3a44b15e111050c00846bdcdd586cf4ea79b3fd0fce0831b5f3e71e7110fa88f8f13a81a191b3e3f9c9eee359a62d567874711f55202c4bf32d018ddf2e7483c983f7bfdc5bf9e9b79e13b513c72aef16a451550840a680dd46154b12882a7362decd911f1f8fdf5fcd33f3ef089fe4d3b7f7ce08167aeed6eea5c03c833f73df673d74e9284244dc5a50e9c07afd9d7ec85faa499ebc02613470c904c4f1383884b23d423de832aaaa0785257911a886afa9f2efebd893eaa8fbc05efa77b9a0eddf657f9eab62bc264729978b24da8479c832481b40edea3e2999e31ecdc9663fda3399edf1c908e420f6af271dc190f4c7e60f0e99db75d77c11f7d8c6d83a51f7eea32547fb627a628a973ceabd7ecf080035cc3cb24837e63e44808a4f51a0e0451a306e4a850379a922693b602945cfd672ebc77ffbfd1db3c5746a3c52794c69ff8ab301d3fc7e00dc6807a508762b2b97d0ac44c26adecd99b67e0f994eab8a19c332c2c1aca46983296a80281f73039bd7262fbfe2b9e1dbfffecded71cfb35e0d9f127b769eb692b7fda00ce63d344bd570e8700000aa278751e606272ea8807100438502746bd64a163b2e75175785fc183a8ff8f3de0d0535f259a988c261ebaf803c5c9e7be13d6c6de26ce19c86e1daf993ba6092433b87886cd235d7c69ef59fce99e956c9b69a6b360985b129af34a2e12420381669b1094b45e2f8c1f1cbc64dffa176e5ff7eb5ffdcdca4b43e56d7f792b3bfe9d37a4ce93244ed5a1a8a09ecc0bb4f1dd8b47c0d8e888078461440930aa1eef40b3985415d479e299581c30be751b53d33382a04da5120f5795d7adbf941992d6e6816b3e1dc47d9fb6545a8c18148f7a458cc956770e49ea4cc570d7f85aaee5222617ad61f729dbd9b3ff392a079ee59d7e902209a928811802c063b2e4a7e0bd676c646c49ba69eb37927abafcf8df79f7e7fbaeb9fb27ddd26b16ee4e85441bfe2ea092dda8d7467a34470c80c90243451551bc512455c42b2e31d4a7ab124d20d3544f78ee961bf660838997b7dc4f6f4118baf1e36b4af6de3f8f5a472e10a98799d765b7a20aa429a209b8843de365ae1f7f3db7b7bc8be9456b99534db0ad3df4e54b5cd9d4c6d6bd1bf9507d1f2b99c220181a58d4b8640150cfd4f474ae3e3ef516b773e0af733537f4d30650d4f92cf667f3b6c91261e6918d90386c008404303efb75da88179379119a7aa62a550d8dd96fd457e6944609c7243775d58517350f6cfa535b9e3ace941d18450d99a50544157c9d384d787a6c11578cbd992716bc95b46711611820d33502ef105ba0b270053f2a97d9bee705de3fb19dd3cd1488471a8757034e14238a5130f81cf538dc5d1fe36faeba7a2eaaf57a9c8ca6375d86f54e9c772092254c95ecd04610540900739407a8f7b34611f15902f002b3b0ab829fec28e8f205c78ef41cbc9e2458d95ddcf4c01f4733077fc324b5265fd4c3b12626331aea518d998c853b475672ad7b272f1f733ab47467dea60e707852148f51f0adddec5e1a70f9de3c4f0ded6031755af0780411c518b29f11d234667a72825c3d8126a68cb1ce1a874915e3c5e011f53f9904d50b9a20a4a0ee280f902020c8b6ec014433ebf8c6651ae79389085d71fef98cdcf889b5a5971ffdcba83a749e491343e3199c475551113009aa292f4f94f89f03277147ebb9548f391e5328239a1d41d5939a2c5c9cf7876fca46cdf8b92b78ac56251ad8478b219b970c96450c1e987071f9b283dbde70605ef9fe1d4fef1d79f19acb1111be7dfc72226f250b1fcd42de65464340bd69e0a139820226082802aaa21905c85c465054953476f5b53b1fce4d5dfede8bcb07377e27373df00ee39cc9024c1aa1952da61a9324caba7d9d7ce6a573f976cf87993af664342aa2ce81cf6e1b20f18a261e52254ca1d9793ac707c9efd98c8cf613982307763a3b7f668cbecae4bc07fb0edef0e29efe1b962de85923227cfb07f764875511bc2143f68c03a8cbce35cbe6458e4e82da38ca2c5353107c960370444d49cf82bbbffcf7d1d4c025d6d5ca32ab20669f4f3c3ef618eb188b436eda33971bab6fe6e0dab3d0ae4e8c5750d788290f22789f6dc63a43d9a794c7f693ec7b96e943fd38b104b3491b6ddca56461ac596e8ad398d487f9e96af2ce170f1c5af6863ff8b33f9bac54ef2a144b49a028d288fb0c1550c9d69b3580faa343002504eac68149331ee0b2e0c77a16b41e3caf30563782cfe0c29bc6e11bb1953a4885e786ca5cb17f193fea7a0bc9da93b0c526bc7308608cc9ac6e1c8a459c231a1ba16d7017e9be67991cdf4fac21926fc2040152abe07d1d87c362c0cfe6328f05c467e1a6c653abeb71fb4727aeb96eddd327cefb9dcffeed876eba7a160a33363b9b48d56034cb6cdea5470ce0d5e100355e543ca20218a6155255e6dac4e25230f6a8a422cc1aaf96067c7f773b970fae64fb7167c39225489803e76693285ec10a8804d8fa34f9cd1b081e7888d2e00003d693b6b4637245108ba862bc1e3e240d3402c135e2365687aacba835903ad33a3c39f3f9fa331b0b61507c4a9cc9420e73d8abad016904bf4f93a33d207b4cc4e2c5122bd455a87b08551b8f69e63f22a89846f47bf65623beb9b78bdbdacf60f4e493d1ce4ec41b3471190169908e0cce8470a88fce75f7b1ecf1c738766a94a20dd8dbd4cc3a13306c836cde342363ce801770286a14a3d93c0ad435c1f914752ec305a3a83849e3680551fe392bb3bc217b5e53838e195c9a46a22a3befba4d8f18c0187240c55a52156ace93ba062f50df885dc9e2c66490946278ec50916f0c75f150c76a64e55a4c7b7b4642f0886bfcad052382784f6efb5616df7b0f27beb48de37d4c6f93a36c85a6708a3739f876dacdd3523a2ce054b5e1fa0d5e8f220d6caff9b4a1f4fcacb76759c23b5c90a2460f273d9db0f89715e9f3488b2f3f08264fe00e1b208963f2203371223ef5280e23929120f10d66e7b3181661b862f89783056ea82c60f7fce5246d2de48c05af88518cce32388f9a005ba9507ae271963f7c3f674d1c624d28f4168a7475c48489103aa557a638593d37d1ce2daec4a47718efb16a1b99c6e36c16c7a242ec34f314e7b2b5244307e752ea8177a97875e3060e8470d063aa19dfd19428bf6fc0b8c41d31407d6a82e9b121a92549ce8ac78a36ecad8828da10244e854d230157ee6fe5fe683153bd0b91424848066f78cd9044c9949f55a2fe3edaeeff31afddfc146fc4b1325f607e2ea4b510912bc6985a82ad838863b13afed84ef3bac87153ac84785432e8130f4666151aa44e214d1b1e9039a95321a9a72c5cdd33d3ba7520953d6920952c1f66f378521f1b373e22c9d13920f429ba6f8f8810088db4298211c11ab078c69380db0ee6b96eb8835d5d4b49e674436830d2c80b0d2e209a2212201ea2adcfb3f8fe1f70eac0014e8f0ccba232ddb93ce5282217803519ca1803221162234ab6c03bf2794e6a163632c6d6c19489b8c1e8bc40831825eaf1eaf1de6510e794c827bcb1275ebcb665e6e27c92e4645a5033ab4b94cc9715346dd0bc592aaca03333a26032a291859c118f1561fb21cb95a365ee652113bdf3495b9a31a288f8235ca8a1338c84d8c9190aeb9f64eee38ff2f6789a538a05164545da821c511410858a9514a316d1103101922b22360736406dc05ce339b74d5929151e3914f07225879b5d884ce7780597a6883ad694137e7d7e8573cbd555a5a1e95598044fc0ec7d7ad58c03a860add5598dd1400181543120d2f844059cb1bc3803b73d91f0c4f25eaacb96e0a380c0b8467d30cbcaaeb1885143b46737cdf7fd98053b77b3ca859cdad9c6924244932d90371613a4181b93aa323463c94b8939611e316103660d789b911e17b324aad231c7f0f444ca531311332ec24806cf4992d25d52deb730e5c31d159626d398e9184fc2e1cac52c0ff060bccff0a252137fb416f0ea714922aade088a1ac3940a3ba63d076ac2be3822696d8128201477980164a42e6368b65e27fff03a3a1f7a90de890a0ba4cc3cc9d31114680a2c9158acf5884d1956c3a3e315ee1b9820171adeb9a08bd77716680942c08204188d710ed2d45320e50de5841e1bf2c8648183f588481d6f9f235c7a9ce5149d243f5dcde0ae715a15c964943758e7f00a6326646f941b6d3de5e4d4eddb73c400c608415359c5a8f362385857b6571d810a1d81274833a8b492d16399d5e8aa7875987a42b4f371163cfe0c8be390dea08376c9d34440ce4484c6638c23b68e8db5847b0627d83d151349c04462b876d7219e9a8ab970c9025615738402ea433c82f34246403d4bc33a6ded292f3495c9adb0bca6638ad64a1d9fc61941520b2a5915c129463d813a464dc82314b83d5fa2bfa9bbfea088bfe28eef1d95038ca5bdab5b0f68e0f6553c8329748486a2778cb88c4773989d79d4393475f8d4a1498aa8d23438486f6ce92447597214833c16831501e37989847b8747796a6406e7035aa202051ba128b5386563ff147b265ee29c453dbc6d5e275da16994f1b2e4e2d5e39b94d6350167bd460989d11766d0a4a1e375f65232cf372a54313c1ce4f9672db1ae506662ce5cdabb3b0aaa6afef6ee7bfd6103a4cd1d2c5a72acfbe79a4e890af322c1788747f01642a3687506376911f5598344399c90248c28975b69b563e47c489ca4d47084010c39cfa3a323dc373ec168ec6933395a731191cd048f0236b2842ec74c35e13b2feee1a981412ee8ede4b5ce91730e1fa5e80a4374428eb0138c9f82c9d9ba53a6f8660d20ea510b5b4d9e1b6d81bb4d81a1a6164cf71c4c73194aa100a4e6a81c508f6b0c82cc8d30120a0e8f988c03b4d8900512ee1b2816fa8613779a3592d5e84c4309a8a0414090cf118ac58890aa3213d739e4521ee81b66c85528993cdd6189923158b1980680a83492a711bc75c41e5e3c34c14b63139cd0061f3c3e60f9eb04bb148cc448925538552dea05992d81698ac1321447dc3b52e6bad11c5b7205a4b999a0b5156d6d424283098d05240a8e92c3e21d15a01888f5a1602c88153410d40bad29a3c57279afd4aba77973444b6704443046b046b0180c19534bf1385516151752ae8f93f81a251102c93e9f95baa93698a651ac81b20d10ef29b7a72c7f7389b96f3044f96934a967925a3d42883a201570822165da073c305ae4e6be3c8fa739aaa53ca65c469a4ad0d20491cdd49815a1368d39ba241605960028e50c2e276860c03ab042e284726034674d2cd6e01a25f32cd03261a436c062b1de60101a028e921ade6a9610b4473c54ddce8e78903a1ea3062f4ae21cce2b5633033aafd828e58c130ce79d51e298258e303f81cf4af9b32552c0e135ab2da412b17932e4a6fe123f988818cf47484b097221e4f368a98414f288358d2fab04e1e1765ce601aa244064c059c15b411bae1e1a2167d42d32dcde373c7e4eb55cecf1855c43a60a88c51b8311438025ebac64db0d10a4e65812e7692f1cc7c32dcdfc707a2703b509021598add23825309e6397075c78568933e7a7945c0dad3a3474a83804db605b0e31e0ace1c5aae5cefd11778ee6d94f0485009b8bd0c0426091621e696e8230cc2ed5081a059249fba33a43360cc96570e8b19235738c012b04ea2958f1f312f782dfdd3fe8d01e99d341d0d98a2b152030781b70c8a60c59cfdcd46069789b66e891a8a7306379abf6724c5b2777ccec64f3583fb153f08eee7678c71b0abcf3759639b682a9bb460dc821daa808991a0d646760cc72c77acbbf3c1fb28d0857c821b9086333b12646b0850274b643319f7969603231155ac51b9d6d7e350c60093334541334c898118c15f24628589f02a978f554aa30d38fef1b85521e6dca639acb1caac5ac2bc52c8d1d2b624ba70b32fd2e063106f51ea92acbe3329f6c3a91c77ae6f3d0f42e161f33c5856708ab5a63c2b892d5ff8c6224134259bd3a45708ccc043cfa6cc03d8f1a1e1bf6f4759690420eb141567613708502e19c6e6c5707be98c71bc159106b593259e5d4b1fa0c8582f64ccc1c31401086948120309e40506350a3881522200af1abe6768ead6b6fb95691cfd56af14253ab432dc68f4ea06690c458e220604be8d91fa6ac8a3dafa917088c20365396eab36645695c38279ac399c72b3d6fda4249a7f049c6de8c66245fc5376a119e4a0c4f6f0bb8735dc8b61d019204844d016a051541d481cd63babb09e6cfc3b59611633321670dcd699dd3760ff3e1dd931cd3de36b95544cfdcb0e9282618580a80093c127834eb8b23c6e3c560ac10d763f7cd87efbcf28beff9d8e3fb0f0efdeee444e5bd49ec9a324d20b3fc1015c368deb03e88199684a5cc309716acc9e4aa34a4abc6096d95198ae94c16e30dc9ad92714d2386d4c1b67dc2f7d659366c89b03379ba44c859cb8426689a20f922b6bd87706e37dad586cf59c46465cb9c2acb0f0ef1b617f671c1b0322f97a7daa2f5367a98eee93a2a090636cb5ba1f7441eb13a9b23b258b622a9c0ae2f7d515bdb9a36af5eb5ecb7d73ff5fc5d4383e3bf3f53a99d9eaa06ccd66e1510431244ec2cc47c35ddc53657e122e6b1504b8dde4196c8a4a1ba34ebd8646c53142fcafe09cb0f37c0c3cf06d4c672cc3511a5d064a52f8410872db7628e3d16dbdd81cb05789bf5b5ac17da26273863dbcbbceba5114e4e4bb4148b6800e0d42187df766994c4b2d31a2b98800c2e1aa572af4aa86aeace0baadcfead2b7874c386da3f7cf96b77bdefe3ffedf1ed3bf77f68646cfab76bb5fa72e73d6a1bb578011f840c9a94ebdd3eb624a37c84c59cea3ac8374884992d5b371047c4325a85077679eed998d03f14d1698a2c0e237280f5062f82147283be1029cb97f4c40bbbb04631780c8692357dcb77ef8a8edfb2bdf3edc3caaaa099a6a281c0a3a1a2a11a253e5c15ce2aa449c220597d2334101825b04a6094d04021b289898a3ec81579e4d175f2d56bfe69e1fb3ff3c99edbaef9fbe1671ffcee656b562e3ebfbba3e5b27c141cca5aea82aacd80d084b820607d7e9a2f452f7095ddc17ea91288c17803ce63f0ccd42df7ef30fc8fefa75c73af30d817b2408acc0f224a620909b1b9c278a1adf3faeed52b2e1a698dd6a561569cf5085160263b9b0b57ac9dd37dc129cf6edeb8686498b962298420a147039fa103362c32426574e2e88248c6044da06266e3bf5127280486e5735b8782b75f529fd8f62373f93537afdcf4fc4b57694777feb4dffcec5f7ff95bff74cfd235c76e7fdf3bdef48737fdebdddfed1b1afbd474cdbfd9a994d2342d88045951532dc39172b3ed63533ac147d25ece13a19e5a9e1d82ef6ff63cfb524a5a0b68b321edf988760908b14818d5a5a9f440d4dd76d9d2534f7ce8fd5ff9bdf41fce3cc7a3e0d398e5872639fb5065ffd9d3133b97ae693efec5a54df38279ede4a6cac8681d699cc97b87776908509d38ca003697673ee858403cdb461732be6f03a1ad335739f9d4c5e9c76fdadab6e5b99d7f3b335939dd95dbcd4b43e3d7dffcf0c65b562fecbef28e27372eef5ad2bb61f9e2791fdd3530b1bcb53675e6c081beafef4e7279a761a3afa3c412b029aaf0b2ddc63313115d0f291bf6a5c45350d480d6c0d01a047406398c0a522eeecacd9df3a5a6950bbfd7bfe1f9f1e4b50bb3d41418df3a5de3757d7d9cbb7b80b57165754f87bdacdd07baf88cd5225d0ba8eca9e36f7d1a4d4da3e19b12fba40e60c2e088018aad9d3c75a668e18defbcd3556b6f0ce2cab146b3171c10838af500dddd9d35423b2e4168c052f3a6a97faafef1a91d7de799c9b1b0bb5cf8ada1d1f13b2eef9dda12b517f383d591fa135385fc439512232e44a8365e54308c86cabf566738664069724293082563288aa56402223c4d614cd7fcc2fa73eebff1e6176ebbc17df2caaf704bfd62d6e3797d45a477d320274d3b56e694b99d2de4e7e531adad628bad686431a1923ac12590a25a2f444f54caa5db77bde112e6af5d7d2407cc59ba9ae0b3d7937ce5fb3ff00bd6be3b6deeb9ce07e10c34848f31feb780fb9ed850597dfc31bfdf33b7fd2ff28570086b7162984ed20515633bc997c3342a126942283ee83689bca338c26f350f73723445a80dd0f41e711ea34211c8a3e44528105212437718b3a8698253974ff2da6515b3136835d93b3d8bc2026318ce1fb77af6d01427e495f9739a297695095a4a595d316b46a09235dfab793b32d5d9faf5f1154b3e505ef7ecfa035ff924e5b6b6231e0070eaf91f63af7e54fb8ba517dd896ffb1dbbfdf11fdbf1fe3f96d09d64c240bf093cf3e90f70e33303fdbf76c2ea2f7d77fbe04383b5f4e26a3d99637c2a41515c4b7b797fdd3842bf8f403550e36d00ac88aacc33311b823c0f540a1c48b2da9f68d6870c1b879f53525675a72cee70b4b63a5a3a1c6e8eb5f51469edea04a0b9b585b9226edf69973cda1ed91585ae42446b539414032fc5a8aa61c18b440689a2baa775baa3bcd577f77c7dfc8233d7e5771f4c16ecb9177eedded963f3132ffff636de8878f2dfbe5f2d7dec0bdf99fcca279eccfb039f265facdc03d2dcd2a2977ff15254355d72fbb71e5cbde6a4758f6ed9110c4f5630d670ccc2b96992a644dfdb872d160ff962a95f75ea18490dad46794bb1cacabce3be4a9e0d95084d2d5695d65058d595b06a4e4c67b3d2dd1d516c011f15a8150b6387027c4b900360cd3967b1e9f2eb68ca47d726fbfa6e999cd35ca8b6372d607c6a48bc4ed251200d5309a35c309377cd53a71d37123cf7c2d84b67ace5431f7e2fff7efca76f3e3e7bd7df23412ef271259f5f7ae694d4c775c5296fe5e78df5375f49e94de79be1bff9c3337478dfefebe4e479693dce39975573ab12f0629ce399495899d439b933657eaba3b355e96c138a2d01ae541eaa15bb6fa8352ffdc7fcdec7f74ebefb1f59f69ad30fafb1e9d65b71ef7f3ff2bb9ff9503832f2b97ab1f0791919bdfbe4db6ffbb9fb7bc506f855c663aa249f7e1f41eff2e6fad68d1f74c3c3bfe766aaabe2c6fb8b005e0c2d39a5b910d3dee2e96853a2a67c3d6eeabcafd6bef8eb536b3ff858746867baf8dccffcc4dce36363bcf09e0f2273e79c1aedde7d4bb11e2f4e7b177d2e7af091bf7177dec2eab3def48af7695ef193bfe0384384b32efb2ec1f255936fbee647d7c8f2d5ef329d9d9787b9dcb8256b7ae64d424bb94e7bbba7b9cd2aad6dcf55bb977d6ae6d8b77cb829995e77cfca337feaf000b56a15b3650b6664e49452b5b6b8600d22d2d93b3e88d6ebbfd03effb71960769c76fe471011351d0b77e5cefbd01f05f3977ed836b53c6242f191082d4d01f9d6a6a1b4bdf7abe38b4ebfa0f3b7efbe76b0f7cc89f227eee433e596ff704e97a6584d304683201fe15a9b9fa0a3ed8e0327bd8eb05cfa85f6f77ff45f6636bfb48bbe8bcfa4f09677f7c4bb77fd46ce0d5f3a7f49f945336fe1d72a27bdf7f16070477adcfb3eff73e7e9dbbf9f036f7d2b72f2c9ef2f552bc7d1bbe49ae66f5ed9b7e7c9a738f3f855fff71a60763c79d53fa06203dfb77961b1a7638c979f1f4fbe743ba784e12bfafbd19111d65f7b2d5dcb9747ce5aa72e75a75df49eff8aa3bc3a5e1daf8e57c7abe3ffe9f1bf00a21b5b26b842b7cb0000000049454e44ae426082, 'maxm'),
(1, 'meier@gmail.com', 'Meier Pro', 'Till', 1, '', '', '', 'meiermeier');

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
