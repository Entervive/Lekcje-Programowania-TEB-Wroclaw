-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 19, 2024 at 10:03 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzialy`
--

CREATE TABLE `dzialy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dzialy`
--

INSERT INTO `dzialy` (`id`, `nazwa`) VALUES
(2, 'HR'),
(1, 'IT'),
(3, 'Marketing');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oddzialy`
--

CREATE TABLE `oddzialy` (
  `id` int(11) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `liczba_sal` int(11) NOT NULL,
  `liczba_komputerow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oddzialy`
--

INSERT INTO `oddzialy` (`id`, `miasto`, `adres`, `liczba_sal`, `liczba_komputerow`) VALUES
(1, 'Wrocław', 'ul. Wrocławska 1', 10, 50),
(2, 'Kraków', 'ul. Krakowska 2', 8, 40),
(3, 'Warszawa', 'ul. Warszawska 3', 15, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `plec` enum('M','K') NOT NULL,
  `pensja` decimal(10,2) NOT NULL,
  `dzial_id` int(11) DEFAULT NULL,
  `oddzial_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `plec`, `pensja`, `dzial_id`, `oddzial_id`) VALUES
(1, 'Jan', 'Kowalski', 'M', 5000.00, 1, 1),
(2, 'Anna', 'Nowak', 'K', 6000.00, 1, 2),
(3, 'Piotr', 'Zalewski', 'M', 4500.00, 2, 3),
(4, 'Katarzyna', 'Wójcik', 'K', 4800.00, 2, 1),
(5, 'Tomasz', 'Kowalczyk', 'M', 5500.00, 1, 2),
(6, 'Marta', 'Kowalska', 'K', 4000.00, 3, 3),
(7, 'Zofia', 'Nowicka', 'K', 4200.00, 3, 1),
(8, 'Jakub', 'Szymczak', 'M', 5800.00, 1, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzialy`
--
ALTER TABLE `dzialy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nazwa` (`nazwa`);

--
-- Indeksy dla tabeli `oddzialy`
--
ALTER TABLE `oddzialy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `miasto` (`miasto`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dzial_id` (`dzial_id`),
  ADD KEY `oddzial_id` (`oddzial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dzialy`
--
ALTER TABLE `dzialy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oddzialy`
--
ALTER TABLE `oddzialy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD CONSTRAINT `pracownicy_ibfk_1` FOREIGN KEY (`dzial_id`) REFERENCES `dzialy` (`id`),
  ADD CONSTRAINT `pracownicy_ibfk_2` FOREIGN KEY (`oddzial_id`) REFERENCES `oddzialy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
