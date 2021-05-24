-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2021 pada 02.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `namakegiatan` varchar(128) NOT NULL,
  `tahun` date NOT NULL,
  `detail` text NOT NULL,
  `tgl_kegiatan` int(11) NOT NULL,
  `validasi` int(11) NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `point` float NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `accountCreated` varchar(128) NOT NULL,
  `accountValidated` varchar(128) NOT NULL,
  `brosur` varchar(128) NOT NULL,
  `proposal` varchar(128) NOT NULL,
  `spj` varchar(128) NOT NULL,
  `kebutuhanDana` float NOT NULL,
  `dana_1` float NOT NULL,
  `dana_2` float NOT NULL,
  `dana_3` float NOT NULL,
  `dana_4` float NOT NULL,
  `dana_5` float NOT NULL,
  `pendaftaranPeserta` int(11) NOT NULL,
  `batasPeserta` int(11) NOT NULL,
  `pesertaDaftar` int(11) NOT NULL,
  `pesertaHadir` int(11) NOT NULL,
  `tgl_buka` int(11) NOT NULL,
  `tgl_tutup` int(11) NOT NULL,
  `sertifikat` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `cp` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `namakegiatan`, `tahun`, `detail`, `tgl_kegiatan`, `validasi`, `penyelenggara`, `point`, `kategori`, `date_created`, `accountCreated`, `accountValidated`, `brosur`, `proposal`, `spj`, `kebutuhanDana`, `dana_1`, `dana_2`, `dana_3`, `dana_4`, `dana_5`, `pendaftaranPeserta`, `batasPeserta`, `pesertaDaftar`, `pesertaHadir`, `tgl_buka`, `tgl_tutup`, `sertifikat`, `status`, `cp`, `email`) VALUES
(1, 'Nama Kegiatan Coba 1', '0000-00-00', '', 1608606035, 0, '', 0, '', 0, 'hmj@gmail.com', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1608606015, '', 3, '', ''),
(2, 'Nama Kegiatan Contoh 2', '0000-00-00', '', 1608606035, 0, '', 0, '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1606006015, '', 1, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `email_peserta` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id`, `id_kegiatan`, `email_peserta`) VALUES
(1, 1, 'hmj@gmail.com'),
(2, 1, 'mhs@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firstname`, `lastname`, `username`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Nurlaily', 'Vendyansyah', '1031900557', 'nurlaily.vendyansyah@gmail.com', 'default.jpg', '1111111', 1, 1, 1614498621),
(2, 'Nurlaily', 'Vendyansyah', 'nurlaily3585', 'mhs@gmail.com', 'default.jpg', '1111111', 2, 1, 1614927240),
(3, 'Nurlaily', 'Vendyansyah', '1031900557', 'rektor@gmail.com', 'default.jpg', '1111111', 3, 1, 1614928448),
(4, 'Nurlaily', 'Vendyansyah', 'admin', 'dosen@gmail.com', 'default.jpg', '1111111', 4, 1, 1614929804),
(5, 'Rahma', 'Nabilla', 'rara', 'hmj@gmail.com', 'default.jpg', '1111111', 5, 1, 1615283925),
(6, 'Kaprodi', '', 'kaprodi', 'kaprodi@gmail.com', 'default.jpg', '1111111', 6, 1, 1614498621);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_access_menu`
--

CREATE TABLE `tb_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user_access_menu`
--

INSERT INTO `tb_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 3),
(5, 4, 4),
(6, 5, 5),
(7, 6, 6),
(8, 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_menu`
--

CREATE TABLE `tb_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user_menu`
--

INSERT INTO `tb_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Mahasiswa'),
(3, 'Rektor'),
(4, 'Dosen'),
(5, 'Himpunan Mahasiswa Jurusan'),
(6, 'Kaprodi'),
(7, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user_role`
--

INSERT INTO `tb_user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Mahasiswa'),
(3, 'Rektor'),
(4, 'Dosen'),
(5, 'Hmj'),
(6, 'Kaprodi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_sub_menu`
--

CREATE TABLE `tb_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user_sub_menu`
--

INSERT INTO `tb_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Beranda', 'admin', 'fa-fw fas fa-home', 1),
(2, 2, 'Beranda', 'mahasiswa', 'fa-fw fas fa-home', 1),
(3, 3, 'Beranda', 'rektor', 'fa-fw fas fa-home', 1),
(4, 4, 'Beranda', 'dosen', 'fa-fw fas fa-home', 1),
(5, 5, 'Beranda', 'hmj', 'fa-fw fas fa-home', 1),
(6, 6, 'Beranda', 'kaprodi', 'fa-fw fas fa-home', 1),
(7, 2, 'Daftar Kegiatan', 'mahasiswa/v_list', 'fa-fw fas fa-calendar-alt', 1),
(8, 2, 'Riwayat Kegiatan', 'mahasiswa/v_riwayat', 'fa-fw fas fa-calendar', 1),
(9, 5, 'Daftar Kegiatan', 'hmj/v_list', 'fa-fw fas fa-calendar-alt', 1),
(10, 5, 'Riwayat Kegiatan', 'hmj/v_riwayat', 'fa-fw fas fa-calendar', 1),
(11, 5, 'Kegiatan Saya', 'hmj/v_add', 'fa-fw fas fa-calendar-plus', 1),
(12, 3, 'Validasi Kegiatan', 'rektor/v_validasi', 'fa-fw fas fa-calendar-check', 1),
(13, 3, 'Daftar Kegiatan', 'rektor/v_list', 'fa-fw fas fa-calendar-alt', 1),
(14, 3, 'Riwayat Kegiatan', 'rektor/v_riwayat', 'fa-fw fas fa-calendar', 1),
(15, 3, 'Kegiatan Saya', 'rektor/v_add', 'fa-fw fas fa-calendar-plus', 1),
(16, 4, 'Daftar Kegiatan', 'dosen/v_list', 'fa-fw fas fa-calendar-alt', 1),
(17, 4, 'Riwayat Kegiatan', 'dosen/v_riwayat', 'fa-fw fas fa-calendar', 1),
(18, 4, 'Kegiatan Saya', 'dosen/v_add', 'fa-fw fas fa-calendar-plus', 1),
(19, 6, 'Daftar Kegiatan', 'kaprodi/v_list', 'fa-fw fas fa-calendar-alt', 1),
(20, 6, 'Riwayat Kegiatan', 'kaprodi/v_riwayat', 'fa-fw fas fa-calendar', 1),
(21, 6, 'Kegiatan Saya', 'kaprodi/v_add', 'fa-fw fas fa-calendar-plus', 1),
(22, 6, 'Mahasiswa Saya', 'kaprodi/v_mhs', 'fa-fw fas fa-calendar-day', 1),
(23, 7, 'Menu Manajemen', 'menu', 'fa-fw fas fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
