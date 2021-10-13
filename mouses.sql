-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 01:08:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_mouses`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouses`
--

CREATE TABLE `mouses` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `precio` int(100) NOT NULL,
  `id_marca` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mouses`
--

INSERT INTO `mouses` (`id_producto`, `nombre`, `stock`, `precio`, `id_marca`) VALUES
(18, 'Mouse Logitech', 0, 4100, 9),
(19, 'Mouse Genius', 1, 2000, 10),
(20, 'Mouse Glorius God', 0, 6500, 11),
(22, 'Mouse Razer', 1, 3500, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mouses`
--
ALTER TABLE `mouses`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mouses`
--
ALTER TABLE `mouses`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mouses`
--
ALTER TABLE `mouses`
  ADD CONSTRAINT `mouses_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
