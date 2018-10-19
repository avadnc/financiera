-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-10-2018 a las 03:42:10
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
  `nombre` varchar(255) DEFAULT NULL,
  `nombreComercial` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `xll_d_bancos`
--

INSERT INTO `xll_d_bancos` (`id`, `nombre`, `nombreComercial`) VALUES
(1, 'Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex', 'BANAMEX'),
(2, 'BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer', 'BBVA BANCOMER'),
(3, 'Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander', 'SANTANDER'),
(4, 'HSBC México, S.A., institución De Banca Múltiple, Grupo Financiero HSBC', 'HSBC'),
(5, 'Banco del Bajío, S.A., Institución de Banca Múltiple', 'BAJIO'),
(6, 'IXE Banco, S.A., Institución de Banca Múltiple, IXE Grupo Financiero', 'IXE'),
(7, 'Banco Inbursa, S.A., Institución de Banca Múltiple, Grupo Financiero Inbursa', 'INBURSA'),
(8, 'Banco Interacciones, S.A., Institución de Banca Múltiple', 'INTERACCIONES'),
(9, 'Banca Mifel, S.A., Institución de Banca Múltiple, Grupo Financiero Mifel', 'MIFEL'),
(10, 'Scotiabank Inverlat, S.A.', 'SCOTIABANK'),
(11, 'Banco Regional de Monterrey, S.A., Institución de Banca Múltiple, Banregio Grupo Financiero', 'BANREGIO'),
(12, 'Banco Invex, S.A., Institución de Banca Múltiple, Invex Grupo Financiero', 'INVEX'),
(13, 'Bansi, S.A., Institución de Banca Múltiple', 'BANSI'),
(14, 'Banca Afirme, S.A., Institución de Banca Múltiple', 'AFIRME'),
(15, 'Banco Mercantil del Norte, S.A., Institución de Banca Múltiple, Grupo Financiero Banorte', 'BANORTE/IXE'),
(16, 'The Royal Bank of Scotland México, S.A., Institución de Banca Múltiple', 'THE ROYAL BANK'),
(17, 'American Express Bank (México), S.A., Institución de Banca Múltiple', 'AMERICAN EXPRESS'),
(18, 'Bank of America México, S.A., Institución de Banca Múltiple, Grupo Financiero Bank of America', 'BAMSA'),
(19, 'Bank of Tokyo-Mitsubishi UFJ (México), S.A.', 'TOKYO'),
(20, 'Banco J.P. Morgan, S.A., Institución de Banca Múltiple, J.P. Morgan Grupo Financiero', 'JP MORGAN'),
(21, 'Banco Monex, S.A., Institución de Banca Múltiple', 'BMONEX'),
(22, 'Banco Ve Por Mas, S.A. Institución de Banca Múltiple', 'VE POR MAS'),
(23, 'ING Bank (México), S.A., Institución de Banca Múltiple, ING Grupo Financiero', 'ING'),
(24, 'Deutsche Bank México, S.A., Institución de Banca Múltiple', 'DEUTSCHE'),
(25, 'Banco Azteca, S.A. Institución de Banca Múltiple.', 'AZTECA'),
(26, 'Banco Autofin México, S.A. Institución de Banca Múltiple', 'AUTOFIN'),
(27, 'Barclays Bank México, S.A., Institución de Banca Múltiple, Grupo Financiero Barclays México', 'BARCLAYS'),
(28, 'Banco Compartamos, S.A., Institución de Banca Múltiple', 'COMPARTAMOS'),
(29, 'Banco Ahorro Famsa, S.A., Institución de Banca Múltiple', 'BANCO FAMSA'),
(30, 'Banco Multiva, S.A., Institución de Banca Múltiple, Multivalores Grupo Financiero', 'BMULTIVA'),
(31, 'Banco Actinver, S.A. Institución de Banca Múltiple, Grupo Financiero Actinver', 'ACTINVER'),
(32, 'Banco Wal-Mart de México Adelante, S.A., Institución de Banca Múltiple', 'WAL-MART'),
(33, 'Nacional Financiera, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo', 'NAFIN'),
(34, 'Intercam Banco, S.A., Institución de Banca Múltiple, Intercam Grupo Financiero', 'INTERCAM BANCO'),
(35, 'BanCoppel, S.A., Institución de Banca Múltiple', 'BANCOPPEL'),
(36, 'ABC Capital, S.A., Institución de Banca Múltiple', 'ABC CAPITAL'),
(37, 'UBS Bank México, S.A., Institución de Banca Múltiple, UBS Grupo Financiero', 'UBS BANK'),
(38, 'Consubanco, S.A. Institución de Banca Múltiple', 'CONSUBANCO'),
(39, 'Volkswagen Bank, S.A., Institución de Banca Múltiple', 'VOLKSWAGEN'),
(40, 'CIBanco, S.A.', 'CIBANCO'),
(41, 'Banco Base, S.A., Institución de Banca Múltiple', 'BBASE'),
(42, 'Bankaool, S.A., Institución de Banca Múltiple', 'BANKAOOL'),
(43, 'Banco PagaTodo, S.A., Institución de Banca Múltiple', 'PAGATODO'),
(44, 'Banco Forjadores, S.A., Institución de Banca Múltiple', 'FORJADORES'),
(45, 'Banco Inmobiliario Mexicano, S.A., Institución de Banca Múltiple', 'INMOBILIARIO'),
(46, 'Fundación Dondé Banco, S.A., Institución de Banca Múltiple', 'DONDÉ'),
(47, 'Banco Bancrea, S.A., Institución de Banca Múltiple', 'BANCREA'),
(48, 'Banco Progreso Chihuahua, S.A.', 'PROGRESO'),
(49, 'Banco Finterra, S.A., Institución de Banca Múltiple', 'BANCO FINTERRA'),
(50, 'Industrial and Commercial Bank of China México, S.A., Institución de Banca Múltiple', 'ICBC'),
(51, 'Banco Sabadell, S.A., Institución de Banca Múltiple', 'SABADELL'),
(52, 'Banco Shinhan de México, S.A., Institución de Banca Múltiple', 'SHINHAN'),
(53, 'Mizuho Bank México, S.A., Institución de Banca Múltiple', 'MIZUHO BANK'),
(54, 'Bank of China México, S.A., Institución de Banca Múltiple', 'BANK OF CHINA'),
(55, 'Banco S3 México, S.A., Institución de Banca Múltiple', 'BANCO S3'),
(56, 'Sociedad Hipotecaria Federal, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo', 'HIPOTECARIA FEDERAL'),
(57, 'Monex Casa de Bolsa, S.A. de C.V. Monex Grupo Financiero', 'MONEXCB'),
(58, 'GBM Grupo Bursátil Mexicano, S.A. de C.V. Casa de Bolsa', 'GBM'),
(59, 'Masari Casa de Bolsa, S.A.', 'MASARI'),
(60, 'Value, S.A. de C.V. Casa de Bolsa', 'VALUE'),
(61, 'Estructuradores del Mercado de Valores Casa de Bolsa, S.A. de C.V.', 'ESTRUCTURADORES'),
(62, 'Casa de Cambio Tiber, S.A. de C.V.', 'TIBER'),
(63, 'Vector Casa de Bolsa, S.A. de C.V.', 'VECTOR'),
(64, 'B y B, Casa de Cambio, S.A. de C.V.', 'B&B'),
(65, 'Acciones y Valores Banamex, S.A. de C.V., Casa de Bolsa', 'ACCIVAL'),
(66, 'Merrill Lynch México, S.A. de C.V. Casa de Bolsa', 'MERRILL LYNCH'),
(67, 'Casa de Bolsa Finamex, S.A. de C.V.', 'FINAMEX'),
(68, 'Valores Mexicanos Casa de Bolsa, S.A. de C.V.', 'VALMEX'),
(69, 'Unica Casa de Cambio, S.A. de C.V.', 'UNICA'),
(70, 'MAPFRE Tepeyac, S.A.', 'MAPFRE'),
(71, 'Profuturo G.N.P., S.A. de C.V., Afore', 'PROFUTURO'),
(72, 'Actinver Casa de Bolsa, S.A. de C.V.', 'CB ACTINVER'),
(73, 'OPERADORA ACTINVER, S.A. DE C.V.', 'OACTIN'),
(74, 'Skandia Vida, S.A. de C.V.', 'SKANDIA'),
(75, 'Deutsche Securities, S.A. de C.V. CASA DE BOLSA', 'CBDEUTSCHE'),
(76, 'Zurich Compañía de Seguros, S.A.', 'ZURICH'),
(77, 'Zurich Vida, Compañía de Seguros, S.A.', 'ZURICHVI'),
(78, 'Hipotecaria Su Casita, S.A. de C.V. SOFOM ENR', 'SU CASITA'),
(79, 'Intercam Casa de Bolsa, S.A. de C.V.', 'CB INTERCAM'),
(80, 'CI Casa de Bolsa, S.A. de C.V.', 'CI BOLSA'),
(81, 'Bulltick Casa de Bolsa, S.A., de C.V.', 'BULLTICK CB'),
(82, 'Sterling Casa de Cambio, S.A. de C.V.', 'STERLING'),
(83, 'Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.', 'FINCOMUN'),
(84, 'HDI Seguros, S.A. de C.V.', 'HDI SEGUROS'),
(85, 'Order Express Casa de Cambio, S.A. de C.V', 'ORDER'),
(86, 'Akala, S.A. de C.V., Sociedad Financiera Popular', 'AKALA'),
(87, 'J.P. Morgan Casa de Bolsa, S.A. de C.V. J.P. Morgan Grupo Financiero', 'CB JPMORGAN'),
(88, 'Operadora de Recursos Reforma, S.A. de C.V., S.F.P.', 'REFORMA'),
(89, 'Sistema de Transferencias y Pagos STP, S.A. de C.V.SOFOM ENR', 'STP'),
(90, 'Telecomunicaciones de México', 'TELECOMM'),
(91, 'Evercore Casa de Bolsa, S.A. de C.V.', 'EVERCORE'),
(92, 'Skandia Operadora de Fondos, S.A. de C.V.', 'SKANDIA'),
(93, 'Seguros Monterrey New York Life, S.A de C.V', 'SEGMTY'),
(94, 'Solución Asea, S.A. de C.V., Sociedad Financiera Popular', 'ASEA'),
(95, 'Kuspit Casa de Bolsa, S.A. de C.V.', 'KUSPIT'),
(96, 'J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.', 'SOFIEXPRESS'),
(97, 'UNAGRA, S.A. de C.V., S.F.P.', 'UNAGRA'),
(98, 'OPCIONES EMPRESARIALES DEL NORESTE, S.A. DE C.V., S.F.P.', 'OPCIONES EMPRESARIALES DEL NOROESTE'),
(99, 'Libertad Servicios Financieros, S.A. De C.V.', 'LIBERTAD'),
(100, 'Cls Bank International', 'CLS'),
(101, 'SD. Indeval, S.A. de C.V.', 'INDEVAL'),
(102, 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo', 'BANCOMEXT'),
(103, 'Banco Nacional de Obras y Servicios Públicos, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo', 'BANOBRAS'),
(104, 'Banco Nacional del Ejército, Fuerza Aérea y Armada, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo', 'BANJERCITO'),
(105, 'Banco Credit Suisse (México), S.A. Institución de Banca Múltiple, Grupo Financiero Credit Suisse (México)', 'CREDIT SUISSE'),
(106, 'Banco del Ahorro Nacional y Servicios Financieros, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo', 'BANSEFI');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
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
