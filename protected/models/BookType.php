<?php

Yii::import('application.models._base.BaseBookType');

class BookType extends BaseBookType
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}