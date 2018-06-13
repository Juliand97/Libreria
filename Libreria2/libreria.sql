-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-06-2018 a las 12:00:21
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.0.29

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
-- Estructura de tabla para la tabla `autores`
--

DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `no_registro` int(50) NOT NULL,
  `nombrea` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellidoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nac` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechan` date NOT NULL,
  `estadoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `obras` int(50) NOT NULL,
  PRIMARY KEY (`no_registro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`no_registro`, `nombrea`, `apellidoa`, `nac`, `fechan`, `estadoa`, `obras`) VALUES
(1, 'Bran', 'Stoker', 'Ingles', '1847-11-08', 'Fallecido', 50),
(2, 'yop', 'yi', 'yi', '2017-08-23', 'g', 12),
(100, 'prueba', 'p', 'pr', '2007-08-30', 'pruev', 2);

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
-- Estructura de tabla para la tabla `cantidad`
--

DROP TABLE IF EXISTS `cantidad`;
CREATE TABLE IF NOT EXISTS `cantidad` (
  `isbn_lib` int(100) NOT NULL,
  `cant_existente` int(100) DEFAULT NULL,
  PRIMARY KEY (`isbn_lib`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cantidad`
--

INSERT INTO `cantidad` (`isbn_lib`, `cant_existente`) VALUES
(1, 100),
(2, 102),
(3, 100),
(4, 100),
(5, 100),
(6, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `categoria`) VALUES
(1, 'Metafisica'),
(2, 'terror'),
(3, 'Historia'),
(6, 'Alegoria'),
(7, 'Novela'),
(8, 'Ficcion'),
(9, 'Novela corta\r\n                                         '),
(10, 'Tragedia\r\n                                         '),
(11, 'Novela rosa\r\n                                         '),
(12, 'Existencialismo\r\n                                         ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

DROP TABLE IF EXISTS `editoriales`;
CREATE TABLE IF NOT EXISTS `editoriales` (
  `codigo_postal` int(60) DEFAULT NULL,
  `nombre_e` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `ubicacion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `pbx` int(20) NOT NULL,
  `jefe_editorial` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  PRIMARY KEY (`nombre_e`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_postal`, `nombre_e`, `ubicacion`, `telefono`, `correo`, `pbx`, `jefe_editorial`, `fecha_creacion`) VALUES
(1, 'santillana', 'fghjkl', 212121212, 'sadsa@klasdjldk', 121212, 'hohkj', '2015-10-30'),
(2, 'normas', 'Grecia', 12234, '8484yhg@minose.yo', 4384345, 'luisd', '2017-08-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edit_lib`
--

DROP TABLE IF EXISTS `edit_lib`;
CREATE TABLE IF NOT EXISTS `edit_lib` (
  `isbn_l` bigint(100) NOT NULL,
  `nombre_ed` int(60) NOT NULL,
  PRIMARY KEY (`isbn_l`,`nombre_ed`),
  KEY `temp1_1` (`nombre_ed`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `isbn` bigint(100) NOT NULL,
  `libro` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `editorial` varchar(60) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `pais_de_autor` varchar(40) NOT NULL,
  `compra` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`isbn`,`autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`, `compra`) VALUES
(1, 'El senor de las moscas', '1954-09-17', 'Faber and Faber', 'Alegoia, Novela, Ficcion', 'william Golding', ' Newquay, Reino Unido', 'Disponible'),
(2, 'De ratones y hombres', '1937-01-01', 'Pascal Covici', 'Ficcion, Novela corta, Tragedia', 'John Steinbeck', 'Salinas, California, Estados Unidos', 'Disponible'),
(3, 'Al este del Eden', '1985-09-01', ' TUSQUETS EDITORES', 'Novela, Novela rosa', 'John Steinbeck2', ' Salinas, California, Estados Unidos', 'Disponible'),
(4, 'El tunel', '1948-01-01', 'Sur', 'Existencialismo', 'Ernesto Sabato', ' Rojas, Argentina', 'Disponible'),
(5, 'Sobre heroes y tumbas', '1961-01-01', 'Compania General Fabril Editora', ' Novela', 'Ernesto Sabato2', ' Rojas, Argentina', 'Disponible'),
(6, ' Sobre heroes y tumbas', '2013-11-18', 'Santillana', 'Novela', 'Ernesto Sabat3', 'Rojas, Argentina', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(100) DEFAULT NULL,
  `id_rol` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `id_usuario`, `id_rol`) VALUES
(1, 1056931027, 1),
(2, 1002333444, 1),
(3, 1002333445, 1),
(4, 1002333446, 1),
(5, 1002333447, 1),
(6, 123, 1),
(7, 123, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `u_rol` varchar(100) DEFAULT NULL,
  `t_permiso` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`u_rol`, `t_permiso`) VALUES
('1', 'admin'),
('2', 'cliente'),
('3', 'proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `identificacion` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(170) NOT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`identificacion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `nombre`, `correo`, `contrasena`) VALUES
('1026595290', 'camilo', 'metallica1415@gmail.com', 'Ò„zœÈÅŠÏÙ#œSq'),
('123', 'prueba', 'prueba@prueba.com', '_\Zái›<–ÍXGíñîÞ'),
('1056931027', 'David', 'j.dpirachican7@gmail.com', 'En(\nÊ69Ÿ²©BÄÀÌ'),
('1002333444', 'Sandy', 'sandyurany99@gmail.com', 'è—£Uü+`\'¦\Zn˜â×„'),
('1002333445', 'Camilo', 'metallica98@gmail.com', '”ìklŽ#­<Xþ1”¡\'·'),
('1002333446', 'Christian', 'christianlemus2000@gmail.com', 'ÿð¥VìtiYös%Ýzö'),
('1002333447', 'Sebastian', 'fenrak97@gmail.com', '9˜…WÅ6fä¦Œ2·ÓÖ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendidos`
--

DROP TABLE IF EXISTS `vendidos`;
CREATE TABLE IF NOT EXISTS `vendidos` (
  `id_u` varchar(100) NOT NULL,
  `isbn_c` varchar(100) DEFAULT NULL,
  `cant_vendida` int(100) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendidos`
--

INSERT INTO `vendidos` (`id_u`, `isbn_c`, `cant_vendida`, `fecha`) VALUES
('4', '4', 1, '2018-05-08 19:05:06'),
('4', '4', 1, '2018-05-08 19:05:59'),
('4', '4', 1, '2018-05-10 11:48:53'),
('4', '4', 1, '2018-05-10 19:39:49'),
('4', '4', 2, '2018-05-11 06:55:31'),
('4', '4', 2, '2018-05-11 07:36:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
