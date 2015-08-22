-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2015 at 08:19 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `refmech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `passoword` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passoword`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(80) NOT NULL,
  `imagedesc` text NOT NULL,
  `category` varchar(40) NOT NULL,
  `subcategory` varchar(40) NOT NULL,
  `deleteflag` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `imagename`, `imagedesc`, `category`, `subcategory`, `deleteflag`) VALUES
(1, 'Buildsol1.jpg', '<ul>\r\n                                <p>We offers Corbel Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability. </p></ul>', 'Corbal Anchor', 'U Anchor', 'n'),
(2, 'brickanchor.jpg', '									<p>We offers U Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Corbal Anchor', 'U Anchor', 'y'),
(3, 'insul-prod-anchor_img003-250x250 (1).jpg', '<p>We offers Refractory Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Corbal Anchor', 'U Anchors', 'y'),
(4, '703387.jpg', '<p>We offers Ceramic-Clupboard to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Ceramic Fiber Anchors', 'Ceramic-Cuplock', 'n'),
(5, 'hairpin-Anchor.jpg', '<p>We offers Hairpin Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Ceramic Fiber Anchors', 'Hairpin Anchor', 'n'),
(6, 'insul-prod-anchor_img037-250x250.jpg', '<p>We offers Stud & Twist Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Ceramic Fiber Anchors', 'Stud & Twist Washer', 'n'),
(7, 'slider2.jpg', '<p>We offers Stud Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Thermal Insulation Material', 'Burner', 'n'),
(8, 'Stainless_Steel_Pipe_Fittings.jpg', '<p>We offers Basic Fire Bricks to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Thermal Insulation Material', 'SS Pipe Fitings', 'n'),
(9, 'slider8.jpg', '<p>We offers Ceramic Blankets to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>', 'Thermal Insulation Material', 'SS Flanges', 'n'),
(10, 'spiralanchor.jpg', 'We offers U Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'Spiral Anchor', 'y'),
(11, 'yanchor.jpg', 'We offers U Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'Y Anchor', 'n'),
(12, 'brickanchor.jpg', 'We offers U Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'Brick Anchor', 'n'),
(13, 'stud&wolt.jpg', 'We offers Stud & Twist Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Ceramic Fiber Anchors', 'Stud & Wolt', 'n'),
(14, 'moduleanchor.jpg', 'We offers Hairpin Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Ceramic Fiber Anchors', 'Module Anchor', 'n'),
(15, 'twistwasher.jpg', 'We offers Hairpin Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Ceramic Fiber Anchors', 'Twist Washer', 'n'),
(16, 'slider4.jpg', 'We offers Basic Fire Bricks to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.\r\n', 'Thermal Insulation Material', 'Oil Pumping Unit', 'n'),
(17, 'ssgeneralfabrication.jpg', 'We offers Basic Fire Bricks to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Thermal Insulation Material', 'SS Genenal Fabrication', 'n'),
(18, 'spmmachine.jpg', 'We offers Basic Fire Bricks to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Thermal Insulation Material', 'SPM Machine', 'n'),
(19, 'insul-prod-anchor_img038-250x250.jpg', 'We offers U Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'V Anchor', 'n'),
(20, 'ceramic-clupboard anchor.jpg', 'simple text here', 'Corbal Anchor', 'V Anchor', 'y'),
(21, 'corbel-anchor-.jpg', 'We offers Stud & Twist Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'V Anchor', 'y'),
(22, 'insul-prod-anchor_img038-250x250.jpg', 'We offers Stud & Twist Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'U Anchor', 'n'),
(23, 'cuplock.jpg', 'We offers Stud & Twist Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant and durability.', 'Corbal Anchor', 'U Anchors', 'n'),
(24, 'big-image.png', 'simple text here', 'Corbal Anchor', 'xyz anchor', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(40) NOT NULL,
  `url` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `deleteflag` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `manu_name`, `url`, `status`, `deleteflag`) VALUES
(1, 'Home', 'home', 'home', 'y'),
(2, 'about', 'about', 'about', 'y'),
(3, 'products', 'products', 'products', 'y'),
(4, 'services', 'services', 'services', 'y'),
(5, 'quality policy', 'quality policy', 'quality policy', 'y'),
(6, 'contact', 'contact', 'contact', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `page_name` varchar(20) NOT NULL,
  `meta_keyword` varchar(20) NOT NULL,
  `meta_title` varchar(30) NOT NULL,
  `meta_discription` varchar(20) NOT NULL,
  `refactory_text` varchar(100) NOT NULL,
  `refactory_img` varchar(100) NOT NULL,
  `refactory_content` text NOT NULL,
  `ceremic_text` varchar(100) NOT NULL,
  `ceremic_img` varchar(100) NOT NULL,
  `ceremic_content` text NOT NULL,
  `thermal_text` varchar(100) NOT NULL,
  `thermal_img` varchar(100) NOT NULL,
  `thermal_content` text NOT NULL,
  `support_content1` text NOT NULL,
  `support_content2` text NOT NULL,
  `support_content3` text NOT NULL,
  `content` text NOT NULL,
  `content_two` text NOT NULL,
  `deleteflag` enum('y','n') NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `parent_id`, `page_name`, `meta_keyword`, `meta_title`, `meta_discription`, `refactory_text`, `refactory_img`, `refactory_content`, `ceremic_text`, `ceremic_img`, `ceremic_content`, `thermal_text`, `thermal_img`, `thermal_content`, `support_content1`, `support_content2`, `support_content3`, `content`, `content_two`, `deleteflag`) VALUES
(1, 0, 'index', 'home', 'homepage', 'home', 'Refactory', 'y -anchor.jpg', 'we are offering  Refractory Anchors. To manufacture these parts, our professionals used high grade metal and stainless steel in compliance with international standards. We offer these  Refractory Anchors in various specifications as per the needs of the clients.', 'Ceremic Fibre Anchor', 'insul-prod-anchor_img037-250x250.jpg', 'we are offering Ceremic Fibre Anchors. To manufacture these parts, our professionals used high grade metal and stainless steel in compliance with international standards. We offer these  Ceremic Fibre Anchors in various specifications as per the needs of the clients.', 'Burner ', 'slider2.jpg', 'we are offering Thermal Insulation. To manufacture these parts, our professionals used high grade metal and stainless steel in compliance with international standards. We offer these  Thermal Insulation in various specifications as per the needs of the clients.', 'Refmech Corporation gives you right-from-the-source maintenance expertise. From Gate Operators to Telephone Entry Systems, we can ensure your equipment is running at maximum efficiency.', 'Refmech Corporation gives you right-from-the-source maintenance expertise. From Gate Operators to Telephone Entry Systems, we can ensure your equipment is running at maximum efficiency.', 'Refmech Corporation gives you right-from-the-source maintenance expertise. From Gate Operators to Telephone Entry Systems, we can ensure your equipment is running at maximum efficiency.', '<div class="col-md-8 resolve-left">\r\n<h3>Our Products</h3>\r\n<div class="resolve-bottom">\r\n<div class="col-md-4 res-left">\r\n<div class="res-one">\r\n<h4>Refactory</h4>\r\n<a href="#"><img src="images/img/y -anchor.jpg" alt="image" width="196" height="103" /></a>\r\n<p style="text-align:justify;">we are offering  Refractory Anchors. To manufacture these parts, our professionals used high grade metal and stainless steel in compliance with international standards. We offer these  Refractory Anchors in various specifications as per the needs of the clients.</p>\r\n</div>\r\n</div>\r\n<div class="col-md-4 res-left">\r\n<div class="res-one">\r\n<h4>Ceremic Fibre Anchor</h4>\r\n<a href="#"><img src="images/img/ask price.jpg" alt="image" width="196" height="103" /></a>\r\n<p style="text-align:justify;">we are offering Ceremic Fibre Anchors. To manufacture these parts, our professionals used high grade metal and stainless steel in compliance with international standards. We offer these  Ceremic Fibre Anchors in various specifications as per the needs of the clients.</p>\r\n</div>\r\n</div>\r\n<div class="col-md-4 res-left">\r\n<div class="res-one">\r\n<h4>Thermal Insulation</h4>\r\n<a href="#"><img src="images/img/thermal/ceremicfibreloose.jpg" alt="image" width="196" height="103" /></a>\r\n<p style="text-align:justify;">we are offering Thermal Insulation. To manufacture these parts, our professionals used high grade metal and stainless steel in compliance with international standards. We offer these  Thermal Insulation in various specifications as per the needs of the clients.<br />\r\n&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>', '<div class="col-md-4 resolve-right">\r\n<h3>Support/Services</h3>\r\n<div class="res-two-mian">\r\n<div class="res-two">\r\n<div class="res-two-left">\r\n<p>1</p>\r\n</div>\r\n<div class="res-two-right">\r\n<p>Refmech Corporation gives you right-from-the-source maintenance expertise. From Gate Operators to Telephone Entry Systems, we can ensure your equipment is running at maximum efficiency.</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n<div class="res-two">\r\n<div class="res-two-left">\r\n<p>2</p>\r\n</div>\r\n<div class="res-two-right">\r\n<p>Refmech Corporation gives you right-from-the-source maintenance expertise. From Gate Operators to Telephone Entry Systems, we can ensure your equipment is running at maximum efficiency.</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n<div class="res-two">\r\n<div class="res-two-left res-1">\r\n<p>3</p>\r\n</div>\r\n<div class="res-two-right res-2">\r\n<p>Refmech Corporation gives you right-from-the-source maintenance expertise. From Gate Operators to Telephone Entry Systems, we can ensure your equipment is running at maximum efficiency.&nbsp;</p>\r\n<div class="r-btn"><a href="#">Read more</a></div>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', 'n'),
(17, NULL, 'about', 'about', 'about', 'about', '', '', '', '', '', '', '', '', '', '', '', '', '<div class="about-main">\r\n<h3>Know Us</h3>\r\n<div class="about-top">\r\n<div class="col-md-4 about-left"><img alt="" height="270px" src="images/furnaneabout.jpg" /></div>\r\n<div class="col-md-8 about-right">\r\n<h4>Welcome &nbsp;Engineering xyz</h4>\r\n<p>Recognized as a leader in the field of manufacturing quality products for Furnace, Circuit Plant, Refineries, and Rolling Mills, we, Refmech Engineering, have developed a strong presence in the global market. Incepted in 2004, we focus on undertaking all our processes with utmost care and precision. Known as a renowned manufacturer, exporter, supplier and trader of the industry, we have immense expertise in executing bulk orders within the given time frame. The product range offered by us includes Refractory Anchor, Modulor Anchor, Furnace Anchors, Furnace Parts, Anchor for Cold Rolling Mills, Heating Element, Latches, Thermocouple, Ceramic Thermocouple, Industrial Thermocouple, Furnace Part, etc. All these are exported to Africa, UK, US, Asian Countries, Middle East, and Latin America....</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>', '<div class="choose-main">\r\n<h3 style=" padding-left:380px;display:inline;">Why Choose Us</h3>\r\n<h3 style=" padding-right:30px;display:inline;float:right">Products We Offer</h3>\r\n<div class="choose-top">\r\n<div class="col-md-4 choose-left"><img alt="" height="230px;" src="images/refracabout.jpg" /></div>\r\n<div class="col-md-5  chooseus">\r\n<ul>\r\n    <li>Sound industry knowledge</li>\r\n    <li>Excellent manufacturing facilities</li>\r\n    <li>Team of highly qualified professionals</li>\r\n    <li>Close monitoring of all the processes</li>\r\n    <li>Premium quality at competitive rate</li>\r\n    <li>On-time delivery system</li>\r\n    <li>Wide distribution network.</li>\r\n</ul>\r\n<!--<p>At Refmech we manufacture and supply products and components including refractory anchors, hexagonal mesh, ceramic fibre fixings and stainless steel reinforcing fibres, paddle & pan mixers and dust extractor machines. We also source a range of market leading gunning, pumping and grouting concrete equipment, stud welding equipment and supplies as well as a full range of passive fire proofing products, cable management trays and cable and pipe sealing systems.</p>\r\n                        <p> Effective from September 2nd, 2013, Refmech has acquired the OneSteel Building Services business. </p>--></div>\r\n<div class="col-md-3 chooseus">\r\n<ul>\r\n    <li>Refractory Anchor</li>\r\n    <li>Modulor Anchor</li>\r\n    <li>Anchor for Cold Rolling Mills</li>\r\n    <li>Furnace Anchor</li>\r\n    <li>Heating &amp; Pumping Unit</li>\r\n    <li>Anchors</li>\r\n</ul>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>', 'n'),
(18, NULL, 'product', 'product', 'product', 'product', '', '', '', '', '', '', '', '', '', '', '', '', 'product', '', 'n'),
(19, NULL, 'services', 'services', 'services', 'services', '', '', '', '', '', '', '', '', '', '', '', '', 'services', '', 'n'),
(20, NULL, 'Company_profile', 'Company_profile', 'Company_profile', 'Company_profile', '', '', '', '', '', '', '', '', '', '', '', '', '<div class="about-top">\r\n<div class="col-md-4 about-left"><img src="images/ad.jpg" alt="" height="470px" /></div>\r\n<div class="col-md-8 about-right">\r\n<h4>Refmech Engineering</h4>\r\n<h5 style="color:#E4242E;">WE OFFER THE ENGINEERING PRODUCT THAT HELPS ENGINEERING SERVICES.</h5>\r\n<br />\r\n<h5 style="text-align:center; color:#03F; font-size:20px; font-weight:bold;">Company Profile</h5>\r\n<p>Having good reputation in the market as well as in-depth knowledge, we are known to be a renowned manufacturer, exporter, supplier &amp; trader of the industry. We have directed all our efforts to make sure that bulk orders are completed within the given time frame. The product range offered by us includes Furnace Anchors, Heating Element, Latches, Thermocouple, Ceramic Thermocouple, Industrial Thermocouple, Furnace Part, and more.</p>\r\n<br />\r\n<!--<p>Browse our broad range of products or contact us on 011-245627867 for more information.</p>-->\r\n<table class="table" style="font-size:14px; font-weight:100; color:#666;">\r\n    <tbody>\r\n        <tr>\r\n            <td>Business Type</td>\r\n            <td>Exporter , Manufacturer , Supplier &amp; Trader</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Primary Competitive Advantages</td>\r\n            <td>\r\n            <ul>\r\n                <li>Excellent manufacturing facilities</li>\r\n                <li>Close monitoring of all the processes</li>\r\n                <li>Premium quality at competitive rate</li>\r\n            </ul>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td>Sales Volume</td>\r\n            <td>60 Lacs INR</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Monthly Production Capacitye</td>\r\n            <td>20,000 pcs.</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Product Range&nbsp;</td>\r\n            <td>\r\n            <ul>\r\n                <li>Furnace Anchor</li>\r\n                <li>Anchor of Furnace Parts</li>\r\n                <li>Anchor for Cold Rolling Mills</li>\r\n            </ul>\r\n            </td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>', '<div class="choose-main">\r\n<h3 style=" padding-left:380px;display:inline;">Why Choose Us</h3>\r\n<h3 style=" padding-right:30px;display:inline;float:right">Products We Offer</h3>\r\n<div class="choose-top">\r\n<div class="col-md-4 choose-left"><img src="images/ad.jpg" alt="" height="230px;" /></div>\r\n<div class="col-md-5  chooseus">\r\n<ul>\r\n    <li>Sound industry knowledge</li>\r\n    <li>Excellent manufacturing facilities</li>\r\n    <li>Team of highly qualified professionals</li>\r\n    <li>Close monitoring of all the processes</li>\r\n    <li>Premium quality at competitive rate</li>\r\n    <li>On-time delivery system</li>\r\n    <li>Wide distribution network.</li>\r\n</ul>\r\n<!--<p>At Refmech we manufacture and supply products and components including refractory anchors, hexagonal mesh, ceramic fibre fixings and stainless steel reinforcing fibres, paddle & pan mixers and dust extractor machines. We also source a range of market leading gunning, pumping and grouting concrete equipment, stud welding equipment and supplies as well as a full range of passive fire proofing products, cable management trays and cable and pipe sealing systems.</p>\r\n                        <p> Effective from September 2nd, 2013, Refmech has acquired the OneSteel Building Services business. </p>--></div>\r\n<div class="col-md-3 chooseus">\r\n<ul>\r\n    <li>Refractory Anchor</li>\r\n    <li>Modulor Anchor</li>\r\n    <li>Anchor for Cold Rolling Mills</li>\r\n    <li>Furnace Anchor</li>\r\n    <li>Heating &amp; Pumping Unit</li>\r\n    <li>Anchors</li>\r\n</ul>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>', 'n'),
(21, NULL, 'contact', 'contact', 'contact', 'contact', '', '', '', '', '', '', '', '', '', '', '', '', 'contact', '', 'n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
