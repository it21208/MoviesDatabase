CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Κρατά τη λίστα με τις ταινίες',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_UNIQUE` (`title`),
  KEY `fk_genre_movie_idx` (`genre`),
  CONSTRAINT `fk_genre_movie` FOREIGN KEY (`genre`) REFERENCES `genre` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;

INSERT INTO `movie` VALUES (1,'StarWars 2','Action'),(3,'StarWars','Sci-Fi'),(5,'Theofilos','Action'),(6,'fdsgd','Animation'),(7,'Mission impossible I','Adventure'),(8,'Predator','Action'),(9,'Bridget Jones Diary','Comedy'),(10,'Scary Movie','Comedy'),(11,'Warrior','Action'),(14,'JackAss 1','Comedy'),(21,'Theofilos Ioannidis','Crime');
UNLOCK TABLES;

-- Dump completed on 2014-06-13 20:06:42
