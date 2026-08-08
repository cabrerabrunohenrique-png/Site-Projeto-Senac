-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/08/2026 às 16:31
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprojetosenac`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcadastronovousuario`
--

CREATE TABLE `tbcadastronovousuario` (
  `id_tbcadastronovousuario` int(11) NOT NULL,
  `nomeCompleto` varchar(50) DEFAULT NULL,
  `numeroRegistro` int(7) DEFAULT NULL,
  `nivelPermisao` varchar(20) DEFAULT NULL,
  `nomeUsuario` varchar(20) DEFAULT NULL,
  `senhaAcesso` varchar(50) DEFAULT NULL,
  `usuarioAlteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcadastronovousuario`
--

INSERT INTO `tbcadastronovousuario` (`id_tbcadastronovousuario`, `nomeCompleto`, `numeroRegistro`, `nivelPermisao`, `nomeUsuario`, `senhaAcesso`, `usuarioAlteracao`) VALUES
(266, 'bruno henrique cabrera', 1, 'adm', 'adm', 'Sophia2013@', NULL),
(267, 'rafael inacio', 2, 'adm', 'rafael', 'Sophia2013@', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcadastropeca`
--

CREATE TABLE `tbcadastropeca` (
  `id_tdcadastropeca` int(11) NOT NULL,
  `codigoproduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(20) DEFAULT NULL,
  `fabricanteProduto` varchar(20) DEFAULT NULL,
  `variavelproduto` int(11) DEFAULT NULL,
  `familiaproduto` varchar(20) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `categoriaproduto` varchar(20) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `dataalteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcadastropeca`
--

INSERT INTO `tbcadastropeca` (`id_tdcadastropeca`, `codigoproduto`, `nomeProduto`, `fabricanteProduto`, `variavelproduto`, `familiaproduto`, `datacriacao`, `categoriaproduto`, `preco`, `dataalteracao`) VALUES
(160, 1, 'aaaa aaaa', 'teste', 1, 'teste', '2026-08-07', 'teste', 0.01, '2026-08-08');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbentradaestoque`
--

CREATE TABLE `tbentradaestoque` (
  `id_tbentradaestoque` int(11) NOT NULL,
  `dataEntradaProduto` date DEFAULT NULL,
  `codigoProduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(20) DEFAULT NULL,
  `quantidadeProduto` int(11) DEFAULT NULL,
  `nFProduto` int(11) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbentradaestoque`
--

INSERT INTO `tbentradaestoque` (`id_tbentradaestoque`, `dataEntradaProduto`, `codigoProduto`, `nomeProduto`, `quantidadeProduto`, `nFProduto`, `tipo`) VALUES
(142, '2026-07-17', 1, 'bruno1', 100, 1, '***'),
(143, '2026-07-16', 1, 'bruno1', 20, 2, ';or 1=1'),
(144, '2026-07-18', 4, 'saco', 100, 1, 'COMPr a'),
(145, '2026-08-06', 1, 'aluno', 100, 1, 'aaa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbordemservico`
--

CREATE TABLE `tbordemservico` (
  `int_tbordemservico` int(11) NOT NULL,
  `codigoOS` int(11) DEFAULT NULL,
  `codigoProduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(20) DEFAULT NULL,
  `quantidadeProduzida` int(11) DEFAULT NULL,
  `responsavel` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL,
  `responsavel_alteracao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbordemservico`
--

INSERT INTO `tbordemservico` (`int_tbordemservico`, `codigoOS`, `codigoProduto`, `nomeProduto`, `quantidadeProduzida`, `responsavel`, `data`, `data_alteracao`, `responsavel_alteracao`) VALUES
(123, 8511, 1, 'aaaa aaaa', 1, NULL, '2026-08-08', '2026-08-08', 'bruno henrique cabrera'),
(125, 2282, 1, 'aaaa aaaa', 800, NULL, '2026-08-08', '2026-08-08', 'bruno henrique cabrera'),
(126, 4337, 1, 'aaaa aaaa', 1, NULL, '2026-08-08', NULL, NULL),
(127, 5409, 1, 'aaaa aaaa', 1, NULL, '2026-08-08', '2026-08-08', 'bruno henrique cabrera'),
(128, 2930, 1, 'aaaa aaaa', 200, 'bruno henrique cabrera', '2026-08-08', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbsaidaestoque`
--

CREATE TABLE `tbsaidaestoque` (
  `id_tbsaidaestoque` int(11) NOT NULL,
  `dataSaida` date DEFAULT NULL,
  `codigoPeca` int(11) DEFAULT NULL,
  `nomePeca` varchar(20) DEFAULT NULL,
  `quantidaPeca` int(11) DEFAULT NULL,
  `numeroNf` int(11) DEFAULT NULL,
  `numeroOs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbsaidaestoque`
--

INSERT INTO `tbsaidaestoque` (`id_tbsaidaestoque`, `dataSaida`, `codigoPeca`, `nomePeca`, `quantidaPeca`, `numeroNf`, `numeroOs`) VALUES
(67, '2026-07-17', 1, 'bruno1', 110, 1, 1668),
(68, '2026-08-07', 0, '', 1, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcadastronovousuario`
--
ALTER TABLE `tbcadastronovousuario`
  ADD PRIMARY KEY (`id_tbcadastronovousuario`);

--
-- Índices de tabela `tbcadastropeca`
--
ALTER TABLE `tbcadastropeca`
  ADD PRIMARY KEY (`id_tdcadastropeca`);

--
-- Índices de tabela `tbentradaestoque`
--
ALTER TABLE `tbentradaestoque`
  ADD PRIMARY KEY (`id_tbentradaestoque`);

--
-- Índices de tabela `tbordemservico`
--
ALTER TABLE `tbordemservico`
  ADD PRIMARY KEY (`int_tbordemservico`);

--
-- Índices de tabela `tbsaidaestoque`
--
ALTER TABLE `tbsaidaestoque`
  ADD PRIMARY KEY (`id_tbsaidaestoque`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcadastronovousuario`
--
ALTER TABLE `tbcadastronovousuario`
  MODIFY `id_tbcadastronovousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT de tabela `tbcadastropeca`
--
ALTER TABLE `tbcadastropeca`
  MODIFY `id_tdcadastropeca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de tabela `tbentradaestoque`
--
ALTER TABLE `tbentradaestoque`
  MODIFY `id_tbentradaestoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de tabela `tbordemservico`
--
ALTER TABLE `tbordemservico`
  MODIFY `int_tbordemservico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de tabela `tbsaidaestoque`
--
ALTER TABLE `tbsaidaestoque`
  MODIFY `id_tbsaidaestoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
