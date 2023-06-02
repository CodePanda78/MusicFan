CREATE TABLE `TablaIntegrantes` (
  `id` int(14) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `RedSocial` varchar(80) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `TablaIntegrantes`
--

INSERT INTO `TablaIntegrantes` (`id`, `Nombre`, `Edad`, `Rol`, `RedSocial`, `foto`) VALUES
(1, 'Manzanilla Fernandez Jania Cristal', 16, 'Area Creativa', 'https://www.facebook.com/cristal.manzanillafernandez?mibexid=ZbWKwL', 'Jania.png'),
(2, 'Platon Rodriguez Walter Emiliano', 17, 'Probador', 'https://www.facebook.com/profile.php?id=100081802026168', 'Emi.png'),
(3, 'Tah Och Angel Tonautiuh', 17, 'Programador principal', 'https://www.facebook.com/tonautiuh.tah', 'Angel.png'),
(4, 'Torres Ramos Alex', 16, 'Programador principal', 'https://www.facebook.com/profile.php?id=100020599362483', 'Alex.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `TablaIntegrantes`
--
ALTER TABLE `TablaIntegrantes`
  ADD PRIMARY KEY (`id`);
COMMIT;