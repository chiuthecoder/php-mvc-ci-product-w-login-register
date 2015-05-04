CREATE SCHEMA `ci_products` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

USE `ci_products`;

CREATE TABLE IF NOT EXISTS `products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  `price` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`)
  );

INSERT INTO `ci_products`.`products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES ('100', 'Toaster', 'Bread warmer', '19.99', '2015/04/01', '2015/04/01');
INSERT INTO `ci_products`.`products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES ('101', 'T-Shirt', 'Cool summer cloth', '9.99', '2015/04/01', '2015/04/01');

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NULL,
  `last_name` VARCHAR(255) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `confirm_password` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`)
  );

