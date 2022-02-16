-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2022 at 03:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_books`
--

CREATE TABLE `e_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_books`
--

INSERT INTO `e_books` (`id`, `title`, `author`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Brave New World', 'Aldous Huxley', 'rave New World is a dystopian social science fiction novel by English author Aldous Huxley, written in 1931 and published in 1932. Largely set in a futuristic World State, whose citizens are environmentally engineered into an intelligence-based social hierarchy, the novel anticipates huge scientific advancements in reproductive technology, sleep-learning, psychological manipulation and classical conditioning that are combined to make a dystopian society which is challenged by only a single individual: the story\'s protagonist. Huxley followed this book with a reassessment in essay form, Brave New World Revisited (1958), and with his final novel, Island (1962), the utopian counterpart. The novel is often compared to George Orwell\'s Nineteen Eighty-Four (published 1949). In 1999, the Modern Library ranked Brave New World at number 5 on its list of the 100 best English-language novels of the 20th century.[2] In 2003, Robert McCrum, writing for The Observer, included Brave New World chronologically at number 53 in the top 100 greatest novels of all time, and the novel was listed at number 87 on The Big Read survey by the BBC.[4] Despite this, Brave New World has frequently been banned and challenged since its original publication. It has landed on the American Library Association list of top 100 banned and challenged books of the decade since the association began the list in 1990', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(2, 'The Great Gatsby', 'Tobey Maguire as Nick Carraway', 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with mysterious millionaire Jay Gatsby and Gatsby\'s obsession to reunite with his former lover, Daisy Buchanan. The novel was inspired by a youthful romance Fitzgerald had with socialite Ginevra King, and the riotous parties he attended on Long Island\'s North Shore in 1922. Following a move to the French Riviera, Fitzgerald completed a rough draft of the novel in 1924. He submitted it to editor Maxwell Perkins, who persuaded Fitzgerald to revise the work over the following winter. After making revisions, Fitzgerald was satisfied with the text, but remained ambivalent about the book\'s title and considered several alternatives. Painter Francis Cugat\'s cover art greatly impressed Fitzgerald, and he incorporated aspects of it into the novel. ', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(3, 'Cosmos', 'Carl Sagan', 'Cosmos is a 1980 popular science book by astronomer and Pulitzer Prize-winning author Carl Sagan. Its 13 illustrated chapters, corresponding to the 13 episodes of the Cosmos TV series, which the book was co-developed with and intended to complement, explore the mutual development of science and civilization. One of Sagan\'s main purposes for the book and television series was to explain complex scientific ideas to anyone interested in learning. Sagan also believed the television was one of the greatest teaching tools ever invented, so he wished to capitalize on his chance to educate the world.[1] Spurred in part by the popularity of the TV series, Cosmos spent 50 weeks on the Publishers Weekly best-sellers list and 70 weeks on the New York Times Best Seller list to become the best-selling science book ever published at the time. In 1981, it received the Hugo Award for Best Non-Fiction Book. The book\'s unprecedented success ushered in a dramatic increase in visibility for science-themed literature. The success of the book also jumpstarted Sagan\'s literary career. The sequel to Cosmos is Pale Blue Dot: A Vision of the Human Future in Space (1994).', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(4, 'A Short History of Nearly Everything', 'Bill Bryson', 'A Short History of Nearly Everything by American-British author Bill Bryson is a popular science book that explains some areas of science, using easily accessible language that appeals more to the general public than many other books dedicated to the subject. It was one of the bestselling popular science books of 2005 in the United Kingdom, selling over 300,000 copies. A Short History deviates from Bryson\'s popular travel book genre, instead describing general sciences such as chemistry, paleontology, astronomy, and particle physics. In it, he explores time from the Big Bang to the discovery of quantum mechanics, via evolution and geology. ', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(5, 'System Design Interview - an Insider s Guide', 'Alex Xu', 'The system design interview is considered to be the most complex and most difficult technical job interview by many. This book provides a step-by-step framework on how to tackle a system design question. It includes many real-world examples to illustrate the systematic approach with detailed steps that you can follow.', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(6, 'A Programmer s Guide to Computer Science: A Virtual Degree for the Self-taught Developer', 'William M Springer', 'You know how to code..but is it enough?Do you feel left out when other programmers talk about asymptotic bounds?Have you failed a job interview because you don\'t know computer science?The author, a senior developer at a major software company with a PhD in computer science, takes you through what you would have learned while earning a four-year computer science degree. Volume one covers the most frequently referenced topics, including:-Algorithms and data structures-Graphs-Problem-solving techniques-Complexity theoryWhen you finish this book, you\'ll have the tools you need to hold your own with people who have - or expect you to have - a computer science degree.', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(7, 'Modern Comfort Food: A Barefoot Contessa Cookbook', 'Ina Garten', '#1 NEW YORK TIMES BESTSELLER • A collection of all-new soul-satisfying dishes from America’s favorite home cook! NAMED ONE OF THE BEST COOKBOOKS OF THE YEAR BY The New York Times Book Review • Food Network • The Washington Post • The Atlanta Journal-Constitution • Town & Country', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(8, 'Steve Jobs', 'Ina Garten', 'Steve Jobs is the authorized self-titled biography of American business magnate and Apple co-founder Steve Jobs. The book was written at the request of Jobs by Walter Isaacson, a former executive at CNN and TIME who has written best-selling biographies of Benjamin Franklin and Albert Einstein', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(9, 'Wuthering Heights', 'Emily Brontë', 'Wuthering Heights is an 1847 novel by Emily Brontë, initially published under the pseudonym Ellis Bell. It concerns two families of the landed gentry living on the West Yorkshire moors, the Earnshaws and the Lintons, and their turbulent relationships with Earnshaw\'s adopted son, Heathcliff', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(10, 'Python Data Science Handbook', 'Jake VanderPlas', 'For many researchers, Python is a first-class tool mainly because of its libraries for storing, manipulating, and gaining insight from data. Several resources exist for individual pieces of this data science stack, but only with the Python Data Science Handbook do you get them all—IPython, NumPy, Pandas, Matplotlib, Scikit-Learn, and other related tools.', '2022-02-14 22:34:41', '2022-02-14 22:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender_desc`, `created_at`, `updated_at`) VALUES
(1, 'Male', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(2, 'Female', '2022-02-14 22:34:41', '2022-02-14 22:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_11_135711_create_roles_table', 1),
(6, '2022_02_11_223938_create_e_books_table', 1),
(7, '2022_02_11_224002_create_orders_table', 1),
(8, '2022_02_11_234318_create_genders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `ebook_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `account_id`, `ebook_id`, `order_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-02-14', '2022-02-14 22:34:43', '2022-02-14 22:34:43'),
(2, 2, 5, '2022-02-14', '2022-02-14 22:34:43', '2022-02-14 22:34:43'),
(3, 2, 10, '2022-02-15', '2022-02-14 22:34:43', '2022-02-14 22:34:43'),
(4, 3, 1, '2022-02-15', '2022-02-14 22:34:43', '2022-02-14 22:34:43'),
(5, 3, 10, '2022-02-15', '2022-02-14 22:34:43', '2022-02-14 22:34:43'),
(7, 2, 5, '2022-02-14', '2022-02-15 02:11:54', '2022-02-15 02:11:54'),
(8, 2, 10, '2022-02-15', '2022-02-15 02:11:54', '2022-02-15 02:11:54'),
(9, 3, 1, '2022-02-15', '2022-02-15 02:11:54', '2022-02-15 02:11:54'),
(10, 3, 10, '2022-02-15', '2022-02-15 02:11:54', '2022-02-15 02:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_desc`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-02-14 22:34:41', '2022-02-14 22:34:41'),
(2, 'User', '2022-02-14 22:34:41', '2022-02-14 22:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` tinyint(4) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `display_picture_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `gender_id`, `email`, `email_verified_at`, `password`, `role_id`, `display_picture_link`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hafiz', 'Elfia Wedo', 'Putra', 1, 'hafizelfiawedoputra@gmail.com', NULL, '$2y$10$m.T5B5UYF71ywXB7wqS73uJDxjUYJUyC5QaA2TGjUqKbUGNVjlEOy', 1, '1644900441.jpg', NULL, '2022-02-14 22:34:42', '2022-02-14 22:34:42'),
(2, 'Ani', 'Neswati', 'Indah', 2, 'd.ardi@gmail.com', NULL, '$2y$10$0sCj2dF2Fahqa3VwHJtPn.kaxNdV/BbPaeAB4q4uqox3oDY9T9KUK', 2, '1644896356.png', NULL, '2022-02-14 22:34:42', '2022-02-14 22:34:42'),
(3, 'Muhammad', 'Doni', 'Putra', 1, 'jxz77288@cuoly.com', NULL, '$2y$10$07KLOpqWSlzIBqqtPD6ALu8MYOTl6I2uPj.cN2ryrfZhU3G42Ss1m', 2, '1644896415.png', NULL, '2022-02-14 22:34:42', '2022-02-14 22:34:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_books`
--
ALTER TABLE `e_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_account_id_foreign` (`account_id`),
  ADD KEY `orders_ebook_id_foreign` (`ebook_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `e_books`
--
ALTER TABLE `e_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ebook_id_foreign` FOREIGN KEY (`ebook_id`) REFERENCES `e_books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
