<?php

Yii::import('application.models._base.BaseStatement');

class Statement extends BaseStatement
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}