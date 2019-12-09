-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/12/2019 às 19:33
-- Versão do servidor: 10.4.8-MariaDB
-- Versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `DGLab`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `CPF` char(11) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(45) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(15) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `usuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`CPF`, `nome`, `email`, `senha`, `endereco`, `cep`, `cidade`, `estado`, `usuarioID`) VALUES
('12345678910', 'Carlos', 'carlos@gmail.com', '1234567892', 'Avenida Armando Farjado', '35931051', 'João Monlevade', 'Minas Gerais', 5),
('12345678911', 'Jessica Cunha', 'jessicasoares@gmail.com', '1234569870', 'Rua Prata', '35930200', 'João Monlevade', 'MG', 6),
('12345678913', 'Merle Carreira', 'merlecarreira@gmail.com', '1236547890', 'Avenida Ivo Pareschi', '14057100', 'Ribeirão Preto', 'São Paulo', 64),
('12365478902', 'Luis Miguel', 'miguel@gmail.com', '159760152', 'Rua Primavera', '35930238', 'João Monlevade', 'Minas Gerais', 69);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
