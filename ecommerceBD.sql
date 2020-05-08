-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2020 a las 22:24:31
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `c_id` int(11) NOT NULL,
  `c_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_fechacrea` datetime NOT NULL,
  `c_fechamod` datetime NOT NULL,
  `c_usuariocrea` int(11) NOT NULL,
  `c_usuariomod` int(11) NOT NULL,
  `c_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`c_id`, `c_nombre`, `c_fechacrea`, `c_fechamod`, `c_usuariocrea`, `c_usuariomod`, `c_estado`) VALUES
(1, 'prueba1', '2020-05-08 03:12:24', '2020-05-08 03:12:24', 2, 2, 1),
(2, 'prueba2', '2020-05-08 03:12:34', '2020-05-08 03:16:58', 2, 2, 1),
(3, 'prueba3', '2020-05-08 03:20:00', '2020-05-08 03:22:12', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipousuarios`
--

CREATE TABLE `tbl_tipousuarios` (
  `t_id` int(11) NOT NULL,
  `t_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `t_fechacrea` datetime NOT NULL,
  `t_fechamod` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_tipousuarios`
--

INSERT INTO `tbl_tipousuarios` (`t_id`, `t_nombre`, `t_fechacrea`, `t_fechamod`) VALUES
(1, 'Administrativo', '2020-05-06 15:50:55', '2020-05-06 15:50:55'),
(2, 'Clientes', '2020-05-06 15:50:55', '2020-05-06 15:50:55'),
(3, 'Domiciliarios', '2020-05-06 15:52:34', '2020-05-06 15:52:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `u_id` int(11) NOT NULL,
  `u_nitter` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_tipo` int(11) NOT NULL,
  `u_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `u_fechacrea` datetime NOT NULL,
  `u_fechamod` datetime NOT NULL,
  `u_usuariocrea` int(11) NOT NULL,
  `u_usuariomod` int(11) NOT NULL,
  `u_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`u_id`, `u_nitter`, `u_usuario`, `u_username`, `u_tipo`, `u_email`, `u_password`, `u_telefono`, `u_direccion`, `u_fechacrea`, `u_fechamod`, `u_usuariocrea`, `u_usuariomod`, `u_estado`) VALUES
(1, '1', 'prueba@gmail.com', 'prueba36', 2, 'prueba@gmail.com', '202cb962ac59075b964b07152d234b70', '301520', 'cl 76', '2020-05-07 11:45:35', '2020-05-08 02:10:37', 0, 2, 2),
(2, '321', 'prueba@gmail.es', 'master', 1, 'prueba@gmail.es', 'caf1a3dfb505ffed0d024130f58c5cfa', '300', 'cl 78', '2020-05-07 11:46:35', '2020-05-08 02:37:12', 0, 2, 1),
(3, '1002022390', 'crhis_jose@hotmail.com', 'crhistian', 2, 'crhis_jose@hotmail.com', '202cb962ac59075b964b07152d234b70', '300', 'cl', '2020-05-07 03:02:24', '2020-05-07 03:02:24', 0, 0, 1),
(4, '1002022390', 'crhis_jose@gmail.com', 'crhistian', 2, 'crhis_jose@gmail.com', '202cb962ac59075b964b07152d234b70', '300', 'cl', '2020-05-07 03:02:44', '2020-05-07 03:02:44', 0, 0, 1),
(5, '1002022390', 'madara', 'crhistian', 1, 'crhis_jose@hotmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '123', '123', '2020-05-08 12:02:46', '2020-05-08 12:02:46', 2, 2, 1),
(6, '1002022390', 'cabohotmail.com', 'crhistian torres', 3, 'crhis_jose@hotmail.com', '202cb962ac59075b964b07152d234b70', '22', '222', '2020-05-08 12:03:44', '2020-05-08 01:59:29', 2, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `tbl_tipousuarios`
--
ALTER TABLE `tbl_tipousuarios`
  ADD PRIMARY KEY (`t_id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_tipousuarios`
--
ALTER TABLE `tbl_tipousuarios`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
