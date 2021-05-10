CREATE DATABASE IF NOT EXISTS oop_pdo;

CREATE  TABLE IF NOT EXISTS `oop_pdo`.`users` (
  `id` INT  AUTOINCREMENT ,
  `name` VARCHAR(150) NOT NULL ,
  `birthday` datetime(6) ,
  `address` VARCHAR(255) ,
  `mobile_no` TEXT ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;