-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Ago-2022 às 02:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `db_voice`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--
use db_agenda;
drop table cliente;
CREATE TABLE `cliente` (
  `id_cl` int(11) NOT NULL COMMENT 'Identificação do cliente/fornecedor',
  `nom_cl` varchar(40) NOT NULL COMMENT 'Nome',
  `tip_cl` enum('1','2') DEFAULT NULL COMMENT 'Tipo - 1 cliente - 2 Fornecedor',
  `cel_cl` varchar(30) DEFAULT NULL COMMENT 'Celular',
  `fon_cl` varchar(30) DEFAULT NULL COMMENT 'Telefone',
  `ema_cl` varchar(30) DEFAULT NULL COMMENT 'EMail',
  `cpf_cl` varchar(18) DEFAULT NULL COMMENT 'CPF/CNPJ',
  `ies_cl` varchar(20) DEFAULT NULL COMMENT 'Inscrição Estadual',
  `rua_cl` varchar(40) DEFAULT NULL COMMENT 'Endereço',
  `num_cl` varchar(20) DEFAULT NULL COMMENT 'Número',
  `bai_cl` varchar(40) DEFAULT NULL COMMENT 'Bairro',
  `com_cl` varchar(40) DEFAULT NULL COMMENT 'Complemento',
  `cep_cl` varchar(10) DEFAULT NULL COMMENT 'Cep',
  `cid_cl` varchar(40) DEFAULT NULL COMMENT 'Cidade',
  `est_cl` varchar(2) DEFAULT NULL COMMENT 'Estado',
  `cfi_cl` enum('N','S') DEFAULT 'N' COMMENT 'Consumidor final? sim ou não',
  `ati_cl` varchar(1) DEFAULT 'A' COMMENT 'Se ativo ou não',
  `pro_cl` int(11) DEFAULT 1 COMMENT 'Propriedade que acessou',
  `usu_cl` int(11) DEFAULT NULL COMMENT 'Usuário que acessou',
  `emp_cl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cl`, `nom_cl`, `tip_cl`, `cel_cl`, `fon_cl`, `ema_cl`, `cpf_cl`, `ies_cl`, `rua_cl`, `num_cl`, `bai_cl`, `com_cl`, `cep_cl`, `cid_cl`, `est_cl`, `cfi_cl`, `ati_cl`, `pro_cl`, `usu_cl`, `emp_cl`) VALUES
(1, 'UNIVERSIDADE ESTADUAL DE GOIÁS', '2', '64 98103-5403', '64 3679-1052', 'leonidas@ueg.br', '10.123.456/0001-55', '10852974-55', 'AV. 5 DE JANEIRO', '0', 'ST. UNIVERSITÁRIO', '', '76.160-000', 'SANCLERLÂNDIA', 'GO', 'S', 'A', 1, NULL, 1),
(2, 'FAZENDA MONTENEGRO', '2', '11 32545-1244', '11 3412-1551', 'montenegro@gmail.com', '10.324.111/0001-12', '14654475-23', 'ROD. GO -020, KM. 56', '0', 'ZONA RURAL', '', '45.945-122', 'BARRETOS', 'SP', 'S', 'A', 1, NULL, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cl`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação do cliente/fornecedor', AUTO_INCREMENT=3;
COMMIT;