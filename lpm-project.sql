-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2024 pada 17.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpm-project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jurnalis` varchar(50) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `pimpinan_redaksi` varchar(50) NOT NULL,
  `status` enum('Belum Cek','Lulus Cek','Tidak Lulus Cek','Siap Publish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `photo`, `judul_berita`, `isi_berita`, `kategori`, `tanggal`, `jurnalis`, `editor`, `pimpinan_redaksi`, `status`) VALUES
('BRT001', '1718718454_183410fc573277ecf5b9.jpg', 'Politik', 'Politik Adalah as', 'Politik', '2024-06-18', 'Michael', 'Anita Azura', 'Tito Sugiharto', 'Siap Publish'),
('BRT002', '1718718454_183410fc573277ecf5b9.jpg', 'Percepatan Vaksinasi COVID-19 di Indonesia Capai Target', 'GELORA.CO - Pemerintah Indonesia berhasil mencapai target percepatan vaksinasi COVID-19, dengan lebih dari 100 juta dosis vaksin telah disuntikkan kepada masyarakat di seluruh penjuru negeri. Hal ini disampaikan oleh Menteri Kesehatan, Budi Gunadi Sadikin, dalam konferensi pers yang digelar di Jakarta, Selasa (15/06).\r\n\r\nMenteri Budi menyampaikan apresiasi kepada seluruh tenaga kesehatan dan relawan yang telah bekerja keras dalam upaya ini. \"Keberhasilan ini adalah hasil kerja keras dan dedikasi dari para tenaga kesehatan, relawan, serta dukungan penuh dari masyarakat Indonesia,\" ujarnya.\r\n\r\nPemerintah juga mengapresiasi dukungan dari berbagai pihak, termasuk swasta dan organisasi internasional, yang turut serta dalam penyediaan dan distribusi vaksin. \"Kami akan terus berupaya agar seluruh masyarakat Indonesia dapat menerima vaksin secepat mungkin, untuk menciptakan kekebalan kelompok dan memulihkan kondisi sosial dan ekonomi,\" tambahnya.\r\n\r\nDi sisi lain, pemerintah juga mengingatkan masyarakat untuk tetap mematuhi protokol kesehatan meskipun telah divaksinasi. \"Vaksinasi adalah salah satu langkah penting, namun kita harus tetap waspada dan menjalankan protokol kesehatan untuk mencegah penyebaran virus,\" kata Menteri Budi.\r\n\r\nSelain vaksinasi, pemerintah juga terus meningkatkan kapasitas fasilitas kesehatan dan memperkuat sistem pelacakan serta perawatan pasien COVID-19. Dengan langkah-langkah ini, diharapkan Indonesia dapat segera mengatasi pandemi dan kembali ke kehidupan normal.', 'Nasional', '2024-06-18', 'Michael', 'Anita Azura', 'Belum Ada Pimpinan', 'Siap Publish'),
('BRT003', '1718718454_183410fc573277ecf5b9.jpg', 'Peristiwa', 'GELORA.CO - Pemerintah Indonesia berhasil mencapai target percepatan vaksinasi COVID-19, dengan lebih dari 100 juta dosis vaksin telah disuntikkan kepada masyarakat di seluruh penjuru negeri. Hal ini disampaikan oleh Menteri Kesehatan, Budi Gunadi Sadikin, dalam konferensi pers yang digelar di Jakarta, Selasa (15/06).\r\n\r\nMenteri Budi menyampaikan apresiasi kepada seluruh tenaga kesehatan dan relawan yang telah bekerja keras dalam upaya ini. \"Keberhasilan ini adalah hasil kerja keras dan dedikasi dari para tenaga kesehatan, relawan, serta dukungan penuh dari masyarakat Indonesia,\" ujarnya.\r\n\r\nPemerintah juga mengapresiasi dukungan dari berbagai pihak, termasuk swasta dan organisasi internasional, yang turut serta dalam penyediaan dan distribusi vaksin. \"Kami akan terus berupaya agar seluruh masyarakat Indonesia dapat menerima vaksin secepat mungkin, untuk menciptakan kekebalan kelompok dan memulihkan kondisi sosial dan ekonomi,\" tambahnya.\r\n\r\nDi sisi lain, pemerintah juga mengingatkan masyarakat untuk tetap mematuhi protokol kesehatan meskipun telah divaksinasi. \"Vaksinasi adalah salah satu langkah penting, namun kita harus tetap waspada dan menjalankan protokol kesehatan untuk mencegah penyebaran virus,\" kata Menteri Budi.\r\n\r\nSelain vaksinasi, pemerintah juga terus meningkatkan kapasitas fasilitas kesehatan dan memperkuat sistem pelacakan serta perawatan pasien COVID-19. Dengan langkah-langkah ini, diharapkan Indonesia dapat segera mengatasi pandemi dan kembali ke kehidupan normal.', 'Peristiwa', '2024-06-18', 'Michael', 'Anita Azura', 'Tito Sugiharto', 'Siap Publish'),
('BRT004', '1718718454_183410fc573277ecf5b9.jpg', 'Global', 'GELORA.CO - Pemerintah Indonesia berhasil mencapai target percepatan vaksinasi COVID-19, dengan lebih dari 100 juta dosis vaksin telah disuntikkan kepada masyarakat di seluruh penjuru negeri. Hal ini disampaikan oleh Menteri Kesehatan, Budi Gunadi Sadikin, dalam konferensi pers yang digelar di Jakarta, Selasa (15/06).\r\n\r\nMenteri Budi menyampaikan apresiasi kepada seluruh tenaga kesehatan dan relawan yang telah bekerja keras dalam upaya ini. \"Keberhasilan ini adalah hasil kerja keras dan dedikasi dari para tenaga kesehatan, relawan, serta dukungan penuh dari masyarakat Indonesia,\" ujarnya.\r\n\r\nPemerintah juga mengapresiasi dukungan dari berbagai pihak, termasuk swasta dan organisasi internasional, yang turut serta dalam penyediaan dan distribusi vaksin. \"Kami akan terus berupaya agar seluruh masyarakat Indonesia dapat menerima vaksin secepat mungkin, untuk menciptakan kekebalan kelompok dan memulihkan kondisi sosial dan ekonomi,\" tambahnya.\r\n\r\nDi sisi lain, pemerintah juga mengingatkan masyarakat untuk tetap mematuhi protokol kesehatan meskipun telah divaksinasi. \"Vaksinasi adalah salah satu langkah penting, namun kita harus tetap waspada dan menjalankan protokol kesehatan untuk mencegah penyebaran virus,\" kata Menteri Budi.\r\n\r\nSelain vaksinasi, pemerintah juga terus meningkatkan kapasitas fasilitas kesehatan dan memperkuat sistem pelacakan serta perawatan pasien COVID-19. Dengan langkah-langkah ini, diharapkan Indonesia dapat segera mengatasi pandemi dan kembali ke kehidupan normal.', 'Global', '2024-06-18', 'Michael', 'Anita Azura', 'Tito Sugiharto', 'Siap Publish'),
('BRT005', '1718718454_183410fc573277ecf5b9.jpg', 'Hukum', 'GELORA.CO - Pemerintah Indonesia berhasil mencapai target percepatan vaksinasi COVID-19, dengan lebih dari 100 juta dosis vaksin telah disuntikkan kepada masyarakat di seluruh penjuru negeri. Hal ini disampaikan oleh Menteri Kesehatan, Budi Gunadi Sadikin, dalam konferensi pers yang digelar di Jakarta, Selasa (15/06).\r\n\r\nMenteri Budi menyampaikan apresiasi kepada seluruh tenaga kesehatan dan relawan yang telah bekerja keras dalam upaya ini. \"Keberhasilan ini adalah hasil kerja keras dan dedikasi dari para tenaga kesehatan, relawan, serta dukungan penuh dari masyarakat Indonesia,\" ujarnya.\r\n\r\nPemerintah juga mengapresiasi dukungan dari berbagai pihak, termasuk swasta dan organisasi internasional, yang turut serta dalam penyediaan dan distribusi vaksin. \"Kami akan terus berupaya agar seluruh masyarakat Indonesia dapat menerima vaksin secepat mungkin, untuk menciptakan kekebalan kelompok dan memulihkan kondisi sosial dan ekonomi,\" tambahnya.\r\n\r\nDi sisi lain, pemerintah juga mengingatkan masyarakat untuk tetap mematuhi protokol kesehatan meskipun telah divaksinasi. \"Vaksinasi adalah salah satu langkah penting, namun kita harus tetap waspada dan menjalankan protokol kesehatan untuk mencegah penyebaran virus,\" kata Menteri Budi.\r\n\r\nSelain vaksinasi, pemerintah juga terus meningkatkan kapasitas fasilitas kesehatan dan memperkuat sistem pelacakan serta perawatan pasien COVID-19. Dengan langkah-langkah ini, diharapkan Indonesia dapat segera mengatasi pandemi dan kembali ke kehidupan normal.', 'Hukum', '2024-06-18', 'Michael', 'Anita Azura', 'Tito Sugiharto', 'Siap Publish'),
('BRT006', '1718718454_183410fc573277ecf5b9.jpg', 'Hukum', 'GELORA.CO - Pemerintah Indonesia berhasil mencapai target percepatan vaksinasi COVID-19, dengan lebih dari 100 juta dosis vaksin telah disuntikkan kepada masyarakat di seluruh penjuru negeri. Hal ini disampaikan oleh Menteri Kesehatan, Budi Gunadi Sadikin, dalam konferensi pers yang digelar di Jakarta, Selasa (15/06).\r\n\r\nMenteri Budi menyampaikan apresiasi kepada seluruh tenaga kesehatan dan relawan yang telah bekerja keras dalam upaya ini. \"Keberhasilan ini adalah hasil kerja keras dan dedikasi dari para tenaga kesehatan, relawan, serta dukungan penuh dari masyarakat Indonesia,\" ujarnya.\r\n\r\nPemerintah juga mengapresiasi dukungan dari berbagai pihak, termasuk swasta dan organisasi internasional, yang turut serta dalam penyediaan dan distribusi vaksin. \"Kami akan terus berupaya agar seluruh masyarakat Indonesia dapat menerima vaksin secepat mungkin, untuk menciptakan kekebalan kelompok dan memulihkan kondisi sosial dan ekonomi,\" tambahnya.\r\n\r\nDi sisi lain, pemerintah juga mengingatkan masyarakat untuk tetap mematuhi protokol kesehatan meskipun telah divaksinasi. \"Vaksinasi adalah salah satu langkah penting, namun kita harus tetap waspada dan menjalankan protokol kesehatan untuk mencegah penyebaran virus,\" kata Menteri Budi.\r\n\r\nSelain vaksinasi, pemerintah juga terus meningkatkan kapasitas fasilitas kesehatan dan memperkuat sistem pelacakan serta perawatan pasien COVID-19. Dengan langkah-langkah ini, diharapkan Indonesia dapat segera mengatasi pandemi dan kembali ke kehidupan normal.', 'Hukum', '2024-06-18', 'Michael', 'Anita Azura', 'Tito Sugiharto', 'Siap Publish'),
('BRT007', '1718718454_183410fc573277ecf5b9.jpg', 'Hukum', 'GELORA.CO - Pemerintah Indonesia berhasil mencapai target percepatan vaksinasi COVID-19, dengan lebih dari 100 juta dosis vaksin telah disuntikkan kepada masyarakat di seluruh penjuru negeri. Hal ini disampaikan oleh Menteri Kesehatan, Budi Gunadi Sadikin, dalam konferensi pers yang digelar di Jakarta, Selasa (15/06).\r\n\r\nMenteri Budi menyampaikan apresiasi kepada seluruh tenaga kesehatan dan relawan yang telah bekerja keras dalam upaya ini. \"Keberhasilan ini adalah hasil kerja keras dan dedikasi dari para tenaga kesehatan, relawan, serta dukungan penuh dari masyarakat Indonesia,\" ujarnya.\r\n\r\nPemerintah juga mengapresiasi dukungan dari berbagai pihak, termasuk swasta dan organisasi internasional, yang turut serta dalam penyediaan dan distribusi vaksin. \"Kami akan terus berupaya agar seluruh masyarakat Indonesia dapat menerima vaksin secepat mungkin, untuk menciptakan kekebalan kelompok dan memulihkan kondisi sosial dan ekonomi,\" tambahnya.\r\n\r\nDi sisi lain, pemerintah juga mengingatkan masyarakat untuk tetap mematuhi protokol kesehatan meskipun telah divaksinasi. \"Vaksinasi adalah salah satu langkah penting, namun kita harus tetap waspada dan menjalankan protokol kesehatan untuk mencegah penyebaran virus,\" kata Menteri Budi.\r\n\r\nSelain vaksinasi, pemerintah juga terus meningkatkan kapasitas fasilitas kesehatan dan memperkuat sistem pelacakan serta perawatan pasien COVID-19. Dengan langkah-langkah ini, diharapkan Indonesia dapat segera mengatasi pandemi dan kembali ke kehidupan normal.', 'Hukum', '2024-06-18', 'Michael', 'Anita Azura', 'Tito Sugiharto', 'Siap Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publish`
--

CREATE TABLE `publish` (
  `id_publish` varchar(255) NOT NULL,
  `id_berita` varchar(255) NOT NULL,
  `status` enum('Publish','Belum Publish') NOT NULL,
  `tanggal_publish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `publish`
--

INSERT INTO `publish` (`id_publish`, `id_berita`, `status`, `tanggal_publish`) VALUES
('PBS001', 'BRT002', 'Publish', 'Belum Publish'),
('PBS002', 'BRT001', 'Publish', 'Belum Publish'),
('PBS003', 'BRT001', 'Publish', 'Belum Publish'),
('PBS004', 'BRT002', 'Publish', 'Belum Publish'),
('PBS005', 'BRT003', 'Publish', '2024-06-18 15:11:16'),
('PBS006', 'BRT004', 'Publish', '2024-06-18 15:11:21'),
('PBS007', 'BRT005', 'Publish', '2024-06-18 15:11:33'),
('PBS008', 'BRT006', 'Publish', '2024-06-18 15:11:27'),
('PBS009', 'BRT007', 'Publish', '2024-06-18 15:11:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `alamat`, `email`, `password`, `role`) VALUES
(2, 'Pebi Pebriansah', '', 'pebipebriansah@gmail.com', '$2y$10$Knb6WwASpGq04hKLsytNKeMjzgOXKkS0Gk1Ub5qSmZy31gZDsFfhu', 1),
(3, 'Michael', '', 'michael@gmail.com', '$2y$10$VTtpvQiILCZI61f.y1nQuufRUZoDMgeSEV3paNhm6Yv1zO1ofx8be', 2),
(4, 'Anita Azura', '', 'anita@gmail.com', '$2y$10$h1CXEjElWdfvcrLOhDYMMeHadn6Js3z6mDsG0iqd/UIy.lpfX2u0W', 3),
(5, 'Tito Sugiharto', '', 'tito@gmail.com', '$2y$10$BMjHM/XecjqZXo77qLMquOQOWHR6a.eZs3jOM.BndfxZhR3ih0fJi', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`id_publish`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
