-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 03:52:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cerveceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `id_cerveza` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `resumen` varchar(450) NOT NULL,
  `ibu` int(11) NOT NULL,
  `alcohol` varchar(15) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `resumen`, `ibu`, `alcohol`, `id_tipo`) VALUES
(2, 'Porter', 'Maltas oscuras. Sabor y aroma penetrante y nocturno. Chocolate, azúcar negro y café.', 27, '5,5%', 1),
(3, 'scotch', 'Escocia es tierra de cebada y la Scotch Ale lleva ese paisaje impregnado en su código genético. Rubí intenso. Seis grados de alcohol. Dulce y maltosa.', 18, '6%', 1),
(5, 'Imperial Stout', 'Catalina la Grande amaba las emociones fuertes. Por eso, la Imperial Stout, negra y tostada, empapada de alcohol y pasas, amarga y ahumada, era su cerveza favorita.', 49, '8,5%', 1),
(9, 'Honey Beer', 'Babilonia antigua. Tras la boda, el padre de la novia convida al futuro yerno con cerveza de miel a lo largo de un mes. Así lo dicta la tradición.', 22, '7,5%', 1),
(10, 'Cream Stout', 'Es una cerveza negra de origen irlandés. En ella se descubren sabores de chocolate y nueces en el paladar, con un licoroso y placentero post-gusto.', 35, '7%', 2),
(11, 'Caravana', 'Llega la primavera. Cambiamos la ropa, hacemos más deporte. El lúpulo empieza a brotar apasionado. ', 30, '4,2%', 2),
(12, 'El Centinela', 'El roble tiene una larga historia acompañando las bebidas. Cerveza, vino, whisky y otros destilados fueron guardados en barricas de Roble hasta la llegada del acero inoxidable.', 24, '14%', 3),
(13, 'Catalina la Grande', 'Dicen que Catalina La Grande, Zarina de Rusia en el siglo XVII, era fanática de las Porter y Stout Británicas.', 43, '11%', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cerveza`
--

CREATE TABLE `tipo_cerveza` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `descripcion` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_cerveza`
--

INSERT INTO `tipo_cerveza` (`id_tipo`, `tipo`, `descripcion`) VALUES
(1, 'clasica', 'Las cervezas que nos han acompañado desde un principio, gracias a las cuales somos quiénes somos hoy.'),
(2, 'moderna', 'El paladar de nuestros comensales ha evolucionado con el tiempo, cómo nuestras cervezas. Esta es una seleccion de nuestras cervezas más nuevas.'),
(3, 'worldwide', 'Del mundo a tu paladar, las cervezas de alrededor del globo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`) VALUES
(1, 'Beltran', '$2y$10$TOhVyZLN2pJh4GT9rcFTJOsBa7smDR3oll4eHe3yvLiSlnVhUuWyC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id_cerveza`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `tipo_cerveza`
--
ALTER TABLE `tipo_cerveza`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `id_cerveza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_cerveza`
--
ALTER TABLE `tipo_cerveza`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD CONSTRAINT `cerveza_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_cerveza` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
