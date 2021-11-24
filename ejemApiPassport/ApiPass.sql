-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-01-2021 a las 18:23:56
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
-- Base de datos: `ApiPass`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Debitis nostrum et dolorem ipsam voluptatem excepturi.', 'Rerum dicta alias recusandae et at non harum. Voluptas mollitia sunt praesentium omnis rerum perferendis. Tempore similique ut error inventore nihil. Amet laborum corrupti omnis et provident libero. Nemo dicta repellat aut a.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(2, 'Ipsa est id dolorem repellat sed impedit cupiditate.', 'Quis consequatur voluptatem in ut delectus eius sed. Consequatur dicta esse itaque amet. Ullam dicta libero ad tempora sit veritatis.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(3, 'Aut non excepturi et veniam vel libero in.', 'Dicta hic ad fugiat omnis. Rerum saepe rerum in suscipit. Ipsum unde in possimus delectus adipisci in laboriosam. Excepturi illum enim at sunt sed occaecati consequatur.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(4, 'Asperiores id consequatur cumque ab quam delectus.', 'Dolor quasi alias tempora iure et sunt quisquam. Odio sint ad et vel eaque. Aliquam porro excepturi eligendi qui soluta temporibus optio.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(5, 'Nihil tenetur sunt voluptate.', 'Adipisci odit voluptatem dicta sed qui nulla consequuntur. Sint aut rerum cupiditate harum dolores deserunt. Rerum aut voluptatem totam ab nesciunt quae. Suscipit blanditiis quia quidem illo soluta qui nostrum. Ducimus nesciunt omnis non aut aperiam omnis corporis.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(6, 'Et cum quis rerum voluptas in corporis ut autem.', 'Quisquam sit ipsum reprehenderit id. Rem vitae excepturi enim ut excepturi. Soluta est in eum veritatis et. Eveniet velit delectus distinctio quis consequuntur voluptas occaecati.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(7, 'Qui repellat recusandae aut qui ut vel.', 'Impedit vero ipsum eligendi totam vel optio laboriosam. Mollitia corporis ut magni animi. Consequatur expedita consectetur atque et ullam totam. Neque similique est ipsa fuga molestiae maiores.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(8, 'Id fugiat quo asperiores natus.', 'Porro aut asperiores sint. Quidem quia eum voluptatum et provident et optio.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(9, 'Ut eligendi ut quis quae sit saepe quod soluta.', 'Quod eaque ipsam nesciunt quia. Ad quos rem quasi eligendi eum ipsa. Modi expedita enim vitae ea. Accusamus qui commodi error est eligendi. Cupiditate est voluptatibus voluptatem ut doloribus eligendi.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(10, 'Quia dolorum est voluptate architecto possimus eaque reiciendis error.', 'Est laborum dolor tempore sit qui. Odit quia soluta voluptatum ut temporibus eos perspiciatis. Enim doloribus ut aut itaque ipsam tenetur.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(11, 'Perspiciatis ex et dolores praesentium qui id.', 'At non numquam aliquam dolore. Neque dolores et illum amet alias dolorum quia velit. Doloribus quae quisquam voluptates eius nesciunt fugiat dolor. Temporibus dolorum fuga iste quod inventore facilis expedita.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(12, 'Laudantium corporis et quasi et.', 'A ut porro tempora id. Similique eaque laborum et dicta deleniti molestiae voluptatem fugiat. Cupiditate aperiam error sint aliquid ipsa repellat. Animi non voluptatem quibusdam.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(13, 'Ut et odit et eos modi magni.', 'Nobis sed eum et quas illum nam debitis aspernatur. Ea minima consequatur qui id occaecati. Eum quod quos eligendi. Quos nostrum officiis aut sed ipsam iure quis. Fuga voluptatem neque repellendus dolores.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(14, 'Nulla aut soluta quae ex deleniti.', 'Odio autem in ad sint. Non autem laudantium rerum et repellat nihil.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(15, 'Est est in non qui doloremque.', 'Voluptates eos recusandae optio nostrum tenetur qui ea sint. Aut qui ab alias voluptatem. Voluptatibus earum officiis repudiandae.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(16, 'Distinctio laudantium vel magnam.', 'Debitis nihil qui qui fugit inventore. Dolor tenetur consequuntur quisquam est. Atque aut consectetur autem. Molestiae ut et ut.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(17, 'Harum veniam animi dolorem fuga et.', 'Eius est explicabo ut sed eligendi. Laboriosam qui quia aspernatur commodi veniam. Ut vero minima a.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(18, 'Dolorem praesentium explicabo labore soluta officiis placeat.', 'Placeat repudiandae sed officia nemo. Et odit totam eos et et non. Quas ipsum vel rerum sequi quo sit ea. A totam recusandae labore aut repellendus.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(19, 'Impedit perferendis ex voluptate cum iste aspernatur sequi.', 'Veniam fugiat commodi quis provident. In porro ut ea blanditiis sequi. Omnis assumenda deleniti nesciunt quos ut.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(20, 'Quas aut omnis est animi modi omnis.', 'Officia alias ea a et non. Aspernatur delectus dolorem facilis qui id natus quia. Aliquid quibusdam minima est est.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(21, 'Eos vitae autem non ut commodi dicta distinctio.', 'Perferendis sint atque nam itaque debitis amet et. Dolorem molestiae ut ipsum doloremque architecto quam reiciendis. Recusandae dolor consequatur molestiae odit nobis molestiae delectus rem.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(22, 'Eius eligendi sapiente soluta.', 'Minima dolores a consequuntur illum labore accusantium ad dolorum. Aut dolores eum doloribus. Dolor repudiandae unde asperiores quis similique sed. Quae ipsum neque amet accusantium blanditiis.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(23, 'Quasi voluptas expedita aliquam consequatur doloribus qui.', 'Tenetur magnam quis et rerum fugit consequuntur. Vitae libero nisi esse beatae natus veritatis. Et pariatur rerum quisquam excepturi amet ut.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(24, 'Assumenda optio consectetur repellendus et asperiores adipisci.', 'Enim quibusdam praesentium molestiae mollitia inventore pariatur architecto. Eaque veniam numquam vitae ratione saepe.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(25, 'Aut rerum maiores sunt.', 'Enim ex explicabo non. Id deserunt sit recusandae nostrum rerum laudantium rerum qui. Officia est nemo excepturi laudantium et. Molestiae deleniti sit qui eum nulla.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(26, 'Et amet qui voluptate vel.', 'Repellat rem harum nostrum ut laboriosam tenetur. Non dignissimos quisquam ut incidunt. Quae at voluptates eveniet commodi vel quis autem.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(27, 'Est magnam fuga aut itaque magnam cum et.', 'Rerum consequuntur autem voluptas quam. Iste ab et libero voluptatibus temporibus laboriosam rerum corporis. Quod amet atque hic ducimus sapiente voluptatem.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(28, 'Quo non voluptatem aspernatur soluta.', 'Voluptatem quaerat delectus aspernatur eius ab. Est similique soluta commodi. Laborum voluptatibus dignissimos consequatur labore. Vitae ex error fuga est voluptatem doloremque repellendus.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(29, 'Ex dolores explicabo enim eum.', 'Sint aut accusantium impedit ipsa. Ratione et saepe sit corporis. Id dolores ut soluta quidem.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(30, 'Possimus quia quo alias sit voluptas.', 'Similique exercitationem odio quia saepe maxime tempora. Nam voluptas non maxime molestias reiciendis deserunt eaque qui. Labore ut libero saepe. Numquam nobis adipisci omnis et et quisquam. Magni accusamus ut aliquam necessitatibus eligendi eveniet.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(31, 'Cum quo nisi quasi quo iusto molestiae.', 'Modi et temporibus quia quis exercitationem nostrum aut voluptatem. Ex consequatur nobis soluta veniam numquam voluptatum. Ut est perspiciatis alias. Nostrum amet in et ut quis cupiditate iusto.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(32, 'Quia ad et cupiditate dolores hic harum.', 'Architecto quia itaque iste nisi. Officia quo et eius quod delectus. Fugiat est et aut magni ut similique. Nemo ratione quis non corporis sint voluptatem omnis.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(33, 'Quibusdam magni quasi libero inventore.', 'Dicta aliquid id rerum. Cum exercitationem nihil dicta harum illo sapiente. Et amet omnis quo excepturi quia cumque quos. Eius voluptas quidem odit corporis iste ab reprehenderit.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(34, 'Deleniti accusantium et deleniti dolorem voluptas quia vero aliquid.', 'Soluta consequatur molestias voluptas ut laudantium. Quis aspernatur soluta iure suscipit accusantium non voluptas excepturi. Quia consequatur ea inventore distinctio. Est ipsam sequi vitae accusamus non eligendi alias. Aperiam debitis molestiae eveniet.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(35, 'Quo enim voluptas voluptatibus.', 'Libero iste odit libero ut aut excepturi. Animi neque modi voluptas neque fuga non ratione omnis. Dignissimos dicta id ea nesciunt eos.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(36, 'Atque consequatur in molestias amet.', 'Architecto expedita voluptatum nihil voluptas. Aspernatur distinctio et ea et deserunt consequatur. Est dolor quos fuga. Beatae harum et sit quo quaerat soluta eos.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(37, 'Voluptates sint quo quos blanditiis.', 'Adipisci laudantium est aliquam dolor veniam accusantium ratione. Qui ut ex repellat veniam voluptatum sint laudantium itaque. Maxime dolores perspiciatis alias et eligendi ut culpa. Illum culpa accusamus dolores odio nemo sint totam.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(38, 'Praesentium debitis ratione quam omnis qui laborum itaque.', 'Repellendus est fugiat laudantium autem eum voluptate. Reprehenderit incidunt et excepturi quam impedit veniam nulla. Sed aut qui ea reiciendis culpa tempore perferendis.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(39, 'Distinctio perspiciatis culpa ipsum distinctio et.', 'Dolores illo aut omnis dolores. Neque quis ratione voluptatem. Consectetur id aut doloremque enim quia. Quaerat hic dolores odio quam nisi voluptatem.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(40, 'Vitae iusto accusamus omnis ea.', 'Eveniet qui necessitatibus delectus voluptatem. Ab quis dignissimos repudiandae accusantium. Beatae non dolorem esse.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(41, 'Vitae natus et id odit dolorem.', 'Nesciunt ipsam voluptatem dolores illum. Ut ut est enim nam explicabo. Voluptate vel quisquam hic explicabo. Omnis qui optio eaque inventore et ut dolore dolores.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(42, 'Iusto quas eaque aspernatur nostrum corrupti corrupti aut.', 'Qui quisquam sed pariatur magnam. Nihil eum enim eligendi voluptatem. Facere repellat qui sint rerum dolore aut quos molestiae.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(43, 'Culpa ea non animi recusandae velit.', 'Voluptatem corrupti iusto tempore sed et. Id quo culpa sunt officia est vitae. Doloremque delectus aut maiores aperiam quasi.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(44, 'Earum sequi tenetur quia doloribus cumque perspiciatis adipisci.', 'Culpa asperiores est recusandae qui et omnis ut. Iste et non quo voluptas maiores ut. Commodi dolorem veniam voluptas id qui.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(45, 'Quia tenetur porro voluptas dolorum dicta.', 'Consequuntur consequatur consectetur eligendi corrupti sunt labore fuga. Non ut eligendi quae quis ut consectetur eius. Laborum aut tempore recusandae laboriosam eos iure numquam. Et cum enim ex eos saepe reiciendis.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(46, 'Explicabo omnis nihil sapiente magni.', 'Deleniti nesciunt tempora officia veritatis consectetur est cum. Eum perferendis qui ea ullam quae earum ut. Et eum modi esse voluptas. Eveniet excepturi eaque eaque tenetur possimus sit architecto temporibus. Quod possimus delectus eos fugiat.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(47, 'Minus quaerat perferendis a in odit maiores ducimus.', 'Quo veniam at ea amet animi rem. Deserunt eveniet neque nesciunt molestiae. Et eaque nisi dignissimos placeat occaecati. Non quo reiciendis praesentium porro vel.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(48, 'Dolorum quidem incidunt et maxime.', 'Commodi et quia sed ipsam. Itaque sunt accusamus voluptatem tempore. Praesentium magnam reiciendis id voluptatem.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(49, 'Qui qui asperiores rerum quo blanditiis impedit asperiores.', 'Inventore autem quibusdam nostrum voluptates nobis sed. Sit nesciunt pariatur neque ea eius voluptates quos. Ea velit quibusdam assumenda deserunt necessitatibus sunt. Explicabo qui dolor quod fuga facilis qui ut ut.', '2021-01-20 09:58:28', '2021-01-20 09:58:28'),
(50, 'Tenetur velit est et nesciunt sit.', 'Perspiciatis sed harum est quia corporis. Id ut rem doloribus deserunt et. Quasi neque fuga sed vero quo porro ad.', '2021-01-20 09:58:28', '2021-01-20 09:58:28');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_20_103321_create_articles_table', 1),
(5, '2021_01_20_105612_adds_api_token_to_users_table', 1),
(6, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(7, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(9, '2016_06_01_000004_create_oauth_clients_table', 2),
(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
('0780c0d7ceb3abe3010b65fbc3c39573a5baff0298addef830f548059d38910ac369d212ac0c5720', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:54:17', '2021-01-20 15:54:17', '2022-01-20 16:54:17'),
('0cb1f3937bafd3e0597b47f0eb004c7f7758cb22952adb83dac8762c5718bd9c037b42df16349869', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:58:11', '2021-01-20 15:58:11', '2022-01-20 16:58:11'),
('0e114540a67e11d068a416d815ebe455ecb5651d716f138050bfd527a9f621969f4380466ea85d83', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:29:26', '2021-01-20 15:29:26', '2022-01-20 16:29:26'),
('10bdd2a15e682a90774819bd7a93d1abee19d77e583fc288104da9d72ef70a7ea85d12a8bb9637bf', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:57:41', '2021-01-20 15:57:41', '2022-01-20 16:57:41'),
('123326efa3a0c2e07591716aed5145202cd6febd802116c197fbf1bccef39776fc8df8c3e9040cda', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:42:35', '2021-01-20 15:42:35', '2022-01-20 16:42:35'),
('16c61c5c9148c17789acee0abd4da56d5f4faef97795ab8e8a57b0605b9240c57982222d56123a63', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:55:23', '2021-01-20 15:55:23', '2022-01-20 16:55:23'),
('173e1fc5de841949ea79f05bac6c34090c0d25c7fe4149b51b97721f5f602ec62f677110126577f7', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:15:07', '2021-01-20 15:15:07', '2022-01-20 16:15:07'),
('1a08a80feb16c65ef3b2b32d98d5af2747eaaabf78f329d8102503d40b02593cc065ce8f7d0c8814', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:52:26', '2021-01-20 15:52:26', '2022-01-20 16:52:26'),
('24bb7483a63aec6a4123acfbc9ee2dcd4e9c9f6bf21a07ce843a7269d040ae580532aa443a1f593f', 5, 1, 'authToken', '[]', 0, '2021-01-20 16:13:01', '2021-01-20 16:13:01', '2022-01-20 17:13:01'),
('251b4e19caa4ad60f32ce06e2026609fd97b2573319ef2fbbf47b2e2cd069d69af9ce39b8f7d49ca', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:35:49', '2021-01-20 15:35:49', '2022-01-20 16:35:49'),
('2533422ebefbebce3a759d7aaea69fe64a7a19073253d150d3e995c182876510bdc6e21c3158e754', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:15:26', '2021-01-20 15:15:26', '2022-01-20 16:15:26'),
('28d2eedffd7dc269a14ccefd5613f39c3ccbc13ccbc667ec10a05f0e2b09ffc8c20f6b7cbb23939d', 3, 1, 'authToken', '[]', 0, '2021-01-20 15:56:21', '2021-01-20 15:56:21', '2022-01-20 16:56:21'),
('2925cc5cfec4587c5f8d7a26176c1e85cdf5abbeb8c4e369be43f211c7fdf09183acd653a96a3bde', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:54:37', '2021-01-20 15:54:37', '2022-01-20 16:54:37'),
('2afd4bc4527138831e72cc795742274aedc38f2de6f6ce0a0ff51cb0c3db8a6fd0079196ecabe429', 2, 1, 'authToken', '[]', 0, '2021-01-20 16:02:48', '2021-01-20 16:02:48', '2022-01-20 17:02:48'),
('34bc5bcf3a08407efb7091d6e5eb62e0dc5488481e944b7099eb34739b5dfbef9fbb44af4cc46a06', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:49:16', '2021-01-20 15:49:16', '2022-01-20 16:49:16'),
('35593a4160f7fa378dde4d3163dc305caa7ef47e86e3d01b44b9605ea317731c5ed21459fdd5db4c', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:45:18', '2021-01-20 15:45:18', '2022-01-20 16:45:18'),
('379ce899f875e112f2dd1467eb319649f7e60975b4c425a6a2d733a7e3acf658e79965e5ac892cb9', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:42:47', '2021-01-20 15:42:47', '2022-01-20 16:42:47'),
('3fc2f367db58b22f000e3b70d73080fc532ddfe4b7dcd9893564d443e5daee611250c3d16c1bc298', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:48:51', '2021-01-20 15:48:51', '2022-01-20 16:48:51'),
('437c0a5920167e1606cfc8f5917438c6009c517f534a7886633e2e1c571c182741c3a7a170410673', 2, 1, 'authToken', '[]', 0, '2021-01-20 16:04:09', '2021-01-20 16:04:09', '2022-01-20 17:04:09'),
('452c3bb0335a383189f01967aa9f3692fd7ccf9aee60028400ba3ebbf50209545b2251184144c672', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:29:44', '2021-01-20 15:29:44', '2022-01-20 16:29:44'),
('508d05bdde98d9954dd715a057f6b0a1c21a5600eab6082927ea5d856c9d35f97df44d901813a7fd', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:49:36', '2021-01-20 15:49:36', '2022-01-20 16:49:36'),
('51879a969c0b46fde078c519856290c4eb0fc5c30f1033814b20f06d3b517203f993ef50e87939ba', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:53:49', '2021-01-20 15:53:49', '2022-01-20 16:53:49'),
('5298a932abf395c7e1f0e4e9841fd5b9b7ba91b4f8dd2b44554e595431f5fb145e7709d5fbdf89b5', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:08:46', '2021-01-20 15:08:46', '2022-01-20 16:08:46'),
('628355fbd562acbed9f172d69648dce77e26c0e039e43ea4aa8f251815c949bceb95e2585146d7c4', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:42:27', '2021-01-20 15:42:27', '2022-01-20 16:42:27'),
('62f071de109d3624271242e42d77ef184e47fbbf06c835bfd66ecdc6a15a8d1df73a75532996c20e', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:52:36', '2021-01-20 15:52:36', '2022-01-20 16:52:36'),
('636671a17a50de1c1c723626b73d5a88b13977061a5c0486c64191e40fd3e551fd830617bf21876a', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:41:10', '2021-01-20 15:41:10', '2022-01-20 16:41:10'),
('63702b77439d45b3e976ac768a164455c693038976c2c1d3495581e862cb801b04b31fe7bac9d459', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:58:17', '2021-01-20 15:58:17', '2022-01-20 16:58:17'),
('698b7b5890a37afe80150603ee598cb8c840f78ffe82fc8f527c1a9744e0d51daef8e1d4eb95de32', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:46:04', '2021-01-20 15:46:04', '2022-01-20 16:46:04'),
('7628b796dc1993895b5f60f7ccc483e45e6d632e2c2c5232eb0f0b4d95a609f0c77c7005fe3fe202', 3, 1, 'authToken', '[]', 0, '2021-01-20 15:56:27', '2021-01-20 15:56:27', '2022-01-20 16:56:27'),
('77ad8bc338f80eff1a07aa3dfeaf63b568dec40c877d367aebb7f3952cd250121836b3da39aff742', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:37:45', '2021-01-20 15:37:45', '2022-01-20 16:37:45'),
('8033e1bd5bf56fda4fb44276dc703b8ed35ca359bcdaf164ec98865a8977f8c5ce4456282e600269', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:14:30', '2021-01-20 15:14:30', '2022-01-20 16:14:30'),
('95be2ac4587c152be4bd2f12f6837b9ab2983e0d13953156fbdd458a38afa9c2940b5372152f3d07', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:48:19', '2021-01-20 15:48:19', '2022-01-20 16:48:19'),
('a09f92750068a51983df974faf11e83c9a7869336df84ce790e9237851baaab9840c67f20160d052', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:34:52', '2021-01-20 15:34:52', '2022-01-20 16:34:52'),
('a8ab9e0c81b269cfb0ee6db43f0d3edc9b16c53db4043a4ff7e62e90c96dfe8874d6ecd288135355', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:18:50', '2021-01-20 15:18:50', '2022-01-20 16:18:50'),
('ad81502bd9c1cbbf871ae6f270294ce55c58f5e5063308433457bf1e97e4e8bd52a7b1fef53aeca5', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:14:56', '2021-01-20 15:14:56', '2022-01-20 16:14:56'),
('b5526ed39ec830f6e7e08e2328cb43313096801c366c1e0bdd7618f24fdf828c0050c3d1abefaaf6', 2, 1, 'authToken', '[]', 0, '2021-01-20 16:02:43', '2021-01-20 16:02:43', '2022-01-20 17:02:43'),
('c00748508f0463e06555cd3dbd2e48d5e85d396582723bd9df93d8c3e62c23e0180d7919044b1468', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:43:39', '2021-01-20 15:43:39', '2022-01-20 16:43:39'),
('c6c16f98d604b675c14ec6b915f617a18ac7ec72c346ba2698ebef7ae905925494a1abac52107790', 4, 1, 'authToken', '[]', 0, '2021-01-20 15:57:29', '2021-01-20 15:57:29', '2022-01-20 16:57:29'),
('c7f98d6c8acce905cfe96332cc1f3e250e13067745584cd9cb5b14f6d18a766d31274e9d97cf33b6', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:36:21', '2021-01-20 15:36:21', '2022-01-20 16:36:21'),
('c84ed0efc95d786831876297e27b35b3b6b81eab34d6bd3fa42d6adf64c76e80d4c32797201d89c2', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:52:55', '2021-01-20 15:52:55', '2022-01-20 16:52:55'),
('cf3e0f057220defcd0aade7720edf3cfe75ac79ed80848186f88f0818decfe1bffb0a0453ee1a2bf', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:54:04', '2021-01-20 15:54:04', '2022-01-20 16:54:04'),
('cff75550a6cdb71075a9e5d2fd83eb490dd3b6e0795baf702d7ae8f7fa310ea1b6f3197fbe173de0', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:14:49', '2021-01-20 15:14:49', '2022-01-20 16:14:49'),
('d13f93cdf54da176c1f007ad1a04304e03ee7a436a4c3a02a5b8f86088fc9b887244fdddb4b72b2c', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:39:24', '2021-01-20 15:39:24', '2022-01-20 16:39:24'),
('d29cfe0818601cd561a214a631172afd8e873f8018e9d490b3b6cba01fd4829b075daf06e440adc5', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:15:51', '2021-01-20 15:15:51', '2022-01-20 16:15:51'),
('d925d1c4b67e48267a106a584a322585de7f5dcb172481a4f1f7a12bb98c307dc4667ac82031b29d', 2, 1, 'authToken', '[]', 0, '2021-01-20 16:02:55', '2021-01-20 16:02:55', '2022-01-20 17:02:55'),
('dc1af1c1837f708b46ca6bcad3f9cd545ad75895a91aaa346dbf2f52f79c67f5c5d8027e6c66f113', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:51:59', '2021-01-20 15:51:59', '2022-01-20 16:51:59'),
('dc5abf16e4760dd81b39f4d6e995f365a97c14e57cc3259e9b35215fc1e7d1240c942f840cf25578', 2, 1, 'authToken', '[]', 0, '2021-01-20 16:02:18', '2021-01-20 16:02:18', '2022-01-20 17:02:18'),
('df77e915ce61a958576895d84ae56e0f8c29453257bdf84e2d496e78d38171de8cb1d33847bcd6d6', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:49:06', '2021-01-20 15:49:06', '2022-01-20 16:49:06'),
('e2bdbf8c417bdc52722cb2bcab8f98eca350cce800e5eb53142e60bc9c4f0d162a7b41dc8865b9de', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:22:36', '2021-01-20 15:22:36', '2022-01-20 16:22:36'),
('e770fc0195b536e4afedd83258993d4cd869b7d1da77aba00ee52e704309142d7cca18cce29b97bf', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:42:51', '2021-01-20 15:42:51', '2022-01-20 16:42:51'),
('e819c6e5100226a2531b56165db6a9975e6b54399e5b575fd6317c4802b6aa0ea0055f517230cf0d', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:46:15', '2021-01-20 15:46:15', '2022-01-20 16:46:15'),
('ea582a68b89fe5781d2c72d56317814c809a5f9fecffd36a4f242a415b6f33c9d04186a893aecb2a', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:54:27', '2021-01-20 15:54:27', '2022-01-20 16:54:27'),
('f6ed87386a7efa780bcd6ae020796d40843016b8fe8386d2244e6caea0316874004d97fa5704c835', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:29:59', '2021-01-20 15:29:59', '2022-01-20 16:29:59'),
('f7dd33813fd35707235ea3cec691755019acbee51954cd0b301abe81c5b1742d06097961de9d37e4', 7, 1, 'authToken', '[]', 0, '2021-01-20 16:22:24', '2021-01-20 16:22:24', '2022-01-20 17:22:24'),
('f7f112ceaf7063caa4c34679bda1c5fc36d7ea8973827ec93918c67ca8177a57fc39b2a0bc9c1ac0', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:46:41', '2021-01-20 15:46:41', '2022-01-20 16:46:41'),
('fd9d7d983728af938028ca1f996f65ad35911932a5b5597857739b7d8e588aba7d6f17e263c6b56c', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:14:06', '2021-01-20 15:14:06', '2022-01-20 16:14:06'),
('fe905b2abb1f4e900cfb7481f819770633a091867b39d06c1c9c3a4899fcdd8de676ec88508839a2', 2, 1, 'authToken', '[]', 0, '2021-01-20 15:55:29', '2021-01-20 15:55:29', '2022-01-20 16:55:29');

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, NULL, 'Laravel Personal Access Client', 'xX4YAEdEC47EZJU8yKriW7ONaWAOUCE6qVWIzkki', NULL, 'http://localhost', 1, 0, 0, '2021-01-20 14:55:03', '2021-01-20 14:55:03'),
(2, NULL, 'Laravel Password Grant Client', 'vPXimW2wrV9z2ZqbThEmaqDTq2SPP8yMny1BCjf4', 'users', 'http://localhost', 0, 1, 0, '2021-01-20 14:55:03', '2021-01-20 14:55:03');

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
(1, 1, '2021-01-20 14:55:03', '2021-01-20 14:55:03');

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `api_token`) VALUES
(1, 'David', 'david@gmail.com', NULL, '$2y$10$i1Wo65J1xCn2Dcr8WztcxONLLwZZU0qNvEHtSFTkGKhMReRj381oi', NULL, '2021-01-20 10:10:45', '2021-01-20 10:10:45', 'q59iw5MzSpqtys9S4DrRGJxGcfodCej2iacCitMvdupfFnlazbRjzYh5qmsl'),
(2, 'Fernando', 'faranzabe@gmail.com', NULL, '$2y$10$.9iRYL1mOQRZDovOPuyAMu.5mn0NUwo62sCo0SKPQOkmkHXaANMzi', NULL, '2021-01-20 10:14:34', '2021-01-20 10:14:34', 'Lzdoe8Udw0jAPP1p4KMaF1HpPdukkoyvt7XCvx2qNfeFZTztkYzpnPcXZ3PJ'),
(3, 'nada', 'nada@nada.es', NULL, '$2y$10$ivaf1La/75qia8ZrjaukLOs/janl5KF/pQy36c9EMxf/Z8ldmMwim', NULL, '2021-01-20 11:13:09', '2021-01-20 11:13:09', NULL),
(4, 'AlumnoDAW2', 'daw2@daw2.es', NULL, '$2y$10$vAHyxf8V0A8zUTrGeOjIq.mf7Gkd6LyTOpob78jnbrIvD5mpq4Jue', NULL, '2021-01-20 15:56:51', '2021-01-20 15:56:51', NULL);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
