-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-09-2018 a las 13:00:09
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `no_registro` int(11) NOT NULL AUTO_INCREMENT,
  `nombrea` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellidoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nac` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechan` date NOT NULL,
  `estadoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `obras` int(50) NOT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`no_registro`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`no_registro`, `nombrea`, `apellidoa`, `nac`, `fechan`, `estadoa`, `obras`, `estado`) VALUES
(1, 'Bran', 'Stoker', 'Ingles', '1847-11-08', 'Fallecido', 50, 1),
(44, 'autor de prueba ', 'prueba', 'Nacionalidad de  prueba', '2017-10-29', '1', 21, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_lib`
--

DROP TABLE IF EXISTS `autor_lib`;
CREATE TABLE IF NOT EXISTS `autor_lib` (
  `isbn_lib` bigint(100) NOT NULL,
  `no_registro` varchar(50) NOT NULL,
  PRIMARY KEY (`isbn_lib`,`no_registro`),
  KEY `temp2_2` (`no_registro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `categoria`, `estado`) VALUES
(1, 'Informatica', 1),
(2, 'terror', 1),
(3, 'Historia', 1),
(6, 'Alegoria', 1),
(7, 'Novela', 1),
(8, 'Ficcion', 1),
(9, 'Novela corta\r\n                                         ', 1),
(10, 'Tragedia\r\n                                         ', 1),
(11, 'comedia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

DROP TABLE IF EXISTS `editorial`;
CREATE TABLE IF NOT EXISTS `editorial` (
  `codigo_postal` int(60) DEFAULT NULL,
  `nombre_e` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`nombre_e`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`codigo_postal`, `nombre_e`, `estado`) VALUES
(1, 'santillana', 1),
(2, 'norma', 1),
(1211, 'faber and faber', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `id_u` varchar(100) NOT NULL,
  `isbn_c` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_de_entrada` varchar(100) DEFAULT NULL,
  `cant_ingresada` int(11) NOT NULL,
  `Fecha_de_salida` varchar(100) NOT NULL,
  `cant_reservada` int(100) NOT NULL,
  `cant_lib_dev` int(100) DEFAULT NULL,
  `fecha_de_devolucion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `isbn` bigint(100) NOT NULL,
  `libro` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `editorial` varchar(60) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `pais_de_autor` varchar(40) NOT NULL,
  `compra` varchar(100) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`isbn`,`autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`, `compra`, `estado`) VALUES
(1, 'el senor de las moscas', '1954-09-17', 'norma', 'Informatica', 'William Golding', 'Reino unido', 'Disponible', 1),
(2, 'De ratones y hombres', '1937-01-01', 'santillana', 'Ficcion', 'John Steinbeck', 'Salinas, California, Estados Unidos', 'Disponible', 1),
(3, 'Al este del Eden', '1985-09-01', 'santillana', 'Novela corta', 'John Steinbeck2', ' Salinas, California, Estados Unidos', 'Disponible', 1),
(4, 'El tunel', '1948-01-01', 'santillana', 'Novela', 'Ernesto Sabato', ' Rojas, Argentina', 'Disponible', 1),
(5, 'Sobre heroes y tumbas', '1961-01-01', 'Compania General Fabril Editora', ' Novela', 'Ernesto Sabato2', ' Rojas, Argentina', 'Disponible', 1),
(6, ' Sobre heroes y tumbas', '2013-11-18', 'santillana', 'Ficcion', 'Ernesto', 'Rojas, Argentina', 'Disponible', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

DROP TABLE IF EXISTS `permiso`;
CREATE TABLE IF NOT EXISTS `permiso` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(100) DEFAULT NULL,
  `id_rol` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `id_usuario`, `id_rol`) VALUES
(1, 1056931027, 1),
(2, 1002333444, 1),
(3, 1002333445, 1),
(4, 1002333446, 1),
(5, 1002333447, 1),
(6, 1234567891, 1),
(7, 1234567891, 2),
(24, 9292929292, 2),
(23, 1092837465, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

DROP TABLE IF EXISTS `prueba`;
CREATE TABLE IF NOT EXISTS `prueba` (
  `prueba` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `u_rol` varchar(100) DEFAULT NULL,
  `t_permiso` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`u_rol`, `t_permiso`) VALUES
('1', 'admin'),
('2', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `identificacion` varchar(255) NOT NULL,
  `p_nombre` varchar(100) NOT NULL,
  `s_nombre` varchar(100) NOT NULL,
  `p_apellido` varchar(100) NOT NULL,
  `s_apellido` varchar(100) NOT NULL,
  `correo` varchar(170) NOT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`identificacion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identificacion`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `correo`, `contrasena`, `estado`) VALUES
('1026595290', 'camilo', 'N/A', 'Ramirez', 'N/A', 'metallica1415@gmail.com', 'Ò„zœÈÅŠÏÙ#œSq', 1),
('1234567891', 'prueba', 'prueba', 'prueba', 'N/A', 'prueba@prueba.net', '_\Zái›<–ÍXGíñîÞ', 1),
('1056931027', 'David', 'Julian', 'Moreno', 'N/A', 'David@gmail.co', 'En(\nÊ69Ÿ²©BÄÀÌ', 1),
('1002333444', 'Sandy', 'N/A', 'Cruz', 'N/A', 'sandyurany99@gmail.com', 'è—£Uü+`\'¦\Zn˜â×„', 1),
('1002333445', 'Camilo', 'N/A', 'Alvarez', 'N/A', 'metallica98@gmail.com', '”ìklŽ#­<Xþ1”¡\'·', 1),
('1002333446', 'Christian', 'N/A', 'Lemus', 'N/A', 'christianlemus2000@gmail.com', 'ÿð¥VìtiYös%Ýzö', 1),
('1002333447', 'Sebastian', 'N/A', 'Cardenas', 'N/A', 'fenrak97@gmail.com', '9˜…WÅ6fä¦Œ2·ÓÖ', 1),
('1092837465', 'Fabian', 'Alejandro', 'Rodriguez', '', 'fabianalejandro@misena.edu.co', '„3d\'_Š›,ºÌÁ`', 1),
('9292929292', 'dasd', 'dasda', 'dasdas', 'dsda', 'j.dpirachican7@gmail.com', ',›o‘I|¬ðu¿y¹ÆCÛ', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
