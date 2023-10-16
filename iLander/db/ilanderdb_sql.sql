-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Out-2023 às 17:52
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ilanderdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `level_emu`
--

DROP TABLE IF EXISTS `level_emu`;
CREATE TABLE IF NOT EXISTS `level_emu` (
  `id_emu` int(11) NOT NULL AUTO_INCREMENT,
  `lv_emu` int(11) NOT NULL,
  `mp_max_emu` int(11) NOT NULL,
  `user_emu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_emu`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `level_emu`
--

INSERT INTO `level_emu` (`id_emu`, `lv_emu`, `mp_max_emu`, `user_emu`) VALUES
(1, 1, 90, 'abelvb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mol_path`
--

DROP TABLE IF EXISTS `mol_path`;
CREATE TABLE IF NOT EXISTS `mol_path` (
  `mol_id` int(11) NOT NULL AUTO_INCREMENT,
  `mol_img` varchar(255) NOT NULL,
  `mol_nome` varchar(255) NOT NULL,
  `mol_user` varchar(255) NOT NULL,
  `mol_mp_earned` int(11) NOT NULL,
  `mol_mol` varchar(255) NOT NULL,
  PRIMARY KEY (`mol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mol_path`
--

INSERT INTO `mol_path` (`mol_id`, `mol_img`, `mol_nome`, `mol_user`, `mol_mp_earned`, `mol_mol`) VALUES
(1, '../static/braso_ini.png', 'hp_1', 'abelvb', 0, 'own'),
(2, '../stati/braso_ini.png', 'ponto escrito', 'abelvb', 1, 'libros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mons_tool_mt`
--

DROP TABLE IF EXISTS `mons_tool_mt`;
CREATE TABLE IF NOT EXISTS `mons_tool_mt` (
  `id_mt` int(11) NOT NULL AUTO_INCREMENT,
  `nome_mt` varchar(255) NOT NULL,
  `mps_mt` int(11) NOT NULL,
  `hps_mt` int(11) NOT NULL,
  `img_mt` varchar(255) NOT NULL,
  `user_mt` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mt`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mons_tool_mt`
--

INSERT INTO `mons_tool_mt` (`id_mt`, `nome_mt`, `mps_mt`, `hps_mt`, `img_mt`, `user_mt`) VALUES
(1, 'amon-rah', 90, 100, '../braso_ini.png', 'abelvb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profiletb`
--

DROP TABLE IF EXISTS `profiletb`;
CREATE TABLE IF NOT EXISTS `profiletb` (
  `id_tb` int(11) NOT NULL AUTO_INCREMENT,
  `img_tb` varchar(255) NOT NULL,
  `mp_gastos_tb` int(11) NOT NULL,
  `user_tb` varchar(255) NOT NULL,
  `toplevel_tb` varchar(255) NOT NULL,
  `level_tb` int(11) NOT NULL,
  PRIMARY KEY (`id_tb`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `profiletb`
--

INSERT INTO `profiletb` (`id_tb`, `img_tb`, `mp_gastos_tb`, `user_tb`, `toplevel_tb`, `level_tb`) VALUES
(1, '../static/braso_ini.png', 0, 'abelvb', '../static/braso_ini.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `skill_bodes_imp`
--

DROP TABLE IF EXISTS `skill_bodes_imp`;
CREATE TABLE IF NOT EXISTS `skill_bodes_imp` (
  `bodes_id` int(11) NOT NULL AUTO_INCREMENT,
  `bodes_nome` varchar(255) NOT NULL,
  `bodes_mp_nele` int(11) NOT NULL,
  `bodes_username` varchar(255) NOT NULL,
  `bodes_hp` int(11) NOT NULL,
  `bodes_bodes` varchar(255) NOT NULL,
  PRIMARY KEY (`bodes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `skill_bodes_imp`
--

INSERT INTO `skill_bodes_imp` (`bodes_id`, `bodes_nome`, `bodes_mp_nele`, `bodes_username`, `bodes_hp`, `bodes_bodes`) VALUES
(1, 'evo', 0, 'abelvb', 100, 'base'),
(2, 'vision', 0, 'abelvb', 100, 'derivada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
