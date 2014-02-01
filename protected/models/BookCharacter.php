<?php

Yii::import('application.models._base.BaseBookCharacter');

class BookCharacter extends BaseBookCharacter
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}