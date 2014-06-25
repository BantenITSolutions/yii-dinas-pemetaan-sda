<?php
/* @var $this Cms_statistik_headerController */
/* @var $data HeaderStatistik */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_header_statistik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_header_statistik), array('view', 'id'=>$data->id_header_statistik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jalur')); ?>:</b>
	<?php echo CHtml::encode($data->jalur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tampil')); ?>:</b>
	<?php echo CHtml::encode($data->tampil); ?>
	<br />


</div>