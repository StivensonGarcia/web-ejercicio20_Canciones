# web-ejercicio20_Canciones
Aplicación  MVC con PHP - APACHE - MYSQL - ORM

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Archivos de la BD es el siguiente:
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-04-2023 a las 01:23:45
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `music`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

DROP TABLE IF EXISTS `canciones`;
CREATE TABLE IF NOT EXISTS `canciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `ritmo` varchar(50) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `posicionenalbum` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `banda` varchar(100) DEFAULT NULL,
  `interprete` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `fechalanzamiento` date DEFAULT NULL,
  `usuariocc` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuariocc` (`usuariocc`)
) ENGINE=InnoDB AUTO_INCREMENT=434344 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cc` int NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`usuariocc`) REFERENCES `usuarios` (`cc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Nombre de documento donde se encuentran la documentacion de esta aplicacion es 
stivenson_garcia_ romero_webdev_act-1-2023-1





