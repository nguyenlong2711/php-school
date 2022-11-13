-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2021 at 08:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvien2`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `masach` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`mabl`, `masach`, `makh`, `ngaybl`, `noidung`, `rating`) VALUES
(1, 4, 1, '2021-10-06', 'sach hay', 3),
(2, 1, 1, '2021-10-02', '  aaaa', 3),
(3, 4, 3, '2021-10-03', '  wed đẹp', 2),
(4, 6, 2, '2021-10-09', '  aa', 2),
(5, 40, 3, '2021-10-16', '  hay', 4),
(6, 40, 3, '2021-10-16', ' đẹp', 5),
(7, 40, 1, '2021-10-22', 'dep', 4),
(8, 40, 1, '2021-10-22', 'dep', 4),
(9, 40, 3, '2021-10-16', '  â', 3),
(10, 40, 3, '2021-10-16', '  aa', 1),
(11, 39, 3, '2021-10-16', '  sách tuyệt vời', 4),
(12, 32, 3, '2021-10-16', '  dard', 5),
(13, 40, 3, '2021-10-17', '  1', 4),
(14, 40, 3, '2021-10-17', '  1', 4),
(15, 40, 3, '2021-10-17', '  1', 4),
(16, 40, 3, '2021-10-17', '  1', 4),
(17, 40, 3, '2021-10-17', '  1', 4),
(18, 41, 3, '2021-10-17', '  a', 5),
(19, 41, 3, '2021-10-17', '  b', 3),
(20, 41, 3, '2021-10-17', '  c', 2),
(21, 41, 3, '2021-10-17', '  c', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `masach` int(11) NOT NULL,
  `hinh` varchar(20) NOT NULL,
  `tensach` varchar(100) NOT NULL,
  `namxuatban` date NOT NULL,
  `gia` double NOT NULL,
  `sotrang` int(10) NOT NULL,
  `soluong` int(12) NOT NULL,
  `matg` int(12) NOT NULL,
  `matl` int(12) NOT NULL,
  `manxb` int(12) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT '1',
  `soluotxem` int(128) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`masach`, `hinh`, `tensach`, `namxuatban`, `gia`, `sotrang`, `soluong`, `matg`, `matl`, `manxb`, `rating`, `soluotxem`) VALUES
(1, '1.jpg', 'Harry Potter I', '2020-09-01', 20000, 363, 10, 1, 1, 1, 5, 10),
(2, '2.jpg', 'Harry Potter II', '2020-09-02', 100000, 393, 9, 1, 1, 1, 3, 1),
(3, '3.jpg', 'Harry Potter III', '2020-09-03', 150000, 420, 15, 1, 1, 2, 2, 1),
(4, '4.jpg', 'Harry Potter IV', '2020-09-04', 200000, 392, 20, 1, 1, 3, 3, 1),
(5, '5.jpg', 'Harry Potter V', '2020-09-05', 200000, 401, 2, 1, 1, 2, 4, 1),
(6, 'doing_good.jpg', 'Doing Good By Doing Good', '2021-10-22', 100000, 120, 20, 3, 4, 1, 5, 1),
(7, '6.jpg', 'Truyện tranh Naruto - Quyển 1', '2015-02-13', 25000, 80, 10, 5, 5, 1, 3, 1),
(8, '7.jpg', 'Thám tử lừng danh Conan - Tập 1', '2017-06-23', 30000, 90, 20, 6, 5, 1, 3, 1),
(9, '9.jpg', 'Thám tử lừng danh Conan - Tập 2', '2015-07-03', 30000, 90, 25, 6, 5, 1, 4, 1),
(10, '8.jpg', 'Thám tử lừng danh Conan - Tập 18', '2018-10-11', 30000, 90, 10, 6, 5, 1, 1, 1),
(11, '10.jpg', 'Thám tử lừng danh Conan - Tập 80', '2019-06-12', 30000, 90, 32, 6, 5, 1, 4, 1),
(12, '11.jpg', 'Ngồi khóc trên cây', '2016-06-16', 49000, 219, 29, 7, 6, 2, 5, 1),
(13, '12.jpg', 'Tôi thấy hoa vàng trên cỏ xanh', '2012-10-18', 109000, 327, 47, 7, 6, 2, 1, 1),
(14, '13.jpg', 'Ngày xưa có một chuyện tình', '2017-06-07', 245000, 312, 39, 7, 6, 2, 2, 1),
(15, '14.jpg', 'Mắt biếc', '2019-10-22', 160000, 218, 49, 7, 6, 1, 3, 1),
(16, '15.jpg', 'Trại hoa vàng', '2020-06-10', 179000, 300, 37, 7, 6, 2, 2, 1),
(17, '16.jpg', 'Có chút gì để nhớ', '2020-06-17', 190000, 200, 40, 7, 6, 2, 1, 1),
(18, '18.jpg', 'Tuyển tập truyện ngắn hay nhất của Nguyễn Minh Châu', '2020-01-29', 280000, 430, 20, 8, 6, 2, 1, 1),
(19, '19.jpg', 'Số đỏ', '2019-06-20', 219000, 320, 35, 9, 6, 1, 3, 1),
(20, '20.jpg', 'Truyền Kiều', '2016-02-03', 109000, 230, 49, 10, 6, 3, 2, 1),
(21, '21.jpg', 'Bách khoa thư về Khoa học', '2012-05-13', 240000, 312, 25, 11, 3, 4, 1, 2),
(22, '22.jpg', 'Trái Đất và Vũ Trụ', '2017-07-06', 350000, 213, 49, 11, 3, 4, 5, 2),
(23, '23.jpg', 'Bách khoa toàn thư về Chiến tranh', '2019-07-11', 209000, 319, 45, 11, 3, 4, 5, 1),
(24, '24.jpg', 'Bách khoa tri thức về Khoa học ', '2019-02-06', 245000, 190, 23, 11, 3, 4, 3, 1),
(25, '25.jpg', 'Thế giới động vật', '2019-02-07', 190000, 210, 34, 11, 3, 4, 2, 1),
(26, '26.png', 'Hỏi đáp về mọi chuyện Khoa học tự nhiên', '2018-02-15', 230000, 324, 52, 11, 3, 4, 1, 1),
(27, '27.jpg', 'The Shining', '2012-02-08', 107000, 213, 25, 12, 2, 5, 1, 1),
(28, '28.jpg', 'Night Shift', '2014-02-05', 105000, 100, 46, 12, 2, 5, 1, 1),
(29, '29.jpg', 'Full dark, no star', '2015-02-04', 206000, 213, 358, 12, 2, 5, 3, 1),
(30, '30.jpg', 'The Gunslinger - The Dark Tower ', '2014-06-11', 320000, 420, 20, 12, 2, 5, 4, 1),
(31, '31.jpg', 'IT', '2017-06-15', 120000, 190, 36, 12, 2, 5, 1, 1),
(32, '32.jpg', 'The Outsider', '2016-06-15', 312000, 340, 10, 12, 2, 5, 5, 1),
(33, '33.jpg', 'Shin - Cậu bé bút chì - Tập 1', '2018-03-08', 25000, 110, 39, 13, 5, 1, 5, 1),
(34, '34.jpg', 'Doraemon Truyện Màu', '2016-07-14', 35000, 110, 20, 13, 5, 1, 2, 1),
(35, '35.jpg', 'Doraemon Truyện Màu - Tập 2', '2016-10-19', 35000, 120, 30, 13, 5, 1, 5, 1),
(36, '36.jpg', 'Shin - Cậu bé bút chì - Tập 4', '2014-07-17', 25000, 120, 39, 13, 5, 1, 2, 1),
(37, '37.jpg', 'Sherlock Holmes - Holmes for the holiday', '2016-07-07', 230000, 320, 60, 14, 6, 2, 5, 1),
(38, '38.jpg', 'Sự im lặng của bầy cừu', '2016-06-08', 260000, 300, 26, 16, 2, 2, 5, 1),
(39, '39.jpg', 'Sherlock Holmes Toàn Tập', '2018-03-08', 320000, 319, 45, 14, 6, 2, 2, 1),
(40, '40.jpg', 'Đừng chọn an nhàn khi còn trẻ', '2016-11-25', 50000, 200, 152, 15, 4, 3, 5, 6),
(41, '36.jpg', 'Shin - Cậu bé bút chì - Tập 4', '2014-07-17', 25000, 120, 39, 13, 5, 1, 3, 10),
(61, '41.jpg', 'Lord Of The Rings I', '2000-01-01', 150000, 373, 10, 1, 1, 1, 2, 1),
(62, '42.jpg', 'Lord Of The Rings II', '2001-01-01', 100000, 393, 9, 1, 1, 1, 5, 1),
(63, '43.jpg', 'Lord Of The Rings III', '2003-01-01', 150000, 420, 15, 1, 1, 1, 1, 1),
(64, '44.jpg', 'Narnia I', '2000-01-01', 200000, 392, 20, 2, 1, 2, 5, 1),
(65, '45.jpg', 'Narnia II', '2003-01-01', 200000, 401, 2, 2, 1, 2, 1, 1),
(66, '46.jpg', 'Narnia III', '2003-01-01', 200000, 494, 15, 2, 1, 2, 4, 1),
(67, '47.jpg', 'Narnia IV', '2005-01-01', 250000, 494, 15, 2, 1, 2, 3, 1),
(68, '48.jpg', 'World Of Warcraft I', '2003-01-01', 150000, 201, 15, 3, 1, 3, 5, 1),
(69, '49.jpg', 'World Of Warcraft II', '2005-01-01', 450000, 454, 15, 3, 1, 3, 4, 1),
(71, '51.jpg', 'The Legendary Moonlight Sculptor I', '2000-01-01', 150000, 373, 10, 2, 2, 1, 3, 1),
(72, '52.jpg', 'The Legendary Moonlight Sculptor II', '2001-01-01', 100000, 393, 9, 2, 2, 2, 5, 1),
(73, '53.jpg', 'The Legendary Moonlight Sculptor III', '2003-01-01', 150000, 420, 15, 2, 2, 2, 4, 1),
(74, '54.jpg', 'Overgeared I', '2000-01-01', 200000, 392, 20, 2, 2, 2, 1, 1),
(75, '55.jpg', 'Overgeared II', '2003-01-01', 200000, 401, 2, 2, 2, 2, 2, 1),
(76, '56.jpg', 'Overgeared III', '2003-01-01', 200000, 494, 15, 2, 2, 2, 1, 1),
(77, '57.jpg', 'Percy Jackson', '2005-01-01', 250000, 494, 15, 2, 2, 2, 5, 1),
(78, '58.jpg', 'Hercules I', '2003-01-01', 150000, 201, 15, 2, 2, 2, 1, 1),
(79, '59.jpg', 'Hercules II', '2005-01-01', 450000, 454, 15, 2, 2, 2, 4, 1),
(80, '60.jpg', 'Magnus Chase and the Gods of Asgard', '2005-01-01', 500000, 572, 15, 2, 2, 2, 1, 1),
(81, '61.jpg', 'Big Ideas Simply Explained', '2000-01-01', 150000, 373, 10, 3, 3, 3, 5, 1),
(82, '62.jpg', 'The Science Book', '2001-01-01', 100000, 393, 9, 3, 3, 3, 5, 1),
(83, '63.jpg', 'The Great', '2003-01-01', 150000, 420, 15, 3, 3, 3, 4, 1),
(84, '64.jpg', 'The Equation Of Knowledge', '2000-01-01', 200000, 392, 20, 3, 3, 3, 3, 1),
(85, '65.jpg', 'TOP SCIENCE', '2021-12-12', 200000, 401, 2, 3, 3, 3, 3, 3),
(86, '66.jpg', 'The Most Explosive', '2003-01-01', 200000, 494, 15, 3, 3, 3, 3, 1),
(87, '67.jpg', 'The Really Incredible Science Book', '2005-01-01', 250000, 494, 15, 3, 3, 3, 1, 1),
(88, '68.jpg', 'The Earth Science Book', '2003-01-01', 150000, 201, 15, 3, 3, 3, 2, 1),
(89, '69.jpg', 'Science', '2005-01-01', 450000, 454, 15, 3, 3, 3, 1, 1),
(90, '70.jpg', 'The Selfish Gene', '2005-01-01', 500000, 572, 15, 3, 3, 3, 2, 1),
(91, '80.jpg', 'Life', '2000-01-01', 150000, 373, 10, 4, 4, 4, 1, 1),
(92, '72.jpg', 'Life I', '2001-01-01', 100000, 393, 9, 4, 4, 4, 2, 1),
(93, '73.jpg', 'Life II', '2003-01-01', 150000, 420, 15, 4, 4, 4, 4, 1),
(94, '74.jpg', 'Life III', '2000-01-01', 200000, 392, 20, 4, 4, 4, 3, 1),
(95, '75.jpg', 'The Book Of Life', '2003-01-01', 200000, 401, 2, 4, 4, 4, 5, 1),
(96, '76.jpg', 'The Book Of My Life', '2003-01-01', 200000, 494, 15, 4, 4, 4, 5, 1),
(97, '77.jpg', 'Set For Life', '2005-01-01', 250000, 494, 15, 4, 4, 4, 2, 1),
(98, '78.jpg', 'One Book For Life Success', '2003-01-01', 150000, 201, 15, 4, 4, 4, 1, 1),
(99, '79.jpg', 'Life Beginer', '2005-01-01', 450000, 454, 15, 4, 4, 4, 1, 1),
(100, '80.jpg', 'Real Life', '2000-01-01', 500000, 572, 15, 4, 4, 4, 4, 1),
(101, '81.jpg', 'Doraemon II', '2000-01-01', 150000, 373, 10, 5, 5, 5, 4, 2),
(102, '82.jpg', 'Doraemon III', '2001-01-01', 100000, 393, 9, 5, 5, 5, 5, 1),
(103, '83.jpg', 'Doraemon IV', '2003-01-01', 150000, 420, 15, 5, 5, 5, 2, 1),
(104, '84.jpg', 'Doraemon V', '2000-01-01', 200000, 392, 20, 5, 5, 5, 5, 1),
(105, '85.jpg', 'Doraemon VI', '2003-01-01', 200000, 401, 2, 5, 5, 5, 1, 1),
(106, '86.jpg', 'Doraemon VII', '2003-01-01', 200000, 494, 15, 5, 5, 5, 4, 1),
(107, '87.jpg', 'One Piece I', '2005-01-01', 250000, 494, 15, 5, 5, 5, 3, 1),
(108, '88.jpg', 'One Piece II', '2003-01-01', 150000, 201, 15, 5, 5, 5, 4, 1),
(109, '89.jpg', 'One Piece III', '2005-01-01', 450000, 454, 15, 5, 5, 5, 1, 1),
(110, '90.jpg', 'One Piece IV', '2000-01-01', 500000, 572, 15, 5, 5, 5, 2, 1),
(111, '91.jpg', 'Colorful', '2000-01-01', 150000, 373, 10, 6, 6, 1, 1, 1),
(112, '92.jpg', 'The Book Of Lost Friend', '2001-01-01', 100000, 393, 9, 6, 6, 1, 2, 2),
(113, '93.jpg', 'The Poppy Wife', '2003-01-01', 150000, 420, 15, 6, 6, 1, 4, 1),
(114, '94.jpg', 'Solo Leveling', '2000-01-01', 200000, 392, 20, 6, 6, 1, 2, 1),
(115, '95.png', 'Cong Light Novel', '2003-01-01', 200000, 401, 2, 6, 6, 1, 1, 2),
(116, '96.jpg', 'CoraLine', '2003-01-01', 200000, 494, 15, 6, 6, 1, 5, 1),
(117, '97.jpg', 'The North Water I', '2005-01-01', 250000, 494, 15, 6, 6, 1, 4, 2),
(118, '98.jpg', 'The North Water II', '2003-01-01', 150000, 201, 15, 6, 6, 1, 4, 2),
(119, '99.jpg', 'The North Water III', '2005-01-01', 450000, 454, 15, 6, 6, 1, 1, 11),
(120, '100.jpg', 'The North Water IV', '2000-01-01', 500000, 572, 15, 6, 6, 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `masach` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(15) NOT NULL,
  `tinhtrang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `masach`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(1, 1, 1, 100000, '0'),
(1, 3, 1, 150000, '0'),
(1, 4, 2, 400000, '0'),
(1, 5, 1, 200000, '0'),
(1, 6, 1, 100000, '0'),
(3, 10, 1, 30000, '0'),
(3, 21, 2, 480000, '0'),
(4, 119, 2, 900000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mshd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaymua` date NOT NULL,
  `tongtien` int(15) NOT NULL,
  `tinhtrang` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mshd`, `makh`, `ngaymua`, `tongtien`, `tinhtrang`) VALUES
(1, 1, '2021-10-30', 300000, 0),
(2, 3, '2020-01-01', 0, 1),
(3, 1, '2021-10-11', 480000, 2),
(4, 5, '2021-11-13', 900000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(120) NOT NULL,
  `sodt` int(20) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `diachi` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `vaitro` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `sodt`, `user`, `pass`, `diachi`, `email`, `vaitro`) VALUES
(1, 'duyanh', 123456, 'duyanh', '202cb962ac59075b964b07152d234b70', 'ho chi minh', 'duyanh120032@gmail.com', 1),
(2, 'duytran', 123, 'duytran', '202cb962ac59075b964b07152d234b70', 'hcm', 'duyanh1200321@gmail.com', 0),
(3, 'duyanh1', 1234, 'duyanh1', '202cb962ac59075b964b07152d234b70', 'hcm', 'duyanh1200322@gmail.com', 0),
(4, 'duyanh2', 343635791, 'duy2', '202cb962ac59075b964b07152d234b70', 'hcm', 'duyanh12003211@gmail.com', 0),
(5, 'test12', 343635791, 'test12', '80c19839ecfa18907692b30991fcdedc', 'hcm', 'duyanh12003222@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'TRANG CHỦ', 'index.php'),
(2, 'REVIEW SÁCH', 'index.php?controller=reviewsach'),
(3, 'SÁCH HAY NÊN ĐỌC', '#');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `manxb` int(12) NOT NULL,
  `tennxb` varchar(100) NOT NULL,
  `diachi` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`manxb`, `tennxb`, `diachi`, `email`) VALUES
(1, 'Kim Đồng', 'TP.HCM', 'kd@gmail.com'),
(2, 'Kim Không Đồng', 'Đà Nẵng', 'kdk@gmail.com'),
(3, 'Kim Có Đồng', 'Hà Nội', 'kcd@gmail.com'),
(4, 'Thanh niên', 'Hà Nội', 'nxbthanhnien@gmail.com'),
(5, 'Stephen King', 'America', 'stephenking@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reset_pass`
--

CREATE TABLE `reset_pass` (
  `id` int(11) NOT NULL,
  `m_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `m_token` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `m_time` bigint(20) NOT NULL,
  `m_numcheck` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reset_pass`
--

INSERT INTO `reset_pass` (`id`, `m_email`, `m_token`, `m_time`, `m_numcheck`) VALUES
(8, 'duyanh120032@gmail.com', '8f14e45fceea167a5a36dedd4bea2543', 1636937302, 0),
(7, 'duyanh120032@gmail.com', 'fc490ca45c00b1249bbe3554a4fdf6fb', 1636125277, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewsach`
--

CREATE TABLE `reviewsach` (
  `id` int(11) NOT NULL,
  `nguoidang` text NOT NULL,
  `title` text NOT NULL,
  `noidung` text NOT NULL,
  `hinh` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviewsach`
--

INSERT INTO `reviewsach` (`id`, `nguoidang`, `title`, `noidung`, `hinh`) VALUES
(1, 'chithanh', 'VÒNG TAY HỌC TRÒ', ' Có một hôm, trên facebook của tôi xuất hiện thông báo của anh Bình (Bình Bán Book), kèm theo ảnh chụp một bộ sách: <br>\r\n\r\n“ Điều chúng ta mong đợi: trả lại giá trị đích thực cho nền văn học miền Nam trước 75 dần thành hiện thực. Sau tiếng tóc rách của tuỳ bút Võ Phiến là sự hiện diện trở lại của một trong những nữ văn sĩ cự phách một thời: NGUYỄN THỊ HOÀNG. Ngày mai 25/3/2021. VÒNG TAY HỌC TRÒ chính thức phát hành. Mời bạn.”\r\n\r\nTất nhiên, tôi bấm vào xem ngay.\r\n\r\nCùng với cuốn sách “đinh” – Vòng tay học trò làm nên tên tuổi vang dội của tác giả là 4 cuốn khác, gồm: Tiếng chuông gọi người tình, Một ngày rồi thôi, Tuần trăng mật màu xanh và Cuộc tình trong ngục thất tạo thành một combo đầy đặn, chỉn chu, đẹp tinh tế từ trang bìa đến từng trang sách bên trong, do NXB Nhã Nam xuất bản.\r\n\r\nTheo Nhã Nam, để có thể tái bản bộ sách này, đặc biệt là cuốn Vòng tay học trò, phía Nhã Nam đã cùng với tác giả Nguyễn Thị Hoàng chuẩn bị bản thảo cẩn thận đến từng chi tiết, câu chữ. Mọi chỉnh sửa dù là nhỏ nhất đều được bàn bạc kỹ lưỡng trước khi đi đến bản in cuối cùng. Một số cuốn, ngay cả bản thảo gốc mà tác giả đang giữ, cũng bị thiếu trang, Nhã Nam đã phải kỳ công truy tìm nhiều bản in cũ từ những nhà sưu tầm sách hiếm, để có được bản thảo đầy đủ nhất. Đồng thời, Nhã Nam còn mời tác giả ra Hà Nội, tham gia buổi giao lưu với bạn đọc.\r\n\r\n\r\n\r\n(Nhà văn Nguyễn Thị Hoàng, ảnh: fanpage Nhã Nam)\r\n\r\nTôi có ý chờ xem các phần trích đoạn buổi giao lưu mà Nhã Nam ghi lại và ngắm thật lâu những bức ảnh chụp buổi tọa đàm. Bà Nguyễn Thị Hoàng ngồi đó – trang điểm đậm, rất điệu và đầy phong cách, tóc dài buông xõa, áo dài duyên dáng, thong thả nói về bối cảnh ra đời và sự chìm nổi, tao loạn của cuốn VÒNG TAY HỌC TRÒ đầy tai tiếng, thị phi, một thời được xếp vào loại “Dâm thư”, “Phi luân”, “Văn hóa phẩm đồi trụy” với bao nhiêu bình luận nghiệt ngã; rằng “đó là sự buôn lậu tư tưởng của một con bệnh dâm tình thành thị”; rằng “đó là sự mất thăng bằng và bệnh hoạn về nhân cách”, rằng “đó là một Francoise Segan Việt Nam, viết về sự nhầy nhụa trong tâm hồn”… và hàng ngàn, hàng vạn những tung hô xen lẫn chỉ trích, miệt thị khác.\r\n\r\nMấy năm trước tôi có đọc một bài viết khác, khá dài hơi, kể về bà. Đúng hơn, kể về một người nào đó tên là Mai Tiến Thành – hiện thân của nhân vật Trần Duy Minh và mối quan hệ của Thành với tác giả Nguyễn Thị Hoàng – hiện thân của cô giáo Quỳnh Trâm – tại trường Nam sinh Trần Hưng Đạo, Đà Lạt vào những năm 1960-1962 để minh chứng rằng tác giả viết Vòng tay học trò để tự sự câu chuyện của chính mình, cho mối tình cấm kỵ của mình và cậu học trò mình dạy. Và vì thế, bà mới bị kết một cái tội tày trời: tội “sư đồ luyến” – đặc biệt, là sự luyến ái của một cô giáo 25 tuổi đã trưởng thành, rất thành thục và “đàn bà” với một câu học trò 17 tuổi chập chững vào đời.\r\n\r\nCô giáo Quỳnh Trâm trong truyện của bà rất đẹp. Bà trong buổi giao lưu cũng thật đẹp.\r\n\r\nCô Trâm nhạy cảm, yếu đuối nh:ưng lại luôn nổi loạn. Bà kiên cường nhưng cũng rất mỏng manh.\r\n\r\nCô Trâm có một cách sống, cách ứng xử rất khác so với những người phụ nữ cùng thời. Còn bà thì sao nhỉ? Tôi tự hỏi, hơn 50 năm qua, bà đã làm gì để chống lại những búa rìu dư luận? Bà đã đi qua những gập nghềnh truông thẳm của giai đoạn ấy thế nào? Bà có hạnh phúc với tác phẩm mang lại tên tuổi cho bà, hay bà đau đớn? Có lúc nào bà hối tiếc vì đã viết Vòng tay học trò không?...\r\n\r\nBà từng trả lời với báo chí rằng “Truyện mình viết thường là truyện tình bế tắc và đi xuống. Trong đó những vai nữ bao giờ cũng khát khao đi tìm một đời sống thật của mình, nghĩa là tìm kiếm chính mình. Những nhân vật nữ lang thang bất định, và xa rời với phận sự gia đình. Chất liệu lấy từ những năm bất ổn lênh đênh trong cuộc đời đã qua của mình, đôi khi được ráp nối với những câu chuyện thời sự, cộng với một phần tưởng tượng, phóng tác, vẽ vời... rồi ráp thành truyện. Riêng về Vòng Tay Học Trò, nếu bảo đó là thực thì cũng không hẳn là thực mà bảo là không thực thì cũng chẳng phải…”\r\n\r\nBáo chí nhận xét “bà có cách làm mờ đi những dữ kiện mà người ta nói về bà”\r\n\r\nTôi lại thích sự khéo léo, tế nhị khi trả lời như thế.\r\n\r\nCho dù, bà và cô giáo Tôn Nữ Quỳnh Trâm có mang tâm tư hay dáng hình giống nhau đến đâu đi chăng nữa; cho dù đã từng có một Mai Thế Thành xuất hiện trong cuộc đời dạy học ngắn ngủi của bà, và cho dù bà thừa nhận rằng “những nhân vật cảnh huống diễn ra trong khoảng thời gian đó đều cho mình một xúc động rất lớn, rất đẹp. Câu chuyện chính trong Vòng tay học trò xảy ra dựa trên vài điều có thật…” thì cần gì phải “làm rõ” hay khẳng định cô giáo Trâm là bà, hay không phải bà. Cần gì phải chỉ ra, Minh chính là Mai Thế Thành hay là ai đó.\r\n\r\nNgần ấy năm qua rồi, bể dâu cũng lặng rồi. Tôi tin, nếu có một “Trần Duy Minh” năm xưa đã từng thốt lên rằng “Mai cô đi rồi để lại em những lo lắng không nguôi, đầu óc trống rỗng, ý nghĩ khô khan, chữ nghĩa thiếu hụt. Biết lấy gì viết để cô hiểu và tin em yêu cô, yêu cuồng dại, yêu tha thiết, yêu với niềm lo sợ mất cô… Mai cô đi rồi, để lại em với bao điều hối hận dày vò, tự trách đã si mê cuồng dại, đặt tình yêu không đúng chỗ, trót đã trèo cao. Vì dù sao, dù sao cô còn trẻ đẹp quí phái biết bao người âm thầm hay bộc lộ tình cảm đối với cô… Còn em, một học trò, mà tàn ác nhất là học trò trường cô dạy, hai bàn tay trắng không biết đếm tiền, chỉ biết đánh lộn, đánh vỡ hết những gì làm mình thất vọng khổ đau, với vòng tay học trò không bao giờ ôm giữ nổi đời cô”.” thì giờ đây hẳn vô cùng bình yên, hạnh phúc khi nhìn thấy “cô Trâm” đã thực sự trở về, trong sự tôn trọng, lắng nghe, chia sẻ đúng mực của bạn đọc.', '1.jpg'),
(3, 'anhduy', 'REVIEW SÁCH\r\nReview Trên Lưng Khổng Tượng - kinh doanh online trên sàn thương mại điện tử', 'Công nghệ phát triển, cuộc sống với nhiều tiện ích, chúng ta chỉ cần ngồi ở nhà và mua bất cứ thứ gì mình cần từ trong đến ngoài nước chỉ sau một cú click chuột. Trong năm 2020 đã qua, thương mại điện tử là từ khóa được nhiều người nhắc đến khi đại dịch đã làm chúng ta buộc phải thay đổi tất cả sinh hoạt và thói quen. Sau đại dịch, chắc là sẽ có rất nhiều người muốn kinh doanh online qua mạng hay trên sàn thương mại điện tử như: Tiki, Shopee và Lazada. Tuy nhiên, đây là một sân chơi lớn, muốn tồn tại và phát triển đòi hỏi người tham gia phải nắm rõ luật chơi. </br>\r\nCuốn sách này được tác giả Trần Thanh Phong (tác giả của sách “Khởi Nghiệp Bán Lẻ”) viết lại theo hướng “cầm tay chỉ việc” dựa trên những bài học mà anh đúc kết được từ trải nghiệm của chính mình. Lộ trình của sách đi từ bước căn bản cho đến nâng cao phù hợp với nhiều đối tượng độc giả quan tâm tới việc bán hàng online trên sàn thương mại điện tử. Không chỉ chứa đựng kiến thức kinh doanh mang đầy tính thực tế của thị trường Việt Nam, tác phẩm còn được tác giả lồng ghép một câu chuyện thần thoại xuyên suốt, hứa hẹn mang tới nhiều điều thú vị cho bạn đọc.\r\n\r\n', 'tren-lung-khong-tuong-12.jpg'),
(4, 'thanhlong1212', 'Review sách Bạn đang nghịch gì với đời mình?', 'Đọc một cuốn sách hay là dịp để nhìn lại cuộc sống, nhìn sâu vào trong bản thân và ngẫm ra ý nghĩa thật sự của hiểu về chính mình và thế giới này. Hãy tìm những câu trả lời đó qua cuốn sách “Bạn đang nghịch gì với đời mình?” của nhà hiền triết J. Krishnamurti. </br>\r\n\r\nREVIEW SÁCH\r\nReview sách Bạn đang nghịch gì với đời mình?\r\nĐọc một cuốn sách hay là dịp để nhìn lại cuộc sống, nhìn sâu vào trong bản thân và ngẫm ra ý nghĩa thật sự của hiểu về chính mình và thế giới này. Hãy tìm những câu trả lời đó qua cuốn sách “Bạn đang nghịch gì với đời mình?” của nhà hiền triết J. Krishnamurti.\r\n\r\nReview sách Bạn đang nghịch gì với đời mình?\r\n\r\nMua tại Tiki Mua tại Fahasa Mua tại Shopee\r\n\r\nGiới thiệu về tác giả\r\nJiddu Krishnamurti hay J. Krishnamurti (12 tháng 5 1895 – 17 tháng 2 năm 1986) là một nhà triết gia và diễn thuyết nổi tiếng về các vấn đề triết học và tinh thần, các chủ đề bao gồm: mục đích của thiền định, mối quan hệ giữa con người và phương cách để tạo nên sự thay đổi tích cực cho xã hội.\r\n\r\nJ. Krishnamurti, được sinh ra trong một gia đình thuộc tầng lớp Brahmin tại Ấn Độ, nhưng Krishnamurti khẳng định mình không thuộc bất cứ quốc tịch, tầng lớp, tôn giáo hay trường phái triết học nào. Ông dành suốt quãng đời còn lại của mình đi khắp thế giới như một nhà diễn thuyết độc lập.\r\n\r\n\r\n \r\nJ. Krishnamurti không lệ thuộc vào bất cứ tôn giáo, giáo phái hay quốc gia nào. Ông cũng không tán thành bất kỳ trường phái tư tưởng thuộc học thuyết hay chính trị nào. Trái lại, ông quả quyết rằng những trường phái này chính là yếu tố phân chia con người với con người và tạo ra xung đột cũng như chiến tranh. Lời dạy của ông vượt trên mọi biên giới, ranh giới do con người tạo ra. </br>\r\nSự sống vô tận chỉ khi con người không bị giới hạn bởi cái tôi và của tôi. Chúng ta vẫn hay tìm kiếm, vẫn hay xem những suy ngẫm về tiền bạc, địa vị, … là kết quả của một cuộc đời viên mãn. Nhưng ý nghĩa cuộc sống lạ thay, chẳng nằm ở một kết quả của cuộc hành trình hay theo đuổi nào cả, nó vẫn luôn ở đó. Mãi chạy theo những giá trị vô nghĩa, con người dễ đánh mất chính mình, lẩn tránh cuộc sống bằng cách tìm kiếm điều gì đó để tôn thờ. Sau cùng chúng ta lại trở thành nô lệ cho bất cứ điều gì mà ta đang sở hữu, đang theo đuổi. Những điều đó chỉ khiến tâm trí thêm sợ hãi, lo âu tột độ, chính sự hiểu biết về chính mình mới ươm mầm cho cuộc sống phát triển theo một cách đúng nghĩa. Tâm trí tự do khi nó không bị ràng buộc bởi bất cứ điều gì. Thoát khỏi cái tôi để giải phóng tâm trí của bạn, thoát khỏi những tiếng nói ồn ào hạn chế sự hiện hữu thật sự của bạn.', 'sach-ban-dang-nghich-gi-voi-doi-minh-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `matg` int(10) NOT NULL,
  `tentacgia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`matg`, `tentacgia`) VALUES
(1, 'J.K.Rowling'),
(2, 'J.R.R.Tolkien'),
(3, 'Peter Baines'),
(4, 'Dag H. Hanssen'),
(5, 'Nicholas C. Zakas'),
(6, 'Gosho Aoyama'),
(7, 'Nguyễn Nhật Ánh'),
(8, 'Nguyễn Minh Châu'),
(9, 'Vũ Trọng Phụng'),
(10, 'Nguyễn Du'),
(11, 'NXB Thanh Niên'),
(12, 'Stephen King'),
(13, 'Fujiko F Fujio'),
(14, 'Authur Conan Doyle'),
(15, 'Cảnh Thiên'),
(16, 'Thomas Harris');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `matl` int(12) NOT NULL,
  `tentheloai` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`matl`, `tentheloai`) VALUES
(1, 'Hư cấu kỳ ảo'),
(2, 'Kỳ ảo Phiêu lưu'),
(3, 'Khoa học'),
(4, 'Phong Cách Sống'),
(5, 'Truyện tranh'),
(6, 'Tiểu thuyết');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `fk_masach_book_binhluan` (`masach`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`masach`),
  ADD KEY `fk_matg_book_tacgia` (`matg`),
  ADD KEY `fk_matl_book_theloai` (`matl`),
  ADD KEY `fk_manxb_book_nhaxuatban` (`manxb`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`masach`) USING BTREE,
  ADD KEY `fk_masach_ctmuon_muontra` (`masach`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mshd`),
  ADD KEY `fk_makh_hoadon_khachhang` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `user_unique` (`user`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`manxb`);

--
-- Indexes for table `reset_pass`
--
ALTER TABLE `reset_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewsach`
--
ALTER TABLE `reviewsach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`matg`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `masach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mshd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `manxb` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reset_pass`
--
ALTER TABLE `reset_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviewsach`
--
ALTER TABLE `reviewsach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `matg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `matl` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_masach_book_binhluan` FOREIGN KEY (`masach`) REFERENCES `book` (`masach`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_manxb_book_nhaxuatban` FOREIGN KEY (`manxb`) REFERENCES `nhaxuatban` (`manxb`),
  ADD CONSTRAINT `fk_matg_book_tacgia` FOREIGN KEY (`matg`) REFERENCES `tacgia` (`matg`),
  ADD CONSTRAINT `fk_matl_book_theloai` FOREIGN KEY (`matl`) REFERENCES `theloai` (`matl`);

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `fk_masach_ctmuon_muontra` FOREIGN KEY (`masach`) REFERENCES `book` (`masach`),
  ADD CONSTRAINT `fk_mshd_cthoadon_hoadon` FOREIGN KEY (`masohd`) REFERENCES `hoadon` (`mshd`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_makh_hoadon_khachhang` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
