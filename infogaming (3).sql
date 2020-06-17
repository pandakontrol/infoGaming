-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2020 a las 20:20:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infogaming`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `id_anuncio` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`id_anuncio`, `titulo`, `descripcion`, `id_empresa`) VALUES
(23, 'Busco MID para nuestro equipo de lol', 'Entre sus requisitos uno de ellos seria que fuera español y que', 4),
(24, 'Busco jugador para equipo de Fortnite', 'Requisitos: +6000 points arena', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cif` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `logo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre`, `cif`, `email`, `password`, `telefono`, `logo`) VALUES
(1, 'Giants Gaming', '45641896D', 'giantsgaming@gmail.com', 'lñakjsdf', '662255671', ''),
(2, 'Giants Gamfing', '5464634F', 'hols.@gmsi.com', 'asdf', 'asdf', NULL),
(3, 'Google', 'adffff', 'keviddawnkontrol97@gmail.com', 'asdfasdf', '662255', NULL),
(4, 'G2 Sports', '45641896', 'kevinkontrol97@gmail.com', 'asdf', '662255671', NULL),
(5, 'Fnatic', '564465', 'fnatic@hola.com', 'jajajaja', '4654654', NULL),
(6, 'Marcaca', '654654Fd', 'hola@hola.com', 'asdf ', '662255671', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `descripcion` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `descripcion`) VALUES
(1, 'Fortnite'),
(2, 'League of Legends');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_anuncios_usuario`
--

CREATE TABLE `relacion_anuncios_usuario` (
  `id_inscripcion` int(11) NOT NULL,
  `id_anuncio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacion_anuncios_usuario`
--

INSERT INTO `relacion_anuncios_usuario` (`id_inscripcion`, `id_anuncio`, `id_usuario`) VALUES
(25, 23, 14),
(26, 24, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_empresa_juegos`
--

CREATE TABLE `relacion_empresa_juegos` (
  `id_relacion` int(11) NOT NULL,
  `id_juego` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `apellidos` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `dni` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `password`, `dni`, `email`, `fecha_nacimiento`, `telefono`, `id_juego`) VALUES
(14, 'Kevin', 'rodriguez', 'qwer', 'qwer', 'kevinkontrol97@gmail.com', '0351-04-21', 662255671, 1),
(15, 'Moni', 'Aranda Luna', 'asdf', '65413548D', 'moni@moni.com', '1977-05-18', 670533511, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id_anuncio`,`id_empresa`),
  ADD KEY `fk_anuncios_empresas_idx` (`id_empresa`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`);

--
-- Indices de la tabla `relacion_anuncios_usuario`
--
ALTER TABLE `relacion_anuncios_usuario`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_anuncio` (`id_anuncio`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `relacion_empresa_juegos`
--
ALTER TABLE `relacion_empresa_juegos`
  ADD PRIMARY KEY (`id_relacion`),
  ADD KEY `id_juego` (`id_juego`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_juego` (`id_juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `relacion_anuncios_usuario`
--
ALTER TABLE `relacion_anuncios_usuario`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `relacion_empresa_juegos`
--
ALTER TABLE `relacion_empresa_juegos`
  MODIFY `id_relacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relacion_anuncios_usuario`
--
ALTER TABLE `relacion_anuncios_usuario`
  ADD CONSTRAINT `relacion_anuncios_usuario_ibfk_1` FOREIGN KEY (`id_anuncio`) REFERENCES `anuncios` (`id_anuncio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_anuncios_usuario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relacion_empresa_juegos`
--
ALTER TABLE `relacion_empresa_juegos`
  ADD CONSTRAINT `relacion_empresa_juegos_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_empresa_juegos_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
