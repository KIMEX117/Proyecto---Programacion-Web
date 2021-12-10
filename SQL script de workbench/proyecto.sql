CREATE DATABASE proyecto;

USE proyecto;

CREATE TABLE `usuarios` (
  `idUser` int(11) AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(25) NOT NULL,
  `PrimerApellido` varchar(25) NOT NULL,
  `SegundoApellido` varchar(25) NOT NULL,
  `Correo` varchar(30) UNIQUE NOT NULL,
  `Contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `productos` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `productos` (`id`, `Nombre`, `Talla`, `Categoria`, `Precio`, `img`) VALUES
(1, 'Hoodie California', 'M', 'Hoodie', '483', 'Producto9.jpg'),
(2, 'Hoodie Casual', 'M', 'Hoodie', '474', 'Producto10.jpg'),
(3, 'Hoodie Asiática', 'M', 'Hoodie', '505', 'Producto11.jpg'),
(4, 'Hoodie Anime', 'S', 'Hoodie', '474', 'Producto12.jpg'),
(5, 'Conjunto Casual', 'G', 'Conjunto', '1299', 'Producto5.jpg'),
(6, 'Playera Caricatura', 'M', 'Playera', '199', 'Producto1.jpg'),
(7, 'Short Veraniego', 'M', 'Short', '180', 'Producto3.jpg'),
(8, 'Conjunto Japan', 'M', 'Conjunto', '1299', 'Producto8.jpg');

CREATE TABLE `carritotemporal` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `idUser` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `compras` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `idUser` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Talla` varchar(1) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `img` varchar(30) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



