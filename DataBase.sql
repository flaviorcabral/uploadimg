-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Dez-2016 às 16:50
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(10) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `tamanho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `tipo`, `tamanho`) VALUES
(7, 'Lighthouse.jpg', 'image/jpeg', '561276'),
(8, 'Desert.jpg', 'image/jpeg', '845941');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
