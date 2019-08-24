-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-08-2019 a las 16:45:33
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `manpacol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesentrada`
--

CREATE TABLE `detallesentrada` (
  `idEntrada` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallessalida`
--

CREATE TABLE `detallessalida` (
  `idSalida` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id` int(11) NOT NULL,
  `Nombres` varchar(60) DEFAULT NULL,
  `Apellidos` varchar(60) DEFAULT NULL,
  `IdTipoDocumento` int(11) NOT NULL,
  `NumeroDoc` varchar(30) DEFAULT NULL,
  `Observaciones` varchar(300) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id`, `Nombres`, `Apellidos`, `IdTipoDocumento`, `NumeroDoc`, `Observaciones`, `updated_at`, `created_at`) VALUES
(1, 'omnis', 'aliquid', 2, 'consequatur', 'Quis repellat nemo unde dolorem voluptatum debitis. Itaque eligendi harum veritatis rerum.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(2, 'doloribus', 'exercitationem', 2, 'vero', 'Vero sequi quo a voluptatem harum earum adipisci. Suscipit quibusdam doloribus ut deserunt aut eius neque. Nulla non ipsa modi explicabo similique est.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(3, 'dolor', 'et', 2, 'molestiae', 'Dignissimos impedit earum nostrum et veritatis provident omnis. Voluptas culpa autem explicabo et qui omnis. Similique laborum tenetur ab odit id nemo beatae quis.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(4, 'eaque', 'eveniet', 1, 'nihil', 'Saepe eveniet laudantium perferendis illum nobis provident voluptas. Quia laboriosam animi architecto enim quibusdam assumenda. Quia exercitationem rerum nobis distinctio laborum.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(5, 'sed', 'accusantium', 1, 'autem', 'Quisquam incidunt sequi quia. Et dignissimos totam quae et magnam. Enim molestias et magni quia. Eaque enim impedit asperiores ullam nisi dolor est.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(6, 'perspiciatis', 'neque', 1, 'nihil', 'Voluptas quo dicta totam ratione voluptatibus. Excepturi qui optio qui. Sit unde et illum alias vel. Eos sint quidem et asperiores tempore placeat libero.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(7, 'maxime', 'suscipit', 1, 'delectus', 'Sed voluptatem incidunt distinctio earum. Et ea assumenda culpa quas porro tempore. Voluptatibus ut corporis et nulla nemo dolores autem.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(8, 'aliquam', 'suscipit', 1, 'velit', 'Autem unde nihil sed minus. Distinctio rerum sit hic saepe aut in quis. Quidem placeat qui sit aliquid ullam aut et. Enim corporis recusandae voluptates optio aut nulla qui.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(9, 'sit', 'porro', 2, 'qui', 'Eum ab hic assumenda pariatur provident. Et neque omnis at ut cumque.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(10, 'necessitatibus', 'enim', 2, 'quis', 'Quidem quam est distinctio eligendi asperiores velit. Et et corporis non. Quam sit beatae at sint. Et omnis consequatur et earum officiis at.', '2019-08-19 02:05:47', '2019-08-19 02:05:47'),
(11, 'accusantium', 'et', 2, 'dolorum', 'Qui natus reprehenderit sapiente molestias. Aut non delectus eum est. Quos est facilis est unde beatae id. Veritatis totam et officiis illum qui commodi debitis voluptatem.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(12, 'molestiae', 'sed', 1, 'omnis', 'Error aspernatur corporis eius dolores repellendus alias voluptatem aspernatur. Vel voluptatem qui et velit. Minus est consequatur omnis alias omnis sunt quo.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(13, 'aut', 'repellat', 1, 'atque', 'Voluptas accusantium est asperiores modi et esse non. Repellat molestias atque dolorum omnis. Est exercitationem dolor maxime reprehenderit.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(14, 'consectetur', 'quidem', 1, 'aut', 'In voluptas numquam illum. Sed nulla velit voluptatibus non totam. Et rerum ex molestiae quod officia iusto eveniet. Recusandae amet amet et rerum rerum.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(15, 'quam', 'voluptatibus', 2, 'voluptatibus', 'Neque quaerat dicta quia similique. Numquam corrupti et doloribus libero. Quia architecto officiis quidem culpa non voluptas. Sequi dicta quia iste cupiditate.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(16, 'qui', 'et', 1, 'nulla', 'Error quos esse similique non odio et deleniti. Totam in natus necessitatibus blanditiis officiis. Et doloribus velit omnis mollitia quisquam.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(17, 'totam', 'delectus', 1, 'rerum', 'Quo dolores error quaerat. A veniam voluptates officiis. Quasi eaque voluptas ipsum aspernatur accusamus illo.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(18, 'amet', 'mollitia', 1, 'impedit', 'Incidunt laboriosam ex dicta optio aspernatur est qui animi. Dolorum itaque temporibus blanditiis omnis corporis alias sint beatae. Omnis sunt quia ut ipsum quae. Impedit vitae praesentium ipsa.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(19, 'incidunt', 'voluptatem', 2, 'quidem', 'Consequatur distinctio et atque aut eius placeat neque nesciunt. Aut sequi quas minus error consequatur soluta sequi. Voluptas aspernatur aperiam dolorem natus corrupti.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(20, 'ea', 'omnis', 2, 'temporibus', 'Ab maxime qui illo dicta in qui hic. Provident nam deserunt temporibus qui sapiente. Similique corrupti quasi et. Vero corporis eos vitae vel at ut.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(21, 'aperiam', 'quia', 2, 'modi', 'Iure dolor sint animi quibusdam sequi et. Sed eum ab quos quia quos. Unde laborum ratione non et. Unde quia assumenda cupiditate ut iusto est expedita iusto.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(22, 'dolores', 'molestias', 1, 'architecto', 'Molestiae id quis quisquam doloremque quam. Quibusdam voluptas ad inventore et iure est distinctio. Qui optio occaecati nam.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(23, 'saepe', 'voluptates', 2, 'amet', 'Autem non dolores exercitationem voluptatem iste unde sint perferendis. Eveniet in nisi dolorem dolorem. Aut nulla assumenda error dolore et minus qui. Optio delectus natus hic ea est.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(24, 'et', 'architecto', 2, 'eius', 'Ut accusamus ipsum qui alias. Mollitia voluptatem voluptates atque.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(25, 'eum', 'est', 1, 'exercitationem', 'Est esse quaerat fugit quasi ut enim officiis. Qui harum alias dolor et officia. Suscipit quibusdam nihil nulla dolorum dolorum.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(26, 'et', 'occaecati', 1, 'excepturi', 'Qui sed accusantium et non sint mollitia. Numquam unde quia a animi. Recusandae eaque eum nesciunt dignissimos dolorum possimus.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(27, 'sapiente', 'sed', 2, 'harum', 'Ut consequatur omnis velit iusto voluptates. Explicabo a alias sit nemo debitis et voluptates. Numquam cumque est explicabo. Quisquam voluptatibus aut voluptatum ex maxime optio.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(28, 'fuga', 'odio', 1, 'id', 'Veritatis hic veniam officiis qui minima a nihil qui. Eaque iste dicta amet beatae esse laboriosam. Sed magni enim quasi fuga. Quibusdam et molestiae sequi quia.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(29, 'qui', 'qui', 1, 'at', 'Totam eos tempora quis ut provident non sunt aliquam. Et eos provident voluptas quia. Ratione voluptas ad numquam iusto nostrum.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(30, 'quam', 'tempore', 1, 'dolores', 'Autem qui a neque repellendus. Praesentium odio sint totam reprehenderit quia inventore. Molestias aut suscipit culpa non dolorem. Nisi perferendis quam numquam et.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(31, 'exercitationem', 'autem', 2, 'nihil', 'Error sed aliquam dolor eos. Et nam voluptatem ipsam veritatis ea neque atque. Quia nesciunt qui officiis sed aut. Est sit debitis corrupti porro ipsam consequatur incidunt.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(32, 'recusandae', 'amet', 1, 'voluptatem', 'Similique numquam omnis aliquam aut id est. Dolorum et molestiae dolorem eaque corporis. Est ex ut fugiat sed repellat aliquam.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(33, 'corrupti', 'quia', 1, 'delectus', 'Est provident non quia nisi illo iure amet. Quia optio impedit similique facere sequi. Voluptas accusamus eos cumque recusandae nostrum ratione minus. Neque suscipit ea totam et et vel est.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(34, 'assumenda', 'nulla', 1, 'perferendis', 'Vel ab aliquid quia natus consequatur rem fugit. Magni quia eum ut aspernatur magnam aut. Id nisi et nihil et quia. Est et iste perspiciatis iste et earum.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(35, 'ipsam', 'ea', 1, 'porro', 'Dolorem numquam fuga omnis incidunt omnis nobis ipsum. Ut sapiente adipisci et ipsam molestiae. Eum odit quod impedit autem odio sit quia.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(36, 'reiciendis', 'dolorum', 1, 'fuga', 'Cum dolorem occaecati aperiam ea nulla. Voluptas consequuntur iusto quos porro. Ut delectus et sit nesciunt sed est eveniet.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(37, 'natus', 'in', 2, 'quo', 'Cumque ipsam minus perspiciatis iure dicta ut ut. Architecto aspernatur minima libero accusantium dignissimos harum.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(38, 'consequuntur', 'repellendus', 1, 'animi', 'Ut eum et dolor vitae dolor praesentium. Itaque quia alias nihil laborum. Eaque nihil velit molestiae tenetur. Rerum facere sunt officiis magnam voluptatem sit.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(39, 'ut', 'saepe', 1, 'vitae', 'Rerum voluptate quia sunt quisquam quia. Dicta delectus repudiandae maiores quo quod.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(40, 'est', 'dolor', 1, 'officiis', 'Soluta voluptatem et est suscipit dolore. Deleniti veritatis maxime pariatur dolor nihil rerum. Omnis molestiae quos dolorum culpa.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(41, 'sunt', 'quos', 2, 'modi', 'Ratione autem quis dolor possimus. Totam et repellendus vel est iste. Illum commodi asperiores nesciunt itaque et impedit quis.', '2019-08-19 02:05:48', '2019-08-19 02:05:48'),
(42, 'aliquam', 'totam', 1, 'ipsam', 'Cum et ipsa suscipit. Corporis recusandae dolores ducimus commodi ut. Iure rerum vero quasi et ut. Quo debitis eum quis nam id voluptatem modi. Non vel incidunt velit quam deserunt voluptas officiis.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(43, 'quas', 'nesciunt', 2, 'qui', 'Voluptas minus itaque non perspiciatis earum. Nobis impedit consequatur excepturi velit id. Voluptatibus debitis voluptas vel quos minima temporibus id quo.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(44, 'odio', 'dicta', 2, 'facilis', 'Commodi autem in maiores non consequatur quia. Illo similique velit blanditiis distinctio dolor amet quis. Similique voluptate totam a laboriosam enim eum totam dolores. Animi quas iste tenetur.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(45, 'reprehenderit', 'perferendis', 1, 'dolor', 'Ullam alias repellendus aut. Consequatur velit amet qui tempora. Hic doloribus voluptatum aliquid asperiores quasi sit. Laboriosam consequatur molestiae sint reprehenderit dolorum nemo in.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(46, 'soluta', 'laudantium', 2, 'quis', 'Ducimus quia laboriosam in nostrum quae. Recusandae occaecati ad velit eligendi. Optio et et delectus odio commodi. Ut facere laboriosam aut asperiores ipsum non sint.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(47, 'dolore', 'iure', 1, 'consequatur', 'Consectetur autem quam molestiae eaque. Expedita aut recusandae ea quos libero cum ipsum enim. Quaerat non ipsam delectus ducimus nobis nihil. Sint mollitia quas non velit quam distinctio.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(48, 'iure', 'quos', 2, 'dolorum', 'Eum esse corporis repellendus aut veniam facilis. Quibusdam dolor illo dolor odit ullam. Nihil aspernatur molestiae aspernatur sequi dolores consequuntur dolores.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(49, 'aut', 'rem', 1, 'blanditiis', 'Sunt aut et sint aspernatur. Fuga doloribus saepe id fuga. Aperiam alias qui ea eos architecto in accusamus eum. Et ipsum inventore illum modi at aut eos.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(50, 'nihil', 'totam', 2, 'molestiae', 'Pariatur nihil ad sed eos. Laudantium officia nam nisi ab sint velit iusto. Omnis nisi non et quis repellendus nihil rem porro. Consequatur magnam iusto nemo vel tenetur.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(51, 'omnis', 'nostrum', 2, 'eaque', 'Amet perferendis delectus reiciendis autem. Omnis corporis occaecati dolores cumque et ut. Porro ipsum impedit laudantium illo laudantium asperiores. Mollitia inventore dolore quaerat neque.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(52, 'consequatur', 'est', 2, 'inventore', 'Vel alias odio minus atque. Aut debitis et rerum praesentium et. At aut quibusdam vel pariatur et eveniet.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(53, 'id', 'ea', 2, 'rerum', 'Velit sunt consequatur officiis voluptatum illum corporis unde dolores. Molestiae sit ut est qui nam. Rerum quidem aut est dignissimos qui autem. Voluptatum dolores sapiente labore.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(54, 'inventore', 'quaerat', 1, 'corporis', 'Pariatur ea asperiores optio qui enim optio. Earum modi assumenda qui eum quos rerum sint temporibus. Dicta minus dolor et.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(55, 'aut', 'temporibus', 1, 'ut', 'Omnis dicta molestias praesentium facilis quo cumque. Eos quia perspiciatis temporibus. Earum excepturi ullam velit fugit quidem officiis rerum. Omnis itaque qui in dignissimos in tempora.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(56, 'quisquam', 'soluta', 2, 'perspiciatis', 'Fuga ipsum accusamus ab autem asperiores dolorem aut. Minus perspiciatis ea qui. Recusandae amet sit esse architecto ipsam quae. Nemo sit laudantium recusandae neque aliquam dolores tenetur ad.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(57, 'veniam', 'saepe', 1, 'fugiat', 'Excepturi occaecati dolores inventore in sint quae aliquam quam. Dolor incidunt esse quasi voluptatem accusamus. Incidunt recusandae magni non odio nisi et. Fugiat rerum praesentium expedita neque.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(58, 'officiis', 'debitis', 1, 'reprehenderit', 'Facilis non quam sunt nam. Aperiam qui sint rerum at non amet non. Consequatur beatae officia assumenda vitae illum doloribus.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(59, 'voluptas', 'quos', 2, 'inventore', 'Hic odio optio sit voluptatem rerum. Aut quam et ab ut impedit. Quis nostrum quis optio magnam minima quo id. Hic modi et iusto ullam labore deserunt.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(60, 'voluptate', 'fugit', 2, 'temporibus', 'Maxime optio atque temporibus autem nesciunt ut. Ab nobis qui quos aut dicta.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(61, 'voluptatem', 'voluptatum', 1, 'ipsam', 'Maxime quos eligendi cumque voluptatum hic. Fuga quasi nobis incidunt et voluptas et.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(62, 'molestias', 'distinctio', 2, 'rerum', 'Nulla maiores optio error laboriosam ut voluptas. Iste et magnam cumque eum quos. Vero possimus asperiores a porro mollitia et. Quia qui ullam voluptates dolorem et alias.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(63, 'sit', 'minus', 2, 'et', 'Possimus voluptas quibusdam voluptatum. Fugiat ut velit debitis pariatur earum pariatur. Sunt a et omnis voluptatum ipsam.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(64, 'molestiae', 'et', 2, 'adipisci', 'Alias cum blanditiis consectetur impedit ut autem. Architecto dicta ipsa quas quia expedita et. Enim in ullam reiciendis et.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(65, 'voluptatem', 'ipsam', 2, 'velit', 'Explicabo mollitia et deserunt porro itaque eaque consequatur. Sint et et sit laboriosam laudantium. Ad expedita qui in fugit accusamus hic. Sed voluptatem eos earum autem ut.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(66, 'quisquam', 'dolorem', 1, 'maxime', 'Quae fugiat iste fugit non dolor sint quis. Voluptas natus itaque cum nostrum reiciendis. Voluptatem ipsa vero nobis aut est minus. Qui perspiciatis odio sit enim quaerat.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(67, 'in', 'veniam', 2, 'tempore', 'Sed voluptates nisi ullam quibusdam nulla quibusdam dolorum. Odit molestias enim accusamus voluptate. Distinctio porro est delectus deleniti ut. Repellat dolores nemo ipsum iusto quas.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(68, 'libero', 'fugiat', 2, 'quas', 'Quas expedita consequuntur aut error. Possimus ut quia consequuntur omnis. Eos eos non natus culpa dicta. Deleniti sint architecto illum magni.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(69, 'quas', 'in', 1, 'soluta', 'Cumque fuga rerum dolore alias natus ut maiores aliquid. Quod et quod harum harum ullam. Velit aliquam voluptas non recusandae omnis.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(70, 'quidem', 'rerum', 1, 'dolor', 'Voluptatem laborum et similique quis. Est soluta quas cupiditate ducimus odio temporibus. Esse corporis aut consequatur voluptatem reprehenderit. Consequatur deserunt aut laudantium sunt architecto.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(71, 'est', 'rerum', 1, 'nam', 'Sunt numquam suscipit recusandae fugiat non. Culpa officiis ad aut temporibus. Quis vel quibusdam doloremque placeat qui voluptas quia accusantium.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(72, 'impedit', 'animi', 2, 'sit', 'Consequuntur corrupti et et ut magnam corrupti. Voluptatem dolorem ipsam laboriosam eos et. Ullam iusto unde accusantium. Quo rem architecto qui aut odit est voluptas ea.', '2019-08-19 02:05:49', '2019-08-19 02:05:49'),
(73, 'dignissimos', 'aut', 2, 'occaecati', 'Est nulla illum veniam. Et optio ex quia excepturi. Autem quod possimus earum deleniti omnis et.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(74, 'magnam', 'ut', 1, 'officia', 'Saepe in quod pariatur consequatur. Id dolorum quis nobis et neque molestiae. Id ad autem atque aliquid ea quis a.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(75, 'tenetur', 'soluta', 2, 'quis', 'Asperiores corrupti voluptatibus non voluptatem animi. Similique veniam quis fugiat. Libero sit vel ipsam aperiam.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(76, 'iure', 'consequatur', 1, 'aliquid', 'Dolores impedit delectus voluptatem vitae fugit eos qui. Aut debitis consectetur placeat necessitatibus numquam quis. Dolor sapiente hic dolorem exercitationem.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(77, 'quae', 'ducimus', 2, 'sunt', 'Voluptatem nulla nulla enim id et. Sed accusamus assumenda autem sunt. Optio et cum explicabo voluptatem accusamus.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(78, 'porro', 'omnis', 1, 'iste', 'Temporibus aut hic cumque reiciendis. Facilis animi tempora inventore earum laborum nam magni consequuntur. Sit nihil harum nam rerum tempora aliquid.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(79, 'cum', 'necessitatibus', 1, 'nemo', 'Inventore et perspiciatis ab natus saepe. Eos eius necessitatibus quo quia. Aut est quia ut non placeat.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(80, 'necessitatibus', 'tempora', 1, 'sapiente', 'Ad sit vitae eos. Aut quas voluptatum aut nihil pariatur et. Consequatur ab neque temporibus et quam.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(81, 'recusandae', 'commodi', 1, 'officia', 'Unde ea vitae incidunt debitis sed eos vero. Alias et illo consequatur autem. Ullam quo voluptas sint alias maiores aut et. Voluptatem sed error eos nisi qui ea modi.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(82, 'molestiae', 'esse', 1, 'deleniti', 'Perferendis a voluptate magnam expedita. Iure molestiae laudantium provident doloremque.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(83, 'nam', 'ullam', 1, 'nihil', 'Id earum et officiis. Veritatis dolorem voluptatem ad molestias perspiciatis. Voluptas ipsa id et et beatae accusamus qui doloribus.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(84, 'saepe', 'nihil', 2, 'pariatur', 'Facere natus impedit tempore nobis. Deserunt reprehenderit fugiat nihil sit accusantium id. Expedita at sunt dolorem quia sit sed sunt. Odio qui minima sequi voluptates sunt et.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(85, 'excepturi', 'sed', 2, 'velit', 'Et nisi rerum est repudiandae est sunt omnis. Nesciunt amet corrupti adipisci sapiente qui quia at. Sed ratione praesentium sit enim.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(86, 'similique', 'ipsam', 1, 'omnis', 'Est quia aliquid voluptatem qui aut. Provident atque magni culpa vitae ipsam qui. A molestiae officia quidem quis hic provident sapiente.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(87, 'aliquam', 'temporibus', 2, 'accusamus', 'Voluptas vitae qui aliquam architecto suscipit expedita. Aliquam sunt fugiat praesentium. Minus quo voluptatum aut porro nemo qui repudiandae.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(88, 'dolorum', 'vero', 2, 'qui', 'Excepturi qui veritatis est ipsa sit. Eum dolor nostrum non ea cupiditate rem nihil. Iste facilis sit sapiente quibusdam nesciunt esse incidunt.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(89, 'sit', 'impedit', 1, 'dolor', 'Est optio sed voluptatibus eos soluta laborum aut. Sunt optio fuga eligendi. Incidunt voluptas dolorem sed labore.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(90, 'rerum', 'ut', 1, 'soluta', 'Voluptatum ducimus dicta et fugit. Veniam at est quae iusto dolorem voluptatem. Nesciunt ad sed dolorum voluptas nostrum voluptas fugit. Repudiandae delectus doloribus earum.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(91, 'cupiditate', 'eum', 2, 'iure', 'Et repellendus accusamus adipisci ipsam. Laborum expedita saepe ut quia omnis pariatur expedita et. Cumque cumque optio qui minus.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(92, 'sit', 'consectetur', 1, 'id', 'Consequatur quia qui architecto error nostrum architecto quo. Sapiente quis rem soluta eos. Quaerat hic vel voluptas tenetur eveniet.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(93, 'ex', 'perferendis', 2, 'velit', 'Ea atque aspernatur et dolorem. Ad dignissimos impedit magni rerum. Eaque sit sit nulla cum vitae vero odit omnis.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(94, 'corporis', 'cum', 2, 'adipisci', 'Occaecati voluptatem quia porro consequatur. Consequatur quasi et quas accusamus nisi doloremque quis. Est veritatis ea iste.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(95, 'voluptate', 'ex', 1, 'aut', 'Deserunt dolorem quas earum sed eum laborum provident. Aut aspernatur dolorem veniam nemo id. Alias vel vitae temporibus quis et. Sapiente suscipit dignissimos ea.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(96, 'deserunt', 'consequatur', 2, 'iusto', 'Sunt qui amet sit non est sunt qui et. Consequuntur ut maiores distinctio omnis eligendi id. Aliquam sed maiores unde in laboriosam. Maxime est maiores placeat maxime consequatur.', '2019-08-19 02:05:50', '2019-08-19 02:05:50'),
(97, 'voluptatem', 'qui', 2, 'sed', 'Adipisci doloribus facilis nostrum rerum aut quibusdam. Tempora officiis laudantium velit molestias reiciendis et quia.', '2019-08-19 02:05:51', '2019-08-19 02:05:51'),
(98, 'temporibus', 'delectus', 1, 'aspernatur', 'Eaque fugiat doloribus exercitationem eos omnis est explicabo. Dolorum excepturi consequatur rerum et. Laboriosam dolores dignissimos vitae porro veritatis voluptatum.', '2019-08-19 02:05:51', '2019-08-19 02:05:51'),
(99, 'nesciunt', 'consequuntur', 2, 'porro', 'Reprehenderit autem nobis beatae ea porro. Rem adipisci nisi mollitia labore est. Id eaque natus ut voluptates esse aperiam vel magni.', '2019-08-19 02:05:51', '2019-08-19 02:05:51'),
(100, 'et', 'assumenda', 1, 'sit', 'Delectus qui quam consequatur quod et perferendis quisquam. Nostrum voluptas minima esse doloribus ut atque. Soluta qui facere magni. Est nesciunt inventore sit earum asperiores.', '2019-08-19 02:05:51', '2019-08-19 02:05:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `Id` int(11) NOT NULL,
  `IdProveedor` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `Id` int(11) NOT NULL,
  `IdTipoMaterial` int(11) NOT NULL,
  `Existencias` int(11) DEFAULT NULL,
  `Color` set('Verde','Azul','Blanco','Rojo') DEFAULT NULL,
  `IdTextura` int(11) DEFAULT NULL,
  `IdProveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialdaniado`
--

CREATE TABLE `materialdaniado` (
  `idMaterial` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(70) DEFAULT NULL,
  `NombreRepresentante` varchar(100) DEFAULT NULL,
  `TelefonoRepresentante` varchar(60) DEFAULT NULL,
  `Email` varchar(80) DEFAULT NULL,
  `PaisOrigen` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `Id` int(11) NOT NULL,
  `IdEmpleado` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Encargado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamaño`
--

CREATE TABLE `tamaño` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texturapapel`
--

CREATE TABLE `texturapapel` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`Id`, `Descripcion`) VALUES
(1, 'C.C.'),
(2, 'T.I'),
(3, 'C.E.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomaterial`
--

CREATE TABLE `tipomaterial` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `IdTipoPresentacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopresentacion`
--

CREATE TABLE `tipopresentacion` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(80) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `UnidadMedida` enum('Kg','m','cm','Unidad') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `Id` int(11) NOT NULL,
  `Descripcio` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`Id`, `Descripcio`) VALUES
(1, 'adminstrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `IdTipoUsuario` int(11) NOT NULL,
  `Nombres` varchar(60) DEFAULT NULL,
  `Apellidos` varchar(60) DEFAULT NULL,
  `IdTipoDocumento` int(11) NOT NULL,
  `NumDoc` varchar(30) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `IdTipoUsuario`, `Nombres`, `Apellidos`, `IdTipoDocumento`, `NumDoc`, `Email`, `usuario`, `password`, `Estado`) VALUES
(1, 1, 'Johan', 'Barreto', 1, '1000125608', 'jsbarreto80@misena.edu.co', 'johan', '123456', 'Activo'),
(2, 2, 'Brayan', 'Suarez', 1, '1001342271', 'brayan@gmail.com', 'brayanrpt', '12345', 'Activo'),
(3, 1, NULL, NULL, 1, NULL, NULL, 'admin', '$2y$10$APyCozc6AAg5m5IOAqzCP.U3AbdzNrFS762qTcrk5/mF6KniKim6C', 'Activo'),
(4, 1, 'Santiago', 'Aldana', 1, '123456789', 'johan@gmail.com', 'admin123456', '$2y$10$wWqsCBcGMH2trQLLYV/ihu4KbIBJgGgFV0gGrsnCEIbuIIFt5TC9C', 'Inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallesentrada`
--
ALTER TABLE `detallesentrada`
  ADD PRIMARY KEY (`idMaterial`,`idEntrada`),
  ADD KEY `idEntrada` (`idEntrada`);

--
-- Indices de la tabla `detallessalida`
--
ALTER TABLE `detallessalida`
  ADD PRIMARY KEY (`idMaterial`,`idSalida`),
  ADD KEY `idSalida` (`idSalida`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTipoDocumento` (`IdTipoDocumento`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdProveedor` (`IdProveedor`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTipoMaterial` (`IdTipoMaterial`),
  ADD KEY `IdTextura` (`IdTextura`),
  ADD KEY `IdProveedor` (`IdProveedor`);

--
-- Indices de la tabla `materialdaniado`
--
ALTER TABLE `materialdaniado`
  ADD PRIMARY KEY (`idMaterial`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdEmpleado` (`IdEmpleado`),
  ADD KEY `Encargado` (`Encargado`);

--
-- Indices de la tabla `tamaño`
--
ALTER TABLE `tamaño`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `texturapapel`
--
ALTER TABLE `texturapapel`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipomaterial`
--
ALTER TABLE `tipomaterial`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTipoPresentacion` (`IdTipoPresentacion`);

--
-- Indices de la tabla `tipopresentacion`
--
ALTER TABLE `tipopresentacion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTipoUsuario` (`IdTipoUsuario`),
  ADD KEY `IdTipoDocumento` (`IdTipoDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tamaño`
--
ALTER TABLE `tamaño`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `texturapapel`
--
ALTER TABLE `texturapapel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipomaterial`
--
ALTER TABLE `tipomaterial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipopresentacion`
--
ALTER TABLE `tipopresentacion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesentrada`
--
ALTER TABLE `detallesentrada`
  ADD CONSTRAINT `detallesentrada_ibfk_1` FOREIGN KEY (`idEntrada`) REFERENCES `entrada` (`Id`),
  ADD CONSTRAINT `detallesentrada_ibfk_2` FOREIGN KEY (`idMaterial`) REFERENCES `material` (`Id`);

--
-- Filtros para la tabla `detallessalida`
--
ALTER TABLE `detallessalida`
  ADD CONSTRAINT `detallessalida_ibfk_1` FOREIGN KEY (`idSalida`) REFERENCES `salida` (`Id`),
  ADD CONSTRAINT `detallessalida_ibfk_2` FOREIGN KEY (`idMaterial`) REFERENCES `material` (`Id`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`IdTipoDocumento`) REFERENCES `tipodocumento` (`Id`);

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`IdProveedor`) REFERENCES `proveedor` (`Id`);

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`IdTipoMaterial`) REFERENCES `tipomaterial` (`Id`),
  ADD CONSTRAINT `material_ibfk_2` FOREIGN KEY (`IdTextura`) REFERENCES `texturapapel` (`Id`),
  ADD CONSTRAINT `material_ibfk_3` FOREIGN KEY (`IdProveedor`) REFERENCES `proveedor` (`Id`);

--
-- Filtros para la tabla `materialdaniado`
--
ALTER TABLE `materialdaniado`
  ADD CONSTRAINT `materialdaniado_ibfk_1` FOREIGN KEY (`idMaterial`) REFERENCES `material` (`Id`);

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`IdEmpleado`) REFERENCES `empleado` (`Id`),
  ADD CONSTRAINT `salida_ibfk_2` FOREIGN KEY (`Encargado`) REFERENCES `usuario` (`Id`);

--
-- Filtros para la tabla `tipomaterial`
--
ALTER TABLE `tipomaterial`
  ADD CONSTRAINT `tipomaterial_ibfk_1` FOREIGN KEY (`IdTipoPresentacion`) REFERENCES `tipopresentacion` (`Id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `tipousuario` (`Id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`IdTipoDocumento`) REFERENCES `tipodocumento` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
