-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2019 a las 03:23:56
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
(2, 'Celulares y tablets'),
(4, 'Indumentaria'),
(12, 'Electrodomesticos'),
(13, 'Computación'),
(19, 'Vehiculos'),
(20, 'Inmuebles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos_usuarios`
--

CREATE TABLE `favoritos_usuarios` (
  `fav_usr_id_publicacion` int(11) NOT NULL,
  `fav_usr_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favoritos_usuarios`
--

INSERT INTO `favoritos_usuarios` (`fav_usr_id_publicacion`, `fav_usr_id_usuario`) VALUES
(1, 1),
(2, 1),
(2, 2),
(15, 1),
(20, 1),
(20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `pub_id` int(11) NOT NULL,
  `pub_titulo` varchar(50) NOT NULL,
  `pub_descripcion` varchar(1000) NOT NULL,
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
(1, 'Audi A4', 'Vendo Audi A4 1.8Turbo Tfsi Multitronic\r\nExcelente Estado\r\n\r\nDirección Asistida\r\nTracción delantera\r\n8 Velocidades\r\nControl de Estabilidad\r\nFaros antiniebla\r\nFaros con regulación automática\r\nLimpiafaros\r\nFreno ABS\r\nSitema Isofix\r\nClimatizador Bizona\r\nButacas eléctricas\r\nSensor de estacionamiento\r\nComputadora de Abordo\r\nSensor de Lluvia\r\nLlantas de aleación\r\nLevas al volante\r\n\r\nNo tomo permuta. Se vende transferido.', '480000', 19, 1, 1, '01.webp'),
(2, 'Cartera Juanita Jo, Lady Meghan Inv19!', 'Cartera geométrica\r\nCombina materiales, colores y texturas\r\nBolsillo con cierre en el dorso\r\nFlores y apliques en relieve.\r\nChapa clásica Juanita Jo\r\nForro personalizado\r\nBolsillos internos (uno con cierre)\r\nTiras largas extraíbles y otras más cortas fijas\r\nMaterial alternativo al cuero animal\r\nLas medidas aproximadas son: 25cm por 30cm', '4500', 4, 2, 2, '02.webp'),
(9, 'Samsung Galaxy S10 E Liberado 128gb Ram 6', 'Fabricados en Tierra del Fuego - Industria Argentina. 100% Originales y legales.\r\nGarantía Oficial Samsung Argentina por 12 meses. \r\nSon los únicos que Samsung Argentina toma como legales y ante cualquier inconveniente actúa la garantía oficial.\r\n\r\nCelular Samsung Galaxy S10 E Liberado 128gb Ram 6gb\r\nModelo: SM-G970F\r\n\r\nEl teléfono de próxima generación diseñado no solo para sobresalir sino para diferenciarse\r\nInfinity-O Display es la nueva vista verdaderamente ininterrumpida.   ', '39699', 2, 2, 1, 'f9f667432e663d5f16b7d81c8278e02c.webp'),
(10, 'Placa Video Msi Rtx 2070 Gamming Z 8gb Ddr6', 'Arquitectura NVIDIA Turing\r\nEsta arquitectura revolucionaria, combinada con la nueva plataforma GeForce® RTX, cuenta con trazado de rayos en tiempo real, inteligencia artificial y shading programable. Jamás creaste y disfrutaste de los juegos como ahora.\r\n\r\nNVIDIA Real Time - Trazado de rayos en tiempo real para Juegos\r\nEl trazado de rayos es la solución definitiva para una iluminación con reflejos y sombras que ofrecen un nivel de realismo más allá de lo que es posible con las técnicas de rende', '39500', 13, 1, 1, '452e6a1de103cae24d721d5c9fc73116.webp'),
(15, 'Cafetera Moulinex Nescafe Dolce Gusto Oblo ', '-Bomba de 15 bares de presión \r\n-Potencia: 1.340 watts \r\n-Capacidad: 0,8 litros \r\n-Sistema de exclusivo de uso con cápsulas Nescafé Dolce Gusto. \r\n-Multibebidas con diferentes variedades que combinan café, te, chocolate y leche. \r\n-Puede preparar bebidas frías y calientes. \r\n-Prepara cada variedad de bebida en menos de un minuto gracias al sistema Thermoblock que contribuye al calentamiento rápido del agua. \r\n-Modo ahorro de energía (apagado automático después de 5 minutos) \r\n-Dosificación manua', '5000', 12, 1, 1, 'ea67d0a3671223556d5eee3aba6cc4f4.webp'),
(17, 'Smart Tv Led 4k Lg 75 Uj6580 Ultra Hd Ips Hdr 10', 'Tamaño de pantalla 75\r\nResolución 3840*2160\r\nPanel IPS\r\nHDR HDR Activo\r\nHDR10\r\nHLG\r\nUpscaler 4K Upscaler\r\nEfecto HDR\r\n\r\nAUDIO\r\nSalida de audio (salida) 20 W\r\nSistema de altoparlantes (ch) 2,0 ch\r\nMagic Sound Tuning\r\nAudio Hi-Fi\r\nSincronización de sonido LG / Bluetooth\r\nCódec de audio AC3 (Dolby Digital), EAC3, HE-AAC, AAC, MP2, MP3, PCM, DTS, DTS-HD, DTS Express, WMA, apt-X\r\n\r\nSMART TV\r\nSO (sistema operativo) webOS 3.5\r\nUnidad de procesamiento Quad\r\nMagic Remote B-in\r\nReconocimiento de voz\r\nControl universal\r\nAcceso rápido\r\nNavegador Web\r\nConvergencia inteligente\r\nAplicación móvil (LG TV Plus)\r\nConexión móvil Si\r\nMiracast (replicación de móvil a TV)\r\n\r\nCONECTIVIDAD\r\nHDMI 6G : 2ea\r\nCRA (Canal de retorno de audio)(HDMI2 lateral)\r\nUSB 2.0 : 1ea\r\nComponente / Compuesto de entrada 1\r\nCompuesto de entrada (AV) 1\r\nRF In 2 (Cable/Antena)\r\nWifi 802.11ac\r\nBluetooth \r\nSalida de audio digital (óptico)\r\n\r\nPOTENCIA\r\nFuente de alimentación (Voltaje, Hz) 100~240VCA 50-60Hz ', '105000', 12, 2, 1, 'f7fe9b69ba7dd0362fecb2d2d75438ee.webp'),
(18, 'Starter Kit Arduino Uno Muy Completo', 'COMPONENTES:\r\n\r\nel paquete Incluye:\r\n1 -Arduino uno\r\n1- Cable usb arduino\r\n1 -Keypad 4x4\r\n10- Led azul\r\n10- Led rojo\r\n10- Led verde \r\n20-Cables dupont para protoboard hembra -hembra\r\n1-Relay 5v\r\n25-Cables macho-macho para protoboard\r\n1-Jack bateria 9v\r\n1-Protoboard 830 puntos\r\n1-Motor paso a paso 5v \r\n1-Display 1602 con l2C\r\n1-Joystick con modulo\r\n1-Real time (reloj)\r\n1-Temperatura DHT-11\r\n1-Sensor nivel de agua \r\n1-Servo motor SG90\r\n1-Control remoto\r\n1-RFID modulo con llavero y tarjeta \r\n1-Driver uln2003\r\n1-Matrix 8x8\r\n1-Display 7 segmentos (4 digitos)\r\n1-Display 7 segmento \r\n1-Circuito integrado 74HC595\r\n1-Buzzer activo\r\n1-Buzzer pasivo \r\n1-Potenciometro B10k \r\n5-Pulsadores con boton (key switch)\r\n4-Jumper cap\r\n10-Resistencias 330R\r\n10-Resistencias 10k\r\n10-Resistencias 1K\r\n10-Resistencias 220r\r\n1-Tira de pines recto- macho\r\n1-Modulo RGB\r\n1-Sensor de sonido microfono analogico/digital\r\n2-Sensor de inclinacion SW520D\r\n1-Flame\r\n1-IR receiver\r\n1-Sensor temperatura lm35\r\n3-Foto resistenci', '3910', 13, 2, 1, '2c85c20af8eb73bda68bb32176b0ce3c.webp'),
(19, 'Notebook Lenovo V330 Core I7 1tb 20gb + Ssd 240gb', 'Notebook Lenovo V330-15ISK\r\n- Pantalla: 15,6 \"HD (1366 x 768) antideslumbrante\r\n- Procesador: 8 ª generación Intel ® Core ™ i7-8550U\r\n- Gráficos: Intel HD graphics 520\r\n- Memoria: 20 GB DDR4\r\n- Disco: 1TB 5400 rpm HDD + Ssd 240GB\r\n- Unidad Optica: No\r\n- Wi-Fi: 802.11 b/g/n o 802.11 a/c\r\n- Bluetooth 4.1\r\n- Webcam 720p \r\n- Puertos:\r\n2x USB 3.0 1x USB 3.1 Type-C Gen \r\n1x USB 3.1 Type-C Gen 1\r\nVGA\r\nHDMI\r\nLector de tarjetas 4 en 1 (SD, SDHC, SDXC, MMC)\r\nRJ-45\r\nJack combo de audio\r\n- Sistema operativo: FreeDOS\r\n- Bateria: 2 celdas\r\n- Dimensiones: 375 mm x 253 mm x 22.3 mm\r\n- Peso: 2,1 kg', '48000', 13, 1, 2, '0bb3a02ba7b22494d3b3c9bbef50e99e.webp'),
(20, 'Impresora 3d Fab 10 Exo Armada, Calibrada Y Lista ', 'Es muy fácil de utilizar y rápida para imprimir, cuenta con una interfaz amigable en español y un panel de control LCD que permite controlar la impresora sin necesidad de conectarse a una PC.\r\n\r\nLa FAB10 se vende armada, lista para usar, testeada (pieza de muestra incluida) y calibrada de fábrica. Incluye software, manuales y kit de herramientas como así también soporte técnico nacional y garantía de un año.\r\n\r\nSu estructura cerrada de aluminio y acrílico permite mantener la impresión aislada del ambiente y visualizar el objeto desde todos sus lados. Tiene iluminación led y alojamiento de la bobina de material internos y un filtro de carbón activado que neutraliza los gases tóxicos generados al utilizar materiales como el ABS, HIPS, etc.\r\n\r\nEste equipo es totalmente compatible con todos los filamentos del mercado de 1.75 mm de diámetro y compatible con los archivos de impresión STL, OBJ o Gcode. También se puede utilizar con el software de impresión de código abierto, gratuito, fácil y', '42999', 13, 2, 1, 'c9a8536e110f513ec6799778bb996275.webp'),
(21, 'Departamento 4 ambientes - Caballito', 'Alquiler de departamento de 4 ambientes en Caballito a dos cuadras del Parque Rivadavia. Listo para mudarse. Aumento semestral de 15%. Expensas $8500 por mes. Garantía propietaria de inmueble de capital federal o seguro de caución, un mes de deposito. Muy silencioso. Apto profesional', '27000', 20, 2, 4, 'ce43a8077a88e71ca5d1b9e6e8ce4cc5.webp');

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
(2, 'Intercambio'),
(4, 'Alquiler'),
(5, 'Subasta');

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
(2, 'juan', 'Juan Perez', 'juan', 'juanperez@gmail.com'),
(3, 'root', 'Administrador', 'root', 'root@root.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `favoritos_usuarios`
--
ALTER TABLE `favoritos_usuarios`
  ADD PRIMARY KEY (`fav_usr_id_publicacion`,`fav_usr_id_usuario`),
  ADD KEY `fav_usr_id_usuario` (`fav_usr_id_usuario`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `pub_id_categoria` (`pub_id_categoria`),
  ADD KEY `pub_id_usuario` (`pub_id_usuario`),
  ADD KEY `pub_id_tipo_publicacion` (`pub_id_tipo_publicacion`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipos_publicacion`
--
ALTER TABLE `tipos_publicacion`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favoritos_usuarios`
--
ALTER TABLE `favoritos_usuarios`
  ADD CONSTRAINT `favoritos_usuarios_ibfk_1` FOREIGN KEY (`fav_usr_id_publicacion`) REFERENCES `publicaciones` (`pub_id`),
  ADD CONSTRAINT `favoritos_usuarios_ibfk_2` FOREIGN KEY (`fav_usr_id_usuario`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`pub_id_categoria`) REFERENCES `categorias` (`cat_id`),
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`pub_id_tipo_publicacion`) REFERENCES `tipos_publicacion` (`tp_id`),
  ADD CONSTRAINT `publicaciones_ibfk_3` FOREIGN KEY (`pub_id_usuario`) REFERENCES `usuarios` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
