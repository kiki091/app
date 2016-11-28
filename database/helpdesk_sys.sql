-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 11:53 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(5) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `fullname`, `email`, `password`, `phone`, `last_login`) VALUES
(1, 'Administrator', 'admin@supportcenter.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, '2016-11-27 15:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `branch_office`
--

CREATE TABLE `branch_office` (
  `id` int(5) NOT NULL,
  `regional` varchar(35) NOT NULL,
  `office_name` varchar(35) NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `longitute` double NOT NULL,
  `latitude` double NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_office`
--

INSERT INTO `branch_office` (`id`, `regional`, `office_name`, `address`, `phone`, `email`, `longitute`, `latitude`, `create_at`, `create_by`) VALUES
(1, 'Jakarta Selatan', 'BMW', 'JL RS Fatmawati', 2177558896, 'bmw@mail.com', 0, 0, '2016-11-25 05:09:34', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('a1fea0db2a4eb20b8f1d6f65de1d03ac', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', 1480264906, 'a:5:{s:9:"user_data";s:0:"";s:6:"E_MAIL";s:23:"admin@supportcenter.com";s:9:"FULL_NAME";s:13:"Administrator";s:5:"ME_ID";s:1:"1";s:10:"SESS_ADMIN";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(10) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `job_desk` varchar(30) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `time_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `fullname`, `email`, `password`, `phone`, `job_desk`, `is_active`, `time_create`, `last_login`) VALUES
(1, 'kiki', 'user@suportcenter.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 777555, 'helpdesk', 1, '2016-11-27 17:01:33', '2016-11-27 17:00:45'),
(2, 'user', 'user@gmail.com', '2fce26406167dd8ca9dead3591fbfa71d41a2b05', 98765443, 'developer', 1, '2016-11-27 17:03:21', '2016-11-27 17:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `activity_type` varchar(20) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `user_agent` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `username`, `activity_type`, `account_type`, `level`, `status`, `message`, `ip_address`, `user_agent`, `created`) VALUES
(1, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :contoh banner', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:32:10'),
(2, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:33:28'),
(3, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:54:33'),
(4, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :PC Blue Screen', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:55:49'),
(5, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:56:26'),
(6, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:57:06'),
(7, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 14:57:50'),
(8, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 15:03:26'),
(9, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 15:04:19'),
(10, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 15:05:53'),
(11, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 15:06:53'),
(12, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 18:52:51'),
(13, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 18:54:38'),
(14, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 18:58:03'),
(15, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:01:56'),
(16, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:03:07'),
(17, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:04:05'),
(18, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:05:08'),
(19, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:06:49'),
(20, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :PC Blue Screen', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:08:22'),
(21, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:09:41'),
(22, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:10:17'),
(23, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:11:30'),
(24, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:13:55'),
(25, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 19:17:57'),
(26, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:18:06'),
(27, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:50:40'),
(28, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:51:10'),
(29, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:52:54'),
(30, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:56:41'),
(31, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:56:43'),
(32, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:57:46'),
(33, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:59:51'),
(34, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 22:59:53'),
(35, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 23:02:38'),
(36, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 23:08:53'),
(37, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 23:29:54'),
(38, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 23:37:02'),
(39, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-06 23:57:27'),
(40, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 00:28:34'),
(41, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 00:34:42'),
(42, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 05:57:08'),
(43, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 09:14:34'),
(44, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 09:30:38'),
(45, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 13:32:54'),
(46, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 17:57:46'),
(47, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-07 17:58:58'),
(48, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-08 09:21:07'),
(49, 'User', 'accept ticket', 'user', 'helpdesk', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-08 09:25:29'),
(50, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-08 10:18:08'),
(51, 'User', 'accept ticket', 'user', 'helpdesk', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-08 10:21:42'),
(52, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-08 16:42:07'),
(53, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-14 16:51:10'),
(54, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-14 21:47:41'),
(55, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-14 21:51:33'),
(56, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-14 21:52:15'),
(57, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-14 21:57:43'),
(58, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-14 21:58:27'),
(59, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36', '2016-11-15 05:27:26'),
(60, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 13:41:03'),
(61, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 13:48:27'),
(62, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 13:54:36'),
(63, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 14:17:00'),
(64, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 14:26:38'),
(65, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 14:32:22'),
(66, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 17:30:07'),
(67, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 17:30:42'),
(68, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 17:31:12'),
(69, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 17:31:51'),
(70, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 17:43:37'),
(71, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 17:52:40'),
(72, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 18:02:58'),
(73, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 18:08:50'),
(74, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 19:29:51'),
(75, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-19 19:37:06'),
(76, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-20 01:33:37'),
(77, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-20 01:41:17'),
(78, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-20 01:46:28'),
(79, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-20 01:51:44'),
(80, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Software Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-20 16:59:56'),
(81, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 17:47:08'),
(82, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 20:33:08'),
(83, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 20:43:00'),
(84, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 22:42:46'),
(85, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 22:42:57'),
(86, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 22:51:31'),
(87, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:03:26'),
(88, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:05:27'),
(89, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:10:53'),
(90, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:16:10'),
(91, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:22:04'),
(92, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:28:23'),
(93, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:37:24'),
(94, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:43:00'),
(95, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:49:23'),
(96, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-20 23:54:47'),
(97, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-24 17:20:36'),
(98, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.19.2840.71 Safari/537.36', '2016-11-25 11:30:02'),
(99, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.19.2840.71 Safari/537.36', '2016-11-25 13:25:25'),
(100, 'User', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.19.2840.71 Safari/537.36', '2016-11-25 13:47:05'),
(101, 'Admin', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.19.2840.71 Safari/537.36', '2016-11-25 13:48:19'),
(102, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.19.2840.71 Safari/537.36', '2016-11-25 15:00:28'),
(103, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.19.2840.71 Safari/537.36', '2016-11-25 16:22:53'),
(104, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-26 00:21:56'),
(105, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-26 00:45:40'),
(106, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-26 00:46:08'),
(107, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-26 02:27:08'),
(108, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.2.2785.90 Safari/537.36', '2016-11-26 03:18:51'),
(109, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:01:03'),
(110, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:03:58'),
(111, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:05:50'),
(112, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:06:58'),
(113, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:08:08'),
(114, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:09:40'),
(115, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:11:16'),
(116, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:12:52'),
(117, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:19:05'),
(118, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :PC Blue Screen', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:21:10'),
(119, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :Email Erorr', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:31:38'),
(120, 'guest', 'add ticket', 'guest', 'guest', 'success', 'Title :WIFI MATI', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 02:43:25'),
(121, 'Administrator', 'login administrator', 'admin', 'admin', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 03:23:40'),
(122, 'Administrator', 'login administrator', 'admin', 'admin', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 03:23:59'),
(123, 'kiki', 'login', 'user', 'employes', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 03:24:50'),
(124, 'Administrator', 'login administrator', 'admin', 'admin', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 03:38:52'),
(125, 'Administrator', 'login administrator', 'admin', 'admin', 'success', 'Title : Login Success', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-27 22:50:25'),
(126, 'admin', 'add user', 'admin', 'admin', 'success', 'Title : add user', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '2016-11-28 00:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `problem_category`
--

CREATE TABLE `problem_category` (
  `id` int(5) NOT NULL,
  `category` varchar(15) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_category`
--

INSERT INTO `problem_category` (`id`, `category`, `create_at`, `create_by`) VALUES
(1, 'Software', '2016-11-26 05:15:47', 'admin'),
(2, 'Hardware', '2016-11-26 09:16:41', 'admin'),
(3, 'Network', '2016-11-26 09:50:58', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `problem_status`
--

CREATE TABLE `problem_status` (
  `id` int(5) NOT NULL,
  `status` varchar(15) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_status`
--

INSERT INTO `problem_status` (`id`, `status`, `create_at`, `create_by`) VALUES
(1, 'Normal', '2016-11-25 18:17:17', 'admin'),
(2, 'Urgent', '2016-11-25 18:17:17', 'admin'),
(3, 'Emergency', '2016-11-25 18:17:28', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(10) NOT NULL,
  `code` bigint(16) NOT NULL,
  `recipient` varchar(25) NOT NULL,
  `title` varchar(30) NOT NULL,
  `problem_status` varchar(25) NOT NULL,
  `category` varchar(20) NOT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `office_name` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `assignee` varchar(30) NOT NULL,
  `time_create` datetime NOT NULL,
  `ip_address` varchar(20) NOT NULL DEFAULT '127.0.0.1',
  `is_active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `code`, `recipient`, `title`, `problem_status`, `category`, `filename`, `description`, `office_name`, `branch`, `assignee`, `time_create`, `ip_address`, `is_active`) VALUES
(15, 10019600112671, 'kiki', 'WIFI MATI', 'Normal', 'Software', '', 'Jaringan wifi lantai 2 mati tolong segera di perbaiki', '', 'Jakarta Selatan', 'helpdesk', '2016-11-08 10:21:42', '::1', 1),
(16, 2160161120499, 'kiki', 'Email Erorr', 'Urgent', 'Software', '', 'Email erorr', '', 'Jakarta Selatan', 'helpdesk', '2016-11-08 09:25:29', '::1', 1),
(26, 11414661102057, 'kiki', 'Email Erorr', 'Normal', 'Software', '', 'Test', '', 'Jakarta Selatan', 'suport', '2016-11-14 13:21:06', '::1', 0),
(27, 74206216143111, 'kiki', 'Email Erorr', 'Normal', 'Software', '', 'Test', '', 'Jakarta Selatan', 'suport', '2016-11-14 21:47:41', '::1', 0),
(28, 21104025111166, 'kiki', 'Email Erorr', 'Urgent', 'Software', '', 'Email erorr tidak bisa login', '', 'Jakarta Selatan', 'suport', '2016-11-14 21:51:33', '::1', 0),
(29, 15421201614711, 'kiki', 'WIFI MATI', 'Normal', 'Hardware', '', 'Jaringan wifi mati, ip conflik', '', 'Jakarta Selatan', 'helpdesk', '2016-11-14 21:52:15', '::1', 0),
(30, 52611172112405, 'kiki', 'Email Erorr', 'Normal', 'Software', '', 'Test', '', 'Jakarta Selatan', 'helpdesk', '2016-11-14 21:57:43', '::1', 0),
(31, 41201106112851, 'kiki', 'WIFI MATI', 'Emergency', 'Network', '', 'Test', '', 'Jakarta Selatan', 'suport', '2016-11-14 21:58:27', '::1', 0),
(32, 10221001561669, 'Fikri', 'Software Erorr', 'Urgent', 'Software', '', 'Software POS Erorr', '', 'Jakarta', 'suport', '2016-11-20 16:59:56', '::1', 0),
(33, 1165120926721, 'kiki', 'Email Erorr', 'Normal', 'Software', '', 'test', 'BMW', 'Jakarta Selatan', 'suport', '2016-11-27 02:01:03', '::1', 0),
(44, 13146202727100, 'kiki', 'WIFI MATI', 'Emergency', 'Network', 'no-images', 'wifi mati', 'BMW', 'Jakarta Selatan', 'enginering', '2016-11-27 02:43:25', '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_detail`
--

CREATE TABLE `ticket_detail` (
  `id` bigint(10) NOT NULL,
  `ticket_id` bigint(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `time_accept` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time_resolved` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `note` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_detail`
--

INSERT INTO `ticket_detail` (`id`, `ticket_id`, `users_id`, `time_accept`, `time_resolved`, `note`, `status`) VALUES
(4, 16, 1, '2016-11-08 10:09:25', '2016-11-08 10:14:47', '', 'resolved'),
(5, 15, 1, '2016-11-08 10:21:42', '2016-11-25 13:33:47', '', 'resolved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `branch_office`
--
ALTER TABLE `branch_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_category`
--
ALTER TABLE `problem_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_status`
--
ALTER TABLE `problem_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branch_office`
--
ALTER TABLE `branch_office`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `problem_category`
--
ALTER TABLE `problem_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `problem_status`
--
ALTER TABLE `problem_status`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
