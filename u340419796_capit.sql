
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2015 a las 02:20:51
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u340419796_capit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE IF NOT EXISTS `identificacion` (
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `puesto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivelacademico` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `identificacion`
--

INSERT INTO `identificacion` (`clave`, `puesto`, `nombre`, `email`, `direccion`, `fecha`, `estadocivil`, `telefono`, `nivelacademico`) VALUES
('jn', 'jnJNKJNjknKJ', 'NJKNK', 'jnkj', 'jknKJNK', 'JNJknkj', 'nkjKJ', 'JK jk ', 'j j'),
('jn', 'jnJNKJNjknKJ', 'NJKNK', 'jnkj', 'jknKJNK', 'JNJknkj', 'nkjKJ', 'JK jk ', 'j j'),
('efds', 'iih', 'iuh', 'harry_erick92@outlook.com', 'hiu', 'niu', 'uui', 'ni', 'un');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
