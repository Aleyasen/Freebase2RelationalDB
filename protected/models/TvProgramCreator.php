<?php

Yii::import('application.models._base.BaseTvProgramCreator');

class TvProgramCreator extends BaseTvProgramCreator
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}