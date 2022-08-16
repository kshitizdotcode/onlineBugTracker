-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 03:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bug`
--

CREATE TABLE `bug` (
  `bug_id` int(11) NOT NULL,
  `bug_title` varchar(255) NOT NULL,
  `bug_date` date NOT NULL,
  `bug_status` int(11) NOT NULL,
  `bug_priority` int(11) NOT NULL,
  `bug_assignedDeveloper` int(11) NOT NULL,
  `bug_eta` int(11) NOT NULL,
  `bug_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bug`
--

INSERT INTO `bug` (`bug_id`, `bug_title`, `bug_date`, `bug_status`, `bug_priority`, `bug_assignedDeveloper`, `bug_eta`, `bug_desc`) VALUES
(11, 'How to LEFT JOIN Multiple Tables in SQL ', '2022-04-07', 1, 3, 3, 8, 'How to LEFT JOIN Multiple Tables in SQLHow to LEFT JOIN Multiple Tables in SQLHow to LEFT JOIN Multiple Tables in SQLHow to LEFT JOIN Multiple Tables in SQLHow to LEFT JOIN Multiple Tables in SQL'),
(15, 'Edit Update status ', '2022-04-07', 1, 1, 1, 12, 'Complete the update feature from the application asap'),
(33, 'Problem when importing data for Generative Adversarial Network training ', '2022-04-18', 3, 1, 2, 2, 'I am trying to train GAN in Colab notebook using lfw dataset, so I use the following code to import dataset locally in google drive and preprocessing images for further training. The problem is: when I have no locally saved files, the code downloads images and preprocess them fine (takes about 5 min), however when I try to import dataset when dataset is already downloaded, script get stuck somewhere in preprocessing part');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `developer_id` int(11) NOT NULL,
  `developer_name` varchar(255) DEFAULT NULL,
  `developer_username` varchar(255) DEFAULT NULL,
  `developer_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`developer_id`, `developer_name`, `developer_username`, `developer_password`) VALUES
(1, 'Kshitiz Shrestha', 'kshitiz.shrestha', 'kshitiz.shrestha'),
(2, 'Sanskar Dhungana', 'sanskar.dhungana', 'sanskar.dhungana'),
(3, 'Bedagya Joshi', 'bedagya.joshi', 'bedagya.joshi'),
(4, 'Sanjoul Bhushal', 'sanjoul.bhushal', 'sanjoul.bhushal'),
(5, 'Anurag Giri', 'anurag.giri', 'anurag.giri');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `priority_id` int(11) NOT NULL,
  `priority_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priority_id`, `priority_title`) VALUES
(1, 'High'),
(2, 'Medium'),
(3, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_title`) VALUES
(1, 'Open'),
(2, 'Solving'),
(3, 'Close');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `tester_id` int(11) NOT NULL,
  `tester_name` varchar(255) DEFAULT NULL,
  `tester_username` varchar(255) DEFAULT NULL,
  `tester_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`tester_id`, `tester_name`, `tester_username`, `tester_password`) VALUES
(2, 'tester test', 'tester.test', 'tester.test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`bug_id`),
  ADD KEY `bug_priority` (`bug_priority`),
  ADD KEY `bug_assignedDeveloper` (`bug_assignedDeveloper`),
  ADD KEY `bug_status` (`bug_status`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`tester_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bug`
--
ALTER TABLE `bug`
  MODIFY `bug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `developer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `tester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bug`
--
ALTER TABLE `bug`
  ADD CONSTRAINT `bug_assignedDeveloper` FOREIGN KEY (`bug_assignedDeveloper`) REFERENCES `developer` (`developer_id`),
  ADD CONSTRAINT `bug_priority` FOREIGN KEY (`bug_priority`) REFERENCES `priority` (`priority_id`),
  ADD CONSTRAINT `bug_status` FOREIGN KEY (`bug_status`) REFERENCES `status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
