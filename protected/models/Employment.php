<?php

Yii::import('application.models._base.BaseEmployment');

class Employment extends BaseEmployment
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}