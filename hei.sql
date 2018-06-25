-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Bulan Mei 2018 pada 17.47
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hei3.0`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(10) NOT NULL,
  `activity_name` text NOT NULL,
  `activity_desc` text NOT NULL,
  `activity_date` date NOT NULL,
  `activity_times` time NOT NULL,
  `activity_loc` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_desc`, `activity_date`, `activity_times`, `activity_loc`, `user_id`) VALUES
(1, 'Rapat Koor vocomfest', 'fix anggota ya', '0000-00-00', '00:00:00', '', 5),
(2, 'Kumpul coy', 'ksfneofelwmknfkd', '0000-00-00', '00:00:00', 'Sekre Himakomsi', 1),
(3, 'sndmsndmsd', 'kjdskfjdkfjdkf', '0000-00-00', '00:00:00', 'Sekre Himakomsi', 1),
(4, 'khfkdjfld', 'djdkjfdf', '0000-00-00', '04:45:00', 'Sekre Himakomsi', 1),
(5, 'kwejroejore', 'wlejroejroeor', '0000-00-00', '07:45:00', 'Sekre Himakomsi', 1),
(6, 'vshfdfdf', 'sdsfsf', '0000-00-00', '01:15:00', 'Sekre Himakomsi', 1),
(7, 'jewheuhrehr', 'dfjvkdfjgksdkjfkd', '0000-00-00', '01:15:00', 'Sekre Himakomsi', 1),
(8, 'sdmnmdfnd', 'sdnjsdnsd', '2018-05-18', '02:30:00', 'Sekre Himakomsi', 1),
(9, 'Kumpul Koor ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum ut magna et faucibus. Mauris vel diam arcu. Vestibulum pulvinar nisi ac lacus pulvinar molestie. Vestibulum bibendum ante ut maximus lacinia. Pellentesque augue tellus, facilisis id tincidunt nec, dignissim sit amet turpis. Aliquam erat volutpat. Vivamus erat ex, dictum a risus malesuada, fringilla accumsan nisi. Cras in ornare enim, eu lacinia lacus', '2018-05-31', '12:30:00', '', 1),
(10, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum ut magna et faucibus. Mauris vel diam arcu. Vestibulum pulvinar nisi ac lacus pulvinar molestie. Vestibulum bibendum ante ut maximus lacinia. Pellentesque augue tellus, facilisis id tincidunt nec, dignissim sit amet turpis. Aliquam erat volutpat. Vivamus erat ex, dictum a risus malesuada, fringilla accumsan nisi. Cras in ornare enim, eu lacinia lacus', '2018-05-30', '12:30:00', '', 1),
(11, 'Lorem Ipsum 2', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum ut magna et faucibus. Mauris vel diam arcu. Vestibulum pulvinar nisi ac lacus pulvinar molestie. Vestibulum bibendum ante ut maximus lacinia', '2018-05-31', '10:45:00', '', 1),
(12, 'Lorem Ipsum', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum ut magna et faucibus. Mauris vel diam arcu. Vestibulum pulvinar nisi ac lacus pulvinar molestie. Vestibulum bibendum ante ut maximus lacinia', '2018-06-01', '03:45:00', '', 2),
(13, 'Lorem Ipsum', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum ut magna et faucibus. Mauris vel diam arcu. Vestibulum pulvinar nisi ac lacus pulvinar molestie. Vestibulum bibendum ante ut maximus lacinia', '2018-05-31', '12:45:00', 'Lorem Ipsum', 2),
(14, 'GR Vocom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum ut magna et faucibus. Mauris vel diam arcu. Vestibulum pulvinar nisi ac lacus pulvinar molestie. Vestibulum bibendum ante ut maximus lacinia.', '2018-06-15', '02:15:00', 'Hall GP', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `invitation`
--

CREATE TABLE `invitation` (
  `invitation_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invitation_status` enum('accept','decline','process') NOT NULL DEFAULT 'process',
  `activity_id` int(10) NOT NULL,
  `invitation_confirmation` enum('present','absent') NOT NULL DEFAULT 'present',
  `invitation_cancelation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invitation`
--

INSERT INTO `invitation` (`invitation_id`, `user_id`, `invitation_status`, `activity_id`, `invitation_confirmation`, `invitation_cancelation`) VALUES
(1, 1, 'decline', 3, 'present', NULL),
(2, 3, 'accept', 3, 'absent', NULL),
(3, 1, 'accept', 4, 'present', NULL),
(4, 3, 'decline', 4, 'present', NULL),
(5, 5, 'accept', 4, 'absent', NULL),
(6, 4, 'process', 5, 'absent', NULL),
(7, 5, 'process', 5, 'absent', NULL),
(8, 5, 'accept', 6, 'present', NULL),
(9, 5, 'process', 7, 'present', NULL),
(10, 3, 'process', 8, 'present', NULL),
(11, 6, 'process', 8, 'present', NULL),
(12, 1, 'process', 9, 'present', NULL),
(13, 4, 'process', 9, 'present', NULL),
(14, 6, 'process', 9, 'present', NULL),
(15, 2, 'process', 10, 'present', NULL),
(16, 3, 'process', 10, 'present', NULL),
(17, 2, 'accept', 11, 'present', NULL),
(18, 5, 'process', 11, 'present', NULL),
(19, 6, 'process', 11, 'present', NULL),
(20, 1, 'accept', 12, 'present', NULL),
(21, 3, 'process', 12, 'present', NULL),
(22, 5, 'process', 12, 'present', NULL),
(23, 2, 'process', 13, 'present', NULL),
(24, 3, 'process', 13, 'present', NULL),
(25, 4, 'process', 13, 'present', NULL),
(26, 1, 'process', 14, 'present', NULL),
(27, 3, 'process', 14, 'present', NULL),
(28, 4, 'process', 14, 'present', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `periode_id` int(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `periode_tahun` year(4) NOT NULL,
  `periode_status` enum('active','deactive','','') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`periode_id`, `periode`, `periode_tahun`, `periode_status`) VALUES
(1, '2016/2017', 2016, 'active'),
(2, '2017/2018', 2017, 'deactive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `proker_id` int(11) NOT NULL,
  `proker_name` varchar(255) NOT NULL,
  `proker_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`proker_id`, `proker_name`, `proker_date`, `user_id`) VALUES
(1, 'Vocomfest', '2018-01-01', 1),
(2, 'Donor Darah', '2018-02-01', 2),
(3, 'Himoticon', '2018-03-01', 3),
(4, 'Dialog Dosen', '2018-04-01', 4),
(5, 'PEMIRA', '2018-05-01', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(10) NOT NULL,
  `todo_name` varchar(255) NOT NULL,
  `todo_deadline` date NOT NULL,
  `todo_status` enum('finish','process','','') NOT NULL DEFAULT 'process',
  `proker_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `todo`
--

INSERT INTO `todo` (`todo_id`, `todo_name`, `todo_deadline`, `todo_status`, `proker_id`, `user_id`) VALUES
(1, 'Kirim Anggota baru', '2018-05-18', 'finish', 2, 3),
(2, 'Kirim Proposal', '2018-05-26', 'finish', 3, 3),
(3, 'List nama pembicara', '2018-05-31', 'process', 1, 4),
(4, 'Lorem Ipsum', '2018-05-31', 'process', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_gender` enum('laki-laki','perempuan','','') NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_address` text NOT NULL,
  `user_picture` varchar(50) NOT NULL,
  `type` enum('pengurus','admin','','') NOT NULL,
  `periode_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `user_gender`, `user_phone`, `user_address`, `user_picture`, `type`, `periode_id`) VALUES
(1, 'Alpha', 'alpha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'laki-laki', '12345678', 'alksjdkn', '', 'pengurus', 1),
(2, 'Beta', 'beta@gmail.com', '987bcab01b929eb2c07877b224215c92', 'perempuan', '8901234567', 'asdkjsfbhjd', '', 'pengurus', 1),
(3, 'gama', 'gama@gmail.com', '17a4bd3127e15a0fa8560e643ab54f88', 'laki-laki', '0987654321', 'jabdjkskdsad', '', 'pengurus', 1),
(4, 'Sigma', 'sigma@gmail.com', '1234', 'perempuan', '1234567890', 'sdgfhfh', '', 'pengurus', 2),
(5, 'Teta', 'teta@gmail.com', 'd9c4b80884a6623851c5b6cd6a0a001a', 'perempuan', '987623450', 'sjdksfj', '', 'pengurus', 2),
(6, 'Delta', 'delta@mail.com', '1234', 'perempuan', '12340987654', 'khdfjdhf', '', 'pengurus', 2),
(7, 'Admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'laki-laki', '92837465', 'kjdshjs', '', 'admin', 1),
(8, 'admin2', 'admin2@gmail.com', '1234', 'perempuan', '123098123098', 'ksdnkdfn', '', 'admin', 2),
(9, '', '', '', 'laki-laki', '', '', '', '', 1),
(10, 'Naqiya Zorahima', 'naqiyazorahima@gmail.com', 'd3f90cfcc35acbfc676be1aba1f107ee', 'perempuan', '082243579080', 'Yogyakarta', '', 'pengurus', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`invitation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indeks untuk tabel `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`proker_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `proker_id` (`proker_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `periode_id` (`periode_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invitation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `periode`
--
ALTER TABLE `periode`
  MODIFY `periode_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `proker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `invitation`
--
ALTER TABLE `invitation`
  ADD CONSTRAINT `invitation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invitation_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`activity_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `todo_ibfk_2` FOREIGN KEY (`proker_id`) REFERENCES `proker` (`proker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
