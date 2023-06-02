-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2023 a las 14:54:53
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basepiratascbtis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `ID` int(2) NOT NULL,
  `Autor` varchar(24) NOT NULL,
  `Cancion` varchar(24) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`ID`, `Autor`, `Cancion`, `Link`) VALUES
(1, 'Radio Head', 'Creep', 'Creep - Radiohead.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaintegrantes`
--

CREATE TABLE `tablaintegrantes` (
  `id` int(14) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `RedSocial` varchar(80) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablaintegrantes`
--

INSERT INTO `tablaintegrantes` (`id`, `Nombre`, `Edad`, `Rol`, `RedSocial`, `foto`) VALUES
(1, 'Manzanilla Fernandez Jania Cristal', 16, 'Area Creativa', 'https://www.facebook.com/cristal.manzanillafernandez?mibexid=ZbWKwL', 'Jania.png'),
(2, 'Platon Rodriguez Walter Emiliano', 17, 'Probador', 'https://www.facebook.com/profile.php?id=100081802026168', 'Emi.png'),
(3, 'Tah Och Angel Tonautiuh', 17, 'Programador principal', 'https://www.facebook.com/tonautiuh.tah', 'Angel.png'),
(4, 'Torres Ramos Alex', 16, 'Programador principal', 'https://www.facebook.com/profile.php?id=100020599362483', 'Alex.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaintegrantes2`
--

CREATE TABLE `tablaintegrantes2` (
  `id` int(14) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `RedSocial` varchar(80) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablaintegrantes2`
--

INSERT INTO `tablaintegrantes2` (`id`, `Nombre`, `Edad`, `Rol`, `RedSocial`, `foto`) VALUES
(1, 'Manzanilla Fernandez Jania Cristal', 17, 'Area Creativa', 'https://www.facebook.com/profile.php?id=10008180202616', 'jania.jpg'),
(2, 'Platon Rodriguez ', 4, 'Programador de respaldo', 'https://www.facebook.com/profile.php?id=10008180202616', 'Emi.png'),
(3, 'Tah Och Angel Tonautiuh', 17, 'Programador principal', 'https://www.facebook.com/tonautiuh.tah', 'Angel.png'),
(4, 'Torres Ramos Alex', 16, 'Programador principal', 'https://www.facebook.com/profile.php?id=100020599362483', 'Alex.png'),
(5, 'Juan Carlos Bodo', 23, 'Area Comica', 'https://www.facebook.com/31minutosoficial/?locale=es_LA', 'Bodoque.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Username` varchar(16) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `contraseña` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Username`, `nombre`, `contraseña`, `Email`) VALUES
('', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('EmiLol', 'Walter Emiliano Platon', '1182b1beebf524386ac63b9f4843f0b8', 'walterplaton@gmail.com'),
('Piratas', '', '81dc9bdb52d04dc20036dbd8313ed055', 'GG@gmail.com'),
('S', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
('Talex8299', 'Alex Torres Ramos', '827ccb0eea8a706c4c34a16891f84e7b', 'talex8299@gmail.com'),
('uuu', 'emi Peña', 'a3d8d9c6553cbcc6bcb818acb4cf1bca', 'dd@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosmf`
--

CREATE TABLE `usuariosmf` (
  `Usuario` varchar(34) NOT NULL,
  `Contraseña` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariosmf`
--

INSERT INTO `usuariosmf` (`Usuario`, `Contraseña`, `Email`) VALUES
('MusicBot', '21232f297a57a5a743894a0e4a801fc3', 'Musicbot@gmail.com'),
('talex8299', '1a011f18c1a619391e7a0aa100d6ced5', 'megahack03@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tablaintegrantes`
--
ALTER TABLE `tablaintegrantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablaintegrantes2`
--
ALTER TABLE `tablaintegrantes2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `usuariosmf`
--
ALTER TABLE `usuariosmf`
  ADD PRIMARY KEY (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
