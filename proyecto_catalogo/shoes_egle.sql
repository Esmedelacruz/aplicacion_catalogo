-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2015 a las 07:47:52
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `shoes_egle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`) VALUES
('usuario', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatos`
--

CREATE TABLE IF NOT EXISTS `zapatos` (
  `clave_zapato` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `color_disponible` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `talla_disponible` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`clave_zapato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=63 ;

--
-- Volcado de datos para la tabla `zapatos`
--

INSERT INTO `zapatos` (`clave_zapato`, `modelo`, `marca`, `color_disponible`, `precio`, `descripcion`, `talla_disponible`) VALUES
(1, 'PISA-33-0125MX', 'US Polo Assn', 'MD', '460', 'tenis deportivos color morado con suela blanca y logo incluido', '22.5 a 26'),
(2, 'SW98004', 'Supra', 'MN', '1300', 'tenis en forma de bota, suela blanca y logo de Supra incluido. ', '23 a 26'),
(3, 'ADJS300080-GFC', 'Dc Shoes', 'GR', '800', 'tenis color gris con detalles en color menta,suela color blanca y logo incluido.', '23 a26'),
(4, 'ADJS300095-TVP', 'Dc Shoes', 'MT', '900', 'tenis con figuras de navidad,suela y agujetas blancas,logo inluido', '23 a 26'),
(5, 'VN-0ZSOGHY', 'Vans', 'VN', '600', 'vans con suela y agujetas blancas y logo incluido', '22 a 26'),
(6, '356754-04', 'Puma', 'BLRS', '400', 'tenis deportivos con suela delgada y un pequeño puma en la parte de enfrente.', '23 a 26.5'),
(7, '305527-01', 'Puma', 'NGGR', '500', 'tenis deportivos con detalles en rosa y logo incluido.', '22 a 26'),
(8, '357909-05', 'Puma', 'MNAZVR', '750', 'tenis para correr, con suela en blanco y amarillo, logo incluido.', '22 a 25'),
(9, '195361', 'Reebok', 'NG', '560', 'los tenis en su totalidad son negros y tienen el logo incluido.', '22.5 a26'),
(10, 'V62138', 'Reebok', 'GRRS', '760', 'tenid deportivos con suela negro con rosa y blanco.', '23 a 26'),
(11, '93617-596', 'K-Swiss', 'MDBL', '600', 'Tenis deportivos con suela y agujetas en color blanco', '22-26'),
(12, 'M434997', 'Rebook', 'NG', '550', 'Tenis deportivos con detalles en color menta y blanco.', '22.5 a 25'),
(13, 'M43499', 'Rebook', 'GRRSBL', '560', 'Tenis deportivos.', '23 a 26'),
(14, 'M48883', 'Rebook', 'NGPL', '300', 'Tenis deportivos con detalles en color plata y logo incluido.', '23 a 26'),
(15, 'V55970', 'Rebook', 'BLPPL', '700', 'Tenis deportivos totalmente blancos con logo incluido.', '23 a 26'),
(16, 'w57599', 'Rebook', 'BLFSAM', '800', 'Tenis para correr.', '22 a 24.5'),
(17, 'M47544', 'Rebook', 'GRRS', '765', 'Tenis para correr.', '23 a 26'),
(18, '631635-102', 'Nike', 'BLNG', '1800', 'Tenis con agujetas negras y logo incluido.', '22 a 26'),
(19, '631635-010', 'Nike', 'NGBL', '1850', 'Tenis blancos con la palomita negra y logo incluido en color negro.', '22 a 26'),
(20, '361635-512', 'Nike', 'LLBL', '1900', 'Tenis con logo incluido.', '22 a 26'),
(21, '631635-006', 'Nike', 'GRNG', '1900', 'tenis con logo incluido en rosa.', '22 a 25.5'),
(22, '579619-108', 'Nike', 'BLNGRS', '1850', 'tenis con logo incluido.', '22 a 26'),
(23, '579951-010', 'Nike', 'GR', '2000', 'Tenis con suela blanca y agujetas gris, con toques en verde.', '23 a 26'),
(24, '749867-100', 'Nike', 'BLPL', '1300', 'Tenis con suela blanca y palomita, logo incluido.', '22 a 26'),
(25, '749867-010', 'Nike', 'NGBL', '1300', 'tenis con palomita blanca y logo incluido.', '22 a 26'),
(26, '654845-102', 'Nike', 'BLGR', '1200', 'tenis con  suela color morado y logo incluido.', '23 a 26'),
(29, '704922-008', 'Nike', 'GRNG', '1200', 'tenis de ENTRENAMIENTO', '22 a 26'),
(30, '4526562-120', 'Nike', 'BLGR', '1200', 'ENTRENAMIENTO', '22 a 26'),
(31, '724858-601', 'Nike', 'RS', '1250', 'ENTRENAMIENTO.', '22 a 26'),
(32, '653543-014', 'Nike', 'GRVR', '1500', 'ENTRENAMIENTO.', '22 a 26'),
(33, '684894-604', 'Nike', 'NRCL', '1400', 'ENTRENAMIENTO.\r\n', '22 a 26'),
(34, '749180-003', 'Nike', 'GRVR', '1300', 'teniscon suela blanca y logo incluido.', '22 a 27'),
(35, '704933-005', 'Nike', 'GRNG', '900', 'tenis que tienen la paloma rosa y suela blanca, calzado para CORRER.', '22 a 27'),
(36, 'F98886', 'Adidas', 'MDBL', '800', 'tenis con logo en la lengua del calzado.', '22 a 26'),
(37, 'B244228', 'Adidas', 'NRBL', '1150', 'tenis con agujetas blancas y logo incluido.', '22 a 24.5'),
(38, 'B244227', 'Adidas', 'GRBL', '900', 'tenis que contiene pequeños detalles en negro, incluye logo.', '22 a 27.5'),
(39, 'AF5953', 'Adidas', 'BLGR', '850', 'tenis con pequeños detalles en color rosa y logo incluido', '23 a  26'),
(40, 'B33765', 'Adidas', 'NGRS', '1200', 'Tenis con siglas en la parte de atras GSG.', '23 a  26'),
(41, 'B23104', 'Adidas', 'BLGRFS', '1820', 'entrenamiento', '22 a 26'),
(42, 'B33402', 'Adidas', 'BLPL', '1670', 'ENTRENAMIENTO', '23 a  26'),
(43, 'B33397', 'Adidas', 'NGGR', '1540', 'ENTRENAMIENTO', '22 a 27'),
(44, 'B33399', 'Adidas', 'RSGR', '1800', 'ENTRENAMIENTO', '22 a 26'),
(45, 'B23698', 'Adidas', 'MNPL', '2000', 'TENIS PARA ENTRENAMIENTO.', '23 a  26'),
(46, 'B33401', 'Adidas', 'MN', '2000', 'TENIS PARA ENTRENAMIENTO', '23 a  26'),
(47, 'B33650', 'Adidas', 'NGBL', '1800', 'ENTRENAMIENTO', '23 a  26'),
(48, 'B23310', 'Adidas', 'GR', '1850', 'TENIS PARA CORRER', '23 a  26'),
(49, 'B40589', 'Adidas', 'NGCL', '1800', 'tenis para correr.', '23 a  26'),
(50, 'S82593', 'Adidas', 'FSRJ', '1500', 'CORRER.', '17 a 24'),
(51, 'B33559', 'Adidas', 'AZMN', '1850', 'CORRER', '23 a  26'),
(52, 'B33561', 'Adidas', 'FSNG', '1740', 'CORRER.', '23 a  26'),
(53, 'S83320', 'Adidas', 'FSBL', '1700', 'CORRER.', '17 a 24'),
(54, 'S811691', 'Adidas', 'NG', '1400', 'CORRER.', '23 a  26'),
(55, 'M18410', 'Adidas', 'NGRS', '1700', 'CORRER', '23 a 26'),
(56, 'M29701', 'Adidas', 'NGGRS', '1500', 'CORRER', '23 a 26'),
(57, 'M18577', 'Adidas', 'NGBLRS', '1500', 'CORRER', '23.5 a 26'),
(58, 'F98595', 'Adidas', 'BLMD', '1560', 'TENIS DE PIEL CON LOGO INCLUIDO', '23 a 26'),
(59, 'F98654', 'Adidas', 'NGGRS', '1890', 'TENIS TIPO BOTA', '22 a 26'),
(60, 'B32753', 'Adidas', 'BL', '1500', 'TIPO ESCOLAR.', '17 a 26'),
(61, 'B23925', 'Adidas', 'RS', '1300', 'TENIS CON LOGO INCLUIDO', '17 a 26'),
(62, 'B33102', 'Adidas', 'MNMD', '1810', 'CORRER', '23 a 26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
