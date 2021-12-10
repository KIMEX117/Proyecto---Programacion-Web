-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 08:05:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritotemporal`
--

CREATE TABLE `carritotemporal` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Nombre`, `Talla`, `Categoria`, `Precio`, `img`) VALUES
(1, 'Hoodie California', 'M', 'Hoodie', '483', 'Producto9.jpg'),
(2, 'Hoodie Casual', 'M', 'Hoodie', '474', 'Producto10.jpg'),
(3, 'Hoodie Asiática', 'M', 'Hoodie', '505', 'Producto11.jpg'),
(4, 'Hoodie Anime', 'S', 'Hoodie', '474', 'Producto12.jpg'),
(5, 'Conjunto Casual', 'G', 'Conjunto', '1299', 'Producto5.jpg'),
(6, 'Playera Caricatura', 'M', 'Playera', '199', 'Producto1.jpg'),
(7, 'Short Veraniego', 'M', 'Short', '180', 'Producto3.jpg'),
(8, 'Conjunto Japan', 'M', 'Conjunto', '1299', 'Producto8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `PrimerApellido` varchar(25) NOT NULL,
  `SegundoApellido` varchar(25) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritotemporal`
--
ALTER TABLE `carritotemporal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritotemporal`
--
ALTER TABLE `carritotemporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
