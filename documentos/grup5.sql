-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.5.13-MariaDB-1:10.5.13+maria~focal-log - mariadb.org binary distribution
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para AutaEleja
DROP DATABASE IF EXISTS `AutaEleja`;
CREATE DATABASE IF NOT EXISTS `AutaEleja` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `AutaEleja`;

-- Copiando estrutura para tabela AutaEleja.candidato_no_processo
DROP TABLE IF EXISTS `candidato_no_processo`;
CREATE TABLE IF NOT EXISTS `candidato_no_processo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `proposta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidato_id` bigint(20) unsigned NOT NULL,
  `processo_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `candidato_no_processo_candidato_id_foreign` (`candidato_id`),
  KEY `candidato_no_processo_processo_id_foreign` (`processo_id`),
  CONSTRAINT `candidato_no_processo_candidato_id_foreign` FOREIGN KEY (`candidato_id`) REFERENCES `pessoa` (`id`),
  CONSTRAINT `candidato_no_processo_processo_id_foreign` FOREIGN KEY (`processo_id`) REFERENCES `processo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela AutaEleja.candidato_no_processo: ~0 rows (aproximadamente)
DELETE FROM `candidato_no_processo`;
/*!40000 ALTER TABLE `candidato_no_processo` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidato_no_processo` ENABLE KEYS */;

-- Copiando estrutura para tabela AutaEleja.pessoa
DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_civil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nascimento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela AutaEleja.pessoa: ~0 rows (aproximadamente)
DELETE FROM `pessoa`;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

-- Copiando estrutura para tabela AutaEleja.processo
DROP TABLE IF EXISTS `processo`;
CREATE TABLE IF NOT EXISTS `processo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `inicio` date DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela AutaEleja.processo: ~0 rows (aproximadamente)
DELETE FROM `processo`;
/*!40000 ALTER TABLE `processo` DISABLE KEYS */;
/*!40000 ALTER TABLE `processo` ENABLE KEYS */;

-- Copiando estrutura para tabela AutaEleja.utilizador
DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela AutaEleja.utilizador: ~0 rows (aproximadamente)
DELETE FROM `utilizador`;
/*!40000 ALTER TABLE `utilizador` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilizador` ENABLE KEYS */;

-- Copiando estrutura para tabela AutaEleja.voto
DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `candidato_no_processo_id` bigint(20) unsigned NOT NULL,
  `processo_id` bigint(20) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `voto_candidato_no_processo_id_foreign` (`candidato_no_processo_id`),
  KEY `voto_processo_id_foreign` (`processo_id`),
  CONSTRAINT `voto_candidato_no_processo_id_foreign` FOREIGN KEY (`candidato_no_processo_id`) REFERENCES `candidato_no_processo` (`id`),
  CONSTRAINT `voto_processo_id_foreign` FOREIGN KEY (`processo_id`) REFERENCES `processo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela AutaEleja.voto: ~0 rows (aproximadamente)
DELETE FROM `voto`;
/*!40000 ALTER TABLE `voto` DISABLE KEYS */;
/*!40000 ALTER TABLE `voto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
