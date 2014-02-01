<?php

Yii::import('application.models._base.BaseFilm');

class Film extends BaseFilm
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}