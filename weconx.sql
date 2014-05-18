CREATE DATABASE  IF NOT EXISTS `kpadb_weconx` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kpadb_weconx`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: kpadb_weconx
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `kpadb_images`
--

DROP TABLE IF EXISTS `kpadb_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kpadb_images` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img_uuid` varchar(20) DEFAULT NULL,
  `img_filename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kpadb_images`
--

LOCK TABLES `kpadb_images` WRITE;
/*!40000 ALTER TABLE `kpadb_images` DISABLE KEYS */;
INSERT INTO `kpadb_images` VALUES (4,'2014050555041PM','lazada footer.jpg'),(5,'2014050555041PM','lazada more.png'),(6,'2014050555041PM','lazada popup signup.png'),(7,'2014050565805PM','gernetrix.jpg');
/*!40000 ALTER TABLE `kpadb_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kpadb_user_account`
--

DROP TABLE IF EXISTS `kpadb_user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kpadb_user_account` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `last_login` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kpadb_user_account`
--

LOCK TABLES `kpadb_user_account` WRITE;
/*!40000 ALTER TABLE `kpadb_user_account` DISABLE KEYS */;
INSERT INTO `kpadb_user_account` VALUES (1,'king.a','fFwkl212eSeBr4YyvJ+O1DKAqWxxsT',2,NULL);
/*!40000 ALTER TABLE `kpadb_user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kpadb_user_account_details`
--

DROP TABLE IF EXISTS `kpadb_user_account_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kpadb_user_account_details` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `mobile_number` varchar(11) DEFAULT NULL,
  `sponsor_id` int(11) DEFAULT NULL,
  `placement_number` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `date_created` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kpadb_user_account_details`
--

LOCK TABLES `kpadb_user_account_details` WRITE;
/*!40000 ALTER TABLE `kpadb_user_account_details` DISABLE KEYS */;
INSERT INTO `kpadb_user_account_details` VALUES (1,1,'king paulo','aquino','kingpauloaquino@mail.com','09173254062',0,0,2,NULL);
/*!40000 ALTER TABLE `kpadb_user_account_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kpadb_user_post_ads`
--

DROP TABLE IF EXISTS `kpadb_user_post_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kpadb_user_post_ads` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uid` int(11) DEFAULT NULL,
  `ads_title` varchar(50) DEFAULT NULL,
  `ads_price` decimal(18,2) DEFAULT NULL,
  `ads_description` varchar(500) DEFAULT NULL,
  `locations` varchar(100) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `ads_type` tinyint(4) DEFAULT NULL,
  `ads_img1` varchar(50) DEFAULT NULL,
  `ads_img2` varchar(50) DEFAULT NULL,
  `ads_img3` varchar(50) DEFAULT NULL,
  `ads_img4` varchar(50) DEFAULT NULL,
  `ads_img5` varchar(50) DEFAULT NULL,
  `ads_status` tinyint(4) DEFAULT NULL,
  `ads_created` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kpadb_user_post_ads`
--

LOCK TABLES `kpadb_user_post_ads` WRITE;
/*!40000 ALTER TABLE `kpadb_user_post_ads` DISABLE KEYS */;
INSERT INTO `kpadb_user_post_ads` VALUES (1,1,'iPhone 5 16gb',17000.00,'N/A','Olongapo','Mobile',2,'1','2','3','4','5',1,NULL),(2,1,'PTXT4WRD',360.00,'100 different number a day','Olongapo','Mobile',1,'1','2','3','4','5',1,NULL);
/*!40000 ALTER TABLE `kpadb_user_post_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_post_ads_views`
--

DROP TABLE IF EXISTS `user_post_ads_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_post_ads_views` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_id` int(11) DEFAULT NULL,
  `view_ip` varchar(20) DEFAULT NULL,
  `view_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_post_ads_views`
--

LOCK TABLES `user_post_ads_views` WRITE;
/*!40000 ALTER TABLE `user_post_ads_views` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_post_ads_views` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-06  7:31:26
