-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 04:19:58
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
-- Base de datos: `musicfan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `ID` int(2) NOT NULL,
  `Portada` varchar(100) NOT NULL,
  `Autor` varchar(24) NOT NULL,
  `Cancion` varchar(24) NOT NULL,
  `Link` varchar(53) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`ID`, `Portada`, `Autor`, `Cancion`, `Link`) VALUES
(1, 'Portada\\PortadaCreep.jpg', 'Radio Head', 'Creep', 'music\\Creep - Radiohead.mp3'),
(2, 'Portada\\PortadaWeirdFishes.jpg', 'Radio Head', 'Weird Fishes', 'music\\Weird Fishes Arpeggi - Radiohead.mp3'),
(3, 'Portada\\SpaceJunk.jpg', 'Wang Chung', 'Space Junk', 'music\\Space Junk - Wang Chung.mp3'),
(4, 'Portada\\DizzyPortada.jpg', 'Joakim Karud', 'Dizzy', 'music\\Dizzy - Joakim Karud.mp3'),
(5, 'Portada\\DreamOnPortada.jpg', 'Aerosmith', 'Dream On', 'music\\Dream On - Aerosmith (320).mp3'),
(6, 'Portada\\GoShoppingPortada.jpeg', 'Bran Van 3000', 'Go Shopping', 'music\\Go Shopping - Bran Van 3000 (320).mp3'),
(7, 'Portada\\TheRoverPortada.jpg', 'Interpol', 'The Rover', 'music\\The Rover - Interpol.mp3'),
(8, 'Portada\\InterpolPortada.jpg', 'Interpol', 'Evil', 'music\\Evil - Interpol.mp3'),
(9, 'Portada\\TheDepthsPortada.jpg', 'Interpol', 'The Depths', 'music\\The Depths.mp3'),
(10, 'Portada\\CAYAPortada.jpeg', 'Nirvana', 'Come As You are', 'music\\Come As You Are - Nirvana.mp3'),
(11, 'Portada\\SomethingPortada.jpeg', 'Nirvana', 'Something In The Way', 'music\\Something In The Way - Nirvana.mp3'),
(12, 'Portada\\NevermindPortada.jpg', 'Nirvana', 'Drain You', 'music\\Drain You - Nirvana.mp3'),
(13, 'Portada\\S3RLPortada.jpeg', 'S3RL', 'MTC', 'music\\Mtc - S3RL.mp3'),
(14, 'Portada\\YellowPortada.jpg', 'Coldplay', 'Yellow', 'music\\Yellow - Coldplay.mp3'),
(15, 'Portada\\TurnBrightPortada.jpg', 'Interpol', 'PDA', 'music\\PDA (2012 Remaster).mp3'),
(16, 'Portada\\TheRoverPortada.jpg', 'Interpol', 'Obstacle 1', 'music\\Obstacle 1.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_angel`
--

CREATE TABLE `tabla_angel` (
  `ID` int(11) NOT NULL,
  `Autor` varchar(50) DEFAULT NULL,
  `Cancion` varchar(50) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_angel`
--

INSERT INTO `tabla_angel` (`ID`, `Autor`, `Cancion`, `Link`, `profile_image`) VALUES
(3, 'Wang Chung', 'Space Junk', 'music\\Space Junk - Wang Chung.mp3', NULL),
(4, 'Joakim Karud', 'Dizzy', 'music\\Dizzy - Joakim Karud.mp3', NULL),
(5, 'Aerosmith', 'Dream On', 'music\\Dream On - Aerosmith (320).mp3', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_musicbot`
--

CREATE TABLE `tabla_musicbot` (
  `ID` char(2) DEFAULT NULL,
  `Autor` varchar(24) DEFAULT NULL,
  `Cancion` varchar(24) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_musicbot`
--

INSERT INTO `tabla_musicbot` (`ID`, `Autor`, `Cancion`, `Link`, `profile_image`) VALUES
('2', 'Radio Head', 'Weird Fishes', 'music\\Weird Fishes Arpeggi - Radiohead.mp3', NULL),
('1', 'Radio Head', 'Creep', 'music\\Creep - Radiohead.mp3', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosmf`
--

CREATE TABLE `usuariosmf` (
  `Usuario` varchar(34) NOT NULL,
  `Contraseña` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `profile_image` varchar(255) DEFAULT 'Portada/User.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariosmf`
--

INSERT INTO `usuariosmf` (`Usuario`, `Contraseña`, `Email`, `profile_image`) VALUES
('Angel', '54de734bc460bd404caee618007c6be6', 'animaticsenespanol@gmail.com', 'Portada/User.png'),
('MusicBot', '21232f297a57a5a743894a0e4a801fc3', 'MusicBot@gmail.com', 'uploadsMusicBot.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tabla_angel`
--
ALTER TABLE `tabla_angel`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuariosmf`
--
ALTER TABLE `usuariosmf`
  ADD PRIMARY KEY (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_angel`
--
ALTER TABLE `tabla_angel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
