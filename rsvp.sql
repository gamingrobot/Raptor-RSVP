-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: db4free.net:3306
-- Generation Time: Jan 14, 2009 at 04:27 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rsvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `key2` int(11) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `key2` (`key2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `food`
--


-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `key` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(5) NOT NULL,
  `state` varchar(2) NOT NULL,
  `email` text NOT NULL,
  `wphone` varchar(12) NOT NULL,
  `hphone` varchar(12) NOT NULL,
  `cphone` varchar(12) NOT NULL,
  `attending` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

