-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2015 pada 09.00
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zartoys`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama lengkap` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `nama lengkap`, `alamat`, `telp`) VALUES
(1, 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Zakky Rausyanfikry', 'Asrama Polsek Bantul', '085799378770');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`no` int(11) NOT NULL,
  `id` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`no`, `id`, `qty`, `bayar`, `nama`, `hp`, `email`, `alamat`) VALUES
(9, 'AF003', 5, 2400000, 'Zakky Rausyanfikry', '085799378770', 'zakky.rfikry@gmail.com', 'Asrama Polsek Bantul'),
(10, 'AF002', 5, 2700000, 'a', '3242', 'aas', 'wfw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(2) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `stok`, `deskripsi`, `gambar`) VALUES
('AF001', 'Hatsune Miku - Vocal Series', 480000, 5, 'Kepopuleran Hatsune Miku memang tidak akan pernah hilang ditelan zaman. Kini penyanyi yang menjadi idola semua orang ini hadir kembali sebagai mainan lucu nendoroid.', 'img/product/AF001.jpg'),
('AF002', 'Akagi Kancolle - KanColle', 540000, 5, 'Nendoroid terbaru kali ini berasal dari Kantai Collection, yaitu Akagi Kancolle, seorang wanita yang hebat dalam memimpin pasukan kapal induk untuk memenangkan suatu peperangan. Dengan banyaknya aksesoris yang tersedia dalam Nendoroid Akagi ini, kamu bisa menampilkan karakter lucu ini sebagai pemimpin pasukan kapal induk yang menarik perhatian siapapun orang yang melihatnya.', 'img/product/AF002.jpg'),
('AF003', 'Honoka Kosaka - Love Live!', 480000, 5, 'Siapa yang tidak kenal Honoka Kosaka? Karakter lucu yang selalu tersenyum dari serial anime terkenal Love Live! ini kini hadir dalam bentuk action figure lucu Nendoroid. Ia tampil dengan mengenakan pakaiannya di lagu Bokura wa Ima no Naka de.', 'img/product/AF003.jpg'),
('AF004', 'Kosaki Onodera - Nisekoi', 625000, 5, 'Diangkat dari serial anime komedi ''Nisekoi'' kini telah hadir action figure lucu Kosaki Onodera dalam bentuk Nendoroid. Nendoroid Kosaki Onodera tersedia dengan tiga ekspresi wajah, yaitu tersenyum, malu, dan ekspresi panik dengan sentuhan chibi. ', 'img/product/AF004.jpg'),
('AF005', 'Levi - Attack on Titans', 530000, 5, 'Demam Attack on Titans a.k.a Shingeki No Kyojins tidak akan berakhir. Levi dari manga dan serial anime Attack On Titans hadir dalam bentuk yang imut, lucu, dan chibi. Kesan "cool" yang melekat dalam diri Levi tidak akan pernah hilang walau berbentuk action figure yang lucu seperti ini. Nendoroid Levi siap menemani dan mengisi hari-harimu yang membahagiakan ini.', 'img/product/AF005.jpg'),
('AF006', 'Link - The Wind Waker Version', 500000, 5, 'Diadaptasi dari kepopuleran game Legend of Zelda: The Wind Waker HD, kini Link, karakter utama dari game ini hadir dalam bentuk action figure yang lucu, yaitu Nendoroid.', 'img/product/AF006.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
`no` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `bankAsal` varchar(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `bankTujuan` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `orderId` (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Ketidakleluasaan untuk tabel `transfer`
--
ALTER TABLE `transfer`
ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `order` (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
