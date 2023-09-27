-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-09-2023 a las 21:30:03
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `telefono`, `email`, `direccion`, `fechaRegistro`, `status`) VALUES
(1, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:22:10', 1),
(2, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:22:35', 1),
(3, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:22:44', 1),
(4, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:23:44', 1),
(5, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:23:46', 1),
(6, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:23:48', 1),
(7, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:23:48', 1),
(8, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:23:49', 1),
(9, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:27:58', 1),
(10, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:27:59', 1),
(11, 'Hugo', '54654845', 'hugo@info.com', 'Ciudad Guatemala', '2023-09-27 16:28:00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
