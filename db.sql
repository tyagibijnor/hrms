/*
SQLyog Community Edition- MySQL GUI v7.12 RC
MySQL - 5.5.5-10.3.16-MariaDB : Database - db_hrms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_hrms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_hrms`;

/*Table structure for table `applicants` */

DROP TABLE IF EXISTS `applicants`;

CREATE TABLE `applicants` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `salary_expectation` varchar(50) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `application_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `applicants` */

insert  into `applicants`(`applicant_id`,`vacancy_id`,`first_name`,`last_name`,`contact_no`,`email`,`date_of_birth`,`qualification`,`gender`,`salary_expectation`,`experience`,`comments`,`application_date`,`status`) values (1,2,'Navneet','Tyagi','7024146096','tyagd@gmail.com','2019-10-04','MCA','1','40','2','ta\\ks7','2019-08-04 17:14:16',1),(2,1,'Navneet','Tyagi','7024146096','tyagd@gmail.com','2019-10-04','MCA','1','40','2','testing','2019-08-04 17:14:58',1),(3,2,'Test','TEst','7878887','tes@tes.com','2009-12-09','BA','1','55','5','NA','2019-08-05 18:36:06',1),(4,1,'Testing','fdsafasf','7878887','tes@tes.com','2019-08-06','BAf','1','55','5','NA','2019-08-06 15:34:51',1);

/*Table structure for table `attendances` */

DROP TABLE IF EXISTS `attendances`;

CREATE TABLE `attendances` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `attendances` */

/*Table structure for table `designations` */

DROP TABLE IF EXISTS `designations`;

CREATE TABLE `designations` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `designations` */

insert  into `designations`(`designation_id`,`designation_name`,`description`) values (1,'HR','This is test'),(2,'Manager','This is test'),(3,'Team Lead','This is test'),(4,'Developer','This is test'),(5,'Software Engineer','This is test'),(6,'Operation Manager','This is test'),(7,'BA','This is');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `basic_pay` varchar(50) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

insert  into `employees`(`employee_id`,`designation_id`,`first_name`,`last_name`,`address`,`contact_no`,`joining_date`,`username`,`password`,`basic_pay`,`create_date`,`status`) values (1,1,'Venu','Dantu','Moradabad','7024146096','2016-01-01','admin','admin','60','2019-08-04 13:03:29',1),(2,2,'Navneet Kumar ji','Tyagi','Delhi','8954101095','2016-10-08','tyagi','tyagi','55','2019-08-06 12:56:38',1),(3,3,'Viajay','Sharma','Shimla','8970587465','2019-08-06','demo','demo','90','2019-08-06 13:13:16',1);

/*Table structure for table `hrmsusers` */

DROP TABLE IF EXISTS `hrmsusers`;

CREATE TABLE `hrmsusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `contactno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `appliedfor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `hrmsusers` */

insert  into `hrmsusers`(`user_id`,`name`,`date_of_birth`,`contactno`,`email`,`appliedfor`) values (1,'Navneet','2019-08-03 17:20:00','8954101095','tyy@tyag.com','Software Eng'),(2,'Nabbu','2016-11-06 19:22:00','7024146096','fhs@ggs.com','Software Eng'),(3,'Nabbu','2016-11-06 19:22:00','7024146096','fhs@ggs.com','Software Eng'),(4,'Navneet','2019-08-03 17:24:00','7024146096','hh@hh.com','Software Eng'),(5,'Rajesh','2019-08-07 17:25:00','7024146096','tyty@tyasdf.com','Software Eng');

/*Table structure for table `interview_schedules` */

DROP TABLE IF EXISTS `interview_schedules`;

CREATE TABLE `interview_schedules` (
  `interview_id` int(11) NOT NULL AUTO_INCREMENT,
  `selection_round` varchar(50) DEFAULT NULL,
  `vacancy_id` int(11) DEFAULT NULL,
  `interview_date_time` datetime DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`interview_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `interview_schedules` */

/*Table structure for table `leaves` */

DROP TABLE IF EXISTS `leaves`;

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `leave_from` datetime DEFAULT NULL,
  `leave_to` datetime DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `leaves` */

/*Table structure for table `project_allocations` */

DROP TABLE IF EXISTS `project_allocations`;

CREATE TABLE `project_allocations` (
  `proj_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`proj_allocation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `project_allocations` */

/*Table structure for table `projects` */

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_title` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `projects` */

insert  into `projects`(`project_id`,`project_title`,`description`,`start_date`,`end_date`,`status`) values (1,'Test Project','This is test project','2019-01-06 00:00:00','2019-10-06 00:00:00',1),(2,'New Project','This is test project','2019-08-08 00:00:00','2019-09-08 00:00:00',1);

/*Table structure for table `status_applicants` */

DROP TABLE IF EXISTS `status_applicants`;

CREATE TABLE `status_applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `status_applicants` */

insert  into `status_applicants`(`id`,`value`) values (1,'Applied'),(2,'Under Intial Review'),(3,'Shortlisted for interview'),(4,'Interview Scheduled'),(5,'Application Rejected'),(6,'Final Selection');

/*Table structure for table `status_interview` */

DROP TABLE IF EXISTS `status_interview`;

CREATE TABLE `status_interview` (
  `id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_interview` */

insert  into `status_interview`(`id`,`value`) values (0,'Inactive'),(1,'Active');

/*Table structure for table `status_leave` */

DROP TABLE IF EXISTS `status_leave`;

CREATE TABLE `status_leave` (
  `id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_leave` */

insert  into `status_leave`(`id`,`value`) values (0,'Pending,'),(1,'Approved'),(1,'Rejected');

/*Table structure for table `status_project` */

DROP TABLE IF EXISTS `status_project`;

CREATE TABLE `status_project` (
  `id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_project` */

insert  into `status_project`(`id`,`value`) values (0,'Finished,'),(1,'In Progress');

/*Table structure for table `status_status` */

DROP TABLE IF EXISTS `status_status`;

CREATE TABLE `status_status` (
  `id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_status` */

insert  into `status_status`(`id`,`value`) values (0,'Inactive'),(1,'Active');

/*Table structure for table `status_vacancy` */

DROP TABLE IF EXISTS `status_vacancy`;

CREATE TABLE `status_vacancy` (
  `id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_vacancy` */

insert  into `status_vacancy`(`id`,`value`) values (0,'Inactive'),(1,'Active');

/*Table structure for table `tblgender` */

DROP TABLE IF EXISTS `tblgender`;

CREATE TABLE `tblgender` (
  `id` int(11) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblgender` */

insert  into `tblgender`(`id`,`value`) values (0,'Male'),(1,'Female');

/*Table structure for table `vacancies` */

DROP TABLE IF EXISTS `vacancies`;

CREATE TABLE `vacancies` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `last_application_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`vacancy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `vacancies` */

insert  into `vacancies`(`vacancy_id`,`title`,`designation_id`,`description`,`qualification`,`experience`,`age`,`last_application_date`,`status`) values (1,'Test',1,'This is test','12',4,'25','2019-11-06 00:00:00',1),(2,'Software Eng',1,'This is test','12',8,'25','2019-08-06 00:00:00',1),(3,'This is new post',4,'Test Description','Btech',5,'70','2019-10-08 00:00:00',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
