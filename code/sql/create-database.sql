DROP DATABASE IF EXISTS hardb;

CREATE DATABASE hardb;


DROP TABLE IF EXISTS `users` ;
CREATE TABLE IF NOT EXISTS  `users` (
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `type` ENUM('user', 'admin') NOT NULL DEFAULT 'user',
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`email`)
 )
ENGINE = MariaDB
DEFAULT CHARACTER SET = utf8;


DROP TABLE IF EXISTS `data` ;
CREATE TABLE IF NOT EXISTS `data` (
  `user_email` VARCHAR(255) NOT NULL,
  `startedDateTime` VARCHAR(255) NOT NULL,
  `wait` INT(11),
  `serverIPAddress` VARCHAR(255) NOT NULL,
  `method` VARCHAR(45) NOT NULL,
  `domain_name` VARCHAR(255) NOT NULL,
  `status` INT(11) NOT NULL,
  `statusText` VARCHAR(255) NOT NULL,
  `content-type` VARCHAR(255) NOT NULL,
  `cache-control` VARCHAR(255) NOT NULL,
  `pragma` VARCHAR(255) NOT NULL,
  `expires` VARCHAR(255) NOT NULL,
  `age` INT(11) NOT NULL ,
  `last-modified` VARCHAR(255) NOT NULL,
  `host` VARCHAR(255) NOT NULL,
  `paroxos` VARCHAR(255),
  `city` VARCHAR(255),
  `geo_loc` VARCHAR(255),
  PRIMARY KEY (`startedDateTime`, `user_email`),
   CONSTRAINT `act_user` FOREIGN KEY (`user_email`) REFERENCES `users`(`email`)
    ON DELETE CASCADE ON UPDATE CASCADE
  )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
