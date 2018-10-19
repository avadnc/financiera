-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-10-2018 a las 01:12:42
-- Versión del servidor: 5.7.23-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `safin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xll_d_bancos`
--

CREATE TABLE `xll_d_bancos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `nombreComercial` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xll_estado_finanzas`
--

CREATE TABLE `xll_estado_finanzas` (
  `id` int(11) NOT NULL,
  `entity` int(11) NOT NULL,
  `fk_tercero` int(11) NOT NULL,
  `banco` int(11) NOT NULL,
  `ventaAnual` double NOT NULL,
  `costoVentas` double NOT NULL,
  `utilidadAnual` double NOT NULL,
  `clientes` double NOT NULL,
  `inventario` double NOT NULL,
  `actCirculante` double NOT NULL,
  `pasCirculante` double NOT NULL,
  `totalActivos` double NOT NULL,
  `totalPasivo` double NOT NULL,
  `proveedores` double NOT NULL,
  `credCortoPlazo` double NOT NULL,
  `credLargoPlazo` double NOT NULL,
  `saldPM1` double NOT NULL,
  `saldPM2` double NOT NULL,
  `saldPM3` double NOT NULL,
  `saldPM4` double NOT NULL,
  `saldPM5` double NOT NULL,
  `saldPM6` double NOT NULL,
  `ingrM1` double NOT NULL,
  `ingrM2` double NOT NULL,
  `ingrM3` double NOT NULL,
  `ingrM4` double NOT NULL,
  `ingrM5` double NOT NULL,
  `ingrM6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xll_terceros`
--

CREATE TABLE `xll_terceros` (
  `id` int(11) NOT NULL,
  `entity` int(11) DEFAULT NULL,
  `nombreFiscal` varchar(128) DEFAULT NULL,
  `nombreAlias` varchar(128) DEFAULT NULL,
  `fechaConst` date DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `sectorEmpresa` varchar(128) DEFAULT NULL,
  `repLegal` varchar(128) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `codigoFinanciera` varchar(24) DEFAULT NULL,
  `codigoCliente` varchar(24) DEFAULT NULL,
  `codigoSucursal` varchar(24) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `codigoPostal` varchar(25) DEFAULT NULL,
  `poblacion` varchar(50) DEFAULT NULL,
  `telFijo` varchar(20) DEFAULT NULL,
  `telCelular` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `rfc` varchar(128) DEFAULT NULL,
  `notaPrivada` text,
  `notaPublica` text,
  `tipoCliente` tinyint(4) DEFAULT '0',
  `tipoFinanciera` tinyint(4) DEFAULT '0',
  `logo` varchar(255) DEFAULT NULL,
  `fechaModificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `xll_terceros`
--

INSERT INTO `xll_terceros` (`id`, `entity`, `nombreFiscal`, `nombreAlias`, `fechaConst`, `parent`, `sectorEmpresa`, `repLegal`, `status`, `codigoFinanciera`, `codigoCliente`, `codigoSucursal`, `direccion`, `codigoPostal`, `poblacion`, `telFijo`, `telCelular`, `url`, `email`, `rfc`, `notaPrivada`, `notaPublica`, `tipoCliente`, `tipoFinanciera`, `logo`, `fechaModificacion`) VALUES
(1, 1, 'Alex Vives Alcazar', 'VivesCloud', '2012-08-24', NULL, 'Tecnologico', '', 1, NULL, '0001', NULL, 'Isla Tobago 2927', '44950', 'Guadalajara', '3384211125', '3317025248', 'www.google.com', 'gerencia@vivescloud.com', 'VIAA810823QH4', NULL, NULL, 0, 0, NULL, '2018-10-16 17:44:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xll_users`
--

CREATE TABLE `xll_users` (
  `id` int(11) NOT NULL,
  `entity` int(11) DEFAULT NULL,
  `fk_terecero` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `xll_users`
--

INSERT INTO `xll_users` (`id`, `entity`, `fk_terecero`, `username`, `password`, `activo`, `fecha_modificacion`) VALUES
(3, 1, NULL, 'admin', 'admin', 1, '2018-10-18 22:09:19'),
(4, NULL, NULL, '1234', '1234', 1, '2018-10-16 00:09:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `xll_d_bancos`
--
ALTER TABLE `xll_d_bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `xll_estado_finanzas`
--
ALTER TABLE `xll_estado_finanzas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_xll_estado_finanzas_1_idx` (`fk_tercero`);

--
-- Indices de la tabla `xll_terceros`
--
ALTER TABLE `xll_terceros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rfc` (`rfc`);

--
-- Indices de la tabla `xll_users`
--
ALTER TABLE `xll_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `xll_d_bancos`
--
ALTER TABLE `xll_d_bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `xll_estado_finanzas`
--
ALTER TABLE `xll_estado_finanzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `xll_terceros`
--
ALTER TABLE `xll_terceros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `xll_users`
--
ALTER TABLE `xll_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `xll_estado_finanzas`
--
ALTER TABLE `xll_estado_finanzas`
  ADD CONSTRAINT `fk_xll_estado_finanzas_tercero` FOREIGN KEY (`fk_tercero`) REFERENCES `xll_terceros` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
