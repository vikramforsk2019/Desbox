
CREATE TABLE IF NOT EXISTS `profile` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200)  NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
    `about` varchar(200) NOT NULL,
  `pic` varchar(255)  NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `email` (`email`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `classcreate` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200)  Not NULL,
   `cname` varchar(200)  NULL,
  `section` varchar(255)  NULL,
  `subject` varchar(255)  NULL,
  `marks` varchar(255)  NULL,
  `submittime` varchar(255)  NULL,
  `classcode` varchar(255)  NULL,
  `classpic` varchar(255)  NULL,
    `color` varchar(255)  NULL,
  PRIMARY KEY (`cid`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `join1` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `classcode` varchar(200) NOT NULL,
  `dat` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`jid`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `classcode` varchar(800) NOT NULL,
    `message` varchar(800) NOT NULL,
      `pic` varchar(800) NOT NULL,
       `pic1` varchar(800) NOT NULL,
    `dat` varchar(800) NOT NULL,
    `name` varchar(800) NOT NULL,
    `filetype` varchar(800) NULL,

  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `post` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
    `message` varchar(800)  NULL,
      `pic` varchar(800)  NULL,
       `pic1` varchar(800)  NULL,
    `dat` varchar(800) NULL,
    `name` varchar(800) NULL,
    `email` varchar(800) NULL,
    `filetype` varchar(800) NULL,

  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `comment` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
    `message` varchar(800)  NULL,
      `pic` varchar(800)  NULL,
       `pid` varchar(800)  NULL,
    `dat` varchar(800) NULL,
    `name` varchar(800) NULL,
    `like` varchar(800) NULL,

  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
