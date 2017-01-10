-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 jan 2017 om 14:22
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

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
  `Design_ID` int(4) NOT NULL,
  `Header_Color` varchar(25) NOT NULL,
  `Background` varchar(50) NOT NULL,
  `Page_Font` varchar(50) NOT NULL,
  `Design_Description` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `file`
--

CREATE TABLE `file` (
  `File_ID` int(4) NOT NULL,
  `Page_ID` int(4) NOT NULL,
  `User_ID` int(4) NOT NULL,
  `File_Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Design_ID` int(4) NOT NULL,
  `User_ID` int(4) NOT NULL,
  `Introduction` varchar(255) DEFAULT NULL,
  `CV` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_Type_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Education` varchar(50) DEFAULT NULL,
  `User_Course` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Photo` varchar(50) DEFAULT NULL,
  `User_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`User_ID`, `User_Type_ID`, `User_Name`, `User_Education`, `User_Course`, `User_Email`, `User_Photo`, `User_Password`) VALUES
(1, 1, 'Cordell', 'Informatica', 'Studie Loopbaan Begeleiding', 'xcortie@gmail.com', NULL, 'TestTest'),
(2, 7, 'Guest', NULL, NULL, '-', NULL, '-');

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
(3, 0, 0, 1, 0),
(4, 0, 1, 0, 0),
(5, 1, 1, 0, 0),
(6, 1, 0, 0, 0),
(7, 0, 0, 0, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `design`
--
ALTER TABLE `design`
  ADD UNIQUE KEY `Design_ID` (`Design_ID`);

--
-- Indexen voor tabel `file`
--
ALTER TABLE `file`
  ADD UNIQUE KEY `File_ID` (`File_ID`);

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
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `User_ID` (`User_ID`);

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
-- AUTO_INCREMENT voor een tabel `design`
--
ALTER TABLE `design`
  MODIFY `Design_ID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `file`
--
ALTER TABLE `file`
  MODIFY `File_ID` int(4) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `user_type`
--
ALTER TABLE `user_type`
  MODIFY `User_Type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
