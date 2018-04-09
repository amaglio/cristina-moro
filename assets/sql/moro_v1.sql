-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-04-2018 a las 22:21:08
-- Versión del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moro`
--
CREATE DATABASE IF NOT EXISTS `moro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id_carrusel` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `duracion` varchar(200) NOT NULL,
  `dia_horario` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `programa` varchar(200) NOT NULL,
  `id_modalidad_curso` int(11) NOT NULL,
  `id_tema_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_modalidad`
--

CREATE TABLE `curso_modalidad` (
  `id_modalidad` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_tema`
--

CREATE TABLE `curso_tema` (
  `id_tema` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` int(11) NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_tipo`
--

CREATE TABLE `producto_tipo` (
  `id_producto_tipo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_spa`
--

CREATE TABLE `servicio_spa` (
  `id_servicio_spa` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `id_tipo_servicio` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_tipo`
--

CREATE TABLE `servicio_tipo` (
  `id_tipo_servicio` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id_carrusel`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `FK_curso_modalidad` (`id_modalidad_curso`),
  ADD KEY `FK_curso_tema` (`id_tema_curso`);

--
-- Indices de la tabla `curso_modalidad`
--
ALTER TABLE `curso_modalidad`
  ADD PRIMARY KEY (`id_modalidad`);

--
-- Indices de la tabla `curso_tema`
--
ALTER TABLE `curso_tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `FK_producto_tipo` (`id_tipo_producto`);

--
-- Indices de la tabla `producto_tipo`
--
ALTER TABLE `producto_tipo`
  ADD PRIMARY KEY (`id_producto_tipo`);

--
-- Indices de la tabla `servicio_spa`
--
ALTER TABLE `servicio_spa`
  ADD PRIMARY KEY (`id_servicio_spa`),
  ADD KEY `FK_servicio_tipo` (`id_tipo_servicio`);

--
-- Indices de la tabla `servicio_tipo`
--
ALTER TABLE `servicio_tipo`
  ADD PRIMARY KEY (`id_tipo_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `FK_curso_modalidad` FOREIGN KEY (`id_modalidad_curso`) REFERENCES `curso_modalidad` (`id_modalidad`),
  ADD CONSTRAINT `FK_curso_tema` FOREIGN KEY (`id_tema_curso`) REFERENCES `curso_tema` (`id_tema`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_producto_tipo` FOREIGN KEY (`id_tipo_producto`) REFERENCES `producto_tipo` (`id_producto_tipo`);

--
-- Filtros para la tabla `servicio_spa`
--
ALTER TABLE `servicio_spa`
  ADD CONSTRAINT `FK_servicio_tipo` FOREIGN KEY (`id_tipo_servicio`) REFERENCES `servicio_tipo` (`id_tipo_servicio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
