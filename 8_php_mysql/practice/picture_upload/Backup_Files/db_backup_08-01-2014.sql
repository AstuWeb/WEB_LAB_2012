DROP TABLE IF EXISTS data;

CREATE TABLE `data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `filename` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO data VALUES("13","Angel","Colmenares","Locsin","29","Female","Bulacan","angel locsin.jpg");
INSERT INTO data VALUES("14","Anne","Curtis-Smith","Ojales","29","Female","Australia","Anne Curtis.jpg");
INSERT INTO data VALUES("15","Aubrey","Sandel","Miles","36","Female","Caloocan","Aubrey_Miles.jpg");
INSERT INTO data VALUES("16","Sylvia Valerie","Garcia","Pablo","26","Female","Davao City","bangs garcia.jpg");
INSERT INTO data VALUES("17","Denise Maria","Laurel","Sanz","26","Female","Manila","Denise Laurel.jpg");
INSERT INTO data VALUES("18","Samuelle Lynne","Pinto","Acosta","24","Female","Philippines","Sam Pinto.jpg");


