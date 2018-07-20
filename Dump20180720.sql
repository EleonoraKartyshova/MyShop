-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: kartyshova_db
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu18.04.1

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_users_id_fk` (`user_id`),
  CONSTRAINT `orders_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'2018-07-18 12:01:56','2018-07-18 12:01:56'),(2,1,'2018-07-18 12:08:07','2018-07-18 12:08:07'),(3,1,'2018-07-18 12:08:08','2018-07-18 12:08:08'),(4,1,'2018-07-18 12:08:08','2018-07-18 12:08:08'),(5,1,'2018-07-18 12:08:09','2018-07-18 12:08:09'),(6,1,'2018-07-18 12:22:20','2018-07-18 12:22:20'),(7,1,'2018-07-18 12:24:42','2018-07-18 12:24:42'),(8,1,'2018-07-18 12:25:18','2018-07-18 12:25:18'),(9,1,'2018-07-18 12:25:39','2018-07-18 12:25:39'),(10,1,'2018-07-18 12:26:26','2018-07-18 12:26:26'),(11,1,'2018-07-18 12:27:02','2018-07-18 12:27:02'),(12,1,'2018-07-18 12:28:24','2018-07-18 12:28:24'),(13,1,'2018-07-18 12:28:50','2018-07-18 12:28:50'),(14,1,'2018-07-18 12:29:42','2018-07-18 12:29:42'),(15,1,'2018-07-18 12:30:08','2018-07-18 12:30:08'),(16,1,'2018-07-18 12:31:43','2018-07-18 12:31:43'),(17,1,'2018-07-18 12:31:54','2018-07-18 12:31:54'),(18,1,'2018-07-18 12:31:55','2018-07-18 12:31:55'),(19,1,'2018-07-18 12:32:13','2018-07-18 12:32:13'),(20,1,'2018-07-18 12:32:24','2018-07-18 12:32:24'),(21,1,'2018-07-18 12:32:50','2018-07-18 12:32:50'),(22,1,'2018-07-18 12:33:21','2018-07-18 12:33:21'),(23,1,'2018-07-18 12:33:53','2018-07-18 12:33:53'),(24,1,'2018-07-18 12:38:35','2018-07-18 12:38:35'),(25,1,'2018-07-19 11:26:11','2018-07-19 11:26:11'),(26,1,'2018-07-19 11:26:29','2018-07-19 11:26:29'),(27,1,'2018-07-19 11:26:56','2018-07-19 11:26:56'),(28,1,'2018-07-19 11:31:27','2018-07-19 11:31:27'),(29,1,'2018-07-20 13:08:30','2018-07-20 13:08:30'),(30,1,'2018-07-20 13:09:00','2018-07-20 13:09:00'),(31,1,'2018-07-20 13:25:08','2018-07-20 13:25:08'),(32,1,'2018-07-20 17:02:57','2018-07-20 17:02:57');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_products_orders_id_fk` (`order_id`),
  KEY `orders_products_products_id_fk` (`product_id`),
  CONSTRAINT `orders_products_orders_id_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `orders_products_products_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_products`
--

LOCK TABLES `orders_products` WRITE;
/*!40000 ALTER TABLE `orders_products` DISABLE KEYS */;
INSERT INTO `orders_products` VALUES (1,28,1,'2018-07-19 11:31:27','2018-07-19 11:31:27'),(2,28,2,'2018-07-19 11:31:27','2018-07-19 11:31:27'),(3,29,1,'2018-07-20 13:08:30','2018-07-20 13:08:30'),(4,29,2,'2018-07-20 13:08:30','2018-07-20 13:08:30'),(5,30,1,'2018-07-20 13:09:00','2018-07-20 13:09:00'),(6,30,2,'2018-07-20 13:09:00','2018-07-20 13:09:00'),(7,32,4,'2018-07-20 17:02:57','2018-07-20 17:02:57'),(8,32,5,'2018-07-20 17:02:57','2018-07-20 17:02:57'),(9,32,2,'2018-07-20 17:02:57','2018-07-20 17:02:57');
/*!40000 ALTER TABLE `orders_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity_in_stock` int(11) DEFAULT NULL,
  `style` varchar(15) NOT NULL,
  `features` varchar(15) NOT NULL,
  `fabric_material` varchar(15) NOT NULL,
  `length` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `manufacturer_country` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Product 1','/images/sherrihill-51816-redprint-2-1400x1500.jpg',18000,10,'fluffy','open back','satin','floor','white, red','USA','In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.','2018-07-16 12:24:49','2018-07-16 12:24:49'),(2,'Product 2','/images/sherrihill-51816-redprint-2-1400x1500.jpg',20500,5,'fluffy','open back','satin','floor','white, red','USA','In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.','2018-07-16 12:30:11','2018-07-16 12:30:11'),(3,'Product 3','/images/sherrihill-51816-redprint-2-1400x1500.jpg',14000,8,'fluffy','open back','satin','floor','white, red','USA','In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.','2018-07-16 12:30:11','2018-07-16 12:30:11'),(4,'Product 4','/images/sherrihill-51816-redprint-2-1400x1500.jpg',17500,3,'fluffy','open back','satin','floor','white, red','USA','In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.','2018-07-16 12:30:11','2018-07-16 12:30:11'),(5,'Product 5','/images/sherrihill-51816-redprint-2-1400x1500.jpg',16000,7,'fluffy','open back','satin','floor','white, red','USA','In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.','2018-07-16 12:30:11','2018-07-16 12:30:11'),(6,'Product 6','/images/sherrihill-51816-redprint-2-1400x1500.jpg',12000,6,'fluffy','open back','satin','floor','white, red','USA','In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.','2018-07-16 12:30:11','2018-07-16 12:30:11');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `passw` varchar(15) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'el@el','1234',639330120,1,'2018-07-16 10:49:32','2018-07-16 10:49:32'),(2,'us@us','1234',501234567,0,'2018-07-16 10:51:16','2018-07-16 10:51:16'),(3,'usr@usr','1234',639998877,0,'2018-07-19 13:18:41','2018-07-19 13:18:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_products_reviews`
--

DROP TABLE IF EXISTS `users_products_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_products_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text_review` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `users_products_reviews_products_id_fk` (`product_id`),
  KEY `users_products_reviews_users_id_fk` (`user_id`),
  CONSTRAINT `users_products_reviews_products_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `users_products_reviews_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_products_reviews`
--

LOCK TABLES `users_products_reviews` WRITE;
/*!40000 ALTER TABLE `users_products_reviews` DISABLE KEYS */;
INSERT INTO `users_products_reviews` VALUES (1,1,1,'This dress is awesome!','2018-07-20 15:37:15','2018-07-20 15:37:15'),(2,2,1,'I like it, very good material!','2018-07-20 15:38:39','2018-07-20 15:38:39'),(3,3,2,'Quality is good','2018-07-20 15:39:31','2018-07-20 15:39:31'),(4,4,3,'It is amazing!','2018-07-20 15:40:04','2018-07-20 15:40:04'),(5,5,3,'Super!))','2018-07-20 15:40:55','2018-07-20 15:40:55'),(6,6,2,'The dress really sits well.','2018-07-20 15:42:02','2018-07-20 15:42:02'),(7,1,3,'Good quality, very comfortable dress.','2018-07-20 15:43:28','2018-07-20 15:43:28');
/*!40000 ALTER TABLE `users_products_reviews` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-20 17:10:52
