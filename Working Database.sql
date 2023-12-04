SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

-- Table: avis
CREATE TABLE `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rating` int(1) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `avis` VALUES
  (1, 'Omar MAGHREBI', 'Excellent!', 5, 1),
  (3, 'Nina', '', 5, 0),
  (4, 'Bertrand', 'Très bon accueil et très bon service', 5, 0),
  (5, 'Marc', 'Équipe très Pro', 5, 1),
  (6, 'Saousan', 'Très belle entreprise', 5, 1),
  (7, 'Prénom', 'Commentaire', 5, 0);

-- Table: cars
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(30) NOT NULL,
  `date` year(4) NOT NULL,
  `distance` int(30) NOT NULL,
  `imageurl` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `model` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `cars` VALUES
  (1, 30240, 2018, 232314, 'https://cdn.pixabay.com/photo/2019/10/01/22/59/tesla-car-4519524_1280.jpg', 'Tesla'),
  (3, 73000, 2019, 50522, 'https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Range Rover'),
  (4, 80050, 2022, 31042, 'https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Jeep'),
  (5, 15042, 2020, 150300, 'https://images.pexels.com/photos/38637/car-audi-auto-automotive-38637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Audi'),
(2, 45000, 2021, 18000, 'https://images.pexels.com/photos/951318/pexels-photo-951318.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'BMW'),
(6, 62000, 2022, 25000, 'https://images.pexels.com/photos/93632/pexels-photo-93632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Mercedes'),
(7, 38000, 2019, 60000, 'https://images.pexels.com/photos/17507722/pexels-photo-17507722/free-photo-of-white-toyota-86-sports-car-parked-by-an-abandoned-factory-warehouse.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Toyota'),
(8, 28000, 2020, 35000, 'https://images.pexels.com/photos/16387777/pexels-photo-16387777/free-photo-of-custom-honda-accord.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Honda'),
(9, 51000, 2021, 28000, 'https://images.pexels.com/photos/17157308/pexels-photo-17157308/free-photo-of-ford-maverick-on-desert.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Ford'),
(10, 67000, 2022, 20000, 'https://images.pexels.com/photos/5066933/pexels-photo-5066933.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Chevrolet');
-- Table: horaires
CREATE TABLE `horaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ouverture` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fermeture` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `horaires` VALUES (1, '07:15', '17:15');

-- Table: logindetails
CREATE TABLE `logindetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'employe',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `logindetails` VALUES (117, 'vparrot@garage.fr', '$2y$10$5YC6rChSRSTzX6J/AgaUB.iNdL0UK4HhZqQ7OvtBtcHwGlb8j/qdi', 'admin');

-- Table: messages
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `number` int(20) NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `messages` VALUES
  (1, 'dsqdqs', 'dsqd@dqsd', 77446666, 'eazezaeaezaez', 'qdsdsq'),
  (2, 'Omar MAGHREBI', 'omar.maghrebi@outlook.com', 325235325, 'dsqdsq', 'dsqd'),
  (3, 'Marie', 'Marie@gmail.com', 987654321, 'Je voudrais savoir si vous avez des Tesla occasion SVP?', 'Tesla Occasion');

-- Table: services
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `time` int(11) NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `imageurl` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `services` VALUES
  (7, 'Vidange moteur', 30, 'Vidange et remplacement de huile et filtre moteur', 50, 'https://images.unsplash.com/photo-1635437536607-b8572f443763?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80'),
  (9, 'Forfait Pneus', 45, 'Changement de pneus avec équilibrage et parallélisme', 100, 'https://images.pexels.com/photos/244553/pexels-photo-244553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
  (10, 'Forfait Freins', 50, 'Changement tout type de frein avec vidange du circuit avec une huile de qualité.', 120, 'https://images.pexels.com/photos/4022545/pexels-photo-4022545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
  (13, 'Forfait vacance', 20, 'Voyager l\'esprit tranquile avec notre forfait vacance, un controle de niveau des liquide et de la pression des pneus conformément aux données contructeur', 30, 'https://images.pexels.com/photos/5229597/pexels-photo-5229597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

-- Modification des auto-increment 
ALTER TABLE `avis` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `cars` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
ALTER TABLE `horaires` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `logindetails` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
ALTER TABLE `messages` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `services` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

COMMIT;
