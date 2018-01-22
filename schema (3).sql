-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2018 at 02:07 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `analistas`
--

DROP TABLE IF EXISTS `analistas`;
CREATE TABLE IF NOT EXISTS `analistas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analistas`
--

INSERT INTO `analistas` (`id`, `rif`, `nombre`, `apellido`, `celular`, `telefono`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'J-20989357-2', 'OSWARD JOSÉ', 'PACHECO', '0424-3513322', '0244-3962442', 'OJPR15@GMAIL.COM', 'activo', '2017-11-01 16:40:50', '2017-11-01 16:40:50'),
(2, 'J-10759226-4', 'ZULEIMA', 'REQUENA', '0426-4350796', '0212-4065543', 'ZULEIMA@GMAIL.COM', 'activo', '2017-11-15 12:11:01', '2017-11-15 12:11:01'),
(3, 'J-10457682-4', 'JOSE', 'REQUENA', '0414-4911227', '0244-4562306', 'JOSENDDRB@HOTMAIL.COM', 'inactivo', '2017-11-15 12:14:26', '2017-11-15 12:14:26'),
(4, 'J-10457682-5', 'JOSE', 'REQUENA', '0414-4911227', '0244-4562306', 'JOSENDDRB@HOTMAIL.COM', 'activo', '2017-11-15 12:16:11', '2017-11-15 12:16:11'),
(5, 'J-23935671-2', 'PEDRO', 'FONSECA', '0414-4911227', '0212-4065543', 'PEDRO@GMAIL.COM', 'activo', '2017-11-15 12:17:32', '2017-11-15 12:17:32'),
(7, 'J-24910259-1', 'RAMON', 'HERNANDEZ', '0424-0984517', '0212-4092442', 'RAMON564@GMAIL.COM', 'activo', '2018-01-13 00:11:53', '2018-01-13 00:11:53'),
(8, 'J-24910251-1', 'RAMON', 'HERNANDEZ', '0424-0984517', '0212-4092442', 'RAMON564@GMAIL.COM', 'inactivo', '2018-01-13 00:12:02', '2018-01-13 00:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `analis_asegu`
--

DROP TABLE IF EXISTS `analis_asegu`;
CREATE TABLE IF NOT EXISTS `analis_asegu` (
  `analista_id` int(10) UNSIGNED NOT NULL,
  `aseguradora_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `analis_asegu_analista_id_foreign` (`analista_id`),
  KEY `analis_asegu_aseguradora_id_foreign` (`aseguradora_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analis_asegu`
--

INSERT INTO `analis_asegu` (`analista_id`, `aseguradora_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2017-11-01 16:40:50', '2017-11-01 16:40:50'),
(2, 2, '2017-11-15 12:11:02', '2017-11-15 12:11:02'),
(3, 1, '2017-11-15 12:14:26', '2017-11-15 12:14:26'),
(4, 1, '2017-11-15 12:16:11', '2017-11-15 12:16:11'),
(5, 2, '2017-11-15 12:17:32', '2017-11-15 12:17:32'),
(7, 2, '2018-01-13 00:11:53', '2018-01-13 00:11:53'),
(8, 3, '2018-01-13 00:12:02', '2018-01-13 00:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `codigo`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A00001', 'PINTURAS', 'activo', '2017-11-18 03:37:38', '2017-11-18 03:37:38'),
(2, 'MET0001', 'METALES', 'activo', '2017-11-18 03:42:43', '2018-01-19 19:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `area_repues`
--

DROP TABLE IF EXISTS `area_repues`;
CREATE TABLE IF NOT EXISTS `area_repues` (
  `area_id` int(10) UNSIGNED NOT NULL,
  `repuesto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `area_repues_area_id_foreign` (`area_id`),
  KEY `area_repues_repuesto_id_foreign` (`repuesto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aseguradoras`
--

DROP TABLE IF EXISTS `aseguradoras`;
CREATE TABLE IF NOT EXISTS `aseguradoras` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denominacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aseguradoras`
--

INSERT INTO `aseguradoras` (`id`, `rif`, `denominacion`, `telefono`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'J-20989357-0', 'MULTINACIONAL DE SEGUROS C.A', '0212-4065544', 'MULTISEGUROS@GMAIL.COM', 'activo', '2017-11-01 16:39:00', '2017-11-18 11:48:04'),
(2, 'J-20989357-4', 'SEGUROS UNIVERSITAS C.A', '0212-4065338', 'SEGUROSUNIVERSITAS@GMAIL.COM', 'activo', '2017-11-01 16:39:37', '2017-11-18 11:43:56'),
(3, 'J-20989357-8', 'SEGUROS ALTAMIRA C.A', '0212-4065329', 'SEGUROSALTA@GMAIL.COM', 'activo', '2017-11-17 19:24:56', '2017-11-28 20:23:11'),
(4, 'J-20989357-3', 'SEGUROS CARACAS C.A', '0212-4065840', 'SEGUROSCARACAS@GMAIL.COM', 'activo', '2017-11-18 03:16:45', '2017-11-28 20:20:24'),
(5, 'J-25873529-3', 'RWVRVR', '0212-4065333', 'YELI2@GMAIL.COM', 'inactivo', '2017-11-22 18:59:07', '2017-11-22 18:59:07'),
(6, 'J-25873529-5', 'RWVRVR', '0212-4065333', 'YELI2@GMAIL.COM', 'inactivo', '2017-11-22 18:59:59', '2017-11-22 18:59:59'),
(7, 'J-25873529-0', 'RWVRVR', '0212-4065333', 'YELI2@GMAIL.COM', 'inactivo', '2017-11-22 19:02:48', '2017-11-22 19:02:48'),
(8, 'J-14560982-3', 'JBDLJBD', '0212-4065333', 'DEMO@SENDY.CO', 'inactivo', '2017-11-22 19:05:15', '2017-11-22 19:05:15'),
(9, 'J-14560982-8', 'JBDLJBD', '0212-4065333', 'DEMO@SENDY.CO', 'inactivo', '2017-11-22 19:09:46', '2017-11-22 19:09:46'),
(10, 'J-14560982-5', 'JBDLJBD', '0212-4065333', 'DEMO@SENDY.CO', 'inactivo', '2017-11-22 19:10:51', '2017-11-22 19:10:51'),
(11, 'J-14560982-1', 'JBDLJBD', '0212-4065333', 'DEMO@SENDY.CO', 'inactivo', '2017-11-22 19:14:28', '2017-11-22 19:14:28'),
(12, 'J-20989357-1', 'FTFT', '0212-4065543', 'OSWARDP_94@HOTMAIL.COM', 'inactivo', '2017-11-22 19:16:18', '2017-11-22 19:16:18'),
(13, 'J-23435987-1', 'SEGUROS LA ORIENTAL', '0212-2098745', 'LAORIENTAL@GMAIL.COM', 'inactivo', '2017-11-27 16:41:11', '2017-11-27 16:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `ayudantes`
--

DROP TABLE IF EXISTS `ayudantes`;
CREATE TABLE IF NOT EXISTS `ayudantes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ayudantes`
--

INSERT INTO `ayudantes` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'V-10759226', 'RICARDO', 'MONTOYA', '0424-4413322', 'RICARDD33@GMAIL.COM', 'VALENCIA', 'activo', '2017-11-01 16:44:56', '2017-11-01 16:44:56'),
(2, 'V-08738012', 'ENRIQUE', 'FONSECA', '0414-5435737', 'MSA@GMAIL.COM', 'CAGUA', 'activo', '2017-11-01 16:45:49', '2017-11-29 09:50:42'),
(3, 'V-25924739', 'LEONCIO', 'REQUENA', '0243-4538310', 'LEOREQUENA@HOTMAIL.COM', 'LA VICTORIA', 'activo', '2018-01-13 00:15:07', '2018-01-13 00:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `id_` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reparacion_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `propietario_id` int(10) UNSIGNED NOT NULL,
  `selec_dia` date NOT NULL,
  `act` enum('ASIGNADA','VENCIDA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_`),
  KEY `citas_reparacion_id_foreign` (`reparacion_id`),
  KEY `vehiculo_id` (`vehiculo_id`,`propietario_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corredores`
--

DROP TABLE IF EXISTS `corredores`;
CREATE TABLE IF NOT EXISTS `corredores` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corredores`
--

INSERT INTO `corredores` (`id`, `cedula`, `nombre`, `apellido`, `celular`, `telefono`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'J-10759226-4', 'CARMEN', 'FIGUERA', '0424-3224353', '0212-4065543', 'CARMENFIG@GMAIL.COM', 'activo', '2017-11-01 16:41:33', '2017-11-01 16:41:33'),
(5, 'J-23044561-2', 'JOSE', 'PEREZ', '0424-3532309', '0243-4538307', 'JOSENRB@HOTMAIL.COM', 'activo', '2018-01-13 00:06:38', '2018-01-13 00:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `corre_asegu`
--

DROP TABLE IF EXISTS `corre_asegu`;
CREATE TABLE IF NOT EXISTS `corre_asegu` (
  `corredor_id` int(10) UNSIGNED NOT NULL,
  `aseguradora_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `corre_asegu_corredor_id_foreign` (`corredor_id`),
  KEY `corre_asegu_aseguradora_id_foreign` (`aseguradora_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corre_asegu`
--

INSERT INTO `corre_asegu` (`corredor_id`, `aseguradora_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-11-01 16:41:33', '2017-11-01 16:41:33'),
(5, 2, '2018-01-13 00:06:38', '2018-01-13 00:06:38'),
(1, 1, '2017-11-01 16:41:33', '2017-11-01 16:41:33'),
(5, 2, '2018-01-13 00:06:38', '2018-01-13 00:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `facturaciones`
--

DROP TABLE IF EXISTS `facturaciones`;
CREATE TABLE IF NOT EXISTS `facturaciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reparacion_id` int(10) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma_pago` enum('efectivo','deposito / transferencia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_cuenta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuesto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facturaciones_reparacion_id_foreign` (`reparacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'S4onM.jpg', '2017-11-26 14:08:53', '2017-11-26 14:08:53'),
(2, 'PCLJw.jpg', '2017-11-26 14:08:53', '2017-11-26 14:08:53'),
(3, 'pUYy4.jpg', '2017-11-26 14:08:54', '2017-11-26 14:08:54'),
(4, 'Ue81J.jpg', '2017-11-26 14:08:54', '2017-11-26 14:08:54'),
(5, 'KPddc.jpg', '2017-11-26 14:08:54', '2017-11-26 14:08:54'),
(6, 'Sq8yK.jpg', '2017-11-26 14:08:54', '2017-11-26 14:08:54'),
(7, 'Ub3rI.jpg', '2017-11-28 19:09:39', '2017-11-28 19:09:39'),
(8, '9LUO7.jpg', '2017-11-28 19:09:39', '2017-11-28 19:09:39'),
(9, '6yVTs.jpg', '2017-11-28 19:09:39', '2017-11-28 19:09:39'),
(10, 'Ltaxi.jpg', '2017-11-28 19:09:40', '2017-11-28 19:09:40'),
(11, 'YEqEo.jpg', '2017-11-28 19:09:40', '2017-11-28 19:09:40'),
(12, 'TzVbd.jpg', '2017-11-28 19:09:40', '2017-11-28 19:09:40'),
(13, 'lHgRB.jpg', '2017-11-28 19:10:52', '2017-11-28 19:10:52'),
(14, 'yzpVR.jpg', '2017-11-28 19:10:52', '2017-11-28 19:10:52'),
(15, 'crSSu.jpg', '2017-11-28 19:10:53', '2017-11-28 19:10:53'),
(16, 'LF2Tl.jpg', '2017-11-28 19:10:53', '2017-11-28 19:10:53'),
(17, 'dxyI1.jpg', '2017-11-28 19:10:53', '2017-11-28 19:10:53'),
(18, 'i2fVY.jpg', '2017-11-28 19:10:54', '2017-11-28 19:10:54'),
(19, '330fu.jpg', '2017-11-28 19:12:32', '2017-11-28 19:12:32'),
(20, 'LrjNb.jpg', '2017-11-28 19:12:32', '2017-11-28 19:12:32'),
(21, '0pJB5.jpg', '2017-11-28 19:12:32', '2017-11-28 19:12:32'),
(22, 'V0B6Z.jpg', '2017-11-28 19:12:33', '2017-11-28 19:12:33'),
(23, 'lpLRS.jpg', '2017-11-28 19:12:34', '2017-11-28 19:12:34'),
(24, '733iY.jpg', '2017-11-28 19:12:34', '2017-11-28 19:12:34'),
(25, 'pE9gK.jpg', '2017-11-28 19:16:54', '2017-11-28 19:16:54'),
(26, 'tL2MR.jpg', '2017-11-28 19:16:55', '2017-11-28 19:16:55'),
(27, 'ZdRDC.jpg', '2017-11-28 19:16:56', '2017-11-28 19:16:56'),
(28, 'wsaJC.jpg', '2017-11-28 19:16:56', '2017-11-28 19:16:56'),
(29, 'lH4op.jpg', '2017-11-28 19:18:05', '2017-11-28 19:18:05'),
(30, 'ZaZru.jpg', '2017-11-28 19:18:05', '2017-11-28 19:18:05'),
(31, '6aLAj.jpg', '2017-11-28 19:18:05', '2017-11-28 19:18:05'),
(32, 'X2TT1.jpg', '2017-11-28 19:18:06', '2017-11-28 19:18:06'),
(33, 'GqlpI.jpg', '2017-11-28 19:18:06', '2017-11-28 19:18:06'),
(34, 'J7Unb.jpg', '2017-11-28 19:19:08', '2017-11-28 19:19:08'),
(35, 'wzOpz.jpg', '2017-11-28 19:19:09', '2017-11-28 19:19:09'),
(36, 'e20gS.jpg', '2017-11-28 19:19:10', '2017-11-28 19:19:10'),
(37, 'R7O5n.jpg', '2017-11-28 19:19:10', '2017-11-28 19:19:10'),
(38, '0gUJ3.jpg', '2017-11-28 19:19:10', '2017-11-28 19:19:10'),
(39, 'taeoS.jpg', '2017-11-29 10:45:44', '2017-11-29 10:45:44'),
(40, '99Sn0.jpg', '2017-11-29 10:45:44', '2017-11-29 10:45:44'),
(41, '5O7HZ.jpg', '2017-11-29 10:45:45', '2017-11-29 10:45:45'),
(42, '6LEUv.jpg', '2017-11-29 10:45:45', '2017-11-29 10:45:45'),
(43, '9MBY0.jpg', '2017-11-29 15:17:29', '2017-11-29 15:17:29'),
(44, 'Om1BB.jpg', '2017-11-29 15:17:29', '2017-11-29 15:17:29'),
(45, 'roVrH.jpg', '2017-11-29 15:17:30', '2017-11-29 15:17:30'),
(46, 'OoHjG.jpg', '2017-11-29 15:17:30', '2017-11-29 15:17:30'),
(47, 'qvXfn.jpg', '2017-11-29 15:17:31', '2017-11-29 15:17:31'),
(48, 'poyVz.jpg', '2017-11-29 15:17:31', '2017-11-29 15:17:31'),
(49, 'N68NQ.jpg', '2018-01-19 10:06:54', '2018-01-19 10:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `image_recs`
--

DROP TABLE IF EXISTS `image_recs`;
CREATE TABLE IF NOT EXISTS `image_recs` (
  `imagen_id` int(10) UNSIGNED NOT NULL,
  `recepcion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `image_recs_imagen_id_foreign` (`imagen_id`),
  KEY `image_recs_recepcion_id_foreign` (`recepcion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_reps`
--

DROP TABLE IF EXISTS `image_reps`;
CREATE TABLE IF NOT EXISTS `image_reps` (
  `imagen_id` int(10) UNSIGNED NOT NULL,
  `repuesto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `image_reps_imagen_id_foreign` (`imagen_id`),
  KEY `image_reps_repuesto_id_foreign` (`repuesto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_revs`
--

DROP TABLE IF EXISTS `image_revs`;
CREATE TABLE IF NOT EXISTS `image_revs` (
  `imagen_id` int(10) UNSIGNED NOT NULL,
  `revision_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `image_revs_imagen_id_foreign` (`imagen_id`),
  KEY `image_revs_revision_id_foreign` (`revision_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modulos`
--

INSERT INTO `modulos` (`id`, `nombre`) VALUES
(1, 'Respaldo y restauración de base de datos'),
(2, 'Crear orden de reparación'),
(3, 'Estadisticas'),
(4, 'Repuestos'),
(5, 'Otra cosa'),
(6, 'Ruta'),
(7, 'Citas'),
(8, 'Bitacora'),
(9, 'Reportes'),
(11, 'Usuarios'),
(12, 'Servicios');

-- --------------------------------------------------------

--
-- Table structure for table `mod_usu`
--

DROP TABLE IF EXISTS `mod_usu`;
CREATE TABLE IF NOT EXISTS `mod_usu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mod` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `valor` enum('true','false') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mod_usu`
--

INSERT INTO `mod_usu` (`id`, `id_mod`, `id_usu`, `valor`) VALUES
(35, 5, 2, 'true'),
(36, 7, 2, 'true'),
(37, 9, 2, 'true'),
(80, 1, 1, 'true'),
(81, 2, 1, 'true'),
(82, 3, 1, 'true'),
(83, 4, 1, 'true'),
(84, 5, 1, 'true'),
(85, 6, 1, 'true'),
(86, 7, 1, 'true'),
(87, 8, 1, 'true'),
(88, 9, 1, 'true'),
(89, 11, 1, 'true'),
(90, 12, 1, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `operarios`
--

DROP TABLE IF EXISTS `operarios`;
CREATE TABLE IF NOT EXISTS `operarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('latonero','pintor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operarios`
--

INSERT INTO `operarios` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `email`, `tipo`, `direccion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'V-10759226', 'RAFAEL', 'PEREZ', '0412-4567802', 'RAFAEL@GMAIL.COM', 'latonero', 'MARACAY', 'activo', '2017-11-01 16:42:28', '2017-11-01 16:42:28'),
(2, 'V-20989353', 'JOSÉ', 'HERNÁNDEZ', '0426-2343567', 'JOSENDDRB@HOTMAIL.COM', 'pintor', 'MARACAY', 'activo', '2017-11-01 16:43:11', '2017-11-01 16:43:11'),
(3, 'V-20989357', 'ROMEL', 'CHACON', '0212-4065544', 'ojpr15@gmail.com', 'latonero', 'REWFEF', 'activo', '2017-11-12 04:43:57', '2018-01-15 20:48:01'),
(4, 'V-11111111', 'M', 'S', '0244-3333333', 'EDSD@FF', 'latonero', 'Q', 'inactivo', '2018-01-15 20:54:21', '2018-01-15 20:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polizas`
--

DROP TABLE IF EXISTS `polizas`;
CREATE TABLE IF NOT EXISTS `polizas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aseguradora_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `polizas_aseguradora_id_foreign` (`aseguradora_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polizas`
--

INSERT INTO `polizas` (`id`, `numero`, `aseguradora_id`, `created_at`, `updated_at`) VALUES
(1, '99-99-1234567890', 1, '2018-01-19 17:55:47', '2018-01-19 17:55:47'),
(2, '54-54-1234567890', 1, '2018-01-19 18:39:17', '2018-01-19 18:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
CREATE TABLE IF NOT EXISTS `propietarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_completo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propietarios`
--

INSERT INTO `propietarios` (`id`, `rif`, `nombre_completo`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, 'V-25065787-0', 'JHONNYJOSE ARANA NIEVES', '04124569852', 'jhonnyjosearana@gmail.com', '2018-01-19 17:55:47', '2018-01-19 17:55:47'),
(2, 'V-20989357-0', 'OSWARD PACHECO', '02124065540', 'jhulmaralejandra@hotmail.com', '2018-01-19 18:39:17', '2018-01-19 18:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `recepciones`
--

DROP TABLE IF EXISTS `recepciones`;
CREATE TABLE IF NOT EXISTS `recepciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `metodo` enum('Aseguradora','Particular','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `chofer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlf_chofer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recibe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `kilometraje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `combustible` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recepciones_vehiculo_id_foreign` (`vehiculo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recepciones`
--

INSERT INTO `recepciones` (`id`, `vehiculo_id`, `metodo`, `chofer`, `tlf_chofer`, `productor`, `recibe`, `fecha`, `kilometraje`, `combustible`, `observacion`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aseguradora', 'JOSE', '0414-234-9650', 'SEGUROS CARACAS', 'RAFAEL GAMBOA', '2017-11-27', '22000 KM', '12 MIL LITROS', 'NELNRF', '2017-11-26 14:08:53', '2017-11-26 14:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `reparaciones`
--

DROP TABLE IF EXISTS `reparaciones`;
CREATE TABLE IF NOT EXISTS `reparaciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `propietario_id` int(10) UNSIGNED NOT NULL,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `poliza_id` int(10) UNSIGNED NOT NULL,
  `analista_id` int(10) UNSIGNED NOT NULL,
  `latonero_id` int(10) UNSIGNED NOT NULL,
  `pintor_id` int(10) UNSIGNED NOT NULL,
  `fecha_ocu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_certificado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_siniestro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mano_obra` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depreciacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mecanica_otros` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal_mo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otros_gastos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tot_manobra` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_repues` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depre_repues` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_accesorios` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depre_acce` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repues_taller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manejo_repues` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deduccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_prepago` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iva` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deducible_p` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `islr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordenes_repues` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repues_otros` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depreciacion_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accesorios` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depreciacion_nega` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ordenes_acc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_asegu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_final` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_daños` text COLLATE utf8mb4_unicode_ci,
  `tipos_daños` text COLLATE utf8mb4_unicode_ci,
  `selec_repues` text COLLATE utf8mb4_unicode_ci,
  `no_dispo` text COLLATE utf8mb4_unicode_ci,
  `status` enum('activo','inactivo','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reparaciones_propietario_id_foreign` (`propietario_id`),
  KEY `reparaciones_vehiculo_id_foreign` (`vehiculo_id`),
  KEY `reparaciones_analista_id_foreign` (`analista_id`),
  KEY `reparaciones_latonero_id_foreign` (`latonero_id`),
  KEY `reparaciones_pintor_id_foreign` (`pintor_id`),
  KEY `reparaciones_poliza_id_foreign` (`poliza_id`) USING BTREE,
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reparaciones`
--

INSERT INTO `reparaciones` (`id`, `usuario_id`, `propietario_id`, `vehiculo_id`, `poliza_id`, `analista_id`, `latonero_id`, `pintor_id`, `fecha_ocu`, `num_certificado`, `nro_siniestro`, `notas`, `mano_obra`, `depreciacion`, `mecanica_otros`, `subtotal_mo`, `otros_gastos`, `tot_manobra`, `total_repues`, `depre_repues`, `total_accesorios`, `depre_acce`, `repues_taller`, `manejo_repues`, `deduccion`, `desc_prepago`, `monto`, `iva`, `deducible_p`, `subtotal`, `islr`, `ordenes_repues`, `repues_otros`, `depreciacion_two`, `accesorios`, `depreciacion_nega`, `total_ordenes_acc`, `monto_asegu`, `monto_final`, `descripcion_daños`, `tipos_daños`, `selec_repues`, `no_dispo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 2, '2018-01-18', '1234567890', '99-1234567890', 'NADA POR AHORA', '1000', NULL, '1000', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'PUERTA TRASERA', 'REPARAR Y PINTAR LA ZONA AFECTADA', 'MANILLA', 'COCUYOS', 'activo', '2018-01-19 17:55:48', '2018-01-19 17:55:48'),
(2, 1, 2, 2, 2, 4, 1, 2, '2018-01-18', '36575377', '30-7628018333', 'ESTA BIEN PERO NO SIRVE', '1200', NULL, '100', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '120', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'TECHO  Y PUERTA', 'REPARAR, PINTAR Y SACAR GOLPES', 'VIDRIOS \r\nGUARDA BARROS DELANTERO DERECHO', 'ALFOMBRA DE TECHOS', 'activo', '2018-01-19 18:39:18', '2018-01-19 18:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `repuestos`
--

DROP TABLE IF EXISTS `repuestos`;
CREATE TABLE IF NOT EXISTS `repuestos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codigo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `repuestos`
--

INSERT INTO `repuestos` (`id`, `codigo`, `descripcion`, `cantidad`, `marca`, `modelo`, `area`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PIN002', 'PINTURA SOLINTEX', 'b', 'SOLINTEX', 'EN ACEITE', 'PINTURAS', 'activo', '2017-11-18 03:38:30', '2018-01-15 22:18:12'),
(2, 'PINT001', 'PINTURAS ACRÍLICAS', '3 GALONES', 'COLONIAL', 'PREFERENCIAL', 'PINTURAS', 'activo', '2017-11-18 03:42:04', '2017-11-28 19:57:45'),
(3, 'PARAB0001', 'PARABRISAS XS', '1', 'DEFAULT', 'DEFAULT', 'METALES', 'activo', '2017-11-18 03:43:26', '2018-01-19 19:31:55'),
(4, 'MIR00001', 'GUARDAFANGO DERECHO', '2', 'ENGINE', 'SRANDARD', 'METALES', 'activo', '2018-01-19 19:52:14', '2018-01-19 19:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `repue_repar`
--

DROP TABLE IF EXISTS `repue_repar`;
CREATE TABLE IF NOT EXISTS `repue_repar` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reparacion_id` int(10) UNSIGNED NOT NULL,
  `repuesto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `repue_repar_reparacion_id_foreign` (`reparacion_id`),
  KEY `repue_repar_repuesto_id_foreign` (`repuesto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revisiones`
--

DROP TABLE IF EXISTS `revisiones`;
CREATE TABLE IF NOT EXISTS `revisiones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `encargado_entrega` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encargado_recibe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avances` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `revisiones_vehiculo_id_foreign` (`vehiculo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revisiones`
--

INSERT INTO `revisiones` (`id`, `vehiculo_id`, `encargado_entrega`, `encargado_recibe`, `avances`, `tipo`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 1, 'RICARDO', 'MANUEL', 'NINGUNA', 'DESARMADO', '2017-11-29', '2017-11-28 19:09:38', '2017-11-28 19:09:38'),
(2, 1, 'RICARDO', 'MANUEL', 'NINGUNA', 'DESARMADO', '2017-11-29', '2017-11-28 19:10:52', '2017-11-28 19:10:52'),
(3, 1, 'RICARDO', 'MANUEL', 'NINGUNA', 'DESARMADO', '2017-11-29', '2017-11-28 19:12:32', '2017-11-28 19:12:32'),
(4, 1, 'MANUEL', 'RICARDO', 'FDVDF', 'LATONERIA', '2017-11-30', '2017-11-28 19:16:54', '2017-11-28 19:16:54'),
(5, 1, 'RICARDO', 'MANUEL', 'NINGUNA', 'PREPARACION', '2017-12-01', '2017-11-28 19:18:05', '2017-11-28 19:18:05'),
(6, 1, 'RICARDO', 'MANUEL', 'NINGUNA', 'PINTURA', '2017-12-03', '2017-11-28 19:19:08', '2017-11-28 19:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Osward José', 'ojpr15@gmail.com', '$2y$10$ltQdi9MT73LrzELcAdroG.zt/jFyH.QlCLnRU/McvakBa4ib.L1dW', 'activo', 'gWVgr6Ryp86mV4n3eBYd0Hzolbjx4CwQtAoXl1vC5QxxYLeFqKVAQrW1Tey6', '2018-01-18 15:51:28', '2018-01-20 06:34:43'),
(2, 'jhonny', 'jhonnyjosearana@gmail.com', '$2y$10$bXK7S.khIWx88JG7i15.wOz9hEIcT7FNJnuOMBsZxPDhx8CXhPZ2i', 'activo', NULL, '2018-01-19 01:27:19', '2018-01-19 05:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `placa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `serial_motor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_carro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vehiculos_placa_unique` (`placa`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `marca`, `modelo`, `anio`, `serial_motor`, `serial_carro`, `color`, `tipo`, `status`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'DSC123S', 'Alfa Romeo', 'NHR', 2016, '1111111111', '2222222222222222222', 'Amarillo', 'CARRO', 'NINGUNO', 1, '2018-01-19 17:55:47', '2018-01-19 17:55:47'),
(2, 'NS389D4', 'Aston Martin', 'DB9', 2017, '4345454354', 'X3N8370Z8F3F3F03', 'Verde', 'DEPORTIVO', 'NINGUNO', 1, '2018-01-19 18:39:17', '2018-01-19 18:39:17');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analis_asegu`
--
ALTER TABLE `analis_asegu`
  ADD CONSTRAINT `analis_asegu_analista_id_foreign` FOREIGN KEY (`analista_id`) REFERENCES `analistas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `analis_asegu_aseguradora_id_foreign` FOREIGN KEY (`aseguradora_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `area_repues`
--
ALTER TABLE `area_repues`
  ADD CONSTRAINT `area_repues_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `area_repues_repuesto_id_foreign` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_reparacion_id_foreign` FOREIGN KEY (`reparacion_id`) REFERENCES `reparaciones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `corre_asegu`
--
ALTER TABLE `corre_asegu`
  ADD CONSTRAINT `corre_asegu_aseguradora_id_foreign` FOREIGN KEY (`aseguradora_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `corre_asegu_corredor_id_foreign` FOREIGN KEY (`corredor_id`) REFERENCES `corredores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facturaciones`
--
ALTER TABLE `facturaciones`
  ADD CONSTRAINT `facturaciones_reparacion_id_foreign` FOREIGN KEY (`reparacion_id`) REFERENCES `reparaciones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_recs`
--
ALTER TABLE `image_recs`
  ADD CONSTRAINT `image_recs_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagenes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_recs_recepcion_id_foreign` FOREIGN KEY (`recepcion_id`) REFERENCES `recepciones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_reps`
--
ALTER TABLE `image_reps`
  ADD CONSTRAINT `image_reps_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagenes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_reps_repuesto_id_foreign` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_revs`
--
ALTER TABLE `image_revs`
  ADD CONSTRAINT `image_revs_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagenes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_revs_revision_id_foreign` FOREIGN KEY (`revision_id`) REFERENCES `revisiones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `polizas`
--
ALTER TABLE `polizas`
  ADD CONSTRAINT `polizas_aseguradora_id_foreign` FOREIGN KEY (`aseguradora_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recepciones`
--
ALTER TABLE `recepciones`
  ADD CONSTRAINT `recepciones_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `reparaciones_analista_id_foreign` FOREIGN KEY (`analista_id`) REFERENCES `analistas` (`id`),
  ADD CONSTRAINT `reparaciones_latonero_id_foreign` FOREIGN KEY (`latonero_id`) REFERENCES `operarios` (`id`),
  ADD CONSTRAINT `reparaciones_pintor_id_foreign` FOREIGN KEY (`pintor_id`) REFERENCES `operarios` (`id`),
  ADD CONSTRAINT `reparaciones_propietario_id_foreign` FOREIGN KEY (`propietario_id`) REFERENCES `propietarios` (`id`),
  ADD CONSTRAINT `reparaciones_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`);

--
-- Constraints for table `repue_repar`
--
ALTER TABLE `repue_repar`
  ADD CONSTRAINT `repue_repar_reparacion_id_foreign` FOREIGN KEY (`reparacion_id`) REFERENCES `reparaciones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `repue_repar_repuesto_id_foreign` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `revisiones`
--
ALTER TABLE `revisiones`
  ADD CONSTRAINT `revisiones_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
