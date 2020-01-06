# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.8-MariaDB)
# Database: pwluas
# Generation Time: 2019-11-21 22:12:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table buku
# ------------------------------------------------------------

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL DEFAULT '',
  `pengarang` varchar(250) NOT NULL DEFAULT '',
  `th_terbit` varchar(100) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



INSERT INTO `buku` (`id`, `judul`, `pengarang`, `th_terbit`, `id_kategori`)
VALUES
	(1,'Algoritma data minig','Kusrini, Emha Taufiq	',2009,1),
	(2,'Algoritma HSABC','Affandi AN',2015,3),
	(3,'Perancangan dan Analisa Algoritma','Eko Budi Purwanto',2008,3),
	(4,'PHP dan PostgreSQL','Andhie Lala Adam',2014,2),
	(5,'Teknik Kecerdasan Buatan','Chin-Liang Chan',1990,4),
	(6,'Teknik Jaringan Syaraf Tiruan','Muis Saldin	',2006,4);




# Dump of table kategori
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



INSERT INTO `kategori` (`id_kategori`, `nama_kategori`)
VALUES
	(1,'Fashion'),
	(2,'Elektronik'),
	(3,'Rumah Tangga'),
	(4,'Gadget');




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
