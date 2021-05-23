-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 06:23 AM
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
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(111) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `admin_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(7, 'vivek65k@gmail.com', '12345', 'vivek65k', 'vivek', 'pandey', '1'),
(8, 'vivek@gmail.com', '1', 'pritesh', 'vivek', 'pandey', '2'),
(9, 'pritesh@gmail.com', 'pritesh123', ' pritesh123', ' pritesh', ' thakur', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(111) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'Super admin'),
(2, 'Customer admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(111) NOT NULL,
  `customer_email` varchar(111) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(100) NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `category`) VALUES
(7, 'vivek@gmail.com', 'Urgent Requirement of PHP Developer, 1 To 4 Years, Noida', 'Dear Candidates, \r\n\r\nGreeting from iWEBSERVICES.\r\n\r\niWEBSERVICES is one of the most promising full-service Web ', 'India', 'West Bengal', 'Kolkata', ' PHP ', ' 3'),
(10, 'rohit@gmail.com', 'PHP Developer - Angularjs/corephp/mysql', 'Angularjs', 'North Korea', 'Hwanghae-namdo', 'Kaesong', 'Angularjs', ' 6'),
(11, 'amit@gmail.com', 'Sr.PHP Developer Jobs in Kolkata', 'Candidates Skill:-\r\n1) Candidates must have knowledge of Ajax, Advance Jquery, .. NET, Laravel, Wordpress (rela', 'India', 'Uttaranchal', 'Uttaranchal', 'php', ' 3'),
(12, 'amit@gmail.com', 'Coding java Developer', 'Php Developer Start Date : Immediately Great opportunities for qualified PHP developers OUR MOBILE APPS Require', 'India', 'Assam', 'Agia', 'java', ' 3'),
(13, 'amit@gmail.com', 'java developer', 'ABOUT US\r\nB3- BRAIN BEHIND BRAND is one of the fastest growing Executive Search Agency/ Placement Consultant based at Kolkata, India. We started our journey in 2008 and since then, have worked/ working for esteemed Clients in India, Oman, UAE, Malaysia, Indonesia etc. Our focused Verticals are Engineering, Construction, Manufacturing, Mining, Project Management etc.\r\nABOUT OUR CLIENT (Owner of this Job)\r\nThis Company have a vision is to democratize financial information and bring Wall Street like information to the masses by using artificial intelligence, generate smart analytics and intelligent content curation for the global financial markets. Their aim is to be exhaustive but precise. A tough challenge considering the expanse of information that is getting created. Currently, the engine covers US and Indian stocks, Currencies, Commodities, Indices and ETFs. Further, we use the power of social media, email, YouTube to reach our audience where they hang out, thus breaking away from the traditional distribution channels of investment research and connecting with the millennial audience.\r\nPROFILE NAME:\r\n\r\nJob Title --- PHP Developer\r\nExperience --- 2 5 years\r\nQualification Any Graduate\r\nPlace of Posting ----- KOLKATA\r\nCTC 1,80,000 3,60,000\r\nDUTIES AND RESPONSIBILITIES -----\r\nWe require PHP Developer candidate_\r\nSkills Required:\r\nâ€¢ Core PHP 7.2\r\nâ€¢ GIT\r\nâ€¢ MVC Framework (Code igniter)\r\nâ€¢ OOPS\r\nâ€¢ HTML\r\nâ€¢ CSS\r\nâ€¢ AJAX\r\nâ€¢ JQuery\r\nâ€¢ RESTful API\r\nâ€¢ MySql\r\nâ€¢ MongoDb\r\nâ€¢ Ubuntu\r\nâ€¢ Netbeans\r\nâ€¢ Web Security\r\nAdditional skills:\r\nâ€¢ Docker\r\nâ€¢ Kubernetes\r\nIf you are highly interested and motivated, kindly send your positive clarification as soon as possible to- becube13@gmail.com\r\nWITH REGARDS\r\nPrativa Batabyal\r\n7595064381\r\nJR. EXECUTIVETALENT ACQUISITION\r\nB3- BRAIN BEHIND BRAND', 'India', 'Manipur', 'Boljang', 'java', ' 3'),
(14, 'amit@gmail.com', 'java Developer', 'Candidates Skill:-\r\n\r\n1) Must have Knowledge of Ajax,Advance Jquary, .net ,Laravel, Wordpress (related Framework ),\r\n\r\ndbms, Ionic or Any Mobile Hybrid App Framework .', 'India', 'Himachal Pradesh', 'Alas', 'java', ' 3'),
(15, 'amit@gmail.com', 'Urgent Job opening for PHP Developer', 'Job Description\r\n\r\nOpening for a PHP Developer who is dedicated to the craft, writes code that they are proud of and can hit the ground running. A PHP Developer writes beautiful, fast PHP to a high standard, in a timely and scalable way that improves the code-base of our products in meaningful ways.\r\nCONTACT - HR Priyanka (9330241083)', 'India', 'West Bengal', 'Ambikanagar', 'php', ' 3'),
(16, 'amit@gmail.com', 'Urgent hiring for Custom Php/core Php Developer', 'The placement industry is producing jobs on daily basis. Different organizations and MNCs are uploading the vacancies on several job portals for hiring the righteous talent. On the other hand, there are many job seekers, who are ready to serve and contribute to the betterment of the company. To reduce the gap between them, The Best Services is here. The Best Services is one of the noteworthy names in the placement sector of Gujarat. This placement company is the brainchild of Shri GK Patel. He laid the foundation brick of the company in the year 2014 in Rajkot city. Since inception, Shri GK Patel has been guiding us through the path of success. Presently, we are growing speedily.', 'Angola', 'Huambo', 'Chela', 'php', ' 3'),
(17, 'amit@gmail.com', 'Angularjs Developer', 'We are looking for PHP Developers with 3 years of experience to strengthen our team.\r\n\r\nJob Description :\r\n\r\n- Your primary focus will be the development of all server-side logic, definition and maintenance of the central database, and ensuring high performance and responsiveness to requests from the front-end.\r\n\r\nResponsibilities :\r\n\r\n- Integration of user-facing elements developed by front-end developers\r\n\r\n- Build efficient, testable, and reusable PHP modules\r\n\r\n- Solve complex performance problems and architectural challenges\r\n\r\n- Integration of data storage solutions\r\n\r\nSkills And Qualifications :\r\n\r\n- Strong knowledge of PHP web framework such as Laravel.\r\n\r\n- Understanding the fully synchronous behavior of PHP\r\n\r\n- Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3\r\n\r\n- Knowledge of object-oriented PHP programming\r\n\r\n- Understanding accessibility and security compliance\r\n\r\n- Strong knowledge of the common PHP or web server exploits and their solutions\r\n\r\n- Familiarity with limitations of PHP as a platform and its workarounds\r\n\r\n- Familiarity with SQL/NoSQL databases and their declarative query languages\r\n\r\n- B. Tech. / MCA or equivalent\r\n\r\nInterested candidate can give a call at 91 6290829813', 'Algeria', 'Oum el Bouaghi', 'Ain Kercha', 'Angularjs', ' 3'),
(18, 'amit@gmail.com', 'Senior PHP developer', 'Strong knowledge of OOPs, Solid principles;\r\n3+ years of experience in back-end development;\r\n1+ year of experience in Laravel5 or similar frameworks such as symfony\r\n2+ year of experience in relational DB (mysql, postgresql);\r\nGit\r\nFluent level of English\r\n\r\nWould be a plus:\r\n\r\nContainerization, microservices;\r\nExperience developing with RESTful services, SOA;\r\nUnderstanding of development methodologies (e.g. Agile).\r\n\r\nResponsibilities:\r\n\r\nDevelopment and maintaining back-end parts on the web applications;\r\nArchitecture & development of new and existing components;\r\nActively participate in the implementation and release of new product features.\r\nProficiency in noSql (mongodb, redis), unix/linux console;\r\nUnit testing (PHPUnit).', 'Belize', 'Stann Creek', 'Dangriga', 'php', ' 3'),
(19, 'amit@gmail.com', 'Opening for Angularjs Developer', 'Profile - PHP/Laravel Developer\r\n\r\nTEKSMOBILE has an urgent requirement for a PHP developer. Experienced candidates will be given preference.\r\n\r\nExperience - 2+ years to 6+ years\r\n\r\nNumber of Vacancies : 02\r\n\r\nLocation - Kolkata\r\n\r\nJob Description:\r\n\r\nCandidates are required to have excellent object-oriented programming skills. Extensive experience in handling/managing PHP/Laravel data objects is essential. Should be proficient in working with PHP 5 or later. Knowledge of React.js will be considered as an added advantage.\r\n\r\nDesired Profile\r\n\r\nShould know in and out of PHP / CodeIgniter / Laravel.\r\n\r\nStrong reasoning and logical skills\r\n\r\nShould be able to think smart and do the right implementation.\r\n\r\nShould understand complex admin panel portals and complex database designs\r\n\r\nShould be problem solving.\r\n\r\nRest APIs and other APIs like Google Places etc.\r\n\r\nShould have good Laravel Knowledge. Projects will be mainly on this framework.\r\n\r\nSpecial Preference given knowledge with React.js\r\n\r\nHTML5 / Responsive...', 'Anguilla', 'The Valley', 'The Valley', 'Angularjs', ' 3'),
(20, 'amit@gmail.com', 'Urgent requirement for PHP Developer/ Web Designer', 'Experience: 1 - 4 years\r\nSkills: Web Designer, Web Development, Web Design, Web Developer, Php developer, PHP programmer\r\nIndustry: Any\r\nFunctional Area: IT Urgent requirement for PHP Developer/ Web Designer\r\n\r\nResponsible for creating and implementing an array of Web-based products using PHP, MySQL, Ajax, and JavaScript. You develop back-end components, connect the application with other web services, and assist front-end developers by ensuring their work integrates with the application', 'Afghanistan', 'Paktika', 'Zerok-Alakadari', 'php', ' 3'),
(21, 'amit@gmail.com', 'Senior PHP Developer - MySQL/Javascript/jQuery (3-8 yrs)', 'We are looking for Sr. PHP Developers with energy, a positive attitude and desire to make a difference. You will work as a part of a web development team that is responsible for all aspects of the ongoing web development projects management. You must be well versed with core PHP, database architecture, and programming (Knowledge of PHP, MySQL, JavaScript, JQuery, AJAX, XML.) We are looking for a person who can utilize the available resources to the best of the possible limit.\r\n\r\nJob Description :\r\n\r\n- To develop and guide the team members in enhancing their technical capabilities and increasing productivity\r\n\r\n- Troubleshoot, test and maintain the core applications and databases to ensure strong optimization and functionality\r\n\r\n- Experience in common third-party APIs (Google, Facebook) & Web Services (REST/SOAP)\r\n\r\n- Strong coding and design skills with prior experience in developing scalable & high availability server-side applications.\r\n\r\n- Ability to manage projects, prior activity and...', 'Albania', 'Berat', 'Bogove', 'php', ' 3'),
(22, 'amit@gmail.com', 'Angularjs Developer', 'â€¢ Strong knowledge of PHP web frameworks (such as Laravel, CodeIgniter, Core PHP, WordPress. )\r\nâ€¢ Strong Knowledge on Apache server JavaScript: Angular.js, Node.js, jQuery etc.\r\nâ€¢ Knowledge of new web developments like AJAX, XML Building Web applications and Websites with an emphasis on performance and user experience.\r\nâ€¢ Plugin Development, Word press theme customization.\r\nâ€¢ Basic understanding of front-end technologies, such as JavaScript, HTML5 & CSS3 Hands on experience with any E-commerce website.\r\nâ€¢ Experiences in developing web based applications in MVC architecture.\r\nâ€¢ Candidate must have independently done at least 5-10 projects.\r\nâ€¢ Build, maintain, and optimize PHP web applications. Integration of data storage solutions {may include databases, key-value stores, blob stores, etc.\r\n', 'Benin', 'Atakora', 'Natitingou', 'Angularjs', ' 3');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `des` varchar(100) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company`, `des`, `admin`) VALUES
(6, '     Web', '       web                                                                       ee                 ', 'pritesh@gmail.com'),
(7, ' poorti', '                      poorti is the best company                    ', 'rohit@gmail.com'),
(8, ' Webmaddy', '                      Webmaddy                    ', 'vivek@gmail.com'),
(9, ' infosky', '                      infosky                    ', 'pritesh@gmail.com'),
(10, 'telcome.net', 'telcome.n', 'rohit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobskeer`
--

CREATE TABLE `jobskeer` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobskeer`
--

INSERT INTO `jobskeer` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`) VALUES
(1, 'vivek65k@gmail.com', '1', 'vivek', 'pandey', '2019-07-24', '08210991424'),
(2, 'amit@gmail.com', '12345', 'Amit', 'Kumar', '2019-07-23', '08210991424');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `file` varchar(111) NOT NULL,
  `id_job` varchar(111) NOT NULL,
  `job_seeker` varchar(111) NOT NULL,
  `mobile_number` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobile_number`) VALUES
(17, 'vivek', 'pandey', '2019-09-06', 'post_again', '17 ', 'vivek@gmail.com ', 12345),
(21, 'vivek', 'pandey', '2019-09-13', 'post_again', '11 ', 'vivek65k@gmail.com ', 356);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(2, 'java', 'gh'),
(3, 'php', 'php for fresher'),
(4, 'python', 'this is for python'),
(5, 'Wordpress', 'Wordpress'),
(6, 'Angularjs', 'Angularjs'),
(7, 'flutter', 'this is for mobile development');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(111) NOT NULL,
  `img` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `number` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `img`, `name`, `dob`, `number`, `email`, `user_email`) VALUES
(19, 'download.png', 'vivek kumar pandey', '', '08210991424', 'vivek65k@gmail.com', 'vivek65k@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobskeer`
--
ALTER TABLE `jobskeer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobskeer`
--
ALTER TABLE `jobskeer`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
