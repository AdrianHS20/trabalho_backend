-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_catalogo_3infob
DROP DATABASE IF EXISTS `db_catalogo_3infob`;
CREATE DATABASE IF NOT EXISTS `db_catalogo_3infob` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `db_catalogo_3infob`;

-- Copiando estrutura para tabela db_catalogo_3infob.eventos_esportivos
DROP TABLE IF EXISTS `eventos_esportivos`;
CREATE TABLE IF NOT EXISTS `eventos_esportivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Esporte` varchar(45) NOT NULL,
  `Dataa` varchar(50) NOT NULL DEFAULT '',
  `Local` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela db_catalogo_3infob.eventos_esportivos: ~0 rows (aproximadamente)
INSERT INTO `eventos_esportivos` (`id`, `Nome`, `Esporte`, `Dataa`, `Local`) VALUES
	(29, 'JEMG', 'volei', 'dia 28 de dezembro de 2023', 'instituto federal');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
