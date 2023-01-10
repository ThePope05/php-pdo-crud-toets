-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 jan 2023 om 11:38
-- Serverversie: 8.0.30
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-toets`
--
CREATE DATABASE IF NOT EXISTS `php-pdo-crud-toets` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `php-pdo-crud-toets`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dureauto`
--

DROP TABLE IF EXISTS `dureauto`;
CREATE TABLE IF NOT EXISTS `dureauto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merk` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `topspeed` int DEFAULT NULL,
  `prijs` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `dureauto`
--

INSERT INTO `dureauto` (`id`, `merk`, `model`, `topspeed`, `prijs`) VALUES
(3, 'Bugatti', 'EB110', 390, '7500000'),
(4, 'Mercedes-Benz', 'Maybach Exelero', 350, '6700000'),
(5, 'Koenigsegg', 'CCXR Trevita', 401, '4000000'),
(6, 'Bugatti', 'La vioture noire', 420, '16500000'),
(7, 'Rolls-Royce', 'Swaptail', 250, '10960000'),
(8, 'Nissan', 'Skyline gtr', 360, '50000'),
(10, 'Toyota', 'Supra mk4', 250, '20000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
