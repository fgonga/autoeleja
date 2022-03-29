-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for autoeleja
DROP DATABASE IF EXISTS `autoeleja`;
CREATE DATABASE IF NOT EXISTS `autoeleja` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `autoeleja`;

-- Dumping structure for table autoeleja.candidato
DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naturalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mae` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.candidato: ~0 rows (approximately)
DELETE FROM `candidato`;
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;

-- Dumping structure for table autoeleja.candidatonoprocesso
DROP TABLE IF EXISTS `candidatonoprocesso`;
CREATE TABLE IF NOT EXISTS `candidatonoprocesso` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `candidato_id` bigint(20) unsigned NOT NULL,
  `processo_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `candidatonoprocesso_candidato_id_foreign` (`candidato_id`),
  KEY `candidatonoprocesso_processo_id_foreign` (`processo_id`),
  CONSTRAINT `candidatonoprocesso_candidato_id_foreign` FOREIGN KEY (`candidato_id`) REFERENCES `candidato` (`id`),
  CONSTRAINT `candidatonoprocesso_processo_id_foreign` FOREIGN KEY (`processo_id`) REFERENCES `processo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.candidatonoprocesso: ~0 rows (approximately)
DELETE FROM `candidatonoprocesso`;
/*!40000 ALTER TABLE `candidatonoprocesso` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidatonoprocesso` ENABLE KEYS */;

-- Dumping structure for table autoeleja.candidatura
DROP TABLE IF EXISTS `candidatura`;
CREATE TABLE IF NOT EXISTS `candidatura` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eleitor_id` bigint(20) unsigned NOT NULL,
  `processo_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `candidatura_eleitor_id_foreign` (`eleitor_id`),
  KEY `candidatura_processo_id_foreign` (`processo_id`),
  CONSTRAINT `candidatura_eleitor_id_foreign` FOREIGN KEY (`eleitor_id`) REFERENCES `eleitor` (`id`),
  CONSTRAINT `candidatura_processo_id_foreign` FOREIGN KEY (`processo_id`) REFERENCES `processo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.candidatura: ~0 rows (approximately)
DELETE FROM `candidatura`;
/*!40000 ALTER TABLE `candidatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidatura` ENABLE KEYS */;

-- Dumping structure for table autoeleja.eleitor
DROP TABLE IF EXISTS `eleitor`;
CREATE TABLE IF NOT EXISTS `eleitor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naturalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mae` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.eleitor: ~0 rows (approximately)
DELETE FROM `eleitor`;
/*!40000 ALTER TABLE `eleitor` DISABLE KEYS */;
/*!40000 ALTER TABLE `eleitor` ENABLE KEYS */;

-- Dumping structure for table autoeleja.processo
DROP TABLE IF EXISTS `processo`;
CREATE TABLE IF NOT EXISTS `processo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` date NOT NULL,
  `fim` date NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operador_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `processo_operador_id_foreign` (`operador_id`),
  CONSTRAINT `processo_operador_id_foreign` FOREIGN KEY (`operador_id`) REFERENCES `utilizador` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.processo: ~0 rows (approximately)
DELETE FROM `processo`;
/*!40000 ALTER TABLE `processo` DISABLE KEYS */;
/*!40000 ALTER TABLE `processo` ENABLE KEYS */;

-- Dumping structure for table autoeleja.utilizador
DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.utilizador: ~0 rows (approximately)
DELETE FROM `utilizador`;
/*!40000 ALTER TABLE `utilizador` DISABLE KEYS */;
INSERT INTO `utilizador` (`id`, `nome`, `senha`, `tipo`, `email`) VALUES
	(1, 'root', 'root', 'admin', 'root@root.com');
/*!40000 ALTER TABLE `utilizador` ENABLE KEYS */;

-- Dumping structure for table autoeleja.voto
DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `eleitor_id` bigint(20) unsigned NOT NULL,
  `processo_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voto_eleitor_id_foreign` (`eleitor_id`),
  KEY `voto_processo_id_foreign` (`processo_id`),
  CONSTRAINT `voto_eleitor_id_foreign` FOREIGN KEY (`eleitor_id`) REFERENCES `eleitor` (`id`),
  CONSTRAINT `voto_processo_id_foreign` FOREIGN KEY (`processo_id`) REFERENCES `processo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table autoeleja.voto: ~0 rows (approximately)
DELETE FROM `voto`;
/*!40000 ALTER TABLE `voto` DISABLE KEYS */;
/*!40000 ALTER TABLE `voto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
