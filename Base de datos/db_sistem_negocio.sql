-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-03-2017 a las 00:19:42
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

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
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CREAR_PROYECTO` (IN `P_ID_USUARIO` INT(11), IN `P_NOMBRE_PROYECTO` VARCHAR(100), IN `P_DESCRIPCION` VARCHAR(100), IN `P_PERIODO` INT(5), IN `P_INTERES` FLOAT, IN `P_TIEMPO` INT(11), IN `P_GRADIANTE` FLOAT, IN `P_MONTO_PRESTAMO` FLOAT, IN `P_SALDO_PAGADO` FLOAT, IN `P_ENTRADA_EFECTIVO` FLOAT, IN `P_SALIDA_EFECTIVO` FLOAT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
    	DECLARE V_CANTIDAD_NOMBRES INT;
        SELECT  COUNT(*) INTO V_CANTIDAD_NOMBRES  FROM tbl_proyectos where nombre_proyecto=P_NOMBRE_PROYECTO AND id_usuario=P_ID_USUARIO;
        IF (V_CANTIDAD_NOMBRES<=0) THEN
            INSERT INTO `tbl_proyectos`(`id_usuario`, `nombre_proyecto`, `descripcion`, `periodo`, `interes`, `tiempo`, `gradiante`, `monto_prestamo`, `saldo_pagado`, `entrada_efectivo`, `salida_efectivo`) VALUES (P_ID_USUARIO,P_NOMBRE_PROYECTO,P_DESCRIPCION,P_PERIODO,P_INTERES,P_TIEMPO,P_GRADIANTE,P_MONTO_PRESTAMO,P_SALDO_PAGADO,
            P_ENTRADA_EFECTIVO,P_SALIDA_EFECTIVO);
            SELECT 'INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
       ELSE
       		SELECT 'EL NOMBRE DE PROYECTO YA EXISTE' INTO P_MENSAJE FROM DUAL;
       END IF;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_REGISTRAR` (IN `P_NOMBRE_COMPLETO` VARCHAR(100), IN `P_PAIS` VARCHAR(11), IN `P_USUARIO` VARCHAR(50), IN `P_CORREO_ELECTRONICO` VARCHAR(150), IN `P_PASSWORD` VARCHAR(100), OUT `P_MENSAJE` VARCHAR(200))  BEGIN
    	DECLARE V_ID_PERSONA INT;
    	DECLARE V_CANTIDAD_USUARIO INT;
        SELECT  COUNT(*) INTO V_CANTIDAD_USUARIO  FROM tbl_usuarios where usuario=P_USUARIO;
        IF (V_CANTIDAD_USUARIO<=0) THEN
            INSERT INTO `tbl_personas`( `nombre_completo`, `pais`, `correo_electronico`) VALUES (P_NOMBRE_COMPLETO,P_PAIS,P_CORREO_ELECTRONICO);
            SELECT  last_insert_id() INTO V_ID_PERSONA  FROM tbl_personas;
           INSERT INTO `tbl_usuarios`( `usuario`, `password`, `id_persona`, `id_estado`,`fecha_ingreso`) VALUES (P_USUARIO,P_PASSWORD,V_ID_PERSONA,1,now());
            SELECT 'INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
       ELSE
       		SELECT 'EL NOMBRE DE USUARIO YA EXISTE' INTO P_MENSAJE FROM DUAL;
       END IF;
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
-- Estructura de tabla para la tabla `tbl_estados`
--

CREATE TABLE `tbl_estados` (
  `id_estado` int(1) NOT NULL,
  `nombre_estado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estados`
--

INSERT INTO `tbl_estados` (`id_estado`, `nombre_estado`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

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
  `monto_pagar` float NOT NULL,
  `monto_pagado` float NOT NULL
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes_simple`
--

CREATE TABLE `tbl_interes_simple` (
  `id_interes_simple` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `monto_prestamo` float NOT NULL,
  `periodo` int(11) NOT NULL,
  `interes` float NOT NULL,
  `monto_pagar` float NOT NULL,
  `monto_pagado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personas`
--

CREATE TABLE `tbl_personas` (
  `id_persona` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `correo_electronico` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_personas`
--

INSERT INTO `tbl_personas` (`id_persona`, `nombre_completo`, `pais`, `correo_electronico`) VALUES
(9, 'NOMBRE1 APELLIDO1', 'HONDURAS', 'NOMBRE1@MAIL.COM');

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
(1, 1, 'asdf', 'asdf', 2, 2, 2, 2, 2, 2, 2, 2),
(2, 1, 'asd', 'asd', 1, 1, 1, 1, 1, 100, 1, 1),
(3, 1, 'A', 'AN', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultados`
--

CREATE TABLE `tbl_resultados` (
  `id_resultado` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `valor_presente` float DEFAULT NULL,
  `valor_futuro` float DEFAULT NULL
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
  `id_estado` int(1) NOT NULL,
  `fecha_ingreso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `usuario`, `password`, `id_persona`, `id_estado`, `fecha_ingreso`) VALUES
(1, 'NA', 'ASDF1234', 9, 1, '2017-03-16 19:19:22');

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
-- Indices de la tabla `tbl_estados`
--
ALTER TABLE `tbl_estados`
  ADD PRIMARY KEY (`id_estado`);

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
  ADD KEY `fk_estado_persona` (`id_estado`),
  ADD KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_estados`
--
ALTER TABLE `tbl_estados`
  MODIFY `id_estado` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_compuesto`
--
ALTER TABLE `tbl_interes_compuesto`
  MODIFY `id_interes_compuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_generado`
--
ALTER TABLE `tbl_interes_generado`
  MODIFY `id_interes_generado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  MODIFY `id_interes_simple` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- Filtros para la tabla `tbl_interes_generado`
--
ALTER TABLE `tbl_interes_generado`
  ADD CONSTRAINT `tbl_interes_generado_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  ADD CONSTRAINT `tbl_interes_simple_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  ADD CONSTRAINT `tbl_proyectos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_resultados`
--
ALTER TABLE `tbl_resultados`
  ADD CONSTRAINT `tbl_resultados_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `tbl_personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuarios_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
