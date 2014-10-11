-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 05:59 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pms`
--
CREATE DATABASE IF NOT EXISTS `pms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` text NOT NULL,
  `post` text NOT NULL,
  `current_address` text NOT NULL,
  `image` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`admin_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `password`, `full_name`, `post`, `current_address`, `image`, `contact_no`, `email`, `gender`, `birth_date`) VALUES
('admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'General Manager', 'Noakhali, Chittagong, Bangladesh.', '', '01757143494', 'admin@gmail.com', 'Male', '1990-10-01'),
('nasser', '81dc9bdb52d04dc20036dbd8313ed055', 'Md. Abu Nasser Munshi', 'Genenal Manager', 'Noakhali, Chittagong, Bangladesh', 'cv.jpg', '01757143494', 'abu.nasser.munshi@gmail.com', 'Male', '1991-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` text NOT NULL,
  `post` text NOT NULL,
  `current_address` text NOT NULL,
  `image` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`employee_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_username`, `password`, `full_name`, `post`, `current_address`, `image`, `contact_no`, `email`, `gender`, `birth_date`) VALUES
('faysal', '827ccb0eea8a706c4c34a16891f84e7b', 'Md. Faysal', 'Software Engineer', 'Noakhali, Chittagong, Bangladesh', 'P1050411.JPG', '01757143494', 'faysal.cste05@yahoo.com', 'Male', '1991-05-15'),
('k2', '123', 'asdf', 'Manager', 'Noakhali, Chittagong, Bangladesh', 'Paper_IISTE.pdf', '123', 'asfdafsa@gmail.com', 'Male', '2014-03-01'),
('k3', '81dc9bdb52d04dc20036dbd8313ed055', 'ketua', 'Manager', 'Noakhali, Chittagong, Bangladesh', 'C:wamp	mpphp7B02.tmp', '123132', 'asfdafsa@gmail.com', 'Male', '0000-00-00'),
('kaman', 'jyvevybes', 'Kamruzamman', 'Genenal Manager', 'Noakhali, Chittagong, Bangladesh', '0', '01757143494', 'kamruzamman@gmail.com', '0', '0000-00-00'),
('kaman2', '123', 'Kamruzamman', 'Genenal Manager', 'Noakhali, Chittagong, Bangladesh', ']', '01757143494', 'kamruzamman@gmail.com', '0', '0000-00-00'),
('kaman3', '1', 'Kamruzamman', 'Genenal Manager', 'Noakhali, Chittagong, Bangladesh', '', '01757143494', 'kamruzamman@gmail.com', '0', '0000-00-00'),
('maruf', '1234', 'Maruf Hasan Anik', 'Manager', 'Noakhali, Chittagong, Bangladesh', '0', '01757143494', 'maruf@gmail.com', '0', '0000-00-00'),
('munshi', '123', 'Nasser Munshi', 'Engg.', 'Noakhali, Chittagong, Bangladesh', 'P1050416.JPG', '01757143494', 'munshi@gmail.com', 'Male', '1993-12-02'),
('nasser37', '123', 'Nasser Munshi', 'Manager', 'Noakhali, Chittagong, Bangladesh', 'cv.jpg', '01757143494', 'nasser@gmail.com', 'male', '1990-12-27'),
('sajal', '827ccb0eea8a706c4c34a16891f84e7b', 'Jahadul Islam', 'Software Engineer', 'Noakhali, Chittagong, Bangladesh', 'P1050416.JPG', '01719412028', 'sajal.cste@gmail.com', 'Male', '1990-12-05'),
('sdfsdf', 'asdfsdf', 'asfdas', 'sdfasfdasfdasf', 'Noakhali, Chittagong, Bangladesh', '376144_112760285507640_1471631425_n.jpg', '1231313', 'munshi@gmail.com', 'Male', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'How can I recover my lost password?', 'Click lost password link. Then input your username, security question, and answer correctly. Then a password will provide. Use this password for Login.'),
(2, 'Can I change my username?', 'No you can not change your username.'),
(3, 'What I do if I forget my Security Question?', 'If you forget your security question, contact with administrator.'),
(4, 'Can I attach more than one file at a time?', 'No, you can not attach more than one file at a time. In the next version of this software will include this feature. '),
(5, 'Can I send message to all employee and administrator of this Company?', 'Yes, you can send message to all user of this software.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(15) NOT NULL,
  `receiver` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `attachment` text NOT NULL,
  `message_status` varchar(10) NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender`, `receiver`, `subject`, `body`, `attachment`, `message_status`) VALUES
(1, 'nasser', 'kaman', 'test', 'nasser', '', 'unread'),
(3, 'nasser', 'nasser', 'attachment', 'adsfdsff as f saf fadsffadsf sdf adsf dsf dsf ds <br>', '(420)..........jpg', 'read'),
(4, 'nasser', 'nasser', 'dsfasdf', 'afsdfasfdasfaf', '', 'read'),
(5, 'k2', 'k2', 'dsfasfsdf', 'dsafasfa', '', 'unread'),
(6, 'k2', 'k2', 'dsfsf', 'asdfasfaf', '229739_107136479374988_100002359093115_75432_77.jpg', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `employee_username` varchar(11) NOT NULL,
  `module_name` text NOT NULL,
  `module_description` text NOT NULL,
  `module_attachment` text NOT NULL,
  `module_start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `module_delivery_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `module_status` varchar(10) NOT NULL DEFAULT 'pending',
  `module_submitted_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `module_submitted_description` text NOT NULL,
  `module_submitted_attachment` text NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `project_id`, `employee_username`, `module_name`, `module_description`, `module_attachment`, `module_start_time`, `module_delivery_time`, `module_status`, `module_submitted_date`, `module_submitted_description`, `module_submitted_attachment`) VALUES
(1, 0, 'kaman4', 'test 1', 'test<br>test<br>test<br>', '', '2014-02-20 18:00:00', '2014-02-27 18:00:00', 'pending', '0000-00-00 00:00:00', '', '0'),
(2, 6, 'kaman', 'test 1', 'test<br>test<br>test<br>', '', '2014-02-20 18:00:00', '2014-02-20 18:00:00', 'pending', '0000-00-00 00:00:00', '', '0'),
(3, 6, 'k2', 'test 2', 'test test<br>test<br>test<br>', '', '2014-02-28 18:00:00', '2014-03-25 18:00:00', 'successful', '2014-03-06 18:00:00', 'final test<br>', 'easy.txt'),
(4, 7, 'k2', 'module 4', 'akldfslkjalfjaskjfklfjklajsfjafjaj asjfklasjfkl asfjasf klajsf aklf klajklfj klasjfklajfj alsfjjafjasfjwfjasjjfiosajdfa0sfjlasjfioasjf&nbsp; io jsiofj siajflasjfioj aiofj<br>', '', '2014-02-28 18:00:00', '2014-03-21 18:00:00', 'successful', '2014-03-06 18:00:00', 'sdfdsfdsf dsf dsafadsfadsfas fdsf saf asf asf asf asf as fasdf afasdfasfasfasdfs f dsaf sadf asf asdf dsf sf asfasas asf ds a&nbsp; asd<br>', 'easy1.txt'),
(5, 6, 'nasser37', 'module-test', 'test module<br>here file is included.<br>', 'module-test2.rar', '2014-03-04 18:00:00', '2014-03-04 18:00:00', 'active', '0000-00-00 00:00:00', '', ''),
(7, 8, 'kaman3', 'test-sub', '1dsfadsfasfafafs', '292294_381147728574646_100000382678403_1307314_.jpg', '2014-03-18 20:00:00', '2014-03-18 22:00:00', 'pending', '0000-00-00 00:00:00', '', ''),
(8, 9, 'k2', 'adfdsf', 'xcvzxvzxvzcxvz', '269042_259804917473942_619014095_n.jpg', '2014-03-16 12:21:21', '2014-03-05 19:00:00', 'successful', '2014-03-16 23:00:00', 'iojuiokljh;l', '482425_345708162204476_1494125749_n.jpg'),
(9, 9, 'k2', 'lskdfdsfasf', 'sdfasfasfasf', '480479_543105992405690_683753590_n.jpg', '2014-03-03 20:00:00', '2014-03-05 22:00:00', 'pending', '0000-00-00 00:00:00', '', ''),
(10, 9, 'k2', 'fasfafaf', 'dsfasfafafa', '527441_113125892176882_1553978416_n.jpg', '2014-03-17 13:29:18', '2014-03-11 19:00:00', 'active', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` text NOT NULL,
  `project_description` text NOT NULL,
  `employee_username` varchar(11) NOT NULL,
  `project_start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_delivery_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `project_attachment` text NOT NULL,
  `project_status` varchar(10) NOT NULL DEFAULT 'pending',
  `project_submitted_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `project_submitted_description` text NOT NULL,
  `project_submitted_attachment` text NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_description`, `employee_username`, `project_start_time`, `project_delivery_time`, `project_attachment`, `project_status`, `project_submitted_date`, `project_submitted_description`, `project_submitted_attachment`) VALUES
(7, 'project 3', 'another test project<br>test<br>test<br>test<br>', 'k2', '2014-03-17 08:00:00', '2014-03-17 09:00:00', '', 'successful', '2014-03-04 18:00:00', 'tyihuihu', '(420)..........jpg'),
(8, 'test project', 'alksjdfkljas lkafskljaf<br>afklajfja<br>afs fklasjflj<br>afsafkja <br>', 'k2', '2014-03-16 10:20:27', '0000-00-00 00:00:00', '166617_148876261837314_100001448225717_286920_5.jpg', 'successful', '2014-03-11 19:00:00', 'dstdf', '261462_102383126524340_100002579588536_17246_23.jpg'),
(9, 'test project2', 'alksjdfkljas lkafskljaf<br>afklajfja<br>afs fklasjflj<br>afsafkja <br>', 'k2', '2014-03-17 13:26:27', '2014-03-15 18:00:04', '183581_108456955901225_100002107644754_90268_49.jpg', 'active', '0000-00-00 00:00:00', '', ''),
(10, 'test project3', 'alksjdfkljas lkafskljaf<br>afklajfja<br>afs fklasjflj<br>afsafkja <br>', 'k2', '2014-03-08 00:00:00', '2014-03-12 22:00:00', '13856_1399108920319540_1035188027_n.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(12, 'test project5', 'alksjdfkljas lkafskljaf<br>afklajfja<br>afs fklasjflj<br>afsafkja <br>', 'k2', '2014-03-16 00:00:00', '2014-03-12 22:00:00', '231180_108298779258829_7079577_n.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(13, 'test project6', 'alksjdfkljas lkafskljaf<br>afklajfja<br>afs fklasjflj<br>afsafkja <br>', 'k2', '2014-03-08 14:00:00', '2014-03-12 22:00:00', '8877_454991144593713_1337420634_n.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(14, 'test project7', 'sg', 'k3', '2014-03-09 14:00:00', '2014-03-03 23:00:00', '225526_200102333365679_100000977402214_518970_1.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(15, 'test project8', 'sg', 'k3', '2014-03-09 14:00:00', '2014-03-03 23:00:00', '222051_149948945072269_100001714937298_308143_1.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(16, 'test project8', 'sg', 'k3', '2014-03-09 14:00:00', '2014-03-03 23:00:00', '31012_429826833748844_1497550158_n.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(17, 'test project8', 'sg', 'k3', '2014-03-09 10:00:00', '2014-03-04 06:00:00', '247996_128558810556204_100002062560077_219594_1.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(18, 'tp1', 'klsdfklsdfkldsj<br>asfjsf sfjsa f<br>sdfj adsfj sdl ddffj<br>skldfjsf dsla<br>', 'kaman', '2014-03-04 11:00:00', '2014-03-03 13:00:00', '64107_127852157343020_1532633542_n.jpg', 'pending', '0000-00-00 00:00:00', '', ''),
(19, 'project test 12ads', 'adasddasa', 'k3', '2014-03-05 02:00:00', '2014-03-03 22:00:00', '75936_317673961671905_1199697809_n.jpg', 'pending', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE IF NOT EXISTS `security_question` (
  `username` varchar(15) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`username`, `question`, `answer`) VALUES
('k2', 'What is your favorite color?', 'blue'),
('kaman', 'What is your fovourite person?', 'no one.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
