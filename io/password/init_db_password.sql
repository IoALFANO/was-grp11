DROP DATABASE was;
CREATE DATABASE was;
use was;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL,
  `sessionID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('admin@example.com', MD5('admin123'), 'A');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('adminH@example.com', '$2a$12$7e63c79e6f2c5e5ff1a85OC2a4cc7X5Z5tHaY3b4gqlT3GnUNi3Me', '1f05dff922a4c9ccbac59ae4e1ffa7bd');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('user1@example.com', MD5('cowboy'), '');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('user2@example.com', MD5('cowboy'), '');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('user3@example.com', MD5('account'),'');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('user4@example.com', MD5('pass'), '');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('user5@example.com', MD5('pass123'), '');
INSERT INTO `users` (`email`, `pswd`, `sessionID`) VALUES ('user6@example.com', MD5('apple'), '');
