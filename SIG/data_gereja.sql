-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 11:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `gereja_katolik_makassar`
--

CREATE TABLE `gereja_katolik_makassar` (
  `nomor` int(1) NOT NULL,
  `namagereja` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jadwalmisa` text NOT NULL,
  `pastorparoki` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `latitude` float(100,6) NOT NULL,
  `longtitude` float(100,6) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gereja_katolik_makassar`
--

INSERT INTO `gereja_katolik_makassar` (`nomor`, `namagereja`, `alamat`, `jadwalmisa`, `pastorparoki`, `telepon`, `web`, `latitude`, `longtitude`, `description`) VALUES
(1, 'Gereja Kristus Raja - Andalas', 'Jl. Andalas No.61, Bontoala Parang, Kec. Bontoala, Kota Makassar, Sulawesi Selatan 90157', 'Misa Harian (Senin S/d Kamis) = Pagi 6:00 WITA\r\nMisa Harian (Jumat) = Sore / Malam 18:30 WITA\r\nMisa Sabtu Sore = Sore / Malam 18:00 WITA\r\nMisa Hari Minggu = Pagi 07:00 WITA | Pagi 08:45 WITA | Sore / Malam 16:45 WITA | Sore / Malam 18.30 WITA\r\nPengakuan Dosa (Sabtu) = Sore / Malam 17:00 WITA', 'RD. Marselinus Lolotandung', '(0411) 317457', 'http://www.parokiandalas.com/', -5.128842, 119.418472, 'link'),
(2, 'Gereja Katolik St. Yoseph Pekerja Gotong Gotong', 'Jl. Gunung Latimojong, Maradekaya, Kec. Makassar, Kota Makassar, Sulawesi Selatan 90145', 'Misa Harian (Selasa & Kamis) = Pagi 06:00 WITA\r\nMisa Jumat Pertama = Sore / Malam 18:30 WITA\r\nMisa Hari Minggu = Pagi 06:30 WITA | Pagi 08:00 WITA | Sore / Malam 16:45 WITA | Sore / Malam 18:30 WITA', 'RD. Felix Layadi', '(0411) 362-3587 || (0411) 365-0770 [FAX]', 'http://www.parokigotonggotong.com', -5.142677, 119.420914, 'link'),
(3, 'Gereja Katolik Maria Ratu Rosari, Kare', 'Jl. Perintis Kemerdekaan KM. 10 Makassar, Kota Makassar, Sulawesi Selatan 90245', 'Misa Harian = Pagi 06:00 WITA\r\nMisa Sabtu Sore = Sore / Malam 18:00 WITA\r\nMisa Hari Minggu = Pagi 06:00 WITA | Pagi 08:00 WITA | Sore / Malam 18:00 WITA', 'FX. Daru Pancoro, CICM', '(0411) 8959893', '-', -5.140295, 119.489471, 'link'),
(4, 'Gereja Katolik Hati Yesus Yang Mahakudus - Paroki Katedral', 'Jl. Kajaolalido No.14, Baru, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90111', 'Misa Harian (Kecuali Jumat) = Pagi 06:30 WITA\r\nMisa Harian (Jumat) = Sore / Malam 18:30 WITA\r\nMisa Sabtu Sore = Sore / Malam 18:30 WITA\r\nMisa Hari Minggu = Pagi 06:30 WITA | Pagi 08:30 WITA | Sore / Malam 16:30 WITA | Sore / Malam 18.30 WITA\r\nMisa Hari Minggu (Bahasa Inggris) = Pagi 10:30 WITA\r\n', 'RD. Wilhelmus Tulak', '(0411) 361-5745', 'http://katedralmakassar.blogspot.com', -5.136111, 119.410004, ''),
(5, 'Gereja St. Perawan Maria Diangkat Ke Surga - Mamajang', 'Jl. Tupai No.1, Mandala, Kec. Mamajang, Kota Makassar, Sulawesi Selatan 90132', 'Misa Harian (Senin S/d Kamis) = Pagi 05:40 WITA\r\nMisa Sabtu Sore = Sore / Malam 18:30\r\nMisa Hari Minggu = Pagi 06:30 WITA | Pagi 08:30 WITA | Sore / Malam 17:00 WITA', 'Pastor Fanny Stephanus Manengkey, MSC', '(0411) 854-809', 'https://parokimamajang.or.id/', -5.156361, 119.421356, 'link'),
(6, 'Gereja Katolik Santo Yakobus, Mariso', 'Jl. Gagak No.21, Mariso, Kec. Mariso, Kota Makassar, Sulawesi Selatan 90121', 'Misa Harian (Senin, Rabu, Kamis) = Pagi 06:00 WITA\r\nMisa Harian (Selasa & Jumat) = Sore / Malam 18:30 WITA\r\nMisa Jumat Pertama = Sore / Malam 18:30 WITA\r\nMisa Sabtu Sore = Sore / Malam 18.30\r\nMisa Hari Minggu = Pagi 06:30 WITA | Pagi 08:30 WITA| Sore / Malam 16:30 WITA| Sore / Malam 19:30 WITA', 'RD. Herman Panggalo', '(0411) 873532', 'https://santoyakobusmariso.com/', -5.159852, 119.411346, 'link'),
(7, 'Gereja Santo Fransiskus Assisi Makassar', 'Jl. Letjen Hertasning No.102, Bonto Makkio, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90234', 'Misa Harian (Selasa S/d Jumat) = Pagi 06:00 WITA\r\nMisa Jumat Pertama = Sore / Malam 18:30 WITA\r\nMisa Sabtu Sore = Sore / Malam 18:30\r\nMisa Hari Minggu = Pagi 06:30 WITA | Pagi 08:30 WITA | Sore / Malam 17:30 WITA', 'RD. Leo Paliling', '(0411) 885-234', '-', -5.166045, 119.446205, 'link'),
(8, 'Gereja St. Paulus - Tello', 'Jl. Sermani No.40A, Tello Baru, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90233', '-', 'Pastor Paulus Dalu Lubur, CICM', '(0411) 507 - 1059', '-', -5.148321, 119.463074, 'link'),
(9, 'Gereja Katolik Paroki Maria Rosa Mystica Sudiang', 'Jl. Perintis Kemerdekaan No.237, Pai, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan 90242', 'Hari Minggu = Pagi 06:30 WITA | Pagi 08:30 WITA | Sore / Malam 18:00 WITA', 'RD. Eltus Mali', '(0411) 555042', '-', -5.081059, 119.523682, 'link'),
(10, 'Gereja Katolik St.Albertus Agung', 'Jl. Danau Tj. Bunga Selatan, Tj. Merdeka, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224', 'Misa Harian = Senin, Selasa dan Jumat 18:30 WITA\r\nMisa Harian = Rabu dan Kamis 06:00 WITA\r\nMisa Jumat Pertama = 19:00 WITA\r\nMisa Hari Sabtu Malam = 19.00 WITA\r\nMisa Hari Minggu Pagi : 08:30 WITA\r\n', 'RD Lucas Paliling', '(0411) 8114497', 'https://gerejakatolikstalbertusagungtanjungbunga.business.site/', -5.176162, 119.397392, 'link');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `nomor` int(2) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `latitude` float(100,6) DEFAULT NULL,
  `longtitude` float(100,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`nomor`, `nama`, `latitude`, `longtitude`) VALUES
(1, 'Antah berantah', 119.421890, -5.153060);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gereja_katolik_makassar`
--
ALTER TABLE `gereja_katolik_makassar`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gereja_katolik_makassar`
--
ALTER TABLE `gereja_katolik_makassar`
  MODIFY `nomor` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
