CREATE SCHEMA `phonebook` DEFAULT CHARACTER SET utf8;
CREATE USER 'phonebook'@'localhost';
GRANT ALL PRIVILEGES ON phonebook.* To 'phonebook'@'localhost' IDENTIFIED BY 'ph0n3b00k';

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_type_id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4C62E638550E00A1` (`phone_type_id`),
  CONSTRAINT `FK_4C62E638550E00A1` FOREIGN KEY (`phone_type_id`) REFERENCES `phone_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `contact` WRITE;
INSERT INTO `contact` VALUES (2,4,'Carlos','Hernandez','4421796098'),(3,1,'Tifa','Lockheart','2189271211'),(4,5,'Barret','Wallace','4123123312'),(5,2,'Cid','Highwind','5341343312'),(6,1,'Red','XIII','5434312211');
UNLOCK TABLES;


CREATE TABLE `phone_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `phone_type` WRITE;
INSERT INTO `phone_type` VALUES (1,'Home'),(2,'Work'),(4,'Cellular'),(5,'Other');
UNLOCK TABLES;
