-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 06:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(26) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_cat_id` int(100) NOT NULL,
  `book_price` int(255) NOT NULL,
  `book_publisher` varchar(255) NOT NULL,
  `book_quantity` int(255) NOT NULL,
  `book_img_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_cat_id`, `book_price`, `book_publisher`, `book_quantity`, `book_img_link`) VALUES
(7, 'Ron Chernow', 3, 2560, 'Titan', 10, 'images/biography1.jpg'),
(9, 'The Idiots', 5, 1500, 'Elif Batuman', 6, 'images/comedy1.jpg'),
(18, 'Elon Musk', 3, 1200, 'Harper Collins', 9, 'images/biography2.jpg'),
(19, 'Sam Walton', 3, 1080, 'John huey', 10, 'images/biography3.jpg'),
(20, 'My sister the Serial Killer', 5, 2223, 'Doubleday', 6, 'images/comedy3.jpg'),
(21, 'Steve Jobs', 3, 2540, ' Simon & Schuster', 10, 'images/biography4.jpg'),
(22, 'Ali baba', 3, 1398, 'Harper Collins', 10, 'images/biography5.jpg'),
(23, 'Popular stories of ancient egypt', 3, 4288, 'putnam', 6, 'images/biography6.PNG'),
(24, 'As you like it', 3, 1250, 'originally', 8, 'images/biography7.PNG'),
(25, 'Elizabeth jolley', 3, 1262, 'Penguin', 6, 'images/biography8.jpg'),
(26, 'Einstein', 3, 2850, 'Alert einstein', 10, 'images/biography9.jpg'),
(27, 'The Adulterants', 5, 3169, 'Penguin', 9, 'images/comedy2.jpg'),
(28, 'The catcher in the Rye', 5, 5500, 'Little, brown and company', 12, 'images/comedy4.png'),
(29, 'Nancy Mitford', 5, 3690, 'Publishing houses', 15, 'images/comedy5.png'),
(30, 'Paradiso', 5, 5000, 'simon and schuster', 10, 'images/comedy6.PNG'),
(31, 'Jack Handey', 5, 1740, 'originally', 9, 'images/comedy7.jpg'),
(32, 'Good-bye Testicles', 5, 1330, 'Barbara Binland', 10, 'images/comedy8.jpg'),
(33, 'A lifelong Resonance', 6, 1580, 'Austin Macauley', 18, 'images/fairy1.png'),
(34, 'Myths', 6, 1095, 'Boye6', 10, 'images/fairy2.PNG'),
(35, 'Dan brown', 6, 945, 'Doubleday', 9, 'images/fairy3.jpg'),
(36, 'Magic Tales ', 6, 6350, 'Italian Renaissance', 7, 'images/fairy4.PNG'),
(37, 'Fairy Princess', 6, 1906, 'Andrews', 12, 'images/fairy5.jpg'),
(38, 'Beauty and the Beast', 6, 875, 'simon and schuster', 10, 'images/fairy6.jpg'),
(39, 'English Fairy Tales', 6, 4447, 'Retold by flora annie steel', 9, 'images/fairy8.jpg'),
(40, 'first book of fairy tale', 6, 2700, 'Stravaganza series', 13, 'images/fairy9.jpg'),
(41, 'In your own Backyard', 9, 2220, 'Kurjian', 12, 'images/kids 1.png'),
(42, 'Pipsie ', 9, 2850, 'Two lions', 6, 'images/kids 2.jpg'),
(43, 'Double down', 9, 1499, 'Abrams books', 19, 'images/kids 3.jpg'),
(44, 'Little Red riding Hood', 9, 1000, 'simon and schuster', 12, 'images/kids 4.jpg'),
(45, 'Clare balding', 9, 5710, 'Penguin', 10, 'images/kids 5.jpg'),
(46, 'Mary poppins', 9, 30000, 'Travers and Diney', 6, 'images/kids 6.jpg'),
(47, 'Wicked Christmas ', 9, 4000, 'Dragonblade', 13, 'images/kids 7.jpg'),
(48, 'Gangsta Granny', 9, 2380, 'Harper Collins', 10, 'images/kids 8.jpg'),
(49, 'Heidi', 9, 557, 'simon and schuster', 13, 'images/kids 9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(2, 'Science Fiction', 'Science fiction is a genre of speculative fiction that typically deals with imaginative and futuristic concepts such as advanced science'),
(3, 'Bio graphics', 'bio graphics base on real life stories and achievements of people   '),
(4, 'Romance', 'A romance novel or romantic novel is a type of novel and genre fiction which places its primary focus on the relationship and romantic love between two people'),
(5, 'comedies', ' Books are very important to comedy'),
(6, 'fairy tales ', 'The eight stories covered in the book are Cinderella, Little Red Riding Hood, The Little Mermaid, The Brave Tin Soldier, Beauty and the Beast, Aladdin and the Magic Lamp, Thumbelina and The Wonderful Wizard of OZ'),
(7, 'religion', 'Religious texts are texts related to a religious tradition'),
(8, 'mystery / thriller ', 'the best thrillers of all time, spanning the best psychological thrillers, crime novels, and mysteries'),
(9, 'kids', ' When you have a big family, reunions can be loud and chaotic');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `com_id` int(50) NOT NULL,
  `com_title` varchar(255) NOT NULL,
  `com_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`com_id`, `com_title`, `com_image`) VALUES
(2, 'writing competition', 'images/b1.jpg'),
(3, 'essay content', 'images/b2.png'),
(4, 'essay content', 'images/b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(100) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'adi', 'adi@gmail.com', 'best web');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_Confirmpassword` varchar(255) NOT NULL,
  `user_contact` int(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `zip code` int(15) NOT NULL,
  `user_Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_name`, `user_email`, `user_password`, `user_Confirmpassword`, `user_contact`, `user_address`, `zip code`, `user_Gender`) VALUES
(5, 'ali', 'ali23@gmail.com', '$2y$10$FC4lMQFhdZrYFkW2wUDTOOjIYcipBZ9V261TMduEpLjnOs.GWkqRW', '$2y$10$bVF2zBIjcfELui2L.lAIqeLjvBX.gDhwYcBFKCzvTx764hs9NR6kq', 325698, 'house no34', 789002, 'male'),
(6, 'Rimsha', 'rimshazehra45@gmail.com', '$2y$10$muH8tK1f/KzD7hmqTNkjqusGWgxhsG8UOF40V9/14mBXhB6CajkDS', '$2y$10$EFO0HhDRlI5T71zcgNMxEOa/AXZqBj3oKOw1pTnS5qMZkzS8yRGEC', 3256984, 'house no34', 89788, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_cat_id_2` (`book_cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `com_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`book_cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
