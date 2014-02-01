<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('attribute')); ?>:
	<?php echo GxHtml::encode($data->attribute); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('value')); ?>:
	<?php echo GxHtml::encode($data->value); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('query')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->query0)); ?>
	<br />

</div>