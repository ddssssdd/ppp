/*
SQLyog Ultimate v8.32 
MySQL - 5.5.24-0ubuntu0.12.04.1 : Database - PPP
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `file_tag` */

CREATE TABLE `file_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

/*Data for the table `file_tag` */

insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (2,2,1041,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (3,2,1041,2);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (4,2,1041,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (5,2,1040,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (6,2,1029,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (7,2,1030,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (8,2,1037,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (9,2,1039,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (10,2,1040,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (11,2,1039,2);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (12,2,1041,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (13,2,1041,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (14,2,1033,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (15,2,1019,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (16,2,1034,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (17,2,1026,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (18,2,1024,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (19,2,1032,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (20,2,1031,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (21,2,1033,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (22,2,1040,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (23,2,1039,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (24,2,1037,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (25,2,1032,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (26,2,1031,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (27,2,1039,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (28,2,1038,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (29,2,1011,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (30,2,1012,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (31,2,1016,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (32,2,1040,2);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (33,2,1034,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (34,2,1034,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (35,2,1027,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (36,2,1030,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (37,2,1018,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (38,2,1018,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (39,2,1012,2);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (40,2,1013,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (41,2,1010,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (42,2,1020,3);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (43,2,1025,2);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (44,2,1017,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (45,2,1023,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (46,2,1009,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (47,2,1022,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (48,2,1036,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (49,2,1035,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (50,2,1028,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (51,2,1021,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (52,2,1014,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (53,2,1007,5);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (54,2,1008,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (55,2,1015,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (56,2,1040,1);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (57,2,1033,4);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (58,2,1041,0);
insert  into `file_tag`(`id`,`user_id`,`file_id`,`tag_id`) values (59,2,1036,0);

/*Table structure for table `file_type` */

CREATE TABLE `file_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `type_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `file_type` */

insert  into `file_type`(`id`,`name`,`type_name`) values (8,'image/gif','picture');
insert  into `file_type`(`id`,`name`,`type_name`) values (9,'image/jpeg','picture');
insert  into `file_type`(`id`,`name`,`type_name`) values (10,'image/png','picture');
insert  into `file_type`(`id`,`name`,`type_name`) values (11,'application/pdf','book');
insert  into `file_type`(`id`,`name`,`type_name`) values (12,'application/msword','book');
insert  into `file_type`(`id`,`name`,`type_name`) values (13,'application/x-shockwave-flash','picture');
insert  into `file_type`(`id`,`name`,`type_name`) values (14,'video/x-ms-wmv','video');
insert  into `file_type`(`id`,`name`,`type_name`) values (15,'application/octet-stream','book');
insert  into `file_type`(`id`,`name`,`type_name`) values (16,'text/plain','book');
insert  into `file_type`(`id`,`name`,`type_name`) values (17,'audio/mp3','audio');
insert  into `file_type`(`id`,`name`,`type_name`) values (18,'video/mpeg','video');
insert  into `file_type`(`id`,`name`,`type_name`) values (19,'video/3gpp','video');
insert  into `file_type`(`id`,`name`,`type_name`) values (20,'video/mp4','video');

/*Table structure for table `project_type` */

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `project_type` */

insert  into `project_type`(`id`,`name`,`description`) values (10,'aa','bb');
insert  into `project_type`(`id`,`name`,`description`) values (11,'b','c');
insert  into `project_type`(`id`,`name`,`description`) values (12,'fd','ss');
insert  into `project_type`(`id`,`name`,`description`) values (14,'d2','s2');
insert  into `project_type`(`id`,`name`,`description`) values (15,'d2','s2');

/*Table structure for table `projects` */

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `begin_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `project_type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `source_control_type` int(11) DEFAULT NULL,
  `source_control_url` varchar(255) DEFAULT NULL,
  `ci_url` varchar(255) DEFAULT NULL,
  `pm_id` int(11) DEFAULT NULL,
  `jira_url` varchar(255) DEFAULT NULL,
  `asana_url` varchar(255) DEFAULT NULL,
  `time_code` varchar(50) DEFAULT NULL,
  `release_server_address` varchar(255) DEFAULT NULL,
  `remote_usernamr` varchar(50) DEFAULT NULL,
  `remote_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `projects` */

/*Table structure for table `source_control_servers` */

CREATE TABLE `source_control_servers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `server_address` varchar(255) DEFAULT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `source_control_servers` */

insert  into `source_control_servers`(`id`,`name`,`description`,`server_address`,`admin_name`,`admin_password`) values (1,'a','d','d','d','d');
insert  into `source_control_servers`(`id`,`name`,`description`,`server_address`,`admin_name`,`admin_password`) values (2,'d','asd','sdf','sdf','sad');
insert  into `source_control_servers`(`id`,`name`,`description`,`server_address`,`admin_name`,`admin_password`) values (3,'d','asda','sdfa','sdfa','sad');
insert  into `source_control_servers`(`id`,`name`,`description`,`server_address`,`admin_name`,`admin_password`) values (4,'d','asda','sdfaddd','sdfasss','ss');

/*Table structure for table `status` */

CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `status` */

/*Table structure for table `uploads` */

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_url` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file_type` varchar(40) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1057 DEFAULT CHARSET=utf8;

/*Data for the table `uploads` */

insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1003,'/files/2/6e68a8a3032c16bf29f71c661104fbb7.png','IMG_0238.PNG','image/png',812181,640,960,'2012-11-15 10:02:34','/files/2/medium/6e68a8a3032c16bf29f71c661104fbb7.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1004,'/files/2/f9b259196cb0896f798498f7e83a51d7.jpg','照片+007.jpg','image/jpeg',144822,1600,1200,'2012-11-15 10:02:34','/files/2/medium/f9b259196cb0896f798498f7e83a51d7.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1006,'/files/2/990c4dd363ef82dd9a2b4963c7b7d627.jpg','照片+007.jpg','image/jpeg',144822,1600,1200,'2012-11-15 10:03:25','/files/2/medium/990c4dd363ef82dd9a2b4963c7b7d627.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1007,'/files/2/f21648e6e7d01316ff6fbfc619e18449.pdf','Erlang程序设计中文版（完整书签）.pdf','application/pdf',14946400,NULL,NULL,'2012-11-16 00:32:59','/files/2/medium/9b12c629758e98e70b94aa0758a9b865.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1008,'/files/2/083053e0ca9fbab662a7a2d84d0ac941.pdf','[Erlang.and.OTP.实战].(Erlang.and.OTP.in.Action).M.Logan&amp;E.Merritt&amp;R.Carlsson.文字版.pdf','application/pdf',3151503,NULL,NULL,'2012-11-16 01:15:42','/files/2/medium/a07597b76cafbba3fb7ed3c9c8155a4a.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1009,'/files/2/eeb1ee038ad16aceb89998eff0ded94f.pdf','ActionScript+3+CookBook+简体中文版.pdf','application/pdf',1716168,NULL,NULL,'2012-11-16 01:20:13','/files/2/medium/0c35aac029a763519122ae04bf2eb6b1.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1010,'/files/2/741d1d02fd5fab0ca0a6abce1cdfe220.pdf','20370703.pdf','application/pdf',2837303,NULL,NULL,'2012-11-16 01:20:14','/files/2/medium/8aea0002d868c7f5aafee14fe44b5438.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1011,'/files/2/c6d559c2d0c726754d1e302ba1afc840.pdf','ActionScript3.0经典教程.pdf','application/pdf',2839688,NULL,NULL,'2012-11-16 01:20:14','/files/2/medium/9478bdb8259afcfb64cf0aa4c5c068cb.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1012,'/files/2/357330ca1816643d41d1c80d78e7bc54.pdf','AdvancED make things move 中文版.pdf','application/pdf',4479450,NULL,NULL,'2012-11-16 01:20:14','/files/2/medium/47ed5adf8dfe2e83355ae8fdb746e460.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1013,'/files/2/8d46a717ae20115bee4afec182f243f9.pdf','actionscript 3.0.pdf','application/pdf',4246354,NULL,NULL,'2012-11-16 01:20:14','/files/2/medium/08647911e3a24cde892a8bd5f2777141.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1014,'/files/2/9d53f1c5c18153ba099f2a3c48b32175.pdf','[Flash.Builder.4.&.Flex.4.宝典].Flash.Builder.4.and.Flex.4.Bible.pdf','application/pdf',13434765,NULL,NULL,'2012-11-16 01:20:14','/files/2/medium/7b4a67bf976f4923edcb23fac4c2dec7.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1015,'/files/2/c12dbe3164ba3783a23515498cc2b7da.pdf','FriendsofED.Foundation.Actionscript.3.0.Animation.pdf','application/pdf',3526240,NULL,NULL,'2012-11-16 01:36:49','/files/2/medium/1cc2c0e7e5cf6a28692351edd490e9e3.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1016,'/files/2/81abedab410c0e0dcf5fe5e736c1ef61.pdf','flash_as3_components_help.pdf','application/pdf',3733863,NULL,NULL,'2012-11-16 01:36:49','/files/2/medium/f3f9a5bbab0d7f222b17145cfa6ad93f.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1017,'/files/2/ad227fb96c2d67377e48399d9338b708.pdf','Flash_10_Multiplayer_Game_Essentials.pdf','application/pdf',5798465,NULL,NULL,'2012-11-16 01:36:49','/files/2/medium/cf66209fe28d6e4e23af497f14f4a541.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1018,'/files/2/917b4aa941f81c419c36745804ff7722.pdf','flash_as3_programming.pdf','application/pdf',11237819,NULL,NULL,'2012-11-16 01:36:49','/files/2/medium/d845f2efbf951229e7de27d8793b8520.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1019,'/files/2/f7ac8ca8301e2eac1d1b124c42b704a3.pdf','Flash.ActionScript3.殿堂之路.pdf','application/pdf',37511343,NULL,NULL,'2012-11-16 01:36:50','/files/2/medium/d171c6ba32d4d710670b1be0d528abbd.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1020,'/files/2/e8c075174ce992aa1f44815c60c6a993.pdf','[iPhone和iPad开发书籍大全].iPhone.App.Entrepreneur(Rockable.2010-10).pdf','application/pdf',2440817,NULL,NULL,'2012-11-16 03:34:56','/files/2/medium/b98613ea0800bf7c46c8b7238029cf31.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1021,'/files/2/79b3d585d248a0e8b78ca89852df0f66.pdf','[iPhone和iPad开发书籍大全].Take.Control.of.iPhone.Basics,iOS.4.Edition(TidBITS.2010-10).pdf','application/pdf',1850609,NULL,NULL,'2012-11-16 03:34:56','/files/2/medium/6fecfdfe8536f849996ff81ce3287fd8.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1022,'/files/2/b0123f5d8bdf52ed44527a0e52804a41.pdf','[iPhone和iPad开发书籍大全].Objective.C.Visual.QuickStart.Guide(Peachpit.Press.2010-02).pdf','application/pdf',3538611,NULL,NULL,'2012-11-16 03:34:56','/files/2/medium/030116e40651364cb28aa074d6dbf312.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1023,'/files/2/79b70dc893dc6fa2bec147bc48719a45.pdf','[iPhone和iPad开发书籍大全].Pro.Smartphone.Cross-Platform.Development(Apress.2010-09).pdf','application/pdf',8836194,NULL,NULL,'2012-11-16 03:34:57','/files/2/medium/e0aaf55a4ba93c90bf8b648987634fc0.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1024,'/files/2/1a6776b03b9045002b776581f1ae4fe3.pdf','[iPhone和iPad开发书籍大全].Professional.iPhone.and.iPad.Application.Development(Wrox.2010-11).pdf','application/pdf',10921816,NULL,NULL,'2012-11-16 03:34:57','/files/2/medium/6b30e81107fea3e97c0e9e88e7a8c930.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1025,'/files/2/0ee6847b41b66650a167c790b5f38b1b.pdf','[iPhone和iPad开发书籍大全].The.iPad.Pocket.Guide(Peachpit.Press.2010-05).pdf','application/pdf',6665791,NULL,NULL,'2012-11-16 03:34:57','/files/2/medium/06d4cda2d13865467146ee6433a48f76.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1026,'/files/2/82a209e04d0ab743c89456b8de884f0f.pdf','[iPhone开发书籍大全].Beginning.Mac.Programming(Pragmatic.2010-3).pdf','application/pdf',5783579,NULL,NULL,'2012-11-16 03:34:59','/files/2/medium/7a2ae5c4c6c65885d12dc6c644e0113c.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1027,'/files/2/0e9a60ee8202b6834ee1f2a96754220e.pdf','[iPhone开发书籍大全].Beginning.iPhone.Development(Apress.2008-11).pdf','application/pdf',18949862,NULL,NULL,'2012-11-16 03:35:00','/files/2/medium/e9d965911e00990ef31c0a867b19e940.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1028,'/files/2/4f16f3634ba78f90b6080a287a00511b.pdf','[iPhone和iPad开发书籍大全].Professional.iPhone.and.iPad.Database.Application.Programming(Wrox.2010-10).pdf','application/pdf',25101255,NULL,NULL,'2012-11-16 03:35:01','/files/2/medium/e62d64479ce68681dadae33b916bab66.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1029,'/files/2/8336979168f548bf1fb256bd9f3b2bc9.pdf','[iPhone开发书籍大全].Head.First.iPhone.Development.(O\'Reilly.2009-11).pdf','application/pdf',16439014,NULL,NULL,'2012-11-16 03:35:02','/files/2/medium/16abb7805a244343a938b39c1258a564.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1030,'/files/2/0a451afa1d630ca88283fb452a026554.pdf','[Mac.OS.X开发系列电子书].Beginning.Mac.OS.X.Tiger.Dashboard.Widget.Development.pdf','application/pdf',9696689,NULL,NULL,'2012-11-16 03:35:05','/files/2/medium/fc20e6ee62390069951a35020ac7a01c.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1031,'/files/2/27242941830c494afd6cac79c5cf67e5.pdf','[Mac.OS.X开发系列电子书].Professional.iPhone.and.iPod.Touch.Programming.pdf','application/pdf',6557537,NULL,NULL,'2012-11-16 03:35:05','/files/2/medium/c22a71c25591ac7460d6d4761fa8edbd.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1032,'/files/2/6c5e83b3b0a9391a1d208a8e673a5b36.pdf','[iPhone开发书籍大全].iPhone.Application.Development.For.Dummies,2nd(Wiley.2009-11).pdf','application/pdf',15391762,NULL,NULL,'2012-11-16 03:35:06','/files/2/medium/107bc6cd88311847998e3c06cab42122.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1033,'/files/2/5a54e78ee7785c8e85c24f71d3dcb908.pdf','[iPhone开发书籍大全].Beginning.iPhone.3.Development,Exploring.the.iPhone.SDK(Apress,2009-7).pdf','application/pdf',32562495,NULL,NULL,'2012-11-16 03:35:06','/files/2/medium/6da8f436be940e28f3ba4b3c0b5acd7e.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1034,'/files/2/995aeaf1aaba6daee1a00d92a6e811ec.pdf','[iPhone和iPad开发书籍大全].Beginning.iPad.Development.for.iPhone.Developers.Mastering.the.iPad.SDK(Apress.2010-07).pdf','application/pdf',6235854,NULL,NULL,'2012-11-16 03:35:07','/files/2/medium/60c6743f9cfd9cde90b91930427f0e91.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1035,'/files/2/5b69357c7538ddb3f5e045a1f6857965.pdf','[iPhone和iPad开发书籍大全].iPad.Programming(Pragmatic.2010-10).pdf','application/pdf',4646405,NULL,NULL,'2012-11-16 03:35:08','/files/2/medium/a17f4ec12424359c3f99b138e1cbd424.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1036,'/files/2/6311ec4dbd986169ee3bb34249691cb0.pdf','[iPad&amp;iPhone果友_iPad&amp;iPhoneUser].2011.03.英文版.pdf','application/pdf',36932323,NULL,NULL,'2012-11-16 03:35:11','/files/2/medium/dbef5cd55dc83ec5e53afc0fe9a46a4c.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1037,'/files/2/04f566ce96d534e8b3391d52908375a1.pdf','[iPhone开发书籍大全].Beginning.iPhone.SDK.Programming.with.Objective-C(Wrox.2010-01).pdf','application/pdf',62786869,NULL,NULL,'2012-11-16 03:35:15','/files/2/medium/1109bb712261b898469369b842bc12a5.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1038,'/files/2/4e64719584342a75ea614b829b6aec78.pdf','[iPad&amp;iPhone果友_iPad&amp;iPhoneUser].2011.01.英文版.pdf','application/pdf',71574479,NULL,NULL,'2012-11-16 03:35:18','/files/2/medium/cbc3f73e8b69b08db17e17208d1a518a.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1039,'/files/2/35c317cd87bc0b91a424bbf235316f18.pdf','How_We_Test_Software_at_Microsoft.pdf','application/pdf',3308356,NULL,NULL,'2012-11-16 04:17:12','/files/2/medium/6bfe094b92b4edfc84dde56c9fafb697.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1040,'/files/2/c73c95218eecb2976af0ab839d276c20.pdf','Microsoft.Press.CLR.via.Csharp.3rd.Edition.Feb.2010.pdf','application/pdf',37971651,NULL,NULL,'2012-11-16 04:17:43','/files/2/medium/f0b04da2f6fba5706f15ac05ddd65ab5.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1041,'/files/2/ddd1c8a7b6c1898f4be69aa0fd12615a.pdf','2013 Tax Guide-1.fixed.pdf','application/pdf',181667299,NULL,NULL,'2012-11-16 04:19:24','/files/2/medium/fb26e4e3a2413754ca36f0bf06784b29.png');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1042,'/files/2/8883ec3af68cfd4217d11dbe740fe203.jpg','Lighthouse.jpg','image/jpeg',561276,1024,768,'2012-11-16 04:23:18','/files/2/medium/8883ec3af68cfd4217d11dbe740fe203.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1043,'/files/2/19f34c448fe3a094be48d034f2c70a3e.jpg','Koala.jpg','image/jpeg',780831,1024,768,'2012-11-16 04:23:18','/files/2/medium/19f34c448fe3a094be48d034f2c70a3e.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1044,'/files/2/a2e38219897fa351fb5dd70a63236e17.jpg','Tulips.jpg','image/jpeg',620888,1024,768,'2012-11-16 04:23:18','/files/2/medium/a2e38219897fa351fb5dd70a63236e17.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1045,'/files/2/6eafc57b8c6c5a05fd07c4cd6dbc107c.jpg','Desert.jpg','image/jpeg',845941,1024,768,'2012-11-16 04:23:19','/files/2/medium/6eafc57b8c6c5a05fd07c4cd6dbc107c.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1046,'/files/2/d88df08c2817dd6543da29894700f277.jpg','Chrysanthemum.jpg','image/jpeg',879394,1024,768,'2012-11-16 04:23:19','/files/2/medium/d88df08c2817dd6543da29894700f277.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1047,'/files/2/17afb7cb7a42ea0a7f213c07531650d0.jpg','Penguins.jpg','image/jpeg',777835,1024,768,'2012-11-16 04:23:19','/files/2/medium/17afb7cb7a42ea0a7f213c07531650d0.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1048,'/files/2/36e12ef6447cbe9f54f5a61cb598affc.jpg','Hydrangeas.jpg','image/jpeg',595284,1024,768,'2012-11-16 04:23:19','/files/2/medium/36e12ef6447cbe9f54f5a61cb598affc.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1049,'/files/2/4bf9e715c45476bf60b78a8a987f873b.jpg','Jellyfish.jpg','image/jpeg',775702,1024,768,'2012-11-16 04:23:19','/files/2/medium/4bf9e715c45476bf60b78a8a987f873b.jpg');
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1050,'/files/2/763d5fac44bf5c9f54867aa1c2136778.mp3','akon-smack that.mp3','audio/mp3',3390485,NULL,NULL,'2012-11-16 04:25:36',NULL);
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1051,'/files/2/e6ed2297fe271271463d2f77b63f6854.mp3','Anita Lehtola-Ievan Polkka.mp3','audio/mp3',3704305,NULL,NULL,'2012-11-16 04:25:36',NULL);
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1052,'/files/2/c6ecfca4f21093e4719d863084bfb2fc.mp3','akon-right now.mp3','audio/mp3',3955127,NULL,NULL,'2012-11-16 04:25:36',NULL);
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1053,'/files/2/1d3ff7d87b3619d24ae06dce6a41d312.mp3','atomic kitten-nothing in the world.mp3','audio/mp3',5736616,NULL,NULL,'2012-11-16 04:25:37',NULL);
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1054,'/files/2/3ac0745de05b8942ce0cd7451b35c018.mp3','Baby I\'m Sorry.mp3','audio/mp3',6141952,NULL,NULL,'2012-11-16 04:25:37',NULL);
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1055,'/files/2/be6033833359e7b831a63abdfa40353c.mp4','Exam480Mod2Part1.mp4','video/mp4',146101363,NULL,NULL,'2012-11-16 08:22:55',NULL);
insert  into `uploads`(`id`,`file_url`,`filename`,`file_type`,`size`,`width`,`height`,`upload_date`,`thumbnail_url`) values (1056,'/files/2/3d60b019da2c73ea6823f21ce5f3bcbe.mp4','Exam480Mod1Part1_high.mp4','video/mp4',219327418,NULL,NULL,'2012-11-16 08:25:11',NULL);

/*Table structure for table `user_tag` */

CREATE TABLE `user_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `user_tag` */

insert  into `user_tag`(`id`,`user_id`,`name`) values (1,2,'Others');
insert  into `user_tag`(`id`,`user_id`,`name`) values (2,2,'C');
insert  into `user_tag`(`id`,`user_id`,`name`) values (3,2,'Microsoft');
insert  into `user_tag`(`id`,`user_id`,`name`) values (4,2,'aabb');
insert  into `user_tag`(`id`,`user_id`,`name`) values (5,2,'Android');

/*Table structure for table `user_upload` */

CREATE TABLE `user_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1046 DEFAULT CHARSET=utf8;

/*Data for the table `user_upload` */

insert  into `user_upload`(`id`,`user_id`,`file_id`) values (992,2,1003);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (993,2,1004);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (995,2,1006);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (996,2,1007);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (997,2,1008);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (998,2,1009);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (999,2,1010);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1000,2,1011);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1001,2,1012);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1002,2,1013);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1003,2,1014);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1004,2,1015);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1005,2,1016);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1006,2,1017);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1007,2,1018);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1008,2,1019);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1009,2,1020);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1010,2,1021);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1011,2,1022);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1012,2,1023);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1013,2,1024);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1014,2,1025);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1015,2,1026);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1016,2,1027);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1017,2,1028);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1018,2,1029);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1019,2,1030);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1020,2,1031);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1021,2,1032);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1022,2,1033);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1023,2,1034);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1024,2,1035);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1025,2,1036);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1026,2,1037);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1027,2,1038);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1028,2,1039);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1029,2,1040);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1030,2,1041);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1031,2,1042);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1032,2,1043);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1033,2,1044);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1034,2,1045);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1035,2,1046);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1036,2,1047);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1037,2,1048);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1038,2,1049);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1039,2,1050);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1040,2,1051);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1041,2,1052);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1042,2,1053);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1043,2,1054);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1044,2,1055);
insert  into `user_upload`(`id`,`user_id`,`file_id`) values (1045,2,1056);

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`firstname`,`lastname`,`password`,`birthday`) values (2,'a@a.com','a','b','c',NULL);
insert  into `users`(`id`,`email`,`firstname`,`lastname`,`password`,`birthday`) values (5,'kzhang@synvata.com','Knight','Zhang','knight','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
