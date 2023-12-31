-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `thutu`) VALUES
(6, 'Laptop', 1),
(7, 'Speakers', 2),
(8, 'Mouse', 3),
(9, 'Keyboard', 4),
(10, 'Headphone', 5),
(11, 'Màn Hình', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(4, 'Bàn phím Logitech G213 RGB', '1', '990.000đ', 10, '1700216379_Keyboard 1.png', 'Bàn phím', 'Bàn phím ', 1, 9),
(5, 'Tai nghe Logitech G Pro Gen 2', '2', '1.690.000đ', 5, '1700216398_Headphone 1.png', 'Tai nghe', 'Tai nghe', 1, 10),
(6, 'Chuột Corsair M55 RGB Pro White', '3', '790.000đ', 10, '1700216417_Mouse 1.png', 'Chuột ', 'Chuột', 1, 8),
(7, 'Laptop Acer Predator Helios 300 PH315 55', '4', '30.990.000đ', 2, '1700541083_Laptop 1.png', 'Laptop cân mọi loại game', 'cực xịn', 1, 6),
(8, 'Màn hình LG 22MP410-B 22\" 75Hz FreeSync', '5', '2.050.000đ', 10, '1700651063_Màn hình 1.png', 'Màn hình này rất xịn', 'Mô tả sản phẩm', 1, 11),
(9, 'Bàn phím cơ DareU EK1280x Black Grey Optical switch', '6', '799.000đ', 5, '1700651745_Keyboard 2.png', 'Bàn phím rất xịn', 'ẤCCSACA', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `customer_name`, `email`, `diachi`, `matkhau`, `phone_number`) VALUES
(1, 'Nguyễn Văn A', 'avannguyen462@gmail.com', 'Nhà Trắng, Washington DC', '781e5e245d69b566979b86e28d23f2c7', '987654321'),
(2, 'Nguyễn Công Khanh', 'rulu498@gmail.com', 'Nhà Trắng, Washington DC', 'c936ca6b996c20201131d4e3d7e3799f', '0833986286'),
(6, 'Nguyễn Thi Minh Khai', 'maikhinh@gmail.com', '696 Mai Khinh, quận Hai Bà Trưng, Hà Ngoại', '7812ba9f66c2734929a39cbf0e1fb44a', '0969696969'),
(7, 'Lê Văn Lương ', 'luongle@gmail.com', 'Việt Nam', '781e5e245d69b566979b86e28d23f2c7', '0923424321'),
(10, 'Nguyễn Văn C', 'VanC@gmail.com', '378 Cầu Giấy', '88cf993d21fd1b7f3a81a495d82c2b12', '0956225132'),
(12, 'Nguyễn Văn B', 'VanB@gmail.com', '378 Cầu Giấy', '88cf993d21fd1b7f3a81a495d82c2b12', '0956225131');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
