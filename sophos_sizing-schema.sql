-- MySQL dump 10.16  Distrib 10.1.29-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sophos_sizing
-- ------------------------------------------------------
-- Server version	10.1.29-MariaDB

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
-- Table structure for table `firewall_XG`
--

DROP TABLE IF EXISTS `firewall_XG`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `firewall_XG` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `model` int(5) NOT NULL,
  `form` varchar(7) NOT NULL,
  `users_fg` int(6) NOT NULL,
  `users_eg` int(6) NOT NULL,
  `fw` int(5) NOT NULL,
  `ngfw` int(6) NOT NULL,
  `ipsec` int(5) NOT NULL,
  `ipsec_tunnels` int(5) NOT NULL,
  `ssl_tunnels` int(5) NOT NULL,
  `waf` int(5) NOT NULL,
  `total_sessions` int(8) NOT NULL,
  `new_sessions` int(8) NOT NULL,
  `hw_wirelessmode` tinyint(1) DEFAULT '0',
  `hw_storage` varchar(7) NOT NULL,
  `hw_ram` int(3) NOT NULL,
  `hw_power_suply` tinyint(1) DEFAULT '0',
  `red_full` int(4) NOT NULL,
  `red_fw` int(4) NOT NULL,
  `ap_managed` int(4) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `model` (`model`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firewall_XG`
--

LOCK TABLES `firewall_XG` WRITE;
/*!40000 ALTER TABLE `firewall_XG` DISABLE KEYS */;
INSERT INTO `firewall_XG` VALUES (1,85,'desktop',15,20,2,235,200,200,100,0,2000000,12000,1,'8 Gb',2,0,5,10,5),(2,105,'desktop',20,45,3,270,300,300,200,430,3200000,27500,1,'64 Gb',2,0,10,30,10);
/*!40000 ALTER TABLE `firewall_XG` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `license_XG`
--

DROP TABLE IF EXISTS `license_XG`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `license_XG` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `xg_model` int(3) NOT NULL,
  `sku` varchar(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `coverage` int(2) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `license_XG`
--

LOCK TABLES `license_XG` WRITE;
/*!40000 ALTER TABLE `license_XG` DISABLE KEYS */;
INSERT INTO `license_XG` VALUES (1,1,'EN8A1CEAA','Enhanced Support',12),(2,1,'EN8A2CEAA','Enhanced Support',24),(3,1,'EN8A3CEAA','Enhanced Support',36),(4,1,'EP8A1CEAA','Enhanced Plus Support',12),(5,1,'EP8A1CEUP','Enhanced to Enhanced Plus Support Upgrade',12),(6,1,'EP8A2CEAA','Enhanced Plus Support',24),(7,1,'EP8A2CEUP','Enhanced to Enhanced Plus Support Upgrade',24),(8,1,'EP8A3CEAA','Enhanced Plus Support',36),(9,1,'EP8A3CEUP','Enhanced to Enhanced Plus Support Upgrade',36),(10,1,'NG8A1CSEA','EnterpriseGuard with Enhanced Support',12),(11,1,'NG8A2CSEA','EnterpriseGuard with Enhanced Support',24),(12,1,'NG8A3CSEA','EnterpriseGuard with Enhanced Support',36),(13,1,'SX8A1CSAA','Sandstorm',12),(14,1,'SX8A2CSAA','Sandstorm',24),(15,1,'SX8A3CSAA','Sandstorm',36),(16,1,'XF8A1CSEA','FullGuard with Enhanced Support',12),(17,1,'XF8A1CSES','FullGuard Plus with Enhanced Support',12),(18,1,'XF8A2CSEA','FullGuard with Enhanced Support',24),(19,1,'XF8A2CSES','FullGuard Plus with Enhanced Support',24),(20,1,'XF8A3CSEA','FullGuard with Enhanced Support',36),(21,1,'XF8A3CSES','FullGuard Plus with Enhanced Support',36),(22,1,'XG8ATCHUS','Security Appliance',0),(23,1,'XW8ATCHUS','Security Appliance WiFi',0),(24,2,'EN1A1CEAA','Enhanced Support',12),(25,2,'EN1A2CEAA','Enhanced Support',24),(26,2,'EN1A3CEAA','Enhanced Support',36),(27,2,'EP1A1CEAA','Enhanced Plus Support',12),(28,2,'EP1A1CEUP','Enhanced to Enhanced Plus Support Upgrade',12),(29,2,'EP1A2CEAA','Enhanced Plus Support',24),(30,2,'EP1A2CEUP','Enhanced to Enhanced Plus Support Upgrade',24),(31,2,'EP1A3CEAA','Enhanced Plus Support',36),(32,2,'EP1A3CEUP','Enhanced to Enhanced Plus Support Upgrade',36),(33,2,'NG1A1CSEA','EnterpriseGuard with Enhanced Support',12),(34,2,'NG1A2CSEA','EnterpriseGuard with Enhanced Support',24),(35,2,'NG1A3CSEA','EnterpriseGuard with Enhanced Support',36),(36,2,'SX1A1CSAA','Sandstorm',12),(37,2,'SX1A2CSAA','Sandstorm',24),(38,2,'SX1A3CSAA','Sandstorm',36),(39,2,'XF1A1CSEA','FullGuard with Enhanced Support',12),(40,2,'XF1A1CSES','FullGuard Plus with Enhanced Support',12),(41,2,'XF1A2CSEA','FullGuard with Enhanced Support',24),(42,2,'XF1A2CSES','FullGuard Plus with Enhanced Support',24),(43,2,'XF1A3CSEA','FullGuard with Enhanced Support',36),(44,2,'XF1A3CSES','FullGuard Plus with Enhanced Support',36),(45,2,'XG1ATCHUS','Security Appliance',NULL),(46,2,'XW1ATCHUS','Security Appliance WiFi',NULL);
/*!40000 ALTER TABLE `license_XG` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vw_firewall`
--

DROP TABLE IF EXISTS `vw_firewall`;
/*!50001 DROP VIEW IF EXISTS `vw_firewall`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vw_firewall` (
  `model` tinyint NOT NULL,
  `form` tinyint NOT NULL,
  `users_fg` tinyint NOT NULL,
  `users_eg` tinyint NOT NULL,
  `fw` tinyint NOT NULL,
  `ngfw` tinyint NOT NULL,
  `ipsec` tinyint NOT NULL,
  `ipsec_tunnels` tinyint NOT NULL,
  `ssl_tunnels` tinyint NOT NULL,
  `waf` tinyint NOT NULL,
  `total_sessions` tinyint NOT NULL,
  `new_sessions` tinyint NOT NULL,
  `hw_wirelessmode` tinyint NOT NULL,
  `hw_storage` tinyint NOT NULL,
  `hw_ram` tinyint NOT NULL,
  `hw_power_suply` tinyint NOT NULL,
  `red_full` tinyint NOT NULL,
  `red_fw` tinyint NOT NULL,
  `ap_managed` tinyint NOT NULL,
  `sku` tinyint NOT NULL,
  `coverage` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `xg_model` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vw_firewall`
--

/*!50001 DROP TABLE IF EXISTS `vw_firewall`*/;
/*!50001 DROP VIEW IF EXISTS `vw_firewall`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_firewall` AS select `firewall_XG`.`model` AS `model`,`firewall_XG`.`form` AS `form`,`firewall_XG`.`users_fg` AS `users_fg`,`firewall_XG`.`users_eg` AS `users_eg`,`firewall_XG`.`fw` AS `fw`,`firewall_XG`.`ngfw` AS `ngfw`,`firewall_XG`.`ipsec` AS `ipsec`,`firewall_XG`.`ipsec_tunnels` AS `ipsec_tunnels`,`firewall_XG`.`ssl_tunnels` AS `ssl_tunnels`,`firewall_XG`.`waf` AS `waf`,`firewall_XG`.`total_sessions` AS `total_sessions`,`firewall_XG`.`new_sessions` AS `new_sessions`,`firewall_XG`.`hw_wirelessmode` AS `hw_wirelessmode`,`firewall_XG`.`hw_storage` AS `hw_storage`,`firewall_XG`.`hw_ram` AS `hw_ram`,`firewall_XG`.`hw_power_suply` AS `hw_power_suply`,`firewall_XG`.`red_full` AS `red_full`,`firewall_XG`.`red_fw` AS `red_fw`,`firewall_XG`.`ap_managed` AS `ap_managed`,`license_XG`.`sku` AS `sku`,`license_XG`.`coverage` AS `coverage`,`license_XG`.`description` AS `description`,`license_XG`.`xg_model` AS `xg_model` from (`firewall_XG` join `license_XG` on((`firewall_XG`.`ID` = `license_XG`.`xg_model`))) */;
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

-- Dump completed on 2018-06-30 13:48:35
