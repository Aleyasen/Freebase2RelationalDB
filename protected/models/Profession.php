<?php

Yii::import('application.models._base.BaseProfession');

class Profession extends BaseProfession
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}