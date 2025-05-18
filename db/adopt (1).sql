-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopt`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama_dosen`, `email`, `no_telp`) VALUES
(2, 'D002', 'Dr. Beni Hidayat', 'beni@kampus.ac.id', '082100000002'),
(3, 'D003', 'Dr. Citra Dewi', 'citra@kampus.ac.id', '082100000003'),
(4, 'D004', 'Dr. Dedi Kurniawan', 'dedi@kampus.ac.id', '082100000004'),
(5, 'D005', 'Dr. Elly Nurlaili', 'elly@kampus.ac.id', '082100000005'),
(6, 'D006', 'Dr. Farid Abdullah', 'farid@kampus.ac.id', '082100000006'),
(7, 'D007', 'Dr. Guntur Prabowo', 'guntur@kampus.ac.id', '082100000007'),
(8, 'D008', 'Dr. Hana Kusuma', 'hana@kampus.ac.id', '082100000008'),
(9, 'D009', 'Dr. Indra Lesmana', 'indra@kampus.ac.id', '082100000009'),
(10, 'D010', 'Dr. Jamilah Yusuf', 'jamilah@kampus.ac.id', '082100000010'),
(11, 'D011', 'Dr. Kurnia Sari', 'kurnia@kampus.ac.id', '082100000011'),
(12, 'D012', 'Dr. Lukman Fadli', 'lukman@kampus.ac.id', '082100000012'),
(13, 'D013', 'Dr. Maya Rosita', 'maya@kampus.ac.id', '082100000013'),
(14, 'D014', 'Dr. Nando Hakim', 'nando@kampus.ac.id', '082100000014'),
(15, 'D015', 'Dr. Ocha Pramesti', 'ocha@kampus.ac.id', '082100000015'),
(16, 'D016', 'Dr. Panca Wibowo', 'panca@kampus.ac.id', '082100000016'),
(17, 'D017', 'Dr. Qomarudin', 'qomar@kampus.ac.id', '082100000017'),
(18, 'D018', 'Dr. Reni Marlina', 'reni@kampus.ac.id', '082100000018'),
(19, 'D019', 'Dr. Siska Meilani', 'siska@kampus.ac.id', '082100000019'),
(20, 'D020', 'Dr. Tommy Nugraha', 'tommy@kampus.ac.id', '082100000020'),
(21, '73746272', 'rizqy', 'rizqymubarok99@gmail.com', '083456789017');

-- --------------------------------------------------------

--
-- Table structure for table `ipk_mahasiswa`
--

CREATE TABLE `ipk_mahasiswa` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nama_ruangan`) VALUES
(2, 'Kelas B', 'Ruang 102'),
(3, 'Kelas C', 'Ruang 103'),
(4, 'Kelas D', 'Ruang 104'),
(5, 'Kelas E', 'Ruang 105'),
(6, 'Kelas F', 'Ruang 201'),
(7, 'Kelas G', 'Ruang 202'),
(8, 'Kelas H', 'Ruang 203'),
(9, 'Kelas I', 'Ruang 204'),
(10, 'Kelas J', 'Ruang 205'),
(11, 'Kelas K', 'Ruang 301'),
(12, 'Kelas L', 'Ruang 302'),
(13, 'Kelas M', 'Ruang 303'),
(14, 'Kelas N', 'Ruang 304'),
(15, 'Kelas O', 'Ruang 305'),
(16, 'Kelas P', 'Ruang 401'),
(17, 'Kelas Q', 'Ruang 402'),
(18, 'Kelas R', 'Ruang 403'),
(19, 'Kelas S', 'Ruang 404'),
(20, 'Kelas T', 'Ruang 405'),
(21, 'f15', 'Lab Komputer s1'),
(22, 'f15', 'Lab Komputer s1');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `id_mahasiswa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `email`, `no_telp`, `id_mahasiswa`) VALUES
('20210015', 'Dian', 'ari123@gmail.com', '083456789017', ''),
('MHS003', 'Citra Lestari', 'citra003@example.com', '081234567003', 'MHS003'),
('MHS004', 'Dian Ramadhani', 'dian004@example.com', '081234567004', 'MHS004'),
('MHS005', 'Eka Yulianti', 'eka005@example.com', '081234567005', 'MHS005'),
('MHS006', 'Fajar Nugroho', 'fajar006@example.com', '081234567006', 'MHS006'),
('MHS007', 'Gita Maharani', 'gita007@example.com', '081234567007', 'MHS007'),
('MHS008', 'Hendra Wijaya', 'hendra008@example.com', '081234567008', 'MHS008'),
('MHS009', 'Intan Permata', 'intan009@example.com', '081234567009', 'MHS009'),
('MHS010', 'Joko Prasetyo', 'joko010@example.com', '081234567010', 'MHS010'),
('MHS011', 'Kiki Amelia', 'kiki011@example.com', '081234567011', 'MHS011'),
('MHS012', 'Lina Marlina', 'lina012@example.com', '081234567012', 'MHS012'),
('MHS013', 'Maya Sari', 'maya013@example.com', '081234567013', 'MHS013'),
('MHS014', 'Nina Kartika', 'nina014@example.com', '081234567014', 'MHS014'),
('MHS015', 'Oki Rahman', 'oki015@example.com', '081234567015', 'MHS015'),
('MHS016', 'Putra Aditya', 'putra016@example.com', '081234567016', 'MHS016'),
('MHS017', 'Qori Shafira', 'qori017@example.com', '081234567017', 'MHS017'),
('MHS018', 'Rina Widya', 'rina018@example.com', '081234567018', 'MHS018'),
('MHS019', 'Sigit Wicaksono', 'sigit019@example.com', '081234567019', 'MHS019'),
('MHS020', 'Tina Ismail', 'tina020@example.com', '081234567020', 'MHS020');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`, `sks`) VALUES
('CS102', 'Struktur Data', 3),
('CS103', 'Basis Data', 3),
('CS104', 'Jaringan Komputer', 2),
('CS105', 'Sistem Operasi', 3),
('CS106', 'Pemrograman Web', 3),
('CS107', 'Kecerdasan Buatan', 3),
('CS108', 'Machine Learning', 3),
('CS109', 'Data Mining', 2),
('CS110', 'Keamanan Siber', 2),
('CS111', 'Pemrograman Mobile', 3),
('CS112', 'Pemrograman Game', 3),
('CS113', 'Matematika Diskrit', 2),
('CS114', 'Analisis Algoritma', 3),
('CS115', 'Manajemen Proyek TI', 2),
('CS116', 'Interaksi Manusia dan Komputer', 2),
('CS117', 'Etika Profesi TI', 2),
('CS118', 'Cloud Computing', 3),
('CS119', 'DevOps dan CI/CD', 2),
('CS120', 'Komputasi Paralel', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_mahasiswa`, `name`, `email`, `password`) VALUES
(1, NULL, 'ari', 'ari123@gmail.com', '$2y$10$GHvyIF7hwSjWlfjgSFJYmuQZBrvO7KA3Q95H5GGDr7aFD6N/Zi2W.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `ipk_mahasiswa`
--
ALTER TABLE `ipk_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_users_mahasiswa` (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ipk_mahasiswa`
--
ALTER TABLE `ipk_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ipk_mahasiswa`
--
ALTER TABLE `ipk_mahasiswa`
  ADD CONSTRAINT `ipk_mahasiswa_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
