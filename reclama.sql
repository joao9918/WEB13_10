-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/10/2025 às 02:27
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
-- Banco de dados: `reclama`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `reclamacao`
--

CREATE TABLE `reclamacao` (
  `id` int(11) NOT NULL,
  `id_reclamante` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `estado` enum('Enviada','Atribuída','Em andamento','Resolvida') NOT NULL DEFAULT 'Enviada',
  `aprovacao` enum('','Aprovada','Reprovada') DEFAULT '',
  `comentario` text DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reclamacao`
--

INSERT INTO `reclamacao` (`id`, `id_reclamante`, `titulo`, `descricao`, `foto`, `estado`, `aprovacao`, `comentario`, `criado_em`) VALUES
(1, 1, 'Buraco rua 28', '28', 'f_68ed936402b9e.png', 'Resolvida', 'Aprovada', 'Foi resolvido Obrigado', '2025-10-14 00:03:48'),
(2, 3, 'Buraco na Rua 16', 'Tem um buraco na Rua 16', 'f_68ed95728cb50.png', 'Resolvida', 'Reprovada', 'Ainda está la', '2025-10-14 00:12:34');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nascimento` date NOT NULL,
  `tipo` enum('admin','usuario') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `nascimento`, `tipo`) VALUES
(4, 'teste', 'teste@gmail.com', '12345', 123456, '2015-10-15', 'usuario'),
(5, 'teste', 'teste@hotmail.com', '$2y$10$m0cyTKIGDnMnCmq3VSXYP..mLvY3nSZbRD.oGwrcpxJCxEZmHrwAK', 2147483647, '2025-09-30', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reclamante` (`id_reclamante`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
