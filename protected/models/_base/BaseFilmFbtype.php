<?php

/**
 * This is the model base class for the table "tbl_film_fbtype".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "FilmFbtype".
 *
 * Columns in table "tbl_film_fbtype" available as properties of the model,
 * followed by relations of table "tbl_film_fbtype" available as properties of the model.
 *
 * @property string $id
 * @property string $film
 * @property string $fbtype
 *
 * @property Film $film0
 * @property Fbtype $fbtype0
 */
abstract class BaseFilmFbtype extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_film_fbtype';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'FilmFbtype|FilmFbtypes', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('film, fbtype', 'required'),
			array('film, fbtype', 'length', 'max'=>20),
			array('id, film, fbtype', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'film0' => array(self::BELONGS_TO, 'Film', 'film'),
			'fbtype0' => array(self::BELONGS_TO, 'Fbtype', 'fbtype'),
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
			'fbtype' => null,
			'film0' => null,
			'fbtype0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('film', $this->film);
		$criteria->compare('fbtype', $this->fbtype);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}