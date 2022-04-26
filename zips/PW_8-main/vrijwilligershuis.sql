-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 14:38
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrijwilligershuis`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `plaats` varchar(255) NOT NULL,
  `postcode` text NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `naam`, `wachtwoord`, `email`, `plaats`, `postcode`, `userType`) VALUES
(1, 'Iwan', '2d0ff8ff8b00e0f3f09e464c4d3bb4d9', 'iwanberg01@gmail.com', 'Dordrecht', '3343LB', ''),
(2, 'Mars', '2d0ff8ff8b00e0f3f09e464c4d3bb4d9', 'iwanberg01@gmail.com', 'Ambacht', '3343LB', ''),
(3, 'Bounty', '59159b4fb2e1e2b3c61b2cdc50a0b010', 'jwhf@gmail.com', 'Hier', '2345ED', ''),
(4, 'Ross', '4d7d052a80ba25e384e2666930af89af', 'rdwert@gmail.com', 'utrecht', '4353KD', 'Hulpzoeker'),
(7, 'Roemer', '9781a1ef60258b6173208810163123f2', '3144@gmail.com', 'Op school', '4353DE', 'Hulpverlener'),
(8, 'Bounty', '$2y$10$EROFxZhJO8CX.10mld9Zsu1ZZpOHvoKbUBof3/Oimoiu1uDAXOI8S', 'test@test.nl', 'Sesamstraat', '6343DE', 'Hulp-verlener/zoeker');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vraag`
--

CREATE TABLE `vraag` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `vraagGebruiker` varchar(255) NOT NULL,
  `soortHulp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vraag`
--
ALTER TABLE `vraag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `vraag`
--
ALTER TABLE `vraag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
