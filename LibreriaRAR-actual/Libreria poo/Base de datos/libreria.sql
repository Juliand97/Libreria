-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2018 a las 13:09:42
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

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
(1, 'Bran', 'Stoker', 'Ingles', '1847-11-08', 'Fallecido', 21),
(2, 'yop', 'yi', 'yi', '2017-08-23', 'g', 12),
(2222, 'p', 'p', 'p', '2002-11-30', 'e', 2),
(43242423, 'p2', 'p2', 'p2', '2001-09-18', 'e', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_lib`
--

CREATE TABLE `autor_lib` (
  `isbn_lib` bigint(100) NOT NULL,
  `no_registro` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `ubicacion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `pbx` int(20) NOT NULL,
  `jefe_editorial` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `nombre_e` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_postal` int(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`ubicacion`, `telefono`, `correo`, `pbx`, `jefe_editorial`, `fecha_creacion`, `nombre_e`, `codigo_postal`) VALUES
('Bogota', 1800290, 'sac@santillana.es', 0, 'Juan Perez', '2008-02-05', 'santillana', 1),
('Grecia', 9122122, 'Normas12@norm.es', 4384345, 'Luis d.', '2017-08-10', 'Normas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edit_lib`
--

CREATE TABLE `edit_lib` (
  `isbn_l` bigint(100) NOT NULL,
  `nombre_ed` int(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `isbn` bigint(100) NOT NULL,
  `libro` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `editorial` varchar(60) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `pais_de_autor` varchar(40) NOT NULL,
  `compra` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`, `compra`) VALUES
(1, 'El senor de las moscas', '1954-09-17', 'Faber and Faber', 'Alegoia, Novela, Ficcion', 'William Golding', ' Newquay, Reino Unido', 'vendido'),
(2, 'De ratones y hombres', '1937-01-01', 'Pascal Covici', 'Ficcion, Novela corta, Tragedia', 'John Steinbeck', 'Salinas, California, Estados Unidos', 'Disponible'),
(3, 'Al este del Eden', '1985-09-01', ' TUSQUETS EDITORES', 'Novela, Novela rosa', 'John Steinbeck2', ' Salinas, California, Estados Unidos', 'Disponible'),
(4, 'El tunel', '1948-01-01', 'Sur', 'Existencialismo', 'Ernesto Sabato', ' Rojas, Argentina', 'vendido'),
(5, 'Sobre heroes y tumbas', '1961-01-01', 'Compania General Fabril Editora', ' Novela', 'Ernesto Sabato2', ' Rojas, Argentina', 'Disponible'),
(6, ' Sobre heroes y tumbas', '2013-11-18', 'Santillana', 'novela', 'Ernesto Sabat3', 'Rojas, Argentina', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identificacion` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(170) NOT NULL,
  `privilegios` varchar(100) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `nombre`, `correo`, `privilegios`, `contrasena`) VALUES
('$2y$10$xN3z0Tzf7qcl.qBrctDV6ePBo79RghJFxbX6KLmUNDHUtjUqPjcIi', 'Daniel', 'daniel.mora@misena.edu.co', 'clientes', 'Ò„zœÈÅŠÏÙ#œSq'),
('1056931027', 'David', 'j.dpirachican7@gmail.com', 'administrador', 'En(\nÊ69Ÿ²©BÄÀÌ'),
('1002333444', 'Sandy', 'sandyurany99@gmail.com', 'administrador', 'è—£Uü+`\'¦\Zn˜â×„'),
('1002333445', 'Camilo', 'metallica98@gmail.com', 'administrador', '}woøx¢=áé\ní<'),
('1002333446', 'Christian', 'christianlemus2000@gmail.com', 'administrador', 'ÿð¥VìtiYös%Ýzö'),
('1002333447', 'Sebastian', 'fenrak55@gmail.com', 'administrador', 'gØéAyI€M½ZÂI9ŽôÖMOë„3\Z·q‘6"”„Ò‡Ýå;¾«iÎ©ÑÖ}÷ßô\n5?qG14uñÇ3‹');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendidos`
--

CREATE TABLE `vendidos` (
  `id_u` varchar(100) NOT NULL,
  `isbn_c` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL
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
-- Indices de la tabla `autor_lib`
--
ALTER TABLE `autor_lib`
  ADD PRIMARY KEY (`isbn_lib`,`no_registro`),
  ADD KEY `temp2_2` (`no_registro`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`nombre_e`);

--
-- Indices de la tabla `edit_lib`
--
ALTER TABLE `edit_lib`
  ADD PRIMARY KEY (`isbn_l`,`nombre_ed`),
  ADD KEY `temp1_1` (`nombre_ed`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`isbn`,`autor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `vendidos`
--
ALTER TABLE `vendidos`
  ADD PRIMARY KEY (`id_u`),
  ADD KEY `temp3_2` (`isbn_c`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
