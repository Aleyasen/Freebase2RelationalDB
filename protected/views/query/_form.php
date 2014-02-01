<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'query-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'wiki_id'); ?>
		<?php echo $form->textField($model, 'wiki_id', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'wiki_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'entity_id'); ?>
		<?php echo $form->textField($model, 'entity_id', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'entity_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'frequency'); ?>
		<?php echo $form->textField($model, 'frequency'); ?>
		<?php echo $form->error($model,'frequency'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textField($model, 'text', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'attributes_count'); ?>
		<?php echo $form->textField($model, 'attributes_count'); ?>
		<?php echo $form->error($model,'attributes_count'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'semantic_type'); ?>
		<?php echo $form->textField($model, 'semantic_type', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'semantic_type'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fbid'); ?>
		<?php echo $form->textField($model, 'fbid', array('maxlength' => 63)); ?>
		<?php echo $form->error($model,'fbid'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('statements')); ?></label>
		<?php echo $form->checkBoxList($model, 'statements', GxHtml::encodeEx(GxHtml::listDataEx(Statement::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->