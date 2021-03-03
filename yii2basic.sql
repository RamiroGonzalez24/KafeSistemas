/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.17-MariaDB : Database - yii2basic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`yii2basic` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `yii2basic`;

/*Table structure for table `entry_form` */

DROP TABLE IF EXISTS `entry_form`;

CREATE TABLE `entry_form` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dni` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `friend` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `entry_form` */

insert  into `entry_form`(`id`,`name`,`lastname`,`email`,`age`,`dni`,`friend`) values 
(21,'Ramiro','Gonzalez','ramagonzalez@gmail.com',25,'39380032','Leandro'),
(22,'Nerina','Gonzalez','nerina@gmail.com',25,'37156414',NULL),
(25,'Gabriel','Bermudez','gabriel@gmail.com',18,'3985474',NULL),
(28,'Guada','Zanginetti','zanginetti@gmail.com',21,'41256465',NULL),
(30,'Leandro','Mercado','mercado@gmail.com',25,'39456788','Guada'),
(31,'Danila','Gonzalez','danila@gmail.com',32,'31589255','Gabriel');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
