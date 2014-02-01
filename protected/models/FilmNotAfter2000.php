<?php

Yii::import('application.models._base.BaseFilmNotAfter2000');

class FilmNotAfter2000 extends BaseFilmNotAfter2000
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}