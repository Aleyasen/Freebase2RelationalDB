<?php

Yii::import('application.models._base.BasePersonParent');

class PersonParent extends BasePersonParent
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}