-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: rad_project
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `2018_2019`
--

DROP TABLE IF EXISTS `2018_2019`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2018_2019` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_index` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_com` int(11) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2018_2019`
--

LOCK TABLES `2018_2019` WRITE;
/*!40000 ALTER TABLE `2018_2019` DISABLE KEYS */;
INSERT INTO `2018_2019` VALUES (1,192001,'Wijesundara',1),(2,192002,'Dilshan',2),(3,192003,'Bandra',3),(4,192004,'Jaye',3),(5,192005,'Herath',3),(6,192006,'Silva',2),(7,192007,'Basnayake',1),(8,192008,'Perera',2),(9,192009,'Nimal',1),(10,192010,'Kamal',2),(11,192011,'Bimsara',1),(12,192012,'Banuka',3),(13,192013,'Lila',2),(14,192014,'Mali',3),(15,192001,'Wijesundara',1),(16,192002,'Dilshan',2),(17,192003,'Bandra',3),(18,192004,'Jaye',3),(19,192005,'Herath',3),(20,192006,'Silva',2),(21,192007,'Basnayake',1),(22,192008,'Perera',2),(23,192009,'Nimal',1),(24,192010,'Kamal',2),(25,192011,'Bimsara',1),(26,192012,'Banuka',3),(27,192013,'Lila',2),(28,192014,'Mali',3);
/*!40000 ALTER TABLE `2018_2019` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2019_2020`
--

DROP TABLE IF EXISTS `2019_2020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2019_2020` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_index` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_com` int(11) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2019_2020`
--

LOCK TABLES `2019_2020` WRITE;
/*!40000 ALTER TABLE `2019_2020` DISABLE KEYS */;
INSERT INTO `2019_2020` VALUES (1,192001,'Wijesundara',1),(2,192002,'Dilshan',2),(3,192003,'Bandra',3),(4,192004,'Jaye',3),(5,192005,'Herath',3),(6,192006,'Silva',2),(7,192007,'Basnayake',1),(8,192008,'Perera',2),(9,192009,'Nimal',1),(10,192010,'Kamal',2),(11,192011,'Bimsara',1),(12,192012,'Banuka',3),(13,192013,'Lila',2),(14,192014,'Mali',3);
/*!40000 ALTER TABLE `2019_2020` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2020_2021`
--

DROP TABLE IF EXISTS `2020_2021`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2020_2021` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_index` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_com` int(11) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2020_2021`
--

LOCK TABLES `2020_2021` WRITE;
/*!40000 ALTER TABLE `2020_2021` DISABLE KEYS */;
INSERT INTO `2020_2021` VALUES (1,192001,'Wijesundara',1),(2,192002,'Dilshan',2),(3,192003,'Bandra',3),(4,192004,'Jaye',3),(5,192005,'Herath',3),(6,192006,'Silva',2),(7,192007,'Basnayake',1),(8,192008,'Perera',2),(9,192009,'Nimal',1),(10,192010,'Kamal',2),(11,192011,'Bimsara',1),(12,192012,'Banuka',3),(13,192013,'Lila',2),(14,192014,'Mali',3);
/*!40000 ALTER TABLE `2020_2021` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_admins`
--

DROP TABLE IF EXISTS `test_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_admins`
--

LOCK TABLES `test_admins` WRITE;
/*!40000 ALTER TABLE `test_admins` DISABLE KEYS */;
INSERT INTO `test_admins` VALUES (1,'123456','admin','First','Admin');
/*!40000 ALTER TABLE `test_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_students_tables`
--

DROP TABLE IF EXISTS `test_students_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_students_tables` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) NOT NULL,
  `table_count` int(11) NOT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_students_tables`
--

LOCK TABLES `test_students_tables` WRITE;
/*!40000 ALTER TABLE `test_students_tables` DISABLE KEYS */;
INSERT INTO `test_students_tables` VALUES (1,'2018_2019',0),(2,'2019_2020',0),(3,'2020_2021',0);
/*!40000 ALTER TABLE `test_students_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_users`
--

DROP TABLE IF EXISTS `test_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`index_number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_users`
--

LOCK TABLES `test_users` WRITE;
/*!40000 ALTER TABLE `test_users` DISABLE KEYS */;
INSERT INTO `test_users` VALUES (1,192153,'Dulakshan','Wijesundara','123456'),(2,192116,'Pubudu','Ravindika','654321');
/*!40000 ALTER TABLE `test_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-05 20:10:52
