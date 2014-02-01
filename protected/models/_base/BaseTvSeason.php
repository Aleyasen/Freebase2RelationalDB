<?php

/**
 * This is the model base class for the table "tbl_tv_season".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TvSeason".
 *
 * Columns in table "tbl_tv_season" available as properties of the model,
 * followed by relations of table "tbl_tv_season" available as properties of the model.
 *
 * @property string $id
 * @property string $tv
 * @property string $season
 *
 * @property Tv $tv0
 * @property Season $season0
 */
abstract class BaseTvSeason extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_tv_season';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TvSeason|TvSeasons', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('tv, season', 'required'),
			array('tv, season', 'length', 'max'=>20),
			array('id, tv, season', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tv0' => array(self::BELONGS_TO, 'Tv', 'tv'),
			'season0' => array(self::BELONGS_TO, 'Season', 'season'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'tv' => null,
			'season' => null,
			'tv0' => null,
			'season0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('tv', $this->tv);
		$criteria->compare('season', $this->season);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}