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
-- Table structure for table `aauth_groups`
--

DROP TABLE IF EXISTS `aauth_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_groups`
--

LOCK TABLES `aauth_groups` WRITE;
/*!40000 ALTER TABLE `aauth_groups` DISABLE KEYS */;
INSERT INTO `aauth_groups` VALUES (1,'Admin','Super Admin Group'),(2,'Public','Public Access Group'),(3,'Default','Default Access Group'),(4,'user','Normal Users'),(5,'owner','Business Owners');
/*!40000 ALTER TABLE `aauth_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_perm_to_group`
--

DROP TABLE IF EXISTS `aauth_perm_to_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_perm_to_group` (
  `perm_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`perm_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_perm_to_group`
--

LOCK TABLES `aauth_perm_to_group` WRITE;
/*!40000 ALTER TABLE `aauth_perm_to_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_perm_to_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_perm_to_user`
--

DROP TABLE IF EXISTS `aauth_perm_to_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_perm_to_user` (
  `perm_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`perm_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_perm_to_user`
--

LOCK TABLES `aauth_perm_to_user` WRITE;
/*!40000 ALTER TABLE `aauth_perm_to_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_perm_to_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_perms`
--

DROP TABLE IF EXISTS `aauth_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_perms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_perms`
--

LOCK TABLES `aauth_perms` WRITE;
/*!40000 ALTER TABLE `aauth_perms` DISABLE KEYS */;
INSERT INTO `aauth_perms` VALUES (1,'asdda','');
/*!40000 ALTER TABLE `aauth_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_pms`
--

DROP TABLE IF EXISTS `aauth_pms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_pms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) unsigned NOT NULL,
  `receiver_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `full_index` (`id`,`sender_id`,`receiver_id`,`date_read`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_pms`
--

LOCK TABLES `aauth_pms` WRITE;
/*!40000 ALTER TABLE `aauth_pms` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_pms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_system_variables`
--

DROP TABLE IF EXISTS `aauth_system_variables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_system_variables` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data_key` varchar(100) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_system_variables`
--

LOCK TABLES `aauth_system_variables` WRITE;
/*!40000 ALTER TABLE `aauth_system_variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_system_variables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_user_to_group`
--

DROP TABLE IF EXISTS `aauth_user_to_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_user_to_group` (
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_user_to_group`
--

LOCK TABLES `aauth_user_to_group` WRITE;
/*!40000 ALTER TABLE `aauth_user_to_group` DISABLE KEYS */;
INSERT INTO `aauth_user_to_group` VALUES (0,4),(1,1),(1,3),(6,4),(11,3),(11,4),(12,3),(12,4),(13,3),(13,4),(14,3),(14,4),(15,3),(15,4),(16,3),(16,4),(17,3),(17,5),(18,3),(18,5),(19,3),(19,5),(20,3),(20,4);
/*!40000 ALTER TABLE `aauth_user_to_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_user_variables`
--

DROP TABLE IF EXISTS `aauth_user_variables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_user_variables` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `data_key` varchar(100) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_user_variables`
--

LOCK TABLES `aauth_user_variables` WRITE;
/*!40000 ALTER TABLE `aauth_user_variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_user_variables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aauth_users`
--

DROP TABLE IF EXISTS `aauth_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aauth_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_login_attempt` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text,
  `login_attempts` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aauth_users`
--

LOCK TABLES `aauth_users` WRITE;
/*!40000 ALTER TABLE `aauth_users` DISABLE KEYS */;
INSERT INTO `aauth_users` VALUES (1,'admin@example.com','dd5073c93fb477a167fd69072e95455834acd93df8fed41a2c468c45b394bfe3','Admin',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(6,'test1@some.com','8868da957eb5d1c8680e334a6cfa8d6306fb15ca7ae90b5a756b46c314f6ba04','',0,'2016-05-15 15:04:41','2016-05-15 15:04:41','2016-05-15 15:00:00',NULL,NULL,NULL,NULL,NULL,'::1',NULL),(11,'test1@dispostable.come','af3ffac926dd0fdd756bb06e961a9f00a0bc39ab831f0f9611cb72d17e38ab1a','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(12,'test2@dispostable.come','d0c04b45a93a6dee3958dee993f657a8cc7172efccee889f4596b56262aad026','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(13,'test3@dispostable.come','17b7648c04a24180c49b7e9ff7610638dc8b29f6bd46264388bd6ab221dd4d9d','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(14,'test4@dispostable.come','133bb62ca72cc4032ef56b35bbe27851bb41d4b98fba4c911a4c922577d44aa3','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(15,'test5@dispostable.come','06b14a136c85dc04201b7b72c7f17e69833d6e9a7f0fcd3cb7de1378fffea200','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(16,'test6@dispostable.come','727fa3c03008f48a01f7f60ee260d8dfc51cce0c311eecaf21cceb927e6c9abe','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(17,'rest1@dispostable.come','551969e45fbdeda978141ea7c7be6fdab43d0fd691a6ed1ef4c3521602ff3d51','',0,'2016-05-16 09:21:01','2016-05-16 09:21:01','2016-05-16 09:00:00',NULL,NULL,NULL,NULL,NULL,'::1',NULL),(18,'rest2@dispostable.come','901736d6f0d8d8e2e39c065a134457f04c7ec8981986cea2cb7c7029f121a65f','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(19,'rest3@dispostable.come','7374b3c03f665bf7929612a6dce0cfe7a5096cacd97fba286c39469d5a4a075f','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(20,'rest4@dispostable.come','24b4760b04d3b850dc45ef4b71b2b30f87da149646de319d0e381fb1edd5f8dc','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `aauth_users` ENABLE KEYS */;
UNLOCK TABLES;

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
  `full_address` varchar(255) DEFAULT '',
  `lat` decimal(18,12) DEFAULT NULL,
  `long` decimal(18,12) DEFAULT NULL,
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
INSERT INTO `field_data_restaurant_address` VALUES (1,'Oslo','Norway','0184','Stenersgata','Wärtsilä Norway AS, Stenersgata, Oslo, Norway',59.913006200000,10.751490800000),(2,'Oslo','Norway','0186','Christian Krohgs gate','Christian Krohgs gate 16, Oslo, Norway',59.914981000000,10.758839700000),(3,'Bristol','United Kingdom','','','Bristol, United Kingdom',51.454513000000,-2.587910000000),(4,'Oslo','Norway','0186','Tollbugata','Tollbugata, Oslo, Norway',59.910428500000,10.744264200000),(5,'','','','','',0.000000000000,0.000000000000);
/*!40000 ALTER TABLE `field_data_restaurant_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_restaurant_images`
--

DROP TABLE IF EXISTS `field_data_restaurant_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_restaurant_images` (
  `rid` int(11) unsigned NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT 'no path',
  `filename` varchar(255) NOT NULL DEFAULT 'no filename',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_restaurant_images`
--

LOCK TABLES `field_data_restaurant_images` WRITE;
/*!40000 ALTER TABLE `field_data_restaurant_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `field_data_restaurant_images` ENABLE KEYS */;
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
INSERT INTO `field_data_restaurant_name` VALUES (1,'first name','last name'),(2,'sfsdfds','sgsdgds'),(3,'first name','last name'),(4,'sdfsd','sdfsdf');
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
INSERT INTO `field_data_restaurant_phone` VALUES (1,'2343242'),(2,'2343242'),(3,''),(4,'2343242'),(5,'');
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
INSERT INTO `field_data_restaurant_website` VALUES (1,''),(2,''),(3,''),(4,''),(5,'');
/*!40000 ALTER TABLE `field_data_restaurant_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_review_date`
--

DROP TABLE IF EXISTS `field_data_review_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_review_date` (
  `rvid` int(11) unsigned NOT NULL,
  `date_visited` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rvid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_review_date`
--

LOCK TABLES `field_data_review_date` WRITE;
/*!40000 ALTER TABLE `field_data_review_date` DISABLE KEYS */;
INSERT INTO `field_data_review_date` VALUES (1,'04/24/2016'),(2,'04/26/2016'),(3,'04/26/2016'),(4,'04/26/2016'),(5,'04/26/2016'),(6,'04/27/2016'),(7,'05/09/2016'),(8,'05/10/2016'),(9,'05/10/2016'),(10,'05/10/2016'),(11,'05/15/2016');
/*!40000 ALTER TABLE `field_data_review_date` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_data_review_votes`
--

DROP TABLE IF EXISTS `field_data_review_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_data_review_votes` (
  `rvoid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rvid` int(11) unsigned NOT NULL,
  `rid` int(11) unsigned NOT NULL,
  `food` double DEFAULT '0',
  `ambience` double DEFAULT NULL,
  `service` double DEFAULT NULL,
  `overall` double DEFAULT NULL,
  PRIMARY KEY (`rvoid`,`rvid`,`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_data_review_votes`
--

LOCK TABLES `field_data_review_votes` WRITE;
/*!40000 ALTER TABLE `field_data_review_votes` DISABLE KEYS */;
INSERT INTO `field_data_review_votes` VALUES (1,1,1,2.5,3.5,4.5,3.5),(2,2,1,4.5,4.5,5,4.6666666666667),(3,3,1,1.5,1,1,1.1666666666667),(4,4,1,3,3,3,3),(5,5,3,2.5,3,3.5,3),(6,6,2,3.5,2.5,4,3.3333333333333),(7,7,2,1.5,0.5,1,1),(8,8,2,3,2,2,2.3333333333333),(9,9,2,2.5,2,2,2.1666666666667),(10,10,3,3,2,3,2.6666666666667),(11,11,2,2,2,2,2);
/*!40000 ALTER TABLE `field_data_review_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_review_images`
--

DROP TABLE IF EXISTS `field_review_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_review_images` (
  `rvid` int(11) unsigned NOT NULL,
  `path` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`rvid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_review_images`
--

LOCK TABLES `field_review_images` WRITE;
/*!40000 ALTER TABLE `field_review_images` DISABLE KEYS */;
INSERT INTO `field_review_images` VALUES (10,'/Library/WebServer/Documents/desilogy/public/uploads/default.png;/Library/WebServer/Documents/desilogy/public/uploads/fistnight.jpg;',''),(11,'','13162413_562378520607564_1342928015_n6.png;13162466_562378523940897_1151678664_n_(1).png;');
/*!40000 ALTER TABLE `field_review_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_review_vote_count`
--

DROP TABLE IF EXISTS `field_review_vote_count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_review_vote_count` (
  `rid` int(11) unsigned NOT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `rid_UNIQUE` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_review_vote_count`
--

LOCK TABLES `field_review_vote_count` WRITE;
/*!40000 ALTER TABLE `field_review_vote_count` DISABLE KEYS */;
INSERT INTO `field_review_vote_count` VALUES (1,4),(2,5),(3,2);
/*!40000 ALTER TABLE `field_review_vote_count` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_menu`
--

DROP TABLE IF EXISTS `food_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_menu` (
  `fmid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`fmid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_menu`
--

LOCK TABLES `food_menu` WRITE;
/*!40000 ALTER TABLE `food_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!50001 DROP VIEW IF EXISTS `ratings`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `ratings` AS SELECT 
 1 AS `rid`,
 1 AS `avg_num_votes`,
 1 AS `avg_rating`,
 1 AS `this_num_votes`,
 1 AS `this_rating`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `ratings2`
--

DROP TABLE IF EXISTS `ratings2`;
/*!50001 DROP VIEW IF EXISTS `ratings2`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `ratings2` AS SELECT 
 1 AS `rid`,
 1 AS `avg_num_votes`,
 1 AS `avg_rating`,
 1 AS `this_num_votes`,
 1 AS `this_rating`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant` (
  `rid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `body` longtext,
  `created` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `updated` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant`
--

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
INSERT INTO `restaurant` VALUES (1,'something 1','Lorem ipsum dolor sit amet, no graeco deleniti quo, tincidunt signiferumque in eum, eu vel choro delicatissimi. In everti labores complectitur vel. Has eu vidit everti. Te ius hinc animal deserunt. Sit ne commodo partiendo consulatu, oratio ocurreret ea vim, iuvaret postulant usu ei. Altera propriae et eam, inermis adipisci indoctum ex eum. Probo dicunt impedit eum cu.\n\nDicat blandit insolens in vel, sit appetere gloriatur et, no commune legendos nam. Qui ut stet nominati gloriatur, intellegam scripserit has ea, eum accusam moderatius liberavisse in. An possim commune mel, paulo putent alienum vis an. Ius detracto delectus persequeris at, ad alterum prodesset sea. Corpora eleifend scriptorem eu sed, cu per partem deserunt. Quis vivendo consectetuer eum no.\n\nDolor labitur sea cu, liber diceret nonumes ius in, id tritani explicari dissentiunt duo. Id vim ornatus volumus. Ius paulo reformidans no, putant vituperata voluptatibus sit ne, has id aliquid maiorum constituam. Ei probatus suscipiantur sea, mei ut appetere liberavisse.\n\nProbo lobortis nam an, no omnes doctus aliquid mei, an cum melius cetero. Verear albucius adipisci nec eu, soleat verear principes mei ne. Sit ut amet repudiandae, meis probo cum in. Harum euripidis an sea. Agam dicit mnesarchum mea ne, ei eum errem oratio tamquam. No per quod illud repudiare, id scaevola consequat quaerendum ius.\n\nOmnium malorum temporibus usu cu. Duo id dicunt posidonium. Accommodare interpretaris quo in. Nam nullam euripidis at, vis at idque essent dolorum, te duo tempor altera. Deseruisse comprehensam nam an.',1461060354,0,0,17),(2,'something 2','lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',1461697501,0,0,0),(3,'something 3','lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',1461698020,0,0,0),(4,'something 4','this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh this_num_votessdfsdgdsgsd gs gs gfsh fh dfh ',1462713658,0,0,0);
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
  `body` longtext,
  `created` int(11) NOT NULL DEFAULT '0',
  `updated` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  PRIMARY KEY (`rvid`,`uid`),
  KEY `rvid` (`rvid`),
  KEY `rid` (`rid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (1,1,'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ',1461513463,0,0,0,'title for 1st 1st'),(2,1,'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',1461696957,0,0,0,'ttile for 1st 2nd'),(3,1,'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',1461697055,0,0,0,'ttile for 1st 3rd'),(4,1,'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',1461697086,0,0,0,'ttile for 1st 4th'),(5,3,'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',1461698198,0,0,0,'test title for 3rd restaurant'),(6,2,'https://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Softwarehttps://www.arduino.cc/en/Main/Software',1461774449,0,0,0,'1st test title for 2nd rest.'),(7,2,'sdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sdsdfdsg sd',1462805800,0,0,0,'TEST TITLE FOR 2ND RESTRO'),(8,2,'sdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gssdfsgfds gdsg dsg ds gs',1462904704,0,0,0,'sdfsgfds gdsg dsg ds gs'),(9,2,'sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd sdfsdgdssdg sg sd ',1462904817,0,0,0,'sdfsdf dsg sdg sdg'),(10,3,'sdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f asdgd sg sdg sg sgf f a',1462904975,0,0,0,'sd sg sdg dsg sdg '),(11,2,'sdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs gsdg sg ds gs gs g',1462905055,1463332920,0,6,'nice title 1');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_votes_check`
--

DROP TABLE IF EXISTS `user_votes_check`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_votes_check` (
  `id` int(11) unsigned NOT NULL,
  `rid` int(11) unsigned NOT NULL,
  `rvid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`,`rid`,`rvid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_votes_check`
--

LOCK TABLES `user_votes_check` WRITE;
/*!40000 ALTER TABLE `user_votes_check` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_votes_check` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `ratings`
--

/*!50001 DROP VIEW IF EXISTS `ratings`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `ratings` AS select `field_data_review_votes`.`rid` AS `rid`,((select count(`field_data_review_votes`.`rid`) from `field_data_review_votes`) / (select count(distinct `field_data_review_votes`.`rid`) from `field_data_review_votes`)) AS `avg_num_votes`,(select avg(`field_data_review_votes`.`overall`) from `field_data_review_votes`) AS `avg_rating`,count(`field_data_review_votes`.`rid`) AS `this_num_votes`,avg(`field_data_review_votes`.`overall`) AS `this_rating` from `field_data_review_votes` group by `field_data_review_votes`.`rid` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `ratings2`
--

/*!50001 DROP VIEW IF EXISTS `ratings2`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `ratings2` AS select `field_data_review_votes`.`rid` AS `rid`,((select count(`field_data_review_votes`.`rid`) from `field_data_review_votes`) / (select count(distinct `field_data_review_votes`.`rid`) from `field_data_review_votes`)) AS `avg_num_votes`,(select avg(`field_data_review_votes`.`overall`) from `field_data_review_votes`) AS `avg_rating`,count(`field_data_review_votes`.`rid`) AS `this_num_votes`,avg(`field_data_review_votes`.`overall`) AS `this_rating` from (`field_data_review_votes` left join `field_data_restaurant_address` on((`field_data_restaurant_address`.`rid` = `field_data_review_votes`.`rid`))) where (`field_data_restaurant_address`.`city` = 'Oslo') group by `field_data_review_votes`.`rid` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-23  8:25:36
