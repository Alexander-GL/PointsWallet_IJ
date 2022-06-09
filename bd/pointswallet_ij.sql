-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-06-2022 a las 22:41:05
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pointswallet_ij`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `idActividad` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `numGalardones` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Registro de las nuevas actividades que generarán galardones';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_puntos`
--

DROP TABLE IF EXISTS `asistencia_puntos`;
CREATE TABLE IF NOT EXISTS `asistencia_puntos` (
  `idusuario` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emailNum` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_asistencia` datetime NOT NULL,
  `puntos_acumulados` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asistencia_puntos`
--

INSERT INTO `asistencia_puntos` (`idusuario`, `nombre`, `apellido`, `emailNum`, `fecha_asistencia`, `puntos_acumulados`) VALUES
(00001, 'https://qrstud.io/qrmnky', NULL, NULL, '2022-06-08 17:25:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galardones`
--

DROP TABLE IF EXISTS `galardones`;
CREATE TABLE IF NOT EXISTS `galardones` (
  `idGalardones` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `tipoRegistro` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `totalAcumulados` int(11) NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `saldoActual` int(11) NOT NULL,
  PRIMARY KEY (`idGalardones`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Cartera digital que tendrá cada usuario de la iglesia';

--
-- Volcado de datos para la tabla `galardones`
--

INSERT INTO `galardones` (`idGalardones`, `tipoRegistro`, `totalAcumulados`, `fechaRegistro`, `saldoActual`) VALUES
(00001, 'Biblia', 100, '2022-04-24 19:21:44', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `emailNum` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Registro de nuevos usuarios';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `emailNum`, `password`, `fechaNacimiento`, `genero`, `rol`) VALUES
(00001, 'Gerardo Alexander', 'GarcÃ­a LÃ³pez', 'alexander38493@hotmail.com', '43443bd3811bd1a73e36a98714a00802', '1999-09-27', 'Hombre', 'Administrador'),
(00002, 'Prueba', 'Alex', 'alexander38493@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1998-05-27', 'Hombre', 'Administrador'),
(00003, 'Prueba', 'Alex', 'alexander38493@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1998-05-27', 'Hombre', 'Administrador'),
(00004, 'Gerardo Alexander', 'LÃ³pez', 'alexander.garcia@alumnos.udg.mx', '25d55ad283aa400af464c76d713c07ad', '2022-05-18', 'Hombre', 'Adolescente'),
(00005, 'Gerardo Alexander', 'LÃ³pez', 'alexander.garcia@alumnos.udg.mx', '25d55ad283aa400af464c76d713c07ad', '2022-05-18', 'Hombre', 'Adolescente'),
(00006, 'Gerardo Alexander', 'LÃ³pez', 'alexander.garcia@alumnos.udg.mx', '25d55ad283aa400af464c76d713c07ad', '2022-05-06', 'Hombre', 'Administrador'),
(00007, 's', 's', 'deddde', '81f5a969cf2a26e39dafd4b22739e3bc', '2022-06-28', 'Mujer', 'Adolescente'),
(00008, 'Alexander ', 'GarcÃ­a', 'alexander38493@hotmail.com', '43443bd3811bd1a73e36a98714a00802', '2022-06-08', 'Hombre', 'Adolescente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
