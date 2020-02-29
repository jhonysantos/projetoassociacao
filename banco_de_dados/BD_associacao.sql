-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para associacao
DROP DATABASE IF EXISTS `associacao`;
CREATE DATABASE IF NOT EXISTS `associacao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `associacao`;

-- Copiando estrutura para tabela associacao.associados
DROP TABLE IF EXISTS `associados`;
CREATE TABLE IF NOT EXISTS `associados` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `endereco` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `estado` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `telefone` int(10) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `plano` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela associacao.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `atuacao` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `endereco` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `estado` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `telefone` int(10) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `senha` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
