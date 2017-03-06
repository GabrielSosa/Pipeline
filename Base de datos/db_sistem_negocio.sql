-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2017 a las 03:20:02
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sistem_negocio`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_tbl_proyectos` (IN `id_us` INT(11), IN `nom_pro` VARCHAR(100), IN `descr` VARCHAR(100), IN `peri` INT(5), IN `inte` FLOAT, IN `tiem` INT(11), IN `grad` FLOAT, IN `mont_prest` FLOAT, IN `sald_pa` FLOAT, IN `entradaefect` FLOAT, IN `salidaefect` FLOAT)  BEGIN
	INSERT into tbl_proyectos (id_usuario,nombre_proyecto,descripcion,periodo,interes,tiempo,gradiante,monto_prestamo,saldo_pagado,entrada_efectivo,salida_efectivo) values(id_us,nom_pro,descr,peri,inte,tiem,grad,mont_prest,sald_pa,entradaefect,salidaefect);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CREAR_PROYECTO` (IN `id_proyec` INT(11), IN `id_us` INT(11), IN `nom_pro` VARCHAR(100), IN `descr` VARCHAR(100), IN `peri` INT(5), IN `inte` FLOAT, IN `tiem` INT(11), IN `grad` FLOAT, IN `mont_prest` FLOAT, IN `sald_pa` FLOAT, IN `entradaefect` FLOAT, IN `salidaefect` FLOAT)  BEGIN
	INSERT into tbl_proyectos (id_proyecto,id_usuario,nombre_proyecto,descripcion,periodo,interes,tiempo,gradiante,monto_prestamo,saldo_pagado,entrada_efectivo,salida_efectivo) values(id_proyec,id_us,nom_pro,descr,peri,inte,tiem,grad,mont_prest,sald_pa,entradaefect,salidaefect);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacoras`
--

CREATE TABLE `tbl_bitacoras` (
  `id_bitacora` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_actividad` datetime NOT NULL,
  `actividad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes_compuesto`
--

CREATE TABLE `tbl_interes_compuesto` (
  `id_interes_compuesto` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `monto_prestamo` float NOT NULL,
  `periodo` int(11) NOT NULL,
  `interes` float NOT NULL,
  `interes_acumulado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes_generado`
--

CREATE TABLE `tbl_interes_generado` (
  `id_interes_generado` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `saldo_pagado` float NOT NULL,
  `monto_prestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_interes_generado`
--

INSERT INTO `tbl_interes_generado` (`id_interes_generado`, `id_proyecto`, `saldo_pagado`, `monto_prestamo`) VALUES
(1, 1, 67, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes_simple`
--

CREATE TABLE `tbl_interes_simple` (
  `id_interes_simple` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `monto_prestamo` float NOT NULL,
  `periodo` int(11) NOT NULL,
  `interes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personas`
--

CREATE TABLE `tbl_personas` (
  `id_persona` int(11) NOT NULL,
  `primer_nombre` varchar(100) NOT NULL,
  `primer_apellido` varchar(100) NOT NULL,
  `correo_electronico` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_personas`
--

INSERT INTO `tbl_personas` (`id_persona`, `primer_nombre`, `primer_apellido`, `correo_electronico`) VALUES
(1, 'Kevin', 'Santamaria', 'kevin_asf@hotmail.es'),
(2, 'lenin', 'santamaria', 'lasf@h.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyectos`
--

CREATE TABLE `tbl_proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `periodo` int(5) NOT NULL,
  `interes` float NOT NULL,
  `tiempo` int(11) NOT NULL,
  `gradiante` float NOT NULL,
  `monto_prestamo` float NOT NULL,
  `saldo_pagado` float NOT NULL,
  `entrada_efectivo` float NOT NULL,
  `salida_efectivo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_proyectos`
--

INSERT INTO `tbl_proyectos` (`id_proyecto`, `id_usuario`, `nombre_proyecto`, `descripcion`, `periodo`, `interes`, `tiempo`, `gradiante`, `monto_prestamo`, `saldo_pagado`, `entrada_efectivo`, `salida_efectivo`) VALUES
(1, 1, 'Pipeline', 'industria', 3, 4, 2, 9, 5, 67, 7, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultados`
--

CREATE TABLE `tbl_resultados` (
  `id_resultado` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `usuario`, `password`, `id_persona`, `id_estado`) VALUES
(1, 'kasf', 'kasf', 1, 1),
(2, 'lasf', 'lasf', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `fk_persona_bitacora` (`id_usuario`);

--
-- Indices de la tabla `tbl_interes_compuesto`
--
ALTER TABLE `tbl_interes_compuesto`
  ADD PRIMARY KEY (`id_interes_compuesto`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `tbl_interes_generado`
--
ALTER TABLE `tbl_interes_generado`
  ADD PRIMARY KEY (`id_interes_generado`),
  ADD KEY `fk_proyecto_i_g` (`id_proyecto`);

--
-- Indices de la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  ADD PRIMARY KEY (`id_interes_simple`),
  ADD KEY `fk_proyecto_i_s` (`id_proyecto`);

--
-- Indices de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `uk_email` (`correo_electronico`);

--
-- Indices de la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_resultados`
--
ALTER TABLE `tbl_resultados`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `fk_proyecto_resultados` (`id_proyecto`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `uk_user` (`usuario`),
  ADD KEY `fk_persona` (`id_persona`),
  ADD KEY `fk_estado_persona` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_compuesto`
--
ALTER TABLE `tbl_interes_compuesto`
  MODIFY `id_interes_compuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_generado`
--
ALTER TABLE `tbl_interes_generado`
  MODIFY `id_interes_generado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  MODIFY `id_interes_simple` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_resultados`
--
ALTER TABLE `tbl_resultados`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  ADD CONSTRAINT `tbl_bitacoras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_interes_compuesto`
--
ALTER TABLE `tbl_interes_compuesto`
  ADD CONSTRAINT `tbl_interes_compuesto_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  ADD CONSTRAINT `tbl_interes_simple_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  ADD CONSTRAINT `tbl_proyectos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_proyectos_ibfk_2` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_interes_generado` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_resultados`
--
ALTER TABLE `tbl_resultados`
  ADD CONSTRAINT `tbl_resultados_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `tbl_personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
