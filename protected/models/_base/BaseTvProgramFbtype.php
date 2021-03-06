<?php

/**
 * This is the model base class for the table "tbl_tv_program_fbtype".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TvProgramFbtype".
 *
 * Columns in table "tbl_tv_program_fbtype" available as properties of the model,
 * followed by relations of table "tbl_tv_program_fbtype" available as properties of the model.
 *
 * @property string $id
 * @property string $tv_program
 * @property string $fbtype
 *
 * @property TvProgram $tvProgram
 * @property Fbtype $fbtype0
 */
abstract class BaseTvProgramFbtype extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_tv_program_fbtype';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TvProgramFbtype|TvProgramFbtypes', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('tv_program, fbtype', 'required'),
			array('tv_program, fbtype', 'length', 'max'=>20),
			array('id, tv_program, fbtype', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tvProgram' => array(self::BELONGS_TO, 'TvProgram', 'tv_program'),
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
			'tv_program' => null,
			'fbtype' => null,
			'tvProgram' => null,
			'fbtype0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('tv_program', $this->tv_program);
		$criteria->compare('fbtype', $this->fbtype);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}