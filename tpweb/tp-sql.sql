-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 01:27:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp1-web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubes`
--

CREATE TABLE `clubes` (
  `id_club` int(11) NOT NULL,
  `club` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clubes`
--

INSERT INTO `clubes` (`id_club`, `club`) VALUES
(3001, 'Boca Juniors'),
(3002, 'Inter Miami'),
(3003, 'Santamarina'),
(3004, 'Tottenham');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id_jugador` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `edad` int(2) NOT NULL,
  `posicion` text NOT NULL,
  `id_club` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id_jugador`, `nombre`, `apellido`, `edad`, `posicion`, `id_club`) VALUES
(1001, 'Sergio', 'Romero', 36, 'Arquero', 3001),
(1002, 'Dario', 'Benedetto', 33, 'Delantero', 3001),
(1003, 'Lionel', 'Messi', 36, 'Delantero', 3002),
(1004, 'Martin', 'Michel', 39, 'Delantero', 3003),
(1005, 'Cristian', 'Romero', 25, 'Defensor', 3004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`) VALUES
(1, 'webadmin', '$2y$10$f406SbjfzKX9tHtd/wzeB.z3IH3NQw9kp0AQZvqPwFJzzQyq6dH5K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`id_club`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `id_club` (`id_club`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`id_club`) REFERENCES `clubes` (`id_club`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
