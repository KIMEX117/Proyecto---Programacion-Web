-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2021 a las 15:20:09
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Nombre`, `Talla`, `Categoria`, `Precio`, `img`) VALUES
('Hoodie California', 'M', 'Hoodie', '483', 'Producto9.jpg'),
('Hoodie Casual', 'M', 'Hoodie', '474', 'Producto10.jpg'),
('Hoodie Asiática', 'M', 'Hoodie', '505', 'Producto11.jpg'),
('Hoodie Anime', 'S', 'Hoodie', '474', 'Producto12.jpg'),
('Conjunto Casual', 'G', 'Conjunto', '1299', 'Producto5.jpg'),
('Playera Caricatura', 'M', 'Playera', '199', 'Producto1.jpg'),
('Short Veraniego', 'M', 'Short', '180', 'Producto3.jpg'),
('Conjunto Japan', 'M', 'Conjunto', '1299', 'Producto8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(25) NOT NULL,
  `PrimerApellido` varchar(25) NOT NULL,
  `SegundoApellido` varchar(25) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `PrimerApellido`, `SegundoApellido`, `Correo`, `Contraseña`) VALUES
('Enrique', 'León', 'Geraldo', 'leon123@gmail.com', '6ab08928e0df88b01d4d7e110e03ca26b3f7e03f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `Correo` (`Correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
