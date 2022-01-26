-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 03:28 PM
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
-- Table structure for table `crm-clicks`
--

CREATE TABLE `crm-clicks` (
  `id` int(11) NOT NULL,
  `rem_clicks` int(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'itsMe', 'ka', 'za.tajers@gmail.com', 's', 's', '1642935378xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-23', 'Offline now'),
(6, 'sung', 'jinwoo', 'jinwoo@solo.com', 'yasuo', 'yasuo', '1642939230xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-23', 'Offline now'),
(9, 'ka', 'ka', 'sa@sa.com', 'ka', 'ka', '1643035676xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-24', 'Active Now'),
(10, 'zakaria', 'tajer', 'zakaria@tajer.com', 'tajer', 'tajer', '1643061717xiaomi-redmi-note-9s-frandroid-2020.png', '2022-01-24', 'Active Now');

-- --------------------------------------------------------

--
-- Table structure for table `produc`
--

CREATE TABLE `produc` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_unique_id` varchar(250) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `addedDate` date NOT NULL,
  `emp_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produc`
--

INSERT INTO `produc` (`id`, `product_name`, `product_unique_id`, `product_price`, `product_img`, `addedDate`, `emp_id`) VALUES
(34, 'Xioami Redmie 9s', '1005364146', 9000, '164320283938902842.jpg', '2022-01-26', 6),
(35, 'kal', '1557616512', 9000, '16432043516a2081efec9a4564a93519475a0cc40a.jpg', '2022-01-26', 6),
(36, 'kal', '802754206', 9000, '16432043536a2081efec9a4564a93519475a0cc40a.jpg', '2022-01-26', 6),
(37, 'Xioami Redmie 9s', '192137752', 3000, '164320562638902842.jpg', '2022-01-26', 6),
(38, 'iph', '850447506', 30000, '1643206169download (1).jpg', '2022-01-26', 5),
(39, 'xiam', '859791031', 9000, '1643207223636117969993182019-06-P90238694-BMW-Motorrad-VISION-NEXT-100.jpg', '2022-01-26', 9);

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
(119, 'iphone 13', 1514856703, 20000, '1643034643iphone-12-pro-max-frandroid-2020.png', '');

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
  `status` varchar(250) NOT NULL,
  `fname` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-registers`
--

INSERT INTO `user-registers` (`id`, `unique_id`, `email`, `passwordVerify`, `passwordMatch`, `img`, `status`, `fname`) VALUES
(8, 333116377, 'admin@admin.com', 'admin', 'admin', '1642682949hyundai-iload-2009.jpg', 'Active Now', 'zakaria'),
(14, 163353539, 'ak@ak.com', 'ak', 'ak', '1643105803xiaomi-redmi-note-9s-frandroid-2020.png', 'Offline now', 'zakaria'),
(15, 1090836180, 'za@ta.com', 'zata', 'zata', '1643113067iphone-12-pro-max-frandroid-2020.png', 'Offline now', 'zakaria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crm-clicks`
--
ALTER TABLE `crm-clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produc`
--
ALTER TABLE `produc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `emp_id_2` (`emp_id`);

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
-- AUTO_INCREMENT for table `crm-clicks`
--
ALTER TABLE `crm-clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produc`
--
ALTER TABLE `produc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `user-registers`
--
ALTER TABLE `user-registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produc`
--
ALTER TABLE `produc`
  ADD CONSTRAINT `produc_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
