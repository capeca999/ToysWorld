-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2020 a las 06:47:35
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `toysworld`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` smallint(6) NOT NULL,
  `postal_code` mediumint(9) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('envio','facturacion') COLLATE utf8mb4_unicode_ci NOT NULL,
  `way` enum('plaza','avenida','bulevar','calle') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `number`, `postal_code`, `location`, `province`, `country`, `type`, `way`, `nif`, `created_at`, `updated_at`) VALUES
(1, 'Santigo Huesca', 40, 46960, 'Aldaya', 'Valencia', 'España', 'envio', 'calle', '2164759G', NULL, NULL),
(2, 'Ginea', 20, 46940, 'Manises', 'Valencia', 'España', 'envio', 'calle', '6813479L', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parentCategories` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `id_parentCategories`, `created_at`, `updated_at`) VALUES
(1, 'Juguetes', NULL, NULL, NULL),
(2, 'Muñecas', NULL, NULL, NULL),
(3, 'Muñecas de trapo', 2, NULL, NULL),
(4, 'Juegos de Mesa', NULL, NULL, NULL),
(5, 'Juegos de construccion', NULL, NULL, NULL),
(6, 'Muñecos', NULL, NULL, NULL),
(7, 'Armas', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `type`, `id_product`, `created_at`, `updated_at`) VALUES
(1, 'jpg', 6, NULL, NULL),
(2, 'jpg', 6, NULL, NULL),
(3, 'jpg', 6, NULL, NULL),
(4, 'jpg', 7, NULL, NULL),
(5, 'jpg', 7, NULL, NULL),
(6, 'jpg', 8, NULL, NULL),
(7, 'jpg', 9, NULL, NULL),
(8, 'jpg', 9, NULL, NULL),
(9, 'jpg', 9, NULL, NULL),
(10, 'jpg', 10, NULL, NULL),
(11, 'jpg', 11, NULL, NULL),
(12, 'jpg', 12, NULL, NULL),
(13, 'jpg', 13, NULL, NULL),
(14, 'jpg', 14, NULL, NULL),
(15, 'jpg', 15, NULL, NULL),
(16, 'jpg', 16, NULL, NULL),
(17, 'jpg', 17, NULL, NULL),
(18, 'jpg', 18, NULL, NULL),
(19, 'jpg', 19, NULL, NULL),
(20, 'jpg', 20, NULL, NULL),
(21, 'jpg', 21, NULL, NULL),
(22, 'jpg', 22, NULL, NULL),
(23, 'jpg', 23, NULL, NULL),
(24, 'jpg', 24, NULL, NULL),
(25, 'jpg', 25, NULL, NULL),
(26, 'jpg', 26, NULL, NULL),
(27, 'jpg', 27, NULL, NULL),
(28, 'jpg', 28, NULL, NULL),
(29, 'jpg', 29, NULL, NULL),
(30, 'jpg', 30, NULL, NULL),
(31, 'jpg', 31, NULL, NULL),
(32, 'jpg', 32, NULL, NULL),
(33, 'jpg', 33, NULL, NULL),
(34, 'jpg', 34, NULL, NULL),
(35, 'jpg', 35, NULL, NULL),
(36, 'jpg', 36, NULL, NULL),
(37, 'jpg', 5, NULL, NULL),
(38, 'jpg', 5, NULL, NULL),
(39, 'jpg', 4, NULL, NULL),
(40, 'jpg', 4, NULL, NULL),
(41, 'jpg', 1, NULL, NULL),
(42, 'jpg', 1, NULL, NULL),
(43, 'jpg', 2, NULL, NULL),
(44, 'jpg', 2, NULL, NULL),
(45, 'jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lines`
--

CREATE TABLE `lines` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lines`
--

INSERT INTO `lines` (`id_product`, `id_order`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 20, NULL, NULL),
(1, 3, 20, 20, NULL, NULL),
(3, 1, 100, 11, NULL, NULL),
(3, 2, 1, 20, NULL, NULL),
(3, 3, 100, 0, NULL, NULL),
(4, 1, 24, 90, NULL, NULL),
(5, 1, 500, 100, NULL, NULL),
(7, 4, 3, 80, NULL, NULL),
(12, 6, 2, 111, NULL, NULL),
(22, 9, 5, 500, NULL, NULL),
(28, 5, 30, 100, NULL, NULL),
(29, 9, 10, 100, NULL, NULL),
(35, 8, 3, 50, NULL, NULL),
(36, 7, 2, 225, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_11_194357_direcciones', 1),
(5, '2020_02_11_194413_metodos_pago', 1),
(6, '2020_02_11_194427_pedidos', 1),
(7, '2020_02_11_195717_categorias', 1),
(8, '2020_02_11_195725_fotos', 1),
(9, '2020_02_11_195740_productos', 1),
(10, '2020_02_11_195747_linea_pedido', 1),
(11, '2020_02_12_181134_fk_dir', 1),
(12, '2020_02_12_181151_fk_met', 1),
(13, '2020_02_12_181203_fk_ped', 1),
(14, '2020_02_12_181217_fk_pro', 1),
(15, '2020_02_12_181232_fk_fot', 1),
(16, '2020_02_12_181246_fk_lin', 1),
(17, '2020_02_12_181727_fk_cat', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_price` double(8,2) NOT NULL,
  `payment_methods` enum('PayPal','Tarjeta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `date`, `total_price`, `payment_methods`, `nif`, `created_at`, `updated_at`) VALUES
(1, '2020-02-14 15:41:21', 70.00, 'PayPal', '49573986Q', NULL, NULL),
(2, '2020-02-14 15:41:21', 100.00, 'Tarjeta', '49573986Q', NULL, NULL),
(3, '2020-02-14 15:55:30', 20.00, 'PayPal', '49573986Q', NULL, NULL),
(4, '2020-02-21 04:05:53', 240.00, 'PayPal', '03123123', NULL, NULL),
(5, '2020-02-21 04:07:57', 3000.00, 'Tarjeta', '7765834D', NULL, NULL),
(6, '2020-02-21 04:09:54', 212.00, 'PayPal', '03123123', NULL, NULL),
(7, '2020-02-21 04:10:08', 450.00, 'PayPal', '7765834D', NULL, NULL),
(8, '2020-02-21 04:10:36', 150.00, 'PayPal', '6813479L', NULL, NULL),
(9, '2020-02-21 04:10:56', 1500.00, 'Tarjeta', '03123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('PayPal','Tarjeta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `type`, `data`, `nif`, `created_at`, `updated_at`) VALUES
(1, 'Visa', 'Tarjeta', '', '6813479L', NULL, NULL),
(2, 'Visa', 'Tarjeta', '', '47586112F', NULL, NULL),
(3, 'MasterCard', 'Tarjeta', 'sadasdas', '03123123', NULL, NULL),
(4, 'Paypal', 'PayPal', 'asdasd', '03123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxes` double NOT NULL,
  `discount` double DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double NOT NULL,
  `price` double NOT NULL,
  `age` smallint(6) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` enum('Disponible','No_Disponible') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `taxes`, `discount`, `name`, `description`, `brand`, `weight`, `price`, `age`, `stock`, `status`, `id_category`, `created_at`, `updated_at`) VALUES
(1, 20, 20, 'Hulk', 'Muñeco Hulk', 'Marca', 20, 20, 20, 20, 'Disponible', 1, NULL, NULL),
(2, 40, 40, 'Barbie', 'Una Barbie super mona', 'La moda', 20, 20, 20, 20, 'Disponible', 2, NULL, NULL),
(3, 60, 60, 'Saltainbanquis', 'Super rojo', 'Simba', 20, 20, 20, 20, 'Disponible', 1, NULL, NULL),
(4, 90, 90, 'Dora', 'Dora un muñeco', 'Cisco', 10, 10, 10, 10, 'Disponible', 1, NULL, NULL),
(5, 20, 20, 'Yoyo', 'Super guay', 'Mace', 20, 20, 20, 20, 'Disponible', 1, NULL, NULL),
(6, 21, 5, 'El Lobo', 'Es un juego de cartas de 8 a 18 jugadores creado en 2001 por Dimitry Davidoff, Philippe des Pallières y Hervé Marly e inspirado en el juego precedente Werewolf (1986), que fue a su vez un rediseño del juego Mafia adaptando su tema al de los hombres lobo.', 'CastroNegro', 0.21, 25, 12, 35, 'Disponible', 4, NULL, NULL),
(7, 0, NULL, 'Casa de la patrulla canina', 'Casita de la patrulla canina bien bonita', 'Nickelodeon', 1000, 250, 5, 64, '', 1, NULL, NULL),
(8, 56, NULL, 'Remolque rojo', 'Remolque rojo para niños con aspiraciones de albañilería', 'Hot Wheels', 200, 68, 3, 23, '', 1, NULL, NULL),
(9, 56, NULL, 'Circuito Infernal Hot Wheels', 'Circuito de coche para niños y brum brum', 'Hot Wheels', 1500, 210, 6, 12, '', 1, NULL, NULL),
(10, 56, NULL, 'Bomberos Lego', 'Bomberos + camión apagafuegos 100% real no fake', 'Lego', 400, 114, 5, 10, '', 5, NULL, NULL),
(11, 56, 23, 'Nave de Star Wars', 'Halcón milenario fake que es de star wars, ideal para tus hijos con ilusión por la vida', 'Lego', 300, 67, 8, 6, '', 5, NULL, NULL),
(12, 15, NULL, 'Classic OjosLocos', 'Kit de construcción con los ojoslocos ', 'Lego', 200, 47, 4, 6, '', 5, NULL, NULL),
(13, 2, NULL, 'Lego Frozen II', 'Castillo pocho de frozen, segunda edición', 'Lego', 150, 34, 6, 42, '', 5, NULL, NULL),
(14, 23, NULL, 'Kit Lego Aragog', 'Kit de harry potter de aragog ron y harry en el bosque prohibido', 'Lego', 640, 68, 7, 16, '', 5, NULL, NULL),
(15, 27, NULL, 'Lego Frozen II Carro', 'Carroza de frozen donde puedes despediciar unos dineros', 'Lego', 140, 16, 4, 11, '', 5, NULL, NULL),
(16, 56, NULL, 'Hidden side', 'Construye en el bosque tenebroso', 'Lego', 100, 15, 4, 57, '', 5, NULL, NULL),
(17, 52, NULL, 'Lego Family Friendly ', 'Juntate con tus amigos en el bosque de la música', 'Lego', 130, 37, 6, 2, '', 5, NULL, NULL),
(18, 46, NULL, 'Lego Mickey', 'Mickey mouse HEY YOU', 'Lego', 250, 32, 2, 3, '', 5, NULL, NULL),
(19, 22, NULL, 'Lego City', 'Coche sucio Lego', 'Lego', 200, 16, 5, 42, '', 5, NULL, NULL),
(20, 1, NULL, 'Helicóptero Playmobil', 'Disfruta del aire junto a tus amigos playmobil', 'Playmobil', 100, 7, 1, 5, '', 6, NULL, NULL),
(21, 11, NULL, 'Ghostbusters Playmobil', 'CAZA MAS FANTASMAS QUE EN UNA DISCOTECA OCHENTERA', 'Playmobil', 100, 22, 6, 68, '', 6, NULL, NULL),
(22, 66, NULL, 'Formula 1 Playmobil', 'Formula 1 en puro sentimiento, FUEGO, ACCION', 'Playmobil', 200, 25, 4, 25, '', 6, NULL, NULL),
(23, 34, NULL, 'Pistolilla Nerf', 'Pistola blanca modelo sencillo nerf pampam', 'Nerf', 150, 15, 12, 10, '', 7, NULL, NULL),
(24, 51, NULL, 'MegaEscopeta Nerf', 'ESCOPETON DE LOCOS PAAAAM', 'Nerf', 450, 36, 12, 123, '', 7, NULL, NULL),
(25, 23, NULL, 'N-Strike Nerf', 'Pack de 12 cartuchos de balazos de nerf PAM', 'Nerf', 80, 10, 8, 24, '', 7, NULL, NULL),
(26, 23, NULL, 'Doble Pistola Nerf', 'Dos pistolas para ir por la vida como Lucky Luck', 'Nerf', 350, 45, 8, 23, '', 7, NULL, NULL),
(27, 12, NULL, 'Pistola con Diana Nerf', 'Disfruta disparando a la diana para no tener que usar a tu hamster', 'Nerf', 400, 52, 8, 12, '', 7, NULL, NULL),
(28, 52, NULL, 'XShot', 'Pistola mata bichos, nerf del chino', 'XShot', 100, 12, 8, 15, '', 7, NULL, NULL),
(29, 23, NULL, 'Bratz NegriRubia', 'Bratz más integrada que nunca, se una diva y creete una kardashian con tus niñas', 'Bratz', 100, 30, 3, 231, '', 2, NULL, NULL),
(30, 63, NULL, 'Bratz france', 'Francesa de viaje a la que estafan las boutiques mientras hace fotos de la torre eiffel', 'Bratz', 100, 20, 5, 42, '', 2, NULL, NULL),
(31, 32, NULL, 'Bratz BadGyal', 'Muñeca con chandal con toda la clase del barrio', 'Bratz', 100, 50, 5, 12, '', 2, NULL, NULL),
(32, 42, NULL, 'Algo Pasa con Mariano', 'Mariano el loco saca su juego de mesa, dale bro', 'Diset', 1500, 35, 10, 3, '', 4, NULL, NULL),
(33, 21, NULL, 'Circuito Mario Kart', 'Escalextrix versión innovada y más divertida que nunca, juega con tus hijos para ganar a Toad en la senda arcoiris', 'Nintendo', 4300, 230, 6, 56, '', 1, NULL, NULL),
(34, 11, NULL, 'Rummikub', 'Rummikub, juego de números y letras, bueno más de números que de letras la verdad', 'RummiSL', 3000, 1200, 10, 7, '', 4, NULL, NULL),
(35, 99, NULL, 'Fabrica de bromas', 'El precio es muy caro porque hoy en dia un chiste te puede arrebatar todo', 'Science4you', 3780, 3005, 5, 2, '', 4, NULL, NULL),
(36, 23, NULL, 'La ciencia Viscosa', 'Viscosidad pura y dura como en tu adolescencia', 'Science4you', 1500, 172, 7, 52, '', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Usuario','Administrador') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nif`, `name`, `surname1`, `surname2`, `email`, `role`, `password`, `date_of_birth`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
('03123123', 'mg', 'gil', 'alcacer', 'supercoco.mg@gmail.com', NULL, '$2y$10$b38BCpCIT7Zkxj7R2Ilj1OBLlK73Zkuwz3ONYxW4BbKzDaoTzNuzy', '2132-03-08', NULL, NULL, '2020-02-20 21:26:55', '2020-02-20 21:26:55'),
('2164759G', 'Kiko', 'Jolines', 'Sparta', 'kiko@gmail.com', 'Usuario', '1234', '1980-05-02', NULL, NULL, NULL, NULL),
('47586112F', 'Sara', 'Socas', 'Huerta', 'sara@gmail.com', 'Usuario', '1234', '1996-02-13', NULL, NULL, NULL, NULL),
('49573986Q', 'Paco', 'Pinazo', 'Guna', 'capeca999@gmail.com', 'Usuario', 'pinazo', '2020-02-11', NULL, NULL, NULL, NULL),
('6813479L', 'Marta', 'Huelva', 'Cruz', 'marta@gmail.com', 'Usuario', '1234', '1996-02-04', NULL, NULL, NULL, NULL),
('7765834D', 'Martin', 'Castillo', 'Suarez', 'martin@gmail.com', 'Administrador', '1234', '1968-12-04', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_nif_foreign` (`nif`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id_parentcategories_foreign` (`id_parentCategories`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_id_product_foreign` (`id_product`);

--
-- Indices de la tabla `lines`
--
ALTER TABLE `lines`
  ADD PRIMARY KEY (`id_product`,`id_order`),
  ADD KEY `lines_id_order_foreign` (`id_order`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_nif_foreign` (`nif`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_methods_nif_foreign` (`nif`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_category_foreign` (`id_category`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nif`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_nif_foreign` FOREIGN KEY (`nif`) REFERENCES `users` (`nif`) ON DELETE CASCADE;

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_id_parentcategories_foreign` FOREIGN KEY (`id_parentCategories`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `lines`
--
ALTER TABLE `lines`
  ADD CONSTRAINT `lines_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lines_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_nif_foreign` FOREIGN KEY (`nif`) REFERENCES `users` (`nif`) ON DELETE CASCADE;

--
-- Filtros para la tabla `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD CONSTRAINT `payment_methods_nif_foreign` FOREIGN KEY (`nif`) REFERENCES `users` (`nif`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
