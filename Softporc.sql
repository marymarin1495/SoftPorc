-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2018 at 07:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6093538_diego2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarma`
--

CREATE TABLE `alarma` (
  `DocumentoEmpleado` varchar(50) NOT NULL,
  `Asunto` varchar(30) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alarma`
--

INSERT INTO `alarma` (`DocumentoEmpleado`, `Asunto`, `Fecha`, `Hora`) VALUES
('1090500051', 'Asear porcino', '2018-06-21', '11:45:00.000000'),
('1090502664', 'Limpiar instalacion de destete', '2018-06-22', '08:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE `articulo` (
  `Nombre` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Id_Proveedor` int(11) DEFAULT NULL,
  `Id_Instalacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`Nombre`, `Tipo`, `Cantidad`, `Id_Proveedor`, `Id_Instalacion`) VALUES
('Bebederos', 'Crianza porcinos', 8, 0, 4),
('Deposito de agua', 'Crianza porcinos', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `celo_reproductora`
--

CREATE TABLE `celo_reproductora` (
  `IdReproductora` int(11) NOT NULL,
  `IdPeriodoCelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `celo_reproductora`
--

INSERT INTO `celo_reproductora` (`IdReproductora`, `IdPeriodoCelo`) VALUES
(2, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `etapaporcino`
--

CREATE TABLE `etapaporcino` (
  `Id_Etapa` int(11) NOT NULL,
  `Etapa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etapaporcino`
--

INSERT INTO `etapaporcino` (`Id_Etapa`, `Etapa`) VALUES
(1, 'Lechon'),
(2, 'Marrano'),
(3, 'Primal'),
(4, 'Gordo');

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE `examen` (
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examen`
--

INSERT INTO `examen` (`Nombre`, `Descripcion`) VALUES
('Agresividad', 'Comportamiento del verraco con los trabajadores y con el resto de porcinos tanto hembras como machos'),
('Alimenticios', 'Inapetencia del verraco'),
('Crianza', 'Analisis de comportaamiento social del verraco'),
('Enfermedad', 'Inspeccion de enfermedades respiratorias, sarna, heces, dolor, o cojera'),
('Examen de hormona luteinizante', 'Analisis de sangre para determinar si la hipófisis puede responder correctamente a la hormona liberadora de gonadotropina'),
('Genital', 'Anlisis de alteraciones o defectos en el pene, analisis despues de hacer sedacion con 12 azaperona (Stresnil).'),
('Hereditarios', 'Analisis de problemas hereditarios, analisis de anormalidad en testículos'),
('Oseos', 'Deteccion de osteocondrosis o artritis'),
('Parasitológico', 'Control de parasitos en los verracos'),
('Problemas pulmonares', 'Control de influenzas, neumonia, rinitis previas'),
('prueba', 'webonada'),
('Suministro de electolitos', 'La falta de ellos puede causar una severa deshidratacion en el verraco');

-- --------------------------------------------------------

--
-- Table structure for table `examen_reproductor`
--

CREATE TABLE `examen_reproductor` (
  `Id_Reproductor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Fecha` varchar(10) NOT NULL,
  `Resultado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examen_reproductor`
--

INSERT INTO `examen_reproductor` (`Id_Reproductor`, `Nombre`, `Fecha`, `Resultado`) VALUES
(1, 'Alimenticios', '2018-06-14', 'Negativo');

-- --------------------------------------------------------

--
-- Table structure for table `fasecrecimiento`
--

CREATE TABLE `fasecrecimiento` (
  `Id_fase` int(11) NOT NULL,
  `Fase` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasecrecimiento`
--

INSERT INTO `fasecrecimiento` (`Id_fase`, `Fase`) VALUES
(1, 'Gestacion'),
(2, 'Lactancia'),
(3, 'Destete'),
(4, 'Levante'),
(5, 'Engorde');

-- --------------------------------------------------------

--
-- Table structure for table `instalacion`
--

CREATE TABLE `instalacion` (
  `Id_Instalacion` int(11) NOT NULL,
  `Id_Tipo` int(11) DEFAULT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Capacidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instalacion`
--

INSERT INTO `instalacion` (`Id_Instalacion`, `Id_Tipo`, `Nombre`, `Capacidad`) VALUES
(1, 0, 'Articulos', '1000'),
(2, 1, 'Gestacion', '10'),
(3, 2, 'Parto', '10'),
(4, 3, 'Lechones', '120'),
(5, 4, 'Marrano', '200'),
(6, 5, 'Primales', '150'),
(7, 6, 'Gordo', '200');

-- --------------------------------------------------------

--
-- Table structure for table `medicamento`
--

CREATE TABLE `medicamento` (
  `Codigo` int(11) NOT NULL,
  `Codigo_Tipo` int(11) DEFAULT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Dosis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicamento`
--

INSERT INTO `medicamento` (`Codigo`, `Codigo_Tipo`, `Nombre`, `Dosis`) VALUES
(1, 0, 'Dolex', '200'),
(2, 0, 'Hierro', '33'),
(3, 0, 'Vitamina E', '90');

-- --------------------------------------------------------

--
-- Table structure for table `medicamento_porcino`
--

CREATE TABLE `medicamento_porcino` (
  `CodigoMedicamento` int(11) NOT NULL,
  `IdPorcino` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Aplicada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicamento_porcino`
--

INSERT INTO `medicamento_porcino` (`CodigoMedicamento`, `IdPorcino`, `Fecha`, `Aplicada`) VALUES
(1, 6, '2018-06-01', 0),
(5, 1, '2018-06-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `monta`
--

CREATE TABLE `monta` (
  `Id_Tipo` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monta`
--

INSERT INTO `monta` (`Id_Tipo`, `Tipo`) VALUES
(2, 'Inseminacion'),
(1, 'Natural');

-- --------------------------------------------------------

--
-- Table structure for table `parto`
--

CREATE TABLE `parto` (
  `IdReproductora` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Numero_Momias` int(11) NOT NULL,
  `Numero_Muertos` int(11) NOT NULL,
  `Numero_Hijos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parto`
--

INSERT INTO `parto` (`IdReproductora`, `Fecha`, `Numero_Momias`, `Numero_Muertos`, `Numero_Hijos`) VALUES
(2, '2018-06-06', 1, 0, 17),
(4, '2018-06-12', 3, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `periodo_celo`
--

CREATE TABLE `periodo_celo` (
  `IdPeriodo` int(11) NOT NULL,
  `Id_TipoMonta` int(11) DEFAULT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Sincronia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodo_celo`
--

INSERT INTO `periodo_celo` (`IdPeriodo`, `Id_TipoMonta`, `Fecha_Inicio`, `Sincronia`) VALUES
(1, 1, '2018-06-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `periodo_gestacion`
--

CREATE TABLE `periodo_gestacion` (
  `Id_Periodo` varchar(50) NOT NULL,
  `Id_Reproductora` int(11) NOT NULL,
  `Fecha_Inicio` varchar(50) NOT NULL,
  `Id_Monta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodo_gestacion`
--

INSERT INTO `periodo_gestacion` (`Id_Periodo`, `Id_Reproductora`, `Fecha_Inicio`, `Id_Monta`) VALUES
('1', 2, '04/06/2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `Documento` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Codigo` varchar(50) DEFAULT NULL,
  `Clave` varchar(50) DEFAULT NULL,
  `IdTipo` int(11) DEFAULT NULL,
  `Id_Instalacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`Documento`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Codigo`, `Clave`, `IdTipo`, `Id_Instalacion`) VALUES
('0982380931', 'Paola', 'Pajaro', 'lauradanielabe@ufps.edu.co', '3003546213', '1003', NULL, 2, 1),
('1090500051', 'yhuver', 'Niño', 'yhuver@gmail.com', '00000003', '1011', '1011', 2, 1),
('1090502664', 'Juan Fernando', 'Romero Ortega', 'juanfernandoro@ufps.edu.co', '3003719983', '1001', '1001', 1, NULL),
('1234567890', 'Yhuver Andrey', 'Quintero', 'agmega@yopmail.com', '3003546213', '1002', NULL, 2, 1),
('9010930912', 'Pilar', 'Rodriguez', 'agmega@yopmail.com', '3003546213', '1006', '1006', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `porcino`
--

CREATE TABLE `porcino` (
  `IdPorcino` int(11) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Etapa` int(11) NOT NULL,
  `Estado_salud` tinyint(1) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Fecha_Adquisicion` date DEFAULT NULL,
  `Fase_Crecimiento` int(11) NOT NULL,
  `Id_Instalacion` int(11) DEFAULT NULL,
  `Raza` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porcino`
--

INSERT INTO `porcino` (`IdPorcino`, `Sexo`, `Peso`, `Etapa`, `Estado_salud`, `Fecha_Nacimiento`, `Fecha_Adquisicion`, `Fase_Crecimiento`, `Id_Instalacion`, `Raza`) VALUES
(5, 'M', 30, 1, 0, '2017-12-01', '2018-06-05', 3, 4, 'Duroc'),
(6, 'F', 30, 2, 0, '2018-06-01', '2018-06-05', 4, 5, 'Hampshire'),
(7, 'M', 2, 1, 1, '0003-02-22', '0002-02-02', 1, 1, 'Duroc'),
(14, 'M', 2, 3, 1, '0002-02-22', '0002-02-22', 1, 1, 'Duroc'),
(15, 'M', 2, 3, 1, '0022-02-22', '0002-02-22', 1, 1, 'Duroc'),
(16, 'M', 22, 4, 1, '2018-12-31', '2018-12-30', 1, 1, 'Duroc'),
(17, 'M', 222, 4, 0, '0002-02-02', '0022-02-22', 1, 1, 'Duroc'),
(18, 'M', 22, 1, 1, '2018-12-31', '2018-12-31', 1, 1, 'Duroc'),
(19, 'M', 22, 3, 0, '0222-02-22', '0002-02-02', 1, 1, 'Duroc, Hampshire'),
(20, 'M', 32, 3, 0, '0002-02-22', '0002-02-22', 2, 1, 'Hampshire'),
(21, 'M', 22, 1, 0, '0002-02-22', '0002-02-22', 1, 1, 'Duroc, Hampshire'),
(22, 'M', 22, 1, 0, '0022-02-22', '0002-02-02', 1, 2, 'Duroc, Hampshire'),
(23, 'M', 22, 3, 0, '0002-02-02', '0002-02-22', 1, 1, 'Landrace'),
(24, 'M', 22, 4, 0, '0002-02-22', '0002-02-22', 1, 1, 'Yorkshire'),
(25, 'M', 22, 1, 0, '0002-02-22', '0002-02-22', 1, 4, 'Pietrain');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`Id_Proveedor`, `Nombre`) VALUES
(0, 'Yhuver Quintero'),
(1, 'Diego gonzalez');

-- --------------------------------------------------------

--
-- Table structure for table `raza`
--

CREATE TABLE `raza` (
  `Nombre` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raza`
--

INSERT INTO `raza` (`Nombre`, `Descripcion`) VALUES
('Duroc', 'Raza norteamericana.\r\nDesarrollo, conversion y velocidad de crecimiento. Su capa varia del amarillos a las diferentes gamas del rojo.\r\n Orejas mediana, cabeza pequeña, cara ancha, ojos prominentes, cuello corto, pecho amplio.\r\n Nueve lechones y lechera.'),
('Duroc, Hampshire', 'Combina la productividad de la raza duroc y la buena calidad de la carne de la raza hampshire'),
('Hampshire', 'Nativa de Inglaterra y Estados Unidos.\r\nColor negro, con una cincha blanca que abarca sus extremidades delanteras.\r\nOrejas erguidas.\r\nVulnerable a los cambios de temperatura.\r\nProlificidad, aptitud lechera, poca habilidad materna.\r\nProduce poca grasa.'),
('Landrace', 'Origen Danes.\r\nColoración blanca.\r\nOrejas largas hacia adelante.\r\nGran longitud corporal.\r\nGran prolificidad, 12 lechones por camada con muy buen peso al nacer (1300gr a 1500gr).\r\nAptitud lechera y materna.\r\n\r\n'),
('Pietrain', 'Origen belga, Gran Bretaña y Alemania.\r\nPerfil cóncavo  orejas rectas.\r\nPiel blanca con manchas o pecas negras.\r\nEscasa en leche y mala habilidad materna.\r\nMala velocidad de crecimiento y deficiente conversión.\r\nGran volumen de jamón.'),
('Yorkshire', 'Originario de Inglaterra.\r\nDe capa blanca. Es largo, ancho y profundo, con apariencia maciza.\r\nCabeza mediana y esquelética. Hocico ancho y las orejas medianas hacia adelante.\r\nCaracterísticas rusticas y prolíficas, promedia 11 lechones por camada.\r\nAptitud materna y lechera.\r\nLongitud y rapidez de crecimiento\r\nEsta raza incluye a la Large White de gran tamaño y la Middle White de tamaño mediano.');

-- --------------------------------------------------------

--
-- Table structure for table `reproductor`
--

CREATE TABLE `reproductor` (
  `Id_Reproductor` int(11) NOT NULL,
  `Confomacion_Fisica` varchar(50) NOT NULL,
  `Reproductoras_Montadas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reproductor`
--

INSERT INTO `reproductor` (`Id_Reproductor`, `Confomacion_Fisica`, `Reproductoras_Montadas`) VALUES
(1, 'Caderas prominentes', 12),
(2, 'Grosor de 24 cm los perniles', 2),
(3, 'Aumento rapido de peso', 9);

-- --------------------------------------------------------

--
-- Table structure for table `reproductora`
--

CREATE TABLE `reproductora` (
  `IdReproductora` int(11) NOT NULL,
  `Nulipara` tinyint(1) NOT NULL,
  `Id_reproductor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reproductora`
--

INSERT INTO `reproductora` (`IdReproductora`, `Nulipara`, `Id_reproductor`) VALUES
(2, 0, 1),
(4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `Id_Tipo` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`Id_Tipo`, `Tipo`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_articulo`
--

CREATE TABLE `tipo_articulo` (
  `Tipo_Articulo` varchar(50) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_articulo`
--

INSERT INTO `tipo_articulo` (`Tipo_Articulo`, `Descripcion`) VALUES
('Crianza porcinos', 'Dosificador medicamentos,Dosificador pienso,Deposito de agua,Fontaneria'),
('Cuidados Porcinos', 'Basculas,Bebederos,Calefacion,Comederos,Marcaje,Refrigeracion,Rejillas,Ventilacion'),
('Ferreteria', 'Tornillos, Martillos, Alicates, etc '),
('Implementos medicos', 'Jeringas, Inseminacion'),
('Limpieza', 'Higiene,Desinfeccion'),
('Varios', 'Varios');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_instalacion`
--

CREATE TABLE `tipo_instalacion` (
  `Id_Tipo` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_instalacion`
--

INSERT INTO `tipo_instalacion` (`Id_Tipo`, `Tipo`) VALUES
(0, 'Articulos'),
(1, 'Gestacion'),
(2, 'Parto'),
(3, 'Lechones'),
(4, 'Marrano'),
(5, 'Primales'),
(6, 'Gordo');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_medicamento`
--

CREATE TABLE `tipo_medicamento` (
  `Tipo` varchar(50) DEFAULT NULL,
  `Codigo_Tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_medicamento`
--

INSERT INTO `tipo_medicamento` (`Tipo`, `Codigo_Tipo`) VALUES
('Antibiotico', 0),
('Pastillas', 1),
('Purgas', 2),
('Vacunas', 3),
('Vacunas Hormonales', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alarma`
--
ALTER TABLE `alarma`
  ADD PRIMARY KEY (`DocumentoEmpleado`,`Fecha`,`Hora`),
  ADD KEY `IdPorcino` (`DocumentoEmpleado`);

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `IXFK_Articulo_Instalacion` (`Id_Instalacion`),
  ADD KEY `IXFK_Articulo_Proveedor` (`Id_Proveedor`),
  ADD KEY `Tipo` (`Tipo`);

--
-- Indexes for table `celo_reproductora`
--
ALTER TABLE `celo_reproductora`
  ADD PRIMARY KEY (`IdReproductora`,`IdPeriodoCelo`),
  ADD KEY `IdReproductora` (`IdReproductora`),
  ADD KEY `IdPeriodoCelo` (`IdPeriodoCelo`);

--
-- Indexes for table `etapaporcino`
--
ALTER TABLE `etapaporcino`
  ADD PRIMARY KEY (`Id_Etapa`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indexes for table `examen_reproductor`
--
ALTER TABLE `examen_reproductor`
  ADD PRIMARY KEY (`Id_Reproductor`,`Nombre`,`Fecha`),
  ADD KEY `Id_Reproductor` (`Id_Reproductor`),
  ADD KEY `Id_Examen` (`Nombre`);

--
-- Indexes for table `fasecrecimiento`
--
ALTER TABLE `fasecrecimiento`
  ADD PRIMARY KEY (`Id_fase`);

--
-- Indexes for table `instalacion`
--
ALTER TABLE `instalacion`
  ADD PRIMARY KEY (`Id_Instalacion`),
  ADD KEY `IXFK_Instalacion_Tipo_Instalacion` (`Id_Tipo`);

--
-- Indexes for table `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `Codigo_Tipo` (`Codigo_Tipo`);

--
-- Indexes for table `medicamento_porcino`
--
ALTER TABLE `medicamento_porcino`
  ADD PRIMARY KEY (`CodigoMedicamento`,`IdPorcino`,`Fecha`),
  ADD KEY `IXFK_Medicamento_Porcino_Medicamento` (`CodigoMedicamento`),
  ADD KEY `IXFK_Medicamento_Porcino_Pornico` (`IdPorcino`);

--
-- Indexes for table `monta`
--
ALTER TABLE `monta`
  ADD PRIMARY KEY (`Id_Tipo`),
  ADD UNIQUE KEY `Tipo` (`Tipo`);

--
-- Indexes for table `parto`
--
ALTER TABLE `parto`
  ADD PRIMARY KEY (`IdReproductora`,`Fecha`),
  ADD KEY `IXFK_Parto_Reproductora` (`IdReproductora`);

--
-- Indexes for table `periodo_celo`
--
ALTER TABLE `periodo_celo`
  ADD PRIMARY KEY (`Fecha_Inicio`,`IdPeriodo`),
  ADD KEY `Id_TipoMonta` (`Id_TipoMonta`),
  ADD KEY `IdPeriodo` (`IdPeriodo`);

--
-- Indexes for table `periodo_gestacion`
--
ALTER TABLE `periodo_gestacion`
  ADD PRIMARY KEY (`Id_Periodo`,`Id_Reproductora`,`Fecha_Inicio`),
  ADD KEY `Id_Monta` (`Id_Monta`),
  ADD KEY `Id_Reproductora` (`Id_Reproductora`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Documento`),
  ADD KEY `IXFK_Persona_Instalacion` (`Id_Instalacion`),
  ADD KEY `IXFK_Persona_Rol` (`IdTipo`);

--
-- Indexes for table `porcino`
--
ALTER TABLE `porcino`
  ADD PRIMARY KEY (`IdPorcino`),
  ADD KEY `IXFK_Pornico_Instalacion` (`Id_Instalacion`),
  ADD KEY `Etapa` (`Etapa`),
  ADD KEY `Fase_Crecimiento` (`Fase_Crecimiento`),
  ADD KEY `Raza` (`Raza`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- Indexes for table `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indexes for table `reproductor`
--
ALTER TABLE `reproductor`
  ADD PRIMARY KEY (`Id_Reproductor`);

--
-- Indexes for table `reproductora`
--
ALTER TABLE `reproductora`
  ADD PRIMARY KEY (`IdReproductora`),
  ADD KEY `Id_reproductor` (`Id_reproductor`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indexes for table `tipo_articulo`
--
ALTER TABLE `tipo_articulo`
  ADD PRIMARY KEY (`Tipo_Articulo`);

--
-- Indexes for table `tipo_instalacion`
--
ALTER TABLE `tipo_instalacion`
  ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indexes for table `tipo_medicamento`
--
ALTER TABLE `tipo_medicamento`
  ADD PRIMARY KEY (`Codigo_Tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etapaporcino`
--
ALTER TABLE `etapaporcino`
  MODIFY `Id_Etapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fasecrecimiento`
--
ALTER TABLE `fasecrecimiento`
  MODIFY `Id_fase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instalacion`
--
ALTER TABLE `instalacion`
  MODIFY `Id_Instalacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monta`
--
ALTER TABLE `monta`
  MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `porcino`
--
ALTER TABLE `porcino`
  MODIFY `IdPorcino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alarma`
--
ALTER TABLE `alarma`
  ADD CONSTRAINT `alarma_ibfk_1` FOREIGN KEY (`DocumentoEmpleado`) REFERENCES `persona` (`Documento`);

--
-- Constraints for table `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `FK_Articulo_Proveedor` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `tipo_articulo` (`Tipo_Articulo`),
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`Id_Instalacion`) REFERENCES `instalacion` (`Id_Instalacion`);

--
-- Constraints for table `celo_reproductora`
--
ALTER TABLE `celo_reproductora`
  ADD CONSTRAINT `celo_reproductora_ibfk_1` FOREIGN KEY (`IdReproductora`) REFERENCES `reproductora` (`IdReproductora`),
  ADD CONSTRAINT `celo_reproductora_ibfk_2` FOREIGN KEY (`IdPeriodoCelo`) REFERENCES `periodo_celo` (`IdPeriodo`);

--
-- Constraints for table `examen_reproductor`
--
ALTER TABLE `examen_reproductor`
  ADD CONSTRAINT `examen_reproductor_ibfk_2` FOREIGN KEY (`Id_Reproductor`) REFERENCES `reproductor` (`Id_Reproductor`),
  ADD CONSTRAINT `examen_reproductor_ibfk_3` FOREIGN KEY (`Nombre`) REFERENCES `examen` (`Nombre`);

--
-- Constraints for table `instalacion`
--
ALTER TABLE `instalacion`
  ADD CONSTRAINT `instalacion_ibfk_1` FOREIGN KEY (`Id_Tipo`) REFERENCES `tipo_instalacion` (`Id_Tipo`);

--
-- Constraints for table `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `medicamento_ibfk_1` FOREIGN KEY (`Codigo_Tipo`) REFERENCES `tipo_medicamento` (`Codigo_Tipo`);

--
-- Constraints for table `parto`
--
ALTER TABLE `parto`
  ADD CONSTRAINT `parto_ibfk_1` FOREIGN KEY (`IdReproductora`) REFERENCES `reproductora` (`IdReproductora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
