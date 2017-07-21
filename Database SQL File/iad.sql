-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 12:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iad`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_title` varchar(100) NOT NULL,
  `item_description` text NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_tags` varchar(200) NOT NULL,
  `item_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemadds`
--

CREATE TABLE `itemadds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemadds`
--

INSERT INTO `itemadds` (`id`, `user_id`, `title`, `description`, `price`, `tag`, `image`) VALUES
(1, 1, 'Test', 'Testing working app.', 40, 'tag', 'This is image.'),
(2, 1, 'Test Again', 'Testing with user id dropdown.', 10, 'tag2', 'This is also image.'),
(3, 1, 'poaojdcpjcloa', 'kslenconcockj cowjco', 23, 'jakdvnaov', 'lkkncoasnckscc'),
(4, 1, 'lksdnvvl', 'laskknvoabv;kb', 89, 'akoshv', 'oavov'),
(5, 1, 'lkjhdf', 'oiahdkvb;ksbv;kbav', 78, 'kajvdsb', 'aksdjbvk;bv'),
(6, 1, 'lkhlkh', 'osdbvk;abvk;absv', 65, 'ajsodvius', 'oajdsvhabvibda'),
(7, 1, 'pfmb', 'knfdlnn', 8, 'ladknfv', 'lakdfnb'),
(8, 1, 'oadnkf', 'oknoeqnfoqen', 9, 'aklf', 'lkfjaf'),
(9, 1, 'aldnfn', 'alkknvlanvf', 90, 'akdjbv', 'abc'),
(10, 1, 'akffnv', 'dlkfkvn', 879, 'akldfv', 'alkjfvn'),
(11, 1, 'kjbkb', 'kojvbkhvkv', 567, 'hivjhv', 'kjvkvliv'),
(12, 1, 'lb', 'kjbkj', 34, 'kjb', 'kjvjlh'),
(13, 1, 'lb', 'oj;kvsbfv', 67, 'akjbdv', 'kjbvakdfbv`'),
(14, 1, 'jbljb', 'kllblblkb', 34, 'kbdbfvkjbv', 'ajbfvkbakbvkabdv'),
(15, 1, 'kbalsdbv', 'abdvkjbadkvbka', 34, 'skfbv', 'akjjbv'),
(16, 1, 'jbjb', 'lblblblblbl', 13, 'akbfkjbafk', 'kabdbvkabf'),
(17, 1, 'kn ', 'kbv;kqb', 3, 'kabv', 'kbajvkb`'),
(18, 1, 'doafkhn', 'zl;kkfhhlsh', 87, 'akhfl sh;', 'Test image controller'),
(19, 1, 'Image test', 'Again testing image upload.', 9, 'tiger', 'itemImages/.jpg'),
(20, 1, 'ald;kjfh', 'alkjnv', 40, 'fvb', 'itemImages/ald;kjfh.jpg'),
(21, 1, 'J I JO', 'ksjldhfohasfkha', 87, 'ikiki', 'itemImages/samsung-galaxy-j3-pro-pakistan-priceoyeJ I JO.jpg'),
(22, 1, 'OOO', 'akbfkabf', 34, 'akjvhkbjv', 'itemImages/dell-laptopOOO.jpg'),
(23, 1, 'Somethin', 'kvvbkqebvk;qev', 67, 'ikik', 'itemImages/Samsung-Somethin.jpg'),
(24, 2, 'lfj v', 'ldfv lka v', 784, 'ldvlnlkasvv', 'itemImages/dell-laptop24.jpg'),
(25, 2, 'pijfbv`', 'iwjpfbv', 87, 'ajfbvn', 'itemImages/Samsung-pijfbv`.jpg'),
(26, 2, 'pijfbv`', 'iwjpfbv', 87, 'ajfbvn', 'itemImages/Samsung-pijfbv`.jpg'),
(27, 2, 'pijfbv`', 'iwjpfbv', 87, 'ajfbvn', 'itemImages/Samsung-pijfbv`.jpg'),
(28, 1, 'abcd', 'aaaaa', 1000, '546', 'itemImages/0.jpg'),
(29, 2, 'olhk', 'bkbbkjk', 897, 'hchch', 'itemImages/featured-content-ipad-icon_2x.png');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1497426854),
('m130524_201442_init', 1497426861);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'Name'),
(2, 'Name 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user1', '61ScrlZlcCBVxhfbjy3iGcIZWAdBXgFC', '$2y$13$MnGmUgynk5un7fGfuKn8I.27hxf9hm1h2J5b.CZMkipoEJsFsKemm', NULL, 'u@1.com', 10, 1497427685, 1497427685),
(2, 'user2', 'hu0h_lKDrk4PourLfNr98QkcFg7RkTc4', '$2y$13$OPhMInrpHZzGJwX4Uj6HWeYVIeOpRRopTcb/mok41C9eEbqPACrfG', NULL, 'u@2.com', 10, 1497427718, 1497427718),
(3, 'user3', 'yxvOQB9pzkEbyf9fF8UcH9iOf2xaO3eC', '$2y$13$gkMalbUD4uaxX0SaI6ckde11FOfXbK1uEOQqhzH5...kbp7v9yKLO', NULL, 'u@3.com', 10, 1497427749, 1497427749),
(4, 'danish', 'zAdeOC34fiwNRVq415rsul1xBXbay38a', '$2y$13$DtEGlEcQ9mOH41w4BEYN3eGUhv.v9TovpVuhGVKZYh6CSnz4JwWxS', NULL, 'd@c.com', 10, 1499281752, 1499281752);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `itemadds`
--
ALTER TABLE `itemadds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `itemadds`
--
ALTER TABLE `itemadds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
