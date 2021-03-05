-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2021 a las 22:12:48
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `Id_Autor` int(11) NOT NULL,
  `Nombre_autor` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`Id_Autor`, `Nombre_autor`) VALUES
(1, 'Gabriel García Marquez'),
(2, 'Chapulin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_libro`
--

CREATE TABLE `categoria_libro` (
  `Id_Categoria_libro` int(11) NOT NULL,
  `Nombre_categoria` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria_libro`
--

INSERT INTO `categoria_libro` (`Id_Categoria_libro`, `Nombre_categoria`) VALUES
(1, 'Ingles'),
(2, 'Matematicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_materiales`
--

CREATE TABLE `categoria_materiales` (
  `Id_Categoria_Materiales` int(11) NOT NULL,
  `Nombre_categoria_Materiales` varchar(30) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria_materiales`
--

INSERT INTO `categoria_materiales` (`Id_Categoria_Materiales`, `Nombre_categoria_Materiales`) VALUES
(1, 'Juegos de Mesa'),
(2, 'Biologia ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_libro`
--

CREATE TABLE `detalle_prestamo_libro` (
  `Id_DetallePres_Libro` int(11) NOT NULL,
  `Id_Prestamos` int(11) NOT NULL,
  `Id_Libro_Detalle` int(11) NOT NULL,
  `Id_Estado_Detalle_Prestamo_Libro` int(11) NOT NULL,
  `Fecha_compromiso_devolucion` date NOT NULL,
  `Fecha_Real_devolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_material`
--

CREATE TABLE `detalle_prestamo_material` (
  `Id_DetallePres_Material` int(11) NOT NULL,
  `Id_Prestamos` int(11) NOT NULL,
  `Id_Material_Detalle` int(11) NOT NULL,
  `Id_Estado_Detalle_Prestamo_Material` int(11) NOT NULL,
  `Fecha_Compromiso_Devolucion` date DEFAULT NULL,
  `Fecha_Real_Devolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `Id_Editorial` int(11) NOT NULL,
  `Nombre_editorial` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`Id_Editorial`, `Nombre_editorial`) VALUES
(1, 'Los extrayentes'),
(2, 'Totis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_detalle_prestamo_libro`
--

CREATE TABLE `estado_detalle_prestamo_libro` (
  `Id_Estado_Detalle_Prestamo_Libro` int(11) NOT NULL,
  `Estado_Detalle_Prestamo_Libro` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_detalle_prestamo_material`
--

CREATE TABLE `estado_detalle_prestamo_material` (
  `Id_Estado_Detalle_Prestamo_Material` int(11) NOT NULL,
  `Tipo_Estado_Detalle_Prestamo_Material` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_libro_detalle`
--

CREATE TABLE `estado_libro_detalle` (
  `Id_Estado_Libro_Detalle` int(11) NOT NULL,
  `Tipo_Estado_Libro` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_material_detalle`
--

CREATE TABLE `estado_material_detalle` (
  `Id_Estado_Material_Detalle` int(11) NOT NULL,
  `Estado_Material` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_prestamo`
--

CREATE TABLE `estado_prestamo` (
  `Id_Estado_Prestamo` int(11) NOT NULL,
  `Estado_Tipo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `Id_Libros` int(11) NOT NULL,
  `Id_Autor` int(11) NOT NULL,
  `Id_Editorial` int(11) NOT NULL,
  `Id_Categoria_libro` int(11) NOT NULL,
  `Titulo` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `N_paginas` int(11) NOT NULL,
  `Año_edicion` date NOT NULL,
  `Estado` varchar(13) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`Id_Libros`, `Id_Autor`, `Id_Editorial`, `Id_Categoria_libro`, `Titulo`, `N_paginas`, `Año_edicion`, `Estado`) VALUES
(1, 1, 2, 1, 'Zero Conditional ', 10, '2021-02-09', 'Activo'),
(2, 2, 1, 2, '2001 Ejercicios ', 200, '2021-02-01', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_detalle`
--

CREATE TABLE `libro_detalle` (
  `Id_Libro_Detalle` int(11) NOT NULL,
  `Id_Libros` int(11) NOT NULL,
  `Id_Estado_Libro_Detalle` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `Nota` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Fecha_Entrada` date NOT NULL,
  `Fecha_Baja` date DEFAULT NULL,
  `Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `Id_Materiales` int(11) NOT NULL,
  `Id_Categoria_Materiales` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Estado` varchar(13) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`Id_Materiales`, `Id_Categoria_Materiales`, `Nombre`, `Descripcion`, `Estado`) VALUES
(1, 2, 'Microscopio ', 'Para ver cosas :v', 'Activo'),
(2, 1, 'ajedrez', 'Juego entre dos personas ', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_detalle`
--

CREATE TABLE `material_detalle` (
  `Id_Material_Detalle` int(11) NOT NULL,
  `Id_Materiales` int(11) NOT NULL,
  `Id_Estado_Material_Detalle` int(11) NOT NULL,
  `Referecia` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Fecha_Entrada` date NOT NULL,
  `Fecha_Baja` date DEFAULT NULL,
  `Usuario` int(11) DEFAULT NULL,
  `Nota` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `Id_Prestamos` int(11) NOT NULL,
  `Id_Documento` int(11) NOT NULL,
  `Id_Estado_Prestamo` int(11) NOT NULL,
  `Fecha_prestamo` date NOT NULL,
  `Fecha_Finalización_Prestamo` date DEFAULT NULL,
  `Nota` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_Rol` int(11) NOT NULL,
  `Tipo_Rol` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id_Rol`, `Tipo_Rol`) VALUES
(1, 'Administrador '),
(2, 'Empleado'),
(3, 'Profesor '),
(4, 'Alumno ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Documento` int(11) NOT NULL,
  `Nombres` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Telefono` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Estado` varchar(13) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Tipo_Documento` varchar(5) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Clave` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Id_Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Documento`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Estado`, `Tipo_Documento`, `Clave`, `Id_Rol`) VALUES
(12344, 'jaider ', 'betancur ', '124', 'jaider@gmail.com', 'melo', 'CC', '1234', 2),
(1232323, 'andres', 'perez', '3234321', 'andru@gmail.com', 'melo', 'CC', '12345', 3),
(1000897484, 'Alejandra ', 'Maya', '23', 'aleja@gmail.com', 'melo', 'CC', '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Id_Autor`);

--
-- Indices de la tabla `categoria_libro`
--
ALTER TABLE `categoria_libro`
  ADD PRIMARY KEY (`Id_Categoria_libro`);

--
-- Indices de la tabla `categoria_materiales`
--
ALTER TABLE `categoria_materiales`
  ADD PRIMARY KEY (`Id_Categoria_Materiales`);

--
-- Indices de la tabla `detalle_prestamo_libro`
--
ALTER TABLE `detalle_prestamo_libro`
  ADD PRIMARY KEY (`Id_DetallePres_Libro`),
  ADD KEY `fk_Detalle_prestamo_Material_Prestamos1_idx` (`Id_Prestamos`),
  ADD KEY `fk_Detalle_prestamo_Libro_Libro_Detalle1_idx` (`Id_Libro_Detalle`),
  ADD KEY `fk_Detalle_prestamo_Libro_Estado_Detalle_Libro1_idx` (`Id_Estado_Detalle_Prestamo_Libro`);

--
-- Indices de la tabla `detalle_prestamo_material`
--
ALTER TABLE `detalle_prestamo_material`
  ADD PRIMARY KEY (`Id_DetallePres_Material`),
  ADD KEY `fk_Detalle_prestamo_Libros_Prestamos1_idx` (`Id_Prestamos`),
  ADD KEY `fk_Detalle_prestamo_Libros_Estado_Detalle_Material1_idx` (`Id_Estado_Detalle_Prestamo_Material`),
  ADD KEY `fk_Detalle_prestamo_Material_Material_Detalle1_idx` (`Id_Material_Detalle`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`Id_Editorial`);

--
-- Indices de la tabla `estado_detalle_prestamo_libro`
--
ALTER TABLE `estado_detalle_prestamo_libro`
  ADD PRIMARY KEY (`Id_Estado_Detalle_Prestamo_Libro`);

--
-- Indices de la tabla `estado_detalle_prestamo_material`
--
ALTER TABLE `estado_detalle_prestamo_material`
  ADD PRIMARY KEY (`Id_Estado_Detalle_Prestamo_Material`);

--
-- Indices de la tabla `estado_libro_detalle`
--
ALTER TABLE `estado_libro_detalle`
  ADD PRIMARY KEY (`Id_Estado_Libro_Detalle`);

--
-- Indices de la tabla `estado_material_detalle`
--
ALTER TABLE `estado_material_detalle`
  ADD PRIMARY KEY (`Id_Estado_Material_Detalle`);

--
-- Indices de la tabla `estado_prestamo`
--
ALTER TABLE `estado_prestamo`
  ADD PRIMARY KEY (`Id_Estado_Prestamo`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`Id_Libros`),
  ADD UNIQUE KEY `Titulo_UNIQUE` (`Titulo`),
  ADD KEY `fk_Libros_Autor1_idx` (`Id_Autor`),
  ADD KEY `fk_Libros_Editorial1_idx` (`Id_Editorial`),
  ADD KEY `fk_Libros_Categoria_libro1_idx` (`Id_Categoria_libro`);

--
-- Indices de la tabla `libro_detalle`
--
ALTER TABLE `libro_detalle`
  ADD PRIMARY KEY (`Id_Libro_Detalle`),
  ADD UNIQUE KEY `ISBN_UNIQUE` (`ISBN`),
  ADD KEY `fk_Libro_Detalle_Libros1_idx` (`Id_Libros`),
  ADD KEY `fk_Libro_Detalle_Estado_Libro1_idx` (`Id_Estado_Libro_Detalle`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`Id_Materiales`),
  ADD KEY `fk_Materiales_categoria1_idx` (`Id_Categoria_Materiales`);

--
-- Indices de la tabla `material_detalle`
--
ALTER TABLE `material_detalle`
  ADD PRIMARY KEY (`Id_Material_Detalle`),
  ADD KEY `fk_Material_Detalle_Materiales1_idx` (`Id_Materiales`),
  ADD KEY `fk_Material_Detalle_Estado_Material1_idx` (`Id_Estado_Material_Detalle`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`Id_Prestamos`),
  ADD KEY `fk_Prestamos_Usuario1_idx` (`Id_Documento`),
  ADD KEY `fk_Prestamos_Estado_Prestamo1_idx` (`Id_Estado_Prestamo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Documento`),
  ADD KEY `Id_Rol` (`Id_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `Id_Autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_libro`
--
ALTER TABLE `categoria_libro`
  MODIFY `Id_Categoria_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_materiales`
--
ALTER TABLE `categoria_materiales`
  MODIFY `Id_Categoria_Materiales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_prestamo_libro`
--
ALTER TABLE `detalle_prestamo_libro`
  MODIFY `Id_DetallePres_Libro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_prestamo_material`
--
ALTER TABLE `detalle_prestamo_material`
  MODIFY `Id_DetallePres_Material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `Id_Editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_detalle_prestamo_libro`
--
ALTER TABLE `estado_detalle_prestamo_libro`
  MODIFY `Id_Estado_Detalle_Prestamo_Libro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_detalle_prestamo_material`
--
ALTER TABLE `estado_detalle_prestamo_material`
  MODIFY `Id_Estado_Detalle_Prestamo_Material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_libro_detalle`
--
ALTER TABLE `estado_libro_detalle`
  MODIFY `Id_Estado_Libro_Detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_material_detalle`
--
ALTER TABLE `estado_material_detalle`
  MODIFY `Id_Estado_Material_Detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_prestamo`
--
ALTER TABLE `estado_prestamo`
  MODIFY `Id_Estado_Prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `Id_Libros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libro_detalle`
--
ALTER TABLE `libro_detalle`
  MODIFY `Id_Libro_Detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `Id_Materiales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `material_detalle`
--
ALTER TABLE `material_detalle`
  MODIFY `Id_Material_Detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `Id_Prestamos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_prestamo_libro`
--
ALTER TABLE `detalle_prestamo_libro`
  ADD CONSTRAINT `fk_Detalle_prestamo_Libro_Estado_Detalle_Libro1` FOREIGN KEY (`Id_Estado_Detalle_Prestamo_Libro`) REFERENCES `estado_detalle_prestamo_libro` (`Id_Estado_Detalle_Prestamo_Libro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_prestamo_Libro_Libro_Detalle1` FOREIGN KEY (`Id_Libro_Detalle`) REFERENCES `libro_detalle` (`Id_Libro_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_prestamo_Material_Prestamos1` FOREIGN KEY (`Id_Prestamos`) REFERENCES `prestamos` (`Id_Prestamos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_prestamo_material`
--
ALTER TABLE `detalle_prestamo_material`
  ADD CONSTRAINT `fk_Detalle_prestamo_Libros_Estado_Detalle_Material1` FOREIGN KEY (`Id_Estado_Detalle_Prestamo_Material`) REFERENCES `estado_detalle_prestamo_material` (`Id_Estado_Detalle_Prestamo_Material`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_prestamo_Libros_Prestamos1` FOREIGN KEY (`Id_Prestamos`) REFERENCES `prestamos` (`Id_Prestamos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_prestamo_Material_Material_Detalle1` FOREIGN KEY (`Id_Material_Detalle`) REFERENCES `material_detalle` (`Id_Material_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_Libros_Autor1` FOREIGN KEY (`Id_Autor`) REFERENCES `autor` (`Id_Autor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libros_Categoria_libro1` FOREIGN KEY (`Id_Categoria_libro`) REFERENCES `categoria_libro` (`Id_Categoria_libro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libros_Editorial1` FOREIGN KEY (`Id_Editorial`) REFERENCES `editorial` (`Id_Editorial`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libro_detalle`
--
ALTER TABLE `libro_detalle`
  ADD CONSTRAINT `fk_Libro_Detalle_Estado_Libro1` FOREIGN KEY (`Id_Estado_Libro_Detalle`) REFERENCES `estado_libro_detalle` (`Id_Estado_Libro_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libro_Detalle_Libros1` FOREIGN KEY (`Id_Libros`) REFERENCES `libros` (`Id_Libros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `fk_Materiales_categoria1` FOREIGN KEY (`Id_Categoria_Materiales`) REFERENCES `categoria_materiales` (`Id_Categoria_Materiales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `material_detalle`
--
ALTER TABLE `material_detalle`
  ADD CONSTRAINT `fk_Material_Detalle_Estado_Material1` FOREIGN KEY (`Id_Estado_Material_Detalle`) REFERENCES `estado_material_detalle` (`Id_Estado_Material_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Material_Detalle_Materiales1` FOREIGN KEY (`Id_Materiales`) REFERENCES `materiales` (`Id_Materiales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `fk_Prestamos_Estado_Prestamo1` FOREIGN KEY (`Id_Estado_Prestamo`) REFERENCES `estado_prestamo` (`Id_Estado_Prestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prestamos_Usuario1` FOREIGN KEY (`Id_Documento`) REFERENCES `usuario` (`Id_Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Id_Rol`) REFERENCES `rol` (`Id_Rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
