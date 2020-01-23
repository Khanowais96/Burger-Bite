-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 11:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`) VALUES
('owi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES
('owais', 'owikhan72@gmail.com', 'suggestions', 'increase the product varity'),
('Ahmed', 'ahmed@hotmail.com', 'suggestions', 'add some deals in the menu '),
('sdsd', 'asd@gmail.com', 'service', 'dsarfdfdfdsfdfdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pdetail` text NOT NULL,
  `pimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `pdetail`, `pimg`) VALUES
(1, 'Big Mac', '5', 'There is only one BIG MAC! Just the look of this tasty and aromatic giant is good enough to tempt you. It is made with a double layer of sear-sizzled 100% pure beef that mingles with sauce and melted cheese, diced onion, crisp shredded iceberg lettuce and a crunch of pickle.', 'images/1.jpg'),
(3, 'Quarter Pounder ', '5', 'It\'s mighty simple! 100% pure beef and a double helping of cheese with simple and quality ingredients, bettered by adding onion, pickles, tomato ketchup and mustard in a sesame seed bun', 'images/3.jpg'),
(5, 'Chicken Mac', '5', 'Two breaded chicken patties (de-boned breast meat), lettuce, sesame seed bun, McDeluxe sauce and cheese come together to make the scrumptious Chicken Mac.', 'images/5.jpg'),
(6, 'Spicy McCrispy ', '5', 'Deliciously hot & kickin’! Between the corn dusted bun lies tender, juicy, boneless chicken thigh meat, encased in a crisp and crumbling spicy crust, all topped with fresh lettuce, cheese and creamy mayonnaise to set your mouth on fire.', 'images/6.jpg'),
(7, 'McChicken', '5', 'The classic combination! It\'s the simple things that matter. Our quality chicken breast, cooked in a seasoned tempura coating, topped with fresh grown lettuce and our exceptional McChicken sauce, between a sesame seed bun makes for a hard to beat classic.', 'images/7.jpg'),
(8, 'McArabia', '5', 'One of its kind! Two grilled chicken patties (de-boned breast meat), Arabic bread, lettuce, tomatoes, onions, garlic sauce give you a unique and unforgettable taste.', 'images/8.jpg'),
(9, 'Chicken McNuggets', '5', 'Just irresistible! Whichever way you enjoy yourfavourite McNuggets, it’s good to know they are made with juicy white meat that makes them hard to resist.', 'images/9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Owais', 'owikhan72@gmail.com', '12345'),
(2, 'Abdullah', 'abdullah@gmail.com', '5545');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
