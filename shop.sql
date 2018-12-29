/*
Navicat MySQL Data Transfer

Source Server         : localhost_33061
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-04-21 18:59:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attribute
-- ----------------------------
DROP TABLE IF EXISTS `attribute`;
CREATE TABLE `attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `goods_type_id` smallint(5) unsigned DEFAULT NULL,
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_values` text NOT NULL,
  `attr_input_type` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_front` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `goods_type_attribute_fk` (`goods_type_id`),
  CONSTRAINT `goods_type_attribute_fk` FOREIGN KEY (`goods_type_id`) REFERENCES `goods_type` (`goods_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attribute
-- ----------------------------
INSERT INTO `attribute` VALUES ('1', '2', '型号', '', '0', '0');
INSERT INTO `attribute` VALUES ('2', '2', '详细规格', '', '0', '0');
INSERT INTO `attribute` VALUES ('3', '2', '笔记本尺寸', '', '0', '0');
INSERT INTO `attribute` VALUES ('4', '2', '处理器类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('5', '2', '处理器最高主频', '', '0', '0');
INSERT INTO `attribute` VALUES ('6', '2', '二级缓存', '', '0', '0');
INSERT INTO `attribute` VALUES ('7', '2', '系统总线', '', '0', '0');
INSERT INTO `attribute` VALUES ('9', '2', '内存容量', '', '0', '0');
INSERT INTO `attribute` VALUES ('10', '2', '内存类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('11', '2', '硬盘', '', '0', '0');
INSERT INTO `attribute` VALUES ('12', '2', '屏幕尺寸', '', '0', '0');
INSERT INTO `attribute` VALUES ('13', '2', '显示芯片', '', '0', '0');
INSERT INTO `attribute` VALUES ('14', '2', '标称频率', '', '0', '0');
INSERT INTO `attribute` VALUES ('15', '2', '显卡显存', '', '0', '0');
INSERT INTO `attribute` VALUES ('16', '2', '显卡类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('17', '2', '光驱类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('18', '2', '电池容量', '', '0', '0');
INSERT INTO `attribute` VALUES ('19', '2', '其他配置', '', '0', '0');
INSERT INTO `attribute` VALUES ('40', '3', '上市日期', '', '0', '0');
INSERT INTO `attribute` VALUES ('41', '3', '手机制式', '', '0', '0');
INSERT INTO `attribute` VALUES ('42', '3', '理论通话时间', '', '0', '0');
INSERT INTO `attribute` VALUES ('43', '3', '理论待机时间', '', '0', '0');
INSERT INTO `attribute` VALUES ('44', '3', '铃声', '', '0', '0');
INSERT INTO `attribute` VALUES ('45', '3', '铃声格式', '', '0', '0');
INSERT INTO `attribute` VALUES ('46', '3', '外观样式', '', '0', '0');
INSERT INTO `attribute` VALUES ('47', '3', '中文短消息', '', '0', '0');
INSERT INTO `attribute` VALUES ('48', '3', '存储卡格式', '', '0', '0');
INSERT INTO `attribute` VALUES ('49', '3', '内存容量', '', '0', '0');
INSERT INTO `attribute` VALUES ('50', '3', '操作系统', '', '0', '0');
INSERT INTO `attribute` VALUES ('51', '3', 'K-JAVA', '', '0', '0');
INSERT INTO `attribute` VALUES ('52', '3', '尺寸体积', '', '0', '0');
INSERT INTO `attribute` VALUES ('53', '3', '颜色', '', '0', '0');
INSERT INTO `attribute` VALUES ('54', '3', '屏幕颜色', '', '0', '0');
INSERT INTO `attribute` VALUES ('55', '3', '屏幕材质', '', '0', '0');
INSERT INTO `attribute` VALUES ('56', '3', '屏幕分辨率', '', '0', '0');
INSERT INTO `attribute` VALUES ('57', '3', '屏幕大小', '', '0', '0');
INSERT INTO `attribute` VALUES ('58', '3', '中文输入法', '', '0', '0');
INSERT INTO `attribute` VALUES ('59', '3', '情景模式', '', '0', '0');
INSERT INTO `attribute` VALUES ('60', '3', '网络链接', '', '0', '0');
INSERT INTO `attribute` VALUES ('61', '3', '蓝牙接口', '', '0', '0');
INSERT INTO `attribute` VALUES ('62', '3', '数据线接口', '', '0', '0');
INSERT INTO `attribute` VALUES ('63', '3', '电子邮件', '', '0', '0');
INSERT INTO `attribute` VALUES ('64', '3', '闹钟', '', '0', '0');
INSERT INTO `attribute` VALUES ('65', '3', '办公功能', '', '0', '0');
INSERT INTO `attribute` VALUES ('66', '3', '数码相机', '', '0', '0');
INSERT INTO `attribute` VALUES ('67', '3', '像素', '', '0', '0');
INSERT INTO `attribute` VALUES ('68', '3', '传感器', '', '0', '0');
INSERT INTO `attribute` VALUES ('69', '3', '变焦模式', '', '0', '0');
INSERT INTO `attribute` VALUES ('70', '3', '视频拍摄', '', '0', '0');
INSERT INTO `attribute` VALUES ('71', '3', 'MP3播放器', '', '0', '0');
INSERT INTO `attribute` VALUES ('72', '3', '视频播放', '', '0', '0');
INSERT INTO `attribute` VALUES ('73', '3', 'CPU频率', '', '0', '0');
INSERT INTO `attribute` VALUES ('74', '3', '收音机', '', '0', '0');
INSERT INTO `attribute` VALUES ('75', '3', '耳机接口', '', '0', '0');
INSERT INTO `attribute` VALUES ('76', '3', '闪光灯', '', '0', '0');
INSERT INTO `attribute` VALUES ('77', '3', '浏览器', '', '0', '0');
INSERT INTO `attribute` VALUES ('78', '3', '配件', '', '0', '0');
INSERT INTO `attribute` VALUES ('79', '4', '最大像素/总像素', '500万像素\r\n960万像素\r\n1200万像素\r\n2000万像素', '1', '0');
INSERT INTO `attribute` VALUES ('80', '4', '有效像素', '500万像素\r\n800万像素\r\n1000万像素', '1', '0');
INSERT INTO `attribute` VALUES ('81', '4', '光学变焦倍数', '', '0', '0');
INSERT INTO `attribute` VALUES ('82', '4', '数字变焦倍数', '', '0', '0');
INSERT INTO `attribute` VALUES ('83', '4', ' 操作模式', '', '0', '0');
INSERT INTO `attribute` VALUES ('84', '4', '显示屏类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('85', '4', '显示屏尺寸', '', '0', '0');
INSERT INTO `attribute` VALUES ('86', '4', '感光器件', '', '0', '0');
INSERT INTO `attribute` VALUES ('87', '4', '感光器件尺寸', '', '0', '0');
INSERT INTO `attribute` VALUES ('88', '4', '最高分辨率', '', '0', '0');
INSERT INTO `attribute` VALUES ('89', '4', '图像分辨率', '', '0', '0');
INSERT INTO `attribute` VALUES ('90', '4', '传感器类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('91', '4', ' 传感器尺寸', '', '0', '0');
INSERT INTO `attribute` VALUES ('92', '4', '镜头', '', '0', '0');
INSERT INTO `attribute` VALUES ('93', '4', ' 光圈', '', '0', '0');
INSERT INTO `attribute` VALUES ('94', '4', '焦距', '', '0', '0');
INSERT INTO `attribute` VALUES ('95', '4', '旋转液晶屏', '', '0', '0');
INSERT INTO `attribute` VALUES ('96', '4', '存储介质', '', '0', '0');
INSERT INTO `attribute` VALUES ('97', '4', '存储卡', '', '0', '0');
INSERT INTO `attribute` VALUES ('98', '4', '影像格式', '', '0', '0');
INSERT INTO `attribute` VALUES ('99', '4', ' 曝光控制', '', '0', '0');
INSERT INTO `attribute` VALUES ('100', '4', '曝光模式', '', '0', '0');
INSERT INTO `attribute` VALUES ('101', '4', '曝光补偿', '', '0', '0');
INSERT INTO `attribute` VALUES ('102', '4', '白平衡', '', '0', '0');
INSERT INTO `attribute` VALUES ('103', '4', '连拍', '', '0', '0');
INSERT INTO `attribute` VALUES ('104', '4', '快门速度', '', '0', '0');
INSERT INTO `attribute` VALUES ('105', '4', '闪光灯', '', '0', '0');
INSERT INTO `attribute` VALUES ('106', '4', '拍摄范围', '', '0', '0');
INSERT INTO `attribute` VALUES ('107', '4', '自拍定时器', '', '0', '0');
INSERT INTO `attribute` VALUES ('108', '4', ' ISO感光度', '', '0', '0');
INSERT INTO `attribute` VALUES ('109', '4', ' 测光模式', '', '0', '0');
INSERT INTO `attribute` VALUES ('110', '4', '场景模式', '', '0', '0');
INSERT INTO `attribute` VALUES ('111', '4', '短片拍摄', '', '0', '0');
INSERT INTO `attribute` VALUES ('112', '4', ' 外接接口', '', '0', '0');
INSERT INTO `attribute` VALUES ('113', '4', ' 电源', '', '0', '0');
INSERT INTO `attribute` VALUES ('114', '4', '电池使用时间', '', '0', '0');
INSERT INTO `attribute` VALUES ('115', '4', '外形尺寸', '', '0', '0');
INSERT INTO `attribute` VALUES ('116', '4', '标配软件', '', '0', '0');
INSERT INTO `attribute` VALUES ('117', '4', '标准配件', '', '0', '0');
INSERT INTO `attribute` VALUES ('118', '4', '兼容操作系统', '', '2', '0');
INSERT INTO `attribute` VALUES ('120', '1', '适用对象', '', '0', '0');
INSERT INTO `attribute` VALUES ('121', '1', '袖长', '', '0', '0');
INSERT INTO `attribute` VALUES ('122', '1', '尺码', '', '0', '1');
INSERT INTO `attribute` VALUES ('123', '1', '领型', '', '0', '0');
INSERT INTO `attribute` VALUES ('124', '1', '适用季节', '', '0', '0');
INSERT INTO `attribute` VALUES ('125', '1', '颜色分类', '', '0', '0');
INSERT INTO `attribute` VALUES ('127', '1', '休闲衣类别', '', '0', '0');
INSERT INTO `attribute` VALUES ('128', '1', '衣长', '', '0', '0');
INSERT INTO `attribute` VALUES ('129', '1', '厚薄', '', '0', '0');
INSERT INTO `attribute` VALUES ('130', '1', '销售渠道类型', '', '0', '0');
INSERT INTO `attribute` VALUES ('131', '1', '图案', '', '0', '0');
INSERT INTO `attribute` VALUES ('132', '1', '材质成分', '', '0', '0');
INSERT INTO `attribute` VALUES ('133', '1', '开衩方式', '', '0', '0');
INSERT INTO `attribute` VALUES ('134', '1', '门襟/纽扣', '', '0', '0');
INSERT INTO `attribute` VALUES ('135', '1', '版型', '', '0', '0');
INSERT INTO `attribute` VALUES ('147', '1', '上市时间', '', '0', '0');
INSERT INTO `attribute` VALUES ('180', '1', '穿搭方式', '', '0', '0');
INSERT INTO `attribute` VALUES ('181', '1', '适用年龄', '', '0', '0');
INSERT INTO `attribute` VALUES ('183', '2', '套餐', '', '0', '1');
INSERT INTO `attribute` VALUES ('184', '3', '套餐', '', '0', '1');
INSERT INTO `attribute` VALUES ('185', '5', '尺码', '', '0', '1');

-- ----------------------------
-- Table structure for brand
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brand_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('1', '诺基亚', '', '诺基亚耐摔', '', '1');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `goods_type_id` smallint(5) unsigned DEFAULT NULL,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`),
  KEY `category_goods_type_fk` (`goods_type_id`),
  CONSTRAINT `category_goods_type_fk` FOREIGN KEY (`goods_type_id`) REFERENCES `goods_type` (`goods_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('63', null, '服装鞋帽', '', '这是关于男装，女装，内衣/袜品，鞋类，皮带/帽/手套，箱包的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('64', null, '美容护肤', '', '这是关于美容,美体的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('65', null, '婴幼孕妇', '', '这是关于妈妈用品，婴幼用品的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('66', null, '数码家电', '', '这是关于电脑，数码，家电，手机的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('67', null, '家居日用', '', '这是关于居家用品，装饰装潢用品的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('68', null, '食品特产', '', '这是关于食品，地方特产，畜牧产品的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('69', null, '文体用品', '', '这是关于汽车/摩托，运动健身，户外，书籍报刊，影音娱乐，文具学习的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('70', null, '手表配饰', '', '这是关于手表，饰品，珠宝/钻石/翡翠/黄金，眼镜，zippo/瑞士军刀，烟具的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('71', null, '虚拟商品', '', '这是关于点卡，网游，充值，腾讯的分类', '0', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('72', null, '女装', '', '这是关于女装的分类', '63', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('73', null, '男装', '', '这是关于男装的分类', '63', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('74', null, '内衣/袜品', '', '这是关于内衣/袜品的分类', '63', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('75', null, '鞋类', '', '这是关于鞋类的分类', '63', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('76', null, '皮带/帽/手套', '', '这是关于皮带/帽/手套的分类', '63', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('77', null, '箱包', '', '这是关于箱包的分类', '63', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('78', null, '美容', '', '这是关于美容的分类', '64', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('79', null, '美体', '', '这是关于美体的分类', '64', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('80', null, '妈妈用品', '', '这是关于妈妈用品的分类', '65', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('81', null, '婴幼用品', '', '这是关于婴幼用品的分类', '65', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('82', null, '电脑', '', '这是关于电脑的分类', '66', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('83', null, '手机', '', '这是关于手机的分类', '66', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('84', null, '数码', '', '这是关于数码的分类', '66', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('85', null, '家电', '', '这是关于家电的分类', '66', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('87', null, '居家用品', '', '这是关于居家用品的分类', '67', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('88', null, '装饰装潢', '', '这是关于装饰装潢的用品', '67', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('90', null, '食品', '', '这是关于食品的分类', '68', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('91', null, '地方特产', '', '这是关于地方特产的分类', '68', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('92', null, '畜牧产品', '', '这是关于畜牧产品的分类', '68', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('93', null, '汽车/摩托', '', '这是关于汽车/摩托的分类', '69', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('94', null, '运动健身', '', '这是关于运动健身的分类', '69', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('95', null, '户外', '', '这是关于户外的分类', '69', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('96', null, '书籍/报刊', '', '这是关于书籍/报刊的分类', '69', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('97', null, '影音娱乐', '', '这是关于影音娱乐的分类', '69', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('98', null, '文具学习', '', '这是关于文具学习的分类', '69', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('99', null, '手表', '', '这是关于手表的分类', '70', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('100', null, '饰品', '', '这是关于饰品的分类', '70', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('101', null, '珠宝/钻石/翡翠/黄金', '', '这是关于珠宝/钻石/翡翠/黄金的分类', '70', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('102', null, '眼镜', '', '这是关于眼镜的分类', '70', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('103', null, 'zippp/瑞士军刀/烟具', '', '这是关于zippp/瑞士军刀/烟具的分类', '70', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('104', null, '点卡', '', '这是关于点卡的分类', '71', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('105', null, '网游', '', '这是关于网游的分类', '71', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('106', null, '充值', '', '这是关于充值的分类', '71', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('107', null, '腾讯', '', '这是关于腾讯的分类', '71', '1', '0', '1', '50', '');
INSERT INTO `category` VALUES ('112', null, '图书音像', '', '', '0', '1', '0', '1', '50', '');

-- ----------------------------
-- Table structure for chat
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `chat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contactor_id` int(10) unsigned NOT NULL DEFAULT '0',
  `receiver` varchar(33) NOT NULL DEFAULT '',
  `sender` varchar(33) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `send_time` int(10) NOT NULL DEFAULT '0',
  `receive_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`chat_id`),
  KEY `chat_contactor_fk` (`contactor_id`),
  CONSTRAINT `chat_contactor_fk` FOREIGN KEY (`contactor_id`) REFERENCES `contactor` (`contactor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chat
-- ----------------------------

-- ----------------------------
-- Table structure for collect_goods
-- ----------------------------
DROP TABLE IF EXISTS `collect_goods`;
CREATE TABLE `collect_goods` (
  `collect_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` smallint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`collect_id`),
  KEY `collect_goods_customer_fk` (`customer_id`),
  KEY `collect_goods_goods_fk` (`goods_id`),
  CONSTRAINT `collect_goods_customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  CONSTRAINT `collect_goods_goods_fk` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collect_goods
-- ----------------------------
INSERT INTO `collect_goods` VALUES ('1', '2', '9', '1488004007');
INSERT INTO `collect_goods` VALUES ('6', '1', '10', '1491462655');
INSERT INTO `collect_goods` VALUES ('8', '1', '11', '1491463406');
INSERT INTO `collect_goods` VALUES ('9', '1', '39', '1492664253');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` smallint(10) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `comment_time` int(10) unsigned NOT NULL DEFAULT '0',
  `comment_rank` int(2) NOT NULL DEFAULT '5',
  `response` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_goods_fk` (`goods_id`),
  KEY `comment_customer_fk` (`customer_id`),
  CONSTRAINT `comment_customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  CONSTRAINT `comment_goods_fk` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('2', '1', '31', '43', '1489495169', '5', '55');
INSERT INTO `comment` VALUES ('3', '1', '31', '454', '1489495448', '5', '56565');
INSERT INTO `comment` VALUES ('4', '1', '9', '4355435', '1489495967', '5', '4545');

-- ----------------------------
-- Table structure for comment_status
-- ----------------------------
DROP TABLE IF EXISTS `comment_status`;
CREATE TABLE `comment_status` (
  `comment_status_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `goods_id` smallint(10) unsigned NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `add_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment_status
-- ----------------------------
INSERT INTO `comment_status` VALUES ('1', '31', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('2', '9', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('3', '34', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('4', '34', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('5', '34', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('6', '7', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('7', '8', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('8', '7', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('9', '7', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('10', '8', '1', '1', '0');
INSERT INTO `comment_status` VALUES ('11', '7', '1', '1', '0');

-- ----------------------------
-- Table structure for contactor
-- ----------------------------
DROP TABLE IF EXISTS `contactor`;
CREATE TABLE `contactor` (
  `contactor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `contactor_name` varchar(16) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(11) NOT NULL,
  PRIMARY KEY (`contactor_id`),
  UNIQUE KEY `telephone` (`telephone`),
  KEY `contactor_user_fk` (`user_id`),
  CONSTRAINT `contactor_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contactor
-- ----------------------------
INSERT INTO `contactor` VALUES ('1', '1', 'sm', '969051142', '18046039197');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(16) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `question` varchar(333) NOT NULL DEFAULT '',
  `answer` varchar(333) NOT NULL DEFAULT '',
  `lastlogin` int(10) unsigned NOT NULL DEFAULT '0',
  `security_question` varchar(33) DEFAULT NULL,
  `security_answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_name` (`customer_name`),
  UNIQUE KEY `telephone` (`telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', '张伟江', '982215226@qq.com', '13665994204', '1559f7477a69ce9e7274b08b57255808edb70fb73293115864781b2db2cb60194f3fc486052e2337e71c3e5627e2b8f9cb9926151aa4084660c383649f50b3f8', '1489501623', '', '', '0', '1', '89');
INSERT INTO `customer` VALUES ('2', 'zwj', '982215226@qq.com', '13358378959', '1559f7477a69ce9e7274b08b57255808edb70fb73293115864781b2db2cb60194f3fc486052e2337e71c3e5627e2b8f9cb9926151aa4084660c383649f50b3f8', '1476014377', '', '', '0', '', '');
INSERT INTO `customer` VALUES ('3', 'csm', '969051142@qq.com', '18150166307', '3850f93acf7da4b370aeebca9733927aa34692e6e9addf6e82eef1a080d80c4ada5d8582a40d0b7720baa7c8be5368559cb73825554a55140d149221bc0863a5', '1491959845', '', '', '0', '1', '234');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_id` smallint(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` smallint(5) unsigned DEFAULT NULL,
  `goods_sn` char(50) NOT NULL DEFAULT '',
  `cat_id` smallint(5) unsigned DEFAULT NULL,
  `brand_id` smallint(6) DEFAULT NULL,
  `goods_name` varchar(60) NOT NULL DEFAULT '',
  `shop_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `market_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `promote_price` decimal(9,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_start_date` int(11) unsigned NOT NULL DEFAULT '0',
  `promote_end_date` int(11) unsigned NOT NULL DEFAULT '0',
  `provider_name` varchar(100) NOT NULL DEFAULT '',
  `warn_number` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `goods_number` smallint(6) NOT NULL DEFAULT '1',
  `click_count` mediumint(9) NOT NULL DEFAULT '0',
  `goods_weight` decimal(6,3) NOT NULL DEFAULT '0.000',
  `goods_brief` varchar(100) NOT NULL DEFAULT '',
  `goods_desc` text NOT NULL,
  `thumb_img` varchar(50) NOT NULL DEFAULT '',
  `goods_img` varchar(50) NOT NULL DEFAULT '',
  `ori_img` varchar(50) NOT NULL DEFAULT '',
  `is_real` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_on_sale` tinyint(4) NOT NULL DEFAULT '0',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `is_best` tinyint(4) NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0',
  `goods_type_id` smallint(5) unsigned DEFAULT NULL,
  `seller_note` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `support_number` smallint(6) NOT NULL DEFAULT '0',
  `is_alone_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `shipping_price` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`),
  UNIQUE KEY `goods_sn` (`goods_sn`),
  KEY `category_fk` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `shop_fk` (`shop_id`),
  KEY `goods_goods_type_fk` (`goods_type_id`),
  KEY `goods_barnd_fk` (`brand_id`),
  CONSTRAINT `category_fk` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  CONSTRAINT `goods_barnd_fk` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  CONSTRAINT `goods_goods_type_fk` FOREIGN KEY (`goods_type_id`) REFERENCES `goods_type` (`goods_type_id`),
  CONSTRAINT `shop_fk` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('7', null, 'BL2016092998606', '73', null, '2016新款秋冬男士夹克外套中年薄款毛呢商务休闲男装大码爸爸装潮', '268.99', '488.00', '0.00', '0', '0', '0', '1', '', '217', '0', '0.500', '', '<p><img src=\"/zwj/controller/data/upload/20160929/14751223881428.jpg\" title=\"14751187719078.jpg\" /><br /></p><p><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751224649718.jpg\" title=\"14751188404422.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/1475122488153.jpg\" title=\"14751188745822.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225081148.jpg\" title=\"14751189042690.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225251341.jpg\" title=\"14751189391144.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225489741.jpg\" title=\"14751189835563.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225665806.jpg\" title=\"1475119019855.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225757958.jpg\" title=\"14751190799408.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225851789.jpg\" title=\"14751190988979.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751225974198.jpg\" title=\"14751191582779.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751226094721.jpg\" title=\"14751191897978.jpg\" /><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/1475122623296.jpg\" style=\"float:none;\" title=\"14751192093918.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751226234718.jpg\" style=\"float:none;\" title=\"14751192286249.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751226239026.jpg\" style=\"float:none;\" title=\"14751192478256.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751226234085.jpg\" style=\"float:none;\" title=\"14751192695628.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751226231598.png\" style=\"float:none;\" title=\"14751194605909.png\" /></p><p><br /></p><p><br /></p>', 'controller/data/images/201610/05/thumb_h9ziyp.jpg', 'controller/data/images/201610/05/goods_h9ziyp.jpg', 'controller/data/images/201610/05/h9ziyp.jpg', '1', '1', '1', '0', '1', '1', '1', '1', '', '1489492784', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('8', null, 'BL2016092943772', '73', null, '秋季男士薄款夹克2016新款春秋装中年羊毛呢外套30-40-50岁爸爸装', '238.00', '468.00', '0.00', '0', '0', '0', '1', '', '92', '0', '0.500', '', '<p><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239968926.jpg\" style=\"float:none;\" title=\"5.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239966678.jpg\" style=\"float:none;\" title=\"6.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239968965.jpg\" style=\"float:none;\" title=\"7.jpg\" /></p><p><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239998940.jpg\" style=\"float:none;width:790px;height:1000px;\" title=\"9.jpg\" width=\"790\" height=\"1000\" border=\"0\" hspace=\"0\" vspace=\"0\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239996267.jpg\" style=\"float:none;\" title=\"10.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239999750.jpg\" style=\"float:none;\" title=\"11.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239997362.jpg\" style=\"float:none;\" title=\"12.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239995730.jpg\" style=\"float:none;\" title=\"13.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239994586.jpg\" style=\"float:none;\" title=\"14.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239992156.jpg\" style=\"float:none;\" title=\"15.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239992742.jpg\" style=\"float:none;\" title=\"16.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239992736.jpg\" style=\"float:none;\" title=\"17.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239996323.jpg\" style=\"float:none;\" title=\"18.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239997120.jpg\" style=\"float:none;\" title=\"19.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239997008.jpg\" style=\"float:none;\" title=\"20.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751239998394.jpg\" style=\"float:none;\" title=\"21.jpg\" /></p><p><br /></p>', 'controller/data/images/201610/04/thumb_dx8m2n.jpg', 'controller/data/images/201610/04/goods_dx8m2n.jpg', 'controller/data/images/201610/04/dx8m2n.jpg', '1', '1', '1', '0', '1', '1', '1', '1', '', '1475565535', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('9', null, 'BL2016092979975', '73', null, '秋季男士外套青年连帽风衣修身韩版潮男装纯色上衣休闲薄款夹克男', '228.00', '436.00', '0.00', '0', '0', '0', '1', '', '29', '0', '0.500', '', '', 'controller/data/images/201610/04/thumb_7aw96b.jpg', 'controller/data/images/201610/04/goods_7aw96b.jpg', 'controller/data/images/201610/04/7aw96b.jpg', '1', '1', '1', '0', '1', '1', '1', '1', '', '1489492767', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('10', null, 'BL2016092911468', '72', null, '艾格Weekend2016秋新品绣花贴布复古牛仔外套16022106647', '299.00', '499.00', '0.00', '0', '0', '0', '1', '', '21', '0', '0.500', '', '<p><img src=\"/zwj/controller/data/upload/20160929/14751262363460.jpg\" style=\"float:none;\" title=\"TB2xOR4Xl_xQeBjy0FcXXaBfXXa-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751262383473.jpg\" style=\"float:none;\" title=\"TB213zTuXXXXXaQXXXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751262543244.png\" style=\"float:none;\" title=\"QQ图片20160929131510.png\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751262541674.png\" style=\"float:none;\" title=\"QQ图片20160929131555.png\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/1475126254441.png\" style=\"float:none;\" title=\"QQ图片20160929131629.png\" /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263592142.jpg\" style=\"float:none;\" title=\"TB2LaDVuXXXXXaEXXXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263597026.jpg\" style=\"float:none;\" title=\"TB2LNnTuXXXXXaJXXXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263609888.jpg\" style=\"float:none;\" title=\"TB2mQzCuXXXXXXnXpXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263602900.jpg\" style=\"float:none;\" title=\"TB2mS_JuXXXXXbWXXXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/1475126360402.jpg\" style=\"float:none;\" title=\"TB2nXnLuXXXXXb9XXXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263603046.jpg\" style=\"float:none;\" title=\"TB2nXTruXXXXXbkXpXXXXXXXXXX-710962071.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263609115.jpg\" style=\"float:none;\" title=\"TB2ppnwuXXXXXaAXpXXXXXXXXXX-710962071.jpg\" /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><img src=\"/zwj/controller/data/upload/20160929/14751263624436.jpg\" style=\"float:none;\" title=\"TB28JHquXXXXXaPXpXXXXXXXXXX-710962071.jpg\" /></p><p><br /></p><p><br /></p><p><br /></p>', 'controller/data/images/201610/04/thumb_yp7bxu.jpg', 'controller/data/images/201610/04/goods_yp7bxu.jpg', 'controller/data/images/201610/04/yp7bxu.jpg', '1', '1', '1', '0', '1', '1', '0', '1', '', '1489903008', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('11', null, 'BL2016092960469', '73', null, '七匹狼长袖t恤2016秋季新品男士纯棉polo衫中年男装纯色翻领T', '179.00', '359.00', '0.00', '0', '0', '0', '1', '', '14', '0', '0.500', '', '', 'controller/data/images/201610/04/thumb_bj7tcx.jpg', 'controller/data/images/201610/04/goods_bj7tcx.jpg', 'controller/data/images/201610/04/bj7tcx.jpg', '1', '1', '1', '0', '0', '0', '1', '1', '', '1492664551', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('35', null, 'BL2017041850639', '82', null, 'Apple/苹果MacBookPro15.4英寸笔记本电脑I7 16G 512G 带TouchBar', '26888.00', '32000.00', '0.00', '0', '0', '0', '0', '', '13', '0', '0.000', '', '<p><img src=\"/zwj/controller/data/upload/20170418/1492446708931.jpg\" style=\"float:none;\" title=\"1.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20170418/14924467091161.png\" style=\"float:none;\" title=\"2.png\" /></p><p><img src=\"/zwj/controller/data/upload/20170418/14924467104803.jpg\" style=\"float:none;\" title=\"6.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20170418/14924467108463.jpg\" style=\"float:none;\" title=\"10.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20170418/14924467119744.jpg\" style=\"float:none;\" title=\"11.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20170418/14924467124822.jpg\" style=\"float:none;\" title=\"12.jpg\" /></p><p><img src=\"/zwj/controller/data/upload/20170418/14924467124465.jpg\" style=\"float:none;\" title=\"13.jpg\" /></p><p><br /></p>', 'controller/data/images/201704/18/thumb_ay6w2s.jpg', 'controller/data/images/201704/18/goods_ay6w2s.jpg', 'controller/data/images/201704/18/ay6w2s.jpg', '1', '0', '1', '0', '0', '1', '1', '2', '', '1492447403', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('36', null, 'BL2017041848939', '83', null, '【12期免息|3-7天发完】Apple/苹果 iPhone 7 Plus 全网通红色', '6999.00', '7800.00', '0.00', '0', '0', '0', '0', '', '13', '0', '0.000', '', '', 'controller/data/images/201704/18/thumb_a2md5x.jpg', 'controller/data/images/201704/18/goods_a2md5x.jpg', 'controller/data/images/201704/18/a2md5x.jpg', '1', '0', '1', '0', '1', '1', '1', '3', '', '1492448006', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('37', null, 'BL2017041853826', '73', null, '23', '0.00', '0.00', '0.00', '0', '0', '0', '0', '', '0', '0', '0.000', '', '', 'controller/data/images/201704/18/thumb_d2n56s.jpg', 'controller/data/images/201704/18/goods_d2n56s.jpg', 'controller/data/images/201704/18/d2n56s.jpg', '1', '0', '0', '1', '0', '1', '0', null, '', '1492447929', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('38', null, 'BL2017041874291', '84', null, '正品迪塔手表男女士休闲钢带情侣腕防水石英女表男表学生时尚潮流 ', '48.00', '1200.00', '0.00', '0', '0', '0', '0', '', '58', '0', '0.000', '', '', 'controller/data/images/201704/18/thumb_iabu97.jpg', 'controller/data/images/201704/18/goods_iabu97.jpg', 'controller/data/images/201704/18/iabu97.jpg', '1', '0', '1', '0', '0', '1', '0', null, '', '1492448615', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('39', null, 'BL2017041840049', '77', null, '汉客镇店之宝硬箱 万向轮拉杆箱20寸旅行箱24寸行李箱男女登机箱 ', '298.00', '1158.00', '0.00', '0', '0', '0', '0', '', '122', '0', '0.000', '', '', 'controller/data/images/201704/18/thumb_rckh92.jpg', 'controller/data/images/201704/18/goods_rckh92.jpg', 'controller/data/images/201704/18/rckh92.jpg', '1', '0', '1', '0', '1', '1', '1', '5', '', '1492449441', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('40', null, 'BL2017042079673', '82', null, '苹果电脑', '132.00', '133.00', '0.00', '0', '0', '0', '0', '', '0', '0', '0.000', '', '', 'controller/data/images/201704/20/thumb_qhfvna.jpg', 'controller/data/images/201704/20/goods_qhfvna.jpg', 'controller/data/images/201704/20/qhfvna.jpg', '1', '0', '1', '0', '0', '0', '0', '1', '', '1492664538', '0', '0', '1', '0');
INSERT INTO `goods` VALUES ('41', null, 'BL2017042076572', '72', null, '苹果电脑', '133.00', '133.00', '0.00', '0', '0', '0', '0', '', '33', '0', '0.000', '', '', 'controller/data/images/201704/20/thumb_e5q76t.jpg', 'controller/data/images/201704/20/goods_e5q76t.jpg', 'controller/data/images/201704/20/e5q76t.jpg', '1', '0', '1', '0', '1', '1', '0', null, '', '1492681239', '0', '0', '1', '0');

-- ----------------------------
-- Table structure for goods_attr
-- ----------------------------
DROP TABLE IF EXISTS `goods_attr`;
CREATE TABLE `goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` smallint(10) unsigned DEFAULT '0',
  `attr_id` smallint(5) unsigned DEFAULT '0',
  `attr_value` text NOT NULL,
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_attr_fk` (`goods_id`),
  CONSTRAINT `goods_attr_fk` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_attr
-- ----------------------------
INSERT INTO `goods_attr` VALUES ('13', '7', '120', '中年');
INSERT INTO `goods_attr` VALUES ('14', '7', '121', '长袖');
INSERT INTO `goods_attr` VALUES ('15', '7', '123', '立领');
INSERT INTO `goods_attr` VALUES ('16', '7', '128', '常规');
INSERT INTO `goods_attr` VALUES ('17', '7', '129', '常规');
INSERT INTO `goods_attr` VALUES ('18', '7', '130', '纯电商(只在线上销)');
INSERT INTO `goods_attr` VALUES ('19', '7', '132', '聚酯纤维50% 羊毛20% ');
INSERT INTO `goods_attr` VALUES ('20', '7', '135', '修身');
INSERT INTO `goods_attr` VALUES ('21', '7', '147', '2016年秋季');
INSERT INTO `goods_attr` VALUES ('22', '8', '120', '中年');
INSERT INTO `goods_attr` VALUES ('23', '8', '121', '长袖');
INSERT INTO `goods_attr` VALUES ('24', '8', '124', '秋冬');
INSERT INTO `goods_attr` VALUES ('25', '8', '129', '薄');
INSERT INTO `goods_attr` VALUES ('26', '8', '130', '纯电商(只在线上销)');
INSERT INTO `goods_attr` VALUES ('27', '8', '131', '纯色');
INSERT INTO `goods_attr` VALUES ('28', '8', '132', '聚酯纤维65% 羊毛35%');
INSERT INTO `goods_attr` VALUES ('29', '8', '147', '2016年秋季');
INSERT INTO `goods_attr` VALUES ('30', '8', '123', '立领');
INSERT INTO `goods_attr` VALUES ('31', '8', '128', '常规');
INSERT INTO `goods_attr` VALUES ('32', '8', '135', '修身');
INSERT INTO `goods_attr` VALUES ('33', '9', '120', '青年');
INSERT INTO `goods_attr` VALUES ('34', '9', '121', '长袖');
INSERT INTO `goods_attr` VALUES ('35', '9', '123', '连帽');
INSERT INTO `goods_attr` VALUES ('36', '9', '124', '秋冬');
INSERT INTO `goods_attr` VALUES ('37', '9', '128', '常规');
INSERT INTO `goods_attr` VALUES ('38', '9', '129', '常规');
INSERT INTO `goods_attr` VALUES ('39', '9', '130', '纯电商(只在线上)');
INSERT INTO `goods_attr` VALUES ('40', '9', '131', '纯色');
INSERT INTO `goods_attr` VALUES ('41', '9', '132', '粘胶纤维(粘纤)72% ');
INSERT INTO `goods_attr` VALUES ('42', '9', '135', '修身');
INSERT INTO `goods_attr` VALUES ('43', '9', '147', '2016年秋季');
INSERT INTO `goods_attr` VALUES ('44', '10', '121', '长袖');
INSERT INTO `goods_attr` VALUES ('45', '10', '124', '秋冬');
INSERT INTO `goods_attr` VALUES ('46', '10', '125', '浅蓝色');
INSERT INTO `goods_attr` VALUES ('47', '10', '128', '常规');
INSERT INTO `goods_attr` VALUES ('48', '10', '129', '常规');
INSERT INTO `goods_attr` VALUES ('49', '10', '147', '2016年秋季');
INSERT INTO `goods_attr` VALUES ('50', '10', '181', '18-24岁');
INSERT INTO `goods_attr` VALUES ('51', '11', '120', '青年');
INSERT INTO `goods_attr` VALUES ('52', '11', '121', '长袖');
INSERT INTO `goods_attr` VALUES ('53', '11', '123', '翻领');
INSERT INTO `goods_attr` VALUES ('54', '11', '128', '常规');
INSERT INTO `goods_attr` VALUES ('55', '11', '130', '商场同款(线上线下)');
INSERT INTO `goods_attr` VALUES ('56', '11', '131', '纯色');
INSERT INTO `goods_attr` VALUES ('57', '11', '132', '棉100%');
INSERT INTO `goods_attr` VALUES ('58', '11', '135', '标准');
INSERT INTO `goods_attr` VALUES ('59', '11', '147', '2016年秋季');
INSERT INTO `goods_attr` VALUES ('60', '10', '122', 'S,M,L,XL,2XL,3XL');
INSERT INTO `goods_attr` VALUES ('61', '11', '122', 'S,M,L,XL,2XL,3XL');
INSERT INTO `goods_attr` VALUES ('62', '8', '122', 'S,M,L,XL,2XL,3XL');
INSERT INTO `goods_attr` VALUES ('63', '7', '122', 'S,M,L,XL,2XL,3XL');
INSERT INTO `goods_attr` VALUES ('64', '9', '122', 'S,M,L,XL,2XL,3XL');
INSERT INTO `goods_attr` VALUES ('65', '35', '3', '15.4寸');
INSERT INTO `goods_attr` VALUES ('66', '35', '9', '8G');
INSERT INTO `goods_attr` VALUES ('67', '35', '14', '2560*1600');
INSERT INTO `goods_attr` VALUES ('68', '35', '183', '标配');
INSERT INTO `goods_attr` VALUES ('69', '36', '184', '标配');
INSERT INTO `goods_attr` VALUES ('70', '39', '185', '20寸,24寸,26寸,28寸');

-- ----------------------------
-- Table structure for goods_color
-- ----------------------------
DROP TABLE IF EXISTS `goods_color`;
CREATE TABLE `goods_color` (
  `goods_color_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` smallint(10) unsigned DEFAULT NULL,
  `goods_color_img` varchar(120) NOT NULL,
  `goods_color_desc` varchar(100) NOT NULL,
  `goods_color_thumb_img` varchar(120) NOT NULL,
  PRIMARY KEY (`goods_color_id`),
  KEY `goods_kind_goods_fk` (`goods_id`),
  CONSTRAINT `goods_kind_goods_fk` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_color
-- ----------------------------
INSERT INTO `goods_color` VALUES ('20', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', 'controller/data/images/201610/05/color_thumb_h5ygud.jpg');
INSERT INTO `goods_color` VALUES ('21', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', 'controller/data/images/201610/05/color_thumb_prmie5.jpg');
INSERT INTO `goods_color` VALUES ('22', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', 'controller/data/images/201610/05/color_thumb_4e2c3w.jpg');
INSERT INTO `goods_color` VALUES ('23', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', 'controller/data/images/201610/05/color_thumb_abh35w.jpg');
INSERT INTO `goods_color` VALUES ('24', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', 'controller/data/images/201703/19/color_thumb_v5rcwi.jpg');
INSERT INTO `goods_color` VALUES ('27', '35', 'controller/data/images/201704/18/ycwdv3.jpg', '深空灰', 'controller/data/images/201704/18/color_thumb_ycwdv3.jpg');
INSERT INTO `goods_color` VALUES ('28', '36', 'controller/data/images/201704/18/fang8j.jpg', '红色', 'controller/data/images/201704/18/color_thumb_fang8j.jpg');
INSERT INTO `goods_color` VALUES ('29', '38', 'controller/data/images/201704/18/f9ek7w.jpg', '单厉MJ002', 'controller/data/images/201704/18/color_thumb_f9ek7w.jpg');
INSERT INTO `goods_color` VALUES ('30', '38', 'controller/data/images/201704/18/2u6myw.jpg', '单厉MJ003', 'controller/data/images/201704/18/color_thumb_2u6myw.jpg');
INSERT INTO `goods_color` VALUES ('31', '38', 'controller/data/images/201704/18/3hm8wk.jpg', '单厉MJ004', 'controller/data/images/201704/18/color_thumb_3hm8wk.jpg');
INSERT INTO `goods_color` VALUES ('32', '39', 'controller/data/images/201704/18/d2zk4m.jpg', '银灰色', 'controller/data/images/201704/18/color_thumb_d2zk4m.jpg');
INSERT INTO `goods_color` VALUES ('33', '39', 'controller/data/images/201704/18/da3z62.jpg', '经典黑', 'controller/data/images/201704/18/color_thumb_da3z62.jpg');
INSERT INTO `goods_color` VALUES ('34', '39', 'controller/data/images/201704/18/xbs8wd.jpg', '深海蓝', 'controller/data/images/201704/18/color_thumb_xbs8wd.jpg');
INSERT INTO `goods_color` VALUES ('35', '39', 'controller/data/images/201704/18/2a4cgt.jpg', '粉红色', 'controller/data/images/201704/18/color_thumb_2a4cgt.jpg');
INSERT INTO `goods_color` VALUES ('36', '41', 'controller/data/images/201704/20/pzhx6e.jpg', '红色', 'controller/data/images/201704/20/color_thumb_pzhx6e.jpg');

-- ----------------------------
-- Table structure for goods_gallery
-- ----------------------------
DROP TABLE IF EXISTS `goods_gallery`;
CREATE TABLE `goods_gallery` (
  `goods_gallery_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` smallint(10) unsigned DEFAULT NULL,
  `goods_gallery_img` varchar(120) NOT NULL DEFAULT '',
  `goods_gallery_desc` varchar(100) NOT NULL DEFAULT '',
  `goods_gallery_thumb_img` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_gallery_id`),
  KEY `goods_gallery_goods_fk` (`goods_id`),
  CONSTRAINT `goods_gallery_goods_fk` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_gallery
-- ----------------------------
INSERT INTO `goods_gallery` VALUES ('51', '7', 'controller/data/images/201610/05/jixc65.jpg', '卡其', 'controller/data/images/201610/05/gallery_thumb_jixc65.jpg');
INSERT INTO `goods_gallery` VALUES ('52', '7', 'controller/data/images/201610/05/yiebuf.jpg', '紫红', 'controller/data/images/201610/05/gallery_thumb_yiebuf.jpg');
INSERT INTO `goods_gallery` VALUES ('53', '7', 'controller/data/images/201610/05/bqnp9y.jpg', '深蓝', 'controller/data/images/201610/05/gallery_thumb_bqnp9y.jpg');
INSERT INTO `goods_gallery` VALUES ('54', '7', 'controller/data/images/201610/05/ckqsm6.jpg', '深灰', 'controller/data/images/201610/05/gallery_thumb_ckqsm6.jpg');
INSERT INTO `goods_gallery` VALUES ('55', '7', 'controller/data/images/201610/05/v3escu.jpg', '卡其', 'controller/data/images/201610/05/gallery_thumb_v3escu.jpg');
INSERT INTO `goods_gallery` VALUES ('56', '39', 'controller/data/images/201704/18/qaets7.jpg', '', 'controller/data/images/201704/18/gallery_thumb_qaets7.jpg');
INSERT INTO `goods_gallery` VALUES ('57', '39', 'controller/data/images/201704/18/pb8syq.jpg', '', 'controller/data/images/201704/18/gallery_thumb_pb8syq.jpg');
INSERT INTO `goods_gallery` VALUES ('58', '39', 'controller/data/images/201704/18/b29k67.jpg', '', 'controller/data/images/201704/18/gallery_thumb_b29k67.jpg');
INSERT INTO `goods_gallery` VALUES ('59', '41', 'controller/data/images/201704/20/amiwxe.jpg', '', 'controller/data/images/201704/20/gallery_thumb_amiwxe.jpg');
INSERT INTO `goods_gallery` VALUES ('60', '41', 'controller/data/images/201704/20/ejvn3r.png', '', 'controller/data/images/201704/20/gallery_thumb_ejvn3r.png');

-- ----------------------------
-- Table structure for goods_number
-- ----------------------------
DROP TABLE IF EXISTS `goods_number`;
CREATE TABLE `goods_number` (
  `goods_number_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `goods_id` smallint(10) unsigned NOT NULL DEFAULT '0',
  `goods_color_img` varchar(120) NOT NULL DEFAULT '',
  `goods_color_desc` varchar(100) NOT NULL DEFAULT '',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_value` varchar(33) NOT NULL DEFAULT '',
  `number` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_number_id`),
  KEY `goods_id` (`goods_id`),
  CONSTRAINT `goods_number_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_number
-- ----------------------------
INSERT INTO `goods_number` VALUES ('167', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', '尺码', 'S', '82');
INSERT INTO `goods_number` VALUES ('168', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', '尺码', 'M', '0');
INSERT INTO `goods_number` VALUES ('169', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', '尺码', 'L', '3');
INSERT INTO `goods_number` VALUES ('170', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', '尺码', 'XL', '4');
INSERT INTO `goods_number` VALUES ('171', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', '尺码', '2XL', '5');
INSERT INTO `goods_number` VALUES ('172', '7', 'controller/data/images/201610/05/h5ygud.jpg', '卡其', '尺码', '3XL', '5');
INSERT INTO `goods_number` VALUES ('173', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', '尺码', 'S', '0');
INSERT INTO `goods_number` VALUES ('174', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', '尺码', 'M', '0');
INSERT INTO `goods_number` VALUES ('175', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', '尺码', 'L', '0');
INSERT INTO `goods_number` VALUES ('176', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', '尺码', 'XL', '0');
INSERT INTO `goods_number` VALUES ('177', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', '尺码', '2XL', '0');
INSERT INTO `goods_number` VALUES ('178', '7', 'controller/data/images/201610/05/prmie5.jpg', '紫红', '尺码', '3XL', '0');
INSERT INTO `goods_number` VALUES ('179', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', '尺码', 'S', '0');
INSERT INTO `goods_number` VALUES ('180', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', '尺码', 'M', '0');
INSERT INTO `goods_number` VALUES ('181', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', '尺码', 'L', '0');
INSERT INTO `goods_number` VALUES ('182', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', '尺码', 'XL', '0');
INSERT INTO `goods_number` VALUES ('183', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', '尺码', '2XL', '0');
INSERT INTO `goods_number` VALUES ('184', '7', 'controller/data/images/201610/05/4e2c3w.jpg', '深蓝', '尺码', '3XL', '0');
INSERT INTO `goods_number` VALUES ('185', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', '尺码', 'S', '6');
INSERT INTO `goods_number` VALUES ('186', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', '尺码', 'M', '0');
INSERT INTO `goods_number` VALUES ('187', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', '尺码', 'L', '34');
INSERT INTO `goods_number` VALUES ('188', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', '尺码', 'XL', '0');
INSERT INTO `goods_number` VALUES ('189', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', '尺码', '2XL', '0');
INSERT INTO `goods_number` VALUES ('190', '7', 'controller/data/images/201610/05/abh35w.jpg', '深灰', '尺码', '3XL', '78');
INSERT INTO `goods_number` VALUES ('197', '9', '', '', '尺码', 'S', '1');
INSERT INTO `goods_number` VALUES ('198', '9', '', '', '尺码', 'M', '3');
INSERT INTO `goods_number` VALUES ('199', '9', '', '', '尺码', 'L', '5');
INSERT INTO `goods_number` VALUES ('200', '9', '', '', '尺码', 'XL', '5');
INSERT INTO `goods_number` VALUES ('201', '9', '', '', '尺码', '2XL', '7');
INSERT INTO `goods_number` VALUES ('202', '9', '', '', '尺码', '3XL', '9');
INSERT INTO `goods_number` VALUES ('203', '11', '', '', '尺码', 'S', '3');
INSERT INTO `goods_number` VALUES ('204', '11', '', '', '尺码', 'M', '4');
INSERT INTO `goods_number` VALUES ('205', '11', '', '', '尺码', 'L', '5');
INSERT INTO `goods_number` VALUES ('206', '11', '', '', '尺码', 'XL', '2');
INSERT INTO `goods_number` VALUES ('207', '11', '', '', '尺码', '2XL', '0');
INSERT INTO `goods_number` VALUES ('208', '11', '', '', '尺码', '3XL', '0');
INSERT INTO `goods_number` VALUES ('209', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', '尺码', 'S', '1');
INSERT INTO `goods_number` VALUES ('210', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', '尺码', 'M', '2');
INSERT INTO `goods_number` VALUES ('211', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', '尺码', 'L', '3');
INSERT INTO `goods_number` VALUES ('212', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', '尺码', 'XL', '4');
INSERT INTO `goods_number` VALUES ('213', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', '尺码', '2XL', '5');
INSERT INTO `goods_number` VALUES ('214', '10', 'controller/data/images/201703/19/v5rcwi.jpg', '蓝色', '尺码', '3XL', '6');
INSERT INTO `goods_number` VALUES ('218', '35', 'controller/data/images/201704/18/ycwdv3.jpg', '深空灰', '套餐', '标配', '13');
INSERT INTO `goods_number` VALUES ('220', '36', 'controller/data/images/201704/18/fang8j.jpg', '红色', '套餐', '标配', '13');
INSERT INTO `goods_number` VALUES ('221', '38', 'controller/data/images/201704/18/f9ek7w.jpg', '单厉MJ002', '', '', '33');
INSERT INTO `goods_number` VALUES ('222', '38', 'controller/data/images/201704/18/2u6myw.jpg', '单厉MJ003', '', '', '13');
INSERT INTO `goods_number` VALUES ('223', '38', 'controller/data/images/201704/18/3hm8wk.jpg', '单厉MJ004', '', '', '12');
INSERT INTO `goods_number` VALUES ('229', '39', 'controller/data/images/201704/18/d2zk4m.jpg', '银灰色', '尺码', '20寸', '1');
INSERT INTO `goods_number` VALUES ('230', '39', 'controller/data/images/201704/18/d2zk4m.jpg', '银灰色', '尺码', '24寸', '2');
INSERT INTO `goods_number` VALUES ('231', '39', 'controller/data/images/201704/18/d2zk4m.jpg', '银灰色', '尺码', '26寸', '0');
INSERT INTO `goods_number` VALUES ('232', '39', 'controller/data/images/201704/18/d2zk4m.jpg', '银灰色', '尺码', '28寸', '3');
INSERT INTO `goods_number` VALUES ('233', '39', 'controller/data/images/201704/18/da3z62.jpg', '经典黑', '尺码', '20寸', '0');
INSERT INTO `goods_number` VALUES ('234', '39', 'controller/data/images/201704/18/da3z62.jpg', '经典黑', '尺码', '24寸', '4');
INSERT INTO `goods_number` VALUES ('235', '39', 'controller/data/images/201704/18/da3z62.jpg', '经典黑', '尺码', '26寸', '5');
INSERT INTO `goods_number` VALUES ('236', '39', 'controller/data/images/201704/18/da3z62.jpg', '经典黑', '尺码', '28寸', '0');
INSERT INTO `goods_number` VALUES ('237', '39', 'controller/data/images/201704/18/xbs8wd.jpg', '深海蓝', '尺码', '20寸', '6');
INSERT INTO `goods_number` VALUES ('238', '39', 'controller/data/images/201704/18/xbs8wd.jpg', '深海蓝', '尺码', '24寸', '0');
INSERT INTO `goods_number` VALUES ('239', '39', 'controller/data/images/201704/18/xbs8wd.jpg', '深海蓝', '尺码', '26寸', '7');
INSERT INTO `goods_number` VALUES ('240', '39', 'controller/data/images/201704/18/xbs8wd.jpg', '深海蓝', '尺码', '28寸', '0');
INSERT INTO `goods_number` VALUES ('241', '39', 'controller/data/images/201704/18/2a4cgt.jpg', '粉红色', '尺码', '20寸', '4');
INSERT INTO `goods_number` VALUES ('242', '39', 'controller/data/images/201704/18/2a4cgt.jpg', '粉红色', '尺码', '24寸', '43');
INSERT INTO `goods_number` VALUES ('243', '39', 'controller/data/images/201704/18/2a4cgt.jpg', '粉红色', '尺码', '26寸', '34');
INSERT INTO `goods_number` VALUES ('244', '39', 'controller/data/images/201704/18/2a4cgt.jpg', '粉红色', '尺码', '28寸', '13');
INSERT INTO `goods_number` VALUES ('245', '41', 'controller/data/images/201704/20/pzhx6e.jpg', '红色', '', '', '33');

-- ----------------------------
-- Table structure for goods_type
-- ----------------------------
DROP TABLE IF EXISTS `goods_type`;
CREATE TABLE `goods_type` (
  `goods_type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `goods_type_name` varchar(13) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `goods_type_desc` varchar(13) NOT NULL DEFAULT '',
  `attr_group` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_type
-- ----------------------------
INSERT INTO `goods_type` VALUES ('1', '服装', '1', '这是关于服装的商品类型', '');
INSERT INTO `goods_type` VALUES ('2', '笔记本电脑', '1', '笔记本电脑的商品类型', '');
INSERT INTO `goods_type` VALUES ('3', '手机', '1', '这是属于手机的类型', '');
INSERT INTO `goods_type` VALUES ('4', '数码相机', '1', '这是属于数码相机的类型', '');
INSERT INTO `goods_type` VALUES ('5', '箱包', '1', '', '');

-- ----------------------------
-- Table structure for gouwuche
-- ----------------------------
DROP TABLE IF EXISTS `gouwuche`;
CREATE TABLE `gouwuche` (
  `gouwuche_id` smallint(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` smallint(10) unsigned DEFAULT NULL,
  `customer_name` varchar(16) NOT NULL DEFAULT '',
  `goods_name` varchar(60) NOT NULL DEFAULT '',
  `shop_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `number` smallint(6) NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_value` varchar(33) NOT NULL DEFAULT '',
  `goods_color_img` varchar(120) NOT NULL DEFAULT '',
  `goods_color_desc` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`gouwuche_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gouwuche
-- ----------------------------

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `customer_name` varchar(13) NOT NULL DEFAULT '',
  `telephone` varchar(11) NOT NULL DEFAULT '0',
  `email` varchar(33) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `is_read` smallint(2) NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('5', '123', '张伟江', '13358378959', '982215226@qq.com', '565', '1', '1489496049');
INSERT INTO `message` VALUES ('10', '123', '张伟江', '13345676543', '22@qq.com', 'fdf', '1', '1492681137');
INSERT INTO `message` VALUES ('9', '23', '张伟江', '13358378959', '3223@qq.com', '32', '1', '1491397902');

-- ----------------------------
-- Table structure for money
-- ----------------------------
DROP TABLE IF EXISTS `money`;
CREATE TABLE `money` (
  `money_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `customer_remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`money_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of money
-- ----------------------------
INSERT INTO `money` VALUES ('1', '1', '1316467.62', '');

-- ----------------------------
-- Table structure for msg
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `rec` varchar(33) NOT NULL,
  `pos` varchar(33) NOT NULL,
  `content` text,
  `isread` tinyint(1) NOT NULL DEFAULT '0',
  `createtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msg
-- ----------------------------

-- ----------------------------
-- Table structure for notebook
-- ----------------------------
DROP TABLE IF EXISTS `notebook`;
CREATE TABLE `notebook` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `status` smallint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notebook
-- ----------------------------
INSERT INTO `notebook` VALUES ('1', 'hello world!', '1');

-- ----------------------------
-- Table structure for order_action
-- ----------------------------
DROP TABLE IF EXISTS `order_action`;
CREATE TABLE `order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT NULL,
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `comment_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '评价状态 0为未评价，1为已评价，2为过期评价',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `order_action_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_action
-- ----------------------------
INSERT INTO `order_action` VALUES ('1', '1', '3', '0');

-- ----------------------------
-- Table structure for order_goods
-- ----------------------------
DROP TABLE IF EXISTS `order_goods`;
CREATE TABLE `order_goods` (
  `og_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT '0',
  `goods_id` smallint(10) unsigned DEFAULT '0',
  `goods_number` smallint(6) NOT NULL DEFAULT '1',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_value` varchar(33) NOT NULL DEFAULT '',
  `goods_color_desc` varchar(100) NOT NULL DEFAULT '',
  `goods_color_img` varchar(120) NOT NULL DEFAULT '',
  `shop_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `number` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`og_id`),
  KEY `order_goods_order_info_fk` (`order_id`),
  KEY `order_goods_goods_fk` (`goods_id`),
  CONSTRAINT `order_goods_goods_fk` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`),
  CONSTRAINT `order_goods_order_info_fk` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_goods
-- ----------------------------
INSERT INTO `order_goods` VALUES ('1', '1', '7', '1', '尺码', 'S', '卡其', 'controller/data/images/201610/05/h5ygud.jpg', '268.99', '3');

-- ----------------------------
-- Table structure for order_info
-- ----------------------------
DROP TABLE IF EXISTS `order_info`;
CREATE TABLE `order_info` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(15) NOT NULL DEFAULT '',
  `customer_id` int(10) unsigned NOT NULL DEFAULT '0',
  `zone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(30) NOT NULL DEFAULT '',
  `zipcode` char(6) NOT NULL DEFAULT '',
  `reciver` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `mobile` char(11) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay` tinyint(1) NOT NULL DEFAULT '0',
  `customer_name` varchar(16) NOT NULL DEFAULT '',
  `subtotal` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`order_id`),
  KEY `order_info_customer_fk` (`customer_id`),
  CONSTRAINT `order_info_customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_info
-- ----------------------------
INSERT INTO `order_info` VALUES ('1', '2017042087041', '1', '天津市河东区', '111', '', '张伟江11', '', '13665994204', '', '1492680914', '0', '张伟江', '806.97');

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `shop_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shop_name` varchar(33) NOT NULL DEFAULT '',
  `shop_address` varchar(33) NOT NULL DEFAULT '',
  `shop_register` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shop_id`),
  KEY `user_fk` (`user_id`),
  CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO `shop` VALUES ('1', '0', '福建省厦门市集美文教区厦门工学院', '0', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `telephone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastlogin` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `telephone` (`telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '张伟江', '982215226@qq.com', '13358378959', '1559f7477a69ce9e7274b08b57255808edb70fb73293115864781b2db2cb60194f3fc486052e2337e71c3e5627e2b8f9cb9926151aa4084660c383649f50b3f8', '0', '0');
INSERT INTO `user` VALUES ('2', 'admin', '884587785@qq.com', '13665994204', '0426f4a9c7be2e975b6a34efeba7065e9477023f7cd0664f6f5a0cbc70d5c14e2333d42627850e28c9c82e959006d4d882bebc665bb26e9d368d5f4980d34ed5', '0', '0');
