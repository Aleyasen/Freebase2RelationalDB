<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'statement-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'attribute'); ?>
		<?php echo $form->textField($model, 'attribute', array('maxlength' => 127)); ?>
		<?php echo $form->error($model,'attribute'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model, 'value', array('maxlength' => 127)); ?>
		<?php echo $form->error($model,'value'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'query'); ?>
		<?php echo $form->dropDownList($model, 'query', GxHtml::listDataEx(Query::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'query'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->