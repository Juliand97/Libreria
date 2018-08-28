-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-08-2018 a las 04:15:13
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
-- Estructura de tabla para la tabla `autores`
--

DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `no_registro` int(11) NOT NULL AUTO_INCREMENT,
  `nombrea` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellidoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nac` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechan` date NOT NULL,
  `estadoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `obras` int(50) NOT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`no_registro`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`no_registro`, `nombrea`, `apellidoa`, `nac`, `fechan`, `estadoa`, `obras`, `estado`) VALUES
(1, 'Bran', 'Stoker', 'Ingles', '1847-11-08', 'Fallecido', 50, 1),
(2, 'yop', 'yi', 'yi', '2017-08-23', 'g', 12, 1),
(3, 'prueba', 'p', 'pr', '2007-08-30', 'pruev', 2, 1),
(4, 'autor de prueba shhh', 'a', 'Nacionalidad de  prueba', '2015-06-29', 'ac', 1, 0),
(5, 'autor de prueba sss', 'aa', 'Nacionalidad de  pruebash', '2016-08-30', 'ds', 21, 0),
(10, 'pruebas de nuevo mvc', 'nuevo mvc', 'Nacionalidad de  prueba', '2017-10-30', 'sa', 42, 0);

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
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `categoria`, `estado`) VALUES
(1, 'Informatica', 1),
(2, 'terror', 1),
(3, 'Historia', 1),
(6, 'Alegoria', 1),
(7, 'Novela', 1),
(8, 'Ficcion', 1),
(9, 'Novela corta\r\n                                         ', 1),
(10, 'Tragedia\r\n                                         ', 1),
(11, 'comedia', 1),
(23, 'categoria de prueba3', 0),
(22, 'categoria de prueba2', 0),
(21, 'categoria de prueba1', 0),
(24, 'categoria de prueba4', 0),
(25, 'prueba', 1),
(26, 'categoy', 0),
(27, 'solo actualizat', 0),
(28, 'experimentos', 1),
(29, 'experimento2', 1),
(30, 'experimento20', 1);

--
-- Disparadores `categorias`
--
DROP TRIGGER IF EXISTS `prueba_AU`;
DELIMITER $$
CREATE TRIGGER `prueba_AU` AFTER INSERT ON `categorias` FOR EACH ROW UPDATE categorias set estado='1'
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

DROP TABLE IF EXISTS `editoriales`;
CREATE TABLE IF NOT EXISTS `editoriales` (
  `codigo_postal` int(60) DEFAULT NULL,
  `nombre_e` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`nombre_e`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_postal`, `nombre_e`, `estado`) VALUES
(1, 'santillana', 1),
(2, 'norma', 1),
(12, 'faber and faber', 1),
(23132, 'editorial de pruebas', 0),
(303030303, 'registro de prueba', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `id_u` varchar(100) NOT NULL,
  `isbn_c` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `fecha_de_entrada` varchar(100) DEFAULT NULL,
  `cant_ingresada` int(11) NOT NULL,
  `Fecha_de_salida` varchar(100) NOT NULL,
  `cant_reservada` int(100) NOT NULL,
  `cant_lib_dev` int(100) DEFAULT NULL,
  `fecha_de_devolucion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_u`, `isbn_c`, `Descripcion`, `fecha_de_entrada`, `cant_ingresada`, `Fecha_de_salida`, `cant_reservada`, `cant_lib_dev`, `fecha_de_devolucion`) VALUES
('4', '1', 'Ingreso el libro con isbn:1', '2018-06-05 20:51:50', 0, 'N/A', 0, 0, 'N/A'),
('4', '2', 'Ingreso el libro con isbn:2', '2018-06-06 06:38:39', 2, 'N/A', 0, 0, 'N/A'),
('1', '1', 'Reservo libro con isbn:1', 'N/A', 0, '2018-06-06 06:41:51', 1, 0, 'N/A'),
('1', '1', 'Reserva de libro con isbn: 1', 'N/A', 0, '2018-06-07 11:06:23', 2, 0, 'N/A'),
('4', '3', 'Ingreso:  libro correpondiente al isbn 3', '2018-06-07 11:23:30', 22, 'N/A', 0, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-07 19:51:18', 22, 'N/A', 0, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-07 21:02:53', 1, 'N/A', 0, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-07 21:47:03', 3, 'N/A', 0, 0, 'N/A'),
('4', '4', 'Ingreso:  libro correpondiente al isbn 4', '2018-06-07 21:50:01', 100, 'N/A', 0, 0, 'N/A'),
('4', '5', 'Ingreso:  libro correpondiente al isbn 5', '2018-06-07 21:50:10', 100, 'N/A', 0, 0, 'N/A'),
('4', '6', 'Ingreso:  libro correpondiente al isbn 6', '2018-06-07 21:50:19', 100, 'N/A', 0, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-07 21:52:16', 74, 'N/A', 0, 0, 'N/A'),
('4', '2', 'Ingreso:  libro correpondiente al isbn 2', '2018-06-07 21:52:45', 98, 'N/A', 0, 0, 'N/A'),
('4', '3', 'Ingreso:  libro correpondiente al isbn 3', '2018-06-07 21:53:18', 78, 'N/A', 0, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-08 06:41:25', 1, 'N/A', 0, 0, 'N/A'),
('1', '1', 'Reserva de libro con isbn: 1', 'N/A', 0, '2018-06-08 08:54:37', 98, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-08 08:58:03', 100, 'N/A', 0, 0, 'N/A'),
('4', '4', 'Reserva de libro con isbn: 4', 'N/A', 0, '2018-06-13 11:21:40', 10, 0, 'N/A'),
('1', '1', 'Reserva de libro con isbn: 1', 'N/A', 0, '2018-06-19 10:22:39', 20, 0, 'N/A'),
('3', '3', 'Reserva de libro con isbn: 3', 'N/A', 0, '2018-06-19 19:58:19', 19, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-19 21:01:08', 1, 'N/A', 0, 0, 'N/A'),
('2', '2', 'Devolucion: libro correspondiente al isbn 2', 'N/A', 0, 'N/A', 0, 3, '2018-06-21 19:06:54'),
('2', '2', 'Devolucion: libro correspondiente al isbn 2', 'N/A', 0, 'N/A', 0, 3, '2018-06-21 19:14:06'),
('2', '2', 'Devolucion: libro correspondiente al isbn 2', 'N/A', 0, 'N/A', 0, 3, '2018-06-21 19:43:48'),
('2', '2', 'Devolucion: libro correspondiente al isbn 2', 'N/A', 0, 'N/A', 0, 3, '2018-06-21 19:55:25'),
('2', '2', 'Devolucion: libro correspondiente al isbn 2', 'N/A', 0, 'N/A', 0, 3, '2018-06-21 20:02:02'),
('1', '1', 'Devolucion: libro correspondiente al isbn 1', 'N/A', 0, 'N/A', 0, 100, '2018-06-21 20:05:59'),
('1', '1', 'Devolucion: libro correspondiente al isbn 1', 'N/A', 0, 'N/A', 0, 2, '2018-06-21 22:04:28'),
('1', '1', 'Devolucion: libro correspondiente al isbn 1', 'N/A', 0, 'N/A', 0, 19, '2018-06-21 22:05:07'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-21 22:07:51', 1, 'N/A', 0, NULL, NULL),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-21 22:12:31', 1, 'N/A', 0, NULL, NULL),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-21 22:12:41', 1, 'N/A', 0, NULL, NULL),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-06-21 22:26:32', 1, 'N/A', 0, 0, 'N/A'),
('1', '1', 'Reserva de libro con isbn: 1', 'N/A', 0, '2018-06-21 22:27:02', 6, 0, 'N/A'),
('1', '1', 'Devolucion: libro correspondiente al isbn 1', 'N/A', 0, 'N/A', 0, 1, '2018-06-25 22:14:00'),
('5', '5', 'Reserva de libro con isbn: 5', 'N/A', 0, '2018-08-02 11:13:58', 3, 0, 'N/A'),
('5', '5', 'Reserva de libro con isbn: 5', 'N/A', 0, '2018-08-02 11:14:56', 3, 0, 'N/A'),
('4', '32', 'Ingreso:  libro correpondiente al isbn 32', '2018-08-02 20:14:13', 42, 'N/A', 0, 0, 'N/A'),
('4', '32', 'Ingreso:  libro correpondiente al isbn 32', '2018-08-02 20:15:01', 42, 'N/A', 0, 0, 'N/A'),
('4', '3', 'Ingreso:  libro correpondiente al isbn 3', '2018-08-02 20:19:54', 3, 'N/A', 0, 0, 'N/A'),
('4', '1', 'Ingreso:  libro correpondiente al isbn 1', '2018-08-03 07:00:43', 1, 'N/A', 0, 0, 'N/A'),
('1', '1', 'Reserva de libro con isbn: 1', 'N/A', 0, '2018-08-08 22:36:42', 2, 0, 'N/A');

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
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`isbn`,`autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`, `compra`, `estado`) VALUES
(1, 'el senor de las moscas', '1954-09-17', 'norma', 'Informatica', 'William Golding', 'Reino unido', 'Disponible', 1),
(2, 'De ratones y hombres', '1937-01-01', 'santillana', 'Ficcion', 'John Steinbeck', 'Salinas, California, Estados Unidos', 'Disponible', 1),
(3, 'Al este del Eden', '1985-09-01', 'santillana', 'Novela corta', 'John Steinbeck2', ' Salinas, California, Estados Unidos', 'Disponible', 1),
(4, 'El tunel', '1948-01-01', 'santillana', 'Novela', 'Ernesto Sabato', ' Rojas, Argentina', 'Disponible', 1),
(5, 'Sobre heroes y tumbas', '1961-01-01', 'Compania General Fabril Editora', ' Novela', 'Ernesto Sabato2', ' Rojas, Argentina', 'Disponible', 1),
(6, ' Sobre heroes y tumbas', '2013-11-18', 'santillana', 'Novela', 'Ernesto', 'Rojas, Argentina', 'Disponible', 1),
(1111, 'Libro de prueba ', '2017-09-28', 'faber and faber', 'Ficcion', 'Autor de prueba ', 'Pais de prueba', 'Disponible', 0),
(12345678910, 'Libro de prueba actual', '2014-09-28', 'faber and faber', 'Historia', 'autor de la nueva pruebad', 'pais de la nueva pruebas', 'Disponible', 0),
(2020202020202020, 'registro de pruena', '2017-11-30', 'faber and faber', 'Historia', 'aaa', '222', 'Disponible', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(100) DEFAULT NULL,
  `id_rol` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(7, 123, 2),
(10, 75428536875, 2),
(11, 75428536875, 2),
(12, 75428536875, 2),
(13, 75428536875, 2),
(14, 101010101010, 2),
(15, 97020704229, 2),
(16, 97020704229, 2);

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
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `correo`, `contrasena`, `estado`) VALUES
('1026595290', 'camilo', 'N/A', 'Ramirez', 'N/A', 'metallica1415@gmail.com', 'Ò„zœÈÅŠÏÙ#œSq', 1),
('123', 'prueba', 'N/A', 'prueba', 'N/A', 'prueba@prueba.com', '_\Zái›<–ÍXGíñîÞ', 1),
('1056931027', 'David', 'N/A', 'Moreno', 'N/A', 'j.dpirachican7@gmail.com', 'En(\nÊ69Ÿ²©BÄÀÌ', 1),
('1002333444', 'Sandy', 'N/A', 'Cruz', 'N/A', 'sandyurany99@gmail.com', 'è—£Uü+`\'¦\Zn˜â×„', 1),
('1002333445', 'Camilo', 'N/A', 'Alvarez', 'N/A', 'metallica98@gmail.com', '”ìklŽ#­<Xþ1”¡\'·', 1),
('1002333446', 'Christian', 'N/A', 'Lemus', 'N/A', 'christianlemus2000@gmail.com', 'ÿð¥VìtiYös%Ýzö', 1),
('1002333447', 'Sebastian', 'N/A', 'Cardenas', 'N/A', 'fenrak97@gmail.com', '9˜…WÅ6fä¦Œ2·ÓÖ', 1),
('75428536875', 'usuario', 'del', 'modo de ', 'prueba', 'prueba@prueba.com', 'ˆeŽŒîÓå3Ç\rÝ|…²', 1),
('101010101011', 'actualizando', 'usuarios', 'pruebas', 'dos', 'actualizando', 'Ysˆ.+\\8þQ@yÙè', 0),
('97020704229', 'registrosss', 'de lasss', 'prueba', 'logueo', 'registrosss', 'c/øøgjE*0_>[Úô˜', 0),
('nuevos reg', 'registo', 'de las ', 'modificaciones', 'proyecto', 'perueba@prueba.co', 'ˆeŽŒîÓå3Ç\rÝ|…²', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
