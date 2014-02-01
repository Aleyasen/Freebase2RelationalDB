<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'attribute'); ?>
		<?php echo $form->textField($model, 'attribute', array('maxlength' => 127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'value'); ?>
		<?php echo $form->textField($model, 'value', array('maxlength' => 127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'query'); ?>
		<?php echo $form->dropDownList($model, 'query', GxHtml::listDataEx(Query::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
