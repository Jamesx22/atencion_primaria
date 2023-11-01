-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 01-11-2023 a las 18:39:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atencion_primaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_familiares`
--

CREATE TABLE `antecedentes_familiares` (
  `id_antecedente_familiar` int(11) NOT NULL,
  `enfermedades_hereditarias` varchar(100) DEFAULT NULL,
  `cancer_familia` varchar(100) DEFAULT NULL,
  `trastorno_genetico` varchar(100) DEFAULT NULL,
  `otra_enfermedad` varchar(100) DEFAULT NULL,
  `acv_previo` varchar(100) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_personales`
--

CREATE TABLE `antecedentes_personales` (
  `id_antecedente_personal` int(11) NOT NULL,
  `historial_enfermedades` varchar(400) DEFAULT NULL,
  `alergias` varchar(100) DEFAULT NULL,
  `trastorno_mental` varchar(200) DEFAULT NULL,
  `enfermedad_infecciosa` varchar(200) DEFAULT NULL,
  `consumo_estupefacientes` varchar(200) DEFAULT NULL,
  `cirugia_previa` varchar(200) DEFAULT NULL,
  `hospitalizacion_previa` varchar(200) DEFAULT NULL,
  `acv_previo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_civiles`
--

CREATE TABLE `estados_civiles` (
  `id_estado_civil` int(11) NOT NULL,
  `estado_civil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_civiles`
--

INSERT INTO `estados_civiles` (`id_estado_civil`, `estado_civil`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Viudo'),
(5, 'Concubinato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `nombre_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `numero_cedula` varchar(9) NOT NULL,
  `id_genero` int(2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(2) NOT NULL,
  `numero_celular` varchar(11) NOT NULL,
  `numero_emergencia` varchar(11) NOT NULL,
  `direccion` varchar(400) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `id_antecedente_personal` int(11) NOT NULL,
  `id_antecedente_familiar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_familiares`
--
ALTER TABLE `antecedentes_familiares`
  ADD PRIMARY KEY (`id_antecedente_familiar`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `antecedentes_personales`
--
ALTER TABLE `antecedentes_personales`
  ADD PRIMARY KEY (`id_antecedente_personal`);

--
-- Indices de la tabla `estados_civiles`
--
ALTER TABLE `estados_civiles`
  ADD PRIMARY KEY (`id_estado_civil`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_antecedente_personal` (`id_antecedente_personal`),
  ADD KEY `id_antecedente_familiar` (`id_antecedente_familiar`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes_familiares`
--
ALTER TABLE `antecedentes_familiares`
  MODIFY `id_antecedente_familiar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antecedentes_personales`
--
ALTER TABLE `antecedentes_personales`
  MODIFY `id_antecedente_personal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados_civiles`
--
ALTER TABLE `estados_civiles`
  MODIFY `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes_familiares`
--
ALTER TABLE `antecedentes_familiares`
  ADD CONSTRAINT `id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `id_antecedente_familiar` FOREIGN KEY (`id_antecedente_familiar`) REFERENCES `antecedentes_familiares` (`id_antecedente_familiar`),
  ADD CONSTRAINT `id_antecedente_personal` FOREIGN KEY (`id_antecedente_personal`) REFERENCES `antecedentes_personales` (`id_antecedente_personal`),
  ADD CONSTRAINT `id_genero` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
