-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 10:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Electronics'),
(3, 'Office Appliance '),
(4, 'Home Appliance'),
(5, 'Men\'s'),
(6, 'Ladies\'s'),
(7, 'Vehicles'),
(8, 'Food'),
(10, 'Toys'),
(11, 'Others'),
(12, 'keys');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_currency`, `order_status`) VALUES
(58, 72999, 'as56sanjhsa787', 'USD', 'Completed'),
(59, 72999, 'as56sanjhsa787', 'USD', 'Completed'),
(60, 72999, 'as56sanjhsa787', 'USD', 'Completed'),
(61, 567, 'cfsvgh', 'BDT', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_short_description`, `product_description`, `product_image`) VALUES
(31, 'Canon DSLR', 2, 21000, 4, 'Canon DSLR D1200 Brand NEW', 'Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! Canon D1200 DSLR is up for sale! ', '9.png'),
(32, 'Drone Propeller', 2, 165, 20, 'Drone Propeller (2 pairs)', 'Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. Drone Propeller (2 pairs). with opposite direction pairs. ', '2.png'),
(34, 'CSE Hoodie', 5, 650, 10, 'CSE Hoodie All Sizes Available.', 'CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. CSE Hoodie All Sizes Available ishpeshal item. ', '1.png'),
(35, 'Goodluck Folder', 3, 70, 20, 'Goodluck Plastic Folder for documents.', 'Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design Goodluck Folder for documents. Clean design ', '3.png'),
(36, 'RFL Kitchen Rake', 4, 350, 5, 'RFL Kitchen Rake with free RFL Bowl', 'RFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL BowlRFL Kitchen Rake with free RFL Bowl', '4.png'),
(37, 'TP Link Router', 2, 2300, 3, 'TP Link Wifi Router 320 Mbps.', 'TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.TP Link Wifi Router 320 mbps.', '7.png'),
(38, 'mi TV', 2, 7500, 5, 'Xiaomi mi TV box.', 'Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi<br><br> TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box Xiaomi mi TV box ', '8.png'),
(39, 'Redo Watch', 5, 19000, 2, 'Original Redo Casual Watch', 'Original Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual WatchOriginal Redo Casual Watch', '5.png'),
(40, 'à¦ªà¦¾à¦–à¦¿ à¦¡à§à¦°à§‡à¦¸', 6, 150, 40, 'Pakhi Dress for Serial Addicts', 'Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts Pakhi Dress for Serial Addicts ', '6.png'),
(41, 'Bajaj CNG', 7, 650000, 10, 'Bajaj CNG Auto Rickshaw', 'Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India Bajaj CNG Auto Rickshaw Uttara Motors, India ', '10.png'),
(42, 'Old Coins', 11, 250000, 1, 'A collection of Old Coins', 'A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! A collection, since 1969, of Old Coins is up for sale! ', '11.png'),
(44, 'Chicken Curry Can', 8, 150, 10, 'Chicken Curry Can Home Made', 'Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. \\r\\n\\r\\nChicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. Chicken Curry Can Home Made. 90% ready. ', '12.png');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_title`, `product_price`, `product_quantity`) VALUES
(39, 32, 58, 'Drone Propeller', 165, 1),
(40, 31, 59, 'Canon DSLR', 21000, 1),
(41, 41, 60, 'Bajaj CNG', 650000, 1),
(42, 34, 61, 'CSE Hoodie', 650, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(56) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `username`, `user_password`, `user_email`) VALUES
(1, 'Sourov Mohiuddin', 'smohi', 'great', 'w82.smohi@gmail.com'),
(3, 'Admin', 'admin', 'admin', 'info@mueshop.com'),
(12, 'Demo user', 'user', '12345', 'demo.user@email.com'),
(13, 'suah adyas h', 'mizan', '1234', 'hjbay@fvsbg.df');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
