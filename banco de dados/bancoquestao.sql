-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/02/2024 às 21:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancoquestao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `user` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`id`, `user`, `senha`, `email`) VALUES
(1, 'admin', '1234', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `assunto`
--

CREATE TABLE `assunto` (
  `disciplina` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `assunto`
--

INSERT INTO `assunto` (`disciplina`, `nome`) VALUES
('ARTES', 'arte moderna'),
('HISTóRIA', 'Brasil Colonial'),
('BIOLOGIA', 'Distribuição genética'),
('EDUCAçãO FíSICA', 'Esportes coletivos'),
('MATEMATICA', 'Função afim'),
('PORTUGUES', 'Gramatica'),
('HISTóRIA', 'Grécia'),
('BIOLOGIA', 'Lei de Mendel'),
('HISTóRIA', 'Mesopotâmia'),
('HISTóRIA', 'Pré-história'),
('FILOSOFIA', 'Questionamentos'),
('MATEMATICA', 'Trigonometria'),
('PORTUGUES', 'Verbos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`) VALUES
(2, 'PORTUGUES'),
(5, 'FILOSOFIA'),
(6, 'MATEMATICA'),
(7, 'BIOLOGIA'),
(8, 'FISICA'),
(9, 'EDUCAçãO FíSICA'),
(10, 'ARTES'),
(11, 'SOCIOLOGIA'),
(12, 'HISTóRIA'),
(13, 'GEOGRAFIA'),
(14, 'QUíMICA'),
(15, 'PORTUGUêS PARA AVALIAçõES EXTERNAS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

CREATE TABLE `professor` (
  `nome` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professor`
--

INSERT INTO `professor` (`nome`, `senha`, `email`) VALUES
('marcelle', 'ma502187', 'marcelle@gmail.com'),
('thalisson', '1234', 'thalissons@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prova`
--

CREATE TABLE `prova` (
  `id` int(11) NOT NULL,
  `disciplina` varchar(60) NOT NULL,
  `assunto` varchar(60) NOT NULL,
  `questoes` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prova`
--

INSERT INTO `prova` (`id`, `disciplina`, `assunto`, `questoes`) VALUES
(10, 'EDUCAçãO FíSICA', 'Esportes coletivos', ''),
(11, 'FILOSOFIA', 'Questionamentos', 'O thalisson ama a marcelle?<br>'),
(12, 'PORTUGUES', 'Gramatica', 'A palavra \"nadar\" é um verbo?<br>'),
(13, 'MATEMATICA', 'Trigonometria', 'Fórmula para descobrir o valor da hipotenusa?<br>'),
(14, 'MATEMATICA', 'Trigonometria', 'Qual nome do único triângulo que possui um ângulo de 90°?<br>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `questao`
--

CREATE TABLE `questao` (
  `disciplina` varchar(60) NOT NULL,
  `assunto` varchar(60) NOT NULL,
  `enunciado` varchar(120) NOT NULL,
  `resposta` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `questao`
--

INSERT INTO `questao` (`disciplina`, `assunto`, `enunciado`, `resposta`) VALUES
('PORTUGUES', 'Gramatica', 'A palavra \"nadar\" é um verbo?', 'Sim!'),
('MATEMATICA', 'Trigonometria', 'Fórmula para descobrir o valor da hipotenusa?', 'hipotenusa é igual a raiz quadrada da soma dos catetos ao quadrado'),
('EDUCAçãO FíSICA', 'Esportes coletivos', 'Vôlei é considerado um esporte de contato?', 'Não!');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `assunto`
--
ALTER TABLE `assunto`
  ADD PRIMARY KEY (`nome`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`enunciado`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `prova`
--
ALTER TABLE `prova`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
