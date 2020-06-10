/*
 Navicat Premium Data Transfer

 Source Server         : LocalHost
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : sitenoticia

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 10/06/2020 06:48:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL,
  `titlle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `resume` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `author_id`(`author`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  CONSTRAINT `news_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `news_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for news_type
-- ----------------------------
DROP TABLE IF EXISTS `news_type`;
CREATE TABLE `news_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news_type
-- ----------------------------
INSERT INTO `news_type` VALUES (1, '2020-06-10 05:49:37', '2020-06-10 05:49:42', 'Ciencia');
INSERT INTO `news_type` VALUES (2, '2020-06-10 05:49:46', '2020-06-10 05:49:48', 'Esportes');
INSERT INTO `news_type` VALUES (3, '2020-06-10 05:49:51', '2020-06-10 05:49:54', 'Saude');
INSERT INTO `news_type` VALUES (4, '2020-06-10 05:49:57', '2020-06-10 05:49:59', 'Economia');
INSERT INTO `news_type` VALUES (5, '2020-06-10 05:50:02', '2020-06-10 05:50:04', 'Educação');
INSERT INTO `news_type` VALUES (6, '2020-06-10 05:50:06', '2020-06-10 05:50:08', 'Natureza');

SET FOREIGN_KEY_CHECKS = 1;
