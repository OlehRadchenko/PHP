-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2023, 11:59
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `grupa1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `IDFilm` int(11) NOT NULL,
  `Tytul` text NOT NULL,
  `Gatunek` text NOT NULL,
  `IDRezysera` int(11) NOT NULL,
  `Rok_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`IDFilm`, `Tytul`, `Gatunek`, `IDRezysera`, `Rok_prod`) VALUES
(1, 'Ojciec chrzestny ', 'dramat', 4, 1972),
(2, 'Pół żartem, pół serio', 'komedia', 3, 1959),
(3, 'Forrest Gump ', 'komedia', 2, 1994),
(4, 'Cry macho', 'sensacja', 1, 2021),
(5, 'Przemytnik', 'sensacja', 1, 2018),
(6, 'Pulp Fiction', 'gangsterski', 5, 1994);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recenzje`
--

CREATE TABLE `recenzje` (
  `IDRecenzji` int(11) NOT NULL,
  `IDFilm` int(11) NOT NULL,
  `Ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `recenzje`
--

INSERT INTO `recenzje` (`IDRecenzji`, `IDFilm`, `Ocena`) VALUES
(1, 4, 5),
(2, 5, 5),
(3, 3, 6),
(4, 6, 6),
(5, 2, 4),
(6, 1, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezyserzy`
--

CREATE TABLE `rezyserzy` (
  `IDRezysera` int(11) NOT NULL,
  `Nazwisko` text NOT NULL,
  `Imie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `rezyserzy`
--

INSERT INTO `rezyserzy` (`IDRezysera`, `Nazwisko`, `Imie`) VALUES
(1, 'Eastwood', 'Clint'),
(2, 'Zemeckis', 'Robert'),
(3, 'Wilder', 'Billy'),
(4, 'Coppola', 'Frank'),
(5, 'Tarantino', 'Quentin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`IDFilm`);

--
-- Indeksy dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD PRIMARY KEY (`IDRecenzji`);

--
-- Indeksy dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  ADD PRIMARY KEY (`IDRezysera`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `IDFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  MODIFY `IDRecenzji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  MODIFY `IDRezysera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
