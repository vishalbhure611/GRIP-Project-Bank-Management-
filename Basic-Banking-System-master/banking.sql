-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 08:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Priya', 'priya123@gmail.com', '1234321', 'Hello everyone'),
(2, 'neeta', 'durganneeta45@gmail.com', '34578999', 'hello'),
(3, 'shivani', 'shivanisethiya911@gmail.c', '6778899977', 'hiiiiiiiiiiiiiiiiiiiii'),
(4, 'riya', 'riya74@gmail.com', '765422', 'sparks bank is awesome'),
(5, 'kiara', 'kiara33@gmail.com', '567888', 'hello sparks bank'),
(6, 'nitya', 'nityamm23@gmail.com', '238890', 'sparks banking website is good'),
(7, 'kunal', 'kunal22@gmail.com', '2223577', 'good website'),
(8, 'pinky', 'pinky22@gmail.com', '27875', 'fully functional website'),
(9, 'aniket', 'aniket22@gmail.com', '2868757', 'nice flow of banking website'),
(10, 'archi', 'archiekaran@gmail.com', '34568964', 'hello sparks bank');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Kiara', 'Nitya', 4000, '2022-12-12 02:44:21'),
(2, 'Manu', 'Ajay', 4000, '2022-12-12 02:52:11'),
(3, 'Pahul', 'Shaurya', 20, '2022-12-12 02:53:55'),
(4, 'Ayushi', 'Gunjan', 3456, '2022-12-12 02:54:19'),
(5, 'Nitin', 'Ayushi', 100, '2022-12-12 02:55:56'),
(6, 'Ajay', 'Nitya', 800, '2022-12-12 02:57:46'),
(7, 'Ayushi', 'Nitya', 600, '2022-12-12 03:00:12'),
(8, 'Manu', 'Kiara', 300, '2022-12-12 03:00:45'),
(9, 'Ajay', 'Nitin', 8088, '2022-12-12 03:01:11'),
(10, 'Kiara', 'Pahul', 1000, '2022-12-12 03:01:31'),
(11, 'Gunjan', 'Manu', 123, '2022-12-14 12:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Kiara', 'setiakiara@gmail.com', 43936),
(2, 'Gunjan', 'saingunjan@gmail.com', 33133),
(3, 'Nitin', 'nitingandhi@gmail.com', 47910),
(4, 'Pranjal', 'khetawatpranjal@gmail.com', 10210),
(5, 'Shaurya', 'vermashaurya@gmail.com', 3020),
(6, 'Ayushi', 'jephayushi@gmail.com', 13478),
(7, 'Manu', 'parasharmanu@gmail.com', 41832),
(8, 'Nitya', 'mahawarnitya@gmail.com', 85500),
(9, 'Ajay', 'guptaajay@gmail.com', 30000),
(10, 'Pahul', 'gulatipahul@gmail.com', 50981);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
