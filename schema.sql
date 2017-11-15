-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2017 a las 16:53:48
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `schema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analistas`
--

CREATE TABLE `analistas` (
  `id` int(10) UNSIGNED NOT NULL,
  `rif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `analistas`
--

INSERT INTO `analistas` (`id`, `rif`, `nombre`, `apellido`, `celular`, `telefono`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'J-20989357-2', 'OSWARD JOSÉ', 'PACHECO', '0424-3513322', '0244-3962442', 'OJPR15@GMAIL.COM', 'activo', '2017-11-01 07:40:50', '2017-11-01 07:40:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analis_asegu`
--

CREATE TABLE `analis_asegu` (
  `analista_id` int(10) UNSIGNED NOT NULL,
  `aseguradora_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `analis_asegu`
--

INSERT INTO `analis_asegu` (`analista_id`, `aseguradora_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2017-11-01 07:40:50', '2017-11-01 07:40:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_repues`
--

CREATE TABLE `area_repues` (
  `area_id` int(10) UNSIGNED NOT NULL,
  `repuesto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradoras`
--

CREATE TABLE `aseguradoras` (
  `id` int(10) UNSIGNED NOT NULL,
  `rif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denominacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aseguradoras`
--

INSERT INTO `aseguradoras` (`id`, `rif`, `denominacion`, `telefono`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'J-20989357-0', 'SEGUROS CARACAS S.A', '0212-4065544', 'SEGUROSCARACAS@GMAIL.COM', 'activo', '2017-11-01 07:39:00', '2017-11-01 07:39:00'),
(2, 'J-20989357-4', 'SEGUROS UNIVERSITAS C.A', '0212-4065333', 'SEGUROSUNIVERSITAS@GMAIL.COM', 'activo', '2017-11-01 07:39:37', '2017-11-01 07:39:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayudantes`
--

CREATE TABLE `ayudantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ayudantes`
--

INSERT INTO `ayudantes` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'V-10759226', 'RICARDO', 'MONTOYA', '0424-4413322', 'RICARDD33@GMAIL.COM', 'VALENCIA', 'activo', '2017-11-01 07:44:56', '2017-11-01 07:44:56'),
(2, 'V-08738012', 'MANUEL', 'FONSECA', '0414-5435737', 'MSA@GMAIL.COM', 'CAGUA', 'activo', '2017-11-01 07:45:49', '2017-11-01 07:45:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(10) UNSIGNED NOT NULL,
  `reparacion_id` int(10) UNSIGNED NOT NULL,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `propietario_id` int(10) UNSIGNED NOT NULL,
  `selec_dia` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `reparacion_id`, `vehiculo_id`, `propietario_id`, `selec_dia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2017-11-09', '2017-11-08 08:18:38', '2017-11-08 08:18:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredores`
--

CREATE TABLE `corredores` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `corredores`
--

INSERT INTO `corredores` (`id`, `cedula`, `nombre`, `apellido`, `celular`, `telefono`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'J-10759226-4', 'CARMEN', 'FIGUERA', '0424-3224353', '0212-4065543', 'CARMENFIG@GMAIL.COM', 'activo', '2017-11-01 07:41:33', '2017-11-01 07:41:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corre_asegu`
--

CREATE TABLE `corre_asegu` (
  `corredor_id` int(10) UNSIGNED NOT NULL,
  `aseguradora_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `corre_asegu`
--

INSERT INTO `corre_asegu` (`corredor_id`, `aseguradora_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-11-01 07:41:33', '2017-11-01 07:41:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturaciones`
--

CREATE TABLE `facturaciones` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_recs`
--

CREATE TABLE `image_recs` (
  `imagen_id` int(10) UNSIGNED NOT NULL,
  `recepcion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_reps`
--

CREATE TABLE `image_reps` (
  `imagen_id` int(10) UNSIGNED NOT NULL,
  `repuesto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_revs`
--

CREATE TABLE `image_revs` (
  `imagen_id` int(10) UNSIGNED NOT NULL,
  `revision_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_08_121909_create_propietarios_table', 1),
(4, '2017_05_08_121955_create_vehiculos_table', 1),
(5, '2017_05_08_122044_create_repuestos_table', 1),
(6, '2017_05_08_122108_create_aseguradoras_table', 1),
(7, '2017_05_08_122136_create_corredores_table', 1),
(8, '2017_05_08_123130_create_operarios_table', 1),
(9, '2017_05_14_010822_create_analistas_table', 1),
(10, '2017_05_14_060415_create_polizas_table', 1),
(11, '2017_05_14_154409_create_reparaciones_table', 1),
(12, '2017_05_14_154536_create_citas_table', 1),
(13, '2017_05_14_154911_create_revisiones_table', 1),
(14, '2017_05_14_154947_create_imagenes_table', 1),
(15, '2017_05_14_155158_create_image_revs_table', 1),
(16, '2017_05_16_132914_create_recepciones_table', 1),
(17, '2017_05_16_133850_create_image_recs_table', 1),
(18, '2017_05_19_005953_create_image_reps_table', 1),
(19, '2017_05_23_050024_create_corre_asegu_table', 1),
(20, '2017_05_23_052606_create_facturaciones_table', 1),
(21, '2017_06_20_011033_create_analis_asegu_table', 1),
(22, '2017_07_01_163148_create_repue_repar_table', 1),
(23, '2017_10_13_023718_create_ayudantes_table', 1),
(24, '2017_10_15_212721_create_areas_table', 1),
(25, '2017_10_25_232437_create_area_repues_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operarios`
--

CREATE TABLE `operarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('latonero','pintor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operarios`
--

INSERT INTO `operarios` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `email`, `tipo`, `direccion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'V-10759226', 'RAFAEL', 'PEREZ', '0412-4567802', 'RAFAEL@GMAIL.COM', 'latonero', 'MARACAY', 'activo', '2017-11-01 07:42:28', '2017-11-01 07:42:28'),
(2, 'V-20989353', 'JOSÉ', 'HERNÁNDEZ', '0426-2343567', 'JOSENDDRB@HOTMAIL.COM', 'pintor', 'MARACAY', 'activo', '2017-11-01 07:43:11', '2017-11-01 07:43:11'),
(3, 'V-20989357', 'RW', 'WFWF', '0212-4065544', 'OJPR15@GMAIL.COM', 'pintor', 'REWFEF', 'activo', '2017-11-11 19:43:57', '2017-11-11 19:43:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polizas`
--

CREATE TABLE `polizas` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aseguradora_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `polizas`
--

INSERT INTO `polizas` (`id`, `numero`, `aseguradora_id`, `created_at`, `updated_at`) VALUES
(1, '34-3433-43434', 1, '2017-11-01 07:47:43', '2017-11-01 07:47:43'),
(2, '43-43-434344', 1, '2017-11-01 08:19:26', '2017-11-01 08:19:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `rif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_completo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `rif`, `nombre_completo`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, 'V-20989357', 'PACHECO REQUENA OSWARD JOSÉ', '0424-3513322', 'OJPR15@GMAIL.COM', '2017-11-01 07:47:43', '2017-11-01 07:47:43'),
(2, 'V-10759226', 'REQUENA ZULEIMA', '0426-2349730', 'ZULEIMA@GMAIL.COM', '2017-11-01 08:19:26', '2017-11-01 08:19:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepciones`
--

CREATE TABLE `recepciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `chofer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlf_chofer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recibe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `kilometraje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `combustible` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `mano_obra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depreciacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mecanica_otros` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal_mo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_gastos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tot_manobra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_repues` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depre_repues` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_accesorios` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depre_acce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repues_taller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manejo_repues` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_prepago` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deducible_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `islr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordenes_repues` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repues_otros` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depreciacion_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accesorios` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depreciacion_nega` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ordenes_acc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto_asegu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto_final` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_daños` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipos_daños` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `selec_repues` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dispo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id`, `usuario_id`, `propietario_id`, `vehiculo_id`, `poliza_id`, `analista_id`, `latonero_id`, `pintor_id`, `fecha_ocu`, `num_certificado`, `nro_siniestro`, `notas`, `mano_obra`, `depreciacion`, `mecanica_otros`, `subtotal_mo`, `otros_gastos`, `tot_manobra`, `total_repues`, `depre_repues`, `total_accesorios`, `depre_acce`, `repues_taller`, `manejo_repues`, `deduccion`, `desc_prepago`, `monto`, `iva`, `deducible_p`, `subtotal`, `islr`, `ordenes_repues`, `repues_otros`, `depreciacion_two`, `accesorios`, `depreciacion_nega`, `total_ordenes_acc`, `monto_asegu`, `monto_final`, `descripcion_daños`, `tipos_daños`, `selec_repues`, `no_dispo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 1, 1, 2, '23-02-1997', '33434', '34-878274', 'NINGUNO', '87', '987', '7', '89', '897', '89', '89797', '7', '77', '87', '7', '79', '78', '78998', '79', '78', '897', '987', '897', '77', '79', '7', '7897', '987', '987', '9', '7897897', 'OWIDHOIHWIOWD', 'WDKJWBJDBJBDW', 'WDWBDOUWHDOUW', 'WDWODHWOHD', 'activo', '2017-11-01 07:47:43', '2017-11-01 07:47:43'),
(2, 1, 2, 2, 2, 1, 1, 2, '23-02-2016', '5654646', '56-36667', 'BIUGIU', '897897', '987', '987', '7', '987', '987', '7', '7', '987', '987', '897', '987987', '97978', '987', '97', '8', '987', '987', '87', '987', '97', '7', '7', '987', '87', '87', '87', 'CFCECCECE', 'CERCRECRECR', 'RECRECERCRe', 'CRCERCRECER', 'activo', '2017-11-01 08:19:27', '2017-11-01 08:19:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repue_repar`
--

CREATE TABLE `repue_repar` (
  `id` int(10) UNSIGNED NOT NULL,
  `reparacion_id` int(10) UNSIGNED NOT NULL,
  `repuesto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE `revisiones` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehiculo_id` int(10) UNSIGNED NOT NULL,
  `encargado_entrega` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encargado_recibe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avances` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` enum('Administrador','Empleado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rol`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Osward José', 'ojpr15@gmail.com', '$2y$10$OGeCyva7wviMqg0mPwAp8eDvcpehuzIPbRlkinU7us7E4hvJN2llK', 'Administrador', 'activo', 'f2uVaX7GPEel6zLw4nkPfBob7jwaqtonyIzl68b5T5MrbqgrRuUehqDJSn1N', '2017-11-01 07:11:20', '2017-11-01 07:11:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(10) UNSIGNED NOT NULL,
  `placa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `serial_motor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_carro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `marca`, `modelo`, `anio`, `serial_motor`, `serial_carro`, `color`, `tipo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'D10SV3N', 'CHEVROLET', 'AVEO LT', 2014, '49873947374', 'X3Z0N7420987R4', 'GRIS', 'LIGERO', 'NINGUNO', '2017-11-01 07:47:43', '2017-11-01 07:47:43'),
(2, '8XN7438', 'CHEVROLET', 'OPTRA', 2014, '4583585843', '48NX8Z9789X3', 'NEGRO', 'LIGERO', 'NINGUNO', '2017-11-01 08:19:26', '2017-11-01 08:19:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analistas`
--
ALTER TABLE `analistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `analis_asegu`
--
ALTER TABLE `analis_asegu`
  ADD KEY `analis_asegu_analista_id_foreign` (`analista_id`),
  ADD KEY `analis_asegu_aseguradora_id_foreign` (`aseguradora_id`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `area_repues`
--
ALTER TABLE `area_repues`
  ADD KEY `area_repues_area_id_foreign` (`area_id`),
  ADD KEY `area_repues_repuesto_id_foreign` (`repuesto_id`);

--
-- Indices de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ayudantes`
--
ALTER TABLE `ayudantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_reparacion_id_foreign` (`reparacion_id`),
  ADD KEY `vehiculo_id` (`vehiculo_id`,`propietario_id`);

--
-- Indices de la tabla `corredores`
--
ALTER TABLE `corredores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `corre_asegu`
--
ALTER TABLE `corre_asegu`
  ADD KEY `corre_asegu_corredor_id_foreign` (`corredor_id`),
  ADD KEY `corre_asegu_aseguradora_id_foreign` (`aseguradora_id`);

--
-- Indices de la tabla `facturaciones`
--
ALTER TABLE `facturaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facturaciones_reparacion_id_foreign` (`reparacion_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `image_recs`
--
ALTER TABLE `image_recs`
  ADD KEY `image_recs_imagen_id_foreign` (`imagen_id`),
  ADD KEY `image_recs_recepcion_id_foreign` (`recepcion_id`);

--
-- Indices de la tabla `image_reps`
--
ALTER TABLE `image_reps`
  ADD KEY `image_reps_imagen_id_foreign` (`imagen_id`),
  ADD KEY `image_reps_repuesto_id_foreign` (`repuesto_id`);

--
-- Indices de la tabla `image_revs`
--
ALTER TABLE `image_revs`
  ADD KEY `image_revs_imagen_id_foreign` (`imagen_id`),
  ADD KEY `image_revs_revision_id_foreign` (`revision_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operarios`
--
ALTER TABLE `operarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `polizas`
--
ALTER TABLE `polizas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `polizas_aseguradora_id_foreign` (`aseguradora_id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recepciones`
--
ALTER TABLE `recepciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recepciones_vehiculo_id_foreign` (`vehiculo_id`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reparaciones_propietario_id_foreign` (`propietario_id`),
  ADD KEY `reparaciones_vehiculo_id_foreign` (`vehiculo_id`),
  ADD KEY `reparaciones_analista_id_foreign` (`analista_id`),
  ADD KEY `reparaciones_latonero_id_foreign` (`latonero_id`),
  ADD KEY `reparaciones_pintor_id_foreign` (`pintor_id`),
  ADD KEY `reparaciones_poliza_id_foreign` (`poliza_id`) USING BTREE;

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repue_repar`
--
ALTER TABLE `repue_repar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repue_repar_reparacion_id_foreign` (`reparacion_id`),
  ADD KEY `repue_repar_repuesto_id_foreign` (`repuesto_id`);

--
-- Indices de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `revisiones_vehiculo_id_foreign` (`vehiculo_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehiculos_placa_unique` (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analistas`
--
ALTER TABLE `analistas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ayudantes`
--
ALTER TABLE `ayudantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `corredores`
--
ALTER TABLE `corredores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `facturaciones`
--
ALTER TABLE `facturaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `operarios`
--
ALTER TABLE `operarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `polizas`
--
ALTER TABLE `polizas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recepciones`
--
ALTER TABLE `recepciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `repue_repar`
--
ALTER TABLE `repue_repar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analis_asegu`
--
ALTER TABLE `analis_asegu`
  ADD CONSTRAINT `analis_asegu_analista_id_foreign` FOREIGN KEY (`analista_id`) REFERENCES `analistas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `analis_asegu_aseguradora_id_foreign` FOREIGN KEY (`aseguradora_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `area_repues`
--
ALTER TABLE `area_repues`
  ADD CONSTRAINT `area_repues_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `area_repues_repuesto_id_foreign` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_reparacion_id_foreign` FOREIGN KEY (`reparacion_id`) REFERENCES `reparaciones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `corre_asegu`
--
ALTER TABLE `corre_asegu`
  ADD CONSTRAINT `corre_asegu_aseguradora_id_foreign` FOREIGN KEY (`aseguradora_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `corre_asegu_corredor_id_foreign` FOREIGN KEY (`corredor_id`) REFERENCES `corredores` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `facturaciones`
--
ALTER TABLE `facturaciones`
  ADD CONSTRAINT `facturaciones_reparacion_id_foreign` FOREIGN KEY (`reparacion_id`) REFERENCES `reparaciones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `image_recs`
--
ALTER TABLE `image_recs`
  ADD CONSTRAINT `image_recs_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagenes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_recs_recepcion_id_foreign` FOREIGN KEY (`recepcion_id`) REFERENCES `recepciones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `image_reps`
--
ALTER TABLE `image_reps`
  ADD CONSTRAINT `image_reps_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagenes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_reps_repuesto_id_foreign` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `image_revs`
--
ALTER TABLE `image_revs`
  ADD CONSTRAINT `image_revs_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagenes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_revs_revision_id_foreign` FOREIGN KEY (`revision_id`) REFERENCES `revisiones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `polizas`
--
ALTER TABLE `polizas`
  ADD CONSTRAINT `polizas_aseguradora_id_foreign` FOREIGN KEY (`aseguradora_id`) REFERENCES `aseguradoras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `recepciones`
--
ALTER TABLE `recepciones`
  ADD CONSTRAINT `recepciones_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `reparaciones_analista_id_foreign` FOREIGN KEY (`analista_id`) REFERENCES `analistas` (`id`),
  ADD CONSTRAINT `reparaciones_latonero_id_foreign` FOREIGN KEY (`latonero_id`) REFERENCES `operarios` (`id`),
  ADD CONSTRAINT `reparaciones_pintor_id_foreign` FOREIGN KEY (`pintor_id`) REFERENCES `operarios` (`id`),
  ADD CONSTRAINT `reparaciones_propietario_id_foreign` FOREIGN KEY (`propietario_id`) REFERENCES `propietarios` (`id`),
  ADD CONSTRAINT `reparaciones_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`);

--
-- Filtros para la tabla `repue_repar`
--
ALTER TABLE `repue_repar`
  ADD CONSTRAINT `repue_repar_reparacion_id_foreign` FOREIGN KEY (`reparacion_id`) REFERENCES `reparaciones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `repue_repar_repuesto_id_foreign` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD CONSTRAINT `revisiones_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
