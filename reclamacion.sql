-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2020 a las 18:12:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reclamacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombre_area` char(100) NOT NULL,
  `id_unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre_area`, `id_unidad`) VALUES
(1, 'ÁREA DE PERSONAL', 4),
(2, 'ÁREA DE LOGÍSTICA', 4),
(3, 'ÁREA DE ECONOMÍA', 4),
(4, 'ÁREA DE SERVICIOS GENERALES Y MANTENIMIENTO', 4),
(5, 'ÁREA DE DIAGNÓSTICO POR IMÁGENES', 11),
(6, 'ÁREA DE LABORATORIO', 11),
(7, 'ÁREA DE NUTRICIÓN Y DIETA', 12),
(8, 'ÁREA DE SERVICIO SOCIAL', 12),
(9, 'ÁREA DE PSICOLOGÍA', 12),
(10, 'ÁREA DE FARMACIA', 12),
(11, 'CONSULTA EXTERNA', 15),
(12, 'HOSPITALIZACIÓN', 15),
(13, 'ÁREA DE MEDICINA INTERNA', 20),
(14, 'ÁREA DE MEDICINA ESPECIALIZADA', 20),
(15, 'ÁREA DE CIRUGÍA GENERAL', 19),
(16, 'ÁREA DE ANESTESIOLOGÍA', 19),
(17, 'ÁREA DE PEDIATRÍA MEDICO', 18),
(18, 'ÁREA DE NEONATOLOGÍA MEDICO', 18),
(19, 'ÁREA DE GINECOLOGIA MEDICO', 17),
(20, 'ÁREA DE OBSTETRICIA OBSTETRA', 17),
(21, 'ÁREA DE ODONTOESTOMATOLOGIA                                                   ODONTOLOGO ESPECIALIST', 16),
(22, 'ODONTOLOGO', 16),
(23, 'PP ENFERMEDADES METAXENICAS Y ZOONOSIS', 15),
(24, 'PP ENFERMEDADES NO TRANSMISIBLES', 15),
(25, 'PP ARTICULADO NUTRICIONAL', 15),
(26, 'PP PREVENCIÓN Y CONTROL DE CÁNCER', 15),
(27, 'PP SALUD MATERNO NEONATAL', 15),
(28, 'PP TBC VIH SIDA', 15),
(29, 'PP REDUCCIÓN DE VULNERABILIDAD Y ATENCIÓN DE EMERGENCIAS POR DESASTRES', 15),
(30, 'SUB DIRECCIÓN', 10),
(31, 'ÁREA DE SECRETARIA', 10),
(32, 'ÁREA DE PRESUPUESTO', 5),
(33, 'ÁREA DE ORGANIZACIÓN', 5),
(34, 'ÁREA DE PLANEAMIENTO', 5),
(35, 'ÁREA DE PROYECTOS DE INVERSIÓN', 5),
(36, 'ÁREA  DE SALUD AMBIENTAL', 8),
(37, 'ÁREA DE EPIDEMIOLOGÍA', 8),
(38, 'ÁREA DE MUESTRA I', 8),
(39, 'ÁREA DE ESTUDIOS E INVESTIGACIÓN', 3),
(40, 'ÁREA DE ESTADÍSTICA', 6),
(41, 'ÁREA DE INFORMÁTICA', 6),
(42, 'ÁREA DE DOCENCIA', 2),
(43, 'ÁREA DE INVESTIGACIÓN', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id_reclamo` int(200) NOT NULL,
  `id_unidad` int(200) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_usuario` varchar(100) NOT NULL,
  `id_tercero` varchar(100) DEFAULT NULL,
  `fecha` date NOT NULL,
  `detalles` varchar(1000) NOT NULL,
  `autoriza` varchar(10) NOT NULL,
  `estado` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tercero`
--

CREATE TABLE `tercero` (
  `numero_tercero` varchar(100) NOT NULL,
  `tipo_tercero` varchar(100) DEFAULT NULL,
  `nombre_tercero` varchar(300) NOT NULL,
  `domicilio_tercero` varchar(500) NOT NULL,
  `email_tercero` varchar(500) NOT NULL,
  `telefono_tercero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `id` int(200) NOT NULL,
  `nombre` char(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`id`, `nombre`) VALUES
(1, 'UNIDAD DE SEGUROS'),
(2, 'UNIDAD DE APOYO A LA DOCENCIA E INVESTIGACIÓN'),
(3, 'UNIDAD DE GESTIÓN A LA CALIDAD'),
(4, 'UNIDAD DE ADMINISTRACIÓN'),
(5, 'UNIDAD DE PLANEAMIENTO ESTRATÉGICO'),
(6, 'UNIDAD DE ESTADÍSTICA E INFORMÁTICA'),
(7, 'UNIDAD DE ASESORÍA LEGAL'),
(8, 'UNIDAD DE EPIDEMIOLOGÍA Y SALUD AMBIENTAL'),
(9, 'ORGANO DE CONTROL INTERNO'),
(10, 'DIRECCIÓN EJECUTIVA'),
(11, 'SERVICIO DE APOYO AL DIAGNOSTICO'),
(12, 'SERVICIO DE APOYO AL TRATAMIENTO'),
(13, 'SERVICIO DE EMERGENCIA'),
(14, 'SERVICIO DE ENFERMERÍA'),
(15, 'SERVICIO DE CONSULTORIO EXTERNO Y HOSPITALIZACIÓN'),
(16, 'SERVICIO DE ODONTO ESTOMATOLOGÍA'),
(17, 'SERVICIO DE GINECO OBSTETRICIA'),
(18, 'SERVICIO DE PEDIATRÍA'),
(19, 'SERVICIO DE CIRUGÍA Y ANESTESIOLOGÍA'),
(20, 'SERVICIO DE MEDICINA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numero_documento` varchar(100) NOT NULL,
  `tipo_documento` varchar(100) DEFAULT NULL,
  `nombre_usuario` varchar(300) CHARACTER SET utf8 NOT NULL,
  `domicilio_usuario` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `numero_tercero` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unidad` (`id_unidad`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id_reclamo`),
  ADD KEY `id_unidad` (`id_unidad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tercero`
--
ALTER TABLE `tercero`
  ADD PRIMARY KEY (`numero_tercero`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `numero_tercero` (`numero_tercero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id_reclamo` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id`);

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `reclamo_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id`),
  ADD CONSTRAINT `reclamo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`numero_documento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `numero_tercero` FOREIGN KEY (`numero_tercero`) REFERENCES `tercero` (`numero_tercero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
