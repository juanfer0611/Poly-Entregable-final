-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2014 a las 10:45:58
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Poly`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `idUser`, `idPost`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 2, 2),
(4, 4, 2),
(5, 3, 2),
(6, 1, 3),
(7, 1, 4),
(8, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(99) NOT NULL,
  `image` varchar(99) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `descripcion` varchar(99) NOT NULL,
  `likes` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `idUser`, `image`, `nombre`, `descripcion`, `likes`) VALUES
(1, 1, 'img/a0.jpg', 'vacio1', 'ddhhdhdhdsjlfnskjnfkjsnfk californication', 100),
(2, 2, 'img/a1.jpg', 'vacio2', 'ddhhdhdhdsjlfnskjnfkjsnfk californication', 5),
(3, 1, 'img/a2.jpg', 'vacio3', 'ddhhdhdhdsjlfnskjnfkjsnfk californication', 5),
(4, 4, 'img/a3.jpg', 'vacio4', 'ddhhdhdhdsjlfnskjnfkjsnfk californication', 6),
(5, 1, 'img/a4.jpg', 'vacio5', 'ddhhdhdhdsjlfnskjnfkjsnfk californication', 1250),
(6, 5, 'img/a5.jpg', 'vacio6', 'ddhhdhdhdsjlfnskjnfkjsnfk californication', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `about` varchar(100) NOT NULL,
  `facebook` varchar(99) NOT NULL,
  `pinterest` varchar(99) NOT NULL,
  `twitter` varchar(99) NOT NULL,
  `linkedin` varchar(99) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `usuario`, `password`, `about`, `facebook`, `pinterest`, `twitter`, `linkedin`, `imagen`) VALUES
(1, 'melo', 'melo123', 'jkszkdsjhbdjhsbdasbhdbashjbdhasbdhjasbjhdbsahbdjhasbdjhasbjhdbsahdbashjbdhjasbdhjasbdjhasbhjdbashdba', 'facebook.com/melo', '', '', '', 'https://scontent-b-atl.xx.fbcdn.net/hphotos-frc1/t1.0-9/10246800_427291994082082_8835759716271210850_n.jpg'),
(3, 'chupa', '1chupa', 'fdsfdasgdsafdsfsadfadsfsadfsadfsdafsdaf', '', '', '', '', 'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn2/t1.0-9/1530402_10202450113230031_1588149347_n.jpg'),
(4, 'chupa', 'chupa1', 'qwertyuiolkjhgfdsazxcvbn ', '', '', '', '', 'https://scontent-a-atl.xx.fbcdn.net/hphotos-ash3/t1.0-9/10252105_10202374163490385_6178708193427461022_n.jpg'),
(5, 'chupa', 'chupachu', '12335345646543635464654', '', '', '', '', 'https://scontent-a-atl.xx.fbcdn.net/hphotos-prn2/t1.0-9/10171146_10152003173306861_6413559910999427317_n.jpg'),
(6, 'chupa', 'chupi', 'qasegdbdfggddgfgf', '', '', '', '', ''),
(7, 'chupa', 'chucha', 'ewrwer3423rdewf34r34f', '', '', '', '', ''),
(8, 'chupa', 'chachis', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
