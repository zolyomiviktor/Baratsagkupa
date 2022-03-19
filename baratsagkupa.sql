-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Már 19. 01:24
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `baratsagkupa`
--
CREATE DATABASE IF NOT EXISTS `baratsagkupa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `baratsagkupa`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fogasnaplo`
--

CREATE TABLE `fogasnaplo` (
  `id` int(11) NOT NULL,
  `tomege` varchar(10) NOT NULL,
  `helyszama` int(10) NOT NULL,
  `darabszama` int(100) NOT NULL,
  `kategoriaja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fogasnaplo`
--

INSERT INTO `fogasnaplo` (`id`, `tomege`, `helyszama`, `darabszama`, `kategoriaja`) VALUES
(3, '1 kg', 7, 1, 'Ép'),
(4, '1 kg', 7, 2, 'Ép');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nevezok`
--

CREATE TABLE `nevezok` (
  `ID` int(11) NOT NULL,
  `nev` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `fogasnaplo`
--
ALTER TABLE `fogasnaplo`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `nevezok`
--
ALTER TABLE `nevezok`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `fogasnaplo`
--
ALTER TABLE `fogasnaplo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `nevezok`
--
ALTER TABLE `nevezok`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
