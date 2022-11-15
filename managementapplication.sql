--
-- Table structure for table `contracts`
--
DROP TABLE IF EXISTS `contracts`;
CREATE TABLE `contracts` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `description` varchar(254) NOT NULL,
  `contract_number` varchar(254) NOT NULL,
  `position` varchar(254) NOT NULL,
  `per_month` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(254) NOT NULL,
  `note` text NOT NULL,
  `image` varchar(254) NOT NULL,
  `file_name` varchar(254) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
);
--
-- Table structure for table `devices`
--
DROP TABLE IF EXISTS `devices`;
CREATE TABLE `devices` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `devicename` varchar(254) NOT NULL,
  `model_number` varchar(256) NOT NULL,
  `serial_number` varchar(256) NOT NULL,
  `ip` varchar(254) NOT NULL,
  `mac` varchar(254) NOT NULL,
  `hostname` varchar(256) NOT NULL,
  `location` varchar(254) NOT NULL,
  `status` varchar(254) NOT NULL,
  `price` varchar(256) NOT NULL,
  `purchase_date` date NOT NULL,
  `note` text NOT NULL,
  `image` varchar(254) NOT NULL,
  `file_name` varchar(254) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
);

DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `description` varchar(254) NOT NULL,
  `document_number` varchar(254) NOT NULL,
  `position` varchar(254) NOT NULL,
  `note` text NOT NULL,
  `image` varchar(254) NOT NULL,
  `file_name` varchar(254) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
);
--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(255) NOT NULL ,
  `passwort` VARCHAR(255) NOT NULL ,
  `vorname` VARCHAR(255) NOT NULL DEFAULT '' ,
  `nachname` VARCHAR(255) NOT NULL DEFAULT '' ,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`), UNIQUE (`email`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Dumping default-data for table `users`
--
LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'admin@mail.com','$2y$10$sae6FGUPFD29U2UvdRPv5Opij6jKev1pHJ7w2mqlNE7thkAZuxPGe','admin','admin','2021-05-14 11:37:09','2021-05-14 11:37:09');
UNLOCK TABLES;
