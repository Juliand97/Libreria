-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2017 a las 17:35:54
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `no_registro` int(50) NOT NULL,
  `nombrea` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellidoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nac` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechan` date NOT NULL,
  `estadoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `obras` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`no_registro`, `nombrea`, `apellidoa`, `nac`, `fechan`, `estadoa`, `obras`) VALUES
(1, 'Bram', 'Stoker', 'Ingles', '1847-11-08', 'Fallecido', 50),
(2, 'yop', 'yi', 'yi', '2017-08-23', 'g', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
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
  `deporte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `historia`, `literatura`, `filosofia`, `gastronomia`, `arte`, `arquitectura`, `ingles`, `economia`, `ciencias`, `deporte`) VALUES
(1, 'mundial', 'colombiana', 'mexicana', 'china', 'varguandista', 'francesa', 'americano', 'alemana', 'avanzadas', 'extremo'),
(21, 'erfghjk', 'fghjkl', 'dfghjk', 'dfghjk', 'fghjk', 'fghjk', 'fghj', 'dfghj', 'fghj', 'fghjk'),
(31, 'fghjk', 'fghjk', 'fghjk', 'fghj', 'fghj', 'fghjk', 'fghj', 'ghj', 'ghj', 'ghj'),
(678, 'jk', '', 'ks', 'ss', 'kk', 'kk', 'kk', 'kk', 'k', 'kk'),
(67890, 'hjk', 'hjkl', 'ghjk', 'ghj', 'hjk', 'ghj', 'hj', 'hj', 'hj', 'jkl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `identificacion` bigint(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(17) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`identificacion`, `nombre`, `correo`) VALUES
(1056931027, 'Julian', 'yo'),
(1087234765, 'Da', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `codigo_postal` int(60) NOT NULL,
  `ubicacion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `pbx` int(20) NOT NULL,
  `jefe_editorial` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_postal`, `ubicacion`, `telefono`, `correo`, `pbx`, `jefe_editorial`, `fecha_creacion`) VALUES
(5555, 'avenida', 5555, 'lolo@lolo', 5555, 'lolo', '2016-02-29'),
(1234, 'hgsfjhg', 12234, '8484yhg@minose.yo', 4384345, 'luisd', '2017-08-10'),
(1262736, 'iqwaj', 654667, 'jgh@flkgtl', 76786, 'jbhjg', '2015-10-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(5) NOT NULL,
  `libro` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `editorial` varchar(60) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `pais_de_autor` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`) VALUES
(1, 'El senor de las moscas', '1954-09-17', 'Faber and Faber', 'Alegoia, Novela, Ficcion', 'william Golding', ' Newquay, Reino Unido'),
(2, 'De ratones y hombres', '1937-01-01', 'Pascal Covici', 'Ficcion, Novela corta, Tragedia', 'John Steinbeck', 'Salinas, California, Estados Unidos'),
(3, 'Al este del Eden', '1985-09-01', ' TUSQUETS EDITORES', 'Novela, Novela rosa', 'John Steinbeck', ' Salinas, California, Estados Unidos'),
(4, 'El tunel', '1948-01-01', 'Sur', 'Existencialismo', 'Ernesto Sabato', ' Rojas, Argentina'),
(5, 'Sobre heroes y tumbas', '1961-01-01', 'Compania General Fabril Editora', ' Novela', 'Ernesto Sabato', ' Rojas, Argentina');

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
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`codigo_postal`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
