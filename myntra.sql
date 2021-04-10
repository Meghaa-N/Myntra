-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 11:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myntra`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `sno` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `delivery_date` date NOT NULL,
  `image` varchar(30) NOT NULL,
  `text` varchar(30) NOT NULL,
  `personalized_msg` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `tailor_id` int(11) NOT NULL,
  `tailor_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`sno`, `order_id`, `fname`, `lname`, `email`, `phno`, `address`, `country`, `city`, `state`, `zipcode`, `delivery_date`, `image`, `text`, `personalized_msg`, `total`, `tailor_id`, `tailor_status`) VALUES
(1, 14, 'Meghaa', 'Nallasivam', 'meghaanalsum@gmail.com', '9999999999', '49, Aishwarya Apartments,Beasant Nagar,Chennai-600090', 'India', 'Erode', 'qwerty', 600090, '2021-04-22', 'img/bday.png', 'under_image', 'personal', 400, 1, 'booked'),
(2, 2, 'Asmitha', 'Easwaran', 'asmitha@gmail.com', '9876543210', '!75.Gandhi Apartments, Nehru street, Chennai-60009', 'India', 'Chennai', 'TN', 600090, '2021-04-17', 'img_1.jpg', '', '', 0, 1, 'booked'),
(7, 3, 'Harbajan', 'Choudary', '', '9879876543', '23, Vivekananda Park, Beasant Nagar Beach Road, Chennai-600090', '', '', '', 600090, '2021-04-17', '', '', '', 700, 1, 'booked'),
(8, 6, 'Ankit', 'Arjun', 'hello@gmail.com', '7897896543', '56, Barathi Apartments, Opp. Beach park, Chennai-600090', '', '', '', 600090, '2021-04-18', '', '', '', 0, 1, 'booked'),
(23, 5, 'Thivagar', 'Bhatia', 'thiva@123.gmail.com', '9876987698', '123, Subash Street, Opposite Kathiyavad Junction, Beaasant Nagar, Chennai-600090', 'India', 'Chennai', 'TN', 600090, '2021-04-18', 'img_1.jpg', '', '', 0, 1, 'pending'),
(24, 8, 'Aswin', 'Chellapa', 'ashu102@hotmail.com', '9812345670', '24, Meenatchi Street, Beasant Nagar, Chennai-600090', 'India', 'Chennai', '', 600090, '0000-00-00', '', '', '', 0, 1, 'completed'),
(26, 11, 'Hiran', 'Hirisha', 'hirihiran@gmail.com', '8989787867', '44, Nungam Apartment, Beasant Nagar, Chennai-600090', '', '', '', 600090, '2021-04-19', '', '', '', 0, 1, 'completed'),
(27, 12, 'Akshitha', 'Gopal', 'akshi2012@gmail.com', '7878989867', '123, Thirunagar colony, Beasant nagar, opposite church park, chennai-600090', 'India', '', '', 0, '0000-00-00', '', '', '', 0, 1, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `order_log`
--

CREATE TABLE `order_log` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_log`
--

INSERT INTO `order_log` (`order_id`, `product_id`, `quantity`, `total`) VALUES
(2, 3, 2, 200),
(3, 3, 4, 800),
(1, 10, 2, 2600),
(1, 3, 3, 900),
(1, 9, 1, 1100),
(14, 11, 3, 2100),
(14, 5, 1, 550);

-- --------------------------------------------------------

--
-- Table structure for table `order_match`
--

CREATE TABLE `order_match` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_match`
--

INSERT INTO `order_match` (`order_id`, `customer_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(6, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sno`, `name`, `rating`, `description`, `price`, `discount`, `image`, `category`) VALUES
(1, 'Kurta tops', 4, 'Long Sleeve, Biba collection', 250, 200, 'k1.jpg', 'featured'),
(3, 'Biba Collection', 4.5, 'Summer collection, Fashionable', 350, 300, 'k2.jpg', 'featured'),
(4, 'Biba Collection', 4.5, 'New Arrivals, rending', 400, 350, 'k3.jpg', 'featured'),
(5, 'Soch', 4, 'Printed Straight Kurtas', 600, 550, 'k4.jpeg', 'featured'),
(6, 'GERUA', 4, 'Printed cotton floral', 699, 600, 'k5.jpg', 'featured'),
(7, 'Carlton London Sports', 4.5, 'Men branded sneakers', 1299, 600, 's1.jpg', 'shoe_t'),
(8, 'Puma', 4.3, 'Men\'s design running show', 1500, 1200, 's2.jpg', 'shoe_t'),
(9, 'Mochi', 4.4, 'Running shoes', 1200, 1100, 's3.jpg', 'shoe_t'),
(10, 'Adidas', 4.5, 'Printed stylish sneakers for men', 1500, 1300, 's5.jpg', 'shoe_t'),
(11, 'Bata', 4.3, 'Sneakers for men', 900, 700, 's6.jpg', 'shoe_t');

-- --------------------------------------------------------

--
-- Table structure for table `tailor`
--

CREATE TABLE `tailor` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `pincode` int(10) NOT NULL,
  `orders_completed` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tailor`
--

INSERT INTO `tailor` (`sno`, `name`, `phno`, `pincode`, `orders_completed`, `address`, `picture`, `password`, `email`, `shop`) VALUES
(1, 'Anuja', '9988776655', 600090, 15, '123, Aswini Apartments, Besant Nagar, Chennai-600090', 'tailor1.jpg', '123456', 'hello@gmail.com', 'Tara Designers');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `order_match`
--
ALTER TABLE `order_match`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tailor`
--
ALTER TABLE `tailor`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_match`
--
ALTER TABLE `order_match`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tailor`
--
ALTER TABLE `tailor`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
