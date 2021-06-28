/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50515
 Source Host           : localhost:3306
 Source Schema         : books

 Target Server Type    : MySQL
 Target Server Version : 50515
 File Encoding         : 65001

 Date: 28/06/2021 17:12:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for booklist
-- ----------------------------
DROP TABLE IF EXISTS `booklist`;
CREATE TABLE `booklist`  (
  `isbn` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '未知',
  `title` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '暂无',
  `price` decimal(10, 5) NOT NULL DEFAULT 0.00000,
  PRIMARY KEY (`isbn`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of booklist
-- ----------------------------
INSERT INTO `booklist` VALUES ('9787020002207', '曹雪芹', '红楼梦', 59.70000);
INSERT INTO `booklist` VALUES ('9787506365437', '余华', '活着', 20.00000);
INSERT INTO `booklist` VALUES ('9787530210291', '乔治•奥威尔', '1984', 28.00000);
INSERT INTO `booklist` VALUES ('9787544253994', '加西亚•马尔克斯', '百年孤独', 39.50000);

SET FOREIGN_KEY_CHECKS = 1;
