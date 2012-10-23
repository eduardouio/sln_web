-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2012 a las 04:22:37
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `slnecc_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `id_contenido` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_pagina` smallint(5) unsigned NOT NULL,
  `titulo_articulo` varchar(200) NOT NULL,
  `contenido_articulo` mediumtext,
  `actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contenido`),
  KEY `idx_contenido` (`contenido_articulo`(200),`titulo_articulo`),
  KEY `contenido_pagina` (`id_pagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id_contenido`, `id_pagina`, `titulo_articulo`, `contenido_articulo`, `actualizacion`) VALUES
(1, 5, 'Equipos', 'Contamos con equipos fabricados y diseñados con capacidad de responder a las necesidades decada proceso y favoreciendo a la disminución del impacto ambiental de sus operaciones.Generamos mejores resultados en procesos de: <p><ul><li>Dewatering<li>Tratamiento químico al lodo de perforación<li>Minimizar desechos líquidos y sólidos</li><li>Control de ruido </li><li>Rig Up </li><li>Optimización del área de trabajo</li></ul></p>', '2012-08-20 03:17:02'),
(2, 5, 'CENTRÍFUGA HV 518', '\nDimensiones: 14´´x56´´\nCaracterísticas: Centrífuga de alta velocidad y alto volumen. Mando principal de velocidad variable\naccionado por un motor de 50 hp y La velocidad diferencial es accionado por un motor de 20 hp,\nvaria de -15 a + 85 rpm. Fuerza G 2100 g´s, velocidad 3250 rpm, bowll y conveyor en acero\ninoxidable. Alta velocidad 3200 rpm, velocidad estándar 2500 rpm y alto volumen 1900 rpm.\nCapacidad de procesamiento 150, 200 y 250 gpm respectivamente. Gear box planetario, relación\n57:1. Peso 5680 lbs.\n', '2012-07-21 00:04:39'),
(3, 5, 'Bombas Centrífugas:', '\nBombas Centrífugas 4x3: Motor 15 Hp.\nBombas Centrífugas 6x5: Motor 75 Hp\nMarca MCM\n', '2012-07-21 00:04:39'),
(4, 5, 'FAST TANK', '\nCapacidad: 500 bbls, Marca SLN, año 2009.\n', '2012-07-21 00:04:39'),
(5, 5, 'Unidad de Mezcla y Dosificación', '\nCapacidad: 24 bbls, Marca SLN, año 2009.\n', '2012-07-21 00:04:39'),
(6, 5, 'Unidad de Deshidratación-Sedimentación', '\nCompuesta por: (2) tanques para preparar polímero de 49 bbls c/u, (1) tanque para lodo de 66\nbbls, (2) tanques para recepción de agua de 19.2 bbls c/u, (1) floculador-separador vertical para\nseparar materiales de diferente densidad de 16.2 bbls, (1) bomba centrífuga 4x3 para\ntransferencia de agua, (1) bomba centrífuga 4x3 para alimentar polímero a las centrífugas\ndecantadoras.(1) Stand bifuncional.(1)caseta de mando eléctrico.\nMarca SLN, plugs Appleton, cajas eléctricas anti explosión.\n\n', '2012-07-21 00:04:39'),
(7, 5, 'GENERADOR 375KVA', '\nGenerador de 375 KVA Regulación mecánica Chasis mocanosoldado con suspensiones anti\nvibración Disyuntor de potencia Silenciador de 9 dB Motor de arranque y alternador de carga de\n12 Voltios Incorpora Alarmas contra fallos, etc.\n', '2012-07-21 00:04:39'),
(8, 5, 'Camper Laboratorio:', '\nCamper Laboratorio-oficina de 20 Pies.\n', '2012-07-21 00:04:39'),
(9, 5, 'Equipo de Laboratorio', '\n<li>Hach DR 2800, año 2009\n<li>Hach DRB 2500, Digestor COD\n<li>Hach Sensiun 156\n<li>Hach Inmunysasy\n<li>Determinación cualitativa TPH\n<li>Determinación cualitativa y cuantitativa de parámetros físico químicos de líquidos y sólidos\n\n', '2012-07-21 00:04:39'),
(10, 5, 'MUFLA GRIEFE', '\n<li>Determinación de humedad en sólidos, se facilita por\n<li>Control por termostato\n<li>Protección para temperaturas altas\n<li>Exteriores en acero inoxidable.\n\n', '2012-07-21 00:04:39'),
(11, 5, 'RETORTA', '\nDetermina % de agua, sólidos y aceite. Kit para 10 ml controlado con termostato 115 Volt, 350\nWatts.\n', '2012-07-21 00:04:39'),
(12, 1, 'Misión', 'Suministrar a nuestros Clientes, servicios, procesos y productos de la más alta calidad a través de soluciones innovadoras, costos razonables, respetando el medio ambiente y priorizando la salud yseguridad de nuestro personal y la comunidad circunscrita a las áreas de operaciones.', '2012-08-19 02:08:58'),
(13, 1, 'Visión', 'Ser una Empresa confiable y moderna fundamentada en principios de eficiencia, eficacia,protección ambiental y aseguramiento de la calidad en el manejo de sus herramientas, ofreciendoservicios confiables, que marquen la diferencia en el mercado Industrial y Petrolero. Manejandonuestros negocios y operaciones con el uso de prácticas empresariales seguras, limpias yresponsables, a través de la participación de nuestro talento humano y socios motivadosque garantice su expansión en la próxima década a nivel internacional.', '2012-08-19 02:09:11'),
(14, 1, 'Nuestro Proceso', 'Brindar soluciones alternativas adaptables a procesos de nuestros clientes optimizando recursos ycumplir con la normativa ambiental y legal vigente.', '2012-08-04 12:31:42'),
(15, 1, 'Nuestro Éxito', 'Cumplir con los clientes a costos que represente su valor real y entregar productos de calidad queasegure la satisfacción de sus necesidades.', '2012-08-19 02:09:04'),
(16, 1, 'Nuestro Compromiso', 'Salud, seguridad, calidad y cuidado del medio ambiente', '2012-08-19 02:09:22'),
(17, 1, 'Valores', ' <ul><li>Servicio personalizado</li><li>Compromiso Social y Ambiental</li><li>Respeto Honestidad</li><li>Cumplir con el Marco Legal</li><li>Mejoramiento continuo</li><li>Crear un ambiente seguro y saludable con nuestros trabajadores y contratistas</li><li>Compromiso permanente con nuestros clientes</li></ul>', '2012-08-04 12:28:14'),
(19, 7, 'Servicios', 'SLN SÓLIDOS Y LODOS NACIONALES S.A. está en capacidad de realizar los siguientes servicios: <p> <ul> <li>Perforacion de Pozos</li> <li>Reacondicionamiento de Pozos</li> <li>Fluidos de Perforación y Completación</li> <li>Manejo y tratamiento de cortes de perforación</li> <li>Biorremediación</li> <li>Limpieza de tanques</li> <li>Transporte y disposición de cortes</li> <li>Tratamiento de aguas residuales</li> <li>Mejoramiento químico en el tratamiento de desechos</li> <li>Análisis de aguas, suelos y gases.</li> <li>Renta de bombas centrifugas MCM</li> <li>Control de Sólidos, etc.</li> <li>Renta de equipos complementarios: <ul> <li>Camiones de Vacio,</li> <li>Generadores 375 KVA,</li> <li>Bombas Centrifugas de 15 y 75 hp</li> </ul> </li> </ul> </p>', '2012-07-21 00:04:39'),
(32, 6, 'Procesos', 'Proceso de control de sólidos: Parte del desarrollo óptimo de un proyecto de perforación es el Control de Sólidos mismo que facilita el cuidado de los fluidos y su disposición final. SLN cuenta con un óptimo diseño de equipos y procesos complementarios a ser utilizados que minimicen posteriores impactos ambientales.', '2012-08-20 03:20:43'),
(33, 6, 'Dewatering', ' \nSLN SÓLIDOS Y LODOS NACIONALES, ha desarrollado su unidad de dewatering-sedimentación que\npermite optimizar la separación de fases sólida-líquida ventajas que incorpora son:\n<li>Capacidad suficiente para el manejo de fluidos provenientes de trampas de grasas y\ncellar.\n<li>Permite el manejo de cortes más secos.\n<li>Elimina el trabajo en espacios confinados.\n<li>Equipo que incorpora floculador vertical, stand bifuncional y tanques sedimentadores,\npermiten la sedimentación de sólidos finos, recuperar mayor cantidad de crudo o aceites\nemulsificados,\n<li>Permite acoplarse a las unidades de perforación para preparar píldoras de lodo para ser\nincorporadas al sistema activo.\n<li>Agitadores de flujo axial que evitan la formación de grumos u ojos de pescado en la\ndisolución de polímeros, retornando al sistema activo fluidos más limpios\n<li>Equipo que maneja consola de control a prueba de explosión, que controla la distribución\ny corte de energía desde un solo sitio, evita cortes desde generador o SCR.\n<li>Equipo de armado rápido y compacto\n', '2012-08-20 03:20:50'),
(35, 3, 'Política De Gestión Integrada de Calidad, Seguridad y Salud Ocupacional', 'SLN Sólidos y Lodos Nacionales S.A. es una empresa Ecuatoriana dedicada a la prestación de servicios de exploración, control de sólidos y tratamiento de efluentes, en el área industrial y petrolera; cumpliendo los requerimientos de nuestros clientes, contribuyendo a la optimización y asignación de nuestros recursos, orientado a la Calidad, Salud y Seguridad de nuestrosservicios a través de prevención de accidentes y enfermedades ocupacionales con base al cumplimiento de requisitos legales y reglamentarios en las áreas donde operemos, con personal altamente motivado, buscando la mejora continua de nuestro Sistema de Gestión Integrado y la rentabilidad de la organización </p> <b>OBJETIVOS DE GESTIÓN INTEGRADA CALIDAD, SEGURIDAD Y SALUD OCUPACIONAL</b> <p> <ul> <li>Satisfacer los requerimientos establecidos por el cliente, mediante el cumplimiento de las especificaciones, los tiempos de entrega y normas de SSO. </li> <li>Aumentar la rentabilidad por proyectopara que satisfaga las expectativas de los inversionistas.</li> <li>Capacitar y motivar continuamente el personal, con miras a lograr la calidad del trabajo y del servicio, así como también crear n sentido de pertenencia en ellos de modo que se genere un interés constante y la concientización del personal sobre la importancia del rabajo eficaz y eficiente.</li> <li>Optimizar la capacidad operativa de los equipos, para obtener mejor desempeño de la inversión en maquinaria, equipo y personal en los diferentes proyectos que la organización pueda participar.</li> <li> Disminuir mensualmente a cero incidentes y morbilidad en las operaciones en las que participan los empleados de SLN, ogrando mayor confianza en el cliente, con las medidas de seguridad y salud ocupacional que se tienen implementadas.</li> </ul> </p>', '0000-00-00 00:00:00'),
(36, 4, 'Certificacione de Calidad y Seguridad', 'Solidos y Lodos Nacionales esta muy comprometida con sus clientes', '0000-00-00 00:00:00'),
(37, 5, 'HH5500', '\nDimensiones:\n16´´ x 55,56´´\nCaracterísticas:\nFuerza G hasta 3110 G´s, máxima velocidad del bowll 3700 rpm, máxima velocidad del conveyor\n3630 rpm, motores de 60hp Main drive y 20 hp, back drive, bowll y conveyor en acero inoxidable,\nGear box planetario (GB 350) con frecuencia controlada en el back drive relación 53:1. Capacidad\nde procesamiento 240 gpm. Alta velocidad y capacidad, Peso aproximado 8000 lbs.\n', '2012-08-20 03:17:06'),
(38, 6, 'Sistema De Tratamiento De Aguas', ' \nLos fluidos líquidos provenientes del dewatering o producto de las operaciones asociadas a la\nperforación son tratadas en nuestro sistema compuesto de:\n<li>Floculador vertical\n<li>Tanque de mezcla química de 24 bbls\n<li>Dos fast tank de 500 bbls c/u\n<li>Laboratorio para análisis de parámetros físico químicos\nSistema De Tratamiento Y Disposición De Cortes:\nUtilizamos técnicas y procedimientos aprobados por entidades de regulación ambiental y están\nencaminadas a:\n<li>Eliminación de problemas de metales pesados e hidrocarburos residuales.\n<li>Usar productos que favorezcan los procesos de tratamiento y degradación\n<li>Disminuir áreas de confinamiento.\n<li>Cumplir con las regulaciones ambientales\n', '2012-08-20 03:19:51'),
(39, 8, 'HSEQ', 'SLN SÓLIDOS Y LODOS NACIONALES S.A. está comprometida con el sistema de control de salud, seguridad y medio ambiente que cumpla con las mejores prácticas para prevenir, eliminar y minimizar los riesgos en el desarrollo de nuestras operaciones. La Gerencia de SLN proveerá los recursos necesarios para el desarrollo y la promoción continúa de nuestro sistema teniendo en cuenta la protección del medio ambiente, la seguridad y salud de nuestros empleados, clientes contratistas y la comunidad. <br/> Para ello haremos nuestros mejores esfuerzos y asi: <p> Mantener una cultura de mejora continua orientada a perfeccionar nuestros procesos que permita brindar un servicio eficiente, confiable y apegado al cumplimiento del marco legal con el propósito de generar un liderazgo en la provisión de productos y servicios asegurando un crecimiento sostenible en el mercado. </p> Establecer un ambiente de trabajo dónde se reconozca la importancia de la Salud, Seguridad y cuidado del Medio Ambiente <p> Identificar y evaluar continuamente impactos ambientales y riesgos relacionados con la seguridad y salud de los empleados derivados de la ejecución de nuestras actividades. </p> <p> El departamento de HSE es el encargado de controlar, vigilar e implementar programas de gestión y velará el cumplimiento de programas y objetivos en cuanto al Sistema de Salud, Seguridad y Medio Ambiente </p> Todos los empleados son responsables de la aplicación de las políticas y el cumplimiento de las obligaciones relacionadas a su actividad y el reporte oportuno de los peligros. <p> <b> "Trabajaremos en equipo, para ser los mejores en nuestra línea de servicios asumiendo el compromiso de cumplir o exceder con los requerimientos y exigencias de nuestros clientes para elevar su productividad y rentabilidad" </b> </p>', '0000-00-00 00:00:00'),
(40, 9, 'Bienvenidos.', '<b>La información de esta pagina se encuentra en desarrollo, disculpe las molestias :)</b>', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `id_pagina` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_pagina` varchar(45) DEFAULT NULL,
  `introduccion` text NOT NULL,
  `keywords` varchar(1000) NOT NULL DEFAULT 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion',
  `actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pagina`),
  UNIQUE KEY `nombre_pagina` (`nombre_pagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `nombre_pagina`, `introduccion`, `keywords`, `actualizacion`, `link`) VALUES
(1, 'Home', 'slider\r\n', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion', '2012-08-19 20:13:28', 'pag_01'),
(2, 'Nosotros', 'Compañía Ecuatoriana de Servicios fundada en Noviembre de 2008 con domicilio en la ciudad de Quito.\r\n\r\nContamos con servicios de venta e Ingeniería especializada y nuestro  propósito es ofrecer soluciones Integradas apoyadas en tecnología y nuevos productos que faciliten el manejo  técnico y ambiental en el sector Industrial y Petrolero en el marco de cumplimiento de los estándares exigidos y ayudando a las Empresas a alcanzar su rentabilidad y crecimiento.', 'Gestion Sln, empresa de Servicios petroleros ecuador, sln , sólidos y lodos nacionales', '2012-08-19 20:13:37', 'pag_02'),
(3, 'Políticas', '<p><b>POLÍTICA DE GESTIÓN INTEGRADA CALIDAD, SEGURIDAD Y SALUD OCUPACIONAL</b></p>\r\n<p>\r\nSLN Sólidos y Lodos Nacionales S.A. es una empresa Ecuatoriana dedicada a la prestación de servicios de exploración, control de sólidos y tratamiento de efluentes, en el área industrial y petrolera; cumpliendo los requerimientos de nuestros clientes, contribuyendo a la optimización y asignación de nuestros recursos, orientado a la Calidad, Salud y Seguridad de nuestrosservicios a través de prevención de accidentes y enfermedades ocupacionales con base al cumplimiento de requisitos legales y reglamentarios en las áreas donde operemos, con personal altamente motivado, buscando la mejora continua de nuestro Sistema de Gestión Integrado y la rentabilidad de la organización\r\n </p>\r\n<b>OBJETIVOS DE GESTIÓN INTEGRADA CALIDAD, SEGURIDAD Y SALUD OCUPACIONAL</b>\r\n\r\n<p>\r\n<ul>\r\n\r\n    <li>Satisfacer los requerimientos establecidos por el cliente, mediante el cumplimiento de las especificaciones, los tiempos de entrega y normas de SSO. </li>\r\n\r\n    <li>Aumentar la rentabilidad por proyectopara que satisfaga las expectativas de los inversionistas.</li>\r\n\r\n<li>Capacitar y motivar continuamente el personal, con miras a lograr la calidad del trabajo y del servicio, así como también crear n sentido de pertenencia en ellos de modo que se genere un interés constante y la concientización del personal sobre la importancia del rabajo eficaz y eficiente.</li>\r\n\r\n    <li>Optimizar la capacidad operativa de los equipos, para obtener mejor desempeño de la inversión en maquinaria, equipo y personal en los diferentes proyectos que la organización pueda participar.</li>\r\n\r\n    <li> Disminuir mensualmente a cero incidentes y morbilidad en las operaciones en las que participan los empleados de SLN, ogrando mayor confianza en el cliente, con las medidas de seguridad y salud ocupacional que se tienen implementadas.</li>\r\n\r\n</ul>\r\n</p>', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion', '2012-08-19 20:13:43', 'pag_03'),
(4, 'Certificación', 'Información a desarrollar\r\n', 'empresa certificado iso 9001:2008, certificacion de calidad empresa sln ecuador, empresa ecuatoriana certificada para servicios petroleros, solidos y lodos nacionales ohsas 180001:2007, sln certificada', '2012-08-19 20:13:48', 'pag_04'),
(5, 'Equipos', 'Contamos con equipos fabricados y diseñados con capacidad de responder a las necesidades de\r\ncada proceso y favoreciendo a la disminución del impacto ambiental de sus operaciones.\r\nGeneramos mejores resultados en procesos de: <p>\r\n<ul>\r\n<li>Dewatering\r\n<li>Tratamiento químico al lodo de perforación\r\n<li>Minimizar desechos líquidos y sólidos</li>\r\n<li>Control de ruido </li>\r\n<li>Rig Up </li>\r\n<li>Optimización del área de trabajo</li>\r\n</ul></p>', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion, desechos liquidos, control de ruido, servicios petroleros ecuador', '2012-08-19 20:13:55', 'pag_05'),
(6, 'Procesos', 'Proceso de control de sólidos:\r\nParte del desarrollo óptimo de un proyecto de perforación es el Control de Sólidos mismo que facilita el cuidado de los fluidos y su disposición final. SLN cuenta con un óptimo diseño de equipos\r\ny procesos complementarios a ser utilizados que minimicen posteriores impactos ambientales.', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion', '2012-08-19 20:13:59', 'pag_06'),
(7, 'Servicios', 'SLN SÓLIDOS Y LODOS NACIONALES S.A. está en capacidad de realizar los siguientes servicios:\r\n<p>\r\n<ul>\r\n<li>Perforacion de Pozos</li>\r\n<li>Reacondicionamiento de Pozos</li>\r\n<li>Fluidos de Perforación y Completación</li>\r\n<li>Manejo y tratamiento de cortes de perforación</li>\r\n<li>Biorremediación</li>\r\n<li>Limpieza de tanques</li>\r\n<li>Transporte y disposición de cortes</li>\r\n<li>Tratamiento de aguas residuales</li>\r\n<li>Mejoramiento químico en el tratamiento de desechos</li>\r\n<li>Análisis de aguas, suelos y gases.</li>\r\n<li>Renta de bombas centrifugas MCM</li>\r\n<li>Control de Sólidos, etc.</li>\r\n<li>Renta de equipos complementarios:\r\n<ul>\r\n<li>Camiones de Vacio,</li>\r\n<li>Generadores 375 KVA,</li>\r\n<li>Bombas Centrifugas de 15 y 75 hp</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</p>', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion', '2012-08-19 20:14:04', 'pag_07'),
(8, 'HSEQ', 'SLN SÓLIDOS Y LODOS NACIONALES S.A. está comprometida con el sistema de control de salud, seguridad y medio ambiente que cumpla con las mejores prácticas para prevenir, eliminar y minimizar los riesgos en el desarrollo de nuestras operaciones. La Gerencia de SLN proveerá los recursos necesarios para el desarrollo y la promoción continúa de nuestro sistema teniendo en cuenta la protección del medio ambiente, la seguridad y salud de nuestros empleados, clientes contratistas y la comunidad.\r\n<br/>\r\nPara ello haremos nuestros mejores esfuerzos y asi:\r\n<p>\r\nMantener una cultura de mejora continua orientada a perfeccionar nuestros procesos que permita brindar un servicio eficiente, confiable y apegado al cumplimiento del marco legal con el propósito de generar un liderazgo en la provisión de productos y servicios asegurando un crecimiento sostenible en el mercado.\r\n</p>\r\nEstablecer un ambiente de trabajo dónde se reconozca la importancia de la Salud, Seguridad y cuidado del Medio Ambiente\r\n<p>\r\nIdentificar y evaluar continuamente impactos ambientales y riesgos relacionados con la seguridad y salud de los empleados derivados de la ejecución de nuestras actividades.\r\n</p>\r\n<p>\r\nEl departamento de HSE es el encargado de controlar, vigilar e implementar programas de gestión y velará el cumplimiento de programas y objetivos en cuanto al Sistema de Salud, Seguridad y Medio Ambiente\r\n</p>\r\nTodos los empleados son responsables de la aplicación de las políticas y el cumplimiento de las obligaciones relacionadas a su actividad y el reporte oportuno de los peligros.\r\n<p>\r\n<b>\r\n"Trabajaremos en equipo, para ser los mejores en nuestra línea de servicios asumiendo el compromiso de cumplir o exceder con los requerimientos y exigencias de nuestros clientes para elevar su productividad y rentabilidad"\r\n</b>\r\n</p>', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion', '2012-08-19 20:14:08', 'pag_08'),
(9, 'Proyectos', '<b>La información de esta pagina se encuentra en desarrollo, disculpe las molestias :)</b>\r\n', 'tratamiento de solidos, tratamiento de agua, dewatering, perforacion', '2012-08-19 20:14:12', 'pag_09'),
(10, 'Contactos', 'Estareemos gustosos de atenderle como a usted lo atienden en su casa', 'Contactenos, Solidos y lodos Ecuador, Servicio de Perforacion de pozos Ecuador', '2012-08-19 20:14:19', 'pag_10');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `contenido_pagina` FOREIGN KEY (`id_pagina`) REFERENCES `pagina` (`id_pagina`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
