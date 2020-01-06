-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2020 pada 04.39
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jastip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `nama_kategori` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Rumah Tangga'),
(1, 'Fashion Pria'),
(3, 'Elektronik'),
(4, 'Fashion Wanita'),
(5, 'Tas'),
(6, 'Sepatu'),
(7, 'Gadget'),
(8, 'Komputer'),
(9, 'Makanan'),
(10, 'Buku'),
(11, 'Aksesoris Fashion'),
(12, 'Otomotif'),
(13, 'Olahraga'),
(14, 'Hobi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(250) NOT NULL DEFAULT '',
  `barang` varchar(250) NOT NULL DEFAULT '',
  `alamat` varchar(250) NOT NULL DEFAULT '',
  `id_kategori` int(4) NOT NULL,
  `no_hp` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `barang`, `alamat`, `id_kategori`, `no_hp`) VALUES
(1, 'Syiar Baskara', 'Baju Polo', 'Jayapura', 1, '6282399193045'),
(2, 'Rizqi Ramadhani', 'Flanel', 'Bandung', 3, '082399193789'),
(3, 'Hernando Pratama', 'Vape', 'Sampit', 6, '6282251145793'),
(4, 'Angga Wijaya', 'flat Shoes', 'Kebumen', 8, '08239919334'),
(5, 'Suprapto', 'Gitar', 'Jakarta', 14, '082149193045'),
(6, 'Merlin Nabila', 'Bedak Wardah', 'Sorong', 2, '082378906534'),
(7, 'Sarah Amartya', 'Sendal Jepit', 'Timika', 4, '082399857045'),
(8, 'Laily Mulyani', 'Jilbab', 'Tegal', 1, '082356787045'),
(9, 'Chicko Jerico', 'Ransel Eiger', 'Sleman', 6, '082984657045'),
(10, 'Fiersa Besari', 'Microphone M-audio', 'Bantul', 1, '082378357045'),
(11, 'Yayan Ruhiyan', 'Rantai Motor', 'Magelang', 5, '082399889255'),
(12, 'Iko Uwais', 'Pisau Lipat', 'Aceh', 1, '082338657045'),
(13, 'Deva Mahendra', 'Celana Panjang', 'Sidoarjo', 5, '082373957785'),
(14, 'Pevita Pearce', 'Lipstik Wardah', 'Ngawi', 4, '082399858940'),
(15, 'Raline Shah', 'Jaket', 'Makassar', 4, '082399489302'),
(16, 'Herjunot Ali', 'Pomade Dracula', 'Bali', 1, '082399738290'),
(17, 'Vino G Bastian', 'Baju Kaos', 'Yogyakarta', 1, '082378392017'),
(18, 'Anya Geraldine', 'Pelang Motor', 'Merauke', 14, '082337648921'),
(19, 'Bimo', 'Handphone', 'Banten', 1, '082390287645'),
(20, 'Awkarin', 'Kamera Canon', 'Klaten', 14, '082336276579'),
(21, 'Atta Halilintar', 'Interior Mobil', 'Semarang', 1, '082313425678'),
(22, 'Young lex', 'Komputer', 'Lampung', 1, '082327654827'),
(23, 'Reza Rahadian', 'Keyboard Yamaha', 'Bandung', 1, '082317846736'),
(24, 'Budi Doremi', 'Ukulele', 'Jakarta', 14, '082398764736'),
(25, 'Jokowi', 'jaket bomber', 'Jakarta', 1, '082377685949'),
(26, 'Audrey', 'Handphone', 'Banten', 1, '082309786543'),
(27, 'Anggi Umbara', 'Celana Levis', 'Lampung', 1, '082337287618'),
(28, 'Nabil Husein', 'Liquid', 'Blitar', 14, '082327864738'),
(29, 'Reza Arap', 'Kaos Gucci', 'Jakarta', 1, '08277847362'),
(30, 'Eka Gustiwana', 'Mini DJ', 'Sidoarjo', 14, '082189473627'),
(31, 'Uya Kuya', 'Sepatu Nike', 'Banten', 1, '082378493834'),
(32, 'Ari Laso', 'Kabel Mic', 'Jakarta', 14, '082398392745'),
(33, 'Nikita Mirzani', 'Jilbab', 'Bandung', 4, '082356884736'),
(34, 'Ariel Noah', 'Stand Keyboard', 'Jepara', 1, '082983672045'),
(35, 'Ari Lesmana', 'Stand Mic', 'Jambi', 14, '082328937045'),
(36, 'Ardhito Pramono', 'Kabel Power Piano', 'Bali', 1, '082394673655'),
(37, 'Uus', 'Pewarna Rambut', 'Balikpapan', 1, '082333376725'),
(38, 'Bambang Pamungkas', 'Celana Training', 'Surabaya', 1, '082322663764'),
(39, 'Mesut Ozil', 'Sepatu Adidas', 'Malang', 1, '082393876745'),
(40, 'Amirul', 'Hoodie', 'cirebon', 1, '082393876543'),
(41, 'Rabani', 'Payung Bening', 'Bali', 1, '082399664790'),
(42, 'Feby Putri', 'Buku PHP', 'Jakarta', 1, '082378478367'),
(43, 'Ernest Prakasa', 'Novel Dilan', 'Batam', 1, '082333875821'),
(44, 'Angga', 'Lensa Kamera', 'Bali', 14, '082335465645'),
(45, 'Bayu Skak', 'Kamera Nikon', 'Jayapura', 14, '082337846579'),
(46, 'Oka Antara', 'Helm NHK', 'Bandung', 1, '082318857478'),
(47, 'Saih Halilintar', 'Kaca Spion', 'Semarang', 14, '082324473627'),
(48, 'Iqbal Ramadhan', 'Sperpat Motor', 'Banten', 14, '082317337466'),
(49, 'Jefri Nichol', 'Ukulele', 'Sorong', 14, '082394736736'),
(50, 'Adipati Dolken', 'Hardisk', 'Bandung', 1, '082377668749');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `nama` varchar(250) NOT NULL DEFAULT '',
  `detail` varchar(300) NOT NULL DEFAULT '',
  `harga` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `image`, `nama`, `detail`, `harga`) VALUES
(4, '36544454-asus-rog-wallpaper.jpg', 'Syiar Baskara', 'fwfwfwsf', '30.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(250) NOT NULL DEFAULT '',
  `alamat` varchar(250) NOT NULL DEFAULT '',
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `no_hp`, `password`) VALUES
(1, 'Syiar Baskara', 'Jayapura', '082399193045', 'Z001'),
(2, 'Hernando Prathama', 'Sampit', '082251145793', 'Z002'),
(3, 'Kiki Ramadhani', 'Semarang', '089689887654', 'Z003'),
(4, 'Gusti Muzain', 'Pontianak', '082278653567', 'Z004'),
(5, 'Atta Halilintar', 'Jakarta Timur', '085678976543', 'Z005'),
(6, 'Ferdi Pratama', 'Bekasi', '081290875463', 'Z006'),
(7, 'Hardcuan Sitompul', 'Yogyakarta', '082399194565', 'Z007'),
(8, 'Saleh Kiwan', 'Palangkaraya', '081267593041', 'Z008'),
(9, 'Mubari', 'Klaten', '082399193045', 'Z009'),
(10, 'Fandy Bounty', 'Manado', '085643465467', 'Z010'),
(11, 'Tiyok Prasetyo', 'Madura', '082367865678', 'Z011'),
(12, 'Anya Geraldine', 'Boyolali', '081234576541', 'Z012'),
(13, 'Uut Permatasari', 'Kebumen', '081367897563', 'Z013'),
(14, 'Yohan Teguh', 'Cilacap', '082245678909', 'Z014'),
(15, 'Charlen Gunawan', 'Bekasi', '08238765678', 'Z015'),
(16, 'Ikwan Michele', 'Jakarta Selatan', '081187656478', 'Z016'),
(17, 'Bram Dermawan', 'Tangerang', '086745940099', 'Z017'),
(18, 'Jesstin Timberlake', 'Jayapura', '089808758490', 'Z018'),
(19, 'Somat Kamaludin', 'Sorong', '085678968095', 'Z019'),
(20, 'Jojo Raharjo', 'Medan', '082298768009', 'Z020'),
(21, 'Margi Utomo', 'Bengkulu', '087790907878', 'Z021'),
(22, 'Faradila Malawi', 'Lampung', '085680567876', 'Z022'),
(23, 'Farhan Jamil', 'Malili', '081587657849', 'Z023'),
(24, 'Soni Aji', 'Pangkalanbun', '089678753121', 'Z024'),
(25, 'Fajar Dela', 'Batam', '082367967975', 'Z025'),
(26, 'Donald Trump', 'Klaten', '081498756898', 'Z026'),
(27, 'Kirana Lestari', 'Kediri', '087789874356', 'Z027'),
(28, 'Modika Latifah', 'Sampit', '084699193098', 'Z028'),
(29, 'Samuel Kristian', 'Palangkaraya', '082289786756', 'Z029'),
(30, 'Sherly Kristina', 'Samarinda', '087267452312', 'Z030'),
(31, 'Zul Zukarnain', 'Medan', '087765907877', 'Z031'),
(32, 'Bonita Gultom', 'Toraja', '085678909876', 'Z032'),
(33, 'Bobby Candera Lim', 'Sampit', '08767895784', 'Z033'),
(34, 'Fanny Ferdianata', 'Manado', '082399193045', 'Z034'),
(35, 'Putri Abdi', 'Sampang', '087898765654', 'Z035'),
(36, 'Brayen Bakara', 'Ternate', '082299193049', 'Z036'),
(37, 'Tony Hermawan', 'Tidore', '082399193043', 'Z037'),
(38, 'Lestaluhu', 'Maluku', '089899193897', 'Z038'),
(39, 'Hermanto', 'Banjarmasin', '084499193066', 'Z039'),
(40, 'Sumanto', 'Palembang', '087799193123', 'Z040'),
(41, 'Jerry Nichole', 'Jambi', '085699193564', 'Z041'),
(42, 'Beny', 'Semarang', '082399193678', 'Z042'),
(43, 'Budi Sambodo', 'Jakarta Timur', '085778199876', 'Z043'),
(44, 'Hendry', 'Manado', '081178765453', 'Z044'),
(45, 'Gilang Arya', 'Palembang', '089376754321', 'Z045'),
(46, 'Lendy', 'Jambi', '085398193040', 'Z046'),
(47, 'Jamal Syahputra', 'Aceh', '081299197654', 'Z047'),
(48, 'Imam Fauzi', 'Kebumen', '081399193048', 'Z048'),
(49, 'Rahmat Puji', 'Bali', '082380193047', 'Z049'),
(50, 'Munif Ashari', 'Makassar', '089476193011', 'Z050');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
