-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2016 às 17:36
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_testetopicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`) VALUES
('admin@admin.com.br', 'admin123', 'Administrador'),
('morais_100@hotmail.com', '123456', 'Gleyson Morais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `facebook_user`
--

CREATE TABLE IF NOT EXISTS `facebook_user` (
  `facebook_id` bigint(20) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`facebook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `app` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `so` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `validation` int(2) NOT NULL,
  `authorEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `authorName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `files`
--

INSERT INTO `files` (`id`, `titulo`, `descricao`, `app`, `so`, `image`, `validation`, `authorEmail`, `authorName`) VALUES
(4, 'adsfdsa', 'gfdgfds', '', '', 'files/4477171_europeu.jpg', 0, '', ''),
(5, 'adsfdsa', 'gfdgfds', '', '', 'files/ben-10-1-600x300.jpg', 0, '', ''),
(6, 'adsfdsa', 'gfdgfds', '', '', 'files/cerebro-600.jpg', 1, '', ''),
(7, 'adsfdsa', 'gfdgfds', '', '', 'files/copy_and_paste.jpg', 0, '', ''),
(8, 'adsfdsa', 'gfdgfds', '', '', 'files/CRV-Cursos-2016-2sem.jpg', 0, '', ''),
(9, 'adsfdsa', 'gfdgfds', '', '', 'files/CRV-Cursos-Radiologia-Thumbsite-600x300.jpg', 0, '', ''),
(10, 'adsfdsa', 'gfdgfds', '', '', 'files/CRV-Discoespondilite-Site-Thumb-600x300.jpg', 0, '', ''),
(11, 'adsfdsa', 'gfdgfds', '', '', 'files/CRV-Evento-Thumb-FB-01-600x300.jpg', 0, '', ''),
(12, 'adsfdsa', 'gfdgfds', '', '', 'files/cuide-da-sua-imagem.png', 0, '', ''),
(13, 'adsfdsa', 'gfdgfds', '', '', 'files/foto-pronta-67.jpg', 0, '', ''),
(14, 'adsfdsa', 'gfdgfds', '', '', 'files/gold_catanduva_fachada.jpg', 1, '', ''),
(15, 'adsfdsa', 'gfdgfds', '', '', 'files/gold_rioclaro_fachada.jpg', 1, '', ''),
(16, 'adsfdsa', 'gfdgfds', '', '', 'files/imagem.jpg', 2, '', ''),
(17, 'adsfdsa', 'gfdgfds', '', '', 'files/imagem4-600x300.jpg', 2, '', ''),
(18, 'adsfdsa', 'gfdgfds', '', '', 'files/Imagem-de-Nossa-Senhora-Aparecida-Nova1.jpg', 1, '', ''),
(19, 'adsfdsa', 'gfdgfds', '', '', 'files/Imagem-peregrina-de-Nossa-Senhora-Aparecida-vai-percorrer-o-Brasil-em-2017-600x300.jpg', 1, '', ''),
(20, 'adsfdsa', 'gfdgfds', '', '', 'files/AutoImagem-para-gerar-clientes-600x300.jpg', 1, '', ''),
(21, 'adsfdsa', 'gfdgfds', '', '', 'files/kanokon-750x599.jpg', 1, '', ''),
(22, 'adsfdsa', 'gfdgfds', '', '', 'files/menor-imagem-colorida.jpg', 1, '', ''),
(23, 'adsfdsa', 'gfdgfds', '', '', 'files/Pode-parecer-a-imagem-de-um-homem-mas.jpg', 1, '', ''),
(24, 'adsfdsa', 'gfdgfds', '', '', 'files/programa-imagem-som.jpg', 1, '', ''),
(26, 'adsfdsa', 'gfdgfds', '', '', 'files/602x0_1439644246.jpg', 1, '', ''),
(29, 'Imagem de um Koala', 'DescriÃ§Ã£o Teste', 'App teste', 'Android', 'files/Koala.jpg', 1, '', ''),
(30, 'Imagem teste 3', 'teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste ', 'Web', 'Android', 'files/Penguins.jpg', 0, '', ''),
(31, 'Imagem de Flores', 'Flores flores', 'Web', 'Android', 'files/Tulips.jpg', 0, '', ''),
(32, 'aaa', 'ssa', 'aa', 'Android', 'files/Lighthouse.jpg', 0, '', ''),
(33, 'hhh', 'hhh', 'hhh', 'Android', 'files/Desert.jpg', 2, 'aaa@aaa.com.br', 'aaa'),
(34, 'jjj', 'jjj', 'jjj', 'IOS', 'files/Chrysanthemum.jpg', 1, 'aaa@aaa.com.br', 'aaa'),
(35, 'kkk', 'kkk', 'kkk', 'Android', 'files/Tulips.jpg', 1, 'aaa@aaa.com.br', 'aaa'),
(36, 'yyy', 'yyy', 'yyy', 'Android', 'files/Desert.jpg', 1, 'bbb@bbb.com.br', 'bbb'),
(37, 'vvv', 'vvv', 'vvv', 'Android', 'files/Hydrangeas.jpg', 0, 'bbb@bbb.com.br', 'bbb'),
(38, 'fff', 'fff', 'fff', 'IOS', 'files/Jellyfish.jpg', 1, 'aaa@aaa.com.br', 'aaa'),
(39, 'ded', 'e3sse', 'ed', 'Android', 'files/Lighthouse.jpg', 0, 'aaa@aaa.com.br', 'aaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `id`) VALUES
('aaa@aaa.com.br', 'aaa', 'aaa', 2),
('bbb@bbb.com.br', 'bbb', 'bbb', 2),
('ccc@ccc.com.br', 'ccc', 'ccc', 2),
('ddd@ddd.com.br', 'ddd', 'ddd', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
