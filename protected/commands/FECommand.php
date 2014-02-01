<?php

class FECommand extends CConsoleCommand {

    public static $RDF_DIR = "/srv/data/projects/dataset/Freebase/RDF/";
    public static $inAttrArr = array(
        'cvg.computer_videogame.release_date' => array('Game', 'release_date'),
        'theater.play.date_of_first_performance' => array('Play', 'date_of_first_performance'),
        'opera.opera.date_of_first_performance' => array('Opera', 'date_of_first_performance'),
//        'film.film.initial_release_date' => array('Film', 'initial_release_date'),
//        'tv.tv_program.air_date_of_first_episode' => array('TvProgram', 'air_date_of_first_episode'),
//        'tv.tv_program.air_date_of_final_episode' => array('TvProgram', 'air_date_of_final_episode'),
//        'tv.tv_program.number_of_seasons' => array('TvProgram', 'number_of_seasons'),
//        'tv.tv_program.number_of_episodes' => array('TvProgram', 'number_of_episodes'),
//        'tv.tv_program.episode_running_time' => array('TvProgram', 'episode_running_time'),
//        'tv.tv_program.thetvdb_id' => array('TvProgram', 'thetvdb_id'),
//        'tv.tv_program.tvrage_id' => array('TvProgram', 'tvrage_id'),
//        'tv.tv_program.hulu_id' => array('TvProgram', 'hulu_id'),
//        'tv.tv_program.tvguide_id' => array('TvProgram', 'tvguide_id'),
//        'tv.tv_program.currently_in_production' => array('TvProgram', 'currently_in_production')
    );
    public static $arr = array(
        'theater.theater_genre' => array('PlayGenre'),
        'opera.opera_genre' => array('OperaGenre'),
//           'celebrities.celebrity' => array('Celebrity'),
//        'type.type' => array('Fbtype'),
//        'theater.play' => array('Play'),
//        'visual_art.artwork' => array('artwork'),
//        'opera.opera' => array('Opera'),
//        'cvg.computer_videogame' => array('Game'),
//        'cvg.cvg_genre' => array('GameGenre'),
//        'film.film' => array('Film'),
//        'film.film_genre' => array('FilmGenre'),
//        'film.actor' => array('PActor'),
//        'celebrities.celebrity' => array('PCelebirity'),
//        'language.human_language' => array('Language'),
//        'location.country' => array('Country'),
//        'tv.tv_program' => array('TvProgram'),
//        'tv.tv_program_creator' => array('TvProgramCreator'),
//        'tv.tv_theme_song' => array('TvThemeSong'),
//        'tv.tv_producer' => array('TvProducer'),
//        'tv.tv_writer' => array('TvWriter'),
//        'tv.tv_genre' => array('TvGenre'),
//        'tv.tv_network' => array('TvNetwork'),
//        'tv.tv_actor' => array('TvActor'),
//        'tv.tv_personality' => array('TvPersonality'),
//        'tv.tv_subject' => array('TvSubject'),
//        'tv.tv_soundtrack' => array('TvSoundtrack'),
//        'tv.tv_location' => array('TvLocation'),
//        'tv.sequence_of_tv_episode_segments' => array('SequenceOfTvEpisodeSegments'),
//        'book.book' => array('Book'),
//        'media_common.literary_genre' => array('BookGenre'),
//        'music.album' => array('Album'),
//        'music.genre' => array('AlbumGenre'),
//        'cvg.computer_videogame' => array('Cvg'),
//        'cvg.cvg_genre' => array('CvgGenre'),
//        'book.book_edition' => array('Book'),
//        'book.book_author' => array('Book'),
//        'book.book_subject' => array('Book'),
//        'book.book_character' => array('Book'),
//        'people.person' => array('Person'),
//        'people.gender' => array('Gender'),
//        'people.profession' => array('Profession'),
//        'location.location' => array('Location'),
//        'location.country' => array('Nationality'),
//        'religion.religion' => array('Religion'),
//        'people.ethnicity' => array('Ethnicity'),
//        'business.employer' => array('Employment'),
//        'education.educational_institution' => array('Education'),
//        'media_common.quotation' => array('Quotation'),
//        'people.ethnicity' => array('Ethnicity')
//        'base.locations.continents' => array('Nationality')
    );
    public static $rel = array(
        'theater.play.genre' => array('Play', 'PlayGenre', 'PlayPlayGenre', 'play', 'play_genre'),
        'opera.opera.genre' => array('Opera', 'OperaGenre', 'OperaOperaGenre', 'opera', 'opera_genre'),
//        'common.topic.notable_types' => array('Film','Fbtype','FilmFbtype','film','fbtype'),
//        'common.topic.notable_types' => array('TvProgram','Fbtype','TvProgramFbtype','tv_program','fbtype'),
//        'cvg.computer_videogame.cvg_genre' => array('Game', 'GameGenre', 'GameGameGenre', 'game', 'genre'),
//        'film.film.genre' => array('Film', 'FilmGenre', 'FilmFilmGenre', 'film', 'genre'),
//        'base.locations.countries.continent' => array('Nationality', 'Continent', 'NationalityContinent', 'nationality', 'continent'),
//        'people.person.profession' => array('Person', 'Profession', 'PersonProfession', 'person', 'profession'),
//  TODO      'people.person.spouse_s' => array('Person', 'Spouse', 'PersonSpouse', 'person', 'spouse'),
//        'people.person.children' => array('Person', 'Person', 'PersonChildren', 'person', 'children'),
//        'people.person.parents' => array('Person', 'Person', 'PersonParent', 'person', 'parentt'),
//        'people.person.nationality' => array('Person', 'Nationality', 'PersonNationality', 'person', 'nationality'),
//        'people.person.education' => array('Person', 'Education', 'PersonEducation', 'person', 'education'),
//        'people.person.quotations' => array('Person', 'Quotation', 'PersonQuotation', 'person', 'quotation'),
//        'people.person.employment_history' => array('Person', 'Employment', 'PersonEmployment', 'person', 'employment'),
// TODO  'people.person.place_of_birth' => array('Person', 'Location', 'PersonPlaceOfBirth', 'person', 'place_of_birth'),
//        'people.person.ethnicity' => array('Person', 'Ethnicity', 'PersonEthnicity', 'person', 'ethnicity'),
//  TODO      'people.person.sibling_s' => array('Person', 'Sibling', 'PersonSibling', 'person', 'sibling'),
//        'people.person.gender' => array('Person', 'Gender', 'PersonGender', 'person', 'gender'),
//        'people.person.religion' => array('Person', 'Religion', 'PersonReligion', 'person', 'religion'),
//  TODO       'people.person.places_lived' => array('Person', 'PlacesLived', 'PersonPlacesLived', 'person', 'places_lived'),
//        'film.film.starring' => array('Film', 'Starring', 'FilmStarring', 'film', 'starring'),
//        'film.film.production_companies' => array('Film', 'ProdCompany', 'FilmCompany', 'film', 'company'),
//        'tv.tv_program.seasons' => array('Tv', 'Season', 'TvSeason', 'tv', 'season'),
//        'tv.tv_program.original_network' => array('Tv', 'Network', 'TvNetwork', 'tv', 'network'),
//        'tv.tv_program.genre' => array('Tv', 'ProgGenre', 'TvProgGenre', 'tv', 'prog_genre'),
//        'cvg.computer_videogame.versions' => array('Game', 'Version', 'GameVersion', 'game', 'version'),
//        'cvg.computer_videogame.cvg_genre' => array('Game', 'CvgGenre', 'GameGenre', 'game', 'genre'),
//        'cvg.computer_videogame.prequel' => array('Game', 'CvgPrequel', 'GamePrequel', 'game', 'prequel'),
//        'music.album.artist' => array('Album', 'Artist', 'AlbumArtist', 'album', 'artist'),
//        'book.written_work.author' => array('Book', 'Author', 'BookAuthor', 'book', 'author'),
//        'book.written_work.subjects' => array('Book', 'Subject', 'BookSubject', 'book', 'subject'),
//        'book.book.characters' => array('Book', 'Character', 'BookCharacter', 'book', 'character_'),
//        'tv.tv_program.program_creator' => array('TvProgram', 'TvProgramCreator', 'TvProgramTvProgramCreator', 'tv_program', 'tv_program_creator'),
//        'tv.tv_program.country_of_origin' => array('TvProgram', 'Country', 'TvProgramCountry', 'tv_program', 'country'),
//        'tv.tv_program.spin_offs' => array('TvProgram', 'TvProgram', 'TvProgramSpinOffs', 'tv_program', 'spin_offs'),
//        'tv.tv_program.theme_song' => array('TvProgram', 'TvThemeSong', 'TvProgramTvThemeSong', 'tv_program', 'tv_theme_song'),
//        'tv.tv_producer_term.producer' => array('TvProgram', 'TvProducer', 'TvProgramTvProducer', 'tv_program', 'tv_producer'),
//        'tv.tv_program_writer_relationship.writer' => array('TvProgram', 'TvWriter', 'TvProgramTvWriter', 'tv_program', 'tv_writer'),
//        'tv.tv_program.genre' => array('TvProgram', 'TvGenre', 'TvProgramTvGenre', 'tv_program', 'tv_genre'),
//        'tv.tv_network_duration.network' => array('TvProgram', 'TvNetwork', 'TvProgramTvNetwork', 'tv_program', 'tv_network'),
//        'tv.tv_program.spun_off_from' => array('TvProgram', 'TvProgram', 'TvProgramSpunOffFrom', 'tv_program', 'spun_off_from'),
//        'tv.regular_tv_appearance.actor' => array('TvProgram', 'TvActor', 'TvProgramTvActor', 'tv_program', 'tv_actor'),
//        'tv.tv_program.languages' => array('TvProgram', 'Language', 'TvProgramLanguage', 'tv_program', 'language'),
//        'tv.tv_program.subjects' => array('TvProgram', 'TvSubject', 'TvProgramTvSubject', 'tv_program', 'tv_subject'),
//        'tv.tv_program.soundtrack' => array('TvProgram', 'TvSoundtrack', 'TvProgramTvSoundtrack', 'tv_program', 'tv_soundtrack'),
//        'tv.tv_program.filming_locations' => array('TvProgram', 'TvLocation', 'TvProgramTvLocation', 'tv_program', 'tv_location'),
//        'tv.tv_program.recurring_segments' => array('TvProgram', 'SequenceOfTvEpisodeSegments', 'TvProgramSequenceOfTvEpisodeSegments', 'tv_program', 'sequence_of_tv_episode_segments'),
    );
    public static $midbag;
    public static $midbagIndv;

    public function actionUpdate() {
        ini_set('memory_limit', '-1');
        self::initialMIDsSet("name");
        self::setNames(self::$RDF_DIR . "names-splits/names-split-aa");
        self::setNames(self::$RDF_DIR . "names-splits/names-split-ab");
        self::setNames(self::$RDF_DIR . "names-splits/names-split-ac");
        self::setNames(self::$RDF_DIR . "names-splits/names-split-ad");
    }

    public function actionUpdateDesc() {
        ini_set('memory_limit', '-1');
        self::initialMIDsSet("description");
        self::setDescription(self::$RDF_DIR . "desc-splits/desc_split_aa");
        self::setDescription(self::$RDF_DIR . "desc-splits/desc_split_ab");
        self::setDescription(self::$RDF_DIR . "desc-splits/desc_split_ac");
        self::setDescription(self::$RDF_DIR . "desc-splits/desc_split_ad");
        self::setDescription(self::$RDF_DIR . "desc-splits/desc_split_ae");
    }

    public function actionRun() {
        //      $type = 'people.person';
        //      self::extractMainTable(self::$arr[$type][0], self::$RDF_DIR . $type . ".rdf");
        foreach (self::$arr as $key => $value) {
            self::extractMainTable($value[0], self::$RDF_DIR . $key . ".rdf");
        }
    }

    public function actionGenScript() {
        foreach (self::$arr as $key => $value) {
            echo self::getDBscript($value[0]);
            echo "\n";
        }
    }

    public function actionGenScriptRelation() {
        foreach (self::$rel as $key => $value) {
            echo self::getDBScriptRelationTable($value[3], $value[4]);
            echo "\n";
        }
    }

    public static function getDBscript($tableName) {
        $str = "CREATE TABLE `tbl_" . $tableName . "` (
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
";
        return $str;
    }

    public static function getDBScriptRelationTable($t1, $t2) {
        $str = "
CREATE TABLE `tbl_" . $t1 . "_" . $t2 . "` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `" . $t1 . "` bigint(20) NOT NULL,
  `" . $t2 . "` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `" . $t1 . "` (`" . $t1 . "`,`" . $t2 . "`),
  KEY `" . $t2 . "` (`" . $t2 . "`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
\n\n";
        $str .= "ALTER TABLE `tbl_" . $t1 . "_" . $t2 . "`
  ADD CONSTRAINT `tbl_" . $t1 . "_" . $t2 . "_ibfk_1` FOREIGN KEY (`" . $t1 . "`) REFERENCES `tbl_" . $t1 . "` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_" . $t1 . "_" . $t2 . "_ibfk_2` FOREIGN KEY (`" . $t2 . "`) REFERENCES `tbl_" . $t2 . "` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
";
        return $str;
    }

    public function actionRelation() {
        ini_set('memory_limit', '-1');
        self::initialMIdBagIndv();
        foreach (self::$rel as $key => $value) {
            self::extractRelationTable(self::$RDF_DIR . $key . ".rdf", $key);
        }
    }

    public function actionInAttr() {
        ini_set('memory_limit', '-1');
        foreach (self::$inAttrArr as $key => $value) {
            self::extractInAttribute(self::$RDF_DIR . $key . ".rdf", $key);
        }
    }

    public static function setNames($nameFilePath) {
        ini_set('memory_limit', '-1');

        echo "start reading file... [" . $nameFilePath . "]\n";
        $data = file_get_contents($nameFilePath); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";

        $lineCount = 0;
        $numberOfInsert = 0;

        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "insert#:" . $numberOfInsert . "\n";
            }
            $split = explode("\t", $convert[$i]);
            if (count($split) != 3) {
                echo "Error in Parsing Line###" . trim($convert[$i]) . "\n";
                continue;
            }
            $relname = substr(trim($split[1]), 3);
            $object = substr(trim($split[2]), 0, -1);
            $subject = substr(trim($split[0]), 3);
            if ($relname == "type.object.name") {
                if (substr($object, -3) == "@en") {
                    if (isset(self::$midbag[$subject])) {
                        self::setObjectName($subject, substr(substr($object, 1), 0, -4));
                        $numberOfInsert++;
                    }
                }
            }
            $lineCount++;
        }
        echo "updating done! [" . $nameFilePath . "]\n";
        unset($data);
    }

    public static function setDescription($descFilePath) {
        ini_set('memory_limit', '-1');

        echo "start reading file... [" . $descFilePath . "]\n";
        $data = file_get_contents($descFilePath); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";

        $lineCount = 0;
        $numberOfInsert = 0;

        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "insert#:" . $numberOfInsert . "\n";
            }
            $split = explode("\t", $convert[$i]);
            if (count($split) != 3) {
                echo "Error in Parsing Line###" . trim($convert[$i]) . "\n";
                continue;
            }
            $relname = substr(trim($split[1]), 3);
            $object = substr(trim($split[2]), 0, -1);
            $subject = substr(trim($split[0]), 3);
            if ($relname == "common.topic.description") {
                if (substr($object, -3) == "@en") {
                    if (isset(self::$midbag[$subject])) {
                        self::setObjectDescription($subject, substr(substr($object, 1), 0, -4));
                        $numberOfInsert++;
                    }
                }
            }
            $lineCount++;
        }
        echo "updating done! [" . $descFilePath . "][insert# " . $numberOfInsert . "]\n";
        unset($data);
        unset($convert);
    }

    public static function initialMIDsSet($nullConditionAttr) {
        foreach (self::$arr as $key => $value) {
            echo "initial " . $key . "\n";
            $objs = $value[0]::model()->findAll(array(
                'select' => 'fbid',
                'condition' => $nullConditionAttr . ' IS NULL'));
            echo "size:" . count($objs) . "\n";
            foreach ($objs as $obj) {
                self::$midbag[$obj->fbid][] = $value[0];
            }
            echo $key . " initialization finished.\n";
        }
    }

    public static function extractMainTable($type, $filePath) {
        ini_set('memory_limit', '-1');

        echo "start reading file... [" . $filePath . "]\n";
        $data = file_get_contents($filePath); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";

        $lineCount = 0;
        $numberOfInsert = 0;

        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "updates#:" . $numberOfInsert . "\n";
                $numberOfInsert = 0;
            }
            $split = explode("\t", $convert[$i]);
            if (count($split) != 3) {
                echo "Error in Parsing Line###" . trim($convert[$i]) . "\n";
                continue;
            }
            $mid = substr(substr(trim($split[2]), 3), 0, -1);
            self::insertMainTuple($type, $mid);
            //echo $mid . "\n";
            $lineCount++;
        }

        echo "extractMainTable done! [" . $filePath . "]\n";
        unset($data);
        unset($convert);
    }

    public function extractRelationTable($filePath, $rdfName) {
        ini_set('memory_limit', '-1');
        echo "start reading file... [" . $filePath . "]\n";
        $data = file_get_contents($filePath); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";

        $lineCount = 0;
        $numberOfInsert = 0;

        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "updates#:" . $numberOfInsert . "\n";
                $numberOfInsert = 0;
            }
            $split = explode("\t", $convert[$i]);
            if (count($split) != 3) {
                echo "Error in Parsing Line###" . trim($convert[$i]) . "\n";
                continue;
            }

            self::insertRelationTuple(substr(trim($split[0]), 3), substr(substr(trim($split[2]), 3), 0, -1), self::$rel[$rdfName][0], self::$rel[$rdfName][1], self::$rel[$rdfName][2], self::$rel[$rdfName][3], self::$rel[$rdfName][4]);

            //echo $mid . "\n";
            $lineCount++;
        }


        echo "extractRelationTable done! [" . $filePath . "][linecount:" . $lineCount . "]\n";
        unset($data);
        unset($convert);
    }

    public static function initialMIdBagIndv() {
        foreach (self::$rel as $key => $value) {
            echo "load all tuples for " . $value[0] . "\n";
            if (isset(self::$midbagIndv[$value[0]])) {
                echo "ignore loading " . $value[0] . "\n";
                continue;
            }
            $objs1 = $value[0]::model()->findAll(array(
                'select' => 'fbid, id'));
            foreach ($objs1 as $obj) {
                //         echo " <1> " . $value[0] . " " . $obj->fbid . " " . strlen($obj->fbid) . "\n";
                self::$midbagIndv[$value[0]][$obj->fbid] = $obj->id;
            }
        }

        foreach (self::$rel as $key => $value) {
            echo "load all tuples for " . $value[1] . "\n";
            if (isset(self::$midbagIndv[$value[1]])) {
                echo "ignore loading " . $value[1] . "\n";
                continue;
            }
            $objs1 = $value[1]::model()->findAll(array(
                'select' => 'fbid, id'));
            foreach ($objs1 as $obj) {
                //         echo " <1> " . $value[0] . " " . $obj->fbid . " " . strlen($obj->fbid) . "\n";
                self::$midbagIndv[$value[1]][$obj->fbid] = $obj->id;
            }
        }
        //  echo "MidBagIndv#: " . count(self::$midbagIndv) . "\n";
        //  print_r(self::$midbagIndv);
    }

    public static function insertMainTuple($type, $mid) {
        $obj = new $type();
        $obj->fbid = $mid;
        if (!$obj->save()) {
            print_r($obj->getErrors());
        }
    }

    public function extractInAttribute($filePath, $rdfName) {
        ini_set('memory_limit', '-1');
        echo "start reading file... [" . $filePath . "]\n";
        $data = file_get_contents($filePath); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";

        $lineCount = 0;
        $numberOfInsert = 0;

        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "updates#:" . $numberOfInsert . "\n";
                $numberOfInsert = 0;
            }
            $split = explode("\t", $convert[$i]);
            if (count($split) != 3) {
                echo "Error in Parsing Line###" . trim($convert[$i]) . "\n";
                continue;
            }

            self::insertInAttribute(substr(trim($split[0]), 3), substr(trim($split[2]), 0, -1), self::$inAttrArr[$rdfName][0], self::$inAttrArr[$rdfName][1]);

            //echo $mid . "\n";
            $lineCount++;
        }


        echo "extractRelationTable done! [" . $filePath . "][linecount:" . $lineCount . "]\n";
        unset($data);
        unset($convert);
    }

    public static function insertInAttribute($mid, $val, $type, $attr) {
        $obj = $type::model()->find('fbid=:fbid', array(':fbid' => $mid));
        if (isset($obj)) {
            $obj->$attr = $val;
            if (!$obj->save()) {
                print_r($obj->getErrors());
            }
        } else {
            echo "not found " . $mid . " " . $val . " " . $type . " " . $attr . "\n";
        }
    }

    public static $nullCount = 0;

    public static function insertRelationTuple($fbid1, $fbid2, $type1, $type2, $typeRel, $attr1, $attr2) {
        $obj = new $typeRel();
        // echo count(self::$midbagIndv[$type1]) . " " . self::$nullCount . "\n";
        if (!isset(self::$midbagIndv[$type1][$fbid1])) {
            self::$nullCount++;
            //      echo $type1 . " => " . $fbid1 . " " . strlen($fbid1) . " does not exist in mainTable\n";
            //echo ">>" . self::$midbagIndv[$type1][$fbid1] . "\n"
            return;
        }

        if (!isset(self::$midbagIndv[$type2][$fbid2])) {
            self::$nullCount++;
            //      echo $type2 . " => " . $fbid2 . " " . strlen($fbid2) . " does not exist in mainTable\n";
            return;
        }
        $obj->$attr1 = self::$midbagIndv[$type1][$fbid1];
        $obj->$attr2 = self::$midbagIndv[$type2][$fbid2];
        //    echo "OK " . $fbid1;
        if (!$obj->save()) {
            print_r($obj->getErrors());
        }
    }

    public static function setObjectName($mid, $nameVal) {
        foreach (self::$midbag[$mid] as $type) {
            $obj = $type::model()->find('fbid=:fbid', array(':fbid' => $mid));
            $obj->name = $nameVal;
            if (!$obj->save()) {
                print_r($obj->getErrors());
            }
        }
    }

    public static function setObjectDescription($mid, $descVal) {
        foreach (self::$midbag[$mid] as $type) {
            $obj = $type::model()->find('fbid=:fbid', array(':fbid' => $mid));
            $obj->description = $descVal;
            if (!$obj->save()) {
                print_r($obj->getErrors());
            }
        }
    }

}

?>
