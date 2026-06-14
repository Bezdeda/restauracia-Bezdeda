-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 14.Jún 2026, 22:42
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `sushi_house`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `image`, `category`, `created_at`) VALUES
(1, 'California Roll', 'Krabia tyčinka, avokádo, uhorka, sezam', 8.90, 'menu-1.jpg', 'Roll', '2026-04-18 19:36:37'),
(2, 'Salmon Nigiri', 'Ryža, čerstvý losos, wasabi', 6.50, 'menu-2.jpg', 'Nigiri', '2026-04-18 19:36:37'),
(3, 'Tempura Maki', 'Kreveta v tempure, omáčka, sezam', 9.90, 'menu-3.jpg', 'Maki', '2026-04-18 19:36:37'),
(4, 'Sushi Set', 'Výber najobľúbenejších kúskov pre 2 osoby', 16.90, 'menu-4.jpg', 'Set', '2026-04-18 19:36:37'),
(5, 'Avocado Maki', 'Ryža, avokádo a nori riasa', 5.90, 'menu-5.jpg', 'Maki', '2026-04-18 19:36:37'),
(7, 'Teriyaki Bowl', 'Ryža, kura v teriyaki omáčke a zelenina', 10.90, 'menu-7.jpg', 'Bowl', '2026-04-18 19:36:37'),
(10, 'Dragon Roll', 'Kreveta, avokádo, jemná omáčka a sezam', 11.00, 'menu-8.jpg', 'roll', '2026-04-18 20:38:39'),
(11, 'Tuna Roll', 'Tuniak, ryža, uhorka a sezam', 6.00, 'menu-6.jpg', 'roll', '2026-04-18 22:33:23');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reservation_datetime` datetime NOT NULL,
  `guests` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `reservation_datetime`, `guests`, `note`, `created_at`) VALUES
(1, 'Matúš Bezdeda', 'bezdedamatus@gmail.com', '2026-04-18 22:08:00', 2, 'Luckosaurus', '2026-04-18 20:08:53'),
(2, 'MatusBezdela', 'mbezdeda75@gmail.com', '2026-04-18 19:27:00', 3, 'dada', '2026-04-19 17:27:14'),
(3, 'MatusBezdela', 'bezdedamatus@gmail.com', '2026-05-15 21:51:00', 2, 'dadad', '2026-05-18 19:51:26');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$J6HtOE5qhVjnHk3j.gZseOWX8XOZzeFQz7MdRZZOqLQtnW3sKOBIi', '2026-04-18 20:25:26');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
