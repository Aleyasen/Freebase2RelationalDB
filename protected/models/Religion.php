<?php

Yii::import('application.models._base.BaseReligion');

class Religion extends BaseReligion
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}