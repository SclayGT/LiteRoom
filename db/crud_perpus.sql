-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 10:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_11_25_085833_create_tambah_bukus_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambah_bukus`
--

CREATE TABLE `tambah_bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `genre` enum('Roman','Horor','Klasik','Puisi','Spritual','Fantasi') NOT NULL,
  `link` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `vote` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tambah_bukus`
--

INSERT INTO `tambah_bukus` (`id`, `title`, `thumbnail`, `deskripsi`, `genre`, `link`, `view`, `chapter`, `vote`, `author`, `date`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Warning:Pyhsical Distancing! [COMPLETED]', 'uv1lB0q4lAtehRD74MgI4F3IwzwqQ5-metaMjE0NjgzNzg1LTI1Ni1rOTQ2MjM3LmpwZw==-.jpg', '<p>[CHAPTER MASIH LENGKAP, EXTRA CHAPTER TERSEDIA DI KARYAKARSA]<br><br>Sembari menunggu jadwal wisuda, Sabrina memutuskan menerima tawaran bekerja sementara di Event Planner startup milik seniornya di kampus.<br><br>Tentu saja, dia nggak berharap banyak.<br><br>Berurusan tiap hari dengan Bang Zane yang menyebalkan, siapa juga yang betah?<br><br>Sayangnya ... pandemi berkata lain.<br><br>Jika rencananya paling lama hanya bekerja selama tiga bulan, sekarang dia bukan saja harus mengulur-ulur durasi menjadi bawahan sang bos kampret, tapi juga jadi salah satu teman karantinanya ... entah sampai kapan</p>', 'Roman', 'https://www.wattpad.com/story/214683785-warning-physical-distancing-completed', 19572368, '84/84', '1850066', 'Kaggrenn', '6 nov 2021', 'COMPLETED', '2024-01-16 07:05:55', '2024-01-16 07:27:48'),
(10, 'KIBLAT CINTA', 'VX3j7IibF5Xbulq62fUUwlWHjoCLL1-metaMzU0NTE5ODY1LTUxMi1rNzY5MzI0LmpwZw==-.jpg', '<p>Bagaimana jika gadis bar-bar yang tak tau aturan dinikahkan diam-diam oleh keluarganya?</p><p><br></p><p>...</p><p><br></p><p>Zhafira Ayrania Azka Madeena namanya, gadis yang tak tau aturan, pecicilan dan bar-bar pastinya, mau tak mau harus memboyong dunia luarnya untuk pindah ke dalam dunia pesantren karena kesalahan yang ia buat, tanpa ia tahu bahwa dirinya telah menjadi istri putra sulung pemilik pesantren itu sendiri yang merupakan sahabat dari ayahnya.</p><p><br></p><p>Gus Muhammad Rayyan Al-Hafidz, seorang gus yang katanya dingin, galak dan suka menghukum, jangan lupakan parasnya yang membuat siapapun oleng karena pesonanya.</p><p><br></p><p>Dalam dunia pesantren, perihal perjodohan sudah menjadi hal tabu di masyarakat.</p><p><br></p><p>Dua orang dengan karakter yang berbeda, apakah keduanya mampu merajut asmara dengan kasih sayang? Apakah Gus Rayyan bisa mengimbangi kelakuan absurd istrinya?</p><p><br></p><p>...</p><p><br></p><p>Uwuphobia dilarang mampir‼️</p><p><br></p><p><br></p><p>Alangkah baiknya sebelum baca follow dulu, biar berkah mwehehe :D</p><p><br></p><p><br></p><p>⚠️ CERITA INI MURNI KARANGAN SENDIRI, PLAGIAT JAUH-JAUH ⚠️</p><p><br></p><p>...</p><p><br></p><p>Happy reading💗</p><p><br></p>', 'Roman', 'https://www.wattpad.com/story/354519865-kiblat-cinta', 2284731, '43/?', '116725', 'awaliarrahman', '24 oct 2023', 'ONGOING', '2024-01-16 07:34:15', '2024-01-16 07:34:15'),
(11, 'AGHARNA (Sang Bulan)', 'tcoHkQG9tvUuHM79za1Mc9y2yAXXid-metaMjg2NDQ5MDQzLTUxMi1rNTIyMTExLmpwZw==-.jpg', '<p>Dimulai dari rasa penasaran Alora dengan teman kelasnya yang sangat misterius, semua orang menyukai cowok itu termasuk cewek-cewek di kampus, tapi tidak dengan Alora. Menurutnya, ada yang tidak beres dengan teman kelasnya tersebut.</p><p><br></p><p>Rasa penasaran yang membuat Alora menyelidiki latar belakangnya dan berakhir penyesalan. Dia menyesal telah mengetahui rahasia dari cowok yang bernama AGHARNA.</p><p><br></p><p>\"Lo udah tau gue siapa, Alora?\" tanya cowok itu tepat di telinga Alora hingga gadis itu merinding.</p><p><br></p><p>\"Lo bukan manusia!\" teriak Alora ketakutan.</p><p><br></p><p>\"Diam itu emas Alora, rasa penasaran bisa membunuh lo kapan aja. Dan sekarang rasa penasaran lo udah tuntas. Sekarang giliran gue yang penasaran sama lo,\" tawa Agharna pecah seakan memenuhi seluruh ruangan. Tawa yang begitu menyeramkan hingga Alora menangis karena menyesal.</p><p><br></p><p>*<strong>*</strong>*</p><p>Kira-kira, rahasia apa yang diketahui Alora dari sosok Agharna?</p><p>Mengapa semua orang menyukainya?</p><p>Apakah dia sangat tampan?</p><p>Penasaran?</p><p><br></p><p>So, jangan lupa masukin ke perpus kalian.</p><p>Selamat membaca. Komen, Vote and bagikan ke teman kamu cerita ini.</p><p><br></p><p>start : 22 Desember 2021</p><p>finish :</p><p><br></p><p>#1 Horor 26 Mei 2022</p><p>#1 Psikopat 26 Mei 2022</p><p>#1 Alora 26 Mei 2022</p><p>#1 fiksi penggemar 29 Mei 2022</p><p>#1 Thriller 29 Mei 2022</p><p>#1 luka 21 Juni 2022</p><p><br></p><p>*<strong>*</strong>*</p><p>Kira-kira, rahasia apa yang diketahui Alora dari sosok Agharna?</p><p>Mengapa semua orang menyukainya?</p><p>Apakah dia sangat tampan?</p><p>Penasaran?</p><p><br></p><p>So, jangan lupa masukin ke perpus kalian.</p><p>Selamat membaca. Komen, Vote and bagikan ke teman kamu cerita ini.</p><p><br></p><p>start : 22 Desember 2021</p><p>finish :</p>', 'Horor', 'https://www.wattpad.com/story/286449043-agharna-sang-bulan', 4345527, '73/?', '480023', 'saniyyahputrisaid', '22 Desember 2021', 'ONGOING', '2024-01-16 07:40:19', '2024-01-16 07:40:19'),
(12, 'Go Away Ghost! [COMPLETED]', '94iV0Q3HyYmIshAKZ2642gpk73AxVh-metaMjY5MTM4NTUyLTUxMi1rMjg5MzkuanBn-.jpg', '<p>(Ghost Series #3)</p><p><br></p><p>Galen punya satu keistimewaan yang tidak banyak orang tahu. Keistimewaan yang membuatnya menjadi lebih dekat dengan sosok Gia, cewek pindahan yang terkenal karena sering kesurupan.&nbsp;</p><p><br></p><p>\"Kalau gue kesurupan, lo colek gue aja setannya keluar! Hebat!\"&nbsp;</p><p><br></p><p>Ya, itulah keistimewaan Galen. Dengan menyentuh sedikit saja orang yang kesurupan, setannya keluar. Aneh bukan?&nbsp;</p><p><br></p><p>Apa Galen semenyeramkan itu?&nbsp;</p><p><br></p><p><br></p><p>&nbsp;[A Romantic-horror story by Deasm]</p><p><br></p><p>....</p><p><br></p><p>#1 : Remaja</p><p>#1 : Horor</p><p>#1 : Misteri</p><p>#1 : Ghost</p><p>#1 : Indigo</p><p>#2: Teenfiction</p><p>#5 : SMA</p><p>#5: Fiksiremaja</p><p><br></p><p>Cerita ini hanya fiktif belaka. Jika ada kesamaan nama tokoh, tempat kejadian atau cerita, itu hanya kebetulan semata dan tidak ada unsur kesengajaan.&nbsp;</p><p>.</p><p>Seluruh gambar dalam cerita ini berasal Pinterest.&nbsp;</p><p><br></p><p><br></p><p>Happy reading!&nbsp;</p><p><br></p><p>...</p><p><br></p><p>START : 23 MEI 2021</p><p>FINISH : 11 MARET 2022</p><p><br></p>', 'Horor', 'https://www.wattpad.com/story/269138552-go-away-ghost-selesai', 1314841, '55/55', '224632', 'Deasm_18', '23 MEI 2021', 'COMPLETED', '2024-01-16 07:46:47', '2024-01-16 07:48:45'),
(13, 'Surviving as the Abandoned Lady [COMPLETED]', 'ZCoCSDqg62a2tReDvIbRm4aFfwTJtc-metaMzQ5NjI0MTAyLTUxMi1rODg0MDY2LmpwZw==-.jpg', '<p>Olivia, seorang mahasiswi tingkat tiga meninggal akibat tertabrak mobil saat dalam perjalanan pulang ke rumah untuk merayakan ulang tahun adik nya.&nbsp;</p><p><br></p><p>Namun saat ia membuka mata. Ia terbangun di tubuh Irene Lancaster, tokoh figuran jahat dalam novel yang mati secara tragis karena berusaha membunuh calon putri mahkota dengan memberikan nya racun.&nbsp;</p><p><br></p><p>\'\'Aku mohon selamat kan aku, bukan aku yang meracuni nya!\'\'&nbsp;</p><p>Plak&nbsp;</p><p>Sebuah tamparan keras mendarat di pipi nya&nbsp;</p><p>\'\'Diam! aku sudah muak mendengar itu semua. Semua bukti bahwa kau meracuni calon putri mahkota ada pada mu. Seharus nya kau sadar dan mengakui semua kejahatan mu!\'\'</p><p><br></p>', 'Klasik', 'https://www.wattpad.com/story/349624102-surviving-as-the-abandoned-lady-end', 2927148, '65/65', '248211', 'fatayaa_', '13 ags 2023', 'COMPLETED', '2024-01-16 19:49:29', '2024-01-16 19:49:29'),
(14, ' Passive Husband [COMPLETED]', 'wzjjqddiGpNtfWjbTkoKxrME5lr2Xs-metaMzAwNDMyOTQ2LTE3Ni1rODY2MTkzLmpwZw==-.jpg', '<p>\"Suami lo kalau di rumah, ngomong nggak sih?\"</p><p><br></p><p>\"Ngomonglah. Dikit.\"</p><p><br></p><p>\"Hmm, tapi serius kan dia enggak gagu? Soalnya enggak pernah ngomong sama gue.\"</p><p><br></p><p>\"Dia cuma ngomong kalau ada perlunya doang. Kalau enggak, ya diam. Irit energi katanya.\"</p><p><br></p><p>\"Tapi pernah nggak sekali gitu, dia ngomong panjang?\"</p><p><br></p><p>\"Pernah. Dia cerewet kalau lagi marah.\"</p><p><br></p><p>\"Wah, terbalik ya sama istrinya. Kalau lo lagi marah, diam. Kalau lagi enggak marah, cerewet.\"</p><p><br></p><p>Di dalam rumah tangga kami memang banyak hal yang terbalik-balik.&nbsp;</p><p><br></p><p>Biasanya suami yang lebih dominan.</p><p><br></p><p>Kalau di rumah tanggaku, aku yang lebih dominan.&nbsp;</p><p><br></p><p>Dominan ngomong.</p><p><br></p><p>Dominan bertindak.</p><p><br></p><p>Dominan menyuruh.</p><p><br></p><p>Pokoknya akulah yang lebih aktif.</p>', 'Klasik', 'https://www.wattpad.com/story/300432946-passive-husband-republish', 5369497, '54/54', '449254', 'TheDarkNight_', '26 jan 2023', 'COMPLETED', '2024-01-16 19:56:08', '2024-01-16 19:56:08'),
(15, 'End Up With Him [COMPLETED]', '3P0YxFNSNnP68Twrk3OAlomrwRNjRx-metaMjEyMDI1NDc4LTUxMi1rMTI1MTg0LmpwZw==-.jpg', '<p>Vira dan Laksa sudah saling mengenal sejak lama, keduanya harus menikah karena sebuah insiden. Pekerjaan Laksa yang seorang artis membuat keduanya harus menyembunyikan pernikahan mereka.</p><p><br></p><p>*<strong>*</strong>*</p><p><br></p><p>Vira Saladin sangat membenci Laksamana Hadi Aji yang merupakan aktor laga terkenal. Hubungan pertemanan mereka kacau akibat sebuah insiden di masa remaja.&nbsp;</p><p>Lalu karena sebuah kontrak pekerjaan, Vira terpaksa kembali menjalin komunikasi dengan Laksa dan menawarkannya menjadi bintang iklan produk dari perusahaan Om nya.</p><p><br></p><p>Farel, kekasih Vira yang juga bekerja di kantor yang sama dengannya berselingkuh. Vira memergoki Farel tengah bercumbu dengan teman satu divisinya sendiri. Karena hal itu, Farel memasukkan obat ke dalam minuman Vira di sebuah acara.&nbsp;</p><p><br></p><p>Laksa mengetahui rencana jahat Farel. Didorong rasa ingin melindungi, dia mencoba menyelamatkan Vira. Namun karena hal itu juga dia menjadi terjebak ke dalam sebuah insiden yang membuatnya harus bertanggung jawab.</p><p><br></p><p>Cover Designed By : Bella Ayanda</p>', 'Roman', 'https://www.wattpad.com/story/212025478-end-up-with-him-selesai', 3128940, '46/46', '289609', 'azizahazeha', '3 jun 2020', 'COMPLETED', '2024-01-16 21:16:32', '2024-01-16 21:16:32'),
(16, 'KABIRU', 'B9hZyJrjaUBszYeOEtTrWKaVYhx6xm-metaMTU4MDA0OTYwLTUxMi1rNzYyMTg4LmpwZw==-.jpg', '<p>Kabiru yang masih melajang di usia tiga puluh memikirkan pilihan yang paling logis di hadapannya. Namun ternyata, menikah dengan temannya sejak SMA--Fani--tidak semudah apa yang dipikirkan oleh Biru sebelum menjalaninya.</p><p><br></p><p>*<strong>*</strong>*</p><p><br></p><p>Di umurnya yang mencapai kepala tiga, Kabiru dihadapkan dengan permasalahan yang terbilang klise, diminta mendatangkan calon istri ke rumah untuk dikenalkan kepada keluarganya. Namun sayang, sepanjang hidupnya Biru meyakini kalau ia memang belum pernah merasakan yang namanya pacaran, apa lagi untuk jatuh cinta. Alhasil, hal tersebut membuatnya cukup kesulitan saat ingin mencari seorang istri. Ketika diberi pilihan--yang paling masuk akal--disajikan oleh teman dekatnya, pilihan Kabiru kurang dari sepuluh menit jatuh kepada Fani, teman dekatnya sejak SMA. Tetapi yang tidak diketahui Kabiru, terkadang pilihan yang terasa mudah untuk diambil tidak semudah itu untuk dijalani, termasuk menjaga hubungannya dengan Fani. Terlepas dari perasaan yang muncul dalam diri Kabiru--perasaan yang tidak pernah ia rasakan sebelumnya.</p><p><br></p><p>Cover design by: Ren Tachibana</p>', 'Roman', 'https://www.wattpad.com/story/158004960-kabiru', 2917517, '64/64', '373636', 'LightKuro', '10 jun 2020', 'COMPLETED', '2024-01-16 21:20:39', '2024-01-16 21:20:39'),
(17, 'Hello, Ex-Husband! [COMPLETED]', 'fHdwrKqJZskUv4G5o11k1mnYBo6UPa-metaMTk4NDEwNjE3LTI1Ni1rMzY2MzczLmpwZw==-.jpg', '<p>Ilsa, seorang wanita yang berprofesi sebagai pengacara dipertemukan kembali dengan mantan suami yang mendadak menjadi klien di firma hukum tempat dia bekerja.&nbsp;<br><br>***<br>Ilsa Fiorella, 28 tahun, seorang pengacara yang berada dalam puncak karir. Ilsa terpaksa karena diutus atasannya untuk menjadi pengacara mantan suaminya Jevan Adibroto, 28 tahun pengusaha restoran yang sedang ditimpa masalah penipuan. Jevan mungkin adalah klien Ilsa tapi tidak menghalangi wanita itu untuk menunjukkan kebenciannya akibat salah paham yang belum dituntaskan selama beberapa tahun lalu.<br><br>Pernikahan mereka terjadi saat mereka baru berumur 18 tahun dan hanya bertahan selama satu tahun. Emosi yang masih belum stabil karena menikah muda membuat hubungan pernikahan mereka dirundung salah paham. Ilsa yang sering dikekang oleh Jevan merasa dikhianati setelah melihat Jevan diantar oleh seorang perempuan dalam keadaan mabuk. Ilsa menuding Jevan berselingkuh darinya dan membuat kesalahpahaman menjadi akhir dari pernikahan mereka. &nbsp;<br><br>Berawal dari pengacara dan klien akankah mereka masih dapat bersatu kembali.&nbsp;<br><br>Cover Designed By : Ashley Bandy</p>', 'Roman', 'https://www.wattpad.com/story/198410617-hello-ex-husband', 3978706, '32/32', '196915', 'anothermissjo', '17 jun 2020', 'COMPLETED', '2024-01-28 06:19:53', '2024-01-28 06:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rony WIjaya', 'ronywijaya825@gmail.com', NULL, '$2y$12$Ue2wdy/Ckf1kPP1EDgKL7OPopWn2Ksm5AAO1BtZKIjp.BbxcvNvOu', NULL, '2024-01-22 07:06:31', '2024-01-22 07:06:31'),
(3, 'Rony', 'email1@gmail.com', NULL, '$2y$12$Qp1/qnbBiKQ1QNjrWiv2WeO65z//AIugv4joVFdrp4T7hqa8emici', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tambah_bukus`
--
ALTER TABLE `tambah_bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambah_bukus`
--
ALTER TABLE `tambah_bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
