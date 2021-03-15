-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 06:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify-project-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `IDArtist` int(11) NOT NULL,
  `ArtistName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`IDArtist`, `ArtistName`) VALUES
(1, 'Lauv'),
(2, 'Post Malone'),
(3, 'Ariana Grande'),
(4, 'Bruno Mars'),
(5, 'Maroon 5'),
(6, 'Coldplay'),
(7, 'The Weeknd'),
(8, 'Khalid'),
(9, 'Kendrick Lamar'),
(10, 'Marshmello'),
(11, 'Eminem'),
(12, 'Lil Dicky'),
(13, '5SOS'),
(14, 'Billie Eilish'),
(15, 'Joji'),
(16, 'Lukas Graham'),
(17, 'Ed Sheeran'),
(18, 'Travis Scott'),
(19, 'Migos'),
(20, 'Avenged Sevenfold'),
(21, 'Shawn Mendes');

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `IDCreator` int(11) NOT NULL,
  `CreatorName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`IDCreator`, `CreatorName`) VALUES
(7, 'Joe Rogan'),
(8, 'Karen Kilgariff'),
(9, 'Michael Barbaro'),
(10, 'Ira Glass'),
(11, 'Josh Clark');

-- --------------------------------------------------------

--
-- Table structure for table `favpodcast`
--

CREATE TABLE `favpodcast` (
  `IDCreator` int(11) NOT NULL,
  `IDPodcast` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favpodcast`
--

INSERT INTO `favpodcast` (`IDCreator`, `IDPodcast`, `IDUser`) VALUES
(7, 1, 17),
(7, 1, 24),
(9, 3, 17),
(9, 3, 24),
(10, 4, 24),
(11, 5, 17);

-- --------------------------------------------------------

--
-- Table structure for table `favsong`
--

CREATE TABLE `favsong` (
  `IDArtist` int(11) NOT NULL,
  `IDSong` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favsong`
--

INSERT INTO `favsong` (`IDArtist`, `IDSong`, `IDUser`) VALUES
(1, 15, 20),
(2, 5, 24),
(2, 6, 24),
(8, 2, 17),
(9, 8, 17),
(11, 2, 24),
(13, 1, 17),
(15, 4, 17),
(15, 4, 24),
(16, 9, 23),
(17, 10, 23),
(18, 13, 17);

-- --------------------------------------------------------

--
-- Table structure for table `podcastgenra`
--

CREATE TABLE `podcastgenra` (
  `IDPodcastGenra` int(11) NOT NULL,
  `Genra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcastgenra`
--

INSERT INTO `podcastgenra` (`IDPodcastGenra`, `Genra`) VALUES
(1, 'Comedy'),
(2, 'News & Politics'),
(3, 'Society & Culture'),
(4, 'Sports'),
(5, 'Education'),
(6, 'Business'),
(7, 'Games & Hobbies'),
(8, 'Storytelling');

-- --------------------------------------------------------

--
-- Table structure for table `songgenra`
--

CREATE TABLE `songgenra` (
  `IDSongGenra` int(11) NOT NULL,
  `Genra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songgenra`
--

INSERT INTO `songgenra` (`IDSongGenra`, `Genra`) VALUES
(1, 'Pop'),
(2, 'Rock'),
(3, 'R&B'),
(4, 'Hip-Hop'),
(5, 'Rap');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionplan`
--

CREATE TABLE `subscriptionplan` (
  `IDSub` varchar(25) NOT NULL,
  `Subname` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptionplan`
--

INSERT INTO `subscriptionplan` (`IDSub`, `Subname`, `Price`) VALUES
('001', 'Free', 0),
('002', 'Premium', 129),
('003', 'Premium-Family', 199);

-- --------------------------------------------------------

--
-- Table structure for table `totalpodcast`
--

CREATE TABLE `totalpodcast` (
  `IDPodcast` int(11) NOT NULL,
  `PodcastName` varchar(100) NOT NULL,
  `IDCreator` int(11) NOT NULL,
  `IDPodcastGenra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalpodcast`
--

INSERT INTO `totalpodcast` (`IDPodcast`, `PodcastName`, `IDCreator`, `IDPodcastGenra`) VALUES
(1, 'The Joe Rogan Experience', 7, 1),
(2, 'My Favorite Murder', 8, 1),
(3, 'The Daily', 9, 2),
(4, 'This American Life', 10, 3),
(5, 'Stuff You Should Know', 11, 5);

-- --------------------------------------------------------

--
-- Table structure for table `totalsong`
--

CREATE TABLE `totalsong` (
  `IDSong` int(11) NOT NULL,
  `SongName` varchar(100) NOT NULL,
  `SongEmbed` varchar(200) NOT NULL,
  `IDArtist` int(11) NOT NULL,
  `IDSongGenra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalsong`
--

INSERT INTO `totalsong` (`IDSong`, `SongName`, `SongEmbed`, `IDArtist`, `IDSongGenra`) VALUES
(1, 'Youngblood', 'https://www.youtube.com/embed/-RJSbO8UZVY', 13, 1),
(2, 'Godzilla', 'https://www.youtube.com/embed/r_0JjYUe5jo', 11, 5),
(3, 'Bad Guy', 'https://www.youtube.com/embed/DyDfgMOUjCI', 14, 1),
(4, 'SLOW DANCING IN THE DARK', 'https://www.youtube.com/embed/K3Qzzggn--s', 15, 1),
(5, 'Goodbyes', 'https://www.youtube.com/embed/ba7mB8oueCY', 2, 1),
(6, 'Circles', 'https://www.youtube.com/embed/wXhTHyIgQ_U', 2, 1),
(7, 'Sunflower', 'https://www.youtube.com/embed/ApXoWvfEYVU', 2, 1),
(8, 'Humble', 'https://www.youtube.com/embed/tvTRZJ-4EyI', 9, 5),
(9, '7 Years', 'https://www.youtube.com/embed/LHCob76kigA', 16, 1),
(10, 'Shape of You', 'https://www.youtube.com/embed/JGwWNGJdvx8', 17, 1),
(11, 'Rap God', 'https://www.youtube.com/embed/XbGs_qK2PQA', 11, 5),
(12, 'Hymn For The Weekend', 'https://www.youtube.com/embed/YykjpeuMNEk', 6, 1),
(13, 'SICKO MODE', 'https://www.youtube.com/embed/6ONRf7h3Mdk', 18, 5),
(14, 'Better', 'https://www.youtube.com/embed/x3bfa3DZ8JM', 8, 3),
(15, 'Mean It', 'https://www.youtube.com/embed/c_10qS7amjk', 1, 1),
(16, 'Dangerous Woman', 'https://www.youtube.com/embed/9WbCfHutDSE', 3, 1),
(17, 'Treasure', 'https://www.youtube.com/embed/nPvuNsRccVw', 4, 1),
(18, 'Bad and Boujee', 'https://www.youtube.com/embed/S-sJp1FfG7Q', 19, 4),
(19, 'Hail To The King', 'https://www.youtube.com/embed/DelhLppPSxY', 20, 2),
(20, 'Buried Alive', 'https://www.youtube.com/embed/imwmmv9r1oE', 20, 2),
(21, 'Señorita', 'https://www.youtube.com/embed/Pkh8UtuejGw', 21, 1),
(22, 'Earth', 'https://www.youtube.com/embed/pvuN_WvF1to', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `IDTransaction` int(11) NOT NULL,
  `Card_Num` varchar(16) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDSub` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`IDTransaction`, `Card_Num`, `Email`, `IDUser`, `IDSub`) VALUES
(1, '1234567899999999', 'test11@gmail.com', 23, '003'),
(2, '2121212121212121', 'test9@gmail.com', 20, '002'),
(3, '1212121212121212', 'test13@gmail.com', 24, '002'),
(4, '0123456789101112', 'deedeebaker8@gmail.com', 17, '003');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDUser` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'User',
  `Picture` varchar(100) NOT NULL DEFAULT 'images/picProfile/defaultpic.png',
  `IDSub` varchar(25) NOT NULL DEFAULT '001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUser`, `Name`, `Email`, `Password`, `level`, `Picture`, `IDSub`) VALUES
(1, 'Patchara_tee', 'deedeebaker8@gmail.com', '12345678', 'Admin', 'images/picProfile/defaultpic.png', '002'),
(2, 'test1', 'test1@gmail.com', '87654321', 'User', 'images/picProfile/defaultpic.png', '001'),
(3, 'test2', 'test2@gmail.com', '45612378', 'User', 'images/picProfile/defaultpic.png', '001'),
(4, 'test3', 'test3@gmail.com', '24861357', 'User', 'images/picProfile/defaultpic.png', '001'),
(5, 'test4', 'test4@gmail.com', '25846317', 'User', 'images/picProfile/defaultpic.png', '003'),
(6, 'test5', 'test5@gmail.com', 'test5555', 'User', 'images/picProfile/defaultpic.png', '001'),
(7, 'plyvarize', 'plai089@hotmail.co.th', '12122542', 'Admin', 'images/picProfile/defaultpic.png', '001'),
(8, 'test6', 'test6@gmail.com', 'test6666', 'User', 'images/picProfile/defaultpic.png', '001'),
(15, 'test7', 'test7@gmail.com', 'test7777', 'Admin', 'images/picProfile/defaultpic.png', '001'),
(17, 'patchara', 'patchatee@gmail.com', 'dee123456', 'User', 'images/picProfile/ProfilePhoto.jpg', '003'),
(18, 'Pond_CC', 'Plai1408@gmail.com', '12122542', 'User', 'images/picProfile/87373812_2740503742847699_920026692527849472_n.jpg', '001'),
(19, 'test8', 'test8@gmail.com', 'test8888', 'User', 'images/picProfile/defaultpic.png', '001'),
(20, 'test9', 'test9@gmail.com', 'test9999', 'User', 'images/picProfile/defaultpic.png', '002'),
(21, 'test10', 'test10@gmail.com', 'test1010', 'User', 'images/picProfile/defaultpic.png', '001'),
(22, 'camilla', 'plai089@hotmail.com', '1212312121', 'User', 'images/picProfile/defaultpic.png', '001'),
(23, 'test11', 'test11@gmail.com', 'test1111', 'User', 'images/picProfile/87373812_2740503742847699_920026692527849472_n.jpg', '003'),
(24, 'test12', 'test13@gmail.com', 'test1313', 'User', 'images/picProfile/87373812_2740503742847699_920026692527849472_n.jpg', '002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`IDArtist`);

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`IDCreator`);

--
-- Indexes for table `favpodcast`
--
ALTER TABLE `favpodcast`
  ADD KEY `IDCreator` (`IDCreator`,`IDPodcast`,`IDUser`),
  ADD KEY `IDUser` (`IDUser`),
  ADD KEY `IDPodcast` (`IDPodcast`);

--
-- Indexes for table `favsong`
--
ALTER TABLE `favsong`
  ADD KEY `IDArtist` (`IDArtist`,`IDSong`,`IDUser`),
  ADD KEY `IDUser` (`IDUser`),
  ADD KEY `IDSong` (`IDSong`);

--
-- Indexes for table `podcastgenra`
--
ALTER TABLE `podcastgenra`
  ADD PRIMARY KEY (`IDPodcastGenra`);

--
-- Indexes for table `songgenra`
--
ALTER TABLE `songgenra`
  ADD PRIMARY KEY (`IDSongGenra`);

--
-- Indexes for table `subscriptionplan`
--
ALTER TABLE `subscriptionplan`
  ADD PRIMARY KEY (`IDSub`);

--
-- Indexes for table `totalpodcast`
--
ALTER TABLE `totalpodcast`
  ADD PRIMARY KEY (`IDPodcast`),
  ADD KEY `IDPodcastGenra` (`IDPodcastGenra`),
  ADD KEY `IDCreator` (`IDCreator`);

--
-- Indexes for table `totalsong`
--
ALTER TABLE `totalsong`
  ADD PRIMARY KEY (`IDSong`),
  ADD KEY `IDArtist` (`IDArtist`),
  ADD KEY `IDGenra` (`IDSongGenra`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`IDTransaction`),
  ADD KEY `IDSub` (`IDSub`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`),
  ADD KEY `IDSub` (`IDSub`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `IDArtist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `creator`
--
ALTER TABLE `creator`
  MODIFY `IDCreator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `podcastgenra`
--
ALTER TABLE `podcastgenra`
  MODIFY `IDPodcastGenra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `songgenra`
--
ALTER TABLE `songgenra`
  MODIFY `IDSongGenra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `totalpodcast`
--
ALTER TABLE `totalpodcast`
  MODIFY `IDPodcast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `totalsong`
--
ALTER TABLE `totalsong`
  MODIFY `IDSong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `IDTransaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favpodcast`
--
ALTER TABLE `favpodcast`
  ADD CONSTRAINT `favpodcast_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDUser`),
  ADD CONSTRAINT `favpodcast_ibfk_2` FOREIGN KEY (`IDPodcast`) REFERENCES `totalpodcast` (`IDPodcast`),
  ADD CONSTRAINT `favpodcast_ibfk_3` FOREIGN KEY (`IDCreator`) REFERENCES `creator` (`IDCreator`);

--
-- Constraints for table `favsong`
--
ALTER TABLE `favsong`
  ADD CONSTRAINT `favsong_ibfk_1` FOREIGN KEY (`IDArtist`) REFERENCES `artist` (`IDArtist`),
  ADD CONSTRAINT `favsong_ibfk_2` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDUser`),
  ADD CONSTRAINT `favsong_ibfk_3` FOREIGN KEY (`IDSong`) REFERENCES `totalsong` (`IDSong`);

--
-- Constraints for table `totalpodcast`
--
ALTER TABLE `totalpodcast`
  ADD CONSTRAINT `totalpodcast_ibfk_1` FOREIGN KEY (`IDCreator`) REFERENCES `creator` (`IDCreator`),
  ADD CONSTRAINT `totalpodcast_ibfk_2` FOREIGN KEY (`IDPodcastGenra`) REFERENCES `podcastgenra` (`IDPodcastGenra`);

--
-- Constraints for table `totalsong`
--
ALTER TABLE `totalsong`
  ADD CONSTRAINT `totalsong_ibfk_1` FOREIGN KEY (`IDArtist`) REFERENCES `artist` (`IDArtist`),
  ADD CONSTRAINT `totalsong_ibfk_2` FOREIGN KEY (`IDSongGenra`) REFERENCES `songgenra` (`IDSongGenra`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`IDSub`) REFERENCES `subscriptionplan` (`IDSub`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDUser`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `IDSub` FOREIGN KEY (`IDSub`) REFERENCES `subscriptionplan` (`IDSub`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
