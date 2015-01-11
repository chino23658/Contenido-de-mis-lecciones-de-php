-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2012 a las 03:14:21
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `da_pedidos`
--

CREATE TABLE IF NOT EXISTS `da_pedidos` (
  `num_ped` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cod_ropa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_pro` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cant_ped` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcar la base de datos para la tabla `da_pedidos`
--

INSERT INTO `da_pedidos` (`num_ped`, `cod_ropa`, `cod_pro`, `cant_ped`) VALUES
('100', 'r-100', 'p-10', 25),
('101', 'r-200', 'p-20', 30),
('102', 'r-100', 'p-20', 25),
('103', 'r-200', 'p-10', 30),
('104', 'r-200', 'p-10', 30),
('105', 'r-100', 'p-20', 20),
('105', 'r-200', 'p-20', 10),
('104', 'r-200', 'p-10', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `da_provedores`
--

CREATE TABLE IF NOT EXISTS `da_provedores` (
  `cod_pro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `num_pro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `di_pro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tel_pro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcar la base de datos para la tabla `da_provedores`
--

INSERT INTO `da_provedores` (`cod_pro`, `num_pro`, `di_pro`, `tel_pro`) VALUES
('p-10', 'Exclusividades Orion', 'Heredia', '2237-79-15'),
('p-20', 'novedades parís', 'san jose', '221-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `da_ropa`
--

CREATE TABLE IF NOT EXISTS `da_ropa` (
  `cod_ropa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `des_ropa` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `col_ropa` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pre_ropa` int(11) NOT NULL,
  PRIMARY KEY (`cod_ropa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcar la base de datos para la tabla `da_ropa`
--

INSERT INTO `da_ropa` (`cod_ropa`, `des_ropa`, `col_ropa`, `pre_ropa`) VALUES
('r-100', 'blusa', 'verde', 6500),
('r-200', 'panat mesclilla', 'negro', 10980);
