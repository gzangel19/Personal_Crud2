-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-03-2022 a las 21:05:55
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_productos`
--

CREATE TABLE `tm_productos` (
  `prod_id` int(11) NOT NULL,
  `prod_nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `prod_descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `prod_fecha` datetime NOT NULL,
  `prod_fecha_mod` datetime DEFAULT NULL,
  `prod_fecha_del` datetime DEFAULT NULL,
  `prod_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_productos`
--

INSERT INTO `tm_productos` (`prod_id`, `prod_nombre`, `prod_descripcion`, `prod_fecha`, `prod_fecha_mod`, `prod_fecha_del`, `prod_estado`) VALUES
(1, 'Auricular', 'Ninguna', '2022-02-20 17:00:01', NULL, '2022-03-01 13:03:47', 0),
(2, 'Teclado', 'Ninguna', '2022-02-20 17:00:31', NULL, NULL, 1),
(3, 'Monitor', 'Ninguna', '2022-02-20 18:57:08', NULL, NULL, 1),
(4, 'Pantallas', 'Ninguna', '2022-02-20 21:57:08', NULL, NULL, 1),
(5, 'test', 'Ninguna', '2022-03-01 16:12:15', NULL, NULL, 1),
(6, 'Test 2', 'Ninguna', '2022-03-01 16:12:26', NULL, '2022-03-01 16:41:34', 0),
(7, 'test', 'Ninguna', '2022-03-01 17:40:10', NULL, NULL, 1),
(8, 'Pantallas', 'Ninguna', '2022-03-01 17:41:34', '2022-03-01 17:47:38', NULL, 1),
(9, 'Consola', 'Ninguna', '2022-03-01 17:41:49', '2022-03-01 17:44:24', NULL, 1),
(10, 'Z', 'Ningunass', '2022-03-01 17:47:43', '2022-03-01 18:01:57', NULL, 1),
(11, 'Auricular', 'Para Escuchar', '2022-03-01 18:01:29', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_productos`
--
ALTER TABLE `tm_productos`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_productos`
--
ALTER TABLE `tm_productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
