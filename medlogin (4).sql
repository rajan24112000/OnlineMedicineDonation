-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 03:10 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'admin1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donatetable`
--

CREATE TABLE `donatetable` (
  `id` int(10) NOT NULL,
  `ngo_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `flatno` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `medname` varchar(50) NOT NULL,
  `units` varchar(50) NOT NULL,
  `mfgdate` varchar(50) NOT NULL,
  `expdate` varchar(50) NOT NULL,
  `imglink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatetable`
--

INSERT INTO `donatetable` (`id`, `ngo_name`, `fname`, `mname`, `lname`, `email`, `contactno`, `flatno`, `street`, `area`, `pincode`, `state`, `city`, `medname`, `units`, `mfgdate`, `expdate`, `imglink`) VALUES
(21, 'Karamvir', 'Krishna', 'k', 'Mishra', 'krishna12@gmailcom', '3344556677', '21', 'shantivan', 'kandivali', '400101', 'maharashtra', 'mumbai', 'Abilify', '150', '23 august 2019 ', '22 august 2020', 'uploads/IMG_20180806_183357.jpg'),
(22, 'Jandhan', 'Rupesh', 's', 'Mishra', 'rupesh12@gmail.com', '4433552211', '22', 'kata road', 'borivali', '400066', 'maharashtra', 'mumbai', 'Domperidone', '100', '23 august 2019 ', '22 august 2020', 'uploads/IMG-20180807-WA0025.jpg'),
(23, 'Jandhan', 'Omkar', 's', 'Mishra', 'omkar12@gmail.com', '1122334455', '35', 'bhutan', 'kandivali', '400101', 'maharashtra', 'mumbai', 'Domperidone', '500', '21-11-2019', '21-11-2020', 'uploads/IMG-20190327-WA0011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(33, 'Krishna', 'Mishra', 'Krishna12@gmail.com', 'krishna', 'e807f1fcf82d132f9bb018ca6738a19f'),
(34, 'Rupesh', 'Mihsra', 'Rupesh12@gmail.com', 'rupesh', 'e807f1fcf82d132f9bb018ca6738a19f'),
(35, 'Mahesh ', 'Mishra', 'mahesh12@gmail.com', 'mahesh ', 'e807f1fcf82d132f9bb018ca6738a19f'),
(36, 'Omkar ', 'Mishra', 'omkar12@gmail.com', 'omkar', 'e807f1fcf82d132f9bb018ca6738a19f'),
(37, 'Misthi', 'Mishra', 'misthi12@gmail.com', 'misthi', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `ngologin`
--

CREATE TABLE `ngologin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngo_name` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngologin`
--

INSERT INTO `ngologin` (`id`, `username`, `password`, `ngo_name`, `contact_no`, `city`) VALUES
(13, 'Janhit', '123456789', 'Janhit NGO', '8855443322', 'Mumbai'),
(14, 'Jandhan', '123456789', 'Jandhan NGO', '4433221155', 'Delhi'),
(15, 'Karamvir', '123456789', 'Karamvir NGO', '1122334455', 'Mumbai'),
(16, 'Yogdan', '123456789', 'Yogdan NGO', '1234567890', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medname`
--

CREATE TABLE `tbl_medname` (
  `id` int(50) NOT NULL,
  `medname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_medname`
--

INSERT INTO `tbl_medname` (`id`, `medname`) VALUES
(7, 'Abilify'),
(8, 'Acetaminophen'),
(9, 'Acetaminophen and Hydrocodone'),
(10, 'Actos\r\n'),
(11, 'Acyclovir'),
(12, 'Adderall'),
(13, 'Aspirin'),
(14, 'Avapro'),
(15, 'Anastrozole'),
(16, 'Amoxicillin'),
(17, 'Amoxicillin and Clavulanate'),
(18, 'Bacitracin'),
(19, 'Bactrim'),
(20, 'Belsomra'),
(21, 'Benadryl'),
(22, 'Benztropine'),
(23, 'Biaxin'),
(24, 'Bicalutamide'),
(25, 'Brimonidine'),
(26, 'Bumetanide'),
(27, 'Calcium carbonate'),
(28, 'Citalopram'),
(29, 'Concerta'),
(30, 'Demerol'),
(31, 'Domperidone'),
(32, 'Doxazosin'),
(33, 'Dulcolax'),
(34, 'Ecotrin'),
(35, 'Elavil'),
(36, 'Eletriptan'),
(37, 'Eligard'),
(38, 'Erythromycin'),
(39, 'Exemestane'),
(40, 'Famciclovir'),
(41, 'Florastor'),
(42, 'Fludrocortisone'),
(43, 'Fiorinal'),
(44, 'Gabapentin'),
(45, 'Ginseng'),
(46, 'Glucosamine'),
(47, 'Gemcitabine'),
(48, 'Humalog'),
(49, 'Hydrocortisone topical'),
(50, 'Ibandronate'),
(51, 'Infliximab'),
(52, 'Abilify'),
(53, 'Acetaminophen'),
(54, 'Acetaminophen and Hydrocodone'),
(55, 'Actos\r\n'),
(56, 'Acyclovir'),
(57, 'Adderall'),
(58, 'Aspirin'),
(59, 'Avapro'),
(60, 'Anastrozole'),
(61, 'Amoxicillin'),
(62, 'Amoxicillin and Clavulanate'),
(63, 'Bacitracin'),
(64, 'Bactrim'),
(65, 'Belsomra'),
(66, 'Benadryl'),
(67, 'Benztropine'),
(68, 'Biaxin'),
(69, 'Bicalutamide'),
(70, 'Brimonidine'),
(71, 'Bumetanide'),
(72, 'Calcium carbonate'),
(73, 'Citalopram'),
(74, 'Concerta'),
(75, 'Demerol'),
(76, 'Domperidone'),
(77, 'Doxazosin'),
(78, 'Dulcolax'),
(79, 'Ecotrin'),
(80, 'Elavil'),
(81, 'Eletriptan'),
(82, 'Eligard'),
(83, 'Erythromycin'),
(84, 'Exemestane'),
(85, 'Famciclovir'),
(86, 'Florastor'),
(87, 'Fludrocortisone'),
(88, 'Fiorinal'),
(89, 'Gabapentin'),
(90, 'Ginseng'),
(91, 'Glucosamine'),
(92, 'Gemcitabine'),
(93, 'Humalog'),
(94, 'Hydrocortisone topical'),
(95, 'Ibandronate'),
(96, 'Infliximab'),
(97, 'Jadelle'),
(98, 'Jivi\r\n'),
(99, 'Janumet'),
(100, 'Jornay PM'),
(101, 'Kenalog'),
(102, 'Kineret'),
(103, 'Ketorolac Tromethamine'),
(104, 'Klonopin'),
(105, 'Lamotrigine'),
(106, 'Lomotil'),
(107, 'Leflunomide'),
(108, 'Lovastatin'),
(109, 'Meclizine'),
(110, 'Metolazone'),
(111, 'Metoprolol Tartrate'),
(112, 'Minocycline'),
(113, 'Myrbetriq'),
(114, 'Naprosyn'),
(115, 'Naratriptan'),
(116, 'Nasonex'),
(117, 'Neulasta'),
(118, 'Neurontin'),
(119, 'Ofloxacin'),
(120, 'Ofloxacin ophthalmic'),
(121, 'Olaparib'),
(122, 'Oxcarbazepine'),
(123, 'Phenazopyridine'),
(124, 'Primidone'),
(125, 'Propranolol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatetable`
--
ALTER TABLE `donatetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngologin`
--
ALTER TABLE `ngologin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_medname`
--
ALTER TABLE `tbl_medname`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donatetable`
--
ALTER TABLE `donatetable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ngologin`
--
ALTER TABLE `ngologin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_medname`
--
ALTER TABLE `tbl_medname`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
