-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2020 a las 23:28:39
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
-- Estructura de tabla para la tabla `tbl_articulos`
--

CREATE TABLE `tbl_articulos` (
  `id` int(11) NOT NULL,
  `imageurl` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagenombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `codart` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nomart` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `valart` bigint(20) NOT NULL,
  `qtyart` int(11) NOT NULL,
  `descripción` text COLLATE utf8_spanish_ci NOT NULL,
  `fechacrea` datetime NOT NULL,
  `fechamod` datetime NOT NULL,
  `usuariocrea` int(11) NOT NULL,
  `usuariomod` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_articulos`
--

INSERT INTO `tbl_articulos` (`id`, `imageurl`, `imagenombre`, `categoria`, `codart`, `nomart`, `valart`, `qtyart`, `descripción`, `fechacrea`, `fechamod`, `usuariocrea`, `usuariomod`, `estado`) VALUES
(1, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(2, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(3, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(4, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(5, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(6, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(7, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(8, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(9, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(10, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1),
(11, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(12, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(13, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(14, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(15, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(16, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(17, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(18, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(19, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(20, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1),
(21, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(22, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(23, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(24, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(25, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(26, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(27, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(28, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(29, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(30, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1),
(31, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(32, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(33, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(34, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(35, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(36, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(37, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(38, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(39, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(40, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1),
(41, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(42, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(43, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(44, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(45, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(46, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(47, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(48, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(49, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(50, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1),
(51, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(52, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(53, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(54, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(55, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(56, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(57, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(58, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(59, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(60, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1),
(61, 'asset/administrativo/imgarticulos/1.jpg', '1.jpg', 1, '123', 'Promo plato mixto', 15000, 10, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\r\n\r\n', '2020-05-13 05:40:22', '2020-05-13 05:40:22', 1, 1, 1),
(62, 'asset/administrativo/imgarticulos/2.jpg', '2.jpg', 1, '124', 'combo arabe', 35000, 10, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-05-13 05:42:48', '2020-05-13 05:42:48', 1, 1, 1),
(63, 'asset/administrativo/imgarticulos/3.jpg', '3.jpg', 5, '2', 'Royal County Of Berkshire Polo Club', 150000, 25, 'Tenis Negro-Blancos Royal County of Berkshire Polo Club', '2020-05-14 09:44:37', '2020-05-14 09:44:37', 1, 1, 1),
(64, 'asset/administrativo/imgarticulos/4.jpg', '4.jpg', 6, '987', 'camisa avenger', 25000, 150, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Maloruby Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-05-15 10:00:59', '2020-05-15 10:02:16', 1, 1, 1),
(65, 'asset/administrativo/imgarticulos/5.jpg', '5.jpg', 2, '965', 'pc multiusios', 1500000, 5, 'Estas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.\n\nEstas dos reglas de CSS existen en Chrome desde el año 2013 y desde entonces los demás navegadores lo han ido incorporando poco a poco: Opera y Safari en 2014 y Firefox en 2015. Faltaba Edge por introducirlo y finalmente la versión 16 soporta (limitado a imágenes pero no a vídeo) object-fit y object-position. Esto son muy buenas noticias pues nos asegura que esta función tan útil empieza a ser un sustituto a considerar para centrar imágenes en nuestros proyectos, dejando de lado aproximaciones más antiguas con considerables inconvenientes.', '2020-05-15 10:21:02', '2020-05-15 10:21:02', 1, 1, 1),
(66, 'asset/administrativo/imgarticulos/6.jpg', '6.jpg', 3, '74', 'salsa de tomate', 9000, 52, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:24', '2020-05-18 11:21:24', 1, 1, 1),
(67, 'asset/administrativo/imgarticulos/7.jpg', '7.jpg', 6, '758', 'camisa 2', 40000, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:21:56', '2020-05-18 11:21:56', 1, 1, 1),
(68, 'asset/administrativo/imgarticulos/8.png', '8.png', 4, '968', 'tienda 2', 9500, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam', '2020-05-18 11:22:24', '2020-05-18 11:22:24', 1, 1, 1),
(69, 'asset/administrativo/imgarticulos/9.jpg', '9.jpg', 1, '111', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:00', '2020-05-18 11:23:00', 1, 1, 1),
(70, 'asset/administrativo/imgarticulos/10.jpg', '10.jpg', 1, '589', 'alimetis2', 54000, 5, 'alimetis2', '2020-05-18 11:23:10', '2020-05-18 11:23:10', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carrito`
--

CREATE TABLE `tbl_carrito` (
  `c_cliente` int(11) NOT NULL,
  `c_producto` int(11) NOT NULL,
  `c_und` int(11) NOT NULL,
  `c_undvalor` bigint(20) NOT NULL,
  `c_totalvalor` bigint(20) NOT NULL,
  `c_fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_carrito`
--

INSERT INTO `tbl_carrito` (`c_cliente`, `c_producto`, `c_und`, `c_undvalor`, `c_totalvalor`, `c_fecha`) VALUES
(3, 3, 3, 150000, 450000, '2020-05-20 02:21:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `id` int(11) NOT NULL,
  `codgru` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nomgru` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechacrea` datetime NOT NULL,
  `fechamod` datetime NOT NULL,
  `usuariocrea` int(11) NOT NULL,
  `usuariomod` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`id`, `codgru`, `nomgru`, `fechacrea`, `fechamod`, `usuariocrea`, `usuariomod`, `estado`) VALUES
(1, '001', 'cocina', '2020-05-13 05:37:45', '2020-05-13 05:37:45', 1, 1, 1),
(2, '002', 'tecnologia', '2020-05-13 05:38:00', '2020-05-13 05:38:00', 1, 1, 1),
(3, '003', 'viveres', '2020-05-13 05:38:07', '2020-05-13 05:38:07', 1, 1, 1),
(4, '004', 'mandado', '2020-05-13 05:38:15', '2020-05-13 05:38:15', 1, 1, 1),
(5, '005', 'zapateria', '2020-05-14 09:42:38', '2020-05-14 09:42:38', 1, 1, 1),
(6, '006', 'moda', '2020-05-15 10:00:01', '2020-05-15 10:00:01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_promociones`
--

CREATE TABLE `tbl_promociones` (
  `p_id` int(11) NOT NULL,
  `p_img` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_nomimg` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `p_tbl` int(11) NOT NULL,
  `p_elegido` int(11) NOT NULL,
  `p_porcentaje` int(11) NOT NULL,
  `p_usuariocrea` int(11) NOT NULL,
  `p_usuariomod` int(11) NOT NULL,
  `p_fechacrea` datetime NOT NULL,
  `p_fechamod` datetime NOT NULL,
  `p_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_promociones`
--

INSERT INTO `tbl_promociones` (`p_id`, `p_img`, `p_nomimg`, `p_tbl`, `p_elegido`, `p_porcentaje`, `p_usuariocrea`, `p_usuariomod`, `p_fechacrea`, `p_fechamod`, `p_estado`) VALUES
(1, 'asset/administrativo/imgpromociones/1.jpg', '1.jpg', 1, 2, 25, 1, 1, '2020-05-20 10:15:06', '2020-05-20 04:07:27', 1),
(2, 'asset/administrativo/imgpromociones/2.jpg', '2.jpg', 2, 4, 10, 1, 1, '2020-05-20 11:38:01', '2020-05-20 04:10:19', 1),
(3, 'asset/administrativo/imgpromociones/3.jpg', '3.jpg', 2, 2, 15, 1, 1, '2020-05-20 11:55:36', '2020-05-20 04:07:53', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tabla`
--

CREATE TABLE `tbl_tabla` (
  `t_id` int(11) NOT NULL,
  `t_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_tabla`
--

INSERT INTO `tbl_tabla` (`t_id`, `t_nombre`) VALUES
(1, 'CATEGORIAS'),
(2, 'ARTICULOS');

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
(1, '100', 'master', 'usuario master', 1, 'master@hotmail.com', '202cb962ac59075b964b07152d234b70', '300', 'cl 76', '2020-05-11 03:08:09', '2020-05-11 03:08:09', 0, 0, 1),
(2, '12', 'prueba1', 'prueba1', 3, 'prueba@gmail.es', '202cb962ac59075b964b07152d234b70', '300', 'cl 300', '2020-05-13 09:40:55', '2020-05-13 09:40:55', 1, 1, 1),
(3, '1002022390', 'crhis_jose@hotmail.com', 'crhistian', 2, 'crhis_jose@hotmail.com', '202cb962ac59075b964b07152d234b70', '300', 'cl 76', '2020-05-13 02:21:42', '2020-05-13 02:21:42', 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_articulos`
--
ALTER TABLE `tbl_articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_promociones`
--
ALTER TABLE `tbl_promociones`
  ADD PRIMARY KEY (`p_id`);

--
-- Indices de la tabla `tbl_tabla`
--
ALTER TABLE `tbl_tabla`
  ADD PRIMARY KEY (`t_id`);

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
-- AUTO_INCREMENT de la tabla `tbl_articulos`
--
ALTER TABLE `tbl_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_promociones`
--
ALTER TABLE `tbl_promociones`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_tabla`
--
ALTER TABLE `tbl_tabla`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_tipousuarios`
--
ALTER TABLE `tbl_tipousuarios`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
