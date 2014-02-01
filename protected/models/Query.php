<?php

Yii::import('application.models._base.BaseQuery');

class Query extends BaseQuery
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}