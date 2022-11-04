CREATE DATABASE  IF NOT EXISTS `cash_book`;
USE `cash_book`;


DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` enum('counter','admin') NOT NULL DEFAULT 'counter',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
);

INSERT INTO `user` VALUES (1,'Cândido','candido.cimol@gmail.com','45b45c21a0cdd1479235e69c936a09e6','admin');

