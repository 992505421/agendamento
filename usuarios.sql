-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jun-2022 às 01:38
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
-- Banco de dados: `db_voice`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL COMMENT 'Identificação do Usuário',
  `nome` varchar(100) DEFAULT '' COMMENT 'Nome do usuário',
  `user` varchar(100) DEFAULT '' COMMENT 'Senha do Usuário',
  `email` varchar(100) DEFAULT '' COMMENT 'e-Mail do Usuário',
  `senha` varchar(100) DEFAULT '' COMMENT 'Senha do Usuário',
  `dataCaptura` date DEFAULT NULL COMMENT 'Data da caputra',
  `ativo` varchar(1) DEFAULT 'A' COMMENT 'Se ativo ou não',
  `nivel` int(11) DEFAULT NULL COMMENT 'Grau de acesso do usuário',
  `empresa` int(11) DEFAULT NULL COMMENT 'Dados da empresa que terá acesso.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `user`, `email`, `senha`, `dataCaptura`, `ativo`, `nivel`, `empresa`) VALUES
(11, 'leonidas', 'leonidas', 'leonidas', '8845db5e58790220b4072dbf99abfe17e28492be', '2020-04-14', 'A', 9, 1),
(12, 'rodrigo', 'rodrigo', 'rodrigo', '8845db5e58790220b4072dbf99abfe17e28492be', '2021-02-25', 'A', 9, 1),
(14, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2021-04-18', 'A', 9, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação do Usuário', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
