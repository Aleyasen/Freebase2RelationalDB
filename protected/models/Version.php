<?php

Yii::import('application.models._base.BaseVersion');

class Version extends BaseVersion
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}