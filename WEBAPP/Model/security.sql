-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2016 a las 02:11:35
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
  `acce_nom` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_producto`
--

CREATE TABLE `registro_producto` (
  `regi_cod` int(11) NOT NULL,
  `usu_cod` varchar(30) NOT NULL,
  `produ_cod` int(11) NOT NULL,
  `regi_serial` varchar(80) NOT NULL,
  `regi_color` varchar(80) NOT NULL,
  `regi_fecha` date NOT NULL,
  `regi_desc` varchar(80) NOT NULL,
  `regi_autoalerta` varchar(80) NOT NULL,
  `regi_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regi_admin`
--

CREATE TABLE `regi_admin` (
  `admin_cod` int(11) NOT NULL,
  `rol_cod` int(11) NOT NULL,
  `admin_nom` varchar(50) NOT NULL,
  `admin_ape` varchar(50) NOT NULL,
  `admin_docu` varchar(50) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_tel` int(11) NOT NULL,
  `admin_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regi_admin`
--

INSERT INTO `regi_admin` (`admin_cod`, `rol_cod`, `admin_nom`, `admin_ape`, `admin_docu`, `admin_email`, `admin_tel`, `admin_pass`) VALUES
(2, 2, 'andrea', 'taborda', '98111364257', 'dfsd@de.com', 332323, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_cod` int(11) NOT NULL,
  `rol_nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `produ_cod` int(11) NOT NULL,
  `produ_nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_cod` int(11) NOT NULL,
  `usu_nom` varchar(50) NOT NULL,
  `usu_ape` varchar(50) NOT NULL,
  `usu_tipodocu` varchar(50) NOT NULL,
  `usu_docu` varchar(30) NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_centro` varchar(50) NOT NULL,
  `usu_estado` varchar(50) NOT NULL,
  `usu_cargo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`acce_cod`);

--
-- Indices de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD PRIMARY KEY (`entra_cod`);

--
-- Indices de la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  ADD PRIMARY KEY (`regi_cod`);

--
-- Indices de la tabla `regi_admin`
--
ALTER TABLE `regi_admin`
  ADD PRIMARY KEY (`admin_cod`);

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
  ADD PRIMARY KEY (`usu_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `acce_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  MODIFY `entra_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  MODIFY `regi_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `regi_admin`
--
ALTER TABLE `regi_admin`
  MODIFY `admin_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `produ_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
