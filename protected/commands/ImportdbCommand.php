<?php

class ImportdbCommand extends CConsoleCommand {

    public static $arr = array(
        'people.person.profession' => array('Person', 'Profession', 'PersonProfession', 'person', 'profession'),
        'people.person.spouse_s' => array('Person', 'Spouse', 'PersonSpouse', 'person', 'spouse'),
        'people.person.children' => array('Person', 'Children', 'PersonChildren', 'person', 'children'),
        'people.person.parents' => array('Person', 'Parentt', 'PersonParent', 'person', 'parentt'),
        'people.person.nationality' => array('Person', 'Nationality', 'PersonNationality', 'person', 'nationality'),
        'people.person.education' => array('Person', 'Education', 'PersonEducation', 'person', 'education'),
        'people.person.quotations' => array('Person', 'Quotation', 'PersonQuotation', 'person', 'quotation'),
        'people.person.employment_history' => array('Person', 'Employment', 'PersonEmployment', 'person', 'employment'),
        'people.person.place_of_birth' => array('Person', 'PlaceOfBirth', 'PersonPlaceOfBirth', 'person', 'place_of_birth'),
        'people.person.ethnicity' => array('Person', 'Ethnicity', 'PersonEthnicity', 'person', 'ethnicity'),
        'people.person.sibling_s' => array('Person', 'Sibling', 'PersonSibling', 'person', 'sibling'),
        'people.person.gender' => array('Person', 'Gender', 'PersonGender', 'person', 'gender'),
        'people.person.religion' => array('Person', 'Religion', 'PersonReligion', 'person', 'religion'),
        'people.person.places_lived' => array('Person', 'PlacesLived', 'PersonPlacesLived', 'person', 'places_lived'),
        'film.film.starring' => array('Film', 'Starring', 'FilmStarring', 'film', 'starring'),
        'film.film.production_companies' => array('Film', 'ProdCompany', 'FilmCompany', 'film', 'company'),
        'tv.tv_program.seasons' => array('Tv', 'Season', 'TvSeason', 'tv', 'season'),
        'tv.tv_program.original_network' => array('Tv', 'Network', 'TvNetwork', 'tv', 'network'),
        'tv.tv_program.genre' => array('Tv', 'ProgGenre', 'TvProgGenre', 'tv', 'prog_genre'),
        'cvg.computer_videogame.versions' => array('Game', 'Version', 'GameVersion', 'game', 'version'),
        'cvg.computer_videogame.cvg_genre' => array('Game', 'CvgGenre', 'GameGenre', 'game', 'genre'),
        'cvg.computer_videogame.prequel' => array('Game', 'CvgPrequel', 'GamePrequel', 'game', 'prequel'),
        'music.album.artist' => array('Album', 'Artist', 'AlbumArtist', 'album', 'artist'),
        'book.written_work.author' => array('Book', 'Author', 'BookAuthor', 'book', 'author'),
        'book.written_work.subjects' => array('Book', 'Subject', 'BookSubject', 'book', 'subject'),
        'book.book.characters' => array('Book', 'Character', 'BookCharacter', 'book', 'character_'),
    );
    public static $arr_count = array(
        'people.person.profession' => 0,
        'people.person.spouse_s..people.marriage.spouse' => 0,
        'people.person.children' => 0,
        'people.person.parents' => 0,
        'people.person.nationality' => 0,
        'people.person.education' => 0,
        'people.person.quotations' => 0,
        'people.person.employment_history' => 0,
        'people.person.place_of_birth' => 0,
        'people.person.ethnicity' => 0,
        'people.person.sibling_s' => 0,
        'people.person.gender' => 0,
        'people.person.religion' => 0,
        'people.person.places_lived' => 0,
        'people.deceased_person' => 0,
        'film.film.starring' => 0,
        'film.film.production_companies' => 0,
        'tv.tv_program.seasons' => 0,
        'tv.tv_program.original_network' => 0,
        'tv.tv_program.genre' => 0,
        'cvg.computer_videogame.versions' => 0,
        'cvg.computer_videogame.cvg_genre' => 0,
        'cvg.computer_videogame.prequel' => 0,
        'music.album.artist' => 0,
        'book.written_work.author' => 0,
        'book.written_work.subjects' => 0,
        'book.book.characters' => 0,
    );
    public static $entities = array(
//        'Album' => array(0, 0, 0, 0),
//        'Alias' => array(0, 0, 0, 0),
//        'Artist' => array(0, 0, 0, 0),
//       'Author' => array(0, 0, 1, 0),
        'Book' => array(0, 0, 1, 1),
//        'Character' => array(0, 0, 1, 0),
//        'Children' => array(0, 0, 1, 1),
//        'Education' => array(0, 0, 0, 0),
//        'Employment' => array(0, 0, 0, 0),
//        'Ethnicity' => array(0, 0, 0, 0),
//        'Film' => array(0, 0, 0, 0),
//        'Game' => array(0, 0, 0, 0),
//        'Gender' => array(0, 0, 0, 0),
//        'Nationality' => array(0, 0, 1, 0),
//        'Network' => array(0, 0, 1, 0),
//        'Parentt' => array(0, 0, 0, 0),
//        'Person' => array(0, 0, 0, 0),
//        'PlaceOfBirth' => array(0, 0, 0, 0),
//        'PlacesLived' => array(0, 0, 1, 0),
//        'ProdCompany' => array(0, 0, 0, 0),
//        'Profession' => array(0, 0, 0, 0),
//        'Quotation' => array(0, 0, 0, 0),
//        'Religion' => array(0, 0, 0, 0),
//        'Season' => array(0, 0, 1, 0),
//        'Sibling' => array(0, 0, 1, 1),
//        'Spouse' => array(0, 0, 1, 1),
//        'Starring' => array(0, 0, 0, 0),
//        'Subject' => array(0, 0, 1, 0),
//        'Tv' => array(0, 0, 1, 1),
//        'Version' => array(0, 0, 0, 0)
    );
    public static $midbag;
    public static $midbagIndv;

    public function actionTest() {
        self::initialMIdBag();
        //var_dump(self::$midbag);
        echo count(self::$midbag);
    }

    public function actionUpdateNamesAll($file) {
        ini_set('memory_limit', '-1');
        $data = file_get_contents($file); //read the file
        $lines = explode("\n", $data); //create array separate by new line
        echo "initialize mbag...\n";
        self::initialMIdBag();
        echo "initialize mbag done!\n";
        echo "Files#:" . count($lines) . "\n";
        for ($i = 0; $i < count($lines); $i++) {
            $this->actionUpdateNames(trim($lines[$i]));
        }
    }

    public function actionUpdateNames($file) {
        ini_set('memory_limit', '-1');
        $filePathIn = $file;

        echo "start reading file... [" . $filePathIn . "]\n";
        $data = file_get_contents($filePathIn); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";

        $lineCount = 0;
        $relatedCount = 0;
        $numberOfInsert = 0;
        $allNumberOfInsert = 0;

        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "unrelated#:" . ($lineCount - $relatedCount) . "\n";
                echo "updates#:" . $numberOfInsert . "\n";
                echo "allUpdates#:" . $allNumberOfInsert . "\n";
                $numberOfInsert = 0;
                print_r(self::$entities);
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
                        $this->setObjectName($subject, substr(substr($object, 1), 0, -4));
                        $relatedCount++;
                        $numberOfInsert++;
                        $allNumberOfInsert++;
                    }
                }
            }
            if ($relname == "common.topic.description") {
                if (substr($object, -3) == "@en") {
                    if (isset(self::$midbag[$subject])) {
                        $this->setObjectDescription($subject, substr(substr($object, 1), 0, -4));
                        $relatedCount++;
                        $numberOfInsert++;
                        $allNumberOfInsert++;
                    }
                }
            }
            $lineCount++;
        }
        echo "updating done! [" . $filePathIn . "][Inserts#:" . $allNumberOfInsert . "]\n";
        unset($data);
    }

    public function actionRead($file) {
        ini_set('memory_limit', '-1');
        $filePathIn = $file;

        $data = file_get_contents($filePathIn); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo count($convert);
        $c = 0;
        for ($i = 0; $i < count($convert); $i++) {
            $c++;
            //echo $convert[$i] . ', '; //write value by index
        }
        echo $c;
    }

    public function actionConvertAll($file) {
        ini_set('memory_limit', '-1');
        $data = file_get_contents($file); //read the file
        $lines = explode("\n", $data); //create array separate by new line
        echo "initialize mbag...\n";
        self::initialMIdBagIndv();
        echo "initialize mbag done!\n";
        echo "Files#:" . count($lines) . "\n";
        for ($i = 0; $i < count($lines); $i++) {
            $this->actionConvert(trim($lines[$i]));
        }
    }

    public function actionConvert($file) {
        ini_set('memory_limit', '-1');
        $filePathIn = $file;
        //$filePathIn = 'C:\Users\Aale\Dropbox\Development\htdocs\freebase\data\4.txt';
        echo "start reading file... [" . $filePathIn . "]\n";
        $data = file_get_contents($filePathIn); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        echo "lines#:" . count($convert) . "\n";
        echo "file read done!\n";
        $lineCount = 0;
        $unrelatedCount = 0;
        $numberOfInsert = 0;
        $allNumberOfInsert = 0;
        for ($i = 0; $i < count($convert); $i++) {
            if ($lineCount % 100000 == 0) {
                echo "line#:" . $lineCount . "\n";
                echo "unrelated#:" . $unrelatedCount . "\n";
                echo "Inserts#:" . $numberOfInsert . "\n";
                echo "allInserts#:" . $allNumberOfInsert . "\n";
                $numberOfInsert = 0;
                print_r(self::$arr_count);
            }
            $split = explode("\t", $convert[$i]);
            if (count($split) != 3) {
                echo "Error in Parsing Line###" . trim($convert[$i]) . "\n";
                continue;
            }
            $relname = substr(trim($split[1]), 3);

            if (isset(self::$arr[$relname])) {
                self::generateDbObjs(substr(trim($split[0]), 3), substr(substr(trim($split[2]), 3), 0, -1), self::$arr[$relname][0], self::$arr[$relname][1], self::$arr[$relname][2], self::$arr[$relname][3], self::$arr[$relname][4]);
                self::$arr_count[$relname]++;
                $numberOfInsert++;
                $allNumberOfInsert++;
            } else {
                $unrelatedCount++;
            }
            $lineCount++;
        }
        echo "extraction done! [" . $filePathIn . "][Inserts#:" . $allNumberOfInsert . "]\n";
        unset($data);
    }

    public function setObjectName($mid, $nameVal) {
        foreach (self::$midbag[$mid] as $type) {
            if (self::$entities[$type][2] == 1) {
                $obj = $type::model()->find('fbid=:fbid', array(':fbid' => $mid));
                $obj->name = $nameVal;
                if (!$obj->save()) {
                    print_r($obj->getErrors());
                }
                self::$entities[$type][0]++;
            }
        }
    }

    public function setObjectDescription($mid, $descVal) {
        foreach (self::$midbag[$mid] as $type) {
            if (self::$entities[$type][3] == 1) {
                $obj = $type::model()->find('fbid=:fbid', array(':fbid' => $mid));
                $obj->description = $descVal;
                if (!$obj->save()) {
                    print_r($obj->getErrors());
                }
                self::$entities[$type][1]++;
            }
        }
    }

    public static function initialMIdBag() {
        foreach (self::$entities as $key => $value) {
            $objs = $key::model()->findAll(array(
                'select' => 'fbid'));
            foreach ($objs as $obj) {
                self::$midbag[$obj->fbid][] = $key;
            }
        }
    }

    public static function initialMIdBagIndv() {
        foreach (self::$entities as $type => $value) {
            $objs = $type::model()->findAll(array(
                'select' => 'fbid'));
            foreach ($objs as $obj) {
                self::$midbagIndv[$type][$obj->fbid] = $obj->id;
            }
        }
    }

    public static function addtoMidBagIndv($type, $fbid, $id) {
        self::$midbagIndv[$type][$fbid] = $id;
    }

    public static function generateDbObjs($fbid1, $fbid2, $type1, $type2, $typeRel, $attr1, $attr2) {
        // echo $fbid1 . ' ' . $fbid2 . ' ' . $type1 . ' ' . $type2 . ' ' . $typeRel . ' ' . $attr1 . ' ' . $attr2 . "\n";
        //$obj1 = $type1::model()->find('fbid=:fbid', array(':fbid' => $fbid1));
        if (!isset(self::$midbagIndv[$type1][$fbid1])) {
            $obj1 = new $type1();
            $obj1->fbid = $fbid1;
            if (!$obj1->save()) {
                print_r($obj1->getErrors());
            } else {
                self::addtoMidBagIndv($type1, $fbid1, $obj1->id);
            }
        }
        //$obj2 = $type2::model()->find('fbid=:fbid', array(':fbid' => $fbid2));
        if (!isset(self::$midbagIndv[$type2][$fbid2])) {
            $obj2 = new $type2();
            $obj2->fbid = $fbid2;
            if (!$obj2->save()) {
                print_r($obj2->getErrors());
            } else {
                self::addtoMidBagIndv($type2, $fbid2, $obj2->id);
            }
        }
        $obj = new $typeRel();
        $obj->$attr1 = self::$midbagIndv[$type1][$fbid1];
        $obj->$attr2 = self::$midbagIndv[$type2][$fbid2];
        if (!$obj->save()) {
            print_r($obj->getErrors());
        }
    }

}

?>
