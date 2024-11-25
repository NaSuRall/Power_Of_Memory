-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 05 nov. 2024 à 13:15
-- Version du serveur : 8.0.35
-- Version de PHP : 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `manga_of_memory`
--

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `name`) VALUES
(1, 'Manga Of Memory');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `id_game` int NOT NULL,
  `id_expediteur` int NOT NULL,
  `message` text NOT NULL,
  `time_message` datetime NOT NULL,
  `IsSender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `id_game`, `id_expediteur`, `message`, `time_message`, `IsSender`) VALUES
(1, 1, 1, 'Bonjour, comment ça va ?', '2023-10-29 10:15:00', 1),
(2, 1, 2, 'Salut tout le monde!', '2023-10-29 10:16:30', 1),
(3, 1, 3, 'Quelqu\'un pour une partie?', '2023-10-29 10:17:45', 1),
(4, 1, 4, 'J\'arrive dans 5 minutes.', '2023-10-29 10:18:10', 1),
(5, 1, 5, 'Bonne chance à tous!', '2023-10-29 10:19:00', 1),
(6, 1, 1, 'Je suis prêt.', '2023-10-29 10:20:15', 1),
(7, 1, 2, 'Démarrons la partie.', '2023-10-29 10:21:00', 1),
(8, 1, 3, 'Je vais gagner cette fois !', '2023-10-29 10:22:45', 1),
(9, 1, 4, 'Quelle stratégie utilisez-vous?', '2023-10-29 10:23:20', 1),
(10, 1, 5, 'Je pense que je vais jouer défensif.', '2023-10-29 10:24:30', 1),
(11, 1, 1, 'On y va ?', '2023-10-29 10:25:15', 1),
(12, 1, 2, 'C\'est parti !', '2023-10-29 10:26:00', 1),
(13, 1, 3, 'Attention à mon attaque spéciale.', '2023-10-29 10:27:10', 1),
(14, 1, 4, 'Bien joué !', '2023-10-29 10:28:05', 1),
(15, 1, 5, 'Merci, mais ce n\'est que le début.', '2023-10-29 10:29:20', 1),
(16, 1, 1, 'Je n\'avais pas vu venir cela.', '2023-10-29 10:30:15', 1),
(17, 1, 2, 'Tu progresses bien.', '2023-10-29 10:31:45', 1),
(18, 1, 3, 'J\'ai encore quelques tours dans mon sac.', '2023-10-29 10:32:30', 1),
(19, 1, 4, 'Qui gagnera selon vous ?', '2023-10-29 10:33:00', 1),
(20, 1, 5, 'Tout est possible encore !', '2023-10-29 10:34:20', 1),
(21, 1, 1, 'Le suspense est à son comble.', '2023-10-29 10:35:45', 1),
(22, 1, 2, 'On verra bien.', '2023-10-29 10:36:10', 1),
(23, 1, 3, 'Dernier tour pour moi.', '2023-10-29 10:37:30', 1),
(24, 1, 4, 'Félicitations au gagnant!', '2023-10-29 10:38:00', 1),
(25, 1, 5, 'Bien joué à tous.', '2023-10-29 10:39:15', 1),
(26, 1, 1, '24H', '2024-10-30 11:10:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `private_message`
--

CREATE TABLE `private_message` (
  `id` int NOT NULL,
  `id_first_user` int NOT NULL,
  `id_second_user` int NOT NULL,
  `messages` text NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `date_send` datetime NOT NULL,
  `date_read` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `private_message`
--

INSERT INTO `private_message` (`id`, `id_first_user`, `id_second_user`, `messages`, `seen`, `date_send`, `date_read`) VALUES
(1, 1, 2, 'COUCOU LA MIFF', 1, '2024-10-22 23:22:00', '2024-10-22 23:24:00'),
(2, 2, 1, 'COUCOU FREROT', 1, '2024-10-22 23:25:00', '2024-10-22 23:26:00'),
(3, 1, 2, 'TRANQUILLE ET TOI', 1, '2024-11-22 23:10:00', '2024-10-22 23:12:00'),
(4, 2, 1, 'TRANQUILLE TRANQUILLE', 1, '2024-11-22 23:13:00', '2024-10-22 23:14:00');

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

CREATE TABLE `scores` (
  `id` int NOT NULL,
  `id_users` int NOT NULL,
  `id_game` int NOT NULL,
  `difficulty` varchar(40) NOT NULL,
  `scores` int NOT NULL,
  `time_party` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`id`, `id_users`, `id_game`, `difficulty`, `scores`, `time_party`) VALUES
(1, 2, 1, 'facile', 40, '2024-04-05 10:00:00'),
(2, 2, 1, 'moyen', 45, '2022-04-06 10:00:00'),
(3, 2, 1, 'difficile', 78, '2023-04-09 10:00:00'),
(4, 2, 1, 'facile', 23, '2023-08-18 10:00:00'),
(5, 2, 1, 'facile', 43, '2022-02-28 10:00:00'),
(6, 3, 1, 'moyen', 89, '2022-09-23 10:00:00'),
(7, 3, 1, 'difficile', 67, '2024-05-12 10:00:00'),
(8, 3, 1, 'difficile', 80, '2022-01-23 10:00:00'),
(9, 3, 1, 'facile', 40, '2022-04-19 10:00:00'),
(10, 3, 1, 'moyen', 44, '2024-04-11 10:00:00'),
(11, 4, 1, 'moyen', 55, '2022-04-09 10:00:00'),
(12, 4, 1, 'facile', 87, '2023-04-05 10:00:00'),
(13, 4, 1, 'difficile', 34, '2022-04-07 10:00:00'),
(14, 4, 1, 'difficile', 45, '2024-04-13 10:00:00'),
(15, 4, 1, 'moyen', 46, '2024-04-24 10:00:00'),
(16, 5, 1, 'facile', 97, '2023-04-01 10:00:00'),
(17, 5, 1, 'moyen', 67, '2022-04-05 10:00:00'),
(18, 5, 1, 'facile', 34, '2024-04-29 10:00:00'),
(19, 5, 1, 'moyen', 45, '2023-04-10 10:00:00'),
(20, 5, 1, 'moyen', 40, '2022-04-05 10:00:00'),
(21, 1, 1, 'moyen', 54, '2023-04-02 10:00:00'),
(22, 1, 1, 'difficile', 87, '2024-08-09 10:00:00'),
(23, 1, 1, 'difficile', 41, '2022-04-11 10:00:00'),
(24, 1, 1, 'facile', 87, '2022-04-09 10:00:00'),
(25, 1, 1, 'moyen', 40, '2024-04-03 10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mot_de_passe` varchar(61) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pseudo` varchar(40) NOT NULL,
  `time_registration` datetime NOT NULL,
  `time_last_login` datetime DEFAULT NULL,
  `game_number` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `mot_de_passe`, `pseudo`, `time_registration`, `time_last_login`, `game_number`) VALUES
(1, 'cestunemail@gmail.com', 'undeuxtroisquatre', 'pasdinspi', '2024-05-23 10:00:00', '2024-05-24 00:00:00', 13),
(2, 'cestunautreemail@gmail.com', '12345', 'darkkiller', '2021-02-19 18:34:00', '2024-08-23 00:00:00', 8),
(3, 'jean@orange.fr', 'motdepasse', 'jeanlebest', '2023-09-03 14:55:00', '2024-01-29 00:00:00', 18),
(4, 'jesuistropfort@gmail.com', 'azerty', 'jesuistropfort', '2024-11-13 18:00:00', '2019-12-22 00:00:00', 2),
(5, 'charles@gmail.com', 'undeuxtroisquatre', 'toujourspasdinspi', '2024-04-26 10:30:00', '2020-02-14 00:00:00', 27),
(6, 'rpzzpzzproo@gmail.com', 'az', 'NTM', '2024-11-04 19:51:10', NULL, NULL),
(9, 'rpzzpzzproo2@gmail.com', 'az', 'efzzef2', '2024-11-05 09:44:42', NULL, NULL),
(10, 'rpzzpzzproo3@gmail.com', '$2y$10$bPGCychQvId09G0X34kEO.jSefu1Y6GgtBh/v4heL5RiFuxdORxYK', 'efzzef3', '2024-11-05 10:19:30', NULL, NULL),
(11, 'rpzzpzzproo4@gmail.com', '$2y$10$XQCc1fUDJMYP/1ecxdkqnO/P.DRBDH/7bGrlqU49xuJAO8HellTW2', 'efzzef4', '2024-11-05 10:23:25', NULL, NULL),
(12, 'rpzzpzzproo5@gmail.com', '$2y$10$iZ4zdHN47V3hP5c4PFcq.ukx6.mGRjx9IzwIqYlCfhH1xCPFW0iFa', 'efzzef5', '2024-11-05 10:25:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users2`
--

CREATE TABLE `users2` (
  `id` int NOT NULL,
  `mail` text NOT NULL,
  `mot_de_pass` text NOT NULL,
  `pseudo` text NOT NULL,
  `conf_mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users2`
--

INSERT INTO `users2` (`id`, `mail`, `mot_de_pass`, `pseudo`, `conf_mdp`) VALUES
(1, 'rpzzpzzproo@gmail.com', '1012', 'NTM', '1012');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_expediteur` (`id_expediteur`);

--
-- Index pour la table `private_message`
--
ALTER TABLE `private_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_first_user` (`id_first_user`),
  ADD KEY `id_second_user` (`id_second_user`);

--
-- Index pour la table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_game` (`id_game`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `unique_email` (`mail`);

--
-- Index pour la table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `game`
--
ALTER TABLE `game`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `private_message`
--
ALTER TABLE `private_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`id_expediteur`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `private_message`
--
ALTER TABLE `private_message`
  ADD CONSTRAINT `private_message_ibfk_1` FOREIGN KEY (`id_first_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `private_message_ibfk_2` FOREIGN KEY (`id_second_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `scores_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
