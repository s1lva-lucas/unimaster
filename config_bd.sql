#Here you must change the field user and password with your personal information.

CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';

create database 'hotspot';

CREATE TABLE IF NOT EXISTS `creds` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(30) NOT NULL,
  `celphone` varchar(13) NOT NULL, 
  `mac` varchar(17),
  `ap` varchar(17),
  `login_time` varchar(20),
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

GRANT SELECT ON hotspot.* TO 'user'@'localhost';
GRANT INSERT ON hotspot.* TO 'user'@'localhost';
GRANT UPDATE ON hotspot.* TO 'user'@'localhost';

GRANT ALL on user.creds TO 'user'@'localhost';

FLUSH PRIVILEGES;
