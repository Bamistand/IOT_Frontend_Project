-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 35.228.180.144
-- Waktu pembuatan: 18 Feb 2023 pada 15.46
-- Versi server: 8.0.26-google
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IOT_Project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `devices`
--

CREATE TABLE `devices` (
  `id` int NOT NULL,
  `TUYA_DEVICE_ID` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `detail` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `devices`
--

INSERT INTO `devices` (`id`, `TUYA_DEVICE_ID`, `name`, `detail`) VALUES
(1, 'ebdbab7cc697bcbcb13ijq', 'Smart Plug for Phone - Real Device', 'AVARO'),
(3, '4456', 'Sample', 'testing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deviceuser`
--

CREATE TABLE `deviceuser` (
  `id` int NOT NULL,
  `device_id` int NOT NULL,
  `user_id` int NOT NULL,
  `device_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `deviceuser`
--

INSERT INTO `deviceuser` (`id`, `device_id`, `user_id`, `device_name`) VALUES
(5, 1, 4, 'Smart Plug for Phone - Real Device'),
(6, 3, 5, 'Sample');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `history_datetime` datetime NOT NULL,
  `job` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `source` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PhoneChargerReason` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `device_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `history_datetime`, `job`, `description`, `source`, `PhoneChargerReason`, `device_id`) VALUES
(206, '2023-02-11 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(207, '2023-02-11 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(208, '2023-02-12 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(209, '2023-02-12 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(210, '2023-02-12 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(211, '2023-02-12 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(212, '2023-02-12 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(213, '2023-02-12 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(214, '2023-02-12 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(215, '2023-02-12 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(216, '2023-02-12 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(217, '2023-02-12 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(218, '2023-02-13 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(219, '2023-02-13 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(220, '2023-02-13 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(221, '2023-02-13 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(222, '2023-02-13 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(223, '2023-02-13 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(224, '2023-02-13 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(225, '2023-02-13 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(226, '2023-02-13 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(227, '2023-02-13 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(228, '2023-02-14 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(229, '2023-02-14 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(230, '2023-02-14 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(231, '2023-02-14 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(232, '2023-02-14 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(233, '2023-02-14 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(234, '2023-02-14 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(235, '2023-02-14 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(236, '2023-02-14 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(237, '2023-02-14 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(238, '2023-02-15 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(239, '2023-02-15 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(240, '2023-02-15 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(241, '2023-02-15 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(242, '2023-02-15 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(243, '2023-02-15 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(244, '2023-02-15 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(245, '2023-02-15 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(246, '2023-02-15 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(247, '2023-02-15 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(248, '2023-02-16 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(249, '2023-02-16 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(250, '2023-02-16 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(251, '2023-02-16 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(252, '2023-02-16 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(253, '2023-02-16 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(254, '2023-02-16 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(255, '2023-02-16 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(256, '2023-02-16 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(257, '2023-02-16 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(258, '2023-02-17 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(259, '2023-02-17 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(260, '2023-02-17 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(261, '2023-02-17 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(262, '2023-02-17 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(263, '2023-02-17 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(264, '2023-02-17 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(265, '2023-02-17 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(266, '2023-02-17 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(267, '2023-02-17 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(268, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(269, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(270, '2023-02-18 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(271, '2023-02-18 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(272, '2023-02-18 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(273, '2023-02-18 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(274, '2023-02-18 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(275, '2023-02-18 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(276, '2023-02-17 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(277, '2023-02-17 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(278, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(279, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(280, '2023-02-18 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(281, '2023-02-18 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(282, '2023-02-18 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(283, '2023-02-18 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(284, '2023-02-18 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(285, '2023-02-18 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(286, '2023-02-17 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(287, '2023-02-17 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(288, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(289, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(290, '2023-02-18 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(291, '2023-02-18 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(292, '2023-02-18 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(293, '2023-02-18 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(294, '2023-02-18 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(295, '2023-02-18 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(296, '2023-02-17 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(297, '2023-02-17 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(298, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(299, '2023-02-18 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(300, '2023-02-18 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(301, '2023-02-18 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(302, '2023-02-18 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(303, '2023-02-18 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(304, '2023-02-18 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(305, '2023-02-18 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(306, '2023-02-18 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(307, '2023-02-18 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(308, '2023-02-19 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(309, '2023-02-19 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(310, '2023-02-19 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(311, '2023-02-19 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(312, '2023-02-19 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(313, '2023-02-19 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(314, '2023-02-19 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(315, '2023-02-19 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(316, '2023-02-19 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(317, '2023-02-19 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(318, '2023-02-20 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(319, '2023-02-20 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(320, '2023-02-20 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(321, '2023-02-20 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(322, '2023-02-20 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(323, '2023-02-20 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(324, '2023-02-20 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(325, '2023-02-20 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(326, '2023-02-20 22:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(327, '2023-02-20 23:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(328, '2023-02-21 00:00:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(329, '2023-02-21 00:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(330, '2023-02-21 01:10:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(331, '2023-02-21 02:30:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(332, '2023-02-21 03:40:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'BATTERY', 1),
(333, '2023-02-21 04:15:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'BATTERY', 1),
(334, '2023-02-21 05:45:00', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(335, '2023-02-21 06:00:00', 'CHANGEDEVICESTATUS', 'False', 'API', 'TOGGLE', 1),
(336, '2023-02-17 14:47:47', 'GETVICESTATUS', 'False', 'API', '', 1),
(337, '2023-02-17 14:50:03', 'GETVICESTATUS', 'False', 'API', '', 1),
(338, '2023-02-17 14:50:24', 'GETVICESTATUS', 'False', 'API', '', 1),
(339, '2023-02-17 14:50:30', 'CHANGEDEVICESTATUS', 'True', 'API', 'TOGGLE', 1),
(340, '2023-02-17 14:50:37', 'GETVICESTATUS', 'True', 'API', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `id` int NOT NULL,
  `User_ID` int NOT NULL,
  `device_id` int NOT NULL,
  `time` time NOT NULL,
  `job` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'CHANGEDEVICESTATUS',
  `status` enum('True','False') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`id`, `User_ID`, `device_id`, `time`, `job`, `status`) VALUES
(1, 5, 3, '12:00:00', 'Off', 'True'),
(2, 4, 1, '13:00:00', 'turn on ', 'True');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`) VALUES
(1, 'hey', 'hello', 8899),
(2, 'tv', 'ggghuu', 77888),
(3, 'Mercy', 'wonderfyylllll', 792089261),
(4, 'mama', 'finland', 366688),
(5, 'Mercy', 'Finland', 2243);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TUYA_DEVICE_ID` (`TUYA_DEVICE_ID`);

--
-- Indeks untuk tabel `deviceuser`
--
ALTER TABLE `deviceuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `device_id` (`device_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `device_id` (`device_id`);

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `device_id` (`device_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `deviceuser`
--
ALTER TABLE `deviceuser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT untuk tabel `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `deviceuser`
--
ALTER TABLE `deviceuser`
  ADD CONSTRAINT `deviceuser_ibfk_1` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deviceuser_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
