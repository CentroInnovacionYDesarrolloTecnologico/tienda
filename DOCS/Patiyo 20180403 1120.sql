-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.27


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema Patiyotl
--

CREATE DATABASE IF NOT EXISTS Patiyotl;
USE Patiyotl;

--
-- Definition of table `negocios`
--

DROP TABLE IF EXISTS `negocios`;
CREATE TABLE `negocios` (
  `clave_negocio` int(250) NOT NULL AUTO_INCREMENT,
  `Negocio` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Categoria` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Contrasena` varchar(250) CHARACTER SET latin1 NOT NULL,
  `Imagen` longblob,
  `Estatus` char(1) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`clave_negocio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `negocios`
--

/*!40000 ALTER TABLE `negocios` DISABLE KEYS */;
INSERT INTO `negocios` (`clave_negocio`,`Negocio`,`Categoria`,`Contrasena`,`Imagen`,`Estatus`) VALUES 
 (1,'Betito','Abarrotes','12345',NULL,'1'),
 (2,'Juanga','Farmacia','12345',NULL,'1'),
 (3,'Piña','Tlapaleria','12345',NULL,'0');
/*!40000 ALTER TABLE `negocios` ENABLE KEYS */;


--
-- Definition of table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `codigo` double NOT NULL AUTO_INCREMENT,
  `Negocio` int(250) NOT NULL,
  `Producto` varchar(200) NOT NULL,
  `Precio` double NOT NULL,
  `Imagen` longblob,
  PRIMARY KEY (`codigo`),
  KEY `Negocio` (`Negocio`),
  CONSTRAINT `x` FOREIGN KEY (`Negocio`) REFERENCES `negocios` (`clave_negocio`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`codigo`,`Negocio`,`Producto`,`Precio`,`Imagen`) VALUES 
 (1,1,'Galletas',13,NULL),
 (2,2,'Loperamida',150,NULL),
 (3,1,'Refresco 3L',25,NULL),
 (4,1,'Paleta',2,NULL),
 (5,1,'Papas',10,NULL),
 (6,1,'Lata de atun',12,NULL),
 (7,1,'Chicles',1,NULL),
 (8,1,'Paquete de Salchicas',15,NULL),
 (9,1,'Huevo 12pz',12,NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contra` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_p` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido_m` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuarios`,`Usuario`,`contra`,`nombre`,`apellido_p`,`apellido_m`) VALUES 
 (1,'bolillo','$2y$10$8tCrVF2jwJ8fa7cCvDZN1eWFRZDq32NDjmT9ghJc6y8TOSDeA3lku','Luis Angel','Rodriguez','Perez');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
