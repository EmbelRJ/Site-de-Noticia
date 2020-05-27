/*
 Navicat Premium Data Transfer

 Source Server         : LocalHost
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : sitenoticia

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 27/05/2020 17:56:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP(0),
  `fist_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for authors
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP(0),
  `fist_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `admin_id`(`admin_id`) USING BTREE,
  CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for new_types
-- ----------------------------
DROP TABLE IF EXISTS `new_types`;
CREATE TABLE `new_types`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP(0),
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of new_types
-- ----------------------------
INSERT INTO `new_types` VALUES (1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Ciencia', 'cyan');
INSERT INTO `new_types` VALUES (2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Esportes', 'orange');
INSERT INTO `new_types` VALUES (3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Carros', 'red');
INSERT INTO `new_types` VALUES (4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Economia', 'dark-green');
INSERT INTO `new_types` VALUES (5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Educação', 'brown');
INSERT INTO `new_types` VALUES (6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Moda', 'pink');
INSERT INTO `new_types` VALUES (7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Natureza', 'green');
INSERT INTO `new_types` VALUES (8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Politica', 'grey');
INSERT INTO `new_types` VALUES (9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Saude', 'white');
INSERT INTO `new_types` VALUES (10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Viagem', 'yellow');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `new_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `author_id`(`author_id`) USING BTREE,
  INDEX `new_type_id`(`new_type_id`) USING BTREE,
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `news_ibfk_2` FOREIGN KEY (`new_type_id`) REFERENCES `new_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user_favorite_news_type
-- ----------------------------
DROP TABLE IF EXISTS `user_favorite_news_type`;
CREATE TABLE `user_favorite_news_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP(0),
  `user_id` int(11) NOT NULL,
  `news_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `news_type_id`(`news_type_id`) USING BTREE,
  CONSTRAINT `user_favorite_news_type_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_favorite_news_type_ibfk_2` FOREIGN KEY (`news_type_id`) REFERENCES `new_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP(0),
  `fist_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
