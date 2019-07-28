-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2019 at 03:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `classcreate`
--

CREATE TABLE `classcreate` (
  `cid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cname` varchar(200) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `marks` varchar(255) DEFAULT NULL,
  `submittime` varchar(255) DEFAULT NULL,
  `classcode` varchar(255) DEFAULT NULL,
  `classpic` varchar(255) DEFAULT NULL,
  `color` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classcreate`
--

INSERT INTO `classcreate` (`cid`, `email`, `cname`, `section`, `subject`, `marks`, `submittime`, `classcode`, `classpic`, `color`) VALUES
(1, 'vikarm@gmail.com', 'compilor  mid question', 'h', 'h', '70', '2019-05-29', 'yujll', '12', 'badge-primary');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cid` int(11) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `pic` varchar(800) DEFAULT NULL,
  `pid` varchar(800) DEFAULT NULL,
  `dat` varchar(800) DEFAULT NULL,
  `name` varchar(800) DEFAULT NULL,
  `lik` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `message`, `pic`, `pid`, `dat`, `name`, `lik`) VALUES
(1, 'kya hal hai bhai', '21lmrv9ab451stuyh51u/index.png', '1', 'Jun-01', 'manish', '0'),
(2, 'iunnd', '21lmrv9ab451stuyh51u/index.png', '2', 'Jun-01', 'manish', '0'),
(3, 'hii', '21lmrv9ab451stuyh51u/index.png', '3', 'Jun-01', 'manish', '0'),
(4, 'bdfbdfb', '21lmrv9ab451stuyh51u/index.png', '1', 'Jun-01', 'manish', '0');

-- --------------------------------------------------------

--
-- Table structure for table `join1`
--

CREATE TABLE `join1` (
  `jid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `classcode` varchar(200) NOT NULL,
  `dat` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `join1`
--

INSERT INTO `join1` (`jid`, `email`, `classcode`, `dat`, `name`) VALUES
(1, 'vikarm@gmail.com', 'yujll', '2019-06-01', 'vikarm'),
(2, 'manish@gmail.com', 'yujll', '01-Jun-19', 'manish');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `classcode` varchar(800) NOT NULL,
  `message` varchar(800) NOT NULL,
  `pic` varchar(800) NOT NULL,
  `pic1` varchar(800) NOT NULL,
  `dat` varchar(800) NOT NULL,
  `name` varchar(800) NOT NULL,
  `filetype` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `classcode`, `message`, `pic`, `pic1`, `dat`, `name`, `filetype`) VALUES
(1, 'yujll', 'fwefw', 'qg2omguji8kubgj8cq8s/black-and-white-books-education-433333.jpg', 'null', 'Jun-01', 'vikarm', 'null'),
(2, 'yujll', 'cknew', '21lmrv9ab451stuyh51u/index.png', 'null', 'Jun-01', 'manish', 'null'),
(3, 'yujll', 'ver', '21lmrv9ab451stuyh51u/index.png', 'zj2rhp6xjxmmj2q4m0om/k0r516580o0v05e4u74o_sy9plak6fvo3ocnhgwym_compiler_design_tutorial.pdf', 'Jun-01', 'manish', 'pdf'),
(4, 'yujll', 'gergege', '21lmrv9ab451stuyh51u/index.png', 'null', 'Jun-01', 'manish', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `pic` varchar(800) DEFAULT NULL,
  `pic1` varchar(800) DEFAULT NULL,
  `dat` varchar(800) DEFAULT NULL,
  `name` varchar(800) DEFAULT NULL,
  `email` varchar(800) DEFAULT NULL,
  `filetype` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `message`, `pic`, `pic1`, `dat`, `name`, `email`, `filetype`) VALUES
(1, 'hello\r\n', '21lmrv9ab451stuyh51u/index.png', 'null', 'Jun-01', 'manish', 'manish@gmail.com', 'null'),
(2, 'ffwf wef efwf wf', '21lmrv9ab451stuyh51u/index.png', 'rvm38so1cxa23nr574il/analytics-chart-charts-920116.jpg', 'Jun-01', 'manish', 'manish@gmail.com', 'jpg'),
(3, 'fwe few fwef wefw', 'qg2omguji8kubgj8cq8s/black-and-white-books-education-433333.jpg', 'q6apy57wxskr5ojpgodx/asterisk-1298619-unsplash.jpg', 'Jun-01', 'vikarm', 'vikarm@gmail.com', 'jpg'),
(4, 'dsfsdfs', '21lmrv9ab451stuyh51u/index.png', 'null', 'Jun-01', 'manish', 'manish@gmail.com', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pid` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `name`, `email`, `password`, `pic`, `about`) VALUES
(1, 'rahul pandit', 'rahul@gmail.com', '1234', 'v5zwxnkhrwfm1ox7xt3r/adult-brainstorming-caucasian-1437908.jpg', 'i am a professional engineer\r\n'),
(2, 'vikarm', 'vikarm@gmail.com', '1234', 'qg2omguji8kubgj8cq8s/black-and-white-books-education-433333.jpg', 'No Explanation'),
(3, 'manish', 'manish@gmail.com', '123', '21lmrv9ab451stuyh51u/index.png', 'i am a professional engineer\r\n'),
(4, 'santosh', 'santosh@gmail.com', '123', 'odalpdk8iztgvxha2f1z/adult-businessman-businesswomen-1061588.jpg', 'i am a professional engineer\r\n'),
(5, 'trilok yadav', 'trilok@gmail.com', '1234', 'user-thumb.jpg', 'No Explanation'),
(6, 'grish sharma', 'grish@gmil.com', 'jkjk', '84bfwxs3nkn8qc4f0ecm/asterisk-1298619-unsplash.jpg', 'No Explanation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classcreate`
--
ALTER TABLE `classcreate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `join1`
--
ALTER TABLE `join1`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classcreate`
--
ALTER TABLE `classcreate`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `join1`
--
ALTER TABLE `join1`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
