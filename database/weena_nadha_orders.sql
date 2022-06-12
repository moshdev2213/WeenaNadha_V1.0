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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `order_ID` int NOT NULL AUTO_INCREMENT,
  `ordered_date` date DEFAULT NULL,
  `useremail` varchar(50) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `product_ID` int DEFAULT NULL,
  `payment_ID` int DEFAULT NULL,
  PRIMARY KEY (`order_ID`),
  KEY `order_FK1` (`useremail`),
  KEY `order_FK2` (`product_ID`),
  KEY `order_FK3` (`payment_ID`),
  CONSTRAINT `order_FK1` FOREIGN KEY (`useremail`) REFERENCES `users` (`useremail`),
  CONSTRAINT `order_FK2` FOREIGN KEY (`product_ID`) REFERENCES `product` (`product_ID`),
  CONSTRAINT `order_FK3` FOREIGN KEY (`payment_ID`) REFERENCES `payment` (`payment_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2022-05-18','shans@gmail.com',2,2500.00,3,1),(2,'2022-05-18','alpa@gmail.com',1,2500.00,1,3),(3,'2022-05-18','shans@gmail.com',2,2500.00,3,1),(4,'2022-05-18','alpa@gmail.com',1,2500.00,1,3),(5,'2022-05-18','shans@gmail.com',2,2500.00,3,1),(6,'2022-05-18','alpa@gmail.com',1,2500.00,1,3),(7,'2022-05-18','kalana@gmail.com',4,2500.00,2,1),(8,'2022-05-18','rash@gmail.com',6,2500.00,3,2),(9,'2022-05-18','shans@gmail.com',2,2500.00,3,4);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
