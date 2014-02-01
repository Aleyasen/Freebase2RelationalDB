<?php

/**
 * This is the model base class for the table "tbl_book_author".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "BookAuthor".
 *
 * Columns in table "tbl_book_author" available as properties of the model,
 * followed by relations of table "tbl_book_author" available as properties of the model.
 *
 * @property string $id
 * @property string $book
 * @property string $author
 *
 * @property Author $author0
 * @property Book $book0
 */
abstract class BaseBookAuthor extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_book_author';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'BookAuthor|BookAuthors', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('book, author', 'required'),
			array('book, author', 'length', 'max'=>20),
			array('id, book, author', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'author0' => array(self::BELONGS_TO, 'Author', 'author'),
			'book0' => array(self::BELONGS_TO, 'Book', 'book'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'book' => null,
			'author' => null,
			'author0' => null,
			'book0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('book', $this->book);
		$criteria->compare('author', $this->author);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}