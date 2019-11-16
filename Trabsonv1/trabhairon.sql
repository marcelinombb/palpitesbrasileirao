-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2019 às 01:40
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabhairon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `palpites`
--

CREATE TABLE `palpites` (
  `id_palpite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `palpite` float NOT NULL,
  `acertos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `palpites`
--

INSERT INTO `palpites` (`id_palpite`, `id_user`, `palpite`, `acertos`) VALUES
(30, 2, 61.3025, 2),
(31, 2, 56.6039, 1),
(32, 2, 9.59166, 6),
(33, 2, 7.48331, 9),
(34, 2, 7.48331, 9),
(35, 2, 7.48331, 9),
(36, 2, 7.48331, 9),
(37, 2, 7.48331, 9),
(38, 2, 4.47214, 0),
(40, 2, 4.47214, 1),
(41, 2, 1.41421, 18),
(43, 4, 0, 20),
(44, 2, 0, 20),
(45, 6, 0, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

CREATE TABLE `times` (
  `id_time` int(11) NOT NULL,
  `Posicao_BR` int(2) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`id_time`, `Posicao_BR`, `nome`, `logo`) VALUES
(1, 1, 'Flamengo', 'http://ssl.gstatic.com/onebox/media/sports/logos/orE554NToSkH6nuwofe7Yg_48x48.png'),
(2, 2, 'Palmeiras', '//ssl.gstatic.com/onebox/media/sports/logos/7spurne-xDt2p6C0imYYNA_48x48.png'),
(3, 3, 'Santos', '//ssl.gstatic.com/onebox/media/sports/logos/VHdNOT6wWOw_vJ38GMjMzg_48x48.png'),
(4, 5, 'Sao_Paulo', '//ssl.gstatic.com/onebox/media/sports/logos/4w2Z97Hf9CSOqICK3a8AxQ_48x48.png'),
(5, 4, 'Gremio', '//ssl.gstatic.com/onebox/media/sports/logos/Ku-73v_TW9kpex-IEGb0ZA_48x48.png'),
(6, 8, 'Corinthians', '//ssl.gstatic.com/onebox/media/sports/logos/tCMSqgXVHROpdCpQhzTo1g_48x48.png'),
(7, 6, 'Athletico-PR', '//ssl.gstatic.com/onebox/media/sports/logos/wDMLzBXmGU4qz1lXUnBQvQ_48x48.png'),
(8, 7, 'Internacional', '//ssl.gstatic.com/onebox/media/sports/logos/OWVFKuHrQuf4q2Wk0hEmSA_48x48.png'),
(9, 11, 'Goias', '//ssl.gstatic.com/onebox/media/sports/logos/T2Lg4VLRDin0YC9h5He3Eg_48x48.png'),
(10, 9, 'Bahia', '//ssl.gstatic.com/onebox/media/sports/logos/nIdbR6qIUDyZUBO9vojSPw_48x48.png'),
(11, 12, 'Atletico-MG', '//ssl.gstatic.com/onebox/media/sports/logos/q9fhEsgpuyRq58OgmSndcQ_48x48.png'),
(12, 10, 'Vasco_da_Gama', '//ssl.gstatic.com/onebox/media/sports/logos/gsztcvqa9uLPU546_tDm0g_48x48.png'),
(13, 13, 'Fortaleza', '//ssl.gstatic.com/onebox/media/sports/logos/nwmOj81FjK-pmss5tX650Q_48x48.png'),
(14, 14, 'Botafogo', '//ssl.gstatic.com/onebox/media/sports/logos/KLDWYp-H8CAOT9H_JgizRg_48x48.png'),
(15, 15, 'Ceara', '//ssl.gstatic.com/onebox/media/sports/logos/mSl0cz3i2t8uv4zcprobOg_48x48.png'),
(16, 16, 'Cruzeiro', '//ssl.gstatic.com/onebox/media/sports/logos/cfkLbPGt7TD_FSDotajcbA_48x48.png'),
(17, 17, 'Fluminense', '//ssl.gstatic.com/onebox/media/sports/logos/fCMxMMDF2AZPU7LzYKSlig_48x48.png'),
(18, 18, 'CSA', '//ssl.gstatic.com/onebox/media/sports/logos/1TftGbZs_8FcYQUdRZC2Sw_48x48.png'),
(19, 20, 'Chapecoense', '//ssl.gstatic.com/onebox/media/sports/logos/cZ4ga5Fdqe3Pd-dEcpjUmg_48x48.png'),
(20, 21, 'Avai', '//ssl.gstatic.com/onebox/media/sports/logos/9cwCmoBXGaPJ_Q5cgUeocg_48x48.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `nome`, `email`, `senha`, `type`) VALUES
(2, 'Marcelino', 'marcelin@email.com', '123456', 1),
(4, 'Dede', 'andre@email.com', '123456', 1),
(6, 'coe gabriel', 'a@a', '123', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `palpites`
--
ALTER TABLE `palpites`
  ADD PRIMARY KEY (`id_palpite`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id_time`),
  ADD UNIQUE KEY `Posicao_BR` (`Posicao_BR`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `palpites`
--
ALTER TABLE `palpites`
  MODIFY `id_palpite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `times`
--
ALTER TABLE `times`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `palpites`
--
ALTER TABLE `palpites`
  ADD CONSTRAINT `palpites_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
