<?php

Yii::import('application.models._base.BaseGameGenre');

class GameGenre extends BaseGameGenre
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}