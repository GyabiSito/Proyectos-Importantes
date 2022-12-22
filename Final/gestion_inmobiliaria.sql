-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 23:38:21
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `nickname` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `permisos` enum('inmobiliario','operador') NOT NULL,
  `id_ci` char(8) NOT NULL,
  `token` char(200) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `codigo` int(4) NOT NULL,
  `gmail` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`nickname`, `pass`, `permisos`, `id_ci`, `token`, `fecha`, `id`, `codigo`, `gmail`) VALUES
('Admin', '$2y$10$9NYK6s3Efk56KwppXi8DgOUsokkVzWmTEOC9bjbn/CRslxpaFgGFe', 'inmobiliario', '54525758', '', '2022-11-07 19:34:40', 1, 0, 'jorcab11@gmail.com'),
('Operador', '$2y$10$54Dw3O9jyLpcjlEoqO9uCukmzbEOht8qLWlL3yuHJRiSrgoWPKLV.', 'operador', '54525788', '', '2022-11-07 19:35:45', 2, 0, 'manolo@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `url` varchar(200) NOT NULL,
  `id_propiedades` char(30) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `destacada` tinyint(1) NOT NULL DEFAULT 0,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`url`, `id_propiedades`, `nombre`, `destacada`, `id_img`) VALUES
('uploads/a6mhv-8gsco.jpg', '1', 'a6mhv-8gsco.jpg', 0, 1),
('uploads/a7m5f-zlj6h.jpg', '1', 'a7m5f-zlj6h.jpg', 0, 2),
('uploads/a48ds-n4voc.jpg', '1', 'a48ds-n4voc.jpg', 0, 3),
('uploads/aej2d-2d18x.jpg', '1', 'aej2d-2d18x.jpg', 0, 4),
('uploads/ap57h-go87l.jpg', '1', 'ap57h-go87l.jpg', 0, 5),
('uploads/ar7ye-ofn57.jpg', '1', 'ar7ye-ofn57.jpg', 0, 6),
('uploads/apartamentos.jpg', '1', 'apartamentos.jpg', 1, 7),
('uploads/apartamentos.jpg', '2', 'apartamentos.jpg', 1, 15),
('uploads/a6mhv-8gsco.jpg', '2', 'a6mhv-8gsco.jpg', 0, 16),
('uploads/a7m5f-zlj6h.jpg', '2', 'a7m5f-zlj6h.jpg', 0, 17),
('uploads/a48ds-n4voc.jpg', '2', 'a48ds-n4voc.jpg', 0, 18),
('uploads/aej2d-2d18x.jpg', '2', 'aej2d-2d18x.jpg', 0, 19),
('uploads/ap57h-go87l.jpg', '2', 'ap57h-go87l.jpg', 0, 20),
('uploads/ar7ye-ofn57.jpg', '2', 'ar7ye-ofn57.jpg', 0, 21),
('uploads/apartamentos.jpg', '4', 'apartamentos.jpg', 1, 22),
('uploads/a6mhv-8gsco.jpg', '4', 'a6mhv-8gsco.jpg', 0, 23),
('uploads/a7m5f-zlj6h.jpg', '4', 'a7m5f-zlj6h.jpg', 0, 24),
('uploads/a48ds-n4voc.jpg', '4', 'a48ds-n4voc.jpg', 0, 25),
('uploads/aej2d-2d18x.jpg', '4', 'aej2d-2d18x.jpg', 0, 26),
('uploads/ap57h-go87l.jpg', '4', 'ap57h-go87l.jpg', 0, 27),
('uploads/ar7ye-ofn57.jpg', '4', 'ar7ye-ofn57.jpg', 0, 28),
('uploads/apartamentos.jpg', '3', 'apartamentos.jpg', 1, 29),
('uploads/a6mhv-8gsco.jpg', '3', 'a6mhv-8gsco.jpg', 0, 30),
('uploads/a7m5f-zlj6h.jpg', '3', 'a7m5f-zlj6h.jpg', 0, 31),
('uploads/a48ds-n4voc.jpg', '3', 'a48ds-n4voc.jpg', 0, 32),
('uploads/aej2d-2d18x.jpg', '3', 'aej2d-2d18x.jpg', 0, 33),
('uploads/ap57h-go87l.jpg', '3', 'ap57h-go87l.jpg', 0, 34),
('uploads/ar7ye-ofn57.jpg', '3', 'ar7ye-ofn57.jpg', 0, 35),
('uploads/a6mhv-8gsco.jpg', '6', 'a6mhv-8gsco.jpg', 0, 36),
('uploads/a7m5f-zlj6h.jpg', '6', 'a7m5f-zlj6h.jpg', 0, 37),
('uploads/a48ds-n4voc.jpg', '6', 'a48ds-n4voc.jpg', 0, 38),
('uploads/aej2d-2d18x.jpg', '6', 'aej2d-2d18x.jpg', 0, 39),
('uploads/ap57h-go87l.jpg', '6', 'ap57h-go87l.jpg', 0, 40),
('uploads/ar7ye-ofn57.jpg', '6', 'ar7ye-ofn57.jpg', 0, 41),
('uploads/apartamentos.jpg', '6', 'apartamentos.jpg', 1, 42),
('uploads/a6mhv-8gsco.jpg', '7', 'a6mhv-8gsco.jpg', 0, 43),
('uploads/a7m5f-zlj6h.jpg', '7', 'a7m5f-zlj6h.jpg', 0, 44),
('uploads/a48ds-n4voc.jpg', '7', 'a48ds-n4voc.jpg', 0, 45),
('uploads/aej2d-2d18x.jpg', '7', 'aej2d-2d18x.jpg', 0, 46),
('uploads/ap57h-go87l.jpg', '7', 'ap57h-go87l.jpg', 0, 47),
('uploads/ar7ye-ofn57.jpg', '7', 'ar7ye-ofn57.jpg', 0, 48),
('uploads/apartamentos.jpg', '7', 'apartamentos.jpg', 1, 49),
('uploads/bedroom-6778193__340.jpg', '8', 'bedroom-6778193__340.jpg', 0, 50),
('uploads/crib-890565__340.jpg', '8', 'crib-890565__340.jpg', 0, 51),
('uploads/interior-2685521__340.jpg', '8', 'interior-2685521__340.jpg', 0, 52),
('uploads/kitchen-2165756__340.jpg', '8', 'kitchen-2165756__340.jpg', 0, 53),
('uploads/living-room-2732939__340.jpg', '8', 'living-room-2732939__340.jpg', 0, 54),
('uploads/modern-minimalist-bathroom-3150293__340.jpg', '8', 'modern-minimalist-bathroom-3150293__340.jpg', 0, 55),
('uploads/photo-1570071677470-c04398af73ca.png', '8', 'photo-1570071677470-c04398af73ca.png', 0, 56),
('uploads/photo-1600573472592-401b489a3cdc_1.jpg', '8', 'photo-1600573472592-401b489a3cdc_1.jpg', 0, 57),
('uploads/photo-1603395728893-bce27617f8b3_1.jpg', '8', 'photo-1603395728893-bce27617f8b3_1.jpg', 0, 58),
('uploads/residence-2219972_1920.jpg', '8', 'residence-2219972_1920.jpg', 1, 59),
('uploads/bedroom-6778193__340.jpg', '9', 'bedroom-6778193__340.jpg', 0, 60),
('uploads/crib-890565__340.jpg', '9', 'crib-890565__340.jpg', 0, 61),
('uploads/interior-2685521__340.jpg', '9', 'interior-2685521__340.jpg', 0, 62),
('uploads/kitchen-2165756__340.jpg', '9', 'kitchen-2165756__340.jpg', 0, 63),
('uploads/living-room-2732939__340.jpg', '9', 'living-room-2732939__340.jpg', 0, 64),
('uploads/modern-minimalist-bathroom-3150293__340.jpg', '9', 'modern-minimalist-bathroom-3150293__340.jpg', 0, 65),
('uploads/photo-1570071677470-c04398af73ca.png', '9', 'photo-1570071677470-c04398af73ca.png', 0, 66),
('uploads/photo-1600573472592-401b489a3cdc_1.jpg', '9', 'photo-1600573472592-401b489a3cdc_1.jpg', 0, 67),
('uploads/photo-1603395728893-bce27617f8b3_1.jpg', '9', 'photo-1603395728893-bce27617f8b3_1.jpg', 0, 68),
('uploads/residence-2219972_1920.jpg', '9', 'residence-2219972_1920.jpg', 1, 69),
('uploads/bedroom-6778193__340.jpg', '10', 'bedroom-6778193__340.jpg', 0, 70),
('uploads/crib-890565__340.jpg', '10', 'crib-890565__340.jpg', 0, 71),
('uploads/interior-2685521__340.jpg', '10', 'interior-2685521__340.jpg', 0, 72),
('uploads/kitchen-2165756__340.jpg', '10', 'kitchen-2165756__340.jpg', 0, 73),
('uploads/living-room-2732939__340.jpg', '10', 'living-room-2732939__340.jpg', 0, 74),
('uploads/modern-minimalist-bathroom-3150293__340.jpg', '10', 'modern-minimalist-bathroom-3150293__340.jpg', 0, 75),
('uploads/photo-1570071677470-c04398af73ca.png', '10', 'photo-1570071677470-c04398af73ca.png', 0, 76),
('uploads/photo-1600573472592-401b489a3cdc_1.jpg', '10', 'photo-1600573472592-401b489a3cdc_1.jpg', 0, 77),
('uploads/photo-1603395728893-bce27617f8b3_1.jpg', '10', 'photo-1603395728893-bce27617f8b3_1.jpg', 0, 78),
('uploads/residence-2219972_1920.jpg', '10', 'residence-2219972_1920.jpg', 1, 79),
('uploads/bedroom-6778193__340.jpg', '11', 'bedroom-6778193__340.jpg', 0, 80),
('uploads/crib-890565__340.jpg', '11', 'crib-890565__340.jpg', 0, 81),
('uploads/interior-2685521__340.jpg', '11', 'interior-2685521__340.jpg', 0, 82),
('uploads/kitchen-2165756__340.jpg', '11', 'kitchen-2165756__340.jpg', 0, 83),
('uploads/living-room-2732939__340.jpg', '11', 'living-room-2732939__340.jpg', 0, 84),
('uploads/modern-minimalist-bathroom-3150293__340.jpg', '11', 'modern-minimalist-bathroom-3150293__340.jpg', 0, 85),
('uploads/photo-1570071677470-c04398af73ca.png', '11', 'photo-1570071677470-c04398af73ca.png', 0, 86),
('uploads/photo-1600573472592-401b489a3cdc_1.jpg', '11', 'photo-1600573472592-401b489a3cdc_1.jpg', 0, 87),
('uploads/photo-1603395728893-bce27617f8b3_1.jpg', '11', 'photo-1603395728893-bce27617f8b3_1.jpg', 0, 88),
('uploads/residence-2219972_1920.jpg', '11', 'residence-2219972_1920.jpg', 1, 89),
('uploads/kitchen-2165756__340.jpg', '12', 'kitchen-2165756__340.jpg', 0, 90),
('uploads/living-room-2732939__340.jpg', '12', 'living-room-2732939__340.jpg', 0, 91),
('uploads/modern-minimalist-bathroom-3150293__340.jpg', '12', 'modern-minimalist-bathroom-3150293__340.jpg', 0, 92),
('uploads/photo-1570071677470-c04398af73ca.png', '12', 'photo-1570071677470-c04398af73ca.png', 0, 93),
('uploads/photo-1600573472592-401b489a3cdc_1.jpg', '12', 'photo-1600573472592-401b489a3cdc_1.jpg', 0, 94),
('uploads/photo-1603395728893-bce27617f8b3_1.jpg', '12', 'photo-1603395728893-bce27617f8b3_1.jpg', 0, 95),
('uploads/residence-2219972_1920.jpg', '12', 'residence-2219972_1920.jpg', 1, 96),
('uploads/bedroom-6778193__340.jpg', '13', 'bedroom-6778193__340.jpg', 0, 97),
('uploads/crib-890565__340.jpg', '13', 'crib-890565__340.jpg', 0, 98),
('uploads/interior-2685521__340.jpg', '13', 'interior-2685521__340.jpg', 0, 99),
('uploads/kitchen-2165756__340.jpg', '13', 'kitchen-2165756__340.jpg', 0, 100),
('uploads/living-room-2732939__340.jpg', '13', 'living-room-2732939__340.jpg', 0, 101),
('uploads/modern-minimalist-bathroom-3150293__340.jpg', '13', 'modern-minimalist-bathroom-3150293__340.jpg', 0, 102),
('uploads/photo-1570071677470-c04398af73ca.png', '13', 'photo-1570071677470-c04398af73ca.png', 0, 103),
('uploads/photo-1600573472592-401b489a3cdc_1.jpg', '13', 'photo-1600573472592-401b489a3cdc_1.jpg', 0, 104),
('uploads/photo-1603395728893-bce27617f8b3_1.jpg', '13', 'photo-1603395728893-bce27617f8b3_1.jpg', 0, 105),
('uploads/residence-2219972_1920.jpg', '13', 'residence-2219972_1920.jpg', 1, 106),
('uploads/2746d7888eedafc80941bf1411a2b958.jpg', '14', '2746d7888eedafc80941bf1411a2b958.jpg', 0, 107),
('uploads/9935ffa58b0626c125f4197948e6babe.jpg', '14', '9935ffa58b0626c125f4197948e6babe.jpg', 0, 108),
('uploads/aee026e434a25e75604e82c9d0f6b00c.jpg', '14', 'aee026e434a25e75604e82c9d0f6b00c.jpg', 0, 109),
('uploads/apartment-1261781_960_720.jpg', '14', 'apartment-1261781_960_720.jpg', 0, 110),
('uploads/living-room-1476062__340.jpg', '14', 'living-room-1476062__340.jpg', 0, 111),
('uploads/propiedades6_22872.jpg', '14', 'propiedades6_22872.jpg', 0, 112),
('uploads/house-6115719__340.jpg', '14', 'house-6115719__340.jpg', 1, 113),
('uploads/2746d7888eedafc80941bf1411a2b958.jpg', '15', '2746d7888eedafc80941bf1411a2b958.jpg', 0, 114),
('uploads/9935ffa58b0626c125f4197948e6babe.jpg', '15', '9935ffa58b0626c125f4197948e6babe.jpg', 0, 115),
('uploads/aee026e434a25e75604e82c9d0f6b00c.jpg', '15', 'aee026e434a25e75604e82c9d0f6b00c.jpg', 0, 116),
('uploads/apartment-1261781_960_720.jpg', '15', 'apartment-1261781_960_720.jpg', 0, 117),
('uploads/living-room-1476062__340.jpg', '15', 'living-room-1476062__340.jpg', 0, 118),
('uploads/propiedades6_22872.jpg', '15', 'propiedades6_22872.jpg', 0, 119),
('uploads/house-6115719__340.jpg', '15', 'house-6115719__340.jpg', 1, 120),
('uploads/2746d7888eedafc80941bf1411a2b958.jpg', '16', '2746d7888eedafc80941bf1411a2b958.jpg', 0, 121),
('uploads/9935ffa58b0626c125f4197948e6babe.jpg', '16', '9935ffa58b0626c125f4197948e6babe.jpg', 0, 122),
('uploads/aee026e434a25e75604e82c9d0f6b00c.jpg', '16', 'aee026e434a25e75604e82c9d0f6b00c.jpg', 0, 123),
('uploads/apartment-1261781_960_720.jpg', '16', 'apartment-1261781_960_720.jpg', 0, 124),
('uploads/living-room-1476062__340.jpg', '16', 'living-room-1476062__340.jpg', 0, 125),
('uploads/propiedades6_22872.jpg', '16', 'propiedades6_22872.jpg', 0, 126),
('uploads/house-6115719__340.jpg', '16', 'house-6115719__340.jpg', 1, 127),
('uploads/2746d7888eedafc80941bf1411a2b958.jpg', '16', '2746d7888eedafc80941bf1411a2b958.jpg', 0, 128),
('uploads/9935ffa58b0626c125f4197948e6babe.jpg', '17', '9935ffa58b0626c125f4197948e6babe.jpg', 0, 129),
('uploads/aee026e434a25e75604e82c9d0f6b00c.jpg', '17', 'aee026e434a25e75604e82c9d0f6b00c.jpg', 0, 130),
('uploads/apartment-1261781_960_720.jpg', '17', 'apartment-1261781_960_720.jpg', 0, 131),
('uploads/living-room-1476062__340.jpg', '17', 'living-room-1476062__340.jpg', 0, 132),
('uploads/propiedades6_22872.jpg', '17', 'propiedades6_22872.jpg', 0, 133),
('uploads/house-6115719__340.jpg', '17', 'house-6115719__340.jpg', 1, 134),
('uploads/2746d7888eedafc80941bf1411a2b958.jpg', '18', '2746d7888eedafc80941bf1411a2b958.jpg', 0, 135),
('uploads/9935ffa58b0626c125f4197948e6babe.jpg', '18', '9935ffa58b0626c125f4197948e6babe.jpg', 0, 136),
('uploads/aee026e434a25e75604e82c9d0f6b00c.jpg', '18', 'aee026e434a25e75604e82c9d0f6b00c.jpg', 0, 137),
('uploads/apartment-1261781_960_720.jpg', '18', 'apartment-1261781_960_720.jpg', 0, 138),
('uploads/living-room-1476062__340.jpg', '18', 'living-room-1476062__340.jpg', 0, 139),
('uploads/propiedades6_22872.jpg', '18', 'propiedades6_22872.jpg', 0, 140),
('uploads/house-6115719__340.jpg', '18', 'house-6115719__340.jpg', 1, 141),
('uploads/2746d7888eedafc80941bf1411a2b958.jpg', '19', '2746d7888eedafc80941bf1411a2b958.jpg', 0, 142),
('uploads/9935ffa58b0626c125f4197948e6babe.jpg', '19', '9935ffa58b0626c125f4197948e6babe.jpg', 0, 143),
('uploads/aee026e434a25e75604e82c9d0f6b00c.jpg', '19', 'aee026e434a25e75604e82c9d0f6b00c.jpg', 0, 144),
('uploads/apartment-1261781_960_720.jpg', '19', 'apartment-1261781_960_720.jpg', 0, 145),
('uploads/living-room-1476062__340.jpg', '19', 'living-room-1476062__340.jpg', 0, 146),
('uploads/propiedades6_22872.jpg', '19', 'propiedades6_22872.jpg', 0, 147),
('uploads/house-6115719__340.jpg', '19', 'house-6115719__340.jpg', 1, 148),
('uploads/a9c9h-nq9vb.jpg', '20', 'a9c9h-nq9vb.jpg', 0, 149),
('uploads/a32nh-6mh2r.jpg', '20', 'a32nh-6mh2r.jpg', 0, 150),
('uploads/ah4ey-bozf7.jpg', '20', 'ah4ey-bozf7.jpg', 0, 151),
('uploads/atn2u-yhyr2.jpg', '20', 'atn2u-yhyr2.jpg', 0, 152),
('uploads/ag2w8-zginr.jpg', '20', 'ag2w8-zginr.jpg', 1, 153),
('uploads/a9c9h-nq9vb.jpg', '21', 'a9c9h-nq9vb.jpg', 0, 154),
('uploads/a32nh-6mh2r.jpg', '21', 'a32nh-6mh2r.jpg', 0, 155),
('uploads/ah4ey-bozf7.jpg', '21', 'ah4ey-bozf7.jpg', 0, 156),
('uploads/atn2u-yhyr2.jpg', '21', 'atn2u-yhyr2.jpg', 0, 157),
('uploads/ag2w8-zginr.jpg', '21', 'ag2w8-zginr.jpg', 1, 158),
('uploads/a9c9h-nq9vb.jpg', '22', 'a9c9h-nq9vb.jpg', 0, 160),
('uploads/a32nh-6mh2r.jpg', '22', 'a32nh-6mh2r.jpg', 0, 161),
('uploads/ah4ey-bozf7.jpg', '22', 'ah4ey-bozf7.jpg', 0, 162),
('uploads/atn2u-yhyr2.jpg', '22', 'atn2u-yhyr2.jpg', 0, 163),
('uploads/ag2w8-zginr.jpg', '22', 'ag2w8-zginr.jpg', 1, 164),
('uploads/a9c9h-nq9vb.jpg', '23', 'a9c9h-nq9vb.jpg', 0, 165),
('uploads/a32nh-6mh2r.jpg', '23', 'a32nh-6mh2r.jpg', 0, 166),
('uploads/ah4ey-bozf7.jpg', '23', 'ah4ey-bozf7.jpg', 0, 167),
('uploads/atn2u-yhyr2.jpg', '23', 'atn2u-yhyr2.jpg', 0, 168),
('uploads/ag2w8-zginr.jpg', '23', 'ag2w8-zginr.jpg', 1, 169),
('uploads/a9c9h-nq9vb.jpg', '24', 'a9c9h-nq9vb.jpg', 0, 170),
('uploads/a32nh-6mh2r.jpg', '24', 'a32nh-6mh2r.jpg', 0, 171),
('uploads/ah4ey-bozf7.jpg', '24', 'ah4ey-bozf7.jpg', 0, 172),
('uploads/atn2u-yhyr2.jpg', '24', 'atn2u-yhyr2.jpg', 0, 173),
('uploads/ag2w8-zginr.jpg', '24', 'ag2w8-zginr.jpg', 1, 174),
('uploads/a9c9h-nq9vb.jpg', '25', 'a9c9h-nq9vb.jpg', 0, 175),
('uploads/a32nh-6mh2r.jpg', '25', 'a32nh-6mh2r.jpg', 0, 176),
('uploads/ah4ey-bozf7.jpg', '25', 'ah4ey-bozf7.jpg', 0, 177),
('uploads/atn2u-yhyr2.jpg', '25', 'atn2u-yhyr2.jpg', 0, 178),
('uploads/ag2w8-zginr.jpg', '25', 'ag2w8-zginr.jpg', 1, 179);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmobiliario`
--

CREATE TABLE `inmobiliario` (
  `ci` int(7) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `contacto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmobiliario`
--

INSERT INTO `inmobiliario` (`ci`, `nombre`, `apellido`, `contacto`) VALUES
(54525758, '54525758', 'Cabrera', '092866432'),
(54525788, '54525788', 'Perez', '092866435');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` enum('casa','campo','apartamento','terreno') NOT NULL,
  `mejoras` enum('si','no') NOT NULL,
  `destacado` enum('si','no') NOT NULL,
  `ascensor` enum('si','no') NOT NULL,
  `nro_piso` int(5) NOT NULL,
  `bano` int(11) NOT NULL,
  `servicios` enum('si','no') NOT NULL,
  `cocina` int(11) NOT NULL,
  `saneamiento` enum('si','no') NOT NULL,
  `habitaciones` int(3) NOT NULL,
  `m²` float NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `gastos_comunes` enum('si','no') NOT NULL,
  `venta_alquilar` enum('venta','alquiler') NOT NULL,
  `patio` enum('si','no') NOT NULL,
  `disponibilidad` enum('si','no') NOT NULL,
  `moneda` enum('dolares','pesos') NOT NULL,
  `precio` float NOT NULL,
  `garaje` enum('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`id`, `nombre`, `descripcion`, `tipo`, `mejoras`, `destacado`, `ascensor`, `nro_piso`, `bano`, `servicios`, `cocina`, `saneamiento`, `habitaciones`, `m²`, `fecha_publicacion`, `gastos_comunes`, `venta_alquilar`, `patio`, `disponibilidad`, `moneda`, `precio`, `garaje`) VALUES
(1, 'Apartamentos En Alquiler San José', 'Apartamento totalmente nuevo, zona hermosa, a paso de todos los servicios. Ideal inversión tanto para renta como para vivienda propia. ', 'apartamento', 'no', 'si', 'si', 2, 2, 'no', 1, 'si', 2, 30, '2022-10-27', 'si', 'alquiler', 'si', 'si', 'pesos', 73000, 'si'),
(2, 'Apartamentos En Alquiler San José', 'Apartamento totalmente nuevo, zona hermosa, a paso de todos los servicios. Ideal inversión tanto para renta como para vivienda propia. ', 'apartamento', 'no', 'si', 'si', 2, 2, 'no', 1, 'si', 2, 30, '2022-10-27', 'si', 'venta', 'si', 'si', 'pesos', 73000, 'si'),
(3, 'Apartamentos En Alquiler San José', 'Apartamento totalmente nuevo, zona hermosa, a paso de todos los servicios. Ideal inversión tanto para renta como para vivienda propia. ', 'apartamento', 'no', 'si', 'si', 2, 2, 'no', 1, 'si', 2, 30, '2022-10-27', 'si', 'alquiler', 'si', 'si', 'pesos', 73000, 'si'),
(4, 'Apartamentos En Alquiler San José', 'Apartamento totalmente nuevo, zona hermosa, a paso de todos los servicios. Ideal inversión tanto para renta como para vivienda propia. ', 'apartamento', 'no', 'si', 'si', 2, 2, 'no', 1, 'si', 2, 30, '2022-10-27', 'si', 'venta', 'si', 'si', 'pesos', 73000, 'si'),
(6, 'Apartamentos En Alquiler San José', 'Apartamento totalmente nuevo, zona hermosa, a paso de todos los servicios. Ideal inversión tanto para renta como para vivienda propia. ', 'apartamento', 'no', 'si', 'si', 2, 2, 'no', 1, 'si', 2, 30, '2022-10-27', 'si', 'alquiler', 'si', 'si', 'pesos', 73000, 'si'),
(7, 'Apartamentos En Alquiler San José', 'Apartamento totalmente nuevo, zona hermosa, a paso de todos los servicios. Ideal inversión tanto para renta como para vivienda propia. ', 'apartamento', 'no', 'si', 'si', 2, 2, 'no', 1, 'si', 2, 30, '2022-10-27', 'si', 'venta', 'si', 'si', 'pesos', 73000, 'si'),
(8, 'Hermosa Casa de Familia en Barrio Exposición', 'Hermosa, cómoda, luminosa y en optimo estado.\r\nSe trata de una casa en excelente estado a paso de todos los servicios.\r\nDetalles:\r\n• 398 m2 de superficie total\r\n• 94 m2 edificados\r\n• 20 m alero con techo policarbonato transparente y estructura de metal\r\nComodidades:\r\nPropiedad:\r\n• 2 cómodos dormitorios (principal con piso de parquet)\r\n• Living al ingreso con armario empotrado a medida\r\n• Cocina con carpintería a medida, amplia mesada con doble pileta, purificador de aire\r\n• Impecable baño con mampara, mueble bajo mesada y mampara de aluminio\r\n• Porche con rejas y alero\r\nBarbacoa:\r\n• Parrillero con mesada\r\n• Baño\r\n• 2 ventanales con mosquiteros\r\n• puerta de aluminio.\r\n• Patio con césped, jardín con variada vegetación y huerta', 'casa', 'no', 'si', 'no', 2, 2, 'si', 2, 'si', 3, 70, '2022-11-04', 'no', 'alquiler', 'si', 'si', 'dolares', 65000, 'si'),
(9, 'Hermosa Casa de Familia en Barrio Exposición', 'Hermosa, cómoda, luminosa y en optimo estado.\r\nSe trata de una casa en excelente estado a paso de todos los servicios.\r\nDetalles:\r\n• 398 m2 de superficie total\r\n• 94 m2 edificados\r\n• 20 m alero con techo policarbonato transparente y estructura de metal\r\nComodidades:\r\nPropiedad:\r\n• 2 cómodos dormitorios (principal con piso de parquet)\r\n• Living al ingreso con armario empotrado a medida\r\n• Cocina con carpintería a medida, amplia mesada con doble pileta, purificador de aire\r\n• Impecable baño con mampara, mueble bajo mesada y mampara de aluminio\r\n• Porche con rejas y alero\r\nBarbacoa:\r\n• Parrillero con mesada\r\n• Baño\r\n• 2 ventanales con mosquiteros\r\n• puerta de aluminio.\r\n• Patio con césped, jardín con variada vegetación y huerta', 'casa', 'no', 'no', 'no', 2, 2, 'si', 2, 'si', 3, 70, '2022-11-04', 'no', 'venta', 'si', 'si', 'dolares', 65000, 'si'),
(10, 'Hermosa Casa de Familia en Barrio Exposición', 'Hermosa, cómoda, luminosa y en optimo estado.\r\nSe trata de una casa en excelente estado a paso de todos los servicios.\r\nDetalles:\r\n• 398 m2 de superficie total\r\n• 94 m2 edificados\r\n• 20 m alero con techo policarbonato transparente y estructura de metal\r\nComodidades:\r\nPropiedad:\r\n• 2 cómodos dormitorios (principal con piso de parquet)\r\n• Living al ingreso con armario empotrado a medida\r\n• Cocina con carpintería a medida, amplia mesada con doble pileta, purificador de aire\r\n• Impecable baño con mampara, mueble bajo mesada y mampara de aluminio\r\n• Porche con rejas y alero\r\nBarbacoa:\r\n• Parrillero con mesada\r\n• Baño\r\n• 2 ventanales con mosquiteros\r\n• puerta de aluminio.\r\n• Patio con césped, jardín con variada vegetación y huerta', 'casa', 'no', 'si', 'no', 2, 2, 'si', 2, 'si', 3, 70, '2022-11-04', 'no', 'alquiler', 'si', 'si', 'dolares', 65000, 'si'),
(11, 'Hermosa Casa de Familia en Barrio Exposición', 'Hermosa, cómoda, luminosa y en optimo estado.\r\nSe trata de una casa en excelente estado a paso de todos los servicios.\r\nDetalles:\r\n• 398 m2 de superficie total\r\n• 94 m2 edificados\r\n• 20 m alero con techo policarbonato transparente y estructura de metal\r\nComodidades:\r\nPropiedad:\r\n• 2 cómodos dormitorios (principal con piso de parquet)\r\n• Living al ingreso con armario empotrado a medida\r\n• Cocina con carpintería a medida, amplia mesada con doble pileta, purificador de aire\r\n• Impecable baño con mampara, mueble bajo mesada y mampara de aluminio\r\n• Porche con rejas y alero\r\nBarbacoa:\r\n• Parrillero con mesada\r\n• Baño\r\n• 2 ventanales con mosquiteros\r\n• puerta de aluminio.\r\n• Patio con césped, jardín con variada vegetación y huerta', 'casa', 'no', 'no', 'no', 2, 2, 'si', 2, 'si', 3, 70, '2022-11-04', 'no', 'venta', 'si', 'si', 'dolares', 65000, 'si'),
(12, 'Hermosa Casa de Familia en Barrio Exposición', 'Hermosa, cómoda, luminosa y en optimo estado.\r\nSe trata de una casa en excelente estado a paso de todos los servicios.\r\nDetalles:\r\n• 398 m2 de superficie total\r\n• 94 m2 edificados\r\n• 20 m alero con techo policarbonato transparente y estructura de metal\r\nComodidades:\r\nPropiedad:\r\n• 2 cómodos dormitorios (principal con piso de parquet)\r\n• Living al ingreso con armario empotrado a medida\r\n• Cocina con carpintería a medida, amplia mesada con doble pileta, purificador de aire\r\n• Impecable baño con mampara, mueble bajo mesada y mampara de aluminio\r\n• Porche con rejas y alero\r\nBarbacoa:\r\n• Parrillero con mesada\r\n• Baño\r\n• 2 ventanales con mosquiteros\r\n• puerta de aluminio.\r\n• Patio con césped, jardín con variada vegetación y huerta', 'casa', 'no', 'si', 'no', 2, 2, 'si', 2, 'si', 3, 70, '2022-11-04', 'no', 'alquiler', 'si', 'si', 'dolares', 65000, 'si'),
(13, 'Hermosa Casa de Familia en Barrio Exposición', 'Hermosa, cómoda, luminosa y en optimo estado.\r\nSe trata de una casa en excelente estado a paso de todos los servicios.\r\nDetalles:\r\n• 398 m2 de superficie total\r\n• 94 m2 edificados\r\n• 20 m alero con techo policarbonato transparente y estructura de metal\r\nComodidades:\r\nPropiedad:\r\n• 2 cómodos dormitorios (principal con piso de parquet)\r\n• Living al ingreso con armario empotrado a medida\r\n• Cocina con carpintería a medida, amplia mesada con doble pileta, purificador de aire\r\n• Impecable baño con mampara, mueble bajo mesada y mampara de aluminio\r\n• Porche con rejas y alero\r\nBarbacoa:\r\n• Parrillero con mesada\r\n• Baño\r\n• 2 ventanales con mosquiteros\r\n• puerta de aluminio.\r\n• Patio con césped, jardín con variada vegetación y huerta', 'casa', 'no', 'no', 'no', 2, 2, 'si', 2, 'si', 3, 70, '2022-11-04', 'no', 'venta', 'si', 'si', 'dolares', 65000, 'si'),
(14, 'Casa De Campo En Ruta 11', 'Casa de campo a solo minutos del centro de Colonia del Sacramento, amplios espacios verdes, zona muy tranquila.\r\nDetalle:\r\n6700 m2 de superficie total\r\n90 m2 edificados\r\n2 Dormitorios (principal con baño en suite y AA)\r\nCocina comedor con estufa a leña\r\nLiving independiente con baño social y calefactor a leña\r\nPozo con depósito y bomba instalada en funcionamiento', 'campo', 'si', 'si', 'no', 0, 1, 'si', 1, 'no', 2, 6700, '2022-11-05', 'no', 'venta', 'si', 'si', 'dolares', 100000, 'no'),
(15, 'Casa De Campo En Ruta 11', 'Casa de campo a solo minutos del centro de Colonia del Sacramento, amplios espacios verdes, zona muy tranquila.\r\nDetalle:\r\n6700 m2 de superficie total\r\n90 m2 edificados\r\n2 Dormitorios (principal con baño en suite y AA)\r\nCocina comedor con estufa a leña\r\nLiving independiente con baño social y calefactor a leña\r\nPozo con depósito y bomba instalada en funcionamiento', 'campo', 'si', 'no', 'no', 0, 1, 'si', 1, 'no', 2, 6700, '2022-11-05', 'no', 'venta', 'si', 'si', 'dolares', 100000, 'no'),
(16, 'Casa De Campo En Ruta 11', 'Casa de campo a solo minutos del centro de Colonia del Sacramento, amplios espacios verdes, zona muy tranquila.\r\nDetalle:\r\n6700 m2 de superficie total\r\n90 m2 edificados\r\n2 Dormitorios (principal con baño en suite y AA)\r\nCocina comedor con estufa a leña\r\nLiving independiente con baño social y calefactor a leña\r\nPozo con depósito y bomba instalada en funcionamiento', 'campo', 'si', 'si', 'no', 0, 1, 'si', 1, 'no', 2, 6700, '2022-11-05', 'no', 'venta', 'si', 'si', 'dolares', 100000, 'no'),
(17, 'Casa De Campo En Ruta 11', 'Casa de campo a solo minutos del centro de Colonia del Sacramento, amplios espacios verdes, zona muy tranquila.\r\nDetalle:\r\n6700 m2 de superficie total\r\n90 m2 edificados\r\n2 Dormitorios (principal con baño en suite y AA)\r\nCocina comedor con estufa a leña\r\nLiving independiente con baño social y calefactor a leña\r\nPozo con depósito y bomba instalada en funcionamiento', 'campo', 'si', 'no', 'no', 0, 1, 'si', 1, 'no', 2, 6700, '2022-11-05', 'no', 'venta', 'si', 'si', 'dolares', 100000, 'no'),
(18, 'Casa De Campo En Ruta 11', 'Casa de campo a solo minutos del centro de Colonia del Sacramento, amplios espacios verdes, zona muy tranquila.\r\nDetalle:\r\n6700 m2 de superficie total\r\n90 m2 edificados\r\n2 Dormitorios (principal con baño en suite y AA)\r\nCocina comedor con estufa a leña\r\nLiving independiente con baño social y calefactor a leña\r\nPozo con depósito y bomba instalada en funcionamiento', 'campo', 'si', 'si', 'no', 0, 1, 'si', 1, 'no', 2, 6700, '2022-11-05', 'no', 'venta', 'si', 'si', 'dolares', 100000, 'no'),
(19, 'Casa De Campo En Ruta 11', 'Casa de campo a solo minutos del centro de Colonia del Sacramento, amplios espacios verdes, zona muy tranquila.\r\nDetalle:\r\n6700 m2 de superficie total\r\n90 m2 edificados\r\n2 Dormitorios (principal con baño en suite y AA)\r\nCocina comedor con estufa a leña\r\nLiving independiente con baño social y calefactor a leña\r\nPozo con depósito y bomba instalada en funcionamiento', 'campo', 'si', 'no', 'no', 0, 1, 'si', 1, 'no', 2, 6700, '2022-11-05', 'no', 'venta', 'si', 'si', 'dolares', 100000, 'no'),
(20, 'Lindo Terreno - Con Mejoras', 'Ubicado en km 30, sobre camino Gaucho Negro, Ciudad del Plata.  Fracción de terreno  de 6 ha destacada por sus buenos accesos y excelente relación precio-beneficios. Cuenta  con mejoras tales como poso semi surgente y alambrados. Excelente lugar, en un entorno rodeado de naturaleza con todos los servicios a su alcance.  Consulte por más detalles', 'terreno', 'si', 'si', 'no', 0, 0, 'no', 0, 'no', 0, 6000, '2022-11-07', 'no', 'venta', 'si', 'si', 'dolares', 62000, 'no'),
(21, 'Lindo Terreno - Con Mejoras', 'Ubicado en km 30, sobre camino Gaucho Negro, Ciudad del Plata.  Fracción de terreno  de 6 ha destacada por sus buenos accesos y excelente relación precio-beneficios. Cuenta  con mejoras tales como poso semi surgente y alambrados. Excelente lugar, en un entorno rodeado de naturaleza con todos los servicios a su alcance.  Consulte por más detalles', 'terreno', 'si', 'no', 'no', 0, 0, 'no', 0, 'no', 0, 6000, '2022-11-07', 'no', 'venta', 'si', 'si', 'dolares', 62000, 'no'),
(22, 'Lindo Terreno - Con Mejoras', 'Ubicado en km 30, sobre camino Gaucho Negro, Ciudad del Plata.  Fracción de terreno  de 6 ha destacada por sus buenos accesos y excelente relación precio-beneficios. Cuenta  con mejoras tales como poso semi surgente y alambrados. Excelente lugar, en un entorno rodeado de naturaleza con todos los servicios a su alcance.  Consulte por más detalles', 'terreno', 'si', 'si', 'no', 0, 0, 'no', 0, 'no', 0, 6000, '2022-11-07', 'no', 'venta', 'si', 'si', 'dolares', 62000, 'no'),
(23, 'Lindo Terreno - Con Mejoras', 'Ubicado en km 30, sobre camino Gaucho Negro, Ciudad del Plata.  Fracción de terreno  de 6 ha destacada por sus buenos accesos y excelente relación precio-beneficios. Cuenta  con mejoras tales como poso semi surgente y alambrados. Excelente lugar, en un entorno rodeado de naturaleza con todos los servicios a su alcance.  Consulte por más detalles', 'terreno', 'si', 'no', 'no', 0, 0, 'no', 0, 'no', 0, 6000, '2022-11-07', 'no', 'venta', 'si', 'si', 'dolares', 62000, 'no'),
(24, 'Lindo Terreno - Con Mejoras', 'Ubicado en km 30, sobre camino Gaucho Negro, Ciudad del Plata.  Fracción de terreno  de 6 ha destacada por sus buenos accesos y excelente relación precio-beneficios. Cuenta  con mejoras tales como poso semi surgente y alambrados. Excelente lugar, en un entorno rodeado de naturaleza con todos los servicios a su alcance.  Consulte por más detalles', 'terreno', 'si', 'si', 'no', 0, 0, 'no', 0, 'no', 0, 6000, '2022-11-07', 'no', 'venta', 'si', 'si', 'dolares', 62000, 'no'),
(25, 'Lindo Terreno - Con Mejoras', 'Ubicado en km 30, sobre camino Gaucho Negro, Ciudad del Plata.  Fracción de terreno  de 6 ha destacada por sus buenos accesos y excelente relación precio-beneficios. Cuenta  con mejoras tales como poso semi surgente y alambrados. Excelente lugar, en un entorno rodeado de naturaleza con todos los servicios a su alcance.  Consulte por más detalles', 'terreno', 'si', 'no', 'no', 0, 0, 'no', 0, 'no', 0, 6000, '2022-11-07', 'no', 'venta', 'si', 'si', 'dolares', 62000, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `hora` time NOT NULL DEFAULT current_timestamp(),
  `accion` varchar(55) NOT NULL,
  `id_ci` int(7) NOT NULL DEFAULT 0,
  `id_propiedad` int(11) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `ruta` varchar(50) NOT NULL DEFAULT 'no',
  `barrio` varchar(50) NOT NULL,
  `nro_puerta` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `id_propiedades` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`latitud`, `longitud`, `calle`, `departamento`, `ruta`, `barrio`, `nro_puerta`, `ciudad`, `id_propiedades`, `id`) VALUES
('-34.341476', '-56.715295', 'Ituzaingo', 'San José', 'no', 'Centro', '345', 'San José De Mayo', 1, 1),
('-34.341476', '-56.715295', 'Ituzaingo', 'San José', 'no', 'Centro', '345', 'San José De Mayo', 2, 2),
('-34.341476', '-56.715295', 'Ituzaingo', 'San José', 'no', 'Centro', '345', 'San José De Mayo', 3, 3),
('-34.341476', '-56.715295', 'Ituzaingo', 'San José', 'no', 'Centro', '345', 'San José De Mayo', 4, 4),
('-34.341476', '-56.715295', 'Ituzaingo', 'San José', 'no', 'Centro', '345', 'San José De Mayo', 6, 6),
('-34.341476', '-56.715295', 'Ituzaingo', 'San José', 'no', 'Centro', '345', 'San José De Mayo', 7, 7),
('-34.333433', '-56.697915', 'Francia', 'San José', 'no', 'Exposición', '1273', 'San José De Mayo', 8, 8),
('-34.333433', '-56.697915', 'Francia', 'San José', 'no', 'Exposición', '1273', 'San José De Mayo', 9, 9),
('-34.333433', '-56.697915', 'Francia', 'San José', 'no', 'Exposición', '1273', 'San José De Mayo', 10, 10),
('-34.333433', '-56.697915', 'Francia', 'San José', 'no', 'Exposición', '1273', 'San José De Mayo', 11, 11),
('-34.333433', '-56.697915', 'Francia', 'San José', 'no', 'Exposición', '1273', 'San José De Mayo', 12, 12),
('-34.333433', '-56.697915', 'Francia', 'San José', 'no', 'Exposición', '1273', 'San José De Mayo', 13, 13),
('-34.328876', '-56.797540', 'Ruta 11', 'San José', '11', 'no hay', '0', 'Juan Soler', 14, 14),
('-34.328876', '-56.797540', 'Ruta 11', 'San José', '11', 'no hay', '0', 'Juan Soler', 15, 15),
('-34.328876', '-56.797540', 'Ruta 11', 'San José', '11', 'no hay', '0', 'Juan Soler', 16, 16),
('-34.328876', '-56.797540', 'Ruta 11', 'San José', '11', 'no hay', '0', 'Juan Soler', 17, 17),
('-34.328876', '-56.797540', 'Ruta 11', 'San José', '11', 'no hay', '0', 'Juan Soler', 18, 18),
('-34.328876', '-56.797540', 'Ruta 11', 'San José', '11', 'no hay', '0', 'Juan Soler', 19, 19),
('-34.730895', '-56.422462', 'Gaucho Negro', 'San José', '1', 'no hay', '0', 'Ciudad del Plata', 20, 20),
('-34.730895', '-56.422462', 'Gaucho Negro', 'San José', '1', 'no hay', '0', 'Ciudad del Plata', 21, 21),
('-34.730895', '-56.422462', 'Gaucho Negro', 'San José', '1', 'no hay', '0', 'Ciudad del Plata', 22, 22),
('-34.730895', '-56.422462', 'Gaucho Negro', 'San José', '1', 'no hay', '0', 'Ciudad del Plata', 23, 23),
('-34.730895', '-56.422462', 'Gaucho Negro', 'San José', '1', 'no hay', '0', 'Ciudad del Plata', 24, 24),
('-34.730895', '-56.422462', 'Gaucho Negro', 'San José', '1', 'no hay', '0', 'Ciudad del Plata', 25, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `nombre` varchar(30) NOT NULL,
  `url` varchar(200) NOT NULL,
  `id_propiedades` char(30) NOT NULL,
  `id_video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`nombre`, `url`, `id_propiedades`, `id_video`) VALUES
('lv_0_20221107114009.mp4', 'videos/lv_0_20221107114009.mp4', '1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `inmobiliario`
--
ALTER TABLE `inmobiliario`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
