-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2023 a las 05:44:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pozosbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pozos`
--

CREATE TABLE `pozos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `medida` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pozos`
--

INSERT INTO `pozos` (`id`, `nombre`, `medida`, `fecha`) VALUES
(11, 'pozo3', 150, '2002-12-13 18:50:00'),
(12, 'pozo3', 10, '2003-05-11 08:05:00'),
(13, 'pozo3', 120, '2004-12-20 20:05:00'),
(14, 'pozo3', 20, '2005-05-20 13:02:00'),
(15, 'pozo3', 150, '2020-02-13 02:34:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pozos`
--
ALTER TABLE `pozos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pozos`
--
ALTER TABLE `pozos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
