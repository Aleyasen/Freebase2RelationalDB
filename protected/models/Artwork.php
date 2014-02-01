<?php

Yii::import('application.models._base.BaseArtwork');

class Artwork extends BaseArtwork
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}