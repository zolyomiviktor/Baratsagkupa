
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Adatbázis: `baratsagkupa`
--
DROP DATABASE IF EXISTS `baratsagkupa`;
CREATE DATABASE IF NOT EXISTS `baratsagkupa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `baratsagkupa`;

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
(1, 'Zólyomi Viktor');

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;