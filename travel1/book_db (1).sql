-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2024 at 09:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount_spent`
--

DROP TABLE IF EXISTS `amount_spent`;
CREATE TABLE IF NOT EXISTS `amount_spent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `amount_spent`
--

INSERT INTO `amount_spent` (`id`, `name`, `amount`) VALUES
(1, 'piyumee', 140);

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

DROP TABLE IF EXISTS `book_form`;
CREATE TABLE IF NOT EXISTS `book_form` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(20,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`name`, `email`, `phone`, `location`, `guests`, `arrivals`, `leaving`, `address`, `id`, `price`, `total_price`) VALUES
('piyumee', 'piyumeesathya@gamil.com', 1254789632, 'polonnaruwa', 2, '2024-07-23', '2024-07-31', '12,nawagaela,nuwaragala', 22, '30.00', '60'),
('gubhub', 'la@gmail.com', 2147483647, 'colombo', 2, '2024-07-23', '2024-07-22', '34,gemunu mawatha,kurunagala', 23, '25.00', '50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$cEzVKbFpUWfk2FXMWEMuZuKojYzrBL70PI2gK3RtvzU4OzX4uA3/.'),
(2, 'piyumii', 'piyumeesathya@gamil.com', '$2y$10$WzI2haN28SmIfk9Jayw8GuBMdsNTfaCVzYgw5zOShq7SpxlS2XGD2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
