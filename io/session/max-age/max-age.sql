DROP DATABASE was;
CREATE DATABASE was;
use was;

CREATE TABLE `vul_cookie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL,
  `sessionID` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

CREATE TABLE `def_cookie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL,
    `sessionID` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

INSERT INTO `def_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('admin@example.com', MD5('admin123'), 'f795e741afc05884fdf3a9a962a68646', '');
INSERT INTO `def_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('adminH@example.com', '$2a$12$7e63c79e6f2c5e5ff1a85OC2a4cc7X5Z5tHaY3b4gqlT3GnUNi3Me', '1f05dff922a4c9ccbac59ae4e1ffa7bd', '');
INSERT INTO `def_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('user1@example.com', MD5('cowboy'), 'F', '');
INSERT INTO `vul_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('user2@example.com', MD5('cowboy'), '2ac5414ea8d65a16057661b8eaab7722', 'ID=2ac5414ea8d65a16057661b8eaab7722; expires=Tue, 08-Feb-2022 07:28:37 GMT; Max-Age=9999999; path=/; domain=localhost; secure; SameSite=None');
INSERT INTO `vul_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('user3@example.com', MD5('account'),'be4cdca398423cdef4e192dfcab513b8', 'ID=be4cdca398423cdef4e192dfcab513b8; expires=Tue, 08-Feb-2022 07:35:20 GMT; Max-Age=9999999; path=/; domain=localhost; secure; SameSite=None');
INSERT INTO `def_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('user4@example.com', MD5('pass'), '00000000000000000000000000000000', '');
INSERT INTO `vul_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('user5@example.com', MD5('pass123'), 'f795e741afc05884fdf3a9a962a68646', 'ID=f795e741afc05884fdf3a9a962a68646; expires=Tue, 08-Feb-2022 07:36:24 GMT; Max-Age=9999999; path=/; domain=localhost; secure; SameSite=None');
INSERT INTO `def_cookie` (`email`, `pswd`, `sessionID`,`cookie`) VALUES ('user6@example.com', MD5('apple'), '66184610271681a8f9c00fbb2cb73aa8', '');
