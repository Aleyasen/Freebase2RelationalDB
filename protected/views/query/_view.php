<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('wiki_id')); ?>:
	<?php echo GxHtml::encode($data->wiki_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('entity_id')); ?>:
	<?php echo GxHtml::encode($data->entity_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('frequency')); ?>:
	<?php echo GxHtml::encode($data->frequency); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('text')); ?>:
	<?php echo GxHtml::encode($data->text); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('attributes_count')); ?>:
	<?php echo GxHtml::encode($data->attributes_count); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('semantic_type')); ?>:
	<?php echo GxHtml::encode($data->semantic_type); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fbid')); ?>:
	<?php echo GxHtml::encode($data->fbid); ?>
	<br />
	*/ ?>

</div>