-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Feb 09. 13:56
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

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fogasnaplo`
--

CREATE TABLE `fogasnaplo` (
  `tomege` varchar(50) NOT NULL,
  `helyszama` int(10) NOT NULL,
  `darabszama` int(100) NOT NULL,
  `kategoriaja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fogasnaplo`
--

INSERT INTO `fogasnaplo` (`tomege`, `helyszama`, `darabszama`, `kategoriaja`) VALUES
('7 kg', 6, 9, 'fogyatékkal élő'),
('8 kg', 6, 9, 'ép');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nevezok`
--

CREATE TABLE `nevezok` (
  `ID` int(255) NOT NULL,
  `nev` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `nevezok`
--

INSERT INTO `nevezok` (`ID`, `nev`) VALUES
(1, 'Ferenc');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `fogasnaplo`
--
ALTER TABLE `fogasnaplo`
  ADD PRIMARY KEY (`tomege`);

--
-- A tábla indexei `nevezok`
--
ALTER TABLE `nevezok`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `nevezok`
--
ALTER TABLE `nevezok`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
