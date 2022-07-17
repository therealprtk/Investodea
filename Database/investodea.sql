
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `investodea`
--

-- --------------------------------------------------------
--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `code`, `description`, `type`) VALUES
(1, '1123', 'You have been registered successfully', 'success'),
(2, '4568', 'Unknown error occurred while performing your request', 'danger'),
(3, '0927', 'Email address is already registered', 'warning'),
(4, '0346', 'Invalid email or password', 'danger'),
(5, '9837', 'Your profile have been updated successfully', 'success'),
(6, '9564', 'Password updated successfully', 'success'),
(9, '2305', 'Professional qualification was added successfully', 'success'),
(11, '0521', 'Qualification was deleted successfully', 'success'),
(13, '9367', 'language have been added', 'success'),
(14, '0591', 'Language was deleted successfully', 'success'),
(15, '8763', 'Language have been updated', 'success'),
(16, '6734', 'Professional qualification was updated', 'success'),
(17, '9843', 'Your idea have been posted successfully', 'success'),
(18, '1964', 'Training / Workshop have been added successfully', 'success'),
(20, '9210', 'working experience have been added', 'success'),
(22, '9215', 'working experience updated successfully', 'success'),
(24, '0593', 'working experience was deleted', 'success'),
(26, '9522', 'Training / workshop record have been deleted', 'success'),
(28, '2303', 'Academic qualification have been added successfully', 'success'),
(30, '1521', 'Academic qualification was deleted', 'success'),
(32, '3214', 'Academic qualification have been updated', 'success'),
(34, '2380', 'Referee was added successfully', 'success'),
(36, '7642', 'Referee information have been updated', 'success'),
(38, '0173', 'Idea have been deleted', 'success'),
(40, '0369', 'Idea has been updated successfully', 'success'),
(42, '2974', 'An error occurred while sending your message', 'danger'),
(43, '5634', 'Your message was sent successfully', 'success'),
(44, '3091', 'You have successfully changed your password', 'success'),
(45, '3591', 'An error occurred while updating your password', 'danger'),
(46, '2290', 'Your certificate size must be less or equal to <strong>1MB</strong>', 'warning'),
(47, '2490', 'Your transcript size must be less or equal to <strong>1MB</strong>', 'warning'),
(48, '5790', 'Training information was updated', 'success'),
(50, '3478', 'Your image size must be less or equal to <strong>1MB</strong>', 'warning'),
(51, '6789', 'Attachment was added successfully', 'success'),
(53, '6784', 'Attachment was deleted successfully', 'success'),
(55, '7764', 'Attachment was updated successfully', 'success'),
(57, '9517', 'Referee have been deleted', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Community and Social Devt'),
(2, 'Creative and Design'),
(3, 'Education and Training'),
(4, 'Engineering and Construction'),
(5, 'Farming and Agribusiness'),
(6, 'Food'),
(7, 'Financial Services'),
(8, 'Healthcare and Pharmaceutical'),
(9, 'IT'),
(10, 'Marketing,Media and Brand'),
(11, 'Tourism and Travel'),
(12, 'Transport and Services'),
(13, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jharkhand'),
(11, 'Karnataka'),
(12, 'Kerala'),
(13, 'Madhya Pradesh'),
(14, 'Maharashtra'),
(15, 'Manipur'),
(16, 'Meghalaya'),
(17, 'Mizoram'),
(18, 'Nagaland'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Rajasthan'),
(22, 'Sikkim'),
(23, 'Tamil Nadu'),
(24, 'Telangana'),
(25, 'Tripura'),
(26, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(28, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `company` varchar(255) NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `closing_date` varchar(255) NOT NULL,
  `enc_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`job_id`, `title`, `state`, `category`, `type`, `description`,`company`, `date_posted`, `closing_date`, `enc_id`) VALUES
('5609558107', 'Technical Engineer', 'Ghana', 'IT and Telecoms', 'Long Term Investment', 'This is a complete system that has both android version and the desktop version. It also manages sales and can be used manage attendance as well.<br>', 'CM858235891', 'August 06, 2021', '01/09/2021', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_applications`
--

CREATE TABLE `tbl_job_applications` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `application_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `tbl_tokens`
--

CREATE TABLE `tbl_tokens` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bdate` varchar(255) NOT NULL,
  `bmonth` varchar(255) NOT NULL,
  `byear` varchar(255) NOT NULL ,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL ,
  `state` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `about` longtext,
  `avatar` longblob,
  `last_login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL ,
  `login` varchar(255) NOT NULL,
  `member_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `gender`, `bdate`, `bmonth`, `byear`, `email`, `title`, `state`, `phone`, `about`, `avatar`, `last_login`, `role`, `website`, `login`, `member_no`) ;
--
-- Indexes for dumped tables
--
--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`enc_id`),
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `tbl_job_applications`
--
ALTER TABLE `tbl_job_applications`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `tbl_tokens`
--
ALTER TABLE `tbl_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`member_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `enc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_job_applications`
--
ALTER TABLE `tbl_job_applications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tokens`
--
ALTER TABLE `tbl_tokens`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
