-- Création de la base de données `if0_34628502_database1`
CREATE DATABASE IF NOT EXISTS `if0_34628502_database1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `if0_34628502_database1`;

-- Table `avis` pour les avis des clients
CREATE TABLE `avis` (
  `id` int(11) NOT NULL, -- Identifiant de l'avis
  `name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL, -- Nom de l'auteur de l'avis
  `text` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL, -- Contenu de l'avis
  `rating` int(1) NOT NULL, -- Note attribuée (de 1 à 5)
  `valid` tinyint(1) NOT NULL -- Indicateur de validation (1 pour valide, 0 pour non valide)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertion des données dans la table `avis`
INSERT INTO `avis` (`id`, `name`, `text`, `rating`, `valid`) VALUES
(1, 'Omar MAGHREBI', 'Excellent !', 5, 1),
(2, '', '', 5, 0),
(3, 'Nina ', '', 5, 0),
(4, 'Bertrand ', 'Très bon accueil et très bon service ', 5, 0),
(5, 'Marc', 'Équipe très Pro', 5, 1),
(6, 'Saousan ', 'très belle entreprise ', 5, 1),
(7, 'prénom', 'commentaire', 5, 0);

-- Table `cars` pour les informations sur les voitures
CREATE TABLE `cars` (
  `id` int(11) NOT NULL, -- Identifiant de la voiture
  `price` double NOT NULL, -- Prix de la voiture
  `date` year(4) NOT NULL, -- Année de la voiture
  `distance` int(30) NOT NULL, -- Kilométrage de la voiture
  `imageurl` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL, -- URL de l'image de la voiture
  `model` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL -- Modèle de la voiture
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertion des données dans la table `cars`
INSERT INTO `cars` (`id`, `price`, `date`, `distance`, `imageurl`, `model`) VALUES
(1, 73240, 2023, 232314, 'https://cdn.pixabay.com/photo/2019/10/01/22/59/tesla-car-4519524_1280.jpg', 'Tesla coupe'),
(3, 63000, 2019, 24522, 'https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Range Rover'),
(4, 78050, 2022, 31042, 'https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Jeep'),
(5, 31042, 2020, 77300, 'https://images.pexels.com/photos/38637/car-audi-auto-automotive-38637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Audi');

-- Table `horaires` pour les horaires d'ouverture et de fermeture
CREATE TABLE `horaires` (
  `id` int(11) NOT NULL, -- Identifiant de l'horaire
  `ouverture` time NOT NULL, -- Heure d'ouverture
  `fermeture` time NOT NULL -- Heure de fermeture
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertion des données dans la table `horaires`
INSERT INTO `horaires` (`id`, `ouverture`, `fermeture`) VALUES
(1, '22:58:00', '20:03:00');

-- Table `LoginDetails` pour les détails de connexion des utilisateurs
CREATE TABLE `LoginDetails` (
  `id` int(11) NOT NULL, -- Identifiant de l'utilisateur
  `email` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL, -- Adresse e-mail de l'utilisateur
  `password` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL, -- Mot de passe de l'utilisateur
  `role` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'employe' -- Rôle de l'utilisateur (employe par défaut)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertion des données dans la table `LoginDetails`
INSERT INTO `LoginDetails` (`id`, `email`, `password`, `role`) VALUES
(100, 'vparrot@garage.fr', 'vparrot', 'admin'),
(101, 'equipe1@garage.fr', 'azerty', 'employe'),
(106, 'equipe2@garage.fr', 'azerty', 'employe'),
(108, 'Bertrand@gmail.com', 'Bertrand', 'employe');

-- Table `Messages` pour les messages des clients
CREATE TABLE `Messages` (
  `id` int(11) NOT NULL, -- Identifiant du message
  `name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL, -- Nom de l'expéditeur du message
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL, -- Adresse e-mail de l'expéditeur du message
  `number` int(20) NOT NULL, -- Numéro de téléphone de l'expéditeur du message
  `text` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL, -- Contenu du message
  `title` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL -- Titre du message
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertion des données dans la table `Messages`
INSERT INTO `Messages` (`id`, `name`, `email`, `number`, `text`, `title`) VALUES
(1, 'dsqdqs', 'dsqd@dqsd', 77446666, 'eazezaeaezaez', 'qdsdsq'),
(2, 'Omar MAGHREBI', 'omar.maghrebi@outlook.com', 325235325, 'dsqdsq', 'dsqd'),
(3, 'Marie', 'Marie@gmail.com', 987654321, 'Je voudrais savoir si vous avez des Tesla occasion SVP?', 'Tesla Occasion');

-- Table `services` pour les services proposés
CREATE TABLE `services` (
  `type` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL, -- Type de service
  `time` int(11) NOT NULL, -- Temps estimé pour le service (en minutes)
  `text` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL, -- Description du service
  `price` int(11) NOT NULL, -- Prix du service
  `imageurl` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL, -- URL de l'image illustrant le service
  `id` int(11) NOT NULL -- Identifiant du service
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertion des données dans la table `services`
INSERT INTO `services` (`type`, `time`, `text`, `price`, `imageurl`, `id`) VALUES
('Vidange moteur', 30, 'Vidange et remplacement de huile et filtre moteur', 50, 'https://images.unsplash.com/photo-1635437536607-b8572f443763?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', 7),
('Forfait Pneus', 45, 'Changement de pneus avec équilibrage et parallélisme', 100, 'https://images.pexels.com/photos/244553/pexels-photo-244553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 9),
('Forfait Freins', 50, 'Changement tout type de frein avec vidange du circuit avec une huile de qualité.', 120, 'https://images.pexels.com/photos/4022545/pexels-photo-4022545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 10),
('Forfait vacance', 20, 'Voyager l\'esprit tranquile avec notre forfait vacance, un controle de niveau des liquide et de la pression des pneus conformément aux données contructeur', 30, 'https://images.pexels.com/photos/5229597/pexels-photo-5229597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 13);

-- Ajout des clés primaires aux tables
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `LoginDetails`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

-- Définition des valeurs AUTO_INCREMENT pour les clés primaires
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `horaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `LoginDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

ALTER TABLE `Messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

-- Fin de la transaction
COMMIT;
