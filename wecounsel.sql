-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 02:57 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecounsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('Wambua Rebecca', '123456'),
('Kokach Hellen', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(2, 103, 2, 'Hey, it\\\'s emma', '2018-10-30 18:39:50', 1),
(3, 2, 103, 'Hi emma, it\\\'s Linda', '2018-10-30 18:40:57', 1),
(4, 103, 2, 'Are you feeling better today, you were really down yesterday', '2018-10-30 18:54:24', 1),
(5, 2, 103, 'Yeah, I\\\'ve been journaling like you said. I\\\'ve also joined a local support group. I\\\'m glad I don\\\'t have to face this alone. ', '2018-10-30 20:06:03', 1),
(6, 103, 2, 'I\\\'m really glad to here that. Just keep moving forward. It gets better. It always does.', '2018-10-30 20:19:40', 1),
(7, 2, 103, 'Thanks, Emma, I will.\\n', '2018-10-30 20:36:20', 1),
(8, 4, 103, 'Hi Elsie', '2018-10-31 09:55:31', 1),
(9, 4, 103, 'I need some to talk to', '2018-10-31 10:01:15', 1),
(10, 104, 4, 'Hi Welcome to Wecounsel', '2018-10-31 10:13:50', 1),
(11, 4, 104, 'Thanks', '2018-10-31 10:15:06', 1),
(12, 102, 2, 'Hi', '2018-10-31 19:39:00', 1),
(13, 103, 4, 'Hi Linda, I am always here to lend a helping hand', '2018-11-01 08:50:22', 1),
(14, 103, 4, 'What\\\'s wrong?', '2018-11-01 08:50:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `group_id`, `name`, `comment`, `post_time`) VALUES
(1, 1, 'Wambua', 'hi ', '2018-10-30 20:51:03'),
(2, 1, 'Wambua', 'How are you', '2018-10-30 20:51:03'),
(3, 1, 'Wambua', 'hellooo', '2018-10-30 20:51:03'),
(4, 1, 'Wambua', 'heloooooooo', '2018-10-30 20:51:03'),
(5, 1, 'Wambua', 'ydcvkjhj,kjg', '2018-10-30 20:51:03'),
(6, 1, 'Wambua', 'fhxxhgxchfmg', '2018-10-30 20:51:03'),
(7, 1, 'Wambua', 'ghfsdcjyhctjmg', '2018-10-30 20:51:03'),
(8, 1, 'Wambua', 'gjdxjcjghfhtgj', '2018-10-30 20:51:03'),
(9, 1, 'Wambua', 'kytdujkg', '2018-10-30 20:51:03'),
(10, 1, 'Wambua', 'kufytdujfkgjhjhv', '2018-10-30 20:51:03'),
(11, 1, 'Wambua', 'sasa', '2018-10-30 20:51:03'),
(12, 1, 'Wambua', 'Message Sent!!!', '2018-10-30 20:51:03'),
(13, 1, 'Hellen', 'hi', '2018-10-30 20:51:03'),
(14, 1, 'Wambua', 'hey', '2018-10-30 20:51:03'),
(15, 1, 'Wambua', 'girll', '2018-10-30 20:51:03'),
(16, 1, 'Hellen', 'shannon is bad', '2018-10-30 20:51:03'),
(17, 1, 'Hellen', 'Message Sent!!!', '2018-10-30 20:51:03'),
(18, 1, 'Shannony', 'Yesss', '2018-10-30 20:51:03'),
(19, 1, 'Shannony', 'Message Sent!!!', '2018-10-30 20:51:03'),
(20, 1, 'Shannony', 'easrxfcgvhbkjhgjyf', '2018-10-30 20:51:03'),
(21, 1, 'Wambua', 'hidfd', '2018-10-30 20:51:03'),
(22, 1, 'Shannony', 'Cow', '2018-10-30 20:51:03'),
(23, 1, 'Wambua', 'HIiii', '2018-10-30 20:51:03'),
(24, 1, 'Wambua', 'Message Sent!!!', '2018-10-30 20:51:03'),
(25, 1, 'Wambua', 'Message Sent!!!', '2018-10-30 20:51:03'),
(26, 1, 'Wambua', 'Message Sent!!!', '2018-10-30 20:51:03'),
(27, 1, 'Shannony', 'hiii', '2018-10-30 20:51:03'),
(28, 1, 'Wambua', 'Hello', '2018-10-30 20:51:03'),
(29, 1, 'Wambua', 'heeyyy', '2018-10-30 20:51:03'),
(30, 1, 'Linda', 'Hi', '2018-10-30 20:51:03'),
(39, 1, 'Hellen', 'heyy', '2018-10-30 20:51:03'),
(41, 1, 'Linda', 'heeyyy', '2018-10-30 20:51:03'),
(42, 1, 'Hellen', 'how are you', '2018-10-30 20:51:03'),
(43, 1, 'Linda', 'i am depressed', '2018-10-30 20:51:03'),
(44, 1, 'Linda', 'heyyy guys', '2018-10-30 20:51:03'),
(45, 1, 'Wambua', 'whats up', '2018-10-30 20:51:03'),
(46, 1, 'Wambua', 'heyyy', '2018-10-30 20:51:03'),
(47, 1, 'Hellen', 'Ssup', '2018-10-30 20:51:03'),
(48, 1, 'Hellen', 'It works!', '2018-10-30 20:51:03'),
(49, 2, 'Linda', 'Testing..', '2018-10-30 21:13:14'),
(50, 2, 'Linda', 'Seriously, I nedd to sleeeep', '2018-10-30 21:31:50'),
(51, 2, 'Linda', 'Dab', '2018-10-30 21:34:02'),
(52, 2, 'Linda', 'Goooooooooooooone', '2018-10-30 21:39:55'),
(53, 2, 'Linda', 'Final', '2018-10-30 21:47:11'),
(54, 1, 'Linda', 'Hey guys', '2018-10-31 10:18:58'),
(55, 3, 'Linda', 'Hey guys', '2018-10-31 10:22:04'),
(56, 4, 'Linda', 'Hi guys', '2018-10-31 10:26:01'),
(57, 3, 'Kagema', 'Hey Linda nice to meet you', '2018-10-31 10:28:08'),
(58, 1, 'Ivy', 'Hey guys welcome  to our discussion group', '2018-10-31 10:44:49'),
(59, 2, 'Emma', 'Welcome guys to this discussion forum', '2018-11-01 08:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `counselors`
--

CREATE TABLE `counselors` (
  `id` int(25) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `category` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `rating` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gender` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counselors`
--

INSERT INTO `counselors` (`id`, `first_name`, `last_name`, `category`, `email`, `rating`, `password`, `image`, `gender`, `description`, `user`) VALUES
(1, 'John', 'Waithaka', 'Peer', 'johnwaithaka@gmail.com', 0, 'john', 'pexels-photo-462680.jpeg', 'Male', 'Here to lend a helping hand', 'John'),
(2, 'Emma', 'Omingo', 'Therapist', 'emmaomingo@gmail.com', 0, 'emma', 'style 1.jpg', 'Female', 'I am here to lend a helping hand or ear', 'Emma'),
(4, 'Elsie', 'Kendi', 'Peer', 'elsiekendi@gmail.com', 0, 'elsie', 'pexels-photo-774909.jpeg', 'Female', 'Here to lend a helping hand', 'Elsie'),
(6, 'Shannon', 'Mujera', 'Therapist', 'shannony@gmail.com', 0, 'shannon', 'IMG_20170929_110457.jpg', 'Female', 'Here to lend a helping hand', 'Shannon'),
(7, 'Cate', 'Wairimu', 'Peer', 'cate@gmail.com', 0, 'cate', 'pexels-photo-1181519.jpeg', 'Female', 'Here to lend a helping hand', 'Cate'),
(9, 'Ivy', 'Njeri', 'Therapist', 'ivy@gmail.com', 0, 'ivy', 'pexels-photo-875862.jpg', 'Female', 'Here to lend a helping hand', 'Ivy'),
(10, 'Maureen', 'Kagema', 'Peer', 'kagema@gmail.com', 0, 'kagema', 'clasped-hands-comfort-hands-people-45842.jpeg', 'Female', 'Here to lend a helping hand', 'Kagema'),
(11, 'Rebeca', 'Wambua', 'Peer', 'becky@gmail.com', 0, 'becky', 'images.jpg', 'Female', 'Here to lend a helping hand', 'Rebecca'),
(12, 'Newton', 'Amani', 'Therapist', 'newton@gmail.com', 0, 'newton', 'pexels-photo-220453.jpeg', 'Male', 'Here to lend a helping hand', 'Newton');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `regfullname` varchar(200) NOT NULL,
  `regusername` varchar(200) NOT NULL,
  `regpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `regfullname`, `regusername`, `regpassword`) VALUES
(1, 'Wambua Rebecca', 'Wambua', '12345'),
(2, 'Kokach Hellen', 'Hellen', '12345'),
(3, 'Shannon Mujera', 'Shannony', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(255) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `user`, `password`, `email`, `gender`) VALUES
(102, 'Hellen', '123456', 'kokachhellen@gmail.com', 'Female'),
(103, 'Linda', '1234567', 'l@gmail.com', 'Female'),
(104, 'Kagema', '1234567', 'kagema@gmail.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselors`
--
ALTER TABLE `counselors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `counselors`
--
ALTER TABLE `counselors`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
