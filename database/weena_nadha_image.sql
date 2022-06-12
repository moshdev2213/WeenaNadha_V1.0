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
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(250) DEFAULT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id_idx` (`product_id`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'IMG/Keyboard/1/2.jpg',1),(2,'IMG/Keyboard/1/1.jpg',1),(3,'IMG/Keyboard/1/3.jpg',1),(6,'IMG/Keyboard/2/2.jpg',2),(7,'IMG/Keyboard/2/3.jpg',2),(8,'IMG/Keyboard/2/4.jpg',2),(11,'IMG/Keyboard/3/1.jpg',3),(12,'IMG/Keyboard/3/2.jpg',3),(13,'IMG/Keyboard/3/3.jpg',3),(16,'IMG/Keyboard/4/2.jpg',4),(17,'IMG/Keyboard/4/1.jpg',4),(18,'IMG/Keyboard/4/3.jpg',4),(21,'IMG/Keyboard/6/Satellite_4.webp',5),(22,'IMG/Keyboard/6/Satellite_5.webp',5),(23,'IMG/Keyboard/6/Satellite_6.webp',5),(25,'IMG/Keyboard/5/Satellite_8.webp',6),(26,'IMG/Keyboard/5/Satellite_9.webp',6),(27,'IMG/Keyboard/5/Satellite_10.webp',6),(28,'IMG/classical/1/1.jpg',7),(29,'IMG/classical/1/2.jpg',7),(30,'IMG/classical/1/3.jpg',7),(31,'IMG/classical/2/0.webp',8),(32,'IMG/classical/2/2.jpg',8),(33,'IMG/classical/2/3.jpg',8),(34,'IMG/ELECTRIC_GUITAR/1/2.jpg',9),(35,'IMG/ELECTRIC_GUITAR/1/1.jpg',9),(36,'IMG/ELECTRIC_GUITAR/1/3.jpg',9),(37,'IMG/ELECTRIC_GUITAR/2/5.jpg',10),(38,'IMG/ELECTRIC_GUITAR/2/2.jpg',10),(39,'IMG/ELECTRIC_GUITAR/2/3.jpg',10),(40,'IMG/ELECTRIC_GUITAR/3/4.jpg',11),(41,'IMG/ELECTRIC_GUITAR/3/2.jpg',11),(42,'IMG/ELECTRIC_GUITAR/3/3.jpg',11),(43,'IMG/ELECTRIC_GUITAR/4/4.jpg',12),(44,'IMG/ELECTRIC_GUITAR/4/2.jpg',12),(45,'IMG/ELECTRIC_GUITAR/4/1.jpg',12),(46,'IMG/ELECTRIC_GUITAR/5/4.jpg',13),(47,'IMG/ELECTRIC_GUITAR/5/2.jpg',13),(48,'IMG/ELECTRIC_GUITAR/5/1.jpg',13),(49,'IMG/ELECTRIC_GUITAR/6/4.jpg',14),(50,'IMG/ELECTRIC_GUITAR/6/1.jpg',14),(51,'IMG/ELECTRIC_GUITAR/6/5.jpg',14),(52,'IMG/flute/1/jfl710.jpg',15),(53,'IMG/flute/1/2.jpg',15),(54,'IMG/flute/1/3.jpg',15),(55,'IMG/piano/1/3.jpg',16),(56,'IMG/piano/1/1.jpg',16),(57,'IMG/piano/1/2.jpg',16),(58,'IMG/piano/2/1.jpg',17),(59,'IMG/piano/2/3.jpg',17),(60,'IMG/piano/2/2.jpg',17),(61,'IMG/piano/3/3.jpg',18),(62,'IMG/piano/3/2.jpg',18),(63,'IMG/piano/3/4.jpg',18),(64,'IMG/piano/4/1.webp',19),(65,'IMG/piano/4/2.webp',19),(66,'IMG/piano/4/3.webp',19),(67,'IMG/saxaphone/1/1.jpg',20),(68,'IMG/saxaphone/1/2.jpg',20),(69,'IMG/saxaphone/1/3.jpg',20),(70,'IMG/saxaphone/2/4.jpg',21),(71,'IMG/saxaphone/2/3.jpg',21),(72,'IMG/saxaphone/2/5.jpg',21),(73,'IMG/saxaphone/3/4.jpg',22),(74,'IMG/saxaphone/3/2.jpg',22),(75,'IMG/saxaphone/3/3.jpg',22),(76,'IMG/saxaphone/4/42.jpg',23),(77,'IMG/saxaphone/4/5.jpg',23),(78,'IMG/saxaphone/4/1.jpg',23),(79,'IMG/tabla/1/4.jpg',24),(80,'IMG/tabla/1/5.jpg',24),(81,'IMG/tabla/1/3.jpg',24),(82,'IMG/tabla/2/4.jpg',25),(83,'IMG/tabla/2/2.jpg',25),(84,'IMG/tabla/2/5.jpg',25),(85,'IMG/tabla/3/5.jpg',26),(86,'IMG/tabla/3/3.jpg',26),(87,'IMG/tabla/3/1.jpg',26),(88,'IMG/Drum/1/5.jpg',27),(89,'IMG/Drum/1/4.jpg',27),(90,'IMG/Drum/1/1.jpg',27);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-22 22:51:46
