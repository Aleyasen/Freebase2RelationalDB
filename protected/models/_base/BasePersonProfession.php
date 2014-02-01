<?php

/**
 * This is the model base class for the table "tbl_person_profession".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PersonProfession".
 *
 * Columns in table "tbl_person_profession" available as properties of the model,
 * followed by relations of table "tbl_person_profession" available as properties of the model.
 *
 * @property string $id
 * @property string $person
 * @property string $profession
 *
 * @property Person $person0
 * @property Profession $profession0
 */
abstract class BasePersonProfession extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_person_profession';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'PersonProfession|PersonProfessions', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('person, profession', 'required'),
			array('person, profession', 'length', 'max'=>20),
			array('id, person, profession', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'person0' => array(self::BELONGS_TO, 'Person', 'person'),
			'profession0' => array(self::BELONGS_TO, 'Profession', 'profession'),
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
			'profession' => null,
			'person0' => null,
			'profession0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('person', $this->person);
		$criteria->compare('profession', $this->profession);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}