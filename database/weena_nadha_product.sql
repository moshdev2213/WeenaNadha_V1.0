-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: weena_nadha
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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `product_ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `design` varchar(50) DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `category_ID` int DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `deal` varchar(45) DEFAULT NULL,
  `mrp` decimal(20,2) DEFAULT NULL,
  `shipping` tinyint(1) DEFAULT NULL,
  `warranty` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`product_ID`),
  KEY `product_FK` (`category_ID`),
  CONSTRAINT `product_FK` FOREIGN KEY (`category_ID`) REFERENCES `category` (`category_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',550,1,'white',200,35000.00,'HOT',50000.00,1,'3m'),(2,'Electric Guitar','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',550,3,'blue',100,2500.00,'FLASH',50000.00,0,'6m'),(3,'Electric Piano','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',52,5,'yellow',46,15000.00,'LIMITED',50000.00,1,'1y'),(4,' Tabla','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',32,1,'green',32,2500.00,'PREMIUM',50000.00,1,'3m'),(5,'Electric ','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',43,1,'maroon',4,28000.00,'HOT',50000.00,1,'3m'),(6,'Piano','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',76,1,'puruple',5,23000.00,'FLASH',50000.00,0,'1y'),(7,'Saxaphone','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',89123,1,'red',55,21000.00,'PREMIUM',30000.00,0,'1y'),(8,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',321,1,'brown',7,29000.00,'FLASH',40000.00,0,'1y'),(9,'Electric Piano','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',547,1,'white',9,55000.00,'HOT',30000.00,1,'3m'),(10,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',9,1,'maroon',88,45500.00,'HOT',700000.00,1,'6m'),(11,' Tabla','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',424,1,'white',200,25300.00,'FLASH',80000.00,0,'1y'),(12,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',7,1,'white',666,25400.00,'LIMITED',90000.00,1,'3m'),(13,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',9,1,'yellow',6,2500.00,'PREMIUM',23000.00,0,'6m'),(14,'Electric Piano','This top-of-the-line custom Oboe is designed with a slightly more narrowThis top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',23,1,'puruple',32,25060.00,'HOT',120000.00,1,'6m'),(15,' Tabla','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',7,1,'maroon',44,25005.00,'PREMIUM',14000.00,1,'6m'),(16,' Tabla','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',9,1,'yellow',2,24400.00,'PREMIUM',560000.00,0,'6m'),(17,'Electric Piano','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',34,1,'yellow',5,12500.00,'HOT',44000.00,0,'6m'),(18,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',8,1,'puruple',34,25100.00,'LIMITED',770000.00,0,'3m'),(19,' Tabla','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',24,1,'white',22,15000.00,'HOT',60000.00,1,'6m'),(20,'Electric Piano','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',76,1,'puruple',32,24400.00,'PREMIUM',20000.00,1,'6m'),(21,'Electric ','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',23,1,'white',6,25060.00,'FLASH',90000.00,1,'6m'),(22,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',7,1,'blue',6,24400.00,'PREMIUM',40000.00,0,'6m'),(23,' Tabla','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',89,1,'puruple',32,25060.00,'FLASH',20000.00,0,'6m'),(24,'Electric ','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',46,1,'white',12,15000.00,'FLASH',10000.00,0,'6m'),(25,'Electric ','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',550,1,'puruple',44,25060.00,'LIMITED',60000.00,1,'6m'),(26,'Electric Piano','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',8,1,'blue',12,24400.00,'PREMIUM',889899.00,1,'6m'),(27,'Electric keyboard','This top-of-the-line custom Oboe is designed with a slightly more narrow','FiberPlastic',4,1,'maroon',78,15000.00,'HOT',50000.00,1,'6m');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-22 22:51:45
