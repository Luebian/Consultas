-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 14-06-2013 a las 02:00:57
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `residencia1`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `areas`
-- 

CREATE TABLE `areas` (
  `id_area` int(10) NOT NULL default '0',
  `id_formato` int(20) default NULL,
  `nom_area` varchar(50) default NULL,
  PRIMARY KEY  (`id_area`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `areas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `bitacora`
-- 

CREATE TABLE `bitacora` (
  `id_bitacora` int(10) NOT NULL,
  `id_modulo` char(10) default NULL,
  `id_formato` int(10) default NULL,
  `id_area` int(10) default NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `id_expediente` int(10) default NULL,
  PRIMARY KEY  (`id_bitacora`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `bitacora`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `busqueda`
-- 

CREATE TABLE `busqueda` (
  `id_busqueda` int(10) NOT NULL default '0',
  `id_modulo` char(10) default NULL,
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `id_beneficiario` int(10) default NULL,
  `nombre` varchar(50) default NULL,
  PRIMARY KEY  (`id_busqueda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `busqueda`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `expediente`
-- 

CREATE TABLE `expediente` (
  `id_expediente` int(10) NOT NULL default '0',
  `id_beneficiario` int(10) default NULL,
  `fecha` datetime default NULL,
  `abierto` int(1) default NULL,
  PRIMARY KEY  (`id_expediente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `expediente`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_antecedentes`
-- 

CREATE TABLE `tf_antecedentes` (
  `id_comentario` int(10) NOT NULL default '0',
  `antecedentes_medicos` varchar(100) NOT NULL,
  `habilidades_comunicacion` varchar(100) NOT NULL,
  `habilidades_motoras` varchar(100) NOT NULL,
  `id_expediente` int(10) default NULL,
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
  `id_asistencia` int(10) NOT NULL default '0',
  `id_modulo` char(10) default NULL,
  `id_area` varchar(10) default NULL,
  `nombre_asistencia` varchar(50) NOT NULL,
  `opciones` varchar(50) NOT NULL,
  `id_expediente` int(10) default NULL,
  PRIMARY KEY  (`id_asistencia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_asistencia`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tf_comentarios`
-- 

CREATE TABLE `tf_comentarios` (
  `id_comentario` int(10) NOT NULL default '0',
  `habilidad_vida_diaria` varchar(100) NOT NULL,
  `escolaridad` varchar(100) NOT NULL,
  `experiencia_laboral` varchar(100) NOT NULL,
  `evaluacion` varchar(100) NOT NULL,
  `areas_oportunidad` varchar(100) NOT NULL,
  `sugerencias_trabajo` varchar(100) NOT NULL,
  `id_expediente` int(10) default NULL,
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
  `id_comentario` int(10) NOT NULL default '0',
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `referido_por` varchar(100) NOT NULL,
  `diagnostico_medico` varchar(100) NOT NULL,
  `diagnostico_familiar` varchar(100) NOT NULL,
  `id_expediente` int(10) default NULL,
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
  `id_fisica` int(10) NOT NULL default '0',
  `id_modulo` char(10) default NULL,
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `nombre_actividad_fisica_` tinyint(4) NOT NULL,
  `opciones` varchar(50) NOT NULL,
  `id_expediente` int(10) default NULL,
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
  `id_formato` int(20) NOT NULL default '0',
  `nom_formato` varchar(50) NOT NULL,
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
  `id_modulo` char(10) NOT NULL default '',
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `nom_modulo` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_modulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tf_modulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_evaluaciones`
-- 

CREATE TABLE `to_evaluaciones` (
  `id_evaluacion` int(10) NOT NULL auto_increment,
  `id_modulo` char(10) default NULL,
  `id_area` int(10) default NULL,
  `nom_evaluacion` varchar(50) NOT NULL,
  `opciones` int(1) default NULL,
  `id_expediente` int(10) default NULL,
  PRIMARY KEY  (`id_evaluacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Volcar la base de datos para la tabla `to_evaluaciones`
-- 

INSERT INTO `to_evaluaciones` VALUES (1, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (2, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (3, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (4, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (5, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (6, '0', NULL, 'magda', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (7, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (8, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (9, '0', NULL, 'areli', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (10, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (11, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (12, '0', NULL, 'popo', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (13, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (14, '0', NULL, '', NULL, NULL);
INSERT INTO `to_evaluaciones` VALUES (15, '0', NULL, 'jgakj', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_focupacional`
-- 

CREATE TABLE `to_focupacional` (
  `id_ocupacional` int(10) NOT NULL default '0',
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `area` text NOT NULL,
  `objetivo_gnrl` text NOT NULL,
  `objetivo_especifico` text NOT NULL,
  `actividad` text NOT NULL,
  `servicio_social` text NOT NULL,
  `id_expediente` int(10) default NULL,
  PRIMARY KEY  (`id_ocupacional`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_focupacional`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `to_folios`
-- 

CREATE TABLE `to_folios` (
  `id_formato` int(10) NOT NULL default '0',
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
  `id_formato` int(20) NOT NULL default '0',
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
  `id_modulo` char(10) NOT NULL default '',
  `id_formato` int(10) default NULL,
  `id_area` int(10) default NULL,
  `nom_modulo` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_modulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `to_modulos`
-- 

INSERT INTO `to_modulos` VALUES ('a1', 2, NULL, 'Motrocidad ');
INSERT INTO `to_modulos` VALUES ('b2', 2, NULL, 'Alimentacion');
INSERT INTO `to_modulos` VALUES ('c3', 2, NULL, 'Higiene');
INSERT INTO `to_modulos` VALUES ('d4', 2, NULL, 'Baño');
INSERT INTO `to_modulos` VALUES ('e5', 2, NULL, 'Vestir');
INSERT INTO `to_modulos` VALUES ('f1', 3, NULL, 'Desarrollo Motor');
INSERT INTO `to_modulos` VALUES ('f6', 2, NULL, 'Vestido');
INSERT INTO `to_modulos` VALUES ('g7', 2, NULL, 'Comunicación');
INSERT INTO `to_modulos` VALUES ('h8', 2, NULL, 'Traslados');
INSERT INTO `to_modulos` VALUES ('i9', 2, NULL, 'Alcances');
INSERT INTO `to_modulos` VALUES ('j10', 2, NULL, 'Motrocidad Fina');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_agregarfamiliar`
-- 

CREATE TABLE `ts_agregarfamiliar` (
  `id_agregarfamiliar` int(10) NOT NULL,
  `id_modulo` char(10) default NULL,
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `id_beneficiario` int(10) default NULL,
  PRIMARY KEY  (`id_agregarfamiliar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_agregarfamiliar`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_dfamilia`
-- 

CREATE TABLE `ts_dfamilia` (
  `id_dfamilia` int(10) NOT NULL,
  `id_modulo` char(10) default NULL,
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `nombre` varchar(50) NOT NULL,
  `estado_civil` tinyint(1) NOT NULL,
  `domiclio` varchar(50) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `ultimo_empleo` varchar(50) NOT NULL,
  `tiempo_desempleado` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `municipio` tinyint(1) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `id_agregar_familia` int(10) default NULL,
  `id_beneficiario` int(10) NOT NULL,
  PRIMARY KEY  (`id_dfamilia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_dfamilia`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_dpersonales`
-- 

CREATE TABLE `ts_dpersonales` (
  `id_beneficiario` int(10) NOT NULL auto_increment,
  `id_modulo` char(10) default NULL,
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `filename` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre2` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(50) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono_casa` int(20) NOT NULL,
  `gusta_queledigan` varchar(50) NOT NULL,
  `nombre_persona_dirigirse` varchar(50) NOT NULL,
  `telefono2` int(20) NOT NULL,
  `miedos_fobias` varchar(50) NOT NULL,
  `gustos_preferencias` varchar(50) NOT NULL,
  `lo_hace_enojar` varchar(50) NOT NULL,
  `habilidades` varchar(50) NOT NULL,
  `aspectos_mejorar` varchar(50) NOT NULL,
  `id_expediente` int(10) NOT NULL,
  PRIMARY KEY  (`id_beneficiario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1248000011 ;

-- 
-- Volcar la base de datos para la tabla `ts_dpersonales`
-- 

INSERT INTO `ts_dpersonales` VALUES (12234556, '0', 0, NULL, 'abstract-background-1366x768.jpg', 'Magda', 'Ivonne', 'hsbokañ', 'kjhgff', '0000-00-00', '', 0, 'Lepido 3125, Fracc. Camino Real', 83670776, 'Tsuki', 'Salma Luna Briones', 83377515, 'cucarachos', 'musica', 'todo', 'buuu', 'ninguno', 0);
INSERT INTO `ts_dpersonales` VALUES (1248000005, '0', 0, NULL, 'P5201462.JPG', 'Magda', 'Ivonne', 'Luna', 'Guajardo', '0000-00-00', '', 0, '', 0, '', '', 0, '', '', '', '', '', 0);
INSERT INTO `ts_dpersonales` VALUES (1248000006, '0', 0, NULL, 'P5201463.JPG', 'Cintia', 'Jannet', 'Luna', 'Lopez', '0000-00-00', '', 0, 'rancho viejo ', 83670776, 'piki', 'Areli Guajardo', 2147483647, 'bichos', 'anime', 'comer', 'nada', 'todos', 0);
INSERT INTO `ts_dpersonales` VALUES (1248000008, '0', 0, NULL, 'P5201411.JPG', 'fulanito', 'de tal', 'jaramillo', 'zulagua', '0000-00-00', '', 0, '', 0, 'fu', '', 0, '', '', '', '', '', 0);
INSERT INTO `ts_dpersonales` VALUES (1248000010, '0', 0, NULL, 'IMG_20120617_232030.jpg', 'nombre', 'segundo no', 'ape', 'ap', '0000-00-00', '', 0, 'ds', 3123, 'as', '78', 78, '78', '78', '7', '87', '8', 0);
INSERT INTO `ts_dpersonales` VALUES (1248000009, '0', 0, NULL, 'IMG_20120701_020542.jpg', 'fghfgh', 'fghf', 'hg', 'fgh', '0000-00-00', '', 0, '456', 4, '456', '564', 56, '456', '4', '564', '56', '456', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_fichamedica`
-- 

CREATE TABLE `ts_fichamedica` (
  `id_fichamedica` int(10) NOT NULL,
  `id_modulo` char(10) default NULL,
  `id_area` int(10) default NULL,
  `diagnostico_medico` varchar(200) NOT NULL,
  `discapacidad_congenita` varchar(50) NOT NULL,
  `motivo_ingreso` varchar(50) NOT NULL,
  `descricpcion_especifica` varchar(50) NOT NULL,
  `ingiere_medicamento` tinyint(1) NOT NULL,
  `medicamento_toma` varchar(50) NOT NULL,
  `dosis` varchar(20) NOT NULL,
  `horario_medicamento` time NOT NULL,
  `alergico_medicamento` tinyint(1) NOT NULL,
  `medicamento_alergico` varchar(50) NOT NULL,
  `alergias` varchar(50) NOT NULL,
  `tipo_sangre` tinyint(1) NOT NULL,
  `num_afiliacion` int(50) NOT NULL,
  `nombre_medico` varchar(50) NOT NULL,
  `hospital_atiendo` varchar(50) NOT NULL,
  `traslado` varchar(50) NOT NULL,
  `id_beneficiario` int(10) default NULL,
  PRIMARY KEY  (`id_fichamedica`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_fichamedica`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_formatos`
-- 

CREATE TABLE `ts_formatos` (
  `id_formato` int(20) NOT NULL default '0',
  `nom_formato` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_formato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_formatos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_infoecono`
-- 

CREATE TABLE `ts_infoecono` (
  `id_infoecono` int(10) NOT NULL,
  `id_modulo` char(10) default NULL,
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `concepto` varchar(50) NOT NULL,
  `salario_mensual` double NOT NULL,
  `bono_despensa` double NOT NULL,
  `prima_dominical` double NOT NULL,
  `vacaciones` double NOT NULL,
  `concepto2` varchar(50) NOT NULL,
  `renta_hipoteca` double NOT NULL,
  `creditos` double NOT NULL,
  `servicios` double NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `año` year(4) NOT NULL,
  `valor` double NOT NULL,
  `propio` tinyint(1) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `mts_construccion` varchar(10) NOT NULL,
  `mts_terreno` varchar(10) NOT NULL,
  `tipo_construccion` varchar(50) NOT NULL,
  `costo` double NOT NULL,
  `id_beneficiario` int(10) default NULL,
  PRIMARY KEY  (`id_infoecono`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_infoecono`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ts_modulos`
-- 

CREATE TABLE `ts_modulos` (
  `id_modulo` char(10) NOT NULL default '',
  `id_formato` int(20) default NULL,
  `id_area` int(10) default NULL,
  `id_formatos` int(10) NOT NULL,
  `nom_modulo` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_modulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ts_modulos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL default '0',
  `usuario` char(20) NOT NULL,
  `contraseña` char(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

