-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tienda
CREATE DATABASE IF NOT EXISTS `tienda` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tienda`;

-- Volcando estructura para tabla tienda.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tienda.usuarios: ~12 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `telefono`, `fecha_registro`) VALUES
	(3, 'Harry Medina', 'medinahg80@gmail.com', '0424-6906437', '2025-03-12 15:32:57'),
	(4, 'Diego Medina', 'diegoamedinav@gmail.com', '0414-6920733', '2025-03-12 15:33:49'),
	(5, 'Diego Medina', 'diegoamedina2004@hotmail.com', '0412-1619156', '2025-03-12 15:38:31'),
	(6, 'Gabriela Mejias', 'gabrielamejias@gmail.com', '0412-3213213', '2025-03-12 17:09:11'),
	(7, 'Jose Rodriguez', 'josebest5243@gmail.com', '0412-1020304', '2025-03-12 17:43:33'),
	(8, 'Andrea Reyes', 'profe.andreareyes@gmail.com', '0414-6819560', '2025-03-30 17:19:51'),
	(9, 'Emeregildo Montiel', 'emeregildomontiel@gmail.com', '0414-5432545', '2025-03-30 17:20:27'),
	(10, 'erterwt', 'rewtwert@gmail.com', '2342-4234234', '2025-03-30 17:21:32'),
	(11, 'sfgsdfgsdfg', 'sdgsdfgsd@gmail.com', '3124-1241221', '2025-03-30 17:24:15'),
	(12, 'dsfsdfsdf', 'sdfsdfs@gmail.com', '3213-1212312', '2025-03-30 17:27:09'),
	(13, 'gsfdgdfsg', 'gfsdgsdfgsd@gmail.com', '3432-4234235', '2025-03-30 17:33:51'),
	(14, 'trhdgdfsgdfsgds', 'gfdsgdsgdsfgdg@hotmail.com', '4892-3489238', '2025-03-30 17:34:33');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
