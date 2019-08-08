-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for amerta
DROP DATABASE IF EXISTS `amerta`;
CREATE DATABASE IF NOT EXISTS `amerta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `amerta`;

-- Dumping structure for table amerta.gambar
DROP TABLE IF EXISTS `gambar`;
CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(30) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `status` enum('GU','GB') DEFAULT 'GB',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.gambar: ~17 rows (approximately)
DELETE FROM `gambar`;
/*!40000 ALTER TABLE `gambar` DISABLE KEYS */;
INSERT INTO `gambar` (`id`, `kode_barang`, `nama`, `status`) VALUES
	(1, '21214302-001', '1565248408-3.jpg', 'GB'),
	(2, '21214302-001', '1565248408-13.jpg', 'GB'),
	(3, '21214302-001', '1565248408-12.jpg', 'GB'),
	(4, '21214302-001', '1565248408-7.jpg', 'GB'),
	(5, '21214302-001', '1565248408-9.jpg', 'GU'),
	(6, '21214302-002', '1565248925-6.jpg', 'GB'),
	(7, '21214302-002', '1565248925-profile_avatar.jpg', 'GB'),
	(8, '21214302-002', '1565248925-13.jpg', 'GB'),
	(9, '21214302-002', '1565248925-1.jpg', 'GU'),
	(10, '21214302-002', '1565251673-13.jpg', 'GB'),
	(11, '21214302-002', '1565251673-7.jpg', 'GB'),
	(12, '21214302-002', '1565251673-1.jpg', 'GU'),
	(13, '21214302-002', '1565252714-13.jpg', 'GB'),
	(14, '21214302-002', '1565252714-profile_avatar.jpg', 'GB'),
	(15, '21214302-002', '1565252714-12.jpg', 'GB'),
	(16, '21214302-002', '1565252714-11.jpg', 'GB'),
	(17, '21214302-002', '1565252714-13.jpg', 'GU');
/*!40000 ALTER TABLE `gambar` ENABLE KEYS */;

-- Dumping structure for table amerta.kategori_artikel
DROP TABLE IF EXISTS `kategori_artikel`;
CREATE TABLE IF NOT EXISTS `kategori_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) DEFAULT '0',
  `edit` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.kategori_artikel: ~4 rows (approximately)
DELETE FROM `kategori_artikel`;
/*!40000 ALTER TABLE `kategori_artikel` DISABLE KEYS */;
INSERT INTO `kategori_artikel` (`id`, `nama`, `edit`) VALUES
	(1, 'info reseller', 'Y'),
	(2, 'promo', 'Y'),
	(3, 'halo', 'Y'),
	(4, 'testimoni', 'N');
/*!40000 ALTER TABLE `kategori_artikel` ENABLE KEYS */;

-- Dumping structure for table amerta.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table amerta.migrations: ~2 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table amerta.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table amerta.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table amerta.sliders
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.sliders: ~4 rows (approximately)
DELETE FROM `sliders`;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `judul`, `deskripsi`, `foto`) VALUES
	(1, 'ini slide 1', 'Promo semua kemeja flanel dan salur, diskon 10% dan stok melimpah', '1561293277-gmk1561258797892.jpg'),
	(2, 'Info Jaket Hodie Polos', 'Tanggal 20 stok jaket hoodie polos bakal dateng lagi, buruan cus sembelum kehabisan', '1561293329-gmk1561258884646.jpg'),
	(3, 'ini slide 3', NULL, '1561293368-gmk1561258894334.jpg'),
	(4, 'Kemeja Murah', 'Promo semua kemeja flanel dan salur, diskon 10% dan stok melimpah', '1561414055-gmk1561258887607.jpg');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_artikel
DROP TABLE IF EXISTS `tb_artikel`;
CREATE TABLE IF NOT EXISTS `tb_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `isi` text,
  `tgl` date DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `dilihat` int(11) DEFAULT '0',
  `gambar` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_artikel: ~4 rows (approximately)
DELETE FROM `tb_artikel`;
/*!40000 ALTER TABLE `tb_artikel` DISABLE KEYS */;
INSERT INTO `tb_artikel` (`id`, `judul`, `link`, `isi`, `tgl`, `id_kategori`, `id_penulis`, `dilihat`, `gambar`) VALUES
	(1, 'Diskon 10% jaket polos', 'diskon-10%-jaket-polos', '<p>sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount</p><p><strong>sign up now to our newsletter discount!</strong> to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount</p>', '2019-06-23', 1, 10, 0, '1561261185-1544675574-hijab-muslimah-murah-ramadhan.jpg'),
	(2, 'Preorder jadi pilihan', 'preorder-jadi-pilihan', '<p>sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount</p><p><strong>sign up now to our newsletter discount! to get the Welcome</strong> discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discountsign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount</p>', '2019-06-23', 3, 10, 2, '1561261269-1548724725-tabanner2.jpg'),
	(3, 'coming soon kaos polos premium', 'coming-soon-kaos-polos-premium', '<p>sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount</p><p>sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discountsign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount</p>', '2019-06-23', 2, 10, 0, '1561261337-1548724768-tabanner3.jpg'),
	(4, 'coba testi', 'coba-testi', '<p>sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome disign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome disign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome disign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome di</p><p>sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome disign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome discount sign up now to our newsletter discount! to get the Welcome di</p>', '2019-06-27', 4, 10, 0, '1561600916-1544675484-diskon.jpg');
/*!40000 ALTER TABLE `tb_artikel` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_bank
DROP TABLE IF EXISTS `tb_bank`;
CREATE TABLE IF NOT EXISTS `tb_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(40) DEFAULT NULL,
  `rekening` varchar(40) DEFAULT NULL,
  `atasnama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_bank: ~4 rows (approximately)
DELETE FROM `tb_bank`;
/*!40000 ALTER TABLE `tb_bank` DISABLE KEYS */;
INSERT INTO `tb_bank` (`id`, `nama_bank`, `rekening`, `atasnama`) VALUES
	(1, 'bayar ditoko\r\n', '-', '-'),
	(2, 'mandiri Syariah', '09737897890', 'storeta'),
	(3, 'BRI', '902890890', 'storeta'),
	(4, 'bank jatim', '09890890890', 'storeta');
/*!40000 ALTER TABLE `tb_bank` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_barang
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(50) DEFAULT NULL,
  `variasi` varchar(50) DEFAULT NULL,
  `subvariasi` varchar(50) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT '0',
  `harga_jual` int(11) DEFAULT '0',
  `stok` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_barang: ~18 rows (approximately)
DELETE FROM `tb_barang`;
/*!40000 ALTER TABLE `tb_barang` DISABLE KEYS */;
INSERT INTO `tb_barang` (`id`, `kode_barang`, `variasi`, `subvariasi`, `harga_beli`, `harga_jual`, `stok`) VALUES
	(1, '21214302-001', 'merah', '1 kg', 20000, 30000, 40),
	(2, '21214302-001', 'merah', '2 kg', 20000, 30000, 40),
	(3, '21214302-001', 'biru', '1 kg', 20000, 30000, 40),
	(4, '21214302-001', 'biru', '2 kg', 20000, 30000, 40),
	(5, '21214302-001', 'putih', '1 kg', 20000, 30000, 40),
	(6, '21214302-001', 'putih', '2 kg', 20000, 30000, 40),
	(7, '21214302-002', 'l', 'coklat', 40000, 45000, 10),
	(8, '21214302-002', 'l', 'coklat gelap', 40000, 45000, 10),
	(9, '21214302-002', 'xl', 'coklat', 40000, 45000, 10),
	(10, '21214302-002', 'xl', 'coklat gelap', 40000, 45000, 10),
	(11, '21214302-002', 'xxl', 'coklat', 40000, 45000, 10),
	(12, '21214302-002', 'xxl', 'coklat gelap', 40000, 45000, 10),
	(13, '21214302-002', 'merah', NULL, 2000, 3000, 10),
	(14, '21214302-002', 'hitam', NULL, 2000, 3000, 10),
	(15, '21214302-002', 'merah', 'xl', 2000, 3000, 10),
	(16, '21214302-002', 'merah', 'l', 2000, 3000, 10),
	(17, '21214302-002', 'berah', 'xl', 2000, 3000, 10),
	(18, '21214302-002', 'berah', 'l', 2000, 3000, 10);
/*!40000 ALTER TABLE `tb_barang` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_barang_uom
DROP TABLE IF EXISTS `tb_barang_uom`;
CREATE TABLE IF NOT EXISTS `tb_barang_uom` (
  `idbarang` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) DEFAULT NULL,
  `kode_v` varchar(100) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `barang_jenis` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idbarang`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_barang_uom: ~6 rows (approximately)
DELETE FROM `tb_barang_uom`;
/*!40000 ALTER TABLE `tb_barang_uom` DISABLE KEYS */;
INSERT INTO `tb_barang_uom` (`idbarang`, `kode`, `kode_v`, `stok`, `warna`, `barang_jenis`) VALUES
	(1, 'BRG00001', '02', 5, 'm', 'kaos polos m'),
	(2, 'BRG00001', '03', 15, 'xl', 'kaos polos xl'),
	(3, 'BRG00002', '02', 10, 'L', 'jaket polos L'),
	(4, 'BRG00002', '01', 5, 'M', 'jaket polos M'),
	(5, 'BRG00003', '04', 20, 'X', 'kaos salur X'),
	(6, 'BRG00003', '05', 10, 'XXL', 'kaos salur XXL');
/*!40000 ALTER TABLE `tb_barang_uom` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_kategori
DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_kategori: ~2 rows (approximately)
DELETE FROM `tb_kategori`;
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
INSERT INTO `tb_kategori` (`id`, `kategori`, `gambar`) VALUES
	(1, 'halo', '1563501353-gmk.jpg'),
	(2, 'baju cewek', '1563502050-ff.jpg');
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_kodebarang
DROP TABLE IF EXISTS `tb_kodebarang`;
CREATE TABLE IF NOT EXISTS `tb_kodebarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_asli` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `asal` varchar(200) DEFAULT NULL,
  `bahan` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `kategori` int(11) DEFAULT NULL,
  `subkategori` int(11) DEFAULT NULL,
  `merk` int(11) DEFAULT NULL,
  `varian` varchar(50) DEFAULT 'kosong',
  `subvarian` varchar(60) DEFAULT 'kosong',
  `status` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_kodebarang: ~3 rows (approximately)
DELETE FROM `tb_kodebarang`;
/*!40000 ALTER TABLE `tb_kodebarang` DISABLE KEYS */;
INSERT INTO `tb_kodebarang` (`id`, `kode_asli`, `kode`, `nama`, `asal`, `bahan`, `deskripsi`, `kategori`, `subkategori`, `merk`, `varian`, `subvarian`, `status`) VALUES
	(1, '08081902-001', '21214302-001', 'baju', 'gurah', 'katun', 'deskripsi baju', 2, 3, 3, 'warna', 'berat', 'N'),
	(2, '080819-02-002', '21214302-002', 'big milk pra one', 'gurah kediri', 'katun', 'deskripsi shape 3d', 1, 2, 2, 'size', 'warna', 'Y'),
	(3, '080819-02-002', '21214302-002', 'kaos kutang', 'gurah', 'katun', 'halo halo', 2, NULL, 2, 'warna', NULL, 'N'),
	(4, '080819-02-002', '21214302-002', 'baju', 'gurah', 'hlo', 'sakdlfjklasd', 2, 3, 3, 'warna', 'size', 'Y');
/*!40000 ALTER TABLE `tb_kodebarang` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_merk
DROP TABLE IF EXISTS `tb_merk`;
CREATE TABLE IF NOT EXISTS `tb_merk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `gambar` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_merk: ~2 rows (approximately)
DELETE FROM `tb_merk`;
/*!40000 ALTER TABLE `tb_merk` DISABLE KEYS */;
INSERT INTO `tb_merk` (`id`, `nama`, `gambar`) VALUES
	(2, 'zalora', '1564925296-icons8-home-100.png'),
	(3, 'heidi', '1564925318-ee.png');
/*!40000 ALTER TABLE `tb_merk` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_setting
DROP TABLE IF EXISTS `tb_setting`;
CREATE TABLE IF NOT EXISTS `tb_setting` (
  `idsettings` int(11) NOT NULL AUTO_INCREMENT,
  `webName` varchar(100) DEFAULT NULL,
  `kontak1` varchar(45) DEFAULT NULL,
  `kontak2` varchar(45) DEFAULT NULL,
  `kontak3` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ico` varchar(45) DEFAULT NULL,
  `meta` text,
  `logo` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `alamat` text,
  `nama_toko` int(11) DEFAULT NULL,
  `max_tgl` int(5) DEFAULT NULL,
  `peraturan` text,
  `bulansistem` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsettings`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_setting: ~0 rows (approximately)
DELETE FROM `tb_setting`;
/*!40000 ALTER TABLE `tb_setting` DISABLE KEYS */;
INSERT INTO `tb_setting` (`idsettings`, `webName`, `kontak1`, `kontak2`, `kontak3`, `email`, `ico`, `meta`, `logo`, `keterangan`, `alamat`, `nama_toko`, `max_tgl`, `peraturan`, `bulansistem`) VALUES
	(2, 'amarta', '001', '002', '003', 'anakmbarep999@gmail.com', '1563174650-fagmk.png', NULL, '1563174650-logogmk.png', 'halo halo', 'gurah', NULL, 7, 'coba coba', 1);
/*!40000 ALTER TABLE `tb_setting` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_sub_kategori
DROP TABLE IF EXISTS `tb_sub_kategori`;
CREATE TABLE IF NOT EXISTS `tb_sub_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_sub_kategori: ~2 rows (approximately)
DELETE FROM `tb_sub_kategori`;
/*!40000 ALTER TABLE `tb_sub_kategori` DISABLE KEYS */;
INSERT INTO `tb_sub_kategori` (`id`, `id_kategori`, `nama`) VALUES
	(2, 1, 'jilbab mantul'),
	(3, 2, 'hola');
/*!40000 ALTER TABLE `tb_sub_kategori` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_supplier
DROP TABLE IF EXISTS `tb_supplier`;
CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(20) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_supplier: ~3 rows (approximately)
DELETE FROM `tb_supplier`;
/*!40000 ALTER TABLE `tb_supplier` DISABLE KEYS */;
INSERT INTO `tb_supplier` (`id`, `nama`, `alamat`, `no_telp`, `keterangan`) VALUES
	(2, 'dini ani', 'nganjuk bagor', '001', 'supplier sepatu'),
	(3, 'deni', 'aklsdfj', '30924890', 'lkasdjklfskd');
/*!40000 ALTER TABLE `tb_supplier` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_uom
DROP TABLE IF EXISTS `tb_uom`;
CREATE TABLE IF NOT EXISTS `tb_uom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_uom: ~2 rows (approximately)
DELETE FROM `tb_uom`;
/*!40000 ALTER TABLE `tb_uom` DISABLE KEYS */;
INSERT INTO `tb_uom` (`id`, `nama`, `jumlah`) VALUES
	(2, 'lusin', 12),
	(3, 'kodi', 50);
/*!40000 ALTER TABLE `tb_uom` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_warna
DROP TABLE IF EXISTS `tb_warna`;
CREATE TABLE IF NOT EXISTS `tb_warna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `hex` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_warna: ~2 rows (approximately)
DELETE FROM `tb_warna`;
/*!40000 ALTER TABLE `tb_warna` DISABLE KEYS */;
INSERT INTO `tb_warna` (`id`, `kode`, `warna`, `hex`) VALUES
	(3, 'm001', 'merah', '#ff0000'),
	(4, 'b001', 'biru muda', '#00ffff');
/*!40000 ALTER TABLE `tb_warna` ENABLE KEYS */;

-- Dumping structure for table amerta.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','super_admin','programmer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table amerta.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `no_telp`, `username`, `level`, `email`, `password`) VALUES
	(2, 'deva satrio', '00889', 'devasatrio', 'programmer', 'deva@gmail.com', '$2y$10$t9D98o5ivC4b165XWP9THO4Y.Cc9Vdy18NuZEWWrP1xOkHth512V2'),
	(3, 'dian ade setiawan', '0889292', 'dian', 'super_admin', 'dian@gmail.com', '$2y$10$szbUEcmxAf.71Y1zrnCDvOmDJo4fvDav1kxT6bNgGoezk.bUfuqNW'),
	(4, 'owner', '032984290', 'owner', 'super_admin', 'owner123@gmal.com', '$2y$10$MiDu8/owBFbvwzQqZRkubOmrE/aG8GIY.29ngaZLpGc28CEpDfGQW'),
	(5, 'admin', '203849320', 'admin', 'admin', 'admin@gmail.com', '$2y$10$9XpmTwNA4ZEo7O1OgFO89eYCOnR1xy9u2TkzPx6j9XR88L.r80UAq');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
