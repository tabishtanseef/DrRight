-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 09:05 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drright`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `f_id` int(100) NOT NULL,
  `stars` varchar(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`f_id`, `stars`, `uid`, `title`, `caption`, `name`) VALUES
(1, '0', 7, 'Amazing Dr.', 'It was a wonderful experience with the Dr.', 'Tabish'),
(2, '0', 7, 'Amazing Dr.', 'It was a wonderful experience with the Dr.', 'Ronit'),
(3, 'Try', 0, 'kjnkjb', 'bhjjb', 'n n'),
(4, '', 0, 'VACATIONS', 'nji', 'nnjj'),
(5, 'Rec', 7, 'mko', 'nknkjk', 'njiii'),
(6, 'Rec', 6, 'Super se Upar', 'Awesome dr.', 'Sujata'),
(7, 'Avoid', 8, 'Title', 'Feedback', 'Name'),
(8, 'Rec', 12, 'Great Dr.', 'have a wonderful experience with this dr.', 'Rahul'),
(9, 'Try', 10, 'Give Him A try', 'Dr. is really helpful when it comes to listening. Can share anything with him quite easily.', 'Tarvi Khur');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `l_id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`l_id`, `uid`, `title`, `link`) VALUES
(1, 7, 'Holidays', 'www.facebook.com'),
(2, 6, 'My research paper', 'https://mail.google.com/mail/u/0/#inbox'),
(3, 6, 'twitter account', 'https://twitter.com/mail/u/0/#inbox'),
(4, 6, 'follow me on insta', 'https://instagram.com/jimjimani');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `uid` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pic` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `uid`, `title`, `date`, `pic`, `caption`) VALUES
(6, 7, 'Boresome', '2017-06-02 12:05:02', '49249-80759-704.jpg', 'Vacations at the resort'),
(7, 7, 'BOLLYWOOD', '2017-06-02 12:05:46', '22617-299623_172219466205595_100002526279807_334957_168854056_n.jpg', 'Twilight on my terms'),
(8, 1, 'bhul', '2017-06-02 18:19:02', '79181-16072010106.jpg', 'nji'),
(9, 6, 'GREAT tIME', '2017-06-14 13:40:44', '98091-6.JPG', 'AND FULL ON MASTI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `specialist` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `timing` varchar(100) NOT NULL,
  `fees` int(100) NOT NULL,
  `efees` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `degree`, `city`, `specialist`, `pic`, `pass`, `bio`, `address`, `timing`, `fees`, `efees`) VALUES
(1, 'Tabish', 'rajrao901@gmail.com', 'MBBS', 'saharanpur', 'Pathologist', '13601-240x320_Next(wapking.jpg', '123', 'i m th', 'Vijaya Talkies Chock', '10-12 pm', 250, 500),
(2, 'Shahrukh', 'mohdshahrukh216@gmail.com', 'MBBS, MD', 'delhi', 'Nephrologist', '30949-DSC_1219.JPG', '123', 'Hot As Hell', '', '00:00:00.00000', 0, 0),
(3, 'maz', 'rajrao@gmail.com', 'MBBS', 'delhi', 'Urologist', '70597-44881013-95-Jyoti_Kumar.JPG', '147', 'kgkbkj kbkjn bkk', '', '00:00:00.00000', 0, 0),
(4, 'Tabish', 'tabishtanseef@gmail.com', 'MBBS', '', 'Others', '86130-IMG_20150328_093214.jpg', 'Password', ',njbhv', '', '00:00:00.00000', 0, 0),
(5, 'Monu', 'monu@gmail.com', 'BAMS', '', 'Otolaryngologist', '42932-Kumar_Avinash.jpg', '123', 'knkbk', '', '00:00:00.00000', 0, 0),
(6, 'Jim', 'jim@gmail.com', 'MBBS', 'delhi', 'Allergist', '3885-03072012183.jpg', '123', 'bxhbjahxbahsjxbahskbxka', '', '00:00:00.00000', 0, 0),
(7, 'Rohit', 'rohit@gmail.com', 'BUMS', 'Saharanpur', 'Cardiologist', '44343-IMAG0544.jpg', '123', 'Hard Working and friendly with my patients.', 'Mor Ganj', '10-12 pm & 5-7 pm', 150, 350),
(8, 'Mohit kashyap', 'mohit@gmail.com', 'BUMS MD', 'Dehradun', 'Cardiologist', '10130-IMG-20170114-WA0003.jpg', '123', 'Ready to help everyone', 'Pitampura', '10am-6pm', 250, 500),
(9, 'Rashmi Tyagi', 'rashmi@gmail.com', 'MBBS, MD', 'Delhi', 'Gastroenterologist', '3921-Photo0621_001.jpg', '123', 'Call me when you need me.', 'GyanPura', '10am-12pm ', 500, 750),
(10, 'Kashif Syed', 'kashif@gmail.com', 'MBBS', 'Delhi', 'Gastroenterologist', '86042-Photo0621_002.jpg', '123', 'Call me anytime.', 'PritamPura', '5-7pm', 500, 1350),
(11, 'SHUBHAM ', 'shubham198@gmail.com', 'MBBS', 'Delhi', 'Dermatologist', '67126-07ebe57.jpg', '123', 'ready to help anytime.', 'Anand vihar', '5pm to 9Pm', 300, 500),
(12, 'Nitin kumar', 'nitinkumar@gmail.com', 'BDS', 'Saharanpur', 'Dentist', '57392-14199744_1044124888999373_2650601986856623981_n.jpg', '123', 'Anytime!', '#202 ghanta gharh', '10am-6pm', 400, 500),
(13, 'Shahbaz alam', 'shahbaz@gmail.com', 'MBBS', 'Saharanpur', 'Cardiologist', '97562-FB_IMG_14843299095635226.jpg', '123', 'Available for everyone', 'Bajoria road ', '10am-6pm', 300, 500),
(14, 'Sidhhant Sachdeva', 'sidhhant@gmail.com', 'BAMS', 'Saharanpur', 'Allergist', '93481-IMG_20131019_155927.jpg', '123', 'Always Available.', 'Link Road', '11am-1pm', 250, 350),
(15, 'Rakesh Sharma', 'rakeshsharma@gmail.com', 'BDS', 'Saharanpur', 'Dentist', '17541-PicsArt_03-13-04.03.24.jpg', '123', 'We welcome you here!', '#333 Ambala Road ', '10am-6pm', 400, 700),
(16, 'Anil Mathur', 'anil@gmail.com', 'BUMS', 'Saharanpur', 'Allergist', '6577-IMG-20140109-WA0000.jpg', 'Password', 'I will try my best God will do his bestest', 'Address', '3pm-6pm', 500, 500),
(17, 'Roshni sharma', 'roshnisharma@gmail.com', 'Bds', 'Delhi', 'Dentist', '92743-IMG-20160429-WA0001.jpg', 'Password', 'Come here!', '#444 delhi yamnotrimarg ', '10am-6pm', 300, 500),
(18, 'Zunish Meen', 'zunish@gmail.com', 'MBBS, MD', 'Delhi', 'Dermatologist', '57691-KAMALJIT_KAUR_DPPA_01.jpg', '123', 'Everyone wants to look beautiful and i will help you in that.', 'Gurjani Road', '10am-1pm', 500, 1000),
(19, 'Ankush Mishra', 'ankush@gmail.com', 'MBBS', 'Saharanpur', 'Dermatologist', '45418-sanjay.jpg', '123', 'Ready to help getting great skin.', 'Rakesh Cinema Clock Tower', '10-12 pm & 5-7 pm', 250, 350),
(20, 'Lokesh Kumari', 'lokesh@gmail.com', 'MBBS', 'Saharanpur', 'Allergist', '31983-kamaljeet-sehrawat.jpg', '123', 'I am happy to help you.', 'Mor Ganj', '8-12pm', 250, 500),
(21, 'Anita Williams', 'anita@gmail.com', 'MBBS, MD', 'Dehradun', 'Cardiologist', '63346-BALCHANDANI_Anita.jpg', '123', 'You are welcome anytime.', 'GyanPura', '10-12 pm', 250, 750),
(22, 'Abhishek singh', 'abhi@gmail.com', 'BDS', 'Delhi', 'Dentist', '11504-sanjay-kumar-q-386x386.jpg', '123', 'Ready to help those who need help.', 'GyanPura', '10am-12pm ', 500, 750),
(23, 'Sunisha Gupta', 'sunisha@gmail.com', 'MBBS', 'Dehradun', 'Dermatologist', '68322-photo.jpg', '123', 'Ready to treat any skin.', 'GyanPura', '5-7pm', 500, 750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `l_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
