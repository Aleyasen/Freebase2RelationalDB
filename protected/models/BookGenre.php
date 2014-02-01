<?php

Yii::import('application.models._base.BaseBookGenre');

class BookGenre extends BaseBookGenre
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}