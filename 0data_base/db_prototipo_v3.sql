# Host: localhost  (Version 5.7.33)
# Date: 2022-06-13 15:43:07
# Generator: MySQL-Front 6.1  (Build 1.21)


#
# Structure for table "login"
#

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "login"
#

INSERT INTO `login` VALUES (1,'Donato','drakho','123456');

#
# Structure for table "postulantes"
#

CREATE TABLE `postulantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ape_paterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ape_materno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ci` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT 'Sin Evaluar',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "postulantes"
#

INSERT INTO `postulantes` VALUES (1,'Dante Diego','Ortega','Cortez','76346578','34','67874576','Evaluado'),(2,'Claudia','Mendieta','Palermo','65346789','30','78964576','Evaluado'),(3,'Dario Pablo','Nina','Guzman','43658756','43','87563456','Evaluado'),(4,'Carmen','Hinojosa','Vidal','54347689','32','76543289','Evaluado'),(5,'Boris Gustavo','Cori','Ramirez','54673467','32','78654736','Evaluado'),(7,'Sergio Antonio','Figueroa','Hinojosa','54346578','28','69873468','Evaluado'),(8,'Susana Caro','Jimenez','Mendieta','4365346','33','67346590','Evaluado'),(9,'Mariela ','Clavijo','Poma','34657689','33','76879653','Sin Evaluar'),(10,'Keneth','Gongora','Arduz','4657868','29','67342188','Sin Evaluar');

#
# Structure for table "evaluacion"
#

CREATE TABLE `evaluacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_postulante` int(11) NOT NULL,
  `vcd_fap` int(11) NOT NULL DEFAULT '0',
  `vcd_fas` int(11) NOT NULL DEFAULT '0',
  `vcd_elg` int(11) NOT NULL DEFAULT '0',
  `vcd_ele` int(11) NOT NULL DEFAULT '0',
  `vcd_cte` int(11) NOT NULL DEFAULT '0',
  `vcd_suma` int(11) NOT NULL DEFAULT '0',
  `vcd_salida` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `vcb_com` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `vcb_cdd` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `vcb_ini` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `vcb_tre` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `vcb_int` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `vcb_suma` int(11) NOT NULL DEFAULT '0',
  `vcb_salida` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `resultado` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_34` (`id_postulante`),
  CONSTRAINT `FK_32` FOREIGN KEY (`id_postulante`) REFERENCES `postulantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "evaluacion"
#

INSERT INTO `evaluacion` VALUES (5,1,30,10,10,0,30,80,'Habilitado','Optimo','Optimo','Optimo','Optimo','Optimo',452,'Excelente','Aceptado'),(6,2,30,10,10,20,30,100,'Habilitado','Optimo','Optimo','Optimo','Optimo','Alto',447,'Excelente','Aceptado'),(7,3,30,0,10,0,30,70,'Habilitado','Alto','Medio','Alto','Optimo','Medio',282,'Observado','Observado'),(8,4,30,10,10,20,30,100,'Habilitado','Optimo','Optimo','Optimo','Optimo','Optimo',469,'Excelente','Aceptado'),(9,5,30,10,10,0,30,80,'Habilitado','Optimo','Medio','Alto','Bajo','Optimo',298,'Observado','Observado'),(11,7,30,0,0,20,0,50,'Inhabilitado','Medio','Bajo','Medio','Bajo','Bajo',99,'Observado','Rechazado'),(12,8,30,10,10,20,0,70,'Habilitado','Medio','Alto','Optimo','Medio','Alto',275,'Observado','Observado');

#
# Structure for table "vcb_notas"
#

CREATE TABLE `vcb_notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL DEFAULT '0',
  `com` int(11) NOT NULL DEFAULT '0',
  `cdd` int(11) NOT NULL DEFAULT '0',
  `ini` int(11) NOT NULL DEFAULT '0',
  `tre` int(11) NOT NULL DEFAULT '0',
  `inte` int(11) NOT NULL DEFAULT '0',
  `suma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_vcb` (`id_post`),
  CONSTRAINT `FK_vcb` FOREIGN KEY (`id_post`) REFERENCES `postulantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "vcb_notas"
#

INSERT INTO `vcb_notas` VALUES (1,1,91,79,98,85,99,452),(2,2,94,88,99,100,66,447),(3,3,61,39,70,79,33,282),(4,4,97,91,97,84,100,469),(5,5,86,43,61,13,95,298),(7,7,36,15,34,10,4,99),(8,8,36,59,82,32,66,275);
