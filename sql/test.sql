-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2021, 20:01:55
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `mail`, `password`) VALUES
(1, 'deneme@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer`
--

CREATE TABLE `answer` (
  `soruId` int(11) NOT NULL,
  `correctAnswer` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `quizId` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `answer`
--

INSERT INTO `answer` (`soruId`, `correctAnswer`, `id`, `quizId`) VALUES
(39, 'ch1', 30, 4),
(40, 'ch2', 31, 4),
(41, 'ch4', 32, 4),
(42, 'ch4', 33, 4),
(43, 'ch4', 34, 4),
(44, 'ch2', 35, 4),
(45, 'ch2', 46, 5),
(46, 'ch3', 47, 5),
(47, 'ch2', 48, 5),
(48, 'ch1', 49, 5),
(49, 'ch2', 50, 5),
(49, 'ch1', 51, 5),
(49, 'ch4', 52, 5),
(52, 'ch3', 53, 5),
(53, 'ch2', 54, 5),
(54, 'ch1', 55, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `course`
--

CREATE TABLE `course` (
  `courseNo` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `course`
--

INSERT INTO `course` (`courseNo`, `name`) VALUES
(12, 'cp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `options`
--

CREATE TABLE `options` (
  `soruId` int(11) NOT NULL,
  `optionId` int(11) NOT NULL,
  `ch1` varchar(500) NOT NULL,
  `quizId` int(11) DEFAULT NULL,
  `ch2` varchar(150) DEFAULT NULL,
  `ch3` varchar(150) DEFAULT NULL,
  `ch4` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `options`
--

INSERT INTO `options` (`soruId`, `optionId`, `ch1`, `quizId`, `ch2`, `ch3`, `ch4`) VALUES
(39, 85, 'a1', 4, 'b1', 'c1', 'd1'),
(40, 86, 'a2', 4, 'b2', 'c2', 'd2'),
(41, 87, 'a3', 4, 'b3', 'c3', 'd3'),
(42, 88, 'a4', 4, 'b4', 'c4', 'd4'),
(43, 89, 'a5', 4, 'b5', 'c5', 'd5'),
(44, 90, 'a6', 4, 'b6', 'c6', 'd6'),
(45, 101, 'cevap1', 5, 'cevap2', 'cevap3', 'cevap4'),
(46, 102, 'cevap5', 5, 'cevap6', 'cevap7', 'cevap8'),
(47, 103, 'cevap9', 5, 'cevap10', 'cevap11', 'cevap12'),
(48, 104, 'cevap13', 5, 'cevap14', 'cevap15', 'cevap16'),
(49, 105, 'jshjdjd', 5, 'sdafswadf', 'sdfsadf', 'sfdsaefg'),
(49, 106, 'sfdaergf', 5, 'sdafergf', 'sadfegrfw', 'sfdaergf'),
(49, 107, 'sfdaergf', 5, 'safdergf', 'sdfaertgf', 'e4rwgfer'),
(52, 108, 'rewqfgd', 5, '3qgrfwadv', 'q3ewrfad', '3gfr4qevd'),
(53, 109, '?kerwuh', 5, 'oe4tuwbj', 'ertgerfg', 'qreg3fv'),
(54, 110, 'ewqewrf', 5, '2efwc', '2fewqcd', '2qwfde');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `quizId` int(11) NOT NULL,
  `soruId` int(11) NOT NULL,
  `soru` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`quizId`, `soruId`, `soru`) VALUES
(4, 39, 'soru1'),
(4, 40, 'soru2'),
(4, 41, 'soru3'),
(4, 42, 'soru4'),
(4, 43, 'soru5'),
(4, 44, 'soru6'),
(5, 45, 'Sorular1'),
(5, 46, 'sorular2'),
(5, 47, 'sorular3'),
(5, 48, 'sorular4'),
(5, 49, 'sorular5'),
(5, 50, 'sorular5'),
(5, 51, 'sorular5'),
(5, 52, 'sorular8'),
(5, 53, 'sorular9'),
(5, 54, 'sorular10'),
(5, 55, 'Sorular1'),
(5, 56, 'sorular2'),
(5, 57, 'sorular3'),
(5, 58, 'sorular4'),
(5, 59, 'sorular5'),
(5, 60, 'sorular5'),
(5, 61, 'sorular5'),
(5, 62, 'sorular8'),
(5, 63, 'sorular9'),
(5, 64, 'sorular10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `quiz`
--

CREATE TABLE `quiz` (
  `quizId` int(11) NOT NULL,
  `courseNo` int(11) NOT NULL,
  `quizName` varchar(50) NOT NULL,
  `suresi` int(11) NOT NULL,
  `sorusayisi` int(11) NOT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `quiz`
--

INSERT INTO `quiz` (`quizId`, `courseNo`, `quizName`, `suresi`, `sorusayisi`, `starttime`, `endtime`) VALUES
(4, 12, 'deneme', 5, 6, '2021-08-19 13:45:00', '2021-08-19 13:45:00'),
(5, 12, 'yeni S?nav', 5, 10, '2021-08-19 13:45:00', '2021-08-19 13:45:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `GSM` decimal(10,0) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `GSM`, `addres`, `class`) VALUES
('ogr@gmail.com', '123456', 'cy', '567', 'gbdf', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseNo`);

--
-- Tablo için indeksler `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`optionId`),
  ADD KEY `quizId` (`quizId`);

--
-- Tablo için indeksler `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`soruId`),
  ADD KEY `quizId` (`quizId`);

--
-- Tablo için indeksler `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizId`),
  ADD KEY `courseNo` (`courseNo`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `options`
--
ALTER TABLE `options`
  MODIFY `optionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Tablo için AUTO_INCREMENT değeri `questions`
--
ALTER TABLE `questions`
  MODIFY `soruId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Tablo için AUTO_INCREMENT değeri `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`);

--
-- Tablo kısıtlamaları `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quizId`) REFERENCES `quiz` (`quizId`);

--
-- Tablo kısıtlamaları `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`courseNo`) REFERENCES `course` (`courseNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
