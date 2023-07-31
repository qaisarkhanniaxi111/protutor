-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 09:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `become_a_tutors`
--

CREATE TABLE `become_a_tutors` (
  `id` int(11) NOT NULL,
  `sec_data1` text NOT NULL,
  `img_sec2` varchar(255) NOT NULL,
  `main_title_sec2` varchar(255) NOT NULL,
  `sec_data2` text NOT NULL,
  `content_sec2` varchar(255) NOT NULL,
  `url_sec2` varchar(255) NOT NULL,
  `sec_data3` text NOT NULL,
  `sec4_title` varchar(255) NOT NULL,
  `sec4_desc` text NOT NULL,
  `sec4_url` varchar(255) NOT NULL,
  `sec4_img` varchar(255) NOT NULL,
  `sec5_file` varchar(255) NOT NULL,
  `sec5_heading` varchar(255) NOT NULL,
  `sec5_desc` text NOT NULL,
  `sec5_play_store_url` varchar(255) NOT NULL,
  `sec5_apple_store_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `become_a_tutors`
--

INSERT INTO `become_a_tutors` (`id`, `sec_data1`, `img_sec2`, `main_title_sec2`, `sec_data2`, `content_sec2`, `url_sec2`, `sec_data3`, `sec4_title`, `sec4_desc`, `sec4_url`, `sec4_img`, `sec5_file`, `sec5_heading`, `sec5_desc`, `sec5_play_store_url`, `sec5_apple_store_url`, `created_at`, `updated_at`) VALUES
(1, '[{\"icon\":\"1688991859_fact_check.svg\",\"title\":\"Set your own rate\",\"description\":\"Choose your hourly rate and change it anytime.On average, English tutors charge $15-25 per hour.\"},{\"icon\":\"1688991859_schedule.svg\",\"title\":\"Teach anytime, anywhere\",\"description\":\"Decide when and how many hours you want to teach. No minimum time commitment or fixed schedule. Be your own boss!\"},{\"icon\":\"1688991859_trend.svg\",\"title\":\"Grow professionally\",\"description\":\"Attend professional development webinars and get tips to upgrade your skills. You\\u2019ll get all the help you need from our team to grow.\"}]', '1688977775_sign-img.jpg', 'Why become a tutor At Pro Tutor?', '[{\"title\":\"1000\",\"description\":\"Courses available for verified and top tutors\"},{\"title\":\"648,482\",\"description\":\"Total tuition job posted on the platform till date\"},{\"title\":\"20+ Hours\",\"description\":\"User daily average time spent on the platform\"},{\"title\":\"7+ Million\",\"description\":\"Active instructor and students available on the platform\"}]', 'As a tutor on our platform, you’ll have the freedom to choose when you want to tutor students and the number of hours you want to teach.', '#', '[{\"title\":\"Getting Started (TUTOR)\",\"description\":\"Once the student has selected a suitable tutor, he\\/she has to make the First Lesson Payment through our platform. The tutor will give his first lesson to the student against this payment, where the tutor would have to convince the student that he has made the right choice. After the First Lesson, if the student is satisfied with the tutor and he has decided to proceed with that particular tutor. The student will book a package offered by the tutor. The available lesson packages range from 5 hours to 20 hours. Choosing bigger packages is usually cost-effective. The students may book a package as per their desire or need. The tutor may start giving the lessons as soon as the package payment has been made. The lessons are scheduled in advance and are supposed to take place according to this schedule. In case the tutor wants to cancel or reschedule a lesson, he\\/she is required to do it 4 hours before the scheduled time otherwise, it will not be rescheduled. After the scheduled lesson has taken place, the platform will send the request for the confirmation of the lesson to the student. The tutor will receive the payment for this lesson only after the student has confirmed the lesson. In case a student has turned ON the auto-confirmation option for the confirmation of a lesson, the lesson will automatically be confirmed 72 hours after the lesson time. To report a lesson-based issue, the tutor is required to report it within 72 hours of the completion of the lesson.\"},{\"title\":\"Profile Development\",\"description\":\"Once the student has selected a suitable tutor, he\\/she has to make the First Lesson Payment through our platform. The tutor will give his first lesson to the student against this payment, where the tutor would have to convince the student that he has made the right choice. After the First Lesson, if the student is satisfied with the tutor and he has decided to proceed with that particular tutor. The student will book a package offered by the tutor. The available lesson packages range from 5 hours to 20 hours. Choosing bigger packages is usually cost-effective. The students may book a package as per their desire or need. The tutor may start giving the lessons as soon as the package payment has been made. The lessons are scheduled in advance and are supposed to take place according to this schedule. In case the tutor wants to cancel or reschedule a lesson, he\\/she is required to do it 4 hours before the scheduled time otherwise, it will not be rescheduled. After the scheduled lesson has taken place, the platform will send the request for the confirmation of the lesson to the student. The tutor will receive the payment for this lesson only after the student has confirmed the lesson. In case a student has turned ON the auto-confirmation option for the confirmation of a lesson, the lesson will automatically be confirmed 72 hours after the lesson time. To report a lesson-based issue, the tutor is required to report it within 72 hours of the completion of the lesson.\"}]', 'Get paid to teach online', 'Connect with thousands of learners around the world and teach from your living room', '#', '1688984801_get-paid.png', '1688989281_phone.png', 'Manage yourself from your mobile device.', 'There are many variations of passages of Lorem Ipsum avail the majority have suffered alteration in some form, by injected or randomised words which don\'t look', '#', '#', '2023-07-06 11:24:43', '2023-07-10 12:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(11) NOT NULL,
  `userdetail_id` int(11) NOT NULL,
  `certificate_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `issued_by` varchar(255) NOT NULL,
  `year_of_study` varchar(50) NOT NULL,
  `certificate_verified_pic` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `userdetail_id`, `certificate_name`, `description`, `issued_by`, `year_of_study`, `certificate_verified_pic`, `created_at`, `updated_at`) VALUES
(3, 47, 'maths', 'maths', 'university', '2012-2017', '1688107448_suc-banner.png', '2023-06-30 06:44:08', '2023-06-30 06:44:08'),
(5, 38, 'test', 'test', 'dhanwanti', '2011-2014', '1688549205_god-lord-shiva-wallpaper-preview.jpg', '2023-07-05 09:26:45', '2023-07-05 09:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', NULL, NULL),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', NULL, NULL),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', NULL, NULL),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', NULL, NULL),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', NULL, NULL),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', NULL, NULL),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', NULL, NULL),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, NULL),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', NULL, NULL),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', NULL, NULL),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', NULL, NULL),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', NULL, NULL),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', NULL, NULL),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', NULL, NULL),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', NULL, NULL),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', NULL, NULL),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', NULL, NULL),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', NULL, NULL),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', NULL, NULL),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', NULL, NULL),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', NULL, NULL),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', NULL, NULL),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', NULL, NULL),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', NULL, NULL),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', NULL, NULL),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', NULL, NULL),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', NULL, NULL),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', NULL, NULL),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, NULL),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', NULL, NULL),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, NULL),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', NULL, NULL),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', NULL, NULL),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', NULL, NULL),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', NULL, NULL),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', NULL, NULL),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', NULL, NULL),
(38, 'CA', 'CANADA', 'Canada', 'CAN', NULL, NULL),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', NULL, NULL),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', NULL, NULL),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', NULL, NULL),
(42, 'TD', 'CHAD', 'Chad', 'TCD', NULL, NULL),
(43, 'CL', 'CHILE', 'Chile', 'CHL', NULL, NULL),
(44, 'CN', 'CHINA', 'China', 'CHN', NULL, NULL),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, NULL),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, NULL),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', NULL, NULL),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', NULL, NULL),
(49, 'CG', 'CONGO', 'Congo', 'COG', NULL, NULL),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', NULL, NULL),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', NULL, NULL),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', NULL, NULL),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', NULL, NULL),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', NULL, NULL),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', NULL, NULL),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', NULL, NULL),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', NULL, NULL),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', NULL, NULL),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', NULL, NULL),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', NULL, NULL),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', NULL, NULL),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', NULL, NULL),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', NULL, NULL),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', NULL, NULL),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', NULL, NULL),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', NULL, NULL),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', NULL, NULL),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', NULL, NULL),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', NULL, NULL),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', NULL, NULL),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', NULL, NULL),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', NULL, NULL),
(73, 'FR', 'FRANCE', 'France', 'FRA', NULL, NULL),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', NULL, NULL),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', NULL, NULL),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, NULL),
(77, 'GA', 'GABON', 'Gabon', 'GAB', NULL, NULL),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', NULL, NULL),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', NULL, NULL),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', NULL, NULL),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', NULL, NULL),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', NULL, NULL),
(83, 'GR', 'GREECE', 'Greece', 'GRC', NULL, NULL),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', NULL, NULL),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', NULL, NULL),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', NULL, NULL),
(87, 'GU', 'GUAM', 'Guam', 'GUM', NULL, NULL),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', NULL, NULL),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', NULL, NULL),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', NULL, NULL),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', NULL, NULL),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', NULL, NULL),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, NULL),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', NULL, NULL),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', NULL, NULL),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', NULL, NULL),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', NULL, NULL),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', NULL, NULL),
(99, 'IN', 'INDIA', 'India', 'IND', NULL, NULL),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', NULL, NULL),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', NULL, NULL),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', NULL, NULL),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', NULL, NULL),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', NULL, NULL),
(105, 'IT', 'ITALY', 'Italy', 'ITA', NULL, NULL),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', NULL, NULL),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', NULL, NULL),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', NULL, NULL),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', NULL, NULL),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', NULL, NULL),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', NULL, NULL),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', NULL, NULL),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', NULL, NULL),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', NULL, NULL),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', NULL, NULL),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', NULL, NULL),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', NULL, NULL),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', NULL, NULL),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', NULL, NULL),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', NULL, NULL),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', NULL, NULL),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', NULL, NULL),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', NULL, NULL),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', NULL, NULL),
(125, 'MO', 'MACAO', 'Macao', 'MAC', NULL, NULL),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', NULL, NULL),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', NULL, NULL),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', NULL, NULL),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', NULL, NULL),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', NULL, NULL),
(131, 'ML', 'MALI', 'Mali', 'MLI', NULL, NULL),
(132, 'MT', 'MALTA', 'Malta', 'MLT', NULL, NULL),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', NULL, NULL),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', NULL, NULL),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', NULL, NULL),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', NULL, NULL),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, NULL),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', NULL, NULL),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', NULL, NULL),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', NULL, NULL),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', NULL, NULL),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', NULL, NULL),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', NULL, NULL),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', NULL, NULL),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', NULL, NULL),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', NULL, NULL),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', NULL, NULL),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', NULL, NULL),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', NULL, NULL),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', NULL, NULL),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', NULL, NULL),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', NULL, NULL),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', NULL, NULL),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', NULL, NULL),
(155, 'NE', 'NIGER', 'Niger', 'NER', NULL, NULL),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', NULL, NULL),
(157, 'NU', 'NIUE', 'Niue', 'NIU', NULL, NULL),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', NULL, NULL),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', NULL, NULL),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', NULL, NULL),
(161, 'OM', 'OMAN', 'Oman', 'OMN', NULL, NULL),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', NULL, NULL),
(163, 'PW', 'PALAU', 'Palau', 'PLW', NULL, NULL),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, NULL),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', NULL, NULL),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', NULL, NULL),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', NULL, NULL),
(168, 'PE', 'PERU', 'Peru', 'PER', NULL, NULL),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', NULL, NULL),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', NULL, NULL),
(171, 'PL', 'POLAND', 'Poland', 'POL', NULL, NULL),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', NULL, NULL),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', NULL, NULL),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', NULL, NULL),
(175, 'RE', 'REUNION', 'Reunion', 'REU', NULL, NULL),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', NULL, NULL),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', NULL, NULL),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', NULL, NULL),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', NULL, NULL),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', NULL, NULL),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', NULL, NULL),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', NULL, NULL),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', NULL, NULL),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', NULL, NULL),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', NULL, NULL),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', NULL, NULL),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', NULL, NULL),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', NULL, NULL),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, NULL),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', NULL, NULL),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', NULL, NULL),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', NULL, NULL),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', NULL, NULL),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', NULL, NULL),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', NULL, NULL),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', NULL, NULL),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', NULL, NULL),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, NULL),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', NULL, NULL),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', NULL, NULL),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', NULL, NULL),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', NULL, NULL),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', NULL, NULL),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', NULL, NULL),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', NULL, NULL),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', NULL, NULL),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', NULL, NULL),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', NULL, NULL),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', NULL, NULL),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', NULL, NULL),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', NULL, NULL),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, NULL),
(213, 'TG', 'TOGO', 'Togo', 'TGO', NULL, NULL),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', NULL, NULL),
(215, 'TO', 'TONGA', 'Tonga', 'TON', NULL, NULL),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', NULL, NULL),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', NULL, NULL),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', NULL, NULL),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', NULL, NULL),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', NULL, NULL),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', NULL, NULL),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', NULL, NULL),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', NULL, NULL),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', NULL, NULL),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', NULL, NULL),
(226, 'US', 'UNITED STATES', 'United States', 'USA', NULL, NULL),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, NULL),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', NULL, NULL),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', NULL, NULL),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', NULL, NULL),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', NULL, NULL),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', NULL, NULL),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', NULL, NULL),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', NULL, NULL),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', NULL, NULL),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', NULL, NULL),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', NULL, NULL),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', NULL, NULL),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `userdetail_id` int(11) NOT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `degree_name` varchar(255) DEFAULT NULL,
  `degree_type` varchar(100) DEFAULT NULL,
  `specialization` varchar(100) NOT NULL,
  `year_of_study` varchar(50) NOT NULL,
  `degree_verification_pic` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `userdetail_id`, `university_name`, `degree_name`, `degree_type`, `specialization`, `year_of_study`, `degree_verification_pic`, `created_at`, `updated_at`) VALUES
(4, 47, 'Rajasthan University', 'Masters', 'MA', 'Mathematics', '2013-2016', '1688106927_xampp-cloud.png', '2023-06-30 06:35:27', '2023-06-30 06:35:27'),
(5, 47, 'Rajasthan University', 'Bachelors', 'BA', 'Mathematics', '2010-2014', '1688106927_xampp-cloud.png', '2023-06-30 06:35:27', '2023-06-30 06:35:27'),
(6, 47, 'University', 'Masters', 'MA', 'Mathematics', '2013-2016', '1688107408_xampp-cloud.png', '2023-06-30 06:43:28', '2023-06-30 06:43:28'),
(7, 47, 'University', 'Masters', 'MA', 'PHP', '2012-2016', '1688107408_xampp-cloud.png', '2023-06-30 06:43:28', '2023-06-30 06:43:28'),
(11, 38, 'rajasthan university', 'm.com', 'BA', 'English', '2010-2015', '1688549143_1000_F_251173262_raj6Rs3CpsEX0Qawkli29Wr8XWTyQF57.jpg', '2023-07-05 09:25:43', '2023-07-05 09:25:43'),
(12, 48, 'University of Nigeria', 'Chemistry', 'MA', 'Chemistry', '2012-2014', '1688595082_actoria.png', '2023-07-05 22:11:22', '2023-07-05 22:11:22'),
(14, 38, 'asd', 'dsadas', 'svfdsg', 'gdfgdfg', '1981-1961', '1688970786_sample.pdf', '2023-07-10 06:33:06', '2023-07-10 06:33:06'),
(15, 50, 'University of Mianwali', 'BSCS', 'Computer Science', 'Computer Science', '2012-2016', '1689100730_annualterm.docx', '2023-07-12 01:38:50', '2023-07-11 18:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `userdetail_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `period_of_employment` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `userdetail_id`, `company_name`, `position`, `period_of_employment`, `created_at`, `updated_at`) VALUES
(4, 47, 'fdghgf.com', 'Teacher', '2013-2017', '2023-06-30 06:36:55', '2023-06-30 06:36:55'),
(5, 38, 'indiaresults.com', 'BA', '2011-2015', '2023-07-05 09:27:23', '2023-07-05 09:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '13529487-a710-4b91-8b11-e7e95cfd6095', 'database', 'default', '{\"uuid\":\"13529487-a710-4b91-8b11-e7e95cfd6095\",\"displayName\":\"App\\\\Jobs\\\\SendQuizInvites\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendQuizInvites\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\SendQuizInvites\\\":12:{s:9:\\\"\\u0000*\\u0000quizid\\\";s:2:\\\"44\\\";s:10:\\\"\\u0000*\\u0000tutorid\\\";i:50;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'InvalidArgumentException: View [tutor.sendquizinvitetemplat] not found. in C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php:137\nStack trace:\n#0 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths(\'tutor.sendquizi...\', Array)\n#1 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Factory.php(138): Illuminate\\View\\FileViewFinder->find(\'tutor.sendquizi...\')\n#2 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(382): Illuminate\\View\\Factory->make(\'tutor.sendquizi...\', Array)\n#3 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(355): Illuminate\\Mail\\Mailer->renderView(\'tutor.sendquizi...\', Array)\n#4 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(273): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'tutor.sendquizi...\', NULL, NULL, Array)\n#5 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\MailManager.php(550): Illuminate\\Mail\\Mailer->send(\'tutor.sendquizi...\', Array, Object(Closure))\n#6 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(261): Illuminate\\Mail\\MailManager->__call(\'send\', Array)\n#7 C:\\xampp\\htdocs\\protutor\\app\\Jobs\\SendQuizInvites.php(55): Illuminate\\Support\\Facades\\Facade::__callStatic(\'send\', Array)\n#8 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendQuizInvites->handle()\n#9 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#10 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#11 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#12 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#13 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#14 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#15 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#16 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#17 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendQuizInvites), false)\n#18 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#19 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#20 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendQuizInvites))\n#22 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#23 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#24 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#25 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#27 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#28 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#29 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#30 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#31 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#32 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#33 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#34 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#36 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\xampp\\htdocs\\protutor\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 {main}', '2023-07-18 14:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `sec_1_heading` tinytext DEFAULT NULL,
  `sec_1_subheading` varchar(250) DEFAULT NULL,
  `sec_1_dec` text DEFAULT NULL,
  `sec2_main_heading` varchar(255) DEFAULT NULL,
  `sec2_part1_heading` varchar(255) DEFAULT NULL,
  `sec2_part1_url` varchar(255) DEFAULT NULL,
  `sec2_part1_desc` text DEFAULT NULL,
  `sec2_part1_file` varchar(255) DEFAULT NULL,
  `sec2_part2_heading` varchar(255) DEFAULT NULL,
  `sec2_part2_url` varchar(255) DEFAULT NULL,
  `sec2_part2_desc` text DEFAULT NULL,
  `sec2_part2_file` varchar(255) DEFAULT NULL,
  `sec3_data` varchar(2000) DEFAULT NULL,
  `sec4_main_heading` varchar(255) DEFAULT NULL,
  `sec4_part1_heading` varchar(255) DEFAULT NULL,
  `sec4_part1_url` varchar(255) DEFAULT NULL,
  `sec4_part1_desc` text DEFAULT NULL,
  `sec4_part2_heading` varchar(255) DEFAULT NULL,
  `sec4_part2_url` varchar(255) DEFAULT NULL,
  `sec4_part2_desc` text DEFAULT NULL,
  `sec7_youtube_url` varchar(255) DEFAULT NULL,
  `sec7_heading` varchar(255) DEFAULT NULL,
  `sec7_sub_heading1` varchar(255) DEFAULT NULL,
  `sec7_sub_heading2` varchar(255) DEFAULT NULL,
  `sec7_sub_heading3` varchar(255) DEFAULT NULL,
  `sec7_desc` text DEFAULT NULL,
  `sec9_file` varchar(255) DEFAULT NULL,
  `sec9_heading` varchar(255) DEFAULT NULL,
  `sec9_play_store_url` varchar(255) DEFAULT NULL,
  `sec9_apple_store_url` varchar(255) DEFAULT NULL,
  `sec9_desc` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `sec_1_heading`, `sec_1_subheading`, `sec_1_dec`, `sec2_main_heading`, `sec2_part1_heading`, `sec2_part1_url`, `sec2_part1_desc`, `sec2_part1_file`, `sec2_part2_heading`, `sec2_part2_url`, `sec2_part2_desc`, `sec2_part2_file`, `sec3_data`, `sec4_main_heading`, `sec4_part1_heading`, `sec4_part1_url`, `sec4_part1_desc`, `sec4_part2_heading`, `sec4_part2_url`, `sec4_part2_desc`, `sec7_youtube_url`, `sec7_heading`, `sec7_sub_heading1`, `sec7_sub_heading2`, `sec7_sub_heading3`, `sec7_desc`, `sec9_file`, `sec9_heading`, `sec9_play_store_url`, `sec9_apple_store_url`, `sec9_desc`, `created_at`, `updated_at`) VALUES
(1, 'A good <span>#education</span> is always a base of', '|Self confidence,|A bright future,|Equitable societies,|Opportunities', 'Are you looking for a trusted online school where you can learn English language, math, science, and other subjects? You\'ve come to the right place. We are the #1 online school offering live online lessons 24/7 with certified tutors', 'What sets our online school apart from our competitors?', 'Best-In-class virtual classroom', '#', 'Our platform is designed to make online learning a positive experience for both learners and tutors. Some of the features we provide to facilitate learning include interactive classroom, quality video and audio, smart calendar, training webinars, and integrated class materials all in one place. The live lessons take place on our platform, so no downloads of', '1688710176_img-1.jpg', 'Certified native tutors', '#', 'Tutors on our platform are not just native English speakers, they\'re qualified professionals who\'ve been carefully selected to join our platform. Before a tutor becomes part of our team, they\'re required to prove their qualifications, experience and skills. We only select the best tutors in their respective fields.', '1688709501_img-2.jpg', '[{\"icon\":\"1688731225_stat-1.png\",\"title\":\"1000\",\"description\":\"Courses available for verified and top tutors\"},{\"icon\":\"1688731225_stat-2.png\",\"title\":\"648,482\",\"description\":\"Total tuition job posted on the platform till date\"},{\"icon\":\"1688731225_stat-3.png\",\"title\":\"20+ Hours\",\"description\":\"User daily average time spent on the platform\"},{\"icon\":\"1688731225_stat-4.png\",\"title\":\"7+ Million\",\"description\":\"Active instructor and students available on the platform\"}]', 'Our world-class tutors can help you learn online', 'Self-paced learning', '#', 'Our self-paced courses provide you the flexibility and convenience of learning at your own pace. The courses are meticulously created by qualified professionals and uploaded for your convenience, allowing you to pace your learning and increase the course content retention.', '1-on-1 Live classes', 'https://clients.charumindworks.com/protutor/find-a-tutor', 'Live tutoring software enables tutors to teach students in real time utilizing interactive video conferencing features. As a Student or Parent, you can browse through Tutor profiles and their subject expertise, and thereafter book live lesson.', 'https://www.youtube.com/embed/VcYIGvAWqLg', 'Tutor with MyOnlineTutor', 'Access by Students from around the world', 'Grown your business', 'Get paid securely', 'MyOnlineTutor provides easy-to-use and competitive features that allow you to plan and deliver your lessons easily and conveniently.', '1688716248_phone.png', 'Manage yourself from your mobile device.', '#', '#', 'There are many variations of passages of Lorem Ipsum avail the majority have suffered alteration in some form, by injected or randomised words which don\'t look', '2023-07-06 08:17:18', '2023-07-07 12:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `hourly_rates`
--

CREATE TABLE `hourly_rates` (
  `id` int(11) NOT NULL,
  `hourly_rate` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hourly_rates`
--

INSERT INTO `hourly_rates` (`id`, `hourly_rate`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-10 07:40:37', '2023-07-10 07:40:37'),
(2, 2, '2023-07-10 07:40:37', '2023-07-10 07:40:37'),
(3, 3, '2023-07-10 07:40:59', '2023-07-10 07:40:59'),
(4, 4, '2023-07-10 07:40:59', '2023-07-10 07:40:59'),
(5, 5, '2023-07-10 07:41:07', '2023-07-10 07:41:07'),
(6, 6, '2023-07-10 07:41:07', '2023-07-10 07:41:07'),
(7, 7, '2023-07-10 07:41:14', '2023-07-10 07:41:14'),
(8, 8, '2023-07-10 07:41:14', '2023-07-10 07:41:14'),
(9, 9, '2023-07-10 07:41:21', '2023-07-10 07:41:21'),
(10, 10, '2023-07-10 07:41:21', '2023-07-10 07:41:21'),
(11, 11, '2023-07-10 07:41:30', '2023-07-10 07:41:30'),
(12, 12, '2023-07-10 07:41:30', '2023-07-10 07:41:30'),
(13, 13, '2023-07-10 07:41:36', '2023-07-10 07:41:36'),
(14, 14, '2023-07-10 07:41:36', '2023-07-10 07:41:36'),
(15, 15, '2023-07-10 07:41:42', '2023-07-10 07:41:42'),
(16, 16, '2023-07-10 07:41:42', '2023-07-10 07:41:42'),
(17, 17, '2023-07-10 07:41:50', '2023-07-10 07:41:50'),
(18, 18, '2023-07-10 07:41:50', '2023-07-10 07:41:50'),
(19, 19, '2023-07-10 07:41:58', '2023-07-10 07:41:58'),
(20, 20, '2023-07-10 07:41:58', '2023-07-10 07:41:58'),
(21, 21, '2023-07-10 07:42:08', '2023-07-10 07:42:08'),
(22, 22, '2023-07-10 07:42:08', '2023-07-10 07:42:08'),
(23, 23, '2023-07-10 07:42:16', '2023-07-10 07:42:16'),
(24, 24, '2023-07-10 07:42:16', '2023-07-10 07:42:16'),
(25, 25, '2023-07-10 07:42:24', '2023-07-10 07:42:24'),
(26, 26, '2023-07-10 07:42:24', '2023-07-10 07:42:24'),
(27, 27, '2023-07-10 07:42:35', '2023-07-10 07:42:35'),
(28, 28, '2023-07-10 07:42:35', '2023-07-10 07:42:35'),
(29, 29, '2023-07-10 07:43:42', '2023-07-10 07:43:42'),
(30, 30, '2023-07-10 07:43:42', '2023-07-10 07:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `identity_verifications`
--

CREATE TABLE `identity_verifications` (
  `id` int(11) NOT NULL,
  `userdetail_id` int(11) NOT NULL,
  `issued_by_country` varchar(255) NOT NULL,
  `type_of_document` varchar(255) NOT NULL,
  `identification_number` varchar(100) NOT NULL,
  `expiry_date` varchar(50) NOT NULL,
  `identity_document_front` varchar(255) NOT NULL,
  `identity_document_back` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identity_verifications`
--

INSERT INTO `identity_verifications` (`id`, `userdetail_id`, `issued_by_country`, `type_of_document`, `identification_number`, `expiry_date`, `identity_document_front`, `identity_document_back`, `created_at`, `updated_at`) VALUES
(1, 38, 'Alis', '1', 'Merritt', '1-2015', '1688113148_Untitled.png', '1688113148_pexels-photo-4420634.jpeg', '2023-06-30 08:19:08', '2023-07-07 07:41:50'),
(6, 38, 'Rigel', '2', 'Chaim', '14-1981', '1688722760_frontUntitled.png', '1688722760_backpexels-photo-4420634.jpeg', '2023-07-07 09:39:20', '2023-07-07 09:39:20'),
(7, 38, 'Drake', '3', 'Simon', '10-2000', '1688722760_frontpexels-photo-4420634.jpeg', '1688722760_backUntitled.png', '2023-07-07 09:39:20', '2023-07-07 09:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2023_07_18_070216_create_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `viewer_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `viewer_role`, `message_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
(3, '1,2', 'NewUserRegisterNotification', 'New user (shubham.jangir@indiaresults.com) has just registered', '1', '2023-06-28 10:29:57', '2023-06-28 10:29:57'),
(4, '1,2', 'NewUserRegisterNotification', 'New user (shubham.jangir@indiaresults.com) has just registered', '1', '2023-06-29 09:22:57', '2023-06-29 09:22:57'),
(5, '1,2', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 05:12:09', '2023-06-30 05:12:09'),
(6, '1,2', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 05:24:30', '2023-06-30 05:24:30'),
(7, '1,2', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 10:08:22', '2023-06-30 10:08:22'),
(8, '1,2', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 10:11:19', '2023-06-30 10:11:19'),
(9, '1,2', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 10:13:43', '2023-06-30 10:13:43'),
(10, '1,2', 'NewUserRegisterNotification', 'New user (peterabiola1@yahoo.com) has just registered', '1', '2023-06-30 16:12:23', '2023-06-30 16:12:23'),
(11, '1,2', 'NewUserRegisterNotification', 'New user (qaisar.qk17@gmail.com) has just registered', '1', '2023-07-08 09:29:57', '2023-07-08 09:29:57'),
(12, '1,2', 'NewUserRegisterNotification', 'New user (qaisarkhanniaxi1@gmail.com) has just registered', '1', '2023-07-11 19:34:06', '2023-07-11 19:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohan.yadav@indiaresults.com', '715323', '2023-06-19 06:17:50'),
('mohan.yadav@indiaresults.com', '549110', '2023-06-19 22:55:25'),
('mohan.yadav@indiaresults.com', '639356', '2023-06-20 00:03:27'),
('mohan.yadav@indiaresults.com', '127715', '2023-06-20 00:16:19'),
('mohan.yadav@indiaresults.com', '479606', '2023-06-20 00:20:32'),
('mohan.yadav@indiaresults.com', '517213', '2023-06-20 00:21:10'),
('mohan.yadav@indiaresults.com', '426424', '2023-06-20 01:19:59'),
('mohan.yadav@indiaresults.com', '348055', '2023-06-20 01:22:17'),
('mohan.yadav@indiaresults.com', '246422', '2023-06-20 01:27:07'),
('mohan.yadav@indiaresults.com', '412886', '2023-06-20 01:34:31'),
('mohan.yadav@indiaresults.com', '834714', '2023-06-20 02:18:04'),
('mohan.yadav@indiaresults.com', '778518', '2023-06-20 02:18:57'),
('mohan.yadav@indiaresults.com', '966404', '2023-06-20 02:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `tutorid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `teaches_level` int(11) DEFAULT NULL,
  `quiztitle` text DEFAULT NULL,
  `startdate` datetime DEFAULT NULL,
  `enddate` datetime DEFAULT NULL,
  `totalstudents` int(11) DEFAULT NULL,
  `totalattended` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `createdat` datetime DEFAULT NULL,
  `updatedat` datetime DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  `quizprogressbar` varchar(4) DEFAULT NULL,
  `randomizequestions` varchar(4) DEFAULT NULL,
  `quiztimer` varchar(4) DEFAULT NULL,
  `quiztimeinseconds` int(11) DEFAULT NULL,
  `autoadvance` varchar(4) DEFAULT NULL,
  `quiztries` varchar(4) DEFAULT NULL,
  `quiznooftries` int(11) DEFAULT NULL,
  `quiztemplate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `tutorid`, `subjectid`, `teaches_level`, `quiztitle`, `startdate`, `enddate`, `totalstudents`, `totalattended`, `status`, `createdat`, `updatedat`, `instructions`, `quizprogressbar`, `randomizequestions`, `quiztimer`, `quiztimeinseconds`, `autoadvance`, `quiztries`, `quiznooftries`, `quiztemplate`) VALUES
(1, 50, 15, 1, NULL, NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 06:20:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 50, 15, 1, NULL, NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 06:22:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 50, 15, 1, 'Untitled 1', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 06:58:21', '2023-07-13 06:58:21', 'There are no rules of the game', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 50, 15, 1, 'Qaisar Quiz 2', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 07:02:02', '2023-07-13 07:02:23', 'Please provide complete information', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 07:39:17', '2023-07-13 07:39:17', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 10:28:29', '2023-07-13 10:28:29', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 50, 16, 1, 'New Quiz', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:24:17', '2023-07-13 11:24:17', 'All users must be in time', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:26:19', '2023-07-13 11:26:19', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 50, 15, 1, 'New one', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:27:58', '2023-07-13 11:27:58', 'All New', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:34:29', '2023-07-13 11:34:29', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:36:09', '2023-07-13 11:36:09', '', 'y', 'n', 'n', 0, 'y', 'y', 0, NULL),
(12, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:38:34', '2023-07-13 11:38:34', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(13, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 11:58:02', '2023-07-13 11:58:02', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(14, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Upcoming', '2023-07-13 11:58:34', '2023-07-13 11:58:34', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(15, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Upcoming', '2023-07-13 12:08:26', '2023-07-13 12:08:26', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(16, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Upcoming', '2023-07-13 12:12:16', '2023-07-13 12:12:16', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(17, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Upcoming', '2023-07-13 12:14:05', '2023-07-13 12:14:05', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(22, 50, 15, 1, '', NULL, NULL, NULL, NULL, 'Drafts', '2023-07-13 16:19:08', '2023-07-13 16:19:08', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 50, 15, 1, 'Nagina', '2023-07-17 12:00:00', '2023-07-17 13:00:00', NULL, NULL, 'Upcoming', '2023-07-13 17:14:20', '2023-07-13 17:14:20', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(25, 50, 15, 2, 'Hi', '2023-07-13 11:21:00', '2023-07-13 00:21:00', NULL, NULL, 'Upcoming', '2023-07-13 18:21:48', '2023-07-13 18:21:48', 'These are new instructions', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(26, 50, 15, 1, 'They', '2023-07-13 11:25:00', '2023-07-13 00:25:00', NULL, NULL, 'Upcoming', '2023-07-13 18:25:59', '2023-07-13 18:25:59', 'Then', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(27, 50, 15, 1, '', '2023-07-13 14:10:00', '2023-07-13 16:10:00', NULL, NULL, 'Drafts', '2023-07-13 21:10:37', '2023-07-13 21:10:37', 'Nope', 'y', 'n', 'y', 45, 'n', 'n', 0, NULL),
(28, 50, 15, 1, '', '2023-07-13 22:14:00', '2023-07-13 13:14:00', NULL, NULL, 'Drafts', '2023-07-14 05:14:38', '2023-07-14 05:14:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 50, 15, 1, '', '2023-07-13 23:07:00', '2023-07-13 23:07:00', NULL, NULL, 'Drafts', '2023-07-14 06:05:29', '2023-07-14 06:05:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 50, 15, 1, '', '2023-07-13 13:06:00', '2023-07-13 23:09:00', NULL, NULL, 'Drafts', '2023-07-14 06:06:19', '2023-07-14 06:06:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 50, 15, 1, '', '2023-07-13 14:07:00', '2023-07-13 23:10:00', NULL, NULL, 'Drafts', '2023-07-14 06:07:17', '2023-07-14 06:07:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 50, 15, 1, '', '2023-07-13 23:11:00', '2023-07-13 23:12:00', NULL, NULL, 'Drafts', '2023-07-14 06:08:08', '2023-07-14 06:08:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 50, 15, 1, 'Seminar', '2023-07-14 03:52:00', '2023-07-14 04:53:00', NULL, NULL, 'Upcoming', '2023-07-14 09:52:40', '2023-07-14 18:48:29', 'These are all test instructions', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(34, 50, 16, 1, 'Silver Medal', '2023-07-14 03:06:00', '2023-07-14 05:06:00', NULL, NULL, 'Upcoming', '2023-07-14 10:06:17', '2023-07-14 18:58:12', 'lll', 'y', 'y', 'n', 0, 'n', 'n', 0, NULL),
(35, 50, 15, 1, 'Bundo Khan', '2023-07-14 12:17:00', '2023-07-14 13:17:00', NULL, NULL, 'Upcoming', '2023-07-14 19:17:30', '2023-07-14 19:17:30', 'These are test instructions.', 'y', 'y', 'y', 60, 'y', 'y', 2, NULL),
(37, 50, 15, 1, 'll;', '2023-07-14 12:53:00', '2023-07-14 13:53:00', NULL, NULL, 'Upcoming', '2023-07-14 19:53:36', '2023-07-14 19:53:36', 'jkllk', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(38, 50, 15, 1, 'agd', '2023-07-14 12:57:00', '2023-07-14 13:57:00', NULL, NULL, 'Upcoming', '2023-07-14 19:57:20', '2023-07-14 19:57:20', 'agde', 'y', 'y', 'n', 0, 'n', 'n', 0, NULL),
(39, 50, 15, 1, 'tetey', '2023-07-14 12:00:00', '2023-07-14 13:00:00', NULL, NULL, 'Upcoming', '2023-07-14 19:59:55', '2023-07-14 19:59:55', 'gdgjkdlg', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(40, 50, 15, 1, 'gagd', '2023-07-14 13:02:00', '2023-07-14 15:02:00', NULL, NULL, 'Upcoming', '2023-07-14 20:02:22', '2023-07-14 20:02:22', 'ggd', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(41, 50, 15, 1, 'gagd', '2023-07-14 13:03:00', '2023-07-22 15:03:00', NULL, NULL, 'Upcoming', '2023-07-14 20:03:41', '2023-07-14 20:03:41', 'jkjkj', 'y', 'n', 'n', 0, 'n', 'n', 0, NULL),
(42, 50, 15, 1, 'Laravel Basics', '2023-07-24 14:00:00', '2023-07-24 17:00:00', NULL, NULL, 'Upcoming', '2023-07-18 06:06:13', '2023-07-18 06:06:13', 'This quiz is necessary to qualify for the next part.', 'y', 'n', 'y', 60, 'n', 'y', 2, NULL),
(43, 50, 15, 1, '', '2023-07-17 23:11:00', '2023-07-17 12:11:00', NULL, NULL, 'Upcoming', '2023-07-18 06:11:23', '2023-07-18 06:11:23', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(44, 50, 15, 1, '', '2023-07-17 23:16:00', '2023-07-17 12:16:00', NULL, NULL, 'Upcoming', '2023-07-18 06:16:33', '2023-07-18 06:16:33', '', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(45, 50, 15, 1, 'Laravel Controllers', '2023-07-21 05:53:00', '2023-07-24 05:54:00', NULL, NULL, 'Upcoming', '2023-07-21 12:54:08', '2023-07-21 12:54:08', 'Attempt', 'n', 'n', 'n', 0, 'n', 'n', 0, NULL),
(46, 50, 15, 1, 'Laravel Models', '2023-07-21 06:00:00', '2023-07-23 06:00:00', NULL, NULL, 'Drafts', '2023-07-21 13:00:49', '2023-07-21 13:00:49', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 50, 15, 1, 'ag', '2023-07-21 06:03:00', '2023-07-24 06:03:00', NULL, NULL, 'Drafts', '2023-07-21 13:03:29', '2023-07-21 13:03:29', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 50, 15, 1, 'g', '2023-07-21 06:05:00', '2023-07-21 08:05:00', NULL, NULL, 'Drafts', '2023-07-21 13:05:34', '2023-07-21 13:05:34', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 50, 15, 1, 'g', '2023-07-21 06:06:00', '2023-07-19 06:06:00', NULL, NULL, 'Drafts', '2023-07-21 13:06:44', '2023-07-21 13:06:44', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 50, 15, 1, 'g', '2023-07-21 06:08:00', '2023-07-23 06:08:00', NULL, NULL, 'Drafts', '2023-07-21 13:08:47', '2023-07-21 13:08:47', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 50, 15, 1, 'g', '2023-07-21 06:12:00', '2023-07-21 07:12:00', NULL, NULL, 'Drafts', '2023-07-21 13:12:46', '2023-07-21 13:12:46', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 50, 15, 1, 'ge', '2023-07-20 06:14:00', '2023-07-22 06:14:00', NULL, NULL, 'Drafts', '2023-07-21 13:14:38', '2023-07-21 13:14:38', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 50, 15, 1, 'g', '2023-07-21 06:16:00', '2023-07-21 07:16:00', NULL, NULL, 'Drafts', '2023-07-21 13:16:48', '2023-07-21 13:16:48', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 50, 15, 1, 'g', '2023-07-21 06:17:00', '2023-07-21 07:17:00', NULL, NULL, 'Drafts', '2023-07-21 13:17:35', '2023-07-21 13:17:35', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 50, 15, 1, 'f', '2023-07-21 06:21:00', '2023-07-21 07:21:00', NULL, NULL, 'Drafts', '2023-07-21 13:21:49', '2023-07-21 13:21:49', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 50, 15, 1, 'g', '2023-07-21 06:22:00', '2023-07-21 07:22:00', NULL, NULL, 'Drafts', '2023-07-21 13:22:34', '2023-07-21 13:22:34', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 50, 15, 1, 'g', '2023-07-21 06:23:00', '2023-07-22 06:23:00', NULL, NULL, 'Drafts', '2023-07-21 13:23:30', '2023-07-21 13:23:30', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 50, 15, 1, 'ga', '2023-07-21 07:26:00', '2023-07-21 08:26:00', NULL, NULL, 'Drafts', '2023-07-21 13:26:15', '2023-07-21 13:26:15', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 50, 15, 1, 'geqrq', '2023-07-21 06:29:00', '2023-07-21 07:29:00', NULL, NULL, 'Drafts', '2023-07-21 13:29:58', '2023-07-21 13:29:58', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 50, 15, 1, 'j', '2023-07-21 06:32:00', '2023-07-21 06:33:00', NULL, NULL, 'Drafts', '2023-07-21 13:32:41', '2023-07-21 13:32:41', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 50, 15, 1, 'gkl', '2023-07-21 06:41:00', '2023-07-23 06:42:00', NULL, NULL, 'Drafts', '2023-07-21 13:42:08', '2023-07-21 13:42:08', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 50, 15, 1, 'g', '2023-07-21 06:45:00', '2023-07-22 06:46:00', NULL, NULL, 'Drafts', '2023-07-21 13:46:06', '2023-07-21 13:46:06', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 50, 15, 1, 'p', '2023-07-21 06:47:00', '2023-07-21 07:47:00', NULL, NULL, 'Drafts', '2023-07-21 13:47:33', '2023-07-21 13:47:33', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 50, 15, 1, 'gd', '2023-07-21 07:50:00', '2023-07-21 08:50:00', NULL, NULL, 'Drafts', '2023-07-21 13:50:51', '2023-07-21 13:50:51', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 50, 15, 1, 'ga', '2023-07-21 06:51:00', '2023-07-22 06:51:00', NULL, NULL, 'Drafts', '2023-07-21 13:51:52', '2023-07-21 13:51:52', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 50, 15, 1, 'Laravel Basic Understanding', '2023-07-26 08:11:00', '2023-07-30 08:11:00', NULL, NULL, 'Upcoming', '2023-07-24 15:11:27', '2023-07-24 15:11:27', 'these are test instructions', 'y', 'n', 'y', 60, 'n', 'n', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` bigint(20) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `option1` text DEFAULT NULL,
  `option2` text DEFAULT NULL,
  `option3` text DEFAULT NULL,
  `option4` text DEFAULT NULL,
  `correctanswer` text DEFAULT NULL,
  `quizid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `type`, `question`, `option1`, `option2`, `option3`, `option4`, `correctanswer`, `quizid`) VALUES
(1, NULL, 'Why', 'True', 'False', '', '', 'false', 8),
(2, NULL, 'Why', 'a', 'g', 'e', '', 'g', 9),
(3, NULL, 'You g', 'a', 'b', 'c', 'Enter Option 4', 'c**', 9),
(4, 'True / False', 'fff', 'True', 'False', '', '', 'true', 11),
(6, 'True / False', 'Is USA a progressive Country?', 'True', 'False', '', '', 'true', 25),
(7, 'Multiple Answers', 'Write a note on Eyes?', '', '', '', '', '', 25),
(8, 'Multiple Choice Questions', 'ggg', 'aa', 'ee', '', '', 'aa', 26),
(9, 'Multiple Answers', '', '', '', '', '', '', 26),
(10, 'Short Answer', 'a', '', '', '', '', 'Right Answer', 27),
(11, 'Long Answer', 'G', '', '', '', '', '', 27),
(12, 'True / False', 'Is India the Fifth GDP?', 'True', 'False', '', '', 'true', 33),
(15, 'Short Answer', 'Who is the Chairman PITB?', '', '', '', '', 'Right Answer', 0),
(17, 'Short Answer', 'We are so', '', '', '', '', 'Right Answer', 0),
(18, 'Long Answer', 'Write a note on Economy', '', '', '', '', '', 35),
(20, 'Long Answer', 'kjhkkj', '', '', '', '', '', 37),
(21, 'Short Answer', 'agde', '', '', '', '', 'Right Answer', 38),
(22, 'Short Answer', 'gagd', '', '', '', '', 'Right Answer', 39),
(23, 'Long Answer', 'fasdf', '', '', '', '', '', 40),
(26, 'Long Answer', 'fasdf', '', '', '', '', '', 40),
(27, 'Multiple Choice Questions', 'Trajectory', 'A', 'B', 'C', '', 'C', 35),
(28, 'Multiple Answers', 'Trajectory2', 'A', 'B', 'C', '', 'A**C**', 35),
(31, 'Long Answer', 'Write Comprehensive note on Economy?', '', '', '', '', '', 35),
(32, 'True / False', 'gfgd', 'True', 'False', '', '', 'true', 41),
(33, 'Multiple Choice Questions', 'Where is Controller file located?', 'App/Controller', 'Config/Controller', 'Models/Controller', '', 'App/Controller', 42),
(34, 'True / False', 'The extension of view file created in Laravel is blade.php?', 'True', 'False', '', '', 'true', 42),
(35, 'Short Answer', 'Write a short note on MVC Architecture?', '', '', '', '', 'Right Answer', 42),
(36, 'True / False', 'Controller is necessary to create?', 'True', 'False', '', '', 'false', 45),
(37, 'Short Answer', 'What is the purpose of Controller?', '', '', '', '', 'Right Answer', 45),
(39, 'Long Answer', 'Write complete note on controllers?', '', '', '', '', '', 45),
(40, 'Fill-in-the-Blanks', 'Where we should do coding for Database?', '', '', '', '', 'Right Answer', 46),
(41, 'Fill-in-the-Blanks', 'hhkjk', '', '', '', '', 'Right Answer', 47),
(42, 'Long Answer', 'gdga', '', '', '', '', '', 48),
(43, 'Long Answer', 'g', '', '', '', '', '', 49),
(44, 'Fill-in-the-Blanks', 'gg', '', '', '', '', 'Right Answer', 50),
(45, 'Fill-in-the-Blanks', 'g', '', '', '', '', 'Right Answer', 51),
(46, 'Long Answer', 'gg', '', '', '', '', '', 52),
(47, 'Short Answer', 'g', '', '', '', '', 'Right Answer', 53),
(48, 'True / False', 'gagd', 'True', 'False', '', '', 'false', 54),
(49, 'True / False', 'ggd', 'True', 'False', '', '', 'false', 55),
(50, 'True / False', 'gdg', 'True', 'False', '', '', 'false', 56),
(52, 'Short Answer', 'g', '', '', '', '', 'Right Answer', 58),
(53, 'True / False', 'ga', 'True', 'False', '', '', 'true', 59),
(54, 'Short Answer', 'kkk', '', '', '', '', 'Right Answer', 60),
(57, 'Long Answer', 'k', '', '', '', '', '', 61),
(58, 'Short Answer', 'j', '', '', '', '', 'Right Answer', 62),
(59, 'Short Answer', 'a', '', '', '', '', 'Right Answer', 63),
(60, 'Short Answer', 'g', '', '', '', '', 'Right Answer', 64),
(62, 'Multiple Choice Questions', 'Laravel is the framework of?', 'Java', 'Php', 'C#', '', 'Php', 66),
(63, 'True / False', 'Controller is mandatory in the Laravel', 'True', 'False', '', '', 'false', 66),
(64, 'Multiple Choice Questions', 'Laravel is the framework of?', 'Java', 'Php', 'C#', '', 'Php', 66);

-- --------------------------------------------------------

--
-- Table structure for table `spoken_languages`
--

CREATE TABLE `spoken_languages` (
  `id` int(11) NOT NULL,
  `spoken_language` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spoken_languages`
--

INSERT INTO `spoken_languages` (`id`, `spoken_language`, `user_status`, `created_at`, `updated_at`) VALUES
(2, 'Spanish', 1, '2023-06-28 11:40:50', '2023-06-28 06:10:50'),
(3, 'Menderin', 1, '2023-06-28 11:41:08', '2023-06-28 06:11:08'),
(6, 'English', 1, '2023-06-28 11:45:51', '2023-06-28 06:15:51'),
(7, 'Bengali', 1, '2023-06-29 05:26:59', '2023-06-29 05:26:59'),
(8, 'French', 1, '2023-06-29 05:27:21', '2023-06-29 05:27:21'),
(9, 'Italian', 1, '2023-06-29 05:27:45', '2023-06-29 05:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `students_quiz_invites`
--

CREATE TABLE `students_quiz_invites` (
  `id` bigint(20) NOT NULL,
  `studentid` int(11) NOT NULL,
  `quizid` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `inviteat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_quiz_invites`
--

INSERT INTO `students_quiz_invites` (`id`, `studentid`, `quizid`, `status`, `inviteat`) VALUES
(1, 51, 41, 'invited', '2023-07-18 07:08:45'),
(6, 51, 42, 'invited', '2023-07-18 07:43:38'),
(7, 51, 45, 'invited', '2023-07-21 13:59:37'),
(8, 51, 66, 'invited', '2023-07-21 15:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `students_quiz_questions`
--

CREATE TABLE `students_quiz_questions` (
  `id` bigint(20) NOT NULL,
  `studentid` int(11) NOT NULL,
  `quizid` int(11) NOT NULL,
  `questionid` bigint(20) NOT NULL,
  `quizattemptid` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_quiz_questions`
--

INSERT INTO `students_quiz_questions` (`id`, `studentid`, `quizid`, `questionid`, `quizattemptid`, `answer`) VALUES
(139, 51, 66, 62, 57, 'Php'),
(140, 51, 66, 63, 57, 'wrong'),
(141, 51, 66, 64, 57, 'Php');

-- --------------------------------------------------------

--
-- Table structure for table `students_registered_courses`
--

CREATE TABLE `students_registered_courses` (
  `id` bigint(20) NOT NULL,
  `studentid` int(11) DEFAULT NULL,
  `subjectid` int(11) DEFAULT NULL,
  `teaches_level` int(11) DEFAULT NULL,
  `tutorid` int(11) DEFAULT NULL,
  `registereddatetime` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_registered_courses`
--

INSERT INTO `students_registered_courses` (`id`, `studentid`, `subjectid`, `teaches_level`, `tutorid`, `registereddatetime`, `status`) VALUES
(1, 51, 15, 1, 50, '2023-07-17 21:43:40', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz_attempt`
--

CREATE TABLE `student_quiz_attempt` (
  `id` bigint(20) NOT NULL,
  `studentid` int(11) NOT NULL,
  `quizid` int(11) NOT NULL,
  `startdate` datetime DEFAULT NULL,
  `enddate` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_quiz_attempt`
--

INSERT INTO `student_quiz_attempt` (`id`, `studentid`, `quizid`, `startdate`, `enddate`, `status`) VALUES
(57, 51, 66, '2023-07-25 16:48:27', '2023-07-25 16:48:27', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `student_testimonial`
--

CREATE TABLE `student_testimonial` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_desc` text NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `student_rating` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_testimonial`
--

INSERT INTO `student_testimonial` (`id`, `student_name`, `student_desc`, `student_image`, `student_rating`, `user_status`, `created_at`, `updated_at`) VALUES
(5, 'Adeyanju Gabriel', 'In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made', '1688541165_profile-circle.png', '5', 1, '2023-07-05 07:12:45', '2023-07-05 07:12:45'),
(6, 'Balagun Andrew', 'In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made', '1688541661_user.jpg', '4', 1, '2023-07-05 07:21:01', '2023-07-05 07:21:01'),
(7, 'Kalama Mitchell', 'In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made', '1688541683_img-2.jpg', '5', 1, '2023-07-05 07:21:23', '2023-07-05 07:21:23'),
(8, 'mohan yadav', 'this is test Student Testimonials', '1688541733_become-a-tutor-hero.png', '3', 1, '2023-07-05 07:22:13', '2023-07-05 07:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `created_at`, `updated_at`) VALUES
(9, 'JAVA', '2023-06-29 05:17:02', '2023-06-29 05:17:02'),
(10, 'PHP', '2023-06-29 05:17:12', '2023-06-29 05:17:12'),
(11, 'MATHS', '2023-06-29 05:17:19', '2023-06-29 05:17:19'),
(12, 'ECONOMICS', '2023-06-29 05:17:28', '2023-06-29 05:17:28'),
(13, 'ROBOTICS', '2023-06-29 05:17:38', '2023-06-29 05:17:38'),
(14, 'ENGLISH', '2023-06-29 05:18:39', '2023-06-29 05:18:39'),
(15, 'LARAVEL', '2023-06-29 05:19:03', '2023-06-29 05:19:03'),
(16, 'CSS', '2023-06-29 05:19:09', '2023-06-29 05:19:09'),
(17, 'CHEMISTY', '2023-06-29 05:25:26', '2023-06-29 05:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `teaches_levels`
--

CREATE TABLE `teaches_levels` (
  `id` int(11) NOT NULL,
  `teaches_level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaches_levels`
--

INSERT INTO `teaches_levels` (`id`, `teaches_level`, `created_at`, `updated_at`) VALUES
(1, 'Grade 9', '2023-06-28 09:53:30', '2023-06-28 04:23:30'),
(2, 'Pre-school', '2023-06-28 09:53:57', '2023-06-28 04:23:57'),
(3, 'Doctoral Level', '2023-06-28 09:54:13', '2023-06-28 04:24:13'),
(4, 'Pre-school', '2023-06-28 09:54:26', '2023-06-28 04:24:26'),
(6, 'Grade 8', '2023-06-28 10:06:46', '2023-06-28 04:36:46'),
(8, 'high-level', '2023-06-29 04:33:08', '2023-06-29 04:33:08'),
(9, 'sdfsd', '2023-06-29 05:41:13', '2023-06-29 05:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `student_no` varchar(50) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `native_language` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `over_18` varchar(255) DEFAULT NULL,
  `teaching_exp` text DEFAULT NULL,
  `current_sit` text DEFAULT NULL,
  `timezone` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `hourly_rate` varchar(10) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `profile_img` text DEFAULT NULL,
  `desc_first_last` text DEFAULT NULL,
  `desc_about` text DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `profile_verified` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `student_no`, `first_name`, `last_name`, `country`, `languages`, `native_language`, `level`, `email`, `dob`, `gender`, `over_18`, `teaching_exp`, `current_sit`, `timezone`, `phone`, `hourly_rate`, `subject`, `profile_img`, `desc_first_last`, `desc_about`, `video_link`, `profile_verified`, `created_at`, `updated_at`) VALUES
(4, '9', 'shubham1', 'jangir', '1', 'english', '', '8', 'shubham.jangir@indiaresults.com', NULL, NULL, 'on', NULL, NULL, NULL, '9352337856', '8', '9', '1687512096_userimages.jpg', 'shubham jangir', 'this is testing teacher profile page description.', '1687512096_Events ‹ Invest Barbados - A Welcoming Investment Climate — WordPress - Google Chrome 2023-02-28 18-52-46.mp4', 0, '2023-06-23 09:21:36', '2023-06-23 09:21:36'),
(17, '32', 'Nelly', 'Balogun', NULL, NULL, '', NULL, 'balogun091@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, '07736546224', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-06-27 08:47:47', '2023-06-27 08:47:47'),
(18, '31', 'dhanwanti', 'sindhi', '1', 'english', '', '8', 'dhanwanti.sindhi@indiaresults.com', NULL, NULL, 'on', NULL, NULL, NULL, '9352337856', '8', 'hindi', '1687858396_41.jpg', 'testt', 'testtt', '1687858396__WYW-Watch Your Way - Google Chrome_ 2023-03-13 22-53-16.mp4', 0, '2023-06-27 09:33:16', '2023-06-27 09:33:16'),
(20, '35', 'Violet', 'Daria', NULL, NULL, '', NULL, 'tavyl@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '243', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-06-27 10:22:28', '2023-06-27 10:22:28'),
(21, '36', 'Curran', 'Steven', NULL, NULL, '', NULL, 'fohyrusa@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '435435', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-06-27 10:24:16', '2023-06-27 10:24:16'),
(22, '37', 'Kyra', 'Dylan', NULL, NULL, '', NULL, 'jewytupab@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '1001212122', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-06-27 10:29:57', '2023-06-27 10:29:57'),
(26, '38', 'Amit', 'Jangid', '4', '4', '4', '2', 'amit.jangid@indiaresults.com', NULL, '1', 'on', 'I have formal teaching experience', 'I have another teaching job', 'Asia/Karachi', '9352337856', '7', '9,10,11', '1688703036_profile-circle.png', 'Test', 'I am a qualified ESL teacher with 3 years’ experience. I have experience teaching students of all levels and ages. Prior to my teaching career, I worked predominantly in large corporates, thus giving me extensive experience in business meetings and public speaking. My qualifications include, a (B.S.) a 120-hour TEFL certification and a 320-hour TEFL Diploma. \r\n\r\n                    My lesson plans are diligent and creative. My teaching methodologies are chosen to suit the students specific learning needs. It is my goal to combine my range of experience with my ability to be an enthusiastic, engaging and fun teacher with a great sense of empathy and love for the English language. \r\n\r\n                    I like to achieve good pronunciation for fluency by instilling confidence in my students.', '1687949742_Events ‹ Invest Barbados - A Welcoming Investment Climate — WordPress - Google Chrome 2023-02-28 18-52-46.mp4', 0, '2023-06-28 07:08:28', '2023-07-07 11:47:09'),
(37, '47', 'ruchika', 'sharma', '7', '6,7', '3', '1', 'ruchika.sharma@indiaresults.com', NULL, '1', 'on', NULL, NULL, 'Asia/Karachi', '12354879', '7', '13', '1688551089_god-lord-shiva-wallpaper-preview.jpg', 'asd', 'dsadasd', '1688120023__WYW-Watch Your Way - Google Chrome_ 2023-03-13 22-53-16.mp4', 0, '2023-06-30 10:13:43', '2023-07-07 10:29:53'),
(38, '48', 'Andrew', 'Balogun', '156', '6,7', '6', '6', 'peterabiola1@yahoo.com', NULL, NULL, 'on', 'I have formal teaching experience', 'I have another teaching job', 'Asia/Karachi', NULL, '22', '11,12,13,15', '1688141543_cute-little-girl-has-eye-pain-conjunctivitis-or-pink-eye-swollen-eyes-because-of-irritation-or-inflammation-allergies-to-dust-vector.jpg', 'My Class Heading', 'About Me', '1688141543_WhatsApp Video 2023-05-22 at 05.08.36.mp4', 0, '2023-06-30 16:12:23', '2023-07-05 22:09:07'),
(39, '2', 'Susan', 'teacher', '1', 'english', '', '8', 'susan@test.com', NULL, NULL, 'on', NULL, NULL, NULL, '9352337856', '8', '9', '1687512096_userimages.jpg', 'shubham jangir', 'this is testing teacher profile page description.', '1687512096_Events ‹ Invest Barbados - A Welcoming Investment Climate — WordPress - Google Chrome 2023-02-28 18-52-46.mp4', 0, '2023-06-23 09:21:36', '2023-06-23 09:21:36'),
(40, '50', 'Qaisar', 'Khan', '162', '6', '6', '8', 'qaisar.qk17@gmail.com', NULL, NULL, 'on', 'I have formal teaching experience', 'I have another teaching job', 'Asia/Karachi', NULL, '21', '15,16', '1689100638_khurram_pic.png', 'Developer', 'I am a Laravel Developer.', '1688808596_10000000_159895160154288_6401677057814069015_n.mp4', 0, '2023-07-08 09:29:57', '2023-07-12 11:01:34'),
(41, '51', 'Qaisar', 'Khan', '', '', NULL, '', 'qaisarkhanniaxi1@gmail.com', NULL, NULL, '', NULL, NULL, NULL, '', '', '', '', '', '', '', 0, '2023-07-11 12:33:55', '2023-07-11 19:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verify` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `role`, `user_status`, `email`, `email_verified_at`, `email_verify`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super', 'admin', NULL, '1', 0, 'hello@balogunandrew.com', NULL, 0, 'fb9d107a49c0f2a3b25d69c074670665', NULL, '2023-06-22 00:44:38', '2023-06-23 15:56:36'),
(2, 'Susan', 'teacher', NULL, '3', 1, 'susan@test.com', NULL, 0, 'ac7281056efc451c725576ac5f148f78', NULL, '2023-06-22 00:44:38', '2023-06-20 05:30:17'),
(6, 'sonam', 'sharma', NULL, '2', 0, 'sonam@test.com', NULL, 0, 'e10adc3949ba59abbe56e057f20f883e', 'M63zDLCJ4uO0tTRw0uQPWiITJ5SDygFh2uqrUYDxsEyJjPGCo9hNNHg2VF1VwYzMXgFMhM', '2023-06-22 00:44:38', '2023-06-22 00:46:08'),
(9, 'Andrew', 'Andrew', '9352337856', '3', 0, 'andrew@gmail.com', NULL, 0, 'e10adc3949ba59abbe56e057f20f883e', 'GOXoBBdcrXgCBqx4APB0aqIDrpjXM47qvIeCJTDi1zGOMe8KG0yG9GjQDrFe88wkGIpkhQ', '2023-06-23 02:29:29', '2023-06-22 02:29:29'),
(11, NULL, NULL, NULL, '3', 1, 'balogunandrew0001@gmail.com', NULL, 0, 'ac7281056efc451c725576ac5f148f78', 'HF9YkpCYlwfXtPK8qiwNEnk9zIv8pYQVSmkxBywTK0TeeJsliNHzQdyw6TnnE29rZda1eF', '2023-06-22 11:27:45', '2023-06-22 11:27:45'),
(12, 'Balogun', 'Andrew', NULL, '3', 1, 'balogunandrew001@gmail.com', NULL, 0, '95fe7e94a63c614bbc95440d08c82687', 'lIouBHR53R30IO0L3pVoEfxEd5mhfWqkfOwdp9ii85OvObSzlhmNXG64VAXHCbjr1gwc2r', '2023-06-23 13:03:59', '2023-06-23 13:03:59'),
(13, 'Mitchell', 'Andrew', NULL, '4', 1, 'balogunandrew002@gmail.com', NULL, 0, '95fe7e94a63c614bbc95440d08c82687', 'WlEMLJBNUtmtnNXfxYKCxLmSyZxucGPdjCkhC2pdbfwJdopIv13p49YUhiXc7xxaxvsoNu', '2023-06-23 13:11:19', '2023-06-23 13:11:44'),
(14, 'super', 'admin', NULL, '1', 1, 'mohan.yadav@indiaresults.com', NULL, 1, 'ac7281056efc451c725576ac5f148f78', NULL, '2023-06-22 00:44:38', '2023-06-23 15:56:36'),
(18, 'Ankita', 'Andrew', NULL, '4', 1, 'ankita@gmail.com', '2023-06-26 17:33:01', 1, '95fe7e94a63c614bbc95440d08c82687', 'WlEMLJBNUtmtnNXfxYKCxLmSyZxucGPdjCkhC2pdbfwJdopIv13p49YUhiXc7xxaxvsoNu', '2023-06-23 13:11:19', '2023-06-23 13:11:44'),
(29, NULL, NULL, NULL, '3', 0, 'balogunjesutomiwo@gmail.com', NULL, 1, '95fe7e94a63c614bbc95440d08c82687', 'eIIfDfdzyV8lK23yttVY6NHHUD2M5QNlu1RZLCZvttYf9vHbHWNxplpFCKk4QncdcieAxs', '2023-06-27 07:38:08', '2023-06-27 07:57:08'),
(31, 'dhanwanti', 'sindhi', '9352337856', '3', 1, 'dhanwanti.sindhi@indiaresults.com', NULL, 1, '1e6a33e2d0ff6380d8abc7b9d8b6c21f', 'MW2cCKpLxrZfiXyEtjplt2xpGc9zFnyI7th7psLNK9Gv3j9ixqdchxunmA22xR8D1zmHYL', '2023-06-27 08:22:49', '2023-06-27 09:32:26'),
(32, 'Nelly', 'Balogun', '07736546224', '2', 1, 'balogun091@yahoo.com', NULL, 1, '25d55ad283aa400af464c76d713c07ad', NULL, '2023-06-27 08:47:47', '2023-06-27 08:47:47'),
(35, 'Violet', 'Daria', '243', '2', 1, 'tavyl@mailinator.com', NULL, 1, 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '2023-06-27 10:22:28', '2023-06-27 10:22:28'),
(36, 'Curran', 'Steven', '435435', '1', 1, 'fohyrusa@mailinator.com', NULL, 1, 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '2023-06-27 10:24:16', '2023-06-27 10:24:16'),
(37, 'Kyra', 'Dylan', '1001212122', '1', 1, 'jewytupab@mailinator.com', NULL, 1, 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '2023-06-27 10:29:57', '2023-06-27 10:29:57'),
(38, 'Amit', 'Jangid', NULL, '3', 1, 'amit.jangid@indiaresults.com', NULL, 1, 'ac7281056efc451c725576ac5f148f78', 'SpwjMhs9arMrR72NTCjMhmP3hxpP8y2kvoIKm2Ne6TuJ4oN8LyxMG6uTRbbTmtnGUgbvme', '2023-06-28 06:07:14', '2023-06-28 07:07:17'),
(47, 'ruchika', 'sharma', '9352337856', '4', 1, 'ruchika.sharma@indiaresults.com', NULL, 1, 'ac7281056efc451c725576ac5f148f78', 'EPoDlEigmhJXqOtOlHSIamPPstvyKKMPI0YTuwqsO0RD74dMSwAER7kpGu1JpUGTHMgf4o', '2023-06-30 05:21:02', '2023-06-30 10:12:57'),
(48, 'Andrew', 'Balogun', NULL, '3', 1, 'peterabiola1@yahoo.com', NULL, 1, '95fe7e94a63c614bbc95440d08c82687', 'vaf7h202AowAz99H9RpUqKyOd8E1RdEYYDRE4In5qvmvq58RjRtlUq9I6QgZughSUIfimt', '2023-06-30 16:05:07', '2023-06-30 16:10:00'),
(49, NULL, NULL, NULL, '3', 0, 'charumindworks@indiaresults.com', NULL, 1, '3422670ba902e5443a95993fcf83d721', '7q90IOSLfXJXujBn7cvc0RBrqIvTVOzVKH6YjQGHKpWzrNGyylrbiCGjF38PVG9HqOxvOE', '2023-07-05 05:11:33', '2023-07-05 05:17:43'),
(50, 'Qaisar', 'Khan', NULL, '3', 1, 'qaisar.qk17@gmail.com', NULL, 1, '036a8b709875bbb4e7286eb7ac7cb95a', 'YW325zvsKOP3SgTjInuUwVjU0entM0mOjykIip31FhjMGaSzwBOWKdxvpK84aWdavE1yVM', '2023-07-08 09:22:09', '2023-07-08 09:25:30'),
(51, 'Qaisar', 'Khan', NULL, '4', 1, 'qaisarkhanniaxi1@gmail.com', NULL, 0, '6e98368b363400c0ef805cb4c813631a', 'FcNuI46Hna6mcRZ6X74oMdOFn7Atxxxq25YzQMxlvRL8EuKKKRSTOq1pdM15KglmYcAHph', '2023-07-11 19:33:55', '2023-07-11 19:33:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `become_a_tutors`
--
ALTER TABLE `become_a_tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hourly_rates`
--
ALTER TABLE `hourly_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identity_verifications`
--
ALTER TABLE `identity_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spoken_languages`
--
ALTER TABLE `spoken_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_quiz_invites`
--
ALTER TABLE `students_quiz_invites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_quiz_questions`
--
ALTER TABLE `students_quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_registered_courses`
--
ALTER TABLE `students_registered_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_quiz_attempt`
--
ALTER TABLE `student_quiz_attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_testimonial`
--
ALTER TABLE `student_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaches_levels`
--
ALTER TABLE `teaches_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `become_a_tutors`
--
ALTER TABLE `become_a_tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hourly_rates`
--
ALTER TABLE `hourly_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `identity_verifications`
--
ALTER TABLE `identity_verifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `spoken_languages`
--
ALTER TABLE `spoken_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students_quiz_invites`
--
ALTER TABLE `students_quiz_invites`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students_quiz_questions`
--
ALTER TABLE `students_quiz_questions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `students_registered_courses`
--
ALTER TABLE `students_registered_courses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_quiz_attempt`
--
ALTER TABLE `student_quiz_attempt`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `student_testimonial`
--
ALTER TABLE `student_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teaches_levels`
--
ALTER TABLE `teaches_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
