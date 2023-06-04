-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2023 pada 15.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_smkn12malang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapegawai`
--

CREATE TABLE `tb_datapegawai` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_datapegawai`
--

INSERT INTO `tb_datapegawai` (`id_admin`, `nama_admin`, `no_hp`, `id_pengguna`) VALUES
('admin001', 'dwi', '089213754291', 'admin001'),
('admin002', 'agus', '081213865290', 'admin002'),
('admin003', 'finta', '085321890983', 'admin003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_kelas`
--

CREATE TABLE `tb_data_kelas` (
  `id_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_kelas`
--

INSERT INTO `tb_data_kelas` (`id_kelas`, `nama_kelas`) VALUES
('AK1', 'Akuntansi 1'),
('AK2', 'Akuntansi 2'),
('labkomputer', 'Laboraturum TKJ'),
('MM1', 'Multimedia 1'),
('MM2', 'Multimedia 2'),
('TKJ1', 'TKJ 1'),
('TKJ2', 'TKJ 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_nilai`
--

CREATE TABLE `tb_data_nilai` (
  `id_nilai` varchar(10) NOT NULL,
  `proses` varchar(10) NOT NULL,
  `uts` varchar(10) NOT NULL,
  `uas` varchar(10) NOT NULL,
  `praktikum` varchar(10) NOT NULL,
  `tugas_akhir` varchar(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_nilai`
--

INSERT INTO `tb_data_nilai` (`id_nilai`, `proses`, `uts`, `uas`, `praktikum`, `tugas_akhir`, `id_siswa`) VALUES
('2301nilai', '80', '75', '80', '82', '90', '2301'),
('2302nilai', '90', '80', '60', '75', '80', '2302'),
('2303nilai', '70', '75', '80', '90', '80', '2303'),
('2304nilai', '70', '85', '90', '60', '70', '2304'),
('2305nilai', '80', '80', '90', '80', '60', '2305');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_walimurid`
--

CREATE TABLE `tb_data_walimurid` (
  `nama_wali` varchar(50) NOT NULL,
  `id_wali` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_walimurid`
--

INSERT INTO `tb_data_walimurid` (`nama_wali`, `id_wali`, `no_telp`, `pekerjaan`, `alamat`, `id_siswa`, `id_pengguna`) VALUES
('Ngatiman', '2301wali', '081902316789', 'Pedagang', 'Payaman', '2301', '2301wali'),
('Darmo', '2302wali', '081762139043', 'Swasta', 'Singosari', '2302', '2302wali'),
('Yanto', '2303wali', '095321876543', 'Polisi', 'Gadang', '2303', '2303wali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstrakulikuler`
--

CREATE TABLE `tb_ekstrakulikuler` (
  `id_ekstrakulikuler` varchar(20) NOT NULL,
  `nama_ekstrakulikuler` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ekstrakulikuler`
--

INSERT INTO `tb_ekstrakulikuler` (`id_ekstrakulikuler`, `nama_ekstrakulikuler`, `deskripsi`, `id_siswa`) VALUES
('2301basket', 'Basket', 'Sangat Baik', '2301'),
('2302sepakbola', 'Sepak Bola', 'Cukup Baik', '2302'),
('2303sepakbola', 'Sepak Bola', 'Sangat Baik Sekali', '2303'),
('2304voli', 'Voli', 'Sangat Baik Sekali', '2304');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `jabatan`, `status`, `id_pengguna`, `created_at`, `updated_at`) VALUES
('guru001', 'Arif', 'Laki-Laki', 'Lowokwaru', '089876543212', 'arif@gmail.com', 'Kesiswaan', 'Guru Matematika', 'guru001', '2023-05-13 09:08:50', '2023-05-22 16:42:35'),
('guru002', 'Nanik', 'Perempuan', 'Gadang', '089232197402', 'nanik@gmail.com', '-', 'Guru Bahasa Indonesia', 'guru002', NULL, NULL),
('guru003', 'Joko', 'Laki-Laki', 'Balearjosari', '085120931854', 'joko@gmail.com', 'Walas Multimedia 1', 'Guru Sistem Digital', 'guru003', NULL, NULL),
('guru004', 'Fifi', 'Perempuan', 'Polowijen', '089394851209', 'fifi@gmail.com', 'Walas TKJ 1', 'Guru Praktikum TKJ', 'guru004', NULL, NULL),
('guru005', 'Yunus', 'Laki-Laki', 'Balearjosari', '089876543212', 'yunus@gmail.com', '-', 'Guru Praktikum MM', 'guru005', NULL, '2023-06-01 10:33:58'),
('guru006', 'Wibisono', 'Laki-Laki', 'Tumpang', '081289056812', 'wibisono@gmail.com', 'Walas TSM 1', 'Guru Praktikum TBSM', 'guru006', NULL, NULL),
('guru007', 'Kartika', 'Perempuan', 'Karangploso', '089765203912', 'kartika@gmail.com', '-', 'Guru Bahasa Inggris', 'guru007', '2023-05-22 16:48:22', '2023-05-22 16:48:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_pelajaran`
--

CREATE TABLE `tb_jadwal_pelajaran` (
  `id_guru` varchar(10) NOT NULL,
  `id_jadwal` varchar(20) NOT NULL,
  `mapel` varchar(40) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal_pelajaran`
--

INSERT INTO `tb_jadwal_pelajaran` (`id_guru`, `id_jadwal`, `mapel`, `hari`, `jam`, `id_kelas`, `created_at`, `updated_at`) VALUES
('guru001', '0001', 'Matematika', 'senin', '1 - 3', 'AK1', '2023-05-16 04:19:37', '2023-06-01 10:45:21'),
('guru002', '0002', 'Bahasa Indonesia', 'senin', '4 - 6', 'AK2', '2023-06-01 10:52:29', '2023-06-01 10:53:37'),
('guru003', '0003', 'Sistem Digital', 'Senin', '7 - 8', 'MM1', '2023-06-02 19:44:58', '2023-06-02 19:44:58'),
('guru004', '0011', 'Praktikum', 'Selasa', '1 - 4', 'labkomputer', '2023-06-02 19:46:40', '2023-06-02 19:57:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenisnilai`
--

CREATE TABLE `tb_jenisnilai` (
  `siswa` varchar(20) NOT NULL,
  `jujur` varchar(50) NOT NULL,
  `disiplin` varchar(50) NOT NULL,
  `kreatif` varchar(50) NOT NULL,
  `mandiri` varchar(50) NOT NULL,
  `id_siswa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenisnilai`
--

INSERT INTO `tb_jenisnilai` (`siswa`, `jujur`, `disiplin`, `kreatif`, `mandiri`, `id_siswa`) VALUES
('2301', '90', '90', '87', '60', '2301'),
('2302', '80', '90', '87', '60', '2302'),
('2303', '90', '75', '80', '85', '2303'),
('2304', '80', '90', '75', '80', '2304');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matapelajaran`
--

CREATE TABLE `tb_matapelajaran` (
  `id_pelajaran` varchar(20) NOT NULL,
  `pelajaran` varchar(50) NOT NULL,
  `id_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_matapelajaran`
--

INSERT INTO `tb_matapelajaran` (`id_pelajaran`, `pelajaran`, `id_guru`) VALUES
('IF01bhsindo', 'Bahasa Indonesia', 'guru002'),
('IF01matematika', 'Matematika Dasar', 'guru001'),
('IF01Praktkj', 'Praktikum TKJ', 'guru004'),
('IF01sisdig', 'Sistem Digital', 'guru003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `password`, `pilihan`, `created_at`, `updated_at`) VALUES
('2301', '2301', 'siswa', NULL, NULL),
('2301wali', '2301wali', 'wali', NULL, NULL),
('2302', '2302', 'siswa', NULL, NULL),
('2302wali', '2302wali', 'wali', NULL, NULL),
('2303', '2303', 'siswa', NULL, NULL),
('2303wali', '2303wali', 'wali', NULL, NULL),
('2304', '2304', 'siswa', NULL, NULL),
('2304wali', '2304wali', 'wali', NULL, NULL),
('2305', '2305', 'siswa', NULL, NULL),
('2306', '2306', 'siswa', NULL, NULL),
('2307', '2307', 'siswa', NULL, NULL),
('2308', '2308', 'siswa', NULL, NULL),
('admin001', 'admin001', 'admin', NULL, NULL),
('admin002', 'admin002', 'admin', NULL, NULL),
('admin003', 'admin003', 'admin', NULL, NULL),
('guru001', 'guru001', 'guru', NULL, NULL),
('guru002', 'guru002', 'guru', NULL, NULL),
('guru003', 'guru003', 'guru', NULL, NULL),
('guru004', 'guru004', 'guru', NULL, NULL),
('guru005', 'guru005', 'guru', NULL, NULL),
('guru006', 'guru006', 'guru', NULL, NULL),
('guru007', 'guru007', 'guru', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `keterangan` varchar(50) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_hp`, `agama`, `email`, `id_pengguna`, `created_at`, `updated_at`) VALUES
('2301', 'Riki', 'Akuntansi 1', 'Laki-Laki', '2001-05-07', 'Payaman', '089213864012', 'Islam', 'riki@gmail.com', '2301', NULL, NULL),
('2302', 'Dimas', 'Akuntansi 1', 'Laki-Laki', '2023-05-01', 'Singosari', '082232862284', 'Islam', 'dimas@gmail.com', '2302', '2023-04-30 21:27:46', '2023-04-30 21:27:46'),
('2303', 'Fadil', 'Akuntansi 1', 'Laki-Laki', '2001-05-07', 'Gadang', '082319034192', 'Katolik', 'fadil@gmail.com', '2303', NULL, NULL),
('2304', 'Angga', 'Multimedia 1', 'Laki-Laki', '2002-11-14', 'Lawang', '089213761289', 'Islam', 'angga@gmail.com', '2304', NULL, NULL),
('2305', 'Wildan', 'Multimedia 1', 'Laki-Laki', '2002-12-01', 'Songsong', '085189201476', 'Islam', 'wildan@gmail.com', '2305', NULL, NULL),
('2306', 'Loreta', 'Multimedia 1', 'Perempuan', '2001-05-07', 'Blimbing', '0851294325187', 'Islam', 'loreta@gmail.com', '2306', NULL, NULL),
('2307', 'Abdul', 'TKJ 1', 'Laki-Laki', '2001-11-30', 'Balearjosari', '091849301845', 'Islam', 'abdul@gmail.com', '2307', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahunajaran`
--

CREATE TABLE `tb_tahunajaran` (
  `id_tahun` year(4) NOT NULL,
  `jumlah_siswa` varchar(20) NOT NULL,
  `akreditasi` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tahunajaran`
--

INSERT INTO `tb_tahunajaran` (`id_tahun`, `jumlah_siswa`, `akreditasi`, `keterangan`) VALUES
(2016, '1500', 'C', 'Cukup Baik'),
(2017, '1670', 'C', 'Cukup Baik'),
(2018, '1800', 'B', 'Baik'),
(2019, '1730', 'C', 'Cukup Baik'),
(2020, '1800', 'B', 'Baik'),
(2021, '1780', 'B', 'Baik'),
(2022, '1850', 'A', 'Unggul'),
(2023, '1920', 'A', 'Unggul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_datapegawai`
--
ALTER TABLE `tb_datapegawai`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `tb_data_kelas`
--
ALTER TABLE `tb_data_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_data_nilai`
--
ALTER TABLE `tb_data_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_data_walimurid`
--
ALTER TABLE `tb_data_walimurid`
  ADD PRIMARY KEY (`id_wali`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `tb_ekstrakulikuler`
--
ALTER TABLE `tb_ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekstrakulikuler`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `tb_jadwal_pelajaran`
--
ALTER TABLE `tb_jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `tb_jadwal_pelajaran` (`id_guru`);

--
-- Indeks untuk tabel `tb_jenisnilai`
--
ALTER TABLE `tb_jenisnilai`
  ADD PRIMARY KEY (`siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  ADD PRIMARY KEY (`id_pelajaran`),
  ADD KEY `tb_guru` (`id_guru`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_nilai` (`id_nilai`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `tb_tahunajaran`
--
ALTER TABLE `tb_tahunajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_datapegawai`
--
ALTER TABLE `tb_datapegawai`
  ADD CONSTRAINT `tb_datapegawai_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_data_nilai`
--
ALTER TABLE `tb_data_nilai`
  ADD CONSTRAINT `tb_data_nilai` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_data_walimurid`
--
ALTER TABLE `tb_data_walimurid`
  ADD CONSTRAINT `tb_data_walimurid_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_walimurid_ibfk_3` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ekstrakulikuler`
--
ALTER TABLE `tb_ekstrakulikuler`
  ADD CONSTRAINT `tb_ekstrakulikuler_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jadwal_pelajaran`
--
ALTER TABLE `tb_jadwal_pelajaran`
  ADD CONSTRAINT `tb_jadwal_pelajaran` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_pelajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_data_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jenisnilai`
--
ALTER TABLE `tb_jenisnilai`
  ADD CONSTRAINT `id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  ADD CONSTRAINT `tb_guru` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_prestasi_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_data_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_prestasi_ibfk_3` FOREIGN KEY (`id_nilai`) REFERENCES `tb_data_nilai` (`id_nilai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
