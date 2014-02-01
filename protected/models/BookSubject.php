<?php

Yii::import('application.models._base.BaseBookSubject');

class BookSubject extends BaseBookSubject
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}