-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2021 at 06:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shiney_heinic_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('hetvishukla2001@gmail.com', '$2y$10$LigHAYljzoRR7QSq15npcunHmy2qOtQzNsIjekTvIdgNgwaG.o0ES');

-- --------------------------------------------------------

--
-- Table structure for table `classic_review`
--

CREATE TABLE `classic_review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `review_text` text NOT NULL,
  `timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classic_review`
--

INSERT INTO `classic_review` (`id`, `name`, `user_id`, `rating`, `review_text`, `timestamp`) VALUES
(1, 'Hardik  Bhalodia', '1', '5', '', '4 October  2021'),
(2, 'Hardik  Bhalodia', '1', '5', 'Write a Review...fgdfg', '4 October  2021'),
(3, 'Hardik  Bhalodia', '1', '3', 'Write a Review...', '4 October  2021'),
(4, 'Hardik  Bhalodia', '1', '3', 'wonder fiul productjkzdfh sdfhsjd fsdf sdf sdf dsf sdf sdf sdfs df  df sd fsd gdgh dfgmngjs iji owhe weifhh', '4 October  2021'),
(5, 'Hardik  Bhalodia', '1', '5', 'Write a Review...gffdgf ', '4 October  2021'),
(6, 'Hardik  Bhalodia', '1', '2', 'Write a Review...dfgdfgdf dfgd', '4 October  2021'),
(7, 'Hardik  Bhalodia', '1', '4', 'Write a Review...dfgdfgdf dfgdfd  fgdfgd ', '4 October  2021');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `time_stamp`) VALUES
(1, 'hardikbhalodia999@gmail.com', '4 October  2021 , 9:24:59 pm');

-- --------------------------------------------------------

--
-- Table structure for table `onthego_review`
--

CREATE TABLE `onthego_review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `review_text` text NOT NULL,
  `timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onthego_review`
--

INSERT INTO `onthego_review` (`id`, `name`, `user_id`, `rating`, `review_text`, `timestamp`) VALUES
(4, 'Hardik  Bhalodia', '1', '5', 'Write a Review...', '4 October  2021'),
(5, 'Hardik  Bhalodia', '1', '5', 'Write a Review...', '5 October  2021');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `customer_id` text NOT NULL,
  `customer_name` text NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `shiping_address` text NOT NULL DEFAULT 'same',
  `country` text NOT NULL DEFAULT 'same',
  `state` text NOT NULL DEFAULT 'same',
  `zip` text NOT NULL DEFAULT 'same',
  `bill_address` text NOT NULL,
  `country_bill` text NOT NULL,
  `state_bill` text NOT NULL,
  `zip_bill` text NOT NULL,
  `shiney_heinie_classic` int(100) NOT NULL,
  `shiney_no_the_go` int(100) NOT NULL,
  `status` text NOT NULL,
  `amount` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_id`, `customer_name`, `user_id`, `email`, `phone`, `shiping_address`, `country`, `state`, `zip`, `bill_address`, `country_bill`, `state_bill`, `zip_bill`, `shiney_heinie_classic`, `shiney_no_the_go`, `status`, `amount`, `time_stamp`) VALUES
(1, 'cus_KLqZxaF0GxcyaT', 'hardik', '', '', '', 'same', 'same', 'same', 'same', 'dfsdf', 'fgdf', 'dfg', 'dfg', 3, 1, 'succeeded', '234.96', '5 October  2021 , 1:19:45 am'),
(2, 'cus_KLqdMrRESq2Xx3', 'hardik', '', '', '', 'same', 'same', 'same', 'same', 'yogi avenue', 'India', 'gujarat', '390016', 1, 1, 'succeeded', '94.98', '5 October  2021 , 1:23:23 am'),
(3, 'cus_KLr2gQQSLmnQ22', 'hardik', '', '', '', 'same', 'same', 'same', 'same', 'yogi avenue', 'India', 'gujarat', '390016', 1, 0, 'succeeded', '69.99', '5 October  2021 , 1:49:07 am'),
(4, 'cus_KLr5zpq5DtxFtu', 'hardik', '', '', '', 'yogi avenue', 'India', 'gujarat', '390016', 'yogi avenue', 'India', 'gujarat', '390016', 1, 1, 'succeeded', '94.98', '5 October  2021 , 1:52:11 am'),
(5, 'cus_KLx0LBvJHR9Iov', 'hardik', '', '', '', 'yogi avenue', 'India', 'gujarat', '390016', 'yogi avenue', 'India', 'gujarat', '390016', 1, 1, 'succeeded', '94.98', '5 October  2021 , 7:58:32 am'),
(6, 'cus_KLy0uOS2auwafA', 'hardik bhalodia', '1', 'hardikbhalodia999@gmail.com', '6355129211', 'yogi avenue', 'India', 'gujarat', '390016', 'yogi avenue', 'India', 'gujarat', '390016', 0, 2, 'succeeded', '49.98', '5 October  2021 , 9:01:14 am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `time_stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `time_stamp`) VALUES
(1, 'hardikbhalodia999@gmail.com', '$2y$10$XGZFYZWwHY0uVUOHBSrGvuSpJ5ZOa2D7VJP3huvzKBhLNs4pFiaSi', 'Hardik ', 'Bhalodia', '30 September  2021 , 9:16:43 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classic_review`
--
ALTER TABLE `classic_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onthego_review`
--
ALTER TABLE `onthego_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classic_review`
--
ALTER TABLE `classic_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `onthego_review`
--
ALTER TABLE `onthego_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
