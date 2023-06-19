-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2023 a las 17:21:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `organozacion_eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria`) VALUES
(1501, 'Salón de Eventos Jasso', '50 Personas $1900\r\n100 Personas $3,400\r\n150 Personas $4,900\r\n\r\n\r\nINCLUYE\r\n\r\nMobiliario: sillas y mesas con mantel blanco.\r\n\r\nBaños.\r\n\r\nÁrea de cocina: parrilla con 4 fogones, mesa, 2 hieleras.\r\n\r\n2 mesas para pastel, mesa de dulces y regalos.\r\n\r\n6 horas de renta de salón horario de 9:00am a 10:00pm\r\n\r\nCOSTOS EXTRAS (fuera del paquete)\r\n\r\nInflable  $400\r\nCubre mantel (rojo, naranja, amarillo, verde, azul, rosa) $20 c/u.', '1900', 2),
(1502, 'Salón de fiestas Car''s', 'INCLUYE\r\n\r\nMobiliario para adultos\r\nMobiliario infantil\r\nRockola\r\nPantalla\r\nMesa para pastel\r\nMesa para poner dulces\r\nBaños\r\nFutbolito\r\n\r\nEN LA COCINA\r\nEstufa con gas\r\nParrilla para asar\r\nMesa\r\nHielera\r\nHorno de microondas\r\nDispensador de agua\r\nRefrigerador\r\n\r\nÁREA DE JUEGOS INFANTILES(para menores de 4 años)\r\nCarritos\r\nMontables\r\nCasitas\r\nMecedora\r\nResbaladillas\r\nBicicleta y mas...\r\n\r\nJUEGO LABERINTO(para mayores de 4 años)\r\nPuente\r\nResbaladilla\r\nAlberca de pelotas\r\nTunel etc.\r\n\r\nCON ESTACIONAMIENTO ', '3900', 2),
(1503, 'Finca Don Chema', 'INCLUYE\r\n\r\nAlberca climatizada\r\nPista iluminada\r\nBocina\r\nMobiliario 100 personas\r\nCocina\r\n\r\n5 HORAS DE SERVICIO\r\n\r\nFin de semana $6800.00\r\nEntre semana  $4500.00', '6800', 2),
(1504, 'Salón Pal-mar', 'INCLUYE \r\n\r\nManteles y cubremanteles.\r\nParrilla de gas estacionario.\r\nHorno de microondas.\r\nRefrigerador,tajar,barra.\r\nBocina con amplificadores.\r\nBaños independientes .\r\nMitad techado y Mitad abierto.\r\nInflable de 3x4 metros.\r\n\r\nPARA 130 PERSONAS', '4900', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
