-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Maio-2022 às 21:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hotel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospede`
--

CREATE TABLE `hospede` (
  `codigo` int(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `confirmacao_senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `hospede`
--

INSERT INTO `hospede` (`codigo`, `email`, `nome_completo`, `cpf`, `endereco`, `telefone`, `login`, `senha`, `confirmacao_senha`) VALUES
(1, '3123123@213213', '3213123', '21312312312', '213123', '21312312', '123213', '213123', '213123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `hospede`
--
ALTER TABLE `hospede`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hospede`
--
ALTER TABLE `hospede`
  MODIFY `codigo` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
