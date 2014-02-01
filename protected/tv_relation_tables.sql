
CREATE TABLE `tbl_nationality_continent` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nationality` bigint(20) NOT NULL,
  `continent` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nationality` (`nationality`,`continent`),
  KEY `continent` (`continent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_nationality_continent`
  ADD CONSTRAINT `tbl_nationality_continent_ibfk_1` FOREIGN KEY (`nationality`) REFERENCES `tbl_nationality` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_nationality_continent_ibfk_2` FOREIGN KEY (`continent`) REFERENCES `tbl_continent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_program_creator` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_program_creator` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_program_creator`),
  KEY `tv_program_creator` (`tv_program_creator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_program_creator`
  ADD CONSTRAINT `tbl_tv_program_tv_program_creator_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_program_creator_ibfk_2` FOREIGN KEY (`tv_program_creator`) REFERENCES `tbl_tv_program_creator` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_country` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `country` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`country`),
  KEY `country` (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_country`
  ADD CONSTRAINT `tbl_tv_program_country_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_country_ibfk_2` FOREIGN KEY (`country`) REFERENCES `tbl_country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_spin_offs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `spin_offs` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`spin_offs`),
  KEY `spin_offs` (`spin_offs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_spin_offs`
  ADD CONSTRAINT `tbl_tv_program_spin_offs_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_spin_offs_ibfk_2` FOREIGN KEY (`spin_offs`) REFERENCES `tbl_spin_offs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_theme_song` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_theme_song` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_theme_song`),
  KEY `tv_theme_song` (`tv_theme_song`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_theme_song`
  ADD CONSTRAINT `tbl_tv_program_tv_theme_song_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_theme_song_ibfk_2` FOREIGN KEY (`tv_theme_song`) REFERENCES `tbl_tv_theme_song` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_producer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_producer` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_producer`),
  KEY `tv_producer` (`tv_producer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_producer`
  ADD CONSTRAINT `tbl_tv_program_tv_producer_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_producer_ibfk_2` FOREIGN KEY (`tv_producer`) REFERENCES `tbl_tv_producer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_writer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_writer` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_writer`),
  KEY `tv_writer` (`tv_writer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_writer`
  ADD CONSTRAINT `tbl_tv_program_tv_writer_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_writer_ibfk_2` FOREIGN KEY (`tv_writer`) REFERENCES `tbl_tv_writer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_genre` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_genre` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_genre`),
  KEY `tv_genre` (`tv_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_genre`
  ADD CONSTRAINT `tbl_tv_program_tv_genre_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_genre_ibfk_2` FOREIGN KEY (`tv_genre`) REFERENCES `tbl_tv_genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_network` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_network` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_network`),
  KEY `tv_network` (`tv_network`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_network`
  ADD CONSTRAINT `tbl_tv_program_tv_network_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_network_ibfk_2` FOREIGN KEY (`tv_network`) REFERENCES `tbl_tv_network` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_spun_off_from` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `spun_off_from` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`spun_off_from`),
  KEY `spun_off_from` (`spun_off_from`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_spun_off_from`
  ADD CONSTRAINT `tbl_tv_program_spun_off_from_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_spun_off_from_ibfk_2` FOREIGN KEY (`spun_off_from`) REFERENCES `tbl_spun_off_from` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_actor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `actor` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`actor`),
  KEY `actor` (`actor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_actor`
  ADD CONSTRAINT `tbl_tv_program_actor_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_actor_ibfk_2` FOREIGN KEY (`actor`) REFERENCES `tbl_actor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_language` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `language` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`language`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_language`
  ADD CONSTRAINT `tbl_tv_program_language_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_language_ibfk_2` FOREIGN KEY (`language`) REFERENCES `tbl_language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_subject` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_subject` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_subject`),
  KEY `tv_subject` (`tv_subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_subject`
  ADD CONSTRAINT `tbl_tv_program_tv_subject_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_subject_ibfk_2` FOREIGN KEY (`tv_subject`) REFERENCES `tbl_tv_subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_soundtrack` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_soundtrack` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_soundtrack`),
  KEY `tv_soundtrack` (`tv_soundtrack`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_soundtrack`
  ADD CONSTRAINT `tbl_tv_program_tv_soundtrack_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_soundtrack_ibfk_2` FOREIGN KEY (`tv_soundtrack`) REFERENCES `tbl_tv_soundtrack` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_tv_location` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `tv_location` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`tv_location`),
  KEY `tv_location` (`tv_location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_tv_location`
  ADD CONSTRAINT `tbl_tv_program_tv_location_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_tv_location_ibfk_2` FOREIGN KEY (`tv_location`) REFERENCES `tbl_tv_location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


CREATE TABLE `tbl_tv_program_sequence_of_tv_episode_segments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tv_program` bigint(20) NOT NULL,
  `sequence_of_tv_episode_segments` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tv_program` (`tv_program`,`sequence_of_tv_episode_segments`),
  KEY `sequence_of_tv_episode_segments` (`sequence_of_tv_episode_segments`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_tv_program_sequence_of_tv_episode_segments`
  ADD CONSTRAINT `tbl_tv_program_sequence_of_tv_episode_segments_ibfk_1` FOREIGN KEY (`tv_program`) REFERENCES `tbl_tv_program` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tv_program_sequence_of_tv_episode_segments_ibfk_2` FOREIGN KEY (`sequence_of_tv_episode_segments`) REFERENCES `tbl_sequence_of_tv_episode_segments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

