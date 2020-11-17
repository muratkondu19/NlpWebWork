-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 17 Kas 2020, 19:38:00
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nlp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dosya`
--

CREATE TABLE `dosya` (
  `dosya_id` int(11) NOT NULL,
  `dosya_yol` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dosya`
--

INSERT INTO `dosya` (`dosya_id`, `dosya_yol`) VALUES
(1, 'C:\\Windows\\Temp\\php290A.tmp'),
(2, 'C:\\Windows\\Temp\\php6AB3.tmp'),
(3, 'petition.jpg'),
(4, 'C:\\Windows\\Temp\\phpF453.tmppetition.jpg'),
(5, 'Arraypetition.jpg'),
(6, 'petition.jpg'),
(7, ''),
(8, 'petition.jpg'),
(9, 'petition.jpg'),
(10, ''),
(11, 'petition.jpg'),
(12, 'php_sertifika.jpg'),
(13, 'petition.jpg'),
(14, 'js_sertifika.jpg'),
(15, 'js_sertifika.jpg'),
(16, 'yapı.png'),
(17, 'petition.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dosya`
--
ALTER TABLE `dosya`
  ADD PRIMARY KEY (`dosya_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dosya`
--
ALTER TABLE `dosya`
  MODIFY `dosya_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
