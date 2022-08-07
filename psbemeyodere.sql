-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 12:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbemeyodere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(9, 'admin', '$2y$10$qFm679HesZ2ebY95IXuD7urW0udVYKk9CPJXF7xxAlt7L7lE/Dkr6', 'administrator'),
(10, 'kepsek', '$2y$10$ME45cxqWF06u6NlqItQAqO0xo3QaPftHSQvbuK2qZEmTNQHTeL3/e', 'kepala sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `albumfoto`
--

CREATE TABLE `albumfoto` (
  `id_albumf` int(5) UNSIGNED NOT NULL,
  `namaalbum` varchar(100) NOT NULL,
  `sampul_foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albumfoto`
--

INSERT INTO `albumfoto` (`id_albumf`, `namaalbum`, `sampul_foto`) VALUES
(2, 'Suasana Sekolah', 0x313536383038353532385f70616e64616d6569737465722e6a7067),
(4, 'IT UMS Magang', 0x313032323337373033305f3938323532342e6a7067),
(5, 'Lomba ', 0x313637393635363937385f313137303832312e6a7067),
(6, 'Kegiatan Tanam Bakau', 0x313139333439313031345f333632363432322e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `albumvideo`
--

CREATE TABLE `albumvideo` (
  `id_albumv` int(5) UNSIGNED NOT NULL,
  `namaalbum` varchar(100) NOT NULL,
  `sampul_foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albumvideo`
--

INSERT INTO `albumvideo` (`id_albumv`, `namaalbum`, `sampul_foto`) VALUES
(1, 'Suasana Sekolah', 0x323030353930363834315f313135373435382e706e67),
(2, 'Lomba ', 0x313435343537323931335f323131333635392e6a7067),
(3, 'IT UMS Magang', 0x3139353339353038355f313134393835332e6a7067),
(4, 'Mahasiswa/i IAIN Magang', 0x3430373231383834325f323131333632302e6a7067),
(5, 'Kegiatan Bersih-bersih Bakau', 0x313238363934333735325f333632363339372e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` blob NOT NULL,
  `isi_berita` text NOT NULL,
  `dibaca` int(5) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `isi_berita`, `dibaca`, `tanggal_upload`) VALUES
(2, 'Pendaftaran Siswa Baru MTS Emeyodere Berbasis Web Resmi Diluncurkan', 0x313837353233333030375f6175726f72614d75736963322e6a7067, '<p>Pada tanggal sekian sekian sekian</p>', 4, '2021-11-09'),
(3, 'Wuhuuuu', 0x313339353931353434335f313832353939302e6a7067, '<p>woyo</p>', 2, '2021-11-09'),
(5, 'asdaw', 0x3833333630343839355f6c6f676f2e706e67, '<p>Welcome</p>', 0, '2021-11-18'),
(6, 'asdaw', 0x313937393239323633355f3736393436302e6a7067, '<p>Test2</p>', 0, '2021-11-18'),
(7, 'woyowoyo', 0x313830393636343034305f363730383737312e6a7067, '<p>Test</p>', 0, '2021-11-18'),
(8, 'fds', 0x313936313735303837335f35352b20e1baa36e68206ee1bb816e20c49169e1bb876e2074686fe1baa16920637574652064c3a06e682063686f2066616e2063e1bba7612057652042617265204265617273202d20426c6f67416e43686f692e6a7067, '<p>Test3</p>', 0, '2021-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(5) UNSIGNED NOT NULL,
  `albumf_id` int(5) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `albumf_id`, `foto`) VALUES
(1, 6, 0x3830363639383130395f313734333037332e6a7067),
(2, 2, 0x323031353539373234385f3938323532302e6a7067),
(3, 4, 0x313139353431323134315f313137303831312e6a7067),
(4, 5, 0x313832383338343538385f466f6e646f732064652070616e74616c6c6120646520426f62204573706f6e6a612e6a7067),
(7, 5, 0x3830313633303235305f3736393436302e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `linkf`
--

CREATE TABLE `linkf` (
  `id` int(5) UNSIGNED NOT NULL,
  `url_formulir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkf`
--

INSERT INTO `linkf` (`id`, `url_formulir`) VALUES
(1, 'https://forms.gle/wXN4wXqeNBr1q3d76');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(5) UNSIGNED NOT NULL,
  `albumv_id` int(5) NOT NULL,
  `video_url` text NOT NULL,
  `thumbnail` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `albumv_id`, `video_url`, `thumbnail`) VALUES
(1, 1, 'https://www.youtube.com/watch?v=GmG4X9PGOXs', 0x313035333939353033305f313137303832322e6a7067),
(2, 5, 'https://www.youtube.com/watch?v=jEGPKL7n4Uw', 0x313834373632363332385f34373033373736362d6d757369632d77616c6c70617065722e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albumfoto`
--
ALTER TABLE `albumfoto`
  ADD PRIMARY KEY (`id_albumf`);

--
-- Indexes for table `albumvideo`
--
ALTER TABLE `albumvideo`
  ADD PRIMARY KEY (`id_albumv`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkf`
--
ALTER TABLE `linkf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `albumfoto`
--
ALTER TABLE `albumfoto`
  MODIFY `id_albumf` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `albumvideo`
--
ALTER TABLE `albumvideo`
  MODIFY `id_albumv` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `linkf`
--
ALTER TABLE `linkf`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
