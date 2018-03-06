-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2018 a las 06:22:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(4000) NOT NULL,
  `units_in_stock` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `reward_points_credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `max_reward_points_encash` int(11) NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `max_reward_points_encash`, `parent_category_id`) VALUES
(100, 'Mobile', 0, 100),
(101, 'Smartphones', 0, 100),
(102, 'Galaxy S', 0, 101),
(103, 'S9+', 0, 102),
(104, 'S9', 0, 102),
(105, 'S8+', 0, 102),
(106, 'S8+', 0, 102),
(107, 'S7 edge', 0, 102),
(108, 'S7', 0, 102),
(109, 'S6 edge+', 0, 102),
(110, 'S6 edge', 0, 102),
(111, 'S6', 0, 102),
(112, 'Galaxy A', 0, 101),
(113, 'A9 Pro 2016', 0, 112),
(114, 'A8+', 0, 112),
(115, 'A8', 0, 112),
(116, 'A7 (2017)', 0, 112),
(117, 'A7 (2016)', 0, 112),
(118, 'A5 (2017)', 0, 112),
(119, 'A5 (2016)', 0, 112),
(120, 'A3', 0, 112),
(121, 'A3', 0, 112),
(122, 'Galaxy J', 0, 101),
(123, 'J7 Pro Duos', 0, 122),
(124, 'J7 Pro', 0, 122),
(125, 'J7 Prime', 0, 122),
(126, 'J7 (2016)', 0, 122),
(127, 'J5 Pro Duos', 0, 122),
(128, 'J5 Pro', 0, 122),
(129, 'J5 Prime', 0, 122),
(130, 'J5 (2016)', 0, 122),
(131, 'J2 Prime', 0, 122),
(132, 'J1 mini Prime LTE', 0, 122),
(133, 'J1 mini Prime 3G', 0, 122),
(134, 'J1 mini', 0, 122),
(135, 'Galaxy Note', 0, 101),
(136, 'Note 8', 0, 135),
(137, 'Note 5', 0, 135),
(138, 'Tablets', 0, 100),
(139, 'Galaxy Tab S', 0, 138),
(140, 'Tab S3 (LTE)', 0, 139),
(141, 'Tab S3', 0, 139),
(142, 'Tab S2', 0, 139),
(143, 'Galaxy Tab A', 0, 138),
(144, 'Tab A (2016) con S Pen', 0, 143),
(145, 'Tab A (8.0, 4G)', 0, 143),
(146, 'Tab A (10.0) con S Pen', 0, 143),
(147, 'Tab A (2016, 7.0, 4G)', 0, 143),
(148, 'Tab A (2016, 7.0, Wi-Fi)', 0, 143),
(149, 'Tab A (9.7)', 0, 143),
(150, 'Galaxy Tab E', 0, 138),
(151, 'Tab E (Wi-Fi)', 0, 150),
(152, 'Tab E (7.0)', 0, 150),
(153, 'Tab E (9,6)', 0, 150),
(154, 'Galaxy Tab Book', 0, 138),
(155, 'Book (12.0)', 0, 154),
(156, 'Book (10.6)', 0, 154),
(160, 'Wearables', 0, 100),
(161, 'Gear VR', 0, 160),
(162, 'Gear 360', 0, 160),
(175, 'Accesorios', 0, 100),
(180, 'Cargador', 0, 175),
(185, 'Estuche', 0, 175),
(190, 'Audio', 0, 175),
(195, 'Bateria', 0, 175),
(200, 'TV & AV', 0, 200),
(210, 'TV', 0, 200),
(211, 'QLED', 0, 210),
(212, 'Serie Q7F', 0, 211),
(213, 'Serie Q8C', 0, 211),
(214, 'Serie Q', 0, 211),
(216, 'Premium UHD TV', 0, 210),
(217, 'MU6000', 0, 216),
(218, 'MU7000', 0, 216),
(219, 'J5000U', 0, 216),
(221, 'UHD TV', 0, 210),
(222, 'Flat Smart', 0, 221),
(223, 'Curved Smart', 0, 221),
(225, 'Full HD TV', 0, 210),
(226, 'J5000F', 0, 225),
(227, 'J6000F', 0, 225),
(228, 'K6000F', 0, 225),
(230, 'HD TV', 0, 210),
(231, 'K4000A', 0, 230),
(232, 'JH4000F', 0, 230),
(233, 'J4000A', 0, 230),
(250, 'Audio & video', 0, 200),
(251, 'Soundbar Sound', 0, 250),
(252, 'M8000', 0, 251),
(253, 'MS600', 0, 251),
(254, 'M4000', 0, 251),
(255, 'M300', 0, 251),
(256, 'MS6000', 0, 251),
(257, 'J5000', 0, 251),
(260, 'Barra de sonido', 0, 250),
(261, 'HW-M4000', 0, 260),
(262, 'HW-M300', 0, 260),
(263, 'HW-K450', 0, 260),
(264, 'HW-J6000R', 0, 260),
(265, 'HW-J7000', 0, 260),
(266, 'HW-K300', 0, 260),
(270, 'Audio inalambrico', 0, 250),
(271, 'WAM3000', 0, 270),
(272, 'WAM1000', 0, 270),
(273, 'WAM5000', 0, 270),
(274, 'WAM7000', 0, 270),
(275, 'Ultra HD Blu-ray', 0, 250),
(276, 'J5000', 0, 275),
(277, 'J4000', 0, 275),
(280, 'Sistema de Entretenimineto', 0, 250),
(281, 'HT-J5100', 0, 280),
(285, 'Componente Digital', 0, 250),
(290, 'Accesorios', 0, 250),
(300, 'Linea Blanca', 0, 300),
(305, 'Refrigeradores', 0, 300),
(310, 'Tipo Europeo', 0, 305),
(315, 'Exhibidor de alimentos', 0, 305),
(320, 'Congelador de montaje superior', 0, 305),
(325, 'De lado a lado', 0, 305),
(330, 'aire acondicionado', 0, 300),
(335, 'Residencial', 0, 330),
(340, 'Comercial', 0, 330),
(350, 'Lavadoras', 0, 300),
(355, 'Carga Frontal', 0, 350),
(360, 'Carga Superior', 0, 350),
(365, 'Combinacion', 0, 350),
(370, 'Secadora', 0, 350),
(375, 'electrodomesticos de cocina', 0, 300),
(380, 'Estufas Electricas', 0, 375),
(385, 'Microhondas', 0, 375),
(400, 'Informatica', 0, 400),
(405, 'Monitores', 0, 400),
(410, 'Monitor Curvo', 0, 405),
(415, 'Monitor Led', 0, 405),
(420, 'Monitor TV', 0, 405),
(425, 'Samsung Flip', 0, 405),
(430, 'Impresoras', 0, 400),
(435, 'Impresoras en color', 0, 430),
(440, 'Multifuncional a color', 0, 430),
(445, 'Impresoras en blanco y negro', 0, 430),
(450, 'Multifuncionales en blanco y negro', 0, 430),
(460, 'Suministros de impresora', 0, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category_discount`
--

CREATE TABLE `product_category_discount` (
  `id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL,
  `valid_from` timestamp NOT NULL,
  `valid_until` timestamp NOT NULL,
  `coupon_code` varchar(10) NOT NULL,
  `minimum_order_value` int(11) NOT NULL,
  `maximum_discount_amount` int(11) NOT NULL,
  `is_redeem_allowed` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_discount`
--

CREATE TABLE `product_discount` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL,
  `valid_from` timestamp NOT NULL,
  `valid_until` timestamp NOT NULL,
  `coupon_code` varchar(10) NOT NULL,
  `minimum_order_va lue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_pricing`
--

CREATE TABLE `product_pricing` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `base_price` int(11) NOT NULL,
  `create_date` timestamp NOT NULL,
  `expiry_date` timestamp NOT NULL,
  `in_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Indices de la tabla `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_category_id` (`parent_category_id`);

--
-- Indices de la tabla `product_category_discount`
--
ALTER TABLE `product_category_discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Indices de la tabla `product_discount`
--
ALTER TABLE `product_discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `product_pricing`
--
ALTER TABLE `product_pricing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`parent_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product_category_discount`
--
ALTER TABLE `product_category_discount`
  ADD CONSTRAINT `product_category_discount_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product_discount`
--
ALTER TABLE `product_discount`
  ADD CONSTRAINT `product_discount_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Filtros para la tabla `product_pricing`
--
ALTER TABLE `product_pricing`
  ADD CONSTRAINT `product_pricing_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
