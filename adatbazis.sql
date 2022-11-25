CREATE DATABASE IF NOT EXISTS `madarpark` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `madarpark`;

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `csaladnev` varchar(45) NOT NULL DEFAULT '',
  `utonev` varchar(45) NOT NULL DEFAULT '',
  `felhasznalonev` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT '',
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `felhasznalok` (`id`, `csaladnev`, `utonev`, `felhasznalonev`, `jelszo`, `admin`) VALUES
(1, 'admin_családnév', 'admin_utónév', 'admin', sha1('admin123'), 1),
(2, 'Családnév_2', 'Utónév_2', 'Login2', sha1('login2'), 0),
(3, 'Családnév_3', 'Utónév_3', 'Login3', sha1('login3'), 0),
(4, 'Családnév_4', 'Utónév_4', 'Login4', sha1('login4'), 0),
(5, 'Családnév_5', 'Utónév_5', 'Login5', sha1('login5'), 0),
(6, 'Családnév_6', 'Utónév_6', 'Login6', sha1('login6'), 0),
(7, 'Családnév_7', 'Utónév_7', 'Login7', sha1('login7'), 0),
(8, 'Családnév_8', 'Utónév_8', 'Login8', sha1('login8'), 0),
(9, 'Családnév_9', 'Utónév_9', 'Login9', sha1('login9'), 0),
(10, 'Családnév_10', 'Utónév_10', 'Login10', sha1('login10'), 0),
(11, 'Családnév_11', 'Utónév_11', 'Login11', sha1('login11'), 0),
(12, 'Családnév_12', 'Utónév_12', 'Login12', sha1('login12'), 0);

CREATE TABLE `uzenetek` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idopont` timestamp NOT NULL DEFAULT current_timestamp(),
  `felhasznalonev` varchar(12) NOT NULL DEFAULT '',
  `nev` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `szoveg` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
