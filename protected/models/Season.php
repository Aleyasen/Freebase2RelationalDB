<?php

Yii::import('application.models._base.BaseSeason');

class Season extends BaseSeason
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}