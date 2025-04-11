-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2024 at 09:50 AM
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

--
-- Dumping data for table `kategoria_towaru`
--

INSERT INTO `kategoria_towaru` (`id_kategori`, `kategoria`) VALUES
(3, 'Zanęta'),
(4, 'Liquid/Atraktory'),
(5, 'Kulki'),
(6, 'Pellet'),
(7, 'Haczyk'),
(8, 'Przypona'),
(9, 'Linka'),
(10, 'Kołowrotek'),
(11, 'Wędka');

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

--
-- Dumping data for table `klient`
--

INSERT INTO `klient` (`id_klienta`, `id_rangi`, `id_zamowienia`, `imie`, `nazwisko`, `adres`, `id_rejonu`, `telefon`, `email`, `rekordowy_gatunekryby`, `rekordowy_wagaryby`) VALUES
(2, 4, 3, 'Jan', 'Kowalski', '1 Maja', 10, 208210207, 'jestemjan@gmail.com', 'Karp', '7 Kg'),
(3, 1, 2, 'Oliwia', 'Medyńska', 'Powiat', 12, 555467890, 'oliwia.medynska@powiatwroclawski.pl', 'Płotka', '4 Kg'),
(4, 4, 1, 'Jan', 'Kowalski', '1 Maja', 10, 208210207, 'jestemjan@gmail.com', 'Karp', '7 Kg'),
(5, 7, 5, 'Borys', 'Łukojć', 'Rybna 2/10', 10, 666999111, 'borys.lukojc@teb.edu.pl', 'Igor', '78 Kg'),
(6, 5, 4, 'Wuzeta', 'Wołczyński', 'Fabryczna', 10, 532879090, 'strzelnica@wroclaw.pl', '', ''),
(7, 3, 6, 'Mara', 'Ks', 'Capitol', 10, 789123567, 'mara.ks@teb.edu.pl', 'Admin', '70 Kg');

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

--
-- Dumping data for table `kurier`
--

INSERT INTO `kurier` (`id_kuriera`, `imie`, `nazwisko`, `firma`, `telefon`) VALUES
(1, 'Adolf', 'Eichmann', 'DPD', 452369875),
(2, 'Włodzimierz', 'Biały', 'Pocztex', 462626526),
(3, 'Jeremiasz', 'Różowyczłowiek', 'Inpost', 682168566),
(4, 'Admin', 'Femboy', 'UPS', 639466926),
(5, 'Jeffrey', 'Epstein', 'FedEx', 93593292),
(6, 'Hermann', 'Goring', 'DPD', 526522152),
(7, 'Herr', 'Igor', 'Pocztex', 326269259),
(8, 'Warol', 'Kojtyła', 'Inpost', 816921828),
(9, 'Ewa', 'Braun', 'FedEx', 962919829),
(10, 'Boorys', 'Megakarp', 'UPS', 526592629),
(11, 'Ryszard', 'Nikson', 'Inpost', 908299289),
(12, 'Adam', 'Hilt', 'DPD', 19591981),
(13, 'Charlie', 'Morningstar', 'FedEx', 151986165),
(14, 'Partyk', 'Nietoprzerzłowiek', 'Pocztex', 189962896),
(15, 'Jonasz', 'Koran-Mekka', 'DPD', 18996546);

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

--
-- Dumping data for table `producent`
--

INSERT INTO `producent` (`id_producenta`, `nazwa`, `nip`, `adres`, `telefon`, `email`) VALUES
(1, 'Mikado', 11111111, 'Fabryczna 14', 694202137, 'mikado@gmail,com'),
(2, 'Delphin', 22222222, 'Karpiowa 44', 723743123, 'delphin@gmail.com'),
(3, 'Osmo', 33333333, 'Zanętowa 69', 568976534, 'osmo@gmail.com'),
(4, 'Abu Garcia', 44444444, 'Spiningisty 4/5', 432543654, 'abugarcia@gmail.com'),
(5, 'Flagman', 55555555, 'Gruntowa 21', 756438478, 'flagman@gmail.com'),
(6, 'Daiwa', 66666666, 'Karpiarza 11', 789235684, 'daiwa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ranga_klienta`
--

CREATE TABLE `ranga_klienta` (
  `id_rangi` int(52) NOT NULL,
  `ranga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranga_klienta`
--

INSERT INTO `ranga_klienta` (`id_rangi`, `ranga`) VALUES
(1, 'Borys'),
(2, 'Giga Karp'),
(3, 'Szczupak'),
(4, 'Okoń'),
(5, 'Karaś Złocisty'),
(6, 'Krąp'),
(7, 'Płotka');

-- --------------------------------------------------------

--
-- Table structure for table `rejon`
--

CREATE TABLE `rejon` (
  `id_rejonu` int(52) NOT NULL,
  `wojewodztwo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejon`
--

INSERT INTO `rejon` (`id_rejonu`, `wojewodztwo`) VALUES
(1, 'Zachodnio-Pomorskie'),
(2, 'Pomorskie'),
(3, 'Warmińsko-Mazurskie'),
(4, 'Podlaskie'),
(5, 'Lubuskie'),
(6, 'Wielkopolskie'),
(7, 'Kujawsko-Pomorskie'),
(8, 'Mazowieckie'),
(9, 'Lubelskie'),
(10, 'Dolnośląskie'),
(11, 'Łódzkie'),
(12, 'Świętokrzyskie'),
(13, 'Podkarpackie'),
(14, 'Opolskie'),
(15, 'Śląskie'),
(16, 'Małopolskie');

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

--
-- Dumping data for table `sklep`
--

INSERT INTO `sklep` (`id_sklepu`, `adres`, `nip`, `miasto`, `id_rejonu`, `email`, `telefon`) VALUES
(1, 'ul. Mickiewicza 1', 2147483647, 'Wrocław', 10, 'Sklepwroclaw@ryby.pl', 889889889),
(2, 'ul. Długa 5', 2147483647, 'Gdańsk', 2, 'SklepGdansk@ryby.pl', 123456789),
(3, 'ul. Jagiellońska 10', 2147483647, 'Olsztyn', 3, 'SklepOlsztyn@ryby.pl', 234567890),
(4, 'ul. Warszawska 20', 2147483647, 'Białystok', 4, 'SklepBialystok@ryby.pl', 345678901),
(5, 'ul. Paderewskiego 15', 2147483647, 'Zielona Góra', 5, 'SklepZielonaGora@ryby.pl', 456789012),
(6, 'ul. Piastowska 30', 2147483647, 'Poznań', 6, 'SklepPoznan@ryby.pl', 567890123),
(7, 'ul. Leśna 25', 2147483647, 'Bydgoszcz', 7, 'SklepBydgoszcz@ryby.pl', 678901234),
(8, 'ul. Nowy Świat 40', 2147483647, 'Warszawa', 8, 'SklepWarszawa@ryby.pl', 789012345),
(9, 'ul. Słowackiego 35', 123456789, 'Lublin', 9, 'SklepLublin@ryby.pl', 890123456),
(10, 'ul. Piotrkowska 50', 2147483647, 'Łódź', 11, 'SklepLodz@ryby.pl', 901234567),
(11, 'ul. Krakowska 55', 2147483647, 'Kielce', 12, 'SklepKielce@ryby.pl', 12345678),
(12, 'ul. Legionów 60', 2147483647, 'Rzeszów', 13, 'SklepRzeszow@ryby.pl', 123456789),
(13, 'ul. Opolska 65', 2147483647, 'Opole', 14, 'SklepOpole@ryby.pl', 234567890),
(14, 'ul. Katowicka 70', 2147483647, 'Katowice', 15, 'SklepKatowice@ryby.pl', 345678901),
(15, 'ul. Krakowska 75', 1234567890, 'Kraków', 16, 'SklepKrakow@ryby.pl', 456789012),
(16, 'ul. Portowa 80', 2147483647, 'Szczecin', 1, 'SklepSzczecin@ryby.pl', 567890123);

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

--
-- Dumping data for table `towar`
--

INSERT INTO `towar` (`id_towaru`, `id_kategori`, `id_producenta`, `nazwa`, `cena`) VALUES
(1, 11, 1, 'Noctis Pro', 799),
(2, 10, 5, 'Sherman Pro', 599),
(3, 3, 3, 'Zanęta mega karp', 39),
(4, 9, 5, 'Żyłka Sherman Pro', 28),
(5, 5, 3, 'Kulki Larwa', 19),
(6, 7, 1, 'Haczyk Pro 10', 18),
(7, 4, 3, 'Liquid Truskawka', 23);

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
-- Dumping data for table `zamowienia`
--

INSERT INTO `zamowienia` (`id_zamowienia`, `data_zamowienia`, `data_wysylki`, `id_sklepu`, `id_kuriera`, `id_towaru`) VALUES
(1, '2024-02-01', '2024-02-02', 13, 4, 5),
(2, '2024-02-02', '2024-02-03', 1, 2, 4),
(3, '2024-02-04', '2024-02-05', 4, 15, 4),
(4, '2024-02-05', '2024-02-06', 3, 7, 3),
(5, '2024-01-01', '2024-01-02', 3, 3, 3),
(6, '2024-01-03', '2024-01-06', 7, 9, 5);

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
  MODIFY `id_kategori` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `klient`
--
ALTER TABLE `klient`
  MODIFY `id_klienta` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kurier`
--
ALTER TABLE `kurier`
  MODIFY `id_kuriera` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `producent`
--
ALTER TABLE `producent`
  MODIFY `id_producenta` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ranga_klienta`
--
ALTER TABLE `ranga_klienta`
  MODIFY `id_rangi` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rejon`
--
ALTER TABLE `rejon`
  MODIFY `id_rejonu` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sklep`
--
ALTER TABLE `sklep`
  MODIFY `id_sklepu` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `towar`
--
ALTER TABLE `towar`
  MODIFY `id_towaru` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
