-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 06:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
  `sec_1_heading` varchar(255) NOT NULL,
  `sec_1_dec` text NOT NULL,
  `sec_2_file` varchar(255) NOT NULL,
  `sec_2_heading` varchar(255) NOT NULL,
  `sec_2_dec` text NOT NULL,
  `sec_3_file` varchar(255) NOT NULL,
  `sec_3_heading` varchar(255) NOT NULL,
  `sec_3_dec` text NOT NULL,
  `sec_4_file` varchar(255) NOT NULL,
  `sec_4_heading` varchar(255) NOT NULL,
  `sec_4_dec` text NOT NULL,
  `sec_5_mainHeading` varchar(255) NOT NULL,
  `sec_5_c1_file` varchar(255) NOT NULL,
  `sec_5_c1_heading` varchar(255) NOT NULL,
  `sec_5_c1_dec` text NOT NULL,
  `sec_5_c2_file` varchar(255) NOT NULL,
  `sec_5_c2_heading` varchar(255) NOT NULL,
  `sec_5_c2_dec` text NOT NULL,
  `sec_5_c3_file` varchar(255) NOT NULL,
  `sec_5_c3_heading` varchar(255) NOT NULL,
  `sec_5_c3_dec` text NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `become_a_tutors`
--

INSERT INTO `become_a_tutors` (`id`, `sec_1_heading`, `sec_1_dec`, `sec_2_file`, `sec_2_heading`, `sec_2_dec`, `sec_3_file`, `sec_3_heading`, `sec_3_dec`, `sec_4_file`, `sec_4_heading`, `sec_4_dec`, `sec_5_mainHeading`, `sec_5_c1_file`, `sec_5_c1_heading`, `sec_5_c1_dec`, `sec_5_c2_file`, `sec_5_c2_heading`, `sec_5_c2_dec`, `sec_5_c3_file`, `sec_5_c3_heading`, `sec_5_c3_dec`, `sec_data1`, `img_sec2`, `main_title_sec2`, `sec_data2`, `content_sec2`, `url_sec2`, `sec_data3`, `sec4_title`, `sec4_desc`, `sec4_url`, `sec4_img`, `sec5_file`, `sec5_heading`, `sec5_desc`, `sec5_play_store_url`, `sec5_apple_store_url`, `created_at`, `updated_at`) VALUES
(1, 'Attach students from over 180 countries', 'ProTutor tutors teach 800,000+ students globally. Join us and you’ll have everything you need to teach successfully.', '1697698071_Image 1.png', 'Teach students from over 180 countries', 'ProTutor tutors teach 800,000+ students globally. Join us and you’ll have everything you need to teach successfully.', '1697698456_65013-english-teacher 1.png', '“ProTutor allowed me to make a living without leaving home!”', 'Eliza G. teaches English on ProTutor so<br class=\"d-md-block d-none\"> she can spend more time with her son', '1697698831_lang.png', 'Corporate language training for business', 'ProTutor corporate training is designed for teams and businesses offering personalized language learning with online tutors. Book a demo to learn more. Want your employer to pay for your lessons? Refer your company!', 'We allowed you to make a living without leaving home!', '1697702356_living-1.svg', 'Set your own rate', 'Choose your hourly rate and change it anytime. On average, English tutors charge $15-25 per hour.', '1697702356_living-2.svg', 'Teach anytime, anywhere', 'Decide when and how many hours you want to teach. No minimum time commitment or fixed schedule. Be your own boss!', '1697702356_living-3.svg', 'Grow professionally', 'Attend professional development webinars and get tips to upgrade your skills. You’ll get all the help you need from our team to grow.', '[{\"icon\":\"1688991859_fact_check.svg\",\"title\":\"Set your own rate\",\"description\":\"Choose your hourly rate and change it anytime.On average, English tutors charge $15-25 per hour.\"},{\"icon\":\"1688991859_schedule.svg\",\"title\":\"Teach anytime, anywhere\",\"description\":\"Decide when and how many hours you want to teach. No minimum time commitment or fixed schedule. Be your own boss!\"},{\"icon\":\"1688991859_trend.svg\",\"title\":\"Grow professionally\",\"description\":\"Attend professional development webinars and get tips to upgrade your skills. You\\u2019ll get all the help you need from our team to grow.\"}]', '1688977775_sign-img.jpg', 'Why become a tutor At Pro Tutor?', '[{\"title\":\"1000\",\"description\":\"Courses available for verified and top tutors\"},{\"title\":\"648,482\",\"description\":\"Total tuition job posted on the platform till date\"},{\"title\":\"20+ Hours\",\"description\":\"User daily average time spent on the platform\"},{\"title\":\"7+ Million\",\"description\":\"Active instructor and students available on the platform\"}]', 'As a tutor on our platform, you’ll have the freedom to choose when you want to tutor students and the number of hours you want to teach.', '#', '[{\"title\":\"Getting Started (TUTOR)\",\"description\":\"Once the student has selected a suitable tutor, he\\/she has to make the First Lesson Payment through our platform. The tutor will give his first lesson to the student against this payment, where the tutor would have to convince the student that he has made the right choice. After the First Lesson, if the student is satisfied with the tutor and he has decided to proceed with that particular tutor. The student will book a package offered by the tutor. The available lesson packages range from 5 hours to 20 hours. Choosing bigger packages is usually cost-effective. The students may book a package as per their desire or need. The tutor may start giving the lessons as soon as the package payment has been made. The lessons are scheduled in advance and are supposed to take place according to this schedule. In case the tutor wants to cancel or reschedule a lesson, he\\/she is required to do it 4 hours before the scheduled time otherwise, it will not be rescheduled. After the scheduled lesson has taken place, the platform will send the request for the confirmation of the lesson to the student. The tutor will receive the payment for this lesson only after the student has confirmed the lesson. In case a student has turned ON the auto-confirmation option for the confirmation of a lesson, the lesson will automatically be confirmed 72 hours after the lesson time. To report a lesson-based issue, the tutor is required to report it within 72 hours of the completion of the lesson.\"},{\"title\":\"Profile Development\",\"description\":\"Once the student has selected a suitable tutor, he\\/she has to make the First Lesson Payment through our platform. The tutor will give his first lesson to the student against this payment, where the tutor would have to convince the student that he has made the right choice. After the First Lesson, if the student is satisfied with the tutor and he has decided to proceed with that particular tutor. The student will book a package offered by the tutor. The available lesson packages range from 5 hours to 20 hours. Choosing bigger packages is usually cost-effective. The students may book a package as per their desire or need. The tutor may start giving the lessons as soon as the package payment has been made. The lessons are scheduled in advance and are supposed to take place according to this schedule. In case the tutor wants to cancel or reschedule a lesson, he\\/she is required to do it 4 hours before the scheduled time otherwise, it will not be rescheduled. After the scheduled lesson has taken place, the platform will send the request for the confirmation of the lesson to the student. The tutor will receive the payment for this lesson only after the student has confirmed the lesson. In case a student has turned ON the auto-confirmation option for the confirmation of a lesson, the lesson will automatically be confirmed 72 hours after the lesson time. To report a lesson-based issue, the tutor is required to report it within 72 hours of the completion of the lesson.\"}]', 'Get paid to teach online', 'Connect with thousands of learners around the world and teach from your living room', '#', '1688984801_get-paid.png', '1688989281_phone.png', 'Manage yourself from your mobile device.', 'There are many variations of passages of Lorem Ipsum avail the majority have suffered alteration in some form, by injected or randomised words which don\'t look', '#', '#', '2023-07-06 11:24:43', '2023-10-19 03:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `student_no` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  `note` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `start_date`, `end_date`, `student_no`, `grade`, `subject`, `note`, `status`, `created_at`, `updated_at`) VALUES
(537, '2023-10-16 11:00:00', '2023-10-16 12:00:00', 12, 8, 16, 'this is css availability', 'schedule', '2023-10-15 06:12:06', '2023-10-15 01:12:06'),
(538, '2023-10-16 12:00:00', '2023-10-16 13:00:00', 12, 8, 16, 'this is css availability', 'schedule', '2023-10-15 06:12:06', '2023-10-15 01:12:06'),
(539, '2023-10-16 13:00:00', '2023-10-16 14:00:00', 12, 8, 16, 'this is css availability', 'schedule', '2023-10-15 06:12:06', '2023-10-15 01:12:06'),
(540, '2023-10-16 14:00:00', '2023-10-16 15:00:00', 12, 8, 16, 'this is css availability', 'schedule', '2023-10-15 06:12:06', '2023-10-15 01:12:06'),
(541, '2023-10-17 11:17:00', '2023-10-17 12:17:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:17:42', '2023-10-15 01:17:42'),
(542, '2023-10-17 12:17:00', '2023-10-17 13:17:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:17:42', '2023-10-15 01:17:42'),
(543, '2023-10-17 13:17:00', '2023-10-17 14:17:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:17:42', '2023-10-15 01:17:42'),
(544, '2023-10-19 08:00:00', '2023-10-19 09:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(545, '2023-10-19 09:00:00', '2023-10-19 10:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(546, '2023-10-19 10:00:00', '2023-10-19 11:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(547, '2023-10-19 11:00:00', '2023-10-19 12:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(548, '2023-10-19 12:00:00', '2023-10-19 13:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(549, '2023-10-19 13:00:00', '2023-10-19 14:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(550, '2023-10-19 14:00:00', '2023-10-19 15:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(551, '2023-10-19 15:00:00', '2023-10-19 16:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(552, '2023-10-19 16:00:00', '2023-10-19 17:00:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53'),
(553, '2023-10-19 17:00:00', '2023-10-19 17:18:00', 12, 8, 16, 'css', 'schedule', '2023-10-15 06:18:53', '2023-10-15 01:18:53');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `userdetail_id`, `certificate_name`, `description`, `issued_by`, `year_of_study`, `certificate_verified_pic`, `created_at`, `updated_at`) VALUES
(3, 47, 'maths', 'maths', 'university', '2012-2017', '1688107448_suc-banner.png', '2023-06-30 06:44:08', '2023-06-30 06:44:08'),
(5, 38, 'test', 'test', 'dhanwanti', '2011-2014', '1688549205_god-lord-shiva-wallpaper-preview.jpg', '2023-07-05 09:26:45', '2023-07-05 09:26:45'),
(6, 12, 'Joan', 'Ali', 'Ignatius', '2006-1981', '1694410937_maxresdefault.jpg', '2023-09-11 05:42:17', '2023-09-11 00:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('0191149c-f5ad-4bdc-9d15-0e3f24f2f284', 12, 13, 'hi yasir how are you ? are you working in laravel', NULL, 0, '2023-10-20 02:36:33', '2023-10-20 02:36:33'),
('3fbf6826-286c-4ba6-8c8e-2b3873da71a2', 13, 4, 'adfasdf', NULL, 0, '2023-08-30 22:33:28', '2023-08-30 22:33:28'),
('55e72465-9135-4f30-8ea4-7d21a776a3b3', 12, 16, 'AssalamoAlikum Laheef how are you?', NULL, 0, '2023-10-20 02:40:04', '2023-10-20 02:40:04'),
('5faed689-ec6a-425c-85bd-999c1d4c16a9', 12, 2, 'new test', NULL, 0, '2023-08-30 22:48:56', '2023-08-30 22:48:56'),
('682b987a-7dee-4a59-a496-69985993a751', 12, 2, 'hi', NULL, 0, '2023-08-30 22:44:29', '2023-08-30 22:44:29'),
('736ff0f8-0d84-4d54-9442-e2e2f4629b38', 13, 12, 'AssalamoAlikum', NULL, 1, '2023-09-03 21:31:18', '2023-09-03 21:32:25'),
('7e05d66e-534f-4713-aae3-469eb3eea997', 12, 13, 'walikum os salam', NULL, 1, '2023-09-03 21:32:45', '2023-09-03 21:32:59'),
('8fceb45d-7063-4362-97e6-f09901876f54', 13, 4, '', '{\"new_name\":\"95577b39-6d52-4bbc-8001-2c11034494ec.png\",\"old_name\":\"bootstrap (1).png\"}', 0, '2023-08-30 22:37:03', '2023-08-30 22:37:03'),
('b459f337-cd56-4384-9b74-b9a826273773', 13, 2, 'hi', NULL, 0, '2023-08-30 23:06:36', '2023-08-30 23:06:36'),
('c18906e5-674e-4300-ba66-81e8399941e6', 13, 12, '', '{\"new_name\":\"4da844fa-b94f-432a-9752-fbfd6b24addd.png\",\"old_name\":\"yasir.png\"}', 1, '2023-09-03 21:31:29', '2023-09-03 21:32:25'),
('c9c865f4-8819-4442-bd64-c51e2dedb4c1', 12, 2, '', '{\"new_name\":\"e34274ae-7062-48c8-a723-efd8003d9b74.png\",\"old_name\":\"bootstrap (1).png\"}', 0, '2023-08-30 22:44:45', '2023-08-30 22:44:45'),
('ce83c7e9-8146-457a-9cb5-21a85d4becd4', 13, 2, 'hi', NULL, 0, '2023-08-30 22:32:16', '2023-08-30 22:32:16'),
('ea46c9b5-19b3-4798-9eff-a66b3c73bd20', 13, 4, 'test message', NULL, 0, '2023-08-30 22:36:44', '2023-08-30 22:36:44'),
('f960297a-115f-47b3-a653-4dc82a841bdc', 13, 2, 'asdfsd', NULL, 0, '2023-08-30 22:36:01', '2023-08-30 22:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nicename` varchar(255) NOT NULL,
  `iso3` varchar(3) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, 50, 'University of Mianwali', 'BSCS', 'Computer Science', 'Computer Science', '2012-2016', '1689100730_annualterm.docx', '2023-07-12 01:38:50', '2023-07-11 18:38:50'),
(18, 12, 'Lenore', 'Dean', 'Portia', 'Neve', '1975-2003', '1695786731_freelancing.png', '2023-09-26 22:52:11', '2023-09-27 03:52:11');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `userdetail_id`, `company_name`, `position`, `period_of_employment`, `created_at`, `updated_at`) VALUES
(4, 47, 'fdghgf.com', 'Teacher', '2013-2017', '2023-06-30 06:36:55', '2023-06-30 06:36:55'),
(5, 38, 'indiaresults.com', 'BA', '2011-2015', '2023-07-05 09:27:23', '2023-07-05 09:27:23'),
(6, 12, 'Rose', 'Merritt', '2015-2017', '2023-09-11 05:42:28', '2023-10-04 03:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '13529487-a710-4b91-8b11-e7e95cfd6095', 'database', 'default', '{\"uuid\":\"13529487-a710-4b91-8b11-e7e95cfd6095\",\"displayName\":\"App\\\\Jobs\\\\SendQuizInvites\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendQuizInvites\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\SendQuizInvites\\\":12:{s:9:\\\"\\u0000*\\u0000quizid\\\";s:2:\\\"44\\\";s:10:\\\"\\u0000*\\u0000tutorid\\\";i:50;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'InvalidArgumentException: View [tutor.sendquizinvitetemplat] not found. in C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php:137\nStack trace:\n#0 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths(\'tutor.sendquizi...\', Array)\n#1 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Factory.php(138): Illuminate\\View\\FileViewFinder->find(\'tutor.sendquizi...\')\n#2 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(382): Illuminate\\View\\Factory->make(\'tutor.sendquizi...\', Array)\n#3 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(355): Illuminate\\Mail\\Mailer->renderView(\'tutor.sendquizi...\', Array)\n#4 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(273): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'tutor.sendquizi...\', NULL, NULL, Array)\n#5 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\MailManager.php(550): Illuminate\\Mail\\Mailer->send(\'tutor.sendquizi...\', Array, Object(Closure))\n#6 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(261): Illuminate\\Mail\\MailManager->__call(\'send\', Array)\n#7 C:\\xampp\\htdocs\\protutor\\app\\Jobs\\SendQuizInvites.php(55): Illuminate\\Support\\Facades\\Facade::__callStatic(\'send\', Array)\n#8 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendQuizInvites->handle()\n#9 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#10 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#11 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#12 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#13 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#14 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#15 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#16 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#17 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendQuizInvites), false)\n#18 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#19 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendQuizInvites))\n#20 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendQuizInvites))\n#22 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#23 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#24 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#25 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#27 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#28 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#29 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#30 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#31 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#32 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#33 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#34 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#36 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\xampp\\htdocs\\protutor\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 C:\\xampp\\htdocs\\protutor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\xampp\\htdocs\\protutor\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 {main}', '2023-07-18 14:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `desc1` varchar(150) NOT NULL,
  `top_subjects` text NOT NULL,
  `desc2` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `icon`, `title`, `email`, `contact`, `copyright`, `desc1`, `top_subjects`, `desc2`, `created_at`, `updated_at`) VALUES
(1, '1697526375_image 2.png', 'Lorem Ipsum is simply dummy text of the printing and ndustry. Lorem Ipsum has been the', 'Demo@gmai.com1', '460-507-6865', 'Copyright © 2023 all right reserved ProTutor', 'All Rights Reserved by Tutors Online', '14,17,13,11', '', '2023-07-18 17:50:22', '2023-10-20 00:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_lesson_id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `image_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `group_lesson_id`, `image`, `image_type`, `created_at`, `updated_at`) VALUES
(45, 47, '1697612007.png', 1, '2023-10-18 01:53:27', '2023-10-18 01:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `group_lessons`
--

CREATE TABLE `group_lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teach_level_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `participants` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `registration_start_date` date NOT NULL,
  `registration_end_date` date NOT NULL,
  `class_start_date` date NOT NULL,
  `class_end_date` date NOT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_lessons`
--

INSERT INTO `group_lessons` (`id`, `tutor_id`, `subject_id`, `teach_level_id`, `title`, `participants`, `price`, `registration_start_date`, `registration_end_date`, `class_start_date`, `class_end_date`, `is_completed`, `created_at`, `updated_at`) VALUES
(47, 12, 14, 8, 'yasir course about programming in hindi', 12, 1200, '2023-10-18', '2023-10-31', '2023-10-31', '2023-11-23', 0, '2023-10-18 01:53:26', '2023-10-18 01:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `group_lesson_plans`
--

CREATE TABLE `group_lesson_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_lesson_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_lesson_plans`
--

INSERT INTO `group_lesson_plans` (`id`, `group_lesson_id`, `type`, `time`, `date`, `created_at`, `updated_at`) VALUES
(24, 47, 'Class', '3:53 AM', '2023-10-31', '2023-10-18 01:53:27', '2023-10-18 01:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `group_lesson_student`
--

CREATE TABLE `group_lesson_student` (
  `group_lesson_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_lesson_student`
--

INSERT INTO `group_lesson_student` (`group_lesson_id`, `student_id`) VALUES
(46, 13);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `sec_1_file` varchar(255) NOT NULL,
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
  `sec2_part3_heading` varchar(255) NOT NULL,
  `sec2_part3_url` varchar(255) NOT NULL,
  `sec2_part3_desc` text NOT NULL,
  `sec2_part3_file` varchar(255) NOT NULL,
  `sec_3_file` varchar(255) NOT NULL,
  `sec_3_heading` varchar(255) NOT NULL,
  `sec_3_dec` text NOT NULL,
  `sec3_data` varchar(2000) DEFAULT NULL,
  `sec_4_file` varchar(255) NOT NULL,
  `sec_4_heading` varchar(255) NOT NULL,
  `sec_4_dec` text NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `sec_1_file`, `sec_1_heading`, `sec_1_subheading`, `sec_1_dec`, `sec2_main_heading`, `sec2_part1_heading`, `sec2_part1_url`, `sec2_part1_desc`, `sec2_part1_file`, `sec2_part2_heading`, `sec2_part2_url`, `sec2_part2_desc`, `sec2_part2_file`, `sec2_part3_heading`, `sec2_part3_url`, `sec2_part3_desc`, `sec2_part3_file`, `sec_3_file`, `sec_3_heading`, `sec_3_dec`, `sec3_data`, `sec_4_file`, `sec_4_heading`, `sec_4_dec`, `sec4_main_heading`, `sec4_part1_heading`, `sec4_part1_url`, `sec4_part1_desc`, `sec4_part2_heading`, `sec4_part2_url`, `sec4_part2_desc`, `sec7_youtube_url`, `sec7_heading`, `sec7_sub_heading1`, `sec7_sub_heading2`, `sec7_sub_heading3`, `sec7_desc`, `sec9_file`, `sec9_heading`, `sec9_play_store_url`, `sec9_apple_store_url`, `sec9_desc`, `created_at`, `updated_at`) VALUES
(1, '1697689210_hero.png', 'A good education is <br>  always a base of <br>  <span class=\"text-primary\">A bright future</span>', '|Self confidence,|A bright future,|Equitable societies,|Opportunities', 'Are you looking for a trusted online school where you can learn English language, math, science, and other subjects? You\'ve come to the right place. We are the #1 online school offering live online lessons 24/7 with certified tutors', 'How ProTutor works', 'Self-paced learning', '#', 'Our self-paced courses provide you the flexibility and convenience of learning at your own pace. The courses are meticulously created by qualified professionals and uploaded for your convenience, allowing you to pace your learning and increase the course content retention.', '1697553126_Rectangle 9317.png', '1-on-1 Live classes', '#', 'Live tutoring software enables tutors to teach students in real time utilizing interactive video conferencing features. As a Student or Parent, you can browse through Tutor profiles and their subject expertise, and thereafter book live lesson.', '1697600152_Rectangle 9317 (1).png', 'Enjoy structured learning', '#', 'Keep track of your learning progress. Improve your speaking and vocabulary with our Learning plans. Keep track of your learning progress. Improve your speaking and vocabulary with our Learning plans', '1697600152_Rectangle 9317 (2).png', '1697695434_lang.png', 'Corporate language training for business', 'ProTutor corporate training is designed for teams and businesses offering personalized language learning with online tutors. Book a demo to learn more. Want your employer to pay for your lessons? Refer your company!', '[{\"icon\":\"1697703436_expert.svg\",\"title\":\"Expert tutors\",\"description\":\"Find native speakers and certified private tutors\"},{\"icon\":\"1697703436_verified.svg\",\"title\":\"Verified profiles\",\"description\":\"We carefully check and confirm each tutor\'s profile\"},{\"icon\":\"1697703436_learn.svg\",\"title\":\"Learn anytime\",\"description\":\"Take online lessons at the perfect time for your schedule\"},{\"icon\":\"1697703436_affordable.svg\",\"title\":\"Affordable prices\",\"description\":\"Choose an experienced tutor that fits your budget\"}]', '1697708340_Image (1).png', 'Our world-class tutors<br> can help you <span class=\"text-primary\">learn online</span>', 'They prepare lessons by studying lesson plans, reviewing textbooks in detail to understand the topic they will be teaching and providing additional projects if needed during a session.', 'Our world-class tutors can help you learn online', 'Self-paced learning', '#', 'Our self-paced courses provide you the flexibility and convenience of learning at your own pace. The courses are meticulously created by qualified professionals and uploaded for your convenience, allowing you to pace your learning and increase the course content retention.', '1-on-1 Live classes', 'https://clients.charumindworks.com/protutor/find-a-tutor', 'Live tutoring software enables tutors to teach students in real time utilizing interactive video conferencing features. As a Student or Parent, you can browse through Tutor profiles and their subject expertise, and thereafter book live lesson.', 'https://www.youtube.com/embed/VcYIGvAWqLg', 'Tutor with MyOnlineTutor', 'Access by Students from around the world', 'Grown your business', 'Get paid securely', 'MyOnlineTutor provides easy-to-use and competitive features that allow you to plan and deliver your lessons easily and conveniently.', '1688716248_phone.png', 'Manage yourself from your mobile device.', '#', '#', 'There are many variations of passages of Lorem Ipsum avail the majority have suffered alteration in some form, by injected or randomised words which don\'t look', '2023-07-06 08:17:18', '2023-10-19 04:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `hourly_rates`
--

CREATE TABLE `hourly_rates` (
  `id` int(11) NOT NULL,
  `hourly_rate` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(30, 30, '2023-07-10 07:43:42', '2023-07-10 07:43:42'),
(31, 100, '2023-10-17 05:49:24', '2023-10-17 00:49:24');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identity_verifications`
--

INSERT INTO `identity_verifications` (`id`, `userdetail_id`, `issued_by_country`, `type_of_document`, `identification_number`, `expiry_date`, `identity_document_front`, `identity_document_back`, `created_at`, `updated_at`) VALUES
(1, 38, 'Alis', '1', 'Merritt', '1-2015', '1688113148_Untitled.png', '1688113148_pexels-photo-4420634.jpeg', '2023-06-30 08:19:08', '2023-07-07 07:41:50'),
(6, 38, 'Rigel', '2', 'Chaim', '14-1981', '1688722760_frontUntitled.png', '1688722760_backpexels-photo-4420634.jpeg', '2023-07-07 09:39:20', '2023-07-07 09:39:20'),
(7, 38, 'Drake', '3', 'Simon', '10-2000', '1688722760_frontpexels-photo-4420634.jpeg', '1688722760_backUntitled.png', '2023-07-07 09:39:20', '2023-07-07 09:39:20'),
(8, 12, 'Curran', '4', 'Hanna', '26-2019', '1694410977_frontmaxresdefault.jpg', '1694410977_backmaxresdefault.jpg', '2023-09-11 05:42:57', '2023-09-11 00:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
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
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2023_07_18_070216_create_jobs_table', 2),
(30, '2019_05_03_000001_create_customer_columns', 3),
(31, '2019_05_03_000002_create_subscriptions_table', 3),
(32, '2019_05_03_000003_create_subscription_items_table', 3),
(185, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(186, '2023_08_01_055920_create_group_lessons_table', 4),
(187, '2023_08_01_080518_create_galleries_table', 4),
(188, '2023_08_04_999999_add_active_status_to_users', 4),
(189, '2023_08_04_999999_add_avatar_to_users', 4),
(190, '2023_08_04_999999_add_dark_mode_to_users', 4),
(191, '2023_08_04_999999_add_messenger_color_to_users', 4),
(192, '2023_08_04_999999_create_chatify_favorites_table', 4),
(193, '2023_08_04_999999_create_chatify_messages_table', 4),
(194, '2023_08_08_082000_create_payments_table', 4),
(195, '2023_08_11_080902_add_name_column_into_users_table', 4),
(196, '2023_08_16_114400_create_payment_student_table', 4),
(197, '2023_08_17_143001_create_group_lesson_student_table', 4),
(198, '2023_08_20_164001_create_ratings_table', 4),
(199, '2023_08_31_044453_create_group_lesson_plans_table', 5),
(200, '2023_09_11_024259_add_account_id_to_users_table', 6),
(201, '2023_10_03_073626_add_sessions_to_order_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `viewer_role` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `message_type` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `read_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `viewer_role`, `user_id`, `message_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
(3, '1,2', '', 'NewUserRegisterNotification', 'New user (shubham.jangir@indiaresults.com) has just registered', '1', '2023-06-28 10:29:57', '2023-06-28 10:29:57'),
(4, '1,2', '', 'NewUserRegisterNotification', 'New user (shubham.jangir@indiaresults.com) has just registered', '1', '2023-06-29 09:22:57', '2023-06-29 09:22:57'),
(5, '1,2', '', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 05:12:09', '2023-06-30 05:12:09'),
(6, '1,2', '', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 05:24:30', '2023-06-30 05:24:30'),
(7, '1,2', '', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 10:08:22', '2023-06-30 10:08:22'),
(8, '1,2', '', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 10:11:19', '2023-06-30 10:11:19'),
(9, '1,2', '', 'NewUserRegisterNotification', 'New user (ruchika.sharma@indiaresults.com) has just registered', '1', '2023-06-30 10:13:43', '2023-06-30 10:13:43'),
(10, '1,2', '', 'NewUserRegisterNotification', 'New user (peterabiola1@yahoo.com) has just registered', '1', '2023-06-30 16:12:23', '2023-06-30 16:12:23'),
(11, '1,2', '', 'NewUserRegisterNotification', 'New user (qaisar.qk17@gmail.com) has just registered', '1', '2023-07-08 09:29:57', '2023-07-08 09:29:57'),
(12, '1,2', '', 'NewUserRegisterNotification', 'New user (qaisarkhanniaxi1@gmail.com) has just registered', '1', '2023-07-11 19:34:06', '2023-07-11 19:34:06'),
(13, '1,2', '', 'NewUserRegisterNotification', 'New user (hadiniazi801@gmail.com) has just registered', '1', '2023-08-11 03:22:31', '2023-08-11 03:22:31'),
(14, '1,2', '', 'NewUserRegisterNotification', 'New user (yasirhusain250@gmail.com) has just registered', '1', '2023-08-30 22:26:55', '2023-08-30 22:26:55'),
(15, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 03:56:21', '2023-09-05 03:56:21'),
(16, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 03:57:26', '2023-09-05 03:57:26'),
(17, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:07:26', '2023-09-05 04:07:26'),
(18, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:07:33', '2023-09-05 04:07:33'),
(19, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:26:58', '2023-09-05 04:26:58'),
(20, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:27:22', '2023-09-05 04:27:22'),
(21, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:50:39', '2023-09-05 04:50:39'),
(22, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:50:46', '2023-09-05 04:50:46'),
(23, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:51:12', '2023-09-05 04:51:12'),
(24, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-05 04:53:15', '2023-09-05 04:53:15'),
(25, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-17 11:05:11', '2023-09-17 11:05:11'),
(26, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-17 11:05:30', '2023-09-17 11:05:30'),
(27, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-17 11:06:01', '2023-09-17 11:06:01'),
(28, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-17 11:06:25', '2023-09-17 11:06:25'),
(29, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-26 22:53:51', '2023-09-26 22:53:51'),
(30, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-09-26 22:53:51', '2023-09-26 22:53:51'),
(31, '1,2', '1', 'NewSchedule', 'New Schedule time off added by (mianwalicodehouse@gmail.com)', '1', '2023-09-26 22:54:06', '2023-09-26 22:54:06'),
(32, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-02 01:15:17', '2023-10-02 01:15:17'),
(33, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-10 00:42:24', '2023-10-10 00:42:24'),
(34, '1,2', '', 'NewUserRegisterNotification', 'New user (mch786test786new11@yopmail.com) has just registered', '1', '2023-10-11 00:12:49', '2023-10-11 00:12:49'),
(35, '1,2', '', 'NewUserRegisterNotification', 'New user (mch786test786new112@yopmail.com) has just registered', '1', '2023-10-11 00:21:51', '2023-10-11 00:21:51'),
(36, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-12 01:56:48', '2023-10-12 01:56:48'),
(37, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-12 01:58:58', '2023-10-12 01:58:58'),
(38, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-12 02:05:32', '2023-10-12 02:05:32'),
(39, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:31:33', '2023-10-13 00:31:33'),
(40, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:32:58', '2023-10-13 00:32:58'),
(41, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:33:38', '2023-10-13 00:33:38'),
(42, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:35:54', '2023-10-13 00:35:54'),
(43, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:45:55', '2023-10-13 00:45:55'),
(44, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:46:42', '2023-10-13 00:46:42'),
(45, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:47:30', '2023-10-13 00:47:30'),
(46, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:49:27', '2023-10-13 00:49:27'),
(47, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:54:16', '2023-10-13 00:54:16'),
(48, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 00:57:33', '2023-10-13 00:57:33'),
(49, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 01:04:39', '2023-10-13 01:04:39'),
(50, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-13 01:06:04', '2023-10-13 01:06:04'),
(51, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-15 01:12:06', '2023-10-15 01:12:06'),
(52, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-15 01:17:42', '2023-10-15 01:17:42'),
(53, '1,2', '1', 'NewSchedule', 'New Schedule added by (mianwalicodehouse@gmail.com)', '1', '2023-10-15 01:18:53', '2023-10-15 01:18:53'),
(54, '1,2', '', 'NewUserRegisterNotification', 'New user (protutor@yopmail.com) has just registered', '0', '2023-10-18 03:43:43', '2023-10-18 03:43:43'),
(55, '3', '18', 'ProfileverifyNotification', 'Your profile is approved by admin.', '0', '2023-10-18 03:49:18', '2023-10-18 03:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `calender_sch_id` int(11) DEFAULT NULL,
  `order_type` varchar(255) NOT NULL DEFAULT 'lesson',
  `items` int(11) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL DEFAULT 1,
  `discount` int(11) DEFAULT 0,
  `transaction_fee` varchar(255) NOT NULL,
  `net_total` int(11) NOT NULL DEFAULT 1,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT 'in-active',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `zoom_meeeting_url` varchar(255) DEFAULT NULL,
  `cancelled_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `session_start` datetime NOT NULL,
  `session_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `teacher_id`, `calender_sch_id`, `order_type`, `items`, `total`, `discount`, `transaction_fee`, `net_total`, `payment_id`, `payment_status`, `status`, `zoom_meeeting_url`, `cancelled_by`, `created_at`, `updated_at`, `session_start`, `session_end`) VALUES
(39, 13, 12, 537, 'lesson', 1, 1, 0, '30', 1, NULL, 'active', '1', NULL, NULL, '2023-10-15 02:03:33', '2023-10-15 02:03:44', '2023-10-16 16:00:00', '2023-10-16 17:00:00'),
(40, 13, 12, 538, 'lesson', 1, 1, 0, '30', 1, NULL, 'active', '1', NULL, NULL, '2023-10-15 02:04:09', '2023-10-15 02:04:17', '2023-10-16 17:00:00', '2023-10-16 18:00:00'),
(41, 13, 12, 539, 'lesson', 1, 1, 0, '30', 1, NULL, 'active', '1', NULL, NULL, '2023-10-15 02:04:40', '2023-10-15 02:04:49', '2023-10-16 18:00:00', '2023-10-16 19:00:00'),
(42, 13, 12, 540, 'lesson', 1, 1, 0, '30', 1, NULL, 'active', '1', NULL, NULL, '2023-10-15 02:05:46', '2023-10-15 02:05:54', '2023-10-16 19:00:00', '2023-10-16 20:00:00'),
(43, 13, 12, 541, 'lesson', 1, 1, 0, '30', 1, NULL, 'active', '1', 'https://meet.google.com/vzx-qjxn-ayy', NULL, '2023-10-15 02:06:20', '2023-10-15 21:49:56', '2023-10-17 16:17:00', '2023-10-17 17:17:00'),
(44, 13, 12, 542, 'lesson', 1, 1, 0, '30', 1, NULL, 'active', '1', NULL, NULL, '2023-10-15 02:06:57', '2023-10-15 02:07:05', '2023-10-17 17:17:00', '2023-10-17 18:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `group_lesson_id` bigint(20) UNSIGNED DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `tutor_id`, `group_lesson_id`, `currency`, `transaction_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(15, 12, NULL, '$', 'cs_test_a1B1MABzubVbREf6xVPNaxbUmjYvMST1fz3JQ6RvD24p3eKRdBKD0xhK0h', 3000, 'pending', '2023-10-15 02:03:33', '2023-10-15 02:03:44'),
(16, 12, NULL, '$', 'cs_test_a1ppFwmSL87gbu6F1gUyE65QM8PcoJVyOqoYq5qH0kLcvE9l6HqSBv7pCR', 3000, 'pending', '2023-10-15 02:04:09', '2023-10-15 02:04:17'),
(17, 12, NULL, '$', 'cs_test_a1NZi3t8NFSmYKfmS4cUYvaZ1e0QO1qzsK5DJGhQT8zL1HVXa7dspUKMxi', 3000, 'pending', '2023-10-15 02:04:40', '2023-10-15 02:04:49'),
(18, 12, NULL, '$', 'cs_test_a1epVg2sariemzhM8PY5FtNBVO07bVZjRRMfaB7S8e5TVdsQJBOj7ZbxEX', 3000, 'pending', '2023-10-15 02:05:46', '2023-10-15 02:05:54'),
(19, 12, NULL, '$', 'cs_test_a1JXq8toR8jWIJ2He0G958Sid4OQDidktNB6gnDyPUldqs2LNLafBl4Lfp', 3000, 'pending', '2023-10-15 02:06:20', '2023-10-15 02:06:27'),
(20, 12, NULL, '$', 'cs_test_a14gWXXyF6x7juZ7qyG5JTjZb1mPsvZWkwQcETY9ivCi9StIbqXWJSb8xy', 3000, 'pending', '2023-10-15 02:06:57', '2023-10-15 02:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `payment_student`
--

CREATE TABLE `payment_student` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_student`
--

INSERT INTO `payment_student` (`payment_id`, `student_id`) VALUES
(15, 13),
(16, 13),
(17, 13),
(18, 13),
(19, 13),
(20, 13),
(21, 13);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `tutorid`, `subjectid`, `teaches_level`, `quiztitle`, `startdate`, `enddate`, `totalstudents`, `totalattended`, `status`, `createdat`, `updatedat`, `instructions`, `quizprogressbar`, `randomizequestions`, `quiztimer`, `quiztimeinseconds`, `autoadvance`, `quiztries`, `quiznooftries`, `quiztemplate`) VALUES
(71, 12, 16, 8, 'pre-board Quiz', '2023-10-24 11:00:00', '2023-10-24 01:15:00', NULL, NULL, 'Upcoming', '2023-10-15 07:15:32', '2023-10-15 07:15:32', 'cheating not allowed', 'n', 'n', 'n', 0, 'n', 'n', 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `type`, `question`, `option1`, `option2`, `option3`, `option4`, `correctanswer`, `quizid`) VALUES
(69, 'Multiple Choice Questions', 'What is css?', 'programming language', 'kids language', 'programmer language', 'style sheet', '', 71),
(70, 'Multiple Choice Questions', 'what is css selector?', 'use js', 'style elements', 'update elements', 'select html element', 'select html element', 71),
(71, 'Multiple Choice Questions', '', '', '', '', '', '', 71);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `group_lesson_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media_platform`
--

CREATE TABLE `social_media_platform` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media_platform`
--

INSERT INTO `social_media_platform` (`id`, `title`, `url`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', 1, '2023-07-19 07:03:56', '2023-07-19 01:33:56'),
(2, 'Google', 'https://www.google.com/', 0, '2023-07-19 07:07:32', '2023-07-19 01:37:32'),
(4, 'Instagram', 'https://www.instagram.com/', 1, '2023-07-19 07:49:24', '2023-07-19 02:19:24');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_quiz_invites`
--

INSERT INTO `students_quiz_invites` (`id`, `studentid`, `quizid`, `status`, `inviteat`) VALUES
(11, 13, 71, 'invited', '2023-10-15 07:19:19');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_registered_courses`
--

INSERT INTO `students_registered_courses` (`id`, `studentid`, `subjectid`, `teaches_level`, `tutorid`, `registereddatetime`, `status`) VALUES
(9, 13, 16, 8, 12, '0000-00-00 00:00:00', 'active');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_testimonial`
--

CREATE TABLE `student_testimonial` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `field` text NOT NULL,
  `student_desc` text NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `student_rating` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_testimonial`
--

INSERT INTO `student_testimonial` (`id`, `student_name`, `field`, `student_desc`, `student_image`, `student_rating`, `user_status`, `created_at`, `updated_at`) VALUES
(5, 'Adeyanju Gabriel', 'Web Designer', 'In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made', '1688541165_profile-circle.png', '5', 1, '2023-07-05 07:12:45', '2023-07-05 07:12:45'),
(6, 'Balagun Andrew', 'Laravel Developer', 'In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made', '1688541661_user.jpg', '4', 1, '2023-07-05 07:21:01', '2023-07-05 07:21:01'),
(7, 'Kalama Mitchell', 'Senior Developer', 'In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made', '1688541683_img-2.jpg', '5', 1, '2023-07-05 07:21:23', '2023-07-05 07:21:23'),
(8, 'mohan yadav', '', 'this is test Student Testimonials', '1688541733_become-a-tutor-hero.png', '3', 0, '2023-07-05 07:22:13', '2023-07-05 07:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_status` varchar(255) NOT NULL,
  `stripe_price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_product` varchar(255) NOT NULL,
  `stripe_price` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` int(11) NOT NULL,
  `support_sec1` text NOT NULL,
  `support_sec2` text NOT NULL,
  `live_chat` varchar(255) NOT NULL,
  `call_us` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `support_sec1`, `support_sec2`, `live_chat`, `call_us`, `mail`, `created_at`, `updated_at`) VALUES
(1, '[{\"title\":\"Delivery\",\"description\":\"hghjfLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\",\"url\":\"#\"},{\"title\":\"Payment\",\"description\":\"orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\",\"url\":\"#\"},{\"title\":\"Products\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\",\"url\":\"#\"},{\"title\":\"Local Store\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\",\"url\":\"#\"},{\"title\":\"Click & Collect\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\",\"url\":\"#\"},{\"title\":\"Missing Items\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\",\"url\":\"#\"}]', '[{\"title\":\"Question1\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\"},{\"title\":\"Question2\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\"},{\"title\":\"Question3\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\r\\n\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\"}]', '#', '[{\"contact\":\"00 0000 0000\",\"url\":\"#\",\"time\":\"Mon - Fri | 9:00 - 18:00 PDT\"}]', 'supports@tutorsonline.com', '2023-07-14 11:43:45', '2023-07-19 06:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `teaches_levels`
--

CREATE TABLE `teaches_levels` (
  `id` int(11) NOT NULL,
  `teaches_level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `student_no`, `first_name`, `last_name`, `country`, `languages`, `native_language`, `level`, `email`, `dob`, `gender`, `over_18`, `teaching_exp`, `current_sit`, `timezone`, `phone`, `hourly_rate`, `subject`, `profile_img`, `desc_first_last`, `desc_about`, `video_link`, `profile_verified`, `created_at`, `updated_at`) VALUES
(5, '11', 'Teacher', 'tr 5', '1', 'english', NULL, '3', 'teacher5@example.com', NULL, NULL, 'on', 'I have formal teaching experience', 'I have another teaching job', 'Asia/Karachi', '9352337856', '32', '4,15', 'avatar-5.png', 'My Class Heading', 'About Me', NULL, 0, '2023-08-25 04:11:26', '2023-08-24 23:11:26'),
(6, '13', 'Muhammad Yasir', 'Hussain', '1', 'english', NULL, '3', 'yasirhusain250@gmail.com', NULL, NULL, 'on', NULL, NULL, 'Asia/Karachi', '0304000006', '', NULL, '1695787170_freelancing.png', '', '', '', 0, '2023-08-31 03:26:51', '2023-09-26 22:59:47'),
(7, '12', 'Muhammad Yasir', 'Hussain', '1', 'english', 'english', '3', 'mianwalicodehouse@gmail.com', NULL, NULL, 'on', 'I have formal teaching experience', 'I have another teaching job', 'Asia/Karachi', '0304000786', '30', '11,14,16', '1698034367_Group 1261152983.png', 'Junior Web developer', 'Qasier khan is the owner of Qk Creator. I am 29 years old and I\'m a Sworn Translator. I\'ve been teaching ESL for all\n                                    levels\n                                    since 2010 and I\'ve been tutoring Spanish students since high-school. I\'ve also\n                                    do\n                                    translations from Spanish into English and Portuguese. My love for languages has\n                                    made me continue studying different teaching methodologies and improving my\n                                    knowledge of the grammar, not only in English but in my mother tongue as well.', '1694407465_pexels-yogendra-singh-15135149 (1080p).mp4', 1, '2023-09-01 08:47:52', '2023-10-22 23:12:47'),
(8, '15', 'M. Laheef', 'khan', '162', '6', '6', '8', 'mch786test786new11@yopmail.com', NULL, NULL, 'on', NULL, NULL, NULL, '000000000', '25', '15', '1697001169_yasir.png', 'Junior Web developer', 'I am a Junior Web developer and working on Laravel . You can also see my tutorials on my youtube channel that\'s name is Mianwali code hosue........', '1697001169_SampleVideo_1280x720_1mb.mp4', 1, '2023-10-11 05:12:49', '2023-10-11 00:12:49'),
(9, '16', 'Laheef', 'std', '', '', NULL, '', 'mch786test786new112@yopmail.com', NULL, NULL, '', NULL, NULL, NULL, '', '', '', '1697001782_65013-english-teacher 1.png', '', '', '', 0, '2023-10-11 05:21:47', '2023-10-11 00:23:02'),
(10, '17', 'mohan', 'yadav', '99', '6', '6', '8', 'mohan.yadav@indiaresults.com', '1997-07-18', '1', 'on', NULL, NULL, NULL, '9352337856', '8', '9', '1687512096_userimages.jpg', 'shubham jangir', 'this is testing teacher profile page description.', '1687512096_Events ‹ Invest Barbados - A Welcoming Investment Climate — WordPress - Google Chrome 2023-02-28 18-52-46.mp4', 0, '2023-06-23 09:21:36', '2023-06-23 09:21:36'),
(11, '18', 'new test', 'tutor', '15', '6', '6', '8', 'protutor@yopmail.com', NULL, NULL, 'on', NULL, NULL, NULL, '0000000', '31', '10', '1697618623_hero.png', 'test', 'again test', '1697618623_SampleVideo_1280x720_1mb.mp4', 1, '2023-10-18 08:43:43', '2023-10-18 03:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verify` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) DEFAULT NULL,
  `pm_type` varchar(255) DEFAULT NULL,
  `pm_last_four` varchar(4) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL,
  `account_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `name`, `phone_number`, `role`, `user_status`, `email`, `email_verified_at`, `email_verify`, `password`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`, `account_id`) VALUES
(1, 'super', 'admin', 'super admin', NULL, '1', 1, 'hello@balogunandrew.com', '2023-08-24 23:11:26', 1, 'fb9d107a49c0f2a3b25d69c074670665', NULL, '2023-08-24 23:11:26', '2023-08-24 23:11:26', NULL, NULL, NULL, NULL, 0, 'avatar.png', 0, NULL, ''),
(12, 'Yasir', 'Test', 'yasir', NULL, '3', 1, 'mianwalicodehouse@gmail.com', NULL, 1, '0bfe0cc70c6fa376169f0759fa3fb93d', 'BGs8vssEqUNNtY0UDnGUJoMzPJVWB2lHnF7q60a1dTM7to9WcABMrOtev4hlgHTvlFpcsF', '2023-08-30 22:06:43', '2023-10-01 22:46:54', NULL, NULL, NULL, NULL, 0, '', 0, NULL, 'acct_1NoPAcQnjtw9WWWr'),
(13, 'Muhammad Yasir', 'Hussain', 'Muhammad Yasir Hussain', NULL, '4', 1, 'yasirhusain250@gmail.com', NULL, 1, '44a58fc8fb523c935d4a705a359c13d6', 'jtQDNbRkHDt1hdm6F1Ezy6vg1Xc4krMu1ybBTaH1go69teOb18nYlX5qRwwB3yy3TVmwRr', '2023-08-30 22:26:51', '2023-10-01 22:47:08', 'cus_Og65HuX37Kk8xI', NULL, NULL, NULL, 0, '', 0, NULL, ''),
(15, 'M. Laheef', 'khan', '', '000000000', '3', 1, 'mch786test786new11@yopmail.com', NULL, 1, '3dd1a9c00150aad4917699b0f85d1011', '1xKzgQtmGsUlC4GJMF1zbSQl7VmYsDw9H7x8f723JgEK313u75Bqeh04TuHzVda3lxogVB', '2023-10-11 00:02:22', '2023-10-11 00:04:59', NULL, NULL, NULL, NULL, 1, 'avatar.png', 0, NULL, ''),
(16, 'Laheef', 'std', 'Laheef std', NULL, '4', 1, 'mch786test786new112@yopmail.com', NULL, 1, '526a5a04a77187d2e45170e097c6b450', 'UKHyexaQXhPfz3PZWNgpsGASQPdt0Y3StlhKlF5f66OMnjdAM7q3to4ul71eMYzWlAMcxn', '2023-10-11 00:21:47', '2023-10-11 00:22:06', NULL, NULL, NULL, NULL, 0, 'avatar.png', 0, NULL, ''),
(17, 'mohan', 'yadav', '', '9352337856', '1', 1, 'mohan.yadav@indiaresults.com', NULL, 1, 'ac7281056efc451c725576ac5f148f78', NULL, '2023-06-22 00:44:38', '2023-06-23 15:56:36', NULL, NULL, NULL, NULL, 0, 'avatar.png', 0, NULL, ''),
(18, 'new test', 'tutor', '', '0000000', '3', 1, 'protutor@yopmail.com', NULL, 1, '6048c6746d99c082af68a898628851fc', 'DP0iklXHXM4WEn9zxiXVSEAjaGmqnhyybjOkBkv8yOaeWgqdTEgbajP7KGFgMy2abCAaFJ', '2023-10-18 03:32:05', '2023-10-18 03:41:52', NULL, NULL, NULL, NULL, 0, 'avatar.png', 0, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `become_a_tutors`
--
ALTER TABLE `become_a_tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
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
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_group_lesson_id_foreign` (`group_lesson_id`);

--
-- Indexes for table `group_lessons`
--
ALTER TABLE `group_lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_lessons_tutor_id_foreign` (`tutor_id`),
  ADD KEY `group_lessons_subject_id_foreign` (`subject_id`),
  ADD KEY `group_lessons_teach_level_id_foreign` (`teach_level_id`);

--
-- Indexes for table `group_lesson_plans`
--
ALTER TABLE `group_lesson_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_lesson_plans_group_lesson_id_foreign` (`group_lesson_id`);

--
-- Indexes for table `group_lesson_student`
--
ALTER TABLE `group_lesson_student`
  ADD KEY `group_lesson_student_group_lesson_id_foreign` (`group_lesson_id`),
  ADD KEY `group_lesson_student_student_id_foreign` (`student_id`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_transaction_id_unique` (`transaction_id`),
  ADD KEY `payments_tutor_id_foreign` (`tutor_id`),
  ADD KEY `payments_group_lesson_id_foreign` (`group_lesson_id`);

--
-- Indexes for table `payment_student`
--
ALTER TABLE `payment_student`
  ADD KEY `payment_student_payment_id_foreign` (`payment_id`),
  ADD KEY `payment_student_student_id_foreign` (`student_id`);

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_student_id_foreign` (`student_id`),
  ADD KEY `ratings_group_lesson_id_foreign` (`group_lesson_id`);

--
-- Indexes for table `social_media_platform`
--
ALTER TABLE `social_media_platform`
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
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `become_a_tutors`
--
ALTER TABLE `become_a_tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=554;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `group_lessons`
--
ALTER TABLE `group_lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `group_lesson_plans`
--
ALTER TABLE `group_lesson_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hourly_rates`
--
ALTER TABLE `hourly_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `identity_verifications`
--
ALTER TABLE `identity_verifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_media_platform`
--
ALTER TABLE `social_media_platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spoken_languages`
--
ALTER TABLE `spoken_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students_quiz_invites`
--
ALTER TABLE `students_quiz_invites`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students_quiz_questions`
--
ALTER TABLE `students_quiz_questions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `students_registered_courses`
--
ALTER TABLE `students_registered_courses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_quiz_attempt`
--
ALTER TABLE `student_quiz_attempt`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `student_testimonial`
--
ALTER TABLE `student_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teaches_levels`
--
ALTER TABLE `teaches_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_group_lesson_id_foreign` FOREIGN KEY (`group_lesson_id`) REFERENCES `group_lessons` (`id`);

--
-- Constraints for table `group_lessons`
--
ALTER TABLE `group_lessons`
  ADD CONSTRAINT `group_lessons_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_lessons_teach_level_id_foreign` FOREIGN KEY (`teach_level_id`) REFERENCES `teaches_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_lessons_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `group_lesson_plans`
--
ALTER TABLE `group_lesson_plans`
  ADD CONSTRAINT `group_lesson_plans_group_lesson_id_foreign` FOREIGN KEY (`group_lesson_id`) REFERENCES `group_lessons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `group_lesson_student`
--
ALTER TABLE `group_lesson_student`
  ADD CONSTRAINT `group_lesson_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_group_lesson_id_foreign` FOREIGN KEY (`group_lesson_id`) REFERENCES `group_lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_student`
--
ALTER TABLE `payment_student`
  ADD CONSTRAINT `payment_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_group_lesson_id_foreign` FOREIGN KEY (`group_lesson_id`) REFERENCES `group_lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
