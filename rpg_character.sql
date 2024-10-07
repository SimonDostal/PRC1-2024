SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `rpg_character`;
CREATE DATABASE `rpg_character` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `rpg_character`;

DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `hp` smallint NOT NULL,
  `strenght` smallint NOT NULL,
  `intelligence` smallint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `characters` (`id`, `name`, `race`, `class`, `hp`, `strenght`, `intelligence`) VALUES
(1,	'Baron Sixth',	'Orc',	'Brute',	200,	15,	3),
(2,	'Gyorgian',	'Orc',	'Scout',	100,	7,	4),
(3,	'Fallhan',	'Elf',	'Knight',	150,	12,	8),
(4,	'Vallharr',	'Human',	'Knight',	120,	11,	8),
(5,	'Nyrr\'lan',	'Centaur',	'Wizard',	215,	8,	13)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `race` = VALUES(`race`), `class` = VALUES(`class`), `hp` = VALUES(`hp`), `strenght` = VALUES(`strenght`), `intelligence` = VALUES(`intelligence`);

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `character_id` int NOT NULL,
  `item` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `character_id` (`character_id`),
  CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `inventory` (`id`, `character_id`, `item`) VALUES
(1,	1,	'Brute\'s Steel Mace'),
(2,	1,	'Hydron Steel Sword'),
(3,	1,	'Lesser Strenght Potion '),
(4,	3,	'Elven Ring'),
(5,	3,	'Elven Scarf '),
(6,	3,	'Lesser Health Potion'),
(7,	3,	'Sharpest Golden Lance of Nyarlan'),
(8,	2,	'Lesser Health Potion'),
(9,	2,	'Occultist\'s Garb'),
(10,	2,	'Diamantine Club'),
(11,	4,	'Darksteel Lance'),
(12,	4,	'Darksteel Armour'),
(13,	4,	'Valkira\'s Bow'),
(14,	4,	'Wool'),
(15,	5,	'Manawood Crossbow'),
(16,	5,	'Cracked Stone'),
(17,	5,	'Mana Potion'),
(18,	5,	'Uriel\'s Embrace Necklace'),
(19,	5,	'Greater Wood Armour'),
(20,	1,	'Steel Ingot')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `character_id` = VALUES(`character_id`), `item` = VALUES(`item`);

-- 2024-10-07 12:07:38