-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2021 at 06:40 PM
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
-- Database: `online_study_material_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_papers`
--

DROP TABLE IF EXISTS `exam_papers`;
CREATE TABLE IF NOT EXISTS `exam_papers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(100) NOT NULL,
  `subject_exam_paper_type` varchar(40) NOT NULL,
  `subject_exam_paper_year` varchar(40) NOT NULL,
  `subject_course_name` varchar(40) NOT NULL,
  `subject_type` varchar(40) NOT NULL,
  `file` varchar(40) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

DROP TABLE IF EXISTS `study_material`;
CREATE TABLE IF NOT EXISTS `study_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `teacher_name` varchar(40) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_course_name` varchar(40) NOT NULL,
  `subject_type` varchar(40) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(100) NOT NULL,
  `subject_course_name` varchar(40) NOT NULL,
  `subject_type` varchar(40) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=408 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_course_name`, `subject_type`, `date`) VALUES
(372, 'MS 105 Mathematics-II', 'B.Tech', 'Core', '2021-12-27'),
(373, 'CO 105 Discrete Mathematics', 'B.Tech', 'Core', '2021-12-27'),
(374, 'EC 102 Basic Electronics', 'B.Tech', 'Core', '2021-12-27'),
(375, 'ME 102 Workshop Practice', 'B.Tech', 'Core', '2021-12-27'),
(376, 'CO 103 Introductory Computing', 'B.Tech', 'Core', '2021-12-27'),
(377, 'CO 104 Computing Lab', 'B.Tech', 'Core', '2021-12-27'),
(371, 'PH 104 Physics-II', 'B.Tech', 'Core', '2021-12-27'),
(370, 'SE 100 Induction Program', 'B.Tech', 'Core', '2021-12-27'),
(369, 'EF 103 Communicative English', 'B.Tech', 'Core', '2021-12-27'),
(368, 'EE 104 Basic Electrical Engineering Lab', 'B.Tech', 'Core', '2021-12-27'),
(367, 'EE 103 Basic Electrical Engineering', 'B.Tech', 'Core', '2021-12-27'),
(366, 'MS 104 Mathematics-I', 'B.Tech', 'Core', '2021-12-27'),
(364, 'CH 103 Chemistry', 'B.Tech', 'Core', '2021-12-27'),
(362, 'Mobile Code Security', 'PHD', 'Core', '2021-12-27'),
(361, 'Content-based Retrieval & Indexing', 'PHD', 'Core', '2021-12-27'),
(360, 'Soft Data Mining', 'PHD', 'Core', '2021-12-27'),
(359, 'Natural Language Processing', 'PHD', 'Core', '2021-12-27'),
(358, 'Information Systems', 'PHD', 'Core', '2021-12-27'),
(357, 'Cryptology & Cryptography', 'PHD', 'Core', '2021-12-27'),
(356, 'Multimedia Systems', 'PHD', 'Core', '2021-12-27'),
(355, 'Image Processing and Pattern Recognition', 'PHD', 'Core', '2021-12-27'),
(354, 'Parallel Processing', 'PHD', 'Core', '2021-12-27'),
(353, 'Biomimetic and Cognitive Robotics', 'PHD', 'Core', '2021-12-27'),
(352, 'Computer and Network Security', 'PHD', 'Core', '2021-12-27'),
(351, 'IT 610 Advanced Database System', 'M.Tech (IT)', 'Core', '2021-12-27'),
(350, 'CS 601 Design Analysis of Algorithms', 'M.Tech (IT)', 'Core', '2021-12-27'),
(349, 'CS 634 Selected Topics in Computer Networks', 'M.Tech (IT)', 'Core', '2021-12-27'),
(348, 'IT 611 Distributed Systems', 'M.Tech (IT)', 'Core', '2021-12-27'),
(347, 'CS 531 Object Oriented Programming & Design', 'M.Tech (IT)', 'Core', '2021-12-27'),
(346, 'CS 545 Seminar', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(345, 'CS 544 Advanced Programming Lab II', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(344, 'CS 634 Selected Topics in Computer Networks', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(343, 'IT 510 Advanced Operating Systems', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(342, 'CS 543 Advanced Programming Lab I', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(341, 'CS 606 Computer Architecture and Parallel Processing', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(340, 'CS 542 Advanced Algorithms and Data Structures', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(338, 'CS 507 Computer Networks', 'MCA', 'Core', '2021-12-27'),
(337, 'CS 505 Software Engineering', 'MCA', 'Core', '2021-12-27'),
(336, 'CS 504 Operating System', 'MCA', 'Core', '2021-12-27'),
(335, 'CS 509 Data Communication', 'MCA', 'Core', '2021-12-27'),
(334, 'CS 508 Database Management', 'MCA', 'Core', '2021-12-27'),
(333, 'CS 502 System Software', 'MCA', 'Core', '2021-12-27'),
(339, 'CS 541 Mathematical Foundation for Computer Science', 'M.Tech (CSE)', 'Core', '2021-12-27'),
(332, 'CS 409 Comp. Organization & Architecture', 'MCA', 'Core', '2021-12-27'),
(331, 'CS 408 Data Structures', 'MCA', 'Core', '2021-12-27'),
(330, 'CS 403 File Structures', 'MCA', 'Core', '2021-12-27'),
(329, 'CS 407 Information and Communication Technology', 'MCA', 'Core', '2021-12-27'),
(328, 'CS 406 Digital Logic', 'MCA', 'Core', '2021-12-27'),
(327, 'CS 405 Discrete Mathematics', 'MCA', 'Core', '2021-12-27'),
(326, 'CS 404 Programming & Problem Solving', 'MCA', 'Core', '2021-12-27'),
(365, 'PH 103 Physics-I', 'B.Tech', 'Core', '2021-12-27'),
(215, 'CS 637 Topics on Cognitive Radio and Networks', 'Common Course', 'Elective', '2021-12-27'),
(214, 'CS 663 Randomized Algorithms', 'Common Course', 'Elective', '2021-12-27'),
(213, 'IT 503 Multimedia Systems', 'Common Course', 'Elective', '2021-12-27'),
(212, 'CS 612 Advanced Computer Graphics', 'Common Course', 'Elective', '2021-12-27'),
(211, 'CS 504 Natural Language Processing', 'Common Course', 'Elective', '2021-12-27'),
(210, 'CS 617 VLSI Design', 'Common Course', 'Elective', '2021-12-27'),
(209, 'CS 668 Blockchain Architecture and Use cases', 'Common Course', 'Elective', '2021-12-27'),
(208, 'IT 509 Data Mining and Data Warehousing', 'Common Course', 'Elective', '2021-12-27'),
(207, 'CS 538 Computational Geometry', 'Common Course', 'Elective', '2021-12-27'),
(206, 'CS 653 Introduction to Internet of Things', 'Common Course', 'Elective', '2021-12-27'),
(205, 'CS 725 Knowledge Representation and Reasoning', 'Common Course', 'Elective', '2021-12-27'),
(204, 'IT 517 Pattern Recognition', 'Common Course', 'Elective', '2021-12-27'),
(203, 'CS 618 Information Theory and Coding', 'Common Course', 'Elective', '2021-12-27'),
(202, 'CS 614 Graph Theoretic Algorithms', 'Common Course', 'Elective', '2021-12-27'),
(201, 'CS 616 Machine Learning', 'Common Course', 'Elective', '2021-12-27'),
(200, 'CS 619 Privacy and Security in Online Social Network', 'Common Course', 'Elective', '2021-12-27'),
(199, 'CS 638 Software Defined Networking and Network Function Virtualization', 'Common Course', 'Elective', '2021-12-27'),
(198, 'CS 613 Image Processing and Computer Vision', 'Common Course', 'Elective', '2021-12-27'),
(197, 'CS 664 Parallel Algorithms', 'Common Course', 'Elective', '2021-12-27'),
(196, 'IT 507 Computer Security and Cryptography', 'Common Course', 'Elective', '2021-12-27'),
(195, 'CS 659 An Introduction to Probability in Computing', 'Common Course', 'Elective', '2021-12-27'),
(194, 'CS 622 Modern Compiler Design', 'Common Course', 'Elective', '2021-12-27'),
(193, 'IT 610 Advanced Database System', 'Common Course', 'Elective', '2021-12-27'),
(192, 'BM 501 Foundation of Management', 'Common Course', 'Elective', '2021-12-27'),
(191, 'BM 504 Managerial Economics', 'Common Course', 'Elective', '2021-12-27'),
(190, 'MS 509 Probability & Statistics', 'Common Course', 'Elective', '2021-12-27'),
(189, 'BM 421 Accounting & Financial Management', 'Common Course', 'Elective', '2021-12-27'),
(188, 'IT 611 Distributed Systems', 'Common Course', 'Elective', '2021-12-27'),
(187, 'CS 531 Object Oriented Programming & Design', 'Common Course', 'Elective', '2021-12-27'),
(186, 'CS 609 Geographic Information Systems', 'Common Course', 'Elective', '2021-12-27'),
(185, 'CS 601 Design & Analysis of Algorithms', 'Common Course', 'Elective', '2021-12-27'),
(184, 'CS 422 Numerical Methods', 'Common Course', 'Elective', '2021-12-27'),
(183, 'CS 602 Image Processing', 'Common Course', 'Elective', '2021-12-27'),
(182, 'CS 532 Compiler Design', 'Common Course', 'Elective', '2021-12-27'),
(181, 'IT 504 E-Commerce', 'Common Course', 'Elective', '2021-12-27'),
(180, 'CS 524 Theory of Computation', 'Common Course', 'Elective', '2021-12-27'),
(179, 'CS 523 Enterprise Resource Planning', 'Common Course', 'Elective', '2021-12-27'),
(178, 'CS 522 Computer Graphics', 'Common Course', 'Elective', '2021-12-27'),
(177, 'CS 533 Computational Geometry', 'Common Course', 'Elective', '2021-12-27'),
(176, 'CS 610 Bioinformatics', 'Common Course', 'Elective', '2021-12-27'),
(175, 'CS 606 Computer Architecture and Parallel Processing', 'Common Course', 'Elective', '2021-12-27'),
(174, 'IT 507 Computer Security & Cryptography', 'Common Course', 'Elective', '2021-12-27'),
(173, 'IT 509 Data Mining & Data Warehousing', 'Common Course', 'Elective', '2021-12-27'),
(172, 'CS 625 Web Technology', 'Common Course', 'Elective', '2021-12-27'),
(171, 'CS 621 Mobile Computing', 'Common Course', 'Elective', '2021-12-27'),
(170, 'CS 529 Embedded Systems', 'Common Course', 'Elective', '2021-12-27'),
(169, 'CS 421 Graph Theory', 'Common Course', 'Elective', '2021-12-27'),
(168, 'CS 424 Formal Language and Automata', 'Common Course', 'Elective', '2021-12-26'),
(167, 'CS 525 Artificial Intelligence', 'Common Course', 'Elective', '2021-12-26'),
(216, 'CS 615 Robotics', 'Common Course', 'Elective', '2021-12-27'),
(217, 'CS 620 Data Science', 'Common Course', 'Elective', '2021-12-27'),
(218, 'CS 607 Optimization Techniques', 'Common Course', 'Elective', '2021-12-27'),
(219, 'CO 503 Fuzzy Logic and Neural Networks', 'Common Course', 'Elective', '2021-12-27'),
(220, 'CS 650 Introduction to Machine Learning', 'Common Course', 'Elective', '2021-12-27'),
(221, 'CS 651 AI: Search Methods for Problem Solving', 'Common Course', 'Elective', '2021-12-27'),
(222, 'CS 652 Privacy and Security in Online Social Media', 'Common Course', 'Elective', '2021-12-27'),
(223, 'CS 654 Programming, Data Structures and Algorithms using Python', 'Common Course', 'Elective', '2021-12-27'),
(224, 'CS 655 Scalable Data Science', 'Common Course', 'Elective', '2021-12-27'),
(225, 'CS 656 Introduction to R Software', 'Common Course', 'Elective', '2021-12-27'),
(226, 'CS 657 Cloud Computing', 'Common Course', 'Elective', '2021-12-27'),
(227, 'CS 658 Social Networks', 'Common Course', 'Elective', '2021-12-27'),
(228, 'CS 659 An Introduction to Probability in Computing', 'Common Course', 'Elective', '2021-12-27'),
(229, 'CS 660 Programming in Java', 'Common Course', 'Elective', '2021-12-27'),
(230, 'CS 661 Data Science for Engineers', 'Common Course', 'Elective', '2021-12-27'),
(231, 'CS 662 Machine Learning for Engineering and Science Applications', 'Common Course', 'Elective', '2021-12-27'),
(232, 'CS 665 AI: Knowledge Representation and Reasoning', 'Common Course', 'Elective', '2021-12-27'),
(233, 'CS 666 Embedded System Design with ARM', 'Common Course', 'Elective', '2021-12-27'),
(234, 'CS 667 Introduction to Soft Computing', 'Common Course', 'Elective', '2021-12-27'),
(235, 'CS 669 Introduction to Industry 4.0 and Industrial Internet of Things', 'Common Course', 'Elective', '2021-12-27'),
(236, 'CS 509 Data Communication', 'Common Course', 'Elective', '2021-12-27'),
(237, 'CS 505 Software Engineering', 'Common Course', 'Elective', '2021-12-27'),
(238, 'IT 518 Graph Theor', 'Common Course', 'Elective', '2021-12-27'),
(239, 'CO 504 Natural Language Processing', 'Common Course', 'Elective', '2021-12-27'),
(240, 'CS 731 Data Mining in Security', 'Common Course', 'Elective', '2021-12-27'),
(241, 'IT 523 Discrete Mathematics', 'Common Course', 'Elective', '2021-12-27'),
(242, 'CS 502 System Software', 'Common Course', 'Elective', '2021-12-27'),
(243, 'CS 507 Computer Networks', 'Common Course', 'Elective', '2021-12-27'),
(244, 'CS 508 Database Management Systems', 'Common Course', 'Elective', '2021-12-27'),
(245, 'IT 506 Logic Programming', 'Common Course', 'Elective', '2021-12-27'),
(246, 'IT 510 Advanced Operating Systems', 'Common Course', 'Elective', '2021-12-27'),
(247, 'CS 607 Optimization Technique', 'Common Course', 'Elective', '2021-12-27'),
(255, 'CO 319 Statistical Modelling and Applications', 'Common Course', 'Elective', '2021-12-27'),
(254, 'CO 432 Information Theory and Coding', 'Common Course', 'Elective', '2021-12-27'),
(253, 'CO 318 Cryptography', 'Common Course', 'Elective', '2021-12-27'),
(252, 'CO 304 Principles of Programming Languages', 'Common Course', 'Elective', '2021-12-27'),
(256, 'CO 423 Web Technology', 'Common Course', 'Elective', '2021-12-27'),
(257, 'CO 306 Embedded Systems', 'Common Course', 'Elective', '2021-12-27'),
(258, 'CO 426 Advanced Computer Architecture', 'Common Course', 'Elective', '2021-12-27'),
(259, 'CO 422 Theory of Computation', 'Common Course', 'Elective', '2021-12-27'),
(260, 'CO 406 Distributed Systems', 'Common Course', 'Elective', '2021-12-27'),
(261, 'CO 509 Computer Vision & Image Processing', 'Common Course', 'Elective', '2021-12-27'),
(262, 'CO 512 Parallel Programming', 'Common Course', 'Elective', '2021-12-27'),
(263, 'CO 513 Fundamentals of Speech Processing', 'Common Course', 'Elective', '2021-12-27'),
(264, 'CO 514 Machine Learning ', 'Common Course', 'Elective', '2021-12-27'),
(265, 'CO 515 Knowledge Representation and Reasoning', 'Common Course', 'Elective', '2021-12-27'),
(266, 'CO 516 Advanced Algorithms', 'Common Course', 'Elective', '2021-12-27'),
(267, 'CO 517 Virtual and Augmented Reality', 'Common Course', 'Elective', '2021-12-27'),
(268, 'CO 518 Cloud Computing', 'Common Course', 'Elective', '2021-12-27'),
(269, 'CO 519 Internet of Things', 'Common Course', 'Elective', '2021-12-27'),
(270, 'CO 520 Software Defined Networking and Network Function Virtualization', 'Common Course', 'Elective', '2021-12-27'),
(271, 'CO 521 Computational Geometry', 'Common Course', 'Elective', '2021-12-27'),
(272, 'CO 522 Bioinformatics', 'Common Course', 'Elective', '2021-12-27'),
(273, 'CO 523 Quantum Computing', 'Common Course', 'Elective', '2021-12-27'),
(274, 'CO 524 Linear Optimization', 'Common Course', 'Elective', '2021-12-27'),
(275, 'CO 505 Advanced Database Management System', 'Common Course', 'Elective', '2021-12-27'),
(276, 'CO 435 Mobile Computing', 'Common Course', 'Elective', '2021-12-27'),
(277, 'CO 525 Data Mining', 'Common Course', 'Elective', '2021-12-27'),
(278, 'CO 526 Operation Research', 'Common Course', 'Elective', '2021-12-27'),
(279, 'WS 111 Women and digital literacy', 'Common Course', 'Open-Elective', '2021-12-27'),
(280, 'AS 502 Writings on Cinema in Assamese', 'Common Course', 'Open-Elective', '2021-12-27'),
(281, ' BA 545 ESSENTIALS OF QUALITY MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(282, 'CS 536 COMPUTER APPLICATIONS AND INFORMATION MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(283, 'CS 537 NATURAL LANGUAGE PROCESSING', 'Common Course', 'Open-Elective', '2021-12-27'),
(284, 'CS 610 BIOINFORMATICS', 'Common Course', 'Open-Elective', '2021-12-27'),
(285, 'CH 414 INTRODUCTORY ENVIRONMENTAL AND GREEN CHEMISTRY', 'Common Course', 'Open-Elective', '2021-12-27'),
(286, 'CP 523 CULTURAL STUDIES AND MEDIA : THE BASICS', 'Common Course', 'Open-Elective', '2021-12-27'),
(287, 'CE 431 HYDRAULIC STRUCTURES', 'Common Course', 'Open-Elective', '2021-12-27'),
(288, 'DM 101 DISASTER MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(289, 'BE 521 BASICS BIOELECTRONICS', 'Common Course', 'Open-Elective', '2021-12-27'),
(290, 'EL 542 Advanced Power Electronics', 'Common Course', 'Open-Elective', '2021-12-27'),
(291, 'ED 110 EDUCATION MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(292, 'ES 541 CONTEMPORARY ENVIRONMENTAL ISSUES', 'Common Course', 'Open-Elective', '2021-12-27'),
(293, 'EN 550 ENERGY AND SOCIETY', 'Common Course', 'Open-Elective', '2021-12-27'),
(294, 'EN 552 Climate change mitigation and energy management for crop-based livelihood', 'Common Course', 'Open-Elective', '2021-12-27'),
(295, 'CL 121 BASIC CHINESE I', 'Common Course', 'Open-Elective', '2021-12-27'),
(296, 'FL 101 BASIC FRENCH-I', 'Common Course', 'Open-Elective', '2021-12-27'),
(297, 'GL 101 BASIC GERMAN-I', 'Common Course', 'Open-Elective', '2021-12-27'),
(298, 'FT 300 TRANSPORT PHENOMENA IN BIOLOGICAL AND BIOENVIRONMENTAL SYSTEM', 'Common Course', 'Open-Elective', '2021-12-27'),
(299, 'HN 501 SAMPRESHANMOOLAK HINDI', 'Common Course', 'Open-Elective', '2021-12-27'),
(300, 'LW 415 Human Rights Issues and Laws', 'Common Course', 'Open-Elective', '2021-12-27'),
(301, 'MC 550 Assamese Journalism', 'Common Course', 'Open-Elective', '2021-12-27'),
(302, 'ME 531 PROJECT MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(303, 'ME 539 OPTIMIZATION TECHNIQUES IN ENGINEERING', 'Common Course', 'Open-Elective', '2021-12-27'),
(304, 'MS 450 ELEMENTARY MATHEMATICES AND STATISTICS', 'Common Course', 'Open-Elective', '2021-12-27'),
(305, 'BT 100 INTRODUCTORY BIOLOGY', 'Common Course', 'Open-Elective', '2021-12-27'),
(306, 'BT 445 BIOSAFETY AND BIOETHICS', 'Common Course', 'Open-Elective', '2021-12-27'),
(307, 'PH 602 HISTORY OF PHYSICS', 'Common Course', 'Open-Elective', '2021-12-27'),
(308, 'PA 110 PUBLIC ADMINISTRATION I', 'Common Course', 'Open-Elective', '2021-12-27'),
(309, 'SC 421 INTRODUCING SOCIOLOGY', 'Common Course', 'Open-Elective', '2021-12-27'),
(310, 'SW 462 Engaging with Communities', 'Common Course', 'Open-Elective', '2021-12-27'),
(311, 'WS 101 Introduction to Women Studies', 'Common Course', 'Open-Elective', '2021-12-27'),
(312, 'ME 522 QUALITY ENGINEERING', 'Common Course', 'Open-Elective', '2021-12-27'),
(313, 'PA102 PUBLIC ADMINISTRATION II', 'Common Course', 'Open-Elective', '2021-12-27'),
(314, 'BT 752 Introduction to Analytical Techniques', 'Common Course', 'Open-Elective', '2021-12-27'),
(315, 'IP 750 Intellectual Property Rights in Research and Beyond', 'Common Course', 'Open-Elective', '2021-12-27'),
(316, 'GL 102 BASIC GERMAN II', 'Common Course', 'Open-Elective', '2021-12-27'),
(317, 'FL 102 BASIC FRENCH II', 'Common Course', 'Open-Elective', '2021-12-27'),
(318, 'CL 122 BASIC CHINESE II', 'Common Course', 'Open-Elective', '2021-12-27'),
(319, 'BA 544 PRINCIPLE OF MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(320, 'ES 543 ENVIRONMENTAL ECONOMICS AND MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(321, 'HN 503 HINDI NIBANDH EVAM NATAK', 'Common Course', 'Open-Elective', '2021-12-27'),
(322, 'HN 771 Sahityalochan ki Bibidh dristiya', 'Common Course', 'Open-Elective', '2021-12-27'),
(323, 'CE 552 CONSTRUCTION MANAGEMENT', 'Common Course', 'Open-Elective', '2021-12-27'),
(324, 'DM 501 Disaster Management Mechanism', 'Common Course', 'Open-Elective', '2021-12-27'),
(325, 'BE 705 Advanced Bioelectronics Devices', 'Common Course', 'Open-Elective', '2021-12-27'),
(378, 'CE 103 Engineering Graphics', 'B.Tech', 'Core', '2021-12-27'),
(379, 'MS 205 Mathematics â€“ III', 'B.Tech', 'Core', '2021-12-27'),
(380, 'CO 202 Digital Logic Design', 'B.Tech', 'Core', '2021-12-27'),
(381, 'CO 209 Computing Workshop', 'B.Tech', 'Core', '2021-12-27'),
(382, 'BA 201 Economics', 'B.Tech', 'Core', '2021-12-27'),
(383, 'CO 210 Data Structures', 'B.Tech', 'Core', '2021-12-27'),
(384, 'CO 211 Data structures using Object Oriented Programming Lab', 'B.Tech', 'Core', '2021-12-27'),
(385, 'EC 205 Signals and Systems', 'B.Tech', 'Core', '2021-12-27'),
(386, 'ES 201 Environmental Science', 'B.Tech', 'Core', '2021-12-27'),
(387, 'BT 201 Biology', 'B.Tech', 'Core', '2021-12-27'),
(388, 'CO 218 Data Communication', 'B.Tech', 'Core', '2021-12-27'),
(389, 'CO 214 Computer Architecture and Organization', 'B.Tech', 'Core', '2021-12-27'),
(390, 'CO 215 Computer Organization Lab', 'B.Tech', 'Core', '2021-12-27'),
(391, 'CO 216 Formal Language and Automata', 'B.Tech', 'Core', '2021-12-27'),
(392, 'CO 206 Design and Analysis of Algorithms', 'B.Tech', 'Core', '2021-12-27'),
(393, 'CO 217 Graph Theory', 'B.Tech', 'Core', '2021-12-27'),
(394, 'CO 309 Operating Systems', 'B.Tech', 'Core', '2021-12-27'),
(395, 'CO 311 Software Engineering', 'B.Tech', 'Core', '2021-12-27'),
(396, 'CO 310 Operating Systems Lab', 'B.Tech', 'Core', '2021-12-27'),
(397, 'CO 312 Database Systems', 'B.Tech', 'Core', '2021-12-27'),
(398, 'CO 313 Data base Systems Lab', 'B.Tech', 'Core', '2021-12-27'),
(399, 'CO 303 Computer Graphics', 'B.Tech', 'Core', '2021-12-27'),
(400, 'LW 301 Indian Constitution (MC- Non Credit)', 'B.Tech', 'Core', '2021-12-27'),
(401, 'CO 314 System Software and Compiler Design', 'B.Tech', 'Core', '2021-12-27'),
(402, 'CO 315 Computer Networks', 'B.Tech', 'Core', '2021-12-27'),
(403, 'CO 316 Computer Networks Lab', 'B.Tech', 'Core', '2021-12-27'),
(404, 'IC 361 Accounting and Financial Management', 'B.Tech', 'Core', '2021-12-27'),
(405, 'CO 401 Artificial Intelligence', 'B.Tech', 'Core', '2021-12-27'),
(406, 'CT 430 Essence of Indian Traditional Knowledge (MC- Non Credit)', 'B.Tech', 'Core', '2021-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_type` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `user_name`, `password`, `user_type`) VALUES
(1, 'super admin', 'superamdin@123', 'Super Admin'),
(2, 'admin', 'asd', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
