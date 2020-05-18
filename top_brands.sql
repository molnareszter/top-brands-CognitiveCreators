-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 02:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top_brands`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `logo`, `status`) VALUES
(32, 'Samsung', 'Samsung.svg', '1'),
(40, 'Lidl', 'Lidl.svg', NULL),
(30, 'KFC', 'KFC.svg', '1'),
(29, 'Avon', 'Avon.svg', '1'),
(34, 'Telekom', 'Telekom.svg', '1'),
(33, 'Vodafone', 'Vodafone.svg', '0'),
(28, 'Coca-Cola', 'Coca-Cola.svg', '1'),
(39, 'Banca Transilvania', 'BancaTransilvania.svg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(2) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `country_name`) VALUES
(5, 'AF', 'Afghanistan'),
(6, 'AL', 'Albania'),
(7, 'DZ', 'Algeria'),
(8, 'DS', 'American Samoa'),
(9, 'AD', 'Andorra'),
(10, 'AO', 'Angola'),
(11, 'AI', 'Anguilla'),
(12, 'AQ', 'Antarctica'),
(13, 'AG', 'Antigua and Barbuda'),
(14, 'AR', 'Argentina'),
(15, 'AM', 'Armenia'),
(16, 'AW', 'Aruba'),
(17, 'AU', 'Australia'),
(18, 'AT', 'Austria'),
(19, 'AZ', 'Azerbaijan'),
(20, 'BS', 'Bahamas'),
(21, 'BH', 'Bahrain'),
(22, 'BD', 'Bangladesh'),
(23, 'BB', 'Barbados'),
(24, 'BY', 'Belarus'),
(25, 'BE', 'Belgium'),
(26, 'BZ', 'Belize'),
(27, 'BJ', 'Benin'),
(28, 'BM', 'Bermuda'),
(29, 'BT', 'Bhutan'),
(30, 'BO', 'Bolivia'),
(31, 'BA', 'Bosnia and Herzegovina'),
(32, 'BW', 'Botswana'),
(33, 'BV', 'Bouvet Island'),
(34, 'BR', 'Brazil'),
(35, 'IO', 'British Indian Ocean Territory'),
(36, 'BN', 'Brunei Darussalam'),
(37, 'BG', 'Bulgaria'),
(38, 'BF', 'Burkina Faso'),
(39, 'BI', 'Burundi'),
(40, 'KH', 'Cambodia'),
(41, 'CM', 'Cameroon'),
(42, 'CA', 'Canada'),
(43, 'CV', 'Cape Verde'),
(44, 'KY', 'Cayman Islands'),
(45, 'CF', 'Central African Republic'),
(46, 'TD', 'Chad'),
(47, 'CL', 'Chile'),
(48, 'CN', 'China'),
(49, 'CX', 'Christmas Island'),
(50, 'CC', 'Cocos (Keeling) Islands'),
(51, 'CO', 'Colombia'),
(52, 'KM', 'Comoros'),
(53, 'CG', 'Congo'),
(54, 'CK', 'Cook Islands'),
(55, 'CR', 'Costa Rica'),
(56, 'HR', 'Croatia (Hrvatska)'),
(57, 'CU', 'Cuba'),
(58, 'CY', 'Cyprus'),
(59, 'CZ', 'Czech Republic'),
(60, 'DK', 'Denmark'),
(61, 'DJ', 'Djibouti'),
(62, 'DM', 'Dominica'),
(63, 'DO', 'Dominican Republic'),
(64, 'TP', 'East Timor'),
(65, 'EC', 'Ecuador'),
(66, 'EG', 'Egypt'),
(67, 'SV', 'El Salvador'),
(68, 'GQ', 'Equatorial Guinea'),
(69, 'ER', 'Eritrea'),
(70, 'EE', 'Estonia'),
(71, 'ET', 'Ethiopia'),
(72, 'FK', 'Falkland Islands (Malvinas)'),
(73, 'FO', 'Faroe Islands'),
(74, 'FJ', 'Fiji'),
(75, 'FI', 'Finland'),
(76, 'FR', 'France'),
(77, 'FX', 'France, Metropolitan'),
(78, 'GF', 'French Guiana'),
(79, 'PF', 'French Polynesia'),
(80, 'TF', 'French Southern Territories'),
(81, 'GA', 'Gabon'),
(82, 'GM', 'Gambia'),
(83, 'GE', 'Georgia'),
(84, 'DE', 'Germany'),
(85, 'GH', 'Ghana'),
(86, 'GI', 'Gibraltar'),
(87, 'GK', 'Guernsey'),
(88, 'GR', 'Greece'),
(89, 'GL', 'Greenland'),
(90, 'GD', 'Grenada'),
(91, 'GP', 'Guadeloupe'),
(92, 'GU', 'Guam'),
(93, 'GT', 'Guatemala'),
(94, 'GN', 'Guinea'),
(95, 'GW', 'Guinea-Bissau'),
(96, 'GY', 'Guyana'),
(97, 'HT', 'Haiti'),
(98, 'HM', 'Heard and Mc Donald Islands'),
(99, 'HN', 'Honduras'),
(100, 'HK', 'Hong Kong'),
(101, 'HU', 'Hungary'),
(102, 'IS', 'Iceland'),
(103, 'IN', 'India'),
(104, 'IM', 'Isle of Man'),
(105, 'ID', 'Indonesia'),
(106, 'IR', 'Iran (Islamic Republic of)'),
(107, 'IQ', 'Iraq'),
(108, 'IE', 'Ireland'),
(109, 'IL', 'Israel'),
(110, 'IT', 'Italy'),
(111, 'CI', 'Ivory Coast'),
(112, 'JE', 'Jersey'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Japan'),
(115, 'JO', 'Jordan'),
(116, 'KZ', 'Kazakhstan'),
(117, 'KE', 'Kenya'),
(118, 'KI', 'Kiribati'),
(119, 'KP', 'Korea, Democratic People\'s Republic of'),
(120, 'KR', 'Korea, Republic of'),
(121, 'XK', 'Kosovo'),
(122, 'KW', 'Kuwait'),
(123, 'KG', 'Kyrgyzstan'),
(124, 'LA', 'Lao People\'s Democratic Republic'),
(125, 'LV', 'Latvia'),
(126, 'LB', 'Lebanon'),
(127, 'LS', 'Lesotho'),
(128, 'LR', 'Liberia'),
(129, 'LY', 'Libyan Arab Jamahiriya'),
(130, 'LI', 'Liechtenstein'),
(131, 'LT', 'Lithuania'),
(132, 'LU', 'Luxembourg'),
(133, 'MO', 'Macau'),
(134, 'MK', 'North Macedonia'),
(135, 'MG', 'Madagascar'),
(136, 'MW', 'Malawi'),
(137, 'MY', 'Malaysia'),
(138, 'MV', 'Maldives'),
(139, 'ML', 'Mali'),
(140, 'MT', 'Malta'),
(141, 'MH', 'Marshall Islands'),
(142, 'MQ', 'Martinique'),
(143, 'MR', 'Mauritania'),
(144, 'MU', 'Mauritius'),
(145, 'TY', 'Mayotte'),
(146, 'MX', 'Mexico'),
(147, 'FM', 'Micronesia, Federated States of'),
(148, 'MD', 'Moldova, Republic of'),
(149, 'MC', 'Monaco'),
(150, 'MN', 'Mongolia'),
(151, 'ME', 'Montenegro'),
(152, 'MS', 'Montserrat'),
(153, 'MA', 'Morocco'),
(154, 'MZ', 'Mozambique'),
(155, 'MM', 'Myanmar'),
(156, 'NA', 'Namibia'),
(157, 'NR', 'Nauru'),
(158, 'NP', 'Nepal'),
(159, 'NL', 'Netherlands'),
(160, 'AN', 'Netherlands Antilles'),
(161, 'NC', 'New Caledonia'),
(162, 'NZ', 'New Zealand'),
(163, 'NI', 'Nicaragua'),
(164, 'NE', 'Niger'),
(165, 'NG', 'Nigeria'),
(166, 'NU', 'Niue'),
(167, 'NF', 'Norfolk Island'),
(168, 'MP', 'Northern Mariana Islands'),
(169, 'NO', 'Norway'),
(170, 'OM', 'Oman'),
(171, 'PK', 'Pakistan'),
(172, 'PW', 'Palau'),
(173, 'PS', 'Palestine'),
(174, 'PA', 'Panama'),
(175, 'PG', 'Papua New Guinea'),
(176, 'PY', 'Paraguay'),
(177, 'PE', 'Peru'),
(178, 'PH', 'Philippines'),
(179, 'PN', 'Pitcairn'),
(180, 'PL', 'Poland'),
(181, 'PT', 'Portugal'),
(182, 'PR', 'Puerto Rico'),
(183, 'QA', 'Qatar'),
(184, 'RE', 'Reunion'),
(185, 'RO', 'Romania'),
(186, 'RU', 'Russian Federation'),
(187, 'RW', 'Rwanda'),
(188, 'KN', 'Saint Kitts and Nevis'),
(189, 'LC', 'Saint Lucia'),
(190, 'VC', 'Saint Vincent and the Grenadines'),
(191, 'WS', 'Samoa'),
(192, 'SM', 'San Marino'),
(193, 'ST', 'Sao Tome and Principe'),
(194, 'SA', 'Saudi Arabia'),
(195, 'SN', 'Senegal'),
(196, 'RS', 'Serbia'),
(197, 'SC', 'Seychelles'),
(198, 'SL', 'Sierra Leone'),
(199, 'SG', 'Singapore'),
(200, 'SK', 'Slovakia'),
(201, 'SI', 'Slovenia'),
(202, 'SB', 'Solomon Islands'),
(203, 'SO', 'Somalia'),
(204, 'ZA', 'South Africa'),
(205, 'GS', 'South Georgia South Sandwich Islands'),
(206, 'SS', 'South Sudan'),
(207, 'ES', 'Spain'),
(208, 'LK', 'Sri Lanka'),
(209, 'SH', 'St. Helena'),
(210, 'PM', 'St. Pierre and Miquelon'),
(211, 'SD', 'Sudan'),
(212, 'SR', 'Suriname'),
(213, 'SJ', 'Svalbard and Jan Mayen Islands'),
(214, 'SZ', 'Swaziland'),
(215, 'SE', 'Sweden'),
(216, 'CH', 'Switzerland'),
(217, 'SY', 'Syrian Arab Republic'),
(218, 'TW', 'Taiwan'),
(219, 'TJ', 'Tajikistan'),
(220, 'TZ', 'Tanzania, United Republic of'),
(221, 'TH', 'Thailand'),
(222, 'TG', 'Togo'),
(223, 'TK', 'Tokelau'),
(224, 'TO', 'Tonga'),
(225, 'TT', 'Trinidad and Tobago'),
(226, 'TN', 'Tunisia'),
(227, 'TR', 'Turkey'),
(228, 'TM', 'Turkmenistan'),
(229, 'TC', 'Turks and Caicos Islands'),
(230, 'TV', 'Tuvalu'),
(231, 'UG', 'Uganda'),
(232, 'UA', 'Ukraine'),
(233, 'AE', 'United Arab Emirates'),
(234, 'GB', 'United Kingdom'),
(235, 'US', 'United States'),
(236, 'UM', 'United States minor outlying islands'),
(237, 'UY', 'Uruguay'),
(238, 'UZ', 'Uzbekistan'),
(239, 'VU', 'Vanuatu'),
(240, 'VA', 'Vatican City State'),
(241, 'VE', 'Venezuela'),
(242, 'VN', 'Vietnam'),
(243, 'VG', 'Virgin Islands (British)'),
(244, 'VI', 'Virgin Islands (U.S.)'),
(245, 'WF', 'Wallis and Futuna Islands'),
(246, 'EH', 'Western Sahara'),
(247, 'YE', 'Yemen'),
(248, 'ZR', 'Zaire'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `data_source`
--

CREATE TABLE `data_source` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `social_media_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `score` bigint(20) UNSIGNED DEFAULT NULL,
  `URL` text DEFAULT NULL,
  `upload_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_source`
--

INSERT INTO `data_source` (`id`, `brand_id`, `social_media_id`, `country_id`, `score`, `URL`, `upload_time`) VALUES
(42, 33, 31, 174, 245234, NULL, '2019-07-17 11:01:02'),
(41, 32, 2, 250, 56435, NULL, '2019-07-16 15:59:08'),
(27, 34, 30, 201, 546345, NULL, '2019-07-16 09:14:31'),
(40, 30, 3, 112, 142132, NULL, '2019-07-16 15:58:06'),
(31, 29, 3, 182, 1214131, NULL, '2019-07-16 09:15:28'),
(32, 34, 32, 238, 124, NULL, '2019-07-16 09:15:39'),
(33, 29, 31, 141, 131431, NULL, '2019-07-16 09:16:20'),
(34, 28, 3, 199, 532445, NULL, '2019-07-16 09:16:29'),
(39, 40, 3, 85, 9999999, NULL, '2019-07-16 12:38:52'),
(38, 39, 32, 185, 2532, NULL, '2019-07-16 10:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `url`, `status`, `image`) VALUES
(1, 'Home', 'home', '0', 'home.svg'),
(2, 'Settings', 'settings', '0', 'settings.svg'),
(3, 'Brand', 'brand', '0', 'reddit.svg'),
(4, 'Social media', 'social-media', '0', 'share.svg'),
(5, 'Input data', 'data-source', '0', 'folder.svg');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_media_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_media_name`) VALUES
(32, 'Snapchat'),
(2, 'Instagram'),
(3, 'LinkedIn'),
(31, 'Facebook'),
(30, 'YouTube'),
(35, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `date_added`) VALUES
(24, 'admin@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '2019-07-16 00:00:00'),
(23, 'intern2@gmail.com', 'ec0d9fb2102a7c716de7af35c565613597293ecf7efa76f48ee1a4f6a50272907594fe373c92ba176efb83a83187841b5fc31ac89299139c59011791d91aea3e', '2019-07-10 14:29:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_source`
--
ALTER TABLE `data_source`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `social_media_id` (`social_media_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `data_source`
--
ALTER TABLE `data_source`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
