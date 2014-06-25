<?php
/* @var $this Cms_link_internalController */
/* @var $data LinkInternal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_link_internal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_link_internal), array('view', 'id'=>$data->id_link_internal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_link')); ?>:</b>
	<?php echo CHtml::encode($data->judul_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_link')); ?>:</b>
	<?php echo CHtml::encode($data->url_link); ?>
	<br />


</div>