-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2022 a las 19:26:28
-- Versión del servidor: 10.4.27-MariaDB-log
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lesiones`
--

CREATE TABLE `lesiones` (
  `id` int(11) NOT NULL,
  `parte_cuerpo` varchar(60) NOT NULL,
  `subparte_cuerpo` varchar(60) NOT NULL,
  `lesion` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lesiones`
--

INSERT INTO `lesiones` (`id`, `parte_cuerpo`, `subparte_cuerpo`, `lesion`, `descripcion`) VALUES
(1, 'Rodilla', '', 'Esguince de rodilla\r\n\r\n', 'Un esguince de rodilla es un estiramiento o desgarro de un ligamento en la rodilla. Los ligamentos sostienen la rodilla y mantienen los huesos y la articulación en la posición correcta. Un esguince de rodilla podría involucrar uno o más ligamentos.'),
(2, 'Menisco', '', 'Lesión de menisco', 'Un menisco se lesiona por causas mecánicas cuando el paciente presenta alguna alteración o alguna deformidad en una determina estructura de su cuerpo. Este tipo de causas es frecuente apreciarlas en aquellas personas que presenten alguna alteración en la cadera o en la forma de caminar. Esto va a provocar que el paciente ande o realice la pisa de una manera incorrecta, generando un sobre esfuerzo de la rodilla forzando las diferentes estructuras de las que está compuesta.\r\nEste tipo de causas es muy frecuente apreciarlas en aquellas personas que realizan algún deporte que lleve implícito un gran dinamismo tanto en el movimiento como en el cambio de ritmo de este.\r\nEs por ello por lo que los deportes en los que los meniscos sufren más de lo habitual son el futbol, el rugby, tenis, esquí o voleibol.\r\n'),
(3, 'Rotula', '', 'Tendinitis rotuliana', 'La tendinitis rotuliana es una lesión en el tendón que conecta la rótula con la tibia. El tendón rotuliano trabaja con los músculos de la parte frontal del muslo para extender la rodilla de modo que puedas patear, correr y saltar.\r\nLa tendinitis rotuliana, también conocida como “rodilla de saltador”, es más común en atletas cuyos deportes incluyen saltos frecuentes, como el baloncesto y el voleibol. Sin embargo, las personas que no practican deportes de salto pueden sufrir tendinitis rotuliana.\r\n'),
(4, 'Tobillo', '', 'Esguince de tobillo', 'Un esguince de tobillo es una lesión que se produce cuando te doblas, tuerces o giras el tobillo de una forma extraña. Esto puede estirar o desgarrar las bandas resistentes de tejido (ligamentos) que ayudan a mantener los huesos del tobillo unidos.\r\nLos ligamentos ayudan a estabilizar las articulaciones evitando el movimiento excesivo. El esguince de tobillo se produce cuando se fuerzan los ligamentos más allá de su amplitud normal de movimiento. La mayoría de los esguinces de tobillo suponen lesiones a los ligamentos en el lado externo del tobillo.\r\n'),
(5, 'Tendon de aquiles', '', 'Rotura del tendón de Aquiles', 'La rotura del tendón de Aquiles es una lesión que afecta la parte trasera de la pantorrilla. Ocurre principalmente en las personas que practican deportes recreativos, pero puede sucederle a cualquiera. El tendón de Aquiles es un fuerte cordón fibroso que conecta los músculos de la parte trasera de la pantorrilla con el hueso del talón.'),
(6, 'Metatarso', '', 'Metatarsalgia', 'La metatarsalgia consiste en una afección dolorosa del metatarso, la región del antepié situada entre el tarso y las falanges de los pies. El metatarso está constituido por los huesos metatarsianos y es uno de los puntos del pie sobre los que se apoya el peso del cuerpo al caminar o correr, coincidiendo con la flexión dorsal del mismo.'),
(7, 'Tibia', '', 'Fractura de tibia', 'La fractura distal de tibia es una lesión ósea, frecuentemente de origen traumático que padecen personas de la tercera edad y deportistas.\r\nLas caídas desde grandes alturas y los accidentes automovilísticos son las causas más comunes de estas lesiones. Sin embargo, los choques, caídas e impactos durante la realización de actividades deportivas también suponen una causa frecuente de esta lesión. En estos casos se producen diversos patrones de rotura que varían según la ubicación del pie y la cantidad de energía transferida en el momento de la lesión.\r\n'),
(8, 'Perone', '', 'Fractura de peroné', 'La fractura de peroné es una fractura ósea que afecta al hueso homónimo situado en la pierna. Aunque puede presentarse de manera aislada, frecuentemente se asocia a fractura de tibia. Suele deberse a traumatismos importantes como caídas de altura, accidentes de tráfico o esguince de tobillo, en muchas ocasiones la fractura se produce durante la realización de la práctica deportiva.'),
(9, 'Bicep femoral', '', 'La tendinitis del bíceps femoral', 'La tendinitis del bíceps femoral es una frecuente lesión deportiva que se caracteriza por ocasionar dolor posterior externo de rodilla que aumenta con ciertos movimientos, especialmente al correr.'),
(10, 'Hueso escafoides', '', 'Fractura del hueso escafoides', 'Una fractura del hueso escafoides cerca de la muñeca (el escafoides es un pequeño hueso de la muñeca localizado en la base del pulgar) puede causar problemas a largo plazo, es difícil de diagnosticar, y requiere mucho tiempo para consolidarse.\r\nNormalmente se produce si caes sobre la mano extendida, con flexión de la muñeca hacia atrás.\r\n'),
(11, 'Hombro', '', 'Luxación de hombro', 'La principal causa de esta lesión es la caída sobre el brazo en extensión que realizan los porteros cuando saltan lateralmente para tratar de parar el balón.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lesion_usuario`
--

CREATE TABLE `lesion_usuario` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_lesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rehabilitacion`
--

CREATE TABLE `rehabilitacion` (
  `id` int(11) NOT NULL,
  `id_lesion` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `serie_tiempo` text NOT NULL,
  `serie_lapso` text NOT NULL,
  `periodo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rehabilitacion`
--

INSERT INTO `rehabilitacion` (`id`, `id_lesion`, `descripcion`, `serie_tiempo`, `serie_lapso`, `periodo`) VALUES
(1, 1, 'Apoyar las manos en la pared a la altura de los ojos, proceder colocando una de las piernas atrás de la otra y mantener el talón fijo al suelo mientras se flexiona la rodilla. Estos ejercicios van a trabajar en una zona específica de los músculos de la pantorrilla, y te ayudarán en la recuperación del esguince.', 'Realizar por un tiempo de 10 minutos.', 'Realizar 10 repeticiones del ejercicio.', 'Tiempo de recuperación 2 semanas.'),
(2, 2, 'Extiende la rodilla. \r\nSi no puedes extender tu rodilla completamente, este es tu ejercicio:\r\nTumbado en el suelo, coloca una toalla enrollada debajo del talón de la pierna en cuestión. La idea es que quede levantada unos 15 cm del suelo.\r\nColoca tu talón encima de la toalla y deja descansar la pierna, permitiendo que la fuerza de la gravedad estire suavemente tu rodilla. Por lo menos mantente en esta postura 2 minutos.\r\nRepítelo tres veces o tantas veces como necesites.\r\n', 'Realizar por 15 minutos.', 'Realizar 15 repeticiones.', 'Tiempo de recuperación 2 meses. '),
(3, 3, 'Las zancadas inversas también son un excelente ejercicio para la tendinitis rotuliana. Esto se debe a que fortalece los cuádriceps y mejora considerablemente las molestias ocasionadas por esta alteración, aunque es primordial que se practiquen de manera correcta, por lo que debes estar supervisado por profesionales.\r\nPara realizarlo, primero separa las piernas hasta que se encuentren a la altura de los hombros. A continuación, mueve una pierna hacia atrás y flexiona la rodilla hasta casi tocar el suelo con la misma, dejando caer tu peso sobre esta pierna. Finalmente, vuelve a la posición inicial y realiza el mismo movimiento con la pierna contraria. Haz repeticiones alternando cada una de las piernas durante no menos de 3 minutos, si te resulta difícil, puedes ayudarte con una barra.\r\n', 'Realizar durante 10 minutos.', 'Realizar 10 repeticiones por cada pierna.', 'Tiempo de recuperación 2 semanas.'),
(4, 4, 'Dorsiflexión\r\nAsegura tu banda de resistencia alrededor de un punto de anclaje resistente y envuelve los extremos alrededor de tu antepié. Comienza con el pie apuntando hacia abajo y luego levante el tobillo todo lo que puedas, estirando el pie para que tus dedos apunten hacia el techo.\r\nCambia de lado y repite.\r\n', 'Realiza durante 10 minutos.', 'Realiza 15 Repeticiones en el tobillo afectado.', 'Tiempo de recuperación 3 semanas.'),
(5, 5, 'Estiramientos de la zona del gastrocnemio y tendón de Aquiles. Aquí es la parte más importante para conseguir la recuperación de la tendinitis. Se recomienda realizar ejercicios eccéntricos y concéntricos para mejorar la elasticidad y la vascularización del Aquiles.', 'Realizar durante 20 minutos.', 'Realizar 30 repeticiones en el pie donde se localiza la lesion.', 'Tiempo de recuperación completa 3 meses.'),
(6, 6, 'Para el problema de metatarsalgia, debe sentarse con los pies en el piso de ejercicios y colocar un tobillo sobre el muslo opuesto, mientras flexiona los pies ligeramente.\r\nA continuación, debe jalar los dedos hacia atrás, es decir, hacia la espinilla de manera firme pero suave, usando la mano del mismo lado. Tienes que hacer esto hasta ya menos que experimentes estirar el arco.\r\nTienes que mantener el estiramiento durante unos 10 segundos a 20 segundos, mientras que liberarlo durante unos 10 segundos. Además, debe repetir el paso durante aproximadamente 5 veces a 10 veces en un día, mientras que repita la misma actividad con el otro pie.\r\nFinalmente, debes asegurarte de la posición de estiramiento adecuada de tu cuerpo. Para esto, tienes que pasar los dedos opuestos suavemente por la planta del pie. En este caso, el ligamento de la fascia debe tener una sensación similar a la de un firme fuerte en el arco, al mismo tiempo que debe asegurarse del estiramiento adecuado en caso de fascitis plantar.\r\n', 'Realizar durante 10 minutos.', 'Realizar 10 repeticiones en el pie lesionado.', 'Tiempo de recuperación 14 días.'),
(7, 7, 'Ejercicios para rehabilitación\r\nCuando tu flexibilidad y movilidad comiencen a mejorar, tu doctor recomendará que hagas ejercicios para fortalecer tu pierna. Tu fisioterapeuta comenzará con poca o ninguna resistencia, dependiendo de la fuerza de tu pierna y de lo que puedas tolerar. Incluso puede usar bandas de resistencia en vez de peso. Algunos de los ejercicios útiles que tu terapeuta puede hacerte hacer luego de una fractura en la tibia pueden ser sentadillas con una pierna sobre la pared, levantar las piernas y hacer flexiones de piernas, todos ellos usando tu pierna lesionada. Los ejercicios para hacer después de una fractura en el peroné pueden incluir movimientos circulares en el sentido de las agujas del reloj y en el sentido contrario con tu tobillo lesionado y flexiones hacia arriba y hacia abajo y de lado a lado. Usualmente comenzarás trabajando suavemente, con sólo 10 repeticiones de cada ejercicio al principio.\r\n', 'Realizar durante 10 minutos.', 'Realizar 20 Repeticiones.', 'Tiempo de recuperación 4 meses.'),
(8, 8, 'Contracción del muslo o isométricos de cuádriceps\r\nUno de los ejercicios para la fractura de peroné más recomendados consiste en acostarse boca arriba sobre la cama, con ambas piernas rectas. El esfuerzo se debe realizar al contraer la parte anterior del muslo, como si se quisiera aplastar la pierna contra la cama durante 10 segundos. Después, se debe descansar durante 20 segundos y repetir el movimiento 20 veces al menos unas 3 veces al día.\r\n', 'Realizar durante 10 minutos.', 'Realizar 20 repeticiones.', 'Tiempo de recuperación 4 meses.'),
(9, 9, 'Flexión de rodilla en máquina\r\nEste ejercicio es ideal para trabajar nuestras piernas, pero sobre todo para potenciar nuestro bíceps femoral.\r\nNos debemos colocar en la máquina con las piernas bien situadas y sujetando bien los agarres. El ejercicio consiste en realizar fuerza femoral para empujar hacia abajo los pesos de la máquina, causando así la flexión de la rodilla.\r\n', 'Realizar durante 15 minutos.', 'Realizar 20 repeticiones.', 'Tiempo de recuperación 4 semanas.'),
(10, 10, 'Después de la operación realizar ejercicios de flexibilidad para recuperar la movilidad y fuerza. \r\nApretar una pelota de espuma.', 'Realizar durante 10 minutos.', 'Realizar 40 repeticiones.', 'Tiempo de recuperación 6 meses.'),
(11, 11, 'Ejercicios para la rehabilitación de luxación de hombro\r\nSostenga un extremo de la banda elástica con la mano del brazo adolorido. Gire el antebrazo hacia el cuerpo hasta que le toque el vientre. Durante este movimiento, mantenga el codo y el brazo apretados firmemente contra la toalla enrollada o contra el costado del cuerpo. \r\n', 'Realizar durante 8 minutos.', 'Realizar 12 repeticiones.', 'Tiempo de recuperación 3 semanas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `edad`, `contrasena`, `correo`) VALUES
(2, 'Sare', 19, '5524', 'josare2166alv@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lesiones`
--
ALTER TABLE `lesiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lesion_usuario`
--
ALTER TABLE `lesion_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_lesion` (`id_lesion`);

--
-- Indices de la tabla `rehabilitacion`
--
ALTER TABLE `rehabilitacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lesion` (`id_lesion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `usuario_2` (`usuario`),
  ADD UNIQUE KEY `usuario_3` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lesiones`
--
ALTER TABLE `lesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `lesion_usuario`
--
ALTER TABLE `lesion_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rehabilitacion`
--
ALTER TABLE `rehabilitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lesion_usuario`
--
ALTER TABLE `lesion_usuario`
  ADD CONSTRAINT `lesion_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `lesion_usuario_ibfk_2` FOREIGN KEY (`id_lesion`) REFERENCES `lesiones` (`id`);

--
-- Filtros para la tabla `rehabilitacion`
--
ALTER TABLE `rehabilitacion`
  ADD CONSTRAINT `rehabilitacion_ibfk_1` FOREIGN KEY (`id_lesion`) REFERENCES `lesiones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
