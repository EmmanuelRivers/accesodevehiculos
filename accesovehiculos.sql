-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2022 a las 00:00:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `accesovehiculos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotejos`
--

CREATE TABLE `cotejos` (
  `id_vehiculo` int(11) NOT NULL,
  `numero_placa` text NOT NULL,
  `fecha_entrada` date NOT NULL,
  `hora_entrada` time NOT NULL,
  `tipo_vehiculo` varchar(12) NOT NULL,
  `hora_salida` time NOT NULL,
  `tiempo_estacionado` int(11) NOT NULL,
  `pago` int(11) NOT NULL,
  `b_pagado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotejos`
--

INSERT INTO `cotejos` (`id_vehiculo`, `numero_placa`, `fecha_entrada`, `hora_entrada`, `tipo_vehiculo`, `hora_salida`, `tiempo_estacionado`, `pago`, `b_pagado`) VALUES
(4, '23421', '2022-01-18', '12:03:00', 'No residente', '13:00:00', 57, 171, 'si'),
(5, '6675', '2022-01-18', '19:13:00', 'No residente', '00:00:00', 0, 0, 'no'),
(6, '66666', '2022-01-18', '15:00:00', 'Residente', '16:00:00', 60, 60, 'si'),
(7, '123523', '2022-01-18', '14:50:00', 'Oficial', '18:00:00', 190, 0, 'si'),
(8, 'AS123', '2022-01-18', '12:00:00', 'No residente', '00:00:00', 0, 0, 'no'),
(9, '1122', '2022-01-18', '16:00:00', 'Oficial', '16:30:00', 30, 0, 'si'),
(10, 'A11', '2022-01-18', '17:00:00', 'Oficial', '00:00:00', 0, 0, 'no'),
(11, 'B123', '2022-01-18', '16:34:00', 'No residente', '00:00:00', 0, 0, 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotejos`
--
ALTER TABLE `cotejos`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotejos`
--
ALTER TABLE `cotejos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
