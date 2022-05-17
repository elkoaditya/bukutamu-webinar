-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Bulan Mei 2022 pada 18.49
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinar`
--

--
-- Dumping data untuk tabel `kabupatens`
--

INSERT INTO `kabupatens` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Kabupaten Badung', NULL, NULL),
(2, 'Kabupaten Bangli', NULL, NULL),
(3, 'Kabupaten Buleleng', NULL, NULL),
(4, 'Kabupaten Gianyar', NULL, NULL),
(5, 'Kabupaten Jembrana', NULL, NULL),
(6, 'Kabupaten Karangasem', NULL, NULL),
(7, 'Kabupaten Klungkung', NULL, NULL),
(8, 'Kabupaten Tabanan', NULL, NULL),
(9, 'Kota Denpasar', NULL, NULL);

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'link_zoom', 'https://starko.biz', '2022-05-06 11:35:09', '2022-05-06 11:35:09');

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `role`, `password`, `profile`, `created_at`, `updated_at`) VALUES
('fe801137-8647-40fd-aa78-53e9b5b626a6', 'admin', 'Elko Aditya', 'superadmin', '801f93e9a13d833716129df87228b8b9', 'https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg', '2022-05-06 04:32:19', '2022-05-06 04:32:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
