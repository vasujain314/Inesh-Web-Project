CREATE TABLE home_offers(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE home_thinking(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE home_whywork(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE about_whatwedo(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE about_whyus(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE about_mission(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE webdev_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE webdev_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);

CREATE TABLE ecomm_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE ecomm_delieverftre(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE mobile_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE mobile_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE mobile_other(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE graphic_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE graphic_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE seo_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE seo_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);


CREATE TABLE socialmed_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE socialmed_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE contentmkt_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE contentmkt_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE ppc_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE ppc_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE lead_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE lead_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE video_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE video_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE video_developmkt(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE video_benefitmkt(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE email_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE email_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE reputation_main(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE reputation_overview(
	id int NOT NULL AUTO_INCREMENT,
	content LONGTEXT,
    PRIMARY KEY(id)
);
CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255)  COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `client_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `login_user` (`id`, `username`, `password`, `email`, `phone`, `name`, `type`, `client_num`) VALUES
(1, 'admin', 'admin@123', '', '', 'Admin', 1, ''),
(2, 'sholls', 'january30', 'oniesther@gmail.com', '234 555 5___', 'Olusola Bamidele', 2, ''),
(7, 'tboy', 'tboy', 'samsung4reali@yahoo.com', '2348075563884', 'Samson', 2, '022'),
(8, 'memo', 'memo', 'memo@yahoo.com', '08033735390', 'Memo', 2, '023'),
(9, 'lanre', 'lanre', 'lanre@yahoo.com', '08038952676', 'Lanre', 2, '024');

ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 10:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_email`
--

CREATE TABLE `admin_email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_email`
--

INSERT INTO `admin_email` (`id`, `email`, `password`) VALUES
(1, 'shanukushagra6@gmail.com', 'kushagra@5704');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_email`
--
ALTER TABLE `admin_email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_email`
--
ALTER TABLE `admin_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
