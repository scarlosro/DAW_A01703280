-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2019 a las 22:24:55
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Fruta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fruit`
--

CREATE TABLE `Fruit` (
  `nombre` varchar(60) NOT NULL,
  `units` varchar(20) DEFAULT NULL,
  `quantity` int(200) DEFAULT NULL,
  `price` int(200) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Fruit`
--

INSERT INTO `Fruit` (`nombre`, `units`, `quantity`, `price`, `country`) VALUES
('MAIZ', 'KILOGRAMOS', 2000, 4000, 'MEXICO'),
('MANGO', 'KILOGRAMOS', 100, 30, 'PERU'),
('MANZANA', 'tonelada', 10, 3, 'mexico'),
('SANDÍA', 'KILOGRAMOS', 239, 87, 'ESTADOS UNIDOS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Fruit`
--
ALTER TABLE `Fruit`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
