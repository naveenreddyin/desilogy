-- MySQL dump 10.13  Distrib 5.7.11, for osx10.10 (x86_64)
--
-- Host: localhost    Database: desilogy
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `field_data_restaurant_address`
--

DROP TABLE IF EXISTS `field_data_restaurant_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_restaurant_address` (
  `rid` int(11) unsigned NOT NULL,
  `city` varchar(255) DEFAULT '',
  `country` varchar(255) DEFAULT '',
  `postal_code` varchar(255) DEFAULT '',
  `street` varchar(255) DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `rid` (`rid`),
  KEY `city` (`city`),
  KEY `country` (`country`),
  KEY `postal_code` (`postal_code`),
  KEY `street` (`street`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_restaurant_address`
--

LOCK TABLES `field_data_restaurant_address` WRITE;
/*!40000 ALTER TABLE `field_data_restaurant_address` DISABLE KEYS */;
INSERT INTO `field_data_restaurant_address` VALUES (1,'Oslo','Norway','BS66PD','garden flat 26'),(2,'Oslo','Norway','0050','Stenersgaten'),(3,'Oslo','Norway','',''),(4,'Oslo','Norway','',''),(5,'Oslo','Norway','',''),(6,'Oslo','Norway','0050','Stenersgaten'),(7,'Warsaw','Poland','',''),(8,'London','United Kingdom','',''),(9,'London','United Kingdom','',''),(10,'London','United Kingdom','',''),(11,'London','United Kingdom','',''),(12,'London','United Kingdom','',''),(13,'London','United Kingdom','',''),(14,'London','United Kingdom','',''),(15,'Oslo','Norway','',''),(16,'Oslo','Norway','',''),(17,'Oslo','Norway','',''),(18,'Oslo','Norway','',''),(19,'Oslo','Norway','',''),(20,'Oslo','Norway','',''),(21,'Oslo','Norway','',''),(22,'Oslo','Norway','',''),(23,'Oslo','Norway','',''),(24,'Oslo','Norway','',''),(25,'Oslo','Norway','',''),(26,'Oslo','Norway','',''),(27,'Oslo','Norway','',''),(28,'Oslo','Norway','',''),(29,'Warsaw','Poland','',''),(30,'Warsaw','Poland','',''),(31,'Karachi','Pakistan','',''),(32,'Karachi','Pakistan','',''),(33,'Lahore','Pakistan','',''),(34,'Chennai','India','',''),(35,'','','',''),(36,'Oslo','Norway','154','Jernbanetorget'),(37,'Oslo','Norway','154','Jernbanetorget'),(38,'Oslo','Norway','154','Jernbanetorget'),(39,'Oslo','Norway','',''),(40,'Oslo','Norway','',''),(41,'Oslo','Norway','',''),(42,'Oslo','Norway','',''),(43,'Oslo','Norway','',''),(44,'Oslo','Norway','',''),(45,'Oslo','Norway','',''),(46,'Oslo','Norway','',''),(47,'Oslo','Norway','','');
/*!40000 ALTER TABLE `field_data_restaurant_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_restaurant_main_image`
--

DROP TABLE IF EXISTS `field_data_restaurant_main_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_restaurant_main_image` (
  `rid` int(11) unsigned NOT NULL,
  `path` varchar(255) DEFAULT 'no path',
  `filename` varchar(255) DEFAULT 'no image',
  PRIMARY KEY (`rid`),
  KEY `rid` (`rid`),
  KEY `path` (`path`),
  KEY `filename` (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_restaurant_main_image`
--

LOCK TABLES `field_data_restaurant_main_image` WRITE;
/*!40000 ALTER TABLE `field_data_restaurant_main_image` DISABLE KEYS */;
INSERT INTO `field_data_restaurant_main_image` VALUES (32,'/Library/WebServer/Documents/desilogy/site_application/uploads/','property_2.jpg'),(33,'/Library/WebServer/Documents/desilogy/site_application/uploads/','property_2.jpg'),(34,'/Library/WebServer/Documents/desilogy/site_application/uploads/','property_21.jpg'),(47,'/Library/WebServer/Documents/desilogy/site_application/uploads/','property_1.jpg');
/*!40000 ALTER TABLE `field_data_restaurant_main_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_restaurant_name`
--

DROP TABLE IF EXISTS `field_data_restaurant_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_restaurant_name` (
  `rid` int(11) unsigned NOT NULL,
  `firstname` varchar(255) NOT NULL DEFAULT 'No First Name',
  `lastname` varchar(255) NOT NULL DEFAULT 'No Last Name',
  PRIMARY KEY (`rid`),
  KEY `rid` (`rid`),
  KEY `firstname` (`firstname`),
  KEY `lastname` (`lastname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_restaurant_name`
--

LOCK TABLES `field_data_restaurant_name` WRITE;
/*!40000 ALTER TABLE `field_data_restaurant_name` DISABLE KEYS */;
INSERT INTO `field_data_restaurant_name` VALUES (1,'firstname','lastname'),(2,'firstname','lastname'),(3,'firstname','lastname'),(4,'firstname','lastname'),(5,'firstname','lastname'),(6,'NAVEEN','VASUDEVAN'),(7,'NAVEEN','VASUDEVAN'),(8,'NAVEEN','VASUDEVAN'),(9,'NAVEEN','VASUDEVAN'),(10,'NAVEEN','VASUDEVAN'),(11,'NAVEEN','VASUDEVAN'),(12,'NAVEEN','VASUDEVAN'),(13,'NAVEEN','VASUDEVAN'),(14,'NAVEEN','VASUDEVAN'),(15,'NAVEEN','VASUDEVAN'),(16,'NAVEEN','VASUDEVAN'),(17,'NAVEEN','VASUDEVAN'),(18,'NAVEEN','VASUDEVAN'),(19,'NAVEEN','VASUDEVAN'),(20,'NAVEEN','VASUDEVAN'),(21,'NAVEEN','VASUDEVAN'),(22,'NAVEEN','VASUDEVAN'),(23,'NAVEEN','VASUDEVAN'),(24,'NAVEEN','VASUDEVAN'),(25,'NAVEEN','VASUDEVAN'),(26,'NAVEEN','VASUDEVAN'),(27,'NAVEEN','VASUDEVAN'),(28,'NAVEEN','VASUDEVAN'),(29,'NAVEEN','VASUDEVAN'),(30,'NAVEEN','VASUDEVAN'),(31,'NAVEEN','VASUDEVAN'),(32,'NAVEEN','VASUDEVAN'),(33,'NAVEEN','VASUDEVAN'),(34,'NAVEEN','VASUDEVAN'),(35,'first','last'),(36,'first','last'),(37,'first','last'),(38,'first','last'),(39,'first','last'),(40,'first','last'),(41,'first','last'),(42,'first','last'),(43,'first','last'),(44,'first','last'),(45,'first','last'),(46,'first','last'),(47,'first','last');
/*!40000 ALTER TABLE `field_data_restaurant_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_restaurant_phone`
--

DROP TABLE IF EXISTS `field_data_restaurant_phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_restaurant_phone` (
  `rid` int(11) unsigned NOT NULL,
  `phone` varchar(255) NOT NULL DEFAULT 'No Phone',
  PRIMARY KEY (`rid`,`phone`),
  KEY `rid` (`rid`),
  KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_restaurant_phone`
--

LOCK TABLES `field_data_restaurant_phone` WRITE;
/*!40000 ALTER TABLE `field_data_restaurant_phone` DISABLE KEYS */;
INSERT INTO `field_data_restaurant_phone` VALUES (1,'+447554171218'),(2,'+447554171218'),(3,'+447554171218'),(4,'+447554171218'),(5,'+447554171218'),(6,'+447554171218'),(7,'+447554171218'),(8,'+447554171218'),(9,'+447554171218'),(10,'+447554171218'),(11,'+447554171218'),(12,'+447554171218'),(13,'+447554171218'),(14,'+447554171218'),(15,'+447554171218'),(16,'+447554171218'),(17,'+447554171218'),(18,'+447554171218'),(19,'+447554171218'),(20,'+447554171218'),(21,'+447554171218'),(22,'+447554171218'),(23,'+447554171218'),(24,'+447554171218'),(25,'+447554171218'),(26,'+447554171218'),(27,'+447554171218'),(28,'+447554171218'),(29,'+447554171218'),(30,'+447554171218'),(31,'+447554171218'),(32,'+447554171218'),(33,'+447554171218'),(34,'+447554171218'),(35,''),(36,''),(37,''),(38,''),(39,''),(40,''),(41,''),(42,''),(43,''),(44,''),(45,''),(46,''),(47,'');
/*!40000 ALTER TABLE `field_data_restaurant_phone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_restaurant_website`
--

DROP TABLE IF EXISTS `field_data_restaurant_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_restaurant_website` (
  `rid` int(11) unsigned NOT NULL,
  `website` varchar(255) DEFAULT 'no website',
  PRIMARY KEY (`rid`),
  KEY `rid` (`rid`),
  KEY `website` (`website`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_restaurant_website`
--

LOCK TABLES `field_data_restaurant_website` WRITE;
/*!40000 ALTER TABLE `field_data_restaurant_website` DISABLE KEYS */;
INSERT INTO `field_data_restaurant_website` VALUES (35,''),(36,''),(37,''),(38,''),(39,''),(40,''),(41,''),(42,''),(43,''),(44,''),(45,''),(46,''),(47,''),(1,'http://naveenlabs.com'),(2,'http://naveenlabs.com'),(3,'http://naveenlabs.com'),(4,'http://naveenlabs.com'),(5,'http://naveenlabs.com'),(6,'http://naveenlabs.com'),(7,'http://naveenlabs.com'),(8,'http://naveenlabs.com'),(9,'http://naveenlabs.com'),(10,'http://naveenlabs.com'),(11,'http://naveenlabs.com'),(12,'http://naveenlabs.com'),(13,'http://naveenlabs.com'),(14,'http://naveenlabs.com'),(15,'http://naveenlabs.com'),(16,'http://naveenlabs.com'),(17,'http://naveenlabs.com'),(18,'http://naveenlabs.com'),(19,'http://naveenlabs.com'),(20,'http://naveenlabs.com'),(21,'http://naveenlabs.com'),(22,'http://naveenlabs.com'),(23,'http://naveenlabs.com'),(24,'http://naveenlabs.com'),(25,'http://naveenlabs.com'),(26,'http://naveenlabs.com'),(27,'http://naveenlabs.com'),(28,'http://naveenlabs.com'),(29,'http://naveenlabs.com'),(30,'http://naveenlabs.com'),(31,'http://naveenlabs.com'),(32,'http://naveenlabs.com'),(33,'http://naveenlabs.com'),(34,'http://naveenlabs.com');
/*!40000 ALTER TABLE `field_data_restaurant_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant` (
  `rid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `updated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant`
--

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
INSERT INTO `restaurant` VALUES (1,'name','body',1461007360,0,0),(2,'name','body',1461007453,0,0),(3,'name','body',1461007542,0,0),(4,'name','body',1461007599,0,0),(5,'name','body',1461007616,0,0),(6,'NAVEEN K VASUDEVAN','safsfds',1461007663,0,0),(7,'NAVEEN K VASUDEVAN','safsfds',1461007760,0,0),(8,'NAVEEN K VASUDEVAN','safsfds',1461007837,0,0),(9,'NAVEEN K VASUDEVAN','safsfds',1461007893,0,0),(10,'NAVEEN K VASUDEVAN','safsfds',1461007911,0,0),(11,'NAVEEN K VASUDEVAN','safsfds',1461007953,0,0),(12,'NAVEEN K VASUDEVAN','safsfds',1461008059,0,0),(13,'NAVEEN K VASUDEVAN','safsfds',1461008091,0,0),(14,'NAVEEN K VASUDEVAN','safsfds',1461008123,0,0),(15,'NAVEEN K VASUDEVAN','safsfds',1461008174,0,0),(16,'NAVEEN K VASUDEVAN','safsfds',1461008233,0,0),(17,'NAVEEN K VASUDEVAN','safsfds',1461008286,0,0),(18,'NAVEEN K VASUDEVAN','safsfds',1461008353,0,0),(19,'NAVEEN K VASUDEVAN','safsfds',1461008415,0,0),(20,'NAVEEN K VASUDEVAN','safsfds',1461008419,0,0),(21,'NAVEEN K VASUDEVAN','safsfds',1461008453,0,0),(22,'NAVEEN K VASUDEVAN','safsfds',1461008474,0,0),(23,'NAVEEN K VASUDEVAN','safsfds',1461008498,0,0),(24,'NAVEEN K VASUDEVAN','safsfds',1461008518,0,0),(25,'NAVEEN K VASUDEVAN','safsfds',1461008570,0,0),(26,'NAVEEN K VASUDEVAN','safsfds',1461009136,0,0),(27,'NAVEEN K VASUDEVAN','safsfds',1461009160,0,0),(28,'NAVEEN K VASUDEVAN','safsfds',1461009336,0,0),(29,'NAVEEN K VASUDEVAN','safsfds',1461009367,0,0),(30,'NAVEEN K VASUDEVAN','safsfds',1461009379,0,0),(31,'NAVEEN K VASUDEVAN','safsfds',1461009470,0,0),(32,'NAVEEN K VASUDEVAN','safsfds',1461009611,0,0),(33,'NAVEEN K VASUDEVAN','safsfds',1461009698,0,0),(34,'NAVEEN K VASUDEVAN','safsfds',1461010435,0,0),(35,'name','body',1461010838,0,0),(36,'name','body',1461010852,0,0),(37,'name','body',1461010999,0,0),(38,'name','body',1461011008,0,0),(39,'name','body',1461011018,0,0),(40,'name','body',1461011149,0,0),(41,'name','body',1461011151,0,0),(42,'name','body',1461011225,0,0),(43,'name','body',1461011227,0,0),(44,'name','body',1461011239,0,0),(45,'name','body',1461011263,0,0),(46,'name','body',1461011294,0,0),(47,'name','body',1461011316,0,0);
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `rvid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `updated` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rvid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-19  6:16:04
