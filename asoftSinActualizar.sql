-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2016 a las 02:47:07
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_ayudasrecibidas`
--

CREATE TABLE `desplazados_ayudasrecibidas` (
  `Atencion_Menor` varchar(3) NOT NULL,
  `Cuidado_Infantil` varchar(3) NOT NULL,
  `Pro_Alimentacion` varchar(3) NOT NULL,
  `Hambre_FaltaA` varchar(3) NOT NULL,
  `Seguridad_AI` varchar(3) NOT NULL,
  `Comple_Alimenticio` varchar(3) NOT NULL,
  `Benefi_Desayuno` varchar(3) NOT NULL,
  `Ayuda_Municipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_datos`
--

CREATE TABLE `desplazados_datos` (
  `Documento` int(11) NOT NULL,
  `Nombre_Completo` varchar(50) NOT NULL,
  `Primer_Apellido` varchar(50) NOT NULL,
  `Segundo_Apellido` varchar(50) NOT NULL,
  `Tipo_de_Documento` varchar(50) NOT NULL,
  `Fecha_de_Victimizacion` date NOT NULL,
  `Codigo_RUPV` varchar(25) NOT NULL,
  `Departamento` varchar(25) NOT NULL,
  `Municipio` varchar(25) NOT NULL,
  `Zona` varchar(7) NOT NULL,
  `Localidad` varchar(30) NOT NULL,
  `Direccion` varchar(40) NOT NULL,
  `Telefono` int(15) NOT NULL,
  `Estado_Civil` varchar(25) NOT NULL,
  `Parentesco` varchar(25) NOT NULL,
  `Es_Jefe_de_Hogar` varchar(3) NOT NULL,
  `Territorio` varchar(25) NOT NULL,
  `FechaLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desplazados_datos`
--

INSERT INTO `desplazados_datos` (`Documento`, `Nombre_Completo`, `Primer_Apellido`, `Segundo_Apellido`, `Tipo_de_Documento`, `Fecha_de_Victimizacion`, `Codigo_RUPV`, `Departamento`, `Municipio`, `Zona`, `Localidad`, `Direccion`, `Telefono`, `Estado_Civil`, `Parentesco`, `Es_Jefe_de_Hogar`, `Territorio`, `FechaLog`) VALUES
(1, 'milton', 'hernando', 'otavo', 'RegistroCivil', '0000-00-00', '121212', '#', '#', 'Urbana', 'Topacio', 'Mz 33 casa 21', 234567, 'Soltero(a)', 'Hermano(a)', 'NO', 'NN', '2016-03-01 01:35:32'),
(2, 'Hugo', 'Otavo', 'Varon', 'CeduladeCiudadania', '2016-02-27', '3243535', '#', '#', 'Rural', 'nn', 'nn', 234566, 'Casado(a)', 'Madre/Madrastra', 'SI', '1', '2016-02-27 23:01:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_economiafamiliar`
--

CREATE TABLE `desplazados_economiafamiliar` (
  `Ingresos_Mensuales` varchar(50) NOT NULL,
  `Gastos_Mensuales` varchar(50) NOT NULL,
  `1_Gasto` varchar(20) NOT NULL,
  `2_Gasto` varchar(20) NOT NULL,
  `3_Gasto` varchar(20) NOT NULL,
  `No_Comidas_Dia` varchar(15) NOT NULL,
  `Adultos` varchar(25) NOT NULL,
  `Ninos` varchar(25) NOT NULL,
  `Menores_2Anos` varchar(25) NOT NULL,
  `Alimentacion_Cultura` varchar(3) NOT NULL,
  `Alimentacion_Adecuada` varchar(3) NOT NULL,
  `Fuente_1` varchar(25) NOT NULL,
  `Fuente_2` varchar(25) NOT NULL,
  `Fuente_3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_especialproteccion`
--

CREATE TABLE `desplazados_especialproteccion` (
  `Ayuda_Cultura` varchar(3) NOT NULL,
  `Ayuda_18_Cultura` varchar(3) NOT NULL,
  `Funcionario_Trato` varchar(3) NOT NULL,
  `Pueblo_Indigena` varchar(45) NOT NULL,
  `Indigenas_VioIntra` varchar(3) NOT NULL,
  `Denunciado` varchar(3) NOT NULL,
  `CualEntidad_Denun` varchar(40) NOT NULL,
  `Tipo_Violencia` varchar(15) NOT NULL,
  `Promueven_Derechos` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_familiar`
--

CREATE TABLE `desplazados_familiar` (
  `Identificacion` int(11) NOT NULL,
  `Tipo_Identificacion` varchar(50) NOT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Primer_Apellido` varchar(50) NOT NULL,
  `Segundo_Apellido` varchar(50) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Enfoque_Diferencial` varchar(20) NOT NULL,
  `Estado_Civil` varchar(20) NOT NULL,
  `Parentesco` varchar(20) NOT NULL,
  `Separado` varchar(3) NOT NULL,
  `Discapacitado` varchar(3) NOT NULL,
  `Discapacidad` varchar(45) NOT NULL,
  `Cual_D` varchar(45) NOT NULL,
  `Ha_Sido_Victima_M_A` varchar(3) NOT NULL,
  `Recibio_Auxilio_T_E_C_A` varchar(3) NOT NULL,
  `Se_Otorgo_Ayuda_M` varchar(100) NOT NULL,
  `Otra_A_M` varchar(25) NOT NULL,
  `En_cuanto_Indemnizacion` varchar(200) NOT NULL,
  `Afiliado_Salud` varchar(3) NOT NULL,
  `Regimen` varchar(20) NOT NULL,
  `Cual_R` varchar(20) NOT NULL,
  `Recibio_Atencion_S_M` varchar(3) NOT NULL,
  `Recibio_Apoyo_PsicoSocial` varchar(3) NOT NULL,
  `Asistio_Programa_S_R` varchar(3) NOT NULL,
  `Vacunas` varchar(3) NOT NULL,
  `Cuales_Vacunas` varchar(60) NOT NULL,
  `Diagnosticado_E_C` varchar(3) NOT NULL,
  `Cual_Enfermedad` varchar(3) NOT NULL,
  `Califique_E_S` int(2) NOT NULL,
  `Estudiaba_Antes_V` varchar(3) NOT NULL,
  `Estudia_Actualmente` varchar(3) NOT NULL,
  `Programa_A_E` varchar(3) NOT NULL,
  `Cancela_Costo_E` varchar(3) NOT NULL,
  `Sabe_Leer` varchar(3) NOT NULL,
  `Nivel_Alcanzado` varchar(15) NOT NULL,
  `Competencia_Laboral` varchar(35) NOT NULL,
  `Competencia_Certificada` varchar(3) NOT NULL,
  `Gustaria _Capacitarse` varchar(35) NOT NULL,
  `Horario_Capacitacion` varchar(10) NOT NULL,
  `Actividad_Laboral_Actual` varchar(20) NOT NULL,
  `Rama_Actividad_Actual` varchar(35) NOT NULL,
  `Contrato_Escrito` varchar(3) NOT NULL,
  `Trabaja_Jornada` varchar(7) NOT NULL,
  `S_Social_R_P` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desplazados_familiar`
--

INSERT INTO `desplazados_familiar` (`Identificacion`, `Tipo_Identificacion`, `Nombres`, `Primer_Apellido`, `Segundo_Apellido`, `Genero`, `Fecha_Nacimiento`, `Enfoque_Diferencial`, `Estado_Civil`, `Parentesco`, `Separado`, `Discapacitado`, `Discapacidad`, `Cual_D`, `Ha_Sido_Victima_M_A`, `Recibio_Auxilio_T_E_C_A`, `Se_Otorgo_Ayuda_M`, `Otra_A_M`, `En_cuanto_Indemnizacion`, `Afiliado_Salud`, `Regimen`, `Cual_R`, `Recibio_Atencion_S_M`, `Recibio_Apoyo_PsicoSocial`, `Asistio_Programa_S_R`, `Vacunas`, `Cuales_Vacunas`, `Diagnosticado_E_C`, `Cual_Enfermedad`, `Califique_E_S`, `Estudiaba_Antes_V`, `Estudia_Actualmente`, `Programa_A_E`, `Cancela_Costo_E`, `Sabe_Leer`, `Nivel_Alcanzado`, `Competencia_Laboral`, `Competencia_Certificada`, `Gustaria _Capacitarse`, `Horario_Capacitacion`, `Actividad_Laboral_Actual`, `Rama_Actividad_Actual`, `Contrato_Escrito`, `Trabaja_Jornada`, `S_Social_R_P`) VALUES
(3, 'CedulaCiudadania', 'Familiar', '', '', 'F', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_proteccion`
--

CREATE TABLE `desplazados_proteccion` (
  `Solicitar_Proteccion` varchar(200) NOT NULL,
  `Otra_Entidad` varchar(30) NOT NULL,
  `AyudaPoblac_desplaza` varchar(3) NOT NULL,
  `Mujer` varchar(3) NOT NULL,
  `Adulto_Mayor` varchar(3) NOT NULL,
  `Jovenes` varchar(3) NOT NULL,
  `Discapacidad` varchar(3) NOT NULL,
  `Afiliado_OPD` varchar(3) NOT NULL,
  `Cual_OPD` varchar(30) NOT NULL,
  `Participa_E_P_P` varchar(3) NOT NULL,
  `Cual_E_P_P` varchar(30) NOT NULL,
  `Ayuda_Humanitaria` varchar(40) NOT NULL,
  `Salud` varchar(40) NOT NULL,
  `Generacion_Ingresos` varchar(40) NOT NULL,
  `Atencion_Vivienda` varchar(40) NOT NULL,
  `Educacion_Otra` varchar(40) NOT NULL,
  `Prioridad_1` varchar(40) NOT NULL,
  `Prioridad_2` varchar(40) NOT NULL,
  `Prioridad_3` varchar(40) NOT NULL,
  `Prioridad_4` varchar(40) NOT NULL,
  `Prioridad_5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_reparacion`
--

CREATE TABLE `desplazados_reparacion` (
  `Estado_Informado` varchar(3) NOT NULL,
  `MiembroH_Indemnizado` varchar(3) NOT NULL,
  `Estado_Garantias` varchar(3) NOT NULL,
  `MiembroH_Restitucion` varchar(3) NOT NULL,
  `Entidad_Restitucion` varchar(50) NOT NULL,
  `Estado_Restituido` varchar(3) NOT NULL,
  `Estado_Indemnizacion` varchar(3) NOT NULL,
  `MiembroH_Indemnizacion` varchar(3) NOT NULL,
  `Familia_Rehabilitacion` varchar(3) NOT NULL,
  `MiembroH_Beneficiario` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazados_vivienda`
--

CREATE TABLE `desplazados_vivienda` (
  `Actual_Vivienda` varchar(30) NOT NULL,
  `Tenencia` varchar(25) NOT NULL,
  `Tipo_Contrato` varchar(25) NOT NULL,
  `Zona_Vivienda` varchar(7) NOT NULL,
  `Zona_AltoRiesgo` varchar(3) NOT NULL,
  `Paredes` varchar(10) NOT NULL,
  `Piso` varchar(10) NOT NULL,
  `Techo` varchar(30) NOT NULL,
  `S_Acueducto` varchar(3) NOT NULL,
  `S_Telefono` varchar(3) NOT NULL,
  `S_Energia_Electrica` varchar(3) NOT NULL,
  `S_Alcantarillado` varchar(3) NOT NULL,
  `S_Gas` varchar(3) NOT NULL,
  `S_ReBasuras` varchar(3) NOT NULL,
  `No_Habit_Antes` int(2) NOT NULL,
  `No_Habit_Actual` int(2) NOT NULL,
  `No_Famili_Casa` int(2) NOT NULL,
  `Recibi_Subsidio` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazado_discapacidad`
--

CREATE TABLE `desplazado_discapacidad` (
  `Antes_Desplazamiento` varchar(3) NOT NULL,
  `Igual_Condiciones` varchar(3) NOT NULL,
  `Entidad_Rehabilitacion` varchar(3) NOT NULL,
  `Rehubicacion_Laboral` varchar(3) NOT NULL,
  `Marginado_Discriminado` varchar(3) NOT NULL,
  `Encuentra_P_P` varchar(3) NOT NULL,
  `Excluido` varchar(3) NOT NULL,
  `Rehabilitacion` varchar(3) NOT NULL,
  `Subsidio_Discapacidad` varchar(3) NOT NULL,
  `Capacidad_Econo` varchar(3) NOT NULL,
  `Menores_18` varchar(3) NOT NULL,
  `Recibio_Ayu_Huma` varchar(3) NOT NULL,
  `Organizacion_Despla` varchar(3) NOT NULL,
  `Participacion_OPDS` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplazamiento`
--

CREATE TABLE `desplazamiento` (
  `Veces_Desplazado` int(2) NOT NULL,
  `Ano1` int(4) NOT NULL,
  `Localidad1` varchar(20) NOT NULL,
  `Municipio1` varchar(25) NOT NULL,
  `Ano2` int(2) NOT NULL,
  `Localidad2` varchar(4) NOT NULL,
  `Municipio2` varchar(20) NOT NULL,
  `Ano3` int(2) NOT NULL,
  `Localidad3` varchar(4) NOT NULL,
  `Municipio3` varchar(20) NOT NULL,
  `Confrontacion_Armada` varchar(3) NOT NULL,
  `Amenaza_Indirecta` varchar(3) NOT NULL,
  `Campos_Minados` varchar(3) NOT NULL,
  `Asesinato_Familia` varchar(3) NOT NULL,
  `Amenaza_Directa` varchar(3) NOT NULL,
  `Reclutamiento_Menores` varchar(3) NOT NULL,
  `Ausencia_Gobierno` varchar(3) NOT NULL,
  `Desplazamiento_Masivo` varchar(3) NOT NULL,
  `No_Personas_H` int(2) NOT NULL,
  `Familia_Separo` varchar(3) NOT NULL,
  `S_Ayuda_Estatal` varchar(3) NOT NULL,
  `Nucleo_Unificar` varchar(3) NOT NULL,
  `R_Ayuda_Estatl` varchar(3) NOT NULL,
  `Familia_Vivos` varchar(3) NOT NULL,
  `Familiar_Detenido` varchar(3) NOT NULL,
  `Familiar_V_P` varchar(3) NOT NULL,
  `Familiar_Asesinado` varchar(3) NOT NULL,
  `Familiar_Reclutado` varchar(3) NOT NULL,
  `Familiar_Secuestro` varchar(3) NOT NULL,
  `Demanda_Desplazamiento` varchar(3) NOT NULL,
  `Familiar_Vic_M_A` varchar(3) NOT NULL,
  `Defensoria` varchar(3) NOT NULL,
  `Procuraduria` varchar(3) NOT NULL,
  `Depa_Pros_Soc` varchar(3) NOT NULL,
  `Personeria` varchar(3) NOT NULL,
  `UAO` varchar(3) NOT NULL,
  `Otra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estabilizacion`
--

CREATE TABLE `estabilizacion` (
  `Razones_Lugar` varchar(200) NOT NULL,
  `Familia_Retorno` varchar(3) NOT NULL,
  `EstuvoEsta_Retorno` varchar(3) NOT NULL,
  `Residencia_Desearia` varchar(15) NOT NULL,
  `DondeQuiere_Reubicarse` varchar(40) NOT NULL,
  `Zona_Retorno` varchar(7) NOT NULL,
  `Razones_Reubicarse` varchar(200) NOT NULL,
  `Razones_Retornar` varchar(200) NOT NULL,
  `Raices_Abandonadas` varchar(3) NOT NULL,
  `Algunos_Despojados` varchar(3) NOT NULL,
  `Solicito_Proteccion` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_ayudasrecibidas`
--

CREATE TABLE `ovictimas_ayudasrecibidas` (
  `Atencion_Menor_Otra` varchar(3) NOT NULL,
  `Cuidado_Infantil_Otra_Otra` varchar(3) NOT NULL,
  `Pro_Alimentacion_Otra` varchar(3) NOT NULL,
  `Hambre_FaltaA_Otra` varchar(3) NOT NULL,
  `Seguridad_AI_Otra` varchar(3) NOT NULL,
  `Comple_Alimenticio_Otra` varchar(3) NOT NULL,
  `Benefi_Desayuno_Otra` varchar(3) NOT NULL,
  `Ayuda_Municipio_Otra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_datos`
--

CREATE TABLE `ovictimas_datos` (
  `Documento_Otra` int(11) NOT NULL,
  `Nombre_Completo_Otra` varchar(60) NOT NULL,
  `Tipo_de_Documento_Otra` varchar(50) NOT NULL,
  `Fecha_de_Victimizacion_Otra` date NOT NULL,
  `Codigo_RUPV_Otra` varchar(25) NOT NULL,
  `Departamento_Otra` varchar(25) NOT NULL,
  `Municipio_Otra` varchar(25) NOT NULL,
  `Zona_Otra` varchar(7) NOT NULL,
  `Localidad_Otra` varchar(30) NOT NULL,
  `Direccion_Otra` varchar(40) NOT NULL,
  `Telefono_Otra` int(15) NOT NULL,
  `Estado_Civil_Otra` varchar(25) NOT NULL,
  `Parentesco_Otra` varchar(25) NOT NULL,
  `Es_Jefe_de_Hogar_Otra` varchar(3) NOT NULL,
  `Territorio_Otra` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_discapacidad`
--

CREATE TABLE `ovictimas_discapacidad` (
  `Antes_Desplazamiento_Otra` varchar(3) NOT NULL,
  `Igual_Condiciones_Otra` varchar(3) NOT NULL,
  `Entidad_Rehabilitacion_Otra` varchar(3) NOT NULL,
  `Rehubicacion_Laboral_Otra` varchar(3) NOT NULL,
  `Marginado_Discriminado_Otra` varchar(3) NOT NULL,
  `Encuentra_P_P_Otra` varchar(3) NOT NULL,
  `Excluido_Otra` varchar(3) NOT NULL,
  `Rehabilitacion_Otra` varchar(3) NOT NULL,
  `Subsidio_Discapacidad_Otra` varchar(3) NOT NULL,
  `Capacidad_Econo_Otra` varchar(3) NOT NULL,
  `Menores_18_Otra` varchar(3) NOT NULL,
  `Recibio_Ayu_Huma_Otra` varchar(3) NOT NULL,
  `Organizacion_Despla_Otra` varchar(3) NOT NULL,
  `Participacion_OPDS_Otra` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_economiafamiliar`
--

CREATE TABLE `ovictimas_economiafamiliar` (
  `Ingresos_Mensuales_Otra` varchar(50) NOT NULL,
  `Gastos_Mensuales_Otra` varchar(50) NOT NULL,
  `1_Gasto_Otra` varchar(20) NOT NULL,
  `2_Gasto_Otra` varchar(20) NOT NULL,
  `3_Gasto_Otra` varchar(20) NOT NULL,
  `No_Comidas_Dia_Otra` varchar(15) NOT NULL,
  `Adultos_Otra` varchar(25) NOT NULL,
  `Ninos_Otra` varchar(25) NOT NULL,
  `Menores_2Anos_Otra` varchar(25) NOT NULL,
  `Alimentacion_Cultura_Otra` varchar(3) NOT NULL,
  `Alimentacion_Adecuada_Otra` varchar(3) NOT NULL,
  `Fuente_1_Otra` varchar(25) NOT NULL,
  `Fuente_2_Otra` varchar(25) NOT NULL,
  `Fuente_3_Otra` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_especialproteccion`
--

CREATE TABLE `ovictimas_especialproteccion` (
  `Ayuda_Cultura_Otra` varchar(3) NOT NULL,
  `Ayuda_18_Cultura_Otra` varchar(3) NOT NULL,
  `Funcionario_Trato_Otra` varchar(3) NOT NULL,
  `Pueblo_Indigena_Otra` varchar(45) NOT NULL,
  `Indigenas_VioIntra_Otra` varchar(3) NOT NULL,
  `Denunciado_Otra` varchar(3) NOT NULL,
  `CualEntidad_Denun_Otra` varchar(40) NOT NULL,
  `Tipo_Violencia_Otra` varchar(15) NOT NULL,
  `Promueven_Derechos_Otra` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_familiar`
--

CREATE TABLE `ovictimas_familiar` (
  `Identificacion_Otra` int(11) NOT NULL,
  `Tipo_Identificacion_Otra` varchar(50) NOT NULL,
  `Nombres_Otra` varchar(25) NOT NULL,
  `Apellidos_Otra` varchar(25) NOT NULL,
  `Genero_Otra` varchar(10) NOT NULL,
  `Fecha_Nacimiento_Otra` date NOT NULL,
  `Edad_Otra` int(2) NOT NULL,
  `Enfoque_Diferencial_Otra` varchar(20) NOT NULL,
  `Estado_Civil_Otra` varchar(20) NOT NULL,
  `Parentesco_Otra` varchar(20) NOT NULL,
  `Estuvo_Separado_Otra` varchar(3) NOT NULL,
  `Discapacitado_Otra` varchar(3) NOT NULL,
  `Discapacidad_Otra` varchar(45) NOT NULL,
  `Cual_D_Otra` varchar(45) NOT NULL,
  `Ha_Sido_Victima_M_A_Otra` varchar(3) NOT NULL,
  `Recibio_Auxilio_T_E_C_A_Otra` varchar(3) NOT NULL,
  `Se_Otorgo_Ayuda_M_Otra` varchar(100) NOT NULL,
  `Otra_A_M_Otra` varchar(25) NOT NULL,
  `En_cuanto_Indemnizacion_Otra` varchar(200) NOT NULL,
  `Afiliado_Salud_Otra_Otra` varchar(3) NOT NULL,
  `Regimen_Otra` varchar(20) NOT NULL,
  `Cual_R_Otra` varchar(20) NOT NULL,
  `Recibio_Atencion_S_M_Otra` varchar(3) NOT NULL,
  `Recibio_Apoyo_PsicoSocial_Otra` varchar(3) NOT NULL,
  `Asistio_Programa_S_R_Otra` varchar(3) NOT NULL,
  `Vacunas_Otra` varchar(3) NOT NULL,
  `Cuales_Vacunas_Otra` varchar(60) NOT NULL,
  `Diagnosticado_E_C_Otra` varchar(3) NOT NULL,
  `Cual_Enfermedad_Otra` varchar(3) NOT NULL,
  `Califique_E_S_Otra` int(2) NOT NULL,
  `Estudiaba_Antes_V_Otra` varchar(3) NOT NULL,
  `Estudia_Actualmente_Otra` varchar(3) NOT NULL,
  `Programa_A_E_Otra` varchar(3) NOT NULL,
  `Cancela_Costo_E_Otra` varchar(3) NOT NULL,
  `Sabe_Leer_Otra` varchar(3) NOT NULL,
  `Nivel_Alcanzado_Otra` varchar(15) NOT NULL,
  `Competencia_Laboral_Otra` varchar(35) NOT NULL,
  `Competencia_Certificada_Otra` varchar(3) NOT NULL,
  `Gustaria _Capacitarse_Otra` varchar(35) NOT NULL,
  `Horario_Capacitacion_Otra` varchar(10) NOT NULL,
  `Actividad_Laboral_Actual_Otra` varchar(20) NOT NULL,
  `Rama_Actividad_Actual_Otra` varchar(35) NOT NULL,
  `Contrato_Escrito_Otra` varchar(3) NOT NULL,
  `Trabaja_Jornada_Otra` varchar(7) NOT NULL,
  `S_Social_R_P_Otra` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_proteccion`
--

CREATE TABLE `ovictimas_proteccion` (
  `Solicitar_Proteccion_Otra` varchar(200) NOT NULL,
  `Otra_Entidad_Otra` varchar(30) NOT NULL,
  `AyudaPoblac_desplaza_Otra` varchar(3) NOT NULL,
  `Mujer_Otra` varchar(3) NOT NULL,
  `Adulto_Mayor_Otra` varchar(3) NOT NULL,
  `Jovenes_Otra` varchar(3) NOT NULL,
  `Discapacidad_Otra` varchar(3) NOT NULL,
  `Afiliado_OPD_Otra` varchar(3) NOT NULL,
  `Cual_OPD_Otra` varchar(30) NOT NULL,
  `Participa_E_P_P_Otra` varchar(3) NOT NULL,
  `Cual_E_P_P_Otra` varchar(30) NOT NULL,
  `Ayuda_Humanitaria_Otra` varchar(40) NOT NULL,
  `Salud_Otra` varchar(40) NOT NULL,
  `Generacion_Ingresos_Otra` varchar(40) NOT NULL,
  `Atencion_Vivienda_Otra` varchar(40) NOT NULL,
  `Educacion_Otra` varchar(40) NOT NULL,
  `Prioridad_1_Otra` varchar(40) NOT NULL,
  `Prioridad_2_Otra` varchar(40) NOT NULL,
  `Prioridad_3_Otra` varchar(40) NOT NULL,
  `Prioridad_4_Otra` varchar(40) NOT NULL,
  `Prioridad_5_Otra` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_reparacion`
--

CREATE TABLE `ovictimas_reparacion` (
  `Estado_Informado_Otra` varchar(3) NOT NULL,
  `MiembroH_Indemnizado_Otra` varchar(3) NOT NULL,
  `Estado_Garantias_Otra` varchar(3) NOT NULL,
  `MiembroH_Restitucion_Otra` varchar(3) NOT NULL,
  `Entidad_Restitucion_Otra` varchar(50) NOT NULL,
  `Estado_Restituido_Otra` varchar(3) NOT NULL,
  `Estado_Indemnizacion_Otra` varchar(3) NOT NULL,
  `MiembroH_Indemnizacion_Otra` varchar(3) NOT NULL,
  `Familia_Rehabilitacion_Otra` varchar(3) NOT NULL,
  `MiembroH_Beneficiario_Otra` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_victimizacion`
--

CREATE TABLE `ovictimas_victimizacion` (
  `Veces_Victimizado_Otra` int(2) NOT NULL,
  `Ano1_Otra` int(4) NOT NULL,
  `Localidad1_Otra` varchar(20) NOT NULL,
  `Municipio1_Otra` varchar(25) NOT NULL,
  `Ano2_Otra` int(2) NOT NULL,
  `Localidad2_Otra` varchar(4) NOT NULL,
  `Municipio2_Otra` varchar(20) NOT NULL,
  `Ano3_Otra` int(2) NOT NULL,
  `Localidad3_Otra` varchar(4) NOT NULL,
  `Municipio3_Otra` varchar(20) NOT NULL,
  `Confrontacion_Armada_Otra` varchar(3) NOT NULL,
  `Amenaza_Indirecta_Otra` varchar(3) NOT NULL,
  `Campos_Minados_Otra` varchar(3) NOT NULL,
  `Asesinato_Familia_Otra` varchar(3) NOT NULL,
  `Amenaza_Directa_Otra` varchar(3) NOT NULL,
  `Reclutamiento_Menores_Otra` varchar(3) NOT NULL,
  `Ausencia_Gobierno_Otra` varchar(3) NOT NULL,
  `Desplazamiento_Masivo_Otra` varchar(3) NOT NULL,
  `No_Personas_H_Otra` int(2) NOT NULL,
  `Familia_Vivos_Otra` varchar(3) NOT NULL,
  `Familiar_Detenido_Otra` varchar(3) NOT NULL,
  `Familiar_V_P_Otra` varchar(3) NOT NULL,
  `Familiar_Asesinado_Otra` varchar(3) NOT NULL,
  `Familiar_Reclutado_Otra` varchar(3) NOT NULL,
  `Familiar_Secuestro_Otra` varchar(3) NOT NULL,
  `Demanda_Desplazamiento_Otra` varchar(3) NOT NULL,
  `Familiar_Vic_M_A_Otra` varchar(3) NOT NULL,
  `Defensoria_Otra` varchar(3) NOT NULL,
  `Procuraduria_Otra` varchar(3) NOT NULL,
  `Depa_Pros_Soc_Otra` varchar(3) NOT NULL,
  `Personeria_Otra` varchar(3) NOT NULL,
  `UAO_Otra` varchar(3) NOT NULL,
  `Otra_Otra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ovictimas_vivienda`
--

CREATE TABLE `ovictimas_vivienda` (
  `Actual_Vivienda_Otra` varchar(30) NOT NULL,
  `Tenencia_Otra` varchar(25) NOT NULL,
  `Tipo_Contrato_Otra` varchar(25) NOT NULL,
  `Zona_Vivienda_Otra` varchar(7) NOT NULL,
  `Zona_AltoRiesgo_Otra` varchar(3) NOT NULL,
  `Paredes_Otra` varchar(10) NOT NULL,
  `Piso_Otra` varchar(10) NOT NULL,
  `Techo_Otra` varchar(30) NOT NULL,
  `S_Acueducto_Otra` varchar(3) NOT NULL,
  `S_Telefono_Otra` varchar(3) NOT NULL,
  `S_Energia_Electrica_Otra` varchar(3) NOT NULL,
  `S_Alcantarillado_Otra` varchar(3) NOT NULL,
  `S_Gas_Otra` varchar(3) NOT NULL,
  `S_ReBasuras_Otra` varchar(3) NOT NULL,
  `No_Habit_Antes_Otra` int(2) NOT NULL,
  `No_Habit_Actual_Otra` int(2) NOT NULL,
  `No_Famili_Casa_Otra` int(2) NOT NULL,
  `Recibi_Subsidio_Otra` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` bigint(255) NOT NULL,
  `DOC` int(20) NOT NULL,
  `USER` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ROL` int(1) NOT NULL DEFAULT '0',
  `NOMBRES` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `S_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `KEYPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NEWPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ULTIMA_CONEXION` int(32) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `DOC`, `USER`, `PASS`, `EMAIL`, `ROL`, `NOMBRES`, `P_APELLIDO`, `S_APELLIDO`, `KEYPASS`, `NEWPASS`, `ULTIMA_CONEXION`) VALUES
(1, 1110540682, 'admin', 'c0784027b45aa11e848a38e890f8416c', 'milton.otavo@gmail.com', 2, 'MILTON', 'OTAVO', 'VARON', '5391e0cebb2453f473b48be26a020ed7', '16AF68C1', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desplazados_datos`
--
ALTER TABLE `desplazados_datos`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `desplazados_familiar`
--
ALTER TABLE `desplazados_familiar`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
