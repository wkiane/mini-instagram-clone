-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2018 às 00:28
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
(4, 'Sky', 'c0967f49050425f2f3d8732d4e6fae4b.jpeg', '2018-06-04 18:11:03', 0),
(5, 'Woman', 'da24a762b8f00307f877c193a3c33995.jpeg', '2018-06-04 18:26:39', 0),
(6, 'PC', 'ea973e636843912f292a9e632ce036ec.jpeg', '2018-06-04 18:28:35', 0),
(7, 'Girl', '9e07abd007d1e880c399ebf79bf4c261.jpeg', '2018-06-04 18:29:25', 0),
(8, ' sneakers', '96aa3b33784484222f6d39a1184c52d9.jpeg', '2018-06-04 18:34:46', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
