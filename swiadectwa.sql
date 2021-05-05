-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 02 Paź 2020, 04:18
-- Wersja serwera: 10.4.10-MariaDB
-- Wersja PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `swiadectwa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `swiadectwa`
--

DROP TABLE IF EXISTS `swiadectwa`;
CREATE TABLE IF NOT EXISTS `swiadectwa` (
  `numer_swiadectwa` int(11) NOT NULL AUTO_INCREMENT,
  `rok_szkolny` varchar(10) DEFAULT NULL,
  `kurs_pelny` tinyint(1) DEFAULT NULL,
  `klasa` int(11) DEFAULT NULL,
  `instrument` varchar(25) DEFAULT NULL,
  `id_ucznia` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nauczyciel` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`numer_swiadectwa`),
  KEY `id_ucznia` (`id_ucznia`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `swiadectwa`
--

INSERT INTO `swiadectwa` (`numer_swiadectwa`, `rok_szkolny`, `kurs_pelny`, `klasa`, `instrument`, `id_ucznia`, `data`, `nauczyciel`) VALUES
(1, '2020/2021', 1, 4, 'nie wiem', 1, '2020-10-08', 'Kusiak'),
(2, '2020/2021', 1, 4, 'nie wiem', 2, '2020-10-08', 'Kusiak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `swiadectwa_uczniowie`
--

DROP TABLE IF EXISTS `swiadectwa_uczniowie`;
CREATE TABLE IF NOT EXISTS `swiadectwa_uczniowie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imiona_nazwisko` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `data_urodzenia` date DEFAULT NULL,
  `miejsce_urodzenia` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `numer_pesel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `swiadectwa_uczniowie`
--

INSERT INTO `swiadectwa_uczniowie` (`id`, `imiona_nazwisko`, `data_urodzenia`, `miejsce_urodzenia`, `numer_pesel`) VALUES
(1, 'Mateusz Trojański', '2001-04-21', 'Syców', '123123123'),
(2, 'Wiesław Paleta', '2001-05-14', 'Moskwa', '321312312');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
