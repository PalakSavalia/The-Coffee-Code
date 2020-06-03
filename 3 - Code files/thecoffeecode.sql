-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 12:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecoffeecode`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderNo` varchar(6) NOT NULL,
  `CustName` varchar(20) NOT NULL,
  `BreadBasket` int(11) NOT NULL,
  `HoneyGranola` int(11) NOT NULL,
  `BelgianWaffle` int(11) NOT NULL,
  `ScrambledEggs` int(11) NOT NULL,
  `BlueberryPancakes` int(11) NOT NULL,
  `Coffee` int(11) NOT NULL,
  `Chocolato` int(11) NOT NULL,
  `Corretto` int(11) NOT NULL,
  `IcedTea` int(11) NOT NULL,
  `Soda` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderNo`, `CustName`, `BreadBasket`, `HoneyGranola`, `BelgianWaffle`, `ScrambledEggs`, `BlueberryPancakes`, `Coffee`, `Chocolato`, `Corretto`, `IcedTea`, `Soda`, `TotalAmount`) VALUES
('CI5789', 'Jai Foria', 3, 1, 2, 1, 1, 0, 1, 0, 0, 1, 250),
('HY8537', 'Yash Mehta', 3, 1, 2, 1, 1, 0, 1, 0, 0, 1, 250),
('WW7811', 'Paresh Shah', 2, 0, 5, 0, 2, 0, 2, 0, 5, 0, 2426),
('XS0217', 'Palak Vithalani', 0, 1, 2, 1, 3, 0, 3, 0, 0, 1, 526);

-- --------------------------------------------------------

--
-- Table structure for table `tablereservation`
--

CREATE TABLE `tablereservation` (
  `customerName` varchar(20) NOT NULL,
  `people` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablereservation`
--

INSERT INTO `tablereservation` (`customerName`, `people`, `date`, `contact`, `message`) VALUES
('Ashish Kadam', 3, '2017-11-16T20:00', 2147483647, 'NIL'),
('Paresh Shah', 2, '2020-06-01T21:00', 2147483647, 'Please keep my order ready at 9pm!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
