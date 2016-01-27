-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jan-2016 às 18:35
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portabilis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `codaluno` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`codaluno`, `cpf`, `rg`, `datanasc`, `nome`, `telefone`) VALUES
(1, 2147483647, 6701468, '0000-00-00', 'emmanuel', '48 3443-5505'),
(2, 2147483647, 2147483647, '1999-02-09', 'Jessica Mariano', '9999-9999'),
(3, 0, 0, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `codcurso` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `valorinsc` decimal(10,0) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`codcurso`, `nome`, `valorinsc`, `periodo`) VALUES
(1, 'MEDICINA', '0', 3),
(2, '', '0', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `codmatricula` int(11) NOT NULL,
  `datamatri` date DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `codaluno` int(11) DEFAULT NULL,
  `codcurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`codaluno`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codcurso`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`codmatricula`),
  ADD KEY `codaluno` (`codaluno`),
  ADD KEY `codcurso` (`codcurso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `codaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `codcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
  MODIFY `codmatricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`codaluno`) REFERENCES `aluno` (`codaluno`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`codcurso`) REFERENCES `curso` (`codcurso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
