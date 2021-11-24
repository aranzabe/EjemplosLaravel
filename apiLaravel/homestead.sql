-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-01-2021 a las 10:56:42
-- Versión del servidor: 8.0.22-0ubuntu0.20.04.3
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
-- Base de datos: `homestead`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Nobis voluptates sint consequuntur in.', 'Autem in ipsam voluptas sit. Adipisci cum repellendus ut quos necessitatibus provident. Expedita omnis inventore et alias ullam qui est.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(2, 'Sit aut nihil aperiam sed laudantium.', 'Rerum ducimus fuga debitis. Quasi rerum totam qui corrupti cum est. Qui itaque dolor rerum facere ut autem. Dolor doloremque voluptas dolorem esse vero. Magni sunt dolores molestiae et eum harum quos.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(3, 'Aperiam in laborum dolorem fuga et.', 'Ex praesentium est expedita dolorem aut beatae ad. Blanditiis illo tenetur nemo ut cumque saepe. Vitae cum tenetur perferendis rerum nostrum adipisci sit.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(4, 'Consectetur minus debitis aut.', 'Molestiae id sequi dignissimos hic saepe. Sed sint non architecto iste aut. Dicta ipsa maiores quibusdam placeat voluptatum. Nesciunt aut earum quo cupiditate.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(5, 'Quia explicabo autem animi quia ea culpa.', 'Quia ut sequi omnis quis sed sed eos. Esse asperiores minus alias quam. Consequatur voluptatum rerum facilis quis qui et commodi. Dolorem porro error architecto illum tempora dignissimos.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(6, 'Qui ut voluptatem voluptas quod voluptatem accusantium voluptatem.', 'Voluptatibus magni id in odit. Mollitia architecto vel dignissimos eveniet et fugit. Aut pariatur illum dolores ex laboriosam dolore quas.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(7, 'Quis tempore non maiores ab.', 'Alias ipsam voluptas consequatur exercitationem sit odio est. Rem rem nemo neque quas harum optio. Beatae facilis non numquam nisi non optio et.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(8, 'Rerum autem sint natus odio.', 'Magni exercitationem tempora ut quasi asperiores. Unde consectetur id saepe expedita sit natus. Exercitationem consequatur nemo voluptatum eligendi. Aliquam dolores officia voluptas sit non.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(9, 'Laudantium neque autem est aut nostrum illum totam voluptatum.', 'Deserunt sit facere tempore repellat aliquid quos quas suscipit. Nisi quis ducimus aut commodi. Omnis ducimus iure corporis qui culpa earum.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(10, 'Aut delectus aut necessitatibus illum saepe sequi.', 'Id ullam officia pariatur vitae repudiandae et. Eligendi libero vero praesentium nihil. Suscipit blanditiis voluptatibus voluptatem cum distinctio culpa. Qui quod illo voluptas tenetur fuga neque sit enim.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(11, 'Voluptas optio repellat et eius.', 'Ex dolor dolorem nam et. Vel laudantium qui ex nesciunt.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(12, 'Vitae consectetur eum ut quo quae.', 'Et recusandae modi nihil optio recusandae assumenda. Nam quaerat id repudiandae voluptatem. Quo ratione nihil modi rem.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(13, 'Praesentium cum sint et ut rem repellat veniam.', 'Sit totam commodi facere ut et accusamus. Saepe laborum repellendus laudantium. Asperiores et laborum deserunt voluptatibus rerum magnam.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(14, 'Velit ipsam quod sed est nam blanditiis ipsam.', 'Nihil et dolorum vel et. Quae alias dolor dolores. Consequatur nihil natus eos sit minus minus animi. Aspernatur et et perspiciatis eligendi laboriosam.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(15, 'Nesciunt et rem facilis velit doloribus animi quos.', 'Error a est et vel aut eaque facere. Occaecati aut libero tenetur ut velit. Impedit quaerat nisi laudantium sint eos nihil. Tenetur incidunt dolore sed nobis autem. Omnis doloribus sapiente placeat iusto.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(16, 'Officia hic at nihil.', 'Veniam mollitia quas at ipsum ipsum dolore eum. Architecto repellat corrupti adipisci quas. Voluptatum et non aut et neque nam. Et non eum est excepturi.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(17, 'Et sed vero voluptas et aspernatur illum ut.', 'Voluptatem et excepturi voluptas aut distinctio. Autem neque officiis maxime et. Doloremque mollitia assumenda praesentium id beatae molestiae. Repellendus rerum harum quia ut.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(18, 'Culpa officia exercitationem cum unde est cum.', 'In doloremque recusandae tempora in. Corporis et magnam saepe aliquid aut beatae voluptate. Quae sit cupiditate fugiat voluptate. Aut est velit ad odio.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(19, 'In id cum accusamus ut mollitia quae beatae aperiam.', 'Porro tempora occaecati quibusdam aut praesentium. Hic odit facilis id pariatur eos ab corrupti corporis. Ut optio necessitatibus corrupti. Qui nisi harum porro quo deserunt voluptatum.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(20, 'Fuga reprehenderit exercitationem harum itaque consequuntur.', 'Corrupti similique nostrum sunt ratione. Et nulla voluptates rerum dolorem corporis. Vel nesciunt doloribus a. Omnis assumenda et mollitia sint incidunt id distinctio ut.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(21, 'Laborum sint sit quia qui enim.', 'Id facilis sed voluptates tempore in odit praesentium. Nostrum atque eos aut quam sunt. Facere assumenda harum voluptates totam iusto temporibus. Ut aliquid eum facere adipisci quaerat quidem et.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(22, 'Qui et cumque nihil ut nihil aut minima.', 'Exercitationem dolor dolorem voluptatum et quibusdam ducimus ea. Earum voluptatem accusamus et et. Fugiat totam vel vel ut consectetur.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(23, 'Dignissimos incidunt qui nemo impedit sint ullam quis.', 'Sit est et eaque nulla enim quae ut. Nam sed accusamus illum soluta. Aliquam dignissimos nam nulla necessitatibus.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(24, 'Ut libero suscipit laborum pariatur.', 'Dolorum est nihil enim sed. Soluta omnis voluptatem et pariatur reiciendis. Impedit optio consequuntur fugiat laboriosam.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(25, 'Repellat aperiam rerum modi eveniet doloribus.', 'Aut incidunt a eligendi vel. Commodi reprehenderit exercitationem quam mollitia itaque beatae. Aperiam incidunt placeat velit suscipit quia.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(26, 'Maiores iusto voluptas et voluptatem impedit.', 'Aliquid soluta tenetur porro ipsa vel odio. Asperiores dolorem placeat commodi expedita. Aliquid odio explicabo non inventore neque. Aliquam sunt quas ut incidunt optio id et. Cum modi illo voluptatum qui omnis.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(27, 'Qui dolore assumenda recusandae sunt ducimus nihil.', 'Excepturi accusantium qui voluptas sunt. Occaecati culpa voluptatem qui aspernatur nobis. Ipsam et et non consequuntur mollitia omnis et.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(28, 'Similique sequi quibusdam dolor.', 'Sit modi et non quo corrupti ullam porro. Et ex dolorem maiores sit est veritatis. Id consequatur non maiores aliquam. Sed et quo excepturi maxime delectus optio animi.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(29, 'Explicabo sed laboriosam mollitia fugit corporis est.', 'Asperiores expedita vel magnam ullam unde laboriosam ullam animi. Autem culpa accusantium officia nemo nemo amet. Voluptatum enim rerum incidunt sint maxime. Omnis recusandae ipsum non omnis nobis.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(31, 'Blanditiis sequi dolore odio voluptas sint.', 'Vero minima non corrupti magnam numquam enim fugiat. Corrupti quidem dolorum omnis minus dicta aliquam. Impedit dicta voluptas consequuntur qui quaerat. Accusamus adipisci veniam hic suscipit.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(32, 'Libero fugiat aut excepturi voluptatem aliquid eum.', 'Perferendis velit omnis praesentium illum delectus omnis quod. Non consectetur et est et cupiditate. Aut aliquid consequatur ea omnis.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(33, 'Possimus ut aliquid nam minima.', 'Et et dignissimos earum alias. Autem nihil quis similique voluptatem. Delectus voluptatum et est inventore. Ea ea repudiandae ut non quidem totam fugiat.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(34, 'Temporibus facere sed asperiores velit fuga aut quia.', 'Non autem eos a quis omnis nobis. Cum laboriosam molestias ut praesentium aliquid ullam sed similique. Ullam quia inventore fugiat eaque sunt delectus rerum repellat. Maiores odio tempora nostrum est.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(35, 'Officia non sequi aut animi quia tempora officiis.', 'Illo nobis autem dicta quisquam tenetur id. Enim tempora quaerat architecto. Occaecati ut provident accusamus fuga est aliquid.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(36, 'Eius aspernatur et ratione facilis ut at.', 'Enim nesciunt eius quis aut. Et ab aut tenetur labore ut sed laudantium molestiae. Est praesentium quibusdam eligendi id commodi praesentium nostrum saepe.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(37, 'Beatae nisi ad reprehenderit et error molestiae minus.', 'Aperiam blanditiis temporibus doloremque totam eos. Ut saepe excepturi quod magnam eos eius. Quas ratione mollitia et porro molestias et.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(38, 'Officiis ullam libero sed consequatur.', 'Unde eum et voluptatem occaecati explicabo sint veritatis. Sint voluptatem ab sed aperiam iste voluptatem aut. Et dolores ducimus vel sit.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(39, 'Nemo inventore enim nobis.', 'Totam vel voluptatem quas quia. Distinctio architecto et quia totam magni. Non quasi et iusto pariatur voluptas ut aut adipisci.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(40, 'Labore et quam ad nulla non consequuntur.', 'Quia voluptatibus libero magnam. Voluptatem provident numquam et accusamus iusto. Nobis sed similique et dignissimos. Ut accusamus aut et veniam et delectus sequi.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(41, 'Quo voluptate sit maxime velit.', 'Accusantium non quis nobis. Accusamus consequatur in vitae vel possimus sequi.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(42, 'Título cambiado', 'Cuerpo del artículo cambiado', '2021-01-03 08:44:37', '2021-01-03 09:55:01'),
(43, 'Sit labore dolorem nam quia et corrupti.', 'Velit est explicabo aperiam ut sed est. Qui recusandae ut possimus deleniti. Et repellendus dolor cum maxime quia dolore. Dolorum sed omnis exercitationem eaque blanditiis enim aspernatur.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(44, 'Velit rerum aspernatur doloribus.', 'Recusandae ipsum amet voluptatem voluptatibus qui. Aut quia sunt ratione ipsum illum. Enim quia ea eligendi aperiam.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(46, 'Incidunt ea earum doloribus dicta ipsum error ut.', 'Rerum porro alias suscipit accusantium. Quaerat vitae dignissimos aut laudantium eaque maiores. Dolorem eveniet veritatis soluta aliquam quod.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(47, 'Quibusdam quidem iusto dolor soluta aliquam odit aspernatur corporis.', 'Exercitationem voluptatem odio ut sit. Voluptas est ut exercitationem dolores eius sed odio. Adipisci quis dolor est.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(48, 'Ex ullam fugit quisquam dignissimos.', 'Et culpa maxime et quia. Est blanditiis quis quos perspiciatis dolor expedita. Ut dolores vel culpa et aperiam ad dolorem cupiditate. Fugit a sit et velit impedit consequatur quibusdam.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(49, 'Praesentium expedita esse exercitationem ducimus iusto harum velit.', 'Dicta omnis facilis ullam dolores. Repellat cumque quia sed molestiae illo. Quibusdam debitis numquam sequi temporibus. Voluptas amet qui quam.', '2021-01-03 08:44:37', '2021-01-03 08:44:37'),
(53, 'Título cambiado', 'Cuerpo del artículo cambiado', '2021-01-03 09:48:35', '2021-01-03 10:14:46'),
(54, 'Título cambiado', 'Cuerpo del artículo cambiado', '2021-01-03 12:03:03', '2021-01-07 08:49:17'),
(55, 'Mas articulo de hoy', 'Nuevo cuerpo de más articulo de hoy', '2021-01-07 08:48:15', '2021-01-07 08:48:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_27_114127_create_articles_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 2),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(12, '2021_01_07_102448_create_sessions_table', 3),
(13, '2021_01_10_153126_adds_api_token_to_users_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('3efef8ad5c3f18c18263cd6de322cc212444ec6a6fee6c9fda7e60bf67be6779ce0ecfce9f110874', 13, 11, 'Personal Access Token', '[]', 0, '2021-01-10 15:25:34', '2021-01-10 15:25:34', '2022-01-10 16:25:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'JZ2w0XBiZwhYRkxeOrHkFGzF7IzAWo6mdoBDoTte', NULL, 'http://localhost', 1, 0, 0, '2021-01-07 08:58:37', '2021-01-07 08:58:37'),
(2, NULL, 'Laravel Password Grant Client', 'ifGKZc1cKKa54Hgwqzi6911kgXgTUkZ7V37DFES8', 'users', 'http://localhost', 0, 1, 0, '2021-01-07 08:58:37', '2021-01-07 08:58:37'),
(3, NULL, 'Laravel Personal Access Client', 'qTpAXsO9WwtyYuVJXF75J5ssIjyCUY5ydBBg0hAw', NULL, 'http://localhost', 1, 0, 0, '2021-01-07 08:59:15', '2021-01-07 08:59:15'),
(4, NULL, 'Laravel Password Grant Client', '6ofqzy7RvN01WMNeFh9bKXMca2e5Rb277N2KMrQ5', 'users', 'http://localhost', 0, 1, 0, '2021-01-07 08:59:15', '2021-01-07 08:59:15'),
(5, NULL, 'Laravel Personal Access Client', 'WBc15tJ8mVpR5Bnwn0HFZUfXgCpaus3JKtc2qkv0', NULL, 'http://localhost', 1, 0, 0, '2021-01-10 09:26:14', '2021-01-10 09:26:14'),
(6, NULL, 'Laravel Password Grant Client', '6S9sJiM2hO9KG2n91NYmxsKNvMSP8JOm3HpWu2Fe', 'users', 'http://localhost', 0, 1, 0, '2021-01-10 09:26:14', '2021-01-10 09:26:14'),
(7, NULL, 'Laravel Personal Access Client', '7PSW6BdMOpNDgvcFBpJkHfs2n0wMC3VW7px42OzX', NULL, 'http://localhost', 1, 0, 0, '2021-01-10 09:26:25', '2021-01-10 09:26:25'),
(8, NULL, 'Laravel Password Grant Client', '8sDB00iFBkqDveWRYBa2DNubq4uYdEaOpOoRNTp6', 'users', 'http://localhost', 0, 1, 0, '2021-01-10 09:26:25', '2021-01-10 09:26:25'),
(9, NULL, 'Laravel Personal Access Client', 'peFnQfHEUigyoIC3gk7IG7Kusj0f4n31FDOH32Um', NULL, 'http://localhost', 1, 0, 0, '2021-01-10 09:40:54', '2021-01-10 09:40:54'),
(10, NULL, 'Laravel Password Grant Client', 'o9QWr4jAjxGxjtgTIFG5miMamyL7ABswQ0DadsZK', 'users', 'http://localhost', 0, 1, 0, '2021-01-10 09:40:54', '2021-01-10 09:40:54'),
(11, NULL, 'Laravel Personal Access Client', 'gXpkL5obQ5ji7pyZjxAEnifaPHXXQUqGDdCP5FET', NULL, 'http://localhost', 1, 0, 0, '2021-01-10 10:25:31', '2021-01-10 10:25:31'),
(12, NULL, 'Laravel Password Grant Client', 'gFLmBQ5ZKQzCv7jEuvWxOKq1Lz9aVf6lGHtKDxWr', 'users', 'http://localhost', 0, 1, 0, '2021-01-10 10:25:31', '2021-01-10 10:25:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-01-07 08:58:37', '2021-01-07 08:58:37'),
(2, 3, '2021-01-07 08:59:15', '2021-01-07 08:59:15'),
(3, 5, '2021-01-10 09:26:14', '2021-01-10 09:26:14'),
(4, 7, '2021-01-10 09:26:25', '2021-01-10 09:26:25'),
(5, 9, '2021-01-10 09:40:54', '2021-01-10 09:40:54'),
(6, 11, '2021-01-10 10:25:31', '2021-01-10 10:25:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9xIOChRi34KnzCuu9iZyGFVZClScP201Uv0MzBkb', 12, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibHdUaHVNc3hkdlBwT1lLdlBuT2sySkc3MlEzRnlHQ0x4cEl4RG93MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJG1UeDR4b1VJR3c2OUI3Q1RwVjVNWE9xandHSVZzWkh1OHRoR3htaXRwNUpHSTNUWHFyeGUuIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRtVHg0eG9VSUd3NjlCN0NUcFY1TVhPcWp3R0lWc1pIdTh0aEd4bWl0cDVKR0kzVFhxcnhlLiI7fQ==', 1610276944);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `api_token`) VALUES
(1, 'Admin', 'admin@test.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(2, 'Pasquale Jast', 'jerrold84@gmail.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(3, 'Jermey Schuppe', 'borer.josianne@hotmail.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(4, 'Ryder Gerlach', 'ghodkiewicz@heidenreich.org', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(5, 'Phoebe Stiedemann', 'bbarton@gmail.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(6, 'Mrs. Stefanie Hane', 'strosin.efrain@erdman.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(7, 'Imogene Turner', 'eveline.feil@hotmail.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(8, 'Franz Kuhic', 'una.hettinger@wiza.org', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(9, 'Dayne Kiehn DDS', 'vcarroll@lockman.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(10, 'Letha Corwin', 'hermiston.courtney@yahoo.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(11, 'Dr. Berry Luettgen', 'sanford.murray@hotmail.com', '$2y$10$IXnQCgfV5RjpKlfgPm2rWej/pq2g8jxe956ALPEeC0n0vfAu9wDYW', NULL, NULL, NULL, '2021-01-03 08:44:44', '2021-01-03 08:44:44', NULL),
(13, 'faranzabe', 'faranzabe@gmail.com', '$2y$10$mYn.2fJ83eyI0YjwC/7dZu.ZxbELwOnhaTrtOAL18E5YTOqN1n5Ci', NULL, NULL, NULL, '2021-01-10 15:23:31', '2021-01-10 17:02:45', 'GxmhjHUmCOzpTYD1pFDmgRWyPVFEIFwLXIeuhd9sexMPKWjUmr3Icjuu4Pk6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
