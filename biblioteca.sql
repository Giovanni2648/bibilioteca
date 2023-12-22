SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

CREATE TABLE `autor` (
  `id_autor` int(8) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `autor` (`id_autor`, `nombre`, `nacionalidad`) VALUES
(505, 'facundo', 'americanoss'),
(506, 'Esteban Hernandez', 'Espa?ol'),
(507, 'marcos', 'america'),
(508, 'Eugene Cramer', 'Chilena'),
(509, 'Samuel Rubio', 'Italiano');

CREATE TABLE `libro` (
  `id_libro` int(8) NOT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `editorial` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `cover_url` varchar(120) DEFAULT NULL,
  `digital_url` varchar(120) DEFAULT NULL,
  `disponible_fisico` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `libro` (`id_libro`, `titulo`, `editorial`, `area`, `cover_url`, `digital_url`, `disponible_fisico`) VALUES
(101, 'El Corazon de Blanca', 'amanecer', 'novela', 'blanca', 'florees', 1),
(102, 'La Polifonia Clasica', 'biblioteca ciudad de dios', 'drama', 'cuidad', 'dios', 1),
(103, 'Historia de la Musica', 'alianza musica', 'musical', 'historia', 'musica', 0),
(104, 'El canto Gregoriano', 'alianza musica', 'historia', 'liturgia', 'musica', 1),
(105, 'Tomas Luis de Victoria', 'publicaciones espa?olas', 'novela', 'espa?ola', 'victorias', 0);

CREATE TABLE `libro_autor` (
  `id` int(8) NOT NULL,
  `libro_id` int(8) DEFAULT NULL,
  `autor_id` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `libro_autor` (`id`, `libro_id`, `autor_id`) VALUES
(129, 102, 508),
(130, 102, 506),
(131, 103, 507),
(132, 104, 508),
(133, 105, 509);

CREATE TABLE `prestamo` (
  `id_prestamo` int(8) NOT NULL,
  `fecha_prestamo` date DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `devuelto` tinyint(1) DEFAULT NULL,
  `usuario_id` int(8) DEFAULT NULL,
  `libro_id` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `prestamo` (`id_prestamo`, `fecha_prestamo`, `fecha_devolucion`, `devuelto`, `usuario_id`, `libro_id`) VALUES
(13, '2022-12-11', '2004-12-20', 1, 988, 105),
(14, '2023-02-10', '2023-05-30', 0, 990, 103),
(15, '2022-12-16', '2023-01-20', 0, 991, 105),
(16, '2022-05-04', '2023-08-31', 1, 991, 104);

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `programa` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`id_usuario`, `nombre`, `programa`, `fecha_nacimiento`, `correo`, `password`) VALUES
(988, 'Alan', 'Etica', '2000-12-14', 'alan1@gmail.com', '8924924'),
(989, 'Martin', 'Literatura', '2004-02-18', 'martin2@gmail.com', '2327043'),
(990, 'Juan', 'Literatura', '2003-07-08', 'juan4@gmail.com', '1290184'),
(991, 'Clara', 'Lengua', '2002-06-27', 'clara7@gmail.com', '0834242'),
(992, 'Macarena', 'Lengua', '2001-02-21', 'maca9@gmail.com', '08274273'),
(993, NULL, NULL, NULL, 'giovagameplay151@gmail.com', 'Re1234'),
(994, NULL, NULL, NULL, 'giovagameplay151@gmail.com', 'Re1234');


ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

ALTER TABLE `libro_autor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libro_id` (`libro_id`),
  ADD KEY `autor_id` (`autor_id`);

ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `libro_id` (`libro_id`),
  ADD KEY `usuario_id` (`usuario_id`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);


ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=995;


ALTER TABLE `libro_autor`
  ADD CONSTRAINT `libro_autor_ibfk_1` FOREIGN KEY (`libro_id`) REFERENCES `libro` (`id_libro`),
  ADD CONSTRAINT `libro_autor_ibfk_2` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`id_autor`);

ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`libro_id`) REFERENCES `libro` (`id_libro`),
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
