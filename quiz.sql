-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 09:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions_english`
--

CREATE TABLE `questions_english` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `selectedAnswer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_english`
--

INSERT INTO `questions_english` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `selectedAnswer`) VALUES
(1, 'Find the correctly spelt word.', 'Exaggerate', 'Exeggrate', 'Exagerate', 'Exadgerate', 'option1', NULL),
(2, 'Find the correctly spelt word.', 'Asspersion', 'Voluptuous', 'Voguei', 'Equestrain', 'option2', NULL),
(3, 'Select the pair which has the same relationship as : (SYMPHONY:COMPOSER)', 'Leonardo:music', 'Fresco:painter', 'colours:pallet', 'art:appreciation', 'option2', NULL),
(4, 'In the following the questions choose the word which best expresses the meaning for, \"INEBRIATE\"', 'Dreamy', 'Stupefied', 'Unsteady', 'Drunken', 'option4', NULL),
(5, 'In the following the questions choose the word which best expresses the meaning for,\"RESTRAINT\"', 'Hindrance', 'Repression', 'Obstacle', 'Restriction', 'option4', NULL),
(6, 'About twenty clerks were made ...... when the banks introduced computers.', 'dispensable', 'redundant', 'expandable', 'obsolete', 'option2', NULL),
(7, 'Select the direct speech for: Dhruv said that he was sick and tired of working for that company.', 'Dhruv said, \"I am sick and tired of working for this company.\"', 'Dhruv said, \"He was tired of that company.\"', 'Dhruv said to me, \"I am sick and tired of working for this company.\"', 'Dhruv said, \"I will be tired of working for that company.\"', 'option1', NULL),
(8, 'Read each sentence to find out whether there is any grammatical error in it. The error, if any will be in one part of the sentence. The letter of that part is the answer. If there is no error, the answer is D. (Ignore the errors of punctuation, if any).', 'Though senior in age,', 'his father is junior than', 'my father in service.', 'No error.', 'option2', NULL),
(9, 'Read each sentence to find out whether there is any grammatical error in it. The error, if any will be in one part of the sentence. The letter of that part is the answer. If there is no error, the answer is D. (Ignore the errors of punctuation, if any).', 'Please try to understand', 'that the dispute on this issue is between my brother and myself,', 'and concerns nobody else.', 'No error.', 'option2', NULL),
(10, 'P :	it struck me,\r\nQ :	of course,\r\nR :	suitable it was,\r\nS :	how eminently.\r\nThe Proper sequence should be:', 'SPQR', 'QSRP', 'PSRQ', 'QPSR', 'option3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions_maths`
--

CREATE TABLE `questions_maths` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `selectedAnswer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questions_maths`
--

INSERT INTO `questions_maths` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `selectedAnswer`) VALUES
(1, '36 men can complete a piece of work in 18 days. In how many days will 27 men complete the same work ?', '12', '18', '22', '24', 'option4', NULL),
(2, 'A and B started a partnership business investing some amount in the ratio of 3 : 5. C joined then after six months with an amount equal to that of B. In what proportion should the profit at the end of one year be distributed among A, B and C?', '3:5:2', '3:5:5', '6:10:5', 'Inadequate Data', 'option3', NULL),
(3, 'Find the Odd Man Out: 3, 5, 11, 14, 17, 21', '21', '17', '14', '3', 'option3', NULL),
(4, 'A car owner buys gas at $7.50, $8 and $8.50 per litre for three successive years. What approximately is the average cost per litre of gas if he spends $4000 each year?', '$7.98', '$8', '$8.50', '$9', 'option1', NULL),
(5, 'A takes twice as much time as B or thrice as much time as C to finish a piece of work. Working together, they can finish the work in 2 days. B can do the work alone in:', '4 Days', '6 Days', '8 Days', '12 Days', 'option2', NULL),
(6, 'Two stations A and B are 110 km apart on a straight line. One train starts from A at 7 a.m. and travels towards B at 20 kmph. Another train starts from B at 8 a.m. and travels towards A at a speed of 25 kmph. At what time will they meet?', '9:00am', '10:00am', '10:30am', '11:00am', 'option2', NULL),
(7, 'A 300 metre long train crosses a platform in 39 seconds while it crosses a signal pole in 18 seconds. What is the length of the platform?', '320m', '350m', '650m', 'Inadequate Data', 'option2', NULL),
(8, 'A train moves past a telegraph post and a bridge 264 m long in 8 seconds and 20 seconds respectively. What is the speed of the train?', '69.5 km/hr', '70 km/hr', '79 km/hr', '79.2 km/hr', 'option4', NULL),
(9, 'The calendar for the year 2007 will be the same for the year:', '2014', '2016', '2017', '2018', 'option4', NULL),
(10, 'A vendor bought candies at 6 for a dollar. How many for a dollar must he sell to gain 20%?', '3', '4', '5', '6', 'option3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `maths_score` int(3) DEFAULT NULL,
  `english_score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions_english`
--
ALTER TABLE `questions_english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_maths`
--
ALTER TABLE `questions_maths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions_english`
--
ALTER TABLE `questions_english`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions_maths`
--
ALTER TABLE `questions_maths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
