<?php

/**
 * This is the model base class for the table "tbl_tv_program_union_film_and_tv_program".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TvProgramUnionFilmAndTvProgram".
 *
 * Columns in table "tbl_tv_program_union_film_and_tv_program" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $fbid
 * @property string $type
 *
 */
abstract class BaseTvProgramUnionFilmAndTvProgram extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_tv_program_union_film_and_tv_program';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TvProgramUnionFilmAndTvProgram|TvProgramUnionFilmAndTvPrograms', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('id', 'length', 'max'=>20),
			array('fbid', 'length', 'max'=>63),
			array('type', 'length', 'max'=>45),
			array('name, description', 'safe'),
			array('id, name, description, fbid, type', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, description, fbid, type', 'safe', 'on'=>'search'),
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
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
			'fbid' => Yii::t('app', 'Fbid'),
			'type' => Yii::t('app', 'Type'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('fbid', $this->fbid, true);
		$criteria->compare('type', $this->type, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}