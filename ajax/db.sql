/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 5.5.53-log : Database - _ineternet_magazin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`_ineternet_magazin` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `_ineternet_magazin`;

/*Table structure for table `categorii` */

DROP TABLE IF EXISTS `categorii`;

CREATE TABLE `categorii` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nazvanie` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `categorii` */

insert  into `categorii`(`id`,`nazvanie`,`status`) values 
(1,'Кепки',1),
(2,'Шапки',1);

/*Table structure for table `tovari` */

DROP TABLE IF EXISTS `tovari`;

CREATE TABLE `tovari` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `categoriya_id` int(3) DEFAULT '1',
  `nazvanie` varchar(100) NOT NULL,
  `sena` decimal(4,2) NOT NULL,
  `opisanie` text,
  `img` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `categoriya_id` (`categoriya_id`),
  CONSTRAINT `tovari_ibfk_1` FOREIGN KEY (`categoriya_id`) REFERENCES `categorii` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tovari` */

insert  into `tovari`(`id`,`categoriya_id`,`nazvanie`,`sena`,`opisanie`,`img`,`status`) values 
(1,2,'Шапка Carhartt WIP Acrylic Watch Dark Grey Heather','99.99','Шапка Carhartt WIP, выполненная из мягкой пряжи на основе акрила. Традиционная форма с отворотом. Шапка представлена в однотонной расцветке, украшенной фирменной нашивкой с логотипом бренда. Незаменимый аксессуар, который подойдет к любому образу.','1',1),
(2,2,'Шапка Carhartt WIP Madison Blue/Blast Red I023675-01.90','99.99','Шапка Carhartt WIP, выполненная из мягкой и приятной пряжи на основе акрила. Традиционная форма с отворотом и средняя длина. Шапка представлена в однотонной расцветке, украшенной лаконичным брендингом. Базовый аксессуар, который будет уместен в любом образе.','2',1),
(3,2,'Шапка Puma x Han Kjobenhavn Vetiver 021383-01','99.99','Шапка Puma, выпущенная в рамках коллаборации с брендом Han Kjobenhavn, который занимается производством универсальной одежды, вдохновленной датским стилем середины двадцатого века. Выполненная из хлопка шапка отлично сохраняет тепло и не раздражает кожу головы. Модель имеет ребристую фактуру и эластичный отворот с ярлычком, украшенным брендингом участников коллаборации.','3',1),
(4,1,'Мужская кепка adidas Consortium RTM Run Thru Time Pack Blue/White CG1865','99.99','Выпущенная в рамках премиальной линейки «Consortium» мужская кепка кепка adidas RTM, выполненная из дышащей синтетики. Модель имеет контрастную расцветку, яркий эластичный ремешок и логотип бренда.','4',1),
(5,1,'Кепка Puma x The Weeknd XO Canvas Black 021675-01','99.99','Кепка Puma, вышедшая в рамках совместной коллекции с талантливым музыкантом и дизайнером The Weeknd. Классическая спортивная форма, регулируемая застёжка сзади и формованный козырёк. Кепка представлена в однотонной расцветке, украшенной контрастной вышивкой с участниками коллаборации.','5',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
