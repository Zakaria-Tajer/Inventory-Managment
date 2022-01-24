-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 10:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `passwordVerification` varchar(250) NOT NULL,
  `img` varchar(400) NOT NULL,
  `joinedDate` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `email`, `password`, `passwordVerification`, `img`, `joinedDate`, `status`) VALUES
(3, 'oussama', 'tajer', 'oussama@tajer.com', 'k', 'k', '1642900686xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-23', 'Active'),
(4, 'me', 'other', 'ww@l.com', 'e', 'e', '1642900723iphone-12-pro-max-frandroid-2020.png', '2022-01-23', 'Active'),
(5, 'itsMe', 'ka', 'za.tajers@gmail.com', 's', 's', '1642935378xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-23', 'Active'),
(6, 'sung', 'jinwoo', 'jinwoo@solo.com', 'yasuo', 'yasuo', '1642939230xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-23', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_unique_id` int(200) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_color` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_unique_id`, `product_price`, `product_img`, `product_color`) VALUES
(106, 'Xioami Redmie 9s', 556078590, 3000, '1643014535xiaomi-redmi-note-9s-frandroid-2020.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user-registers`
--

CREATE TABLE `user-registers` (
  `id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `passwordVerify` varchar(250) NOT NULL,
  `passwordMatch` varchar(250) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-registers`
--

INSERT INTO `user-registers` (`id`, `unique_id`, `email`, `passwordVerify`, `passwordMatch`, `img`, `status`) VALUES
(8, 333116377, 'admin@admin.com', 'admin', 'admin', '1642682949hyundai-iload-2009.jpg', 'Active'),
(10, 252254814, 'me@dd.com', 's', 's', '1642684285OEM04_308179977_AR_-1_FEYDIILDBOXZ.jpg', 'Active'),
(11, 850470254, 'kal@kal.com', 'kk', 'kk', '1642700452hyundai-iload-2009.jpg', 'Active'),
(12, 540396409, 'emplo@me.com', 'password', 'password', '1642862539xiaomi-redmi-note-9s-frandroid-2020.png', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-registers`
--
ALTER TABLE `user-registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `user-registers`
--
ALTER TABLE `user-registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
