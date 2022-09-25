-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 01:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breaklabour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(2, '', 'admin2', '321'),
(5, '', 'bruno', '254'),
(6, 'godwin@gmail.com', 'Godwin', 'win123');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `aid` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`aid`, `a_name`, `email`, `photo`, `address`, `experience`, `password`) VALUES
(1, 'Genda okole', 'genda@gmail.com', '256750050168.jpg', 'Kasangati', '3yrs', 'genda123'),
(4, 'John', 'tonny@gmail.com', '256758620743_status_2d0333c0fe6e481fb943bcf2827a6770.jpg', 'Kasangati', '3yrs', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` bigint(20) NOT NULL,
  `Name` text NOT NULL,
  `email` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `Name`, `email`, `Message`) VALUES
(1, 'hello', 'bruno@gmail.com', 'How is everybody');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `agreement` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `set_off` date NOT NULL,
  `arrival` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `firstName`, `lastName`, `gender`, `job`, `agreement`, `duration`, `set_off`, `arrival`, `created_at`) VALUES
(1, '1', '1', 'Female', 'Waitress', '256758620743_status_2d0333c0fe6e481fb943bcf2827a6770.jpg', '1 week', '2022-09-24', '2022-10-01', '2022-09-24 17:19:26'),
(2, '2', '2', 'Male', 'Security', '256756514046_status_ef830a4a040a450e94df246e10893fde.jpg', '1yrs', '2022-09-24', '2022-09-25', '2022-09-24 17:36:55'),
(3, 'adkhsfujhfdjdhsbjh', 'sduhdfujghdyu', 'Female', 'Programmer', '256750135906_status_4af863aa9e4b4f8aabde11b9fc6f38e1.jpg', '4 weeks', '2022-09-24', '2022-10-24', '2022-09-24 18:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `image_link` text NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `nin` varchar(255) NOT NULL,
  `age` date NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `e_contact` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `contract` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `image_link`, `firstName`, `lastName`, `nin`, `age`, `contact`, `address`, `email`, `gender`, `next_of_kin`, `employer`, `e_contact`, `e_email`, `e_address`, `job`, `contract`, `salary`) VALUES
(1, '256700524810_status_fba3e29da62846d499c2c6079c15b873.jpg', 'Mercy', 'Arinda', 'djhfbbjdbjhdbdvsjkdbjhbfv7huuvecf8', '2000-02-03', '0796456766', 'Mbale', 'mercy@gmail.com', 'Male', 'Anorld Tugume', 'Kaspash karim', '+91-345-76843', 'karim@gmail.com', 'Dubai', 'Accountant', '7yrs', '3000000'),
(2, '_20200622_003355.jpg', 'adkhsfujhfdjdhsbjh', 'sduhdfujghdyu', 'kljfgikgdjhtiouhiofgdhoidrhso', '2022-09-25', '0781038320', 'brain', 'brian@gmail.com', 'Male', 'Obua Hamson', 'Allan', '+91-345-76889', 'brian@gmail.com', 'brain', 'Waitressd', '5Yrs', '4000000'),
(3, '_20200622_003355.jpg', 'adkhsfujhfdjdhsbjh', 'sduhdfujghdyu', 'kljfgikgdjhtiouhiofgdhoidrhso', '2022-09-25', '0781038320', 'brain', 'brian@gmail.com', 'Male', 'Obua Hamson', 'Allan', '+91-345-76889', 'brian@gmail.com', 'brain', 'Waitressd', '5Yrs', '4000000');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `enquiry` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `status`, `name`, `email`, `contact`, `address`, `img`, `enquiry`, `description`, `created_at`) VALUES
(1, 'on', 'Okello Brian', 'okellobrian64@gmail.com', '0781038320', 'Kampala', 'Screenshot_20200426-205746.png', 'dfjbnjhgdfgjfdhbnfjk', 'skjnsgjkdfnkbjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjsfggggggggggggggggggggggggggggggggggggggggggggggssssssssssssssssssssssssssssssssssssssssssssssssssssttttttttttttttttttttttttttttttttttt3e333333333333333333333333333333kjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjntrrrrrrrrrrrrrrrrrrrwtuj', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `problem_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pic` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`problem_id`, `name`, `email`, `contact`, `address`, `pic`, `link`, `problem`, `description`, `created_at`) VALUES
(1, 'Labor co', 'co@gmail.com', '0781038320', 'Karamoja', '256758620743_status_2d0333c0fe6e481fb943bcf2827a6770.jpg', 'dfhbjfgfvjkbgnkjsngjknjknkxjn djk njknsgjkb njksnkjbnskjbnk', 'vv bfbgm kjdgn kl', 'wbfoqhleeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeieuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuufgqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqvuirrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrikkkkkkkkkkkkkkkiiiiiiii', '2022-09-23 12:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`testimony_id`, `name`, `email`, `photo`, `message`) VALUES
(1, 'Labor co', 'co@gmail.com', '256756514046_status_ef830a4a040a450e94df246e10893fde.jpg', 'WDFJKERNGUDJHBNVHJSDBNVJILNHSFIDONUIOBHNC JKLNJKVNJKXNVFJKXNBKDJN BJKSNFKJBGFNJK FBXKJCVSRGJKNHAGJIDNFVibJI'),
(2, 'Dilis Apio', 'hellen@gmail.com', '256700524810_status_fba3e29da62846d499c2c6079c15b873.jpg', 'scjhbchjb jkf lvajikdn fvjhkbna jhkcanjnk vkjndkjabnjkdvncd jhfbvjhkvbvdjkvnjkfnvrjeknguifbnefvnobiunkldddddojmoivdjniovjffffmiofvoivfmiffviojfmifvnfio'),
(3, 'Ayella Daniel', 'hellen@gmail.com', '256750050168.jpg', 'jbvkhja bfijlsb vjkqenlsjkd k vuhfkbvj keq njiaknfjkbnjhkvbjkdvhbvkjhbvhjdbjh'),
(4, 'wokorach felix', 'wokos@gmail.com', '256750135906_status_4af863aa9e4b4f8aabde11b9fc6f38e1.jpg', 'djh bhjb fkjngkjfvnekjnejkvnfjkfvnjkvnvjkbnjhkvbnjkfvnjkvcnfvjhnjnjhdfv jhn vjfngjkhnmbkldfgmnklhmdnhklmhdklmnklhmnklmhlndlmsldmhklnmfkldmbjklsnmbjk njkkjnkhmjmkjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `problem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
