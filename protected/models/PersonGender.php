<?php

Yii::import('application.models._base.BasePersonGender');

class PersonGender extends BasePersonGender
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}