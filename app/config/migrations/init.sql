BEGIN;

CREATE SCHEMA `phonebook` DEFAULT CHARACTER SET utf8;
CREATE USER 'phonebook'@'localhost';
GRANT ALL PRIVILEGES ON phonebook.* To 'phonebook'@'localhost' IDENTIFIED BY 'ph0n3b00k';

USE `phonebook`;

DROP TABLE IF EXISTS `phone_type`;
CREATE TABLE `phone_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `phone_type` WRITE;
INSERT INTO `phone_type` VALUES (5,'Home'),(6,'Work'),(7,'Cellular'),(8,'Other');
UNLOCK TABLES;


DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `contact` WRITE;
INSERT INTO `contact` VALUES (6,'Carlos','Hernandez'),(7,'Cloud','Strife'),(8,'Barret','Wallace'),(9,'Tifa','Lockheart'),(10,'Red','XIII');
UNLOCK TABLES;


DROP TABLE IF EXISTS `phone_number`;
CREATE TABLE `phone_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `phone_type_id` int(11) NOT NULL,
  `number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6B01BC5BE7A1254A` (`contact_id`),
  KEY `IDX_6B01BC5B550E00A1` (`phone_type_id`),
  CONSTRAINT `FK_6B01BC5B550E00A1` FOREIGN KEY (`phone_type_id`) REFERENCES `phone_type` (`id`),
  CONSTRAINT `FK_6B01BC5BE7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `phone_number` WRITE;
INSERT INTO `phone_number` VALUES (1,6,7,'6679651193'),(2,6,6,'7764537973'),(3,7,6,'5162824128'),(4,7,6,'8049437007'),(5,8,6,'9500500451'),(6,8,8,'8351028466'),(7,9,6,'5610383525'),(8,9,6,'7108616808'),(9,10,6,'5239097831'),(10,10,6,'3558355159'),(11,10,5,'2369222197');
UNLOCK TABLES;

COMMIT;
