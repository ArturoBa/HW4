-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2017 a las 13:17:04
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firmas`
--

CREATE TABLE `firmas` (
  `id` int(11) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telefono` varchar(35) NOT NULL,
  `comentario` text NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lon` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `firmas`
--

INSERT INTO `firmas` (`id`, `cedula`, `nombre`, `email`, `telefono`, `comentario`, `lat`, `lon`, `ip`) VALUES
(2, '541', 'Amadis', 'amadis@hotmail.com', '80956123', 'jaja', '', '', '::1'),
(3, '84512', 'Amadis', 'amadis@hotmail.com', '8945120', 'jajaja', '', '', '::1'),
(4, '984615', 'Arturo', 'arturo@hotmail.com', '8097441225', 'Fuciona :)', '19.4507349', '-69.9604396', '::1'),
(5, '00101339955', 'Francis B', 'fran@hotmail.com', '8095556666', 'Me gustó la página! Que digan los nombres!', '18.460693799999998', '-69.9503618', '::1'),
(6, '00101778889', 'Dario', 'dario@prueba.com', '8095554477', 'Que digan los nombres de los de ODEB..', '18.4606742', '-69.95036240000002', '::1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `firmas`
--
ALTER TABLE `firmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `firmas`
--
ALTER TABLE `firmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
