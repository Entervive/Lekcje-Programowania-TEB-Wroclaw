-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2024 at 09:49 AM
-- Server version: 10.1.48-MariaDB-0+deb9u2
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entervive_sklepwendkarski`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoria_towaru`
--

CREATE TABLE `kategoria_towaru` (
  `id_kategori` int(52) NOT NULL,
  `kategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klient`
--

CREATE TABLE `klient` (
  `id_klienta` int(52) NOT NULL,
  `id_rangi` int(52) NOT NULL,
  `id_zamowienia` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `id_rejonu` int(52) NOT NULL,
  `telefon` int(52) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rekordowy_gatunekryby` varchar(255) NOT NULL,
  `rekordowy_wagaryby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kurier`
--

CREATE TABLE `kurier` (
  `id_kuriera` int(52) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `firma` varchar(255) NOT NULL,
  `telefon` int(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producent`
--

CREATE TABLE `producent` (
  `id_producenta` int(52) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `nip` int(64) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `telefon` int(52) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ranga_klienta`
--

CREATE TABLE `ranga_klienta` (
  `id_rangi` int(52) NOT NULL,
  `ranga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rejon`
--

CREATE TABLE `rejon` (
  `id_rejonu` int(52) NOT NULL,
  `wojewodztwo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sklep`
--

CREATE TABLE `sklep` (
  `id_sklepu` int(52) NOT NULL,
  `adres` varchar(52) NOT NULL,
  `nip` int(52) NOT NULL,
  `miasto` varchar(52) NOT NULL,
  `id_rejonu` int(52) NOT NULL,
  `email` varchar(52) NOT NULL,
  `telefon` int(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `towar`
--

CREATE TABLE `towar` (
  `id_towaru` int(52) NOT NULL,
  `id_kategori` int(52) NOT NULL,
  `id_producenta` int(52) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cena` int(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(52) NOT NULL,
  `data_zamowienia` date NOT NULL,
  `data_wysylki` date NOT NULL,
  `id_sklepu` int(11) DEFAULT NULL,
  `id_kuriera` int(11) NOT NULL,
  `id_towaru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoria_towaru`
--
ALTER TABLE `kategoria_towaru`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id_klienta`),
  ADD KEY `klient` (`id_rejonu`),
  ADD KEY `id_rangi` (`id_rangi`),
  ADD KEY `id_zamowienia` (`id_zamowienia`);

--
-- Indexes for table `kurier`
--
ALTER TABLE `kurier`
  ADD PRIMARY KEY (`id_kuriera`);

--
-- Indexes for table `producent`
--
ALTER TABLE `producent`
  ADD PRIMARY KEY (`id_producenta`);

--
-- Indexes for table `ranga_klienta`
--
ALTER TABLE `ranga_klienta`
  ADD PRIMARY KEY (`id_rangi`);

--
-- Indexes for table `rejon`
--
ALTER TABLE `rejon`
  ADD PRIMARY KEY (`id_rejonu`);

--
-- Indexes for table `sklep`
--
ALTER TABLE `sklep`
  ADD PRIMARY KEY (`id_sklepu`),
  ADD KEY `sklep` (`id_rejonu`);

--
-- Indexes for table `towar`
--
ALTER TABLE `towar`
  ADD PRIMARY KEY (`id_towaru`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_producenta` (`id_producenta`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `id_kuriera` (`id_kuriera`),
  ADD KEY `id_towaru` (`id_towaru`),
  ADD KEY `id_sklepu` (`id_sklepu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoria_towaru`
--
ALTER TABLE `kategoria_towaru`
  MODIFY `id_kategori` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klient`
--
ALTER TABLE `klient`
  MODIFY `id_klienta` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurier`
--
ALTER TABLE `kurier`
  MODIFY `id_kuriera` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producent`
--
ALTER TABLE `producent`
  MODIFY `id_producenta` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranga_klienta`
--
ALTER TABLE `ranga_klienta`
  MODIFY `id_rangi` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rejon`
--
ALTER TABLE `rejon`
  MODIFY `id_rejonu` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sklep`
--
ALTER TABLE `sklep`
  MODIFY `id_sklepu` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `towar`
--
ALTER TABLE `towar`
  MODIFY `id_towaru` int(52) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(52) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klient`
--
ALTER TABLE `klient`
  ADD CONSTRAINT `klient` FOREIGN KEY (`id_rejonu`) REFERENCES `rejon` (`id_rejonu`),
  ADD CONSTRAINT `klient_ibfk_1` FOREIGN KEY (`id_rangi`) REFERENCES `ranga_klienta` (`id_rangi`),
  ADD CONSTRAINT `klient_ibfk_2` FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienia` (`id_zamowienia`);

--
-- Constraints for table `sklep`
--
ALTER TABLE `sklep`
  ADD CONSTRAINT `sklep` FOREIGN KEY (`id_rejonu`) REFERENCES `rejon` (`id_rejonu`);

--
-- Constraints for table `towar`
--
ALTER TABLE `towar`
  ADD CONSTRAINT `towar_ibfk_1` FOREIGN KEY (`id_producenta`) REFERENCES `producent` (`id_producenta`),
  ADD CONSTRAINT `towar_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategoria_towaru` (`id_kategori`);

--
-- Constraints for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `FK_sklep` FOREIGN KEY (`ID_sklepu`) REFERENCES `sklep` (`id_sklepu`),
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`id_kuriera`) REFERENCES `kurier` (`id_kuriera`),
  ADD CONSTRAINT `zamowienia_ibfk_2` FOREIGN KEY (`id_towaru`) REFERENCES `towar` (`id_towaru`),
  ADD CONSTRAINT `zamowienia_ibfk_3` FOREIGN KEY (`id_sklepu`) REFERENCES `sklep` (`id_sklepu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
