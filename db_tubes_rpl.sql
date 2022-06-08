-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tubes_rpl
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aksi_otomatis`
--

DROP TABLE IF EXISTS `aksi_otomatis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aksi_otomatis` (
  `id_aksi_otomatis` int NOT NULL AUTO_INCREMENT,
  `nama_aksi` varchar(20) NOT NULL,
  PRIMARY KEY (`id_aksi_otomatis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aksi_otomatis`
--

LOCK TABLES `aksi_otomatis` WRITE;
/*!40000 ALTER TABLE `aksi_otomatis` DISABLE KEYS */;
/*!40000 ALTER TABLE `aksi_otomatis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kunci_pintu`
--

DROP TABLE IF EXISTS `kunci_pintu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kunci_pintu` (
  `id_kunci_pintu` int NOT NULL AUTO_INCREMENT,
  `nama_kunci_pintu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kunci_pintu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kunci_pintu`
--

LOCK TABLES `kunci_pintu` WRITE;
/*!40000 ALTER TABLE `kunci_pintu` DISABLE KEYS */;
/*!40000 ALTER TABLE `kunci_pintu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_aksi_otomatis`
--

DROP TABLE IF EXISTS `log_aksi_otomatis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_aksi_otomatis` (
  `id_log_aksi` int NOT NULL AUTO_INCREMENT,
  `id_aksi_otomatis` int NOT NULL,
  `id_kunci_pintu` int NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_log_aksi`),
  KEY `fk_aksi_otomatis_has_kunci_pintu_kunci_pintu1_idx` (`id_kunci_pintu`),
  KEY `fk_aksi_otomatis_has_kunci_pintu_aksi_otomatis1_idx` (`id_aksi_otomatis`),
  CONSTRAINT `fk_aksi_otomatis_has_kunci_pintu_aksi_otomatis1` FOREIGN KEY (`id_aksi_otomatis`) REFERENCES `aksi_otomatis` (`id_aksi_otomatis`),
  CONSTRAINT `fk_aksi_otomatis_has_kunci_pintu_kunci_pintu1` FOREIGN KEY (`id_kunci_pintu`) REFERENCES `kunci_pintu` (`id_kunci_pintu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_aksi_otomatis`
--

LOCK TABLES `log_aksi_otomatis` WRITE;
/*!40000 ALTER TABLE `log_aksi_otomatis` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_aksi_otomatis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_kunci_pintu`
--

DROP TABLE IF EXISTS `log_kunci_pintu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_kunci_pintu` (
  `id_log_kunci` int NOT NULL AUTO_INCREMENT,
  `id_pengguna` varchar(20) NOT NULL,
  `id_kunci_pintu` int NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_log_kunci`),
  KEY `fk_pengguna_has_kunci_pintu_kunci_pintu1_idx` (`id_kunci_pintu`),
  KEY `fk_pengguna_has_kunci_pintu_pengguna_idx` (`id_pengguna`),
  CONSTRAINT `fk_pengguna_has_kunci_pintu_kunci_pintu1` FOREIGN KEY (`id_kunci_pintu`) REFERENCES `kunci_pintu` (`id_kunci_pintu`),
  CONSTRAINT `fk_pengguna_has_kunci_pintu_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_kunci_pintu`
--

LOCK TABLES `log_kunci_pintu` WRITE;
/*!40000 ALTER TABLE `log_kunci_pintu` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_kunci_pintu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengguna` (
  `id_pengguna` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-24 14:10:12
