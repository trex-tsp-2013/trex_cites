-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2013 at 11:20 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TREX`
--

-- --------------------------------------------------------

--
-- Table structure for table `form15`
--

CREATE TABLE `form15` (
  `userId` tinyint(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fbd` varchar(20) NOT NULL,
  `fnation` varchar(20) NOT NULL,
  `fpassport` varchar(20) NOT NULL,
  `fissue` varchar(20) NOT NULL,
  `faddress` varchar(20) NOT NULL,
  `fstreet` varchar(15) NOT NULL,
  `fprovince` varchar(15) NOT NULL,
  `fzipcode` varchar(8) NOT NULL,
  `ftel` varchar(10) NOT NULL,
  `ffax` varchar(10) NOT NULL,
  `fmail` varchar(20) NOT NULL,
  `fname2` varchar(20) NOT NULL,
  `fowner` varchar(20) NOT NULL,
  `faddress2` varchar(20) NOT NULL,
  `fstreet2` varchar(15) NOT NULL,
  `fprovince2` varchar(15) NOT NULL,
  `fzipcode2` varchar(8) NOT NULL,
  `ftel2` varchar(10) NOT NULL,
  `fphone2` varchar(10) NOT NULL,
  `ffax2` varchar(10) NOT NULL,
  `flocation` varchar(15) NOT NULL,
  `faddress3` varchar(20) NOT NULL,
  `fstreet3` varchar(15) NOT NULL,
  `fzipcode3` varchar(15) NOT NULL,
  `ftel3` varchar(10) NOT NULL,
  `fphone3` varchar(10) NOT NULL,
  `ffax3` varchar(10) NOT NULL,
  `plantname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `numberbreed` varchar(5) NOT NULL,
  `numbercom` varchar(5) NOT NULL,
  `source` varchar(20) NOT NULL,
  `ab` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form15`
--

INSERT INTO `form15` (`userId`, `fname`, `fbd`, `fnation`, `fpassport`, `fissue`, `faddress`, `fstreet`, `fprovince`, `fzipcode`, `ftel`, `ffax`, `fmail`, `fname2`, `fowner`, `faddress2`, `fstreet2`, `fprovince2`, `fzipcode2`, `ftel2`, `fphone2`, `ffax2`, `flocation`, `faddress3`, `fstreet3`, `fzipcode3`, `ftel3`, `fphone3`, `ffax3`, `plantname`, `sname`, `numberbreed`, `numbercom`, `source`, `ab`, `status`) VALUES
(0, 'Nuttapon', '14/04/1994', 'Thai', '123456789', 'kaset', 'happyland', 'Navamin', 'bkk', '100', '', '', 'n.phannurat@gmail.co', 'Nuttapon', 'Dok', 'Sadland', 'novo', 'ckn', '222', '', '', '', 'chn', 'mairu', 'huhu', '1111', '', '0899999999', '', 'Dok', 'Doke', '10', '100', 'yes', 'mairu', ''),
(0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
(0, 'Nuttapon', '14/23/1234', 'jkbhl', 'ljb', 'lhjb', 'jhb', 'hjlb', 'jb ', 'hjb', 'jb', 'hjhj', 'bhjb', 'Nuttapon', 'blhj', 'hjbl', 'hjb', 'jhb', 'jlhb', 'jhlb', 'jb', 'jb', 'bjh', 'bjhb', 'jhb', 'jhb', 'jhb', 'jhlb', 'jhb', 'jknl', 'hjb', 'hjb', 'lh', 'b', 'ljb', ''),
(0, 'Nut', '', '', '', '', '', '', '', '', '', '', 'n.phannurat@gmail.co', 'Nuttapon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
