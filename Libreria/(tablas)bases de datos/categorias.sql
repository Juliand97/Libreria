-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2017 a las 12:01:31
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `xbox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `ID` int(100) NOT NULL,
  `historia` varchar(100) NOT NULL,
  `literatura` varchar(100) NOT NULL,
  `filosofia` varchar(100) NOT NULL,
  `gastronomia` varchar(100) NOT NULL,
  `arte` varchar(100) NOT NULL,
  `arquitectura` varchar(100) NOT NULL,
  `ingles` varchar(100) NOT NULL,
  `economia` varchar(100) NOT NULL,
  `ciencias` varchar(100) NOT NULL,
  `deporte` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `historia`, `literatura`, `filosofia`, `gastronomia`, `arte`, `arquitectura`, `ingles`, `economia`, `ciencias`, `deporte`) VALUES
(1, 'mundial', 'colombiana', 'mexicana', 'china', 'varguandista', 'francesa', 'americano', 'alemana', 'avanzadas', 'extremo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
