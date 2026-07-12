-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: bdprojetosenac
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbcadastronovousuario`
--

DROP TABLE IF EXISTS `tbcadastronovousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbcadastronovousuario` (
  `id_tbcadastronovousuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCompleto` varchar(50) DEFAULT NULL,
  `numeroRegistro` int(7) DEFAULT NULL,
  `nivelPermisao` varchar(20) DEFAULT NULL,
  `nomeUsuario` varchar(20) DEFAULT NULL,
  `senhaAcesso` varchar(50) DEFAULT NULL,
  `usuarioAlteracao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tbcadastronovousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcadastronovousuario`
--

LOCK TABLES `tbcadastronovousuario` WRITE;
/*!40000 ALTER TABLE `tbcadastronovousuario` DISABLE KEYS */;
INSERT INTO `tbcadastronovousuario` VALUES (243,'bruno henrique',1,'adm','cabrera','Sophia2013@',NULL),(244,'rafael inacio',2,'Usuario Comum','rafael','Sophia2013@',NULL),(245,'bruno henrique cabrera',3,'adm','bruno','123',NULL),(246,'adm adm',4,'adm','adm','123',NULL);
/*!40000 ALTER TABLE `tbcadastronovousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbcadastropeca`
--

DROP TABLE IF EXISTS `tbcadastropeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbcadastropeca` (
  `id_tdcadastropeca` int(11) NOT NULL AUTO_INCREMENT,
  `codigoproduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(20) DEFAULT NULL,
  `fabricanteProduto` varchar(20) DEFAULT NULL,
  `variavelproduto` int(11) DEFAULT NULL,
  `familiaproduto` varchar(20) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `categoriaproduto` varchar(20) DEFAULT NULL,
  `preco` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_tdcadastropeca`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcadastropeca`
--

LOCK TABLES `tbcadastropeca` WRITE;
/*!40000 ALTER TABLE `tbcadastropeca` DISABLE KEYS */;
INSERT INTO `tbcadastropeca` VALUES (107,1,'papel','PAPEL LTDA',NULL,NULL,NULL,NULL,NULL),(108,2,'pano','papel',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbcadastropeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbentradaestoque`
--

DROP TABLE IF EXISTS `tbentradaestoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbentradaestoque` (
  `id_tbentradaestoque` int(11) NOT NULL AUTO_INCREMENT,
  `dataEntradaProduto` date DEFAULT NULL,
  `codigoProduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(20) DEFAULT NULL,
  `quantidadeProduto` int(11) DEFAULT NULL,
  `nFProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tbentradaestoque`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbentradaestoque`
--

LOCK TABLES `tbentradaestoque` WRITE;
/*!40000 ALTER TABLE `tbentradaestoque` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbentradaestoque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbordemservico`
--

DROP TABLE IF EXISTS `tbordemservico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbordemservico` (
  `int_tbordemservico` int(11) NOT NULL AUTO_INCREMENT,
  `codigoOS` int(11) DEFAULT NULL,
  `codigoProduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(20) DEFAULT NULL,
  `quantidadeProduzida` int(11) DEFAULT NULL,
  `idTabelaEstoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`int_tbordemservico`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbordemservico`
--

LOCK TABLES `tbordemservico` WRITE;
/*!40000 ALTER TABLE `tbordemservico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbordemservico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbsaidaestoque`
--

DROP TABLE IF EXISTS `tbsaidaestoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbsaidaestoque` (
  `id_tbsaidaestoque` int(11) NOT NULL AUTO_INCREMENT,
  `dataSaida` date DEFAULT NULL,
  `codigoPeca` int(11) DEFAULT NULL,
  `nomePeca` varchar(20) DEFAULT NULL,
  `quantidaPeca` int(11) DEFAULT NULL,
  `numeroNf` int(11) DEFAULT NULL,
  `cpfPeca` int(11) DEFAULT NULL,
  `numeroOs` int(11) DEFAULT NULL,
  `situacaoPeca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tbsaidaestoque`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbsaidaestoque`
--

LOCK TABLES `tbsaidaestoque` WRITE;
/*!40000 ALTER TABLE `tbsaidaestoque` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbsaidaestoque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bdprojetosenac'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-12 15:29:59
