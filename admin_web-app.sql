-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 03 Αυγ 2015 στις 19:58:42
-- Έκδοση διακομιστή: 5.5.27
-- Έκδοση PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `admin_web-app`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `proion`
--

CREATE TABLE IF NOT EXISTS `proion` (
  `id_proion` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `agatho1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `agatho2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `agatho3` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `agatho4` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `agatho5` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `katagatho1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `katagatho2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `katagatho3` varchar(255) CHARACTER SET ucs2 DEFAULT NULL,
  `katagatho4` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `katagatho5` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ag1yeares1` float DEFAULT NULL,
  `ag1yeares2` float DEFAULT NULL,
  `ag1yeares3` float DEFAULT NULL,
  `ag1yeareks1` float DEFAULT NULL,
  `ag1yeareks2` float DEFAULT NULL,
  `ag1yeareks3` float DEFAULT NULL,
  `ag2yeares1` float DEFAULT NULL,
  `ag2yeares2` float DEFAULT NULL,
  `ag2yeares3` float DEFAULT NULL,
  `ag2yeareks1` float DEFAULT NULL,
  `ag2yeareks2` float DEFAULT NULL,
  `ag2yeareks3` float DEFAULT NULL,
  `ag3yeares1` float DEFAULT NULL,
  `ag3yeares2` float DEFAULT NULL,
  `ag3yeares3` float DEFAULT NULL,
  `ag3yeareks1` float DEFAULT NULL,
  `ag3yeareks2` float DEFAULT NULL,
  `ag3yeareks3` float DEFAULT NULL,
  `ag4yeares1` float DEFAULT NULL,
  `ag4yeares2` float DEFAULT NULL,
  `ag4yeares3` float DEFAULT NULL,
  `ag4yeareks1` float DEFAULT NULL,
  `ag4yeareks2` float DEFAULT NULL,
  `ag4yeareks3` float DEFAULT NULL,
  `ag5yeares1` float DEFAULT NULL,
  `ag5yeares2` float DEFAULT NULL,
  `ag5yeares3` float DEFAULT NULL,
  `ag5yeareks1` float DEFAULT NULL,
  `ag5yeareks2` float DEFAULT NULL,
  `ag5yeareks3` float DEFAULT NULL,
  PRIMARY KEY (`id_proion`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Άδειασμα δεδομένων του πίνακα `proion`
--

INSERT INTO `proion` (`id_proion`, `user_id`, `agatho1`, `agatho2`, `agatho3`, `agatho4`, `agatho5`, `katagatho1`, `katagatho2`, `katagatho3`, `katagatho4`, `katagatho5`, `ag1yeares1`, `ag1yeares2`, `ag1yeares3`, `ag1yeareks1`, `ag1yeareks2`, `ag1yeareks3`, `ag2yeares1`, `ag2yeares2`, `ag2yeares3`, `ag2yeareks1`, `ag2yeareks2`, `ag2yeareks3`, `ag3yeares1`, `ag3yeares2`, `ag3yeares3`, `ag3yeareks1`, `ag3yeareks2`, `ag3yeareks3`, `ag4yeares1`, `ag4yeares2`, `ag4yeares3`, `ag4yeareks1`, `ag4yeareks2`, `ag4yeareks3`, `ag5yeares1`, `ag5yeares2`, `ag5yeares3`, `ag5yeareks1`, `ag5yeareks2`, `ag5yeareks3`) VALUES
(1, 25, 'kafes', 'sokolata', 'tsai', 'masaz', 'thea', '0', '0', '0', '1', '1', 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 900, 800, 700, 600, 500, 400, 300, 200, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 900, 800),
(18, 1, 'kafes', 'coke', 'masaz', 'tsai', '', '0', '0', '1', '1', '1', 1, 2, 3, 4, 5, 6, 1, 3, 5, 2, 4, 6, 11, 33, 55, 22, 44, 66, 111, 333, 555, 222, 444, 666, 0, 0, 0, 0, 0, 0),
(21, 17, 'kafes', 'masaz', '', '', '', '0', '1', '1', '1', '1', 12, 3, 5, 2, 4, 6, 1, 8, 6, 9, 7, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 15, 'poulerika', 'psimena', '', '', '', '0', '1', '1', '1', '1', 100, 300, 500, 200, 400, 600, 100, 100, 0, 25.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `exp_date` date DEFAULT NULL,
  `admin` varchar(5) DEFAULT NULL,
  `entupa` varchar(5) DEFAULT NULL,
  `esoda` varchar(5) DEFAULT NULL,
  `last-login` date DEFAULT NULL,
  `mailcode` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `mail`, `exp_date`, `admin`, `entupa`, `esoda`, `last-login`, `mailcode`, `salt`, `number`) VALUES
(1, 'nmantas84', '1965bae3b77e6c6010aa5f47d20322d264a3e2275274c70f1e7af85a9f7af32e', 'admin', 'nmantas84@gmail.com', '2100-12-12', '1', '1', '1', NULL, '52422868955acbf527c7ca', '18e87ff925c1853855c31ed544a2856a6447565031c46c415d84ca383e15ecd2', 4),
(15, 'bb', '405a03b735ac553bbe1bdb836c9bed92d7ad3b5f5b543aec42cb05ec483b582e', 'user', 'a@a.ab', '2016-07-13', NULL, '0', '', NULL, '39728627455acbfce0cb3d', '94f7c566e9bfbe1f566e3125540bc1d666cdd4398e422e7ba2c8e3484ee75086', 2),
(17, 'aa', '405a03b735ac553bbe1bdb836c9bed92d7ad3b5f5b543aec42cb05ec483b582e', 'user', 'a@a.gr', '2017-07-19', NULL, '1', '1', NULL, NULL, '94f7c566e9bfbe1f566e3125540bc1d666cdd4398e422e7ba2c8e3484ee75086', 2),
(19, 'aek', '405a03b735ac553bbe1bdb836c9bed92d7ad3b5f5b543aec42cb05ec483b582e', 'user', 'a@a.a', '2017-12-12', NULL, '1', '1', NULL, NULL, '94f7c566e9bfbe1f566e3125540bc1d666cdd4398e422e7ba2c8e3484ee75086', NULL),
(21, 'nmantas', '520fe9c78fe6692fc5667180b9fc29a3c8b395afd5fe90bb79ec07c9cbe2932f', 'user', 'q@q.q', '2017-12-30', '1', '1', '1', NULL, NULL, '3eec4a753ccaf9a2aba0f6ebedc2afa1ffd2b01173b691ee92b4f2886c97e35e', NULL),
(25, 'nik', '405a03b735ac553bbe1bdb836c9bed92d7ad3b5f5b543aec42cb05ec483b582e', 'user', 'e@e.el', NULL, NULL, '', '', NULL, NULL, '94f7c566e9bfbe1f566e3125540bc1d666cdd4398e422e7ba2c8e3484ee75086', 5);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `validate`
--

CREATE TABLE IF NOT EXISTS `validate` (
  `validate_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `entupa` varchar(5) DEFAULT NULL,
  `esoda` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`validate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `yphresies`
--

CREATE TABLE IF NOT EXISTS `yphresies` (
  `id_yphresies` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ika1` float DEFAULT NULL,
  `ika2` float DEFAULT NULL,
  `ika3` float DEFAULT NULL,
  `deh1` float DEFAULT NULL,
  `deh2` float DEFAULT NULL,
  `deh3` float DEFAULT NULL,
  `thl1` float DEFAULT NULL,
  `thl2` float DEFAULT NULL,
  `thl3` float DEFAULT NULL,
  PRIMARY KEY (`id_yphresies`),
  KEY `yphresies_ibfk_1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Άδειασμα δεδομένων του πίνακα `yphresies`
--

INSERT INTO `yphresies` (`id_yphresies`, `user_id`, `ika1`, `ika2`, `ika3`, `deh1`, `deh2`, `deh3`, `thl1`, `thl2`, `thl3`) VALUES
(1, 1, 100, 110, 120, 130, 140, 150, 160, 170, 180),
(3, 17, 100, 20, 30, 40, 50, 60, 70, 80, 90),
(4, 15, 500, 600, 700, 800, 900, 1000, 900, 800, 700);

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `proion`
--
ALTER TABLE `proion`
  ADD CONSTRAINT `proion_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Περιορισμοί για πίνακα `yphresies`
--
ALTER TABLE `yphresies`
  ADD CONSTRAINT `yphresies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
