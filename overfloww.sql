-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2024 at 12:38 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overfloww`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'cakes'),
(2, 'bakery'),
(3, 'cafe');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `type_name` int(11) NOT NULL,
  `varieties` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price1` varchar(255) DEFAULT NULL,
  `price2` varchar(255) DEFAULT NULL,
  `bestselling` tinyint(1) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `type_name`, `varieties`, `image`, `price1`, `price2`, `bestselling`, `status`) VALUES
(1, 1, 1, 'German Chocolate', '1.png', NULL, '1799.00', 1, 1),
(2, 1, 1, 'Chocolate Orange', '2.png', '950.00', '1799.00', 1, 1),
(3, 1, 1, 'Tres Leches', '3.png', '1150.00', '2199.00', 0, 0),
(4, 1, 1, 'Humming Bird Cake', '4.png', '0.00', '1500.00', 0, 0),
(5, 1, 1, 'Apricot Pisthachio', '5.png', '1300.00', '2499.00', 0, 0),
(6, 1, 1, 'Sacher', '6.png', '1100.00', '2099.00', 1, 1),
(7, 1, 1, 'Medovik', '7.png', '1150.00', '2199.00', 0, 0),
(8, 1, 1, 'Opera', '8.png', '1230.00', '2349.00', 0, 0),
(9, 1, 1, 'Belgium Rich Chocolate', '9.png', '1050.00', '1999.00', 0, 1),
(10, 1, 1, 'Lotus Biscoff', '10.png', '1230.00', '2349.00', 0, 0),
(11, 1, 1, 'Chocolate Berry', '11.png', '1100.00', '2099.00', 0, 0),
(12, 1, 1, 'Newyork Cheese Cake', '12.png', '1150.00', '2199.00', 0, 0),
(13, 1, 2, 'Heavenly Chocolate', '13.png', '520.00', '999.00', 1, 1),
(14, 1, 2, 'Blueberry Burst', '14.png', '520.00', '999.00', 0, 1),
(15, 1, 2, 'Caramel Delight', '15.png', '570.00', '1099.00', 0, 1),
(16, 1, 2, 'White choco with Blueberry', '16.png', '570.00', '1099.00', 0, 0),
(17, 1, 2, 'Redvelvet', '17.png', '570.00', '1099.00', 0, 0),
(18, 1, 2, 'Irish Coffee', '18.png', '620.00', '1199.00', 0, 0),
(19, 1, 2, 'Brownie Delight', '19.png', '650.00', '1249.00', 0, 0),
(20, 1, 2, 'Raspberry Fantasy', '20.png', '680.00', '1299.00', 0, 0),
(21, 1, 2, 'Creamy Cheese Cake', '21.png', '680.00', '1299.00', 0, 0),
(22, 1, 2, 'Rasberry Pistachio', '22.png', '780.00', '1499.00', 0, 0),
(23, 1, 3, 'Black Forest', '23.png', '370.00', '699.00', 0, 0),
(24, 1, 3, 'White Forest', '24.png', '405.00', '749.00', 0, 0),
(25, 1, 3, 'Crunchy Butterscotch', '25.png', '455.00', '849.00', 0, 0),
(26, 1, 3, 'Pineapple Delight', '26.png', '455.00', '849.00', 0, 1),
(27, 1, 3, 'Choco truffle', '27.png', '455.00', '849.00', 0, 0),
(28, 1, 3, 'Mango Bliss', '28.png', '480.00', '899.00', 0, 1),
(29, 1, 3, 'Charmy Black Currant', '29.png', '480.00', '899.00', 0, 1),
(30, 1, 3, 'Strawberry Delight', '30.png', '480.00', '899.00', 0, 1),
(31, 1, 3, 'Licious Lychee', '31.png', '455.00', '849.00', 0, 1),
(32, 1, 3, 'Rainbow', '32.png', '520.00', '999.00', 0, 0),
(33, 1, 4, 'Chocolate', '33.png', '405.00', '749.00', 0, 0),
(34, 1, 4, 'butter scotch', '34.png', '405.00', '749.00', 0, 1),
(35, 1, 4, 'Coffee', '35.png', '405.00', '749.00', 0, 0),
(36, 1, 4, 'Pista', '36.png', '455.00', '849.00', 0, 0),
(37, 1, 5, 'Chocolate', '37.png', '405.00', '749.00', 0, 0),
(38, 1, 5, 'butter scotch', '38.png', '405.00', '749.00', 0, 0),
(39, 1, 5, 'Coffee', '39.png', '405.00', '749.00', 0, 0),
(40, 1, 5, 'Pista', '40.png', '455.00', '849.00', 0, 0),
(41, 1, 5, 'Almond', '41.png', '455.00', '849.00', 0, 0),
(42, 1, 6, 'Tres Leches', '42.png', '180.00', NULL, 0, 0),
(43, 1, 6, 'Lotus Biscoff', '43.png', '200.00', NULL, 0, 0),
(44, 1, 6, 'Tiramisu', '44.png', '150.00', NULL, 0, 0),
(45, 1, 6, 'Pisthactho', '45.png', '180.00', NULL, 0, 0),
(46, 1, 6, 'Red Velvet Jar cake', '46.png', '130.00', NULL, 0, 0),
(47, 1, 6, 'Brownie Jar Cake', '47.png', '120.00', NULL, 0, 0),
(48, 1, 6, 'Mousse', '48.png', '90.00', NULL, 0, 0),
(49, 1, 6, 'Tart', '49.png', '60.00', NULL, 0, 0),
(50, 1, 6, 'Long Tart', '50.png', '70.00', NULL, 0, 0),
(51, 1, 6, 'Eclair', '51.png', '60.00', NULL, 0, 0),
(52, 1, 6, 'Newyork Cheese Cake', '52.png', '180.00', NULL, 0, 0),
(53, 1, 6, 'Choco Brownie', '53.png', '95.00', NULL, 0, 0),
(54, 1, 7, 'Russian Honey Cake', '54.png', '180.00', NULL, 0, 0),
(55, 1, 7, 'Opera', '55.png', '180.00', NULL, 0, 0),
(56, 1, 7, 'Chocolate Orange', '56.png', '170.00', NULL, 0, 0),
(57, 1, 7, 'Belgium Chocolate', '57.png', '150.00', NULL, 0, 0),
(58, 1, 7, 'Irish Coffee', '58.png', '90.00', NULL, 0, 0),
(59, 1, 7, 'Caramel Delight', '59.png', '80.00', NULL, 0, 0),
(60, 1, 7, 'Blueberry Burst', '60.png', '70.00', NULL, 0, 0),
(61, 1, 7, 'Pineapple Delight', '61.png', '65.00', NULL, 0, 0),
(62, 1, 7, 'Strawberry Delight', '62.png', '65.00', NULL, 0, 0),
(63, 1, 7, 'Red Velvet', '63.png', '70.00', '', 0, 1),
(64, 1, 7, 'Rainbow', '64.png', '80.00', NULL, 0, 0),
(65, 1, 7, 'White Forest', '65.png', '60.00', '', 0, 1),
(66, 1, 7, 'Black Forest', '66.png', '55.00', '', 0, 1),
(67, 1, 7, 'Mango Bliss', '67.png', '65.00', NULL, 0, 0),
(68, 2, 8, 'Veg Puff', '68.png', '25.00', NULL, 1, 1),
(69, 2, 8, 'Paneer Puff', '69.png', '30.00', NULL, 1, 1),
(70, 2, 8, 'Mushroom Puff', '70.png', '30.00', NULL, 1, 1),
(71, 2, 8, 'Paneer Softy Roll', '71.png', '35.00', NULL, 0, 0),
(72, 2, 8, 'Mushroom Softy Roll', '72.png', '35.00', NULL, 0, 0),
(73, 2, 8, 'Stuffed Doughnut', '73.png', '40.00', NULL, 0, 0),
(74, 2, 8, 'Milk Rusk', '74.png', '40.00', '', 0, 1),
(75, 2, 8, 'ooty Variki', '75.png', '50.00', NULL, 0, 0),
(76, 2, 8, 'Bun butter jam', '76.png', '30.00', '', 0, 1),
(77, 2, 8, 'jam bun', '77.png', '20.00', '', 0, 1),
(78, 2, 8, 'cream bun', '78.png', '20.00', '', 0, 1),
(79, 2, 8, 'mini doughnut', '79.png', '45.00', NULL, 0, 0),
(80, 2, 8, 'vanilla muffin', '80.png', '40.00', NULL, 0, 0),
(81, 2, 8, 'chocolate muffin', '81.png', '40.00', NULL, 0, 0),
(82, 2, 8, 'wheat rusk', '82.png', '40.00', NULL, 0, 0),
(83, 2, 8, 'coconut bun', '83.png', '60.00', NULL, 0, 0),
(84, 2, 25, 'Butter salt cookies', '84.png', '70.00', NULL, 0, 0),
(85, 2, 25, 'Ghee Cookies', '85.png', '100.00', NULL, 0, 0),
(86, 2, 25, 'Choco vanilla cookies', '86.png', '70.00', '', 0, 1),
(87, 2, 25, 'ragi cookies', '87.png', '80.00', '', 0, 1),
(88, 2, 25, 'ragi peanut cookies', '88.png', '100.00', NULL, 0, 0),
(89, 2, 25, 'karachi cookies', '89.png', '100.00', NULL, 0, 0),
(90, 2, 25, 'oats cookies', '90.png', '120.00', NULL, 0, 0),
(91, 2, 25, 'red velvet cookies', '91.png', '120.00', NULL, 0, 0),
(92, 2, 25, 'coconut crunch cookies', '92.png', '70.00', NULL, 0, 0),
(93, 2, 25, 'butter sweet cookies', '93.png', '70.00', NULL, 0, 0),
(94, 3, 9, 'French Fries', '94.png', '100.00', '', 0, 1),
(95, 3, 9, 'peri peri Fries', '95.png', '120.00', '', 0, 1),
(96, 3, 9, 'Cheese Fries', '96.png', '150.00', '', 0, 1),
(97, 3, 9, 'Veg Nuggets', '97.png', '90.00', NULL, 0, 1),
(98, 3, 9, 'Veg Fingers', '98.png', '120.00', '', 0, 1),
(99, 3, 9, 'Paneer Strips', '99.png', '150.00', '', 0, 1),
(100, 3, 10, 'Chicken Nuggets', '100.png', '130.00', NULL, 1, 1),
(101, 3, 10, 'Chicken Cheese Balls', '101.png', '150.00', NULL, 0, 0),
(102, 3, 10, 'Dragon Devil\'s Fowl', '102.png', '190.00', NULL, 0, 0),
(103, 3, 10, 'Honey Garlic Chicken', '103.png', '200.00', NULL, 0, 0),
(104, 3, 11, 'Spicy veg wrap', '104.png', '110.00', NULL, 0, 0),
(105, 3, 11, 'Paneer Wrap', '105.png', '130.00', '', 0, 1),
(106, 3, 11, 'Mushroom Wrap', '106.png', '120.00', NULL, 0, 0),
(107, 3, 11, 'Veg Patty Wrap', '107.png', '130.00', NULL, 0, 0),
(108, 3, 12, 'Egg Wrap', '108.png', '130.00', NULL, 0, 0),
(109, 3, 12, 'Chicken Wrap', '109.png', '150.00', NULL, 0, 0),
(110, 3, 12, 'Zinger Chicken Wrap', '110.png', '160.00', NULL, 0, 0),
(111, 3, 12, 'Grilled Chicken Wrap', '111.png', '160.00', NULL, 0, 0),
(112, 3, 14, 'Paneer Corn Salad', '112.png', '160.00', NULL, 0, 0),
(113, 3, 14, 'Veg Salad', '113.png', '120.00', NULL, 0, 0),
(114, 3, 15, 'Corn Salad', '114.png', '130.00', NULL, 0, 0),
(115, 3, 15, 'Mixed Chicken', '115.png', '220.00', NULL, 0, 0),
(116, 3, 15, 'Tandoori Chicken', '116.png', '200.00', NULL, 1, 1),
(117, 3, 15, 'Chicken corn Salad', '117.png', '180.00', NULL, 0, 0),
(118, 3, 16, 'Vegiee Delight', '118.png', '110.00', NULL, 0, 0),
(119, 3, 16, 'Hot&spicy Mushroom', '119.png', '130.00', NULL, 0, 0),
(120, 3, 16, 'Grilled Paneer Tikka', '120.png', '150.00', NULL, 0, 0),
(121, 3, 16, 'Cheese N Chilli', '121.png', '100.00', NULL, 0, 0),
(122, 3, 16, 'Cheesy Corn', '122.png', '120.00', NULL, 1, 1),
(123, 3, 17, 'Cremey Egg Sandwich', '123.png', '140.00', NULL, 0, 0),
(124, 3, 17, 'Spicy Chicken Sandwich', '124.png', '150.00', NULL, 0, 0),
(125, 3, 17, 'Chicken Tikka Sandwich', '125.png', '170.00', NULL, 0, 0),
(126, 3, 17, 'Zinger Chicken Sandwich', '126.png', '180.00', NULL, 0, 0),
(127, 3, 17, 'Grilled Chicken Club Sandwich', '127.png', '200.00', NULL, 0, 0),
(128, 3, 17, 'Tandoori Chicken Club Sandwich', '128.png', '210.00', NULL, 0, 0),
(129, 3, 18, 'Garlic Bread', '129.png', '100.00', NULL, 0, 0),
(130, 3, 18, 'Cheese Garlic Bread', '130.png', '130.00', NULL, 0, 0),
(131, 3, 18, 'Chilli Cheese Toasted', '131.png', '150.00', NULL, 0, 0),
(132, 3, 19, 'Brownie With Ice-Cream', '132.png', '180.00', NULL, 0, 0),
(133, 3, 19, 'Hot Brownie', '133.png', '100.00', NULL, 0, 0),
(134, 3, 19, 'Sizzling Brownie', '134.png', '190.00', NULL, 0, 0),
(135, 3, 19, 'Brownie Magic', '135.png', '180.00', NULL, 0, 0),
(136, 3, 19, 'Wicked Brownie', '136.png', '200.00', NULL, 0, 0),
(137, 3, 10, 'Green garlic cheese', '137.png', '210.00', NULL, 0, 0),
(138, 3, 20, 'Butterscotch', '138.png', '160.00', NULL, 0, 0),
(139, 3, 20, 'Chocolate', '139.png', '170.00', NULL, 0, 0),
(140, 3, 20, 'Nutella', '140.png', '190.00', NULL, 0, 0),
(141, 3, 20, 'Hazelnut', '141.png', '190.00', NULL, 0, 0),
(142, 3, 20, 'Redvelvet', '142.png', '200.00', NULL, 0, 0),
(143, 3, 21, 'Classic veg Burger', '143.png', '120.00', NULL, 0, 0),
(144, 3, 21, 'Grilled Panner Burger', '144.png', '150.00', NULL, 0, 0),
(145, 3, 21, 'Jumbo Veg Burger', '145.png', '170.00', NULL, 0, 0),
(146, 3, 22, 'Classic Chicken Burger', '146.png', '150.00', NULL, 1, 0),
(147, 3, 22, 'Zinger chicken burger', '147.png', '200.00', '', 0, 1),
(148, 3, 22, 'Mexcian Chicken', '148.png', '190.00', NULL, 0, 0),
(149, 3, 22, 'Triple Treat', '149.png', '250.00', NULL, 0, 0),
(150, 3, 23, 'Vanilla', '150.png', '110.00', NULL, 0, 0),
(151, 3, 23, 'Strawberry', '151.png', '120.00', NULL, 0, 0),
(152, 3, 23, 'Mango', '152.png', '120.00', NULL, 0, 0),
(153, 3, 23, 'Black currant', '153.png', '130.00', NULL, 0, 0),
(154, 3, 23, 'Butterscotch', '154.png', '130.00', NULL, 0, 0),
(155, 3, 23, 'Blueberry', '155.png', '140.00', NULL, 0, 0),
(156, 3, 23, 'Chocolate', '156.png', '140.00', NULL, 0, 0),
(157, 3, 23, 'oreo', '157.png', '150.00', NULL, 0, 0),
(158, 3, 23, 'kitkat', '158.png', '160.00', NULL, 0, 0),
(159, 3, 23, 'Brownie blend', '159.png', '190.00', NULL, 0, 0),
(160, 3, 23, 'Nutella', '160.png', '180.00', NULL, 0, 0),
(161, 3, 24, 'Apple', '161.png', '90.00', NULL, 0, 0),
(162, 3, 24, 'pomogrante', '162.png', '100.00', NULL, 0, 0),
(163, 3, 24, 'muskmelon', '163.png', '60.00', NULL, 0, 0),
(164, 3, 24, 'watermelon', '164.png', '50.00', NULL, 0, 0),
(165, 3, 24, 'mosambi', '165.png', '60.00', NULL, 0, 0),
(166, 3, 24, 'Rose milk', '166.png', '40.00', NULL, 0, 0),
(167, 3, 24, 'Badam milk', '167.png', '70.00', NULL, 0, 0),
(168, 2, 26, 'Milk Bread', '168.png', '35', '', 0, 1),
(169, 2, 26, 'wheat bread', '169.png', '40', '', 0, 1),
(170, 2, 26, 'fruit bread', '170.png', '40', NULL, 0, 0),
(171, 2, 8, 'egg puff', '171.png', '25', '', 1, 1),
(172, 2, 8, 'chicken puff', '172.png', '35', NULL, 0, 0),
(173, 3, 77, 'Chicken pops', '173.png', '5pcs - 150', '10pcs - 295', 0, 1),
(174, 3, 77, 'chicken strips', '174.png', '5pcs - 180', '10pcs - 350', 0, 1),
(175, 3, 77, 'crispy chicken', '175.png', '4pcs - 360', '8pcs - 709', 0, 0),
(176, 3, 77, 'drumstick', '176.png', '2pcs - 210', '4pcs - 399', 0, 0),
(177, 3, 77, 'peri peri chicken', '177.png', '2pcs - 230', NULL, 0, 0),
(178, 3, 78, 'veggie feast', '178.png', 'pan toasted - 250', 'hand crafted - 290', 0, 0),
(179, 3, 78, 'peppy paneer', '179.png', 'pan toasted - 240', 'hand crafted - 280', 0, 1),
(180, 3, 78, 'mushroom riot', '180.png', 'pan toasted - 230', 'hand crafted - 270', 0, 1),
(181, 3, 78, 'cheese N corn', '181.png', 'pan toasted - 210', 'hand crafted - 250', 0, 0),
(182, 3, 78, 'Double cheese Margherita', '182.png', 'pan toasted - 200', 'hand crafted - 240', 0, 1),
(183, 3, 13, 'arabiata pasta', '183.png', '200', '', 0, 1),
(184, 3, 13, 'Alfredo pasta', '184.png', '210', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type_name`, `category`) VALUES
(1, 'Signature cakes', 1),
(2, 'Premium Fresh Cream ', 1),
(3, 'Normal Fresh Cream', 1),
(4, 'American Butter Cream', 1),
(5, 'Classic Butter Cream', 1),
(6, 'Dessert', 1),
(7, 'Pastries', 1),
(8, 'Snack', 2),
(9, 'Veg-Starters', 3),
(10, 'Non-Veg Starters', 3),
(11, 'Veg Wrap', 3),
(12, 'Non-Veg Wrap', 3),
(13, 'Pasta', 3),
(14, 'Veg Salad', 3),
(15, 'Non-Veg Salad', 3),
(16, 'Veg Sandwich', 3),
(17, 'Non-Veg Sandwich', 3),
(18, 'Breads', 3),
(19, 'Hot-dessert', 3),
(20, 'Waffles', 3),
(21, 'Veg Burger', 3),
(22, 'Non-veg Burger', 3),
(23, 'Shakes / Thick Shakes', 3),
(24, 'Fresh Juice / Drinks', 3),
(25, 'Cookies', 2),
(26, 'bread', 2),
(77, 'fried chicken', 3),
(78, 'pizza', 3);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `testimonial` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial`, `name`) VALUES
(1, 'Overfloww did not disappoint me when I tried their 3 chicken feast pizza and cheese garlic bread. They were buttery, cheesy and delicious, topped with the right amount of spices. Can’t wait to visit again and try more from their menu.\r\n', 'Ananya'),
(2, 'Hands down the best cakes in town! Overflow has a knack for capturing our wish for the dream cake. The flavours are rich, the textures are perfect, and the presentation is unbelievable. I would highly recommend them!	', 'Deepika'),
(3, 'Overfloww pastries are heavenly! Always fresh and flavourful. Their cakes and pastries are any-timer and lift our mood in an instant.', 'Akash'),
(4, 'I ordered an avenger-themed cake for my son’s 6th birthday from Overfloww and couldn’t be happier with the result. The cake looked fantastic and it tasted even better. Thank you Overfloww for making his day memorable!', 'Joshua'),
(5, 'The bookish-themed cake from Overfloww was a hit at my wife’s surprise party. Not only was it beautifully decorated, but it was also moist and flavourful. It was a perfect conversation piece for the celebration.', 'Ishwarya'),
(6, 'Overfloww never fails to amaze! I have ordered from them several times and each of their cakes is a masterpiece. The unique flavours like Humming Bird and Apricot Pistachio are divine. Affordable prices and punctual delivery make them my go-to for all cel', 'Nivetha'),
(7, 'The crispy fried chicken at Overfloww is a real treat—juicy inside, crunchy outside, and just the right amount of spices. I love how the café feels both modern and cosy, making it a great spot for both quick lunches or leisurely evening bites.', 'Ashwanth'),
(8, 'Every time I order from Overfloww, I am blown away by the quality and creativity. Their cakes not only look stunning but also taste incredibly delicious. I recently tried their new Lotus Biscoff flavour, and it was pure delight! Great value for money, and', 'Rishi'),
(9, 'I needed a special cake for my husband 50th birthday and Overfloww was the right choice. I chose their premium Irish Coffee cake and it was perfect. The flavour was tasteful, and the cake was beautifully decorated. Plus, the price was very reasonable for ', 'Indhu'),
(10, 'I always look for unique cake flavours and Overfloww delivered exactly that. Their Raspberry Fantasy is out of this world! The cake arrived exactly on time for my event. Their service and pricing are unmatched. Highly recommend!', 'Pooja');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `password`, `role_id`, `status`) VALUES
(1, 'overfloww', 'admin', '+91 89390 93259', '1a1dc91c907325c69271ddf0c944bc72', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_product_ibfk_1` (`type_name`),
  ADD KEY `tbl_cat_ibfk_1` (`category`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_name` (`type_name`),
  ADD KEY `tbl_category_ibfk_1` (`category`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `tbl_cat_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`type_name`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `tbl_category_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
