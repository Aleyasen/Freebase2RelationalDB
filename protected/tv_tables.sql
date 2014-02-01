CREATE TABLE `tbl_tv_program` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_program_creator` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_theme_song` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_producer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_writer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_genre` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_network` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_actor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_personality` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_subject` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_soundtrack` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_tv_location` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_sequence_of_tv_episode_segments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wikiid` varchar(127) DEFAULT NULL,
  `guid` varchar(63) DEFAULT NULL,
  `fbid` varchar(63) DEFAULT NULL,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wikiid` (`wikiid`,`guid`,`fbid`),
  
  KEY `fbid` (`fbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

