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
		<?php echo $form->label($model, 'wiki_id'); ?>
		<?php echo $form->textField($model, 'wiki_id', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'entity_id'); ?>
		<?php echo $form->textField($model, 'entity_id', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'frequency'); ?>
		<?php echo $form->textField($model, 'frequency'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'text'); ?>
		<?php echo $form->textField($model, 'text', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'attributes_count'); ?>
		<?php echo $form->textField($model, 'attributes_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'semantic_type'); ?>
		<?php echo $form->textField($model, 'semantic_type', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fbid'); ?>
		<?php echo $form->textField($model, 'fbid', array('maxlength' => 63)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
