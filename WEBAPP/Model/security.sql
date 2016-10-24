-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2016 a las 20:47:04
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `security`
--
CREATE DATABASE IF NOT EXISTS `security` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `security`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE `accesorios` (
  `acce_cod` int(11) NOT NULL,
  `regi_cod` int(11) NOT NULL,
  `acce_nom` varchar(80) NOT NULL,
  `acce_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`acce_cod`, `regi_cod`, `acce_nom`, `acce_cantidad`) VALUES
(1, 1, 'mause', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_salida`
--

CREATE TABLE `entrada_salida` (
  `entra_cod` int(11) NOT NULL,
  `regi_cod` int(11) NOT NULL,
  `entra_fechaentra` varchar(40) NOT NULL,
  `entra_fechasal` varchar(40) NOT NULL,
  `entra_horaentra` varchar(40) NOT NULL,
  `entra_horasal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada_salida`
--

INSERT INTO `entrada_salida` (`entra_cod`, `regi_cod`, `entra_fechaentra`, `entra_fechasal`, `entra_horaentra`, `entra_horasal`) VALUES
(1, 1, '16-10-24', '', '13:39,PM', ''),
(2, 1, '16-10-24', '', '13:39,PM', ''),
(3, 1, '16-10-24', '', '13:40,PM', ''),
(4, 1, '16-10-24', '', '13:42,PM', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_producto`
--

CREATE TABLE `registro_producto` (
  `regi_cod` int(11) NOT NULL,
  `usu_cod` varchar(20) NOT NULL,
  `produ_cod` int(11) NOT NULL,
  `regi_serial` varchar(80) NOT NULL,
  `regi_marca` varchar(50) NOT NULL,
  `regi_color` varchar(80) NOT NULL,
  `regi_fecha` date NOT NULL,
  `regi_desc` varchar(80) NOT NULL,
  `regi_autoalerta` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_producto`
--

INSERT INTO `registro_producto` (`regi_cod`, `usu_cod`, `produ_cod`, `regi_serial`, `regi_marca`, `regi_color`, `regi_fecha`, `regi_desc`, `regi_autoalerta`) VALUES
(1, '98111364257', 1, '212121', 'adsd', 'adsd', '0000-00-00', 'adsd', 'adsd'),
(2, '98111364257', 1, '212121', 'adsd', 'adsd', '0000-00-00', 'adsd', 'adsd'),
(3, '98111364257', 1, '123456', 'ssss', '#000000', '2016-10-24', 'dfgdfg', 'dgdfgd'),
(4, '98111364257', 1, '123456', 'fhgv', '#000000', '2016-10-24', 'ghfgh', 'fghgfhf'),
(5, '2333333', 1, '222', 'fhgv', '#000000', '2016-10-24', '', ''),
(6, '123456789', 1, '123456', 'uiyuiyu', '#000000', '2016-10-24', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_cod` int(11) NOT NULL,
  `rol_nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_cod`, `rol_nom`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `produ_cod` int(11) NOT NULL,
  `produ_nom` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`produ_cod`, `produ_nom`) VALUES
(1, 'portatil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_cod` int(11) NOT NULL,
  `rol_cod` int(11) NOT NULL,
  `usu_nom` varchar(50) NOT NULL,
  `usu_ape` varchar(50) NOT NULL,
  `usu_tipodocu` varchar(50) NOT NULL,
  `usu_docu` varchar(30) NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_direc` varchar(60) NOT NULL,
  `usu_centro` varchar(50) NOT NULL,
  `usu_estado` varchar(50) NOT NULL,
  `usu_cargo` varchar(80) NOT NULL,
  `usu_pass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_cod`, `rol_cod`, `usu_nom`, `usu_ape`, `usu_tipodocu`, `usu_docu`, `usu_email`, `usu_tel`, `usu_direc`, `usu_centro`, `usu_estado`, `usu_cargo`, `usu_pass`) VALUES
(1, 1, 'andrea', 'taborda', 'Tarjeta de Identidad', '98111364257', 'yenitabordav@hotmail.com', 456, 'dfd', 'dsds', 'Activo', 'ff', '$2y$10$VlB0rYkvP28twW8se4TfgeSb4UAmzpjWzpCZZMraMfnQh21t/q3.y'),
(2, 1, 'cristian', 'villegas', 'Cedula', '123456789', 'asd@fg.com', 456, 'efgdfg', 'calatrava', 'Activo', 'vigilante', '$2y$10$ZX/U6p2NhXLWOihL.SinfOApOQzq8Z.QBC6FO2F.sFdLo3sbtZ6hm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`acce_cod`),
  ADD KEY `regi_cod` (`regi_cod`);

--
-- Indices de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD PRIMARY KEY (`entra_cod`),
  ADD KEY `regi_cod` (`regi_cod`);

--
-- Indices de la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  ADD PRIMARY KEY (`regi_cod`),
  ADD KEY `usu_cod` (`usu_cod`,`produ_cod`),
  ADD KEY `produ_cod` (`produ_cod`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_cod`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`produ_cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `rol_cod` (`rol_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `acce_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  MODIFY `entra_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  MODIFY `regi_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `produ_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD CONSTRAINT `accesorios_ibfk_1` FOREIGN KEY (`regi_cod`) REFERENCES `registro_producto` (`regi_cod`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD CONSTRAINT `entrada_salida_ibfk_1` FOREIGN KEY (`regi_cod`) REFERENCES `registro_producto` (`regi_cod`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_cod`) REFERENCES `rol` (`rol_cod`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
