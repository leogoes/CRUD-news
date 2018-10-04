-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 04-Out-2018 às 00:48
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novasnoticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `descricao` varchar(140) NOT NULL,
  `palavras_chave` varchar(100) NOT NULL,
  `conteudo` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `slug`, `descricao`, `palavras_chave`, `conteudo`) VALUES
(14, 'Copo meio cheio ou meio vazio, por que nÃ£o bebe-lo?', 'cup', 'Quanto tempo deve permanecer a Ã¡gua dentro do copo, para se decidir sobre ser positivista ou negativista?', '#positivo, #negativo', 'DiscussÃµes acaloradas sobre o tema, tomam conta do cenÃ¡rio filÃ³sÃ³fico atual'),
(15, 'Biscoito ou bolacha?', 'biscoito, bolacha', 'Termos correlatos para descrever a mesma coisa, geram conflitos na internet', '#biscoito, #bolacha', 'DiscussÃµes acaloradas sobre o tema, tomam conta do cenÃ¡rio filÃ³sÃ³fico atual');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
