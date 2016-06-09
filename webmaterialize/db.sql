
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `documento` int(11) NOT NULL,
  `legajo` int(11) NOT NULL,
  `horas` int(11) DEFAULT NULL,
  `fh_ingreso` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `personal` (`id`, `nombre`, `apellido`, `documento`, `legajo`, `horas`, `fh_ingreso`) VALUES
(1,	'Lautaro',	'Bifano',	33433768,	1,	8,	'0000-00-00'),
(2,	'qwe',	'qwe',	2341,	123123,	7,	'2016-06-02'),
(3,	'Pepe',	'Argento',	123456,	2,	1,	'2016-06-01'),
(4,	'sarlanga',	'aksmodm',	666777,	324234,	2,	'2016-06-02'),
(5,	'qwe',	'qwe',	12093890,	20909,	3,	'2016-06-02'),
(6,	'qwe',	'qwe',	42343,	34543,	1,	'2016-06-09');

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `login` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`login`, `pass`, `nombre`) VALUES
('pepe',	'81dc9bdb52d04dc20036dbd8313ed055',	'Pepe Argento'),
('charly',	'e10adc3949ba59abbe56e057f20f883e',	'Carlos Garcia'),
('lbifano',	'd8578edf8458ce06fbc5bb76a58c5ca4',	'Lautaro Bifano');
