/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_shuntai

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-27 14:46:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `st_admin`
-- ----------------------------
DROP TABLE IF EXISTS `st_admin`;
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

-- ----------------------------
-- Records of st_admin
-- ----------------------------
INSERT INTO `st_admin` VALUES ('1', '1', 'admin', '$2y$10$Mk4BtG4FAbEdkDxwqFkEhOTLzMHLNzi/Cmg.hzhWR8INm8JWxBEgq', '0', '2018-03-20 20:55:22', '2018-03-27 14:30:09', '2018-03-27 14:30:09');
INSERT INTO `st_admin` VALUES ('3', '0', 'jkjun', '$2y$10$VvrQ2rC67AOVvs6Sr6sWeuSdF0gyBQa/v1mFv8sVFYfsMzpQ/hZ12', '0', '2018-03-20 21:42:23', '2018-03-21 13:35:27', '2018-03-21 13:35:27');

-- ----------------------------
-- Table structure for `st_message`
-- ----------------------------
DROP TABLE IF EXISTS `st_message`;
CREATE TABLE `st_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `content` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of st_message
-- ----------------------------
INSERT INTO `st_message` VALUES ('5', '发大师傅', '631642753@qq.com', '法撒旦法', '2018-03-27 14:29:45', '2018-03-27 14:29:45');

-- ----------------------------
-- Table structure for `st_news`
-- ----------------------------
DROP TABLE IF EXISTS `st_news`;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of st_news
-- ----------------------------
INSERT INTO `st_news` VALUES ('2', 'new2', '风华网', '导语：电子竞技产业作为国内增速最快的市场近年来吸引了众多资本涌入，根据相关数据显示电竞产业在今年有望达到700亿元产值。然而电子竞技之所以有如此之大的发展潜能，其中主要得益于女性玩家参与度的持续增长。随着电竞普及程度的不断增加，越来越多的女性参与到电子竞技的产业中，不仅是作为观众，同时还有电竞玩家、电竞选手、游戏设计师、俱乐部运营等等众多的角色。<br>然而电子竞技对待女性玩家的态度似乎并没有随着女性群体的增长而改变，相反纵观国内外电竞圈，女性电竞从业者目前仍处在一个较为尴尬的位置。恒一文化传播有限公司（以下简称恒一文化）作为电竞教育的核心企业，一直不断关注电竞产业内的不均衡发展现象；针对目前电竞行业所存在的“性别歧视”问题，恒一文化认为除了不断规范以外，电竞教育或许是解决问题的新途径。<br>从传统体育到电子竞技<br>纵观体育运动的发展，在竞技体育的发展初期，体育运动的文化形象一直传达着一种女性不属于运动的讯息，这种“性别歧视”让许多女性丧失了运动机会、资源、并带来报酬上的不平等。反观电子竞技的发展历程，女性玩家一直以来都占据着游戏玩家总人口的半壁江山，但她们在竞技类游戏中却只占据着很小一部分。而导致女性玩家在竞技游戏这个大市场中缺席的一个最重要的因素，则是在游戏中普遍存在的性别歧视。<br>在85%的玩家为男性玩家的大背景影响下，竞技游戏中一直不断上演网络辱骂、骚扰等恶劣事件，种种原因阻碍了许多女性投入到电竞游戏当中来。尽管如此，也有不少女性尝试加入职业电竞行业，但是结果往往不尽如人意。<br>[图片1]<br>女性电竞人坎坷追梦<br>大家熟知的《英雄联盟》解说小苍就曾组建过中国首支《英雄联盟》女子战队——英雄联盟adies，不幸的是由于缺乏比赛机会，这支战队在2013年4月宣布解散。对于女子电竞选手来说，很多人都被直接与作秀画上等号。尽管一些女性职业选手在技战水平和训练时长方面都不输男性选手，但相较于男性选手而言女选手的机会和收入都相对较少。<br>除此之外，当前电竞和直播行业呈现出快速崛起的趋势，但就目前的发展状况来看，绝大多数的观众对女主播的关注还是主要集中在外貌以及个人生活方面，他们看重的往往不是该女性玩家的真实技术，而仅仅是她的性别本身。<br>壁垒打破需教育引导<br>针对目前电竞行业存在的“性别歧视”，一些赛事也开始关注到这些问题。前段时间所举办的2017WESG新增设女子组比赛，旨在推动电竞运动中的男女平等；然而一些外媒却认为，将男女分开竞技并不是一个能解决在电竞游戏中女性玩家偏少的好方法，它只会加深那些潜在的问题。而经年累月下，当整个电竞游戏市场变动更加成熟、更为主流化之后，这一顽疾只会变得更加根深蒂固。<br>[图片2]<br>针对目前所存在的种种问题，恒一文化认为教育或许是打破这一壁垒的新途径。作为最早一批涉足电竞教育的企业，恒一团队一直在致力于推动电竞产业良性发展。一方面，教育的引导客观上会打破“男女差距”的认知；另一方面，电竞教育也为女性提供了更多的条件，无论是职业电竞选手还是有志于从事电竞行业的女性，电竞教育为她们拓宽了未来职业选择的方向。<br>结语：电子竞技是一种公平竞技运动。推动电竞运动中的男女平等，首先应鼓励更多的女性参与到电竞产业的各个环节中来。根据目前的发展态势，竞技类游戏的市场规模在2018年有望达到11亿美元，随着未来电竞产业的发展，女性的持续参与显得至关重要。如今，整个行业都逐渐开始支持和鼓励女从业者和女玩家们，恒一文化相信随着电竞教育的推动以及产业制度的不断完善，阻碍女性电竞人发展的“性别壁垒”终将会被打破。', 'http://eshunter.com/storage/newspic/1@2017-10-17-05-44-30-59e598bea31e1news1.png;2@2017-10-17-05-44-30-59e598bea43f3news2.png;', null, null, '13', '2018-03-21 11:58:56', '2018-03-27 11:04:44');
INSERT INTO `st_news` VALUES ('3', 'new3', '风华网', '导语：电子竞技产业作为国内增速最快的市场近年来吸引了众多资本涌入，根据相关数据显示电竞产业在今年有望达到700亿元产值。然而电子竞技之所以有如此之大的发展潜能，其中主要得益于女性玩家参与度的持续增长。随着电竞普及程度的不断增加，越来越多的女性参与到电子竞技的产业中，不仅是作为观众，同时还有电竞玩家、电竞选手、游戏设计师、俱乐部运营等等众多的角色。<br>然而电子竞技对待女性玩家的态度似乎并没有随着女性群体的增长而改变，相反纵观国内外电竞圈，女性电竞从业者目前仍处在一个较为尴尬的位置。恒一文化传播有限公司（以下简称恒一文化）作为电竞教育的核心企业，一直不断关注电竞产业内的不均衡发展现象；针对目前电竞行业所存在的“性别歧视”问题，恒一文化认为除了不断规范以外，电竞教育或许是解决问题的新途径。<br>从传统体育到电子竞技<br>纵观体育运动的发展，在竞技体育的发展初期，体育运动的文化形象一直传达着一种女性不属于运动的讯息，这种“性别歧视”让许多女性丧失了运动机会、资源、并带来报酬上的不平等。反观电子竞技的发展历程，女性玩家一直以来都占据着游戏玩家总人口的半壁江山，但她们在竞技类游戏中却只占据着很小一部分。而导致女性玩家在竞技游戏这个大市场中缺席的一个最重要的因素，则是在游戏中普遍存在的性别歧视。<br>在85%的玩家为男性玩家的大背景影响下，竞技游戏中一直不断上演网络辱骂、骚扰等恶劣事件，种种原因阻碍了许多女性投入到电竞游戏当中来。尽管如此，也有不少女性尝试加入职业电竞行业，但是结果往往不尽如人意。<br>[图片1]<br>女性电竞人坎坷追梦<br>大家熟知的《英雄联盟》解说小苍就曾组建过中国首支《英雄联盟》女子战队——英雄联盟adies，不幸的是由于缺乏比赛机会，这支战队在2013年4月宣布解散。对于女子电竞选手来说，很多人都被直接与作秀画上等号。尽管一些女性职业选手在技战水平和训练时长方面都不输男性选手，但相较于男性选手而言女选手的机会和收入都相对较少。<br>除此之外，当前电竞和直播行业呈现出快速崛起的趋势，但就目前的发展状况来看，绝大多数的观众对女主播的关注还是主要集中在外貌以及个人生活方面，他们看重的往往不是该女性玩家的真实技术，而仅仅是她的性别本身。<br>壁垒打破需教育引导<br>针对目前电竞行业存在的“性别歧视”，一些赛事也开始关注到这些问题。前段时间所举办的2017WESG新增设女子组比赛，旨在推动电竞运动中的男女平等；然而一些外媒却认为，将男女分开竞技并不是一个能解决在电竞游戏中女性玩家偏少的好方法，它只会加深那些潜在的问题。而经年累月下，当整个电竞游戏市场变动更加成熟、更为主流化之后，这一顽疾只会变得更加根深蒂固。<br>[图片2]<br>针对目前所存在的种种问题，恒一文化认为教育或许是打破这一壁垒的新途径。作为最早一批涉足电竞教育的企业，恒一团队一直在致力于推动电竞产业良性发展。一方面，教育的引导客观上会打破“男女差距”的认知；另一方面，电竞教育也为女性提供了更多的条件，无论是职业电竞选手还是有志于从事电竞行业的女性，电竞教育为她们拓宽了未来职业选择的方向。<br>结语：电子竞技是一种公平竞技运动。推动电竞运动中的男女平等，首先应鼓励更多的女性参与到电竞产业的各个环节中来。根据目前的发展态势，竞技类游戏的市场规模在2018年有望达到11亿美元，随着未来电竞产业的发展，女性的持续参与显得至关重要。如今，整个行业都逐渐开始支持和鼓励女从业者和女玩家们，恒一文化相信随着电竞教育的推动以及产业制度的不断完善，阻碍女性电竞人发展的“性别壁垒”终将会被打破。', 'http://eshunter.com/storage/newspic/1@2017-10-17-05-44-30-59e598bea31e1news1.png;2@2017-10-17-05-44-30-59e598bea43f3news2.png;', null, null, '26', '2018-03-21 11:58:57', '2018-03-27 13:38:38');
INSERT INTO `st_news` VALUES ('4', '上课玩游戏？杭州高校开出电竞课', 'fsdfs', '1\\safsadf<br>[图片1]<br>2\\fgadfaf<br>[图片2]', 'http://localhost/storage/newspic/1@2018-03-21-13-49-48-5ab1f27cc262fnews1.jpg;2@2018-03-21-13-49-48-5ab1f27cc4a61news2.jpg;', null, null, '37', '2018-03-21 13:49:48', '2018-03-27 10:38:28');
INSERT INTO `st_news` VALUES ('5', '电竞选手基数大 衍生产业急需专业人才', 'fsdafd', 'fasfdsafsad<br>[图片1]<br>34fdsafasdf<br>[图片2]', 'http://localhost/storage/newspic/1@2018-03-21-14-22-16-5ab1fa186aecfnews1.png;2@2018-03-21-14-22-16-5ab1fa186d2cbnews2.jpg;', null, null, '62', '2018-03-21 14:22:16', '2018-03-27 11:48:14');

-- ----------------------------
-- Table structure for `st_product`
-- ----------------------------
DROP TABLE IF EXISTS `st_product`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of st_product
-- ----------------------------
INSERT INTO `st_product` VALUES ('1', '1', '测试1', 'test1', null, null, '111', null, '0', '2018-03-21 10:13:58', '2018-03-27 11:36:02');
INSERT INTO `st_product` VALUES ('2', '1', '测试2', 'test2', null, null, '222', null, '1', '2018-03-21 10:13:59', '2018-03-27 11:36:03');
INSERT INTO `st_product` VALUES ('3', '2', '测试3', 'test3', null, null, '333', null, '1', '2018-03-21 10:14:13', '2018-03-27 11:36:04');

-- ----------------------------
-- Table structure for `st_product_type`
-- ----------------------------
DROP TABLE IF EXISTS `st_product_type`;
CREATE TABLE `st_product_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(100) DEFAULT NULL COMMENT '产品类别——中文名称',
  `en_name` varchar(100) DEFAULT NULL COMMENT '英文类型名',
  `describe` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of st_product_type
-- ----------------------------
INSERT INTO `st_product_type` VALUES ('1', '分类1', 'type1', null, '2018-03-21 10:14:42', '2018-03-21 10:14:42');
INSERT INTO `st_product_type` VALUES ('2', '分类2', 'type2', null, '2018-03-21 10:13:20', '2018-03-21 10:13:20');

-- ----------------------------
-- Table structure for `st_webinfo`
-- ----------------------------
DROP TABLE IF EXISTS `st_webinfo`;
CREATE TABLE `st_webinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tel` varchar(200) DEFAULT NULL COMMENT '电话',
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL COMMENT '邮箱',
  `address` varchar(200) DEFAULT NULL COMMENT '地址',
  `postcodes` varchar(100) DEFAULT NULL COMMENT '邮编',
  `brief` varchar(1000) DEFAULT NULL COMMENT '企业简介',
  `describe` longtext COMMENT '企业详情介绍描述',
  `picture` varchar(1000) DEFAULT NULL COMMENT '企业展示图片',
  `carousel` varchar(1000) DEFAULT NULL COMMENT '首页轮播图',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of st_webinfo
-- ----------------------------
INSERT INTO `st_webinfo` VALUES ('1', '13738713800', '400123', '280722223@qq.com', '温州经济技术开发区滨海二十五路422号（温州市金海化学品市场）A504号', '325000', '温州市顺泰化工有限公司（原温州市化学用料厂）坐落在浙江省温州市沿江工业区33#地块，占地面积11301.01m2，建筑面积12386.8m2。本厂创办于1975年，是原化工部第一批定点生产化学试剂的专业生产厂家，从事化学试剂行业已有40多年的历史，在化学试剂行业中有很大的知名度和影响力。', '目前我们单位是中国化学试剂工业协会常务理事单位；浙江省化学试剂工业协会副会长单位；全国化学标准化技术委员会化学试剂分会委员,并单独组织修订了HG/T 2630 -2010 化学试剂 三水合乙酸铅(乙酸铅)标准。\r\n我公司资金实力雄厚，技术装备精良，技术人员占本厂人数20%以上，注重节能减排、科技创新。特别是最近10年间企业在这方面投入了大量的资金并取得了很好的成效，同时我公司也非常重视产品质量、安全生产和环境保护。我公司是国内第一批获得二级质检机构国家认证的企业之一；还先后通过ISO9001：2008质量管理体系认证、ISO14001：2008环境管理体系认证和温州市安全标准化认证;浙江省科技型中小企业；A级纳税信用企业。\r\n吉象”牌注册商标已有二十多年历史，产品用户遍布全国，部分产品远销欧美及东南亚等国，赢得了海内外用户的信赖和好评，吉象人将一如继往地为您提供优质的产品和最佳的服务。 稳定的产品质量，良好的经营信誉，完善的售后服务是我们对您的承诺。 “吉象”人愿与您携手共创美好未来！ ', '车间图@http://localhost/storage/adpic/2018-03-26-17-18-15-5ab8bad737cadadpic.jpg;车间流水线@http://localhost/storage/adpic/2018-03-26-17-31-31-5ab8bdf3ed4a3adpic.jpg', null, '2018-03-20 20:49:03', '2018-03-27 09:46:04');
