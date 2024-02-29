-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 01:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `nama_b` text NOT NULL,
  `cover` text NOT NULL,
  `penulis` text NOT NULL,
  `penerbit` text NOT NULL,
  `tahun` text NOT NULL,
  `sipnopsis` text NOT NULL,
  `stok` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `nama_b`, `cover`, `penulis`, `penerbit`, `tahun`, `sipnopsis`, `stok`, `kategori`, `created_at`) VALUES
(5, 'GTA V', '1709192701_8ad919d6693b23e3e127.png', 'Ilham', 'Ilham production', '2024', 'Tes', '10', 3, '2024-02-29 01:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `book_id`, `user_id`, `comment`, `created_at`) VALUES
(1, 4, 4, 'Tes2', '2024-01-29 09:24:11'),
(2, 4, 1, 'Tes1', '2024-01-29 09:24:26'),
(3, 1, 1, 'P', '2024-01-29 09:26:27'),
(4, 4, 1, 'Tes', '2024-01-29 19:17:24'),
(5, 5, 1, 'Bagus', '2024-02-29 01:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_k` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_k`, `created_at`) VALUES
(1, 'Anime', '2024-01-27 22:36:11'),
(3, 'Game', '2024-01-27 11:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`id`, `book_id`, `user_id`, `status`, `created_at`) VALUES
(13, 5, 4, 'Masuk', '2024-02-29 04:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2023-10-09 19:57:33', NULL, NULL),
(2, 'Petugas', '2023-10-09 19:57:33', NULL, NULL),
(3, 'User', '2023-10-09 19:57:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_book`, `tgl_pinjam`, `tgl_kembali`, `jumlah`, `status`) VALUES
(14, 4, 5, '2024-02-29', '2024-02-29', '4', 'Dipinjam'),
(15, 1, 5, '2024-02-29', '2024-02-01', '5', 'Dikembalikan');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `hapus` AFTER DELETE ON `peminjaman` FOR EACH ROW BEGIN
    UPDATE book SET stok = stok + OLD.jumlah WHERE id_book = OLD.id_book;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `masuk` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
    UPDATE book SET stok = stok - NEW.jumlah WHERE id_book = NEW.id_book;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
 
    IF NEW.status = 'Dikembalikan' AND OLD.status != 'Dikembalikan' THEN
       
        UPDATE book SET stok = stok + NEW.jumlah WHERE id_book = NEW.id_book;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `level` int(11) NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `level`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin@gmail.com', 1, 'default.png', '2024-01-27 14:27:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Petugas', 'Petugas', 'c4ca4238a0b923820dcc509a6f75849b', 'petugas@gmail.com', 2, 'default.png', '2024-01-27 02:55:31', '2024-01-27 03:12:07', '0000-00-00 00:00:00'),
(4, 'Ilham', 'Ilham', 'c4ca4238a0b923820dcc509a6f75849b', 'Ilham@gmail.com', 3, 'default.png', '2024-01-29 09:28:41', '2024-02-29 01:23:28', '0000-00-00 00:00:00'),
(6, 'Ari', 'Ari', 'c4ca4238a0b923820dcc509a6f75849b', 'Ari@gmail.com', 3, 'default.png', '2024-02-29 04:39:59', '2024-02-29 04:39:59', '0000-00-00 00:00:00'),
(7, 'rizkan', 'rizkan', 'c4ca4238a0b923820dcc509a6f75849b', 'rizkan@gmail.com', 3, 'default.png', '2024-02-29 18:12:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
