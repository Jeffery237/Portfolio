-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 juin 2023 à 19:08
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(20) NOT NULL,
  `sender_name` varchar(20) NOT NULL,
  `sender_email` varchar(20) NOT NULL,
  `sender_message` tinytext NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `sender_name`, `sender_email`, `sender_message`, `message_date`) VALUES
(1, '', '', '', '2023-01-15 13:17:31'),
(2, 'Yoo', 'yoo@yahoo.com', 'Hello Buddy', '2023-01-16 08:21:35'),
(3, 'Nsuh Forsuh', 'forsuh@gmail.com', 'Hello World', '2023-01-16 09:30:17'),
(4, 'Wanki Jefferson', 'wilsonjeffery230@gma', 'Hello World, Happy new year!', '2023-01-16 10:26:41'),
(5, 'Wanki Jefferson', 'wilsonjeffery230@gma', 'Hello World, Happy new year!', '2023-01-16 10:29:48'),
(6, 'Lam', 'jhfhg@gmail.com', 'khgjh', '2023-01-16 10:30:26'),
(7, 'Yooo', 'yoo@gmail.com', 'jshdghgshj', '2023-01-16 10:39:52'),
(8, 'kjfdgfhgkhj', 'yoo@gmail.com', 'hgfdfgfhhjk', '2023-01-16 10:44:15'),
(9, 'kjfdgfhgkhj', 'yoo@gmail.com', 'hgfdfgfhhjk', '2023-01-16 10:48:22'),
(10, 'Kpongor ', 'tyyt@gmail.com', 'Yoo Kpongor', '2023-01-16 10:49:39'),
(11, 'Kpongor ', 'tyyt@gmail.com', 'Yoo Kpongor', '2023-01-16 10:49:59'),
(12, 'hindi', 'hi@gmail.com', 'rtefhcvdb', '2023-01-16 10:51:25'),
(13, 'hindii', 'asdasd@gmail.com', 'yoooo', '2023-01-16 11:03:34'),
(14, 'its  me', 'me@gmail.com', 'sdfsdfs', '2023-01-16 11:04:14'),
(15, 'qwerty', 'asdasd@gmail.com', 'fszhkl;kfdraeteyriy', '2023-01-16 18:40:03'),
(16, 'hindii', 'yoo@yahoo.com', 'khvhfcyfchgc', '2023-01-16 18:40:49'),
(17, 'Wanki Tala Kelvin', 'eldoradomillion@gmai', 'Yoo Influemento', '2023-01-16 18:51:21'),
(18, 'Kevo', 'kev1@yahoo.org', 'Production', '2023-01-18 07:28:46'),
(19, 'le bangala', 'leq@gmail.com', 'je te nique', '2023-01-18 07:29:31'),
(20, 'le zizi', 'zizzi@yahoo.fr', 'Zizi.com', '2023-01-18 07:31:30'),
(21, 'le zizi', 'zizzi@yahoo.fr', 'Zizi.com', '2023-01-18 07:32:53'),
(23, 'mnbvcxcxvbn', 'freddjefferson487@gm', 'Hello bro', '2023-01-28 10:13:48'),
(24, 'mnbvcxcxvbn', 'freddjefferson487@gm', 'Hello bro', '2023-01-28 10:14:51'),
(25, 'mnbvcxcxvbn', 'freddjefferson487@gm', 'bvbvbjkjkbv', '2023-01-28 10:15:53'),
(26, 'mnbvcxcxvbi', 'os@k.com', 'JIJjnnin sndsind', '2023-02-06 09:54:33'),
(27, 'Jefferson', 'jj@inbox.vh', 'Hello', '2023-06-30 16:14:06');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(40) NOT NULL,
  `project_des` text NOT NULL,
  `project_type` varchar(25) NOT NULL,
  `project_date` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_des`, `project_type`, `project_date`) VALUES
(1, 'Management of NightC', 'A small to be completed frontend website for nightclub with the goal of boosting productivity built using HTML and CSS', 'HTML and CSS', 2022),
(2, 'Elevator System', 'Small program which simulates the operations of an elevator system in a small enterprise', 'C++', 2022),
(3, 'Login Form', 'Describes how a login form is built from scratch using html and css ', 'HTML and CSS', 2021),
(4, 'MySQL db connection', 'Brief overview of how communication between user and database is established', 'PHP Project', 2023),
(5, 'FSLC', 'CHERUBS BILINGUAL COMPLEX', 'Academic_parcours', 2012),
(6, 'GCE Ordinary Level', 'GREEN HILLS ACADEMIC COMPLEX DAMAS YAOUNDE', 'Academic_parcours', 2018),
(7, 'GCE Advance Level', 'GREEN HILLS ACADEMIC COMPLEX DAMAS YAOUNDE', 'Academic_parcours', 2020),
(8, 'BACHELORS DEGREE', 'AWAITING...', 'Academic_parcours', 2022),
(9, 'Internship at Camtel', 'Internship from JUNE 12TH to AUGUST 12TH 2022', 'Professional_parcours', 2022),
(10, 'Internship atVision4', 'Internship carried out from JULY 30TH to SEPTEMBER 30TH 2021', 'Professional_parcours', 2021),
(13, 'MANAGEMENT OF A MORTUARY', 'A web application which describes how corps are registered and removed from a mortuary', 'PHP PROJECT', 2023);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pwd`) VALUES
(1, 'qwqw', 'qwqw@gmail.com', '$2y$10$C7vDFHd9ZfpHYKyTZa'),
(2, 'wanki', '1234@yahoo.com', '$2y$10$jx1tmxSi8hVi0SSqyi'),
(3, 'baby', 'baby@yahoo.com', '$2y$10$edRIuNVd62HXE1UQ/B'),
(4, 'yoo', 'yoo@sd.com', '$2y$10$DQcQwCToyXqDcX5NEx'),
(5, 'asads', 'asads@yahoo.com', '$2y$10$gIzxbUDpIUc2xKnrpf'),
(6, 'yes', 'yes@iai.org', '$2y$10$Vrh3nfHrq5RM7n9u9S'),
(7, 'Maurice', 'qww@gmail.com', '$2y$10$wDcdK9bOO2msX.H/Y.'),
(8, 'kevo', 'kev1@yahoo.org', '$2y$10$68FfaG5g4zw1lQbQGE'),
(9, 'Yowa', 'yow@bg.org', '$2y$10$cIg6F5vTAvhCUTn0X6'),
(10, 'Jefferson', 'jj@inbox.vh', '$2y$10$Qa7pygUgvrjfnmCacN'),
(11, 'Yewo', 'asc@oko.kl', '$2y$10$Yxo5HdlSqyCkJQxfQb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
