/*
Navicat MySQL Data Transfer

Source Server         : bms
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : bms

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-01-03 21:06:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bms_user
-- ----------------------------
DROP TABLE IF EXISTS `bms_user`;
CREATE TABLE `bms_user` (
  `id` int(10) NOT NULL auto_increment COMMENT '���',
  `urealname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `ugender` int(1) NOT NULL COMMENT '1 男 0女 2第三性别',
  `upwd` varchar(40) NOT NULL,
  `ubirthday` varchar(10) NOT NULL,
  `umail` varchar(100) default NULL COMMENT 'E-mail',
  `udate` datetime NOT NULL COMMENT '注册时间',
  `uphone` varchar(11) default NULL COMMENT '�ֻ���',
  `uip` varchar(20) default NULL COMMENT '����ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='�û��б�';

-- ----------------------------
-- Records of bms_user
-- ----------------------------
INSERT INTO `bms_user` VALUES ('18', '高楠', 'gn', '0', '123456', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('19', '殷学飞', 'yxf', '1', '4240336', '', 'xfyin179@163.com', '0000-00-00 00:00:00', '15201552704', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('20', '小狐', 'huli', '2', '1qwert', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('21', 'aaa', 'aaaaaaaaaaaaaaa', '1', '1aaaaaaaaa', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('22', 'aaaaaaa', 'sssss', '2', '1qwerty', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('23', '22', 'aa', '0', '11111q', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('24', '猪', 'pig', '1', '1qqqqqq', '', 'ss', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('25', '狗', 'dog', '0', '121212q', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('26', '猫', 'cat', '2', '12121q', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('27', '猴子', 'monkey', '1', '1qa1qa1', '', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('28', '小鸡', 'chicken', '0', '123123', '2001-10-0', '', '0000-00-00 00:00:00', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('29', '傻逼', 'sb', '1', '12qw12', '1999-1-19', '', '2016-01-03 12:01:40', '', '127.0.0.1');
INSERT INTO `bms_user` VALUES ('30', '高楠', '高楠', '0', '123456', '1995-5-19', '', '2016-01-03 20:53:07', '', '127.0.0.1');
