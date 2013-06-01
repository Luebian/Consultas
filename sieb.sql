-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 29-03-2013 a las 18:39:33
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `sieb`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `en_formatos`
-- 

CREATE TABLE `en_formatos` (
  `id_formato` int(10) NOT NULL,
  `nom_formato` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_formato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `en_formatos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `psi_bitacora`
-- 

CREATE TABLE `psi_bitacora` (
  `id_beneficiario` int(10) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `reg_medico` varchar(11) NOT NULL,
  `observaciones` varchar(300) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `psi_bitacora`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `psi_formatos`
-- 

CREATE TABLE `psi_formatos` (
  `id_formatos` int(10) NOT NULL,
  `nom_formatos` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_formatos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `psi_formatos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `psi_modulos`
-- 

CREATE TABLE `psi_modulos` (
  `id_modulos` char(10) NOT NULL,
  `id_formatos` int(10) NOT NULL,
  `nom_modulos` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_modulos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `psi_modulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_antecedentes`
-- 

CREATE TABLE `tf_antecedentes` (
  `id_comentario` int(10) NOT NULL,
  `pre_pro_medi` text NOT NULL,
  `habi_comun` text NOT NULL,
  `habimotoras` text NOT NULL,
  PRIMARY KEY  (`id_comentario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_antecedentes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_asistencia`
-- 

CREATE TABLE `tf_asistencia` (
  `id_asistencia` int(10) NOT NULL,
  `id_terapia` varchar(50) default NULL,
  `id_beneficiario` varchar(50) default NULL,
  PRIMARY KEY  (`id_asistencia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_asistencia`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_bitacora`
-- 

CREATE TABLE `tf_bitacora` (
  `id_bitacora` int(10) NOT NULL,
  `num_beneficiario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `res_medico` text NOT NULL,
  `observaciones` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`id_bitacora`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_bitacora`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_comentarios`
-- 

CREATE TABLE `tf_comentarios` (
  `id_comentario` int(10) NOT NULL,
  `habi_vida_diaria` text NOT NULL,
  `escolaridad` text NOT NULL,
  `expe_laboral` text NOT NULL,
  `evaluacion` text NOT NULL,
  `areas_opor` text NOT NULL,
  `sug_trabj` text NOT NULL,
  PRIMARY KEY  (`id_comentario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_comentarios`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_datos_generales`
-- 

CREATE TABLE `tf_datos_generales` (
  `id_comentario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(90) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `referido_por` text NOT NULL,
  `diag_medico` text NOT NULL,
  `diag_familiar` text NOT NULL,
  PRIMARY KEY  (`id_comentario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_datos_generales`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_fisica`
-- 

CREATE TABLE `tf_fisica` (
  `id_fisica` int(10) NOT NULL,
  `cama` tinyint(4) NOT NULL,
  `colchon` tinyint(4) NOT NULL,
  `barycam` tinyint(4) NOT NULL,
  `actfisica` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id_fisica`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_fisica`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_formatos`
-- 

CREATE TABLE `tf_formatos` (
  `id_formato` int(10) NOT NULL,
  `formato` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_formato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_formatos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_modulos`
-- 

CREATE TABLE `tf_modulos` (
  `id_modulo` int(10) NOT NULL,
  `modulo` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_modulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_modulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_bitacora`
-- 

CREATE TABLE `to_bitacora` (
  `id_bitacora` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `dato` text NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_beneficiario` int(10) NOT NULL,
  PRIMARY KEY  (`id_bitacora`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_bitacora`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_evaluaciones`
-- 

CREATE TABLE `to_evaluaciones` (
  `id_evaluacion` int(10) NOT NULL auto_increment,
  `id_modulo` char(10) NOT NULL,
  `nom_evaluacion` varchar(50) NOT NULL,
  `opciones` int(1) default NULL,
  `id_beneficiario` int(10) default NULL,
  PRIMARY KEY  (`id_evaluacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Volcar la base de datos para la tabla `to_evaluaciones`
-- 

INSERT INTO `to_evaluaciones` VALUES (1, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (2, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (3, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (4, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (5, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (6, 'b2', 'magda', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (7, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (8, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (9, 'b2', 'areli', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (10, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (11, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (12, 'b3', 'popo', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (13, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (14, '', '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (15, 'b2', 'jgakj', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_folios`
-- 

CREATE TABLE `to_folios` (
  `id_formato` int(10) NOT NULL,
  `num_folio` int(15) NOT NULL,
  PRIMARY KEY  (`id_formato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_folios`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_formatos`
-- 

CREATE TABLE `to_formatos` (
  `id_formato` int(10) NOT NULL,
  `nom_formato` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_formato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_formatos`
-- 

INSERT INTO `to_formatos` VALUES (1, 'Ocupacional');
INSERT INTO `to_formatos` VALUES (2, 'Evaluacion');
INSERT INTO `to_formatos` VALUES (3, 'aprendizaje');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_modulos`
-- 

CREATE TABLE `to_modulos` (
  `id_modulo` char(10) NOT NULL,
  `id_formato` int(10) NOT NULL,
  `nom_modulo` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_modulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_modulos`
-- 

INSERT INTO `to_modulos` VALUES ('a1', 2, 'Motrocidad ');
INSERT INTO `to_modulos` VALUES ('b2', 2, 'Alimentacion');
INSERT INTO `to_modulos` VALUES ('c3', 2, 'Higiene');
INSERT INTO `to_modulos` VALUES ('d4', 2, 'Baño');
INSERT INTO `to_modulos` VALUES ('e5', 2, 'Vestir');
INSERT INTO `to_modulos` VALUES ('f1', 3, 'Desarrollo Motor');
INSERT INTO `to_modulos` VALUES ('f6', 2, 'Vestido');
INSERT INTO `to_modulos` VALUES ('g7', 2, 'Comunicación');
INSERT INTO `to_modulos` VALUES ('h8', 2, 'Traslados');
INSERT INTO `to_modulos` VALUES ('i9', 2, 'Alcances');
INSERT INTO `to_modulos` VALUES ('j10', 2, 'Motrocidad Fina');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_pro_grup`
-- 

CREATE TABLE `to_pro_grup` (
  `id_programa` int(10) NOT NULL,
  `area` text NOT NULL,
  `objetivo_gnrl` text NOT NULL,
  `objetivo_especifico` text NOT NULL,
  `actividad` text NOT NULL,
  `servicio_social` text NOT NULL,
  `id_beneficiario` varchar(300) NOT NULL,
  PRIMARY KEY  (`id_programa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_pro_grup`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_agregarfamiliar`
-- 

CREATE TABLE `ts_agregarfamiliar` (
  `id_beneficiario` int(10) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `edad` int(10) NOT NULL,
  `ocupacion` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_agregarfamiliar`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_bitacora`
-- 

CREATE TABLE `ts_bitacora` (
  `id_beneficiario` int(10) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `reg_medi` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `observa` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_bitacora`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_dfamilia`
-- 

CREATE TABLE `ts_dfamilia` (
  `id_beneficiario` int(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `edo_civil` tinyint(1) NOT NULL,
  `domiclio` varchar(35) NOT NULL,
  `ocupacion` varchar(25) NOT NULL,
  `empresa` varchar(25) NOT NULL,
  `ulti_empl` varchar(25) NOT NULL,
  `tie_desem` varchar(10) NOT NULL,
  `edo` tinyint(1) NOT NULL,
  `mpo` tinyint(1) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_dfamilia`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_dpersonales`
-- 

CREATE TABLE `ts_dpersonales` (
  `id_beneficiario` int(10) NOT NULL,
  `filename` varchar(40) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `nombre2` varchar(10) NOT NULL,
  `apellido_p` varchar(15) NOT NULL,
  `apellido_m` varchar(15) NOT NULL,
  `fecha_naci` date NOT NULL,
  `lugar_naci` varchar(25) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `direcc` varchar(40) NOT NULL,
  `telef_cas` int(11) NOT NULL,
  `co_gus_dig` varchar(15) NOT NULL,
  `nom_per_diri` varchar(30) NOT NULL,
  `telef2` int(11) NOT NULL,
  `mfa` varchar(20) NOT NULL,
  `gus_prefe` varchar(30) NOT NULL,
  `lo_q_hac_eno` varchar(20) NOT NULL,
  `habilidades` varchar(15) NOT NULL,
  `aspec_mejo` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_dpersonales`
-- 

INSERT INTO `ts_dpersonales` VALUES (12234556, 'abstract-background-1366x768.jpg', 'Magda', 'Ivonne', 'hsbokañ', 'kjhgff', '0000-00-00', '', 0, 'Lepido 3125, Fracc. Camino Real', 83670776, 'Tsuki', 'Salma Luna Briones', 83377515, 'cucarachos', 'musica', 'todo', 'buuu', 'ninguno');
INSERT INTO `ts_dpersonales` VALUES (1248000005, 'P5201462.JPG', 'Magda', 'Ivonne', 'Luna', 'Guajardo', '0000-00-00', '', 0, '', 0, '', '', 0, '', '', '', '', '');
INSERT INTO `ts_dpersonales` VALUES (1248000006, 'P5201463.JPG', 'Cintia', 'Jannet', 'Luna', 'Lopez', '0000-00-00', '', 0, 'rancho viejo ', 83670776, 'piki', 'Areli Guajardo', 2147483647, 'bichos', 'anime', 'comer', 'nada', 'todos');
INSERT INTO `ts_dpersonales` VALUES (1248000008, 'P5201411.JPG', 'fulanito', 'de tal', 'jaramillo', 'zulagua', '0000-00-00', '', 0, '', 0, 'fu', '', 0, '', '', '', '', '');
INSERT INTO `ts_dpersonales` VALUES (1248000010, 'IMG_20120617_232030.jpg', 'nombre', 'segundo no', 'ape', 'ap', '0000-00-00', '', 0, 'ds', 3123, 'as', '78', 78, '78', '78', '7', '87', '8');
INSERT INTO `ts_dpersonales` VALUES (1248000009, 'IMG_20120701_020542.jpg', 'fghfgh', 'fghf', 'hg', 'fgh', '0000-00-00', '', 0, '456', 4, '456', '564', 56, '456', '4', '564', '56', '456');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_fichamedica`
-- 

CREATE TABLE `ts_fichamedica` (
  `id_beneficiario` varchar(10) NOT NULL,
  `diag_medi` varchar(45) NOT NULL,
  `disc_congenita` varchar(45) NOT NULL,
  `mot_ingre` varchar(45) NOT NULL,
  `desc_espe_disc` varchar(45) NOT NULL,
  `ingie_medi` tinyint(1) NOT NULL,
  `qmedi_tom` varchar(25) NOT NULL,
  `dosis` varchar(20) NOT NULL,
  `h_medica` time NOT NULL,
  `aler_medi` tinyint(1) NOT NULL,
  `c_medi_aler` varchar(25) NOT NULL,
  `aler_pade` varchar(15) NOT NULL,
  `ti_sangre` tinyint(1) NOT NULL,
  `num_afilia` int(20) NOT NULL,
  `nom_medico` varchar(45) NOT NULL,
  `hospi_atiende` varchar(40) NOT NULL,
  `traslado` varchar(40) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_fichamedica`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_formatos`
-- 

CREATE TABLE `ts_formatos` (
  `id_formatos` int(10) NOT NULL,
  `nom_formatos` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_formatos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_formatos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_infoecono`
-- 

CREATE TABLE `ts_infoecono` (
  `id_beneficiario` int(10) NOT NULL,
  `concepto` varchar(15) NOT NULL,
  `sal_mens` int(7) NOT NULL,
  `bno_desp` int(7) NOT NULL,
  `prima` int(7) NOT NULL,
  `vacaciones` int(7) NOT NULL,
  `concepto2` varchar(15) NOT NULL,
  `rta_hipo` int(10) NOT NULL,
  `creditos` int(10) NOT NULL,
  `servicios` int(8) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `año` year(4) NOT NULL,
  `valor` int(8) NOT NULL,
  `propio` tinyint(1) NOT NULL,
  `empresa` varchar(25) NOT NULL,
  `ubicacion` varchar(35) NOT NULL,
  `mts_const` varchar(7) NOT NULL,
  `mts_terr` varchar(7) NOT NULL,
  `tip_const` varchar(10) NOT NULL,
  `costo` int(7) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_infoecono`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_mimfami`
-- 

CREATE TABLE `ts_mimfami` (
  `id_beneficiario` int(10) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `edad` year(2) NOT NULL,
  `ocupacion` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_mimfami`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_modulos`
-- 

CREATE TABLE `ts_modulos` (
  `id_modulos` char(10) NOT NULL,
  `id_formatos` int(10) NOT NULL,
  `nom_modulos` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_modulos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_modulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `t_fisica`
-- 

CREATE TABLE `t_fisica` (
  `id_terapia` int(10) NOT NULL,
  `terapia` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_terapia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `t_fisica`
-- 

