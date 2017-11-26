-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2017 a las 17:53:05
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `floreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `detallesd` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `detallesp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `unidades` int(11) NOT NULL,
  `costo` float NOT NULL,
  `total` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_registro`, `nombre`, `correo`, `telefono`, `direccion`, `detallesd`, `detallesp`, `unidades`, `costo`, `total`, `fecha`) VALUES
(1, 1, 'Angel Efren', 'angel@gmail.com', '2147483647', 'La loma', 'Casa color blanco', 'Ramo de rosas', 1, 100, 100, '2017-11-22'),
(2, 1, 'Sergio Ramirez', 'checo@gmail.com', '7223213123', 'Santa Cruz Atzcapotzaltongo', 'Casa color azul 1 piso', 'Arreglo tulipanes', 1, 400, 400, '2017-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoweb`
--

CREATE TABLE `pedidoweb` (
  `id_pedidoweb` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `rango` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `nombredestino` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `codigopostal` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidoweb`
--

INSERT INTO `pedidoweb` (`id_pedidoweb`, `nombre`, `telefono`, `correo`, `rango`, `fecha`, `nombredestino`, `empresa`, `provincia`, `direccion`, `codigopostal`) VALUES
(1, 'Angel Efren Alb', '7223123123', 'angel@gmail.com', '9:00-12:00', '2017-11-27', 'Angel', 'MonzterSoftware', 'La loma', 'La loma 901', '90123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `llave` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `nombre`, `apellido`, `genero`, `edad`, `correo`, `telefono`, `usuario`, `contrasena`, `direccion`, `llave`) VALUES
(1, 'Diego', 'Garcia', 'Hombre', 45, 'diego@gmail.com', '7222132434', 'Diego', 'diego123', 'Almoloya', 'Antohan'),
(2, 'Anthony', 'Garcia', 'Hombre', 26, 'anthony@gmail.com', '7221232143', 'Anthony', 'anto123', 'Almoloya', 'Antohan'),
(3, 'Amairani', 'Gomora', 'Mujer', 20, 'ani@gmail.com', '7229982139', 'Ani123', '123ani', 'Almoloya', 'Antohan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_registro` (`id_registro`);

--
-- Indices de la tabla `pedidoweb`
--
ALTER TABLE `pedidoweb`
  ADD PRIMARY KEY (`id_pedidoweb`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedidoweb`
--
ALTER TABLE `pedidoweb`
  MODIFY `id_pedidoweb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_registro`) REFERENCES `registro` (`id_registro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
