-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 28-08-2014 a las 13:18:08
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `examen`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `empleados`
-- 

CREATE TABLE `empleados` (
  `clave_emp` varchar(25) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `salario_base` float(7,2) NOT NULL,
  PRIMARY KEY  (`clave_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `empleados`
-- 

INSERT INTO `empleados` VALUES ('01', 'ANDREA LOPEZ HERNANDEZ', 'garu971@hotmail.com', 'asd', 'oaxaca', 1200.00);
INSERT INTO `empleados` VALUES ('12345', 'carlos', 'vengansa_max@hotmail.com', 'asd', 'oaxaca', 1000.00);
INSERT INTO `empleados` VALUES ('a2', 'JUAN PABLO', 'prueba@unemail.com', 'asd', 'mexico', 1320.00);
INSERT INTO `empleados` VALUES ('a3', 'MARIANA GUERRA', 'mary@gmail.com', 'abc', 'puebla', 880.00);
INSERT INTO `empleados` VALUES ('a4', 'pedro', 'prueba@unemail.com', 'ninguna', 'oaxaca', 1320.00);
