-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 08:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--
CREATE DATABASE IF NOT EXISTS `journal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `journal`;

-- --------------------------------------------------------

--
-- Table structure for table `accepted_articles`
--

CREATE TABLE `accepted_articles` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accepted_articles`
--

INSERT INTO `accepted_articles` (`id`, `article_id`, `created_at`) VALUES
(1, 55, '2024-06-22 18:08:12'),
(2, 56, '2024-06-22 18:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `givenname` varchar(150) NOT NULL,
  `FamilyName` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `givenname`, `FamilyName`, `country`, `username`, `email`, `password`, `role`) VALUES
(4, 'abdelrahman', 'badr', 'Egypt', 'admin', 'aboodbadr@gmail.com', '123321', 'Jornal Manager');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_editor`
--

CREATE TABLE `assignment_editor` (
  `id` int(11) NOT NULL,
  `artical_id` int(11) NOT NULL,
  `editor_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment_editor`
--

INSERT INTO `assignment_editor` (`id`, `artical_id`, `editor_id`, `message`, `status`) VALUES
(34, 55, 1, 'manage this article ', 'assgned'),
(35, 56, 1, 'manage this article ', 'assgned');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_reviewer`
--

CREATE TABLE `assignment_reviewer` (
  `id` int(11) NOT NULL,
  `artical_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` enum('assigned','accepted','declined') DEFAULT 'assigned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authers`
--

CREATE TABLE `authers` (
  `id` int(11) NOT NULL,
  `givenname` varchar(150) NOT NULL,
  `familyname` varchar(150) NOT NULL,
  `affiliation` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `Pasword` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authers`
--

INSERT INTO `authers` (`id`, `givenname`, `familyname`, `affiliation`, `country`, `email`, `username`, `Pasword`, `role`) VALUES
(15, 'mohamed ', 'samy', 'IT', 'Egypt', 'mohamedSamy@gmail.com', 'mohamed22', 'Dell12345@', 'auther'),
(16, 'ali', 'othman', 'IT', 'Egypt', 'aliothman@gmail.com', 'aly22', 'Dell12345@', 'auther');

-- --------------------------------------------------------

--
-- Table structure for table `contributors`
--

CREATE TABLE `contributors` (
  `id` int(11) NOT NULL,
  `con_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `con_Role` varchar(150) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contributors`
--

INSERT INTO `contributors` (`id`, `con_name`, `email`, `Country`, `con_Role`, `author_id`) VALUES
(11, 'ali mohamed ', 'ali@gmail.com ', 'Egypt', 'Translator', 15),
(12, 'mohamed', 'mohamedSamy@gmail.com', 'Egypt', 'Translator', 16);

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `givenname` varchar(150) NOT NULL,
  `FamilyName` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `user_id`, `givenname`, `FamilyName`, `country`, `username`, `email`, `password`, `role`) VALUES
(1, 4, 'mohamed', 'Gaber', 'Bahrain', 'gaber000', 'gaber@gmail.com', '12345@', 'Jornal Editor');

-- --------------------------------------------------------

--
-- Table structure for table `reviwers`
--

CREATE TABLE `reviwers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `givenname` varchar(150) NOT NULL,
  `FamilyName` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviwers`
--

INSERT INTO `reviwers` (`id`, `user_id`, `givenname`, `FamilyName`, `country`, `username`, `email`, `password`, `role`) VALUES
(8, 4, 'elsayed ', 'elfaleh', 'Egypt', 'faleh223', 'elsayed5@gmail.com', 'Dell12345@', 'Reviewer');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL,
  `auther_id` int(11) NOT NULL,
  `auther_name` varchar(150) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `abstract` varchar(250) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `article` varchar(100) NOT NULL,
  `file_kind` varchar(250) NOT NULL,
  `status` enum('Incomplete','submission','Decline Submission','Copy Editing','reviewing','Accept Submission','Revisions Required','Resubmit for Review','Resubmit Elsewhere') DEFAULT 'Incomplete',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `auther_id`, `auther_name`, `title`, `keywords`, `abstract`, `comment`, `article`, `file_kind`, `status`, `created_at`, `last_modification`) VALUES
(55, 15, 'mohamed ', 'semantic web', 'resoning ', 'Semantic Web, extension of the World Wide Web (WWW) in which data are given meaning (semantics) to enable computers to look up and “reason” in response to user searches', 'thank you ', 'Lecture 3.pdf', 'Article Text', 'Accept Submission', '2024-06-22 18:00:56', '2024-06-22 18:08:12'),
(56, 16, 'ali', 'integrated database', 'Data integration', 'Data integration involves combining data residing in different sources and providing users with a unified view of them. This process becomes significant in a variety of situations, which include both commercial', 'thank you', 'Integrated Information Systems Midterm revision_.pdf', 'Article Text', 'Accept Submission', '2024-06-22 18:19:09', '2024-06-22 18:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_articles`
--
ALTER TABLE `accepted_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment_editor`
--
ALTER TABLE `assignment_editor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artical_id` (`artical_id`),
  ADD KEY `editor_id` (`editor_id`);

--
-- Indexes for table `assignment_reviewer`
--
ALTER TABLE `assignment_reviewer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artical_id` (`artical_id`),
  ADD KEY `reviewer_id` (`reviewer_id`);

--
-- Indexes for table `authers`
--
ALTER TABLE `authers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contributors`
--
ALTER TABLE `contributors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auther_id` (`author_id`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reviwers`
--
ALTER TABLE `reviwers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auther_id` (`auther_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_articles`
--
ALTER TABLE `accepted_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignment_editor`
--
ALTER TABLE `assignment_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `assignment_reviewer`
--
ALTER TABLE `assignment_reviewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `authers`
--
ALTER TABLE `authers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contributors`
--
ALTER TABLE `contributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviwers`
--
ALTER TABLE `reviwers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accepted_articles`
--
ALTER TABLE `accepted_articles`
  ADD CONSTRAINT `accepted_articles_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `submissions` (`id`);

--
-- Constraints for table `assignment_editor`
--
ALTER TABLE `assignment_editor`
  ADD CONSTRAINT `assignment_editor_ibfk_1` FOREIGN KEY (`artical_id`) REFERENCES `submissions` (`id`),
  ADD CONSTRAINT `assignment_editor_ibfk_2` FOREIGN KEY (`editor_id`) REFERENCES `editors` (`id`);

--
-- Constraints for table `assignment_reviewer`
--
ALTER TABLE `assignment_reviewer`
  ADD CONSTRAINT `assignment_reviewer_ibfk_1` FOREIGN KEY (`artical_id`) REFERENCES `submissions` (`id`),
  ADD CONSTRAINT `assignment_reviewer_ibfk_2` FOREIGN KEY (`reviewer_id`) REFERENCES `reviwers` (`id`);

--
-- Constraints for table `contributors`
--
ALTER TABLE `contributors`
  ADD CONSTRAINT `contributors_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authers` (`id`);

--
-- Constraints for table `editors`
--
ALTER TABLE `editors`
  ADD CONSTRAINT `editors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `reviwers`
--
ALTER TABLE `reviwers`
  ADD CONSTRAINT `reviwers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`auther_id`) REFERENCES `authers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
