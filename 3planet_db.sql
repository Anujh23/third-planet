-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2021 at 05:05 PM
-- Server version: 5.5.68-MariaDB-cll-lve
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3planet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `brief` text NOT NULL,
  `photo` text NOT NULL,
  `imgstatus` text NOT NULL,
  `aboutheading1` text NOT NULL,
  `brief1` text NOT NULL,
  `aboutheading2` text NOT NULL,
  `brief2` text NOT NULL,
  `aboutheading3` text NOT NULL,
  `brief3` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `name`, `link`, `brief`, `photo`, `imgstatus`, `aboutheading1`, `brief1`, `aboutheading2`, `brief2`, `aboutheading3`, `brief3`, `date`) VALUES
(1, 'Who We Are?', 'who-we-are-', '<p style=\"text-align:justify\">Third Planet Foundation is a national Corporate Social Responsibility (CSR) implementation organization registered as a Section 8 (not-for-profit) in the year 2012. We are working on diverse thematic areas aligned to Schedule VII, Section 135 of the Companies Act 2013 guidelines and Sustainable Development Goals (SDGs).</p>\r\n\r\n<p style=\"text-align:justify\">We provide Table-to-Field customize&nbsp;CSR services which covers complete lifecycle of CSR including planning, execution and reporting. Our services include CSR Policy Formulation, Advisory &amp; Advocacy, Baseline and Need Assessment, In-house Direct Project Implementation, Monitoring, Evaluation &amp; CSR Reporting and Recommendation, Social Audit and Social Impact Assessment. Our focus is on Development, Impact and Sustainability of the communities through participation and ownership approach.</p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation specialises in field level implementation of wide range of socio-economic development Corporate Social Responsibility (CSR) projects across India in the areas of Community &amp; Rural Development, Poverty Alleviation, Quality Education, Skill &amp; Livelihood Development, Quality Healthcare, Water, Sanitation &amp; Hygiene (WASH), Women Empowerment, Agriculture Development, Disaster Relief &amp; Rehabilitation and Environment Sustainability including Promotion of Renewable Energy. We work closely with the companies and communities to plan and execute impactful interventions across geography.</p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation is empanelled with NITI Aayog - Darpan, GuideStar India, Government e-Marketplace and Ministry of MSME, Government of India.</p>\r\n\r\n<p style=\"text-align:justify\"><u>CSR Reference Links</u>:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><a href=\"http://ebook.mca.gov.in/Actpagedisplay.aspx?PAGENAME=17923\">eBook MCA - CSR</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"http://www.mca.gov.in/MinistryV2/faq+on+csr+cell.html\">FAQ on Corporate Social Responsibility (CSR) Section (1) of Section 135 of the Act read with Rule 3(2) of Companies CSR Rule</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://www.mca.gov.in/Ministry/pdf/CSRHLC_13092019.pdf\">Report of the High Level Committee on Corporate Social Responsibility 2018</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://economictimes.indiatimes.com/news/company/corporate-trends/mca-plans-to-make-geotagging-of-csr-projects-mandatory/articleshow/70545817.cms\">MCA plans to make geotagging of CSR projects mandatory</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"http://www.mca.gov.in/Ministry/pdf/Notification_10042020.pdf\">COVID-19 related Frequently Asked Questions (FAQs) on Corporate Social Responsibility (CSR)</a></li>\r\n</ul>\r\n', '97706about1.png', 'Active', 'ABOUT US', '<p style=\"text-align:justify\">Third Planet Foundation is a national Corporate Social Responsibility (CSR) implementation organization registered as a Section 8 (not-for-profit) in the year 2012. We are working on diverse thematic areas aligned to Schedule VII, Section 135 of the Companies Act 2013 guidelines and Sustainable Development Goals (SDGs).</p>\r\n', 'About Third Planet Foundation', '<p style=\"text-align:center\">Third Planet Foundation is a national Corporate Social Responsibility (CSR) implementation organization registered as a Section 8 (not-for-profit) in the year 2012. We are working on diverse thematic areas aligned to Schedule VII, Section 135 of the Companies Act 2013 guidelines and Sustainable Development Goals (SDGs).</p>\r\n\r\n<p style=\"text-align:center\">We provide Table-to-Field customize CSR services which covers complete lifecycle of CSR including planning, execution and reporting. Our services include CSR Policy Formulation, Advisory &amp; Advocacy, Baseline and Need Assessment, In-house Direct Project Implementation, Monitoring, Evaluation &amp; CSR Reporting and Recommendation, Social Audit and Social Impact Assessment. Our focus is on Development, Impact and Sustainability of the communities through participation and ownership approach.</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:tahoma,geneva,sans-serif\">Third Planet Foundation is empanelled with NITI Aayog - Darpan, GuideStar India, Government e-Marketplace and Ministry of MSME, Government of India.</span></p>\r\n', 'CSR Implementation NGO ', '', '17 November, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(60) NOT NULL,
  `activation` text NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `passcode1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fpassword` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `username`, `activation`, `passcode`, `passcode1`, `email`, `fpassword`, `date`) VALUES
(1, 'Crplindia', 'admin', '7a7de4d28db75ad4f9b5f7a93681e268', '57466d104899ac7fa608c758098026ef', '57466d104899ac7fa608c758098026ef', 'info@crplindia.com', 'tpf@2012', '07-09-2020');

-- --------------------------------------------------------

--
-- Table structure for table `bannerpage`
--

CREATE TABLE `bannerpage` (
  `id` int(12) NOT NULL,
  `cname` text NOT NULL,
  `photo` text NOT NULL,
  `link` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerpage`
--

INSERT INTO `bannerpage` (`id`, `cname`, `photo`, `link`, `date`) VALUES
(1, 'Logo', '55338733logo3.png', '', '23-12-2020'),
(2, 'Footer Logo', '8733logo3.png', '', '02-09-2020');

-- --------------------------------------------------------

--
-- Table structure for table `clientpages`
--

CREATE TABLE `clientpages` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `location` text NOT NULL,
  `industry` text NOT NULL,
  `photo` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientpages`
--

INSERT INTO `clientpages` (`id`, `name`, `pages`, `location`, `industry`, `photo`, `pageorder`, `date`) VALUES
(1, 'Unicef', 'unicef', 'Delhi', ' Unicef', '80345unicef-logo.png', 1, '25 June, 2019'),
(2, 'ADB', 'adb', 'Mumbai', '  ADB', '86198adb-logo.png', 2, '25 June, 2019'),
(3, 'PWC', 'pwc', 'Kolkata', '  PWC', '68713pwc-logo.png', 3, '25 June, 2019'),
(4, 'World Health Organization', 'world-health-organization', 'Chennai', 'World Health Organization', '43588who-logo.png', 4, '25 June, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `contactcategory`
--

CREATE TABLE `contactcategory` (
  `id` int(12) NOT NULL,
  `phone` text NOT NULL,
  `web` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `googleplus` text NOT NULL,
  `whatsapp` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactcategory`
--

INSERT INTO `contactcategory` (`id`, `phone`, `web`, `email`, `address`, `facebook`, `youtube`, `twitter`, `instagram`, `googleplus`, `whatsapp`, `linkedin`) VALUES
(1, '+91-98113 42299', 'http://www.3planet.org', ' info@3planet.org', 'Third Planet Foundation <br>105, Pâ€“27, Malviya Nagar,<br>New Delhi 110017, India', 'https://www.facebook.com/Third-Planet-Foundation-114943760330632/?view_public_for=114943760330632', '#', 'https://twitter.com/PlanetThird', 'https://www.instagram.com/thirdplanetfoundation/', '011 4168 5208', '#', 'https://www.linkedin.com/company/third-planet-foundation');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `contactheading1` text NOT NULL,
  `brief1` text NOT NULL,
  `contactheading2` text NOT NULL,
  `brief2` text NOT NULL,
  `contactheading3` text NOT NULL,
  `brief3` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `link`, `contactheading1`, `brief1`, `contactheading2`, `brief2`, `contactheading3`, `brief3`, `date`) VALUES
(1, 'Contact Us', 'contact-us', 'Get in Touch', '<h3>Company Information :</h3>\r\n\r\n<p>500 Lorem Ipsum Dolor Sit,</p>\r\n\r\n<p>22-56-2-9 Sit Amet, Lorem,</p>\r\n\r\n<p>USA</p>\r\n\r\n<p>Phone:(00) 222 666 444</p>\r\n\r\n<p>Fax: (000) 000 00 00 0</p>\r\n\r\n<p>Email: info(at)mycompany.com</p>\r\n\r\n<p>Follow on: Facebook, Twitter</p>\r\n', 'Footer Address', '<ul>\r\n	<li>www.yourcompany(at)gmail.com</li>\r\n	<li>Mobile : +12 345 67890</li>\r\n	<li>Telephone : +00 000 00000</li>\r\n	<li>Fax : +00 000 00000</li>\r\n</ul>\r\n', 'Other Information', '<p>For more information, reach us at: <a href=\"mailto:contact@cubehighways.com\">contact@cubehighways.com</a></p>\r\n\r\n<p>For career enquiries, please contact: <a href=\"mailto:careers@cubehighways.com\">careers@cubehighways.com</a></p>\r\n', '2 March, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(9) NOT NULL,
  `country` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country`, `status`) VALUES
(1, 'India', 1),
(3, 'Iran', 1),
(4, 'Afghanistan', 1),
(5, 'Albania', 0),
(7, 'Andorra', 0),
(8, 'Angola', 0),
(10, 'Antigua and Barbuda', 0),
(11, 'Argentina', 1),
(12, 'Armenia', 0),
(14, 'Australia', 1),
(15, 'Austria', 1),
(16, 'Azerbaijan', 0),
(17, 'Bahamas', 0),
(18, 'Bahrain', 1),
(19, 'Bangladesh', 1),
(20, 'Barbados', 0),
(21, 'Belarus', 0),
(22, 'Belgium', 1),
(23, 'Belize', 0),
(26, 'Bhutan', 1),
(27, 'Bolivia', 0),
(28, 'Bosnia-Herzegovina', 0),
(29, 'Botswana', 0),
(30, 'Bouvet Island', 0),
(31, 'Brazil', 1),
(32, 'Brunei', 0),
(33, 'Bulgaria', 1),
(34, 'Burkina Faso', 0),
(35, 'Burundi', 0),
(36, 'Cambodia', 0),
(37, 'Cameroon', 0),
(38, 'Canada', 1),
(39, 'Cape Verde', 0),
(41, 'Central African Republic', 0),
(42, 'Chad', 0),
(43, 'Chile', 1),
(44, 'China', 1),
(47, 'Colombia', 0),
(48, 'Comoros', 0),
(51, 'Croatia', 0),
(52, 'Cuba', 0),
(53, 'Cyprus', 1),
(54, 'Czech Republic', 0),
(55, 'Denmark', 1),
(56, 'Djibouti', 0),
(57, 'Dominica', 0),
(58, 'Dominican Republic', 0),
(59, 'Ecuador', 0),
(60, 'Egypt', 0),
(61, 'El Salvador', 0),
(62, 'Equatorial Guinea', 0),
(63, 'Eritrea', 0),
(64, 'Estonia', 0),
(65, 'Ethiopia', 1),
(68, 'Fiji', 0),
(69, 'Finland', 1),
(70, 'France', 1),
(72, 'Gabon', 0),
(73, 'Gambia', 0),
(74, 'Georgia', 0),
(75, 'Germany', 1),
(76, 'Ghana', 1),
(78, 'Greece', 1),
(79, 'Greenland', 0),
(80, 'Grenada', 0),
(83, 'Guatemala', 0),
(84, 'Guinea', 0),
(85, 'Guinea Bissau', 0),
(86, 'Guyana', 0),
(87, 'Haiti', 0),
(89, 'Honduras', 0),
(90, 'Hong Kong', 1),
(91, 'Hungary', 0),
(92, 'Iceland', 0),
(93, 'Indonesia', 1),
(94, 'Iraq', 0),
(95, 'Ireland', 1),
(96, 'Israel', 1),
(97, 'Italy', 0),
(99, 'Jamaica', 0),
(100, 'Japan', 0),
(101, 'Jordan', 0),
(102, 'Kazakhstan', 0),
(103, 'Kenya', 1),
(104, 'Kiribati', 0),
(106, 'Kyrgyzstan', 0),
(107, 'Laos', 0),
(109, 'Lebanon', 0),
(110, 'Lesotho', 0),
(111, 'Liberia', 1),
(112, 'Libya', 0),
(113, 'Liechtenstein', 0),
(114, 'Lithuania', 0),
(115, 'Luxembourg', 0),
(117, 'Macedonia', 0),
(118, 'Madagascar', 1),
(119, 'Malawi', 0),
(120, 'Malaysia', 1),
(121, 'Maldives', 0),
(122, 'Mali', 0),
(123, 'Malta', 1),
(124, 'Marshall Islands', 0),
(126, 'Mauritania', 0),
(127, 'Mauritius', 1),
(129, 'Mexico', 1),
(130, 'Micronesia', 0),
(131, 'Moldova', 0),
(132, 'Monaco', 0),
(133, 'Mongolia', 0),
(134, 'Montenegro', 0),
(136, 'Morocco', 0),
(137, 'Mozambique', 0),
(138, 'Myanmar', 0),
(139, 'Namibia', 0),
(140, 'Nauru', 0),
(141, 'Nepal', 1),
(145, 'New Zealand', 1),
(146, 'Nicaragua', 0),
(147, 'Niger', 0),
(148, 'Nigeria', 1),
(151, 'North Korea', 0),
(153, 'Norway', 0),
(154, 'Oman', 1),
(155, 'Pakistan', 1),
(156, 'Palau', 0),
(157, 'Panama', 0),
(158, 'Papua New Guinea', 0),
(159, 'Paraguay', 0),
(160, 'Peru', 1),
(161, 'Philippines', 1),
(163, 'Poland', 1),
(165, 'Portugal', 1),
(167, 'Qatar', 1),
(169, 'Romania', 0),
(170, 'Russia', 1),
(171, 'Rwanda', 1),
(173, 'Saint Kitts and Nevis', 0),
(174, 'Saint Lucia', 0),
(176, 'Saint Vincent and Grenadines', 0),
(177, 'Samoa', 0),
(178, 'San Marino', 0),
(179, 'Sao Tome and Principe', 0),
(180, 'Saudi Arabia', 1),
(181, 'Senegal', 1),
(182, 'Serbia', 0),
(183, 'Seychelles', 0),
(184, 'Sierra Leone', 0),
(185, 'Singapore', 1),
(186, 'Slovakia', 1),
(187, 'Slovenia', 0),
(188, 'Solomon Islands', 0),
(189, 'Somalia', 0),
(190, 'South Africa', 1),
(192, 'South Korea', 1),
(193, 'Spain', 1),
(194, 'Sri Lanka', 1),
(195, 'Sudan', 0),
(196, 'Suriname', 0),
(198, 'Swaziland', 0),
(199, 'Sweden', 1),
(200, 'Switzerland', 1),
(201, 'Syria', 0),
(203, 'Tajikistan', 0),
(204, 'Tanzania', 1),
(205, 'Thailand', 1),
(207, 'Togo', 0),
(209, 'Tonga', 0),
(211, 'Tunisia', 0),
(212, 'Turkey', 1),
(213, 'Turkmenistan', 0),
(215, 'Tuvalu', 0),
(216, 'Uganda', 0),
(217, 'Ukraine', 0),
(218, 'United Arab Emirates', 1),
(219, 'United Kingdom', 1),
(220, 'United States', 1),
(221, 'Uruguay', 0),
(222, 'Uzbekistan', 0),
(223, 'Vanuatu', 0),
(224, 'Venezuela', 0),
(225, 'Vietnam', 0),
(228, 'Yemen', 0),
(229, 'Zambia', 0),
(230, 'Zimbabwe', 1),
(233, 'Latvija', 1),
(235, 'Vatican City', 0),
(236, 'Algeria American Samoa', 0),
(237, 'Kuwait', 1),
(243, 'Netherlands', 1),
(245, 'West Africa', 1),
(247, 'Algeria ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqpages`
--

CREATE TABLE `faqpages` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `brief` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqpages`
--

INSERT INTO `faqpages` (`id`, `name`, `pages`, `brief`, `pageorder`, `date`) VALUES
(1, 'Quality', 'quality', '<p>Quality is the key component on which we never compromise. We continuously enhance our standards, technology and training for our people to ensure the quality and room for growth.</p>\r\n', 1, '14 September, 2019'),
(4, 'Dedication', 'dedication', '<p>Our dedication to seeing a project through is matchless.</p>\r\n', 4, '14 September, 2019'),
(2, 'Integrity', 'integrity', '<p>Our company is committed towards maintaining the integrity in what we do.</p>\r\n', 2, '14 September, 2019'),
(3, 'Flexibility', 'flexibility', '<p>Our company ought to deliver subject matter experts and tailored solutions, which comprise of traditional and innovative solutions to client.</p>\r\n', 3, '14 September, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `photo` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `pages`, `photo`, `date`) VALUES
(1, 'Courses Trucks', 'courses-trucks', '1460Koala.jpg', '24-02-2017'),
(2, 'Courses Trucks', 'courses-trucks', '5234Jellyfish.jpg', '24-02-2017'),
(3, 'Exams', 'exams', '2560Tulips.jpg', '24-02-2017'),
(4, 'Meeting', 'meeting', '284Penguins.jpg', '24-02-2017'),
(5, 'Students', 'students', '7276Desert.jpg', '24-02-2017'),
(6, 'Gallery', 'gallery', '6496Picture2.jpg', '08-04-2017');

-- --------------------------------------------------------

--
-- Table structure for table `homeslide`
--

CREATE TABLE `homeslide` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `cbrief` text NOT NULL,
  `photo` varchar(800) NOT NULL,
  `pageorder` int(20) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `pages` text NOT NULL,
  `brief` text NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeslide`
--

INSERT INTO `homeslide` (`id`, `name`, `cbrief`, `photo`, `pageorder`, `cname`, `headline`, `pages`, `brief`, `date`) VALUES
(81, 'Global reach with local expertise', '', '61653.jpg', 1, 'Active', '', 'global-reach-with-local-expertise', 'We have more than 850 experts - alongside our Global Alliance Partners <br> we can provide truly global support ', '16-09-2019'),
(84, 'Protect yourself with', 'idvero', '26724.jpg', 2, 'Active', '', 'protect-yourself-with', 'We provide a global portfolio maintenance solution for pharmaceutical & biotech companies looking for short or long-term outsourcing support', '16-09-2019'),
(85, 'Protect yourself with', 'idvero', '8845web-3706562.jpg', 3, 'Active', '', 'protect-yourself-with', 'We provide specialized regulatory consulting to pharma and biotech <br>across the entire product lifecycle ', '16-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `newscategory`
--

CREATE TABLE `newscategory` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newscategory`
--

INSERT INTO `newscategory` (`id`, `name`, `pages`, `pageorder`, `status`, `date`) VALUES
(1, 'Business', 'business', 1, 'Active', '2017-10-06 15:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `newspages`
--

CREATE TABLE `newspages` (
  `id` int(12) NOT NULL,
  `fname` text NOT NULL,
  `link` text NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `cbrief` text NOT NULL,
  `brief` text NOT NULL,
  `photo` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `imgstatus` text NOT NULL,
  `metatoptitle` text NOT NULL,
  `metakeywords` text NOT NULL,
  `metadescription` text NOT NULL,
  `todayhalfmonth` text NOT NULL,
  `todayfullmonth` text NOT NULL,
  `todaydate` text NOT NULL,
  `date` text NOT NULL,
  `postdate` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newspages`
--

INSERT INTO `newspages` (`id`, `fname`, `link`, `name`, `pages`, `cbrief`, `brief`, `photo`, `pageorder`, `imgstatus`, `metatoptitle`, `metakeywords`, `metadescription`, `todayhalfmonth`, `todayfullmonth`, `todaydate`, `date`, `postdate`) VALUES
(1, 'Business', 'business', 'Government Job', 'government-job', 'People from all streams and walks of life prefer to get hired in a government job, provided that they full fill every criterion required for the same     ', '<p style=\"margin-left:5px\"><strong>Lesser work load</strong><br />\r\nWe all know that government jobs have the minimum work load as well as provide a lot of comforts as compared to private jobs. Not only this, there are no over- times as well as extra weekends required as well. A government employee knows exactly which days he is going to work and for how long, hence providing a more relaxed as well as satisfactory life style.<br />\r\n<br />\r\n<strong>Fixed holidays and vacations</strong><br />\r\nProbably one of the best perks of working in the government sector is that you do not have to argue for going on holidays and for taking leaves. There are fixed holidays per year and no matter what; you are entitled to take advantage of them. Not only this, all the government- declared holidays will also be provided to you.&nbsp;<br />\r\n<br />\r\n<strong>Job security/ stability</strong><br />\r\nGovernment jobs are not affected by a poor economy. There is very little chance that any government employee will ever lose his/ her job. In most of the cases, the job is retained until the individual is eligible for retiring. Employees in government offices have a fixed income during their entire term and the job security is also retained till the end.<br />\r\n<br />\r\n<strong>Pensions and other benefits</strong><br />\r\nGovernment employees are known to be getting a lot of attractive as well as life- long benefits from the government of our country. Most commonly, they are provided with life- long health care, pensions, housing facilities as well as provident funds. There are many sites to find government jobs</p>\r\n\r\n<p style=\"margin-left:5px\">&nbsp;</p>\r\n\r\n<h3>Private Job</h3>\r\n\r\n<p style=\"margin-left:5px\"><strong>Shorter decision making procedures</strong><br />\r\nThe government sector is known for taking a lot of time in making decisions about new recruitments, while the private sector functions much faster.<br />\r\n<br />\r\n<strong>No permanent income scale</strong><br />\r\nThis is probably the best advantage of a private job. While working in the private sector, you can surely climb the ladders of success as per your ability and thus your income will also get enhanced over time. On the other hand, there is a definite pay scale for each post in the government sector.<br />\r\n<br />\r\n<strong>Target- driven jobs</strong><br />\r\nThe jobs and opportunities in the private sector are target- driven, which means that there are certain goals to be fulfilled by each employee, while there is no such restriction in the case of a government job.<br />\r\n<br />\r\n<strong>Greater scope of growth</strong><br />\r\nBecause there is no restriction on the position at which an employee can reach, there is more scope of growth and development in the private sector.&nbsp;<br />\r\nAfter taking a look at both the sides of this situation, selecting between the two may be a tough decision. The choices can vary from person to person, depending on their needs, background, future goals and so on.&nbsp;</p>\r\n', '12844bg7.jpg', 1, 'Active', '     Government Job     ', '          ', '          ', 'Dec', 'December', '21', '21 December, 2017', ''),
(2, 'Business', 'business', 'Government Initiatives', 'government-initiatives', 'The Government of India has supported Media Entertainment industrys growth by taking various initiatives such as digitising the cable distribution sector to attract greater institutional funding,    ', '<div class=\"largedetail lleft\" style=\"box-sizing: border-box; margin: 0px 0px 20px; width: 862.391px; overflow: auto; font-size: 15px; line-height: 20px; float: left; padding: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">\r\n<div class=\"fulldiv middletext\" style=\"box-sizing: border-box; width: 862.391px; overflow: auto; margin: auto; text-align: justify;\">The Government of India has supported Media Entertainment industrys growth by taking various initiatives such as digitising the cable distribution sector to attract greater institutional funding, increasing FDI limit from 74 per cent to 100 per cent in cable and DTH satellite platforms, and granting industry status to the film industry for easy access to institutional finance.<br />\r\nRecently, the Indian and Canadian governments have signed an audio-visual co-production deal that would help producers from both countries to explore their technical, creative, artistic, financial and marketing resources for co-productions and, subsequently, lead to exchange of culture and art amongst them.</div>\r\nFurthermore, the Centre has given the go-ahead for licences to 45 new news and entertainment channels in India. Among those who have secured the licenses include established names such as Star, Sony, Viacom and Zee. Presently, there are 350 broadcasters which cater to 780 channels. ï¿½We want more competition and we wanted to open it up for the public. So far, we have approved the licences of 45 new channels. Itï¿½s a mix of both news and non-news channels,ï¿½ said Mr Bimal Julka, Secretary, Ministry of I&amp;B, Government of India.</div>\r\n\r\n<div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">The radio industry is expected to witness growth opportunities after the Phase III auction of 839 radio channels in 294 cities, expected to complete later this year. The Phase III auction, which started in July 2015, is expected to bring in an estimated US$ 390 million in revenue to the government. With over 800 frequencies up for auction in third- and fourth-tier towns, radio is likely to match the reach of print.</div>\r\n\r\n<div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">The Union Cabinet chaired by the Prime Minister, Mr Narendra Modi, has given its approval for entering into an Audio-Visual Co-Production Agreement between India and the Republic of Korea (RoK) and to complete internal ratification procedure, to enable the agreement to come into force. Cooperation between the film industries of the two countries will not only promote export of Indian films but would also act as a catalyst towards creating awareness about India and its culture</div>\r\n\r\n<div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">- See more at: http://www.ibef.org/industry/media-entertainment-india.aspx#sthash.l4licm66.dpuf</div>\r\n', '45288bg4.jpg', 2, 'Active', '     Government Initiatives     ', '          ', '          ', 'Dec', 'December', '21', '21 December, 2017', ''),
(3, 'Business', 'business', 'Television industry', 'television-industry', 'Today India boasts of being the third largest television market in the world. The small screen has produced numerous celebrities of their own kind some even attaining national fame.       ', '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto,sans-serif; font-size:15px\">Today India boasts of being the third largest television market in the world. The small screen has produced numerous celebrities of their own kind some even attaining national fame. TV soaps are extremely popular with housewives as well as working women. Approximately half of all Indian households own a television. Television first came to India in the form of Doordarshan (DD) on Sept 15, 1959.&nbsp;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:roboto,sans-serif; font-size:15px\">Doordarshan is the National Television Network of India and also one of the largest broadcasting organisations in the world. Apart from the state run Doordarshan, there are six DTH players with 54.52 million DTH users in India with the present prediction; it is likely to overtake the US in terms of the largest DTH market in the world. As of 2012, the country has a collection of free and subscription services over a variety of distribution media, through which there are over 823 channels of which 184 are pay channels. Total television viewership of 415 million is amongst the worldï¿½s highest with nearly 15-16 Television companies beaming programmers to India.&nbsp;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:roboto,sans-serif; font-size:15px\">The major players being Doordarshan, STAR TV (Satellite Television Asia Network), Zee Television, United Television, CNN, Sony Television, ATN (Asia Television Network), BBC World, SUN TV, Discovery Channel, TNT and Others.&nbsp;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:roboto,sans-serif; font-size:15px\">Indiaï¿½s television business has an estimated $3.4 billion in revenue in 2005, according to PricewaterhouseCoopers. With the government is focusing more on Digitalisation, TV distribution is taking new shape Digitalisation has been a major challenge for the government as digital cable is not gaining momentum. According to the new deadline, pan India digitalisation us expected to happen by December 31, 2014.&nbsp;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:roboto,sans-serif; font-size:15px\">Another challenge for the Television Industry is Average Revenue Per User (ARPU). India is amongst the countries with lowest ARPU as compared to developed countries like US and UK</span></p>\r\n', '35516bg3.jpg', 3, 'Active', '      Television industry      ', '            ', '            ', 'Dec', 'December', '21', '21 December, 2017', ''),
(4, 'Business', 'business', 'Consulting Services', 'consulting-services', 'Businesses stopped hiring for lifetime commitments some time ago, as markets change so rapidly and companies need to tune their workforce for changing economic conditions.       ', '<p style=\"margin-left:5px\">Businesses stopped hiring for lifetime commitments some time ago, as markets change so rapidly and companies need to tune their workforce for changing economic conditions. Its time to move from traditional consulting to a freelance execution role as a hands-on interim professional or executive</p>\r\n\r\n<p style=\"margin-left:5px\">Simply defining yourself as a specialist or professional minimizes a consultant role (think marketing specialist or staffing professional). Specialists and professionals are already seen as experts who do the work, rather than just make recommendations for others</p>\r\n\r\n<p style=\"margin-left:5px\">Agreements based on projects to be completed, rather than an hourly rate, put the focus on quantifiable business outputs vs. time spent. For example, a marketing project would be the number of leads generated or ad impressions, instead of recommendations for improving the process</p>\r\n\r\n<p style=\"margin-left:5px\">Leadership by example works at all levels of a company. It is not limited to the realm of the top executive or board of directors, who could bring in consultants for studies and analysis. Specialists today can justify their cost based on more direct return on investment calculations at all operational levels</p>\r\n\r\n<p style=\"margin-left:5px\">A client relationship suggests that the consultant is in charge, whereas the customer designation recognizes the more modern model of the customer in control. It also highlights all aspects of required customer service, satisfaction, loyalty&nbsp;and referrals to peers</p>\r\n\r\n<p style=\"margin-left:5px\">Many consultants today are hard to contact between scheduled meetings, due to their formal communication processes. Its time to adopt your customers favorite mode of communication, whether that be texting, phone calls&nbsp;or social media, and not limit responses to office hours</p>\r\n', '14730bg1.jpg', 4, 'Active', '      Consulting Services      ', '            ', '            ', '', 'June', '29', '29 June, 2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `packagegallery`
--

CREATE TABLE `packagegallery` (
  `id` int(12) NOT NULL,
  `pcode` text NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `photo` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagegallery`
--

INSERT INTO `packagegallery` (`id`, `pcode`, `name`, `pages`, `photo`, `date`) VALUES
(1, 'TR0001', 'Andaman Travel Package 4N / 5D', 'andaman-travel-package-4n-5d', '181961Penguins.jpg', '17 June, 2019'),
(2, 'TR0001', 'Andaman Travel Package 4N / 5D', 'andaman-travel-package-4n-5d', '65857Desert.jpg', '17 June, 2019'),
(4, 'TR0003', 'Medical Missions', 'medical-missions', '84650Hydrangeas.jpg', '17 June, 2019'),
(5, 'TR0003', 'Medical Missions', 'medical-missions', '84650Desert.jpg', '17 June, 2019'),
(6, 'TR0004', 'Art & Architecture', 'art-architecture', '63701Jellyfish.jpg', '17 June, 2019'),
(7, 'TR0004', 'Art & Architecture', 'art-architecture', '63701Lighthouse.jpg', '17 June, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliopages`
--

CREATE TABLE `portfoliopages` (
  `id` int(20) NOT NULL,
  `listid` int(20) NOT NULL,
  `listno` text NOT NULL,
  `fname` text NOT NULL,
  `link` text NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `industry` text NOT NULL,
  `industrylink` text NOT NULL,
  `technology` text NOT NULL,
  `technologylink` text NOT NULL,
  `urllink` text NOT NULL,
  `specialbrief` text NOT NULL,
  `photo` text NOT NULL,
  `pageorder` int(20) NOT NULL,
  `brief` text NOT NULL,
  `cbrief` text NOT NULL,
  `feature` text NOT NULL,
  `country` text NOT NULL,
  `countrylink` text NOT NULL,
  `state` text NOT NULL,
  `statelink` text NOT NULL,
  `metatoptitle` text NOT NULL,
  `metadescription` text NOT NULL,
  `metakeywords` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfoliopages`
--

INSERT INTO `portfoliopages` (`id`, `listid`, `listno`, `fname`, `link`, `name`, `pages`, `industry`, `industrylink`, `technology`, `technologylink`, `urllink`, `specialbrief`, `photo`, `pageorder`, `brief`, `cbrief`, `feature`, `country`, `countrylink`, `state`, `statelink`, `metatoptitle`, `metadescription`, `metakeywords`, `date`) VALUES
(1, 1, 'PF001', 'Web Design', 'web-design', 'Infinity Building Projects', 'infinity-building-projects', '', '', '', '', 'https://www.infinitybuildingprojects.com.au/', '', '23303architect-website-design-delhi-india-624x464.jpg', 1, '<p>Building is my passion. I, Ritesh Shah, have 15 years of extensive experience in construction including subdivisions, demolitions, building and property valuation. I am very keen to provide my expertise to my clients in order to achieve successful profitable building projects. I will assist you to forecast project costs and finish up your project within budget.</p>\r\n', 'We have been running a professional photography business for long times, specializing in traditio              ', 'No', '', '', '', '', '      Infinity Building Projects      ', '      Infinity Building Projects      ', '      Infinity Building Projects      ', '2019-07-23 15:44:54'),
(2, 2, 'PF002', 'Logo Design', 'logo-design', 'Health For All India', 'health-for-all-india', '', '', '', '', 'https://www.healthforall.co/', '', '58118port1.jpg', 2, '<p>Dr. Majid Ahmed Talikoti is a Highly Distinguished medical professional, teacher, researcher and medical communicator in the field of medicine. He was born in Shorapur, Distt. Yadgir, Karnataka. Studied MBBS, MS in Rajiv Gandhi Univ. of Health Sciences &ndash; RGUHS, specialised in Surgical Oncology from IRCH AIIMS and Advanced Surgical Onco Training from National Cancer Centre Japan, serving pan India in states like Kashmir, Delhi, UP, MP, Jharkhand etc.</p>\r\n', 'Dr. Majid Talikoti is one of the distinguished medical professional in the field of surgical oncology with an expertise of more than a decade in the field of surgical oncology. He is a senior consultant/ advisor/ head at various hospitals in India. He is also the founder & chairman of Health For All Charitable Trust.    ', 'No', '', '', '', '', '    Health For All India, Multispeciality Hospital     ', '    Health For All India, Multispeciality Hospital     ', '    Health For All India, Multispeciality Hospital     ', '2019-07-23 15:44:44'),
(3, 3, 'PF003', 'Web Design', 'web-design', 'JPS India', 'jps-india', '', '', '', '', 'http://www.jps-india.com/', '', '17656port2.jpg', 3, '<p>JPS Associates is a consulting firm specializing in management, development, agriculture &amp; natural resources management, and engineering. The company was founded in 1987 and incorporated as private limited company in 1995.</p>\r\n', 'JPS Associates is a consulting firm specializing in management, development, agriculture & natural resources management, and engineering. The company was founded in 1987 and incorporated as private limited company in 1995.     ', 'Yes', '', '', '', '', '     JPS India     ', '     JPS India     ', '     JPS India     ', '2019-07-04 11:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `optionallink` text NOT NULL,
  `pageorder` int(20) NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `name`, `pages`, `optionallink`, `pageorder`, `status`, `date`) VALUES
(1, 'Web Design', 'web-design', '', 1, 'Active', '2019-07-22 13:30:44'),
(2, 'Logo Design', 'logo-design', '', 2, 'Active', '2019-07-22 13:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `productspages`
--

CREATE TABLE `productspages` (
  `id` int(12) NOT NULL,
  `packageid` int(20) NOT NULL,
  `pcode` text NOT NULL,
  `pcname` text NOT NULL,
  `pclink` text NOT NULL,
  `fname` text NOT NULL,
  `link` text NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `city` text NOT NULL,
  `citylink` text NOT NULL,
  `feature` text NOT NULL,
  `duration` text NOT NULL,
  `location` text NOT NULL,
  `price` text NOT NULL,
  `childprice` text NOT NULL,
  `babyprice` text NOT NULL,
  `depature` text NOT NULL,
  `photo` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `tagline` text NOT NULL,
  `cbrief` text NOT NULL,
  `brief` text NOT NULL,
  `imgstatus` text NOT NULL,
  `brief1` text NOT NULL,
  `brief2` text NOT NULL,
  `brief3` text NOT NULL,
  `brief4` text NOT NULL,
  `brief5` text NOT NULL,
  `metatoptitle` text NOT NULL,
  `metakeywords` text NOT NULL,
  `metadescription` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productspages`
--

INSERT INTO `productspages` (`id`, `packageid`, `pcode`, `pcname`, `pclink`, `fname`, `link`, `name`, `pages`, `city`, `citylink`, `feature`, `duration`, `location`, `price`, `childprice`, `babyprice`, `depature`, `photo`, `pageorder`, `tagline`, `cbrief`, `brief`, `imgstatus`, `brief1`, `brief2`, `brief3`, `brief4`, `brief5`, `metatoptitle`, `metakeywords`, `metadescription`, `date`) VALUES
(1, 1, 'TR0001', 'International', 'international', 'Thailand', 'international/thailand', 'Andaman Travel Package 4N / 5D', 'andaman-travel-package-4n-5d', '', '', 'Yes', ' 4Night / 5Days', '', '1625', '2451', '', '', '852053692slider-3.jpg', 1, '  We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.\r\n  ', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>\r\n', '<p><strong>What is Included:</strong><strong>&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Accommodation at the mission on Quad sharing (In clean air conditioned and well maintained facility) .</li>\r\n	<li>All meals (Breakfast, Lunch &amp; Dinner)</li>\r\n	<li>Airport transfers including visits during the entire program</li>\r\n	<li>All visits, lectures as per the program and fees as mentioned in the program.</li>\r\n	<li>All fees for local monuments</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What&nbsp; is not included:</strong></p>\r\n\r\n<ul>\r\n	<li>International round trip airfare</li>\r\n	<li>Visas fee</li>\r\n	<li>Personal insurances and health insurance in Cuba</li>\r\n	<li>Items of personal nature</li>\r\n	<li>Anything not mentioned in the itinerary</li>\r\n</ul>\r\n\r\n<p><strong>All programs and prices are subject to availability and can be customized for change</strong><strong>&nbsp;</strong></p>\r\n', 'Active', '<p>Day 1.</p>\r\n\r\n<p>Team in received by pastors Eduardo, Roberto and Elsi at Havana airport. 10.30am:Go to Campo Amor. Alamar. Discuss the program, team introduction, ministry presentation. Coffee and soft drink</p>\r\n', '<p><strong>Note:<br />\r\nThe above rates are valid for Indian nationals only<br />\r\n<br />\r\nHotels might ask for a refundable Security Deposit at the time of check-in, which is payable in Cash or by Credit Card.<br />\r\n<br />\r\nThe value and currency of the deposit might vary as per the hotel policy.</strong></p>\r\n', '<p>If the Guest decides to cancel the tour for any reason whatsoever then s/he shall give a written application to the Company within specified time limit along with original receipt issued by the Company. Such cancellation will attract cancellation charges stated hereunder.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Welcome drink on arrival</li>\r\n	<li>Daily Breakfast</li>\r\n	<li>4 Nights accommodation in Port Blair</li>\r\n	<li>Full day of Havelock Island</li>\r\n	<li>All entry permits/ tickets, ferry tickets and forest area permits wherever applicable.</li>\r\n	<li>Assistance at all arrival and departure points</li>\r\n	<li>All applicable taxes</li>\r\n	<li>All transfers, excursions and sightseeing tours will be on sharing basis in a non air-conditioned transportation</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul>\r\n	<li>Welcome drink on arrival</li>\r\n	<li>Daily Breakfast</li>\r\n	<li>4 Nights accommodation in Port Blair</li>\r\n	<li>Full day of Havelock Island</li>\r\n	<li>All entry permits/ tickets, ferry tickets and forest area permits wherever applicable.</li>\r\n	<li>Assistance at all arrival and departure points</li>\r\n	<li>All applicable taxes</li>\r\n	<li>All transfers, excursions and sightseeing tours will be on sharing basis in a non air-conditioned transportation</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul>\r\n	<li>Welcome drink on arrival</li>\r\n	<li>Daily Breakfast</li>\r\n	<li>4 Nights accommodation in Port Blair</li>\r\n	<li>Full day of Havelock Island</li>\r\n	<li>All entry permits/ tickets, ferry tickets and forest area permits wherever applicable.</li>\r\n	<li>Assistance at all arrival and departure points</li>\r\n	<li>All applicable taxes</li>\r\n	<li>All transfers, excursions and sightseeing tours will be on sharing basis in a non air-conditioned transportation</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '      Andaman Travel Package 4N / 5D      ', '                                                                      ', '                                                ', '2019-06-17 16:39:23'),
(2, 2, 'TR0002', 'International', 'international', 'Thailand', 'international/thailand', 'People To People', 'people-to-people', '', '', 'Yes', '6 days / 5 nights', '', '25633', '3521', '', '', '760731914slider-1.jpg', 2, '   We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome. ', '<p>Finibus Bonorum Malorum that a reader will be distracted by the readable.</p>\r\n', '<p><strong>What is Included:</strong><strong>&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Accommodation at the mission on Quad sharing (In clean air conditioned and well maintained facility) .</li>\r\n	<li>All meals (Breakfast, Lunch &amp; Dinner)</li>\r\n	<li>Airport transfers including visits during the entire program</li>\r\n	<li>All visits, lectures as per the program and fees as mentioned in the program.</li>\r\n	<li>All fees for local monuments</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What&nbsp; is not included:</strong></p>\r\n\r\n<ul>\r\n	<li>International round trip airfare</li>\r\n	<li>Visas fee</li>\r\n	<li>Personal insurances and health insurance in Cuba</li>\r\n	<li>Items of personal nature</li>\r\n	<li>Anything not mentioned in the itinerary</li>\r\n</ul>\r\n\r\n<p><strong>All programs and prices are subject to availability and can be customized for change</strong><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong><strong>Terms &amp; Conditions:</strong></p>\r\n\r\n<p>Please visit&nbsp;<a href=\"http://demos.logocrust.com/ak/cuba/terms-and-conditions/\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-decoration-line: none; outline: 0px; color: rgb(0, 0, 0);\">terms &amp; conditions</a>&nbsp;section</p>\r\n', 'Active', '', '', '', '', '', '   People To People             ', '                            ', '                            ', '2019-06-17 16:02:55'),
(3, 3, 'TR0003', 'Domestic', 'domestic', 'Orissa', 'domestic/orissa', 'Medical Missions', 'medical-missions', '', '', 'Yes', '6 days / 5 nights', '', '2542', '4200', '', '', '729053692slider-3.jpg', 1, '   We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome. ', '<p><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\"><strong>Trip summary : &nbsp;</strong></span></p>\r\n\r\n<p><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Medical Missions:&nbsp;</span>Opportunity to treat and enrich the live if Cubans</p>\r\n\r\n<p><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\"><strong>PRICE :&nbsp;</strong>$895 per person&nbsp;</span><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\"><strong>What is Included:</strong><strong>&nbsp;</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Accommodation at the mission on quad sharing (In clean air conditioned and well maintained facility) .</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">All meals</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Airport transfers including visits during the entire program</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">All visits, lectures as per the program and Guide fees</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">All fees for local monuments</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\"><strong>What &nbsp;is not included:</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">International round trip airfare</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Visas fee</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Personal insurances</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Items of personal nature</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">Anything not mentioned in the itinerary</span></li>\r\n	<li><span style=\"color:rgb(68, 68, 68); font-family:inherit; font-size:inherit\">It includes all lectures presented by Cuba specialists, official guides from the Oficina del Historiador, visit to the Caba Fort, fellowship meals at Campo Amor for ten invited Drs. And coordinator fee.</span></li>\r\n</ul>\r\n', '<p><strong>What is Included:</strong><strong>&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Accommodation at the mission on Quad sharing (In clean air conditioned and well maintained facility) .</li>\r\n	<li>All meals (Breakfast, Lunch &amp; Dinner)</li>\r\n	<li>Airport transfers including visits during the entire program</li>\r\n	<li>All visits, lectures as per the program and fees as mentioned in the program.</li>\r\n	<li>All fees for local monuments</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What&nbsp; is not included:</strong></p>\r\n\r\n<ul>\r\n	<li>International round trip airfare</li>\r\n	<li>Visas fee</li>\r\n	<li>Personal insurances and health insurance in Cuba</li>\r\n	<li>Items of personal nature</li>\r\n	<li>Anything not mentioned in the itinerary</li>\r\n</ul>\r\n\r\n<p><strong>All programs and prices are subject to availability and can be customized for change</strong><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong><strong>Terms &amp; Conditions:</strong></p>\r\n\r\n<p>Please visit&nbsp;<a href=\"http://demos.logocrust.com/ak/cuba/terms-and-conditions/\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-decoration-line: none; outline: 0px; color: rgb(0, 0, 0);\">terms &amp; conditions</a>&nbsp;section</p>\r\n', 'Active', '', '', '', '', '', 'Medical Missions            ', '                          ', '                          ', '2019-06-17 16:02:37'),
(4, 4, 'TR0004', 'Domestic', 'domestic', 'Orissa', 'domestic/orissa', 'Art & Architecture', 'art-architecture', '', '', 'Yes', '6 days / 5 nights', '', '2999', '3500', '', '', '872871914slider-1.jpg', 2, '   We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome. ', '<p><span style=\"font-family:inherit; font-size:12pt\"><strong>Trip summary : &nbsp;</strong></span></p>\r\n\r\n<p>Art &amp;Architecture .&nbsp; Meet local artists and indulge in the educational history and Architecture of Cuba.</p>\r\n\r\n<p><strong>Price:&nbsp;</strong>$1095 per person</p>\r\n\r\n<p><span style=\"font-family:inherit; font-size:12pt\"><strong>&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-family:inherit; font-size:12pt\"><strong>What is Included:</strong><strong>&nbsp;</strong></span></p>\r\n\r\n<ul>\r\n	<li>Accommodation at the mission on quad sharing (In clean air conditioned and well maintained facility) .</li>\r\n	<li><span style=\"font-family:inherit; font-size:12pt\">All meals</span></li>\r\n	<li><span style=\"font-family:inherit; font-size:12pt\">Airport transfers including visits during the entire program</span></li>\r\n	<li><span style=\"font-family:inherit; font-size:12pt\">All visits, lectures as per the program and Guide fees</span></li>\r\n	<li><span style=\"font-family:inherit; font-size:12pt\">All fees for local monuments</span></li>\r\n</ul>\r\n', '<p><strong>What is Included:</strong><strong>&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Accommodation at the mission on Quad sharing (In clean air conditioned and well maintained facility) .</li>\r\n	<li>All meals (Breakfast, Lunch &amp; Dinner)</li>\r\n	<li>Airport transfers including visits during the entire program</li>\r\n	<li>All visits, lectures as per the program and fees as mentioned in the program.</li>\r\n	<li>All fees for local monuments</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What&nbsp; is not included:</strong></p>\r\n\r\n<ul>\r\n	<li>International round trip airfare</li>\r\n	<li>Visas fee</li>\r\n	<li>Personal insurances and health insurance in Cuba</li>\r\n	<li>Items of personal nature</li>\r\n	<li>Anything not mentioned in the itinerary</li>\r\n</ul>\r\n\r\n<p><strong>All programs and prices are subject to availability and can be customized for change</strong><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong><strong>Terms &amp; Conditions:</strong></p>\r\n\r\n<p>Please visit&nbsp;<a href=\"http://demos.logocrust.com/ak/cuba/terms-and-conditions/\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-decoration-line: none; outline: 0px; color: rgb(0, 0, 0);\">terms &amp; conditions</a>&nbsp;section</p>\r\n', 'Active', '', '', '', '', '', '  Art & Architecture               ', '                                ', '                                ', '2019-06-17 16:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `productsubcategory`
--

CREATE TABLE `productsubcategory` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `pid` int(20) NOT NULL,
  `pageorder` int(20) NOT NULL,
  `fname` text NOT NULL,
  `pages` text NOT NULL,
  `optionallink` text NOT NULL,
  `brief` text NOT NULL,
  `photo` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsubcategory`
--

INSERT INTO `productsubcategory` (`id`, `name`, `link`, `pid`, `pageorder`, `fname`, `pages`, `optionallink`, `brief`, `photo`, `status`, `date`) VALUES
(1, 'International', 'international', 1, 1, 'Thailand', 'international/thailand', 'international/thailand', '', '', 'Active', '2019-06-15 12:44:46'),
(2, 'Domestic', 'domestic', 2, 1, 'Orissa', 'domestic/orissa', 'domestic/orissa', '', '', 'Active', '2019-06-15 13:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `projectpages`
--

CREATE TABLE `projectpages` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `tagline` text NOT NULL,
  `pageorder` int(20) NOT NULL,
  `brief` text NOT NULL,
  `photo` text NOT NULL,
  `imgstatus` text NOT NULL,
  `metatoptitle` text NOT NULL,
  `metakeywords` text NOT NULL,
  `metadescription` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectpages`
--

INSERT INTO `projectpages` (`id`, `name`, `pages`, `tagline`, `pageorder`, `brief`, `photo`, `imgstatus`, `metatoptitle`, `metakeywords`, `metadescription`, `date`) VALUES
(1, 'Eradicating Hunger, Poverty and Malnutrition', 'eradicating-hunger-poverty-and-malnutrition', '                          <p align=\"justify\">  The poverty alleviation programmes in India can be categorised based on whether it is targeting rural areas or urban areas in the country. Most of the programmes are designed..</p>                ', 1, '<p style=\"text-align:justify\">The&nbsp;poverty alleviation programmes in India&nbsp;can be categorised based on whether it is targeting&nbsp;rural areas or urban areas in the country.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Most of the programmes are designed to target rural population&nbsp;as the prevalence of poverty is high in rural areas. Also, targeting poverty is a great challenge in rural areas due to various geographic and infrastructure limitations.</p>\r\n\r\n<p style=\"text-align:justify\">We at Third Planet Foundation emphasize on integrated development approach catering to the 5 major pillars of sustainable development.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Social Development</li>\r\n	<li style=\"text-align:justify\">Economic Development and Security</li>\r\n	<li style=\"text-align:justify\">Food Security</li>\r\n	<li style=\"text-align:justify\">Gender Equality</li>\r\n	<li style=\"text-align:justify\">Environment Sustainability</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.&nbsp;<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '26071Canva - Two Poor Kids.jpg', 'Active', '                          Eradicating Hunger, Poverty and Malnutrition, Poverty Alleviation India, Hunger and Malnutrition, Development Impact in India                           ', '                          Eradicating Hunger, Poverty and Malnutrition, Poverty and Malnutrition, Poverty Alleviation India, Hunger and Malnutrition, Sustainable Development Impact, Eradicating Poverty in India, Third Planet Foundation                                       ', '                          The poverty alleviation programmes in India can be categorised based on whether it is targeting rural areas or urban areas in the country. Most of the programmes are designed.                         ', '2020-09-08 16:16:55'),
(2, 'Rural and Slum Area Development', 'rural-and-slum-area-development', '        <p align=\"justify\"> The prime focus of rural and slum area development programmes in India is to uplift the communities and work towards the welfare of the underprivileged in a holistic manner.. </p>        ', 2, '<p style=\"text-align:justify\">The prime focus of rural and slum area development programmes in India is to uplift the communities and work towards the welfare of the underprivileged in a holistic manner. The development approach differ in rural and slum areas due to diverse demographics however, the interventions cater to all the segments of the communities.</p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation adopts customized approach based on communities need and implements sustainable projects in diverse thematic areas.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Livelihood Development for the underprivileged including Skill Development, Vocational Training, Entrepreneurship Development and Women Empowerment</li>\r\n	<li style=\"text-align:justify\">Access to Safe Drinking Water, Sanitation Facilities, Waste Management, Awareness, Behavioural Change&nbsp;Communication and IEC Dissemination</li>\r\n	<li style=\"text-align:justify\">Social Infrastructure Development including Drainage Facilities, Construction or Renovation of Community Infrastructure including Aanganwadis, Health Centres (PHCs, CHCs etc.), Community &amp; Panchayat Halls, Playground, Community toilets among others</li>\r\n	<li style=\"text-align:justify\">Access to Quality Healthcare through health camps, mobile health unts, supply of medicines, capacity building of aanganwadi &amp; ASHA workers, technology integration, health committees, adolescent healthcare, nutrition, menstrual hygiene, awareness, behavioural change and IEC dissemination</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Access to Quality Education by ensuring Digital and STEM Education, Training of Teachers (ToT), Bridge Education &amp; Remedial Sessions, Sports for Development, School Infrastructure Development, Waste Management, School Management Committees (SMCs), Counselling Sessions and Personality Development</li>\r\n	<li style=\"text-align:justify\">Agriculture Development through Farmers Club, Kisan Seva Kendra (Farmers Information Centre), Soil Health Management, Demonstration Farming, Organic Farming Techniques, Expert Training Sessions, On Farm Water Management, Weed Management, Provision of Modern Technology &amp; Machines, Agro Tourism, Saatvik Haats (Exhibitions), Agriculture eCommerce Portal (e-saatvik), Awareness about&nbsp;Government Schemes, IEC Dissemination&nbsp;among others</li>\r\n	<li style=\"text-align:justify\">Financial Inclusion and Literacy to ensure information and linkages of&nbsp;financial products, schemes, grants for the underprivileged communities</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '20735india-4156813_1920.jpg', 'Active', '                Rural Development and Slum Area Development, Quality Education in India, Promoting Healthcare, Community Mobilisation, Youth Skill Development, Women Empowerment in India         ', '                Rural Development and Slum Area Development, Quality Education in India, Promoting Healthcare, Community Mobilisation, Livelihood Development, Youth Skill Development, Women Empowerment, Social infrastructure Development in India, IEC, Behavioural Change Communication, Third Planet Foundation                           ', '                The prime focus of rural and slum area development programmes in India is to uplift the communities and work towards the welfare of the underprivileged in a holistic manner.          ', '2020-09-08 16:17:10'),
(3, ' Promoting Education', '-promoting-education', '            <p align=\"justify\"> Quality Education is a very important factor in the economic development of any country. India since the early days of independence has always focused on improving the literacy rate of the country..</p>      ', 3, '<p style=\"text-align:justify\">Quality Education&nbsp;is a very important factor in the economic development of any country.&nbsp;India since the early days of independence has always focused on improving the literacy rate of the country. Even today the government runs many programmes to&nbsp;promote&nbsp;Primary and Higher&nbsp;Education&nbsp;in&nbsp;India. Many innovative Quality Education CSR programs are also being implemented and many more are needed in a sustainable manner.</p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation is putting lot of efforts towards conceptualizing and implementing innovative and technology centric quality education programmes for the children who are deprived from the right and access to education and learning.</p>\r\n\r\n<p style=\"text-align:justify\">We focus on integrated development of a child by offering theory and activity based learning for knowledge and skills enhancement. Our interventions include; Quality and Child-friendly Educational Infrastructure &amp; Facilities, Digital and STEM Education, Training of Teachers (ToT), Bridge Education &amp; Remedial Sessions, Sports for Development, Access to Safe Drinking Water &amp; Sanitation Facilities, Waste Management, School Management Committees (SMCs), Counselling Sessions, Promoting Co-curricular Activities, Career Path Counselling &amp; Exposure, Soft Skills and Personality Development.</p>\r\n\r\n<p style=\"text-align:justify\">Reference Link:</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://www.mhrd.gov.in/sites/upload_files/mhrd/files/NEP_Final_English_0.pdf\">National Education Policy 2020 - MHRD</a></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '28340Canva - Happy Children in School.jpg', 'Active', '            Promoting Education, Quality Education in India, Education Policy of India, National Education Policy 2020 India         ', '            Promoting Education, Quality Education in India, Education Policy of India, National Education Policy 2020 India, Digital Education in India, STEM Education, Child-friendly Educational Infrastructure & Facilities, School Management Committee SMC, Sports for Development in India, Safe Drinking Water, WASH in India, Third Planet Foundation   ', '            Quality Education is a very important factor in the economic development of any country. India since the early days of independence has always focused on improving the literacy rate of the country. ', '2020-09-09 13:29:36'),
(4, 'Promoting Healthcare', 'promoting-healthcare', '                   <p align=\"justify\"> Quality Healthcare is a very important aspect of life and well being. Since Independence, India has worked and improved a lot on healthcare facilities and services. Health is critical and is linked with other social economic..</p>             ', 4, '<p style=\"text-align:justify\">Quality Healthcare is a very important aspect of life and wellbeing. Since Independence, India has worked and improved a lot on healthcare facilities and services. Health is critical and is linked with other social and economic aspects hence, continuous efforts are required to ensure access to quality healthcare services to all.</p>\r\n\r\n<p style=\"text-align:justify\">The year 2020 comes with a global pandemic; COVID-19 which has impacted the population globally in both social and economic aspects. The challenge is big and affected the mass hence, we all learn how important is to invest in quality healthcare and practices.</p>\r\n\r\n<p style=\"text-align:justify\">During COVID-19, we all come together and put in efforts in any manner possible towards the humanitarian need. The social economic impact is going to last for long hence, Third Planet Foundation is working on COVID-19 Relief and Rehabilitation for the affected communities and population.</p>\r\n\r\n<p style=\"text-align:justify\">Along with COVID-19 Relief and Rehabilitation interventions, Third Planet Foundation focusses on tailormade healthcare projects based on disease trend as per demographic, health analysis and acceptability which helps in focussed interventions for betterment and improvement. We emphasize on Preventive Healthcare, Adolescent Health, Emergency Preparedness and Response, Reproductive Health, Maternal and Child Health at rural and urban setup.</p>\r\n\r\n<p style=\"text-align:justify\">We bring in effective communication (IEC, Awareness &amp;&nbsp;Behavioural Change) during the on-ground interventions to ensure the communities understand, participate, follow and take ownership leading to sustainability.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '99734science-in-hd-QERDepT9Zf0-unsplash(1).jpg', 'Active', '                   Promoting Healthcare, COVID19 India, Coronavirus in India, Mobile Health Unit, Preventive Healthcare in India                  ', '                   Promoting Healthcare, COVID19 India, Coronavirus in India, Mobile Health Unit, Preventive Healthcare, Disease Trend India, Adolescent Healthcare in India Villages, Reproductive Healthcare, Maternal and Child Health in India, Third Planet Foundation              ', '                   Quality Healthcare is a very important aspect of life and well being. Since Independence, India has worked and improved a lot on healthcare facilities and services. Health is critical and is linked with other social economic.                 ', '2020-09-09 13:33:23'),
(5, 'Promoting Skill & Livelihood Development', 'promoting-skill-livelihood-development', '               <p align=\"justify\"> GIVE a man a fish and you feed him for a day; TEACH a man to fish and you feed him for a lifetime. It is important to have the right skills and access to opportunities to ensure socio-economic.. </p>         ', 5, '<p style=\"text-align:justify\">GIVE a&nbsp;man&nbsp;a&nbsp;fish&nbsp;and you feed him for a day;&nbsp;TEACH a man&nbsp;to&nbsp;fish&nbsp;and you feed him for a lifetime. It is important to have the right skills and access to opportunities to ensure socio-economic development of the society.</p>\r\n\r\n<p style=\"text-align:justify\">National Skill Development Mission was launched by Government of India in 2015 on the occasion of Work Youth Skills Day to create convergence across sectors and States in terms of skill training programmes. Skill India emphasizes on skilling the youth as per industry guidelines and linkages towards employment and entrepreneurship development.</p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation believes and work towards the compete lifecycle of skilling, re-skilling and upskilling to placements, entrepreneurship and livelihood generation leading to holistic sustainable development.</p>\r\n\r\n<p style=\"text-align:justify\">Our projects aims to mobilize, train and place urban, semi-urban and rural underprivileged youth, women and men to create a pool of self-reliant people who cater as skilled manpower in the fast emerging industries and economy. We work towards facilitating livelihood&nbsp;skill gap analysis of the local market and industry mapping to provide skills linked with livelihood opportunities. Step-by-step process includes:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Skill Gap Analysis</li>\r\n	<li style=\"text-align:justify\">Industry and Trade Mapping</li>\r\n	<li style=\"text-align:justify\">Centre of Excellence / Training Centre Set-up and Manpower Deployment</li>\r\n	<li style=\"text-align:justify\">Mobilization and Engagement</li>\r\n	<li style=\"text-align:justify\">Counselling, Screening and Enrolment</li>\r\n	<li style=\"text-align:justify\">Theory and practical Training (as per National Skill Development Corporation - NSDC and Sector Skill Council &ndash; SSC guidelines)</li>\r\n	<li style=\"text-align:justify\">Potential Employers Mapping and Engagement</li>\r\n	<li style=\"text-align:justify\">Exposure Visits</li>\r\n	<li style=\"text-align:justify\">Guest Lectures</li>\r\n	<li style=\"text-align:justify\">Live Projects</li>\r\n	<li style=\"text-align:justify\">Assessment and Certification &ndash; NSDC and SSC</li>\r\n	<li style=\"text-align:justify\">On the Job Training / Apprenticeship</li>\r\n	<li style=\"text-align:justify\">Placements and Entrepreneurship Development (minimum 70% assurance)</li>\r\n	<li style=\"text-align:justify\">Post Placement Tracking</li>\r\n	<li style=\"text-align:justify\">MIS, Monitoring &amp; Evaluation &ndash; ongoing process</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation also ensures all the trainees receive Soft Skills, Basic Communication and Personality Development training sessions to make them prepared, confident and presentable for the market absorption.</p>\r\n\r\n<p style=\"text-align:justify\">Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\n<strong>You can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '36857weaving-285220_1920.jpg', 'Active', '              Promoting Skill & Livelihood Development, Re-Skilling and Up-skilling in India, Migrant Workers, NSDC and SSC Guidelines, National Skill Development Mission India    ', '              Promoting Skill & Livelihood Development, Re-Skilling and Up-skilling in India, Migrant Workers, NSDC and SSC Guidelines, National Skill Development Mission India, Skill Gap Analysis and Skill Mapping in India, Industry and Trade Mapping, Centre of Excellence India, Mobilisation, Training and Placement, Vocational Training Assessment and Certification in India, Third Planet Foundation ', '              GIVE a man a fish and you feed him for a day; TEACH a man to fish and you feed him for a lifetime. It is important to have the right skills and access to opportunities to ensure socio-economic.           ', '2020-09-09 13:39:06'),
(6, 'Water Sanitation and Hygiene (WASH)', 'water-sanitation-and-hygiene-wash-', '          <p align=\"justify\"> Swachh Bharat Mission or Swachh Bharat Abhiyan (SBA) or Clean India Mission is a country-wide programme started in 2014 by Government of India. It emphasizes on eliminating open defecation and improve solid..</p>     ', 6, '<p style=\"text-align:justify\">Swachh Bharat Mission or&nbsp;Swachh Bharat Abhiyan&nbsp;(SBA) or&nbsp;Clean India Mission&nbsp;is a country-wide programme started in 2014 by Government of India. It emphasizes on&nbsp;eliminating&nbsp;open defecation&nbsp;and improve&nbsp;solid waste management&nbsp;in urban and rural areas in India. The objectives of the mission also included eradication of&nbsp;manual scavenging, generating awareness and bringing about behaviour change regarding&nbsp;sanitation&nbsp;practices, and augmentation of&nbsp;capacity&nbsp;at the local level. The mission aimed at progressing towards target 6.2 of the&nbsp;Sustainable Development Goals Number 6&nbsp;established by the United Nations in 2015.</p>\r\n\r\n<p style=\"text-align:justify\">Our team at Third Planet Foundation focusses on developing and implementing innovative interventions related to Water, Sanitation and Hygiene. We believe and promote; the change can only be sustainable through acceptance, participation&nbsp;and ownership among the communities.</p>\r\n\r\n<p style=\"text-align:justify\">Our projects interventions include Safe Waste Disposal, Set-up&nbsp;Household, Community and Schools Toilets, Promotion of Best Sanitation and Hygiene Practices, Awareness, Behavioural Change and IEC dissemination. Align to the guidelines of Ministry of Jal Shakti, we focus on Water Conservation,&nbsp;Rain Water Harvesting, and Access to Safe Drinking Water through Community Water ATMs, School RO units among others.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '100004Canva - Children Standing next to Manual Water Pump.jpg', 'Active', '        Water Sanitation and Hygiene (WASH), Swachh Bharat Mission, Ministry of Jal Shakti, Water Conservation India, Rain Water Harvesting, Sanitation and Hygiene Practices, Community Water ATM in India         ', '        Water Sanitation and Hygiene (WASH), Swachh Bharat Mission, Water Conservation India, Rain Water Harvesting, Sanitation and Hygiene Practices, Community Water ATM in India, IEC Awareness and Behavioural Change Communication BCC , Toilet Complexes Construction and Renovation in India, Solid Waste Management, Third Planet Foundation            ', '        Swachh Bharat Mission or Swachh Bharat Abhiyan (SBA) or Clean India Mission is a country-wide programme started in 2014 by Government of India. It emphasizes on eliminating open defecation and improve solid.  ', '2020-09-09 13:54:52'),
(7, ' Gender Equality and Empowering Women<br>', '-gender-equality-and-empowering-women-br-', '            <p align=\"justify\">Women empowerment programmes are very important for a country to grow and continuous efforts are required to ensure gender equality and empowering women in our society.. </p>          ', 7, '<p style=\"text-align:justify\">Women empowerment programmes are very important for a country to grow and continuous efforts are required to ensure gender&nbsp;equality and empowering women in our society. The government and many institutions are putting efforts towards upliftment of marginalized women, building their self-esteem and making them self-reliant.</p>\r\n\r\n<p style=\"text-align:justify\">A country with empowered women leads in all manner and make a difference in the world. Third Planet Foundation respects women and believe they have all the right and capability to learn, grow and empower themselves.</p>\r\n\r\n<p style=\"text-align:justify\">Our programmes focusses on integrated development of women as it helps in overall socio-economic development. We work on various strategies including skill enhancement through Self Help Group (SHG)&nbsp;and Vocational Training.</p>\r\n\r\n<p style=\"text-align:justify\">We mobilize women of the communities and share livelihood opportunities for them to improve their standard of living. We provide them training as per market mapping, trade mapping, life skill sessions, financial literacy, exposure visits, bank and market linkages, create SHG federation and microenterprise development.</p>\r\n\r\n<p style=\"text-align:justify\">Our interventions revolve around holistic development of women and promote gender equality.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '95728https___www.imagesofempowerment.org_wp-content_uploads_hewlett_India_fullrelease73-scaled.jpg', 'Active', '            Gender Equality and Empowering Women, Women Empowerment India, Self Help Group SHG, Self Reliant India, Financial Literacy and Inclusion  in India          ', '           Gender Equality and Empowering Women, Women Empowerment India, Self Help Group SHG, Self Reliant India, Financial Literacy and Inclusion  in India, Trade Mapping, Vocational training, Skill Development and Market Linkages, Micro-enterprise in India, Third Planet Foundation                    ', '            Women empowerment programmes are very important for a country to grow and continuous efforts are required to ensure gender equality and empowering women in our society. ', '2020-09-09 13:57:59'),
(8, 'Agriculture Development & Environment Sustainability', 'agriculture-development-environment-sustainability', '                           <p align=\"justify\">Agriculture and its allied sectors are the largest livelihood provider in India. Our majority population is engaged in agriculture related activities and are dependent solely on the production and earning through them..</p>                  ', 8, '<p style=\"text-align:justify\">Agriculture and its allied sectors are the largest livelihood provider in India. Our majority population is engaged in agriculture related activities and are dependent solely on the production and earning through them. Since independence, the Indian government has come up with various agriculture development schemes and laws to improve the agriculture sector and offered support to the farmers towards development and upliftment. Parallelly, companies and institutions are constantly working towards agriculture development with innovations in the sector, though continuous efforts are required to ensure our farmers and their families are supported leading to&nbsp;effective, efficient and sustainable agriculture growth in India.<br />\r\n<br />\r\nThird Planet Foundation is working towards bringing innovation and technology towards agriculture development and environment sustainability. Our team engages with the farmers and work towards steady investments in technology&nbsp;development, irrigation infrastructure, emphasis on modern&nbsp;agricultural&nbsp;practices and provision of&nbsp;agricultural&nbsp;credit and subsidies.<br />\r\n<br />\r\nOur projects are focused on making agriculture more productive, innovative, sustainable, remunerative and climate resilient by promoting integrating farming techniques. Our agriculture development interventions include Farmers Engagement through Formation of Farmers Club, Krishi Information Centre / Kisan Seva Kendra, Soil Health Management, On Farm Water Management, Integrated Nutrients Management, Demonstration Farms, Vermi Composting, Horticulture, Organic Farming, Weed Management, Saatvik Haats (Farm Produce Exhibitions), Farmers Producer Company among others.<br />\r\n<br />\r\nThird Planet Foundation emphasis on market linkages, technology integration, training sessions and linkages with agriculture related government bodies and schemes to ensure farmers economic development and sustainability.<br />\r\n<br />\r\nWe believe in and are committed towards environment sustainability including energy conservation and promotion of renewable energy. Our project interventions revolve around Installation of Solar Panels in communities and schools, Installation of Solar Streetlights, Setting-up of Bio-gas Plants, Solar Lanterns and Stoves, Plantation Drives among others. At the same time, we work towards generating awareness among the communities about environment, energy conservation and efficiency.<br />\r\n<br />\r\n<strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '26408Untitled.jpg', 'Active', '                     Agriculture Development & Environment Sustainability, Crop Stubble Management, Farmer Agriculture Practices, Government of India Agriculture Schemes                      ', '                     Agriculture Development & Environment Sustainability, Crop Stubble Management, Farmer Agriculture Practices, Government of India Agriculture Schemes, Climate Resilient Agriculture Development, Integrated Farming Techniques, Soil Health Management and On Farm Water Management, Demonstration Farms, Vermi Composting, Horticulture and Organic Farming in India, Promoting Renewable, Solar Energy in India, Third Planet Foundation  ', '                     Agriculture and its allied sectors are the largest livelihood provider in India. Our majority population is engaged in agriculture related activities and are dependent solely on the production and earning through them.                    ', '2020-09-09 14:03:36'),
(9, 'Disaster & COVID-19 Relief and Rehabilitation', 'disaster-covid-19-relief-and-rehabilitation', '                   <p align=\"justify\">Third Planet Foundation work on relief and rehabilitation during pandemic and natural disasters including tsunami, floods, earthquakes among others. During the tough times. the affected communities..</p>           ', 9, '<p style=\"text-align:justify\">Third Planet Foundation work&nbsp;on&nbsp;relief and rehabilitation during pandemic and natural disasters including tsunami, floods, earthquakes among others. During the tough times, the affected communities face tremendous challenges with lives on stake. Our dedicated team work at the impact ground directly with the affected communities and ensure support and care is provided during the tough times.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><u>COVID 19 Relief and Rehabilitation</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">What is COVID-19?</p>\r\n\r\n<p style=\"text-align:justify\">Coronavirus disease 2019&nbsp;(COVID-19) is an&nbsp;infectious disease&nbsp;caused by&nbsp;severe acute respiratory syndrome coronavirus 2&nbsp;(SARS-CoV-2).The disease was first identified in 2019 in&nbsp;Wuhan,&nbsp;China, and has since spread globally, resulting in the&nbsp;2019&ndash;20 coronavirus pandemic. Common symptoms include&nbsp;fever,&nbsp;cough, and&nbsp;shortness of breath. Muscle pain,&nbsp;sputum&nbsp;production and sore throat are less common. While the majority of cases result in mild symptoms,&nbsp;some progress to severe&nbsp;pneumonia&nbsp;and&nbsp;multi-organ failure. The&nbsp;rate of deaths per number of diagnosed cases&nbsp;is on average 3.4%, ranging from 0.2% in those under 20, to approximately 15% in those over 80 years old. Patients with pre-existing conditions, including&nbsp;hypertension,&nbsp;diabetes mellitus, and&nbsp;cardiovascular disease, are most at risk and represent the vast majority of deaths. The infection is typically spread from one person to another via&nbsp;respiratory droplets&nbsp;produced during coughing and sneezing.&nbsp;Time from exposure to onset of symptoms is generally between two and 14 days, with an average of five days. <em>Source &ndash; Online articles, WHO and Ministry of Health</em>.</p>\r\n\r\n<p style=\"text-align:justify\">Impact of COVID-19 in India</p>\r\n\r\n<p style=\"text-align:justify\">Indian government along with WHO has declared Coronavirus as a pandemic. It has impacted all spheres of the economy as well as the day to day lives of the people. Schools, colleges, cinema halls, malls have been shut across the nation. Companies have instructed their employees to work from home to curb the outbreak of COVID-19. People are living with a state of fear in their minds and everyone is worried about what to do next.</p>\r\n\r\n<p style=\"text-align:justify\">On 24 March 2020, the&nbsp;Prime Minister&nbsp;of India announced a 21-day nationwide lockdown: &ldquo;In order to protect the country, and each of its citizens, from midnight tonight, a complete ban is being imposed on people from stepping out of their homes.&rdquo; The lockdown was further extended to months and later Unlock procedure was initiated however, with lot of restriction.</p>\r\n\r\n<p style=\"text-align:justify\">Challenges in India linked with COVID-19</p>\r\n\r\n<p style=\"text-align:justify\"><u>Health &amp; Behavioural</u></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">There is no vaccine available anywhere in the world to prevent coronavirus till now though, vaccination trials are ongoing as per WHO.</li>\r\n	<li style=\"text-align:justify\">Lack of awareness amongst the masses about the virus.</li>\r\n	<li style=\"text-align:justify\">Ignorance is also a major challenge in India as it has been observed that people with suspicion of being affected are running away from the hospitals and people are ignoring the importance of self-quarantine and isolation.</li>\r\n	<li style=\"text-align:justify\">Access to proper testing facilities and centres has been a challenge in India due to limited testing facilities are providing services to test COVID-19.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><u>Economy, Livelihood &amp; Sustainability</u></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">It is been declared a National Lockdown for 21 days starting from 25th March 2020.</li>\r\n	<li style=\"text-align:justify\">Due to national lockdown, emergency and essential services are only operational and others are completely shut down.</li>\r\n	<li style=\"text-align:justify\">Economy hit due to global crisis will lead a major impact the industries and businesses.</li>\r\n	<li style=\"text-align:justify\">BPL (Below Poverty Line) families that includes migrant workers and daily wage earners are facing challenges across India due to the lockdown and they have very limited / minimal access to essential items including food for them and their families.</li>\r\n	<li style=\"text-align:justify\">Another critical aspect is the sustainability of the migrant workers, daily wage earners and BPL communities as what will happen to them and how they will earn post the lockdown.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><u>Reference Links:</u></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><a href=\"https://www.who.int/india/emergencies/coronavirus-disease-(covid-19)\">World Health Organization &ndash; WHO</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://www.mohfw.gov.in\">Ministry of Health and Family Welfare - MoHFW</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://www.bbc.com/news/world-asia-india-52086274\">BBC</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://economictimes.indiatimes.com/news/politics-and-nation/coronavirus-supreme-court-seeks-status-report-from-centre-on-steps-taken-to-prevent-migration-of-workers/articleshow/74885965.cms\">Economic Times</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://www.news18.com/news/opinion/pandemic-on-the-move-with-thousands-of-migrant-workers-covid-19-may-have-travelled-to-villages-with-no-labs-hospitals-2555735.html\">News18</a></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation is working towards relief and rehabilitation for the daily wage earners, migrant workers and their families. We urge to come forward and support the affected people in need during the challenging time. Support them with <strong>Food and Essential Supply</strong> including Rice, Wheat Flour, Pulses, Spices, Cooking Oil, Soaps, Masks, Basic Medicines, Sanitizer etc. You can also support by providing them <strong>Financial Assistance</strong>&nbsp;which can help the affted people to sustain and support their families.</p>\r\n\r\n<p style=\"text-align:justify\">As the journey ahead is long and challenging for the most affected, there is an immediate need for <strong>Rehabilitation Interventions</strong>. Third Planet Foundation is working towards rehabilitation interventions through a holistic development approach including <strong>facilitating livelihoods through skill gap analysis of the local market and industry mapping . Emphasize on skilling, re-skilling and upskilling linked with placements and entrepreneurship development. Covering other critical aspects including access to quality education for the children of the affected along with healthcare and hygiene to the affected population.</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '52139Canva - Girl Wearing A Mask.jpg', 'Active', '             Disaster & COVID-19 Relief and Rehabilitation, COVID19 India, Coronavirus in India, DRR and NDMA India             ', '             isaster & COVID-19 Relief and Rehabilitation, COVID19 India, Coronavirus in India, DRR and NDMA India, Migrant Workers and Daily Wage Earners, Disaster Risk Reduction in India, Livelihood and Social Development, Third Planet Foundation           ', '             Third Planet Foundation work on relief and rehabilitation during pandemic and natural disasters including tsunami, floods, earthquakes among others. During the tough times. the affected communities.         ', '2020-09-09 14:11:26'),
(10, 'Sustainable Development Goals (SDG)', 'sustainable-development-goals-sdg-', '  The Sustainable Development Goals (SDGs) are a set of global goals that meet some of the most pressing challenges facing our world today.    ', 10, '<p style=\"text-align:justify\"><strong>About the Sustainable Development Goals (SDGs)&nbsp;</strong></p>\r\n\r\n<p style=\"text-align:justify\">The Sustainable Development Goals (SDGs) are a set of global goals that meet some of the most pressing challenges facing our world today. These 17 Goals are inspired by the Millennium Development Goals (MDGs), while including new areas such as climate change, economic inequality, innovation, sustainable consumption, peace&nbsp;and&nbsp;justice, among other priorities. All Goals are interconnected, which means success in one results in success for others. For instance, achieving better health helps eradicate poverty and helps economies prosper. In other words, this is the greatest chance to leave a better world for future generations by 2030 for the world and India.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>The Background</strong></p>\r\n\r\n<p style=\"text-align:justify\">The SDGs were formed at the UN Conference on Sustainable Development in Rio de Janeiro in 2012. These goals replace the MDGs of 2000 that aimed to tackle extreme poverty and hunger, prevent deadly diseases, and expand primary education to all children, among other development priorities. The MDGs drove progress in several important areas, especially in combating HIV/AIDS and other treatable diseases such as malaria and tuberculosis. The successes of MDGs provided valuable lessons to begin work on the new goals and build a more sustainable, safer, and prosperous planet for all humanity.</p>\r\n\r\n<p style=\"text-align:justify\">India played a significant role in the formulation of SDGs and much of the country&rsquo;s National Development Agenda is reflected in the SDGs. That is why, the success of SDGs globally largely depends on the success of SDGs in India.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Reference Links:</p>\r\n\r\n<div style=\"margin-left:.25in;\">\r\n<ul>\r\n	<li style=\"text-align:justify\"><a href=\"https://www.un.org/sustainabledevelopment/sustainable-development-goals/\">United Nation Sustainable Development Goals</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"http://niti.gov.in/writereaddata/files/SDX_Index_India_21.12.2018.pdf\" target=\"_blank\">SDG India Index - Baseline Report 2018</a></li>\r\n</ul>\r\n</div>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation activities and interventions are aligned with Ministry of Corporate Affairs (MCA) guidelines and Sustainable Development Goals (SDG).</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', '522110.jpg', 'Active', '    Sustainable Development Goals (SDG), SDGs India, United Nations SDG, COVID19 and Beyond, MDGs, Ministry of Corporate Affairs MCA Guidelines      ', '    Sustainable Development Goals (SDG), SDGs India, United Nations SDG, COVID19 and Beyond, MDGs, Ministry of Corporate Affairs MCA Guidelines, Third Planet Foundation', '    The Sustainable Development Goals (SDGs) are a set of global goals that meet some of the most pressing challenges facing our world today.   ', '2020-09-09 14:14:18');
INSERT INTO `projectpages` (`id`, `name`, `pages`, `tagline`, `pageorder`, `brief`, `photo`, `imgstatus`, `metatoptitle`, `metakeywords`, `metadescription`, `date`) VALUES
(11, 'Developing India', 'developing-india', '   India has faced the COVID-19 situation with fortitude and a spirit of self-reliance, that is evident in the fact that from zero production of Personal Protection Equipment (PPE) before March 2020     ', 11, '<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">Aatmanirbhar Bharat Abhiyaan support Indian economy in fight against COVID-19</span><br />\r\n(</strong><em>Source - </em><a href=\"https://www.india.gov.in/spotlight/building-atmanirbhar-bharat-overcoming-covid-19\"><em>https://www.india.gov.in/spotlight/building-atmanirbhar-bharat-overcoming-covid-19</em></a><em>)</em></p>\r\n\r\n<p style=\"text-align:justify\">India has faced the COVID-19 situation with fortitude and a spirit of self-reliance, that is evident in the fact that from zero production of Personal Protection Equipment (PPE) before March 2020, India today has created a capacity of producing 2 lakh PPE kits daily, which is also growing steadily.</p>\r\n\r\n<p style=\"text-align:justify\">Additionally, India has demonstrated how it rises up to challenges and uncovers opportunities therein, as manifested in the re-purposing of various automobile sector industries to collaborate in the making of life-saving ventilators. The clarion call given by the Hon&#39;ble PM to use these trying times to become <em><strong>Atmanirbhar&nbsp;(self-reliant)</strong></em> has been very well received to enable the resurgence of the Indian economy.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">The Five Pillars of Atmanirbhar Bharat&nbsp;focuses on:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Economy</li>\r\n	<li style=\"text-align:justify\">Infrastructure</li>\r\n	<li style=\"text-align:justify\">System&nbsp;</li>\r\n	<li style=\"text-align:justify\">Vibrant Demography and&nbsp;</li>\r\n	<li style=\"text-align:justify\">Demand</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">The Five Phases of Atmanirbhar Bharat are:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><a href=\"https://cdnbbsr.s3waas.gov.in/s3850af92f8d9903e7a4e0559a98ecc857/uploads/2020/05/2020051717.pdf\" target=\"_blank\"><strong>Phase-I</strong></a>: Businesses including MSMEs</li>\r\n	<li style=\"text-align:justify\"><a href=\"https://cdnbbsr.s3waas.gov.in/s3850af92f8d9903e7a4e0559a98ecc857/uploads/2020/05/2020051751.pdf\" target=\"_blank\"><strong>Phase-II</strong></a>: Poor, including migrants and farmers</li>\r\n	<li style=\"text-align:justify\"><a href=\"https://cdnbbsr.s3waas.gov.in/s3850af92f8d9903e7a4e0559a98ecc857/uploads/2020/05/2020051736.pdf\" target=\"_blank\"><strong>Phase-III</strong></a>: Agriculture</li>\r\n	<li style=\"text-align:justify\"><a href=\"https://cdnbbsr.s3waas.gov.in/s3850af92f8d9903e7a4e0559a98ecc857/uploads/2020/05/2020051784.pdf\" target=\"_blank\"><strong>Phase-IV</strong></a>: New Horizons of Growth</li>\r\n	<li style=\"text-align:justify\"><a href=\"https://cdnbbsr.s3waas.gov.in/s3850af92f8d9903e7a4e0559a98ecc857/uploads/2020/05/2020051740.pdf\" target=\"_blank\"><strong>Phase-V</strong></a>: Government Reforms and Enablers</li>\r\n</ul>\r\n\r\n<div>\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Aspirational Districts Programme by NITI Aayog</strong></span><br />\r\n<em>(Source. - </em><a href=\"https://niti.gov.in/about-aspirational-districts-programme\"><em>https://niti.gov.in/about-aspirational-districts-programme</em></a><em>) </em></p>\r\n\r\n<p style=\"text-align:justify\">Launched by the Hon&rsquo;ble PM in January, the &lsquo;Transformation of Aspirational Districts&rsquo; programme aims to quickly and effectively transform these districts. The broad contours of the programme are Convergence (of Central &amp; State Schemes), Collaboration (of Central, State level &lsquo;Prabhari&rsquo; Officers &amp; District Collectors), and Competition among districts driven by a mass Movement. With States as the main drivers, this program will focus on the strength of each district, identify low-hanging fruits for immediate improvement, measure progress, and rank districts.</p>\r\n\r\n<p style=\"text-align:justify\">The Government is committed to raising the living standards of its citizens and ensuring inclusive growth for all &ndash; &ldquo;Sabka Saath Sabka Vikas&rdquo;. To enable optimum utilization of their potential, this program focusses closely on improving people&rsquo;s ability to participate fully in the burgeoning economy. Health &amp; Nutrition, Education, Agriculture &amp; Water Resources, Financial Inclusion &amp; Skill Development, and Basic Infrastructure are this programme&rsquo;s core areas of focus. After several rounds of consultations with various stakeholders, 49 key performance indicators have been chosen to measure progress of the districts. Districts are prodded and encouraged to first catch-up with the best district within their state, and subsequently aspire to become one of the best in the country, by competing with, and learning from others in the spirit of competitive &amp; cooperative federalism.</p>\r\n\r\n<p style=\"text-align:justify\">NITI Aayog in partnership with the Government of Andhra Pradesh has created a dashboard for monitoring the real-time progress of the districts. District Information Officers underwent training on March 23, 2018 on how to enter data to the dashboard and generate MIS (Management Information System) reports. On April 1, 2018 districts will start entering data. Beginning May 2018, districts will be ranked based on progress made (&lsquo;delta ranking&rsquo;) on a real-time basis. The dashboard will be open to the public to monitor the progress of the aspirational districts.</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://niti.gov.in/sites/default/files/2018-12/AspirationalDistricts-Book.pdf\" target=\"_blank\"><strong>Download - Aspirational Districts - Unlocking Potentials</strong></a><br />\r\n<a href=\"https://niti.gov.in/sites/default/files/2018-12/FirstDeltaRanking-May2018-AspirationalRanking.pdf\" target=\"_blank\"><strong>Download - DEEP DIVE - Insights from Champions of Change The Aspirational Districts Dashboard</strong></a><br />\r\n<a href=\"https://niti.gov.in/sites/default/files/2018-12/Transformation-of-AspirationalDistricts-Primer-ANew-India2022.pdf\" target=\"_blank\"><strong>Download - Transformation of Aspirational Districts - Primer - A New India 2022</strong></a><br />\r\n<a href=\"https://niti.gov.in/sites/default/files/2018-12/PRIMER-ASPIRATIONAL-DISTRICTS-HINDI_0.pdf\" target=\"_blank\"><strong>Download - Transformation of Aspirational Districts - Primer - A New India 2022 - Hindi</strong></a><br />\r\n<a href=\"https://niti.gov.in/sites/default/files/2018-12/AspirationalDistrictsBaselineRankingMarch2018.pdf\" target=\"_blank\"><strong>Download - Aspirational Districts Baseline Ranking, March 2018</strong></a></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>National Skill Development Mission</strong></span><br />\r\n<em>(Source - </em><a href=\"https://www.msde.gov.in/nationalskillmission.html\"><em>https://www.msde.gov.in/nationalskillmission.html</em></a><em>) </em></p>\r\n\r\n<p style=\"text-align:justify\">The National Skill Development Mission was approved by the Union Cabinet on 01.07.2015, and officially launched by the Hon&rsquo;ble Prime Minister on 15.07.2015 on the occasion of World Youth Skills Day. The Mission has been developed to create convergence across sectors and States in terms of skill training activities. Further, to achieve the vision of &lsquo;Skilled India&rsquo;, the National Skill Development Mission would not only consolidate and coordinate skilling efforts, but also expedite decision making across sectors to achieve skilling at scale with speed and standards. It will be implemented through a streamlined institutional mechanism driven by Ministry of Skill Development and Entrepreneurship (MSDE). Key institutional mechanisms for achieving the objectives of the Mission have been divided into three tiers, which will consist of a Governing Council for policy guidance at apex level, a Steering Committee and a Mission Directorate (along with an Executive Committee) as the executive arm of the Mission. Mission Directorate will be supported by three other institutions: National Skill Development Agency (NSDA), National Skill Development Corporation (NSDC), and Directorate General of Training (DGT) &ndash; all of which will have horizontal linkages with Mission Directorate to facilitate smooth functioning of the national institutional mechanism. Seven sub-missions have been proposed initially to act as building blocks for achieving overall objectives of the Mission. They are:</p>\r\n\r\n<p style=\"text-align:justify\">(i) Institutional Training, (ii) Infrastructure, (iii) Convergence, (iv) Trainers, (v) Overseas Employment, (vi) Sustainable Livelihoods, (vii) Leveraging Public Infrastructure.<br />\r\n<a href=\"https://www.msde.gov.in/assets/images/Mission%20booklet.pdf\">Ministry of Skill Development and Entrepreneurship (Government of India)</a></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Swachh Bharat Mission</strong></span><br />\r\n<em>(Source - </em><a href=\"https://swachhbharatmission.gov.in/sbmcms/index.htm\"><em>https://swachhbharatmission.gov.in/sbmcms/index.htm</em></a><em>) </em></p>\r\n\r\n<p style=\"text-align:justify\">To accelerate the efforts to achieve universal sanitation coverage and to put the focus on sanitation, the Prime Minister of India had launched the Swachh Bharat Mission on 2nd October 2014. Under the mission, all villages, Gram Panchayats, Districts, States and Union Territories in India declared themselves &quot;open-defecation free&quot; (ODF) by 2 October 2019, the 150th birth anniversary of Mahatma Gandhi, by constructing over 100 million toilets in rural India. To ensure that the open defecation free behaviours are sustained, no one is left behind, and that solid and liquid waste management facilities are accessible, the Mission is moving towards the next Phase II of SBMG i.e. ODF-Plus. ODF Plus activities under Phase II of Swachh Bharat Mission (Grameen) will reinforce ODF behaviours and focus on providing interventions for the safe management of solid and liquid waste in villages.<br />\r\n<br />\r\n<br />\r\nThird Planet Foundation activities and interventions are aligned with Ministry of Corporate Affairs (MCA) guidelines and Sustainable Development Goals (SDG).</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\">info@3planet.org</a> for more information and collaboration.<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n</div>\r\n', '19966Canva - Close-Up Photography Of A Boy Near A Signboard.jpg', 'Active', '     Developing India, Aatmanirbhar Bharat Abhiyaan, Self Reliant India, Make in India, Aspirational Districts in India, NITI Aayog, MCA, MoRD, Government of India, National Skill Development Mission, Skilling India, Swachh Bharat Mission     ', '          Developing India, Aatmanirbhar Bharat Abhiyaan, Self Reliant India, Make in India, Aspirational Districts in India, NITI Aayog, MCA, MoRD, Government of India, National Skill Development Mission, Skilling India, Swachh Bharat Mission, Jal Shakti, Third Planet Foundation   ', '     India has faced the COVID-19 situation with fortitude and a spirit of self-reliance, that is evident in the fact that from zero production of Personal Protection Equipment (PPE) before March 2020.', '2020-09-09 14:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `resourcepages`
--

CREATE TABLE `resourcepages` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `pageorder` int(20) NOT NULL,
  `brief` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resourcepages`
--

INSERT INTO `resourcepages` (`id`, `name`, `pages`, `pageorder`, `brief`, `date`) VALUES
(1, 'Chemical  - Common database', 'chemical---common-database22', 1, '<p>Carcinogenic Potency Database (CPDB)</p>\r\n\r\n<p><a href=\"https://toxnet.nlm.nih.gov/cpdb/plot10.html\" target=\"_blank\">https://toxnet.nlm.nih.gov/cpdb/plot10.html</a></p>\r\n\r\n<p>Chemical Classification and Information Database (CCID)</p>\r\n\r\n<p><a href=\"http://www.epa.govt.nz/search-databases/pages/hsno-ccid.aspx\" target=\"_blank\">http://www.epa.govt.nz/search-databases/pages/hsno-ccid.aspx</a></p>\r\n\r\n<p>Chemspider&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"http://www.chemspider.com/\" target=\"_blank\">http://www.chemspider.com/</a><br />\r\nECHA&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"https://echa.europa.eu/information-on-chemicals\" target=\"_blank\">https://echa.europa.eu/information-on-chemicals</a><br />\r\nEPA: Substances and Toxics Science&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"https://www.epa.gov/science-and-technology/substances-and-toxics-science\" target=\"_blank\">https://www.epa.gov/science-and-technology/substances-and-toxics-science</a><br />\r\nSRS&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"http://iaspub.epa.gov/sor_internet/registry/substreg/searchandretrieve/substancesearch/search.do\" target=\"_blank\">http://iaspub.epa.gov/sor_internet/registry/substreg/searchandretrieve/substancesearch/search.do</a><br />\r\nFDA GRAS&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"http://www.fda.gov/Food/IngredientsPackagingLabeling/GRAS/\" target=\"_blank\">http://www.fda.gov/Food/IngredientsPackagingLabeling/GRAS/</a><br />\r\nFederal Register<br />\r\n&nbsp;<a href=\"https://www.federalregister.gov/\" target=\"_blank\">https://www.federalregister.gov/</a><br />\r\nHPV&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"http://cfpub.epa.gov/hpv-s/\" target=\"_blank\">http://cfpub.epa.gov/hpv-s/</a><br />\r\nHPV (Standard Query / Report)&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"https://iaspub.epa.gov/oppthpv/public_search.html_page\" target=\"_blank\">https://iaspub.epa.gov/oppthpv/public_search.html_page</a><br />\r\nInternational Chemical Safety Cards (ICSC)<br />\r\n<a href=\"http://https://www.cdc.gov/niosh/ipcs/\" target=\"_blank\">&nbsp;https://www.cdc.gov/niosh/ipcs/</a><br />\r\nOECD-SIDS: Existing Chemicals Database<br />\r\n&nbsp;<a href=\"http://webnet.oecd.org/hpv/ui/Search.aspx\" target=\"_blank\">http://webnet.oecd.org/hpv/ui/Search.aspx</a><br />\r\nSCCP&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"http://ec.europa.eu/health/ph_risk/committees/04_sccp/04_sccp_en.htm\" target=\"_blank\">http://ec.europa.eu/health/ph_risk/committees/04_sccp/04_sccp_en.htm</a><br />\r\nSCCP &amp; NON-FOOD PRODUCTS INTENDED FOR CONSUMERS 1997-2004<br />\r\n&nbsp;<a href=\"http://ec.europa.eu/health/scientific_committees/consumer_safety/sccnfp/index_en.htm\" target=\"_blank\">http://ec.europa.eu/health/scientific_committees/consumer_safety/sccnfp/index_en.htm</a></p>\r\n\r\n<p>SCCS&nbsp;&nbsp; &nbsp;<br />\r\n<a href=\"http://ec.europa.eu/health/scientific_committees/consumer_safety/opinions/index_en.htm\" target=\"_blank\">http://ec.europa.eu/health/scientific_committees/consumer_safety/opinions/index_en.htm</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '14 September, 2019'),
(3, 'DrugÂ ', 'drug-2', 0, '<p>Drugs@FDA: FDA Approved Drug Products</p>\r\n\r\n<p><a href=\"http://www.accessdata.fda.gov/scripts/cder/daf/\" target=\"_blank\">http://www.accessdata.fda.gov/scripts/cder/daf/</a></p>\r\n\r\n<p>MHRA: Public assessment reports</p>\r\n\r\n<p><a href=\"http://www.mhra.gov.uk/public-assessment-reports/\" target=\"_blank\">http://www.mhra.gov.uk/public-assessment-reports/</a></p>\r\n\r\n<p>TGA: Product information</p>\r\n\r\n<p><a href=\"https://www.ebs.tga.gov.au/\" target=\"_blank\">https://www.ebs.tga.gov.au/</a></p>\r\n\r\n<p>European Medicines Agency (EMA)</p>\r\n\r\n<p><a href=\"http://www.ema.europa.eu/ema/\" target=\"_blank\">http://www.ema.europa.eu/ema/</a></p>\r\n\r\n<p>Danish Medicines Agency</p>\r\n\r\n<p><a href=\"http://eng.mst.dk/publications/\" target=\"_blank\">http://eng.mst.dk/publications/</a></p>\r\n\r\n<p>TGA: Consumer Medicines Information</p>\r\n\r\n<p><a href=\"https://www.tga.gov.au/\" target=\"_blank\">https://www.tga.gov.au/</a></p>\r\n\r\n<p>Medsafe - Medicines and Medical Devices Safety Authority</p>\r\n\r\n<p><a href=\"http://www.medsafe.govt.nz/regulatory/DBSearch.asp\" target=\"_blank\">http://www.medsafe.govt.nz/regulatory/DBSearch.asp</a></p>\r\n\r\n<p>World Health Organization (WHO)</p>\r\n\r\n<p><a href=\"http://www.who.int/en/\" target=\"_blank\">http://www.who.int/en/</a></p>\r\n\r\n<p>EMC (electronic Medicines Compendium)</p>\r\n\r\n<p><a href=\"https://www.medicines.org.uk/emc/\" target=\"_blank\">https://www.medicines.org.uk/emc/</a></p>\r\n\r\n<p>Health Canada</p>\r\n\r\n<p><a href=\"http://www.hc-sc.gc.ca/index-eng.php\" target=\"_blank\">http://www.hc-sc.gc.ca/index-eng.php</a></p>\r\n', '14 September, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `servicepages`
--

CREATE TABLE `servicepages` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `brief` text NOT NULL,
  `cbrief` text NOT NULL,
  `imgstatus` text NOT NULL,
  `photo` text NOT NULL,
  `fservice` text NOT NULL,
  `metatoptitle` text NOT NULL,
  `metakeywords` text NOT NULL,
  `metadescription` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicepages`
--

INSERT INTO `servicepages` (`id`, `name`, `pages`, `pageorder`, `brief`, `cbrief`, `imgstatus`, `photo`, `fservice`, `metatoptitle`, `metakeywords`, `metadescription`, `date`) VALUES
(15, 'Social Impact & Audit', 'social-impact-audit', 4, '<p><strong>Social Impact Assessment and Social Audit (Program and Financial)</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Third Planet Foundation analyse&nbsp;and evaluate programs with data driven outcome indicators to calculate the social impact. Our team conducts Household &amp; Community Surveys, Focussed Group Discussions (FGDs) and Data Analysis to access the social impact created and recommendation for future interventions. We also offer independent social audits including programatic and financial. &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(66, 139, 202); text-decoration: none;\">info@3planet.org</a>&nbsp;for more information and collaboration.&nbsp;<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', 'We analyse and evaluate programs with data driven outcome indicators to calculate the social impact. Our team conducts Household & Community Surveys, Focussed Group Discussions (FGDs) and Data Analysis to access the social impact created and recommendation for future interventions. We also offer independent social audits including programatic and financial.     ', 'DeActive', '99909scientific communication.jpg', '', '       Social Impact & Audit, CSR Audit, CSR M&E India, CSR Reporting India, Social Impact Investment in India        ', '       Social Impact & Audit, CSR Audit India, CSR M&E India, CSR Reporting India, Social Impact Investment in India, Sustainability Reporting India, Sustainable Development Goals, FGDs and Survey in villages, Third Planet Foundation           ', '  We analyse and evaluate programs with data driven outcome indicators to calculate the social impact. Our team conducts Household & Community Surveys, Focussed Group Discussions (FGDs) and Data Analysis to access the social impact created and recommendation for future interventions.   ', '2020-09-09 13:17:16'),
(14, 'Assess Need & Baseline', 'assess-need-baseline', 3, '<p style=\"text-align:justify\"><strong>Need Assessment and Baseline</strong></p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation offers Need Assessment &amp; Baseline services to analyse critical reference points for assessing changes and impact, establish a basis for comparing the situation before and after a project, and for making inferences as to the effectiveness of the CSR interventions. Based on findings, we recommend and execute need centric and outcome driven customise field level interventions. &nbsp; &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(66, 139, 202); text-decoration: none;\">info@3planet.org</a>&nbsp;for more information and collaboration.&nbsp;<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong>&nbsp;&nbsp;</p>\r\n', 'We offer Need Assessment & Baseline services to analyse critical reference points for assessing changes and impact, establish a basis for comparing the situation before and after a project, and for making inferences as to the effectiveness of the CSR interventions. Based on findings, we recommend and execute need centric and outcome driven customise field level interventions.         ', 'DeActive', '52664data-disclosuer.jpg', '', '           Baseline & Need Assessment in India, FGDs and Village Survey, Findings Recommendation and CSR Road Map India        ', '           Baseline & Need Assessment in India, FGDs and Village Survey, Findings Recommendation and CSR Road Map India, CSR Analysis and Data Management, Third Planet Foundation        ', '           We offer Need Assessment & Baseline services to analyse critical reference points for assessing changes and impact, establish a basis for comparing the situation before and after a project, and for making inferences as to the effectiveness of the CSR interventions. Based on findings, we recommend and execute need centric and outcome driven customise field level interventions.       ', '2020-09-09 13:15:41'),
(12, 'CSR Implementation', 'csr-implementation', 1, '<p style=\"text-align:justify\"><strong>Corporate Social Responsibility (CSR) Implementation</strong></p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation specialises in field level implementation of wide range of CSR projects across India in the areas of Community &amp; Rural Development, Poverty Alleviation, Quality Education, Skill &amp; Livelihood Development, Quality Healthcare, Water, Sanitation and Hygiene (WASH), Women Empowerment, Agriculture Development, Disaster Relief, Rehabilitation and Environment Sustainability.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(66, 139, 202); text-decoration: none;\">info@3planet.org</a>&nbsp;for more information and collaboration.&nbsp;<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'We specialise in field level implementation of wide range of CSR projects across India in the areas of Community & Rural Development, Poverty Alleviation, Quality Education, Skill & Livelihood Development, Quality Healthcare, Water, Sanitation and Hygiene (WASH), Women Empowerment, Agriculture Development, Disaster Relief, Rehabilitation and Environment Sustainability.     ', 'DeActive', '86504Regulatory Documentation.jpg', '', '        CSR Implementation in India, CSR NGO India, CSR Companies Act 2013, CSR Section 8 NGO in India          ', '        CSR Implementation in India, Corporate Social Responsibility India, CSR NGO India, CSR Companies Act 2013, CSR Section 8 NGO in India, Rural Development India, Skill Development for youth, Quality Education in India, Model Village of India, Third Planet Foundation       ', '        We specialise in field level implementation of wide range of CSR projects across India in the areas of Community & Rural Development, Poverty Alleviation, Quality Education, Skill & Livelihood Development, Quality Healthcare, Water, Sanitation and Hygiene (WASH), Women Empowerment, Agriculture Development, Disaster Relief, Rehabilitation and Environment Sustainability.        ', '2020-09-09 13:15:04'),
(13, 'CSR Advisory', 'csr-advisory', 2, '<p style=\"text-align:justify\"><strong>CSR Advisory</strong></p>\r\n\r\n<p style=\"text-align:justify\">Third Planet Foundation caters to the complete lifecycle of CSR including planning, execution and reporting. CSR Advisory includes but not limited to; Drafting CSR Policy &amp; Framework, Designing CSR Road Map, CSR Projects Conceptualisation, Monitoring &amp; Evaluation, Social Audits (Program &amp; Financial), Social Impact &amp; Social Return on Investment, Sustainability Reporting among others. &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Contact Us at&nbsp;<a href=\"mailto:info@3planet.org\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(66, 139, 202); text-decoration: none;\">info@3planet.org</a>&nbsp;for more information and collaboration.&nbsp;<br />\r\nYou can also connect with us at: 011 &ndash; 4168 5208 | 91 &ndash; 98113 42299</strong></p>\r\n', 'We cater to the complete lifecycle of CSR including planning, execution and reporting. CSR Advisory includes but not limited to; Drafting CSR Policy & Framework, Designing CSR Road Map, CSR Projects Conceptualisation, Monitoring & Evaluation, Social Audits (Program & Financial), Social Impact & Social Return on Investment, Sustainability Reporting among others.         ', 'DeActive', '24211Clinical Trails.jpg', '', '        CSR Advisory and CSR Policy Formation, CSR Framework and Roadmap, CSR Audit in India, Social Impact Assessment in India       ', '        CSR Advisory and CSR Policy Formation, CSR Framework and Roadmap, CSR Audit in India, Social Impact Assessment in India, Due Diligence and Monitoring and Evaluation, Sustainability Reporting in India, Third Planet Foundation           ', '        We cater to the complete lifecycle of CSR including planning, execution and reporting. CSR Advisory includes but not limited to; Drafting CSR Policy & Framework, Designing CSR Road Map, CSR Projects Conceptualisation, Monitoring & Evaluation, Social Audits (Program & Financial), Social Impact & Social Return on Investment, Sustainability Reporting among others.         ', '2020-09-09 13:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `brief` text NOT NULL,
  `imgstatus` text NOT NULL,
  `photo` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `link`, `brief`, `imgstatus`, `photo`, `date`) VALUES
(1, 'Current Opporutinities', 'current-opporutinities', '<p>At <span style=\"color:#c52354\">Pharma Beistand</span>, we believe we put our best work forward when our employees bring together ideas that are diverse in thought. We are proud to be an equal opportunity workplace and are committed to equal employment opportunity regardless of race, colour, religion, national origin, age, sex, marital status, ancestry, physical or mental disability, genetic information, veteran status, gender identity or expression, sexual orientation, or any other characteristic protected by applicable federal, state or local law. In addition, <span style=\"color:#c52354\">Pharma Beistand</span> will provide reasonable accommodations for qualified individuals with disabilities. If you have a disability or special need, we would like to know how we can better accommodate you.</p>\r\n\r\n<p>We prefer online applications - it&#39;s easy and it&#39;s the fastest way to success for you and us.</p>\r\n\r\n<p>We look forward to receiving your application at <a href=\"\">contactus@pharmabeistand.com</a></p>\r\n\r\n<h3><u>FRAUD ALERT</u></h3>\r\n\r\n<div class=\"text\">All authorized Pharma beistand recruiters use <span style=\"color:#c52354\"><a href=\"\">Contact@pharmabeistand.com</a></span> email addresses. Please do not entertain job offers or interview requests from anyone using other domain names</div>\r\n\r\n<ul>\r\n	<li>Pharma Beistand recruiters will never ask for money/fees to process your job application.</li>\r\n	<li>All job applications are processed by our in-house recruiters. <span style=\"color:#c52354\">We are not associated with any third parties.</span></li>\r\n	<li>If you are unsure about the authenticity of any emails/communication from people claiming to represent Pharma Beistand, please contact <a href=\"\">contactus@pharmabeistand.com</a> and we will get back to you with a confirmation.</li>\r\n</ul>\r\n', 'Active', '105364tab-image.jpg', '14 September, 2019'),
(2, 'Work From Home', 'work-from-home', '<ul>\r\n	<li>We perform task with conviction.</li>\r\n	<li>Always adhere to strong ethical and moral standards</li>\r\n	<li>Courage to call-out what is not right</li>\r\n</ul>\r\n\r\n<p>We prefer online applications - it&#39;s easy and it&#39;s the fastest way to success for you and us.</p>\r\n\r\n<p>We look forward to receiving your application at <a href=\"\">contactus@pharmabeistand.com</a></p>\r\n\r\n<h3><u>FRAUD ALERT</u></h3>\r\n\r\n<div class=\"text\">All authorized Pharma beistand recruiters use @pharmabeistand.com email addresses. Please do not entertain job offers or interview requests from anyone using other domain names</div>\r\n\r\n<ul>\r\n	<li>Pharma Beistand recruiters will never ask for money/fees to process your job application.</li>\r\n	<li>All job applications are processed by our in-house recruiters. We are not associated with any third parties.</li>\r\n	<li>If you are unsure about the authenticity of any emails/communication from people claiming to represent Pharma Beistand, please contact <a href=\"\">contactus@pharmabeistand.com</a> and we will get back to you with a confirmation.</li>\r\n</ul>\r\n', 'Active', '107612tab-image.jpg', '14 September, 2019'),
(3, 'FreeLance', 'freelance', '<p>Why you should freelance for <span style=\"color:#c52354\">Pharma beistand</span></p>\r\n\r\n<p>We can provide large number of timely assignments to freelancers who consistently deliver quality work.</p>\r\n\r\n<p>With an efficient workflow-management system, we ensure that you are able to deliver your best.</p>\r\n\r\n<p>A freelance position will give you the opportunity to work whenever you can, wherever you can.</p>\r\n\r\n<p>We prefer online applications - it&#39;s easy and it&#39;s the fastest way to success for you and us.</p>\r\n\r\n<p>We look forward to receiving your application at <span style=\"color:#c52354\"><a href=\"\">contactus@pharmabeistand.com</a></span></p>\r\n\r\n<h3><u>FRAUD ALERT </u></h3>\r\n\r\n<p>All authorized Pharma beistand recruiters use <a href=\"\">contact@pharmabeistand.com</a> email addresses. Please do not entertain job offers or interview requests from anyone using other domain names</p>\r\n\r\n<ul>\r\n	<li>Pharma Beistand recruiters will never ask for money/fees to process your job application.</li>\r\n	<li>All job applications are processed by our in-house recruiters. We are not associated with any third parties.</li>\r\n	<li>If you are unsure about the authenticity of any emails/communication from people claiming to represent Pharma Beistand, please contact <a href=\"\">contactus@pharmabeistand.com</a> and we will get back to you with a confirmation.</li>\r\n</ul>\r\n', 'Active', '76938tab-image.jpg', '14 September, 2019'),
(4, 'Work From Office', 'work-from-office', '<p>Work From Office</p>\r\n', 'DeActive', '', '25 July, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `teampages`
--

CREATE TABLE `teampages` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `photo` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `cbrief` text NOT NULL,
  `brief` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teampages`
--

INSERT INTO `teampages` (`id`, `name`, `pages`, `photo`, `pageorder`, `cbrief`, `brief`, `date`) VALUES
(1, 'Nashid Martine', 'nashid-martine', '13419pic3.jpg', 1, 'Director', '<p><span style=\"color:rgb(0, 0, 0); font-family:monospace; font-size:medium\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos provident quidem...</span></p>\r\n', '2019-07-30 12:11:08'),
(2, 'Hackson Willingham', 'hackson-willingham', '11455pic4.jpg', 2, 'Developer', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting..</p>\r\n', '2019-06-29 13:16:32'),
(3, 'konne Backfield', 'konne-backfield', '107322pic1.jpg', 3, 'Designer', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting..</p>\r\n', '2019-06-29 13:22:14'),
(4, 'konne Backfield', 'konne-backfield2', '88687pic2.jpg', 4, 'Manager', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting..</p>\r\n', '2019-06-29 13:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonialpages`
--

CREATE TABLE `testimonialpages` (
  `id` int(12) NOT NULL,
  `name` text NOT NULL,
  `pages` text NOT NULL,
  `designation` text NOT NULL,
  `cname` text NOT NULL,
  `photo` text NOT NULL,
  `brief` text NOT NULL,
  `ftestimonial` text NOT NULL,
  `pageorder` int(12) NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonialpages`
--

INSERT INTO `testimonialpages` (`id`, `name`, `pages`, `designation`, `cname`, `photo`, `brief`, `ftestimonial`, `pageorder`, `date`) VALUES
(1, 'Ved Chaudhary', 'ved-chaudhary', '', '', '17569testimonials_02.jpg', '<p>&quot;Professional way of working, also good knowledge about Pan India.&quot;</p>\r\n', 'Active', 1, '20 July, 2019'),
(4, 'Mr. S Gandhi', 'mr-s-gandhi', '', '', '', '<p>&quot;In my 25 years of various assignments, I found Corporate Resources to be BEST in all respects and I will never be hesitant to recommend the Agency in all my professional and business contacts.&quot;</p>\r\n', 'Inactive', 2, '15 March, 2019'),
(2, 'Sam Kromstain', 'sam-kromstain', '', '', '90762testimonials_03.jpg', '<p>Corporate Resources is fully transparent in their operations and I am fully satisfied with the services provided y them as well as the company with I have joined through Corporate Resources.&nbsp;</p>\r\n', 'Active', 3, '20 July, 2019'),
(3, 'Mr. Vipul Das', 'mr-vipul-das', '', '', '623302.jpg', '<p>&quot;On overall we are happy with the services offered by the Corporate Resources Placement Company.&quot;</p>\r\n', 'Active', 4, '20 July, 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bannerpage`
--
ALTER TABLE `bannerpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientpages`
--
ALTER TABLE `clientpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactcategory`
--
ALTER TABLE `contactcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `faqpages`
--
ALTER TABLE `faqpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslide`
--
ALTER TABLE `homeslide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscategory`
--
ALTER TABLE `newscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newspages`
--
ALTER TABLE `newspages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagegallery`
--
ALTER TABLE `packagegallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliopages`
--
ALTER TABLE `portfoliopages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productspages`
--
ALTER TABLE `productspages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsubcategory`
--
ALTER TABLE `productsubcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectpages`
--
ALTER TABLE `projectpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resourcepages`
--
ALTER TABLE `resourcepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicepages`
--
ALTER TABLE `servicepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teampages`
--
ALTER TABLE `teampages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonialpages`
--
ALTER TABLE `testimonialpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannerpage`
--
ALTER TABLE `bannerpage`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientpages`
--
ALTER TABLE `clientpages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactcategory`
--
ALTER TABLE `contactcategory`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `faqpages`
--
ALTER TABLE `faqpages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homeslide`
--
ALTER TABLE `homeslide`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `newscategory`
--
ALTER TABLE `newscategory`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newspages`
--
ALTER TABLE `newspages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packagegallery`
--
ALTER TABLE `packagegallery`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfoliopages`
--
ALTER TABLE `portfoliopages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productspages`
--
ALTER TABLE `productspages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productsubcategory`
--
ALTER TABLE `productsubcategory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectpages`
--
ALTER TABLE `projectpages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `resourcepages`
--
ALTER TABLE `resourcepages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicepages`
--
ALTER TABLE `servicepages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teampages`
--
ALTER TABLE `teampages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonialpages`
--
ALTER TABLE `testimonialpages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
