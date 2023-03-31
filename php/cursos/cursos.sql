-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Mar-2023 às 15:04
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
-- Banco de dados: `cursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(8) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome`, `email`, `senha`) VALUES
(1, 'Alex', 'alexespanha@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(8) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `email`, `senha`) VALUES
(1, 'Alana', 'umameiapalavra@gmail.com', '12345'),
(2, 'Victor', 'victor@gmail.com', '12345'),
(3, 'mateusulol69', 'kilunda@gmail.com', 'memes6969'),
(4, 'emily', 'paodequeijo@gmail.com', 'naoseikkkk'),
(5, 'Raissa', 'raissa@gmail.com', '12345'),
(6, 'mateus', 'mateus@gmail.com', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursar`
--

CREATE TABLE `cursar` (
  `id_cursar` int(8) NOT NULL,
  `id_aluno` int(8) NOT NULL,
  `id_curso` int(8) NOT NULL,
  `vagas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursar`
--

INSERT INTO `cursar` (`id_cursar`, `id_aluno`, `id_curso`, `vagas`) VALUES
(1, 1, 6, 1),
(5, 2, 6, 1),
(18, 5, 11, 1),
(19, 5, 7, 1),
(20, 6, 12, 1),
(21, 6, 13, 1),
(22, 6, 8, 1),
(23, 6, 12, 1),
(24, 5, 9, 1),
(30, 2, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(8) NOT NULL,
  `nome_curso` varchar(100) NOT NULL,
  `preco` decimal(11,2) NOT NULL,
  `vagas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome_curso`, `preco`, `vagas`) VALUES
(6, 'Veterinario', '189.00', 10),
(7, 'Design de moda', '150.00', 0),
(8, 'Python', '120.00', 0),
(9, 'Informática', '100.00', 0),
(10, 'Java', '120.00', 40),
(11, 'Javascript', '134.00', 0),
(12, 'robótica', '50.00', 0),
(13, 'redes de computador', '3.00', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Índices para tabela `cursar`
--
ALTER TABLE `cursar`
  ADD PRIMARY KEY (`id_cursar`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `cursar`
--
ALTER TABLE `cursar`
  MODIFY `id_cursar` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cursar`
--
ALTER TABLE `cursar`
  ADD CONSTRAINT `id_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`),
  ADD CONSTRAINT `id_curso` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
