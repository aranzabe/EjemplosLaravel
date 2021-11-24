-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-11-2021 a las 00:44:02
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `migSeedApi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint UNSIGNED NOT NULL,
  `idPersona` bigint UNSIGNED NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `idPersona`, `texto`, `created_at`, `updated_at`) VALUES
(1, 2, 'Eum ab facere qui exercitationem dignissimos consequatur cupiditate voluptatem. Dicta voluptatum quia maxime non velit ea. Amet odit dolorum error ratione blanditiis quibusdam qui.', '2021-11-23 22:10:25', '2021-11-23 22:10:25'),
(2, 4, 'Tenetur quasi enim neque veniam. Deleniti numquam esse iste. Doloremque quo velit et sequi. Minima alias non et.', '2021-11-23 22:10:25', '2021-11-23 22:10:25'),
(3, 2, 'Inventore voluptatum autem blanditiis praesentium. Nemo non autem tempora eos porro doloremque qui vel. Consectetur amet est qui et. Deleniti soluta sit cum enim et et qui.', '2021-11-23 22:10:25', '2021-11-23 22:10:25'),
(4, 1, 'Excepturi nesciunt totam culpa est fugit. Qui necessitatibus et voluptas libero aut. Alias ea velit ex ex. Hic autem est fuga vel molestiae magni.', '2021-11-23 22:10:25', '2021-11-23 22:10:25'),
(5, 9, 'Minus sed soluta repellat rerum vel dolorum. Odio nihil est deserunt deleniti inventore. Sint laborum reprehenderit nam doloremque cumque est deleniti. Illum omnis iste quas non.', '2021-11-23 22:10:25', '2021-11-23 22:10:25'),
(6, 7, 'Eos fugit eius in non laboriosam magnam. Officiis enim dolore et nisi est tempore. Ipsa nihil reprehenderit incidunt id eos mollitia earum.', '2021-11-23 22:10:26', '2021-11-23 22:10:26'),
(7, 8, 'Sint cumque dolore dignissimos velit adipisci aut incidunt. Nesciunt voluptas harum perspiciatis neque fuga ratione. Aliquam quidem et aut qui. Cumque aut quo atque nihil totam.', '2021-11-23 22:10:26', '2021-11-23 22:10:26'),
(8, 5, 'Officiis nemo voluptatem magni. Aut sit sint saepe ea quos. Nostrum fugit a ea officiis et est. Cupiditate ducimus unde amet occaecati.', '2021-11-23 22:10:26', '2021-11-23 22:10:26'),
(9, 10, 'Rerum dolores minima architecto magnam. Magni veritatis provident tempora velit saepe exercitationem. Deserunt rerum est omnis aut beatae. Quod veritatis sed rerum vitae.', '2021-11-23 22:10:26', '2021-11-23 22:10:26'),
(10, 10, 'Ea id repudiandae et ex voluptate quas. Asperiores velit rerum non numquam placeat. Minus consequatur eius eos ut quas maiores animi. Est nihil odio sapiente laborum et.', '2021-11-23 22:10:26', '2021-11-23 22:10:26'),
(11, 4, 'Qui doloremque qui autem quod sed dolorum repellat. Asperiores sit quasi assumenda recusandae. Eaque iste in adipisci ea qui quasi.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(12, 8, 'Sed culpa quia distinctio culpa impedit omnis temporibus. Amet adipisci rem veritatis qui doloribus quia amet in. Dignissimos animi nam suscipit rerum.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(13, 3, 'Expedita ab est optio ullam tempore. Itaque nihil voluptas nisi ex amet dolorum. Et iure officia rerum provident eum nostrum. Omnis accusamus quia nobis rerum suscipit dolor voluptatem eligendi.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(14, 9, 'Vel et recusandae eveniet eius reprehenderit ullam. Reiciendis a dignissimos velit natus. Saepe dignissimos aliquam aut. Incidunt ad nulla totam vero rerum qui eaque.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(15, 3, 'Animi odit animi aspernatur dolores. Sed aliquid similique natus accusamus omnis.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(16, 5, 'Minus rem dolor corporis voluptatem et totam quis. Rerum placeat et asperiores qui reiciendis aut dolores. Eaque sit fugiat repudiandae sint sunt officia. Nemo tempore dolor ut dolores.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(17, 8, 'Et cumque blanditiis autem. Sed laboriosam doloremque quae ea. Et et sunt ut facilis inventore molestiae. Vitae non nam necessitatibus nihil dolorem nihil.', '2021-11-23 22:10:42', '2021-11-23 22:10:42'),
(18, 3, 'In mollitia corrupti sed aliquid inventore sit. Error aut autem tempore alias in eum minus aut. Aut odit quisquam cum eos.', '2021-11-23 22:10:43', '2021-11-23 22:10:43'),
(19, 4, 'Maiores vel nulla illum quidem minus voluptatem. Quo non velit nihil maiores. Earum voluptas nostrum adipisci. Numquam sequi impedit dolores itaque.', '2021-11-23 22:10:43', '2021-11-23 22:10:43'),
(20, 1, 'Voluptatem voluptatum corporis ratione saepe qui aut aliquid temporibus. Quis neque sunt sed dolorem. Voluptatem voluptatem a qui quisquam qui quis.', '2021-11-23 22:10:43', '2021-11-23 22:10:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_11_23_221654_create_personas', 1),
(2, '2021_11_23_221952_create_comentarios', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `edad`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Karine Rau DDS', 41, '2021-11-23 22:03:30', '2021-11-23 22:03:30'),
(2, 'Dr. Theron Wisozk III', 42, '2021-11-23 22:03:30', '2021-11-23 22:03:30'),
(3, 'Jaron Aufderhar', 37, '2021-11-23 22:03:30', '2021-11-23 22:03:30'),
(4, 'Amelie Weimann', 96, '2021-11-23 22:03:30', '2021-11-23 22:03:30'),
(5, 'Jana Daugherty IV', 50, '2021-11-23 22:03:30', '2021-11-23 22:03:30'),
(6, 'Jennie Batz', 72, '2021-11-23 22:03:30', '2021-11-23 22:03:30'),
(7, 'Ms. Colleen Walker IV', 51, '2021-11-23 22:03:31', '2021-11-23 22:03:31'),
(8, 'Jettie Pouros', 90, '2021-11-23 22:03:31', '2021-11-23 22:03:31'),
(9, 'Lilly Reilly III', 88, '2021-11-23 22:03:31', '2021-11-23 22:03:31'),
(10, 'Julien Gorczany', 94, '2021-11-23 22:03:31', '2021-11-23 22:03:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_idpersona_foreign` (`idPersona`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_idpersona_foreign` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
