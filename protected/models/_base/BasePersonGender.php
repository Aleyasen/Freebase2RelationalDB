<?php

/**
 * This is the model base class for the table "tbl_person_gender".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PersonGender".
 *
 * Columns in table "tbl_person_gender" available as properties of the model,
 * followed by relations of table "tbl_person_gender" available as properties of the model.
 *
 * @property string $id
 * @property string $person
 * @property string $gender
 *
 * @property Person $person0
 * @property Gender $gender0
 */
abstract class BasePersonGender extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_person_gender';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PersonGender|PersonGenders', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('person, gender', 'required'),
			array('person, gender', 'length', 'max'=>20),
			array('id, person, gender', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'person0' => array(self::BELONGS_TO, 'Person', 'person'),
			'gender0' => array(self::BELONGS_TO, 'Gender', 'gender'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'person' => null,
			'gender' => null,
			'person0' => null,
			'gender0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('person', $this->person);
		$criteria->compare('gender', $this->gender);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}