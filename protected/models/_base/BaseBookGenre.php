<?php

/**
 * This is the model base class for the table "tbl_book_genre".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "BookGenre".
 *
 * Columns in table "tbl_book_genre" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $wikiid
 * @property string $guid
 * @property string $fbid
 * @property string $name
 * @property string $description
 *
 */
abstract class BaseBookGenre extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_book_genre';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'BookGenre|BookGenres', $n);
	}

	public static function representingColumn() {
		return 'wikiid';
	}

	public function rules() {
		return array(
			array('wikiid', 'length', 'max'=>127),
			array('guid, fbid', 'length', 'max'=>63),
			array('name, description', 'safe'),
			array('wikiid, guid, fbid, name, description', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, wikiid, guid, fbid, name, description', 'safe', 'on'=>'search'),
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
			'wikiid' => Yii::t('app', 'Wikiid'),
			'guid' => Yii::t('app', 'Guid'),
			'fbid' => Yii::t('app', 'Fbid'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('wikiid', $this->wikiid, true);
		$criteria->compare('guid', $this->guid, true);
		$criteria->compare('fbid', $this->fbid, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}