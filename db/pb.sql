-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2023 at 08:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pb`
--

-- --------------------------------------------------------

--
-- Table structure for table `our_packaging`
--

DROP TABLE IF EXISTS `our_packaging`;
CREATE TABLE IF NOT EXISTS `our_packaging` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `title` text NOT NULL,
  `para` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `our_packaging`
--

INSERT INTO `our_packaging` (`slide_id`, `slide_name`, `slide_image`, `title`, `para`) VALUES
(1, 'slider number 1', 'slider_1.jpg', 'Burpose-black-Ethiopia', 'new'),
(2, 'slider number 2', 'slider_2.jpg', 'Burpose-black-Ethiopia', 'new'),
(3, 'slider number 3', 'slider_3.jpg', 'Burpose-black-Ethiopia', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_cat_id` int(10) NOT NULL,
  `product_weight` varchar(10) NOT NULL,
  `product_unit` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `product_weight`, `product_unit`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`) VALUES
(1, 4, 'standard ', '/KG', '2023-04-12 14:00:07', 'BANANA', 'photo_14_2023-04-05_09-29-36.jpg', 'photo_12_2023-04-05_09-29-36.jpg', 'photo_4_2023-04-05_09-29-36.jpg', 0, '<p align=\"center\">BANANAS are a fruits that grow on trees and they are typically yellow in color when rape, but can also be green or brown .banana is a good source of potassium, vitamin C.</p>\r\n<p align=\"center\">KEGEBEREW farmers and growers with whom we have partnered to supply our customers.</p>\r\n<p align=\"center\">We deliver fresh Green Cavendish banana, whether by air or ocean freight,</p>\r\n<p align=\"center\">Recommended storage &amp; transport in good temperature</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GROWER:- ETHIOPIA.</p>'),
(2, 4, '5', '/KG', '2023-04-12 14:03:29', 'AVOCADO', 'photo_10_2023-04-05_09-29-36.jpg', 'photo_13_2023-04-05_09-29-36.jpg', 'photo_3_2023-04-03_12-04-03.jpg', 0, '<p>Avocado is a fruit that grow in Ethiopia. It is rich in healthy fats, fiber, vitamins and minerals. KEGEBEREW has a network farmers and growers with whom we have partnered to supply customers in all markets, year round.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We deliver fresh Green HASS avocado, whether by air or ocean freight,</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recommended storage &amp; transport temperature: 5 &deg;C for Hass,&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;GROWER:- ETHIOPIA.</p>'),
(3, 4, 'standard ', '/KG', '2023-04-12 14:07:10', 'PAPAYA', 'photo_5_2023-04-05_09-29-36.jpg', 'photo_8_2023-04-05_09-29-36.jpg', 'photo_3_2023-04-05_09-29-36.jpg', 0, '<p>Papaya are a fruits that grow on trees and they are typically yellow in color when rape, but can also be green.</p>\r\n<p>KEGEBEREW farmers and growers with whom we have partnered to supply our customers.</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;We deliver fresh Green Papaya, whether by air or ocean freight,</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recommended storage &amp; transport in good temperature</p>\r\n<p>&nbsp;&nbsp;&nbsp; GROWER:- ETHIOPIA.</p>'),
(4, 4, 'standard ', '/KG', '2023-04-12 14:12:35', 'WATERMELON', 'photo_11_2023-04-05_09-29-36.jpg', 'photo_7_2023-04-05_09-29-36.jpg', 'watermelon-164700207416x9.avif', 0, '<p>THE outsides of a watermelon is solid green, ranging from light, sometimes called rattlesnakes, have &ldquo;snakeskin&rdquo; green and light-green stripes. As for the insides, red&rsquo;s the most common color, it also have a sweet test.</p>\r\n<p>KEGEBEREW farmers and growers with whom we have partnered to supply our customers.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We deliver fresh green and light-green stripes, whether by air or ocean freight,</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Recommended storage &amp; transport in good temperature</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GROWER:- ETHIOPIA. &nbsp; &nbsp;</p>'),
(5, 4, 'standard ', '/KG', '2023-04-12 14:17:39', 'MANGO ', 'photo_1_2023-04-05_09-29-36.jpg', 'Mango.jpg', 'photo_9_2023-04-05_09-29-36.jpg', 0, '<p>The outsides of a mango is solid green, for the insides deep yellow with heavy red blush, the smooth skin is tough and thick. The flesh is firm and medium juicy with a moderate amount of fiber, yellow to deep yellow in color, mild and sweet with a strong pleasant aroma.</p>\r\n<p>KEGEBEREW farmers and growers with whom we have partnered to supply our customers.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We deliver fresh solid Green, whether by air or ocean freight,</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Recommended storage &amp; transport in good temperature</p>\r\n<p>&nbsp;&nbsp; GROWER:- ETHIOPIA.</p>'),
(6, 5, 'standard ', '/KG', '2023-04-12 14:37:29', 'BESSO ', 'beso.png', '176-1766264_what-is-tigernut-flour-flour-fino-hd-png.png', 'images.jpeg', 0, '<p>lightly roasted whole grain barley</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Pure Ethiopian BESSO</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FDA approve</p>'),
(7, 5, 'standard ', '/KG', '2023-04-12 14:39:57', 'MITMITA', 'mitmita.png', 'images (1).jpeg', 'download (2).jpeg', 0, '<p>Ingredient</p>\r\n<p>&nbsp; Coriander, fenugreek seed, claves, cinnamon, cumin and salt</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Pure Ethiopian MITMITA</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;FDA approve&nbsp;</p>'),
(8, 5, 'standard ', '/ml', '2023-04-12 14:45:36', 'AWAZE', 'awaze.jpg', 'images (2).jpeg', 'ethiopian-spices-red-awaze-with-berbere-and-mitmita-hot-peppers-free-photo.jpg', 0, '<p>Ingredient</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Bazile, garlic, ginger, red onions, ruta chalepensis, fenugreek seed, Coriander, black &amp;white cumin, cinnamon, claves, thyme, Salt, cardamom and rosemary &nbsp;&nbsp;</p>\r\n<p>FDA approve&nbsp;</p>'),
(9, 5, 'standard ', '/KG', '2023-04-12 14:50:47', 'BREAD FLOUR ', 'yedabo duket.png', 'images (3).jpeg', 'sigem-nai-geaat-300x300.jpg', 0, '<p><strong>Ingredient</strong></p>\r\n<p>&nbsp; &nbsp; Barley, sorghum oats, dark teff, salt and fenugreek</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pure Ethiopian bread flour</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>FDA approve</strong></p>'),
(10, 5, 'standard ', '/KG', '2023-04-12 14:55:58', 'BERBERE ', 'berbere.png', 'IMG_5644-1-480x270.webp', 's-l500.jpg', 0, '<p class=\"MsoNormal\"><span style=\"mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><strong>Ingredient</strong> </span></p>\r\n<p class=\"MsoNormal\"><span style=\"mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-spacerun: yes;\">&nbsp; &nbsp; &nbsp; </span>Bazile, garlic, ginger, red onions, ruta chalepensis, fenugreek seed,</span>Coriander, black cumin, cinnamon, claves, thyme,Salt, cardamom and rosemary&nbsp;&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-tab-count: 1;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"mso-spacerun: yes;\">&nbsp;</span>Pure Ethiopian <strong style=\"mso-bidi-font-weight: normal;\">BERBERE</strong></span></p>\r\n<p class=\"MsoNormal\"><span style=\"mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-spacerun: yes;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong> &nbsp;</strong></span><strong>FDA approve</strong></span></p>'),
(11, 5, 'standard ', '/KG', '2023-04-12 15:04:54', '  MITIN SHIRO', 'mitin shiro.png', '1_da4b07d6-4908-4cc5-8457-b5e4f525510f.webp', 'download (2).jpeg', 0, '<p><strong>Ingredient</strong></p>\r\n<p>&nbsp;Peas, chickpeas, red paper, garlic, rosemary, basil, thyme, fenugreek seed,&nbsp;Coriander, cardamom and salt.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pure Ethiopian&nbsp;MITIN SHIRO</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FDA approve</p>'),
(12, 2, 'standard ', '/ton', '2023-04-12 15:12:32', 'SOYBEAN', 'soybeans-2039638_1920.jpg', '', '', 0, ''),
(13, 2, 'standard ', '/ton', '2023-04-12 15:13:36', 'MUNGBEAN ', 'download (3).jpeg', '', '', 0, ''),
(14, 2, 'standard ', '/ton', '2023-04-12 15:15:33', 'SESAME', 'toasted-sesame-seeds-1200x900-cropped.jpg', '', '', 0, ''),
(15, 2, 'standard ', '/ton', '2023-04-12 15:16:43', 'NIGER SEED', '440px-Niger_Seed.jpg', '', '', 0, ''),
(16, 2, 'standard ', '/ton', '2023-04-12 15:17:22', 'SORGHUM', 'DSC_3217-scaled-e1604080087971.jpg', '', '', 0, ''),
(17, 3, 'standard ', '/ton', '2023-04-12 15:19:32', 'CORN', 'corn-grits.webp', '', '', 0, ''),
(18, 3, 'standard ', '/ton', '2023-04-12 15:20:58', 'WHEAT ', 'download (4).jpeg', '', '', 0, ''),
(19, 3, 'standard ', '/ton', '2023-04-12 15:22:38', 'BARELY', '60bfdc763dcc1.jpg', '', '', 0, ''),
(20, 1, 'standard ', '/ton', '2023-04-12 15:32:18', 'COFFEE ( Washed & Unwashed)', 'arabica-aaa-green-coffee-bean-250x250.webp', '', '', 0, '<p>Washed and Unwashed Guji, Yirgachefe, Limu</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; Grade - 1&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; Grade - 2&nbsp;</p>'),
(21, 1, 'standard ', '/KG', '2023-04-12 15:36:51', 'Instant Coffee', 'images (4).jpeg', '', '', 0, '<p>Roasted and packed instant Guji, Yirgachefe &amp; Limu coffee.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; Grade - 1&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; Grade - 2&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `p_cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_cat_title` text NOT NULL,
  PRIMARY KEY (`p_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`) VALUES
(1, 'Coffee'),
(2, 'Oil Seed'),
(3, 'Grains_Of_Cereals'),
(4, 'Fruits And Vegetable'),
(5, 'Agro-Process'),
(6, 'Our Packaging');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `para` varchar(255) NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `title`, `para`) VALUES
(1, 'slider number 1', 'slide_1.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(2, 'slider number 2', 'slide_2.png', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(3, 'slider number 3', 'slide_3.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.');

-- --------------------------------------------------------

--
-- Table structure for table `slider_ap`
--

DROP TABLE IF EXISTS `slider_ap`;
CREATE TABLE IF NOT EXISTS `slider_ap` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `title` text NOT NULL,
  `para` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_ap`
--

INSERT INTO `slider_ap` (`slide_id`, `slide_name`, `slide_image`, `title`, `para`) VALUES
(1, 'slider number 1', 'agro_1.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(2, 'slider number 2', 'agro_2.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(3, 'slider number 3', 'agro_3.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.');

-- --------------------------------------------------------

--
-- Table structure for table `slider_co`
--

DROP TABLE IF EXISTS `slider_co`;
CREATE TABLE IF NOT EXISTS `slider_co` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `title` text NOT NULL,
  `para` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_co`
--

INSERT INTO `slider_co` (`slide_id`, `slide_name`, `slide_image`, `title`, `para`) VALUES
(1, 'slider number 1', 'c_1.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(2, 'slider number 2', 'c_2.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(3, 'slider number 3', 'c_3.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.');

-- --------------------------------------------------------

--
-- Table structure for table `slider_fv`
--

DROP TABLE IF EXISTS `slider_fv`;
CREATE TABLE IF NOT EXISTS `slider_fv` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `title` text NOT NULL,
  `para` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_fv`
--

INSERT INTO `slider_fv` (`slide_id`, `slide_name`, `slide_image`, `title`, `para`) VALUES
(1, 'slider number 1', 'fv_1.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(2, 'slider number 2', 'fv_2.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(3, 'slider number 3', 'fv_3.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.');

-- --------------------------------------------------------

--
-- Table structure for table `slider_gfc`
--

DROP TABLE IF EXISTS `slider_gfc`;
CREATE TABLE IF NOT EXISTS `slider_gfc` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `title` text NOT NULL,
  `para` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_gfc`
--

INSERT INTO `slider_gfc` (`slide_id`, `slide_name`, `slide_image`, `title`, `para`) VALUES
(1, 'slider number 1', 'gfc_1.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(2, 'slider number 2', 'gfc_2.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.'),
(3, 'slider number 3', 'gfc_3.jpg', 'Welcome to Purpose Black Ethiopia', 'Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin...Lorem ipsum dolor sit amet consectetur, adipisicin.');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail`
--

DROP TABLE IF EXISTS `thumbnail`;
CREATE TABLE IF NOT EXISTS `thumbnail` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_title` varchar(100) NOT NULL,
  `t_cat_id` int(100) NOT NULL,
  `t_img` text NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thumbnail`
--

INSERT INTO `thumbnail` (`t_id`, `t_title`, `t_cat_id`, `t_img`) VALUES
(1, 'Fruits ( Fresh & Organic)', 4, 'logaster-2019-02-0112-t-fruits-logo-2.jpg'),
(2, 'Cereals & Oilseed ', 3, 'food-grains1.jpg'),
(3, 'Ethiopian Spices', 5, 'photo_2023-04-10_14-14-28.jpg'),
(4, 'Coffee Raw And Instant', 1, 'image-1.jpg'),
(5, 'packaging', 6, 'all in one.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
