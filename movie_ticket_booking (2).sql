-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 10:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `text`) VALUES
(1, 'What is Proshowz?', 'We are a team to provide you with your One Stop Entertainment Solution - With the passion of giving the best , deriving innovation for your ease , inculcating the new trends to let you stay connected with everything happening around.'),
(2, 'What we do?', 'Proshowz is an Online portal that has made buying tickets online easy with simple steps without any unnecessary frills. Choose a movie, pay online and enjoy.\n'),
(3, 'Hassle Free Payment ', 'We Provide services of online payment. You can easily book your ticket by paying online and  get rid of stucking in line waiting for your turn.');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `num_of_adults` int(11) NOT NULL,
  `booked_seats` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `theater` varchar(50) NOT NULL,
  `num_of_kids` int(11) NOT NULL,
  `ticket_class` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `movie_id`, `num_of_adults`, `booked_seats`, `name`, `email`, `theater`, `num_of_kids`, `ticket_class`, `amount`, `payment`) VALUES
(84, 18, 4, 1, 2, 'naqash', 'naqash@gmail.com', ' JFC Cineplex Sector E DHA Phase II(Night21:00:00)', 1, '700', 950, 'paid'),
(86, 14, 4, 1, 2, 'asad ali', 'asad@gmail.com', ' JFC Cineplex Sector E DHA Phase II(Night21:00:00)', 1, '500', 750, 'paid'),
(88, 14, 21, 1, 8, 'asad ali', 'asad@gmail.com', 'capri  M.A Jinnah Rd(Evening17:00:00)', 7, '700', 2450, 'paid'),
(89, 14, 14, 7, 9, 'asad ali', 'asad@gmail.com', 'capri  M.A Jinnah Rd(Morning11:00:00)', 2, '500', 4000, 'paid'),
(90, 14, 23, 1, 2, 'asad ali', 'syed92809@gmail.com', 'capri  M.A Jinnah Rd(Night21:00:00)', 1, '500', 750, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Horror'),
(2, 'Comedy'),
(3, 'Action'),
(4, 'Thriller'),
(5, 'Romantic'),
(10, 'Animated'),
(17, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `phone`, `query`) VALUES
(16, 'naqash', 'tickets', 'naqash@gmail.com', '0316616579', 'fhfghfgh'),
(17, 'asad', 'refund', 'asad@gmail.com', '0316616579', 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `movies` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `movies`, `information`, `profile`) VALUES
(2, 'Horror', 'About us', 'My Bookings'),
(5, 'Comedy', 'Contact Us', 'My Profile'),
(47, 'Action', 'New Releases', 'Saved');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_category` int(11) NOT NULL,
  `movie_description` varchar(1000) NOT NULL,
  `release_Date` varchar(50) NOT NULL,
  `movie_poster` varchar(500) NOT NULL,
  `movie_trailer` varchar(500) NOT NULL,
  `movie_cast` varchar(500) NOT NULL,
  `upload_date` date DEFAULT NULL,
  `language` varchar(50) NOT NULL,
  `seats` int(11) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_category`, `movie_description`, `release_Date`, `movie_poster`, `movie_trailer`, `movie_cast`, `upload_date`, `language`, `seats`, `industry`, `status`) VALUES
(4, 'jurassic world', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam id quisquam ipsam molestiae ad eius accusantium? Nulla dolorem perferendis inventore! posuere cubilia Curae; Nunc non risus in justo convallis feugiat.', '2021-07-30', 'images/download.webp', 'trailer/Jurassic World 3 Dominion (2022) FIRST LOOK TRAILER Universal Pictures.mp3', ' Chris Pratt, Owen Grady, Bryce Dallas Howard · Vincent D Onofrio · Jake Johnson ·', '2021-06-29', 'English', 50, 'Hollywood', 'finished'),
(12, 'Frozen 2', 8, 'Set three years after the events of the first film, the story follows Elsa, Anna, Kristoff, Olaf, and Sven, who embark on a journey beyond their kingdom of Arendelle', '2021-06-25', 'images/download (1).webp', 'trailer/frozen-2-trailer-2_h480p.mov', ' Robert Downey, Jr. · Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg', '2021-06-30', 'English', 100, 'Hollywood', 'finished'),
(14, 'Jumanji', 3, 'Jumanji, one of the most unique--and dangerous--board games ever, falls into the hands of the curious teen, Alan Parrish, in 1969. Mysterious and magical, the game strands the unsuspecting boy in the lush, savage forests of a mythical realm.', '2021-07-29', 'images/1577103017-jumanji-_.jpg', 'trailer/jumanji-trailer-2_h480p (1).mov', 'Dwayne Johnson Jack Black Kevin Hart Karen Gillan Nick Jonas Bobby Cannavale', '2021-07-02', 'English', 100, 'Hollywood', 'finished'),
(21, 'Avengers End Game', 4, 'jhgjhfhhgj', '2021-07-30', 'images/5ca3d2b892c8866e8b4618d9.jpg', 'trailer/avengers-sbteaser_h480p.mov', ' Robert Downey, Jr. · Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg', '2021-07-08', 'English', 100, 'Hollywood', 'finished'),
(23, 'Conjuring', 1, 'cbfdhfghdsnkjndskjv ubdsvusdvudsbiuv nbdskv j uubdb', '2021-08-30', 'images/Item73517M.jpg.jpg', 'trailer/theconjuring2-tlr3_h480p.mov', 'Vera Farmiga · Patrick Wilson · Ron Livingston · Lili Taylor · Shanley Caswell · Hayley McFarland · Joey King · Mackenzie Foy.', '2021-07-10', 'English', 50, 'Hollywood', 'finished'),
(24, 'Godzilla', 4, 'Godzilla is an enormouse distructive sea monster awakened and empowered by nuclear radiation with the nuclear bombing of hiroshima and nagasaki and the lucky dragon 5 incident still fresh in the japanese consiousness. ', '2021-08-24', 'images/godzilla-king-of-the-monsters-movie-poster-image0.jpg', 'trailer/godzilla-king-of-the-monsters-clip-knock-you-out_h480p.mov', 'Aaron Taylor-Johnson, Ken Watanabe, Elizabeth Olsen, Juliette Binoche, Sally Hawkins, David Strathairn, and Bryan Cranston.', '2021-07-12', 'English', 50, 'Hollywood', 'unfinish'),
(25, 'KGF chapter 2', 3, 'The blood soaked land of kolar gold fields has a new overload now. Rocky whos name strikes fear in the heart of his foes. His allies look up to rocket as their saviour. Enemies are clamouring for revenge and conspiring for his downfall', '2021-08-25', 'images/MV5BOTM5Nzc2NDItYTdlZS00YThkLTlhNGItZGJkZDYyZmQyNTllXkEyXkFqcGdeQXVyNjE1OTQ0NjA@._V1_.jpg', 'trailer/KGF Chapter 2 Official Trailer_FHD-(HDvideo9).mp4', ' Yash · Sanjay Dutt · Srinidhi Shetty · Raveena Tandon · Anant Nag · Malavika Avinash · Saran Sakthi · Sonu', '2021-07-12', 'Hindi', 100, 'Bollywood', 'unfinish');

-- --------------------------------------------------------

--
-- Table structure for table `movie_by_theater`
--

CREATE TABLE `movie_by_theater` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_by_theater`
--

INSERT INTO `movie_by_theater` (`id`, `movie_id`, `theater_id`, `slot_id`) VALUES
(1, 14, 3, 1),
(2, 14, 5, 4),
(3, 4, 4, 5),
(4, 4, 5, 3),
(5, 12, 5, 1),
(6, 12, 4, 5),
(7, 12, 3, 3),
(8, 12, 4, 5),
(9, 12, 3, 1),
(10, 21, 5, 5),
(11, 21, 3, 3),
(12, 23, 5, 4),
(13, 23, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `text2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `text`, `date`, `text2`) VALUES
(8, 18, 'Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ', '2021-07-11', 'Member Has Successfully Paid The Payment Of A Ticket.'),
(9, 18, 'Your Payment Has Been Recieved, You Can View Booking Reciept In Booking History. ', '2021-07-11', 'Member Has Successfully Paid The Payment Of A Ticket.'),
(10, 14, 'Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ', '2021-07-11', 'Just Got A New Booking Of A Movie'),
(11, 14, 'Your Payment Has Been Recieved, You Can View Booking Reciept In Booking History. ', '2021-07-11', 'Member Has Successfully Paid The Payment Of A Ticket.'),
(12, 14, 'Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ', '2021-07-12', 'Just Got A New Booking Of A Movie'),
(13, 14, 'Your Payment Has Been Recieved, You Can View Booking Reciept In Booking History. ', '2021-07-12', 'Member Has Successfully Paid The Payment Of A Ticket.'),
(14, 14, 'Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ', '2021-07-12', 'Just Got A New Booking Of A Movie'),
(15, 14, 'Your Payment Has Been Recieved, You Can View Booking Reciept In Booking History. ', '2021-07-12', 'Member Has Successfully Paid The Payment Of A Ticket.'),
(16, 14, 'Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ', '2021-07-12', 'Just Got A New Booking Of A Movie'),
(17, 14, 'Your Payment Has Been Recieved, You Can View Booking Reciept In Booking History. ', '2021-07-12', 'Member Has Successfully Paid The Payment Of A Ticket.'),
(18, 14, 'Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ', '2021-07-12', 'Just Got A New Booking Of A Movie');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `movie_id`, `comment`, `rating`) VALUES
(3, 14, 4, 'Trailer looks awesome', 5),
(5, 15, 21, 'Finally most awaited is here', 4),
(6, 15, 14, 'amazing movie', 5),
(7, 15, 14, 'dsfds', 2),
(8, 15, 4, 'Not so good, not so bad', 3),
(9, 14, 21, 'awesomee', 0),
(10, 13, 21, 'hfgjhjfgjh', 4),
(11, 14, 23, 'awesome', 5),
(12, 18, 12, 'fdhfddsf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `theater_id` int(11) NOT NULL,
  `theater_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`theater_id`, `theater_name`, `address`, `city`) VALUES
(3, 'capri', '  M.A Jinnah Rd', 'karachi'),
(4, ' JFC Cineplex', ' Sector E DHA Phase II', 'Islamabad'),
(5, ' Ciros Cinema', ' Saddar', 'Rawalpindi');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_plan`
--

CREATE TABLE `ticket_plan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_plan`
--

INSERT INTO `ticket_plan` (`id`, `name`, `price`) VALUES
(1, 'Gold', 700),
(2, 'Platinum', 600),
(3, 'Box', 500);

-- --------------------------------------------------------

--
-- Table structure for table `timing_slots`
--

CREATE TABLE `timing_slots` (
  `id` int(11) NOT NULL,
  `slot` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timing_slots`
--

INSERT INTO `timing_slots` (`id`, `slot`, `time`) VALUES
(1, 'Morning', '11:00:00'),
(3, 'Evening', '17:00:00'),
(4, 'Noon', '15:00:00'),
(5, 'Night', '21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `member_since` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phone`, `password`, `c_password`, `role`, `user_image`, `member_since`, `status`) VALUES
(8, 'ahsan', 'ahsan@gmail.com', '0316616579', 'ahsan', 'ahsan', 0, 'images/card.jpg', '2017-06-21', 'active'),
(13, 'taha ', 'taha@gmail.comt', '0316616579', 'taha', 'taha', 0, 'images/card.jpg', '2017-06-21', 'active'),
(14, 'asad', 'asad@gmail.com', '0316616579', 'asad', 'asad', 1, 'images/client_img.png', '2018-06-21', 'active'),
(15, 'anas ali', 'anas@gmail.com', '0316616579', 'anas', 'anas', 1, 'images/card2.jpg', '2018-06-21', 'blocked'),
(18, 'naqash', 'naqash@gmail.com', '0316616579', 'naqash', 'naqash', 1, '', '2007-07-21', 'active'),
(19, 'faizan', 'syed92809@gmail.com', '0316616579', '111', '111', 0, 'images/pngtree-avatar-icon-profile-icon-member-log', '2012-07-21', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_ibfk_1` (`user_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `theater_id` (`theater`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_category` (`movie_category`);

--
-- Indexes for table `movie_by_theater`
--
ALTER TABLE `movie_by_theater`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_by_theater_ibfk_1` (`theater_id`),
  ADD KEY `slot_id` (`slot_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `ticket_plan`
--
ALTER TABLE `ticket_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timing_slots`
--
ALTER TABLE `timing_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `movie_by_theater`
--
ALTER TABLE `movie_by_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `theater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticket_plan`
--
ALTER TABLE `ticket_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timing_slots`
--
ALTER TABLE `timing_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movie_by_theater`
--
ALTER TABLE `movie_by_theater`
  ADD CONSTRAINT `movie_by_theater_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`theater_id`),
  ADD CONSTRAINT `movie_by_theater_ibfk_2` FOREIGN KEY (`slot_id`) REFERENCES `timing_slots` (`id`),
  ADD CONSTRAINT `movie_by_theater_ibfk_3` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
