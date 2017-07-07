-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 jul 2017 om 12:24
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teamfortress`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `replies`
--

INSERT INTO `replies` (`id`, `content`, `topic_id`, `user_id`, `created_at`) VALUES
(1, 'Kijk nou wat een prachtige eerste reactie', 1, 1, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `threads`
--

CREATE TABLE `threads` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `threads`
--

INSERT INTO `threads` (`id`, `title`, `description`, `user_id`, `created_at`) VALUES
(3, 'vegetarisch', 'hier komen lekkerste vegetarische gerechten naar ieder zijn smaak.', 1, '2017-06-23 08:26:00.913094'),
(4, 'vlees', 'hier komen de lekkerste vlees gerechten naar ieder zijn smaak.', 1, '2017-06-23 08:26:01.078973');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `thread_id`, `user_id`, `reply_id`, `created_at`) VALUES
(1, 'testtopic', 'eerste testtopic', 1, 1, 1, '2017-06-09 09:23:14'),
(2, 'tweede topi', 'heeyyy topic den tweeden', 2, 1, 1, '2017-06-09 09:25:42'),
(3, 'tesst', 'hahahahhahahhahahaahahahha', 0, 0, 0, '2017-07-07 08:34:47'),
(4, 'aafdsf', 'asdfasdf', 0, 0, 0, '2017-07-07 09:45:36'),
(5, 'aerhaDGtjszfhthk', 'szrfhmykxghmxfm', 0, 0, 0, '2017-07-07 10:22:25');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` tinyint(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email`, `password`, `datum`) VALUES
(13, 0, '2345', '235', '2345', 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be', '2017-07-06 17:45:15'),
(16, 0, 'qwer', 'qwer', 'qwer', 'd02f086bcfe0d440af3ccbe26c0bc7a81daa52b2', '2017-07-06 17:45:15'),
(18, 1, 'admin', 'admin', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2017-07-06 17:45:15'),
(19, 0, 'frank', 'frnk1996', 'frank.boer@xs4all.nl', '4a6b6692adf2a1abb922105d2a1e58254dde4e6a', '2017-07-06 17:45:15'),
(20, 0, 'Geert', 'geert', 'geert@geert.nl', '0da414d9d963da4039c2a0525b1844228075aa58', '2017-07-06 17:45:15'),
(21, 0, 'hahaha', 'hahaha', 'hahaha@hahaha.nl', '8a2da05455775e8987cbfac5a0ca54f3f728e274', '2017-07-06 17:45:41'),
(22, 0, 'ellen', 'slaap', 'ellen@mail.nl', '2205e416168d996df812feccf638c35d6d6c4e12', '2017-07-06 20:40:21'),
(23, 0, 'Henk', 'berggeit', 'henk@mail.nl', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-07-06 21:03:17'),
(25, 0, 'Harry', 'harie', 'harrie@mailtje.nl', '8a2da05455775e8987cbfac5a0ca54f3f728e274', '2017-07-07 08:58:41'),
(26, 0, 'afasdf', 'asdfasdf', 'asdfasdf@afsfdafs.nl', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3', '2017-07-07 09:09:14'),
(27, 0, 'asdfasdf', 'asdfargaer', 'arhgareh@asrgasg.nl', '8b06c02689c50d9d9cf36349fee2aa19b3d7cc78', '2017-07-07 09:10:59'),
(28, 0, 'd;ltrh', 'sd;kfjlx;knl', 'aij@uahef.nl', '8b06c02689c50d9d9cf36349fee2aa19b3d7cc78', '2017-07-07 09:15:41'),
(29, 0, 'bier', 'Bier', 'bier@bier.bier', '8b06c02689c50d9d9cf36349fee2aa19b3d7cc78', '2017-07-07 09:40:45');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
