-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2018 a las 06:32:47
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comunidadGob`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encuesta`
--

CREATE TABLE `Encuesta` (
  `Id_encuesta` varchar(10) COLLATE utf8_bin NOT NULL,
  `Fecha_aplicacion` date DEFAULT NULL,
  `Proyecto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Id_user` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Preguntas` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estado`
--

CREATE TABLE `Estado` (
  `id_estado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Descripcion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Id_proyecto` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preguntas`
--

CREATE TABLE `Preguntas` (
  `Id_pregunta` varchar(10) COLLATE utf8_bin NOT NULL,
  `Enunciado` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Respuestas` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Id_encuesta` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(100) NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `elemento` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin NOT NULL,
  `encuesta` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyecto`
--

CREATE TABLE `Proyecto` (
  `Id_proyecto` varchar(10) COLLATE utf8_bin NOT NULL,
  `Ubicacion` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Estado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Encuesta` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Id_usuario` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Registros` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Elementos` varchar(1) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro`
--

CREATE TABLE `Registro` (
  `Id_registro` varchar(10) COLLATE utf8_bin NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Descripcion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Foto` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Id_interventor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Id_proyecto` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE `Rol` (
  `Id` varchar(10) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `latitudIni` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitudIni` varchar(100) COLLATE utf8_bin NOT NULL,
  `latitudFin` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitudFin` varchar(100) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ubicacion`
--

CREATE TABLE `Ubicacion` (
  `Id_ubicacion` varchar(10) COLLATE utf8_bin NOT NULL,
  `Latitud_Inicial` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Longitud_inicial` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Latitud_final` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Longitud_final` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Id_proyecto` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `rol` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `password`, `rol`) VALUES
(1, 'Carlos Mario', 'mao_23_@hotmail.com', '1234', 'user'),
(2, 'Jose el Asesino', 'jose@gmail.com', '1234', 'interventor'),
(3, 'cristian Martinez', 'cristian@gmail.com', '1234', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
