-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 jan. 2024 à 21:04
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_wiki`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Category 1', 'Description for Category 1', '2024-01-10 12:07:42'),
(2, 'Category 2', 'Description for Category 2', '2024-01-10 12:07:42'),
(3, 'Category 3', 'Description for Category 3', '2024-01-10 12:07:42'),
(4, 'Category 4', 'Description for Category 4', '2024-01-10 12:07:42'),
(5, 'Category 5', 'Description for Category 5', '2024-01-10 12:07:42'),
(6, 'Category 6', 'Description for Category 6', '2024-01-12 02:37:03'),
(8, 'Category 8', 'Description for Category 8', '2024-01-10 12:07:42'),
(9, 'Category 9', 'Description for Category 9', '2024-01-10 12:07:42'),
(10, 'Category 10', 'Description for Category 10', '2024-01-10 12:07:42'),
(11, 'Category 11', 'Cumque aut nihil rep', '2024-01-11 18:08:25'),
(12, 'Laborum Quo volupta', 'Facilis hic sequi qu', '2024-01-12 01:48:18');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `title`) VALUES
(1, 'Tag1'),
(2, 'Tag2'),
(3, 'Tag3'),
(4, 'Tag4'),
(5, 'Tag5'),
(6, 'Tag6'),
(7, 'Tag7'),
(8, 'Tag8'),
(9, 'Tag9'),
(10, 'Tag10');

-- --------------------------------------------------------

--
-- Structure de la table `tag_wiki`
--

CREATE TABLE `tag_wiki` (
  `tag_id` int(11) NOT NULL,
  `wiki_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tag_wiki`
--

INSERT INTO `tag_wiki` (`tag_id`, `wiki_id`) VALUES
(8, 2),
(5, 2),
(1, 1),
(1, 14),
(5, 6),
(8, 7),
(1, 15),
(8, 15),
(4, 14),
(6, 13),
(8, 3),
(7, 14),
(4, 2),
(6, 8),
(7, 1),
(3, 20),
(5, 20),
(6, 20),
(9, 20),
(10, 20),
(1, 21),
(2, 21),
(3, 21),
(8, 21),
(9, 21),
(10, 21),
(2, 23),
(3, 23),
(6, 23),
(9, 23),
(10, 23);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role`) VALUES
(1, 'Finn', 'Stephens', 'zizo@mailinator.com', '$2y$10$BxmaCPr2sa3LS28FMndZ4OF1uZ0ijKM86JO6V.JB7Ne.FidG9JDsS', 0),
(2, 'Kevyn', 'Doyle', 'kosta@mailinator.com', '$2y$10$BxmaCPr2sa3LS28FMndZ4OF1uZ0ijKM86JO6V.JB7Ne.FidG9JDsS', 0),
(10, 'OUMAIMA', 'ER-RADA', 'erradaoumaima@gmail.com', '$2y$10$YQu88TuUSPyjlYG1lGyXpOuUS6MRw67GCDeuripsjVyEnemQuAc2W', 1);

-- --------------------------------------------------------

--
-- Structure de la table `wikis`
--

CREATE TABLE `wikis` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `removed` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `wikis`
--

INSERT INTO `wikis` (`id`, `title`, `content`, `user_id`, `removed`, `created_at`, `category_id`) VALUES
(1, 'Wiki 1', 'Content for Wiki 1', 1, 0, '2024-01-10 12:09:02', 10),
(2, 'Wiki 2', 'Content for Wiki 2', 1, 0, '2024-01-10 12:09:02', NULL),
(3, 'Wiki 3', 'Content for Wiki 3', 1, 0, '2024-01-10 12:09:02', 5),
(4, 'Wiki 4', 'Content for Wiki 4', 1, 0, '2024-01-10 12:09:02', 4),
(5, 'Wiki 5', 'Content for Wiki 5', 1, 0, '2024-01-10 12:09:02', 3),
(6, 'Wiki 6', 'Content for Wiki 6', 1, 0, '2024-01-10 12:09:02', 3),
(7, 'Wiki 7', 'Content for Wiki 7', 1, 0, '2024-01-10 12:09:02', 6),
(8, 'Wiki 8', 'Content for Wiki 8', 1, 0, '2024-01-10 12:09:02', 10),
(9, 'Wiki 9', 'Content for Wiki 9', 1, 0, '2024-01-10 12:09:02', 4),
(10, 'Wiki 10', 'Content for Wiki 10', 1, 0, '2024-01-10 12:09:02', NULL),
(11, 'Wiki 11', 'Content for Wiki 11', 1, 0, '2024-01-10 12:09:02', 3),
(12, 'Wiki 12', 'Content for Wiki 12', 1, 0, '2024-01-10 12:09:02', 2),
(13, 'Wiki 13', 'Content for Wiki 13', 1, 0, '2024-01-10 12:09:02', 10),
(14, 'Wiki 14', 'Content for Wiki 14', 1, 0, '2024-01-10 12:09:02', 4),
(15, 'Wiki 15', 'Content for Wiki 15', 1, 0, '2024-01-10 12:09:02', 9),
(16, 'Emmanuel Lindsey', 'Nisi molestias sit d', 1, 2, '2024-01-10 13:01:37', 9),
(17, 'Emmanuel Lindsey', 'Nisi molestias sit d', 1, 0, '2024-01-10 13:04:55', 9),
(18, 'Lionel Dyer', 'Nihil exercitationem', 1, 0, '2024-01-10 13:09:17', NULL),
(19, 'Tana Roberson', 'Sed velit ex asperi', 1, 0, '2024-01-10 14:05:35', 1),
(20, 'Anthony Wheeler', 'Elit qui minus cupi', 1, 0, '2024-01-10 14:13:52', 5),
(21, 'Jena Shelton', 'Modi irure totam vol', 2, 0, '2024-01-11 13:58:56', 8),
(23, 'Kadeem Dickson', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\n                    industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type\n                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the\n                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s\n                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop\n                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 0, '2024-01-11 13:59:12', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_wiki`
--
ALTER TABLE `tag_wiki`
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `wiki_id` (`wiki_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wikis`
--
ALTER TABLE `wikis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_wiki` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `wikis`
--
ALTER TABLE `wikis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tag_wiki`
--
ALTER TABLE `tag_wiki`
  ADD CONSTRAINT `tag_wiki_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_wiki_ibfk_2` FOREIGN KEY (`wiki_id`) REFERENCES `wikis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `wikis`
--
ALTER TABLE `wikis`
  ADD CONSTRAINT `fk_user_wiki` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wikis_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
