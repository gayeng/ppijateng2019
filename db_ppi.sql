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
  `desc_event` text,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `event` */

insert  into `event`(`id_event`,`nama_event`,`cp_event`,`desc_event`) values 
(1,'Whaaat','sadsadasd','<p>sadsadasdsad</p>'),
(2,'Banu','adasdasd','<p>asdasdasdasd</p>'),
(3,'Aasdasd','sadsad','<p>sadasdasd</p>'),
(4,'Asdasd','asdasd','<p>sadadasdasd</p>'),
(5,'Asdasdsad','sadsadasd','<p>asdsadsadasd</p>'),
(6,'Asdasdasdasd','asdsadsa','<p>dsadsadsadasdasd</p>'),
(7,'Asdsadsadsa','dsadsadsad','<p>sadsadsadasdsad</p>'),
(8,'Wqewqeqw','wqewqewqe','<p>qwewqeqweqe</p>'),
(9,'Qwee1','wqewqeqw','<p>sdaasdasd</p>'),
(10,'Asdasds','adsadsad','<p>sadsadasdads</p>'),
(11,'[removed]alert&#40;\'WTF!\'&#41;;[removed]','asdasd','asdasdd'),
(12,'Asdasdsadasdas[removed]alert&#40;\'wtfff\'&#41;;[removed]asdasdasdasdasd','-','asdsadsadsadasd'),
(13,'Makan Kerupuk Wah','09898987897','<p>what the heckkk</p>'),
(14,'Bad Asss','098987789','<h1><i><u>BDSM</u></i></h1><p>BaD aSs Mulitply</p>');

/*Table structure for table `jenis_lomba` */

DROP TABLE IF EXISTS `jenis_lomba`;

CREATE TABLE `jenis_lomba` (
  `id_jenislomba` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jenislomba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_lomba` */

/*Table structure for table `lomba` */

DROP TABLE IF EXISTS `lomba`;

CREATE TABLE `lomba` (
  `id_lomba` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_jenislomba` int(3) NOT NULL,
  PRIMARY KEY (`id_lomba`)
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
