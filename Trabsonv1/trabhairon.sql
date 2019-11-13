-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2019 às 14:02
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabhairon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `palpites`
--

CREATE TABLE `palpites` (
  `id_palpite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `palpite` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `palpites`
--

INSERT INTO `palpites` (`id_palpite`, `id_user`, `palpite`) VALUES
(1, 2, 20),
(12, 4, 61.3025),
(13, 4, 65.7571),
(14, 4, 61.3025);

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

CREATE TABLE `times` (
  `id_time` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`id_time`, `nome`, `logo`) VALUES
(1, 'Flamengo', 'http://ssl.gstatic.com/onebox/media/sports/logos/orE554NToSkH6nuwofe7Yg_48x48.png'),
(2, 'Palmeiras', '//ssl.gstatic.com/onebox/media/sports/logos/7spurne-xDt2p6C0imYYNA_48x48.png'),
(3, 'Santos', '//ssl.gstatic.com/onebox/media/sports/logos/VHdNOT6wWOw_vJ38GMjMzg_48x48.png'),
(4, 'Sao_Paulo', '//ssl.gstatic.com/onebox/media/sports/logos/4w2Z97Hf9CSOqICK3a8AxQ_48x48.png'),
(5, 'Gremio', '//ssl.gstatic.com/onebox/media/sports/logos/Ku-73v_TW9kpex-IEGb0ZA_48x48.png'),
(6, 'Corinthians', '//ssl.gstatic.com/onebox/media/sports/logos/tCMSqgXVHROpdCpQhzTo1g_48x48.png'),
(7, 'Athletico-PR', '//ssl.gstatic.com/onebox/media/sports/logos/wDMLzBXmGU4qz1lXUnBQvQ_48x48.png'),
(8, 'Internacional', '//ssl.gstatic.com/onebox/media/sports/logos/OWVFKuHrQuf4q2Wk0hEmSA_48x48.png'),
(9, 'Goias', '//ssl.gstatic.com/onebox/media/sports/logos/T2Lg4VLRDin0YC9h5He3Eg_48x48.png'),
(10, 'Bahia', '//ssl.gstatic.com/onebox/media/sports/logos/nIdbR6qIUDyZUBO9vojSPw_48x48.png'),
(11, 'Atletico-MG', '//ssl.gstatic.com/onebox/media/sports/logos/q9fhEsgpuyRq58OgmSndcQ_48x48.png'),
(12, 'Vasco_da_Gama', '//ssl.gstatic.com/onebox/media/sports/logos/gsztcvqa9uLPU546_tDm0g_48x48.png'),
(13, 'Fortaleza', '//ssl.gstatic.com/onebox/media/sports/logos/nwmOj81FjK-pmss5tX650Q_48x48.png'),
(14, 'Botafogo', '//ssl.gstatic.com/onebox/media/sports/logos/KLDWYp-H8CAOT9H_JgizRg_48x48.png'),
(15, 'Ceara', '//ssl.gstatic.com/onebox/media/sports/logos/mSl0cz3i2t8uv4zcprobOg_48x48.png'),
(16, 'Cruzeiro', '//ssl.gstatic.com/onebox/media/sports/logos/cfkLbPGt7TD_FSDotajcbA_48x48.png'),
(17, 'Fluminense', '//ssl.gstatic.com/onebox/media/sports/logos/fCMxMMDF2AZPU7LzYKSlig_48x48.png'),
(18, 'CSA', '//ssl.gstatic.com/onebox/media/sports/logos/1TftGbZs_8FcYQUdRZC2Sw_48x48.png'),
(19, 'Chapecoense', '//ssl.gstatic.com/onebox/media/sports/logos/cZ4ga5Fdqe3Pd-dEcpjUmg_48x48.png'),
(20, 'Avai', '//ssl.gstatic.com/onebox/media/sports/logos/9cwCmoBXGaPJ_Q5cgUeocg_48x48.png');

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
(4, 'Dede', 'andre@email.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `palpites`
--
ALTER TABLE `palpites`
  ADD PRIMARY KEY (`id_palpite`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id_time`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `palpites`
--
ALTER TABLE `palpites`
  MODIFY `id_palpite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
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
