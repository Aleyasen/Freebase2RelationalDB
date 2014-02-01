<?php

Yii::import('application.models._base.BaseAlbum');

class Album extends BaseAlbum
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}