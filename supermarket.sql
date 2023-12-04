-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2023 a las 22:09:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermarket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codprod` int(11) NOT NULL,
  `nompro` varchar(30) NOT NULL,
  `stockpro` int(50) NOT NULL,
  `prepro` decimal(10,0) NOT NULL,
  `despro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codprod`, `nompro`, `stockpro`, `prepro`, `despro`) VALUES
(122, 'babero', 34, '2000', 'dfvdfvds'),
(232, 'sabana', 45, '34444', 'ewfscxdcx'),
(343, 'colchon', 43, '3444', 'vdfvdfvfvfd'),
(454, 'colchon', 4564, '4000', 'tgbfcb'),
(666, 'sabana', 65, '40000', 'rhbfhfbbfg'),
(1001, 'tomate', 2000, '10', 'tomate rojo'),
(1004, 'tomate', 40, '2000', 'tomate rojo maduro'),
(4545, 'sabana', 45, '45555', 'rggdfvdfv'),
(5675, 'sabana', 454, '45555', 'dbfdbbbfb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento` varchar(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefono` int(13) NOT NULL,
  `clave` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento`, `nombre`, `apellido`, `email`, `telefono`, `clave`) VALUES
('10000', 'pepito', 'perez', 'pepitop@gmail.com', 2147483647, '12345'),
('1010149746', 'Emily', 'fierro', 'emilyfi@gmail.com', 2147483647, '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codprod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
