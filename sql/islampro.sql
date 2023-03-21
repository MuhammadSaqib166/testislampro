-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 10:57 PM
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
-- Database: `islampro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `created_at`) VALUES
(4, 'hey', 'upload/laptop.jpg', 'hey there', '2023-03-12 12:34:18'),
(6, 'fjdh', 'upload/laptop.jpg', '', '2023-03-12 12:35:22'),
(7, 'fdvfd', 'upload/mobile.jpg.jfif', '', '2023-03-12 12:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `categorie` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `categorie`) VALUES
(1, 'All Duas'),
(2, 'Quran duas'),
(3, 'All Time'),
(4, 'Mosque'),
(5, 'Ablution'),
(6, 'Prayer'),
(7, 'Eat/Drink'),
(8, 'Forgiveness'),
(9, 'Praise Allah'),
(10, 'AfterPrayer'),
(11, 'Protection'),
(12, 'Dressing'),
(13, 'Morning/Evening'),
(14, 'Health/Sick'),
(15, 'Guidance'),
(16, 'Blessings'),
(17, '40 Rabbana'),
(18, 'Family'),
(19, 'Rain'),
(20, 'Fasting'),
(21, '6 kalma/imae mufassal & mujmal'),
(22, 'Marriage'),
(23, 'Toilet'),
(24, 'Funeral/grave'),
(25, 'Hajj & Umrah'),
(26, 'Rizq'),
(27, 'Travelling');

-- --------------------------------------------------------

--
-- Table structure for table `daroods`
--

CREATE TABLE `daroods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `darood` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daroods`
--

INSERT INTO `daroods` (`id`, `title`, `darood`) VALUES
(1, 'xfazxczxzxvzxvc', 'saqib'),
(3, 'example2', 'example2'),
(4, 'example3', 'example3'),
(5, 'example4', 'example4'),
(6, 'example5', 'example5'),
(7, 'example6', 'example6');

-- --------------------------------------------------------

--
-- Table structure for table `duas`
--

CREATE TABLE `duas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dua` longtext NOT NULL,
  `translation` longtext NOT NULL,
  `cat_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `duas`
--

INSERT INTO `duas` (`id`, `title`, `dua`, `translation`, `cat_id`) VALUES
(22, 'Dua for seeking guidance', 'اللهم اهدني فيمن هديت', ' O Allah, guide me among those You have guided.', '15'),
(23, 'Dua for forgiveness', 'اللهم اغفر لي', 'O Allah, forgive me.', '8'),
(24, 'Dua for protection', 'حسبنا الله ونعم الوكيل', 'Allah is sufficient for us and the best guardian.', '11'),
(25, 'Dua for blessings', 'اللهم بارك لنا فيما رزقتنا وقنا عذاب النار', 'O Allah, bless us in what You have provided for us and save us from the punishment of the Hellfire.', '16'),
(26, 'Dua for patience', ' اللهم اجعل صبري في مصيبتي واخلفني خيرا منها', 'O Allah, make my patience during the trial and replace it with something better.', '1'),
(27, 'Dua for mercy', 'يا رحمن يا رحيم', 'O Most Merciful, O Most Compassionate.', '1'),
(28, 'Dua for health', 'اللهم عافني في بدني اللهم عافني في سمعي اللهم عافني في بصري ', 'O Allah, grant me health in my body, health in my hearing, and health in my sight.', '14'),
(29, 'Dua for gratitude', 'الحمد لله', 'All praise is due to Allah.', '9'),
(30, 'Dua for success', 'رب اغفر وارحم وأنت خير الراحمين', 'O Lord, forgive and have mercy, for You are the Best of those who show mercy.', '1'),
(31, 'Dua for contentment', ' اللهم إني أعوذ بك من الهم والحزن والعجز والكسل والبخل والجبن وضلع الدين وغلبة الرجال', 'O Allah, I seek refuge in You from anxiety, grief, helplessness, laziness, stinginess, cowardice, the burden of debt, and from being overpowered by men.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'umer', 'umer@gmail.com', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `daroods`
--
ALTER TABLE `daroods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duas`
--
ALTER TABLE `duas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `daroods`
--
ALTER TABLE `daroods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `duas`
--
ALTER TABLE `duas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
