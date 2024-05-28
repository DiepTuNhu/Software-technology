CREATE TABLE `categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `created_at` timestamp DEFAULT (CURRENT_TIMESTAMP),
  `updated_at` timestamp DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `food` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `price` float,
  `unit` varchar(255),
  `description` text,
  `id_category` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `image` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `image` varchar(255),
  `id_food` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `ingredient` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `id_food` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `service_point` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `description` text,
  `address` varchar(255),
  `open_time` time,
  `close_time` time,
  `id_food` int,
  `image` varchar(255),
  `phone` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `fullname` varchar(255),
  `password` varchar(255),
  `email` varchar(255) UNIQUE,
  `address` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp
);

ALTER TABLE `food` ADD FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

ALTER TABLE `image` ADD FOREIGN KEY (`id_food`) REFERENCES `food` (`id`);

ALTER TABLE `ingredient` ADD FOREIGN KEY (`id_food`) REFERENCES `food` (`id`);

ALTER TABLE `service_point` ADD FOREIGN KEY (`id_food`) REFERENCES `food` (`id`);
