-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-12-2012 a las 09:43:03
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `miproyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ficha_medica`
-- 

CREATE TABLE `ficha_medica` (
  `id_ficha` int(11) NOT NULL auto_increment,
  `domicilio` varchar(100) character set utf8 collate utf8_spanish_ci NOT NULL,
  `sexo` varchar(50) character set utf8 collate utf8_spanish2_ci NOT NULL,
  `edad` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `dia` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `mes` varchar(50) character set utf8 collate utf8_spanish2_ci NOT NULL,
  `ano` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `sangre` varchar(100) character set utf8 collate utf8_spanish2_ci NOT NULL,
  `diagnostico` varchar(100) character set utf8 collate utf8_spanish2_ci NOT NULL,
  `toma` varchar(100) character set utf8 collate utf8_spanish_ci NOT NULL,
  `horario` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `dosis` varchar(100) character set utf8 collate utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) character set utf8 collate utf8_spanish_ci NOT NULL,
  `parentesco` varchar(100) character set utf8 collate utf8_spanish_ci NOT NULL,
  `casa` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `trabajo` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `celular` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  `traslado` varchar(100) character set utf8 collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id_ficha`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `ficha_medica`
-- 

INSERT INTO `ficha_medica` VALUES (1, 'sdf', '', '66', '45', '45', '45', 'asda', 'hjkhk', 'asda', 'none', 'none', 'asda', 'asda', 'as4564d', '56456', '456', 'sdfsdf');
INSERT INTO `ficha_medica` VALUES (2, 'sdf', 'hombre', '66', '45', '45', '45', 'asda', 'hjkhk', 'asda', 'none', 'none', 'asda', 'asda', 'as4564d', '56456', '456', 'sdfsdf');
INSERT INTO `ficha_medica` VALUES (3, 'sdf', 'hombre', '66', '45', '45', '45', 'asda', 'hjkhk', 'asda', 'none', 'none', 'asda', 'asda', 'as4564d', '56456', '456', 'sdfsdf');
INSERT INTO `ficha_medica` VALUES (4, '456', 'mujer', '45', '45', '45', '45', 'asda', 'hjkhk', 'asda', 'none', 'none', 'asda', 'asda', 'as4564d', '56456', '456', 'sdfsdf');
INSERT INTO `ficha_medica` VALUES (5, '456', 'mujer', '45', '45', '45', '45', 'asda', 'hjkhk', 'asda', 'none', 'none', 'asda', 'asda', 'as4564d', '56456', '456', 'sdfsdf');
