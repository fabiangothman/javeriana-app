-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-05-2018 a las 20:19:52
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id1923578_app_javeriana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `estado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal',
  `semestre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jornada` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilo_paga` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `nombre`, `apellido1`, `apellido2`, `correo`, `documento`, `estado`, `semestre`, `jornada`, `pilo_paga`, `created_at`, `updated_at`) VALUES
(1111, 'Estu 1', 'Apell 1', 'Apell 2', 'co1@co.co', 11111, 'Activo', '10', 'Diurno', 'Si', '2018-01-17 05:55:23', '2018-01-17 05:55:23'),
(2222, 'Estu 2', 'Apell 3', '', 'co2@co.co', 22222, 'Inactivo', '1', 'Diurno', 'No', '2018-01-17 05:55:23', '2018-01-17 05:55:23'),
(3333, 'Estu 3', 'Apell 4', 'Apell 5', 'co3@co.co', 33333, 'Activo', 'Cuarto', 'Nocturno', 'Si', '2018-01-17 05:55:23', '2018-01-17 05:55:23'),
(20137967, 'Juan Sebastian', 'Tovar', 'Bello', 'juan_tovar@javeriana.edu.co', 1020790925, 'Segunda Prueba', 'resto de estudiantes', 'Nocturna', 'N/A', '2018-01-30 14:55:08', '2018-01-30 14:55:08'),
(20270319, 'KIOSHI EDUARDO', 'EMURA', '', 'k.emura@javeriana.edu.co', 1088326539, 'Segunda Prueba', '3ro', 'Nocturna', 'N/A', '2018-01-30 14:55:08', '2018-01-30 14:55:08'),
(20280763, 'JHONNY MAURICIO', 'LAZARO', 'SANCHEZ', 'jlazaro_98@hotmail.com', 1018507008, 'Segunda Prueba', '3ro', 'Diurna', 'N/A', '2018-01-30 14:55:08', '2018-01-30 14:55:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_tutor`
--

CREATE TABLE `estudiante_tutor` (
  `id` int(10) UNSIGNED NOT NULL,
  `estudiante_id` int(10) UNSIGNED NOT NULL,
  `tutor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiante_tutor`
--

INSERT INTO `estudiante_tutor` (`id`, `estudiante_id`, `tutor_id`, `created_at`, `updated_at`) VALUES
(8, 1111, 9, NULL, NULL),
(9, 2222, 10, NULL, NULL),
(10, 3333, 11, NULL, NULL),
(15, 20270319, 19, NULL, NULL),
(16, 20280763, 20, NULL, NULL),
(17, 20137967, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_01_09_210904_add_estudiante_table', 1),
(2, '2018_01_09_212510_add_tutor_table', 1),
(3, '2018_01_15_170206_add_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_consejero` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`id`, `nombre_consejero`, `correo`, `horario`, `imagen`, `created_at`, `updated_at`) VALUES
(9, 'Tutor 1', 'tut1@co.co', 'Lunes', 'profile_pic1516120207.png', '2018-01-17 05:55:23', '2018-01-17 05:55:23'),
(10, 'Tutor 2', 'tut2@co.co', 'Solo martes', '', '2018-01-17 05:55:23', '2018-01-17 05:55:23'),
(11, 'Tutor 3', 'tut3@co.co', 'Solo fines de semana', '', '2018-01-17 05:55:23', '2018-01-17 05:55:23'),
(19, 'ALEXANDER VILLAMIL', 'Jaime.villamil@javeriana.edu.co', 'Miercoles de 10:00 am  -12:00 m y 2:00 pm -6:00 pm', 'default.png', '2018-01-30 14:55:08', '2018-01-30 14:55:08'),
(20, 'ALEXANDER VILLAMIL', 'Jaime.villamil@javeriana.edu.co', 'Miercoles de 10:00 am  -12:00 m y 2:00 pm -6:00 pm', 'default.png', '2018-01-30 14:55:08', '2018-01-30 14:55:08'),
(21, 'ALEXANDER VILLAMIL', 'Jaime.villamil@javeriana.edu.co', 'Miercoles de 10:00 am  -12:00 m y 2:00 pm -6:00 pm', 'default.png', '2018-01-30 14:55:08', '2018-01-30 14:55:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador 1', 'admin@ubits.co', '$2b$10$7Ok.h/shCdQiMlH1AEPcvusuyPRSWSln4WNhoCcHV3Z3fNlKT//Yu', 'FRI89FteauBamkWZQG8PjCaUAa6M2dhqg4G6QRHuu2amhloap084qRwcXrAy', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante_tutor`
--
ALTER TABLE `estudiante_tutor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudiante_tutor_estudiante_id_foreign` (`estudiante_id`),
  ADD KEY `estudiante_tutor_tutor_id_foreign` (`tutor_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20280764;

--
-- AUTO_INCREMENT de la tabla `estudiante_tutor`
--
ALTER TABLE `estudiante_tutor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante_tutor`
--
ALTER TABLE `estudiante_tutor`
  ADD CONSTRAINT `estudiante_tutor_estudiante_id_foreign` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_tutor_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
