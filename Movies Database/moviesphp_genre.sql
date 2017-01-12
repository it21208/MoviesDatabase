CREATE TABLE `genre` (
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Οι κατηγορίες των ταινιών';

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;

INSERT INTO `genre` VALUES ('Action'),('Adventure'),('Animation'),('Children\'s'),('Comedy'),('Crime'),('Documentary'),('Drama'),('Fantasy'),('Film-Noir'),('Horror'),('Musical'),('Mystery'),('Romance'),('Sci-Fi'),('Thriller'),('War'),('Western');

UNLOCK TABLES;
-- Dump completed on 2014-06-13 20:06:42
