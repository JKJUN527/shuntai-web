-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: db_shuntai
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `st_admin`
--

DROP TABLE IF EXISTS `st_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_admin` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_admin`
--

LOCK TABLES `st_admin` WRITE;
/*!40000 ALTER TABLE `st_admin` DISABLE KEYS */;
INSERT INTO `st_admin` VALUES (1,1,'admin','$2y$10$Mk4BtG4FAbEdkDxwqFkEhOTLzMHLNzi/Cmg.hzhWR8INm8JWxBEgq',0,'2018-03-20 12:55:22','2018-08-03 01:58:09','2018-08-03 01:58:09'),(3,0,'jkjun','$2y$10$VvrQ2rC67AOVvs6Sr6sWeuSdF0gyBQa/v1mFv8sVFYfsMzpQ/hZ12',0,'2018-03-20 13:42:23','2018-03-21 05:35:27','2018-03-21 05:35:27');
/*!40000 ALTER TABLE `st_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_message`
--

DROP TABLE IF EXISTS `st_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `content` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_message`
--

LOCK TABLES `st_message` WRITE;
/*!40000 ALTER TABLE `st_message` DISABLE KEYS */;
INSERT INTO `st_message` VALUES (7,'李瑞琛','280722223@qq.com','生意兴隆','2018-04-26 14:13:32','2018-04-26 14:13:32'),(8,'小丽','943640397@qq.com','想咨询一下你们公司最牛逼的产品，请速回','2018-06-23 05:11:08','2018-06-23 05:11:08');
/*!40000 ALTER TABLE `st_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_news`
--

DROP TABLE IF EXISTS `st_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_news` (
  `nid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '新闻标题',
  `quote` varchar(255) DEFAULT NULL COMMENT '引用出处',
  `content` longtext COMMENT '内容',
  `picture` varchar(255) DEFAULT NULL COMMENT '图片',
  `tag` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '类型',
  `view_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_news`
--

LOCK TABLES `st_news` WRITE;
/*!40000 ALTER TABLE `st_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `st_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_product`
--

DROP TABLE IF EXISTS `st_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `ch_name` varchar(200) DEFAULT NULL COMMENT '中文品名',
  `en_name` varchar(200) DEFAULT NULL COMMENT '英文品名',
  `image` varchar(500) DEFAULT NULL COMMENT '描述图片',
  `model` varchar(100) DEFAULT NULL COMMENT '规格',
  `cas_code` varchar(100) DEFAULT NULL COMMENT 'cas编号',
  `package` varchar(100) DEFAULT NULL COMMENT '包装',
  `is_urgency` int(1) unsigned DEFAULT '0' COMMENT '是否是优势产品 0 不是 1 是',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_product`
--

LOCK TABLES `st_product` WRITE;
/*!40000 ALTER TABLE `st_product` DISABLE KEYS */;
INSERT INTO `st_product` VALUES (5,3,'磷酸','Phosphorous acid',NULL,NULL,'7664-38-2',NULL,1,'2018-04-28 08:24:48','2018-04-28 08:24:54'),(6,5,'片碱','Caustic soda',NULL,NULL,'1310-73-2',NULL,1,'2018-04-28 08:26:37','2018-04-28 08:27:52'),(7,3,'氢氟酸','hydrofluoric acid',NULL,NULL,'7664-39-3',NULL,1,'2018-04-28 08:27:44','2018-04-28 08:27:57'),(8,6,'氟化铵','ammonium fluoride',NULL,NULL,'12125-01-8',NULL,1,'2018-04-28 08:29:03','2018-04-28 08:29:42'),(9,6,'氟化氢铵','ammonium bifluoride',NULL,NULL,'1341-49-7',NULL,1,'2018-04-28 08:30:44','2018-04-28 08:30:51'),(10,6,'磷酸二氢钠','Sodium phosphate monobasic',NULL,NULL,'7558-80-7',NULL,0,'2018-05-15 01:13:49','2018-05-15 01:13:49'),(11,6,'无水乙酸钠','Sodium acetate anhydrous',NULL,NULL,'53744-42-6',NULL,0,'2018-05-15 01:15:28','2018-05-15 01:15:28'),(12,5,'食用片碱','Edible alkali',NULL,NULL,'1310-73-2',NULL,0,'2018-05-15 01:16:51','2018-05-15 01:16:51'),(13,5,'硫化碱','Sodium sulfide',NULL,NULL,'1313-82-2',NULL,0,'2018-05-15 01:51:12','2018-05-15 01:51:12'),(14,8,'聚丙烯酰胺','Polyacrylamide',NULL,NULL,'9003-05-8',NULL,0,'2018-05-15 01:53:43','2018-05-15 01:53:43'),(15,6,'纯碱','sodium carbonate',NULL,NULL,'497-19-8',NULL,0,'2018-07-27 03:20:53','2018-07-27 03:20:53'),(16,3,'醋酸','Acetic acid',NULL,NULL,'64-19-7',NULL,0,'2018-07-27 05:50:10','2018-07-27 05:50:10'),(17,6,'磷酸氢二钠 DSP',':Disodium hydrogen phosphate',NULL,NULL,'7558-79-4',NULL,0,'2018-07-27 05:52:43','2018-07-27 05:52:43'),(18,6,'氟化钠','sodium fluoride',NULL,NULL,'7681-49-4',NULL,0,'2018-07-27 05:54:06','2018-07-27 05:54:06'),(19,6,'氟硅酸钠','sodium hexafluorosilicate',NULL,NULL,'16893-85-9',NULL,0,'2018-07-27 05:55:11','2018-07-27 05:55:11'),(20,3,'草酸','Oxalic acid',NULL,NULL,'144-62-7',NULL,0,'2018-07-27 05:56:37','2018-07-27 05:56:37'),(21,6,'氟硅酸铵','ammonium silicofluoride',NULL,NULL,'16919-19-0',NULL,0,'2018-07-27 05:59:05','2018-07-27 05:59:05'),(22,6,'冰晶石','sodium aluminofluoride',NULL,NULL,'15096-52-3',NULL,0,'2018-07-27 06:22:21','2018-07-27 06:22:21'),(23,6,'氟化铝','aluminium fluoride',NULL,NULL,'7784-18-1',NULL,0,'2018-07-27 06:24:57','2018-07-27 06:24:57'),(24,6,'氟硅酸镁','magnesium fluorosilicate',NULL,NULL,'16961-83-4',NULL,0,'2018-07-27 06:31:43','2018-07-27 06:31:43'),(25,7,'硬脂酸锌','zinc stearate',NULL,NULL,'557-05-1',NULL,0,'2018-07-30 06:58:20','2018-07-30 06:58:20'),(26,7,'硬脂酸钡','barium stearate',NULL,NULL,'6865-35-6',NULL,0,'2018-07-30 07:00:05','2018-07-30 07:00:05'),(27,7,'硬脂酸铅','lead stearate',NULL,NULL,'1072-35-1',NULL,0,'2018-07-30 07:01:30','2018-07-30 07:01:30'),(28,7,'氢氧化钠 AR','caustic soda AR',NULL,NULL,'1310-73-2',NULL,0,'2018-07-30 07:02:52','2018-07-30 07:02:52'),(29,6,'硫酸亚铁','ferrous sulfate',NULL,NULL,'7782-63-0',NULL,0,'2018-07-30 07:04:28','2018-07-30 07:04:28'),(30,7,'硫酸亚铁 AR CP','ferrous sulfate AR CP',NULL,NULL,NULL,NULL,0,'2018-07-30 09:47:24','2018-07-30 09:47:24'),(31,7,'硫氰酸钾 AR CP','Potassium thiocyanate AR CP',NULL,NULL,'333-20-0',NULL,0,'2018-07-31 00:51:02','2018-07-31 00:51:02'),(32,7,'亚铁氰化钾 AR CP','Potassium hexacyanoferrate（II） AR CP',NULL,NULL,'13943-58-3',NULL,0,'2018-07-31 00:54:27','2018-07-31 00:54:27'),(33,7,'铁氰化钾','Potassium ferricyanide',NULL,NULL,'13746-66-2',NULL,0,'2018-07-31 00:56:12','2018-07-31 00:56:12'),(34,7,'碳酸氢钾 AR CP','Potassium hydrogen carbonate AR CP',NULL,NULL,'298-14-6',NULL,0,'2018-07-31 00:57:42','2018-07-31 00:57:42'),(35,7,'碳酸钾 AR CP','Potassium carbonate AR CP',NULL,NULL,'584-08-7',NULL,0,'2018-07-31 00:59:26','2018-07-31 00:59:26'),(36,7,'氢氧化钾 AR','Potassium hydroxide AR',NULL,NULL,'1310-58-3',NULL,0,'2018-07-31 01:01:13','2018-07-31 01:01:13'),(37,7,'氯化钾 AR CP','Potassium chloride AR CP',NULL,NULL,'7447-40-7',NULL,0,'2018-07-31 01:02:24','2018-07-31 01:02:24'),(38,7,'硫氰酸钠','Sodium thiocyanate',NULL,NULL,'540-72-7',NULL,0,'2018-07-31 01:05:44','2018-07-31 01:05:44'),(39,7,'硫代硫酸钠','Sodium thiosulfate',NULL,NULL,'10102-17-7',NULL,0,'2018-07-31 01:06:59','2018-07-31 01:06:59'),(40,7,'硫酸氢钠','Sodium bisulfate',NULL,NULL,'7681-38-1',NULL,0,'2018-07-31 01:07:50','2018-07-31 01:07:50'),(41,7,'二硬脂酸铝 AR CP','Aluminium distearate AR CP',NULL,NULL,'300-92-5',NULL,0,'2018-07-31 01:10:41','2018-07-31 01:10:41');
/*!40000 ALTER TABLE `st_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_product_type`
--

DROP TABLE IF EXISTS `st_product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_product_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(100) DEFAULT NULL COMMENT '产品类别——中文名称',
  `en_name` varchar(100) DEFAULT NULL COMMENT '英文类型名',
  `describe` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_product_type`
--

LOCK TABLES `st_product_type` WRITE;
/*!40000 ALTER TABLE `st_product_type` DISABLE KEYS */;
INSERT INTO `st_product_type` VALUES (3,'酸类','Acids',NULL,'2018-04-19 13:58:42','2018-04-19 13:58:42'),(5,'碱类','Alkali',NULL,'2018-04-19 14:01:23','2018-04-19 14:01:23'),(6,'盐类','Salts',NULL,'2018-04-19 14:03:12','2018-04-19 14:03:12'),(7,'化学试剂','Chemical Reagents',NULL,'2018-04-19 14:03:49','2018-04-19 14:03:49'),(8,'其他','Others',NULL,'2018-04-19 14:04:24','2018-04-19 14:04:24');
/*!40000 ALTER TABLE `st_product_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_webinfo`
--

DROP TABLE IF EXISTS `st_webinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `st_webinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tel` varchar(200) DEFAULT NULL COMMENT '电话',
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL COMMENT '邮箱',
  `address_en` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL COMMENT '地址',
  `postcodes` varchar(100) DEFAULT NULL COMMENT '邮编',
  `brief` varchar(1000) DEFAULT NULL COMMENT '企业简介',
  `describe` longtext COMMENT '企业详情介绍描述',
  `describe_en` longtext COMMENT '英文描述',
  `picture` varchar(1000) DEFAULT NULL COMMENT '企业展示图片',
  `carousel` varchar(1000) DEFAULT NULL COMMENT '首页轮播图',
  `market_in_en` varchar(1000) DEFAULT NULL,
  `market_in` varchar(1000) DEFAULT NULL COMMENT '营销网络国内',
  `market_out_en` varchar(1000) DEFAULT NULL,
  `market_out` varchar(1000) DEFAULT NULL COMMENT '营销网络国外',
  `advantage` varchar(1000) DEFAULT NULL COMMENT '首页优势产品介绍',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_webinfo`
--

LOCK TABLES `st_webinfo` WRITE;
/*!40000 ALTER TABLE `st_webinfo` DISABLE KEYS */;
INSERT INTO `st_webinfo` VALUES (1,'13738713800','0577-88620778','280722223@qq.com','A504，Wenzhou Jinhai chemical market，No. 422, No. twenty-five Binhai Road,Wenzhou economic and Technological Development Zone,Wenzhou，China.','温州市经济技术开发区滨海二十五路422号A504号','325000','没有完美的个人，只有完美的团队。','温州市顺泰化工有限公司成立于2003年。历经十多年的经营与开拓，顺泰化工现已发展成为知名的化工产品生产、销售、仓储、物流业务于一体的综合性现代化工公司。公司拥有一支年轻活力、具有国际化和前瞻性视野的高素质员工团队，80%以上具有本科及以上学历。公司在发展现有业务的同时，积极开拓绿色经济、新能源、精细化工等新兴领域，并致力“一带一路”、“中国 制造2025”、“互联网+传统产业”、“工业4.0”等新趋势，从而为供应商和客户提供更优质的服务和专业支持。我们将坚守“诚信为本，厚德载物”的企业核心价值观，秉承“创业与创新是顺泰的基因”的企业精神， 致力于成为工业化工的优质供应商，以认真负责、勇于拼搏的 经营团队，期待为您提供专业、优质、高效的服务。','Wenzhou Shuntai Chemical Co., Ltd. was founded in 2003. Having been operating and developing for over 10 years, Shuntai has grown into a renowned conglomerate that integrates chemicals trade and storage operations in East China and Yangtze River Delta in particular. Our workforce is young and energetic with international visions and high professionalism, over 80% of it hold an undergraduate or above degree. Building upon current operations, the Company is also actively pushing into emerging areas of green economy, new energy and fine chemicals, and committed to new trends of the Belt and Road Initiative, Made in China 2025, Internet + Traditional Industries, and Industry 4.0, to provide quality service and support to vendors and clients. We uphold the core value of honesty and moral integrity, and the corporate ethos of entrepreneurship and innovation, in devoting ourselves to become a trustworthy supplier of industrial chemicals. Our team is dedicated, brave and professional, looking forward to providing professional, quality and efficient service to you.','',NULL,'\r\n\r\nProvinces of Yunnan, Sichuan, Chongqing, Guizhou, Guangxi, Guangdong, Fujian, Henan, Hunan, Hubei, Henan, Shaanxi, Shandong\r\n\r\n\r\nProvinces of Yunnan, Sichuan, Chongqing, Guizhou, Guangxi, Guangdong, Fujian, Henan, Hunan, Hubei, Henan, Shaanxi, Shandong\r\nProvinces of Yunnan, Sichuan, Chongqing, Guizhou, Guangxi, Guangdong, Fujian, Henan, Hunan, Hubei, Henan, Shaanxi, Shandong','云南、四川、重庆、贵州、广西、广东、福建、河南、湖南、湖北、河南、陕西、山东、江苏、上海、辽宁、黑龙江、乌鲁木齐、青海、北京、河北、浙江、安徽、吉林','Europe, North America, South America, Japan, Southeast Asia, etc.','欧洲，北美，南美，日本，东南亚等','片碱 磷酸 氢氟酸 氟化铵 氟化氢铵 硬脂酸盐','2018-03-20 12:49:03','2018-08-03 01:58:28');
/*!40000 ALTER TABLE `st_webinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-25 16:04:33
