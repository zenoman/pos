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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.gambar: ~10 rows (approximately)
DELETE FROM `gambar`;
/*!40000 ALTER TABLE `gambar` DISABLE KEYS */;
INSERT INTO `gambar` (`id`, `kode_barang`, `nama`) VALUES
	(1, 'BRG00001', '1561169422-ba11.png'),
	(2, 'BRG00001', '1561169425-ba12.png'),
	(3, 'BRG00001', '1561169427-ba21.png'),
	(4, 'BRG00001', '1561169428-ba22.png'),
	(5, 'BRG00003', '1561260024-fa4.jpg'),
	(6, 'BRG00003', '1561260025-fa5.jpg'),
	(7, 'BRG00003', '1561260026-fa6.jpg'),
	(8, 'BRG00002', '1561260083-gmk1561258794258.jpg'),
	(9, 'BRG00002', '1561260084-gmk1561258797892.jpg'),
	(10, 'BRG00002', '1561260085-gmk1561258884646.jpg');
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

-- Dumping data for table amerta.tb_kategori: ~0 rows (approximately)
DELETE FROM `tb_kategori`;
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;

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

-- Dumping data for table amerta.tb_supplier: ~0 rows (approximately)
DELETE FROM `tb_supplier`;
/*!40000 ALTER TABLE `tb_supplier` DISABLE KEYS */;
INSERT INTO `tb_supplier` (`id`, `nama`, `alamat`, `no_telp`, `keterangan`) VALUES
	(2, 'dini ani', 'nganjuk bagor', '001', 'supplier sepatu'),
	(3, 'deni', 'aklsdfj', '30924890', 'lkasdjklfskd');
/*!40000 ALTER TABLE `tb_supplier` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_warna
DROP TABLE IF EXISTS `tb_warna`;
CREATE TABLE IF NOT EXISTS `tb_warna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `hex` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_warna: ~1 rows (approximately)
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
