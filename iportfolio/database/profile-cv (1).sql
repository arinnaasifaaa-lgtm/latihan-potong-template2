-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2026 at 04:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile-cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `tahun_belajar` varchar(40) NOT NULL,
  `tempat_belajar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `nama_jurusan`, `tahun_belajar`, `tempat_belajar`, `deskripsi`) VALUES
(1, 'Pengembangan Perangkat Lunak dan Gim', '2024', 'SMK Negeri 3 Banjar', 'UI/UX\r\nBasis Data\r\nPemograman WEB');

-- --------------------------------------------------------

--
-- Table structure for table `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nama`, `icon`) VALUES
(1, 'PHP', 'devicon-php-plain'),
(2, 'Laravel', 'devicon-laravel-plain'),
(3, 'JavaScript', 'devicon-javascript-plain'),
(4, 'HTML', 'devicon-html5-plain'),
(5, 'CSS', 'devicon-css3-plain'),
(6, 'Bootstrap', 'devicon-bootstrap-plain'),
(11, 'Github', 'devicon-github-plain');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `nama_pekerjaan` varchar(200) NOT NULL,
  `tahun_bekerja` varchar(250) NOT NULL,
  `tempat_bekerja` varchar(100) NOT NULL,
  `deskripsi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `nama_pekerjaan`, `tahun_bekerja`, `tempat_bekerja`, `deskripsi`) VALUES
(2, 'Pelajar', '2024-2027', 'SMK N 3 Banjar', 0x4d656e6765726a616b616e2074756761732064616e2070726f79656b2073656b6f6c61682c206d656e67656d62616e676b616e206b656d616d7075616e20646920626964616e672070656d726f6772616d616e2064616e2070656e67656d62616e67616e207765622c207365727461206d656e657261706b616e20696c6d752079616e6720646970656c616a617269206d656c616c7569206b6567696174616e207072616b74696b2064616e20504b4c2e);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id_language` int(11) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `flag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_language`, `bahasa`, `flag`) VALUES
(1, 'Indonesia', '1784817582.jpg'),
(2, 'Sunda', '1785067702.jpg'),
(4, 'Jawa', '1785067718.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'rinarin@gmail.com', 'karincantik05');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id_mobile` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id_mobile`, `nama`, `icon`) VALUES
(4, 'Android', 'devicon-android-plain'),
(6, 'mysql', 'devicon-mysql-plain');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `judul_portfolio` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul_portfolio`, `img`, `link`, `deskripsi`, `jenis`) VALUES
(6, 'Event Indomaret Fresh', '1785210150.jpg', 'https://www.instagram.com/p/DU14RLpgRur/?img_index=4&igsh=NnF2ejNyaXU2NzAy', 'lomba tari jaipongan di event indomaret fresh, saya membawakan lagu kala ider', 'Kompetisi/Lomba'),
(8, 'Kaka pembimbing mpls', '1784866752.jpg', '-', 'foto tersebut menunjukan saya sedang menjadi kaka pembimbing mpls yang\r\nbaru selesai membersihkan halaman sekolah', 'Kepanitiaan'),
(9, 'Penampilan Tari ', '1784866864.jpg', '-', 'Anggota Eskul Seni Tari sedang menampilkan tarian di event\r\nPaskibra di SMK N 3 Banjar ', 'Event Sekolah'),
(10, 'Yamaha Cup Race', '1784867049.jpg', 'https://www.instagram.com/p/DRrFEdPAcZV/?igsh=MThqNG51c244a3FqMw==', 'Anggota Eskul Seni Tari yang pada saat itu mengikuti Lomba Jaipong\r\ndi Event Yamaha Cup Race di Mangkubumi Tasikmalaya', 'Kompetisi/Lomba'),
(11, 'Upacara Adat', '1784867185.jpg', 'https://www.instagram.com/p/DZZNK0ogT1O/?img_index=1&igsh=c3llZHBnOW1rN3Zx', 'Team Upacara Adat: tampil di acara pernikahan ', 'Dokumentasi Kegiatan'),
(12, 'Lomba FLS3N ', '1785068857.jpg', 'https://www.instagram.com/p/DKHb_VHBthj/?igsh=MWZhYnJlMjR5aHZqcw==', 'Berpartisipasi sebagai penari dalam ajang FLS3N tingkat Provinsi, Mewakili sekolah menampilkan seni tari serta bekerja sama dengan tim untuk memberikan penampilan terbaik.', 'Kompetisi/Lomba'),
(13, 'Piagam penghargaan penari pembukaan fosjabar', '1785069372.jpg', '-', 'Mendapatkan piagam penghargaan atas partisipasi sebagai penari dalam penampilan pembukaan acara Roadshow Fosjabar', 'Penghargaan'),
(14, 'Penampilan Tari ', '1785069552.jpg', '-', 'Ikut berpartisipasi dalam memeriahkan acara malam minggu an  menampilkan pertujukan seni tari jaipong', 'Dokumentasi Kegiatan');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `find_me` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama`, `about`, `website`, `phone`, `email`, `address`, `find_me`, `nationality`) VALUES
(1, 'Karina Eka Nasifa', 'Hi!, saya Karina Eka Nasifa, siswi jurusan Pengembangan Perangkat Lunak dan Gim (PPLG).\r\n\r\nSaya senang mempelajari hal-hal baru dan mengembangkan kemampuan di bidang pemrograman serta pembuatan website. Selain itu, saya memiliki beberapa hobi yaitu menari, mendengarkan musik, dan membaca. ', 'https://github.com/arinnaasifaaa-lgtm/latihan-potong-template2', '0882-9725-3275', 'karinaekanasifa@gmail.com', 'Jl. Taman Kenari No.A3, Kledokan, Caturtunggal, Kecamatan Depok,  Kabupaten Sleman, Daerah Istimewa Yogyakarta\"\"\"\"\"\"\"\"\"\"', 'https://www.instagram.com/_rinaariiinnn?igsh=bWJsYzM0YnpkMDN5', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id_reference` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id_reference`, `nama`, `jabatan`, `perusahaan`, `phone`, `email`) VALUES
(1, 'Karina Eka', 'Ceo', 'PT Sukses', '89376794', 'rinarin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_photo`
--

CREATE TABLE `sidebar_photo` (
  `id_sidebar_photo` int(11) NOT NULL,
  `sidebar_photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sidebar_photo`
--

INSERT INTO `sidebar_photo` (`id_sidebar_photo`, `sidebar_photo`) VALUES
(1, '1784855483.jpg'),
(5, '1784855466.jpg'),
(7, '1785209344.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nama_skill` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`) VALUES
(1, 'Menari'),
(2, 'Menggambar'),
(3, 'Bernyanyi');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tools` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id_tools`, `nama`, `icon`) VALUES
(4, 'VSCode', 'devicon-vscode-plain'),
(5, 'MySql', 'devicon-mysql-plain'),
(6, 'Firebase', 'devicon-firebase-plain'),
(7, 'Canva', 'devicon-canva-plain'),
(8, 'Android studio', 'devicon-android-plain'),
(9, 'Composer', 'devicon-composer-plain'),
(10, 'CSS', 'devicon-css3-plain');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` int(11) NOT NULL,
  `nama_training` varchar(256) NOT NULL,
  `tahun_training` varchar(256) NOT NULL,
  `tempat_training` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `tahun_training`, `tempat_training`, `deskripsi`) VALUES
(1, 'PHP', '2026', 'PT Lauwba Techno', 'belajar membuat web personal profile menggunakan PHP '),
(5, 'Osis', '2024', 'SMK N 3 Banjar', 'Mengikuti seleksi pemilihan anggota osis sebelum menjadi anggota. '),
(6, 'Eskul Kesenian', '2024', 'SMK N 3 Banjar', 'Sebelum menjadi bagian dari eskul kesenian, sebelum itu ada seleksi nya juga yaitu unjuk bakat. unjuk bakatnya yaitu menampilkan tarian yang kita kuasai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indexes for table `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_mobile`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`);

--
-- Indexes for table `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  ADD PRIMARY KEY (`id_sidebar_photo`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_mobile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  MODIFY `id_sidebar_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
