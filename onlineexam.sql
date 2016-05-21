-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 03:06 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gid` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `g_file` varchar(255) NOT NULL,
  `gvisible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gid`, `gname`, `g_file`, `gvisible`) VALUES
(12, 'DOt', 'dots-ii.swf', 1),
(13, 'New Game', 'dots-ii1.swf', 1),
(14, 'Game of thrones', 'dots-ii2.swf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logfile`
--

CREATE TABLE `logfile` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `table_name` varchar(30) NOT NULL,
  `valuechanged` varchar(100) NOT NULL,
  `lognote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `lid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `ltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`lid`, `uid`, `ip`, `ltime`) VALUES
(1, 1, 0, '2016-02-05 13:06:38'),
(2, 1, 0, '2016-02-05 13:07:01'),
(3, 1, 0, '2016-02-05 13:10:04'),
(4, 1, 0, '2016-02-05 13:10:33'),
(5, 1, 0, '2016-02-05 14:12:59'),
(6, 1, 0, '2016-02-05 14:50:11'),
(7, 1, 0, '2016-02-05 19:46:15'),
(8, 1, 0, '2016-02-06 07:04:39'),
(9, 1, 0, '2016-02-07 17:30:51'),
(10, 1, 0, '2016-02-07 17:41:00'),
(11, 2, 0, '2016-02-07 18:39:31'),
(12, 2, 0, '2016-02-07 18:39:50'),
(13, 2, 0, '2016-02-07 18:42:49'),
(14, 2, 0, '2016-02-07 18:43:07'),
(15, 2, 0, '2016-02-07 18:45:29'),
(16, 3, 0, '2016-02-07 18:46:04'),
(17, 4, 0, '2016-02-07 19:11:00'),
(18, 4, 0, '2016-02-07 19:11:54'),
(19, 5, 0, '2016-02-07 19:16:35'),
(20, 7, 0, '2016-02-07 19:19:11'),
(21, 11, 0, '2016-02-07 19:21:14'),
(22, 13, 0, '2016-02-07 19:24:53'),
(23, 18, 0, '2016-02-07 20:55:36'),
(24, 18, 0, '2016-02-07 21:02:08'),
(25, 18, 0, '2016-02-07 21:06:34'),
(26, 19, 0, '2016-02-07 21:24:18'),
(27, 1, 0, '2016-02-08 12:35:56'),
(28, 1, 0, '2016-02-08 19:42:25'),
(29, 1, 0, '2016-02-08 19:44:39'),
(30, 1, 0, '2016-02-08 19:44:51'),
(31, 1, 0, '2016-02-08 20:39:40'),
(32, 1, 0, '2016-02-08 20:41:23'),
(33, 1, 0, '2016-02-09 08:53:29'),
(34, 1, 0, '2016-02-09 12:35:42'),
(35, 1, 0, '2016-02-09 14:34:42'),
(36, 1, 0, '2016-02-10 08:58:43'),
(37, 1, 0, '2016-02-10 09:44:51'),
(38, 1, 0, '2016-02-10 12:25:18'),
(39, 1, 0, '2016-02-10 12:38:12'),
(40, 1, 0, '2016-02-10 13:13:25'),
(41, 1, 0, '2016-02-10 13:18:08'),
(42, 1, 0, '2016-02-10 13:25:01'),
(43, 2, 0, '2016-02-10 13:27:46'),
(44, 1, 0, '2016-02-11 09:12:14'),
(45, 2, 0, '2016-02-11 09:13:06'),
(46, 1, 0, '2016-02-11 09:17:15'),
(47, 2, 0, '2016-02-11 09:28:22'),
(48, 1, 0, '2016-02-12 09:24:33'),
(49, 1, 0, '2016-02-12 12:31:36'),
(50, 2, 0, '2016-02-12 12:32:29'),
(51, 2, 0, '2016-02-12 17:28:26'),
(52, 20, 0, '2016-02-12 18:12:23'),
(53, 20, 0, '2016-02-12 18:21:44'),
(54, 1, 0, '2016-02-13 09:38:38'),
(55, 1, 0, '2016-02-13 11:45:39'),
(56, 2, 0, '2016-02-13 11:45:58'),
(57, 1, 0, '2016-02-13 11:51:58'),
(58, 1, 0, '2016-02-13 11:55:42'),
(59, 1, 0, '2016-02-13 11:58:01'),
(60, 1, 0, '2016-02-13 12:00:00'),
(61, 1, 0, '2016-02-13 14:58:22'),
(62, 1, 0, '2016-02-13 15:02:38'),
(63, 2, 0, '2016-02-13 15:02:49'),
(64, 1, 0, '2016-02-14 16:56:43'),
(65, 1, 0, '2016-02-14 17:05:37'),
(66, 1, 0, '2016-02-14 17:21:32'),
(67, 1, 0, '2016-02-14 17:22:26'),
(68, 1, 0, '2016-02-15 09:18:42'),
(69, 1, 0, '2016-02-15 13:32:24'),
(70, 1, 0, '2016-02-15 13:37:42'),
(71, 1, 0, '2016-02-15 13:45:49'),
(72, 1, 0, '2016-02-15 13:48:33'),
(73, 1, 0, '2016-02-15 13:49:52'),
(74, 1, 0, '2016-02-15 13:49:59'),
(75, 1, 0, '2016-02-15 13:50:20'),
(76, 1, 0, '2016-02-16 07:54:07'),
(77, 1, 0, '2016-02-16 08:14:45'),
(78, 1, 0, '2016-02-16 11:34:40'),
(79, 20, 0, '2016-02-16 12:25:15'),
(80, 1, 0, '2016-02-16 12:38:20'),
(81, 1, 0, '2016-02-27 07:33:17'),
(82, 1, 0, '2016-02-27 08:08:28'),
(83, 1, 0, '2016-02-27 08:08:40'),
(84, 1, 0, '2016-02-27 08:11:09'),
(85, 1, 0, '2016-02-27 08:26:47'),
(86, 2, 0, '2016-02-27 09:05:25'),
(87, 1, 0, '2016-02-27 09:21:37'),
(88, 1, 0, '2016-02-27 09:25:28'),
(89, 1, 0, '2016-02-27 09:28:58'),
(90, 1, 0, '2016-02-27 11:21:40'),
(91, 1, 0, '2016-02-27 11:22:41'),
(92, 1, 0, '2016-02-27 11:22:52'),
(93, 1, 0, '2016-02-27 12:03:59'),
(94, 1, 0, '2016-02-27 17:25:18'),
(95, 1, 0, '2016-02-27 17:30:09'),
(96, 1, 0, '2016-02-27 17:30:34'),
(97, 1, 0, '2016-02-27 17:34:19'),
(98, 1, 0, '2016-02-27 18:16:05'),
(99, 1, 0, '2016-02-28 07:08:29'),
(100, 1, 0, '2016-02-28 07:19:36'),
(101, 1, 0, '2016-02-28 07:42:55'),
(102, 1, 0, '2016-02-29 07:50:04'),
(103, 1, 0, '2016-02-29 11:57:50'),
(104, 2, 0, '2016-02-29 11:58:00'),
(105, 2, 0, '2016-02-29 13:45:31'),
(106, 2, 0, '2016-02-29 19:30:11'),
(107, 2, 0, '2016-03-01 15:18:46'),
(108, 1, 0, '2016-03-01 19:29:44'),
(109, 2, 0, '2016-03-01 19:47:45'),
(110, 2, 0, '2016-03-01 19:52:05'),
(111, 21, 0, '2016-03-01 19:57:08'),
(112, 1, 0, '2016-03-01 20:00:02'),
(113, 2, 0, '2016-03-01 20:00:11'),
(114, 21, 0, '2016-03-01 20:00:38'),
(115, 21, 0, '2016-03-01 20:12:33'),
(116, 22, 0, '2016-03-01 20:17:45'),
(117, 22, 0, '2016-03-01 20:22:33'),
(118, 22, 0, '2016-03-01 20:23:01'),
(119, 23, 0, '2016-03-01 20:28:05'),
(120, 24, 0, '2016-03-01 20:42:41'),
(121, 25, 0, '2016-03-02 06:13:33'),
(122, 26, 0, '2016-03-02 06:18:50'),
(123, 27, 0, '2016-03-02 07:54:47'),
(124, 27, 0, '2016-03-02 09:55:15'),
(125, 27, 0, '2016-03-02 10:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `mt_ques`
--

CREATE TABLE `mt_ques` (
  `mtqid` int(11) NOT NULL,
  `mt_ques` varchar(255) NOT NULL,
  `mt_ans` varchar(255) NOT NULL,
  `mt_gid` int(11) NOT NULL,
  `mt_points` int(11) NOT NULL,
  `mt_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_ques`
--

INSERT INTO `mt_ques` (`mtqid`, `mt_ques`, `mt_ans`, `mt_gid`, `mt_points`, `mt_status`) VALUES
(1, 'What is 5x6', '30', 12, 1, 1),
(2, 'What is the capital of India?', 'Delhi', 13, 1, 0),
(3, 'Current President of USA?', 'Barack Obama', 14, 1, 1),
(4, 'is this multitasking question?', 'yes', 12, 1, 1),
(5, '2x2 =', '4', 12, 1, 1),
(6, '5x6=', '30', 12, 1, 1),
(7, 'what is opposite to south pole?', 'north', 12, 1, 1),
(8, 'which is vector, speed or velocity?', 'velocity', 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionoptions`
--

CREATE TABLE `questionoptions` (
  `opt_id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `option_txt` text NOT NULL,
  `opoints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionoptions`
--

INSERT INTO `questionoptions` (`opt_id`, `qid`, `option_txt`, `opoints`) VALUES
(1, 3, 'Good', 2),
(2, 3, 'Not Good', 0),
(3, 3, 'Don''t Know', 1),
(4, 4, 'Washington DC', 1),
(5, 5, 'HO', 0),
(6, 5, 'H2O', 1),
(7, 5, 'HO2', 0),
(8, 6, '289', 1),
(9, 8, 'Excelent', 2),
(10, 8, 'Good', 1),
(11, 8, 'i don''t Play', 0),
(12, 9, 'Yes', 2),
(13, 9, 'No', 0),
(14, 9, 'Little', 1),
(15, 10, 'Parnabh Mukharji', 1),
(22, 11, 'meat of goat', 0),
(23, 11, 'meat of buffalow', 1),
(24, 11, 'meat of chicken', 0),
(25, 12, 'Global System Management', 0),
(26, 12, 'good service management', 0),
(27, 12, 'global system for mobile communication', 1),
(28, 13, 'dangereous', 1),
(29, 13, 'not good', 0),
(30, 13, 'harmful', 0),
(31, 14, '-273 k', 1),
(32, 14, '0 c', 0),
(33, 14, '0 k', 0),
(34, 15, '70 degree C', 0),
(35, 15, '100 C', 1),
(36, 15, '100 K', 0),
(37, 16, 'every action has an equal and opposite reaction', 1),
(38, 16, 'object will remain in situation until and unless external forces has not been applied to it', 0),
(39, 16, 'energy of whole universe is conserved', 0),
(40, 17, 'words of mouth', 0),
(41, 17, 'truth about truth', 1),
(42, 17, 'lie aabout truth', 1),
(43, 18, '123', 1),
(44, 19, '111', 1),
(45, 20, 'Yes', 2),
(46, 20, 'No', 0),
(47, 20, 'i don''t Know', 1),
(48, 21, 'wind', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `topic_id` tinyint(1) NOT NULL,
  `ques_type` varchar(30) NOT NULL,
  `question` text NOT NULL,
  `ques_img` text NOT NULL,
  `ques_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `topic_id`, `ques_type`, `question`, `ques_img`, `ques_status`) VALUES
(3, 1, '1', 'How many fingers are there in one hand?', '5579b816256748c71590ec06054d4172.jpg', 0),
(4, 8, '2', 'What is Capital of USA?', '', 1),
(5, 2, '1', 'What is the chemical formula of Pure Water?', 'images.jpg', 1),
(6, 3, '2', '17x17 = ?', '', 0),
(7, 0, '2', '0', '', 0),
(8, 8, '1', 'How you scale yourself in playing cricket?', '5579b816256748c71590ec06054d4172.jpg', 1),
(9, 5, '1', 'Do you know about History?', '18hyfk3t3yfo7jpg.jpg', 0),
(10, 5, '2', 'Who is current president of India?', '', 1),
(11, 1, '1', 'beef is?', '', 1),
(12, 1, '1', 'GSM stands for?', '', 1),
(13, 5, '1', 'A little knowledge is _____ thing', '', 1),
(14, 2, '1', 'What is absolute zero temprature?', '', 1),
(15, 2, '1', 'water boils at', '', 1),
(16, 1, '1', 'first law of newton?', '', 1),
(17, 4, '1', 'What is phylosophy?', '', 1),
(18, 1, '2', 'Lerso parso affinlo single gheto mata bisscouty?', '0', 1),
(19, 1, '2', ' gheto mata bisscouty Lerso parso affinlo single gheto mata bisscouty  Lerso parso?', '0', 1),
(20, 10, '1', 'Is wind direction is important in Aviation', '', 1),
(21, 10, '2', 'What effect more duing flight, gravity or wind?', '0', 1),
(22, 0, '2', '0', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ques_type`
--

CREATE TABLE `ques_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `type_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_type`
--

INSERT INTO `ques_type` (`type_id`, `type`, `type_status`) VALUES
(1, 'Objective', 1),
(2, 'Single Answer', 1),
(3, 'Fill in the Blanks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `topicid` int(11) NOT NULL,
  `result` varchar(30) NOT NULL,
  `score` int(11) NOT NULL,
  `attempted_ques` text NOT NULL,
  `attempted_ans` text NOT NULL,
  `ind_points` text NOT NULL,
  `ind_sec` text NOT NULL,
  `total_score` int(11) NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `result_shown` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `uid`, `topicid`, `result`, `score`, `attempted_ques`, `attempted_ans`, `ind_points`, `ind_sec`, `total_score`, `completed`, `result_shown`, `time`) VALUES
(101, 22, 2, '', 0, '15, 5, 14', '35,6,31', '1,1,1', '2,2,2', 3, 0, 0, '2016-03-01 20:23:20'),
(102, 22, 10, '', 0, '21, 20', '0,45', '0,2', '4,2', 2, 0, 0, '2016-03-01 20:23:32'),
(103, 23, 10, '', 0, '21, 20', '45', '1,2', '4,2', 3, 0, 0, '2016-03-01 20:28:21'),
(104, 23, 2, '', 0, '5, 15, 14', '6,35,31', '1,1,1', '2,3,2', 3, 0, 0, '2016-03-01 20:28:34'),
(106, 24, 10, '', 0, '21, 20', '0,45', '0,2', '119,2', 2, 0, 0, '2016-03-01 20:51:42'),
(107, 24, 10, '', 0, '20, 21', '45', '2,0', '3,3', 2, 0, 0, '2016-03-01 20:53:07'),
(108, 24, 10, '', 0, '20, 21', '45,wind', '2,0', '2,3', 2, 0, 0, '2016-03-01 20:56:03'),
(109, 24, 10, '', 0, '20, 21', '45,wind', '2,0', '1,3', 2, 0, 0, '2016-03-01 21:02:31'),
(110, 25, 2, '', 0, '5, 15, 14', '6,35,31', '1,1,1', '7,6,4', 3, 0, 0, '2016-03-02 06:14:00'),
(111, 25, 10, '', 0, '20, 21', '45,wind', '2,0', '5,4', 2, 0, 0, '2016-03-02 06:14:16'),
(112, 26, 2, '', 0, '5, 15, 14', '6,35,31', '1,1,1', '2,3,2', 3, 0, 0, '2016-03-02 06:19:06'),
(113, 26, 10, '', 0, '20, 21', '45,wind', '2,1', '2,4', 3, 0, 0, '2016-03-02 06:19:17'),
(114, 27, 99, '', 0, '1, 3, 4, 5, 6, 7, 8', ',bra,yes,4,30,north,velocit', '0,0,0,0,0,0,0', '', 0, 0, 0, '2016-03-02 10:46:15'),
(115, 27, 99, '', 0, '1, 3, 4, 5, 6, 7, 8', ',obama,yes,4,30,north,velocity', '0,0,0,0,0,0,0', '5,5,5,5,5,5,5', 0, 0, 0, '2016-03-02 10:50:41'),
(116, 27, 99, '', 0, '1, 3, 4, 5, 6, 7, 8', ',assaadsasadsadasdasdsdasddssdsaasdas,yrassasdas,4,30,north,velocity', '0,0,0,0,0,0,0', '5,5,5,5,5,5,5', 0, 0, 0, '2016-03-02 10:58:09'),
(117, 27, 99, '', 0, '1, 3, 4, 5, 6, 7, 8', ',barak ,yes,4,30,north,velocis', '0,0,1,1,1,1,0', '5,5,5,5,5,5,5', 4, 0, 0, '2016-03-02 11:26:52'),
(118, 27, 2, '', 0, '14, 15, 5', '31,35,6', '1,1,1', '3,3,3', 3, 0, 0, '2016-03-02 12:40:55'),
(119, 27, 10, '', 0, '20, 21', '45,wind', '2,1', '2,3', 3, 0, 0, '2016-03-02 12:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `superusername` varchar(255) NOT NULL,
  `superpassword` varchar(255) NOT NULL,
  `suoeremail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `superusername`, `superpassword`, `suoeremail`) VALUES
(1, 'admin', 'stoflight#123', 'imranbajwa01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` int(3) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_timelimit` int(11) DEFAULT NULL,
  `topics` varchar(255) NOT NULL,
  `test_status` tinyint(1) NOT NULL,
  `test_createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visible` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `test_name`, `test_timelimit`, `topics`, `test_status`, `test_createdon`, `visible`) VALUES
(1, 'Initial Pilot Test', 100, '2,10', 0, '2016-01-25 15:54:17', 1),
(23, 'Experience Pilot Test', 300, '1,2,3,4,5', 0, '2016-01-26 12:40:27', 1),
(24, 'General Pilot Test', 500, '3,5', 0, '2016-01-26 12:43:47', 0),
(25, 'New Category Test', 300, '5,8', 0, '2016-01-29 10:03:59', 0),
(26, 'Final Test', 100, '1,2,3,4', 0, '2016-01-29 15:24:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test_log`
--

CREATE TABLE `test_log` (
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `topicid` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `t_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_log`
--

INSERT INTO `test_log` (`uid`, `tid`, `topicid`, `ip`, `t_time`) VALUES
(24, 0, 10, '::1', '2016-03-01 21:02:24'),
(25, 0, 2, '::1', '2016-03-02 06:13:40'),
(25, 0, 10, '::1', '2016-03-02 06:14:04'),
(26, 0, 2, '::1', '2016-03-02 06:18:56'),
(26, 0, 10, '::1', '2016-03-02 06:19:09'),
(27, 0, 2, '::1', '2016-03-02 12:40:44'),
(27, 0, 10, '::1', '2016-03-02 12:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `topic_timelimit` int(11) NOT NULL,
  `topic_no_of_ques` int(11) DEFAULT NULL,
  `topic_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic`, `topic_timelimit`, `topic_no_of_ques`, `topic_status`) VALUES
(1, 'Physics', 5, NULL, 1),
(2, 'Chemistry', 7, NULL, 1),
(3, 'Mathematics', 10, NULL, 1),
(4, 'Phylosophy', 20, NULL, 1),
(5, 'English', 10, NULL, 1),
(8, 'General Knowledge', 5, NULL, 0),
(9, 'Phylosophy', 10, NULL, 0),
(10, 'Initial Pilot test', 10, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `test_id` int(11) NOT NULL,
  `multiTaskingTest` tinyint(1) NOT NULL DEFAULT '0',
  `test_given` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `createdon` date NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visible` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `pass`, `email`, `notes`, `test_id`, `multiTaskingTest`, `test_given`, `status`, `createdon`, `updatedon`, `visible`) VALUES
(1, 'user', 'user ', '123456', 'test@nomail.com', 'test notes', 1, 1, 1, 1, '2016-01-25', '2016-01-25 13:05:21', 0),
(2, 'newuser', 'new user', '1234', 'user@user.com', 'test notes', 1, 0, 1, 1, '2016-01-25', '2016-01-25 13:33:31', 0),
(3, 'imranbajwa', 'Imran Bajwa', '0', 'imranbajwa01@gmail.com', 'Test Notes', 1, 0, 0, 1, '0000-00-00', '2016-01-25 17:07:04', 1),
(4, 'johncezar', 'John Cezar', '0', 'johncezar@test.com', 'Test user Created ', 1, 0, 0, 0, '0000-00-00', '2016-01-25 17:09:15', 0),
(5, 'markanthony', '0', 'OObMl1LDW', '0', '0', 1, 0, 0, 1, '2016-01-25', '2016-01-25 17:20:30', 0),
(6, 'joemicheal', 'Joe Micheal', 'LkMPM5ytT', 'joe@google.com', 'joe micheal is a test buddy', 1, 0, 0, 1, '2016-01-26', '2016-01-26 11:11:27', 0),
(7, 'zeenatamaan', 'Zeenat Amaan', 'a8itzPqM4', 'zeenatamaan@gmail.com', 'zeenam amaan is a test user', 1, 0, 0, 0, '2016-01-26', '2016-01-26 11:16:35', 0),
(11, 'zeenatamaan', 'Zeenat Amaan', 'XISefsoSf', 'zeenatamaan@gmail.com', 'zeenam amaan is a test user', 1, 0, 0, 0, '2016-01-26', '2016-01-26 11:17:57', 0),
(13, 'anthonytomy', 'Anthony Tomy', 'm7ZdzzsZz', 'anthony@gmail.com', 'anthony tomy is a test user', 1, 0, 0, 0, '2016-01-26', '2016-01-26 11:18:46', 0),
(17, 'hakuna', 'Hakuna Matata', 'IR3IY2cKt', 'hakuna@gmail.com', 'test user', 1, 0, 0, 0, '2016-01-29', '2016-01-29 15:17:38', 0),
(18, 'pumba', 'Pumba', '0P20eRwjV', 'pumba@gmail.com', 'test', 23, 0, 0, 1, '2016-01-29', '2016-01-29 15:18:11', 0),
(19, 'imranbajwa', 'Imran Bajwa', '7fDmmt6RG', 'imranbajwa01@gmail.com', 'test user ', 1, 0, 0, 1, '2016-01-29', '2016-01-29 15:23:28', 0),
(20, 'multitasking', 'multitasking', 'm8BG4A7Ma', 'multitasking@email.com', 'test user', 27, 0, 0, 1, '2016-02-12', '2016-02-12 18:11:56', 1),
(21, 'newueser1', 'Hebrew Singh', 'xJV0D47ih', 'newuser1@gmail.com', 'test user', 1, 0, 1, 1, '2016-03-02', '2016-03-01 19:55:34', 1),
(22, 'pumba', 'Mjumba Namata', 'VT8GCiwoQ', 'pumba@gmail.com', 'tets user', 1, 0, 1, 1, '2016-03-02', '2016-03-01 20:17:19', 1),
(23, 'timon', 'timon', 'HKcXZa87Y', 'timon@timon.com', 'test', 1, 0, 1, 1, '2016-03-02', '2016-03-01 20:27:49', 1),
(24, 'jazz', 'Jazz', 'ZVCilAuCI', 'jazz@jazz.com', 'tets', 1, 0, 0, 1, '2016-03-02', '2016-03-01 20:42:18', 1),
(25, 'imran', 'imran', 'AFkfEI2qF', 'imran2imran.com', 'test', 1, 0, 1, 1, '2016-03-02', '2016-03-02 06:12:33', 1),
(26, 'bajwa', 'bajwa', 'w43dWduSF', 'bajwa@bajwa.com', 'test', 1, 0, 1, 1, '2016-03-02', '2016-03-02 06:18:24', 1),
(27, 'bajwa', 'bajwa', 'JarKhbmQr', 'bajwa@bajwa.com', 'test ', 1, 1, 0, 1, '2016-03-02', '2016-03-02 07:46:41', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `mt_ques`
--
ALTER TABLE `mt_ques`
  ADD PRIMARY KEY (`mtqid`);

--
-- Indexes for table `questionoptions`
--
ALTER TABLE `questionoptions`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `ques_type`
--
ALTER TABLE `ques_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `mt_ques`
--
ALTER TABLE `mt_ques`
  MODIFY `mtqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `questionoptions`
--
ALTER TABLE `questionoptions`
  MODIFY `opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `ques_type`
--
ALTER TABLE `ques_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
