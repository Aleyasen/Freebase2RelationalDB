<?php

/**
 * This is the model base class for the table "tbl_tv_program_tv_writer".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TvProgramTvWriter".
 *
 * Columns in table "tbl_tv_program_tv_writer" available as properties of the model,
 * followed by relations of table "tbl_tv_program_tv_writer" available as properties of the model.
 *
 * @property string $id
 * @property string $tv_program
 * @property string $tv_writer
 *
 * @property TvProgram $tvProgram
 * @property TvWriter $tvWriter
 */
abstract class BaseTvProgramTvWriter extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_tv_program_tv_writer';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TvProgramTvWriter|TvProgramTvWriters', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('tv_program, tv_writer', 'required'),
			array('tv_program, tv_writer', 'length', 'max'=>20),
			array('id, tv_program, tv_writer', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tvProgram' => array(self::BELONGS_TO, 'TvProgram', 'tv_program'),
			'tvWriter' => array(self::BELONGS_TO, 'TvWriter', 'tv_writer'),
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
			'tv_writer' => null,
			'tvProgram' => null,
			'tvWriter' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('tv_program', $this->tv_program);
		$criteria->compare('tv_writer', $this->tv_writer);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}