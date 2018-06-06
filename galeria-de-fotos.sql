-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2018 às 02:10
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeria-de-fotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `url`, `created_at`, `user_id`) VALUES
(1, 'Happy Couple', 'foto-1.jpeg', '2018-06-03 19:14:22', 1),
(2, 'Notebook Code', 'foto-2.jpeg\r\n', '2018-06-03 19:15:02', 1),
(4, 'Sky', 'c0967f49050425f2f3d8732d4e6fae4b.jpeg', '2018-06-04 18:11:03', 1),
(5, 'Woman', 'da24a762b8f00307f877c193a3c33995.jpeg', '2018-06-04 18:26:39', 1),
(6, 'PC', 'ea973e636843912f292a9e632ce036ec.jpeg', '2018-06-04 18:28:35', 1),
(7, 'Girl', '9e07abd007d1e880c399ebf79bf4c261.jpeg', '2018-06-04 18:29:25', 2),
(8, ' sneakers', '96aa3b33784484222f6d39a1184c52d9.jpeg', '2018-06-04 18:34:46', 2),
(9, 'Woman', 'f77fcb86e72f6ceaadba5273120a9a84.jpeg', '2018-06-05 20:00:42', 2),
(10, 'NaN', '9ab2a0ff6abb39626953228b7ecfdfb8.jpeg', '2018-06-05 20:05:10', 3),
(11, 'Meal', 'b75486d21f4ee5d11766d706ef2d3cb1.jpeg', '2018-06-05 20:11:12', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `senha`, `create_at`) VALUES
(1, 'willa@gmail.com', 'willa', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-04 23:42:37'),
(2, 'laryssa@contato.com', 'laryssa', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 01:56:43'),
(3, 'darcy_vovolinda@gmail.com', 'Darcy', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 02:04:17'),
(4, 'guilherme_danki@outlook.com', 'guilherme', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 02:07:10'),
(5, 'andressa@gmail.com', 'Andressa', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 15:06:41'),
(12, 'giovanni@contato.com', 'giovanni', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 18:01:46'),
(15, 'maria@contato.com', 'Maria', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-05 18:03:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
