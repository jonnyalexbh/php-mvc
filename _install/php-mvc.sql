-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2016 at 12:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `ID_DEPARTAMENTO` varchar(6) NOT NULL,
  `ID_PAIS` varchar(6) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`ID_DEPARTAMENTO`, `ID_PAIS`, `NOMBRE`) VALUES
('ANT', 'COL', 'Antioquia'),
('BOG', 'COL', 'Bogota'),
('BUE', 'ARG', 'BUENOS AIRES');

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `ID_PAIS` varchar(6) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`ID_PAIS`, `NOMBRE`) VALUES
('ARG', 'ARGENTINA'),
('COL', 'COLOMBIA');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` varchar(20) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `FE_INI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE`, `PASSWORD`, `FE_INI`) VALUES
('ADRIANA.DUQUE', 'ADRIANA DUQUE', 'sfsfdf44545', '2016-06-28'),
('ALEJANDRA.GARCIA', 'ALEJANDRA GARCIA', '65sd4fsd45f6', '2016-07-03'),
('ANDRES.OROZCO', 'ANDRES OROZCO', '258', '2016-06-13'),
('ANNY.GARCIA', 'ANNY GARCIA', '14165f4sd65f4', '2016-06-06'),
('CARLOS.LORETO', 'CARLOS LORETO', '6646', '2016-07-04'),
('DANIELA.BEDOYA', 'DANIELA BEDOYA', '456', '2016-06-02'),
('DANIELA.YEPES', 'DANIELA YEPES', 'sdf5521', '2016-07-04'),
('JONNY.LOPEZ', 'JONNY ALEXANDER LOPEZ', '123', '2016-06-01'),
('JULIAN.YEPES', 'JULIAN YEPES', '8791313', '2016-06-20'),
('KELLY.CARDONA', 'KELLY CARDONA', '896', '2016-07-01'),
('MELISSA.GOEZ', 'MELISSA GOEZ', '321', '2016-06-21'),
('YULIANA.MEJIA', 'YULIANA MEJIA', 'sdfsdf616', '2016-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_DEPARTAMENTO`,`ID_PAIS`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID_PAIS`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
