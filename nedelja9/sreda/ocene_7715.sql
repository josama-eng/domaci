-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 04:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_31_domaci`
--

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `br_knjizice` varchar(15) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `razred` varchar(10) NOT NULL,
  `odeljenje` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`br_knjizice`, `ime`, `prezime`, `razred`, `odeljenje`) VALUES
('13-2020', 'Ranko', 'Stojic', 'III', 'III-5'),
('14-2020', 'Janko', 'Veselinovic', 'II', 'II-4');

-- --------------------------------------------------------

--
-- Stand-in structure for view `djaci_ocene_view`
-- (See below for the actual view)
--
CREATE TABLE `djaci_ocene_view` (
`br_knjizice` varchar(15)
,`ime` varchar(30)
,`prezime` varchar(30)
,`razred` varchar(10)
,`odeljenje` varchar(10)
,`ocena` int(11)
,`naziv` varchar(30)
,`profesor` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `ocene_id` int(11) NOT NULL,
  `br_knjizice` varchar(15) NOT NULL,
  `predmeti_id` int(11) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`ocene_id`, `br_knjizice`, `predmeti_id`, `ocena`) VALUES
(1, '14-2020', 1, 5),
(2, '14-2020', 2, 4),
(3, '13-2020', 1, 2),
(4, '13-2020', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `predmeti_id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `profesor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`predmeti_id`, `naziv`, `profesor`) VALUES
(1, 'matematika', 'MT'),
(2, 'srpski', 'SR'),
(3, 'srpski', 'FF');

-- --------------------------------------------------------

--
-- Structure for view `djaci_ocene_view`
--
DROP TABLE IF EXISTS `djaci_ocene_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `djaci_ocene_view`  AS SELECT `djaci`.`br_knjizice` AS `br_knjizice`, `djaci`.`ime` AS `ime`, `djaci`.`prezime` AS `prezime`, `djaci`.`razred` AS `razred`, `djaci`.`odeljenje` AS `odeljenje`, `ocene`.`ocena` AS `ocena`, `predmeti`.`naziv` AS `naziv`, `predmeti`.`profesor` AS `profesor` FROM ((`djaci` left join `ocene` on(`ocene`.`br_knjizice` = `djaci`.`br_knjizice`)) left join `predmeti` on(`ocene`.`predmeti_id` = `predmeti`.`predmeti_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`br_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`ocene_id`),
  ADD KEY `br_knjizice` (`br_knjizice`),
  ADD KEY `predmeti_id` (`predmeti_id`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`predmeti_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `ocene_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `predmeti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`br_knjizice`) REFERENCES `djaci` (`br_knjizice`),
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`predmeti_id`) REFERENCES `predmeti` (`predmeti_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
