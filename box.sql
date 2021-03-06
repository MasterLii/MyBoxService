﻿# Host: localhost  (Version: 5.5.40)
# Date: 2015-08-04 13:40:51
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "bs_admin"
#

DROP TABLE IF EXISTS `bs_admin`;
CREATE TABLE `bs_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `action` tinyint(4) NOT NULL COMMENT '权限',
  `money` float NOT NULL DEFAULT '0' COMMENT '余额',
  `sellcount` int(11) NOT NULL COMMENT '卖出个数',
  `sellmoney` float NOT NULL COMMENT '卖出总值',
  `discount` int(11) NOT NULL COMMENT '折扣',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "bs_admin"
#

/*!40000 ALTER TABLE `bs_admin` DISABLE KEYS */;
INSERT INTO `bs_admin` VALUES (1,'admin','admin',1,9766,0,0,1,1),(2,'51542575','123789',1,1000,5,100,5,1);
/*!40000 ALTER TABLE `bs_admin` ENABLE KEYS */;

#
# Structure for table "bs_card"
#

DROP TABLE IF EXISTS `bs_card`;
CREATE TABLE `bs_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `code` char(18) NOT NULL COMMENT '充值卡号',
  `valuetime` int(11) NOT NULL COMMENT '充值时间',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  `usetime` datetime DEFAULT NULL COMMENT '使用时间',
  `userid` int(11) DEFAULT NULL COMMENT '使用者',
  `createrid` int(11) NOT NULL COMMENT '创建者',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=utf8;

#
# Data for table "bs_card"
#

/*!40000 ALTER TABLE `bs_card` DISABLE KEYS */;
INSERT INTO `bs_card` VALUES (66,'11M31GPMBV26FOLWN4',365,'2015-08-03 17:15:24',NULL,NULL,1),(67,'11CSV1PY6AF1RA20JN',365,'2015-08-03 17:15:24',NULL,NULL,1),(68,'11BEUENO2N1FDUMO6S',365,'2015-08-03 17:15:24',NULL,NULL,1),(69,'111LO80OABYSOG05AD',365,'2015-08-03 17:15:24',NULL,NULL,1),(70,'119HVMV6UID5UN9B5B',365,'2015-08-03 17:15:24',NULL,NULL,1),(71,'111DS52O8NM90KHYK7',365,'2015-08-03 17:15:24',NULL,NULL,1),(72,'1175LOGGOS717BQQ6Q',365,'2015-08-03 17:15:24',NULL,NULL,1),(73,'11YST7L1B2ONITTAJP',365,'2015-08-03 17:15:24',NULL,NULL,1),(74,'11552RCM40LLNVFCT9',365,'2015-08-03 17:15:24',NULL,NULL,1),(75,'11XX8M73NP6938RO7D',365,'2015-08-03 17:15:24',NULL,NULL,1),(76,'30FUSXQO9ESED0U6LI',30,'2015-08-03 19:31:42',NULL,NULL,1),(77,'30O1WS6O7K9THNCB41',30,'2015-08-03 19:31:42',NULL,NULL,1),(78,'30QGOEVKQXFCS120UJ',30,'2015-08-03 19:31:42',NULL,NULL,1),(86,'180BO8CB3Y1Y4J4ON9',365,'2015-08-04 12:51:14',NULL,NULL,1),(87,'18011LLMX86CTQAJLO',365,'2015-08-04 12:51:14',NULL,NULL,1),(88,'180UI24B8UQD68PM21',365,'2015-08-04 12:51:14',NULL,NULL,1),(89,'180MNG4O7QYKDLSDHC',365,'2015-08-04 12:51:14',NULL,NULL,1),(90,'180O1U86U2OCJGQ6OB',365,'2015-08-04 12:51:14',NULL,NULL,1),(91,'180EHI1DI67590GLAG',365,'2015-08-04 12:51:14',NULL,NULL,1),(92,'180KKC1UE3D7RCDBHT',365,'2015-08-04 12:51:14',NULL,NULL,1),(93,'180GXKENKOHPGM3OHS',365,'2015-08-04 12:51:14',NULL,NULL,1),(94,'18080X1PUSNTR1PLWP',365,'2015-08-04 12:51:14',NULL,NULL,1),(95,'180501HYMO0OO2GG1M',365,'2015-08-04 12:51:14',NULL,NULL,1),(96,'30SBMTRVO849W0Q1QS',30,'2015-08-04 12:51:30',NULL,NULL,1),(97,'30B18EL21259VFHYAJ',30,'2015-08-04 12:51:30',NULL,NULL,1),(98,'30XQXQO73BYDJC2QE5',30,'2015-08-04 12:51:30',NULL,NULL,1),(99,'30VUNTITTI3YR2S70U',30,'2015-08-04 12:51:30',NULL,NULL,1),(100,'30HJ7XNPFQ2FBMOC1Y',30,'2015-08-04 12:51:30',NULL,NULL,1),(101,'30CE1KAGVB1TMEE4EF',30,'2015-08-04 12:51:30',NULL,NULL,1),(102,'303NO687RUM82EAN4Y',30,'2015-08-04 12:51:30',NULL,NULL,1),(103,'30KUNKVAMNQGENHIEI',30,'2015-08-04 12:51:30',NULL,NULL,1),(104,'30D2KOE1OQE735IMIF',30,'2015-08-04 12:51:30',NULL,NULL,1),(105,'30TU7KBXCVDDWJ3F9J',30,'2015-08-04 12:51:30',NULL,NULL,1),(106,'301VJXK1PVFOG895T2',30,'2015-08-04 12:51:30',NULL,NULL,1),(107,'30I9SKEMWT1CPL13WW',30,'2015-08-04 12:51:30',NULL,NULL,1),(108,'305XLRN6Q6BHMLM1ON',30,'2015-08-04 12:51:30',NULL,NULL,1),(109,'30YNV0JVK90HIFKF0A',30,'2015-08-04 12:51:30',NULL,NULL,1),(110,'30U1XHXEXN9JJO3K1P',30,'2015-08-04 12:51:30',NULL,NULL,1),(111,'30USG7DJUJ7EUNQDFP',30,'2015-08-04 12:51:30',NULL,NULL,1),(112,'30J98RFQP5C4MU2O36',30,'2015-08-04 12:51:30',NULL,NULL,1),(113,'30XD7EN4GB4QUU58H0',30,'2015-08-04 12:51:30',NULL,NULL,1),(114,'30TRVD1Q3TOWE4WQF7',30,'2015-08-04 12:51:30',NULL,NULL,1),(115,'30SP7G6LLOW0RE60VO',30,'2015-08-04 12:51:30',NULL,NULL,1),(116,'306EWKQKUXYQ7W1MCM',30,'2015-08-04 12:51:30',NULL,NULL,1),(117,'30TCO11BGW1OA39FRQ',30,'2015-08-04 12:51:30',NULL,NULL,1),(118,'30E7252PLLOYEQNK4Q',30,'2015-08-04 12:51:30',NULL,NULL,1),(119,'30SK1AWY6J2MBQYAMM',30,'2015-08-04 12:51:30',NULL,NULL,1),(120,'30ONBOR8AP3W1OI9JT',30,'2015-08-04 12:51:30',NULL,NULL,1),(121,'30LLVIPPPW8AS6MGRE',30,'2015-08-04 12:51:30',NULL,NULL,1),(122,'30EHF9I5TMDI6K0331',30,'2015-08-04 12:51:30',NULL,NULL,1),(123,'30BW5RRXANEMXOUWYX',30,'2015-08-04 12:51:30',NULL,NULL,1),(124,'305P1C5LMQUXNNQA7E',30,'2015-08-04 12:51:30',NULL,NULL,1),(125,'308Q5OC522PAHT4TI8',30,'2015-08-04 12:51:30',NULL,NULL,1),(126,'301OG4KXQO4JTDC3N8',30,'2015-08-04 12:51:30',NULL,NULL,1),(127,'306SB649JETRNMNNXQ',30,'2015-08-04 12:51:30',NULL,NULL,1),(128,'30JJ834AG2JLM4SATX',30,'2015-08-04 12:51:30',NULL,NULL,1),(129,'30D8TXUWNB0CIQ05QK',30,'2015-08-04 12:51:30',NULL,NULL,1),(130,'30KFB50CUU5SLS8SV3',30,'2015-08-04 12:51:30',NULL,NULL,1),(131,'306B5TODAQG7I274EJ',30,'2015-08-04 12:51:30',NULL,NULL,1),(132,'30UWOUF1CQUFB43QFK',30,'2015-08-04 12:51:30',NULL,NULL,1),(133,'30XSOMXKSAVP1FTWCO',30,'2015-08-04 12:51:30',NULL,NULL,1),(134,'30M43XJDXAFUD6EXOJ',30,'2015-08-04 12:51:30',NULL,NULL,1),(135,'30LW4CH3X5H5O3RG3D',30,'2015-08-04 12:51:30',NULL,NULL,1),(136,'30MEW7XSCOXE0FGEPB',30,'2015-08-04 12:51:30',NULL,NULL,1),(137,'30P5J0LE08AE2QFI8D',30,'2015-08-04 12:51:30',NULL,NULL,1),(138,'30K41UCCQCWA2YCTWX',30,'2015-08-04 12:51:30',NULL,NULL,1),(139,'30SFSW43PC0JFDSUOO',30,'2015-08-04 12:51:30',NULL,NULL,1),(140,'308G4ARVNTE1SA25R5',30,'2015-08-04 12:51:30',NULL,NULL,1),(141,'30VWTEPIOEPPAPI3GY',30,'2015-08-04 12:51:30',NULL,NULL,1),(142,'30I00BDYPMTY1PAQDO',30,'2015-08-04 12:51:30',NULL,NULL,1),(143,'30527LTVGJIE6FSXJF',30,'2015-08-04 12:51:30',NULL,NULL,1),(144,'302T1PWB3FHME3SBTD',30,'2015-08-04 12:51:30',NULL,NULL,1),(145,'30EOOM98F3TA0F64RJ',30,'2015-08-04 12:51:30',NULL,NULL,1),(146,'304QYWU0065Y86QGLW',30,'2015-08-04 12:51:30',NULL,NULL,1),(147,'30YXKJT8F72RFWRPM7',30,'2015-08-04 12:51:30',NULL,NULL,1),(148,'30Q72HY892VBWK6RLK',30,'2015-08-04 12:51:30',NULL,NULL,1),(149,'30IOTFU5HNSNXS3P69',30,'2015-08-04 12:51:30',NULL,NULL,1),(150,'30S2J267TH9BIKKQWM',30,'2015-08-04 12:51:30',NULL,NULL,1),(151,'305WDA5P6CVRFF863C',30,'2015-08-04 12:51:30',NULL,NULL,1),(152,'30QV3HR8Q560O373XO',30,'2015-08-04 12:51:30',NULL,NULL,1),(153,'302P37OCYH5NMV1FA0',30,'2015-08-04 12:51:30',NULL,NULL,1),(154,'3086B1DVP5B7BRKCJ5',30,'2015-08-04 12:51:30',NULL,NULL,1),(155,'30V67M7QPKAADMTOF1',30,'2015-08-04 12:51:30',NULL,NULL,1),(156,'30EJIW0M7M47FLLWTA',30,'2015-08-04 12:51:30',NULL,NULL,1),(157,'30DF6CSLXL0167CF37',30,'2015-08-04 12:51:30',NULL,NULL,1),(158,'304OW8GT2478TJ5UFO',30,'2015-08-04 12:51:30',NULL,NULL,1),(159,'30KGP7UBOGOS68928H',30,'2015-08-04 12:51:30',NULL,NULL,1),(160,'30VUP2H8AFSSW9NDBJ',30,'2015-08-04 12:51:30',NULL,NULL,1),(161,'30G4R3D8SV5UJEALT6',30,'2015-08-04 12:51:30',NULL,NULL,1),(162,'30LLSYCQYANBUXYFON',30,'2015-08-04 12:51:30',NULL,NULL,1),(163,'30WOOGO8TGPY4LKD2O',30,'2015-08-04 12:51:30',NULL,NULL,1),(164,'30HRD1MXKOTWEQADOM',30,'2015-08-04 12:51:30',NULL,NULL,1),(165,'300WCHO049MPYJM5PB',30,'2015-08-04 12:51:30',NULL,NULL,1),(166,'30XCLFK23QE60WIOB8',30,'2015-08-04 12:51:30',NULL,NULL,1),(167,'30SDEFXXN1IUBKQ0IN',30,'2015-08-04 12:51:30',NULL,NULL,1),(168,'30TY7YQ9PRNX8IQ7R4',30,'2015-08-04 12:51:30',NULL,NULL,1),(169,'30EE7AVGSJ4TSSSBHM',30,'2015-08-04 12:51:30',NULL,NULL,1),(170,'30V1HCOXJGGSMB0T2B',30,'2015-08-04 12:51:30',NULL,NULL,1),(171,'307K2ECJEVDAVE25KX',30,'2015-08-04 12:51:30',NULL,NULL,1),(172,'307YXC5LPWXFG2OLD1',30,'2015-08-04 12:51:30',NULL,NULL,1),(173,'30YX7V2V59OUVVEMG6',30,'2015-08-04 12:51:30',NULL,NULL,1),(174,'300EI8KOTC5154YRNV',30,'2015-08-04 12:51:30',NULL,NULL,1),(175,'30BNTLUG76JDVAT207',30,'2015-08-04 12:51:30',NULL,NULL,1),(176,'30GFI7H7972HT7M0XB',30,'2015-08-04 12:51:30',NULL,NULL,1),(177,'30DKOYL61O1S8J679F',30,'2015-08-04 12:51:30',NULL,NULL,1),(178,'30YI0P5XD2QH8ULBVJ',30,'2015-08-04 12:51:30',NULL,NULL,1),(179,'30VNHP5QLBNX1LYCMR',30,'2015-08-04 12:51:30',NULL,NULL,1),(180,'30V1SU5TWH8D7HXOKI',30,'2015-08-04 12:51:30',NULL,NULL,1),(181,'30SFRS69O4ODLRCF05',30,'2015-08-04 12:51:30',NULL,NULL,1),(182,'30GDY03SOL4VOHQN3O',30,'2015-08-04 12:51:30',NULL,NULL,1),(183,'30T6XC6OW1LQ3WHL8P',30,'2015-08-04 12:51:30',NULL,NULL,1),(184,'30GGBL8L7Q8AX9GBA8',30,'2015-08-04 12:51:30',NULL,NULL,1),(185,'30D856NPQIFARK45WV',30,'2015-08-04 12:51:30',NULL,NULL,1),(186,'30KTAWOUDSAUCGRU1P',30,'2015-08-04 12:51:30',NULL,NULL,1),(187,'30TRK21SXFAA0MN8CR',30,'2015-08-04 12:51:30',NULL,NULL,1),(188,'30OY9E1Q74A42NFQHO',30,'2015-08-04 12:51:30',NULL,NULL,1),(189,'30Q1PKPU6V3M659TE7',30,'2015-08-04 12:51:30',NULL,NULL,1),(190,'3070HNFCB0W9D7S4I3',30,'2015-08-04 12:51:30',NULL,NULL,1),(191,'30EORABUKTPMIEKPF5',30,'2015-08-04 12:51:30',NULL,NULL,1),(192,'30O3PRWY3Q2F50VGLF',30,'2015-08-04 12:51:30',NULL,NULL,1),(196,'30D7EW03NO2WOY575S',30,'2015-08-04 13:01:38',NULL,NULL,6),(197,'30D3YO586RTMOXV0NP',30,'2015-08-04 13:01:38',NULL,NULL,6),(198,'30DX56EBFHOU5SD3XS',30,'2015-08-04 13:01:38',NULL,NULL,6),(199,'30DTXFAQ78WPXFW5AN',30,'2015-08-04 13:01:38',NULL,NULL,6);
/*!40000 ALTER TABLE `bs_card` ENABLE KEYS */;

#
# Structure for table "bs_category"
#

DROP TABLE IF EXISTS `bs_category`;
CREATE TABLE `bs_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(20) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "bs_category"
#

/*!40000 ALTER TABLE `bs_category` DISABLE KEYS */;
INSERT INTO `bs_category` VALUES (2,'常规插件'),(3,'瞄准插件'),(4,'游戏美化'),(5,'黑科技'),(6,'整合包'),(7,'10秒灯泡');
/*!40000 ALTER TABLE `bs_category` ENABLE KEYS */;

#
# Structure for table "bs_plugin"
#

DROP TABLE IF EXISTS `bs_plugin`;
CREATE TABLE `bs_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(30) NOT NULL COMMENT '插件名称',
  `remark` varchar(250) NOT NULL COMMENT '备注',
  `support` varchar(40) NOT NULL COMMENT '兼容性',
  `edition` varchar(10) NOT NULL COMMENT '版本',
  `uploadtime` datetime NOT NULL COMMENT '上传时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  `cid` int(11) NOT NULL COMMENT '分类',
  `guid` char(32) NOT NULL DEFAULT '' COMMENT 'guid',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "bs_plugin"
#

/*!40000 ALTER TABLE `bs_plugin` DISABLE KEYS */;
/*!40000 ALTER TABLE `bs_plugin` ENABLE KEYS */;

#
# Structure for table "bs_user"
#

DROP TABLE IF EXISTS `bs_user`;
CREATE TABLE `bs_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `lastlogin` datetime DEFAULT NULL COMMENT '最后登录时间',
  `logintime` int(11) DEFAULT NULL COMMENT '登录次数',
  `mcode` varchar(30) DEFAULT NULL COMMENT '机器码',
  `expiretime` datetime DEFAULT NULL COMMENT '到期时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '安全邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Data for table "bs_user"
#

/*!40000 ALTER TABLE `bs_user` DISABLE KEYS */;
INSERT INTO `bs_user` VALUES (1,'admin','wwwwww','2015-08-03 14:50:29',5,'1079375538','2015-09-10 22:00:00',1,'657126610@qq.com'),(2,'bbb','bbb','2015-08-01 20:50:12',3,'1079375538','2015-09-10 22:00:00',1,''),(3,'abc','aaa',NULL,NULL,NULL,NULL,1,''),(4,'123','123',NULL,NULL,NULL,NULL,1,''),(5,'abccc','a',NULL,NULL,NULL,NULL,1,''),(6,'mingtian','123',NULL,NULL,NULL,NULL,1,''),(7,'akak','111',NULL,NULL,NULL,NULL,1,'6657'),(8,'1','1',NULL,NULL,NULL,NULL,1,'11@qq.com'),(9,'mxmh','aaa',NULL,NULL,NULL,NULL,1,'855@qq.com'),(10,'test','test',NULL,NULL,NULL,NULL,1,'777@qq.com'),(11,'aaa','111',NULL,NULL,NULL,NULL,1,'111@qq.com'),(12,'aaa1','aaa1',NULL,NULL,NULL,NULL,1,'aaa@aa.com');
/*!40000 ALTER TABLE `bs_user` ENABLE KEYS */;


DROP TABLE IF EXISTS `bs_zhubo`;
CREATE TABLE `bs_zhubo` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(30) DEFAULT NULL COMMENT '主播名字',
  `zhifubao` varchar(40) DEFAULT NULL COMMENT '支付宝',
  `monday` varchar(64) COMMENT '周一',
    `tuesday` varchar(64) COMMENT '周二',
    `wednesday` varchar(64) COMMENT '周三',
    `thursday` varchar(64) COMMENT '周四',
    `friday` varchar(64) COMMENT '周五',
    `saturday` varchar(64) COMMENT '周六',
    `sunday` varchar(64) COMMENT '周日',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;