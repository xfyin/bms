/*
Navicat MySQL Data Transfer

Source Server         : bms
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : bms

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-01-03 21:06:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bms_notice
-- ----------------------------
DROP TABLE IF EXISTS `bms_notice`;
CREATE TABLE `bms_notice` (
  `id` int(4) NOT NULL auto_increment COMMENT '编号',
  `ntype` varchar(10) NOT NULL COMMENT '公告类型',
  `ntitle` varchar(50) NOT NULL COMMENT '公告主题',
  `ncontent` varchar(800) NOT NULL COMMENT '公告内容',
  `ntime` date NOT NULL COMMENT '发布时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='公告列表';

-- ----------------------------
-- Records of bms_notice
-- ----------------------------
INSERT INTO `bms_notice` VALUES ('1', '系统', '关于系统升级的通知', '尊敬的用户，您好！系统将于2016/1/23 19:00:00~2016/1/23 23:00:00升级，请您提前最好准备。为您带来的不便，请见谅', '2016-01-03');
INSERT INTO `bms_notice` VALUES ('2', '管理', '系统管理员离职公告', '尊敬的管理员们，您好！编号222管理员因事离职，请其他管理员做好衔接工作准备！', '2016-01-03');
INSERT INTO `bms_notice` VALUES ('3', '用户', '关于用户会员升级通知', '尊敬的用户们，您好！喜迎2016年春节，系统将为所有用户提升一级，例如：普通用户将提升为一级会员用户；一级会员将提升为二级会员用户！邀您体现更好的博客生活。', '2016-01-03');
