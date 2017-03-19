-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-03-2017 a las 05:14:42
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
        DECLARE V_ID_PROYECTO INT;
        SELECT  COUNT(*) INTO V_CANTIDAD_NOMBRES  FROM tbl_proyectos where nombre_proyecto=P_NOMBRE_PROYECTO AND id_usuario=P_ID_USUARIO;
        IF (V_CANTIDAD_NOMBRES<=0) THEN
            INSERT INTO `tbl_proyectos`(`id_usuario`, `nombre_proyecto`, `descripcion`, `periodo`, `interes`, `tiempo`, `gradiante`, `monto_prestamo`, `saldo_pagado`, `entrada_efectivo`, `salida_efectivo`) VALUES (P_ID_USUARIO,P_NOMBRE_PROYECTO,P_DESCRIPCION,P_PERIODO,P_INTERES,P_TIEMPO,P_GRADIANTE,P_MONTO_PRESTAMO,P_SALDO_PAGADO,
            P_ENTRADA_EFECTIVO,P_SALIDA_EFECTIVO);
            SELECT  MAX(id_proyecto) INTO V_ID_PROYECTO  FROM tbl_proyectos;
            INSERT INTO `tbl_resultados`(`id_proyecto`) VALUES (V_ID_PROYECTO);
            SELECT 'INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
       ELSE
       		SELECT 'ERROR:EL NOMBRE DE PROYECTO YA EXISTE' INTO P_MENSAJE FROM DUAL;
       END IF;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_interes_compuesto` (IN `p_id_proyecto` INT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
	
    DECLARE c int DEFAULT 0;
    DECLARE v_interes_acumulado  float DEFAULT 0;
    DECLARE v_periodo int DEFAULT 0;
    DECLARE v_monto_pres float DEFAULT 0;
    DECLARE v_monto_pagar float DEFAULT 0;
    DECLARE v_monto_pagado float DEFAULT 0;
    DECLARE v_interes float DEFAULT 0;
     DECLARE v_cantidad_interes_compuesto int DEFAULT 0;
    
    SELECT COUNT(*) INTO v_cantidad_interes_compuesto FROM `tbl_interes_compuesto` WHERE id_proyecto= p_id_proyecto;
    IF (v_cantidad_interes_compuesto<=0) THEN
    SELECT `periodo`, `interes`, `monto_prestamo` INTO v_periodo, v_interes, v_monto_pres FROM `tbl_proyectos` WHERE id_proyecto= p_id_proyecto;
    set v_monto_pagar= v_monto_pres;
    WHILE( c < v_periodo ) DO

         set v_interes_acumulado =(v_monto_pagar * (v_interes/100));
         set v_monto_pagar= v_monto_pagar+v_interes_acumulado;
         set c = c+1;
         

         INSERT INTO `tbl_interes_compuesto`( `id_proyecto`, `monto_prestamo`, `periodo`, `interes`, `monto_pagar`, `monto_pagado`, `interes_compuesto`) VALUES (p_id_proyecto,v_monto_pres,c, v_interes,v_monto_pagar,v_monto_pagar, v_interes_acumulado);
    end WHILE;
     SELECT 'INTERES COMPUESTO CALCULADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       		SELECT 'ERROR:YA SE LE HA CALCULADO EL INTERES COMPUESTO' INTO P_MENSAJE FROM DUAL;
       END IF;	

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_interes_simple` (IN `p_id_proyecto` INT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
	
    DECLARE c int DEFAULT 0;
    DECLARE v_interes_simple  float DEFAULT 0;
    DECLARE v_periodo int DEFAULT 0;
    DECLARE v_monto_pres float DEFAULT 0;
    DECLARE v_monto_pagar float DEFAULT 0;
    DECLARE v_monto_pagado float DEFAULT 0;
    DECLARE v_interes float DEFAULT 0;
    DECLARE v_cantidad_interes_simple int DEFAULT 0;
    
    SELECT COUNT(*) INTO v_cantidad_interes_simple FROM `tbl_interes_simple` WHERE id_proyecto= p_id_proyecto;
    IF (v_cantidad_interes_simple<=0) THEN
    SELECT `periodo`, `interes`, `monto_prestamo` INTO v_periodo, v_interes, v_monto_pres FROM `tbl_proyectos` WHERE id_proyecto= p_id_proyecto;
    set v_monto_pagar= v_monto_pres;
    WHILE( c < v_periodo ) DO

         set v_interes_simple =(v_monto_pres * (v_interes/100));
         set v_monto_pagar= v_monto_pagar+v_interes_simple;
         set c = c+1;
         

         INSERT INTO `tbl_interes_simple`(`id_proyecto`, `monto_prestamo`, `periodo`, `interes`, `monto_pagar`, `monto_pagado`, `interes_simple`) VALUES (p_id_proyecto,v_monto_pres,c, v_interes,v_monto_pagar,v_monto_pagar, v_interes_simple);
    end WHILE;
    SELECT 'INTERES SIMPLE CALCULADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       		SELECT 'ERROR:YA SE LE HA CALCULADO EL INTERES SIMPLE' INTO P_MENSAJE FROM DUAL;
       END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_REGISTRAR` (IN `P_NOMBRE_COMPLETO` VARCHAR(100), IN `P_PAIS` VARCHAR(11), IN `P_USUARIO` VARCHAR(50), IN `P_CORREO_ELECTRONICO` VARCHAR(150), IN `P_PASSWORD` VARCHAR(100), OUT `P_MENSAJE` VARCHAR(200))  BEGIN
    	DECLARE V_ID_PERSONA INT;
    	DECLARE V_CANTIDAD_USUARIO INT;
        SELECT  COUNT(*) INTO V_CANTIDAD_USUARIO  FROM tbl_usuarios where usuario=P_USUARIO;
        IF (V_CANTIDAD_USUARIO<=0) THEN
            INSERT INTO `tbl_personas`( `nombre_completo`, `pais`, `correo_electronico`) VALUES (P_NOMBRE_COMPLETO,P_PAIS,P_CORREO_ELECTRONICO);
            SELECT  MAX(id_persona) INTO V_ID_PERSONA  FROM tbl_personas;
           INSERT INTO `tbl_usuarios`( `usuario`, `password`, `id_persona`, `id_estado`,`fecha_ingreso`) VALUES (P_USUARIO,P_PASSWORD,V_ID_PERSONA,1,now());
            SELECT 'INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
       ELSE
       		SELECT 'ERROR:EL NOMBRE DE USUARIO YA EXISTE' INTO P_MENSAJE FROM DUAL;
       END IF;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_valor_futuro` (IN `p_id_proyecto` INT, IN `p_valor_futuro` FLOAT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
    DECLARE v_cantidad_valor_futuro int DEFAULT 0;
    
    SELECT count(*) INTO v_cantidad_valor_futuro FROM `tbl_resultados` WHERE id_proyecto= p_id_proyecto and valor_futuro IS null;
    IF (v_cantidad_valor_futuro >0) THEN
        UPDATE `tbl_resultados` SET `valor_futuro`=p_valor_futuro WHERE  id_proyecto=p_id_proyecto;
        SELECT 'VALOR FUTURO INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       	SELECT 'ERROR:YA SE HA INSERTADO VALOR FUTURO' INTO P_MENSAJE FROM DUAL;
     END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_valor_presente` (IN `p_id_proyecto` INT, IN `p_valor_presente` FLOAT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
    DECLARE v_cantidad_valor_presente int DEFAULT 0;
    SELECT count(*) INTO v_cantidad_valor_presente FROM `tbl_resultados` WHERE id_proyecto= p_id_proyecto and valor_presente IS null;
    IF (v_cantidad_valor_presente >0) THEN
        UPDATE `tbl_resultados` SET `valor_presente`=p_valor_presente WHERE  id_proyecto=p_id_proyecto;
        SELECT 'VALOR PRESENTE INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       	SELECT 'ERROR:YA SE HA INSERTADO VALOR PRESENTE' INTO P_MENSAJE FROM DUAL;
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
  `monto_pagado` float NOT NULL,
  `interes_compuesto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_interes_compuesto`
--

INSERT INTO `tbl_interes_compuesto` (`id_interes_compuesto`, `id_proyecto`, `monto_prestamo`, `periodo`, `interes`, `monto_pagar`, `monto_pagado`, `interes_compuesto`) VALUES
(9, 4, 1000, 1, 5, 1050, 1050, 50),
(10, 4, 1000, 2, 5, 1102.5, 1102.5, 52.5),
(11, 4, 1000, 3, 5, 1157.62, 1157.62, 55.125);

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
  `monto_pagado` float NOT NULL,
  `interes_simple` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_interes_simple`
--

INSERT INTO `tbl_interes_simple` (`id_interes_simple`, `id_proyecto`, `monto_prestamo`, `periodo`, `interes`, `monto_pagar`, `monto_pagado`, `interes_simple`) VALUES
(1, 4, 1000, 1, 5, 1050, 1050, 50),
(2, 4, 1000, 2, 5, 1100, 1100, 50),
(3, 4, 1000, 3, 5, 1150, 1150, 50),
(4, 3, 1, 1, 1, 1.01, 1.01, 0.01);

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
(9, 'NOMBRE1 APELLIDO1', 'HONDURAS', 'NOMBRE1@MAIL.COM'),
(10, 'N', 'A2', 'C'),
(13, 'N', 'A3', 'C3'),
(15, 'N', 'A5', 'C5');

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
(3, 1, 'A', 'AN', 1, 1, 1, 1, 1, 1, 1, 1),
(4, 1, 'hhh', 'asd', 3, 5, 2, 2, 1000, 100, 100, 50),
(5, 1, 'A2', 'AN2', 1, 1, 1, 1, 1, 1, 1, 1),
(6, 1, 'A3', 'AN3', 10, 10, 10, 10, 10, 10, 10, 10),
(7, 1, 'dsds', 'asds', 1, 2, 3, 4, 5, 6, 7, 8),
(8, 1, 'Aa', 'ANa', 1, 1, 1, 1, 1, 1, 1, 1),
(9, 1, 'A5', 'AN5', 1, 1, 1, 1, 1, 1, 1, 1);

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

--
-- Volcado de datos para la tabla `tbl_resultados`
--

INSERT INTO `tbl_resultados` (`id_resultado`, `id_proyecto`, `valor_presente`, `valor_futuro`) VALUES
(1, 4, 20.2, 20.2),
(3, 5, NULL, NULL),
(4, 9, NULL, 20.2);

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
(1, 'NA', 'ASDF1234', 9, 1, '2017-03-16 19:19:22'),
(2, 'AN5', 'PW', 15, 1, '2017-03-18 21:58:27');

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
  MODIFY `id_interes_compuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_generado`
--
ALTER TABLE `tbl_interes_generado`
  MODIFY `id_interes_generado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  MODIFY `id_interes_simple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_resultados`
--
ALTER TABLE `tbl_resultados`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
