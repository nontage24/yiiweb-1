/*
Navicat MySQL Data Transfer

Source Server         : localhost_3310
Source Server Version : 50505
Source Host           : localhost:3310
Source Database       : yiiweb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-01-19 10:24:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for screen
-- ----------------------------
DROP TABLE IF EXISTS `screen`;
CREATE TABLE `screen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `date_screen` date DEFAULT NULL,
  `adl` int(11) DEFAULT NULL,
  `adl_group` enum('ติดเตียง','ติดบ้าน','ติดสังคม') DEFAULT NULL,
  `q2` enum('ปกติ','เสี่ยง') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of screen
-- ----------------------------
