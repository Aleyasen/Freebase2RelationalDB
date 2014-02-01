<?php

/**
 * This is the model base class for the table "tbl_film_film_genre".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "FilmFilmGenre".
 *
 * Columns in table "tbl_film_film_genre" available as properties of the model,
 * followed by relations of table "tbl_film_film_genre" available as properties of the model.
 *
 * @property string $id
 * @property string $film
 * @property string $genre
 *
 * @property FilmGenre $genre0
 * @property Film $film0
 */
abstract class BaseFilmFilmGenre extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_film_film_genre';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'FilmFilmGenre|FilmFilmGenres', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('film, genre', 'required'),
			array('film, genre', 'length', 'max'=>20),
			array('id, film, genre', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'genre0' => array(self::BELONGS_TO, 'FilmGenre', 'genre'),
			'film0' => array(self::BELONGS_TO, 'Film', 'film'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'film' => null,
			'genre' => null,
			'genre0' => null,
			'film0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('film', $this->film);
		$criteria->compare('genre', $this->genre);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}