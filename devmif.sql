/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : devmif

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-08-12 15:25:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for p_article
-- ----------------------------
DROP TABLE IF EXISTS `p_article`;
CREATE TABLE `p_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `type` int(11) DEFAULT '1' COMMENT '1首页 2公告 3值班团队 4分析专家 5公司简介',
  `cont` text,
  `addtime` varchar(128) DEFAULT NULL,
  `addymd` varchar(128) DEFAULT NULL,
  `admin` varchar(64) DEFAULT NULL,
  `num` int(11) DEFAULT '1',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_article
-- ----------------------------
INSERT INTO `p_article` VALUES ('1', '网站首页', '1', 'MIF国际集团（The Core Group）是全方位跨国金融服务集团，由美国矽谷的金融与科技人士共同创立，营运据点横跨北美与大中华地区。集团致力于发展金融科技（FinTech）并结合专业金融人才，提供给客户便捷、安全的金融服务<br />', '2017-08-06 12:27:53', '2017-08-06', 'admin', '1');
INSERT INTO `p_article` VALUES ('2', '公司简介标题', '2', '公告', '2017-08-06 12:43:59', '2017-08-06', 'admin', '1');
INSERT INTO `p_article` VALUES ('5', '值班团队标题', '3', 'sadfasdfasdfa34343', '2017-08-06 12:44:13', '2017-08-06', 'admin', '1');
INSERT INTO `p_article` VALUES ('6', '分析专家李云龙标题', '4', '分析专家分析专家分析专家分析专家分析专家', '2017-08-06 12:43:34', '2017-08-06', 'admin', '1');
INSERT INTO `p_article` VALUES ('7', '公司简介', '5', '公司简介', '2017-08-06 12:43:34', '2017-08-06', 'admin', '1');

-- ----------------------------
-- Table structure for p_config
-- ----------------------------
DROP TABLE IF EXISTS `p_config`;
CREATE TABLE `p_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `value` varchar(128) DEFAULT NULL,
  `complan` varchar(255) DEFAULT NULL COMMENT '注释说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_config
-- ----------------------------
INSERT INTO `p_config` VALUES ('1', '回馈奖 ', '2', '动态购买收益');
INSERT INTO `p_config` VALUES ('2', '推荐奖', '2', '推荐奖');
INSERT INTO `p_config` VALUES ('3', 'MIF静态收益', '3', '静态收益');
INSERT INTO `p_config` VALUES ('4', '注册下级', '2', '注册下级');

-- ----------------------------
-- Table structure for p_incomelog
-- ----------------------------
DROP TABLE IF EXISTS `p_incomelog`;
CREATE TABLE `p_incomelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT '1' COMMENT '1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8静态转账 9动态转账 10静态收益 11 动态收益',
  `state` int(11) DEFAULT '1' COMMENT '1收入   2支出 3失败',
  `reson` varchar(255) DEFAULT NULL COMMENT '原因',
  `addymd` date DEFAULT NULL,
  `addtime` int(12) DEFAULT NULL,
  `orderid` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `income` varchar(64) DEFAULT '0' COMMENT '金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1617 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_incomelog
-- ----------------------------
INSERT INTO `p_incomelog` VALUES ('1594', '10', '1', '静态收益', '2017-08-09', '1502289616', '46', '1', '1');
INSERT INTO `p_incomelog` VALUES ('1595', '10', '1', '静态收益', '2017-08-09', '1502289616', '47', '1', '2');
INSERT INTO `p_incomelog` VALUES ('1596', '11', '1', '动态收益', '2017-08-09', '1502289616', '48', '1', '1');
INSERT INTO `p_incomelog` VALUES ('1597', '10', '1', '静态收益', '2017-08-11', '1502464647', '46', '1', '100');
INSERT INTO `p_incomelog` VALUES ('1598', '10', '1', '静态收益', '2017-08-11', '1502464647', '47', '1', '200');
INSERT INTO `p_incomelog` VALUES ('1599', '10', '1', '静态收益', '2017-08-11', '1502464647', '48', '1', '100');
INSERT INTO `p_incomelog` VALUES ('1600', '5', '1', '注册下级', '2017-08-12', '2017', '30', '29', '2');
INSERT INTO `p_incomelog` VALUES ('1601', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '50');
INSERT INTO `p_incomelog` VALUES ('1602', '11', '1', '下级购买MIF', '2017-08-12', '1502501848', '30', null, '2');
INSERT INTO `p_incomelog` VALUES ('1603', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '50');
INSERT INTO `p_incomelog` VALUES ('1604', '11', '1', '下级购买MIF', '2017-08-12', '1502501941', '30', '29', '2');
INSERT INTO `p_incomelog` VALUES ('1605', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '50');
INSERT INTO `p_incomelog` VALUES ('1606', '11', '1', '下级购买MIF', '2017-08-12', '1502502038', '30', '29', '2');
INSERT INTO `p_incomelog` VALUES ('1607', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '50');
INSERT INTO `p_incomelog` VALUES ('1608', '11', '1', '下级购买MIF', '2017-08-12', '1502502070', '30', '29', '2');
INSERT INTO `p_incomelog` VALUES ('1609', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '50');
INSERT INTO `p_incomelog` VALUES ('1610', '11', '1', '下级购买MIF', '2017-08-12', '1502502197', '30', '29', '2');
INSERT INTO `p_incomelog` VALUES ('1611', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '100');
INSERT INTO `p_incomelog` VALUES ('1612', '11', '1', '下级购买MIF', '2017-08-12', '1502502288', '30', '29', '2');
INSERT INTO `p_incomelog` VALUES ('1613', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '100');
INSERT INTO `p_incomelog` VALUES ('1614', '11', '1', '下级购买MIF', '2017-08-12', '1502502335', '30', '29', '4');
INSERT INTO `p_incomelog` VALUES ('1615', '6', '2', '下单购买', '2017-08-12', '2017', '30', '30', '100');
INSERT INTO `p_incomelog` VALUES ('1616', '11', '1', '下级购买MIF', '2017-08-12', '1502502397', '30', '29', '4');

-- ----------------------------
-- Table structure for p_menber
-- ----------------------------
DROP TABLE IF EXISTS `p_menber`;
CREATE TABLE `p_menber` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `pwd` varchar(100) DEFAULT NULL,
  `tel` varchar(64) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type` int(4) DEFAULT '1' COMMENT '1普通 2 3 4',
  `dongbag` varchar(50) DEFAULT '0' COMMENT '动态钱包',
  `jingbag` varchar(50) DEFAULT '0' COMMENT '静态钱包',
  `fuid` int(11) DEFAULT '0' COMMENT '注册上家',
  `fuids` varchar(1000) DEFAULT NULL COMMENT '上家',
  `addtime` int(12) DEFAULT NULL,
  `addymd` date DEFAULT NULL,
  `pwd2` varchar(255) NOT NULL,
  `chargebag` varchar(50) DEFAULT '0' COMMENT '充值钱包',
  `realname` varchar(100) DEFAULT NULL COMMENT '真实姓名',
  `zhifubao` varchar(100) DEFAULT NULL COMMENT '支付宝账号',
  `zhifubaoname` varchar(100) DEFAULT NULL COMMENT '支付宝姓名',
  `weixin` varchar(64) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL COMMENT '银行卡号',
  `bankname` varchar(64) DEFAULT NULL COMMENT '银行卡姓名',
  `bankfrom` varchar(100) DEFAULT NULL COMMENT '银行卡开户行',
  `mif` int(11) DEFAULT '0' COMMENT 'mif',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_menber
-- ----------------------------
INSERT INTO `p_menber` VALUES ('1', '李海龙', '123456', '18883287645', null, '4', '800.00', '1405', '0', '1,', null, null, '123456', '57.00', '李海龙1', '18883255551', '李海龙1', '95273231', '543252541', '李海龙1', '河南1', '1');
INSERT INTO `p_menber` VALUES ('31', 'lihailong', '1', '18883287644', '', '1', '0', '0', '0', '31,', '1502518871', '2017-08-12', '1', '0', null, null, null, null, null, null, null, '0');
INSERT INTO `p_menber` VALUES ('30', '李花花30', '123', '13217620955', '', '1', '1450.00', '0', '29', '26,27,28,29,30,', '1502501092', '2017-08-12', '123', '0', null, null, null, null, null, null, null, '2');
INSERT INTO `p_menber` VALUES ('27', '李花花', '1', '13217620966', '', '1', '0', '0', '26', '26,27,', '1502500514', '2017-08-12', '1', '0', null, null, null, null, null, null, null, '0');
INSERT INTO `p_menber` VALUES ('28', '李花花2', '1', '13217620965', '', '1', '0', '0', '27', '26,27,28,', '1502500580', '2017-08-12', '1', '0', null, null, null, null, null, null, null, '0');
INSERT INTO `p_menber` VALUES ('29', '李花花3', '1', '13217620911', '', '1', '32.00', '0', '28', '26,27,28,29,', '1502500628', '2017-08-12', '1', '0', null, null, null, null, null, null, null, '0');

-- ----------------------------
-- Table structure for p_message
-- ----------------------------
DROP TABLE IF EXISTS `p_message`;
CREATE TABLE `p_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `cont` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `time` int(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `state` int(1) DEFAULT '1' COMMENT '1有效  2 无效',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of p_message
-- ----------------------------
INSERT INTO `p_message` VALUES ('1', '46f1ef20b431125b7c7c5c6c20afa8b3', '9361', null, null, '1502508062', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('2', '7c109182c31ba533250398f942912454', '9850', null, null, '1502508129', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('3', 'b4ac6a9fd8732fcaaed93276751badb7', '6325', null, '2837423078@qq.com', '1502508188', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('4', '50369b2bb96a25bf8e5e0fef5053b21e', '9179', null, '2837423078@qq.com', '1502508200', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('5', '13817721c09e03eb41d408edadd74044', '3413', null, '2837423078@qq.com', '1502508248', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('6', 'b7fcc9d8bf897fec22b12e5e52ec1541', '4484', null, '2837423078@qq.com', '1502508445', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('7', '9d617faead2dc2f15a995d7c852b4381', '9923', null, '2837423078@qq.com', '1502509466', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('8', '43333f072db0fa0d8ec11d426f6fda35', '5687', '18883286260', null, '1502516090', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('9', 'b4386baf1490fa4b27d1b5803fca6c1f', '6483', '18883287644', null, '1502518304', '2017-08-12', '2');
INSERT INTO `p_message` VALUES ('10', 'c8ba2008dafa23b6e869ed94853f37a2', '8722', '18883287644', null, '1502518830', '2017-08-12', '1');

-- ----------------------------
-- Table structure for p_orderlog
-- ----------------------------
DROP TABLE IF EXISTS `p_orderlog`;
CREATE TABLE `p_orderlog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL COMMENT '用户id',
  `productid` int(11) NOT NULL,
  `productname` varchar(64) DEFAULT NULL,
  `productmoney` varchar(32) DEFAULT NULL COMMENT '产品带来的利润',
  `states` int(11) NOT NULL DEFAULT '0' COMMENT '0待支付 1收益中 2已完成',
  `orderid` varchar(128) NOT NULL COMMENT '订单id',
  `addtime` int(12) DEFAULT NULL,
  `num` int(5) DEFAULT NULL COMMENT '购买数量',
  `prices` varchar(40) DEFAULT NULL COMMENT '购买单价',
  `totals` varchar(40) DEFAULT NULL,
  `addymd` date DEFAULT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_orderlog
-- ----------------------------
INSERT INTO `p_orderlog` VALUES ('46', '1', '1', 'MIF', '2', '1', '2', '1502282775', '1', '50', '50', null);
INSERT INTO `p_orderlog` VALUES ('47', '1', '1', 'MIF', '50', '1', '2', '1502282775', '2', '100', '100', null);
INSERT INTO `p_orderlog` VALUES ('48', '1', '1', 'MIF', '50', '1', '2', '1502282847', '1', '50', '50', '2017-08-09');
INSERT INTO `p_orderlog` VALUES ('49', '30', '1', 'MIF', '50', '1', '2', '1502501848', '1', '50', '50', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('50', '30', '1', 'MIF', '50', '1', '2', '1502501941', '1', '50', '50', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('51', '30', '1', 'MIF', '50', '1', '2', '1502502038', '1', '50', '50', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('52', '30', '1', 'MIF', '50', '1', '2', '1502502070', '1', '50', '50', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('53', '30', '1', 'MIF', '50', '1', '2', '1502502197', '1', '50', '50', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('54', '30', '1', 'MIF', '50', '1', '2', '1502502288', '2', '100', '100', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('55', '30', '1', 'MIF', '50', '1', '2', '1502502335', '2', '100', '100', '2017-08-12');
INSERT INTO `p_orderlog` VALUES ('56', '30', '1', 'MIF', '50', '1', '2', '1502502397', '2', '100', '100', '2017-08-12');

-- ----------------------------
-- Table structure for p_product
-- ----------------------------
DROP TABLE IF EXISTS `p_product`;
CREATE TABLE `p_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '产品名',
  `cont` text COMMENT '产品描述',
  `pic` varchar(255) DEFAULT NULL COMMENT '产品图片',
  `price` varchar(100) DEFAULT NULL COMMENT '售卖价格',
  `effectdays` varchar(30) DEFAULT NULL COMMENT '理财有效天数',
  `daycome` varchar(100) DEFAULT NULL COMMENT '理财每日收益',
  `daynum` int(11) DEFAULT NULL COMMENT '每日发放数量',
  `one` varchar(50) DEFAULT NULL COMMENT '一代每日返利',
  `two` varchar(50) DEFAULT NULL,
  `state` int(3) DEFAULT '1' COMMENT '1上架  2下架',
  `addtime` varchar(100) DEFAULT NULL,
  `salenum` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_product
-- ----------------------------
INSERT INTO `p_product` VALUES ('1', '钱付壹号', '钱付壹号，每日收益投资本金0.8%,连本带利2400元出局，普卡享受一代会员日收益0.7%，直到享受完一代会员投资金额100%，享受二代会员日收益0.5%，直到享受完二代会员投资金额50%。', '/register/Public/Uploads/2017-03-31/58ddce212bd61.png', '800', '375', '6.4', '100', '0.70', '0.50', '1', '2017-03-31 11:33:53', '0');
INSERT INTO `p_product` VALUES ('2', '钱付贰号', '钱付贰号，每日收益投资本金1%,连本带利4500元出局，银卡享受一代会员日收益0.8%，直到享受完一代会员投资金额100%，享受二代会员日收益0.6%，直到享受完二代会员投资金额50%。', '/register/Public/Uploads/2017-03-31/58ddce2af1148.png', '1500', '15', '12', '100', '1', '1', '1', '2017-03-31 22:35:41', '0');
INSERT INTO `p_product` VALUES ('3', '钱付叁号', '钱付叁号，每日收益投资本金1.2%,连本带利4500元出局，金卡享受一代会员日收益0.9%，直到享受完一代会员投资金额100%，享受二代会员日收益0.7%，直到享受完二代会员投资金额50%。', '/register/Public/Uploads/2017-03-31/58ddce371bfd2.png', '3000', '36', '24', '100', '1', '1', '1', '2017-03-31 22:35:54', '0');
INSERT INTO `p_product` VALUES ('4', '钱付肆号', '钱付肆号，每日收益投资本金1.5%,连本带利18000元出局，钻卡享受一代会员日收益1%，直到享受完一代会员投资金额100%，享受二代会员日收益0.8%，直到享受完二代会员投资金额50%。', '/register/Public/Uploads/2017-03-31/58ddce42c1d6e.png', '6000', '90', '30', '100', '', '', '1', '2017-03-31 22:37:31', '0');
INSERT INTO `p_product` VALUES ('6', '3', '234', '/register', '234', null, null, null, null, null, '1', '2017-05-31 21:38:33', '0');
INSERT INTO `p_product` VALUES ('7', '萝卜种子', '萝卜种子', '/register/Public/Uploads/2017-05-31/592ec9fc43a05.png', '20', null, null, null, null, null, '1', '2017-05-31 21:49:48', '0');

-- ----------------------------
-- Table structure for p_rite
-- ----------------------------
DROP TABLE IF EXISTS `p_rite`;
CREATE TABLE `p_rite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cont` varchar(30) DEFAULT NULL COMMENT '利率',
  `date` varchar(30) DEFAULT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_rite
-- ----------------------------
INSERT INTO `p_rite` VALUES ('1', '0.01', '07-01');
INSERT INTO `p_rite` VALUES ('2', '0.02', '07-02');
INSERT INTO `p_rite` VALUES ('3', '0.03', '07-03');
INSERT INTO `p_rite` VALUES ('4', '0.02', '07-04');
INSERT INTO `p_rite` VALUES ('5', '0.02', '07-05');
INSERT INTO `p_rite` VALUES ('6', '0.03', '07-06');
INSERT INTO `p_rite` VALUES ('7', '0.02', '07-07');
INSERT INTO `p_rite` VALUES ('10', '0.04', '08-12');

-- ----------------------------
-- Table structure for p_user
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT '登录名',
  `openid` varchar(255) DEFAULT NULL COMMENT '微信ID',
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信昵称',
  `address` varchar(255) DEFAULT NULL COMMENT '微信地址',
  `userface` varchar(255) DEFAULT NULL COMMENT '维信头像',
  `addtime` varchar(255) DEFAULT NULL COMMENT '注册时间',
  `manager` int(2) DEFAULT '0' COMMENT '0 普通 1管理员 2 超级管理员',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_user
-- ----------------------------
INSERT INTO `p_user` VALUES ('1', '123asd', 'admin', null, null, null, null, '2017-03-10 13:56:27', '2');
INSERT INTO `p_user` VALUES ('2', '123456', 'admin2', null, null, null, null, '2017-03-10 13:56:27', '2');
