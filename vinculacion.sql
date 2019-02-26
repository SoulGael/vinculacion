-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2019 a las 00:44:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinculacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carrera`
--

CREATE TABLE `tbl_carrera` (
  `id_carrera` int(11) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `id_facultad` int(11) NOT NULL,
  `id_modalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_carrera`
--

INSERT INTO `tbl_carrera` (`id_carrera`, `carrera`, `codigo`, `estado`, `id_facultad`, `id_modalidad`) VALUES
(4, 'ADMINISTRACIÓN DE EMPRESAS Y NEGOCIOS', 'adm', 'Activo', 4, 2),
(5, 'EMPRESAS TURÍSTICAS Y HOTELERAS', 'admturistica', 'Activo', 4, 2),
(6, 'DERECHO', 'dere', 'Activo', 5, 2),
(7, 'CONTABILIDAD SUPERIOR  Y AUDITORÍA C.P.A', 'cont', 'Activo', 6, 2),
(8, 'SISTEMAS', 'sis', 'Activo', 6, 2),
(9, 'SOFTWARE', 'soft', 'Activo', 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE `tbl_ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `id_provincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ciudad`
--

INSERT INTO `tbl_ciudad` (`id_ciudad`, `ciudad`, `estado`, `id_provincia`) VALUES
(1, 'IBARRA', 'Activo', 1),
(2, 'OTAVALO', 'Activo', 1),
(3, 'ANTONIO ANTE', 'Activo', 1),
(4, 'QUITO', 'Activo', 2),
(5, 'SALINAS', 'Activo', 3),
(6, 'MACARA', 'Activo', 4),
(7, 'SAN PABLO', 'Activo', 1),
(8, 'GUAYAQUIL', 'Activo', 5),
(9, 'CUICOCHA', 'Activo', 1),
(10, 'BAñOS DE AGUA SANTA', 'Activo', 6),
(11, 'AMBATO', 'Activo', 6),
(12, 'TULCAN', 'Activo', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_distributivo_proyectos`
--

CREATE TABLE `tbl_distributivo_proyectos` (
  `id_distributivo_proyectos` int(11) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `hrs_proyecto_vinculacion` int(11) NOT NULL DEFAULT '0',
  `hrs_docente_tutor` int(11) DEFAULT '0',
  `hrs_docente_participante` int(11) DEFAULT '0',
  `hrs_seguimiento_graduados` int(11) DEFAULT '0',
  `hrs_supervision_pasantias_comunitario` int(11) DEFAULT '0',
  `id_carrera` int(11) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `estado` varchar(10) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_extension`
--

CREATE TABLE `tbl_extension` (
  `id_extension` int(11) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `codigo_u` varchar(10) NOT NULL DEFAULT '1042',
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_extension`
--

INSERT INTO `tbl_extension` (`id_extension`, `extension`, `estado`, `codigo_u`, `id_ciudad`) VALUES
(1, 'IBARRA', 'Activo', '10200', 1),
(2, 'EXT TULCAN', 'Activo', 'tulcan_190', 12),
(3, 'MATRIZ', 'Activo', 'ambato_ui', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facultad`
--

CREATE TABLE `tbl_facultad` (
  `id_facultad` int(11) NOT NULL,
  `facultad` varchar(30) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `id_extension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_facultad`
--

INSERT INTO `tbl_facultad` (`id_facultad`, `facultad`, `estado`, `id_extension`) VALUES
(4, 'DIRECCIÓN DE EMPRESAS', 'Activo', 1),
(5, 'JURISPRUDENCIA', 'Activo', 1),
(6, 'SISTEMAS MERCANTILES', 'Activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modalidad`
--

CREATE TABLE `tbl_modalidad` (
  `id_modalidad` int(11) NOT NULL,
  `modalidad` varchar(20) DEFAULT NULL,
  `estado` varchar(10) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_modalidad`
--

INSERT INTO `tbl_modalidad` (`id_modalidad`, `modalidad`, `estado`) VALUES
(1, 'SEMI-PRESENCIAL', 'Activo'),
(2, 'PRESENCIAL', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pagina`
--

CREATE TABLE `tbl_pagina` (
  `id_pagina` int(11) NOT NULL,
  `pagina` varchar(20) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pagina`
--

INSERT INTO `tbl_pagina` (`id_pagina`, `pagina`, `descripcion`) VALUES
(1, 'admPerfil', 'ACCESO AL PERFIL DE PERSONAL'),
(2, 'admPrivilegios', 'ADMINISTRACION DE ROLES Y PROVILEGIOS'),
(3, 'admSistema', 'ACCESO A DATOS GENERALES DE LA APLICACIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_periodo`
--

CREATE TABLE `tbl_periodo` (
  `id_periodo` int(11) NOT NULL,
  `periodo` varchar(100) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `estado` varchar(10) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_periodo`
--

INSERT INTO `tbl_periodo` (`id_periodo`, `periodo`, `codigo`, `estado`) VALUES
(1, '2018-2019', 'UI_2019', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `id_persona` int(11) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nro_matricula` varchar(20) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` text,
  `email_institucional` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` text,
  `pass` varchar(50) NOT NULL,
  `nivel` varchar(20) DEFAULT NULL,
  `paralelo` varchar(5) DEFAULT NULL,
  `foto` text,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `id_ciudad` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_privilegio`
--

CREATE TABLE `tbl_privilegio` (
  `id_rol` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_privilegio`
--

INSERT INTO `tbl_privilegio` (`id_rol`, `id_pagina`) VALUES
(1, 1),
(1, 2),
(1, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_provincia`
--

CREATE TABLE `tbl_provincia` (
  `id_provincia` int(11) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_provincia`
--

INSERT INTO `tbl_provincia` (`id_provincia`, `provincia`, `estado`) VALUES
(1, 'IMBABURA', 'Activo'),
(2, 'PICHINCHA', 'Inactivo'),
(3, 'ESMERALDAS', 'Activo'),
(4, 'LOJA', 'Activo'),
(5, 'GUAYAS', 'Activo'),
(6, 'TUNGURAHUA', 'Activo'),
(7, 'SUCUMBIOS', 'Activo'),
(8, 'CARCHI', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `estado` varchar(10) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_rol`
--

INSERT INTO `tbl_rol` (`id_rol`, `rol`, `estado`) VALUES
(2, 'ADMINISTRADOR', 'Activo'),
(3, 'DOCENTE PARTICIPANTE', 'Activo'),
(4, 'DOCENTE TUTOR', 'Activo'),
(5, 'ESTUDIANTE', 'Activo');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_ciudad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vta_ciudad` (
`id_ciudad` int(11)
,`ciudad` varchar(20)
,`estado` varchar(10)
,`id_provincia` int(11)
,`provincia` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_extension`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vta_extension` (
`id_extension` int(11)
,`extension` varchar(100)
,`estado` varchar(10)
,`codigo_u` varchar(10)
,`id_ciudad` int(11)
,`ciudad` varchar(20)
,`id_provincia` int(11)
,`provincia` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_facultad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vta_facultad` (
`id_facultad` int(11)
,`facultad` varchar(30)
,`estado` varchar(10)
,`id_extension` int(11)
,`extension` varchar(100)
,`codigo_u` varchar(10)
,`id_ciudad` int(11)
,`ciudad` varchar(20)
,`id_provincia` int(11)
,`provincia` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_privilegio`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vta_privilegio` (
`id_rol` int(11)
,`id_pagina` int(11)
,`pagina` varchar(20)
,`descripcion` text
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_ciudad`
--
DROP TABLE IF EXISTS `vta_ciudad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_ciudad`  AS  select `tbl_ciudad`.`id_ciudad` AS `id_ciudad`,`tbl_ciudad`.`ciudad` AS `ciudad`,`tbl_ciudad`.`estado` AS `estado`,`tbl_ciudad`.`id_provincia` AS `id_provincia`,`tbl_provincia`.`provincia` AS `provincia` from (`tbl_ciudad` join `tbl_provincia` on((`tbl_ciudad`.`id_provincia` = `tbl_provincia`.`id_provincia`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_extension`
--
DROP TABLE IF EXISTS `vta_extension`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_extension`  AS  select `tbl_extension`.`id_extension` AS `id_extension`,`tbl_extension`.`extension` AS `extension`,`tbl_extension`.`estado` AS `estado`,`tbl_extension`.`codigo_u` AS `codigo_u`,`tbl_extension`.`id_ciudad` AS `id_ciudad`,`vta_ciudad`.`ciudad` AS `ciudad`,`vta_ciudad`.`id_provincia` AS `id_provincia`,`vta_ciudad`.`provincia` AS `provincia` from (`tbl_extension` join `vta_ciudad` on((`tbl_extension`.`id_ciudad` = `vta_ciudad`.`id_ciudad`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_facultad`
--
DROP TABLE IF EXISTS `vta_facultad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_facultad`  AS  select `tbl_facultad`.`id_facultad` AS `id_facultad`,`tbl_facultad`.`facultad` AS `facultad`,`tbl_facultad`.`estado` AS `estado`,`tbl_facultad`.`id_extension` AS `id_extension`,`vta_extension`.`extension` AS `extension`,`vta_extension`.`codigo_u` AS `codigo_u`,`vta_extension`.`id_ciudad` AS `id_ciudad`,`vta_extension`.`ciudad` AS `ciudad`,`vta_extension`.`id_provincia` AS `id_provincia`,`vta_extension`.`provincia` AS `provincia` from (`tbl_facultad` join `vta_extension` on((`tbl_facultad`.`id_extension` = `vta_extension`.`id_extension`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_privilegio`
--
DROP TABLE IF EXISTS `vta_privilegio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_privilegio`  AS  select `tbl_privilegio`.`id_rol` AS `id_rol`,`tbl_privilegio`.`id_pagina` AS `id_pagina`,`tbl_pagina`.`pagina` AS `pagina`,`tbl_pagina`.`descripcion` AS `descripcion` from (`tbl_privilegio` join `tbl_pagina` on((`tbl_privilegio`.`id_pagina` = `tbl_pagina`.`id_pagina`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_carrera`
--
ALTER TABLE `tbl_carrera`
  ADD PRIMARY KEY (`id_carrera`) USING BTREE,
  ADD KEY `fk_carrera_facultad1_idx` (`id_facultad`) USING BTREE,
  ADD KEY `fk_carrera_modalidad1_idx` (`id_modalidad`) USING BTREE;

--
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD PRIMARY KEY (`id_ciudad`) USING BTREE,
  ADD UNIQUE KEY `ciudad_UNIQUE` (`ciudad`) USING BTREE,
  ADD KEY `fk_ciudad_provincia_idx` (`id_provincia`) USING BTREE;

--
-- Indices de la tabla `tbl_distributivo_proyectos`
--
ALTER TABLE `tbl_distributivo_proyectos`
  ADD PRIMARY KEY (`id_distributivo_proyectos`),
  ADD KEY `cedula` (`cedula`),
  ADD KEY `id_periodo` (`id_periodo`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `tbl_extension`
--
ALTER TABLE `tbl_extension`
  ADD PRIMARY KEY (`id_extension`) USING BTREE,
  ADD UNIQUE KEY `extension_UNIQUE` (`extension`) USING BTREE,
  ADD KEY `fk_extension_ciudad1_idx` (`id_ciudad`) USING BTREE;

--
-- Indices de la tabla `tbl_facultad`
--
ALTER TABLE `tbl_facultad`
  ADD PRIMARY KEY (`id_facultad`) USING BTREE,
  ADD KEY `fk_facultad_extension1_idx` (`id_extension`) USING BTREE;

--
-- Indices de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  ADD PRIMARY KEY (`id_modalidad`) USING BTREE,
  ADD UNIQUE KEY `modalidad_UNIQUE` (`id_modalidad`) USING BTREE;

--
-- Indices de la tabla `tbl_pagina`
--
ALTER TABLE `tbl_pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `tbl_periodo`
--
ALTER TABLE `tbl_periodo`
  ADD PRIMARY KEY (`id_periodo`) USING BTREE,
  ADD UNIQUE KEY `periodo_UNIQUE` (`periodo`) USING BTREE;

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`id_persona`) USING BTREE,
  ADD UNIQUE KEY `tbl_persona_UNIQUE` (`cedula`) USING BTREE,
  ADD KEY `id_ciudad` (`id_ciudad`),
  ADD KEY `id_carrera` (`id_carrera`),
  ADD KEY `id_periodo` (`id_periodo`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `tbl_privilegio`
--
ALTER TABLE `tbl_privilegio`
  ADD PRIMARY KEY (`id_rol`,`id_pagina`);

--
-- Indices de la tabla `tbl_provincia`
--
ALTER TABLE `tbl_provincia`
  ADD PRIMARY KEY (`id_provincia`) USING BTREE,
  ADD UNIQUE KEY `provincia_UNIQUE` (`provincia`) USING BTREE;

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`id_rol`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_carrera`
--
ALTER TABLE `tbl_carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_distributivo_proyectos`
--
ALTER TABLE `tbl_distributivo_proyectos`
  MODIFY `id_distributivo_proyectos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_extension`
--
ALTER TABLE `tbl_extension`
  MODIFY `id_extension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_facultad`
--
ALTER TABLE `tbl_facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_modalidad`
--
ALTER TABLE `tbl_modalidad`
  MODIFY `id_modalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_pagina`
--
ALTER TABLE `tbl_pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_periodo`
--
ALTER TABLE `tbl_periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_provincia`
--
ALTER TABLE `tbl_provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_carrera`
--
ALTER TABLE `tbl_carrera`
  ADD CONSTRAINT `fk_carrera_facultad1` FOREIGN KEY (`id_facultad`) REFERENCES `tbl_facultad` (`id_facultad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_carrera_modalidad1` FOREIGN KEY (`id_modalidad`) REFERENCES `tbl_modalidad` (`id_modalidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD CONSTRAINT `fk_ciudad_provincia` FOREIGN KEY (`id_provincia`) REFERENCES `tbl_provincia` (`id_provincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_distributivo_proyectos`
--
ALTER TABLE `tbl_distributivo_proyectos`
  ADD CONSTRAINT `fk_distributivo_proyectos_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `tbl_carrera` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_distributivo_proyectos_periodo` FOREIGN KEY (`id_periodo`) REFERENCES `tbl_periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_distributivo_proyectos_persona` FOREIGN KEY (`cedula`) REFERENCES `tbl_persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_extension`
--
ALTER TABLE `tbl_extension`
  ADD CONSTRAINT `fk_extension_ciudad1` FOREIGN KEY (`id_ciudad`) REFERENCES `tbl_ciudad` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_facultad`
--
ALTER TABLE `tbl_facultad`
  ADD CONSTRAINT `fk_facultad_extension1` FOREIGN KEY (`id_extension`) REFERENCES `tbl_extension` (`id_extension`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `fk_persona_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `tbl_carrera` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_periodo` FOREIGN KEY (`id_periodo`) REFERENCES `tbl_periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_rol` FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tbl_persona_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `tbl_ciudad` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
