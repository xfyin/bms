/*
Navicat MySQL Data Transfer

Source Server         : bms
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : bms

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-01-03 21:06:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bms_article
-- ----------------------------
DROP TABLE IF EXISTS `bms_article`;
CREATE TABLE `bms_article` (
  `id` int(10) NOT NULL auto_increment COMMENT '编号',
  `atitle` varchar(200) NOT NULL COMMENT '文章标题',
  `acontent` text NOT NULL COMMENT '文章内容',
  `aauthor` varchar(20) NOT NULL COMMENT '文章作者',
  `adate` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='文章列表';

-- ----------------------------
-- Records of bms_article
-- ----------------------------
INSERT INTO `bms_article` VALUES ('20', 'textarea 禁止拉动拖动改变大小', ' HTML 标签 textarea 在大部分浏览器中只要指定行（rows）和列（cols）属性，就可以规定 textarea 的尺寸，大小就不会改变，不过更好的办法是使用 CSS 的 height 和 width 属性,但是Chrome,Safari和FireFox渲染的效果不同，可以拖动右下角图标改变大小。但是过分拖动大小会影响页面布局，使页面变得不美 观。可以通过添加如下两个样式:1.禁用拖动2固定大小.\r\n\r\n1：彻底禁用拖动（推荐）\r\n\r\nresize: none;\r\n\r\n2：只是固定大小，右下角的拖动图标仍在\r\nwidth: 200px;\r\nheight: 100px;\r\nmax-width: 200px;\r\nmax-height: 100px;\r\n\r\n3：浏览器信息：\r\n\r\nMozilla/5.0 (Windows NT 5.1) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.220 Safari/535.1\r\n\r\n---------------------------------------------textarea在IE、Firefox下统一效果的解决方案 ----------------------------------------------\r\n\r\n如果用textarea的属性字数宽度（cols）和行数（rows）来控制textarea的大小你会发现在，在IE和FF下的每行字数和文字的行数都不相同，而且在字数不足滚动的情况下，IE是默认有滚动条的，而FF是没有滚动条的。\r\n\r\n那如何控制textarea在IE中和FF中相同的效果呢，其实比较简单：\r\n\r\n1、用textarea的宽度（widht）和高度（height）来定义textarea的大小；\r\n2、让滚动条自适应：overflow-y:auto。\r\n\r\n \r\n\r\n原文\r\n\r\n在 IE下，输入到textarea的字符长度如果超过textarea的显示宽度，会出现自动换行，如果不是以明确px限定textarea的宽度（比如使 用百分比），重新显示这个textarea时会发现textarea自动变宽，以在一行内容纳所有已输入的字符。这在某写情况下会打乱页面的布局，比如这 个textarea是放在一个DIV的dialogue中。\r\n\r\n而在FF下，则不会出现自动换行的情况，FF自动为超出textarea宽度的字符增加水品滚动条以便拖动显示。即使重新显示textarea，也不会有自动变宽的变化。所以FF对于textarea的支持是不变的，从而是稳定的。\r\n', 'yxf', '2016-01-03 13:13:52');
INSERT INTO `bms_article` VALUES ('24', '明天', '好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊好好好啊	好好好好啊  好好	大家好才是真的好的 嗷嗷啊啊啊啊嗷嗷啊 嗷嗷啊 啊		', 'gn', '2016-01-03 16:54:09');
INSERT INTO `bms_article` VALUES ('26', '元旦后上学', '3天的元旦假期就要结束了。。。。。。。。。。', 'yxf', '2016-01-03 19:53:10');
INSERT INTO `bms_article` VALUES ('27', 'hello', 'how are you', '高楠', '2016-01-03 20:54:09');
