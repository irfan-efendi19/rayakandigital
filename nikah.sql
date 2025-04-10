-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 10:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `nama_acara` varchar(50) NOT NULL,
  `tgl_acara` varchar(20) DEFAULT NULL,
  `waktu_mulai` varchar(10) NOT NULL,
  `waktu_akhir` varchar(10) NOT NULL,
  `tempat_acara` varchar(100) NOT NULL,
  `alamat_acara` text NOT NULL,
  `maps` text DEFAULT NULL,
  `set_countdown` enum('Y','N') DEFAULT 'N',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `tgl_acara`, `waktu_mulai`, `waktu_akhir`, `tempat_acara`, `alamat_acara`, `maps`, `set_countdown`, `id_user`) VALUES
(201, 'Akad Nikah', '2022/04/01', '07:00', '08:00', 'Kediaman Mempelai Wanita', 'Kediaman Mempelai Wanita', '', 'N', 303),
(202, 'afasfas', '2022/05/21', '22:42', '22:43', 'afasfa', 'afasf', '', 'N', 304),
(203, 'sad', '2025/04/23', '11:22', '22:02', 'sadas', '22', '', 'N', 305),
(207, 'Akad Nikah', '2025/12/01', '09:00', '10:00', 'Kediaman Mempelai Wanita', 'Jl. Medan Merdeka Utara No.3 RT.02/RW.03. Gambir, Jakarta Pusat.', '', 'N', 1),
(208, 'Resepsi', '2022/12/15', '10:00', '22:00', 'Kediaman Mempelai Wanita', 'Jl. Medan Merdeka Utara No.3 RT.02/RW.03. Gambir, Jakarta Pusat.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.705836876672!2d106.82198811476884!3d-6.170129095532956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d6aa94d477%3A0xebf3b9d252c86a26!2sMerdeka%20Palace!5e0!3m2!1sen!2sid!4v1595773648767!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'N', 1),
(209, 'Unduh Mantu', '2022/12/31', '10:00', '22:00', 'Kediaman Mempelai Pria', 'Dukun RT 002 RW 002', '', 'N', 1),
(211, 'qwqw', '2025/04/30', '19:00', '20:00', 'sadas', 'wda', 'wad', 'N', 310),
(212, 'sad', '2025/04/30', '11:11', '12:12', 'dw', 'sq', 'qs', 'Y', 311);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `nama_lengkap`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'Vincenzo', '2020-08-27 04:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `album` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `id_user`, `album`) VALUES
(383, 1, 'album1'),
(384, 1, 'album2'),
(385, 1, 'album3'),
(386, 1, 'album4'),
(387, 1, 'album5'),
(388, 1, 'album6'),
(389, 1, 'album7'),
(390, 1, 'album8'),
(391, 1, 'album9'),
(392, 1, 'album10');

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_cerita` varchar(50) NOT NULL,
  `judul_cerita` text NOT NULL,
  `isi_cerita` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`id`, `id_user`, `tanggal_cerita`, `judul_cerita`, `isi_cerita`, `created_at`, `updated_at`) VALUES
(281, 1, '14 Januari 2021', 'Pertama bertemu', 'Waktu Pertama Kali\nKulihat Dirimu Hadir\nRasa hati ini inginkan dirimu ', '2022-03-30 03:55:22', '2022-03-30 12:06:49'),
(282, 1, '15 Maret 2021', 'Jatuh Cinta', 'Hati tenang mendengar \nsuara indah menyapa\nGeloranya hati ini\nTak ku sangka..', '2022-03-30 03:55:22', '2022-03-30 12:07:46'),
(283, 1, '1 Mei 2021', 'Ta\'aruf', 'Rasa ini.. tak tertahan..\nHati ini..slalu untukmu..', '2022-03-30 03:55:22', '2022-03-30 12:08:10'),
(284, 1, '16 Mei 2021', 'Khitbah', 'Terimalah lagu ini dari orang biasa\nTapi cintaku padamu luar biasa\nAku tak punya bunga\nAku tak punya harta\nYang ku punya hanyalah\nHati yang setia.. Tulus.. Padamu.. :)', '2022-03-30 03:55:22', '2022-03-30 12:08:47'),
(285, 1, '19 Desember', 'Pertemuan Antar Keluarga Besar', 'Membicarakan Tanggal dan Waktu Pernikahan', '2022-03-30 03:55:22', '2022-03-30 10:55:22'),
(286, 304, '14 Januari 2023', 'adfa', 'afs', '2022-05-21 15:41:22', '2022-05-21 22:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto_pria` varchar(50) NOT NULL DEFAULT '0',
  `foto_wanita` varchar(50) NOT NULL DEFAULT '0',
  `maps` longtext DEFAULT NULL,
  `video` varchar(100) NOT NULL,
  `kunci` varchar(100) NOT NULL,
  `salam_pembuka` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_wa` varchar(255) DEFAULT NULL,
  `salam_wa_atas` text NOT NULL,
  `salam_wa_bawah` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `id_user`, `foto_pria`, `foto_wanita`, `maps`, `video`, `kunci`, `salam_pembuka`, `token_wa`, `salam_wa_atas`, `salam_wa_bawah`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.705836876672!2d106.82198811476884!3d-6.170129095532956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d6aa94d477%3A0xebf3b9d252c86a26!2sMerdeka%20Palace!5e0!3m2!1sen!2sid!4v1595773648767!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'https://youtu.be/PjHqsdT8pJQ', 'mIjh78y8ge13b89d99c1a29132e57d2ca', ' السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :	', '', 'Assalamualaikum Wr Wb\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih \n\nWassalamualaikum Wr Wb', '2020-07-26 14:16:43', '2022-04-01 17:57:06'),
(2, 303, '0', '0', '', '', '174cd83375fccca7c5c628537f974575', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh.\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :', NULL, 'Assalamualaikum Wr Wb.\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT.\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih.\n\nWassalamualaikum Wr Wb', '2022-04-01 09:23:24', '2022-04-01 16:23:24'),
(3, 304, '1', '1', '', '', 'c5e3c1770e6ccad8326111fb0d58267e', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh.\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :', NULL, 'Assalamualaikum Wr Wb.\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT.\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih.\n\nWassalamualaikum Wr Wb', '2022-05-21 15:41:22', '2022-05-21 22:41:22'),
(4, 305, '1', '1', '', '', '48364a1ef6431b4959dc55c111fcb1e4', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh.\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :', NULL, 'Assalamualaikum Wr Wb.\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT.\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih.\n\nWassalamualaikum Wr Wb', '2025-04-10 12:34:05', '2025-04-10 19:34:05'),
(9, 310, '1', '1', 'wad', '', '9b936f146e8cccb9a32dfb20fc80bc64', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh.\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :', NULL, 'Assalamualaikum Wr Wb.\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT.\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih.\n\nWassalamualaikum Wr Wb', '2025-04-10 14:01:16', '2025-04-10 21:01:16'),
(10, 311, '0', '0', 'qs', '', 'bbbd8d39bd45a4470971a16eab90fe85', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh.\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :', NULL, 'Assalamualaikum Wr Wb.\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT.\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih.\n\nWassalamualaikum Wr Wb', '2025-04-10 14:16:45', '2025-04-10 21:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `isi_komentar` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `id_user`, `nama_komentar`, `isi_komentar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aninda Safira', 'Alhamdulilah, selamat atas pernikahan kalian. Semoga pernikahan kalian dilimpahi oleh cinta, kebaikan dan kebahagiaan. Jazakallahu khairan khatira.. ', '2020-08-23 15:10:31', '2021-10-06 22:03:39'),
(2, 1, 'Raisa Andriana', 'Selamat menikah sahabatku, ‘Barakallahu lakum wa baraka alaikum’ ', '2020-08-22 15:12:45', '2020-08-22 01:17:42'),
(3, 1, 'Anisa Rahma', 'Alhamdulillah.. Selamat ya. Semoga Allah Swt selalu melimpahkan rahmatNya untuk pernikahan kalian.', '2020-08-20 15:14:44', '2020-08-22 01:18:37'),
(4, 1, 'Maudy Ayunda', 'MasyaAllah.. Selamat buat kalian berdua. Barakallah', '2020-08-22 15:32:50', '2021-10-06 22:03:39'),
(5, 1, 'Citra Kirana', 'Baarakallahu laka wa baaraka ‘alaika wa jama’a bainakumaa fii khaiir.\r\n\r\nSemoga Allah memberikan keberkahan untukmu dan atasmu, serta semoga Dia mengumpulkan di antara kalian berdua dalam kebaikan. ', '2020-07-26 16:00:41', '2021-10-06 22:03:39'),
(6, 1, 'Nissya Sabyan', 'Semoga pernikahan kalian langgeng dan selalu dinaungi petunjuk Allah dalam setiap langkah.. Aamiin', '2020-07-26 16:03:18', '2021-10-06 22:03:39'),
(7, 311, 'Ads', 'sdasd', '2025-04-10 15:55:02', '2025-04-10 22:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `mempelai`
--

CREATE TABLE `mempelai` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pria` varchar(50) NOT NULL,
  `nama_panggilan_pria` varchar(50) NOT NULL,
  `nama_ibu_pria` varchar(50) NOT NULL,
  `nama_ayah_pria` varchar(50) NOT NULL,
  `nama_wanita` varchar(50) NOT NULL,
  `nama_panggilan_wanita` varchar(50) NOT NULL,
  `nama_ibu_wanita` varchar(50) NOT NULL,
  `nama_ayah_wanita` varchar(50) NOT NULL,
  `posisi_mempelai` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mempelai`
--

INSERT INTO `mempelai` (`id`, `id_user`, `nama_pria`, `nama_panggilan_pria`, `nama_ibu_pria`, `nama_ayah_pria`, `nama_wanita`, `nama_panggilan_wanita`, `nama_ibu_wanita`, `nama_ayah_wanita`, `posisi_mempelai`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andra Leksmana', 'Andra', 'Muslimah', 'Kusmanto', 'Siti Amelia', 'Amel', 'Siti Fatimah', 'Soekatmo', '0', '2020-07-26 14:16:43', '2022-03-08 21:47:25'),
(2, 303, 'Jack Sparrow', 'Jack', 'Kasniti', 'I Wayan Jarwa', 'Nadhifha Nukma Yasmine', 'Nadhifha', 'Sulastri', 'Miftahuddin', '0', '2022-04-01 09:23:24', '2022-04-01 16:23:24'),
(3, 304, 'Pirto Limbong', 'Pirto', 'Erika', 'Jamadin', 'Xontoh', 'Asdas', 'Asfafa', 'Afas', '0', '2022-05-21 15:41:22', '2022-05-21 22:41:22'),
(4, 305, 'Wdq', 'Qw', 'Qw', 'Sda', 'Wd', 'Qw', 'Wqd', 'Sad', '0', '2025-04-10 12:34:05', '2025-04-10 19:34:05'),
(9, 310, 'Wdq', 'Qw', 'Wqd', 'Wqd', 'Wdq', 'Qwd', 'Uhiu', 'Wqd', '0', '2025-04-10 14:01:16', '2025-04-10 21:01:16'),
(10, 311, 'Sda', 'Wqd', 'Wqd', 'Sda', 'Wd', 'Qwd', 'Qw', 'Sad', '0', '2025-04-10 14:16:45', '2025-04-10 21:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `domain`, `theme`, `id_paket`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'demo', '59', 3, 1, '2022-03-01 14:01:31', '2022-03-30 10:23:29'),
(2, 303, 'test', '5', 3, 1, '2022-04-01 09:23:24', '2022-04-01 16:23:24'),
(3, 304, 'tumorang', '52', 3, 1, '2022-05-21 15:41:22', '2022-05-21 22:41:22'),
(4, 305, 'rayakandigital', '52', 1, 1, '2025-04-10 12:34:05', '2025-04-10 19:34:05'),
(9, 310, 'aw', '52', 3, 1, '2025-04-10 14:01:16', '2025-04-10 21:02:28'),
(10, 311, 'as', '67', 3, 1, '2025-04-10 14:16:45', '2025-04-10 23:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga_paket` varchar(100) NOT NULL,
  `masa_aktif` int(11) NOT NULL,
  `buku_tamu` int(11) NOT NULL,
  `kirim_whatsapp` int(11) NOT NULL,
  `tema_bebas` int(11) NOT NULL,
  `kirim_hadiah` int(11) NOT NULL,
  `import_datatamu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga_paket`, `masa_aktif`, `buku_tamu`, `kirim_whatsapp`, `tema_bebas`, `kirim_hadiah`, `import_datatamu`) VALUES
(1, 'Silver', '70000', 60, 0, 0, 0, 0, 0),
(2, 'Gold', '100000', 60, 0, 0, 1, 1, 0),
(3, 'Diamond', '150000', 60, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `bukti` varchar(200) DEFAULT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `va_number` varchar(200) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `harga` int(11) NOT NULL DEFAULT 0,
  `payment_type` varchar(200) NOT NULL,
  `transaction_status` varchar(100) NOT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `transaction_expired` datetime DEFAULT NULL,
  `biller_code` varchar(100) DEFAULT NULL,
  `instruction` text NOT NULL,
  `status_order` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_user`, `invoice`, `nama_lengkap`, `bukti`, `nama_bank`, `va_number`, `status`, `created_at`, `harga`, `payment_type`, `transaction_status`, `transaction_time`, `transaction_expired`, `biller_code`, `instruction`, `status_order`) VALUES
(1, 1, '2203183', 'hhahhahahha', '2202159.png', 'permata', '8778009735519160', 2, '2022-04-01 10:10:36', 100000, 'bank_transfer', 'expire', '2022-03-30 07:22:57', '2022-03-30 08:22:57', '', '[{\"title\":\"Internet Banking\",\"steps\":[\"Masuk ke Internet Banking BSI Anda\",\"Pilih menu <b>Pembayaran<\\/b>\",\"Pilih nomor rekening Anda\",\"Pilih <b>Jenis Pembayaran > Institusi<\\/b>\",\"Pada opsi Nama Institusi, pilih <b>9042 Win Pay<\\/b>\",\"Masukkan kode bayar (<b>164856525400<\\/b>)\",\"Klik tombol <b>Verifikasi<\\/b>\",\"Akan ditampikan detail transaksi, pastikan sudah sesuai\",\"Masukkan TAN & PIN Anda\",\"Tekan tombol <b>Submit<\\/b>\",\"Transaksi selesai, simpan bukti pembayaran Anda\"]},{\"title\":\"BSI Mobile\",\"steps\":[\"Masuk ke aplikasi BSI Mobile Anda\",\"Pilih menu <b>Bayar<\\/b>\",\"Pilih menu <b>Institusi<\\/b>\",\"Pada opsi Nama Institusi, pilih <b>9042 Win Pay<\\/b>\",\"Masukkan kode bayar (<b>164856525400<\\/b>)\",\"Klik <b>Selanjutnya<\\/b>\",\"Masukkan PIN Anda\",\"Klik <b>Selanjutnya<\\/b>\",\"Akan ditampikan detail transaksi, pastikan sudah sesuai\",\"Klik <b>Selanjutnya<\\/b>\",\"Transaksi selesai, simpan bukti pembayaran Anda\"]},{\"title\":\"ATM BSI\",\"steps\":[\"Datang ke ATM BSI\",\"Masukkan kartu dan PIN kartu Anda\",\"Pilih menu <b>Pembayaran<\\/b>\",\"Pilih <b>Institusi<\\/b>\",\"Masukkan kode institusi 9042 + Nomor Virtual Account Anda. Contoh: <b>9042164856525400<\\/b>\",\"Tekan tombol <b>Benar<\\/b>\",\"Akan ditampikan detail transaksi, pastikan sudah sesuai\",\"Tekan tombol <b>BENAR\\/YA<\\/b>\",\"Transaksi selesai, simpan bukti pembayaran Anda\"]}]', '1'),
(2, 303, '220430325', NULL, NULL, '', '', 2, '2022-04-01 10:13:48', 100000, '', '', NULL, NULL, NULL, '', '1'),
(3, 304, '220530490', NULL, NULL, '', '', 2, '2022-05-21 15:48:28', 100000, '', '', NULL, NULL, NULL, '', '1'),
(4, 305, '250430578', NULL, NULL, '', '', 0, '2025-04-10 12:34:05', 70000, '', '', NULL, NULL, NULL, '', '1'),
(9, 310, '250431012', NULL, NULL, '', '', 2, '2025-04-10 16:26:17', 150000, '', '', NULL, NULL, NULL, '', '1'),
(10, 311, '250431190', NULL, NULL, '', '', 2, '2025-04-10 16:26:11', 150000, '', '', NULL, NULL, NULL, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pengunjung` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `id_user`, `nama_pengunjung`, `addr`, `created_at`, `updated_at`) VALUES
(18, 304, 'Tamu Undangan', '2404:c0:5650::5e7:7b31', '2022-05-21 15:41:27', '2022-05-21 22:41:27'),
(19, 304, 'Tamu Undangan', '2404:c0:5650::5e7:7b31', '2022-05-21 15:48:59', '2022-05-21 22:48:59'),
(20, 305, 'Tamu Undangan', '::1', '2025-04-10 12:34:11', '2025-04-10 19:34:11'),
(21, 305, 'Tamu Undangan', '::1', '2025-04-10 12:39:07', '2025-04-10 19:39:07'),
(24, 310, 'Tamu Undangan', '::1', '2025-04-10 14:03:09', '2025-04-10 21:03:09'),
(25, 311, 'Ads', '::1', '2025-04-10 15:54:37', '2025-04-10 22:54:37'),
(26, 311, 'Ads', '::1', '2025-04-10 15:54:53', '2025-04-10 22:54:53'),
(27, 311, 'Ads', '::1', '2025-04-10 15:59:41', '2025-04-10 22:59:41'),
(28, 311, 'Ads', '::1', '2025-04-10 16:27:15', '2025-04-10 23:27:15'),
(29, 311, 'Ads', '::1', '2025-04-10 16:28:32', '2025-04-10 23:28:32'),
(30, 310, 'Tamu Undangan', '::1', '2025-04-10 19:58:19', '2025-04-11 02:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id_quote` int(11) NOT NULL,
  `isi_quote` text DEFAULT NULL,
  `sumber_quote` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id_quote`, `isi_quote`, `sumber_quote`, `id_user`) VALUES
(2, 'Tidak ada solusi yang lebih baik bagi dua insan yang saling mencintai di banding Pernikahan.', 'HR Ibnu Majah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_bank` varchar(200) DEFAULT NULL,
  `no_rekening` varchar(200) DEFAULT NULL,
  `nama_pemilik` varchar(200) DEFAULT NULL,
  `qrcode_bank` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `id_user`, `nama_bank`, `no_rekening`, `nama_pemilik`, `qrcode_bank`) VALUES
(170, 1, 'OVO', '0812345678910', 'Demo', 'qrcode3.png'),
(173, 310, 'ad', 'ad', 'ad', '');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sampul` int(11) NOT NULL,
  `mempelai` int(11) NOT NULL,
  `acara` int(11) NOT NULL,
  `komen` int(11) NOT NULL,
  `gallery` int(11) NOT NULL,
  `cerita` int(11) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `prokes` int(11) NOT NULL,
  `qrcode` int(11) NOT NULL,
  `hadiah` int(11) NOT NULL,
  `quote` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `id_user`, `sampul`, `mempelai`, `acara`, `komen`, `gallery`, `cerita`, `lokasi`, `prokes`, `qrcode`, `hadiah`, `quote`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-26 14:16:43', '2022-03-27 22:05:54'),
(2, 303, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, '2022-04-01 09:23:24', '2022-04-01 16:23:24'),
(3, 304, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '2022-05-21 15:41:22', '2022-05-21 22:41:22'),
(4, 305, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, '2025-04-10 12:34:05', '2025-04-10 19:34:05'),
(9, 310, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, '2025-04-10 14:01:16', '2025-04-10 21:02:45'),
(10, 311, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, '2025-04-10 14:16:45', '2025-04-10 21:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `harga` double NOT NULL,
  `img` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trial` int(11) NOT NULL,
  `aktif` int(11) NOT NULL,
  `host_email` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass_email` varchar(255) DEFAULT NULL,
  `no_wa` varchar(15) DEFAULT NULL,
  `pesan_wa` text DEFAULT NULL,
  `salam_pembuka` longtext DEFAULT NULL,
  `wa_gateway` enum('nusagateway','starsender','onesender') NOT NULL DEFAULT 'nusagateway',
  `token_wa` varchar(255) DEFAULT NULL,
  `salam_wa_atas` text NOT NULL,
  `salam_wa_bawah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `harga`, `img`, `created_at`, `trial`, `aktif`, `host_email`, `email`, `pass_email`, `no_wa`, `pesan_wa`, `salam_pembuka`, `wa_gateway`, `token_wa`, `salam_wa_atas`, `salam_wa_bawah`) VALUES
(1, 100000, 'bank.png', '2025-04-10 11:09:03', 2, 60, '', '', '', '62895349823366', 'Hello Admin Rayakan Digital, Saya Mau bertanya.', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh.\n\nDengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :', 'starsender', '2f6a625e06edf217a6a6527150f70c532e604770', 'Assalamualaikum Wr Wb.\nDengan segala kerendahan hati dan syukur atas Karunia Allah SWT.\nKami bermaksud mengundang Bapak/Ibu/Saudara(i) pada acara pernikahan kami.', 'Merupakan suatu kebahagiaan bagi Kami apabila Bapak/Ibu/Saudara(i) berkenan hadir untuk memberikan doa restu kepada kami.\nAtas kehadiran dan doa restunya kami ucapkan terimakasih.\n\nWassalamualaikum Wr Wb');

-- --------------------------------------------------------

--
-- Table structure for table `setting_pembayaran`
--

CREATE TABLE `setting_pembayaran` (
  `id_setting` int(11) NOT NULL,
  `metode_bayar` enum('manual','midtrans','tripay') NOT NULL,
  `bank_manual` varchar(100) DEFAULT NULL,
  `norek_manual` varchar(100) DEFAULT NULL,
  `nama_manual` varchar(100) DEFAULT NULL,
  `url_midtrans` varchar(200) DEFAULT NULL,
  `serverkey_midtrans` varchar(200) DEFAULT NULL,
  `clientkey_midtrans` varchar(200) DEFAULT NULL,
  `midtrans_production` varchar(10) DEFAULT 'false',
  `url_tripay` varchar(100) DEFAULT NULL,
  `apikey_tripay` varchar(100) DEFAULT NULL,
  `privatekey_tripay` varchar(100) DEFAULT NULL,
  `merchantcode_tripay` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_pembayaran`
--

INSERT INTO `setting_pembayaran` (`id_setting`, `metode_bayar`, `bank_manual`, `norek_manual`, `nama_manual`, `url_midtrans`, `serverkey_midtrans`, `clientkey_midtrans`, `midtrans_production`, `url_tripay`, `apikey_tripay`, `privatekey_tripay`, `merchantcode_tripay`) VALUES
(1, 'manual', 'BANK RAKYAT INDONESIA', '115601071458503', 'Mochammad Irfan Efendi', 'https://app.midtrans.com/snap/snap.js', '', '', 'true', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider_bukutamu`
--

CREATE TABLE `slider_bukutamu` (
  `id_slider` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_slider` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider_bukutamu`
--

INSERT INTO `slider_bukutamu` (`id_slider`, `id_user`, `nama_slider`) VALUES
(1, 1, 'slider1'),
(2, 1, 'slider2'),
(3, 1, 'slider3'),
(36, 1, 'slider4'),
(37, 1, 'slider5'),
(39, 311, 'slider1'),
(40, 311, 'slider2');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `nama_slug` varchar(255) NOT NULL,
  `alamat_tamu` varchar(255) NOT NULL,
  `alamat_slug` varchar(255) NOT NULL,
  `no_wa` varchar(100) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status_kirim` varchar(100) NOT NULL DEFAULT 'belum dikirim',
  `status` varchar(100) DEFAULT NULL,
  `waktu_hadir` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `nama_slug`, `alamat_tamu`, `alamat_slug`, `no_wa`, `qrcode`, `id_user`, `tgl_kirim`, `status_kirim`, `status`, `waktu_hadir`) VALUES
(1, 'Bagus Jumawan', 'bagus+jumawan', 'Demak, Jawa Tengah', 'demak+jawa+tengah', '089659687659', '9756540c94be8be6dfe5ed007cfc79e1', 1, '2022-04-01', 'terkirim', 'hadir', '2022-03-10 10:32:50'),
(2, 'Kadek Sila', 'kadek+sila', 'Bali, Indonesia', 'bali+indonesia', '082237972112', 'dc879db724c3dabe409a6905988db685', 1, '2021-08-17', 'terkirim', 'hadir', '2022-03-11 09:49:44'),
(9, 'Bayu Sutrisno', 'bayu+sutrisno', 'Demak, Jawa Tengah', 'demak+jawa+tengah', '089659687659', 'd0d47b4f15aba1d2f895ea0114d91cce', 1, '2021-08-02', 'terkirim', NULL, '2022-01-27 21:29:21'),
(10, 'Maulana Arifin', 'maulana+arifin', 'Demak, Jawa Tengah', 'demak+jawa+tengah', '089659687659', '649d6a20cf7ef33e53ec124f7714d042', 1, '2021-08-02', 'terkirim', NULL, '2022-01-27 21:29:21'),
(11, 'Ads', 'ads', 'Sad', 'sad', '6285784749728', 'e0c4743990a528b6e79833fd39dee01c', 311, '2025-04-23', 'belum dikirim', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tema_categories`
--

CREATE TABLE `tema_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tema_categories`
--

INSERT INTO `tema_categories` (`id`, `name`, `slug`) VALUES
(1, 'Mobile', 'mobile'),
(2, 'Slide', 'slide'),
(3, 'Scroll', 'scroll');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `ulasan` text DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testi`, `id_user`, `nama_lengkap`, `kota`, `provinsi`, `ulasan`, `status`) VALUES
(3, 1, 'Andra Leksmana', 'Gambir', 'Jakarta', 'Sangat keren dan menarik, proses pembuatannya cepat dan bisa custom sendiri', 2),
(4, 303, NULL, NULL, NULL, NULL, 0),
(5, 304, NULL, NULL, NULL, NULL, 0),
(6, 305, NULL, NULL, NULL, NULL, 0),
(11, 310, NULL, NULL, NULL, NULL, 0),
(12, 311, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `nama_theme` varchar(50) NOT NULL,
  `kode_theme` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `nama_theme`, `kode_theme`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'hwflower', 'A001', 1, '2020-07-26 13:23:40', '2022-02-18 15:58:22', 1),
(2, 'tealflower', 'A002', 1, '2020-07-26 13:23:40', '2022-02-18 15:58:22', 1),
(4, 'prettyflower', 'A004', 1, '2020-08-28 18:22:30', '2022-02-18 15:58:22', 1),
(5, 'blueroses', 'A005', 1, '2020-08-28 17:03:54', '2022-02-18 15:58:22', 1),
(6, 'redroses', 'A006', 1, '2020-08-28 17:04:08', '2022-02-18 15:58:22', 1),
(8, 'radiantyellow', 'A007', 1, '2020-08-28 19:56:29', '2022-02-18 15:58:22', 1),
(9, 'radiantdark', 'A009', 1, '2020-08-28 19:56:29', '2022-02-18 15:58:22', 1),
(44, 'purpleflower', 'A010', 1, '2021-07-04 02:03:44', '2022-02-18 15:58:22', 1),
(45, 'sketchflower', 'A011', 1, '2021-07-04 12:59:28', '2022-02-18 15:58:22', 1),
(49, 'beautiful-floral', 'A012', 1, '2021-09-17 23:52:39', '2022-02-18 16:00:23', 3),
(50, 'tapis', 'A013', 1, '2021-09-19 07:39:35', '2022-02-18 16:00:23', 2),
(51, 'rustic', 'A014', 1, '2021-09-20 04:46:10', '2022-02-18 16:00:23', 2),
(52, 'arabian', 'A015', 1, '2021-09-20 04:46:10', '2022-02-18 16:00:23', 3),
(53, 'jellyblack', 'A016', 1, '2021-09-20 04:46:28', '2022-02-18 16:00:23', 2),
(54, 'floral', 'A017', 1, '2021-09-20 04:46:55', '2022-02-18 16:00:23', 2),
(55, 'vintage-islamic', 'A018', 1, '2021-09-20 04:46:55', '2022-02-18 16:00:23', 2),
(59, 'islamic1', 'A019', 1, '2022-01-15 02:12:52', '2022-02-18 16:00:23', 3),
(60, 'watercolor1', 'A020', 1, '2022-01-15 02:12:52', '2022-02-18 16:00:23', 3),
(61, 'twelve', 'A021', 1, '2022-01-28 09:37:46', '2022-02-18 16:00:23', 3),
(63, 'mandala', 'A022', 1, '2022-02-17 04:21:17', '2022-03-24 09:30:55', 2),
(67, 'watercolor2', 'A026', 1, '2022-02-24 02:00:36', '2022-02-25 00:09:25', 3),
(68, 'watercolor3', 'A027', 1, '2022-02-24 02:02:36', '2022-02-25 00:14:54', 3),
(69, 'watercolor4', 'A028', 1, '2022-02-24 02:03:24', '2022-02-25 00:14:54', 3),
(70, 'watercolor5', 'A029', 1, '2022-02-24 02:04:10', '2022-02-25 00:14:54', 3);

-- --------------------------------------------------------

--
-- Table structure for table `themes_video`
--

CREATE TABLE `themes_video` (
  `id_theme` int(11) NOT NULL,
  `nama_tema` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `preview` varchar(200) NOT NULL,
  `url_video` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_unik` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `token` text DEFAULT NULL,
  `created_token` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hp`, `email`, `username`, `password`, `id_unik`, `created_at`, `token`, `created_token`) VALUES
(1, '089659687659', 'demo@gmail.com', 'Demo', 'bb90dcb0ceabfc8bf10c550f1ee95ee7', '2007155', '2020-07-26 14:16:42', '', '2022-01-09 03:35:18'),
(303, '089659687659', 'abgtua93@gmail.com', 'abgtua93@gmail.com', '446419aa4b2c2368f29d8298c1cf71a2', '220430325', '2022-04-01 09:23:23', NULL, NULL),
(304, '6282311168586', 'oppungcode@gmail.com', 'oppungcode@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '220530490', '2022-05-21 15:41:22', NULL, NULL),
(305, 'ax', 'admin@admin.admin', 'admin@admin.admin', '9cea1e2473aaf49955fa34faac95b3e7', '250430578', '2025-04-10 12:34:05', NULL, NULL),
(310, 'a', 'b@b', 'b@b', '0cc175b9c0f1b6a831c399e269772661', '250431012', '2025-04-10 14:01:16', NULL, NULL),
(311, 'a', 'c@c', 'c@c', '0cc175b9c0f1b6a831c399e269772661', '250431190', '2025-04-10 14:16:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `name`, `slug`) VALUES
(3, 'Minimalist', 'minimalist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mempelai`
--
ALTER TABLE `mempelai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id_quote`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_pembayaran`
--
ALTER TABLE `setting_pembayaran`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `slider_bukutamu`
--
ALTER TABLE `slider_bukutamu`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tema_categories`
--
ALTER TABLE `tema_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes_video`
--
ALTER TABLE `themes_video`
  ADD PRIMARY KEY (`id_theme`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459;

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mempelai`
--
ALTER TABLE `mempelai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id_quote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_pembayaran`
--
ALTER TABLE `setting_pembayaran`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_bukutamu`
--
ALTER TABLE `slider_bukutamu`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tema_categories`
--
ALTER TABLE `tema_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `themes_video`
--
ALTER TABLE `themes_video`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
