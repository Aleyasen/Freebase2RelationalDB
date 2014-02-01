<?php

Yii::import('application.models._base.BaseGender');

class Gender extends BaseGender
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}