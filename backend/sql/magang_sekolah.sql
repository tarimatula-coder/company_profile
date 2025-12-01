-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2025 at 02:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_logo` text NOT NULL,
  `school_banner` varchar(200) NOT NULL,
  `school_tagline` varchar(255) NOT NULL,
  `school_description` text NOT NULL,
  `since` date NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `school_name`, `school_logo`, `school_banner`, `school_tagline`, `school_description`, `since`, `alamat`) VALUES
(15, 'Smkn 1 bangsri', '68a7f72bf06c5_logo.png', '68a7f7ae14432_banner.png', 'smkn 1 bangsri jaya -jaya', 'SMKN 1 Bangsri adalah Sekolah Menengah Kejuruan Negeri yang berlokasi di Kecamatan Bangsri, Kabupaten Jepara, Jawa Tengah. Sekolah ini dikenal sebagai salah satu SMK unggulan di Jepara dengan fokus pada pengembangan keterampilan, karakter, dan kedisiplinan siswa agar siap menghadapi dunia kerja maupun melanjutkan pendidikan tinggi.', '2025-08-22', 'JL. KH. Achmad Fauzan No. 17 Bangsri Jepara'),
(17, 'Smkn 1 bangsri', '68a7f7db90cf7_logo.png', '68a7f7db8de13_banner.png', 'SMK Bisa! SMK Hebat!', 'smkn 1 bangsri adalah sekolah yang bagus, hebat, dan luar biasa, tempat siswa belajar, berkreasi, dan meraih prestasi terbaik di bidang kejuruan.', '2025-08-22', 'JL. KH. Achmad Fauzan No. 17 Bangsri Jepara');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `winner` varchar(200) NOT NULL,
  `person` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `image`, `title`, `description`, `winner`, `person`) VALUES
(3, '1755521714.png', 'IT SOFTWARE', 'Kabupaten Jepara', 'juara 1', 'ANGGUN RASYA EVALDO'),
(4, '1755570925.png', 'DUTA OSIS 5 ANTI ', 'KABUPATEN JEPARA', 'juara 3', 'FABIAN MUHAMMAD YAHVA'),
(5, '1755521850.png', 'WEB DESIGN TECHNOLOGIES', ' Kabupaten Jepara', 'juara 2', 'Muhammad rifal prasetyo');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint NOT NULL,
  `announcement_title` varchar(255) NOT NULL,
  `announcement_image` text NOT NULL,
  `announcement_description` text NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `announcement_title`, `announcement_image`, `announcement_description`, `date`, `author`) VALUES
(2, 'SPMB JATENG 2025 RESMI DIBUKA! Saatnya wujudkan impianmu bersama SMA/SMK terbaik di Jawa Tengah, termasuk SMKN 1 Bangsri!  Bagi lulusan SMP/MTs/sederajat yang ingin melanjutkan pendidikan ke jenjang yang lebih tinggi.', '1755528765.png', 'SPMB Jawa Tengah 2025 resmi dibuka! 🌟 Saatnya kamu wujudkan impian dan masa depan cemerlang dengan bergabung di SMA/SMK terbaik di Jawa Tengah. Melalui jalur ini, kamu bisa memilih sekolah favoritmu, mengembangkan potensi diri, serta meraih prestasi untuk menggapai cita-cita. Jangan lewatkan kesempatan emas ini, karena langkah kecil hari ini akan menentukan kesuksesan besar di masa depan, Dengan mengikuti SPMB 2025, kamu tidak hanya akan mendapatkan pendidikan berkualitas, tetapi juga pengalaman belajar yang mendalam, keterampilan praktis, dan kesempatan meraih prestasi akademik maupun non-akademik. Setiap langkah yang kamu ambil hari ini akan menjadi fondasi bagi kesuksesan besar di masa depan.', '2025-08-15', 'Tim Jurnalistik eskasaba'),
(3, 'SMKN 1 Bangsri dengan bangga mengumumkan kelulusan siswa-siswi kelas XII tahun ajaran 2024/2025. Semoga keberhasilan ini menjadi langkah awal untuk meraih cita-cita yang lebih tinggi.', '1755528281.png', 'SMKN 1 Bangsri dengan penuh rasa syukur dan bangga mengumumkan kelulusan siswa-siswi kelas XII tahun ajaran 2024/2025. Kelulusan ini menjadi bukti kerja keras, semangat belajar, serta dukungan dari orang tua dan guru yang selalu mendampingi. Semoga pencapaian ini menjadi awal dari perjalanan baru menuju cita-cita yang lebih tinggi, serta mengantarkan para lulusan menjadi generasi yang berprestasi, berkarakter, dan siap menghadapi tantangan masa depan.', '2025-08-15', 'Tim Jurnalistik eskasaba'),
(4, 'Dalam rangka turut menghormati keberagaman budaya dan perayaan Hari Raya Waisak 2569 BE, kegiatan pembelajaran di sekolah akan diliburkan', '1755528557.png', 'Mari manfaatkan waktu libur ini dengan bijak. Jaga kesehatan, tetap semangat, dan sampai jumpa kembali di sekolah dengan semangat baru!', '2025-05-13', 'Tim Jurnalistik eskasaba');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `content`, `date`, `author`) VALUES
(8, '1755530389.png', 'angga! Tiga Siswa SMKN 1 Bangsri Melaju ke Grand Final Duta Anti Narkoba Kabupaten Jepara 2025', 'tiga siswa SMK Negeri 1 Bangsri kembali menunjukkan semangat dan dedikasi luar biasa melalui partisipasi mereka dalam ajang Grand Final Duta Anti Narkoba Kabupaten Jepara Tahun 2025.', '2025-08-04', 'Tim Jurnalistik eskasaba'),
(9, '1755530282.png', 'Sosialisasi Asesmen Nasional (AN) bagi Orang Tua/Wali Siswa SMK Negeri 1 Bangsri', 'SMK Negeri 1 Bangsri mengadakan kegiatan Sosialisasi Asesmen Nasional (AN) kepada orang tua/wali siswa yang anaknya terpilih mengikuti Asesmen Nasional Berbasis Komputer (ANBK). tahun 2025.', '2025-08-04', 'Tim Jurnalistik eskasaba'),
(10, '1755530470.png', 'Beralih Peran, Bu Santi Terus Menebar Inspirasi', 'Selasa, 29 Juli 2025, Suasana haru dan hangat menyelimuti keluarga besar SMK Negeri 1 Bangsri saat melepas salah satu sosok inspiratif, Ibu Susanti Ning Astuti,  dalam acara perpisahan yang digelar sebagai bentuk apresiasi atas pengabdian beliau. ', '2025-07-29', 'Tim Jurnalistik eskasaba'),
(15, '1755559154.png', 'Semarak Hari Anak Nasional 2025: SMKN 1 Bangsri Gelar Pertemuan Pagi Ceria', 'Dalam rangka memperingati Hari Anak Nasional (HAN) Tahun 2025, seluruh satuan pendidikan jenjang SMA, SMK, dan SLB diimbau untuk menyelenggarakan kegiatan Pertemuan Pagi Ceria secara serentak pada Rabu, 23 Juli 2025.', '2025-08-01', 'Tim Jurnalistik eskasaba'),
(16, '1755559285.png', 'Police Goes to School: Pesan Moral Kapolsek Bangsri untuk Pelajar SMK', 'Senin pagi ini terasa berbeda di SMK Negeri 1 Bangsri. Dalam rutinitas upacara bendera yang biasanya dipimpin oleh guru, kali ini suasana menjadi lebih khidmat dan penuh perhatian. Pembina upacara adalah Bapak Sukresno, perwakilan dari Kapolsek Bangsri, Kepolisian Resor Jepara.', '2025-08-01', 'Tim Jurnalistik eskasaba'),
(17, '1755559376.png', 'Kenali Jurusan, Siapkan Masa Depan: Semangat Hari Keempat MPLS SMK Negeri 1 Bangsri', 'Kamis, 17 Juli 2025 — Suasana penuh semangat dan antusiasme mewarnai puncak kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS) di SMK Negeri 1 Bangsri. Hari keempat ini menjadi momen penting yang dirancang untuk membekali peserta didik baru dengan wawasan awal seputar dunia kejuruan, sekaligus mempererat hubungan antara siswa dan lingkungan belajar barunya.', '2025-07-17', 'Tim Jurnalistik eskasaba'),
(18, '1755559633.png', 'MPLS Penuh Inspirasi: Karakter Tumbuh Lewat Aktivitas Seru dan Bermakna', 'Selasa, 15 Juli 2025 - Hari ini merupakan rangkaian kegiatan hari kedua Masa Pengenalan Lingkungan Sekolah (MPLS) di SMK Negeri 1 Bangsri. Mengusung tema “Membangun Karakter Kuat, Meraih Masa Depan Gemilang”, kegiatan dirancang tidak hanya untuk mengenalkan lingkungan sekolah, tetapi juga membentuk pribadi yang disiplin, tangguh, dan berkarakter.', '2025-07-15', 'Tim Jurnalistik eskasaba'),
(19, '1755559792.png', 'Outing Class SMPN 4 Kembang di SMKN 1 Bangsri: Menginspirasi Generasi Digital Melalui Kompetensi IT', 'Sebagai upaya meningkatkan kompetensi peserta didik di bidang teknologi informasi, SMP Negeri 4 Kembang melaksanakan kegiatan outing class ke SMK Negeri 1 Bangsri pada Rabu, 23 Juli 2025. Kegiatan ini merupakan bagian dari pelaksanaan program BOS Kinerja yang diterima oleh SMPN 4 Kembang, dengan tujuan utama membekali siswa dengan pengetahuan dan keterampilan digital dasar, termasuk pengenalan dunia coding.', '2025-07-23', 'Tim Jurnalistik eskasaba'),
(20, '1755560017.png', 'Semarak Pembukaan MPLS 2025 SMKN 1 Bangsri: Langkah Awal Menjadi Pelajar Hebat', 'SMK Negeri 1 Bangsri menggelar kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS) untuk siswa baru tahun ajaran 2025/2026 pada tanggal 14–16 Juli 2025. Suasana sekolah tampak semarak oleh antusiasme para siswa baru yang siap menapaki perjalanan pendidikan di lingkungan baru.', '2025-07-14', 'Tim Jurnalistik eskasaba'),
(21, '1755571294.png', 'IHT SMKN 1 Bangsri: Perkuat Sinkronisasi Kurikulum dan Pemanfaatan Teknologi AI', 'Workshop In House Training (IHT) kembali digelar di SMK Negeri 1 Bangsri sebagai wujud nyata komitmen sekolah dalam meningkatkan kompetensi dan profesionalisme guru. Kegiatan ini dilaksanakan pada Selasa, 8 Juli 2025, bertempat di Gedung Techno Park SMKN 1 Bangsri, dengan mengangkat tema strategis: “Sinkronisasi Kurikulum dengan Dunia Usaha dan Dunia Industri (DUDI), serta Pemanfaatan Teknologi Terkini dalam Pendidikan.” Tema ini mencerminkan semangat sekolah dalam menyelaraskan pendidikan vokasi dengan tuntutan dunia kerja serta mendorong integrasi teknologi dalam proses pembelajaran.', '2025-07-08', 'Tim Jurnalistik eskasaba'),
(22, '1755571424.png', 'Apel Pelepasan PKL 2025: SMK Negeri 1 Bangsri Lepas Siswa Menuju Dunia Nyata', 'SMK Negeri 1 Bangsri kembali mencatat momen penting dalam kalender pendidikannya: Apel Pelepasan Praktik Kerja Lapangan (PKL) bagi seluruh siswa  kelas XII. Kegiatan ini digelar pada Senin pagi, 30 Juni 2025, di Lapangan Upacara SMKN 1 Bangsri dan dipimpin langsung oleh Kepala Sekolah, Bapak Riyanto Dwi Utomo, S.Kom.', '2025-06-30', 'Tim Jurnalistik eskasaba'),
(23, '1755571556.png', 'Asportilas 2025 “Terbang Bebas Seperti Burung Elang, Gapai Mimpi Setinggi Harapan”', 'Dalam rangka menyegarkan kembali semangat siswa setelah menjalani kurang lebih satu bulan tugas proyek kejuruan, OSIS SMK Negeri 1 Bangsri menggelar kegiatan classmeeting bertajuk Asportilas 2025. Kegiatan ini berlangsung selama dua hari, yakni pada Selasa, 17 Juni 2025 dan Kamis, 19 Juni 2025, dengan tiga mata lomba yang penuh semangat dan kreativitas, yaitu lomba Kasti, E-sport Mobile Legend, dan lomba Baju Bata (Babat).', '2025-06-17', 'Tim Jurnalistik eskasaba'),
(24, '1755571656.png', 'Khidmat dan Bermakna, SMKN 1 Bangsri Rayakan Hari Lahir Pancasila 2025', 'Bangsri, 2 Juni 2025, SMK Negeri 1 Bangsri menyelenggarakan upacara bendera dalam rangka memperingati Hari Lahir Pancasila tahun 2025. Upacara yang dilaksanakan di lapangan sekolah ini diikuti oleh seluruh siswa kelas X dan XI, serta para guru dan tenaga kependidikan dengan penuh semangat dan kekhidmatan.', '2025-06-02', 'Tim Jurnalistik eskasaba'),
(25, '1755571741.png', 'SMKN 1 Bangsri Gelar Sosialisasi Kurikulum Kewirausahaan: Dorong Penguatan Kompetensi Guru Vokasi', 'Bangsri – SMK Negeri 1 Bangsri menyelenggarakan kegiatan sosialisasi bertajuk Pendampingan Peningkatan Kompetensi GTK SMK Cabang Dinas Wilayah II Dinas Pendidikan dan Kebudayaan Provinsi Jawa Tengah pada Selasa, 27 Mei 2025. Kegiatan yang dilaksanakan di Techno Park SMKN 1 Bangsri ini diikuti oleh guru-guru dari berbagai program keahlian sebagai bagian dari upaya meningkatkan kompetensi pendidik vokasi dalam menghadapi tantangan zaman.', '2025-05-27', 'Tim Jurnalistik eskasaba'),
(26, '1755571834.png', 'Bangkit Bersama, Wujudkan Indonesia Kuat: Peringatan Hari Kebangkitan Nasional ke-117 di SMKN 1 Bangsri', 'Peringatan Hari Kebangkitan Nasional ke-117 tahun 2025 menjadi momen penting untuk merefleksikan kembali semangat perjuangan para pahlawan dan memperkuat tekad membangun bangsa. Semangat tersebut tercermin dalam pelaksanaan upacara bendera yang berlangsung khidmat di SMKN 1 Bangsri. Kegiatan ini menjadi sarana untuk menanamkan nilai-nilai nasionalisme kepada peserta didik dan tenaga pendidik.', '2025-08-20', 'Tim Jurnalistik eskasaba'),
(27, '1755571915.png', 'Selamat & Sukses! Enam Siswa SMKN 1 Bangsri Dilantik dalam Forum OSIS Jepara ', 'SMK Negeri 1 Bangsri turut serta dalam Jepara Leadership Conference (JLC) 2025 yang digelar pada Minggu, 29 Juni 2025, bertempat di SMA Negeri 1 Mayong, mulai pukul 08.30 WIB hingga selesai.     Kegiatan ini bukan yang pertama kali dilaksanakan di Jepara. Bahkan, SMKN 1 Bangsri pernah menjadi tuan rumah pada penyelenggaraan sebelumnya.', '2025-06-29', 'Tim Jurnalistik eskasaba'),
(28, '1755572004.png', 'Garuda Berprestasi: Siswa SMKN 1 Bangsri Harumkan Nama Sekolah di Ajang Pramuka Jepara', 'Prestasi membanggakan kembali diraih oleh siswa-siswi SMK Negeri 1 Bangsri dalam ajang Lomba Pramuka Garuda Berprestasi tingkat Kabupaten Jepara. Kegiatan ini berlangsung pada Sabtu, 28 Juni 2025 di Sanggar Pramuka Kwarcab Jepara, dengan diikuti oleh peserta dari berbagai satuan pendidikan se-Kabupaten Jepara.', '2025-06-28', 'Tim Jurnalistik eskasaba'),
(29, '1755572128.png', 'SMKN 1 Bangsri Sosialisasikan Program Rumah Rakyat dan Beasiswa Luar Negeri Sesuai Edaran Dinas Pendidikan Jateng', 'Senin, 5 Mei 2025 – SMKN 1 Bangsri melaksanakan kegiatan sosialisasi program launching Rumah Rakyat dan Program Beasiswa Luar Negeri yang diluncurkan oleh Pemerintah Provinsi Jawa Tengah. Sosialisasi ini merupakan tindak lanjut dari Surat Edaran Dinas Pendidikan dan Kebudayaan Provinsi Jawa Tengah Nomor 400.3/82/2025 tertanggal 4 Mei 2025. ', '2025-05-05', 'Tim Jurnalistik eskasaba'),
(30, '1755572684.png', 'SMKN 1 Bangsri Gelar Koordinasi Tim Humas, , dan Ekstrakurikuler: Perkuat Citra Sekolah melalui Media Sosial', 'Senin, 5 Mei 2025 — SMK Negeri 1 Bangsri terus menunjukkan komitmennya dalam memperkuat citra positif sekolah melalui media sosial. Salah satu langkah strategisnya diwujudkan dalam rapat koordinasi yang melibatkan Tim Humas, Bidang Kesiswaan, serta perwakilan pengelola media sosial dari setiap organisasi ekstrakurikuler.', '2025-05-05', 'Tim Jurnalistik eskasaba'),
(31, '1755572765.png', 'Selamat! SMKN 1 Bangsri Raih Juara Umum II pada Pekan Olahraga SMK XI Kabupaten Jepara Tahun 2025', 'Pekan Olahraga (POR) Pelajar adalah ajang multievent tahunan yang diselenggarakan oleh Dinas Kepemudaan dan Olahraga Kabupaten Jepara sebagai upaya menjaring bibit-bibit atlet berprestasi sekaligus menumbuhkan semangat olahraga di kalangan pelajar. Untuk tingkat SMK, POR tahun ini kembali digelar dengan penuh semangat dan antusiasme.', '2025-04-18', 'Tim Jurnalistik eskasaba'),
(32, '1755573097.png', 'Pindah Tugas Bukan Akhir, Namun Awal Pengabdian di Tempat Baru: Selamat Jalan, Bapak Arif Sugiyarto!', 'Suasana haru dan kehangatan menyelimuti SMKN 1 Bangsri pada Rabu, 30 April 2025. Dalam sebuah acara pelepasan sederhana yang dihadiri oleh seluruh guru dan karyawan, keluarga besar sekolah melepas Bapak Arif Sugiyarto, S. Pd., guru Bahasa Jawa yang akan melanjutkan tugasnya di tempat baru.', '2025-04-30', 'Tim Jurnalistik eskasaba'),
(33, '1755573168.png', 'Hardiknas 2025: SMK N 1 Bangsri Teguhkan Komitmen Pendidikan Bermutu', 'Bangsri, 2 Mei 2025 – SMK Negeri 1 Bangsri menggelar upacara bendera dalam rangka memperingati Hari Pendidikan Nasional (Hardiknas) tahun 2025. Upacara ini mengusung tema nasional “Partisipasi Semesta Mewujudkan Pendidikan Bermutu untuk Semua” yang ditetapkan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi. Peringatan ini menjadi momen penting untuk menghormati jasa para pahlawan pendidikan serta meneguhkan semangat kolektif dalam mencerdaskan kehidupan bangsa.', '2025-05-02', 'Tim Jurnalistik eskasaba'),
(34, '1755573265.png', 'Kolaborasi Hebat! P5 Bertema Kearifan Lokal Bersama BKK SMKN 1 Bangsri: Merajut Budaya, Membuka Peluang Karier', 'SMK Negeri 1 Bangsri terus menunjukkan komitmennya dalam membentuk pelajar berkarakter dan berdaya saing melalui Projek Penguatan Profil Pelajar Pancasila (P5). Kali ini, tema Kearifan Lokal dikemas melalui berbagai kegiatan kolaboratif yang menggandeng Bursa Kerja Khusus (BKK), termasuk workshop memasak, pelatihan packaging, dan digital marketing.', '2025-04-22', 'Tim Jurnalistik eskasaba'),
(35, '1755573363.png', 'Uji Kompetensi Keahlian (UKK) SMK Negeri 1 Bangsri Tahun 2025: Gerbang Menuju Dunia Kerja dan Masa Depan Gemilang', 'Menjelang akhir tahun ajaran, SMK Negeri 1 Bangsri menyelenggarakan salah satu agenda penting dalam proses kelulusan siswa kelas XII, yaitu Uji Kompetensi Keahlian (UKK). UKK merupakan bentuk evaluasi praktik yang bertujuan untuk mengukur penguasaan keterampilan dan pengetahuan siswa di bidang keahlian masing-masing. Selama tiga tahun menempuh pendidikan, siswa tidak hanya dibekali teori, tetapi juga praktik langsung yang relevan dengan kebutuhan industri. Oleh karena itu, pelaksanaan UKK menjadi momen krusial bagi siswa untuk membuktikan kemampuannya dan bersiap menghadapi dunia kerja nyata.', '2025-02-25', 'Tim Jurnalistik eskasaba'),
(36, '1755573476.png', 'Belajar dari Ahlinya! Keseruan Beauty & Barber Class di SMKN 1 Bangsri', 'SMK Negeri 1 Bangsri terus berkomitmen membekali siswanya dengan keterampilan profesional yang relevan dengan dunia kerja. Pada Rabu, 19 Maret 2025, melalui Projek Penguatan Profil Pelajar Pancasila (P5) dan didukung oleh Bursa Kerja Khusus (BKK), sekolah mengadakan Beauty & Barber Class bagi siswa kelas XII.', '2025-03-19', 'Tim Jurnalistik eskasaba'),
(37, '1755573583.png', 'PESANTREN KILAT RAMADHAN 1446 H: \"Jadikan Harmoni Ramadhan untuk Merangkul Keanekaragaman dalam Satu Tujuan\"', 'Pesantren Kilat merupakan kegiatan keagamaan yang diselenggarakan dalam waktu singkat selama bulan Ramadhan dengan tujuan meningkatkan keimanan dan ketakwaan, memperdalam pemahaman ajaran Islam, membentuk akhlak yang mulia, serta membiasakan diri dengan aktivitas positif yang mencerminkan nilai-nilai religius.', '2025-03-18', 'Tim Jurnalistik eskasaba'),
(38, '1755573658.png', 'SMKN 1 Bangsri Juara Umum! Passus Wira Adhi Dhaya Borong 8 Piala di LKBB VIII', 'Jepara, 26 Februari 2025 – Prestasi membanggakan kembali ditorehkan oleh Tim Passus Wira Adhi Dhaya SMKN 1 Bangsri dalam ajang Lomba Ketangkasan Baris-Berbaris (LKBB) Bela Negara Variasi VIII 2025 tingkat SMA/SMK se-Kabupaten Jepara. Dengan semangat juang tinggi dan latihan disiplin, tim ini sukses meraih Juara 1 Umum dan memborong 8 piala dalam berbagai kategori bergengsi.', '2025-02-26', 'Tim Jurnalistik eskasaba');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `img` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `link` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `img`, `contact`, `link`) VALUES
(2, '1755833121.png', 'Website resmi smkn 1 bangsri', 'https://smkn1bangsri.sch.id/'),
(3, '1755833145.png', 'alamat sekolah', 'https://maps.app.goo.gl/TpyWoFX7M5sJmpgRA?g_st=aw');

-- --------------------------------------------------------

--
-- Table structure for table `cooperations`
--

CREATE TABLE `cooperations` (
  `id` bigint NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cooperations`
--

INSERT INTO `cooperations` (`id`, `image`, `link`) VALUES
(1, '1755226560.png', 'https://alfamart.co.id/'),
(3, '1755522182.png', 'https://matahari.com/'),
(5, '1755226778.png', 'https://can.co.id/'),
(6, '1755226745.png', 'https://toploker.com/'),
(8, '1755226846.png', 'https://crocodic.com/');

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` bigint NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `image`, `title`, `description`) VALUES
(1, '1755844009.png', 'Pasus wira adhi dhaya', 'Passus (Pasukan Khusus) Wira Adhi Dhaya SMK Negeri 1 Bangsri'),
(2, '1755227495.png', 'Jurnalistik anwa sanskara', 'Jurnalistik Anwa Sanskara adalah ekstrakurikuler yang bergerak di bidang literasi, komunikasi, dan media digital.'),
(3, '1755227564.png', 'Pmr wira sandya adhimukti', 'Palang Merah Remaja (PMR) Wira adalah salah satu jenjang dari PMR yang berada di tingkat sekolah menengah atas (SMA/SMK/sederajat). '),
(4, '1755227632.png', 'Pencinta alam natha mandhala', 'Natha Mandhala adalah organisasi pencinta alam intern yang berbadan otonom dibawah naungan SMK N 1 Bangsri yang bergerak di bidang kepencintaalaman. '),
(5, '1755227722.png', 'Pencak silat cempaka putih', 'Mengembangkan pendidikan mental dan spiritual, membantu membentuk kepribadian yang positif, seperti tenggang rasa, disiplin, dan ksatria'),
(6, '1755227781.png', 'Futsal palawa', 'Diambil dari bahasa sansekerta yang artinya Bersemi (tumbuh). Harapanya futsal skansaba bisa tumbuh dan berkembang meraih prestasi.'),
(7, '1755440440.png', 'Basketball', 'Bola basket adalah olahraga yang dimainkan oleh dua tim, masing-masing terdiri dari lima pemain. Tujuan permainan ini adalah mencetak poin dengan memasukkan bola ke dalam keranjang lawan. '),
(8, '1755440959.png', 'Badminton', 'Ekstrakurikuler Badminton SMKN 1 Bangsri merupakan wadah bagi siswa yang memiliki minat dan bakat dalam olahraga badminton. '),
(9, '1755441089.png', 'Webdev Taksan Nawasena', 'Webdev Taksan Nawasena adalah tim/layanan pengembangan web yang berfokus pada pembuatan website modern, responsif, dan fungsional untuk mendukung kebutuhan bisnis maupun personal.'),
(10, '1755441183.png', 'Pramuka Putri Dewi Sartika', ' Ekstrakurikuler Pramuka SMKN 1 Bangsri adalah salah satu kegiatan yang bertujuan untuk membentuk karakter, kedisiplinan, dan rasa cinta tanah air. '),
(11, '1755441297.png', 'Tari Arum SekarSaba', 'Melatih ritme dan gerakan dengan penuh penghayatan melalui tarian.'),
(12, '1755441362.png', 'Ikatan Remaja Masjid (IRMAS)', 'IRMAS (Ikatan Remaja Masjid) adalah organisasi remaja yang berfokus pada kegiatan keagamaan, sosial, dan pembinaan karakter di lingkungan sekolah.'),
(13, '1755441443.png', 'Hand Ball', 'Handball adalah olahraga tim yang membutuhkan bola untuk dimainkan ditangan, di mana dua tim berusaha mencetak gol dengan melempar bola ke gawang lawan. '),
(14, '1755441539.png', 'Organisasi Siswa Intra Sekolah', 'OSIS SMK Negeri 1 Bangsri merupakan organisasi siswa yang berperan penting dalam meningkatkan semangat belajar dan kreativitas siswa. '),
(15, '1755441714.png', 'Pramuka kh.ahmad fauzan', 'Ekstrakurikuler Pramuka SMKN 1 Bangsri adalah salah satu kegiatan yang bertujuan untuk membentuk karakter, kedisiplinan, dan rasa cinta tanah air. ');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `description`) VALUES
(6, '1755526573.png', 'Karnaval desa bangsri'),
(13, '1755526101.png', 'keseruan classmeeting eskasaba tahun pelajaran 2023-2024'),
(14, '1755526437.png', 'kartini masa kini, smkn 1 Bangsri gaungkan semangat emansipasi dan kreativitas'),
(15, '1755526695.png', 'Gelar karya p5 smkn 1 bangsri'),
(16, '1755527065.png', 'membangun minat menulis siswa smkn 1 Bangsri menguasai seni jurnalistik di era digital');

-- --------------------------------------------------------

--
-- Table structure for table `headmasters`
--

CREATE TABLE `headmasters` (
  `id` bigint NOT NULL,
  `headmaster_name` varchar(255) NOT NULL,
  `headmaster_photo` text NOT NULL,
  `headmaster_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `headmasters`
--

INSERT INTO `headmasters` (`id`, `headmaster_name`, `headmaster_photo`, `headmaster_description`) VALUES
(5, 'Riyanto Dwi Utomo, S.Kom', '1755424167.png', 'Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya, sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan. Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita. Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman. Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin, sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif, kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi SMK NEGERI 1 BANGSRI, sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` bigint NOT NULL,
  `major_name` varchar(255) NOT NULL,
  `major_image` text NOT NULL,
  `major_description` text NOT NULL,
  `head` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `major_name`, `major_image`, `major_description`, `head`) VALUES
(6, 'To (Teknik Otomotif)', '1756173472.png', 'Mencetak siswa yang trampil di bidang teknik & bisnis sepeda motor, Menyiapkan lulusan yang kompetitif di industri otomotif, Siap membuka usaha di bidang mechanical sepeda motor....', 'Pak johan'),
(7, 'PPLG (Pengembangan Perangkat Lunak dan Gim)', '1756173643.png', 'Mencetak programer handal, jujur dan terpercaya, Membekali siswa dengan design grafis, web development, dan teknisi handphone. Siap terjun di dunia enterpreneur bidang komputer dan handphone....', 'pak iwan safrudin'),
(8, 'MPLB(Manajemen Perkantoran dan Layanan Bisnis)', '1756173677.png', 'Membekali siswa dengan skill office administration yang handal, Menciptakan lulusan yang siap terjun di bidang perkantoran, Mencetak siswa menjadi profesional administration yang terpercaya.....', 'Pak tala'),
(9, 'AKL(Akuntansi dan Keuangan Lembaga)', '1756173747.png', 'Mencetak lulusan dengan skill di bidang accounting yang terpercaya, Membekali siswa dengan ketrampilan pengelolaan keuangan baik di perusahaan maupun instansi pemerintahan, Menyiapkan generasi yang siap terjun di dunia kerja dengan keahlian di bidang akuntansi yang memadai......', 'Pak mutaqqim'),
(10, 'PM(Pemasaran)', '1756173787.png', 'Mencetak siswa dengan kemampuan bidang marketing yang handal, Menciptakan lulusan yang cerdas, inovatif dan kompetitif di dunia industri marketing, Menyiapkan lulusan dengan skill enterpreneur yang berkualitas......', 'Pak faris');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `message`) VALUES
(11, 'Tari Matul Aslamiyah', 'tarimatula@gmail.com', '082335645804', 'aslamiyahhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int NOT NULL,
  `icon` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `title`, `link_url`) VALUES
(7, '1755500591.png', 'Youtube', 'https://www.youtube.com/c/SMKN1BANGSRI/videos'),
(11, '1754969045.png', 'tiktok', 'https://www.tiktok.com/@smkn1bangsri.official?is_from_webapp=1&sender_device=pc'),
(12, '1754967457.png', 'istagram', 'https://www.instagram.com/smkn1bangsri.official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_photo` text NOT NULL,
  `teacher_major` varchar(255) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `teacher_photo`, `teacher_major`, `gender`) VALUES
(4, ' Iwan Safrudin, S.Kom', '1755749502.png', 'Pemrograman', 'Laki-laki'),
(5, ' Muhammad abdul latif', '1755749595.png', 'Internet Of Things (IOT) & Mobile App', 'Laki-laki'),
(6, 'M. Ni\'amir Rohman', '1755750091.png', 'Pendidikan Agama Islam (PAI)', 'Laki-laki'),
(7, 'DANI TRI SETIYADI, S.Pd', '1755750119.png', 'Pjoka', 'Laki-laki'),
(8, 'Anita Ika Widowati', '1755750155.png', 'B.jawa', 'perempuan'),
(9, 'Budi Kurniawan', '1755750356.png', 'Sejarah', 'Laki-laki'),
(10, 'Susanti Ning Astuti', '1755750381.png', 'Informatika', 'perempuan'),
(11, 'Mustari', '1755750405.png', ' pajak dan ekonomi', 'perempuan'),
(12, 'Arif Sugiyarto', '1755750436.png', 'B.jawa', 'Laki-laki'),
(13, 'Muhammad Tsiqotuddin, S.Pd.I', '1755750465.png', 'Pendidikan Agama Islam (PAI)', 'Laki-laki'),
(14, 'AHMAD ARIF JOHAN', '1755750490.png', 'Guru otomotif', 'Laki-laki'),
(15, 'AHMAD ISLAH TAMIMI, S. Pd.', '1755750510.png', 'Pjoka', 'Laki-laki'),
(16, 'Nur Kasih Fatmawati', '1755750535.png', 'Ipas(ipa, ips)', 'Laki-laki'),
(17, 'SITTATUR RIFAINI', '1755750567.png', 'B.inggris', 'Perempuan'),
(18, 'Devitta Nia Wulandari', '1755750624.png', 'B.indonesia', 'Perempuan'),
(19, 'Indah Purnama Sari A, S.Pd', '1755750653.png', 'Matematika', 'Perempuan'),
(20, 'Rima Ariona Nur Awalia, S.Kom', '1755750675.png', 'Database(basis data)', 'Perempuan'),
(21, 'MUTTAQIN, S.Pd.', '1755750698.png', 'AKL', 'Laki-laki'),
(22, 'ABDULLAH AZZAM AL HAQQONI', '1755750754.png', 'RPL(wordpress)', 'Laki-laki'),
(23, 'Dwi Agung Suhartono, S.T', '1755750788.png', 'RPL(Desain)', 'Laki-laki'),
(24, 'Abdul Qohhar, S.Psi', '1755750832.png', 'Guru Bk', 'Laki-laki'),
(25, 'Tala Septa Albian Yahya', '1755750977.png', 'Mplb', 'Laki-laki'),
(26, 'Ika Heni Wahyuningsih, S.Pd', '1755759385.png', 'PM', 'perempuan'),
(27, 'DIAN AFRIANTI', '1755759418.png', 'MPLB', 'Perempuan'),
(28, 'DJOKO SANTOSA', '1755759461.png', 'Matematika (AKL)', 'Laki-laki'),
(29, 'Almu\'idul \'Afwan, S.Pd.', '1755759486.png', 'TO', 'Laki-laki'),
(30, 'Eko Siswanto', '1755759522.png', 'RPL(informatika kls X)', 'Laki-laki'),
(31, 'Ahmad Wildan', '1755759545.png', 'TO', 'Laki-laki'),
(32, 'Anugerah Sinung Prasetyo, S.Pd', '1755759569.png', 'Seni budaya', 'Laki-laki'),
(33, 'Muhammad Syukurillah S.Pd', '1755759594.png', 'PJOKA', 'Laki-laki'),
(34, 'Triana kartikasari, S.Pd', '1755759624.png', 'PPKN', 'perempuan'),
(35, 'Rosma azizah', '1755759653.png', 'Pendidikan Agama Islam (PAI)', 'perempuan'),
(36, 'Zulfan Ade Setiawan', '1755759675.png', 'B.inggris', 'Laki-laki'),
(37, 'Muhammad Faris Priyoga, S.Pd.', '1755759698.png', 'PM', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `status`, `message`, `image`) VALUES
(1, 'diana', 'pelajar', '\"Saya belajar banyak tentang bahasa pemograman. Terima kasih kepada Bapak/Ibu guru. Semoga SMKN 1 Bangsri semakin kreatif dan berprestasi.\"', '1756003067.png'),
(2, 'megan', 'pelajar', '\"Saya belajar banyak tentang Akuntansi dan Keuangan Lembaga. Terima kasih kepada Bapak/Ibu guru. Semoga SMKN 1 Bangsri semakin kreatif dan berprestasi.\"', '1755529432.png'),
(3, 'Tari Matul Aslamiyah', 'pelajar', '\"Pengalaman belajar di SMKN 1 Bangsri sangat menyenangkan dan menambah skill saya untuk bekerja.\"', '1755503371.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(11, 'Tari Matul Aslamiyah', 'aslamiyah@gmail.com', '$2y$10$pFdB0C7DlQeJU5kW/ddFSutGBHKKUz1y7wk3OVbF4FAyMWHvjQbYS'),
(12, 'Tari Matul Aslamiyah', 'tarimatula@gmail.com', '$2y$10$sOAaW6hHq8xTjC3IWxMD4O0dPRD9twoW9xn9luGDXIU35fuXJhY2S');

-- --------------------------------------------------------

--
-- Table structure for table `visi_missions`
--

CREATE TABLE `visi_missions` (
  `id` bigint NOT NULL,
  `category` enum('visi','misi') NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visi_missions`
--

INSERT INTO `visi_missions` (`id`, `category`, `text`) VALUES
(3, 'visi', 'Terwujudnya SMK yang mampu menciptakan tamatan yang cerdas produktif kompetitif bertaqwa serta berakhlaq mulia'),
(4, 'misi', 'Melaksanakan pembelajaran yang bertaraf international berbasis keunggulan seni dan budaya Menjalin kerjasama dengan Dunia Usaha / Dunia Industri dan Stakeholder Mewujudkan wawasan wiyata mandala dan meningkatkan citra Sekolah Menengah Kejuruan Menghasilkan tamatan yang cerdas produktif bertaqwa dan berakhlak mulia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cooperations`
--
ALTER TABLE `cooperations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headmasters`
--
ALTER TABLE `headmasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_missions`
--
ALTER TABLE `visi_missions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cooperations`
--
ALTER TABLE `cooperations`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `headmasters`
--
ALTER TABLE `headmasters`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `visi_missions`
--
ALTER TABLE `visi_missions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
