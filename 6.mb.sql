-- MySQL dump 10.13  Distrib 5.5.25a, for Linux (i686)
--
-- Host: localhost    Database: 6.mb
-- ------------------------------------------------------
-- Server version	5.5.25a

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','0c800f4444be6e3c0eaece64829409fc');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_d` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_k` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (7,'Captcha','captcha','Captcha','Captcha','Captcha','       123123123 Captcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha','2012-08-18','17:12:09'),(8,'Download','download','Download','Download','Download','  downloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownload','2012-08-14','17:36:40'),(10,'Database','database','Database, Download','Data, Dowload','Data, Download','   DarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabaseDarabase','2012-08-15','19:20:29');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folio`
--

DROP TABLE IF EXISTS `folio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dev_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `platform` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `img` tinytext CHARACTER SET utf8 NOT NULL,
  `img_s` tinytext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folio`
--

LOCK TABLES `folio` WRITE;
/*!40000 ALTER TABLE `folio` DISABLE KEYS */;
INSERT INTO `folio` VALUES (2,'Department of Obstetrics and Gynecology','2 month','Wordpress','http://obgyn.mokamedianyc.com/','Hard first work with WP','./file/HwZRybXMes.png','./file/HwZRybXMes_s.png');
/*!40000 ALTER TABLE `folio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'67567'),(2,'ghjkghjk'),(3,'ghjkghjk'),(4,'sdfgsdfg'),(5,'sdfgsdfg'),(6,'sdfgsdfg'),(7,'sdfgsdfgdg'),(8,'sdfgsdfg'),(9,'sdfgsdfg'),(10,'sdfgsdfg'),(11,'sdfgsdfg'),(12,'sdfgsdfg444444444444'),(13,'asdasd'),(14,'123'),(15,'fsdfsdf'),(16,'111zcxdd'),(17,'a2224444'),(18,'543');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-19 19:21:08
