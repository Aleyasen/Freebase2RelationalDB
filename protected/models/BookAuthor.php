<?php

Yii::import('application.models._base.BaseBookAuthor');

class BookAuthor extends BaseBookAuthor
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}