/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : web15

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-08-28 17:34:00
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `post`
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `created_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mp3_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'dasd', '<p>assdasd</p>', 'sda', '', '2015-08-28 16:58:35', '', '2015-08-28 09:58:35', 'http://jqueryvalidation.org/url-method/', '1', 'http://jqueryvalidation.org/url-method/', 'http://jqueryvalidation.org/url-method/', 'asda');
INSERT INTO `post` VALUES ('2', 'dasd', '<p>assdasd</p>', 'sda', '', '2015-08-28 16:58:35', '', '2015-08-28 09:58:35', 'http://jqueryvalidation.org/url-method/', '1', 'http://jqueryvalidation.org/url-method/', 'http://jqueryvalidation.org/url-method/', 'asda');
INSERT INTO `post` VALUES ('3', 'asdasd', '<p>sd</p>', 'asd', '', '2015-08-28 16:58:35', '', '2015-08-28 09:58:35', 'http://jqueryvalidation.org/url-method/', '1', 'http://jqueryvalidation.org/url-method/', 'http://jqueryvalidation.org/url-method/', 'asd');
INSERT INTO `post` VALUES ('4', 'ssssssss', '<p>sssssssssssssssssssssss</p>', 'ssssssssssssssssss', '', '2015-08-28 16:58:35', '', '2015-08-28 09:58:35', 'http://jqueryvalidation.org/url-method/', '1', '', '', 'ssssssssssssssssssssss');
INSERT INTO `post` VALUES ('5', 'fghfghfghfghfghfghfgh', '<p>ghfghsdf</p>', 'ghfssssssssssssssssssss', '<p>ghfghsdf</p>', '2015-08-28 10:07:28', '<p>ghfghsdf</p>', '2015-08-28 10:07:28', 'http://jqueryvalidation.org/url-method/', '1', '', '', 'fghssssssssssss');
INSERT INTO `post` VALUES ('6', 'fghfghfghfghfghfghfgh', '<p>ghfghsdf</p>', 'ghfssssssssssssssssssss', '952456908129255', '2015-08-28 10:09:42', '952456908129255', '2015-08-28 10:09:42', 'http://jqueryvalidation.org/url-method/', '1', '', '', 'fghssssssssssss');
INSERT INTO `post` VALUES ('7', 'assssssssss', '<p>assssssssss<br></p>', 'assssssssss', '952456908129255', '2015-08-28 10:11:14', '952456908129255', '2015-08-28 10:11:14', 'http://jqueryvalidation.org/url-method/', '1', '', '', 'assssssssss');

-- ----------------------------
-- Table structure for `profile`
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uid` bigint(20) unsigned NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', '952456908129255', '', '952456908129255', 'CAAKSETomhkgBAKOUE8Ynn42x386GBJM3hZCg2mEemOLvYoVxmjI06XNvVtQe35OlN36AgQcvW2jLyCjWUwFkGQjtu8iZC4VwPImrdiAounWWnQv4lXVT8T7l8Ih4J702BFHzbORji49XumE8claAQgrZANZCMRRUTtvxDrGgv6QBGLNhftZAyqW8eiZC0hYnYZD', '', '2015-08-28 04:10:37', '2015-08-28 10:31:29');

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('952456908129255', 'https://graph.facebook.com/952456908129255/picture?type=large', 'trung ngọc nguyễn', '', '2015-08-28 04:10:37', '2015-08-28 10:31:07', 'GtHY8nWDNio5rkgf419aLEn8b6U2N0Pn7FjpBGMnz4jrFx55mmWKb5ujGBfu', '952456908129255');
