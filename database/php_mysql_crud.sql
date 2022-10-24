-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 22:45:35
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
-- Base de datos: `php_mysql_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `Numero_Cel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`Numero_Cel`, `Contrasena`) VALUES
('2147483647', '12345'),
('2147483647', '123456789'),
('3222887762', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_Cel` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `Edad` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombre`, `Apellido`, `Numero_Cel`, `Edad`, `Direccion`, `Contrasena`, `Fecha_Registro`) VALUES
('Luis', 'Lopez', '3222887701', '20', 'Calle 19 Carrera 5', '12345', '2022-10-24 16:58:11'),
('Fernando', 'Galvez', '3222887702', '30', 'Calle 84 Carrera 3', '12345', '2022-10-24 16:58:35'),
('Camilo', 'Ramirez', '3222887703', '19', 'Calle 7 Carrera 3', '12345', '2022-10-24 16:58:58'),
('Laura', 'Serrano', '3222887704', '43', 'Calle 76 Carrera 6', '12345', '2022-10-24 16:59:28'),
('Sebastian', 'Serna', '3222887705', '34', 'Calle 73 Carrera 2', '12345', '2022-10-24 17:00:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliarios`
--

CREATE TABLE `domiciliarios` (
  `DNI` int(20) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_Cel` int(20) NOT NULL,
  `Transporte` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `domiciliarios`
--

INSERT INTO `domiciliarios` (`DNI`, `Nombre`, `Apellido`, `Numero_Cel`, `Transporte`) VALUES
(21654, 'Andres', 'Galarza', 8498154, 'Motocicleta'),
(651564, 'Carlos', 'Lopez', 84615651, 'Carro'),
(1203649, 'Roberto', 'Diaz', 2147483647, 'Moto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `NumeroCliente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDProducto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Carrera` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Calle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Residencia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NombreRecibe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`NumeroCliente`, `IDProducto`, `Carrera`, `Calle`, `Residencia`, `NombreRecibe`, `Fecha`) VALUES
('3222887762', '10002', '9', '15', '16', 'Esteban', '2021-05-23 12:36:21'),
('3222887762', '20002', '16', '16', '16', 'Felipe', '2021-05-23 12:45:19'),
('3222887773', '10002', '10', '10', '10', 'Kaos', '2021-05-24 14:47:45'),
('3222887762', '10001', '', '', '', '', '2021-05-28 01:25:22'),
('3222887762', '10002', '6', '29', '556', 'Diego', '2022-10-24 16:26:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IDProducto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NITRestaurante` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `Precio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Foto` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IDProducto`, `NITRestaurante`, `Nombre`, `Descripcion`, `Precio`, `Foto`) VALUES
('1', '2000', 'Plato 1', 'Para los amantes de la comida de mar, los mas mejores camarones de la ciudad.', '40000', 'https://images.pexels.com/photos/2827263/pexels-photo-2827263.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'),
('10001', '1000', 'Plato 1', 'Una rica combinacion de sabores elaborada por nuestros mejores chefs.', '35000', 'https://images.pexels.com/photos/2122280/pexels-photo-2122280.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('10002', '1000', 'Plato 2', 'Excelente manjar muy bien calificado por nuestros clientes.', '56000', 'https://images.pexels.com/photos/3779791/pexels-photo-3779791.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('10003', '1000', 'Plato 3', 'Crocantes papas y una excelente hamburguesa ideal para noche perfecta.', '20000', 'https://images.pexels.com/photos/4393021/pexels-photo-4393021.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('10004', '1000', 'Plato 4', 'Sandwich con distintas carnes seleccionadas a gusto del cliente.', '16000', 'https://images.pexels.com/photos/5490920/pexels-photo-5490920.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('20002', '2000', 'Plato 2', 'Carne 3/4 acompanada de papas y la bebida que se te antoje', '35000', 'https://images.pexels.com/photos/3535383/pexels-photo-3535383.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('20003', '2000', 'Plato 3', 'Excelente sopa de champinones y verduras', '29000', 'https://images.pexels.com/photos/3026808/pexels-photo-3026808.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('30001', '3000', 'Plato 1', 'Hamburguesa con queso doble', '27000', 'https://images.pexels.com/photos/3052362/pexels-photo-3052362.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'),
('516541', '51654', 'Hot Dog', 'Comida Rapida', '150000', 'https://images.pexels.com/photos/1603901/pexels-photo-1603901.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `NIT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Logo` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`NIT`, `Nombre`, `Direccion`, `Telefono`, `Logo`) VALUES
('1000', 'Comidas Tradicionales', 'Cra5 N2-47', '2469852', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700'),
('2000', 'Eat Awesome', 'Cra 64 N2-17', '2176248', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700'),
('3000', 'Food Fast', 'Cra70 N4-35', '2163984', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700'),
('4000', 'T Best Restaurant', 'Cra6 N6-15', '2364785', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700'),
('5000', 'Comidas Rapidas', 'Cra7 N6-26', '2349615', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700'),
('51654', 'American Foot', 'Cra 33 N2-18 ', '2796187', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700'),
('7000', 'Test Restaurant', 'Calle 14 N3-16', '2146325', 'https://dewey.tailorbrands.com/production/brand_version_mockup_image/751/5310868751_5b4635cf-23ce-4325-873b-6f5c1e961e14.png?cb=1621566700');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Numero_Cel`);

--
-- Indices de la tabla `domiciliarios`
--
ALTER TABLE `domiciliarios`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IDProducto`),
  ADD UNIQUE KEY `IDProducto` (`IDProducto`),
  ADD KEY `IDProducto_2` (`IDProducto`),
  ADD KEY `IDProducto_3` (`IDProducto`),
  ADD KEY `IDProducto_4` (`IDProducto`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`NIT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
