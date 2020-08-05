-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2020 a las 05:05:13
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `info`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text,
  `user_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id_expe` int(10) NOT NULL,
  `dui` int(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `delito` varchar(100) NOT NULL,
  `nom_conta` varchar(25) NOT NULL,
  `num_conta` int(12) NOT NULL,
  `depa` varchar(25) NOT NULL,
  `muni_dire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `code` varchar(12) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT '0',
  `is_folder` tinyint(1) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `folder_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `file`
--

INSERT INTO `file` (`id`, `code`, `filename`, `description`, `is_public`, `is_folder`, `user_id`, `folder_id`, `created_at`) VALUES
(24, 'vOAxce72H8r3', 'Inscripciones.pdf', '', 0, 0, 1, NULL, '2020-04-06 21:10:59'),
(26, 'LGmeI-YJs-L4', 'PERFIL_DIPUTADOS_FIN.pdf', '', 0, 0, 1, NULL, '2020-04-06 21:15:54'),
(27, 'syTKbr0DnoZ-', 'Peniteciario-final.pdf', '', 0, 0, 1, NULL, '2020-04-06 21:16:27'),
(30, 'oWKzAxGwzTea', 'Grafos_Caminos_y_conectividad.pdf', '', 0, 0, 1, NULL, '2020-04-06 22:30:30'),
(31, '9mtmJfuEpAQN', 'calendarizacioncicloii2019.pdf', 'fechas 2019', 0, 0, 5, NULL, '2020-06-05 18:26:43'),
(32, '95bxjcYgvr9i', 'YcYYY__YYYYYYY_concluido.png', '', 0, 0, 5, NULL, '2020-06-05 18:27:18'),
(33, 'OcrTSSvV0YvP', '11bf424d4fcd3d0f973c775c69878e34.jpg', '', 0, 0, 5, NULL, '2020-06-05 20:00:47'),
(34, 'cJ9revuJhKsI', 'EL_DERECHO_Y_SU_FUNCION_EN_EL_CAMBIO_SOCIAL..pdf', 'derecho', 0, 0, 5, NULL, '2020-06-05 20:02:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permision`
--

CREATE TABLE `permision` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_admin` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `email`, `password`, `image`, `is_active`, `is_admin`, `created_at`) VALUES
(1, 'rafa', 'rafa', 'rafa', 'rafa@rafa', 'abc3b8b51e7368cc405cb8a23f1f8ba625d57114', NULL, 1, 0, '2020-04-04 20:38:24'),
(3, 'Geronimo', 'Martinez', 'gero00', 'madai18reyes@gmail.com', 'bd47ea0b721e0c21f8693b3fe4916a2727523296', NULL, 1, 0, '2020-04-11 16:56:11'),
(5, 'jennifer', 'reyes', 'jenne081', 'madai018@gmail,com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', NULL, 1, 0, '2020-05-21 14:22:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_id` (`folder_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `permision`
--
ALTER TABLE `permision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `permision`
--
ALTER TABLE `permision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `file_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `permision`
--
ALTER TABLE `permision`
  ADD CONSTRAINT `permision_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `permision_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
