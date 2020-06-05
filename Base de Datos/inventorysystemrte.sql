-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2020 a las 21:53:50
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventorysystemrte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `AmbienteID` int(11) NOT NULL,
  `Especialidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`AmbienteID`, `Especialidad`) VALUES
(201, 'Desarrollo'),
(202, 'Audio Visual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente_has_sede`
--

CREATE TABLE `ambiente_has_sede` (
  `Ambiente_AmbienteID` int(11) NOT NULL,
  `Sede_SedeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elemento`
--

CREATE TABLE `elemento` (
  `ElementoID` int(11) NOT NULL,
  `Ambiente_AmbienteID` int(11) NOT NULL,
  `TipoElemento_TipoElementoID` int(11) NOT NULL,
  `Estado_EstadoID` int(11) NOT NULL,
  `Marca` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `elemento`
--

INSERT INTO `elemento` (`ElementoID`, `Ambiente_AmbienteID`, `TipoElemento_TipoElementoID`, `Estado_EstadoID`, `Marca`, `Descripcion`) VALUES
(1, 201, 1, 1, 'HP', 'El Computador Cuenta Con 1TB, 16GB RAM, Procesador Intel Core i5 7000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `EstadoID` int(11) NOT NULL,
  `TipoEstado` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`EstadoID`, `TipoEstado`, `Descripcion`) VALUES
(1, 'Activo', 'Correcto Funcionamie'),
(2, 'Inactivo', 'Presenta Fallas'),
(3, 'Baja', 'Elemento Sin Arreglo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `RolID` int(11) NOT NULL,
  `Especialidad` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`RolID`, `Especialidad`, `Descripcion`) VALUES
(1, 'Administrador', 'Persona encargada de la administración de activos y procesos del SENA'),
(2, 'TecnicoLogista', 'Persona encargada de la revisión del correcto funcionamiento de los activos del SENA '),
(3, 'Aprendiz', 'Estudiante asistente al SENA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_has_usuario`
--

CREATE TABLE `rol_has_usuario` (
  `Rol_RolID` int(11) NOT NULL,
  `Usuario_UsuarioID` int(11) NOT NULL,
  `Estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_has_usuario`
--

INSERT INTO `rol_has_usuario` (`Rol_RolID`, `Usuario_UsuarioID`, `Estado`) VALUES
(1, 3, 'Activo'),
(2, 6, 'Activo'),
(3, 4, 'Activo'),
(3, 5, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `SedeID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `NombreSede` varchar(20) DEFAULT NULL,
  `Direccion` varchar(20) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `AmbienteID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoelemento`
--

CREATE TABLE `tipoelemento` (
  `TipoElementoID` int(11) NOT NULL,
  `TipoElemento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoelemento`
--

INSERT INTO `tipoelemento` (`TipoElementoID`, `TipoElemento`) VALUES
(1, 'Computador'),
(2, 'Camara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `UsuarioID` int(11) NOT NULL,
  `Cedula` int(11) DEFAULT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`UsuarioID`, `Cedula`, `Nombre`, `Apellido`, `Contraseña`) VALUES
(3, 41667107, 'Carmen', 'Martinez', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 1000123676, 'Julian', 'Rodriguez', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 1000012356, 'Camila', 'Romero', '202cb962ac59075b964b07152d234b70'),
(6, 1000765232, 'Daniela', 'Ramirez', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_sede`
--

CREATE TABLE `usuario_has_sede` (
  `Usuario_UsuarioID` int(11) NOT NULL,
  `Sede_SedeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`AmbienteID`);

--
-- Indices de la tabla `ambiente_has_sede`
--
ALTER TABLE `ambiente_has_sede`
  ADD PRIMARY KEY (`Ambiente_AmbienteID`,`Sede_SedeID`),
  ADD KEY `Ambiente_has_Sede_FKIndex1` (`Ambiente_AmbienteID`),
  ADD KEY `Ambiente_has_Sede_FKIndex2` (`Sede_SedeID`);

--
-- Indices de la tabla `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`ElementoID`,`Ambiente_AmbienteID`),
  ADD KEY `Elemento_FKIndex1` (`Estado_EstadoID`),
  ADD KEY `Elemento_FKIndex2` (`TipoElemento_TipoElementoID`),
  ADD KEY `Elemento_FKIndex3` (`Ambiente_AmbienteID`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`EstadoID`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`RolID`);

--
-- Indices de la tabla `rol_has_usuario`
--
ALTER TABLE `rol_has_usuario`
  ADD PRIMARY KEY (`Rol_RolID`,`Usuario_UsuarioID`),
  ADD KEY `Rol_has_Usuario_FKIndex1` (`Rol_RolID`),
  ADD KEY `Rol_has_Usuario_FKIndex2` (`Usuario_UsuarioID`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`SedeID`);

--
-- Indices de la tabla `tipoelemento`
--
ALTER TABLE `tipoelemento`
  ADD PRIMARY KEY (`TipoElementoID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- Indices de la tabla `usuario_has_sede`
--
ALTER TABLE `usuario_has_sede`
  ADD PRIMARY KEY (`Usuario_UsuarioID`,`Sede_SedeID`),
  ADD KEY `Usuario_has_Sede_FKIndex1` (`Usuario_UsuarioID`),
  ADD KEY `Usuario_has_Sede_FKIndex2` (`Sede_SedeID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `elemento`
--
ALTER TABLE `elemento`
  MODIFY `ElementoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `EstadoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `RolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `SedeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoelemento`
--
ALTER TABLE `tipoelemento`
  MODIFY `TipoElementoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambiente_has_sede`
--
ALTER TABLE `ambiente_has_sede`
  ADD CONSTRAINT `ambiente_has_sede_ibfk_1` FOREIGN KEY (`Ambiente_AmbienteID`) REFERENCES `ambiente` (`AmbienteID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ambiente_has_sede_ibfk_2` FOREIGN KEY (`Sede_SedeID`) REFERENCES `sede` (`SedeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `elemento_ibfk_1` FOREIGN KEY (`Estado_EstadoID`) REFERENCES `estado` (`EstadoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `elemento_ibfk_2` FOREIGN KEY (`TipoElemento_TipoElementoID`) REFERENCES `tipoelemento` (`TipoElementoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `elemento_ibfk_3` FOREIGN KEY (`Ambiente_AmbienteID`) REFERENCES `ambiente` (`AmbienteID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol_has_usuario`
--
ALTER TABLE `rol_has_usuario`
  ADD CONSTRAINT `rol_has_usuario_ibfk_1` FOREIGN KEY (`Rol_RolID`) REFERENCES `rol` (`RolID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rol_has_usuario_ibfk_2` FOREIGN KEY (`Usuario_UsuarioID`) REFERENCES `usuario` (`UsuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_sede`
--
ALTER TABLE `usuario_has_sede`
  ADD CONSTRAINT `usuario_has_sede_ibfk_1` FOREIGN KEY (`Usuario_UsuarioID`) REFERENCES `usuario` (`UsuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_has_sede_ibfk_2` FOREIGN KEY (`Sede_SedeID`) REFERENCES `sede` (`SedeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
