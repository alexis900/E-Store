DROP DATABASE IF EXISTS `e-store`;
CREATE DATABASE `e-store` charset utf8 collate utf8_bin;
USE `e-store`;
CREATE TABLE `permissions` (
  `perm_mod` varchar(5) NOT NULL,
  `perm_id` int(11) NOT NULL,
  `perm_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`perm_mod`,`perm_id`)
) ENGINE=InnoDB;

INSERT INTO `permissions` (`perm_mod`, `perm_id`, `perm_desc`) VALUES
('USR', 1, 'Acceso al usuario'),
('USR', 2, 'Crear nuevos usuarios'),
('USR', 3, 'Actualizar usuarios'),
('USR', 4, 'Eliminar usuarios'),
('ADM', 5, 'Iniciar en el panel de administración'),
('USR', 6, 'Comprador');

CREATE TABLE `roles` (
  `role_id` int AUTO_INCREMENT PRIMARY KEY UNIQUE,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB;

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Administrador'),
(2, 'Usuario con privilegios'),
(3, 'Usuario normal'),
(4, 'Usuario premium');

CREATE TABLE `roles_permissions` (
  `role_id` int(11) NOT NULL,
  `perm_mod` varchar(5) NOT NULL,
  `perm_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`perm_mod`,`perm_id`)
) ENGINE=InnoDB;

INSERT INTO `roles_permissions` (`role_id`, `perm_mod`, `perm_id`) VALUES
(1, 'USR', 1),
(1, 'USR', 2),
(1, 'USR', 3),
(1, 'USR', 4),
(1, 'ADM', 5),
(1, 'USR', 6),
(2, 'USR', 1),
(2, 'USR', 5),
(3, 'USR', 6),
(4, 'USR', 6);

CREATE TABLE `users` (
	`user_id` int PRIMARY KEY AUTO_INCREMENT,
    `email` varchar(255) NOT NULL UNIQUE,
    `user_name` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `reg_date`  timestamp NOT NULL DEFAULT NOW(),
	`image` varchar(255) NOT NULL DEFAULT "/public/images/avatar.png",
    `role_id` int NOT NULL
) ENGINE=InnoDB;

INSERT INTO `users` (`email`, `user_name`, `password`, `role_id`) VALUES
('admin@estore.com', 'Alejandro Martín Pérez', '123456', 1),
('alex@estore.com', 'Alex Malmagro Pulido', '123456', 2),
('biel@gmail.com', 'Biel Carreras Tuxans', '123456', 4);

CREATE TABLE `products` (
  `product_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text,
  `product_price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `products`
  ADD KEY `name` (`product_name`);

CREATE TABLE `product_asset` (
	`asset_id` int NOT NULL AUTO_INCREMENT,
    `asset_product` int NOT NULL,
    `asset` varchar(255) NOT NULL,
    PRIMARY KEY(`asset_id`, `asset_product`)
) ENGINE=InnoDB;