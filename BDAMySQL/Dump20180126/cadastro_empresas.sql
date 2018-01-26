-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(45) NOT NULL,
  `nome_fantasia` varchar(45) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `ddd` int(11) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `razao_social` (`razao_social`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (19,'AZUL Linhas AÃ©reas S/A','AZUL','09.296.295/0001-60',11,'4134-9800'),(20,'Banco Itau - BBA S.A.','Banco ItaÃº','17.298.092/0001-30',11,'47556-5595'),(21,'Icarros Ltda','Icarros','03.991.201/0001-96',47,'5926-4812'),(22,'NESCAU PRODUCOES EIRELI - ME','NESCAU','09.911.270/0001-29',11,'8459-2356'),(23,'RIOT GAMES SERVICOS LTDA.','RIOT GAMES','15.409.786/0001-72',56,'8459-1545'),(24,'CCA CONSTRUCOES LTDA','CCA','05.423.002/0001-07',48,'8956-2365'),(25,'Pizzaria Master LTDA - ME','Pizzaria Master','85.295.368/0001-87',47,'3373-1026'),(26,'RABIBS DELICIAS ARABES | ELIZABET MOIZES LTDA','Rabibs','37.375.045/0001-50',95,'8459-2635'),(27,'CONTA AZUL ASSESSORIA E SERVICO LTDA','CONTA AZUL','14.793.473/0001-06',48,'9865-3248'),(28,'FACEBOOK SERVICOS ONLINE DO BRASIL LTDA.','FACEBOOK','13.347.016/0001-17',89,'4815-1623');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-26 10:25:12
