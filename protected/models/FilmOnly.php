<?php

Yii::import('application.models._base.BaseFilmOnly');

class FilmOnly extends BaseFilmOnly
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}