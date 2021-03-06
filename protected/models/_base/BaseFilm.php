<?php

/**
 * This is the model base class for the table "tbl_film".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Film".
 *
 * Columns in table "tbl_film" available as properties of the model,
 * followed by relations of table "tbl_film" available as properties of the model.
 *
 * @property string $id
 * @property string $wikiid
 * @property string $guid
 * @property string $fbid
 * @property string $name
 * @property string $description
 * @property string $initial_release_date
 * @property string $type
 *
 * @property FilmFbtype[] $filmFbtypes
 * @property FilmFilmGenre[] $filmFilmGenres
 */
abstract class BaseFilm extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_film';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Film|Films', $n);
	}

	public static function representingColumn() {
		return 'wikiid';
	}

	public function rules() {
		return array(
			array('wikiid', 'length', 'max'=>127),
			array('guid, fbid', 'length', 'max'=>63),
			array('initial_release_date', 'length', 'max'=>100),
			array('type', 'length', 'max'=>45),
			array('name, description', 'safe'),
			array('wikiid, guid, fbid, name, description, initial_release_date, type', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, wikiid, guid, fbid, name, description, initial_release_date, type', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'filmFbtypes' => array(self::HAS_MANY, 'FilmFbtype', 'film'),
			'filmFilmGenres' => array(self::HAS_MANY, 'FilmFilmGenre', 'film'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'wikiid' => Yii::t('app', 'Wikiid'),
			'guid' => Yii::t('app', 'Guid'),
			'fbid' => Yii::t('app', 'Fbid'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
			'initial_release_date' => Yii::t('app', 'Initial Release Date'),
			'type' => Yii::t('app', 'Type'),
			'filmFbtypes' => null,
			'filmFilmGenres' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('wikiid', $this->wikiid, true);
		$criteria->compare('guid', $this->guid, true);
		$criteria->compare('fbid', $this->fbid, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('initial_release_date', $this->initial_release_date, true);
		$criteria->compare('type', $this->type, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}