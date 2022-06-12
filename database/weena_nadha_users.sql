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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `useremail` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone_no` int DEFAULT NULL,
  `address_ID` int DEFAULT NULL,
  `image` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`useremail`),
  KEY `address_FK` (`address_ID`),
  CONSTRAINT `address_FK` FOREIGN KEY (`address_ID`) REFERENCES `address` (`address_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('alpa@gmail.com','Q2q34%$%','asun kalpa',781121121,3,'IMG/6per.jpg'),('bhanuka@gmail.com','#$333365','bhanuka',750332231,3,'IMG/7per.jpg'),('daminduuu@gmail.com','!@GrRGRtt4','daminduuu',760332231,4,'IMG/4per.jfif'),('isuru@gmail.com','#$hHff65','Isuu Suba',712258021,1,'IMG/1per.jpg'),('kalana@gmail.com','T435t%#$','Kalana udith',751872281,4,'IMG/2per.jpg'),('rafi@gmail.com','#$@treter','rafi',740332231,3,'IMG/8.jpg'),('rash@gmail.com','Wnb66&*%#','Rash nayake',760332231,2,'IMG/11.jpeg'),('shabeeer@gmail.com','@#$%^^eter','shabeer',760333223,2,'IMG/10.jfif'),('shans@gmail.com','Aa434$#','shan seiris',751514569,1,'IMG/5per.png'),('vihan@gmail.com','#$hHhgfff65','vihan',760399999,5,'IMG/7.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-22 22:51:47
