/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : icpc

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-12-30 12:35:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for stu
-- ----------------------------
DROP TABLE IF EXISTS `stu`;
CREATE TABLE `stu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(14) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(10) NOT NULL,
  `upload_info` varchar(100) NOT NULL DEFAULT '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0',
  `has_taken_exam` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `exam_ip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stu_id` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stu
-- ----------------------------
INSERT INTO `stu` VALUES ('1', '20420142201253', '8fb8bb9100bbc1cabd13704960d78219', '刘振豪', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '1', '127.0.0.1');
INSERT INTO `stu` VALUES ('2', '20420152201496', '8fb8bb9100bbc1cabd13704960d78219', '邓荷君', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('3', '20420152201571', '8fb8bb9100bbc1cabd13704960d78219', '叶依林', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '1', '127.0.0.1');
INSERT INTO `stu` VALUES ('4', '20420152201581', '8fb8bb9100bbc1cabd13704960d78219', '毕云鹏', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('5', '20420152201587', '8fb8bb9100bbc1cabd13704960d78219', '陈俊宏', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('6', '20420152201591', '8fb8bb9100bbc1cabd13704960d78219', '陈晓倩', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('7', '20420152201599', '8fb8bb9100bbc1cabd13704960d78219', '方蔚', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('8', '20420152201601', '8fb8bb9100bbc1cabd13704960d78219', '高润田', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('9', '20420152201607', '8fb8bb9100bbc1cabd13704960d78219', '浩海丽', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('10', '20420152201608', '8fb8bb9100bbc1cabd13704960d78219', '何天凤', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('11', '20420152201611', '8fb8bb9100bbc1cabd13704960d78219', '胡芸芸', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('12', '20420152201616', '8fb8bb9100bbc1cabd13704960d78219', '黄美蓉', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('13', '20420152201623', '8fb8bb9100bbc1cabd13704960d78219', '金靖雯', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('14', '20420152201625', '8fb8bb9100bbc1cabd13704960d78219', '康韶宇', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('15', '20420152201626', '8fb8bb9100bbc1cabd13704960d78219', '寇博涵', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('16', '20420152201631', '8fb8bb9100bbc1cabd13704960d78219', '李珏玲', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('17', '20420152201633', '8fb8bb9100bbc1cabd13704960d78219', '李融丰', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('18', '20420152201634', '8fb8bb9100bbc1cabd13704960d78219', '李双莲', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('19', '20420152201653', '8fb8bb9100bbc1cabd13704960d78219', '刘云霈', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('20', '20420152201662', '8fb8bb9100bbc1cabd13704960d78219', '马吟霜', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('21', '20420152201669', '8fb8bb9100bbc1cabd13704960d78219', '秦中元', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('22', '20420152201671', '8fb8bb9100bbc1cabd13704960d78219', '邱惠娟', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('23', '20420152201676', '8fb8bb9100bbc1cabd13704960d78219', '石婧', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('24', '20420152201682', '8fb8bb9100bbc1cabd13704960d78219', '汪慧娟', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('25', '20420152201689', '8fb8bb9100bbc1cabd13704960d78219', '王笑寒', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('26', '20420152201691', '8fb8bb9100bbc1cabd13704960d78219', '魏航', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('27', '20420152201697', '8fb8bb9100bbc1cabd13704960d78219', '吴子琳', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('28', '20420152201709', '8fb8bb9100bbc1cabd13704960d78219', '杨洁', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('29', '20420152201712', '8fb8bb9100bbc1cabd13704960d78219', '姚玉蕾', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('30', '20420152201716', '8fb8bb9100bbc1cabd13704960d78219', '原寒', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('31', '20420152201718', '8fb8bb9100bbc1cabd13704960d78219', '岳士闻', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('32', '20420152201722', '8fb8bb9100bbc1cabd13704960d78219', '张林纯', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('33', '20420152201723', '8fb8bb9100bbc1cabd13704960d78219', '张明正', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('34', '20420152201730', '8fb8bb9100bbc1cabd13704960d78219', '张宇婷', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('35', '20420152201734', '8fb8bb9100bbc1cabd13704960d78219', '赵松', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('36', '20420152201735', '8fb8bb9100bbc1cabd13704960d78219', '赵泽龙', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('37', '20420152201737', '8fb8bb9100bbc1cabd13704960d78219', '钟汉良', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('38', '20420152201741', '8fb8bb9100bbc1cabd13704960d78219', '周杰', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('39', '20520135705530', '8fb8bb9100bbc1cabd13704960d78219', '耿雪', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('40', '20520135705531', '8fb8bb9100bbc1cabd13704960d78219', '贾菲菲', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('41', '20520145704899', '8fb8bb9100bbc1cabd13704960d78219', '陈继霞', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('42', '20520145704900', '8fb8bb9100bbc1cabd13704960d78219', '陈敏', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('43', '20520145704901', '8fb8bb9100bbc1cabd13704960d78219', '张韦韦', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('44', '21620142202722', '8fb8bb9100bbc1cabd13704960d78219', '赵可欣', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('45', '22320152201098', '8fb8bb9100bbc1cabd13704960d78219', '张琪', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('46', '30320152200109', '8fb8bb9100bbc1cabd13704960d78219', '朱嘉祺', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('47', '33920152203978', '8fb8bb9100bbc1cabd13704960d78219', '黄岚翔', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);
INSERT INTO `stu` VALUES ('48', '33920152204037', '8fb8bb9100bbc1cabd13704960d78219', '张诗艺', '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0|0,0,0,0,0', '0', null);

-- ----------------------------
-- Table structure for stu_log
-- ----------------------------
DROP TABLE IF EXISTS `stu_log`;
CREATE TABLE `stu_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(14) NOT NULL,
  `login_ip` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  CONSTRAINT `stu_log_ibfk_1` FOREIGN KEY (`username`) REFERENCES `stu` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stu_log
-- ----------------------------
INSERT INTO `stu_log` VALUES ('1', '20420152201571', '127.0.0.1', '2016/12/26 16:36:11');
INSERT INTO `stu_log` VALUES ('2', '20420152201571', '127.0.0.1', '2016/12/26 16:40:05');
INSERT INTO `stu_log` VALUES ('3', '20420152201571', '127.0.0.1', '2016/12/26 18:30:45');
INSERT INTO `stu_log` VALUES ('4', '20420152201571', '127.0.0.1', '2016/12/26 18:43:17');
INSERT INTO `stu_log` VALUES ('5', '20420152201571', '127.0.0.1', '2016/12/26 18:43:55');
INSERT INTO `stu_log` VALUES ('6', '20420152201571', '127.0.0.1', '2016/12/26 21:53:39');
INSERT INTO `stu_log` VALUES ('7', '20420152201571', '127.0.0.1', '2016/12/27 09:51:23');
INSERT INTO `stu_log` VALUES ('8', '20420152201571', '127.0.0.1', '2016/12/27 11:27:25');
INSERT INTO `stu_log` VALUES ('9', '20420152201571', '127.0.0.1', '2016/12/29 10:02:43');
