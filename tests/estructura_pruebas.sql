CREATE DATABASE IF NOT EXISTS `inventariopruebas`
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE `inventariopruebas`;

-- Estructura de la tabla productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;