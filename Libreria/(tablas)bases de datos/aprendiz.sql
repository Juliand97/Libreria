-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2017 a las 15:45:24
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aprendiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `no_registro` int(50) NOT NULL,
  `nombrea` varchar(50) NOT NULL,
  `apellidoa` varchar(50) NOT NULL,
  `nac` varchar(50) NOT NULL,
  `fechan` date NOT NULL,
  `estadoa` varchar(50) NOT NULL,
  `obras` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`no_registro`, `nombrea`, `apellidoa`, `nac`, `fechan`, `estadoa`, `obras`) VALUES
(1, 'Bram', 'Stoker', 'Ingles', '1847-11-08', 'Fallecido', 50),
(4, 'Julian', 'Pirachican', 'Colombiano', '2017-08-23', 'Activo', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CATEGORIA` varchar(20) NOT NULL,
  `Historia` varchar(100) NOT NULL,
  `Literatura` varchar(100) NOT NULL,
  `Filosofia` varchar(100) NOT NULL,
  `Gastronomia` varchar(100) NOT NULL,
  `Arte` varchar(100) NOT NULL,
  `Arquitectura` varchar(100) NOT NULL,
  `Ingles` varchar(100) NOT NULL,
  `Economia` varchar(100) NOT NULL,
  `Ciencias` varchar(100) NOT NULL,
  `Deporte` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CATEGORIA`, `Historia`, `Literatura`, `Filosofia`, `Gastronomia`, `Arte`, `Arquitectura`, `Ingles`, `Economia`, `Ciencias`, `Deporte`) VALUES
('', 'colombiana', 'colombiana', 'griega', 'mundial', 'mundial', 'mundial', 'americano', 'mundial', 'antiguas', 'mundial'),
('seleccione', 'colombiana', 'mundial', 'griega', 'peruana', 'italiano', 'vanguardista', 'americano', 'europea', 'antiguas', 'español');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `idcedula` varchar(50) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(36) NOT NULL,
  `fecha` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`no_registro`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CATEGORIA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
