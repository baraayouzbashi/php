-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 02:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_nabil_serri_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `Concert_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `EventDate` date NOT NULL,
  `EventTime` time NOT NULL,
  `ticket_price` varchar(30) NOT NULL,
  `location` varchar(200) NOT NULL,
  `c_web_address` mediumtext NOT NULL,
  `concerts_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`Concert_id`, `c_name`, `EventDate`, `EventTime`, `ticket_price`, `location`, `c_web_address`, `concerts_img`) VALUES
(1, 'Vienna Comic Con 2018', '2018-11-17', '02:00:00', '86 Euro', 'Vienna', 'www.Comic.com', 'http://www.viecc.com/RXAT/RXAT_Vienna-Comiccon/press/2017/Pressemitteilungen/VIECC_2017_Cosplay_Sieger.jpg?v=636468576207808460'),
(2, 'Kris Kristofferson', '2019-02-05', '03:00:00', '50 Euro', 'Wiener Stadthalle', 'http://kriskristofferson.com/', 'http://data.logograph.com/resize/KingCenter/multimedia/Image/5957/Kristofferson900x600.jpg?width=1500');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `ZIP_code` int(11) NOT NULL,
  `fk_restaurant` int(11) DEFAULT NULL,
  `fk_Concerts` int(11) DEFAULT NULL,
  `fk_place` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `ZIP_code`, `fk_restaurant`, `fk_Concerts`, `fk_place`) VALUES
(3, 'vienna', 1010, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_type` enum('museum','historical_site','must_see') NOT NULL,
  `p_short_description` mediumtext NOT NULL,
  `p_web_address` mediumtext NOT NULL,
  `place_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `p_name`, `p_address`, `p_type`, `p_short_description`, `p_web_address`, `place_img`) VALUES
(1, 'St. Charles Church', 'Karlsplatz 1', 'historical_site', 'The Rektoratskirche St. Karl Borrom us, commonly called the Karlskirche, is a baroque church located on the south side of Karlsplatz in Vienna, Austria', 'http://www.karlskirche.at/', 'https://c1.staticflickr.com/4/3131/5852161082_21f254dfbe_b.jpg'),
(2, 'Zoo Vienna', 'MaxingstraÃŸe 13b', 'must_see', 'Tiergarten SchÃ¶nbrunn, or \"Vienna Zoo\", is a zoo located on the grounds of the famous SchÃ¶nbrunn Palace in Vienna, Austria. Founded as an imperial menagerie in 1752, it is the oldest continuously operating zoo in the world', 'https://en.wikipedia.org/wiki/Tiergarten_Sch%C3%B6nbrunn', 'http://www.schoenbrunnmeetings.com/fileadmin/_migrated/pics/Robbenfuetterung.jpg'),
(3, 'Wiener Rathaus', 'Friedrich-Schmidt-Platz 1', 'museum', 'Vienna City Hall is the seat of local government of Vienna, located on Rathausplatz in the Innere Stadt district', 'https://en.wikipedia.org/wiki/Vienna_City_Hall', 'https://www.wien.info/media/images/40616-wiener-rathaus-nachts-3to2.jpeg/image_gallery'),
(4, 'Burggarten', 'Josefsplatz', 'must_see', 'A striking art nouveau conservatory with butterfly house stands in this statue-filled formal garden', 'https://www.city-walks.info/Vienna/Burggarten.html', 'https://www.city-walks.info/Wien/bilder/Teich-Wien-Burggarten.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `r_telephone_number` varchar(30) NOT NULL,
  `r_type` enum('chinese','indian','viennese') NOT NULL,
  `r_short_description` mediumtext NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_web_address` mediumtext NOT NULL,
  `restaurant_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `r_telephone_number`, `r_type`, `r_short_description`, `r_address`, `r_web_address`, `restaurant_img`) VALUES
(1, 'Lemon Leaf Thai Restaurant', '+43(1)5812308', 'viennese', 'The Restaurant Lemonleaf Thai Restaurant is a small Restaurant located in fourth district in the city Vienna, very close to the place interest ', 'Kettenbruckengasse 19', 'http://www.lemonleaf.at/', 'http://www.lemonleafthai.com/wp-content/uploads/2017/09/2971291_orig-1-777x482.jpg'),
(2, 'SIXTA', '+43 1 58 528 56 l', 'viennese', ' Das FeingefÃ¼hl zwischen kreativer KÃ¼che und einem traditionellen ', 'SchÃ¶nbrunner Str. 21', 'http://www.sixta-restaurant.at/', 'https://media-cdn.tripadvisor.com/media/photo-s/0c/6d/66/3d/20160807-202452-largejpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `rule` varchar(255) NOT NULL DEFAULT 'user',
  `users_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `rule`, `users_img`) VALUES
(1, 'nabeel', 'nabeeloo90@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'admin', ''),
(2, 'alaa', 'nabeeloo900@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`Concert_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fk_restaurant` (`fk_restaurant`),
  ADD KEY `fk_Concerts` (`fk_Concerts`),
  ADD KEY `fk_place` (`fk_place`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `Concert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`fk_restaurant`) REFERENCES `restaurant` (`restaurant_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`fk_Concerts`) REFERENCES `concerts` (`Concert_id`),
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`fk_place`) REFERENCES `place` (`place_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
