<?php

Yii::import('application.models._base.BaseCelebrity');

class Celebrity extends BaseCelebrity
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}