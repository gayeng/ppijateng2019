/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_ppi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ppi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_ppi`;

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(255) DEFAULT NULL,
  `cp_event` varchar(50) DEFAULT NULL,
  `poster` text,
  `desc_event` text,
  `id_jenisevent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_jenisevent` (`id_jenisevent`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_jenisevent`) REFERENCES `jenis_event` (`id_jenisevent`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `event` */

insert  into `event`(`id_event`,`nama_event`,`cp_event`,`poster`,`desc_event`,`id_jenisevent`) values 
(1,'Seminar Nasional Parangtritis','Banu : 08658673233',NULL,'<h1><u>PARANGTRITIS RUSH!</u></h1><p>Adalah acara penyerbuan pantai prangtritis dengan mengenakan baju berwarna hijau. diduga acara ini dibuat oleh orang-orang no-life, yaitu orang-orang yang tidak memiliki tujuan hidup. waktu hanya dihabiskan untuk menghayal dan menonton anime.</p><p><u>Pricing :</u></p><ul><li>VVIP harga : Rp. 1.000 ,-</li><li>VIP harga : Rp. 500 ,-</li><li>Regular : Gratis!</li></ul><div><u>Fasilitas :</u></div><div><ul><li>VVIP : Bento, Free softdrink, Baju Parangtritis, Aksesori, Gazebo</li><li>VIP : Nasi Kotak, Minuman kemasan gelas.</li><li>Tidak ada!</li></ul><br></div><div>Ditunggu kedatangan para peserta!</div>',NULL),
(2,'Festival Makan Kerupuk','Banu : 11212123332',NULL,'<p>ini adalah lomba paling mainstream yaitu lomba yang selalu diadakan pada tanggal sebelum 17 Agustus.</p><p><u>Pricing :</u></p><p></p><ul><li>HTM : Rp. 20.000 -,</li></ul><p></p>',NULL);

/*Table structure for table `jenis_event` */

DROP TABLE IF EXISTS `jenis_event`;

CREATE TABLE `jenis_event` (
  `id_jenisevent` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenisevent`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_event` */

insert  into `jenis_event`(`id_jenisevent`,`nama`) values 
(1,'expo'),
(2,'seminar');

/*Table structure for table `jenis_lomba` */

DROP TABLE IF EXISTS `jenis_lomba`;

CREATE TABLE `jenis_lomba` (
  `id_jenislomba` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jenislomba`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_lomba` */

insert  into `jenis_lomba`(`id_jenislomba`,`nama`,`deskripsi`) values 
(1,'Piala Gubernur','Piala Gurbernur'),
(2,'Piala Bupati','Piala Bupati');

/*Table structure for table `lomba` */

DROP TABLE IF EXISTS `lomba`;

CREATE TABLE `lomba` (
  `id_lomba` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `cp_lomba` varchar(50) NOT NULL,
  `poster` text NOT NULL,
  `jenis_lomba` varchar(50) NOT NULL,
  `id_jenislomba` int(3) NOT NULL,
  PRIMARY KEY (`id_lomba`),
  KEY `id_jenislomba` (`id_jenislomba`),
  CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`id_jenislomba`) REFERENCES `jenis_lomba` (`id_jenislomba`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lomba` */

/*Table structure for table `sambutan` */

DROP TABLE IF EXISTS `sambutan`;

CREATE TABLE `sambutan` (
  `id_sambutan` int(2) NOT NULL AUTO_INCREMENT,
  `isi` varchar(200) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sambutan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sambutan` */

/*Table structure for table `slide` */

DROP TABLE IF EXISTS `slide`;

CREATE TABLE `slide` (
  `id_slide` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `slide` */

/*Table structure for table `sponsor` */

DROP TABLE IF EXISTS `sponsor`;

CREATE TABLE `sponsor` (
  `id_sponsor` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sponsor` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values 
(1,'admin','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
