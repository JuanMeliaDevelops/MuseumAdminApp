-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 21:55:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museumdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`user`, `password`) VALUES
('jmelia', 'admin');
('invitado', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `instaUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `name`, `lastName`, `email`, `instaUser`) VALUES
(22, 'Christian ', 'Farro', 'chrisfarro@redbull.com', 'chrisfarro'),
(6, 'CRO', 'Barderos', 'cro@barderos.com ', 'crocraxker'),
(11, 'DeadMau5', 'DJ', 'deadmau5@mau5trap.com ', 'deadmau5'),
(15, 'El Rubius ', 'Youtuber', 'elrubius@ust.com ', 'elrubiuswtf'),
(7, 'Flume  ', 'DJ ', 'flume@gmail.com  ', 'flume'),
(10, 'Hernan', 'Cattaneo', 'hernancattaneo@sudbeat.com', 'djhernancattaneo'),
(23, 'Jerome', 'Cloetens', 'jeromecloetens@palau.com', 'jeromecloetens'),
(3, 'Lilly ', 'Collins ', 'lillycollins@disney.com ', 'lilyjcollins'),
(2, 'Matthew  ', 'Williams  ', 'MatthewWilliams@Givenchy.com  ', 'matthewmwilliams'),
(5, 'Leo ', 'Messi ', 'messi10@gmail.com ', 'leomessi'),
(1, 'Roberto   ', 'Sanchez   ', 'robertosanchez@gmail.com   ', 'robertosanchezstyle'),
(12, 'yayo   ', 'moreno   ', 'yayomoreno@gmail.com   ', 'guridiyayo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`user`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `instaUser` (`instaUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
