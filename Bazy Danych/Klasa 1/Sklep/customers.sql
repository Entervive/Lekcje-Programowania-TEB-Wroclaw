-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Paź 2023, 15:00
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `Country` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `customers`
--

INSERT INTO `customers` (`CustomerID`, `First_name`, `Last_name`, `Address`, `City`, `Country`, `Phone`, `Active`) VALUES
(1, 'Robert', 'Biedroń', 'Jana Pawła II 64', 'Choroszcz', 'Poland', 82892589, 1),
(2, 'Adolf', 'Hitler', 'Valle de la Victoria', 'Buenos Aires', 'Argentina', 465916491, 0),
(3, 'Walter', 'White', 'Flower Street', 'New Mexico', 'USA', 91305873, 0),
(4, 'Gus', 'Fring', 'Pollo Valley', 'Mexico City', 'Mexico', 474623746, 0),
(5, 'C', 'J', 'Grove Street', 'San Andreas', 'USA', 947569301, 0),
(6, 'Yevgenij', 'Prigozin', 'Kremlin', 'Moscow', 'Russia', 582091412, 0),
(7, 'Ching', 'Chong', 'Cho Chi', 'Shanghai', 'China', 968463768, 1),
(8, 'Astolfo', 'Femboy', 'Little Dick', 'New Scotland', 'Canada', 193760123, 1),
(9, 'Mia', 'Khalifa', 'Big Dick', 'New Scotland', 'Canada', 564707454, 1),
(10, 'Borat', 'Sagdijew', 'Little City', 'Astana', 'Kazachstan', 912471876, 0),
(11, 'Masterio', 'Nowak', 'ul. Sadistow556', 'London', 'USA', 669669669, 1),
(12, 'Zanuda', 'Twar', 'ul. Dury23', 'Azgard', 'Skabolda', 868686868, 1),
(13, 'Huala', 'Zolo', 'ul. Tadaki44', 'Salushai', 'Roblox', 321654978, 0),
(14, 'Frutic', 'Honda', 'ul. Messi10', 'Kyiv', 'Ukraine', 116111, 0),
(15, 'Gando', 'Kolala', 'ul. Doterow99', 'Niger', 'Nigeria', 64776722, 1),
(16, 'Elon', 'Musaka', 'ul. Umnych08', 'Holandia', 'Usa', 456363278, 0),
(17, 'Zuzanna', 'Niderla', 'ul. qwerty78', 'Moskwa', 'Russia', 654445665, 1),
(18, 'Anna', 'Solena', 'ul. Kinder23', 'Okioki', 'Japenene', 991, 1),
(19, 'Alina', 'Majakowska', 'ul. Churchhiely314', 'Shanhai', 'China', 444555333, 1),
(20, 'Adrian', 'Superkot', 'ul. Herosa01', 'Paris', 'France', 123456123, 0),
(21, 'Adholf', 'Hidlehr', 'Platz der Republik 1', 'Berlin', 'Germany', 116191000, 1),
(22, 'Jan', 'Kowalski', 'MCdonalds street', 'Detroit', 'USA', 123721372, 1),
(23, 'John', 'Cena', 'Koatowicka 3', 'New York', 'USA', 333444555, 1),
(24, 'Farid Jasar Umar', 'Haddad-Hariri-Maluf III', 'BombStreet-2', 'New York', 'USA', 420420420, 1),
(25, 'Padme', 'Amidala', 'Pałac królewski', 'Thed', 'Naboo', 123, 0),
(26, 'Pascal', 'Szybkiwklad', ' Platz der Republik 1', 'Kraków', 'Poland', 124, 0),
(27, 'Rodrigo', 'CloseHimmer', 'YoMamasHome', 'Wroclaw', 'Poland', 125, 1),
(28, 'Ben', 'Ten', 'MilchBitte', 'Berlin', 'Germany', 20423, 1),
(29, 'Bartosz', 'Pieniężny', 'DankeTchuss', 'Wroclaw', 'Poland', 39123, 0),
(30, 'Jacek', 'Jaworek', 'WieGehts', 'Warsaw', 'Poland', 234223999, 1),
(31, 'Fryderyk', 'Fazbear', 'TMBTS Road', 'Hurricane', 'USA', 1, 0),
(32, 'Erik', 'Exposito', 'Jana Pawła III', 'Wrocław', 'Polska', 1124232222, 1),
(33, 'Mykhailo', 'Mudryk', 'Talgarth Rd', 'London', 'Anglia', 7, 1),
(34, 'Cristiano', 'Penaldo', 'Kebab 37', 'Al Rihad', 'Arabia Saudyjska', 2147483647, 0),
(35, 'Kacper ', 'Karczewski', 'Gdzies nad mostem', 'Wrocław', 'Polska', 2147483647, 0),
(36, 'Kacper', 'Wuzeta', 'Tarczyński Arena', 'Wrocław ', 'Polska', 2147483647, 1),
(37, 'Pan', 'Powiatowy', 'TEB Technikum', 'Wrocław', 'Polska', 2147483647, 1),
(38, 'Lionel', 'Pessi', 'Miami', 'Golden Road', 'USA', 45734906, 0),
(39, 'Igor', 'Tujek', 'Kosz ', 'Nie Wiadomo', 'Polska', 2147483647, 1),
(40, 'Ali Baba', 'Król Kebaba', 'Kebab', 'Wrocław', 'Polska', 777888999, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
