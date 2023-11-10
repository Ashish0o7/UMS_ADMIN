-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2021 at 05:28 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12


CREATE DATABASE IF NOT EXISTS ;
USE `srms`;



CREATE TABLE IF NOT EXISTS `class` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  PRIMARY KEY (`cname`),
  UNIQUE KEY `cid` (`cid`),
  KEY `cname` (`cname`)
) ;



INSERT INTO `class` (`cid`, `cname`) VALUES
(101, 'int440'),
(201, 'int333'),
(301, 'int221');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class` varchar(30) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `marks` int(3) NOT NULL,
  `percentage` int(11) NOT NULL,
  KEY `class` (`class`),
  KEY `name` (`name`,`rno`)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rno` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  PRIMARY KEY (`sname`,`rno`),
  KEY `class` (`class`)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(10) NOT NULL DEFAULT 'admin',
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`,`password`)
) 

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `user_id`, `password`) VALUES
('admin', 'admin343', 'abcd'),
('ashish', 'via343', '82786');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `r1` FOREIGN KEY (`class`) REFERENCES `class` (`cname`),
  ADD CONSTRAINT `r2` FOREIGN KEY (`name`, `rno`) REFERENCES `student` (`sname`, `rno`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `s1` FOREIGN KEY (`class`) REFERENCES `class` (`cname`),
  ADD CONSTRAINT `cname2` FOREIGN KEY (`class`) REFERENCES `class` (`cname`);


