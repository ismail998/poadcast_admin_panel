-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 01:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `podcastdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id_admin` int(255) NOT NULL,
  `first_last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id_admin`, `first_last_name`, `user_name`, `password`, `Email`) VALUES
(1, 'ismail belgacem', 'ismail', '123456789', 'email1@mail.com'),
(15, 'blegasemismail', 'belgacem', '123456', 'blegasemismail@gmail.com'),
(16, 'blegasemismail', 'belgacem', '123456', 'blegasemismail@gmail.com'),
(17, 'blegasemismail', 'ismail', '123456', 'bel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `id_caty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `name`, `pdf`, `audio`, `img`, `writer`, `id_caty`) VALUES
(5, 'هذا هو الإسلام', 'https://docs.google.com/viewerng/viewer?hl=ar&t=39&url=https://www.alarabimag.com/books/16239.pdf', 'https://archive.org/download/booksstream__com/booksstream.com-OF7OF7.mp3', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1303478878l/8841461.jpg', 'محمد عمارة', 1),
(6, ' رواية ليطمئن قلبى', 'https://docs.google.com/viewerng/viewer?url=https://books-library.net/files/books-library.online-09250450Gt9L3.pdf', 'https://archive.org/download/booksstream__com/booksstream.com-OF7OF7.mp3', 'https://a5dr.com/wiki/wp-content/uploads/2020/05/241d4f48-dd06-43ee-bda4-933fb9c2c352.jpg', ' أدهم الشرقاوى', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catygory`
--

CREATE TABLE `catygory` (
  `id_caty` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catygory`
--

INSERT INTO `catygory` (`id_caty`, `name`) VALUES
(1, 'ismail'),
(2, 'belgacem'),
(3, 'sceince'),
(4, 'كوميدية');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id_podcast` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `url_podcast` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `id_catygory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id_podcast`, `name`, `url_img`, `url_podcast`, `speaker`, `id_catygory`) VALUES
(1, 'sleep with me', 'https://img.thedailybeast.com/image/upload/v1552513122/drew_main_dymyuz.jpg', 'https://www.thedailybeast.com/sleep-with-me-podcast-drew-ackerman-on-bedroom-accessoriese', 'ismail belgacem', 1),
(10, 'How Did This Get Made?', 'https://image.simplecastcdn.com/images/a35fca4e-944a-4ccb-bc7b-d678b2c11e9d/9a9cbdd6-22c3-4a6f-be04-49316ffeeaa7/3000x3000/ear-cover-hdtgm-3000x3000-r2017-final.jpg', 'https://www.thedailybeast.com/sleep-with-me-podcast-drew-ackerman-on-bedroom-accessories', 'ismail belgacem', 1),
(12, 'WTF with Marc Maron', 'https://www.omnycontent.com/d/clips/aaea4e69-af51-495e-afc9-a9760146922b/8a755b22-8f72-4d44-8ff9-ab79013fda25/0a1e4d19-629c-4259-ad72-ae2a00634039/image.jpg', 'https://www.thedailybeast.com/sleep-with-me-podcast-drew-ackerman-on-bedroom-accessoriese', 'Marc Maron', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `Fk_id_catygory2` (`id_caty`);

--
-- Indexes for table `catygory`
--
ALTER TABLE `catygory`
  ADD PRIMARY KEY (`id_caty`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id_podcast`),
  ADD KEY `Fk_id_catygory` (`id_catygory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catygory`
--
ALTER TABLE `catygory`
  MODIFY `id_caty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id_podcast` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `Fk_id_catygory2` FOREIGN KEY (`id_caty`) REFERENCES `catygory` (`id_caty`);

--
-- Constraints for table `podcast`
--
ALTER TABLE `podcast`
  ADD CONSTRAINT `Fk_id_catygory` FOREIGN KEY (`id_catygory`) REFERENCES `catygory` (`id_caty`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
