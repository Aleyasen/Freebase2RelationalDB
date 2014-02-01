<?php

Yii::import('application.models._base.BaseCharacter');

class Character extends BaseCharacter
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}