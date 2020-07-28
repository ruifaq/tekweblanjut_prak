/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - user
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`user` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `user`;

/*Table structure for table `ci_user` */

DROP TABLE IF EXISTS `ci_user`;

CREATE TABLE `ci_user` (
  `user_id` int(3) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_user` */

insert  into `ci_user`(`user_id`,`user_nama`,`user_email`) values 
(1,'rui','rui@gmail.com'),
(2,'dewa','dewa@gmail.com'),
(3,'wawan','wawa@gmail.com'),
(4,'novendra','vendra@gmail.com');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namadpn` varchar(100) NOT NULL,
  `namablkng` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`id`,`namadpn`,`namablkng`,`email`,`password`) values 
(20,'rui','faqri','rui@gmail.com','$2y$10$uVesqXZDVtnIxk.5yfPPvOm33KXevs9EieANZhjKNy85tV1ohfgtC'),
(21,'axe','willford','axe@gmail.com','$2y$10$dXU1lndoQTrfwf9aa0BpoOYTAVFJBV/XNGw991a645GkljxlFUkNi'),
(22,'dewa','gede s','ewa@gmail.com','$2y$10$phBjijGGL1JEOR2KlmsdLuG.TqmY5QQlH9uD6QERDAZD/n5K7LJWq');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `judulfilm` varchar(100) NOT NULL,
  `kdfm` varchar(100) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `pemain` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `date_update` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`foto`,`judulfilm`,`kdfm`,`studio`,`sutradara`,`pemain`,`deskripsi`,`rating`,`date_create`,`date_update`) values 
(19,'hobsandshaw.png','Fast And Fourius : Hobs and Shaw','ff-spin-off','Universal Pictures','David Leitch','Dwayne Johnson, Jason Statham, Idris Elba, Vanessa Kirby, dsn Helen Mirren\r\n\r\n','Luke Hobbs (Dwayne Johnson) membentuk aliansi yang tidak mungkin dengan Deckard Shaw (Jason Statham). Keduanya terpaksa bersatu membantu Hattie Shaw (Vanessa Kirby) untuk memburu Brixton (Idris Elba)...','9/10','2020-07-05 12:00:13','2020-07-05 12:00:13'),
(20,'avanger.png','Avanger : Endgame','iron-man','Marvel Studios','Anthony Russo dan Joe Russo','Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira\r\nBenedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, dan Josh Brolin','Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?... ','9,2/10','2020-07-05 12:03:47','2020-07-05 12:03:47'),
(21,'jumanji.png','Jumanji : The Next Level','back-to-fantasy','Columbia Pictures, Seven Bucks Production, Hartbeat Productions, Matt Tolmach Productions, dan The Detective Agency','Jake Kasdan','Dwayne Johnson, Jack Black, Kevin Hart, Karen Gillan, Nick Jonas, Awkwafina, Alex Wolff, Morgan Turn','Dalam Jumanji: The Next Level, keempat sahabat kembali lagi, tetapi permainannya telah berubah. Saat memutuskan masuk lagi ke Jumanji untuk menyelamatkan salah satu dari mereka, mereka menemukan segalanya tak seperti yang diduga...','7,1/10','2020-07-05 12:07:31','2020-07-05 12:07:31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
