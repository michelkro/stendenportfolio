-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jan 2017 om 15:13
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `design`
--

CREATE TABLE `design` (
  `User_ID` int(4) NOT NULL,
  `Header_Color` varchar(25) NOT NULL DEFAULT '#222222',
  `Background` varchar(25) NOT NULL DEFAULT '#ffffff',
  `Menu_Colour` varchar(25) NOT NULL DEFAULT '#222222',
  `Text_Colour` varchar(25) NOT NULL DEFAULT '#ffffff',
  `Font` varchar(25) NOT NULL DEFAULT 'arial',
  `Menu_Active` varchar(25) NOT NULL DEFAULT '#080808'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `design`
--

INSERT INTO `design` (`User_ID`, `Header_Color`, `Background`, `Menu_Colour`, `Text_Colour`, `Font`, `Menu_Active`) VALUES
(9, '#303F9F', '#C5CAE9\n', '#303F9F', '#ffffff', '"arial"', '"#222222"'),
(13, '#E64A19', '#FFCCBC', '#E64A19', '#ffffff', '"arial"', '"#222222"'),
(14, '#303F9F', '#C5CAE9', '#303F9F', '#ffffff', '"arial"', '"#222222"'),
(47, '#222222', '#ffffff', '#222222', '#ffffff', '"arial"', '"#222222"');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `grade`
--

CREATE TABLE `grade` (
  `Grade_ID` int(4) NOT NULL,
  `File_ID` int(4) NOT NULL,
  `Page_ID` int(4) NOT NULL,
  `Grade_Description` varchar(500) NOT NULL,
  `Stamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `guestbook`
--

CREATE TABLE `guestbook` (
  `MessageID` int(4) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `E-Mail` varchar(50) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Publicity` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `page`
--

CREATE TABLE `page` (
  `Page_ID` int(4) NOT NULL,
  `User_ID` int(4) NOT NULL,
  `Introduction` varchar(255) DEFAULT NULL,
  `CV` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `Project_ID` int(11) NOT NULL,
  `Project_Description` varchar(2500) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Project_Name` varchar(100) NOT NULL,
  `SLB_Opdracht` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `slb_student`
--

CREATE TABLE `slb_student` (
  `Connection_ID` int(11) NOT NULL,
  `SLB_User_ID` int(11) NOT NULL,
  `Student_User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `text_cv`
--

CREATE TABLE `text_cv` (
  `User_ID` int(11) NOT NULL,
  `cvID` int(11) NOT NULL,
  `Textarea` varchar(1500) DEFAULT NULL,
  `Werkervaring` varchar(1500) DEFAULT NULL,
  `Opleidingen` varchar(1500) DEFAULT NULL,
  `Persoonlijke_Gegevens` varchar(500) DEFAULT NULL,
  `Voorsteltekst` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `text_cv`
--

INSERT INTO `text_cv` (`User_ID`, `cvID`, `Textarea`, `Werkervaring`, `Opleidingen`, `Persoonlijke_Gegevens`, `Voorsteltekst`) VALUES
(0, 1, 'Naam: Kevin Hamhuis <br>\r\nWoonplaats: Annen<br>\r\nAdres: <br>\r\nHuidige werknemer:', 'Gewerkt bij IT World 2011-2013: <br>\r\nGewerkt bij computer protocol 2013-2014: <br>\r\nWerkt bij popidopi 2015-2017: <br>\r\nWerkt bij beheer.com 2006-2017: <br>', 'Studie 1998-2002: <br>\r\nICT web design gestudeerd 2002-2006: <br>\r\nICT beheer gestudeerd <br>', 'Adres: Ovaalstraat 33 <br>\r\nWoonplaats: ovaalland<br> \r\nTelefoon: 0591-543344 <br>\r\nE-mail: Frits.Huig@huigelaartje.com <br>\r\nLeeftijd: 22 jaar <br>\r\nAuto?: Ja <br>', 'Mijn naam is Frits Huigen. Ik ben afgestudeerd op het pothocollege ik hoop dat u door mijn portfolio meer over mij te weten komt.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_Type_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Education` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Photo` varchar(50) DEFAULT NULL,
  `User_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`User_ID`, `User_Type_ID`, `User_Name`, `User_Education`, `User_Email`, `User_Photo`, `User_Password`) VALUES
(24, 2, 'Alex Bijmolt', NULL, 'alex.bijmolt@student.stenden.com', NULL, '31d674be46e1ba6b54388a671c09accb'),
(47, 2, 'blabl', NULL, 'blalb@blalb.com', NULL, '31d674be46e1ba6b54388a671c09accb'),
(13, 7, 'Guest', NULL, 'guest@email.com', NULL, '-'),
(14, 4, 'Kevin Hamhuis', NULL, 'kevin.hamhuis@student.stenden.com', NULL, '31d674be46e1ba6b54388a671c09accb'),
(12, 1, 'Michel Kroon', NULL, 'michel.kroon@student.stenden.com', NULL, '31d674be46e1ba6b54388a671c09accb'),
(9, 4, 'Remy Conen', 'informatica', 'remy.conen@student.stenden.com', NULL, '31d674be46e1ba6b54388a671c09accb'),
(46, 2, 'Robin de Boer', NULL, 'robin.boer@student.stenden.com', NULL, '31d674be46e1ba6b54388a671c09accb'),
(45, 2, 'test', NULL, 'test@test.com', NULL, '05a671c66aefea124cc08b76ea6d30bb'),
(11, 1, 'Cordell Stirling', NULL, 'xcortie@gmail.com', NULL, 'b085d1bf4cff8b1045750706b11f8662');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_type`
--

CREATE TABLE `user_type` (
  `User_Type_ID` int(11) NOT NULL,
  `Teacher_User` tinyint(1) NOT NULL,
  `Student_User` tinyint(1) NOT NULL,
  `SLB_User` tinyint(1) NOT NULL,
  `Admin_User` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_type`
--

INSERT INTO `user_type` (`User_Type_ID`, `Teacher_User`, `Student_User`, `SLB_User`, `Admin_User`) VALUES
(1, 1, 1, 1, 1),
(2, 0, 0, 0, 1),
(4, 0, 1, 0, 0),
(5, 1, 0, 1, 0),
(6, 1, 0, 0, 0),
(7, 0, 0, 0, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Design_ID` (`User_ID`);

--
-- Indexen voor tabel `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`Grade_ID`);

--
-- Indexen voor tabel `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexen voor tabel `page`
--
ALTER TABLE `page`
  ADD UNIQUE KEY `Page_ID` (`Page_ID`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Project_ID`),
  ADD UNIQUE KEY `Project_ID` (`Project_ID`);

--
-- Indexen voor tabel `slb_student`
--
ALTER TABLE `slb_student`
  ADD PRIMARY KEY (`Connection_ID`),
  ADD UNIQUE KEY `Connection_ID` (`Connection_ID`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Email`),
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD UNIQUE KEY `User_Email` (`User_Email`);

--
-- Indexen voor tabel `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`User_Type_ID`),
  ADD UNIQUE KEY `User_Type_ID` (`User_Type_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `MessageID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `page`
--
ALTER TABLE `page`
  MODIFY `Page_ID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `Project_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `slb_student`
--
ALTER TABLE `slb_student`
  MODIFY `Connection_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT voor een tabel `user_type`
--
ALTER TABLE `user_type`
  MODIFY `User_Type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
