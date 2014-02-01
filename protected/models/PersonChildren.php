<?php

Yii::import('application.models._base.BasePersonChildren');

class PersonChildren extends BasePersonChildren
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}