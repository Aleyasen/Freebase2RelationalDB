<?php

Yii::import('application.models._base.BaseQuotation');

class Quotation extends BaseQuotation
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}