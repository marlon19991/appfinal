-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2016 a las 18:50:11
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `id_grado` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_grado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `nombre_grado`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto'),
(7, 'Septimo'),
(8, 'Octavo'),
(9, 'Noveno'),
(10, 'Decimo'),
(11, 'Once');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_materia`
--

CREATE TABLE IF NOT EXISTS `grado_materia` (
  `id_grad_mat` int(10) NOT NULL AUTO_INCREMENT,
  `id_grado` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `id_periodo` int(10) NOT NULL,
  PRIMARY KEY (`id_grad_mat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `grado_materia`
--

INSERT INTO `grado_materia` (`id_grad_mat`, `id_grado`, `id_materia`, `id_periodo`) VALUES
(1, 6, 4, 1),
(2, 6, 3, 1),
(3, 6, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(50) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`) VALUES
(1, 'Ingles'),
(2, 'Matemáticas'),
(3, 'Español y Literatura'),
(4, 'Sociales'),
(5, 'Informática'),
(6, 'Biologia'),
(7, 'Quimica'),
(8, 'Educación Fisica'),
(9, 'Física'),
(10, 'Artistica'),
(11, 'Tecnologia'),
(12, 'Valores Humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` int(10) NOT NULL AUTO_INCREMENT,
  `periodo_escolar` varchar(10) NOT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `periodo_escolar`) VALUES
(1, 'Uno'),
(2, 'Dos'),
(3, 'Tres'),
(4, 'Cuatro'),
(5, 'Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id_reporte` int(10) NOT NULL AUTO_INCREMENT,
  `Id_usuario` int(10) NOT NULL,
  `id_grado` int(10) NOT NULL,
  `id_periodo` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `nota` int(10) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_reporte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_usuario` varchar(50) NOT NULL,
  `descripcion_tipo_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre_tipo_usuario`, `descripcion_tipo_usuario`) VALUES
(1, 'Docente', 'Ingreso de notas'),
(2, 'Estudiante', 'Visualiza las notas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `cod_usuario` int(50) NOT NULL,
  `id_tipo_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `cod_usuario`, `id_tipo_usuario`) VALUES
(1, 'Cristian', 123, 1),
(2, 'Marlon', 456, 2),
(3, 'Juan ', 789, 2),
(4, 'Pedro', 101, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_grado`
--

CREATE TABLE IF NOT EXISTS `usuario_grado` (
  `id_usu_grad` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `id_grado` int(10) NOT NULL,
  PRIMARY KEY (`id_usu_grad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario_grado`
--

INSERT INTO `usuario_grado` (`id_usu_grad`, `id_usuario`, `id_grado`) VALUES
(1, 2, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
