

DROP TABLE IF EXISTS `cktoken`.`members`;
DROP TABLE IF EXISTS `cktoken`.`users`;


CREATE TABLE `cktoken`.`members` (
	`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`surname` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`email` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`phone` int(20) DEFAULT NULL,
	`address` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`status` tinyint(1) DEFAULT '1' NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `cktoken`.`users` (
	`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`password` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`email` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`role` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	`status` tinyint(1) DEFAULT '1' NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

