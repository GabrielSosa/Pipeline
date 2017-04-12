-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2017 a las 16:41:27
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_costo_capitalizado` (IN `p_id_proyecto` INT, IN `COSTO_INICIAL_1` FLOAT, IN `P_VALOR_ANUAL_1` FLOAT, IN `COSTO_INICIAL_2` FLOAT, IN `INTERES_2` FLOAT, IN `P_VALOR_ANUAL_2` FLOAT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
	
    DECLARE v_cantidad_valor_anual int DEFAULT 0;
    DECLARE v_interes float DEFAULT 0;
    DECLARE v_costo_capitalizado_1 float DEFAULT 0;
    DECLARE v_costo_capitalizado_2 float DEFAULT 0;
    SELECT count(*) INTO v_cantidad_valor_anual FROM `tbl_resultados` WHERE  id_proyecto= p_id_proyecto and valor_anual_1 IS null;
    IF (v_cantidad_valor_anual>=0) THEN
    SELECT `interes` INTO v_interes FROM `tbl_proyectos` WHERE id_proyecto= p_id_proyecto;
    set v_costo_capitalizado_1= COSTO_INICIAL_1+(P_VALOR_ANUAL_1/(v_interes/100));
    set v_costo_capitalizado_2= COSTO_INICIAL_2+(P_VALOR_ANUAL_2/(INTERES_2/100));
    UPDATE `tbl_resultados` SET `costo_inicial_1`=COSTO_INICIAL_1,`valor_anual_1`=P_VALOR_ANUAL_1,`tasa_interes_2`=INTERES_2,`costo_inicial_2`=COSTO_INICIAL_2,`valor_anual_2`=P_VALOR_ANUAL_2,`costo_capitalizado_1`=v_costo_capitalizado_1,`costo_capitalizado_2`=v_costo_capitalizado_2  WHERE  id_proyecto=p_id_proyecto;
    SELECT 'COSTO CAPITALIZADO CALCULADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       		SELECT 'ERROR:YA SE LE HA CALCULADO EL COSTO CAPITALIZADO O  NO EXITE PARA ESTE PROYECTO' INTO P_MENSAJE FROM DUAL;
       END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CREAR_PROYECTO` (IN `P_ID_USUARIO` INT(11), IN `P_NOMBRE_PROYECTO` VARCHAR(100), IN `P_DESCRIPCION` VARCHAR(100), IN `P_PERIODO` INT(5), IN `P_INTERES` FLOAT, IN `P_TIEMPO` INT(11), IN `P_MONTO_PRESTAMO` FLOAT, IN `P_FECHA_INICIO` DATE, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
    	DECLARE V_CANTIDAD_NOMBRES INT;
        DECLARE V_ID_PROYECTO INT;
        SELECT  COUNT(*) INTO V_CANTIDAD_NOMBRES  FROM tbl_proyectos where nombre_proyecto=P_NOMBRE_PROYECTO AND id_usuario=P_ID_USUARIO;
        IF (V_CANTIDAD_NOMBRES<=0) THEN
            INSERT INTO `tbl_proyectos`(`id_usuario`, `nombre_proyecto`, `descripcion`, `periodo`, `interes`, `tiempo`, `monto_prestamo`, `fecha_inicio`,`estado_proyecto`) VALUES (P_ID_USUARIO,P_NOMBRE_PROYECTO,P_DESCRIPCION,P_PERIODO,P_INTERES,P_TIEMPO,P_MONTO_PRESTAMO,P_FECHA_INICIO,1);
            SELECT  MAX(id_proyecto) INTO V_ID_PROYECTO  FROM tbl_proyectos;
            INSERT INTO `tbl_resultados`(`id_proyecto`) VALUES (V_ID_PROYECTO);
            
            SELECT 'INSERTADO CON EXITO' INTO P_MENSAJE FROM DUAL;
       ELSE
       		SELECT 'ERROR:EL NOMBRE DE PROYECTO YA EXISTE' INTO P_MENSAJE FROM DUAL;
       END IF;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_interes_compuesto` (IN `p_id_proyecto` INT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
	
    DECLARE c int DEFAULT 0;
    DECLARE v_periodo int DEFAULT 0;
    DECLARE v_monto_pres float DEFAULT 0;
    DECLARE v_monto_pagado float DEFAULT 0;
    DECLARE v_pago_interes float DEFAULT 0;
    DECLARE v_pago_capital float DEFAULT 0;
    DECLARE v_cuota float DEFAULT 0;
    DECLARE v_saldo_actual float DEFAULT 0;
    DECLARE v_interes float DEFAULT 0;
    DECLARE v_cantidad_interes_compuesto int DEFAULT 0;
    
    SELECT COUNT(*) INTO v_cantidad_interes_compuesto FROM `tbl_interes_compuesto` WHERE id_proyecto= p_id_proyecto;
    IF (v_cantidad_interes_compuesto<=0) THEN
    SELECT `periodo`, `interes`, `monto_prestamo` INTO v_periodo, v_interes, v_monto_pres FROM `tbl_proyectos` WHERE id_proyecto= p_id_proyecto;
    
    set v_saldo_actual=v_monto_pres;
    set v_cuota=v_monto_pres/v_periodo;
    set v_pago_capital=v_cuota;
    
    set v_monto_pagado=0.00;
    WHILE( c < v_periodo ) DO
    	 set v_pago_interes=v_saldo_actual*(v_interes/100);
		 set v_saldo_actual= v_saldo_actual-v_cuota;
         set v_monto_pagado= v_monto_pagado+v_cuota;
         set c = c+1;
         

         INSERT INTO `tbl_interes_compuesto`( `id_proyecto`, `periodo`, `interes`, `pago_capital`, `cuota`, `saldo_actual`, `monto_pagado`) VALUES (p_id_proyecto,c,v_pago_interes,v_pago_capital, v_cuota,v_saldo_actual,v_monto_pagado);
    end WHILE;
    SELECT 'INTERES COMPUESTO CALCULADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       		SELECT 'ERROR:YA SE LE HA CALCULADO EL INTERES COMPUESTO O  NO EXITE PARA ESTE PROYECTO' INTO P_MENSAJE FROM DUAL;
       END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_interes_simple` (IN `p_id_proyecto` INT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
	
    DECLARE c int DEFAULT 0;
    DECLARE v_periodo int DEFAULT 0;
    DECLARE v_monto_pres float DEFAULT 0;
    DECLARE v_monto_pagar float DEFAULT 0;
    DECLARE v_monto_pagado float DEFAULT 0;
    DECLARE v_pago_interes float DEFAULT 0;
    DECLARE v_pago_capital float DEFAULT 0;
    DECLARE v_cuota float DEFAULT 0;
    DECLARE v_saldo_actual float DEFAULT 0;
    DECLARE v_interes float DEFAULT 0;
    DECLARE v_cantidad_interes_simple int DEFAULT 0;
    
    SELECT COUNT(*) INTO v_cantidad_interes_simple FROM `tbl_interes_simple` WHERE id_proyecto= p_id_proyecto;
    IF (v_cantidad_interes_simple<=0) THEN
    SELECT `periodo`, `interes`, `monto_prestamo` INTO v_periodo, v_interes, v_monto_pres FROM `tbl_proyectos` WHERE id_proyecto= p_id_proyecto;
    set v_monto_pagar= v_monto_pres*(v_interes*v_periodo/100)+v_monto_pres;
    set v_saldo_actual=v_monto_pagar;
    set v_cuota=v_monto_pagar/v_periodo;
    set v_pago_capital=v_cuota-(v_monto_pres/v_periodo);
    set v_pago_interes=v_cuota-(v_pago_capital);
    set v_monto_pagado=0.00;
    WHILE( c < v_periodo ) DO
		 set v_saldo_actual= v_saldo_actual-v_cuota;
         set v_monto_pagado= v_monto_pagado+v_cuota;
         set c = c+1;
         

         INSERT INTO `tbl_interes_simple`( `id_proyecto`, `periodo`, `interes`, `pago_capital`, `cuota`, `saldo_actual`, `monto_pagado`) VALUES (p_id_proyecto,c,v_pago_interes,v_pago_capital, v_cuota,v_saldo_actual,v_monto_pagado);
    end WHILE;
    SELECT 'INTERES SIMPLE CALCULADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       		SELECT 'ERROR:YA SE LE HA CALCULADO EL INTERES SIMPLE O  NO EXITE PARA ESTE PROYECTO' INTO P_MENSAJE FROM DUAL;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tasa_retorno` (IN `p_id_proyecto` INT, `p_interes` FLOAT, `p_periodo` INT, `p_saldo_inicial_no_recuperado` FLOAT, `p_flujo_efectivo` FLOAT, OUT `P_MENSAJE` VARCHAR(200))  BEGIN
	DECLARE v_cantidad_tasas float DEFAULT 0;
    DECLARE v_interes_sobre_saldo_no_rec float DEFAULT 0;
    DECLARE v_cantidad_recuperado float DEFAULT 0;
    DECLARE v_saldo_final_no_recuperado float DEFAULT 0;
    SELECT count(*) INTO v_cantidad_tasas FROM `tbl_tasa_retorno` WHERE  id_proyecto= p_id_proyecto;
    IF (v_cantidad_tasas<3) THEN
    	set v_interes_sobre_saldo_no_rec=(p_interes/100)*p_saldo_inicial_no_recuperado;
        set v_cantidad_recuperado=p_flujo_efectivo-v_interes_sobre_saldo_no_rec;
        set v_saldo_final_no_recuperado=p_saldo_inicial_no_recuperado+v_cantidad_recuperado;
    	INSERT INTO `tbl_tasa_retorno`( `id_proyecto`, `anio`, `interes`,`interes_sobre_saldo_no_recuperado`, `saldo_inicial_no_recuperado`, `flujo_efectivo`, `cantidad_recuperada`, `saldo_final_no_recuperado`) VALUES (p_id_proyecto,p_periodo,p_interes,v_interes_sobre_saldo_no_rec,p_saldo_inicial_no_recuperado,p_flujo_efectivo,v_cantidad_recuperado,v_saldo_final_no_recuperado);
    SELECT 'TASA DE RETORNO CALCULADO CON EXITO' INTO P_MENSAJE FROM DUAL;
	ELSE
       		SELECT 'ERROR:YA SE  HAN CALCULADO 3 TASAS DE RETORNO ' INTO P_MENSAJE FROM DUAL;
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
  `periodo` int(11) NOT NULL,
  `interes` float NOT NULL,
  `monto_pagado` float NOT NULL,
  `pago_capital` float NOT NULL,
  `saldo_actual` float NOT NULL,
  `cuota` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_interes_compuesto`
--

INSERT INTO `tbl_interes_compuesto` (`id_interes_compuesto`, `id_proyecto`, `periodo`, `interes`, `monto_pagado`, `pago_capital`, `saldo_actual`, `cuota`) VALUES
(36, 13, 1, 50, 83.3333, 83.3333, 916.667, 83.3333),
(37, 13, 2, 45.8333, 166.667, 83.3333, 833.333, 83.3333),
(38, 13, 3, 41.6667, 250, 83.3333, 750, 83.3333),
(39, 13, 4, 37.5, 333.333, 83.3333, 666.667, 83.3333),
(40, 13, 5, 33.3333, 416.667, 83.3333, 583.333, 83.3333),
(41, 13, 6, 29.1667, 500, 83.3333, 500, 83.3333),
(42, 13, 7, 25, 583.333, 83.3333, 416.667, 83.3333),
(43, 13, 8, 20.8333, 666.667, 83.3333, 333.333, 83.3333),
(44, 13, 9, 16.6667, 750, 83.3333, 250, 83.3333),
(45, 13, 10, 12.5, 833.333, 83.3333, 166.667, 83.3333),
(46, 13, 11, 8.33334, 916.667, 83.3333, 83.3334, 83.3333),
(47, 13, 12, 4.16667, 1000, 83.3333, 0.0000457764, 83.3333),
(48, 15, 1, 18000, 60000, 60000, 60000, 60000),
(49, 15, 2, 9000, 120000, 60000, 0, 60000),
(50, 16, 1, 15600, 8000, 8000, 112000, 8000),
(51, 16, 2, 14560, 16000, 8000, 104000, 8000),
(52, 16, 3, 13520, 24000, 8000, 96000, 8000),
(53, 16, 4, 12480, 32000, 8000, 88000, 8000),
(54, 16, 5, 11440, 40000, 8000, 80000, 8000),
(55, 16, 6, 10400, 48000, 8000, 72000, 8000),
(56, 16, 7, 9360, 56000, 8000, 64000, 8000),
(57, 16, 8, 8320, 64000, 8000, 56000, 8000),
(58, 16, 9, 7280, 72000, 8000, 48000, 8000),
(59, 16, 10, 6240, 80000, 8000, 40000, 8000),
(60, 16, 11, 5200, 88000, 8000, 32000, 8000),
(61, 16, 12, 4160, 96000, 8000, 24000, 8000),
(62, 16, 13, 3120, 104000, 8000, 16000, 8000),
(63, 16, 14, 2080, 112000, 8000, 8000, 8000),
(64, 16, 15, 1040, 120000, 8000, 0, 8000),
(65, 17, 1, 32, 20, 20, 180, 20),
(66, 17, 2, 28.8, 40, 20, 160, 20),
(67, 17, 3, 25.6, 60, 20, 140, 20),
(68, 17, 4, 22.4, 80, 20, 120, 20),
(69, 17, 5, 19.2, 100, 20, 100, 20),
(70, 17, 6, 16, 120, 20, 80, 20),
(71, 17, 7, 12.8, 140, 20, 60, 20),
(72, 17, 8, 9.6, 160, 20, 40, 20),
(73, 17, 9, 6.4, 180, 20, 20, 20),
(74, 17, 10, 3.2, 200, 20, 0, 20),
(75, 18, 1, 146400, 10000, 10000, 110000, 10000),
(76, 18, 2, 134200, 20000, 10000, 100000, 10000),
(77, 18, 3, 122000, 30000, 10000, 90000, 10000),
(78, 18, 4, 109800, 40000, 10000, 80000, 10000),
(79, 18, 5, 97600, 50000, 10000, 70000, 10000),
(80, 18, 6, 85400, 60000, 10000, 60000, 10000),
(81, 18, 7, 73200, 70000, 10000, 50000, 10000),
(82, 18, 8, 61000, 80000, 10000, 40000, 10000),
(83, 18, 9, 48800, 90000, 10000, 30000, 10000),
(84, 18, 10, 36600, 100000, 10000, 20000, 10000),
(85, 18, 11, 24400, 110000, 10000, 10000, 10000),
(86, 18, 12, 12200, 120000, 10000, 0, 10000);

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
  `periodo` int(11) NOT NULL,
  `interes` float NOT NULL,
  `pago_capital` int(11) NOT NULL,
  `cuota` float NOT NULL,
  `saldo_actual` float NOT NULL,
  `monto_pagado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_interes_simple`
--

INSERT INTO `tbl_interes_simple` (`id_interes_simple`, `id_proyecto`, `periodo`, `interes`, `pago_capital`, `cuota`, `saldo_actual`, `monto_pagado`) VALUES
(44, 13, 1, 83.3333, 50, 133.333, 1466.67, 133.333),
(45, 13, 2, 83.3333, 50, 133.333, 1333.33, 266.667),
(46, 13, 3, 83.3333, 50, 133.333, 1200, 400),
(47, 13, 4, 83.3333, 50, 133.333, 1066.67, 533.333),
(48, 13, 5, 83.3333, 50, 133.333, 933.333, 666.667),
(49, 13, 6, 83.3333, 50, 133.333, 800, 800),
(50, 13, 7, 83.3333, 50, 133.333, 666.667, 933.333),
(51, 13, 8, 83.3333, 50, 133.333, 533.333, 1066.67),
(52, 13, 9, 83.3333, 50, 133.333, 400, 1200),
(53, 13, 10, 83.3333, 50, 133.333, 266.667, 1333.33),
(54, 13, 11, 83.3333, 50, 133.333, 133.333, 1466.67),
(55, 13, 12, 83.3333, 50, 133.333, -0.0000305176, 1600),
(56, 14, 1, 1000, 600, 1600, 17600, 1600),
(57, 14, 2, 1000, 600, 1600, 16000, 3200),
(58, 14, 3, 1000, 600, 1600, 14400, 4800),
(59, 14, 4, 1000, 600, 1600, 12800, 6400),
(60, 14, 5, 1000, 600, 1600, 11200, 8000),
(61, 14, 6, 1000, 600, 1600, 9600, 9600),
(62, 14, 7, 1000, 600, 1600, 8000, 11200),
(63, 14, 8, 1000, 600, 1600, 6400, 12800),
(64, 14, 9, 1000, 600, 1600, 4800, 14400),
(65, 14, 10, 1000, 600, 1600, 3200, 16000),
(66, 14, 11, 1000, 600, 1600, 1600, 17600),
(67, 14, 12, 1000, 600, 1600, 0, 19200),
(68, 15, 1, 60000, 18000, 78000, 78000, 78000),
(69, 15, 2, 60000, 18000, 78000, 0, 156000),
(70, 16, 1, 8000, 15600, 23600, 330400, 23600),
(71, 16, 2, 8000, 15600, 23600, 306800, 47200),
(72, 16, 3, 8000, 15600, 23600, 283200, 70800),
(73, 16, 4, 8000, 15600, 23600, 259600, 94400),
(74, 16, 5, 8000, 15600, 23600, 236000, 118000),
(75, 16, 6, 8000, 15600, 23600, 212400, 141600),
(76, 16, 7, 8000, 15600, 23600, 188800, 165200),
(77, 16, 8, 8000, 15600, 23600, 165200, 188800),
(78, 16, 9, 8000, 15600, 23600, 141600, 212400),
(79, 16, 10, 8000, 15600, 23600, 118000, 236000),
(80, 16, 11, 8000, 15600, 23600, 94400, 259600),
(81, 16, 12, 8000, 15600, 23600, 70800, 283200),
(82, 16, 13, 8000, 15600, 23600, 47200, 306800),
(83, 16, 14, 8000, 15600, 23600, 23600, 330400),
(84, 16, 15, 8000, 15600, 23600, 0, 354000),
(85, 17, 1, 20, 32, 52, 468, 52),
(86, 17, 2, 20, 32, 52, 416, 104),
(87, 17, 3, 20, 32, 52, 364, 156),
(88, 17, 4, 20, 32, 52, 312, 208),
(89, 17, 5, 20, 32, 52, 260, 260),
(90, 17, 6, 20, 32, 52, 208, 312),
(91, 17, 7, 20, 32, 52, 156, 364),
(92, 17, 8, 20, 32, 52, 104, 416),
(93, 17, 9, 20, 32, 52, 52, 468),
(94, 17, 10, 20, 32, 52, 0, 520),
(95, 18, 1, 10000, 146400, 156400, 1720400, 156400),
(96, 18, 2, 10000, 146400, 156400, 1564000, 312800),
(97, 18, 3, 10000, 146400, 156400, 1407600, 469200),
(98, 18, 4, 10000, 146400, 156400, 1251200, 625600),
(99, 18, 5, 10000, 146400, 156400, 1094800, 782000),
(100, 18, 6, 10000, 146400, 156400, 938400, 938400),
(101, 18, 7, 10000, 146400, 156400, 782000, 1094800),
(102, 18, 8, 10000, 146400, 156400, 625600, 1251200),
(103, 18, 9, 10000, 146400, 156400, 469200, 1407600),
(104, 18, 10, 10000, 146400, 156400, 312800, 1564000),
(105, 18, 11, 10000, 146400, 156400, 156400, 1720400),
(106, 18, 12, 10000, 146400, 156400, 0, 1876800);

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
(15, 'N', 'A5', 'C5'),
(16, 'NOMBRE1 APELLIDO1', 'tegucigapa', 'ersona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyectos`
--

CREATE TABLE `tbl_proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `periodo` int(5) DEFAULT NULL,
  `interes` float DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL,
  `monto_prestamo` float DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `estado_proyecto` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_proyectos`
--

INSERT INTO `tbl_proyectos` (`id_proyecto`, `id_usuario`, `nombre_proyecto`, `descripcion`, `periodo`, `interes`, `tiempo`, `monto_prestamo`, `fecha_inicio`, `estado_proyecto`) VALUES
(1, 1, 'asdf', 'asdf', 2, 2, 2, 2, NULL, NULL),
(2, 1, 'asd', 'asd', 1, 1, 1, 1, NULL, NULL),
(3, 1, 'A', 'AN', 1, 1, 1, 1, NULL, NULL),
(4, 1, 'hhh', 'asd', 3, 5, 2, 1000, NULL, NULL),
(5, 1, 'A2', 'AN2', 1, 1, 1, 1, NULL, NULL),
(6, 1, 'A3', 'AN3', 10, 10, 10, 10, NULL, NULL),
(7, 1, 'dsds', 'asds', 1, 2, 3, 5, NULL, NULL),
(8, 1, 'Aa', 'ANa', 1, 1, 1, 1, NULL, NULL),
(9, 1, 'A5', 'AN5', 1, 1, 1, 1, NULL, NULL),
(10, 1, 'A25', 'AN25', 1, 1, 1, 1, '2017-04-19', NULL),
(11, 1, 'asdDSA', 'asddsa', 12, 12, 12, 223333, '2017-04-16', NULL),
(12, 1, 'aasd', 'dsa', 12, 12, 12, 12333, '2017-04-27', NULL),
(13, 1, 'prestamo simple', 'asdsd', 12, 5, 3, 1000, '2017-04-16', NULL),
(14, 1, 'hhhweqa', 'dsad', 12, 5, 3, 12000, '2017-04-16', 1),
(15, 2, 'Gabriel', 'este no se', 2, 15, 13, 120000, '2017-04-11', 1),
(16, 2, 'HOLA', 'NOSE', 15, 13, 12, 120000, '2013-03-01', 1),
(17, 2, 'GAbo', 'asdas', 10, 16, 15, 200, '2017-02-03', 1),
(18, 2, 'dania', 'asda', 12, 122, 12, 120000, '1993-01-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultados`
--

CREATE TABLE `tbl_resultados` (
  `id_resultado` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `valor_presente` float DEFAULT NULL,
  `valor_futuro` float DEFAULT NULL,
  `costo_inicial_1` float DEFAULT NULL,
  `valor_anual_1` float DEFAULT NULL,
  `tasa_interes_2` float DEFAULT NULL,
  `costo_inicial_2` float DEFAULT NULL,
  `valor_anual_2` float DEFAULT NULL,
  `costo_capitalizado_1` float DEFAULT NULL,
  `costo_capitalizado_2` float DEFAULT NULL,
  `cantidad_depositada_hoy` float DEFAULT NULL,
  `cantidad_retirar_indefinida` float DEFAULT NULL,
  `cantidad_acumular` float DEFAULT NULL,
  `tiempo_requerido` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_resultados`
--

INSERT INTO `tbl_resultados` (`id_resultado`, `id_proyecto`, `valor_presente`, `valor_futuro`, `costo_inicial_1`, `valor_anual_1`, `tasa_interes_2`, `costo_inicial_2`, `valor_anual_2`, `costo_capitalizado_1`, `costo_capitalizado_2`, `cantidad_depositada_hoy`, `cantidad_retirar_indefinida`, `cantidad_acumular`, `tiempo_requerido`) VALUES
(1, 4, 20.2, 20.2, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 5, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 9, NULL, 20.2, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 12, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 13, NULL, NULL, 800000, 25000, 15, 800000, 25000, 1300000, 966667, NULL, NULL, NULL, NULL),
(7, 14, NULL, NULL, 2000, 2000, 15, 3800, 2100, 42000, 17800, NULL, NULL, NULL, NULL),
(8, 15, 120000, 30720000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 16, 120000, 1.86682e22, 1200, 1500, 400, 600, 300, 12738.5, 675, NULL, NULL, NULL, NULL),
(10, 17, 200, 403199000000000, 1500, 1500, 1700, 1700, 1700, 10875, 1800, NULL, NULL, NULL, NULL),
(11, 18, 120000, 1.43894e30, 1500, 1500, 1560, 1200, 1522, 2729.51, 1297.56, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tasa_retorno`
--

CREATE TABLE `tbl_tasa_retorno` (
  `id_tasa_retorno` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `anio` float NOT NULL,
  `interes` float NOT NULL,
  `saldo_inicial_no_recuperado` float NOT NULL,
  `flujo_efectivo` float NOT NULL,
  `cantidad_recuperada` float NOT NULL,
  `saldo_final_no_recuperado` float NOT NULL,
  `interes_sobre_saldo_no_recuperado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tasa_retorno`
--

INSERT INTO `tbl_tasa_retorno` (`id_tasa_retorno`, `id_proyecto`, `anio`, `interes`, `saldo_inicial_no_recuperado`, `flujo_efectivo`, `cantidad_recuperada`, `saldo_final_no_recuperado`, `interes_sobre_saldo_no_recuperado`) VALUES
(5, 13, 1, 15, 1000, 1000, 850, 1850, 0),
(6, 13, 1, 15, 500, 1000, 925, 1425, 0),
(7, 13, 1, 15, 1000, 500, 350, 1350, 0),
(8, 14, 1, 15, 1000, 500, 350, 1350, 150),
(9, 14, 1, 15, 1050, 5500, 5342.5, 6392.5, 157.5),
(10, 14, 1, 15, 5050, 5500, 4742.5, 9792.5, 757.5);

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
(2, 'AN5', 'PW', 15, 1, '2017-03-18 21:58:27'),
(3, '1', 'sasd', 16, 1, '2017-04-09 21:01:37');

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
-- Indices de la tabla `tbl_tasa_retorno`
--
ALTER TABLE `tbl_tasa_retorno`
  ADD PRIMARY KEY (`id_tasa_retorno`),
  ADD KEY `fk_tasa_retorno_x_proyecto` (`id_proyecto`);

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
  MODIFY `id_interes_compuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_generado`
--
ALTER TABLE `tbl_interes_generado`
  MODIFY `id_interes_generado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_interes_simple`
--
ALTER TABLE `tbl_interes_simple`
  MODIFY `id_interes_simple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tbl_resultados`
--
ALTER TABLE `tbl_resultados`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_tasa_retorno`
--
ALTER TABLE `tbl_tasa_retorno`
  MODIFY `id_tasa_retorno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- Filtros para la tabla `tbl_tasa_retorno`
--
ALTER TABLE `tbl_tasa_retorno`
  ADD CONSTRAINT `tbl_tasa_retorno_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `tbl_proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `tbl_personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuarios_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
