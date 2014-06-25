<?php
/* @var $this Dashboard_linkController */
/* @var $data LinkDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_link')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_link), array('view', 'id'=>$data->id_link)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_link')); ?>:</b>
	<?php echo CHtml::encode($data->url_link); ?>
	<br />


</div>