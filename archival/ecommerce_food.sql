-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 12:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `whatsapp_link` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `photo`, `whatsapp_link`, `seller_id`) VALUES
(1, 'Es Cendol', 'Es cendol adalah minuman tradisional Indonesia yang terbuat dari campuran tepung beras ketan, air daun pandan, dan air kelapa. Cendol ini biasanya berbentuk seperti butiran hijau kecil, dan sering disajikan dalam mangkuk besar dengan es parut, santan kelapa, dan gula merah cair. Rasanya segar dan manis, membuat es cendol populer sebagai hidangan penutup atau minuman penyegar, terutama di daerah tropis Indonesia.', 'cendol2.jpg', 'wa.me/1', 1),
(2, 'Ayam Geprek', 'Ayam Geprek adalah hidangan kuliner Indonesia yang terkenal karena keunikannya. Hidangan ini terdiri dari ayam goreng yang digeprek atau dihancurkan dengan menggunakan alat khusus, seperti ulekan atau palu kayu, sehingga dagingnya menjadi lebih empuk dan renyah. Setelah itu, ayam tersebut disajikan dengan sambal yang pedas dan bumbu rempah yang khas. Ayam Geprek seringkali disajikan dengan nasi putih, kerupuk, dan lalapan sebagai pelengkap. Hidangan ini telah menjadi populer di Indonesia dan memiliki banyak variasi di berbagai warung makan dan restoran.', 'Ayam_geprek.png', 'wa.me/2', 1),
(3, 'Mie Bakso', 'Mie baso adalah hidangan Indonesia yang terdiri dari mie rebus yang disajikan bersama dengan bakso. Bakso adalah bola daging yang umumnya terbuat dari campuran daging sapi giling dan tepung tapioka. Mie baso biasanya disajikan dalam kuah kaldu yang gurih, dan sering kali ditambahkan dengan bahan tambahan seperti tauge, seledri, bawang goreng, dan saus sambal. Hidangan ini sangat populer di Indonesia dan dapat ditemui di berbagai tempat, mulai dari warung kaki lima hingga restoran yang lebih mewah. Mie baso merupakan salah satu varian dari hidangan mie yang beragam dan kaya rasa yang dapat ditemui di seluruh nusantara.', 'bakso.jpg', 'wa.me/3', 1),
(4, 'Bubur Ayam', 'Hidangan populer di Indonesia yang terdiri dari bubur dengan ayam. Ini adalah bubur yang nyaman dan gurih yang dibuat dengan memasak beras dengan air dalam jumlah yang cukup hingga mencapai konsistensi yang halus dan kental. Biasanya, bubur ini diberi bumbu dengan bawang putih, bawang merah, jahe, dan kadang-kadang lada putih.\r\n\r\nKomponen ayam seringkali diuraikan dan disajikan di atas bubur, dilengkapi dengan berbagai topping seperti bawang merah goreng renyah, daun bawang, seledri, dan kedelai goreng. Selain itu, umumnya ditambahkan bumbu seperti kecap manis, kecap asin, dan sambal untuk meningkatkan rasa. Bubur Ayam adalah pilihan populer untuk sarapan atau sebagai hidangan hangat dan bergizi kapan saja sepanjang hari.', 'bubur.png', 'wa.me/4', 1),
(5, 'Nasi Kuning', 'Hidangan ini terdiri dari nasi yang dimasak dengan santan dan kunyit, memberikan warna kuning khas dan aroma yang lembut. Nasi Kuning sering disajikan pada acara-acara khusus dan perayaan, melambangkan keberuntungan, kemakmuran, dan kebahagiaan.\r\n\r\nNasi kuning biasanya dibentuk menjadi kerucut atau gundukan, menyerupai gunung, dan dihiasi dengan berbagai pelengkap. Ini dapat mencakup ayam goreng, rendang sapi (semur daging sapi dengan santan yang kaya rasa), krupuk udang goreng, telur dadar iris, kacang goreng, dan ikan teri goreng. Warna yang mencolok dan tekstur yang beragam berkontribusi pada daya tarik visual hidangan ini, menjadikannya tidak hanya lezat tetapi juga memukau secara visual.', 'naskun.png', 'wa.me/5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('customer','seller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'rofi', 'rofi1234', 'seller'),
(2, 'azka', '$2y$10$ifBCaKzX5MK/0IVrE8Elm.O9b7dXPkkm8dal4fR3qAA', 'seller'),
(5, 'lohan', '$2y$10$eY4Umf8XWCj8XoMTQh78YeF7maV8KNl2xQiSBFP0yUx', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `umkm`
--
ALTER TABLE `umkm`
  ADD CONSTRAINT `umkm_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
