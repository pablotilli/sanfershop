-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 15:46:33
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanfershop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_descripcion`) VALUES
(1, 'Electrónica'),
(2, 'Celulares y tablets'),
(3, 'Vehiculos'),
(4, 'Indumentaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `pub_id` int(11) NOT NULL,
  `pub_titulo` varchar(50) NOT NULL,
  `pub_descripcion` varchar(500) NOT NULL,
  `pub_precio` decimal(10,0) NOT NULL,
  `pub_id_categoria` int(11) NOT NULL,
  `pub_id_usuario` int(11) NOT NULL,
  `pub_id_tipo_publicacion` int(11) NOT NULL,
  `pub_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`pub_id`, `pub_titulo`, `pub_descripcion`, `pub_precio`, `pub_id_categoria`, `pub_id_usuario`, `pub_id_tipo_publicacion`, `pub_imagen`) VALUES
(1, 'Audi A4', 'Vendo Audi A4 1.8Turbo Tfsi Multitronic\r\nExcelente Estado\r\n\r\nDirección Asistida\r\nTracción delantera\r\n8 Velocidades\r\nControl de Estabilidad\r\nFaros antiniebla\r\nFaros con regulación automática\r\nLimpiafaros\r\nFreno ABS\r\nSitema Isofix\r\nClimatizador Bizona\r\nButacas eléctricas\r\nSensor de estacionamiento\r\nComputadora de Abordo\r\nSensor de Lluvia\r\nLlantas de aleación\r\nLevas al volante\r\n\r\nNo tomo permuta. Se vende transferido.', '480000', 3, 1, 1, '01.webp'),
(2, 'Cartera Juanita Jo, Lady Meghan Inv19!', 'Cartera geométrica\r\nCombina materiales, colores y texturas\r\nBolsillo con cierre en el dorso\r\nFlores y apliques en relieve.\r\nChapa clásica Juanita Jo\r\nForro personalizado\r\nBolsillos internos (uno con cierre)\r\nTiras largas extraíbles y otras más cortas fijas\r\nMaterial alternativo al cuero animal\r\nLas medidas aproximadas son: 25cm por 30cm', '4500', 4, 2, 2, '02.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_publicacion`
--

CREATE TABLE `tipos_publicacion` (
  `tp_id` int(11) NOT NULL,
  `tp_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_publicacion`
--

INSERT INTO `tipos_publicacion` (`tp_id`, `tp_descripcion`) VALUES
(1, 'Venta'),
(2, 'Intercambio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_nombre_usuario` varchar(20) NOT NULL,
  `usr_nombre_real` varchar(50) NOT NULL,
  `usr_password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre_usuario`, `usr_nombre_real`, `usr_password`, `email`) VALUES
(1, 'pablo', 'Pablo Tilli', '123456', 'tillipablo@gmail.com'),
(2, 'juan', 'Juan Perez', 'juan', 'juanperez@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indices de la tabla `tipos_publicacion`
--
ALTER TABLE `tipos_publicacion`
  ADD PRIMARY KEY (`tp_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_publicacion`
--
ALTER TABLE `tipos_publicacion`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
