<?php

/**
 * This is the model base class for the table "tbl_film_tv_program_for_kids".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "FilmTvProgramForKids".
 *
 * Columns in table "tbl_film_tv_program_for_kids" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $fbid
 * @property string $name
 * @property string $description
 * @property string $type
 *
 */
abstract class BaseFilmTvProgramForKids extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_film_tv_program_for_kids';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'FilmTvProgramForKids|FilmTvProgramForKids', $n);
	}

	public static function representingColumn() {
		return 'fbid';
	}

	public function rules() {
		return array(
			array('id', 'length', 'max'=>20),
			array('fbid', 'length', 'max'=>63),
			array('type', 'length', 'max'=>45),
			array('name, description', 'safe'),
			array('id, fbid, name, description, type', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, fbid, name, description, type', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'fbid' => Yii::t('app', 'Fbid'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
			'type' => Yii::t('app', 'Type'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('fbid', $this->fbid, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('type', $this->type, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}