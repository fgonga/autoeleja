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


-- Dumping database structure for autaeleja
DROP DATABASE IF EXISTS `autaeleja`;
CREATE DATABASE IF NOT EXISTS `autaeleja` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `autaeleja`;

-- Dumping structure for table autaeleja.candidato_no_processo
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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table autaeleja.pessoa
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
  `codigo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verificado` tinyint(1) unsigned zerofill DEFAULT '0',
  `residencia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mae` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table autaeleja.processo
DROP TABLE IF EXISTS `processo`;
CREATE TABLE IF NOT EXISTS `processo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `inicio` date DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table autaeleja.utilizador
DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table autaeleja.voto
DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `candidato_no_processo_id` bigint(20) unsigned NOT NULL,
  `processo_id` bigint(20) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  `eleitor_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voto_candidato_no_processo_id_foreign` (`candidato_no_processo_id`),
  KEY `voto_processo_id_foreign` (`processo_id`),
  KEY `eleitor_id` (`eleitor_id`),
  CONSTRAINT `eleitor_processo_id_foreign` FOREIGN KEY (`eleitor_id`) REFERENCES `pessoa` (`id`),
  CONSTRAINT `voto_candidato_no_processo_id_foreign` FOREIGN KEY (`candidato_no_processo_id`) REFERENCES `candidato_no_processo` (`id`),
  CONSTRAINT `voto_processo_id_foreign` FOREIGN KEY (`processo_id`) REFERENCES `processo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
