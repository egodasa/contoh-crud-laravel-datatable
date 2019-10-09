-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(20) NOT NULL,
  `inisial` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Data Pengguna Dari Aplikasi. Seperti Data owner atau pemilik, data admin, data user atau sales';

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `inisial`, `status`) VALUES
(1,	'Administrator',	'admin',	'650538f3a51a87dc947d0a05b45cd083',	'owner',	'AR',	1),
(2,	'Zainudin',	'zainudin',	'210f5c38e2f08f0cb1da24d570c929f6',	'user',	'ZU',	1),
(3,	'Syahrul',	'syahrul',	'95ffb7a15f02c6c23f403edeae956a42',	'user',	'SY',	1),
(4,	'M Ridwan',	'ridwan',	'd584c96e6c1ba3ca448426f66e552e8e',	'user',	'RD',	1),
(6,	'Arief ',	'arif',	'e10adc3949ba59abbe56e057f20f883e',	'user',	'AR',	1),
(7,	'DIDI',	'didi',	'21232f297a57a5a743894a0e4a801fc3',	'user',	'DI',	1),
(8,	'Nola Selvia',	'Nola',	'3928813cbe501f598606b4ef6be31407',	'admin',	'NL',	1),
(9,	'Ragil Agustiani',	'Ragil',	'e10adc3949ba59abbe56e057f20f883e',	'user',	'RG',	1),
(10,	'TRI',	'TRI',	'e10adc3949ba59abbe56e057f20f883e',	'user',	'TR',	1),
(11,	'Apri',	'Apri',	'202cb962ac59075b964b07152d234b70',	'user',	'AP',	1),
(12,	'DILI',	'DILI',	'202cb962ac59075b964b07152d234b70',	'user',	'DL',	1),
(13,	'Ahmad Ridwan',	'IWAN',	'e10adc3949ba59abbe56e057f20f883e',	'user',	'IW',	1),
(14,	'OCHA',	'OCHA',	'202cb962ac59075b964b07152d234b70',	'user',	'OC',	1),
(15,	'FURQON',	'FURQON',	'202cb962ac59075b964b07152d234b70',	'user',	'FR',	1),
(16,	'FREELANCE',	'FREELANCE',	'202cb962ac59075b964b07152d234b70',	'user',	'FC',	1),
(17,	'Robeka',	'beka',	'e7a0e5266b29a516e0960c802cfa369f',	'user',	'BK',	1),
(18,	'Dessy Narissa',	'DESSY',	'0a2fdd7b240b960e346ae9183749db44',	'admin',	'DS',	1),
(19,	'Alan Minando',	'alan',	'77b3e6926e7295494dd3be91c6934899',	'user',	'AL',	1),
(20,	'mandan',	'mandan',	'e070e2dd9634c6c078a59218cdca9e23',	'owner',	'MA',	1),
(21,	'Reny Anggraini',	'Reny',	'fac3c282168af1260b48b76fb44ae787',	'admin',	'RN',	1),
(22,	'karyawan',	'karyawan',	'e070e2dd9634c6c078a59218cdca9e23',	'user',	'KAY',	1),
(23,	'admin_baru',	'admin_baru',	'5fcfd06c5a99c6ec47b2b83b84dd2c62',	'admin',	'adm',	1),
(24,	'Syaifuddin',	'SYFD',	'd0970714757783e6cf17b26fb8e2298f',	'user',	'SYFD',	1);

-- 2019-10-09 02:34:50
