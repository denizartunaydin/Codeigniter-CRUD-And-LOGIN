/*
SQLyog Ultimate v11.42 (64 bit)
MySQL - 10.1.38-MariaDB : Database - crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crud`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `USERID` double NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(25) DEFAULT NULL,
  `PASSWORD` varchar(36) DEFAULT NULL,
  `OLDPASSWORD` varchar(25) DEFAULT NULL,
  `FULLNAME` varchar(50) DEFAULT NULL,
  `USERMAIL` text,
  `USERPHONE` varchar(15) DEFAULT NULL,
  `USERSTATUS` double DEFAULT '0',
  `USERISACTIVE` double DEFAULT '1',
  PRIMARY KEY (`USERID`),
  KEY `USERID` (`USERID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`USERID`,`USERNAME`,`PASSWORD`,`OLDPASSWORD`,`FULLNAME`,`USERMAIL`,`USERPHONE`,`USERSTATUS`,`USERISACTIVE`) values (1,'denizartunaydin','c4ca4238a0b923820dcc509a6f75849b','1','Deniz Artun Aydın','info@denizartunaydin.com','000000000000',1,1),(3,'admin','c4ca4238a0b923820dcc509a6f75849b','1','Admin','admin@admin.com','5555555555555',4,1);

/*Table structure for table `user_status` */

DROP TABLE IF EXISTS `user_status`;

CREATE TABLE `user_status` (
  `USERSTATUSID` double NOT NULL AUTO_INCREMENT,
  `USERSTATUSNAME` varchar(25) DEFAULT NULL,
  `USERSTATUSISACTIVE` double DEFAULT '0',
  PRIMARY KEY (`USERSTATUSID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `user_status` */

insert  into `user_status`(`USERSTATUSID`,`USERSTATUSNAME`,`USERSTATUSISACTIVE`) values (1,'Project Manager',1),(2,'Frontend Developer',1),(3,'Backend Developer',1),(4,'Android Developer',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
