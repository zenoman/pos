-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.gambar: ~2 rows (approximately)
DELETE FROM `gambar`;
/*!40000 ALTER TABLE `gambar` DISABLE KEYS */;
INSERT INTO `gambar` (`id`, `kode_barang`, `nama`, `status`) VALUES
	(3, '61214302-001', '1566982265-flat-icons-18-08.png', 'GU'),
	(4, '61214302-002', '1566982564-shopping-bag-flat.png', 'GU'),
	(5, '61214302-003', '1566982682-wifi.png', 'GU');
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
  `deskripsi` text DEFAULT NULL,
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
  `isi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `dilihat` int(11) DEFAULT 0,
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
  `harga_beli` int(11) DEFAULT 0,
  `harga_jual` int(11) DEFAULT 0,
  `stok` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_barang: ~12 rows (approximately)
DELETE FROM `tb_barang`;
/*!40000 ALTER TABLE `tb_barang` DISABLE KEYS */;
INSERT INTO `tb_barang` (`id`, `kode_barang`, `variasi`, `subvariasi`, `harga_beli`, `harga_jual`, `stok`) VALUES
	(5, '61214302-001', 'merah', 'l', 2000, 2000, 20),
	(6, '61214302-001', 'merah', 'm', 2000, 2000, 20),
	(7, '61214302-001', 'merah', 'xl', 2000, 2000, 20),
	(8, '61214302-001', 'biru', 'l', 2000, 2000, 20),
	(9, '61214302-001', 'biru', 'm', 2000, 2000, 20),
	(10, '61214302-001', 'biru', 'xl', 2000, 2000, 20),
	(11, '61214302-001', 'putih', 'xl', 2000, 2000, 20),
	(12, '61214302-001', NULL, NULL, 1300, 13000, 13),
	(13, '61214302-002', 'kevlar', 'biru', 30, 30, 30),
	(14, '61214302-002', 'kevlar', 'merah', 30, 30, 30),
	(15, '61214302-002', 'jean', 'biru', 30, 30, 30),
	(16, '61214302-002', 'jean', 'merah', 30, 30, 30),
	(17, '61214302-003', NULL, NULL, 2000, 2000, 2000);
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
  `deskripsi` text DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `subkategori` int(11) DEFAULT NULL,
  `merk` int(11) DEFAULT NULL,
  `varian` varchar(50) DEFAULT 'kosong',
  `subvarian` varchar(60) DEFAULT 'kosong',
  `status` enum('Y','N') DEFAULT 'N',
  `preorder` enum('Y','N') DEFAULT 'N',
  `kondisi` enum('Baru','Pernah Dipakai') DEFAULT 'Baru',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_kodebarang: ~2 rows (approximately)
DELETE FROM `tb_kodebarang`;
/*!40000 ALTER TABLE `tb_kodebarang` DISABLE KEYS */;
INSERT INTO `tb_kodebarang` (`id`, `kode_asli`, `kode`, `nama`, `asal`, `bahan`, `deskripsi`, `kategori`, `subkategori`, `merk`, `varian`, `subvarian`, `status`, `preorder`, `kondisi`) VALUES
	(3, '280819-02-001', '61214302-001', 'celana cewek', 'sakldfj', '9238490', 'askldfj kasfdjkl', 2, 3, 3, 'warna', 'size', 'Y', 'N', 'Baru'),
	(4, '280819-02-002', '61214302-002', 'kemeja', 'asdf', '092890', 'kalsf askdfjkla s', 2, 3, 3, 'bahan', 'warna', 'N', 'N', 'Baru'),
	(5, '280819-02-003', '61214302-003', 'asdfkj', 'klasdf', 'sakdlf', 'lksdfjl', 2, 3, 3, NULL, NULL, 'Y', 'N', 'Baru');
/*!40000 ALTER TABLE `tb_kodebarang` ENABLE KEYS */;

-- Dumping structure for table amerta.tb_merk
DROP TABLE IF EXISTS `tb_merk`;
CREATE TABLE IF NOT EXISTS `tb_merk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
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
  `meta` text DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_toko` int(11) DEFAULT NULL,
  `max_tgl` int(5) DEFAULT NULL,
  `peraturan` text DEFAULT NULL,
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
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table amerta.tb_supplier: ~2 rows (approximately)
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

-- Dumping structure for trigger amerta.tb_kodebarang_before_delete
DROP TRIGGER IF EXISTS `tb_kodebarang_before_delete`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tb_kodebarang_before_delete` BEFORE DELETE ON `tb_kodebarang` FOR EACH ROW BEGIN
delete from tb_barang where kode_barang=old.kode;
delete from gambar where kode_barang=old.kode;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
