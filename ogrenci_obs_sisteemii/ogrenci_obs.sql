-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Haz 2021, 11:46:31
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrenci_obs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademisyen`
--

CREATE TABLE `akademisyen` (
  `akademisyen_id` int(11) NOT NULL,
  `akademisyen_adsoyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `akademisyen_bolum` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `akademisyen_ders` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `akademisyen`
--

INSERT INTO `akademisyen` (`akademisyen_id`, `akademisyen_adsoyad`, `akademisyen_bolum`, `akademisyen_ders`) VALUES
(1, '', '', ''),
(2, 'sıla', 'programlama', 'programlama'),
(3, 'sılaa', 'programlama', 'programlama'),
(4, 'sılaaa', 'programlama', 'programlama');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fakulte`
--

CREATE TABLE `fakulte` (
  `fakulte_id` int(11) NOT NULL,
  `fakulte_ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `fakulte_dersad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `fakulte_derskredi` int(11) NOT NULL,
  `fakulte_dersaat` int(11) NOT NULL,
  `fakulte_dersdönem` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `fakulte_derskodu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `fakulte`
--

INSERT INTO `fakulte` (`fakulte_id`, `fakulte_ad`, `fakulte_dersad`, `fakulte_derskredi`, `fakulte_dersaat`, `fakulte_dersdönem`, `fakulte_derskodu`) VALUES
(1, 'myo', 'programlama', 2, 3, 'güz', 111),
(2, 'myo', 'programlama', 2, 3, 'güz', 123),
(3, 'myo', 'programlama', 3, 3, 'güz', 112),
(4, '', 'programlama', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'sıla tekbaş', '11111111111', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `ogrenci_id` int(11) NOT NULL,
  `ogrenci_ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ogrenci_soyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ogrenci_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `ogrenci_bolum` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ogrenci_phone` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`ogrenci_id`, `ogrenci_ad`, `ogrenci_soyad`, `ogrenci_adres`, `ogrenci_bolum`, `ogrenci_phone`) VALUES
(1, 'Sıla', 'Tekbaş', 'İstanbul', 'Bilgisayar Programcı', '11111111111');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrencikayit`
--

CREATE TABLE `ogrencikayit` (
  `kayit_id` int(11) NOT NULL,
  `kayit_no` int(11) NOT NULL,
  `kayit_derskod` int(11) NOT NULL,
  `kayit_dersad` text COLLATE utf8_turkish_ci NOT NULL,
  `kayit_vize` int(10) NOT NULL,
  `kayit_final` int(10) NOT NULL,
  `kayit_but` int(10) NOT NULL,
  `kayit_ort` int(10) NOT NULL,
  `kayit_durum` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrencikayit`
--

INSERT INTO `ogrencikayit` (`kayit_id`, `kayit_no`, `kayit_derskod`, `kayit_dersad`, `kayit_vize`, `kayit_final`, `kayit_but`, `kayit_ort`, `kayit_durum`) VALUES
(1, 11, 2, '', 50, 50, 0, 50, 'Kaldı.'),
(2, 12, 3, '', 60, 90, 0, 78, 'Geçti.'),
(3, 1234, 19, '', 65, 51, 0, 57, 'Geçti.'),
(4, 11, 1112, '', 50, 90, 0, 74, 'Geçti.'),
(5, 1212, 1212, 'programlama', 50, 90, 0, 74, 'Geçti.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `akademisyen`
--
ALTER TABLE `akademisyen`
  ADD PRIMARY KEY (`akademisyen_id`);

--
-- Tablo için indeksler `fakulte`
--
ALTER TABLE `fakulte`
  ADD PRIMARY KEY (`fakulte_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`ogrenci_id`);

--
-- Tablo için indeksler `ogrencikayit`
--
ALTER TABLE `ogrencikayit`
  ADD PRIMARY KEY (`kayit_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `akademisyen`
--
ALTER TABLE `akademisyen`
  MODIFY `akademisyen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `fakulte`
--
ALTER TABLE `fakulte`
  MODIFY `fakulte_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `ogrenci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ogrencikayit`
--
ALTER TABLE `ogrencikayit`
  MODIFY `kayit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
