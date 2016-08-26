-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2016 a las 02:56:48
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnico_programacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `curs_corr_cursar` varchar(100) NOT NULL,
  `aprob_corr_cursar` varchar(100) NOT NULL,
  `corr_rendir` varchar(100) NOT NULL,
  `cuatrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`codigo`, `nombre`, `curs_corr_cursar`, `aprob_corr_cursar`, `corr_rendir`, `cuatrimestre`) VALUES
('03-1252', 'Práctica profesional', '', '', '', 4),
('95-1104', 'Estadística', '1123', '', '1123', 2),
('95-1111', 'Inglés I', '', '', '', 1),
('95-1112', 'Inglés II (1/2)', '1111', '', '1111', 2),
('95-1121', 'Programación I', '', '', '', 1),
('95-1122', 'Sistemas de procesamiento de datos', '', '', '', 1),
('95-1123', 'Matemática', '', '', '', 1),
('95-1124', 'Laboratorio de computación I', '', '', '', 1),
('95-1125', 'Programación II', '1121/1124', '', '1121/1124', 2),
('95-1126', 'Arquitectura y sistemas operativos', '1122', '', '1122', 2),
('95-1127', 'Laboratorio de computacion II', '1121/1124', '', '1121/1124', 2),
('95-1128', 'Metodología de la investigación (1/2)', '', '', '', 2),
('95-1209', 'Legislación (1/2)', '', '', '', 4),
('95-1230', 'Programación III', '1125/1127', '1121/1124', '1125/1127', 3),
('95-1231', 'Organización contable de la empresa', '1123', '', '1123', 3),
('95-1232', 'Organización empresarial', '1104', '1123', '1104', 3),
('95-1233', 'Elementos de investigación operativa', '1104', '1123', '1104', 3),
('95-1234', 'Laboratorio de computación III', '1125/1127', '1121/1124', '1125/1127', 3),
('95-1235', 'Metodología de sitemas I (2)', '1128/1231/1230/1232/1234', '1125/1127', '1128/1231/1230/1232/1234', 4),
('95-1236', 'Diseño y administración de bases de datos', '1230/1234', '1125/1127', '1230/1234', 4),
('95-1237', 'Laboratorio de computación IV', '1230/1234', '1125/1127', '1230/1234', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_aprobadas`
--

CREATE TABLE `materias_aprobadas` (
  `codigo` varchar(10) NOT NULL,
  `nota` float(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_disponibles`
--

CREATE TABLE `materias_disponibles` (
  `codigo` varchar(10) NOT NULL,
  `cursar` tinyint(1) NOT NULL,
  `rendir` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `materias_aprobadas`
--
ALTER TABLE `materias_aprobadas`
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `materias_disponibles`
--
ALTER TABLE `materias_disponibles`
  ADD KEY `codigo` (`codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias_aprobadas`
--
ALTER TABLE `materias_aprobadas`
  ADD CONSTRAINT `materias_aprobadas_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `materias` (`codigo`);

--
-- Filtros para la tabla `materias_disponibles`
--
ALTER TABLE `materias_disponibles`
  ADD CONSTRAINT `materias_disponibles_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `materias` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
