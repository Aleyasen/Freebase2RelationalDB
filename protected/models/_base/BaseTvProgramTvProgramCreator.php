<?php

/**
 * This is the model base class for the table "tbl_tv_program_tv_program_creator".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TvProgramTvProgramCreator".
 *
 * Columns in table "tbl_tv_program_tv_program_creator" available as properties of the model,
 * followed by relations of table "tbl_tv_program_tv_program_creator" available as properties of the model.
 *
 * @property string $id
 * @property string $tv_program
 * @property string $tv_program_creator
 *
 * @property TvProgram $tvProgram
 * @property TvProgramCreator $tvProgramCreator
 */
abstract class BaseTvProgramTvProgramCreator extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_tv_program_tv_program_creator';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TvProgramTvProgramCreator|TvProgramTvProgramCreators', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('tv_program, tv_program_creator', 'required'),
			array('tv_program, tv_program_creator', 'length', 'max'=>20),
			array('id, tv_program, tv_program_creator', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tvProgram' => array(self::BELONGS_TO, 'TvProgram', 'tv_program'),
			'tvProgramCreator' => array(self::BELONGS_TO, 'TvProgramCreator', 'tv_program_creator'),
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
			'tv_program_creator' => null,
			'tvProgram' => null,
			'tvProgramCreator' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('tv_program', $this->tv_program);
		$criteria->compare('tv_program_creator', $this->tv_program_creator);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}