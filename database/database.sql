-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2018 at 06:09 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sheji`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `cust_id` int(11) NOT NULL,
  `cust_no` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `cust_type` enum('IND','BUS','OTH') COLLATE utf8_bin NOT NULL,
  `related_cust_id` int(11) DEFAULT NULL,
  `last_name` varchar(256) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(256) COLLATE utf8_bin NOT NULL,
  `initials` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `bus_name` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `native_name` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_bin NOT NULL,
  `postal_code` varchar(8) COLLATE utf8_bin NOT NULL,
  `city` varchar(128) COLLATE utf8_bin NOT NULL,
  `country` varchar(64) COLLATE utf8_bin NOT NULL,
  `province` varchar(64) COLLATE utf8_bin NOT NULL,
  `phone1` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone1_type` enum('CELL','WORK','HOME') COLLATE utf8_bin DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `phone2_type` enum('CELL','WORK','HOME') COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `doc_no` varchar(32) COLLATE utf8_bin NOT NULL,
  `doc_type` int(16) NOT NULL,
  `issue_place` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `expire_date` date DEFAULT NULL,
  `occupation` varchar(1000) COLLATE utf8_bin NOT NULL,
  `purpose` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `frequency` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `ave_amt` double DEFAULT NULL,
  `third_party` tinyint(1) DEFAULT NULL,
  `pep` tinyint(1) DEFAULT NULL,
  `suspicious` tinyint(1) DEFAULT NULL,
  `sus_behavior` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `comments` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_modified_timestamp` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `delete_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`cust_id`, `cust_no`, `cust_type`, `related_cust_id`, `last_name`, `first_name`, `initials`, `bus_name`, `native_name`, `address`, `postal_code`, `city`, `country`, `province`, `phone1`, `phone1_type`, `phone2`, `phone2_type`, `email`, `doc_no`, `doc_type`, `issue_place`, `date_of_birth`, `expire_date`, `occupation`, `purpose`, `frequency`, `ave_amt`, `third_party`, `pep`, `suspicious`, `sus_behavior`, `comments`, `created_timestamp`, `created_by`, `last_modified_timestamp`, `last_modified_by`, `delete_time`) VALUES
(1, 'cust id', 'IND', NULL, 'last', 'first', NULL, '', '', 'address', 'postal', 'city', 'country', 'province', '1234567', 'CELL', '', 'CELL', 'aa@gmail.com', '12345', 1, '12345', '2018-08-02', '2018-08-02', 'occupation\r\ntest', 'purpose\r\ntest', 'monthly', 1234, 0, 1, 1, 'this is suspicious\r\ntest', 'comments\r\nhahaha\r\ntesting\r\nhahaha', '2018-08-03 04:56:34', '6@qq.com', '2018-09-05 03:48:22', '6@qq.com', '2018-09-05 03:48:22'),
(2, '12345', 'IND', NULL, 'He', 'Yang', NULL, NULL, '', '12345', 'T5T4G4', 'Edmonton', 'Canada', 'Alberta', '7800000000', 'CELL', '', 'CELL', 'aa@gmail.com', '123454', 2, 'AB', '2018-08-08', '2018-08-31', 'adfadf', 'adfadf', 'adsfadf', 1000, 0, 0, 0, '', 'asdfadf', '2018-08-09 04:40:36', '6@qq.com', NULL, NULL, NULL),
(3, 'cust123456', 'BUS', NULL, 'He', 'Yang', NULL, 'bus name', '你好', '1234 108 ST', 'T5T4G4', 'Edmonton', 'Canada', 'Alberta', '7801111111', 'WORK', '7802222222', 'HOME', 'aa@gmail.com', '12345', 1, 'Alberta', '2018-08-13', '2018-08-17', 'Occup', 'Purpo', 'Monthly', 1000, 1, 1, 1, 'suspicious', 'test', '2018-08-13 22:55:46', '6@qq.com', '2018-08-17 04:12:20', '6@qq.com', NULL),
(4, 'GHF878987', 'IND', NULL, 'last', 'first', NULL, '', '', 'address', 'postal', 'city', 'country', 'prov', '7800000000', 'CELL', '7801111111', 'CELL', 'aa@gmail.com', 'ID', 1, 'China', '2018-10-01', '2018-10-03', 'occu', 'purpose', 'Monthly', 1000, 0, 0, 0, '', 'notes', '2018-10-04 05:14:05', '6@qq.com', '2018-10-04 05:14:05', NULL, NULL),
(45, NULL, 'OTH', 2, 'ben_last', 'ben_first', 'ben_init', NULL, NULL, 'ben_addr', 'aaaaaa', 'ben_city', 'ben_cou', 'ben_pro', 'ben_ph', NULL, NULL, NULL, NULL, 'ben_1234', 1, NULL, '2018-10-04', NULL, 'ben_occ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-05 05:03:32', '6@qq.com', '2018-10-05 05:03:32', NULL, NULL),
(46, NULL, 'OTH', 2, 'sen_3rd_last', 'sen_3rd_first', 'sen_3rd_init', NULL, NULL, 'sen_3rd_add', 'aaaaaa', 'sen_3rd_city', 'sen_3rd_cou', 'sen_3rd_pro', 'sen_3rd_ph', NULL, NULL, NULL, NULL, '12345', 1, NULL, '2018-10-04', NULL, 'sen_3rd_occ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-05 05:03:32', '6@qq.com', '2018-10-05 05:03:32', NULL, NULL),
(47, NULL, 'OTH', 2, 'ben_3rd_last', 'ben_3rd_first', 'ben_3rd_init', NULL, NULL, 'ben_3rd_addr', 'aaaaaa', 'ben_3rd_city', 'ben_3rd_cou', 'ben_3rd_pro', 'ben_3rd_ph', NULL, NULL, NULL, NULL, 'ben_3rd_123', 2, NULL, '2018-10-04', NULL, 'ben_3rd_occ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-05 05:03:32', '6@qq.com', '2018-10-05 05:03:32', NULL, NULL),
(59, NULL, 'OTH', 2, 'Shi', 'John', '', NULL, NULL, '123 108 Ave', 'T5T4G4', 'Edmonton', 'Canada', 'AB', '780-123-4567', NULL, NULL, NULL, NULL, '1234567', 2, NULL, '1981-01-01', NULL, 'Not work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-08 06:43:15', '6@qq.com', '2018-10-08 06:43:15', NULL, NULL),
(60, NULL, 'OTH', 2, 'Fox', 'Terry', 'Ben', NULL, NULL, '123 111 AVe', 't4tr4r', 'Edmonton', 'Canada', 'AB', '780-123-4567', NULL, NULL, NULL, NULL, '1234-56789', 1, NULL, '1981-02-06', NULL, 'Programmer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-08 20:16:44', '6@qq.com', '2018-10-08 20:16:44', NULL, NULL),
(61, NULL, 'OTH', 2, 'bb', 'aa', 'ini', NULL, NULL, '111 111Ave', 'T4T5G5', 'Toronto', 'Canada', 'ON', '640-896-3215', NULL, NULL, NULL, NULL, 'test', 2, NULL, '1982-01-01', NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 05:59:14', '6@qq.com', '2018-10-09 05:59:14', NULL, NULL),
(62, NULL, 'OTH', 2, 'haha', 'test', 'nn', NULL, NULL, 'adf street', 'T5T4R4', 'Calgary', 'Canada', 'AB', '644-123-4567', NULL, NULL, NULL, NULL, 'test', 4, NULL, '1988-01-01', NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 06:05:02', '6@qq.com', '2018-10-09 06:05:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `financial_institution`
--

CREATE TABLE `financial_institution` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `delete_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `financial_institution`
--

INSERT INTO `financial_institution` (`id`, `name`, `street`, `city`, `province`, `country`, `postal_code`, `delete_time`) VALUES
(8, '11', '123222', '1122', '11', '1', '11', NULL),
(9, 'sdhs', '3www.hao123.com', '4', '423', '12', '12', NULL),
(10, 'sdfs', 'asgag', 'zxcv', 'reuy', 'zxcv', 'hfdgh', NULL),
(20, 'bank of china', 'testing transaction', 'Edmonton', 'AB', 'Canada', '200000', NULL),
(32, 'Bank of China Shanghai Pudong Branch', '123 Guangyuan road', 'Shanghai', 'Shanghai', 'China', '200000', NULL),
(33, 'Bank of Montreal', '1234 111 Ave', 'Edmonton', 'AB', 'Canada', 'T5T4G4', NULL),
(34, 'Bank of Canada', 'test', 'Edmonton', 'AB', 'Canada', 'T5T4R4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fintrac`
--

CREATE TABLE `fintrac` (
  `id` int(10) NOT NULL,
  `number` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibe` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `id_types`
--

CREATE TABLE `id_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `id_types`
--

INSERT INTO `id_types` (`id`, `name`) VALUES
(1, 'Driver\'s license'),
(2, 'Passport'),
(3, 'PR CARD'),
(4, 'Provincial Photo ID'),
(5, 'QUEBEC HEALTH CARD'),
(6, 'Business Corporation Act'),
(7, 'Citizenship Certificate'),
(8, 'OPERATOR\'S LICENCE'),
(9, 'Identity Card of China'),
(12, 'test'),
(13, 'test2'),
(14, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`id`, `name`) VALUES
(1, 'Windermere Road Office'),
(2, 'Branch on 97 St. NW'),
(3, 'Office on 106 St.');

-- --------------------------------------------------------

--
-- Table structure for table `saction`
--

CREATE TABLE `saction` (
  `id` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `start` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `end` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typ` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `account` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `types` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `received` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typex` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibe` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typea` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `money` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typez` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibes` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `charge` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typek` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibea` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `moneys` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typeo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibee` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibex` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descibec` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `times` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `saction`
--

INSERT INTO `saction` (`id`, `sid`, `start`, `end`, `typ`, `code`, `place`, `number`, `origin`, `account`, `types`, `received`, `typex`, `descibe`, `typea`, `rate`, `money`, `typez`, `descibes`, `charge`, `typek`, `descibea`, `moneys`, `typeo`, `descibee`, `descibex`, `descibec`, `times`, `status`, `type`) VALUES
(9, 0, '123', '123', '1', '345', '2', '1234', '1', '5346', '1', '23424', '3', 'fdgsdg', '9', '14123', '546', '1', 'fdsgsd', '5634', '3', 'fsdg', '765', '2', 'jghj', 'xcvb', 'dghs', '2018-03-24 17:25:11', '2', '1'),
(10, 0, '2018-04-02', '2018-04-02', '1', '123', '1', 'GHF_EX_201804031433', '0', '', '3', '1000', '1', '', '2', '1.1', '1000', '1', '', '', '1', '', '1000', '2', '', '', '', '2018-04-04 05:09:08', '1', '2'),
(11, 0, '2018/04/03', '2018/04/03', '1', '123', '1', 'GHF_EX_201804031433', '1', '', '1', '1000', '1', '', '3', '4.80', '4800', '2', '', '12', '1', '', '1000', '2', '', '', '', '2018-04-04 05:14:07', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `id` int(10) NOT NULL,
  `aname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typea` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`id`, `aname`, `name`, `street`, `city`, `state`, `code`, `country`, `phone`, `birth`, `type`, `typea`) VALUES
(1, '1', '11', '123222', '1122', '11', NULL, '1', '11', '11', '11', '11');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(10) NOT NULL,
  `descibe` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `time` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `types` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `descibe`, `type`, `file`, `time`, `types`) VALUES
(2, '2', 'Bug', NULL, '2018-03-23 15:33:55', 'Open'),
(3, 'ffg', 'Bug', NULL, '2018-03-23 15:36:45', 'Open'),
(5, '1', 'Design Improvement Request', NULL, '2018-03-24 11:06:18', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `Transactions`
--

CREATE TABLE `Transactions` (
  `trans_id` int(11) NOT NULL,
  `trans_date` date NOT NULL,
  `trans_time` time NOT NULL,
  `settlement_date` date DEFAULT NULL,
  `trans_num` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trans_type` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `method_in` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curr_in` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount_in` decimal(10,2) NOT NULL,
  `method_in_notes` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `method_out` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `method_out_notes` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curr_out` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount_out` decimal(10,2) NOT NULL,
  `rate` decimal(10,4) NOT NULL,
  `cad_amount` decimal(10,2) NOT NULL,
  `fee` decimal(10,2) DEFAULT NULL,
  `fee_method` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fee_notes` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cust_role` enum('S','B') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'S for sender B for beneficiary',
  `sender_id` int(11) DEFAULT NULL,
  `sender_relation` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sender_third_id` int(11) DEFAULT NULL,
  `sender_third_relation` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ben_id` int(11) DEFAULT NULL,
  `ben_relation` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ben_third_id` int(11) DEFAULT NULL,
  `ben_third_relation` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `insti_id` int(11) NOT NULL,
  `account_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `osfi_match` tinyint(1) DEFAULT NULL,
  `purpose` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastmodified_timestamp` timestamp NULL DEFAULT NULL,
  `lastmodified_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `delete_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Transactions`
--

INSERT INTO `Transactions` (`trans_id`, `trans_date`, `trans_time`, `settlement_date`, `trans_num`, `location`, `trans_type`, `ib_code`, `method_in`, `curr_in`, `amount_in`, `method_in_notes`, `method_out`, `method_out_notes`, `curr_out`, `amount_out`, `rate`, `cad_amount`, `fee`, `fee_method`, `fee_notes`, `cust_role`, `sender_id`, `sender_relation`, `sender_third_id`, `sender_third_relation`, `ben_id`, `ben_relation`, `ben_third_id`, `ben_third_relation`, `insti_id`, `account_no`, `osfi_match`, `purpose`, `source`, `notes`, `created_timestamp`, `created_by`, `lastmodified_timestamp`, `lastmodified_by`, `delete_time`) VALUES
(2, '2018-10-08', '23:00:00', '2018-10-08', 'GHF_EFTI_123456u', 'North York', 'EFTO', 'IB codeu', 'Cash', 'CNY', '10000.01', 'in descu', 'Bank Draft', 'out descu', 'CAD', '2000.01', '5.0001', '2000.01', '15.01', 'Bank Transfer', 'fee descu', 'S', 2, '', NULL, NULL, 62, 'ben relationu', NULL, NULL, 34, '123456789u', 0, 'puru', 'sourcu', 'descu', '2018-10-05 05:03:32', '6@qq.com', NULL, NULL, NULL),
(8, '2018-10-07', '21:09:34', NULL, 'GHF_EX_201810072109', 'Markham', 'EFTI', '', 'Bank Transfer', 'CNY', '5000.00', '', 'Cash', '', 'CAD', '1000.00', '5.0000', '1000.00', '15.00', 'Cash', '', 'S', 2, '', NULL, '', 59, 'Friend', NULL, '', 32, '1234-5678', 0, 'Living expense', 'Salary income', 'This is not a test transaction', '2018-10-08 06:43:15', '6@qq.com', NULL, NULL, NULL),
(9, '2018-10-08', '14:12:14', NULL, 'GHF_EFTO_201810081412', 'Markham', 'EFTO', 'IB code', 'Cash', 'CAD', '3000.00', '', 'Bank Transfer', '', 'CNY', '15370.00', '5.0000', '3000.00', '15.00', 'Cash', '', 'B', 60, 'Sone', NULL, '', 2, '', NULL, '', 33, '12345-65789', 0, 'Support family', 'Salary income', '', '2018-10-08 20:16:44', '6@qq.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `typea`
--

CREATE TABLE `typea` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `typea`
--

INSERT INTO `typea` (`id`, `name`) VALUES
(1, 'AUD'),
(2, 'CAD'),
(3, 'CNY'),
(4, 'EUR'),
(5, 'GBP'),
(6, 'HKD'),
(7, 'MOP'),
(8, 'PHP'),
(9, 'TTD'),
(10, 'USD'),
(11, 'TWD'),
(12, 'JPY'),
(13, 'NZD');

-- --------------------------------------------------------

--
-- Table structure for table `typek`
--

CREATE TABLE `typek` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `typek`
--

INSERT INTO `typek` (`id`, `name`) VALUES
(1, 'Cash'),
(2, 'Bank Transfer'),
(3, 'Bank Draft'),
(4, 'Bank Card'),
(5, 'Email Transfer'),
(6, 'Cheque'),
(7, 'Wire'),
(8, 'BANK CARD + CASH');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'CAD'),
(2, 'CAY'),
(3, 'USD'),
(4, 'NZD'),
(5, 'HKD'),
(6, 'SGP'),
(7, 'AUD'),
(8, 'EUR'),
(9, 'GBP'),
(10, 'GBP'),
(11, 'GPD'),
(12, 'MMM');

-- --------------------------------------------------------

--
-- Table structure for table `typex`
--

CREATE TABLE `typex` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `typex`
--

INSERT INTO `typex` (`id`, `name`) VALUES
(1, 'Cash'),
(2, 'Bank Transfer'),
(3, 'Bank Draft'),
(4, 'Bank Card'),
(5, 'Email Transfer'),
(6, 'Cheque'),
(7, 'Wire'),
(8, 'CASH+DEBIT'),
(9, 'CASH+DRAFT'),
(10, 'WECHAT');

-- --------------------------------------------------------

--
-- Table structure for table `typez`
--

CREATE TABLE `typez` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `typez`
--

INSERT INTO `typez` (`id`, `name`) VALUES
(1, 'Cash'),
(2, 'Bank Transfer'),
(3, 'Bank Draft'),
(4, 'Bank Card'),
(5, 'Email Transfer'),
(6, 'Cheque'),
(7, 'Wire'),
(8, 'DEPOSIT'),
(9, 'WIRE + BANK DRAFT'),
(10, 'CASH+CHEQUE'),
(11, 'BANK DRAFT+CASH'),
(12, 'Bank transfer + cash'),
(13, 'TBD'),
(14, 'WE CHAT'),
(15, 'WeChat Transfer'),
(16, 'BANK DRAFT+CASH'),
(17, 'Alipay');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `uid` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `nam` varchar(255) COLLATE utf8_bin NOT NULL,
  `namex` varchar(255) COLLATE utf8_bin NOT NULL,
  `rating` varchar(255) COLLATE utf8_bin NOT NULL,
  `street` varchar(255) COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `state` varchar(255) COLLATE utf8_bin NOT NULL,
  `volume` varchar(255) COLLATE utf8_bin NOT NULL,
  `tran` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL,
  `country` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stype` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `end` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phonea` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typea` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phoneb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typeb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `aname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typeq` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typew` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typee` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `money` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typer` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typeu` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typel` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `pic2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `pic1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typem` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `names` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `times` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `namep` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `namel` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typep` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uid`, `type`, `nam`, `namex`, `rating`, `street`, `city`, `state`, `volume`, `tran`, `status`, `country`, `code`, `stype`, `number`, `birth`, `end`, `place`, `phonea`, `typea`, `phoneb`, `typeb`, `aname`, `typeq`, `typew`, `typee`, `money`, `typer`, `typeu`, `typel`, `pic2`, `pic1`, `typem`, `names`, `email`, `times`, `namep`, `namel`, `typep`) VALUES
(24, '', '2', 'sdf', 'aszf', '2', 'sdf', 'sdf', 'sdf', '', '', '2', 'sdf', 'sdf', '2', 'sdf', 'fsdsdf', 'sdf', 'sdf', 'sdf', '1', '', '0', 'sdf', 'sdf', 'fsd', 'sdf', 'sdf', '1', '1', NULL, NULL, NULL, '1', ' 1e', '', '2018-03-24 16:50:53', NULL, NULL, NULL),
(25, '', '2', 'wr', '234', '2', 'afs', '2134', 'asfd', '', '', '1', 'qwer', '234', '9', '3245', '234', '234', '534', 'asdf', '2', 'qwre', '1', '3tg', 'sfdg', 'fsdg', 'fsdg', 'wert', '1', '1', NULL, NULL, NULL, '1', '2345', '', '2018-03-27 11:24:21', NULL, NULL, NULL),
(26, '', '2', 'asdf', 'wer', '1', 'asdf', 'asfd', 'watfg', '', '', '2', 'zxcv', 'zxcv', '2', 'asdgxzcv', 'asv', 'asdfg', 'zxcvweafwa', 'asfd', '0', '', '0', 'asfas', 'fasfz', 'zxcv', 'agx', 'xzbwaas', '1', '1', NULL, NULL, NULL, '1', 'sagsdg', '', '2018-03-27 16:28:59', NULL, NULL, NULL),
(27, '', '1', 'asdf', 'qwr', '3', 'zxv', 'asdf', 'asdf', '', '', '1', 'asdf', 'afd', '9', 'asdfzxcv', 'asfd', 'asdf', 'zxcv', 'asdf', '2', '', '0', 'asdf', 'asf', 'asdf', 'sdg', 'asdf', '1', '1', NULL, NULL, NULL, '1', 'gsdfg', '', '2018-03-27 16:32:43', NULL, NULL, NULL),
(28, '', '2', 'asfwa', 'sdfg', '1', 'asfd', 'asdf', 'czxvbhdf', '', '', '1', 'asdf', 'zxcv', '2', 'esghdsf', 'sdfg', 'sdfg', 'sdfg', 'rewtg', '2', '', '0', 'sdfg', 'sdfg', 'cvxb', 'sdfg', 'xcvb', '1', '1', NULL, NULL, NULL, '1', 'hdfgh', '', '2018-03-27 16:36:21', NULL, NULL, NULL),
(30, '', '1', 'asd', 'asd', '1', 'asd', 'asd', 'asd', '', '', '2', 'asd', 'asd', '9', 'sdfg', 'sfdg', 'sdfg', 'sdfg', 'wer', '1', 'asdf', '1', 'fgsd', 'dfsg', 'fsdg', 'yjk', 'wert', '1', '1', NULL, NULL, NULL, '1', 'ad', '', '2018-04-03 14:46:13', NULL, NULL, NULL),
(54, '', '1', 'first', 'last', '1', '1', 'a', 'a', '', '', '1', 'a', 'a', '1', '1234', 'ffff', 'ffff', 'ffff', '1234', '0', '5678', '1', '', 'aaa', 'bbb', 'Monthly', '12334', '3', '1', NULL, NULL, NULL, '1', '123', 'aa@gmail.com', '2018-04-08 23:48:31', '', '', ''),
(42, '', '1', 'sadf', 'sf', '1', 'sdaf', 'asdf', 'asf', '', '', '1', 'asdf', 'asdf', '1', 'zxcv', 'wa', 'zxcv', 'asdf', 'asf', '0', '', '0', 'zxcv', 'zxcv', 'zxcv', 'zxcv', 'asdf', '1', '1', NULL, NULL, NULL, '1', '123', '', '2018-04-08 11:36:10', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`) VALUES
(8, '4@qq.com', 'sagf', 'admin', '2'),
(9, '6@qq.com', '6@qq.com', 'admin', '2'),
(10, '3@qq.com', 'sadfgasdf', 'admin', '1'),
(11, 'yhe@ghf.com', '123456', '12Guanghui', '2'),
(12, '', '', '', '1'),
(13, '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `fk_related_cust_id` (`related_cust_id`),
  ADD KEY `fk_doc_type` (`doc_type`);

--
-- Indexes for table `financial_institution`
--
ALTER TABLE `financial_institution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fintrac`
--
ALTER TABLE `fintrac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_types`
--
ALTER TABLE `id_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saction`
--
ALTER TABLE `saction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `fin_inst` (`insti_id`),
  ADD KEY `fk_sender_id` (`sender_id`),
  ADD KEY `fk_sender_third_id` (`sender_third_id`),
  ADD KEY `fk_ben_id` (`ben_id`),
  ADD KEY `fk_ben_third_id` (`ben_third_id`);

--
-- Indexes for table `typea`
--
ALTER TABLE `typea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typek`
--
ALTER TABLE `typek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typex`
--
ALTER TABLE `typex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typez`
--
ALTER TABLE `typez`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `financial_institution`
--
ALTER TABLE `financial_institution`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `fintrac`
--
ALTER TABLE `fintrac`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_types`
--
ALTER TABLE `id_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `saction`
--
ALTER TABLE `saction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `typea`
--
ALTER TABLE `typea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `typek`
--
ALTER TABLE `typek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `typex`
--
ALTER TABLE `typex`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `typez`
--
ALTER TABLE `typez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `fk_doc_type` FOREIGN KEY (`doc_type`) REFERENCES `id_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_related_cust_id` FOREIGN KEY (`related_cust_id`) REFERENCES `Customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Transactions`
--
ALTER TABLE `Transactions`
  ADD CONSTRAINT `fk_ben_id` FOREIGN KEY (`ben_id`) REFERENCES `Customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ben_third_id` FOREIGN KEY (`ben_third_id`) REFERENCES `Customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sender_id` FOREIGN KEY (`sender_id`) REFERENCES `Customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sender_third_id` FOREIGN KEY (`sender_third_id`) REFERENCES `Customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`insti_id`) REFERENCES `financial_institution` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
