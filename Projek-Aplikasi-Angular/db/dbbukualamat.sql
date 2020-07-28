/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.13-MariaDB : Database - dbbukualamat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbbukualamat` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbbukualamat`;

/*Table structure for table `alamat` */

DROP TABLE IF EXISTS `alamat`;

CREATE TABLE `alamat` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `propinsi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `alamat` */

insert  into `alamat`(`id`,`nama`,`kota`,`email`,`hp`,`propinsi`,`alamat`,`kodepos`,`password`) values 
(1,'Hasanuddin ','Yogyakarta','hasanudin@gmail.com','0868393826','DIY','Jl. Kenangan No. 66 Umbulharjo',23456,'udin123'),
(5,'ruifaqi','kapuas','rui@gmail.com','123456789','kalteng','lamunti',53667,'rui123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
