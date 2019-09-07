-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 05:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_player`
--

-- --------------------------------------------------------

--
-- Table structure for table `moods`
--

CREATE TABLE `moods` (
  `mood_id` int(11) NOT NULL,
  `mood_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moodsongs_bridging`
--

CREATE TABLE `moodsongs_bridging` (
  `song_id` int(20) NOT NULL,
  `mood_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(20) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_duration` varchar(255) NOT NULL,
  `package_cost` int(20) NOT NULL,
  `package_details` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE `payment_mode` (
  `payment_mode_id` int(20) NOT NULL,
  `payment_mode_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(15) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `release_year` int(15) NOT NULL,
  `composer` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `created_by` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(15) NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_by` int(15) NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `cover_img`, `release_year`, `composer`, `artist`, `genre`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted`) VALUES
(1, '[Songs.PK] 08 - Kabira - Yeh Jawaani Hai Deewani-.mp3', 'kabira.jpg', 2013, 'Pritam', 'Arijit Singh', 'Romance', 1, '2018-10-10 05:33:55', 0, '0000-00-00 00:00:00', 0, 0),
(6, '02_Ji_Huzoori_(SongsMp3.Com)[1].mp3', 'huzoori.jpg', 2016, 'Mithoon', 'Mithoon', 'Romance', 1, '2018-10-21 15:02:40', 0, '0000-00-00 00:00:00', 0, 0),
(10, '03 - Mile Ho Tum-Pksongs.Audio.mp3', 'mileho.JPG', 2016, 'Tony kakkar', 'Neha Kakkar', 'Romance', 1, '2018-10-21 15:17:28', 0, '0000-00-00 00:00:00', 0, 0),
(11, 'Channa Mereya (SongsMp3.Com).mp3', 'channa.JPG', 2017, 'Arijt Singh', 'Arijit Singh', 'Romance', 1, '2018-10-21 15:20:02', 0, '0000-00-00 00:00:00', 0, 0),
(12, 'Roke Na Ruke Naina (SongsMp3.Com).mp3', 'badri.jpg', 2017, 'Arijit Singh', 'Arijit Singh', 'Romance', 1, '2018-10-21 15:21:29', 0, '0000-00-00 00:00:00', 0, 0),
(13, '01 Sharabi (Pyaar Ka Punchnama 2) (SongsMp3.Com).mp3', 'sharabi.JPG', 2015, 'Hitesh Sonik', 'Hitesh Sonik', 'Party', 1, '2018-10-21 15:39:17', 0, '0000-00-00 00:00:00', 0, 0),
(14, 'Chhote Chhote Peg-Songspkhero.com.mp3', 'peg.JPG', 2018, 'Yo yo Honey Singh', 'Neha Kakkar', 'Party', 1, '2018-10-21 15:39:56', 0, '0000-00-00 00:00:00', 0, 0),
(15, '04 Kamariya - Mitron (SongsMp3.Com).mp3', 'kamariya.JPG', 2018, 'Yo yo Honey Singh', 'Yo yo Honey Singh', 'Party', 1, '2018-10-21 15:47:28', 0, '0000-00-00 00:00:00', 0, 0),
(16, '01 Chogada - Loveratri (SongsMp3.Com).mp3', 'chogada.JPG', 2018, 'Darshan Raval', 'Darshan Raval', 'Party', 1, '2018-10-21 15:49:45', 0, '0000-00-00 00:00:00', 0, 0),
(17, 'Lets Nacho (Kapoor & Sons).mp3', 'nacho.JPG', 2016, 'Badshah', 'Benny Dayal', 'Party', 1, '2018-10-21 15:54:58', 0, '0000-00-00 00:00:00', 0, 0),
(18, 'Selena Gomez ft. Gucci Mane - Fetish.mp3', 'fetish.JPG', 2017, 'Selena Gomez', 'Selena Gomez', 'Hollywood', 1, '2018-10-21 16:18:41', 0, '0000-00-00 00:00:00', 0, 0),
(19, 'justin bieber,ludacris-baby.mp3', 'baby.JPG', 2010, 'Justin Bieber', 'Justin Bieber', 'Hollywood', 1, '2018-10-21 16:21:42', 0, '0000-00-00 00:00:00', 0, 0),
(20, 'Taylor Swift Blank Space - 1414438748.mp3', 'space.JPG', 2014, 'Taylor Swift', 'Taylor Swift', 'Hollywood', 1, '2018-10-21 16:25:26', 0, '0000-00-00 00:00:00', 0, 0),
(21, '01-one_direction-what_makes_you_beautiful.mp3', 'beautifu.JPG', 2011, 'One Direction', ' One Direction', 'Hollywood', 1, '2018-10-21 16:40:31', 0, '0000-00-00 00:00:00', 0, 0),
(22, '01 What Do You Mean_.mp3', 'mean.JPG', 2015, 'Justin Bieber', 'Justin Bieber', 'Hollywood', 1, '2018-10-21 16:43:41', 0, '0000-00-00 00:00:00', 0, 0),
(23, '_Aata Majhi Satakli @ IndiaMp3.Com.mp3', 'satakli.JPG', 2014, 'Yo yo Honey Singh', 'Yo yo Honey Singh', 'Workout', 1, '2018-10-21 16:46:13', 0, '0000-00-00 00:00:00', 0, 0),
(24, 'Malhari - 192Kbps_1450714618084.mp3', 'malhari.JPG', 2015, 'Vishal Dadlani', 'Vishal Dadlani', 'Workout', 1, '2018-10-21 16:48:36', 0, '0000-00-00 00:00:00', 0, 0),
(25, 'Jee Karda (Full Audio Song) - Badlapur (2015) - Divya Kumar, Varun Dhawan - .mp3', 'jeekarda.JPG', 2015, 'Divya Kumar', 'Divya Kumar', 'Workout', 1, '2018-10-21 16:51:07', 0, '0000-00-00 00:00:00', 0, 0),
(26, '02 Dhaakad (Dangal) (SongsMp3.Com).mp3', 'dangal.JPG', 2017, 'Pritam', 'Raftaar', 'Workout', 1, '2018-10-21 16:56:25', 0, '0000-00-00 00:00:00', 0, 0),
(27, '03 Khalibali - Padmaavat (SongsMp3.Com).mp3', 'khalibali.JPG', 2018, 'Shail Hada', 'Shivam Pathak', 'Workout', 1, '2018-10-21 16:58:32', 0, '0000-00-00 00:00:00', 0, 0),
(28, 'Ainvayi-Ainvayi (SongsMp3.Com).mp3', 'ainvayi.JPG', 2010, 'Salim Merchant', 'Salim Merchant', 'Wedding', 1, '2018-10-21 17:09:36', 0, '0000-00-00 00:00:00', 0, 0),
(29, 'Navrai-Majhi (SongsMp3.Com).mp3', 'navrai.JPG', 2012, 'Amit Trivedi', 'Sunidhi Chauhan', 'Wedding', 1, '2018-10-21 17:11:53', 0, '0000-00-00 00:00:00', 0, 0),
(30, 'Sadi_Gali-(BDMing.com).mp3', 'sadigali.JPG', 2011, 'Krsna', 'Lehmber Hussainpuri', 'Wedding', 1, '2018-10-21 17:29:23', 0, '0000-00-00 00:00:00', 0, 0),
(31, 'London Thumakda (Queen).mp3', 'london.JPG', 2014, 'Amit Trivedi', 'Neha Kakkar', 'Wedding', 1, '2018-10-21 17:33:01', 0, '0000-00-00 00:00:00', 0, 0),
(32, 'Punjabi_Wedding_Song-Various[www.Mp3MaD.Com].mp3', 'wedding.JPG', 2014, 'Amitabh Bhattacharya', 'Sunidhi Chauhan', 'Wedding', 1, '2018-10-21 17:35:58', 0, '0000-00-00 00:00:00', 0, 0),
(33, '[Songs.PK] 08 - Kabira - Yeh Jawaani Hai Deewani-.mp3', 'birthday.jpg', 2016, 'akash', 'Bappi Lahiri', 'Romance', 1, '2018-10-23 05:14:05', 0, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `package_id` int(20) NOT NULL,
  `payment_mode_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `pakage_id` int(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_by` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(15) NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_by` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `pakage_id`, `phone`, `email`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted`) VALUES
(1, 'shyam', 'shyam1234', 1, '7744481865', 'shyamrochlani44@gmail.com', 1, '2018-10-15 15:25:28', 1, '2018-10-15 00:00:00', '2018-10-15 00:00:00', 0),
(2, 'neha', 'neha1234', 1, '9511662354', 'neha@gmail.com', 1, '2018-10-22 14:32:19', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_package`
--

CREATE TABLE `user_package` (
  `user_package_id` int(20) NOT NULL,
  `user_package_start` datetime NOT NULL,
  `user_package_end` datetime NOT NULL,
  `package_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moods`
--
ALTER TABLE `moods`
  ADD PRIMARY KEY (`mood_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD PRIMARY KEY (`payment_mode_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_package`
--
ALTER TABLE `user_package`
  ADD PRIMARY KEY (`user_package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moods`
--
ALTER TABLE `moods`
  MODIFY `mood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_mode`
--
ALTER TABLE `payment_mode`
  MODIFY `payment_mode_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_package`
--
ALTER TABLE `user_package`
  MODIFY `user_package_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
